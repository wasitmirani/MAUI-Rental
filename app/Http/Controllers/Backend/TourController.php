<?php

namespace App\Http\Controllers\Backend;

use App\Models\Tour;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TourController extends Controller
{

    public function getTours(){

        $tutors = Tour::all();
        return response()->json(['tutors'=>$tutors]);
    }

    public function store(Request $request){

        $name = !empty($request->name) ? $request->name : config('app.name');
        if ($request->hasfile('file')) {
            $name = Str::slug($name, '-')  . "-" . time() . '.' . $request->file->extension();

            $request->file->move(public_path("/admin/img/packages/"), $name);
        }

        $create = Tour::create([
            'name' => $request->name,
            'description' => $request->decription,
            'thumbnail' => $name

        ]);

        if($create){
            return response()->json('Tour Created Successfully');
        }else{
            return response()->json('Failed To Add Record');
        }

    }


    public function delete($id){

        $tour = Tour::where('id',$id)->first();
        $deleted = $tour->delete();

        if($deleted){
            return response()->json('Record Deleted Successfully');
        }else{
            return response()->json('Fialed To Delete Record');
        }



    }


    public function update(Request $request,$id){


       

     $tour = Tour::where('id',$id)->first();

     $name = !empty($request->name) ? $request->name : config('app.name');
     if ($request->hasfile('file')) {
         $name = Str::slug($name, '-')  . "-" . time() . '.' . $request->file->extension();

         $request->file->move(public_path("/admin/img/packages/"), $name);
     }

     $tour->name = $request->name;
     $tour->description = $request->description;
     $tour->thumbnail = $name;

     $updated = $tour->save();
     if($updated){

        return response()->json('Record Updated');

     }else{
         return response()->json('Failed To Update Record');
     }



    }

}

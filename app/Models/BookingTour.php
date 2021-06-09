<?php

namespace App\Models;

use App\Models\Tour;
use App\Models\User;
use App\Models\Package;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BookingTour extends Model
{
  public function tour(){
      return $this->belongsTo(Tour::class,'tour_id','id');
  }
  public function package(){
    return $this->belongsTo(Package::class,'package_id','id');
}

public function user(){
    return $this->belongsTo(User::class,'user_id','id');
}
}

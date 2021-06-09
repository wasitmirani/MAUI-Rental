@extends('layouts.member.master')


@section('content')
<div>
    <div class="form-head mb-4">
        <h2 class="text-black font-w600 mb-0">Tours</h2>
    </div>
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Tours</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example" class="display min-w850">
                        <thead>
                            <tr>
                                <th class="width80"><strong>#</strong></th>
                                <th><strong>Name</strong></th>
                                <th><strong>Description</strong></th>
                                <th><strong>DATE</strong></th>
                                <th><strong>STATUS</strong></th>
                                <th><strong>PRICE</strong></th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($tours as $tour)
                            <tr>
                                <td><strong>01</strong></td>
                                <td>{{$tour->name}}</td>
                                <td>{{$tour->description}}</td>
                                <td>{{$tour->created_at}}</td>
                                <td><span class="badge light badge-success">{{$tour->name}}</span></td>
                                <td>$21.56</td>

                            </tr>

                            @endforeach




</tbody>
<tfoot>
    <tr>
        <th class="width80"><strong>#</strong></th>
        <th><strong>Name</strong></th>
        <th><strong>Description</strong></th>
        <th><strong>DATE</strong></th>
        <th><strong>STATUS</strong></th>
        <th><strong>PRICE</strong></th>
    </tr>
</tfoot>
</table>
                </div>
            </div>
        </div>
    </div>



</div>
@endsection

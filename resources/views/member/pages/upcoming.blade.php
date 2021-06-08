@extends('layouts.member.master')


@section('content')
<div>
    <div class="form-head mb-4">
        <h2 class="text-black font-w600 mb-0">Upcoming Tours</h2>
    </div>
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Tours</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-responsive-md">
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
                            <tr>
                                <td><strong>01</strong></td>
                                <td>Mr. Bobby</td>
                                <td>Dr. Jackson</td>
                                <td>01 August 2020</td>
                                <td><span class="badge light badge-success">Successful</span></td>
                                <td>$21.56</td>

                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>



</div>


@endsection

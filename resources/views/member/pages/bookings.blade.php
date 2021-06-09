@extends('layouts.member.master')


@section('content')
<div>

    <button type="button" class="btn btn-rounded btn-primary float-right" data-toggle="modal" data-target="#examplenewcard"><span class="btn-icon-left text-primary"><i class="fa fa-plus" aria-hidden="true"></i>
    </span>Book Now</button>
<!-- Modal -->
<div class="modal fade" id="examplenewcard">
<div class="modal-dialog modal-dialog-centered" role="document">
<div class="modal-content">
<div class="modal-header">
    <h5 class="modal-title"></h5>
    <button type="button" class="close" data-dismiss="modal"><span>×</span>
    </button>
</div>
<div class="modal-body">
   <form>
    <div class="form-group">
        <label>Package</label>
        <select class="form-control default-select form-control-lg" tabindex="-98">
            <option>Option 1</option>
            <option>Option 2</option>
            <option>Option 3</option>
        </select>
    </div>
    <div class="form-group">
        <label>Tour</label>
        <select class="form-control default-select form-control-lg" tabindex="-98">
            <option>Option 1</option>
            <option>Option 2</option>
            <option>Option 3</option>
        </select>
    </div>

   </form>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-danger light" data-dismiss="modal">Close</button>
    <button type="button" class="btn btn-primary">Save changes</button>
</div>
</div>
</div>
</div>
</div>
    <div class="form-head mb-4">
        <h2 class="text-black font-w600 mb-0">Bookings</h2>

    </div>
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Your Bookings</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-responsive-md">
                        <thead>
                            <tr>
                                <th class="width80"><strong>#</strong></th>
                                <th><strong>Tour</strong></th>
                                <th><strong>Package</strong></th>
                                <th><strong>DATE</strong></th>
                                <th><strong>STATUS</strong></th>


                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <td><strong>01</strong></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td><span class="badge light badge-success"></span></td>


                            </tr>




                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>



</div>
@endsection

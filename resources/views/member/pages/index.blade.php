@extends('layouts.member.master')


@section('content')
<div>
    <div class="form-head mb-4">
        <h2 class="text-black font-w600 mb-0">Hi {{Auth::user()->name}}</h2>
    </div>
    <div class="container-fluid">
        <div class="d-sm-flex d-block justify-content-between align-items-center mb-4">
            <h2 class="text-black font-w600 mb-sm-0 mb-2">Dashboard</h2>



        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="cards owl-carousel mb-sm-5 mb-3 owl-loaded owl-drag">




                <div class="owl-stage-outer"><div class="owl-stage" style="transition: all 0s ease 0s; width: 5027px; transform: translate3d(-1005px, 0px, 0px);"><div class="owl-item cloned" style="width: 472.667px; margin-right: 30px;"><div class="items">
                        <div class="card-bx mb-0">
                            <img src="images/card/card2.png" alt="">
                            <div class="card-info text-white">
                                <p class="mb-1">Purple Card</p>
                                <h2 class="fs-36 text-white mb-4">$45,662</h2>
                                <div class="d-flex align-items-center justify-content-between mb-5">

                                    <h4 class="fs-20 text-white mb-0">**** **** **** 1234</h4>
                                </div>
                                <div class="d-flex">
                                  <!--  <div class="mr-5">
                                        <p class="fs-14 mb-1 op6">VALID THRU</p>
                                        <span>08/21</span>
                                    </div>-->
                                    <div>
                                        <p class="fs-14 mb-1 op6">CARD HOLDER</p>
                                        <span>Franklin Jr.</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="owl-item cloned" style="width: 472.667px; margin-right: 49px;"><div class="items">
                        <div class="card-bx mb-0">
                            <img src="images/card/card3.png" alt="">
                            <div class="card-info text-white">
                                <p class="mb-1">Green Card</p>
                                <h2 class="fs-36 text-white mb-4">$23,511</h2>
                                <div class="d-flex align-items-center justify-content-between mb-5">

                                    <h4 class="fs-20 text-white mb-0">**** **** **** 1234</h4>
                                </div>
                                <div class="d-flex">
                                    <div class="mr-5">
                                        <p class="fs-14 mb-1 op6">VALID THRU</p>
                                        <span>08/21</span>
                                    </div>
                                    <div>
                                        <p class="fs-14 mb-1 op6">CARD HOLDER</p>
                                        <span>Franklin Jr.</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="owl-item cloned active" style="width: 413.667px; margin-right: 30px;"><div class="items">
                        <div class="card-bx mb-0">
                            <img src="images/card/card4.png" alt="">
                            <div class="card-info text-white">
                                <p class="mb-1">Total Tours</p>
                                <!--<h2 class="fs-36 text-white mb-4">$340</h2>-->
                                <div class="d-flex align-items-center justify-content-between mb-5">

                                   <!-- <h4 class="fs-20 text-white mb-0">**** **** **** 1234</h4>-->
                                </div>
                                <div class="d-flex">
                                   <!-- <div class="mr-5">
                                        <p class="fs-14 mb-1 op6">VALID THRU</p>
                                        <span>08/21</span>
                                    </div>-->
                                    <div>
                                       <!-- <p class="fs-14 mb-1 op6">CARD HOLDER</p>
                                        <span>Franklin Jr.</span>-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="owl-item active center" style="width: 413.667px; margin-right: 30px;"><div class="items">
                        <div class="card-bx mb-0">
                            <img src="images/card/card1.png" alt="">
                            <div class="card-info text-white">
                                <p class="mb-1">Total Bookings</p>
                               <!-- <h2 class="fs-36 text-white mb-4">$340</h2>-->
                                <div class="d-flex align-items-center justify-content-between mb-5">

                                   <!-- <h4 class="fs-20 text-white mb-0">**** **** **** 1234</h4>-->
                                </div>
                                <div class="d-flex">
                                   <!-- <div class="mr-5">
                                        <p class="fs-14 mb-1 op6">VALID THRU</p>
                                        <span>08/21</span>
                                    </div>-->
                                    <div>
                                       <!-- <p class="fs-14 mb-1 op6">CARD HOLDER</p>
                                        <span>Franklin Jr.</span>-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>






                    </div></div></div></div><div class="owl-nav"><div class="owl-prev"></div><div class="owl-next"></div></div><div class="owl-dots disabled"></div></div>
            </div>
            <div class="col-xl-12">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-header d-sm-flex d-block border-0 pb-0">
                                <div>
                                    <h4 class="fs-20 text-black">Upcomimg Tours</h4>

                                </div>

                            </div>
                            <div class="card-body pb-0">
                                <table id="example" class="display min-w850">
                                    <thead>
                                        <tr>
                                            <th>Package Name</th>
                                            <th>Tour Name</th>
                                            <th>Package Price</th>
                                            <th>Booking Date</th>
                                            <th>Start date</th>
                                            <th>End Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Tiger Nixon</td>
                                            <td>System Architect</td>
                                            <td>Edinburgh</td>
                                            <td>61</td>
                                            <td>2011/04/25</td>
                                            <td>$320,800</td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Package Name</th>
                                            <th>Tour Name</th>
                                            <th>Package Price</th>
                                            <th>Booking Date</th>
                                            <th>Start date</th>
                                            <th>End Date</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>


@endsection

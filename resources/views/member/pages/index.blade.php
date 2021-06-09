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
                                <div class="d-flex mb-3 border-bottom justify-content-between flex-wrap align-items-center">
                                    <div class="d-flex pb-3 align-items-center">

                                        <div class="mr-3">
                                            <p class="fs-14 mb-1">Tour Package</p>
                                            <span class="text-black font-w500">Prime</span>
                                        </div>
                                    </div>
                                    <div class="mr-3 pb-3">
                                        <p class="fs-14 mb-1">Bank</p>
                                        <span class="text-black font-w500">ABC Bank</span>
                                    </div>
                                    <div class="mr-3 pb-3">
                                        <p class="fs-14 mb-1">Total Tours</p>
                                        <span class="text-black font-w500">**** **** **** 2256</span>
                                    </div>
                                    <div class="mr-3 pb-3">
                                        <p class="fs-14 mb-1">Namein Card</p>
                                        <span class="text-black font-w500">Franklin Jr.</span>
                                    </div>
                                    <a href="transactions-details.html" class="fs-14 btn-link mr-3 pb-3">See Number</a>
                                    <div class="dropdown pb-3">
                                        <div class="btn-link" role="button" data-toggle="dropdown" aria-expanded="false">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M10 11.9999C10 13.1045 10.8954 13.9999 12 13.9999C13.1046 13.9999 14 13.1045 14 11.9999C14 10.8954 13.1046 9.99994 12 9.99994C10.8954 9.99994 10 10.8954 10 11.9999Z" fill="black"></path>
                                                <path d="M10 4.00006C10 5.10463 10.8954 6.00006 12 6.00006C13.1046 6.00006 14 5.10463 14 4.00006C14 2.89549 13.1046 2.00006 12 2.00006C10.8954 2.00006 10 2.89549 10 4.00006Z" fill="black"></path>
                                                <path d="M10 20C10 21.1046 10.8954 22 12 22C13.1046 22 14 21.1046 14 20C14 18.8954 13.1046 18 12 18C10.8954 18 10 18.8954 10 20Z" fill="black"></path>
                                            </svg>
                                        </div>
                                        <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(24px, 25px, 0px);">
                                            <a class="dropdown-item" href="javascript:void()">Delete</a>
                                            <a class="dropdown-item" href="javascript:void()">Edit</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>


@endsection

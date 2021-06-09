@extends('layouts.member.master')


@section('content')
<div>
    <div class="form-head mb-4">
        <h2 class="text-black font-w600 mb-0">Hi {{Auth::user()->name}}</h2>
    </div>
    <div class="container-fluid">
        <div class="d-sm-flex d-block justify-content-between align-items-center mb-4">
            <h2 class="text-black font-w600 mb-sm-0 mb-2">Dashboard</h2>

            <button type="button" class="btn btn-rounded btn-primary" data-toggle="modal" data-target="#examplenewcard"><span class="btn-icon-left text-primary"><i class="fa fa-plus" aria-hidden="true"></i>
                            </span>New Card</button>
             <!-- Modal -->
            <div class="modal fade" id="examplenewcard">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Modal title</h5>
                            <button type="button" class="close" data-dismiss="modal"><span>×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger light" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
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




                <div class="owl-item cloned" style="width: 413.667px; margin-right: 30px;"><div class="items">
                        <div class="card-bx mb-0">
                            <img src="images/card/card3.png" alt="">
                            <div class="card-info text-white">
                                <p class="mb-1">Total Packages</p>
                                <!--<h2 class="fs-36 text-white mb-4">$23,511</h2>-->
                                <div class="d-flex align-items-center justify-content-between mb-5">
                                    <!--<img src="images/dual-dot.png" alt="" class="dot-img">
                                    <h4 class="fs-20 text-white mb-0">**** **** **** 1234</h4>-->
                                </div>
                                <div class="d-flex">
                                    <div class="mr-5">
                                        <!--<p class="fs-14 mb-1 op6">VALID THRU</p>
                                        <span>08/21</span>-->
                                    </div>
                                    <div>
                                        <!--<p class="fs-14 mb-1 op6">CARD HOLDER</p>
                                        <span>Franklin Jr.</span>-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div></div></div></div><div class="owl-nav"><div class="owl-prev"></div><div class="owl-next"></div></div><div class="owl-dots disabled"></div></div>
            </div>
            <div class="col-xl-9">
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
                                        <img src="images/card/1.jpg" alt="" class="rounded mr-3" width="130">
                                        <div class="mr-3">
                                            <p class="fs-14 mb-1">Tour Package</p>
                                            <span class="text-black font-w500">Prime</span>
                                        </div>
                                    </div>
                                    <div class="mr-3 pb-3">
                                        <p class="fs-14 mb-1">Price</p>
                                        <span class="text-black font-w500">2256</span>
                                    </div>
                                    <div class="mr-3 pb-3">
                                        <p class="fs-14 mb-1">Total Tours</p>
                                        <span class="text-black font-w500">2256</span>
                                    </div>
                                    <div class="mr-3 pb-3">
                                        <p class="fs-14 mb-1">Package Name</p>
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
            <div class="col-xl-3">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-header border-0 pb-0">
                                <div>
                                    <h4 class="fs-20 text-black">Card Statistic</h4>

                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-xl-12 col-sm-6">
                                        <div id="pieChart" style="min-height: 243.967px;"><div id="apexcharts3tjb12prk" class="apexcharts-canvas apexcharts3tjb12prk apexcharts-theme-light" style="width: 287px; height: 243.967px;"><svg id="SvgjsSvg1028" width="287" height="243.9666666666667" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1030" class="apexcharts-inner apexcharts-graphical" transform="translate(36.91666666666666, 0)"><defs id="SvgjsDefs1029"><clipPath id="gridRectMask3tjb12prk"><rect id="SvgjsRect1032" width="219.16666666666669" height="237.16666666666669" x="-2" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="gridRectMarkerMask3tjb12prk"><rect id="SvgjsRect1033" width="219.16666666666669" height="241.16666666666669" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><g id="SvgjsG1034" class="apexcharts-pie"><g id="SvgjsG1035" transform="translate(0, 0) scale(1)"><circle id="SvgjsCircle1036" r="72.59918699186994" cx="107.58333333333334" cy="118.58333333333334" fill="transparent"></circle><g id="SvgjsG1037" class="apexcharts-slices"><g id="SvgjsG1038" class="apexcharts-series apexcharts-pie-series" seriesName="seriesx1" rel="1" data:realIndex="0"><path id="SvgjsPath1039" d="M 107.58333333333334 6.892276422764212 A 111.69105691056913 111.69105691056913 0 0 1 217.98640520015934 135.496461848438 L 179.34533004677024 129.57686686815137 A 72.59918699186994 72.59918699186994 0 0 0 107.58333333333334 45.9841463414634 L 107.58333333333334 6.892276422764212 z" fill="rgba(30,170,231,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-0" index="0" j="0" data:angle="98.70967741935483" data:startAngle="0" data:strokeWidth="0" data:value="34" data:pathOrig="M 107.58333333333334 6.892276422764212 A 111.69105691056913 111.69105691056913 0 0 1 217.98640520015934 135.496461848438 L 179.34533004677024 129.57686686815137 A 72.59918699186994 72.59918699186994 0 0 0 107.58333333333334 45.9841463414634 L 107.58333333333334 6.892276422764212 z"></path></g><g id="SvgjsG1040" class="apexcharts-series apexcharts-pie-series" seriesName="seriesx2" rel="2" data:realIndex="1"><path id="SvgjsPath1041" d="M 217.98640520015934 135.496461848438 A 111.69105691056913 111.69105691056913 0 0 1 188.536205780111 195.5347767013153 L 160.20270042373883 168.60177152252163 A 72.59918699186994 72.59918699186994 0 0 0 179.34533004677024 129.57686686815137 L 217.98640520015934 135.496461848438 z" fill="rgba(100,24,195,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-1" index="0" j="1" data:angle="34.838709677419345" data:startAngle="98.70967741935483" data:strokeWidth="0" data:value="12" data:pathOrig="M 217.98640520015934 135.496461848438 A 111.69105691056913 111.69105691056913 0 0 1 188.536205780111 195.5347767013153 L 160.20270042373883 168.60177152252163 A 72.59918699186994 72.59918699186994 0 0 0 179.34533004677024 129.57686686815137 L 217.98640520015934 135.496461848438 z"></path></g><g id="SvgjsG1042" class="apexcharts-series apexcharts-pie-series" seriesName="seriesx3" rel="3" data:realIndex="2"><path id="SvgjsPath1043" d="M 188.536205780111 195.5347767013153 A 111.69105691056913 111.69105691056913 0 0 1 1.014511346147387 152.0195169382764 L 38.31359904166247 140.31685267654635 A 72.59918699186994 72.59918699186994 0 0 0 160.20270042373883 168.60177152252163 L 188.536205780111 195.5347767013153 z" fill="rgba(43,193,85,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-2" index="0" j="2" data:angle="119.03225806451613" data:startAngle="133.54838709677418" data:strokeWidth="0" data:value="41" data:pathOrig="M 188.536205780111 195.5347767013153 A 111.69105691056913 111.69105691056913 0 0 1 1.014511346147387 152.0195169382764 L 38.31359904166247 140.31685267654635 A 72.59918699186994 72.59918699186994 0 0 0 160.20270042373883 168.60177152252163 L 188.536205780111 195.5347767013153 z"></path></g><g id="SvgjsG1044" class="apexcharts-series apexcharts-pie-series" seriesName="seriesx4" rel="4" data:realIndex="3"><path id="SvgjsPath1045" d="M 1.014511346147387 152.0195169382764 A 111.69105691056913 111.69105691056913 0 0 1 30.631889965351306 37.63046088655574 L 57.56489514414501 65.9639662429279 A 72.59918699186994 72.59918699186994 0 0 0 38.31359904166247 140.31685267654635 L 1.014511346147387 152.0195169382764 z" fill="rgba(255,122,48,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-3" index="0" j="3" data:angle="63.87096774193549" data:startAngle="252.5806451612903" data:strokeWidth="0" data:value="22" data:pathOrig="M 1.014511346147387 152.0195169382764 A 111.69105691056913 111.69105691056913 0 0 1 30.631889965351306 37.63046088655574 L 57.56489514414501 65.9639662429279 A 72.59918699186994 72.59918699186994 0 0 0 38.31359904166247 140.31685267654635 L 1.014511346147387 152.0195169382764 z"></path></g><g id="SvgjsG1046" class="apexcharts-series apexcharts-pie-series" seriesName="seriesx5" rel="5" data:realIndex="4"><path id="SvgjsPath1047" d="M 30.631889965351306 37.63046088655574 A 111.69105691056913 111.69105691056913 0 0 1 107.56383956655108 6.8922781239162845 L 107.57066238492487 45.98414744721225 A 72.59918699186994 72.59918699186994 0 0 0 57.56489514414501 65.9639662429279 L 30.631889965351306 37.63046088655574 z" fill="rgba(255,239,95,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-4" index="0" j="4" data:angle="43.548387096774206" data:startAngle="316.4516129032258" data:strokeWidth="0" data:value="15" data:pathOrig="M 30.631889965351306 37.63046088655574 A 111.69105691056913 111.69105691056913 0 0 1 107.56383956655108 6.8922781239162845 L 107.57066238492487 45.98414744721225 A 72.59918699186994 72.59918699186994 0 0 0 57.56489514414501 65.9639662429279 L 30.631889965351306 37.63046088655574 z"></path></g></g></g></g><line id="SvgjsLine1048" x1="0" y1="0" x2="215.16666666666669" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1049" x1="0" y1="0" x2="215.16666666666669" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line></g><g id="SvgjsG1031" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend"></div><div class="apexcharts-tooltip apexcharts-theme-dark"><div class="apexcharts-tooltip-series-group"><span class="apexcharts-tooltip-marker" style="background-color: rgb(30, 170, 231);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group"><span class="apexcharts-tooltip-marker" style="background-color: rgb(100, 24, 195);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group"><span class="apexcharts-tooltip-marker" style="background-color: rgb(43, 193, 85);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group"><span class="apexcharts-tooltip-marker" style="background-color: rgb(255, 122, 48);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group"><span class="apexcharts-tooltip-marker" style="background-color: rgb(255, 239, 95);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div></div></div>
                                    <div class="resize-triggers"><div class="expand-trigger"><div style="width: 318px; height: 245px;"></div></div><div class="contract-trigger"></div></div></div>
                                    <div class=" col-xl-12 col-sm-6">
                                        <div class="d-flex flex-wrap text-black fs-12 mt-4">
                                            <span class="mr-4 mb-3">
                                                <svg class="mr-2" width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <rect width="19" height="19" rx="9.5" fill="#1EAAE7"></rect>
                                                </svg>
                                                Main Card
                                            </span>
                                            <span class="mr-4 mb-3">
                                                <svg class="mr-2" width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <rect width="19" height="19" rx="9.5" fill="#FF7A30"></rect>
                                                </svg>
                                                Orange Card
                                            </span>
                                            <span class="mr-4 mb-3">
                                                <svg class="mr-2" width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <rect width="19" height="19" rx="9.5" fill="#6418C3"></rect>
                                                </svg>
                                                Purple Card
                                            </span>
                                            <span class="mr-4 mb-3">
                                                <svg class="mr-2" width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <rect width="19" height="19" rx="9.5" fill="#FFEF5F"></rect>
                                                </svg>
                                                Yellow Card
                                            </span>
                                            <span class="mr-4 mb-3">
                                                <svg class="mr-2" width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <rect width="19" height="19" rx="9.5" fill="#2BC155"></rect>
                                                </svg>
                                                Green Card
                                            </span>
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

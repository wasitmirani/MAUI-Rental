<!doctype html>
<html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSRF Token -->
     <meta name="csrf-token" content="{{ csrf_token() }}">

      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <link rel="icon" href="favicon.ico" type="image/x-icon">
      <title>{{config('app.name')}}</title>
      <link rel="stylesheet" href="{{asset('/assets/css/font.min.css')}}"  />
      <link rel="stylesheet" href="{{asset('/assets/plugins/bootstrap/css/bootstrap.min.css')}}">
      <link rel="stylesheet" href="{{asset('/assets/plugins/charts-c3/c3.min.css')}}">
      <link rel="stylesheet" href="{{asset('/assets/css/main.css')}}">
      <link rel="stylesheet" href="{{asset('/assets/css/theme1.css')}}">
      <link rel="stylesheet" href="{{asset('/assets/css/theme1.css')}}">
   </head>
   <body class="font-montserrat sidebar_dark">
      <div id="app">
      <div class="page-loader-wrapper">
         <div class="loader"></div>
      </div>

      <div id="main_content">

        {{-- Top Header --}}
        @include('layouts.backend.components.header.headertop')

        {{-- Right Sidebar  --}}

        @include('layouts.backend.components.sidebar.rightsidebar')

        {{-- User Info --}}

         <div id="left-sidebar" class="sidebar ">
            <h5 class="brand-name">{{config('app.name')}} <a href="javascript:void(0)" class="menu_option float-right"><i class="icon-grid font-16" data-toggle="tooltip" data-placement="left" title="Grid & List Toggle"></i></a></h5>
            {{-- Include sidebar in  --}}
            @include('layouts.backend.components.sidebar.sidebar')

         </div>
         <div class="page">
            {{-- Top Header --}}
            @include('layouts.backend.components.header.topheader')

            @yield('content')




         </div>
      </div>
      </div>
       <!-- Scripts -->
       <script>
        @auth
            window.user = {!! json_encode(Auth::user(), true) !!};

        @else
            window.user = [];
            window.Permissions = [];
        @endauth
        @if(session('login')=="true" || session('login')==true)
        setTimeout(function() {
        // toastr['success'](
        // 'You have successfully logged in to {{config('app.name')}}.',
        // '👋 Welcome {{Auth::user()->name}}!', {
        //     closeButton: true,
        //      tapToDismiss: false
        // }
        // );
        }, 1000);
        @php
        session(['login' => '']);
        @endphp
        @endif
   </script>
<script src="{{ asset('js/app.js') }}" defer></script>
<script src="{{ asset('/assets/bundles/lib.vendor.bundle.js')}}"></script>
<script src="{{ asset('/assets/bundles/selectize.bundle.js')}}"></script>
<script src="{{ asset('/assets/js/vendors/selectize.js')}}"></script>
<script src="{{ asset('/assets/bundles/apexcharts.bundle.js')}}"></script>
<script src="{{ asset('/assets/bundles/counterup.bundle.js')}}"></script>
<script src="{{ asset('/assets/bundles/knobjs.bundle.js')}}"></script>
<script src="{{ asset('/assets/bundles/c3.bundle.js')}}"></script>
<script src="{{ asset('/assets/js/core.js')}}" ></script>
<script src="{{ asset('/assets/js/page/project-index.js')}}"></script>

   </body>
</html>

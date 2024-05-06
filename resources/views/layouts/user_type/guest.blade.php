@extends('layouts.app')

@section('guest')
    @if(\Request::is('login/forgot-password')) 
        @include('layouts.navbars.guest.nav')
        @yield('content') 

    @elseif(\Request::is('pelacakan')) 
    @include('content.pelanggan.sidebar')
    <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg {{ (Request::is('rtl') ? 'overflow-hidden' : '') }}">
        @include('layouts.navbars.auth.nav')
        <div class="container-fluid py-4">
            @yield('content')
    @else
        <div class="container position-sticky z-index-sticky top-0">
            <div class="row">
                <div class="col-12">
                    @include('layouts.navbars.guest.nav')
                </div>
            </div>
        </div>
        @yield('content')        
        @include('layouts.footers.guest.footer')
    @endif
@endsection
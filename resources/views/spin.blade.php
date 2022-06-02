@extends('layout')
@section('title')@yield('title_spin')@endsection
@section('title')<title>Guides</title>@endsection
@section('main')   
            <div class="central">
            @yield('spin_title')
            @yield('guide_init')
            <div class="arrow left">
                @yield('side_left')
                <div class="triangle">▲</div>
                <div class="lil_circle"></div>
            </div>
            <div class="arrow right">
                @yield('side_right')
                <div class="triangle">▲</div>
                <div class="lil_circle"></div>
            </div>
        </div>
@endsection
@section('footer')<footer class="footer spin">@endsection
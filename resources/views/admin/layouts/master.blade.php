<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
{{-- 使用 @yied() 方式，有需要再載入，節省資料傳輸加快速度 --}}
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>iCarry 後台管理系統 - @yield('title')</title>
    {{-- 全站共用的CSS --}}
    @include('admin.layouts.css')
    {{-- 頁面上有需要使用時才載入的CSS --}}
    @yield('css')
    {{-- 全站共用的JS套件 --}}
    @include('admin.layouts.js')
    {{-- 頁面上有需要使用時才載入的JS套件 --}}
    @yield('script')
</head>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">
        {{-- 上方選單 --}}
        @include('admin.layouts.topbar')
        {{-- 側邊選單 --}}
        @include('admin.layouts.sidebar')
        {{-- 主要內容 --}}
        @section('content')
        @show
        {{-- 下方頁尾 --}}
        @include('admin.layouts.footer')
    </div>
    {{-- 全站共用的JS --}}
    <script src="{{ asset('js/demo.js') }}"></script>
    <script src="{{ asset('js/admin.common.js') }}"></script>
    {{-- 頁面上有需要使用時才載入的JS Validator --}}
    @yield('JsValidator')
    {{-- 頁面上有需要使用時才載入的JS --}}
    @yield('CustomScript')

</body>

</html>

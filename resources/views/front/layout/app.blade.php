<!doctype html>
<html class="no-js" lang="zxx">

@include('front.layout.includes.head')

<body>
    <x-header-component/>

    @yield('content')

    <x-footer-component />

    @include('front.layout.includes.foot')
</body>

</html>
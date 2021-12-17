@php
    $path = '';
    $primary = App\Models\GeneralSetting::get_value('primary_color');
    
@endphp
@include('front.partials.style')
@include('front.partials.header')


    @yield('content')


@include('front.partials.footer')
@include('front.partials.script')
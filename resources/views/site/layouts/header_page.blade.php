<div class="title-page" style="background-image: url({{ asset('storage/' . $setting->image_header) }});">
    <h1>@yield('pageTitle')</h1>
    <div class="breadcrumb-header">
        <a href="/"> {{ __('الرئيسية') }} </a>
        <img src="{{ asset('site/images/home.png') }}" alt="">
        <span>@yield('pageTitle')</span>
    </div>
</div>

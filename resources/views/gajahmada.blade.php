<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    @include('linkstyle.linkstyle')
</head>

<body
    class="home page-template-default page page-id-6 wp-embed-responsive theme-noor woocommerce-js full-width x10 dima-transparent-navigation-active dima-full-width-active dima-animated-menu-active dima_page_title_is_off footer_big_active animation-active is-lazy lazy-small-placeholder noor-ver-5.8.5 wpb-js-composer js-comp-ver-6.7.0 vc_responsive dima-shortcodes-version3_2_5">
    <div id="dima-wrapper" class="all_content">
        @include('layout.header')
        <main>
            @include('content.content')
        </main>
    </div>
    <!-- @if (Route::has('login'))
    <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
        @auth
        <a href="{{ url('/dashboard') }}"
            class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
        @else
        <a href="{{ route('login') }}"
            class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>
        @if (Route::has('register'))
        <a href="{{ route('register') }}"
            class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
        @endif
        @endauth
    </div> -->
    @endif
    @include('layout.footer')
    @include('linkscriping.linkscriping')
</body>

</html>

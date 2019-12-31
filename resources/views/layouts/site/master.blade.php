<!DOCTYPE HTML>
<html lang="en">

<head>
    @include('layouts.site._header_link')
</head>

<body>
<header class="section-header">
    <!-- header-main .// -->
    @include('layouts.site._header')
    <!-- header-main .// -->

    <!-- menu part .// -->
    @include('layouts.site._menu')
    <!-- menu part .// -->
</header>
<!-- section-header.// -->

<!-- ========================= SECTION MAIN ========================= -->
<section class="section-main bg padding-top-sm">
    <div class="container">
        @include('layouts.site._banner')
    </div>
</section>
<!-- ========================= SECTION MAIN END// ========================= -->
<!-- ========================= Blog ========================= -->
<section class="section-content padding-y-sm bg">
    <div class="container">
        @include('layouts.site._featured_category')
    </div>
</section>
<!-- ========================= Blog .END// ========================= -->

<!-- ========================= SECTION CONTENT ========================= -->
    @yield('content')
<!-- ========================= SECTION CONTENT ========================= -->

<!-- ========================= Subscribe ========================= -->
<section class="section-subscribe bg-primary padding-y-lg">
    <div class="container">
        @include('layouts.site._subscribe')
    </div>
    <!-- container // -->
</section>
<!-- ========================= Subscribe .END// ========================= -->

<!-- ========================= FOOTER ========================= -->
<footer class="section-footer bg-dark white">
    <div class="container">
        @include('layouts.site._footer')
        <!-- //footer-top -->
    </div>
    <!-- //container -->
</footer>
<!-- ========================= FOOTER END // ========================= -->

</body>

</html>

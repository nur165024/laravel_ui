<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.admin._head_link')
</head>

<body class="app sidebar-mini rtl">
<!-- Navbar-->
<header class="app-header">
    @include('layouts.admin._topbar')
</header>

<!-- Sidebar menu start -->
@include('layouts.admin._menu')
<!-- Sidebar menu end -->
{{--<main class="app-content" id="app">--}}
<!-- mian content -->
<main class="app-content" id="app">
    @yield('content')
</main>

<!-- Essential javascripts for application to work-->
@include('layouts.admin._script')
</body>
</html>

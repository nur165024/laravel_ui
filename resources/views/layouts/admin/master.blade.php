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

<!-- mian content -->
<main class="app-content">
    @yield('content')
</main>

<!-- Essential javascripts for application to work-->
@include('layouts.admin._script')
</body>
</html>

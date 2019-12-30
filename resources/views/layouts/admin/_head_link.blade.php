<title>@yield('title') - {{ config('app.name') }}</title>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta name="csrf-token" content="{{ csrf_token() }}">
<!-- Font-icon css-->
<link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/css/font-awesome/4.7.0/css/font-awesome.min.css') }}"/>
<!-- link style -->
@yield('style')
<!-- Main CSS-->
<link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/css/main.css') }}"/>

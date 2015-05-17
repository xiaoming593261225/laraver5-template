<!DOCTYPE html>
<html>
<head>
    <title>Edgars Vylcāns: Administrators</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/vylcans_admin.css') }}" rel="stylesheet">
    @yield('stylesheets')
</head>
<body>
    <div class="container">
        @include('admin/navigation')
        @yield('content')
    </div>
    <script src="http://code.jquery.com/jquery.js"></script>
    <script>window.jQuery || document.write('<script src="/js/jquery-file.js"><\/script>')</script>
    <script src="{{ asset('/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('/js/ajax-form.js') }}"></script>
    @yield('javascripts')
</body>
</html>
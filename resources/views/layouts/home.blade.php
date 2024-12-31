
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Favicon icon -->
    {{-- <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('gmtool/assets/images/favicon.png') }}"> --}}
    <title>@yield("title")</title>



    <link rel="stylesheet" type="text/css" href="{{ asset('assets/libs/bootstrap/dist/css/bootstrap-reboot.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/libs/bootstrap/dist/css/bootstrap.min.css') }}">

    <link href="{{ asset('css/main.css') }}" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.min.js" integrity="sha384-FzT3vTVGXqf7wRfy8k4BiyzvbNfeYjK+frTVqZeNDFl8woCbF0CYG6g2fMEFFo/i" crossorigin="anonymous"></script>

    @yield('cssCustom')
</head>

<body class="@yield("body_class")">

<div class="container-fluid">
    @yield("content")
</div>

<script>
    $(document).ready(function() {
        $('.nav-link').on('click', function(e) {
            // Cuộn về đầu trang
            $('.tab-content').animate({ scrollTop: 0 }, 'slow');
        });
    });
</script>
<script src="{{ asset('assets/libs/jquery/dist/jquery.min.js') }}"></script>

<script src="{{ asset('assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/libs/bootstrap/dist/js/bootstrap.min.js') }}"></script>


</body>
</html>


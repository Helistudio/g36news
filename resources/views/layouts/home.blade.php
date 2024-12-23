
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

    @yield('cssCustom')
</head>

<body class="@yield("body_class")">

<div class="container-fluid">
    @yield("content")
</div>

<script>

</script>
<script src="{{ asset('assets/libs/jquery/dist/jquery.min.js') }}"></script>

<script src="{{ asset('assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/libs/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<script>
    (function($){
        $.fn.getStyleObject = function(){
            var dom = this.get(0);
            var style;
            var returns = {};
            if(window.getComputedStyle){
                var camelize = function(a,b){
                    return b.toUpperCase();
                };
                style = window.getComputedStyle(dom, null);
                for(var i = 0, l = style.length; i < l; i++){
                    var prop = style[i];
                    var camel = prop.replace(/\-([a-z])/g, camelize);
                    var val = style.getPropertyValue(prop);
                    returns[camel] = val;
                };
                return returns;
            };
            if(style = dom.currentStyle){
                for(var prop in style){
                    returns[prop] = style[prop];
                };
                return returns;
            };
            return this.css();
        }
    })(jQuery);
    $(document).ready(function () {
        $("#css-output").text(JSON.stringify($(".custom_text").getStyleObject()))
    });
</script>
</body>
</html>


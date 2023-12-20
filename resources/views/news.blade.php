
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
    <title>H39 News</title>
    <!-- Custom CSS -->
    {{-- <link href="{{ asset('gmtool/assets/libs/flot/css/float-chart.css') }}" rel="stylesheet"> --}}
    <!-- Custom CSS -->
{{-- <link href="{{ asset('gmtool/dist/css/style.min.css') }}" rel="stylesheet"> --}}
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('gmtool/assets/libs/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') }}"> --}}
    {{--    <link rel="stylesheet" type="text/css" href="{{ asset('gmtool/assets/libs/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css') }}">--}}
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('gmtool/assets/libs/tempusdominus-bootstrap-4/build/css/tempusdominus-bootstrap-4.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('gmtool/assets/libs/quill/dist/quill.snow.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('gmtool/assets/libs/select2/dist/css/select2.min.css') }}"> --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/libs/bootstrap/dist/css/bootstrap-reboot.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/libs/bootstrap/dist/css/bootstrap.min.css') }}">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    {{-- <link href="{{ asset('gmtool/dist/css/style.min.css') }}" rel="stylesheet"> --}}
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">

    @yield('cssCustom')
</head>

<body>

<div class="container-fluid">
    <div class="row news-section">
        <div class="col-3">
            <div class="nav flex-column nav-pills" role="tablist" aria-orientation="vertical">
                <?php foreach($news as $index =>  $new):
                    $active_class = $index == 0 ? 'active' : '';
                ?>
                        <a class="nav-link title <?php echo $active_class?>" data-toggle="pill" href="#v-pills-<?php echo $index;?>" role="tab"><?php echo $new->name;?></a>
                <?php endforeach;?>
            </div>
        </div>
        <div class="col-9">
            <div class="tab-content">
                <?php foreach($news as $index =>  $new):
                    $active_class = $index == 0 ? 'show active' : '';
                ?>
                    <div class="tab-pane description fade <?php echo $active_class?>" id="v-pills-<?php echo $index;?>" role="tabpanel" >
                        <?php if($new->image != ''):?>
                            <img src ="<?php echo $new->image;?>" alt=""/>
                        <?php endif;?>
                        <div>
                            <?php echo $new->description;?>
                        </div>
                    </div>
                <?php endforeach;?>
            </div>
        </div>
    </div>
</div>


<script src="{{ asset('assets/libs/jquery/dist/jquery.min.js') }}"></script>
<!-- Bootstrap tether Core JavaScript -->
{{-- <script src="{{ asset('gmtool/assets/libs/popper.js/dist/umd/popper.min.js') }}"></script> --}}
<script src="{{ asset('assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/libs/bootstrap/dist/js/bootstrap.min.js') }}"></script>
{{-- <script src="{{ asset('gmtool/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js') }}"></script> --}}
{{-- <script src="{{ asset('gmtool//assets/extra-libs/sparkline/sparkline.js') }}"></script> --}}
<!--Wave Effects -->
{{-- <script src="{{ asset('gmtool/dist/js/waves.js') }}"></script> --}}
<!--Menu sidebar -->
{{-- <script src="{{ asset('gmtool/dist/js/sidebarmenu.js') }}"></script> --}}
<!--Custom JavaScript -->
{{-- <script src="{{ asset('gmtool/dist/js/custom.min.js') }}"></script>
<script src="{{ asset('gmtool/assets/libs/moment/moment.js') }}"></script>
<script src="{{ asset('gmtool/assets/libs/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}"></script> --}}
{{--<script src="{{ asset('gmtool/assets/libs/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js') }}"></script>--}}
{{-- <script src="{{ asset('gmtool/assets/libs/tempusdominus-bootstrap-4/build/js/tempusdominus-bootstrap-4.min.js') }}"></script>
<script src="{{ asset('gmtool/assets/libs/quill/dist/quill.min.js') }}"></script>
<script src="{{ asset('gmtool/assets/libs/bootstrap-notify/dist/bootstrap-notify.min.js') }}"></script>
<script src="{{ asset('gmtool/assets/libs/select2/dist/js/select2.full.min.js') }}"></script>
<script src="{{ asset('gmtool/assets/libs/select2/dist/js/select2.min.js') }}"></script>
<script src="{{ asset('js/common.js') }}"></script>
<script src="{{ asset('js/gmtool.js') }}"></script> --}}
</body>
</html>


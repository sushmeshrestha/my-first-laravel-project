<!DOCTYPE html>
<head>
    <meta charset="utf-20">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 2 | Starter</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"/>
    <link rel="stylesheet" href="{{asset('css/ionicons.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/AdminLTE.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/skin-blue.min.css')}}"/>
</head>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
    @include('partials.header')
    @include('partials.sidebar')
    <div class="content-wrapper">
        @yield('content')
    </div>
    @include('partials.footer')
    @include('partials.aside')

    <aside class="control-sidebar control-sidebar-dark">
    </aside>
</div>
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{ asset('js/datatables/jquery.dataTables.min.js') }}"></script>
<script>
    $(document).ready( function () {
        $('#data-table').dataTable();
    } );
</script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Khóa Học Lập Trình Laravel Framework 5.x Tại Khoa Phạm">
    <meta name="author" content="">
    <title>Admin - Khoa Phạm</title>

    <!-- Bootstrap Core CSS -->
    <link href="{!! url('/admin/bower_components/bootstrap/dist/css/bootstrap.min.css') !!}" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="{!! url('/admin/bower_components/metisMenu/dist/metisMenu.min.css') !!}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{!! url('/admin/dist/css/sb-admin-2.css') !!}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{!! url('/admin/bower_components/font-awesome/css/font-awesome.min.css') !!}" rel="stylesheet" type="text/css">

    <!-- DataTables CSS -->
    <link href="{!! url('/admin/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css') !!}" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="{!! url('/admin/bower_components/datatables-responsive/css/dataTables.responsive.css') !!}" rel="stylesheet">
</head>

<body>

<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
        @include('admin.layouts.header')
        @include('admin.layouts.left-bar')
    </nav>
    @yield('content')
</div>

<!-- jQuery -->
<script src="{!! url('/admin/bower_components/jquery/dist/jquery.min.js') !!}"></script>

<!-- Bootstrap Core JavaScript -->
<script src="{!! url('/admin/bower_components/bootstrap/dist/js/bootstrap.min.js') !!}"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="{!! url('Admin') !!}"></script>

<!-- Custom Theme JavaScript -->
<script src="{!! url('/admin/dist/js/sb-admin-2.js') !!}"></script>

<!-- DataTables JavaScript -->
<script src="{!! url('/admin/bower_components/datatables/media/js/jquery.dataTables.min.js') !!}"></script>
<script src="{!! url('/admin/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js') !!}"></script>
<script src="{!! url('/admin/js/myscript.js') !!}"></script>

</body>

</html>
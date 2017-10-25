<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('/admin')}}/css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="{{asset('/admin')}}/font-awesome/css/font-awesome.min.css">

    <title>Blog Admin</title>

</head>
<body class="sidebar-mini fixed">
<div class="wrapper">
    <!-- Navbar-->
@include('admin.includes.header')
<!-- Side-Nav-->
    @include('admin.includes.sidebar')

    <div class="content-wrapper">

        @yield('body')
    </div>
</div>
<!-- Javascripts-->
<script src="{{asset('/admin')}}/js/jquery-2.1.4.min.js"></script>
<script src="{{asset('/admin')}}/js/bootstrap.min.js"></script>
<script src="{{asset('/admin')}}/js/plugins/pace.min.js"></script>
<script src="{{asset('/admin')}}/js/main.js"></script>
<!-- Data table plugin-->
<script type="text/javascript" src="{{asset('/admin')}}/js/plugins/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="{{asset('/admin')}}/js/plugins/dataTables.bootstrap.min.js"></script>
<script type="text/javascript">$('#sampleTable').DataTable();</script>
</body>
</html>
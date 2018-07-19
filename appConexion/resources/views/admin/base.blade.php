<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Admin</title>
    <link rel="icon" type="image/ico" href="/img/favicon.png" />
    <!-- Bootstrap Core CSS -->
    <link href="/admin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
   <!-- <link href="/admin/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">-->

    <!-- Custom CSS -->
    <link href="/admin/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <!--<link href="/admin/vendor/morrisjs/morris.css" rel="stylesheet">-->

    <!-- Custom Fonts -->

    <link href="/css/style.css" rel="stylesheet">
    <link href="/css/admin.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Libre+Barcode+128+Text|Montserrat|Pacifico|Raleway" rel="stylesheet">
    <script src="https://use.fontawesome.com/74edfe93a4.js"></script>
</head>

<body>

    <div id="wrapper" class="bg-blue-1">

    @include('admin.navigation')
       
   
    @yield('content')

    </div>
    @include('admin.scripts')

</body>

</html>
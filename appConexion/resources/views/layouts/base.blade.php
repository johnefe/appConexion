<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <!--====== USEFULL META ======-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="APPTON HTML5 Template is a simple Smooth Personal App Landing Template" />
    <meta name="keywords" content="App, Landing, Business, Onepage, Html, Business" />

    <!--====== TITLE TAG ======-->
    <title>Conexión Gráfica</title>

    <!--====== FAVICON ICON =======-->
    <link rel="shortcut icon" type="image/ico" href="/img/favicon.png" />

    <!--====== STYLESHEETS ======-->
    @include('layouts.head_css')
    
</head>

<body data-spy="scroll" data-target=".mainmenu-area" data-offset="90">

    <!--START TOP AREA AND SLIDER-->
    <header class="top-area" id="home">
        
        @include('layouts.header')
        @yield('content')
    </header>
    <!--END TOP AREA AND SLIDER-->

    <!--FEATURES TOP AREA-->
    <!--FEATURES TOP AREA END-->

    <!--ABOUT TOP CONTENT AREA-->

    <!--ABOUT TOP CONTENT AREA END-->

    <!--SOCIAL NETWORKS AREA-->
    
    <!--SOCIAL NETWORKS AREA END-->

    <!--ABILITIES OUR AREA-->
 
    <!--ABILITIES OUR AREA END-->

    <!--ABOUT AREA-->
   
    
    <!-- PROMOTIONS AREA   -->

    <!--COURSE AREA END-->

    <!--CONTACT US AREA-->

    <!--CONTACT US AREA END-->
  
    @include('layouts.footer')
    @include('layouts.script_js')
   
</body>

</html>

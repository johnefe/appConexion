@extends('layouts.base')
<header class="top-area" id="home">
   <div class="header-top-area" id="scroolup">
            <!--MAINMENU AREA-->
            <div class="mainmenu-area" id="mainmenu-area">
                <div class="mainmenu-area-bg"></div>
                <nav class="navbar">
                    <div class="container">
                        <div class="navbar-header">
                            <a href="#home" class="navbar-brand" style="color: #fff;"><!--<img src="assest/img/logo.png" alt="logo">-->Conexión Gráfica</a>
                        </div>
                        <div id="main-nav" class="stellarnav">
                            <ul id="nav" class="nav navbar-nav pull-right">
                                <li class="active"><a href="#home">Inicio</a></li>
                                <li><a href="/#features">Nosotros</a></li>
                                <li><a href="/#trabajos">Nuestros Trabajos</a></li>
                                <li><a href="/#promociones">Promociones</a></li>
                                <li><a href="/#contact">Contáctanos</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
            <!--END MAINMENU AREA END-->
        </div>  
       
</header>
<!--ABILITIES OUR AREA-->
    <section class="blog-feed-area bg-extra-light-gray padding30" id="trabajos">
        <div class="container">
            @foreach($make as $make)
            <div class="row">
                <div class="col-md-8 col-lg-8 col-md-offset-2 col-lg-offset-2 col-sm-12 col-xs-12">
                    <div class="area-title text-center wow fadeIn">
                       
                        <h2>{{$make->title}}</h2>
              
                    </div>
                </div>
            </div>
            <div class="row">  
                <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12 mty-10">
                    <div class="single-blog-item sm-mb30 xs-mb30 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="blog-thumb">
                            <a href=""><img src="{{asset('storage/img/blog/sub-blog/'.$make->url_img) }}" class="img-service" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 col-lg-8">
                    <p>{{$make->body}}</p>
                    
                </div>
            </div>
             @endforeach
        </div>
    </section>
    <!--ABILITIES OUR AREA END-->
@section('content')


    @include('layouts.promotions')
    @include('layouts.footer')
@stop
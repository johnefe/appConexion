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
    <section class="features-top-area" id="features">
        <div class="container">
            <div class="row promo-content">
                <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12 text-center">
                    <div class="text-icon-box mb20 xs-mb0 wow fadeInUp padding30" data-wow-delay="0.1s">
                        <div class="box-icon features-box-icon">
                            <i class="fa fa-bullhorn"></i>
                        </div>
                        <h3 class="box-title">Tipografía</h3>
                        <p>A Google Docs scam that appears to be widespread began landing in Wednesday in what seemed to be a phishing attack.</p>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12 text-center">
                    <div class="text-icon-box relative mb20 xs-mb0  wow fadeInUp padding30" data-wow-delay="0.2s">
                        <div class="box-icon features-box-icon">
                            <i class="fa fa-rocket"></i>
                        </div>
                        <h3 class="box-title">Medios impresos</h3>
                        <p>A Google Docs scam that appears to be widespread began landing in Wednesday in what seemed to be a phishing attack.</p>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12 text-center">
                    <div class="text-icon-box relative mb20 xs-mb0 wow fadeInUp padding30" data-wow-delay="0.3s">
                        <div class="box-icon features-box-icon">
                            <i class="fa fa-bullhorn"></i>
                        </div>
                        <h3 class="box-title">Diseño Gráfico</h3>
                        <p>A Google Docs scam that appears to be widespread began landing in Wednesday in what seemed to be a phishing attack.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--FEATURES TOP AREA END-->

    <!--ABOUT TOP CONTENT AREA-->
    <section class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-lg-8 col-md-offset-2 col-lg-offset-2 col-sm-12 col-xs-12">
                    <div class="text-center wow fadeIn">
                        <h2 class="xs-font20">Diseño Gráfico y Publicidad.</h2>
                        <p>Somos una empresa Pastusa de medios impresos tenemos todo en publicidad impresa - diseño gráfico y tarjeteria fina - recuerdos y material publicitario.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--ABOUT TOP CONTENT AREA END-->

    <!--SOCIAL NETWORKS AREA-->
    <section class="fun-fact-area center white relative padding-100-70" id="fact">
        <div class="area-bg" data-stellar-background-ratio="0.6"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="single-fun-fact mb30 wow fadeInUp" data-wow-delay="0.1s">
                        <a href=""><i class="fa fa-facebook fa-5x "></i></a>
                        <!--<h3 class="font60 xs-font26"><span class="counter">20</span>k</h3>-->
                        <p class="font600">Facebook</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="single-fun-fact mb30 wow fadeInUp" data-wow-delay="0.2s">
                        <!--<h3 class="font60 xs-font26"><span class="counter">124</span></h3>-->
                        <a href=""><i class="fa fa-instagram fa-5x"></i></a>
                        <p class="font600">Instagram</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="single-fun-fact mb30 wow fadeInUp" data-wow-delay="0.3s">
                        <!--<h3 class="font60 xs-font26"><span class="counter">600</span>k</h3>-->
                        <a href=""><i class="fa fa-twitter fa-5x "></i></a>
                        <p class="font600">Twitter</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="single-fun-fact mb30 wow fadeInUp" data-wow-delay="0.4s">
                        <a href=""><i class="fa fa-pinterest fa-5x "></i></a>
                        <p class="font600">Pinterest</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--SOCIAL NETWORKS AREA END-->

    <!--ABILITIES OUR AREA-->
    <section class="blog-feed-area  bg-theme padding30" id="courses">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-lg-8 col-md-offset-2 col-lg-offset-2 col-sm-12 col-xs-12">
                    <div class="area-title text-center wow fadeIn">
                        <h2>LO QUE PODEMOS HACER</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12 mty-10">
                    <div class="single-blog-item sm-mb30 xs-mb30 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="blog-thumb">
                            <a href="blog.html"><img src="/img/blog/blog-1.jpg" class="img-service" alt=""></a>
                        </div>
                        <div class="blog-details padding10 text-center">
                            <h3 class="blog-title font20 mb30"><a href="blog.html">TIPOGRAFÍA</a></h3>
                            <!--<p class="blog-meta font14 mt20"><a href="#">Feb 01, 2016  </a> by <a href="#">Mark Stonis</a></p>-->
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12  mty-10">
                    <div class="single-blog-item sm-mb30 xs-mb30 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="blog-thumb">
                            <a href="blog.html"><img src="/img/blog/blog-2.jpg" class="img-service" alt=""></a>
                        </div>
                        <div class="blog-details padding10 text-center">
                            <h3 class="blog-title font20 mb30"><a href="blog.html">MEDIOS IMPRESOS</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12  mty-10">
                    <div class="single-blog-item sm-mb30 xs-mb30 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="blog-thumb">
                            <a href="blog.html"><img src="/img/blog/blog-3.jpg" class="img-service" alt=""></a>
                        </div>
                        <div class="blog-details padding10 text-center">
                            <h3 class="blog-title font20 mb30"><a href="blog.html">PUBLICIDAD</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12 mty-10">
                    <div class="single-blog-item sm-mb30 xs-mb30 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="blog-thumb">
                            <a href="blog.html"><img src="/img/blog/blog-4.jpg" class="img-service" alt=""></a>
                        </div>
                        <div class="blog-details padding10 text-center">
                            <h3 class="blog-title font20 mb30"><a href="blog.html">DISEÑO GRÁFICO</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12 mty-10">
                    <div class="single-blog-item sm-mb30 xs-mb30 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="blog-thumb">
                            <a href="blog.html"><img src="/img/blog/blog-5.jpg" class="img-service" alt=""></a>
                        </div>
                        <div class="blog-details padding10 text-center">
                            <h3 class="blog-title font20 mb30"><a href="blog.html">TARJETERÍA FINA</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12 mty-10">
                    <div class="single-blog-item sm-mb30 xs-mb30 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="blog-thumb">
                            <a href="blog.html"><img src="/img/blog/blog-6.jpg" class="img-service" alt=""></a>
                        </div>
                        <div class="blog-details padding10 text-center">
                            <h3 class="blog-title font20 mb30"><a href="blog.html">PERSONALIZACIÓN DE EVENTOS</a></h3>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--ABILITIES OUR AREA END-->

    <!--ABOUT AREA-->
    <section class="section-padding about-area" id="about">
        <div class="container">
            <div class="row flex-v-center">
                <div class="col-md-5 col-lg-5 col-sm-12 col-xs-12">
                    <div class="about-content xs-mb50 wow fadeIn">
                        <h3 class="xs-font20 mb30 r">Imaginamos y creamos con el <i class="fa fa-heart"></i> </h3>
                        <p>Somos profesionales en el arte del diseño y estamos capacitados para crear originales soluciones de comunicación visual. 
                            Nuestro cliente nos proporciona la información de lo que desea transmitir y mediante un proceso creativo, seleccionamos los elementos adecuados que proyecten sus ideas a través de una composición gráfica, única y novedosa.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-md-offset-1 col-lg-offset-1 col-sm-12 col-xs-12">
                    <div class="video-promo-details wow fadeIn">
                        <div class="video-promo-content">
                            <span data-video-id="DlOeJjZC-4g" class="video-area-popup mb30"><i class="fa fa-play"></i></span>
                        </div>
                        <img src="/img/about/about.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- PROMOTIONS AREA   -->
    <section class="testmonial-area bg-theme section-padding " id="courses">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8 col-lg-8 col-md-offset-2 col-lg-offset-2 col-sm-12 col-xs-12">
                    <div class="area-title text-center wow fadeIn">
                        <h2 class="xs-font26">¡Tenemos nuevas promociones!</h2>
                    </div>
                </div>
            </div>
            <div class="row course-list">
                <!-- -->
                <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12">
                    <div class="single-course mb20">
                        <img src="/img/promotions/promotion-1.jpg" class="img-promotion" alt="">
                        <div class="course-details padding30">
                            <h3 class="font18">Mugs Personalizados</h3>
                            <p>MPs who are leaving the protection of for the campaign trail will render...</p>
                            <p class="mt30"><a href="#" class="enroll-button">Conocer más</a> <span class="course-price">$29.999</span></p>
                        </div>
                    </div>
                </div>
                <!-- -->
                <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12">
                    <div class="single-course mb20">
                        <img src="/img/promotions/promotion-2.jpg" class="img-promotion" alt="">
                        <div class="course-details padding30">
                            <h3 class="font18">The Art and Practice of Leadership</h3>
                            <p>MPs who are leaving the protection of for the campaign trail will render...</p>
                            <p class="mt30"><a href="#" class="enroll-button">Conocer más</a> <span class="course-price">$29.999</span></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12">
                    <div class="single-course mb20">
                        <img src="/img/promotions/promotion-3.jpg" class="img-promotion" alt="">
                        <div class="course-details padding30">
                            <h3 class="font18">Gorras para Eventos</h3>
                            <p>Despedida de solter@,Cumpleaños,Primera Comunión, Bautizo, Baby Shower y eventos Empresariales.</p>
                           <p class="mt30"><a href="#" class="enroll-button">Conocer más</a> <span class="course-price">$29.999</span></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12">
                    <div class="single-course mb20">
                        <img src="/img/promotions/promotion-6.jpg" class="img-promotion" alt="">
                        <div class="course-details padding30">
                            <h3 class="font18">Feliz dia del Padre!</h3>
                            <p> El lo merece! regala algo diferente!</p>
                            <p class="mt30"><a href="#" class="enroll-button">Conocer más</a> <span class="course-price">$29.999</span></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12">
                    <div class="single-course mb20">
                        <img src="/img/promotions/promotion-5.jpg" class="img-promotion" alt="">
                        <div class="course-details padding30">
                            <h3 class="font18">Personaliza tu empresa!</h3>
                            <p>Tu logo en todo Gorras, mouse pad, adhesivos, tarjetas, antibacteriales. </p>
                            <p class="mt30"><a href="#" class="enroll-button">Conocer más</a> <span class="course-price">$29.999</span></p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--COURSE AREA END-->

    <!--CONTACT US AREA-->
    <section class="contact-area bg-sky-gray" id="contact">
        <div class="container-fluid no-padding">
            <div class="row no-margin">
                <div class="no-padding col-md-6 col-lg-6 col-sm-12 col-xs-12">
                    <div class="map-area relative">
                        <div id="map" style="width: 100%; height: 600px;"> </div>
                    </div>
                </div>
                <div class="no-padding col-md-4 col-lg-4 col-sm-12 col-xs-12">
                    <div class="contact-form-content padding50 xs-padding20">
                        <div class="contact-title wow fadeIn">
                            <h3 class="font28 mb50 xs-mb30 xs-font22 xs-mt20">Necesitas información sobre nuestros servicios? Envíanos un mensaje.</h3>
                        </div>
                        <div class="contact-form wow fadeIn">
                            <form action="process.php" id="contact-form" method="post">
                                <div class="row">
                                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                        <div class="form-group" id="name-field">
                                            <div class="form-input">
                                                <input type="text" class="form-control" id="form-name" name="form-name" placeholder="Tu nombre" required>
                                            </div>
                                        </div>
                                    </div>
                                      <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                                        <div class="form-group" id="name-field">
                                            <div class="form-input">
                                                <input type="text" class="form-control" id="form-name" name="form-name" placeholder="Tu número de teléfono" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                                        <div class="form-group" id="email-field">
                                            <div class="form-input">
                                                <input type="email" class="form-control" id="form-email" name="form-email" placeholder="correo electrónico" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                        <div class="form-group" id="message-field">
                                            <div class="form-input">
                                                <textarea class="form-control" rows="6" id="form-message" name="form-message" placeholder="Escribe aqui tu solicitud, inquietud o duda sobre alguno de nuestros servicios..." required></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                        <div class="form-group mb0">
                                            <button type="submit" class="enroll-send">Enviar mensaje</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--CONTACT US AREA END-->
  
    @include('layouts.footer')
    @include('layouts.script_js')
   
</body>

</html>

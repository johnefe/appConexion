 <!--FOOER AREA-->
    <footer class="footer-area relative">
        <div class="footer-top-area padding-80-80 bg-dark">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-lg-5 col-sm-12 col-xs-12">
                        <div class="single-footer footer-about sm-mb50 xs-mb50 sm-center xs-center">
                            
                            @foreach($date as $date)
                            <div class="footer-logo mb30">
                                <a href="www.conexiongraficapasto.com" target="_blank" style="color: #fff;">{{$date->title}}</a>
                            </div>
                            
                          
                            <p>{{$date->phone}}</p>
                            <p>{{$date->address}}</p>
                            <p>{{$date->email}}</p>
                              <p>{{$date->city}}</p>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-md-2 col-lg-2 col-sm-4 col-xs-12">
                        <div class="single-footer footer-list white xs-center xs-mb50">
                            <ul>
                                @foreach($redes as $red)
                                <li><a href="{{$red->link}}" target="_blank">{{$red->name}}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-5 col-lg-5 col-sm-8 col-xs-12">
                        <div class="single-footer footer-subscribe white xs-center">
                            <h3 class="mb30 xs-font18">Suscríbete gratis ahora!</h3>
                            <p>Envíanos tu correo y recibiras promociones que puedes aprovechar, noticias y muchas cosas interesantes.</p>
                           
                            <div class="subscriber-form-area mt50 wow fadeIn">

                                <form  method="post" action="{{url('news')}}" enctype="multipart/form-data" class="subscriber-form">
                                @csrf
                                    
                                    <input type="email" name="email" placeholder="tucorreo@example.com">
                                    <button type="submit" class="plus-btn"><i class="fa fa-paper-plane-o"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-dark-low white">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                        <div class="footer-copyright text-center wow fadeIn">
                            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;<script>document.write(new Date().getFullYear());</script> Todos los derechos son reservados | <a href="https://conexiongraficapasto.com" target="_blank">www.conexióngraficapasto.com</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--FOOER AREA END-->
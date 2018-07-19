 <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top bg-gray-1" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand titulo-1" href="http://www.conexiongraficapasto.com">Conexión Gráfica Pasto</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right bg-red-1">
                
                <li class="dropdown">
                    
                    @guest
                    <ul class="dropdown-menu dropdown-user">
                          
                        @else
                            <li>
                                 <a class="titulo-2" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="fa fa-external-link fa-fw"></i>
                                        {{ __('Cerrar Sesión') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                            </li>
                        </ul>
                        @endguest
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown configuracion -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar bg-blue-1" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="divider"> 
                            <a href="/admin/date" class="black"><i class="fa  fa-eercast fa-fw "></i>Mis datos</a>
                        </li>
                        <li class="divider">
                            <a href="#" class="black"><i class="fa fa-eercast fa-fw"></i>Slider principal<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="/admin/slider" class="black"><i class="fa fa-asterisk fa-fw"></i> Listar</a>
                                </li>
                                <li>
                                    <a href="/admin/slider/create" class="black"><i class="fa fa-asterisk fa-fw"></i> Nueva diapositiva</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li class="divider">
                            <a href="/admin/threeServices" class="black"><i class="fa fa-eercast fa-fw"></i>Servicios destacados</a>
                        </li>

                        <li class="divider">
                            <a href="/admin/aboutUs" class="black"><i class="fa fa-eercast fa-fw"></i>Acerca de nosotros</a>
                        </li>
                        <li class="divider">
                            <a class="black" href="/admin/networks"><i class="fa fa-eercast fa-fw"></i> Redes sociales</a>
                        </li>
                        <li class="divider">
                            <!--<a href="/admin/make"><i class="fa fa-sitemap fa-fw"></i> Lo que podemos hacer</a>-->
                            <a href="#" class="black"><i class="fa fa-eercast fa-fw"></i>Lo que podemos hacer<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="/admin/make" class="black"><i class="fa fa-asterisk fa-fw"></i> Listar</a>
                                </li>
                                <li>
                                    <a href="/admin/make/create" class="black"><i class="fa fa-asterisk fa-fw"></i> Nuevo</a>
                                </li>
                            </ul>
                        </li>
                        <li class="divider">
                            <a href="/admin/contentVideo" class="black"><i class="fa fa-eercast fa-fw"></i> Contenido y video</a>
                        </li>
                        <!--promociones -->
                        <li class="divider">
                            <a href="#" class="black"><i class="fa fa-eercast fa-fw"></i> Promociones<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="/admin/promotions" class="black"><i class="fa fa-asterisk fa-fw"></i> Listar</a>
                                </li>
                                <li>
                                    <a href="/admin/promotions/create" class="black"><i class="fa fa-asterisk fa-fw"></i> Nueva</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <!-- end promociones -->
                        <!--mensajes -->
                        <li class="divider">
                            <a href="#" class="black"><i class="fa fa-eercast fa-fw"></i> Mensajes<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="/admin/messages" class="black"><i class="fa fa-asterisk fa-fw"></i> Mensajes recibidos</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <!-- end mensajes -->
                        <!--Mi suscripciones -->
                        <li class="divider">
                            <a href="#" class="black"><i class="fa fa-eercast fa-fw"></i> Suscripciones<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="/admin/suscription" class="black"><i class="fa fa-asterisk fa-fw"></i> Ver correos inscritos</a>
                                </li>
                                
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <!-- end mi suscripcion -->
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
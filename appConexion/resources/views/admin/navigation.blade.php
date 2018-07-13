 <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="http://www.conexiongraficapasto.com">Conexión Gráfica</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                
                <li class="dropdown">
                    
                    @guest
                    <ul class="dropdown-menu dropdown-user">
                          
                        @else
                            <li>
                                 <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="fa fa-gear fa-fw"></i>
                                        {{ __('Salir') }}
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

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="/admin/date"><i class="fa fa-table fa-fw"></i>Mis datos</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-sitemap fa-fw"></i>Slider principal<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="/admin/slider">Listar</a>
                                </li>
                                <li>
                                    <a href="/admin/slider/create">Nueva diapositiva</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="/admin/threeServices"><i class="fa fa-table fa-fw"></i>Servicios destacados</a>
                        </li>

                        <li>
                            <a href="/admin/aboutUs"><i class="fa fa-edit fa-fw"></i>Acerca de nosotros</a>
                        </li>
                        <li>
                            <a href="/admin/networks"><i class="fa fa-wrench fa-fw"></i> Redes sociales</a>
                        </li>
                        <li>
                            <!--<a href="/admin/make"><i class="fa fa-sitemap fa-fw"></i> Lo que podemos hacer</a>-->
                            <a href="#"><i class="fa fa-sitemap fa-fw"></i>Lo que podemos hacer<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="/admin/make">Listar</a>
                                </li>
                                <li>
                                    <a href="/admin/make/create">Nuevo</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="/admin/contentVideo"><i class="fa fa-files-o fa-fw"></i> Contenido y video</a>
                        </li>
                        <!--promociones -->
                        <li>
                            <a href="#"><i class="fa fa-sitemap fa-fw"></i> Promociones<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="/admin/promotions">Listar</a>
                                </li>
                                <li>
                                    <a href="/admin/promotions/create">Nueva</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <!-- end promociones -->
                        <!--mensajes -->
                        <li>
                            <a href="#"><i class="fa fa-sitemap fa-fw"></i> Mensajes<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="/admin/messages">Mensajes recibidos</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <!-- end mensajes -->
                        <!--Mi suscripciones -->
                        <li>
                            <a href="#"><i class="fa fa-sitemap fa-fw"></i> Suscripciones<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="/admin/suscription">Ver correos inscritos</a>
                                </li>
                                
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <!-- end mi suscripcion -->
                        <!--Mi informacion -->
                        <li>
                        <a href="/admin/information"><i class="fa fa-sitemap fa-fw"></i> Mi información</a>      
                        </li>
                        <!-- end mi informacion -->
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
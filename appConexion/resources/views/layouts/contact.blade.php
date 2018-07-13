 <!--CONTACT US AREA-->
    <section class="contact-area bg-sky-gray" id="contact">
        <div class="container-fluid no-padding">
            <div class="row no-margin">
                <div class="no-padding col-md-6 col-lg-6 col-sm-12 col-xs-12">
                    <div class="map-area relative">
                        <div id="map" style="width: 100%; height: 600px;"> </div>
                    </div>
                </div>
                <div class="no-padding col-md-6 col-lg-6 col-sm-12 col-xs-12">
                    <div class="contact-form-content padding50 xs-padding10">
                        <div class="contact-title wow fadeIn">
                            <h3 class="font28 mb50 xs-mb30 xs-font22 xs-mt20">Necesitas información sobre nuestros servicios? Envíanos un mensaje.</h3>
                        </div>
                        <div class="contact-form wow fadeIn">
                            <!--formulario para enviar un mensaje -->
                            <form method="post" action="{{url('mensajes')}}" enctype="multipart/form-data">
                             @csrf
                                <div class="row">
                                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                        <div class="form-group" id="name-field">
                                            <div class="form-input">
                                                <input type="text" class="form-control" id="name" name="name" placeholder="Tu nombre" required>
                                            </div>
                                        </div>
                                    </div>
                                      <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                                        <div class="form-group" id="phone-field">
                                            <div class="form-input">
                                                <input type="text" class="form-control" id="phone" name="phone" placeholder="Tu número de teléfono" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                                        <div class="form-group" id="email-field">
                                            <div class="form-input">
                                                <input type="email" class="form-control" id="email" name="email" placeholder="correo electrónico" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                        <div class="form-group" id="message-field">
                                            <div class="form-input">
                                                <textarea class="form-control" rows="6" id="body" name="body" placeholder="Escribe aqui tu solicitud, inquietud o duda sobre alguno de nuestros servicios..." required></textarea>
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
                
                           <!-- fin formulario enviar mensaje--> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--CONTACT US AREA END-->
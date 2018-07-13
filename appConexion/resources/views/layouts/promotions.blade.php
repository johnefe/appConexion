<!-- PROMOTIONS AREA   -->
    <section class="testmonial-area bg-theme section-padding " id="promociones">
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
                @foreach($promotions as $promotion)
                <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12">
                    <div class="single-course mb20">
                        <img src="{{asset('storage/img/promotions/'.$promotion->link_image) }}" class="img-promotion" alt="">
                        <div class="course-details padding30">
                            <h3 class="font18">{{$promotion->title}}</h3>
                            <p>{{ substr($promotion->body,0,57) }}...</p>
                            <p class="mt30"><a href="/promociones/{{$promotion->id}}" class="enroll-button">Conocer más</a> <span class="course-price">${{$promotion->price}}</span></p>
                        </div>
                    </div>
                </div>
                @endforeach
                <!-- -->
            </div>
        </div>
    </section>
    <!--COURSE AREA END-->
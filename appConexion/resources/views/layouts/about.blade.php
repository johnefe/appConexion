 <section class="section-padding about-area" id="about">
        <div class="container">

            @foreach($contentVideo as $h)
            <div class="row flex-v-center">
                <div class="col-md-5 col-lg-5 col-sm-12 col-xs-12">
                    <div class="about-content xs-mb50 wow fadeIn">
                        <h3 class="xs-font20 mb30 r">{{$h->title}} <i class="{{$h->icon}}"></i> </h3>
                        <p>{{$h->body}}</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-md-offset-1 col-lg-offset-1 col-sm-12 col-xs-12">
                    <div class="video-promo-details wow fadeIn">
                        <div class="video-promo-content">
                            <span data-video-id="{{$h->link_video}}" class="video-area-popup mb30"><i class="fa fa-play"></i></span>
                        </div>
                        <img src="{{asset('storage/img/about/'.$h->url_img) }}" alt="">
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </section>
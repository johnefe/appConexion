<!--FEATURES TOP AREA-->
    <section class="features-top-area" id="features">
        <div class="container">
            <div class="row promo-content">
                @foreach($threeHabilities as $Habilities)
                <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12 text-center">
                    <div class="text-icon-box mb20 xs-mb0 wow fadeInUp padding30" data-wow-delay="0.1s">
                        <div class="box-icon features-box-icon">
                            <i class="{{$Habilities->link_icon}}"></i>
                        </div>
                        <h3 class="box-title">{{$Habilities->title}}</h3>
                        <p>{{$Habilities->body}}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!--FEATURES TOP AREA END-->
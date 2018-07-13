  <!--SOCIAL NETWORKS AREA-->
    <section class="fun-fact-area center white relative padding-100-70" id="fact">
        <div class="area-bg" data-stellar-background-ratio="0.6"></div>
        <div class="container">
            <div class="row">
                
                @foreach($redes as $red)
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="single-fun-fact mb30 wow fadeInUp" data-wow-delay="0.1s">
                        <a href="{{$red->link}}" target="_blank"><i class="{{$red->logo}} fa-5x" ></i></a>
                        <!--<h3 class="font60 xs-font26"><span class="counter">20</span>k</h3>-->
                        <p class="font600">{{$red->name}}</p>
                    </div>
                </div>
                @endforeach
                
            </div>
        </div>
    </section>
    <!--SOCIAL NETWORKS AREA END-->
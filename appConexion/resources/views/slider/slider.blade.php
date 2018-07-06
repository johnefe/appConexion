<!--WELCOME SLIDER AREA-->
        <div class="welcome-slider-area white font16">
            @foreach($slider as $slide)
            <div class="welcome-single-slide">
                <div class="slide-bg-overlay" style=" background: rgba(0, 0, 0, 0) url('{{asset('storage/img/slider/'.$slide->url_img) }}') no-repeat scroll center center / cover;"></div>
                <div class="welcome-area">
                    <div class="container">
                        <div class="row flex-v-center">
                            <div class="col-md-8 col-lg-7 col-sm-12 col-xs-12">
                                <div class="welcome-text">
                                    <h1>{{$slide->title}}</h1>
                                    <p>{{$slide->body}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <!--WELCOME SLIDER AREA END-->
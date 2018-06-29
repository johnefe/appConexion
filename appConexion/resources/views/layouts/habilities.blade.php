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
                @foreach($makes as $make)
                <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12 mty-10">
                    <div class="single-blog-item sm-mb30 xs-mb30 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="blog-thumb">
                            <a href="blog.html"><img src="/img/blog/{{$make->url_img}}" class="img-service" alt=""></a>
                        </div>
                        <div class="blog-details padding10 text-center">
                            <h3 class="blog-title font20 mb30"><a href="blog.html">{{$make->title}}</a></h3>
                            <!--<p class="blog-meta font14 mt20"><a href="#">Feb 01, 2016  </a> by <a href="#">Mark Stonis</a></p>-->
                        </div>
                    </div>
                </div>
                @endforeach
           
            </div>
        </div>
    </section>
    <!--ABILITIES OUR AREA END-->
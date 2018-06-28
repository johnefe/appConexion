 <!--ABOUT TOP CONTENT AREA-->
    <section class="section-padding">
        <div class="container">
            <div class="row">
                @foreach($about as $info)
                <div class="col-md-8 col-lg-8 col-md-offset-2 col-lg-offset-2 col-sm-12 col-xs-12">
                    <div class="text-center wow fadeIn">
                        <h2 class="xs-font20">{{$info->title}}</h2>
                        <p>{{$info->body}}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!--ABOUT TOP CONTENT AREA END-->
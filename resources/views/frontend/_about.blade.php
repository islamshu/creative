<section class="about-us" id="about-scroll">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-12">
                <div class="top">
                    <h6 class="wow fadeInDown" data-wow-delay="0.6s">من نحن</h6>
                    <h5 class="wow fadeInDown" data-wow-delay="1s">كاريتيف مايند للحلول الرقمية</h5>
                    <p class="wow fadeInDown" data-wow-delay="1.3s">
                        {!! $about->body !!}
                    </p>
                </div>
            </div>
            <div class="offset-sm-1"></div>
            <div class="col-lg-5 col-md-12">
                <div class="about-img wow fadeInUp" data-wow-delay="1s">
                    <img src="{{asset('uploads/'.$about->image)}}" alt="من نحن">
                </div>
            </div>
        </div>
    </div>
</section>

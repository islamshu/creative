<section class="testimonial">
    <div class="container">
        <div class="top">
            <h6 class="wow fadeInDown" data-wow-delay="0.6s">قالوا عنا</h6>
            <h5 class="wow fadeInDown" data-wow-delay="1s">شهادات نعتز بها</h5>
        </div>

        <div id="testimonial" class="card owl-carousel owl-theme">
            @foreach ($reviews as $item)
            <div class="item wow fadeInUp" data-wow-delay="0.6s">
                <div class="card-body row">

                    <div class="client-testimonial col-lg-3 col-md-12">
                        <div class="client-img">
                            <img src="{{asset('uploads/'.$item->image)}}">
                        </div>
                        <div class="client-info">
                            <h6 class="mb-3">{{ $item->name }}  </h6>
                            <p>{{ $item->job }}  </p>
                        </div>
                    </div>
                    <div class="mb-3 text col-lg-8 col-md-12">
                        <i class="fa fa-quote-right mb-3"></i>
                      <p>{!! $item->body !!}</p>
                    </div>
                </div>
            </div>
            @endforeach
            


        </div>
    </div>
</section>
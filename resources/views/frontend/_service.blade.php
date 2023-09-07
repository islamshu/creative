<section class="services" id="servives-scroll">
    <div class="container">
        <div class="top">
            <h6 class="wow fadeInDown" data-wow-delay="0.6s">خدماتنا</h6>
            <h5 class="wow fadeInDown" data-wow-delay="1s">حلول حقيقية من خلال الابتكارات الرقمية</h5>
        </div>
        <div class="row">
            

            @foreach ($services as $key=>$item)
            <div class="col-lg-3 col-md-6 col-sm-12">
                @php
                $delay = ($key % 4) * 0.4 + 0.6; 
                @endphp
                <div class="service wow fadeInDown" data-wow-delay="{{ $delay }}s">
           
                    <div class="serv-img">
                        <img src="{{asset('uploads/'.$item->image)}}" alt="">

                    </div>
                    <div class="serv-text">
                        <h5>{{ $item->title }}</h5>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

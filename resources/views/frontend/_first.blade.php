<section class="hero">
    <div class="container">
        <div class="row">
            <div class="col-lg-1 col-md-12 social-media">
                <ul class="nav">
                    @if(get_general_value('facebook') != null)
                    <li class="item wow fadeInUp" data-wow-delay="0.1s">
                        <div class="title">فيسوك</div>
                        <a class="nav-link" href="{{ get_general_value('facebook') }}" target="_blank">
                            <i class="fa fa-facebook" aria-hidden="true"></i>
                        </a>
                    </li>
                    @endif
                    @if(get_general_value('instagram') != null)

                    <li class="item wow fadeInUp" data-wow-delay="0.2s">
                        <div class="title">انستاجرام</div>
                        <a class="nav-link" href="{{ get_general_value('instagram') }}" target="_blank">
                            <i class="fa fa-instagram" aria-hidden="true"></i>
                        </a>
                    </li>
                    @endif
                    @if(get_general_value('twitter') != null)

                    <li class="item wow fadeInUp" data-wow-delay="0.3s">
                        <div class="title">تويتر</div>
                        <a class="nav-link" href="{{ get_general_value('twitter') }}" target="_blank">
                            <i class="fa fa-twitter" aria-hidden="true"></i>
                        </a>
                    </li>
                    @endif
                    @if(get_general_value('linkedin') != null)

                    <li class="item wow fadeInUp" data-wow-delay="0.4s">
                        <div class="title">لينكدان</div>
                        <a class="nav-link" href="{{ get_general_value('linkedin') }}" target="_blank">
                            <i class="fa fa-linkedin" aria-hidden="true"></i>
                        </a>
                    </li>
                    @endif
                    @if(get_general_value('behance') != null)

                    <li class="item wow fadeInUp" data-wow-delay="0.5s">
                        <div class="title">بيهانس</div>
                        <a class="nav-link" href="{{ get_general_value('behance') }}" target="_blank">
                            <i class="fa fa-behance" aria-hidden="true"></i>
                        </a>
                    </li>
                    @endif

                </ul>
            </div>
            <div class="col-lg-5 col-md-12 hero-text">
                <h6 class="mb-4 wow fadeInUp" data-wow-delay="0.3s"><span id="mySpan" data-title="{{ $first->title_move }}"></span></h6>
                <h2 class="mb-4 wow fadeInUp" data-wow-delay="0.8s">{!! $first->body !!}</h2>
                <p class="mb-4 wow fadeInUp" data-wow-delay="1.2s">
                    {!! $first->small_body !!}
                </p>
                @if($first->url != null)
                <a href="{{ $first->url }}" class="btn btn-primary wow fadeInUp" data-wow-delay="1.4s"><span>
                    {{ $first->button_text }}
                        
                        </span></a>
                        @endif
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="home-imgs-wrap wow fadeIn" data-wow-delay="0.8s">
                    <div class="first">
                        <img src="{{asset('front/img/blocks.svg')}}" class="img-responsive image1">
                    </div>
                    <div class="second">
                        <img src="{{asset('uploads/'.$first->image)}}" class="img-responsive image2">

                        {{-- <img src="{{asset('front/img/user.svg')}}"" class="img-responsive image2"> --}}
                    </div>
                    <div class="last">
                        <img src="{{asset('front/img/tree.svg')}}" class="img-responsive image3">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

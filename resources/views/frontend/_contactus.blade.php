<section class="contant-us" id="contact-scroll">
    <div class="container">
        <div class="top text-center">
            <h6 class="wow fadeInDown" data-wow-delay="0.6s">تواصل معنا</h6>
            <h5 class="wow fadeInDown" data-wow-delay="1s">سنكون سعداء بالرد على جميع استفساراتكم</h5>
        </div>
        <div id="error-messages" class="alert alert-danger" style="display: none;text-align: center"></div>

        <form id="your-form-id">
            @csrf

            <div class="row">
                <div class="col-lg-6 col-md-12 wow fadeInUp" data-wow-delay="0.8s">
                    <input type="text" name="name" class="form-control" placeholder="الاسم">
                </div>
                <div class="col-lg-6 col-md-12 wow fadeInUp" data-wow-delay="1.2s">
                    <input type="email" name="email" class="form-control" placeholder="البريد الإلكتروني">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-12 wow fadeInUp" data-wow-delay="1.3s">
                    <input type="text" name="phone" class="form-control" placeholder="رقم الجوال">
                </div>
                <div class="col-lg-6 col-md-12 wow fadeInUp" data-wow-delay="1.4s">
                    <input type="text" name="title" class="form-control" placeholder="العنوان">
                </div>
                <div class="col-12 wow fadeInUp" data-wow-delay="1.4s">
                    <select name="section" class="custom-select">
                    <option selected value="">اختر خدمة</option>
                   @foreach ($packges as $item)
                       <option value="{{ $item->title }}">{{ $item->title }}</option>
                   @endforeach
                   <option value="آخرى">آخرى</option>
                  </select>
                </div>
                <div class="col-12 wow fadeInUp" data-wow-delay="1.4s">
                    <textarea rows="5" name="body" class="form-control" placeholder="الرسالة"></textarea>
                </div>
                <div class="col-12 text-center wow fadeInUp" data-wow-delay="1.4s">
                    <button type="submit" class="btn btn-primary">
                    <span>
                        ارسال
                        <img src="{{asset('front/img/send.svg')}}" width="20">
                    </span>
                </button>
                </div>
            </div>
        </form>

    </div>

    <svg xmlns="http://www.w3.org/2000/svg" width="350" height="100" viewBox="0 0 590.473 173.126">
    <g transform="translate(0 1.067)">
        <path id="method-path"
            d="M560.943,32.038S535.326-80.031,442.55-61.363,270.258,97.771,189.836,106.71C87.273,118.11,0,12.4,0,12.4"
            transform="translate(28.555 63.461)" fill="none" stroke="#e2e2e2" stroke-width="2"
            stroke-dasharray="10" />
        <g id="send" transform="translate(24.498 95.373) rotate(-130)">
            <path
                d="M38.112,16.443a3.623,3.623,0,0,1-2.27,3.4L5.092,32.6A3.68,3.68,0,0,1,.116,28.293L2.853,17.559l.284-1.117-.284-1.117L.116,4.592A3.68,3.68,0,0,1,5.092.284l30.75,12.76A3.623,3.623,0,0,1,38.112,16.443Z"
                transform="translate(0 0)" fill="#ffbe24" />
            <path
                d="M2.853,1.117.116,11.85a3.68,3.68,0,0,0,4.976,4.309L35.842,3.4A3.623,3.623,0,0,0,38.112,0H3.138Z"
                transform="translate(0 16.442)" fill="#ffbe24" />
        </g>
    </g>
</svg>

</section>
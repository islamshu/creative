<section class="method">

    <svg xmlns="http://www.w3.org/2000/svg" width="400" height="120" viewBox="0 0 636.479 186.418">
    <g transform="translate(0.975 -3413.816)">
        <path id="method-path"
            d="M0,17.966S27.616,138.78,127.633,118.655,313.371-52.9,400.069-62.534C510.636-74.823,604.721,39.141,604.721,39.141"
            transform="translate(0 3478.308)" fill="none" />
        <g id="send" transform="matrix(0.643, 0.766, -0.766, 0.643, 609.095, 3496.408)">
            <path id="Path_6892"
                d="M41.086,52.837A3.905,3.905,0,0,1,38.639,56.5L5.49,70.257A3.967,3.967,0,0,1,.125,65.612L3.076,54.041l.307-1.2-.307-1.2L.125,40.062A3.967,3.967,0,0,1,5.49,35.417L38.639,49.173A3.905,3.905,0,0,1,41.086,52.837Z"
                transform="translate(0.001 -35.111)" fill="#ffbe24" />
            <path id="Path_6893"
                d="M3.076,257.2.125,268.776a3.967,3.967,0,0,0,5.365,4.645l33.149-13.756A3.905,3.905,0,0,0,41.086,256H3.382Z"
                transform="translate(0.001 -238.275)" fill="#ffbe24" />
        </g>
    </g>
</svg>

    <div class="container">
        <div class="top">
            <h6 class="wow fadeInDown" data-wow-delay="0.6s">أسلوبنا</h6>
            <h5 class="wow fadeInDown" data-wow-delay="1s">تعرف على طريقة كاريتيف مايند في العمل على المشاريع</h5>
        </div>
    </div>

    <div class="inner-method">

        <div class="">

            @foreach ($hows as $key=>$item)
            @if($key == 0)
                <div class="step {{ get_number($key) }} order-mb wow fadeInDown" data-wow-delay="0.6s">
                    <div class="step-text">
                        <h6>{{ $item->title }}</h6>
                        <p>{!! $item->body !!}</p>
                    </div>
                    <div class="step-img">
                        <img src="{{asset('uploads/'.$item->image)}}" alt="">
                    </div>
    
                </div>
            @else
            <div class="step {{ get_number($key) }} wow fadeInDown" data-wow-delay="0.6s">
                <div class="step-img">
                    <img src="{{asset('uploads/'.$item->image)}}" alt="">
                </div>
                <div class="step-text">
                    <h6>{{ $item->title }}</h6>
                    <p>{!! $item->body !!}</p>
                </div>
               

            </div>
            @endif

            @endforeach
           


        </div>
    </div>
</section>

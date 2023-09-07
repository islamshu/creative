<section class="clients" id="clients-scroll">
    <div class="container">

        <div class="top">
            <h6 class="wow fadeInDown" data-wow-delay="0.6s">عملاءنا</h6>
            <h5 class="wow fadeInDown" data-wow-delay="1s">عملاء تشرفنا بالعمل معهم</h5>
        </div>

        <div id="clients" class="owl-carousel owl-theme">

            @foreach ($clients as $key=>$item)
            @php
            $delay = ($key % 4) * 0.4 + 0.6; 
            @endphp
            <div class="item wow fadeInDown" data-wow-delay="{{ $delay }}s">
                <div class="client-logo">
                    <img src="{{asset('uploads/'.$item->image)}}">
                </div>
            </div> 
            @endforeach
            

            

        </div>
    </div>
</section>

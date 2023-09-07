<section class="Packages">
    <div class="container">
        <h2 class="heading">الباقات</h2>
        <h4>مع اوكودا لخدمات التصميم والتسويق في خدمة السيو، يمكن لشركتك الاستفادة من حركة مرور متسقة وعالية الجودة. فتلك العملية تسير في إطار متابعتنا المستمرة أن موقع الويب الخاص بك يتبع أحدث الخوارزميات وأنه يظهر دائمًا في أوائل نتائج البحث.</h4>
        <div class="row">
            @foreach ($packges as $item)
            <div class="col-lg-4">
                <div class="item">
                    <div class="img-box">
                        <img src="{{asset('uploads/'.$item->image)}}" alt="">
                    </div>
                    <h2> {{ $item->title }}</h2>
                    <h6>{{ $item->price }} </h6>

                    {{-- <ul class="list-unstyled"> --}}
                        {!! $item->body !!}
                    {{-- </ul> --}}

                    <a  class="btn btn-dark contact-scroll">طلب الخدمة</a>
                </div>
            </div>
            @endforeach
            

          
        </div>
    </div>
</section>

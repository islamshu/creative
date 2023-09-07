<footer>
    <div class="container">
        <div class="copyrights">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="rights">
                        <div class="wedo-logo wow fadeIn" data-wow-delay="0.6s">
                            <img src="{{asset('uploads/'.get_general_value('whatsapp') )}}" width="80">
                        </div>
                        <div class="text">
                            <span class="wedo wow fadeInDown" data-wow-delay="0.6s">كريتيف مايند للحلول الرقمية</span>
                            <span class="wow fadeInUp" data-wow-delay="0.6s">جميع الحقوق محفوظة &copy; <span
                                id="year"></span></span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="contact-info">
                        <ul class="nav float-left">
                            <li class="wow fadeInUp" data-wow-delay="0.6s">
                                <i class="fa fa-whatsapp"></i> {{ get_general_value('whatsapp') }}
                            </li>
                            <li class="wow fadeInUp" data-wow-delay="0.6s">
                                <i class="fa fa-envelope"></i> {{ get_general_value('email') }}
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
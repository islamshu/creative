$(document).ready(function() {

    // $(window).on('load', function(){
    //     $("body").css("overflow-y","auto");
    //     $(".intro .logo").fadeOut(500,function(){
    //         $(this).parent().fadeOut( 000);
    //     });
    // })

    setTimeout(function() {
        $("body").css("overflow-y", "auto");
        $(".intro .logo").fadeOut(2000, function() {
            $(this).parent().fadeOut(1000);
        });
    }, 2000);

    window.addEventListener("scroll", function() {

        if ($(this).scrollTop() > 1900) {
            $('.method svg').css('display', 'block')
        }
        if ($(this).scrollTop() > 3300) {
            $('.contant-us svg').css('display', 'block')
        }

    })


    var docHeight = $(document).height(),
        windowHeight = $(window).height(),
        scrollPercent;
    scrollPercent = $(window).scrollTop() / (docHeight - windowHeight) * 100;

    $('.scroll-progress').width(scrollPercent + '%');
    $(window).scroll(function() {
        scrollPercent = $(window).scrollTop() / (docHeight - windowHeight) * 100;
        if (scrollPercent > 80) {
            $('.scroll-progress').width(scrollPercent + 6 + '%');
        } else {
            $('.scroll-progress').width(scrollPercent + '%');
        }

    });

    $('.hero-text .btn , .order-inline .btn , .see-more .btn , .contant-us form .btn , .order form .btn')
        .mousemove(function(e) {
            const x = e.pageX - $(this).offset().left;
            const y = e.pageY - $(this).offset().top;

            $(this).css('--x', x + 'px');
            $(this).css('--y', y + 'px');
        });


    $('#clients').owlCarousel({
        rtl: true,
        loop: true,
        margin: 10,
        nav: false,
        dots: false,
        autoplay: false,
        autoplayTimeout: 2000,
        smartSpeed: 1000,
        responsive: {
            0: {
                items: 1
            },
            800: {
                items: 3
            },
            1200: {
                items: 6
            }
        }
    });


    $('#testimonial').owlCarousel({
        rtl: true,
        loop: true,
        margin: 10,
        nav: false,
        dots: true,
        autoplay: true,
        autoplayTimeout: 4000,
        smartSpeed: 1000,
        responsive: {
            0: {
                items: 1
            },
            800: {
                items: 1
            },
            1200: {
                items: 1
            }
        }
    });


    $('.menu .nav-link , .home .mobile-view .tab order-inline').click(function(e) {

        e.preventDefault();
        $('html,body').animate({
            scrollTop: $('#' + $(this).data('scroll')).offset().top
        }, 1000);

    });
    $('.contact-scroll').click(function(e) {
        e.preventDefault();
        $('html,body').animate({
            scrollTop: $('#' + $(this).data('scroll')).offset().top
        }, 1000);

    });



    const tabs = document.querySelectorAll(".mobile-view .tab");
    tabs.forEach(clickedTab => {
        clickedTab.addEventListener("click", function(e) {
            tabs.forEach(tab => {
                tab.classList.remove('active');
            });

            clickedTab.classList.add('active');

        });
    });

    window.addEventListener("scroll", function() {
        var nav = document.querySelector(".navbar");
        nav.classList.toggle("sticky", window.scrollY > 0);
    });


    document.getElementById("year").innerHTML = new Date().getFullYear();

    new WOW().init();

});




/*=======================================================*/
const spanElement = document.getElementById('mySpan'); // You can use other methods like querySelector as well.

// Step 2: Access the data-title attribute.
const dataTitleValue = spanElement.getAttribute('data-title');
var typed = new Typed('.ar .hero-text h6 span', {
    strings: [dataTitleValue],
    loop: true,
    startDelay: 1500,
    backDelay: 1000,
    typeSpeed: 60,
    showCursor: true,
    autoInsertCss: true
});


/*=======================================================*/
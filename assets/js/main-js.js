document.addEventListener('DOMContentLoaded', function () {
    const swiper = new Swiper('.slider_swiper', {
        direction: 'horizontal',
        loop: true,
        autoplay: {
            delay: 5000,
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
    });
    try {
        let aboutUsSlider = document.querySelector('.about_us_slider');
        let sliderContainer = document.querySelector('.slider_swiper');

        function updateBackground() {
            let activeSlide = sliderContainer.querySelector('.swiper-slide-active .slider_bg');
            if (activeSlide) {
                let imageUrl = activeSlide.getAttribute('src');
                aboutUsSlider.style.backgroundImage = `url('${imageUrl}')`;
            }
        }

        updateBackground();

        swiper.on('slideChange', function () {
            updateBackground();
        });

        aboutUsSlider.addEventListener('transitionend', function () {
            swiper.update();
        });
    } catch (error) {
        console.error('An error occurred:', error);
    }


    let fC = document.querySelector('.contact_popup');
    fC.addEventListener('click', function (q) {
        let blur = document.querySelector('.blur');
        blur.classList.add('blur_active');
        document.body.style.overflow = 'hidden';

        var upBtn = document.querySelector('.up_btn');

        // if (blur.classList.contains('blur_active')){
        //     // upBtn.classList.remove('show');
        //     console.log('active')
        // }else {
        //     console.log('hide')
        // }
    });

    let fC1 = document.querySelector('.contact_popup_bot');
    fC1.addEventListener('click', function (q1) {
        let blur = document.querySelector('.blur');
        blur.classList.add('blur_active');
        document.body.style.overflow = 'hidden';
    });

    let closeBtn = document.querySelector('.close_btn');
    closeBtn.addEventListener('click', function () {
        let blur = document.querySelector('.blur');
        blur.classList.remove('blur_active');
        document.body.style.overflow = 'auto';
    });


    // Проверяем, была ли отправлена форма из секции Hero

    let allSections = document.querySelectorAll('section');

    allSections.forEach(section => {
        if (section.classList.contains('hero_top')) {
            function handlePopupForHero() {
                document.addEventListener('wpcf7mailsent', function (event) {
                    showSuccessPopup();
                }, false);

                function showSuccessPopup() {
                    var popup = document.querySelector('.popup_send_mail_inner');
                    let form_popup = document.querySelector('.popup_form')
                    popup.classList.add('popup_send_mail_inner_active');
                    form_popup.style.display = 'none';
                }

                let popup_send_close_btn = document.querySelector('.popup_send_close_btn');
                popup_send_close_btn.addEventListener('click', function (q1) {
                    var blurElement = document.querySelector(".blur");
                    blurElement.classList.remove('blur_active');
                    document.body.style.overflow = 'auto';
                    var popup1 = document.querySelector('.bot_form');
                    let t1 = document.querySelector('.popup_send_close_btn_bot');
                    popup1.classList.remove('bot_form_active')
                });

            }

            handlePopupForHero();
        } else if (section.classList.contains('contact1')) {

            function handlePopupForContact() {
                document.addEventListener('wpcf7mailsent', function (event) {
                    showSuccessPopup();
                }, false);

                function showSuccessPopup() {
                    console.log("Форма отправлена из секции Contact");
                    var popup1 = document.querySelector('.bot_form');
                    console.log(popup1)
                    popup1.classList.add('bot_form_active');
                    let qqw = document.querySelector('.bot_form');

                    document.body.style.overflow = 'hidden';
                }

                let popup_send_sub_wrapper = document.querySelector('.popup_send_close_btn_bot');
                popup_send_sub_wrapper.addEventListener('click', function (q1) {
                    var popup1 = document.querySelector('.popup_send_mail_inner_bot');
                    popup1.classList.remove('popup_send_mail_inner_bot_active');

                });
            }

            handlePopupForContact();

        }
        var popup1 = document.querySelector('.bot_form');
        let t1 = document.querySelector('.popup_send_close_btn_bot')
        t1.addEventListener('click', function (rr1) {
            popup1.classList.remove('bot_form_active');
            document.body.style.overflow = 'auto';

        })

    });


// btn_up
    window.addEventListener('scroll', function () {
        var heroSection = document.getElementById('hero');
        var upBtn = document.querySelector('.up_btn');
        if (window.scrollY >= heroSection.offsetTop + heroSection.offsetHeight / 2) {
            upBtn.classList.add('show');
        } else {
            upBtn.classList.remove('show');
        }
    });

});


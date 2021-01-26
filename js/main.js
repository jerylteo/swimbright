document.addEventListener("DOMContentLoaded", function(event) {
    initMobileMenu();
    initSwipers();
})

function initSwipers() {
    let homeSwiper = new Swiper('.swiper-container-home', {
        loop: true,
        slidesPerView: 1,
        pagination: {
            el: '.swiper-pagination-home'
        }
    })

    let homeCoachesSwiper = new Swiper('.swiper-container-home-coaches', {
        slidesPerView: 1,
        pagination: {
            el: '.swiper-pagination-home-coaches'
        },
        navigation: {
            nextEl: '.swiper-button-next-home-coaches',
            prevEl: '.swiper-button-prev-home-coaches'
        },
        breakpoints: {
            1024: {
                slidesPerView: 2,
                spaceBetween: 40,
            }
        }
    })

    let homeTestimonialsSwiper = new Swiper('.swiper-container-home-testimonials', {
        slidesPerView: 1,
        pagination: {
            el: '.swiper-pagination-home-testimonials'
        },
        navigation: {
            nextEl: '.swiper-button-next-home-coaches',
            prevEl: '.swiper-button-prev-home-testimonials'
        },
        breakpoints: {
            1024: {
                slidesPerView: 2,
                spaceBetween: 40,
            }
        }
    })
}

function initMobileMenu() {
    let menuBtn = document.getElementById('menu-btn');
    let menu = document.getElementById('menu');
    let isOpen = false;

    menuBtn.addEventListener('click', ()=> {
        isOpen = !isOpen;
        menu.classList.toggle('hidden');
        menu.classList.toggle('mobile-menu');
    });
}

window.onscroll = _=> {
    "use strict";
    let nav = document.getElementById('header');
    let navHeight = nav.offsetHeight;                                                                                                      

    (document.documentElement.scrollTop >= navHeight)
        ? nav.classList.add('scroll-nav')
        : nav.classList.remove('scroll-nav')

}

/*-----------------------------------------------------------------

Template Name: Prinoz - Printing company &
Service Html Template 
Author:  Ui-Drops
Author URI: https://themeforest.net/user/ui-drops/portfolio
Version: 1.0.0
Description: Prinoz - Printing company &
Service Html Template <

-------------------------------------------------------------------
CSS TABLE OF CONTENTS
-------------------------------------------------------------------

01. header
02. animated text with swiper slider
03. magnificPopup
04. counter up
05. wow animation
06. nice select
07. scrolldown
08. hover active js
09. swiper slider
10. range sliger
11. quantity
12. quantity cart
13. search popup
14. mousecursor 
15. preloader 


------------------------------------------------------------------*/

(function($) {
    "use strict";

    $(document).ready( function() {

        //>> Mobile Menu Js Start <<//
        $('#mobile-menu').meanmenu({
            meanMenuContainer: '.mobile-menu',
            meanScreenWidth: "1199",
            meanExpand: ['<i class="far fa-plus"></i>'],
        });

        //>> Sidebar Toggle Js Start <<//
        $(".offcanvas__close,.offcanvas__overlay").on("click", function() {
            $(".offcanvas__info").removeClass("info-open");
            $(".offcanvas__overlay").removeClass("overlay-open");
        });
        $(".sidebar__toggle").on("click", function() {
            $(".offcanvas__info").addClass("info-open");
            $(".offcanvas__overlay").addClass("overlay-open");
        });

        //>> Body Overlay Js Start <<//
        $(".body-overlay").on("click", function() {
            $(".offcanvas__area").removeClass("offcanvas-opened");
            $(".df-search-area").removeClass("opened");;
            $(".body-overlay").removeClass("opened");
        });

        //>> Sticky Header Js Start <<//

       
        //>> Video Popup Start <<//
        $(".img-popup").magnificPopup({
            type: "image",
            gallery: {
                enabled: true,
            },
        });

        $('.video-popup').magnificPopup({
            type: 'iframe',
            callbacks: {
            }
        });
        
        //>> Counterup Start <<//
        $(".count").counterUp({
            delay: 15,
            time: 4000,
        });

        //>> Wow Animation Start <<//
        new WOW().init();

        //>> Nice Select Start <<//
        $('select').niceSelect();

        //>> Scrolldown Start <<//
        $("#scrollDown").on("click", function () {
            setTimeout(function () {
                $("html, body").animate({ scrollTop: "+=1000px" }, "slow");
            }, 1000);
        });

        //>> Active Js Start <<//
        $(".work-process-box-items, .contact-info-items").hover(
            function() {
                $(".work-process-box-items, .contact-info-items").removeClass("active");
                $(this).addClass("active");
            }
        );
        

        //>> Service Slider Start <<//
        if($('.service-slider').length > 0) {
            const serviceSlider = new Swiper(".service-slider", {
                spaceBetween: 30,
                speed: 2000,
                loop: true,
                autoplay: {
                    delay: 1000,
                    disableOnInteraction: false,
                },
                pagination: {
                    el: ".dot",
                    clickable: true,
                },
                navigation: {
                    nextEl: ".array-prev",
                    prevEl: ".array-next",
                },
                breakpoints: {
                    1399: {
                        slidesPerView: 5,
                    },
                    1199: {
                        slidesPerView: 4,
                    },
                    991: {
                        slidesPerView: 3,
                    },
                    767: {
                        slidesPerView: 2,
                    },
                    575: {
                        slidesPerView: 2,
                    },
                    0: {
                        slidesPerView: 1,
                    },
                },
            });
        }

        if($('.service-slider-2').length > 0) {
            const serviceSlider2 = new Swiper(".service-slider-2", {
                spaceBetween: 30,
                speed: 2000,
                loop: true,
                autoplay: {
                    delay: 1000,
                    disableOnInteraction: false,
                },
                pagination: {
                    el: ".dot",
                    clickable: true,
                },
                breakpoints: {
                    1199: {
                        slidesPerView: 3,
                    },
                    991: {
                        slidesPerView: 2,
                    },
                    767: {
                        slidesPerView: 1,
                    },
                    575: {
                        slidesPerView: 1,
                    },
                    0: {
                        slidesPerView: 1,
                    },
                },
            });
        }

        if($('.service-slider-3').length > 0) {
            const serviceSlider3 = new Swiper(".service-slider-3", {
                spaceBetween: 30,
                speed: 2000,
                loop: true,
                autoplay: {
                    delay: 1000,
                    disableOnInteraction: false,
                },
                pagination: {
                    el: ".dot",
                    clickable: true,
                },
                breakpoints: {
                    1399: {
                        slidesPerView: 3,
                    },
                    1199: {
                        slidesPerView: 2,
                    },
                    991: {
                        slidesPerView: 2,
                    },
                    767: {
                        slidesPerView: 2,
                    },
                    575: {
                        slidesPerView: 1,
                    },
                    0: {
                        slidesPerView: 1,
                    },
                },
            });
        }

        //>> Service Slider Start <<//
        if($('.testimonial-slider').length > 0) {
            const testimonialSlider = new Swiper(".testimonial-slider", {
                spaceBetween: 30,
                speed: 2000,
                loop: true,
                autoplay: {
                    delay: 1000,
                    disableOnInteraction: false,
                },
                navigation: {
                    nextEl: ".array-prev",
                    prevEl: ".array-next",
                },
            });
        }

        if($('.testimonial-slider-2').length > 0) {
            const testimonialSlider2 = new Swiper(".testimonial-slider-2", {
                spaceBetween: 30,
                speed: 2000,
                loop: true,
                autoplay: {
                    delay: 1000,
                    disableOnInteraction: false,
                },
                navigation: {
                    nextEl: ".array-prev",
                    prevEl: ".array-next",
                },
            });
        }

        if($('.testimonial-slider-3').length > 0) {
            const testimonialSlider3 = new Swiper(".testimonial-slider-3", {
                spaceBetween: 30,
                speed: 2000,
                loop: true,
                autoplay: {
                    delay: 1000,
                    disableOnInteraction: false,
                },
                pagination: {
                    el: ".dot",
                    clickable: true,
                },
                breakpoints: {
                    1399: {
                        slidesPerView: 3,
                    },
                    1199: {
                        slidesPerView: 2,
                    },
                    991: {
                        slidesPerView: 2,
                    },
                    767: {
                        slidesPerView: 2,
                    },
                    575: {
                        slidesPerView: 1,
                    },
                    0: {
                        slidesPerView: 1,
                    },
                },
            });
        }

        //>> Brand Slider Start <<//
        if($('.brand-slider').length > 0) {
            const brandSlider = new Swiper(".brand-slider", {
                spaceBetween: 30,
                speed: 2000,
                loop: true,
                autoplay: {
                    delay: 1000,
                    disableOnInteraction: false,
                },
                breakpoints: {
                    1199: {
                        slidesPerView: 5,
                    },
                    991: {
                        slidesPerView: 4,
                    },
                    767: {
                        slidesPerView: 3,
                    },
                    575: {
                        slidesPerView: 2,
                    },
                    0: {
                        slidesPerView: 1,
                    },
                },
            });
        }

        if($('.brand-slider-2').length > 0) {
            const brandSlider2 = new Swiper(".brand-slider-2", {
                spaceBetween: 30,
                speed: 2000,
                loop: true,
                autoplay: {
                    delay: 1000,
                    reverseDirection: true,
                    disableOnInteraction: false,
                },
                breakpoints: {
                    1199: {
                        slidesPerView: 5,
                    },
                    991: {
                        slidesPerView: 4,
                    },
                    767: {
                        slidesPerView: 3,
                    },
                    575: {
                        slidesPerView: 2,
                    },
                    0: {
                        slidesPerView: 1,
                    },
                },
            });
        }

        if($('.brand-slider-3').length > 0) {
            const brandSlider3 = new Swiper(".brand-slider-3", {
                spaceBetween: 30,
                speed: 2000,
                loop: true,
                autoplay: {
                    delay: 1000,
                    disableOnInteraction: false,
                },
                breakpoints: {
                    1399: {
                        slidesPerView: 7,
                    },
                    1199: {
                        slidesPerView: 6,
                    },
                    991: {
                        slidesPerView: 5,
                    },
                    767: {
                        slidesPerView: 4,
                    },
                    575: {
                        slidesPerView: 3,
                    },
                    0: {
                        slidesPerView: 1,
                    },
                },
            });
        }

        //>> Project Slider Start <<//
        if($('.project-slider').length > 0) {
            const projectSlider = new Swiper(".project-slider", {
                spaceBetween: 0,
                speed: 2000,
                loop: true,
                centeredSlides: true,
                navigation: {
                    nextEl: ".array-prev",
                    prevEl: ".array-next",
                },
                breakpoints: {
                    1399: {
                        slidesPerView: 3,
                    },
                    1199: {
                        slidesPerView: 2,
                    },
                    991: {
                        slidesPerView: 2,
                    },
                    767: {
                        slidesPerView: 2,
                    },
                    575: {
                        slidesPerView: 1,
                    },
                    0: {
                        slidesPerView: 1,
                    },
                },
            });
        }

        //>> Shop Slider Start <<//
        if($('.shop-slider').length > 0) {
            const shopSlider = new Swiper(".shop-slider", {
                spaceBetween: 30,
                speed: 2000,
                loop: true,
                autoplay: {
                    delay: 1000,
                    disableOnInteraction: false,
                },
                navigation: {
                    nextEl: ".array-prev",
                    prevEl: ".array-next",
                },
                breakpoints: {
                    1399: {
                        slidesPerView: 5,
                    },
                    1199: {
                        slidesPerView: 4,
                    },
                    991: {
                        slidesPerView: 3,
                    },
                    767: {
                        slidesPerView: 2,
                    },
                    575: {
                        slidesPerView: 1,
                    },
                    0: {
                        slidesPerView: 1,
                    },
                },
            });
        }
        
        // range sliger
        function getVals() {
            let parent = this.parentNode;
            let slides = parent.getElementsByTagName("input");
            let slide1 = parseFloat(slides[0].value);
            let slide2 = parseFloat(slides[1].value);
            if (slide1 > slide2) {
                let tmp = slide2;
                slide2 = slide1;
                slide1 = tmp;
            }

            let displayElement = parent.getElementsByClassName("rangeValues")[0];
            displayElement.innerHTML = "$" + slide1 + " - $" + slide2;
        }

        window.onload = function() {
            let sliderSections = document.getElementsByClassName("range-slider");
            for (let x = 0; x < sliderSections.length; x++) {
                let sliders = sliderSections[x].getElementsByTagName("input");
                for (let y = 0; y < sliders.length; y++) {
                    if (sliders[y].type === "range") {
                        sliders[y].oninput = getVals;
                        sliders[y].oninput();
                    }
                }
            }
        }

        progressBar: () => {
            const pline = document.querySelectorAll(".progressbar.line");
            const pcircle = document.querySelectorAll(".progressbar.semi-circle");
            pline.forEach(e => {
                const line = new ProgressBar.Line(e, {
                    strokeWidth: 6,
                    trailWidth: 6,
                    duration: 3000,
                    easing: 'easeInOut',
                    text: {
                        style: {
                            color: 'inherit',
                            position: 'absolute',
                            right: '0',
                            top: '-30px',
                            padding: 0,
                            margin: 0,
                            transform: null
                        },
                        autoStyleContainer: false
                    },
                    step: (state, line) => {
                        line.setText(Math.round(line.value() * 100) + ' %');
                    }
                });
                let value = e.getAttribute('data-value') / 100;
                new Waypoint({
                    element: e,
                    handler: function() {
                        line.animate(value);
                    },
                    offset: 'bottom-in-view',
                })
            });
            pcircle.forEach(e => {
                const circle = new ProgressBar.SemiCircle(e, {
                    strokeWidth: 6,
                    trailWidth: 6,
                    duration: 2000,
                    easing: 'easeInOut',
                    step: (state, circle) => {
                        circle.setText(Math.round(circle.value() * 100));
                    }
                });
                let value = e.getAttribute('data-value') / 100;
                new Waypoint({
                    element: e,
                    handler: function() {
                        circle.animate(value);
                    },
                    offset: 'bottom-in-view',
                })
            });
        }

        $(window).scroll(function() {
            if ($(this).scrollTop() > 250) {
                $("#header-sticky").addClass("sticky");
            } else {
                $("#header-sticky").removeClass("sticky");
            }
        });

        //>> Portfolio Hover Image Show Slider Start <<//
        const $portfolioImages = $(".portfolio-image");

        function followImageCursor(event, $portfolioImage) {
            const contentBox = $portfolioImage[0].getBoundingClientRect();
            const dx = event.clientX - contentBox.x;
            const dy = event.clientY - contentBox.y;
            $portfolioImage.children().eq(2).css("transform", `translate(${dx}px, ${dy}px) rotate(0)`);
        }

        $portfolioImages.each(function() {
            let animationFrameId;
            const $item = $(this);

            $item.on("mousemove", function(event) {
                if (animationFrameId) {
                    cancelAnimationFrame(animationFrameId);
                }

                animationFrameId = requestAnimationFrame(function() {
                    followImageCursor(event, $item);
                });
            });
        });


        // const projectThumb = document.querySelectorAll(".project-thumb");

        // function followImageCursor(event, projectThumb) {
        //     const contentBox = projectThumb.getBoundingClientRect();
        //     const dx = event.clientX - contentBox.x;
        //     const dy = event.clientY - contentBox.y;
        //     projectThumb.children[2].style.transform = `translate(${dx}px, ${dy}px) rotate(0)`;
        // }
        
        // projectThumb.forEach((item, i) => {
        //     item.addEventListener("mousemove", (event) => {
        //         setInterval(followImageCursor(event, item), 1000);
        //     });
        // });
        


        //>> Hero Slider Start <<//
        const sliderActive1 = ".hero-slider";
        const sliderInit1 = new Swiper(sliderActive1, {
        loop: true,
        slidesPerView: 1,
        effect: "fade",
        speed: 3000,
        autoplay: {
            delay: 6000,
            disableOnInteraction: false,
        },

        navigation: {
            nextEl: ".array-prev",
            prevEl: ".array-next",
        },

        pagination: {
            el: ".dot-2",
            clickable: true,
        },
            
        });
        // content animation when active start here
        function animated_swiper(selector, init) {
             let animated = function animated() {
                 $(selector + " [data-animation]").each(function () {
                     let anim = $(this).data("animation");
                     let delay = $(this).data("delay");
                     let duration = $(this).data("duration");
                     $(this)
                         .removeClass("anim" + anim)
                         .addClass(anim + " animated")
                         .css({
                             webkitAnimationDelay: delay,
                             animationDelay: delay,
                             webkitAnimationDuration: duration,
                             animationDuration: duration,
                         })
                         .one("animationend", function () {
                             $(this).removeClass(anim + " animated");
                         });
                 });
             };
             animated();
             init.on("slideChange", function () {
                 $(sliderActive1 + " [data-animation]").removeClass("animated");
             });
             init.on("slideChange", animated);
        }
        animated_swiper(sliderActive1, sliderInit1);

        const sliderswiper = new Swiper('.hero-slider-2', {
            // Optional parameters
            speed: 1500,
            loop: true,
            slidesPerView: 1,
            autoplay: true,
            effect: 'fade',
            breakpoints: {
                '1600': {
                    slidesPerView: 1,
                },
                '1400': {
                    slidesPerView: 1,
                },
                '1200': {
                    slidesPerView: 1,
                },
                '992': {
                    slidesPerView: 1,
                },
                '768': {
                    slidesPerView: 1,
                },
                '576': {
                    slidesPerView: 1,
                },
                '0': {
                    slidesPerView: 1,
                },
    
                a11y: false,
            },
            pagination: {
                el: ".tp-slider-2-dots",
                clickable: true,
            },
    
        });

        //>> Smooth Scroll Js <<//
        function smoothSctoll() {
            $('.smooth a').on('click', function(event) {
                var target = $(this.getAttribute('href'));
                if (target.length) {
                    event.preventDefault();
                    $('html, body').stop().animate({
                        scrollTop: target.offset().top - 120
                    }, 1500);
                }
            });
        }
        smoothSctoll();
        if ($('#smooth-wrapper').length && $('#smooth-content').length) {
            gsap.registerPlugin(ScrollTrigger, ScrollSmoother, TweenMax, ScrollToPlugin);

            gsap.config({
                nullTargetWarn: false,
            });

            let smoother = ScrollSmoother.create({
                smooth: 2,
                effects: true,
                smoothTouch: 0.1,
                normalizeScroll: false,
                ignoreMobileResize: true,
            });

        }

        //>> Split Text Animation <<//
        // const st = $(".split-text");
        // if (st.length == 0) return;
        // gsap.registerPlugin(SplitText);
        // st.each(function(index, el) {
        //     el.split = new SplitText(el, {
        //         type: "lines,words,chars",
        //         linesClass: "split-line"
        //     });
        //     gsap.set(el, {
        //         perspective: 400
        //     });
        //     if ($(el).hasClass('right')) {
        //         gsap.set(el.split.chars, {
        //             opacity: 0,
        //             x: "50",
        //             ease: "Back.easeOut",
        //         });
        //     }
        //     if ($(el).hasClass('left')) {
        //         gsap.set(el.split.chars, {
        //             opacity: 0,
        //             x: "-50",
        //             ease: "circ.out",
        //         });
        //     }
        //     if ($(el).hasClass('up')) {
        //         gsap.set(el.split.chars, {
        //             opacity: 0,
        //             y: "80",
        //             ease: "circ.out",
        //         });
        //     }
        //     if ($(el).hasClass('down')) {
        //         gsap.set(el.split.chars, {
        //             opacity: 0,
        //             y: "-80",
        //             ease: "circ.out",
        //         });
        //     }
        //     el.anim = gsap.to(el.split.chars, {
        //         scrollTrigger: {
        //             trigger: el,
        //             start: "top 90%",
        //         },
        //         x: "0",
        //         y: "0",
        //         rotateX: "0",
        //         scale: 1,
        //         opacity: 1,
        //         duration: 0.4,
        //         stagger: 0.02,
        //     });
        // });

        //>> Reveal Animation <<//
        if ($('.reveal').length) {
            gsap.registerPlugin(ScrollTrigger);
            let revealContainers = document.querySelectorAll(".reveal");
            revealContainers.forEach((container) => {
                let image = container.querySelector("img");
                let tl = gsap.timeline({
                    scrollTrigger: {
                        trigger: container,
                        toggleActions: "play none none none"
                    }
                });
                tl.set(container, {
                    autoAlpha: 1
                });
                tl.from(container, 1.5, {
                    xPercent: -100,
                    ease: Power2.out
                });
                tl.from(image, 1.5, {
                    xPercent: 100,
                    scale: 1.3,
                    delay: -1.5,
                    ease: Power2.out
                });
            });
        }

        const rangeInput = document.querySelectorAll(".range-input input"),
        priceInput = document.querySelectorAll(".price-input input"),
        range = document.querySelector(".slider .progress");
        let priceGap = 1000;

        priceInput.forEach((input) => {
            input.addEventListener("input", (e) => {
                let minPrice = parseInt(priceInput[0].value),
                    maxPrice = parseInt(priceInput[1].value);

                if (maxPrice - minPrice >= priceGap && maxPrice <= rangeInput[1].max) {
                    if (e.target.className === "input-min") {
                        rangeInput[0].value = minPrice;
                        range.style.left = (minPrice / rangeInput[0].max) * 100 + "%";
                    } else {
                        rangeInput[1].value = maxPrice;
                        range.style.right = 100 - (maxPrice / rangeInput[1].max) * 100 + "%";
                    }
                }
            });
        });

        rangeInput.forEach((input) => {
            input.addEventListener("input", (e) => {
                let minVal = parseInt(rangeInput[0].value),
                    maxVal = parseInt(rangeInput[1].value);

                if (maxVal - minVal < priceGap) {
                    if (e.target.className === "range-min") {
                        rangeInput[0].value = maxVal - priceGap;
                    } else {
                        rangeInput[1].value = minVal + priceGap;
                    }
                } else {
                    priceInput[0].value = minVal;
                    priceInput[1].value = maxVal;
                    range.style.left = (minVal / rangeInput[0].max) * 100 + "%";
                    range.style.right = 100 - (maxVal / rangeInput[1].max) * 100 + "%";
                }
            });
        });

        //Quantity 
        const inputs = document.querySelectorAll('#qty, #qty2, #qty3');
        const btnminus = document.querySelectorAll('.qtyminus');
        const btnplus = document.querySelectorAll('.qtyplus');

        if (inputs.length > 0 && btnminus.length > 0 && btnplus.length > 0) {

            inputs.forEach(function(input, index) {
                const min = Number(input.getAttribute('min'));
                const max = Number(input.getAttribute('max'));
                const step = Number(input.getAttribute('step'));

                function qtyminus(e) {
                    const current = Number(input.value);
                    const newval = (current - step);
                    if (newval < min) {
                        newval = min;
                    } else if (newval > max) {
                        newval = max;
                    }
                    input.value = Number(newval);
                    e.preventDefault();
                }

                function qtyplus(e) {
                    const current = Number(input.value);
                    const newval = (current + step);
                    if (newval > max) newval = max;
                    input.value = Number(newval);
                    e.preventDefault();
                }

                btnminus[index].addEventListener('click', qtyminus);
                btnplus[index].addEventListener('click', qtyplus);
            });
        }

        //>> Quantity Cart Js Start <<//
        let quantity = 0;
        let price = 0;
        $(".cart-item-quantity-amount, .product-quant").html(quantity);
        $(".total-price, .product-pri").html(price.toFixed(2));
        $(".cart-increment, .cart-incre").on("click", function() {
            if (quantity <= 4) {
                quantity++;
                $(".cart-item-quantity-amount, .product-quant").html(quantity);
                let basePrice = $(".base-price, .base-pri").text();
                $(".total-price, .product-pri").html((basePrice * quantity).toFixed(2));
            }
        });

        $(".cart-decrement, .cart-decre").on("click", function() {
            if (quantity >= 1) {
                quantity--;
                $(".cart-item-quantity-amount, .product-quant").html(quantity);
                let basePrice = $(".base-price, .base-pri").text();
                $(".total-price, .product-pri").html((basePrice * quantity).toFixed(2));
            }
        });

        $(".cart-item-remove>a").on("click", function() {
            $(this).closest(".cart-item").hide(300);
        });

        //>> PaymentMethod Js Start <<//
        let paymentMethod = $("input[name='pay-method']:checked").val();
        $(".payment").html(paymentMethod);
        $(".checkout-radio-single").on("click", function() {
            let paymentMethod = $("input[name='pay-method']:checked").val();
            $(".payment").html(paymentMethod);
        });

         //>> Search Popup Start <<//
         const $searchWrap = $(".search-wrap");
         const $navSearch = $(".nav-search");
         const $searchClose = $("#search-close");
 
         $(".search-trigger").on("click", function (e) {
             e.preventDefault();
             $searchWrap.animate({ opacity: "toggle" }, 500);
             $navSearch.add($searchClose).addClass("open");
         });
 
         $(".search-close").on("click", function (e) {
             e.preventDefault();
             $searchWrap.animate({ opacity: "toggle" }, 500);
             $navSearch.add($searchClose).removeClass("open");
         });
 
         function closeSearch() {
             $searchWrap.fadeOut(200);
             $navSearch.add($searchClose).removeClass("open");
         }
 
         $(document.body).on("click", function (e) {
             closeSearch();
         });
 
         $(".search-trigger, .main-search-input").on("click", function (e) {
             e.stopPropagation();
         });
 
        //>> Mouse Cursor Start <<//
        function mousecursor() {
             if ($("body")) {
                 const e = document.querySelector(".cursor-inner"),
                     t = document.querySelector(".cursor-outer");
                 let n,
                     i = 0,
                     o = !1;
                 (window.onmousemove = function(s) {
                     o ||
                         (t.style.transform =
                             "translate(" + s.clientX + "px, " + s.clientY + "px)"),
                         (e.style.transform =
                             "translate(" + s.clientX + "px, " + s.clientY + "px)"),
                         (n = s.clientY),
                         (i = s.clientX);
                 }),
                 $("body").on("mouseenter", "a, .cursor-pointer", function() {
                         e.classList.add("cursor-hover"), t.classList.add("cursor-hover");
                     }),
                     $("body").on("mouseleave", "a, .cursor-pointer", function() {
                         ($(this).is("a") && $(this).closest(".cursor-pointer").length) ||
                         (e.classList.remove("cursor-hover"),
                             t.classList.remove("cursor-hover"));
                     }),
                     (e.style.visibility = "visible"),
                     (t.style.visibility = "visible");
             }
        }
        $(function() {
            mousecursor();
        });

    }); // End Document Ready Function

    function loader() {
        $(window).on('load', function() {
            // Animate loader off screen
            $(".preloader").addClass('loaded');                    
            $(".preloader").delay(600).fadeOut();                       
        });
    }

    loader();
   

})(jQuery); // End jQuery


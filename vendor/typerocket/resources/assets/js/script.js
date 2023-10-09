jQuery(document).ready(function($) {

    // menu script
    jQuery('.stellarnav').stellarNav({
        theme: 'plain',
        breakpoint: 1199.98,
        position: 'right',
        menuLabel: 'فهرست',
        closeBtn: false,
        closeLabel: 'بستن',
        openingSpeed: 250,
        closingDelay: 250,
        // theme: 'plain', // adds default color to nav. (light, dark)
        // breakpoint: 768, // number in pixels to determine when the nav should turn mobile friendly
        // menuLabel: 'Menu', // label for the mobile nav
        // sticky: false, // makes nav sticky on scroll (desktop only)
        // position: 'static', // 'static', 'top', 'left', 'right' - when set to 'top', this forces the mobile nav to be placed absolutely on the very top of page
        // openingSpeed: 250, // how fast the dropdown should open in milliseconds
        // closingDelay: 250, // controls how long the dropdowns stay open for in milliseconds
        // showArrows: true, // shows dropdown arrows next to the items that have sub menus
        // phoneBtn: '', // adds a click-to-call phone link to the top of menu - i.e.: "18009084500"
        // phoneLabel: 'Call Us', // label for the phone button
        // locationBtn: '', // adds a location link to the top of menu - i.e.: "/location/", "http://site.com/contact-us/"
        // locationLabel: 'Location', // label for the location button
        // closeBtn: false, // adds a close button to the end of nav
        // closeLabel: 'Close', // label for the close button
        // mobileMode: false,
        // scrollbarFix: false // fixes horizontal scrollbar issue on very long navs
    });

});


// swipers script
var swiper = new Swiper(".sliderSwiper", {
    slidesPerView: 1,
    spaceBetween: 0,
    slidesPerGroup: 1,
    loop: true,
    loopFillGroupWithBlank: true,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
        dynamicBullets: true,
    },
    autoplay: {
        delay: 8000,
        disableOnInteraction: false,
    },
    breakpoints: {
        0: {
            slidesPerView: 1,
            spaceBetween: 0,
        },
        576: {
            slidesPerView: 1,
            spaceBetween: 0,
        },
        768: {
            slidesPerView: 1,
            spaceBetween: 0,
        },
        992: {
            slidesPerView: 1,
            spaceBetween: 0,
        },
        1200: {
            slidesPerView: 1,
            spaceBetween: 0,
        },
        1400: {
            slidesPerView: 1,
            spaceBetween: 0,
        },
    },
});

var swiper = new Swiper(".infoBoxSwiper", {
    slidesPerView: 1,
    spaceBetween: 15,
    slidesPerGroup: 1,
    centeredSlides: true,
    loop: true,
    loopFillGroupWithBlank: true,
    autoplay: {
        delay: 5000,
        disableOnInteraction: false,
    },
    breakpoints: {
        0: {
            slidesPerView: 1,
            spaceBetween: 15,
        },
        576: {
            slidesPerView: 1.2,
            spaceBetween: 15,
        },
        768: {
            slidesPerView: 1.4,
            spaceBetween: 15,
        },
        992: {
            slidesPerView: 2.4,
            spaceBetween: 15,
        },
        1200: {
            slidesPerView: 2.6,
            spaceBetween: 15,
        },
        1400: {
            slidesPerView: 2.6,
            spaceBetween: 15,
        },
    },
});

var swiper = new Swiper(".blogSwiper", {
    slidesPerView: 1,
    spaceBetween: 15,
    slidesPerGroup: 1,
    // centeredSlides: true,
    loop: true,
    loopFillGroupWithBlank: true,
    navigation: {
        nextEl: ".blogswiper-button-next",
        prevEl: ".blogswiper-button-prev",
    },
    autoplay: {
        delay: 5000,
        disableOnInteraction: false,
    },
    mousewheel: {
        forceToAxis: true,
    },
    breakpoints: {
        0: {
            slidesPerView: 1,
            spaceBetween: 0,
        },
        576: {
            slidesPerView: 1,
            spaceBetween: 0,
        },
        768: {
            slidesPerView: 2,
            spaceBetween: 15,
        },
        992: {
            slidesPerView: 3,
            spaceBetween: 15,
        },
        1200: {
            slidesPerView: 4,
            spaceBetween: 15,
        },
        1400: {
            slidesPerView: 4,
            spaceBetween: 15,
        },
    },
});

var swiper = new Swiper(".blogNewSwiper", {
    spaceBetween: 100,
    slidesPerGroup: 1,
    centeredSlides: true,
    loop: true,
    loopFillGroupWithBlank: true,
    autoplay: {
        delay: 5000,
        disableOnInteraction: false,
    },
    breakpoints: {
        0: {
            slidesPerView: 1,
			spaceBetween: 10,
        },
        576: {
            slidesPerView: 1,
			spaceBetween: 40,
        },
        768: {
            slidesPerView: 2,
			spaceBetween: 40,
        },
        992: {
            slidesPerView: 2,
			spaceBetween: 40,

        },
        1200: {
            slidesPerView: 3,
			spaceBetween: 100,
        },
        1400: {
            slidesPerView: 3,
			spaceBetween: 100,
        },
    },
});

var swiper = new Swiper(".ourteamSwiper", {
    slidesPerView: 1,
    spaceBetween: 15,
    slidesPerGroup: 1,
    loop: true,
    loopFillGroupWithBlank: true,
    autoplay: {
        delay: 5000,
        disableOnInteraction: false,
    },
    mousewheel: {
        forceToAxis: true,
    },
    breakpoints: {
        0: {
            slidesPerView: 1,
            spaceBetween: 0,
        },
        576: {
            slidesPerView: 1,
            spaceBetween: 0,
        },
        768: {
            slidesPerView: 2,
            spaceBetween: 15,
        },
        992: {
            slidesPerView: 3,
            spaceBetween: 15,
        },
        1200: {
            slidesPerView: 4,
            spaceBetween: 15,
        },
        1400: {
            slidesPerView: 4,
            spaceBetween: 15,
        },
    },
});

var swiper = new Swiper(".googleadsSwiper", {
    slidesPerView: 1,
    spaceBetween: 0,
    slidesPerGroup: 1,
    loop: true,
    speed: 500,
    loopFillGroupWithBlank: true,
    direction: "horizontal",
    effect: "fade",
    autoplay: {
        delay: 3000,
        disableOnInteraction: false,
    },
    keyboard: {
        enabled: true,
        onlyInViewport: true
    },
    initialSlide: 0,
    on: {
        init: () => {
            // swiperAnimation.init(this).animate();
        },
        slideChangeTransitionEnd: () => {
            const index_currentSlide = this.realIndex;
            const currentSlide = this.slides[index_currentSlide]
            const currentSlideTitle = currentSlide.getElementsByClassName("title")[0];
            const currentSlideImage = currentSlide.getElementsByClassName("image")[0].querySelector("img");
            currentSlideTitle.setAttribute("style", "animation: slide-bottom 500ms ease-in-out forwards;");
            currentSlideImage.setAttribute("style", "animation: scale-up-center 500ms ease-in-out forwards");
            // console.log(swiper.activeIndex);
            // console.log(currentSlideImage);
        },
        // slideChange: () => {  
        // },
    },
});

var swiper = new Swiper(".discoverSwiper", {
    // slidesPerView: "auto",
    slidesPerView: 2.6,
    spaceBetween: 30,
    slidesPerGroup: 1,
    centeredSlides: true,
    loop: true,
    loopFillGroupWithBlank: true,
    navigation: {
        nextEl: ".discoverswiper-button-next",
        prevEl: ".discoverswiper-button-prev",
    },
    // autoplay: {
    //     delay: 5000,
    //     disableOnInteraction: false,
    // },
    breakpoints: {
        0: {
            // slidesPerView: 1,
            // spaceBetween: 15,
        },
        576: {
            // slidesPerView: 1.2,
            // spaceBetween: 15,
        },
        768: {
            // slidesPerView: 1.4,
            // spaceBetween: 15,
        },
        992: {
            // slidesPerView: 2.4,
            // spaceBetween: 15,
        },
        1200: {
            // slidesPerView: 2.6,
            // spaceBetween: 15,
        },
        1400: {
            // slidesPerView: 2.6,
            // spaceBetween: 15,
        },
    },
});






const sliderNewSwiperCallbackBack = (swiper, action) => {

    if( action == "init" ) {
        var currentSlide = document.querySelector(".swiper-slide");
    } else {
        var currentSlide = swiper.visibleSlides[0];
    }

    let currentSlideAtt = currentSlide.getAttribute("data-back-color");
    let backSlider = document.getElementById("slider-new");
    backSlider.style.backgroundColor = currentSlideAtt;

}

const sliderNewSwiperCallbackHead = (swiper, action) => {

    var currentDom = document.querySelectorAll(".content-column .head");

    if( action == "init" ) {
        var currentSlide = currentDom[0];
    } else {
        var currentSlide = currentDom[swiper.activeIndex];
    }

    currentDom.forEach( (e) => {
        e.style.display = "none";
    });

    gsap.fromTo( 
        currentSlide,
        { 
            // y: -40,
            opacity: 0,
        },
        { 
            // y: 0,
            opacity: 1,
            duration: 2.2,
        } 
    );
    currentSlide.style.display = "flex";

}

const sliderNewSwiperCallbackCurrentSlide = (swiper, action) => {

    var progressCurrentSlide = document.querySelector(".autoplay-progress .curren-silde");
    var currentSlide = 1;

    if( action == "init" ) {
        progressCurrentSlide.innerHTML = (swiper.activeIndex) + 1;
        currentSlide = progressCurrentSlide;
    } else {
        progressCurrentSlide.innerHTML = (swiper.activeIndex) + 1;
        currentSlide = progressCurrentSlide;
    }

}

const sliderNewSwiperCallbackTotalSlide = (swiper) => {

    var progressTotalSlide = document.querySelector(".autoplay-progress .total-slide");
    var TotalSlide = document.querySelectorAll(".sliderNewSwiper .swiper-slide").length;
    progressTotalSlide.innerHTML = TotalSlide;

}

var swiper = new Swiper(".sliderNewSwiper", {
    // effect: "cards",
    // grabCursor: true,
    // cardsEffect: {
        // perSlideOffset: 10, // Space between cards in px
        // perSlideRotate: 1, // Rotation of cards in degrees
        // rotate: 50,
    // },
    effect: "creative",
    creativeEffect: {
        limitProgress: 2,
        prev: {
            translate: ['1000%', 0, 0],
            rotate: [0, 0, 0],
        },
        next: {
            translate: [0, 0, 0],
            rotate: [0, 0, 5],
        },
    },
    navigation: {
        nextEl: ".sliderNewSwiper-button-next",
        prevEl: ".sliderNewSwiper-button-prev",
    },
    autoplay: {
        delay: 3000,
        disableOnInteraction: false
    },
    on: {
        init: () => {
            sliderNewSwiperCallbackBack(swiper, "init");
            sliderNewSwiperCallbackHead(swiper, "init");
            sliderNewSwiperCallbackCurrentSlide(swiper, "init");
            sliderNewSwiperCallbackTotalSlide();
            // swiperAnimation.init(this).animate();
            // console.log(swiper.activeIndex);
            // console.log(swiper.visibleSlides[0]);
        },
        slideChange: () => {
            sliderNewSwiperCallbackBack(swiper, "change");
            sliderNewSwiperCallbackHead(swiper, "change");
            sliderNewSwiperCallbackCurrentSlide(swiper, "change");
            sliderNewSwiperCallbackTotalSlide();
        },
        // slideChangeTransitionEnd: () => {  
        // },
        autoplayTimeLeft: (swiper, time, progress) => {
            const progressCircle = document.querySelector(".autoplay-progress svg");
            // const progressContent = document.querySelector(".autoplay-progress span");
            progressCircle.style.setProperty("--progress", 1 - progress);
            // progressContent.textContent = `${Math.ceil(time / 1000)}s`;
        }
    },
});

const sliderNewSwiperCallbackReset = () => {

    document.querySelector(".reset-slide").addEventListener("click", (e) => {
        swiper.slideTo(0);
    });

}
sliderNewSwiperCallbackReset();


// lightGallery Scripts
// lightGallery(document.querySelector("#our-team .gallery"), {
//     plugins: [
//         lgZoom,
//         lgAutoplay,
//         // lgComment,
//         lgFullscreen,
//         // lgHash,
//         lgPager,
//         lgRotate,
//         // lgShare,
//         lgThumbnail,
//         lgVideo,
//         // lgMediumZoom,
//     ],
// });


// newsletter animation script
const bodymovinDiv = document.querySelector('.bodymovin');
const zone = document.querySelector('.zone');
let animationRunning = false;
const animData = {
    container: bodymovinDiv,
    renderer: 'svg',
    loop: false,
    autoplay: false,
    path: 'https://s3-us-west-2.amazonaws.com/s.cdpn.io/49240/stick-man.json'
};

const anim = lottie.loadAnimation(animData);
anim.setSpeed(2.6);

zone.addEventListener('mouseenter', mouseEnter);
zone.addEventListener('mouseleave', mouseLeave);

function mouseEnter() {
    if (!animationRunning) {
        animationRunning = true;
        bodymovinDiv.classList.remove('bodymovin--hidden');
        anim.loop = false;
        anim.setDirection(1);
        anim.playSegments([0, 8], true);
        anim.addEventListener('complete', startLoop);
    }
}

function mouseLeave() {
    // anim.stop();
    bodymovinDiv.classList.add('bodymovin--hidden');
    animationRunning = false;
    anim.removeEventListener('complete', startLoop); // If we leave before the loop starts we want to make sure to clear it
}

function startLoop() {
    anim.loop = true;
    anim.removeEventListener('complete', startLoop);
    anim.playSegments([9, 13], true);
}


// newsletter disable send
const form = document.getElementById('newsletter');
form.addEventListener('keypress', function(e) {
  if (e.keyCode === 13) {
    e.preventDefault();
  }
});


// Prfoessionally Scroll
const growSectionScroll = (e) => {

    element = document.getElementById("grow-prfoessionally");
    element.scrollIntoView(
        { 
            behavior: "smooth",
        }
    );

}


// Prfoessionally Cursor
const growCursor = (event) => {

    let growContainer = document.querySelector(".grow-prfoessionally");
        cursor = document.createElement("div"),
        follow = document.createElement("div");

    cursor.classList.add("cursor");
    follow.classList.add("follow");

    growContainer.appendChild(cursor);
    growContainer.appendChild(follow);

    // growContainer.style.cursor = "none";

    function move(obj, e) {

        obj.style = "";
        obj.style.left = (e.clientX - 20) + "px";
        obj.style.top = (e.clientY - 20) + "px";

        // var x = e.clientX * 100 / window.innerWidth + "%";
        // var y = e.clientY * 100 / window.innerHeight + "%";
        // obj.style.left = e.clientX * 100 / window.innerWidth + "%";
        // obj.style.top = e.clientY * 100 / window.innerHeight + "%";
    }

    growContainer.addEventListener("mousemove", function(event) {
        let e = event,
            t = e.target,
            f = follow,
            c = cursor;
            move(c, e);
            move(f, e);
    });

    growContainer.addEventListener("mouseout", function(event) {
        growContainer.removeChild(cursor);
        growContainer.removeChild(follow);
    });

}


// Avatars Show
var growAvatars = document.querySelectorAll(".avatars");

const growAvatarsCallBack = () => {

    gsap.fromTo( 
        growAvatars,
        { 
            opacity: 0,
        },
        { 
            opacity: 1,
            duration: 2.5,
        } 
    );
    
}

if( growAvatars ) {

    var nextEl;
    setInterval( () => {

        for (let i = 0; i < growAvatars.length; i++) {

            var element = growAvatars[i];

            if( element.classList.contains("active") ) {

                if( i == (growAvatars.length) - 1 ) {
                    nextEl = 0;
                    
                } else {
                    nextEl = i;
                    nextEl++;
                }

            }
           
        }

        growAvatars.forEach( (e)=> {
            e.classList.remove("active");
        });

        growAvatars[nextEl].classList.add("active");
        growAvatarsCallBack();

    }, 3000);

}


// Spotlight GSAP
const spotlightAnim = (e) => {

    // gsap.registerPlugin(DrawSVGPlugin, MotionPathPlugin);

    gsap.fromTo(
        ".doodle-shape",
        {
            drawSVG: 0,
        },
        {
            // drawSVG: "100% 100%",
            opacity: 1,
            duration: 2,
            ease: "power2.inOut",
        }
    );

    gsap.fromTo(
        ".arrow-shape",
        {
            scale: 0,
            delay: 1,
        },
        {
            scale: 1,
            rotationX: 180,
            rotation: 150,
            delay: 1,
            duration: 2,
            ease: "power2.inOut",
        }

    );

    // var doodleShape1 = document.querySelector(".doodle-shape-1");
    // var doodleShape1 = document.querySelector(".doodle-shape-1").getAttribute("d");

    // setInterval( () => {
    //     doodleShape1.setAttribute("d", "M105 10C28-9-29 40 34 56c62 16 91-29 66-29");
    // }, 2000);

}
// spotlightAnim();

const parallaxScroll = () => {
    
    gsap.registerPlugin(ScrollTrigger);

    const tl = gsap.timeline({
        duration: 0,
        ease: "none",
        scrollTrigger: {
          trigger: ".parallax-new .content-column",
          start: "+25%",
          end: "bottom",
        }
    });

    tl.to(".parallax-new .image-column .ads", 
        {
            display: "none",
        }
    );
    tl.to(".parallax-new .image-column .web", 
        {
            display: "inline-block",
        }
    );

    // const tl2 = gsap.timeline({
    //     duration: 0,
    //     ease: "none",
    //     scrollTrigger: {
    //       trigger: ".parallax-new .content-column",
    //       start: "top",
    //       end: "25%",
    //     }
    // });

    // tl2.to(".parallax-new .image-column .web", 
    //     {
    //         display: "none",
    //     }
    // );
    // tl2.to(".parallax-new .image-column .ads", 
    //     {
    //         display: "inline-block",
    //     }
    // );

}
parallaxScroll();


// change image accordion
const accordionImage = (index) => {

    index = index ? index : 0;
    const pictures = document.querySelectorAll(".pictures picture");
    
    for (let item = 0; item < pictures.length; item++) {

        const pic = pictures[item];
        if( item != index ) {
            pic.style.cssText = 'display:none;';
        } else {
            pic.style.cssText = 'display:inline-block;';
        }
        
        // console.log(pictures.parentNode);
    }

}


// Tab Navs swicth
function tabChangeHandler() {

    nav = document.querySelector(".nav-pills"); 
    navLink = nav.querySelectorAll(".nav-link");
    navCount = nav.querySelectorAll(".nav-link").length;

    content = document.querySelector(".tab-content"); 
    contentPane = content.querySelectorAll(".tab-pane");

    for (let i = 0; i <= (navCount - 1); i++) {

        let el = navLink[i];
        if ( i < (navCount - 1) ) { 

            if( el.classList.contains("active") ) {
                // button
                elNext = navLink[i + 1];
                navLink.forEach((elNav) => {
                    elNav.classList.remove("active");
                });
                elNext.classList.add("active");

                // content
                currentNav = elNext.getAttribute("data-bs-target");
                currentPane = document.getElementById(currentNav.slice(1));
                contentPane.forEach((elPane) => {
                    elPane.classList.remove("show");
                    elPane.classList.remove("active");
                });
                currentPane.classList.add("show");
                currentPane.classList.add("active");
                break;
            }

        } else {

            if( el.classList.contains("active") ) {
                // button
                elFirst = navLink[0];
                navLink.forEach((elNav) => {
                    elNav.classList.remove("active");
                });
                elFirst.classList.add("active");

                // content
                currentNav = elFirst.getAttribute("data-bs-target");
                currentPane = document.getElementById(currentNav.slice(1));
                contentPane.forEach((elPane) => {
                    elPane.classList.remove("show");
                    elPane.classList.remove("active");
                });
                currentPane.classList.add("show");
                currentPane.classList.add("active");
                break;
            }

        }
        
    }

}

nav = document.querySelector(".nav-pills"); 
navLink = nav.querySelectorAll(".nav-link");

navLink.forEach((e) => {

    e.addEventListener("click", () => {
        clearInterval(tabChangeHandler);
    });

});
setInterval(tabChangeHandler, 3000);
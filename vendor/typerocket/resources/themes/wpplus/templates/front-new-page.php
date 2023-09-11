<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access directly. ?>

<?php /* Template Name: قالب صفحه اصلی (جدید) */ ?>

<?php get_header(); ?>

<?php
    $queried_id = get_queried_object_id();

    $option = new \App\Models\Option;
    $where_option = [
        [
            'column'   => 'option_name',
            'operator' => '=',
            'value'    => 'posts_per_page'
        ]
    ];
    $option = $option->findAll()->where($where_option)->select('option_value')->get()->toArray();
    $option = $option[0]['option_value'];

    $post = new \App\Models\Post;
    $where_post = [
        [
            'column'   => 'post_status',
            'operator' => '=',
            'value'    => 'publish'
        ]
    ];
    $posts = $post->findAll()->with('meta')->where($where_post)->orderBy('id', 'DESC')->take($option)->get();
?>

<main id="main" class="main index-new">
    <section id="slider-new" class="container-fluid slider-new">
        <div class="container">
            <div class="row">
                <div class="col-12 col-xl-6 image-column column">
                    <!-- Swiper -->
                    <div class="swiper sliderNewSwiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide odd-slide" data-back-color="#a4c9d8">
                                <img class="slider-img" src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/slider8.webp" alt="تبلیغ در گوگل" width="auto" height="auto" />
                            </div>
                            <div class="swiper-slide even-slide" data-back-color="#75beeb">
                                <img sclass="slider-img" src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/slider9.webp" alt="تبلیغ در یوتیوب" width="auto" height="auto" />
                            </div>
                            <div class="swiper-slide odd-slide" data-back-color="#ffbc4b">
                                <img class="slider-img" src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/slider10.webp" alt="طراحی وب سایت" width="auto" height="auto" />
                            </div>
                            <div class="swiper-slide even-slide" data-back-color="#e3e1df">
                                <img sclass="slider-img" src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/slider11.webp" alt="سئو" width="auto" height="auto" />
                            </div>
                            <div class="swiper-slide odd-slide" data-back-color="#ffbc4b">
                                <img class="slider-img" src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/slider12.webp" alt="نقد کردن درآمد یوتیوب" width="auto" height="auto" />
                            </div>
                            <div class="swiper-slide even-slide" data-back-color="#ffd0d5">
                                <img sclass="slider-img" src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/slider13.webp" alt="سئو یوتیوب" width="auto" height="auto" />
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-xl-6 content-column column">
                    <div class="head">
                        <span class="sup">تبلیغ در گوگل</span>
                        <div class="text">اولین پاسخ مشتریان خود باشید</div>
                    </div>
                    <div class="head">
                        <span class="sup">تبلیغ در یوتیوب</span>
                        <div class="text">در مقابل چشمان مشتریان خود قرار بگیرید</div>
                    </div>
                    <div class="head">
                        <span class="sup">طراحی وب سایت</span>
                        <div class="text">کسب و کار خود را جهانی کنید</div>
                    </div>
                    <div class="head">
                        <span class="sup">سئو</span>
                        <div class="text">گوی رقابت را از دیگران بربایید</div>
                    </div>
                    <div class="head">
                        <span class="sup">نقد کردن درآمد یوتیوب</span>
                        <div class="text">نگران درآمدتان نباشید. تنها به محتوا فکر کنید</div>
                    </div>
                    <div class="head">
                        <span class="sup">سئو یوتیوب</span>
                        <div class="text">در یوتیوب بدرخشید، جلوتر از همه باشید</div>
                    </div>
                </div>
                
                <!-- If we need navigation buttons -->
                <div class="controller">
                    <div class="buttons">
                        <div class="swiper-button-prev sliderNewSwiper-button-prev"></div>
                        <div class="swiper-button-next sliderNewSwiper-button-next"></div>
                        <button class="btn reset-slide">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" class="">
                                <g fill="currentColor" stroke="currentColor" stroke-width=".2">
                                    <path d="M17.4491 6.70996h.17v2.29l4.76-2.75-4.76-2.79v2.25h-.16a6.50007 6.50007 0 00-4.95 2.29L5.79914 15.84a5.50032 5.50032 0 01-4.18 1.93v1a6.491 6.491 0 002.72046-.5974A6.48927 6.48927 0 006.55914 16.49l6.70996-7.85004a5.49034 5.49034 0 011.8779-1.42435 5.49043 5.49043 0 012.3021-.50565h0zM22.3798 17.7902l-4.76-2.79v2.25h-.17a5.48862 5.48862 0 01-2.302-.5057 5.48975 5.48975 0 01-1.878-1.4243l-1.27-1.39-.66.77 1.17 1.3a6.49996 6.49996 0 002.22 1.6817 6.50077 6.50077 0 002.72.5983h.17v2.25l4.76-2.74zM5.79914 8.15998l1.63 1.91.66-.77-1.53-1.79a6.49006 6.49006 0 00-4.94-2.28v1a5.50001 5.50001 0 014.18 1.93z"></path>
                                </g>
                            </svg>
                        </button>
                    </div>
                    <div class="autoplay-progress">
                        <span class="total-slide"></span>
                        <svg>
                            <line x1="0" y1="0" x2="0" y2="600" stroke="black" stroke-width="3" />
                        </svg>
                        <span class="curren-silde"></span>
                    </div>

                    <div class="scroll-down" onclick="growSectionScroll();">
                        <span>اسکرول کنید</span>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" class="" fill="none">
                            <path stroke="currentColor" stroke-width="1.4" d="M12 3v17M19 13l-7 7-7-7"></path>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="grow-prfoessionally" class="container-fluid grow-prfoessionally" onmouseover="growCursor();">
        <div class="container">
            <div class="row gap gx-5 gy-3">
                <div class="col-12 col-xl-5 order-2 image-column column">
                    <div class="avatars active">
                        <img src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/slider8.webp">
                        <img src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/slider9.webp">
                    </div>
                    <div class="avatars">
                        <img src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/slider10.webp">
                        <img src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/slider11.webp">
                    </div>
                    <div class="avatars">
                        <img src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/slider12.webp">
                        <img src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/slider13.webp">
                    </div>
                </div>
                <div class="col-12 col-xl-7 order-1 content-column column">
                    <div class="title">
                        <span>در کنار</span>
                        <!-- Component Circle Shape Start -->
                        <div class="circle-shape">
                            <span class="circle circle-1"></span>
                            <span class="circle circle-2"></span>
                            <span class="arrow arrow-left"><i class="las la-long-arrow-alt-left"></i></span>
                        </div>
                        <!-- Component Circle Shape End -->
                        <span>بزرگترین یوتیوبرهای ایران باشید</span>
                    </div>
                    <p class="desc">
                        بهترین یوتیوبرهای ایران نقد کردن درآمد یوتیوب خود را به جیمکس سپرده اند. جای شما در کنار بهترین های ایران خالی است. درآمد یوتیوب خود را در کمترین زمان، با بهترین تعرفه نقد کنید.
                    </p>
                    <button class="btn">
                        <a href="#">شروع کنید</a>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <section id="spotlight-new" class="container-fluid spotlight-new" onloade="spotlightAnim(this);">
        <div class="container">
            <div class="row">
                <div class="col-12 column">
                    <div class="head">
                        <span>اگر همچنان سوالی در ذهن دارید با کارشناسان ما تماس حاصل فرمایید</span>
                        <span>برای مشاوره و اطلاع از تعرفه ی خدمات تبلیغات گوگل با کارشناسان ما در تماس باشید</span>
                    </div>

                    <div class="shape">
                        <svg class="doodle-shape" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 120 68" width="110px" height="auto">
                            <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                <path class="doodle-shape-1" d="0"></path>
                                <path class="doodle-shape-2" d="M109 16C82-20-56 21 30 55s105-27 75-45"></path>
                            </g>
                        </svg>
                        <svg class="arrow-shape" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 196 48" width="240px" height="auto">
                            <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.4">
                                <path d="M154 21c6-2 13-4 23 0-13-5-16-8-18-15"></path>
                                <path d="M14 28c29-22 101-5 104 9 1 7-18 7 0-12s53-6 53-6"></path>
                            </g>
                        </svg>
                    </div>

                    <div class="form">
                        <form action="" method="post" onsubmit="event.preventDefault();">
                            <input type="text" name="" id="">
                            <input type="submit" onclick="" onkeypress="return event.keyCode != 13;" value="ارسال">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
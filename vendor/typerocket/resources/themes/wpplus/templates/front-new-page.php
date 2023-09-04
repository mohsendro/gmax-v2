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




<!-- Demo styles -->
<style>
    .swiper {
        width: 340px;
        height: 420px;
        padding: 50px;
    }

    .swiper-slide {
      display: flex;
      align-items: center;
      justify-content: center;
      border-radius: 18px;
      font-size: 22px;
      font-weight: bold;
      color: #fff;
    }

    .slider-card {
      display: flex;
      align-items: center;
      justify-content: center;
      border-radius: 18px;
      font-size: 22px;
      font-weight: bold;
      color: #fff;
    }

    .swiper-slide:nth-child(1n) {
      background-color: rgb(206, 17, 17);
    }

    .swiper-slide:nth-child(2n) {
      background-color: rgb(0, 140, 255);
    }

    .swiper-slide:nth-child(3n) {
      background-color: rgb(10, 184, 111);
    }

    .swiper-slide:nth-child(4n) {
      background-color: rgb(211, 122, 7);
    }

    .swiper-slide:nth-child(5n) {
      background-color: rgb(118, 163, 12);
    }

    .swiper-slide:nth-child(6n) {
      background-color: rgb(180, 10, 47);
    }

    .swiper-slide:nth-child(7n) {
      background-color: rgb(35, 99, 19);
    }

    .swiper-slide:nth-child(8n) {
      background-color: rgb(0, 68, 255);
    }

    .swiper-slide:nth-child(9n) {
      background-color: rgb(218, 12, 218);
    }

    .odd-slide {
        /* transform: translate3d(calc(240px), calc(0px), calc(0px)) rotateX(0deg) rotateY(0deg) rotateZ(5deg) scale(1); */
    }

    .even-slide {
        /* transform: translate3d(calc(240px), calc(0px), calc(0px)) rotateX(0deg) rotateY(0deg) rotateZ(-5deg) scale(1); */
    }



    .autoplay-progress {
      position: absolute;
      right: 16px;
      bottom: 16px;
      z-index: 10;
      width: 48px;
      height: 48px;
      display: flex;
      align-items: center;
      justify-content: center;
      font-weight: bold;
      color: var(--swiper-theme-color);
    }

    .autoplay-progress svg {
      --progress: 0;
      position: absolute;
      left: 0;
      top: 0px;
      z-index: 10;
      width: 100%;
      height: 100%;
      stroke-width: 4px;
      stroke: var(--swiper-theme-color);
      fill: none;
      stroke-dashoffset: calc(125.6 * (1 - var(--progress)));
      stroke-dasharray: 125.6;
      transform: rotate(-90deg);
    }
</style>



<main id="main" class="main index-new">
    <section id="slider-new" class="container-fluid slider-new">
        <div class="row">
            <div class="col-12 col-xl-6 image-column column">
                <!-- Swiper -->
                <div class="swiper sliderNewSwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide odd-slide" data-back-color="rgb(206, 17, 17)">
                            <!-- Component Slider Card Start -->
                            <div class="slider-card">
                                Slide 1
                            </div>
                            <!-- Component Slider Card End -->
                        </div>
                        <div class="swiper-slide even-slide" data-back-color="rgb(0, 140, 255)">
                            <!-- Component Slider Card Start -->
                            <div class="slider-card">
                                Slide 2
                            </div>
                            <!-- Component Slider Card End -->
                        </div>
                        <div class="swiper-slide odd-slide" data-back-color="rgb(10, 184, 111)">
                            <!-- Component Slider Card Start -->
                            <div class="slider-card">
                                Slide 3
                            </div>
                            <!-- Component Slider Card End -->
                        </div>
                        <div class="swiper-slide even-slide" data-back-color="rgb(211, 122, 7)">
                            <!-- Component Slider Card Start -->
                            <div class="slider-card">
                                Slide 4
                            </div>
                            <!-- Component Slider Card End -->
                        </div>
                        <div class="swiper-slide odd-slide" data-back-color="rgb(118, 163, 12)">
                            <!-- Component Slider Card Start -->
                            <div class="slider-card">
                                Slide 5
                            </div>
                            <!-- Component Slider Card End -->
                        </div>
                        <div class="swiper-slide even-slide" data-back-color="rgb(180, 10, 47)">
                            <!-- Component Slider Card Start -->
                            <div class="slider-card">
                                Slide 6
                            </div>
                            <!-- Component Slider Card End -->
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
                    <div class="text">در یوتیوب بدرخشید، جلوتر از همه بشید</div>
                </div>
            </div>


            <!-- If we need navigation buttons -->
            <div class="controller">
                <div class="swiper-button-prev sliderNewSwiper-button-prev"></div>
                <div class="swiper-button-next sliderNewSwiper-button-next"></div>
                <div class="autoplay-progress">
                    <svg viewBox="0 0 48 48" width="48px" height="auto">
                        <circle cx="24" cy="24" r="20"></circle>
                    </svg>
                    <span></span>
                </div>
            </div>

        </div>
    </section>
</main>

<?php get_footer(); ?>
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

    <section id="service" class="container service">
        <div class="row">
            <div class="col-12 column">
                <div class="head">
                    <div class="title" data-aos="fade-up" data-aos-duration="500" data-aos-delay="0" data-aos-easing="ease-in-sine">با جیمکس ادز، در گوگل اولین باشید</div>
                    <h1 class="subtitle" data-aos="fade-up" data-aos-duration="500" data-aos-delay="0" data-aos-easing="ease-in-sine">ارائه خدمات تبلیغات در گوگل</h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-xl-2 d-none d-xl-block">
                <a href="https://www.google.com/partners/agency?id=5847789388" target="_blank" class="slogan" rel="nofollow">جیمکس ادز، پارتنر رسمی گوگل در ایران</a>
            </div>
            <div class="col-12 col-xl-10">
                <!-- Swiper -->
                <div class="swiper infoBoxSwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <!-- Component Info Box Card Start -->
                            <div class="info-box">
                                <div class="info-img">
                                    <svg width="auto" height="auto" viewBox="0 0 48 48" id="b" xmlns="http://www.w3.org/2000/svg">
                                        <defs>
                                            <style>
                                            .c {
                                                fill: none;
                                                stroke: #000000;
                                                stroke-linecap: round;
                                                stroke-linejoin: round;
                                            }
                                            </style>
                                        </defs>
                                        <path class="c" d="m38.6591,40.3009c4.0655-3.7527,6.4109-9.2645,6.4109-15.8123,0-1.5245-.1368-2.9905-.3909-4.3977h-20.2491v8.3264h11.5709c-.5082,2.6777-2.0327,4.945-4.3195,6.4695" />
                                        <path class="c" d="m5.2364,33.6555c3.5377,7.0168,10.7891,11.8445,19.1936,11.8445,5.805,0,10.6718-1.9155,14.2291-5.1991l-6.9777-5.4141c-1.9155,1.29-4.3586,2.0718-7.2514,2.0718-5.59,0-10.3395-3.7723-12.04-8.8541" />
                                        <path class="c" d="m5.2364,14.3641c-1.4659,2.8927-2.3064,6.1568-2.3064,9.6359s.8405,6.7432,2.3064,9.6359l5.5705-4.3391s1.5832-1.2118,1.5832-1.2118c-.43-1.29-.6841-2.6582-.6841-4.085s.2541-2.795.6841-4.085" />
                                        <path class="c" d="m24.43,11.0609c3.1664,0,5.9809,1.0945,8.2286,3.2055l6.1568-6.1568c-3.7332-3.4791-8.5805-5.6095-14.3855-5.6095-8.4045,0-15.6559,4.8277-19.1936,11.8641l7.1536,5.5509c1.7005-5.0818,6.45-8.8541,12.04-8.8541Z" />
                                    </svg>
                                </div>
                                <div class="info-title">تبلیغ در گوگل</div>
                                <div class="info-desc">
                                    دسترسی پذیری به مشتری تنها یک راه ۱۰۰٪ مطمئن دارد. ما این سرویس را برای شما فراهم می کنیم
                                </div>
                                <a href="https://gmaxads.com/googleads/" class="info-more">
                                    <button type="button" class="btn">
                                        <span>مشاهده بیشتر</span>
                                        <i class="las la-paperclip"></i>
                                    </button>
                                </a>
                            </div>
                            <!-- Component Info Box Card End -->
                        </div>
                        <div class="swiper-slide">
                            <!-- Component Info Box Card Start -->
                            <div class="info-box">
                                <div class="info-img">
                                    <svg width="auto" height="auto" viewBox="0 0 48 48" id="a" xmlns="http://www.w3.org/2000/svg">
                                        <defs>
                                            <style>
                                            .b {
                                                fill: none;
                                                stroke: #000000;
                                                stroke-linecap: round;
                                                stroke-linejoin: round;
                                            }
                                            </style>
                                        </defs>
                                        <g>
                                            <line class="b" x1="12" y1="39" x2="36" y2="39" />
                                            <rect class="b" x="4.5" y="9" width="39" height="26" rx="2" ry="2" />
                                        </g>
                                        <polygon class="b" points="29.8597 22 20.1403 16.404 20.1403 27.596 29.8597 22" />
                                    </svg>
                                </div>
                                <div class="info-title">کسب درآمد از یوتیوب</div>
                                <div class="info-desc">
                                    دسترسی پذیری به مشتری تنها یک راه ۱۰۰٪ مطمئن دارد. ما این سرویس را برای شما فراهم می کنیم
                                </div>
                                <a href="https://gmaxads.com/googleads/" class="info-more">
                                    <button type="button" class="btn">
                                        <span>مشاهده بیشتر</span>
                                        <i class="las la-paperclip"></i>
                                    </button>
                                </a>
                            </div>
                            <!-- Component Info Box Card End -->
                        </div>
                        <div class="swiper-slide">
                            <!-- Component Info Box Card Start -->
                            <div class="info-box">
                                <div class="info-img">
                                    <svg width="auto" height="auto" viewBox="0 0 1024 1024" fill="#000000" class="icon" version="1.1" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M361.478 1023.792c-14.336 0-28.666-5.466-39.576-16.368L16.574 702.098c-10.534-10.542-16.336-24.6-16.344-39.592 0-14.978 5.802-29.034 16.336-39.56L457.608 181.89c20.794-20.812 59.496-31.666 88.068-24.598l206.468 50.624c24.582 6.038 49.352 27.824 60.192 52.968a8.006 8.006 0 0 1-4.156 10.51c-4.058 1.742-8.776-0.102-10.526-4.17-8.714-20.194-29.924-39.014-49.32-43.776L541.866 172.824c-22.858-5.646-56.288 3.702-72.952 20.374L27.874 634.254c-7.512 7.496-11.652 17.538-11.652 28.252 0 10.728 4.146 20.756 11.66 28.284l305.33 305.328c15.586 15.588 40.958 15.588 56.544 0l441.008-441.046c16.682-16.68 26.02-50.078 20.396-72.952l-37.326-152.234a7.992 7.992 0 0 1 5.842-9.676 8.008 8.008 0 0 1 9.684 5.864l37.326 152.228c7.028 28.564-3.78 67.258-24.614 88.076L401.062 1007.426c-10.908 10.9-25.254 16.366-39.584 16.366z" fill="" />
                                        <path d="M663.902 423.99c-16.368 0-32.766-6.232-45.228-18.704-24.958-24.95-24.958-65.54-0.032-90.474 21.99-21.942 56.38-25.012 81.776-7.278a66.824 66.824 0 0 1 8.714 7.222 8.022 8.022 0 0 1 0.094 11.308 7.98 7.98 0 0 1-11.308 0.11 50.418 50.418 0 0 0-6.622-5.504c-19.086-13.322-44.856-11.002-61.348 5.458-18.678 18.694-18.678 49.134 0.032 67.852 18.71 18.708 49.166 18.708 67.876 0 5.654-5.678 9.84-12.69 12.09-20.264 1.248-4.224 5.746-6.654 9.932-5.396a8.02 8.02 0 0 1 5.404 9.94c-2.998 10.106-8.558 19.446-16.086 27.012-12.494 12.478-28.896 18.718-45.294 18.718z" fill="" />
                                        <path d="M663.84 392.042a31.68 31.68 0 0 1-22.55-9.356 31.796 31.796 0 0 1-9.372-22.644c0-17.624 14.368-31.97 31.984-31.97 4.438 0 7.996 3.576 7.996 7.996s-3.558 7.998-7.996 7.998c-8.808 0-15.992 7.176-15.992 15.994 0 4.28 1.656 8.292 4.686 11.314a15.734 15.734 0 0 0 11.244 4.678c4.842 0.376 8.902-1.93 11.934-5.318 2.998-3.288 8.058-3.552 11.306-0.624a8.016 8.016 0 0 1 0.624 11.292 31.97 31.97 0 0 1-23.802 10.642l-0.062-0.002zM372.794 964.54a7.972 7.972 0 0 1-5.654-2.344 7.992 7.992 0 0 1 0-11.306l373.164-373.204a7.994 7.994 0 0 1 11.308 0 7.992 7.992 0 0 1 0 11.306L378.448 962.196a7.972 7.972 0 0 1-5.654 2.344zM67.458 659.18a7.976 7.976 0 0 1-5.654-2.344 7.992 7.992 0 0 1 0-11.306l373.188-373.166a7.994 7.994 0 0 1 11.308 0 7.994 7.994 0 0 1 0 11.308L73.112 656.836a7.976 7.976 0 0 1-5.654 2.344zM333.398 812.046a8.004 8.004 0 0 1-6.786-3.766 7.988 7.988 0 0 1 2.538-11.01c10.69-6.714 38.92-28.33 41.122-47.666 0.71-6.324-1.522-11.994-6.848-17.304-14.322-14.32-37.63-12.15-62.338-9.884-27.284 2.544-55.498 5.138-75.122-14.51-5.856-5.84-8.442-13.056-7.488-20.818 2.896-23.568 38.866-45.776 42.958-48.244a8 8 0 0 1 10.962 2.75 7.978 7.978 0 0 1-2.732 10.962c-12.87 7.746-33.844 24.52-35.312 36.482-0.234 1.938-0.118 4.532 2.92 7.56 14.306 14.338 37.646 12.182 62.346 9.9 27.268-2.56 55.498-5.122 75.114 14.494 8.746 8.746 12.698 19.272 11.424 30.424-3.476 30.456-43.924 56.538-48.532 59.41a8.034 8.034 0 0 1-4.226 1.22zM494.184 588.336a7.98 7.98 0 0 1-5.654-2.342l-50.54-50.542c-3.124-3.124-3.124-8.176 0-11.298s8.184-3.124 11.308 0l50.54 50.532a7.994 7.994 0 0 1-5.654 13.65zM562.012 520.484a7.992 7.992 0 0 1-5.652-2.344l-50.508-50.538c-3.124-3.124-3.124-8.184 0-11.308s8.184-3.124 11.308 0l50.508 50.54a7.992 7.992 0 0 1 0 11.306 7.944 7.944 0 0 1-5.656 2.344z" fill="" />
                                        <path d="M443.644 537.796a7.972 7.972 0 0 1-5.654-2.344c-21.826-21.816-21.826-57.332 0-79.158 21.834-21.818 57.348-21.818 79.166 0 3.124 3.124 3.124 8.184 0 11.308s-8.184 3.124-11.308 0c-15.594-15.594-40.958-15.58-56.552 0-15.594 15.594-15.594 40.958 0 56.552a7.98 7.98 0 0 1 0 11.298 7.956 7.956 0 0 1-5.652 2.344zM528.122 602.362c-14.344 0-28.674-5.452-39.59-16.368-3.124-3.108-3.124-8.186 0-11.308s8.184-3.124 11.308 0c15.554 15.556 40.934 15.588 56.522 0 15.586-15.586 15.586-40.964 0-56.544a7.992 7.992 0 0 1 0-11.306 7.992 7.992 0 0 1 11.306 0c21.802 21.81 21.834 57.326 0 79.16-10.902 10.898-25.24 16.366-39.546 16.366zM322.084 597.176a7.972 7.972 0 0 1-5.654-2.344 7.992 7.992 0 0 1 0-11.306l56.544-56.544a7.994 7.994 0 0 1 11.308 0 8.004 8.004 0 0 1 0 11.316l-56.544 56.536a7.986 7.986 0 0 1-5.654 2.342zM435.18 710.25a7.972 7.972 0 0 1-5.654-2.344 7.992 7.992 0 0 1 0-11.306l56.538-56.538c3.124-3.124 8.184-3.124 11.308 0s3.124 8.184 0 11.306l-56.536 56.538a7.98 7.98 0 0 1-5.656 2.344z" fill="" />
                                        <path d="M435.18 710.25a7.972 7.972 0 0 1-5.654-2.344l-113.096-113.074a7.992 7.992 0 0 1 0-11.306 7.992 7.992 0 0 1 11.306 0l113.098 113.074a7.992 7.992 0 0 1 0 11.306 7.972 7.972 0 0 1-5.654 2.344z" fill="" />
                                        <path d="M378.62 653.712a7.976 7.976 0 0 1-5.654-2.344 7.992 7.992 0 0 1 0-11.306l45.238-45.23a7.992 7.992 0 0 1 11.306 0 7.994 7.994 0 0 1 0 11.308l-45.236 45.228a7.966 7.966 0 0 1-5.654 2.344z" fill="" />
                                        <path d="M663.902 368.054a8 8 0 0 1-7.808-6.31 7.988 7.988 0 0 1 6.124-9.502C944.026 291.558 1007.746 50.106 1007.746 8.204a8 8 0 0 1 7.996-7.996 7.98 7.98 0 0 1 7.996 7.996c0 43.91-66.032 296.77-358.148 359.672a7.81 7.81 0 0 1-1.688 0.178z" fill="" />
                                        <path d="M738.776 192.12a7.992 7.992 0 0 1-4.592-1.446c-3.592-2.53-4.498-7.52-1.938-11.134C835.918 31.38 989.786 0.208 1015.774 0.208c4.436 0 7.996 3.576 7.996 7.996s-3.56 7.996-7.996 7.996c-23.27 0-171.984 31.814-270.44 172.508a7.98 7.98 0 0 1-6.558 3.412z" fill="" />
                                    </svg>
                                </div>
                                <div class="info-title">سئو</div>
                                <div class="info-desc">
                                    طراحی وب سایت شما توسط تیم حرفه ای جیمکس و با دیزاین مورد نظر شما انجام خواهد شد.
                                </div>
                                <a href="https://gmaxads.com/website-design" class="info-more">
                                    <button type="button" class="btn">
                                        <span>مشاهده بیشتر</span>
                                        <i class="las la-paperclip"></i>
                                    </button>
                                </a>
                            </div>          
                            <!-- Component Info Box Card End -->
                        </div>
                        <div class="swiper-slide">
                            <!-- Component Info Box Card Start -->
                            <div class="info-box">
                                <div class="info-img">
                                    <svg width="auto" height="auto" viewBox="0 0 48 48" id="b" xmlns="http://www.w3.org/2000/svg">
                                        <defs>
                                            <style>
                                            .e {
                                                fill: none;
                                                stroke: #000000;
                                                stroke-linecap: round;
                                                stroke-linejoin: round;
                                            }
                                            </style>
                                        </defs>
                                        <polyline id="c" class="e" points="17.592 37.092 4.5 24 17.592 10.908" />
                                        <path class="e" d="m20.4159,37.1091l7.2181-26.2181" />
                                        <polyline id="d" class="e" points="30.408 10.908 43.5 24 30.408 37.092" />
                                    </svg>
                                </div>
                                <div class="info-title">طراحی وب سایت</div>
                                <div class="info-desc">
                                    طراحی وب سایت شما توسط تیم حرفه ای جیمکس و با دیزاین مورد نظر شما انجام خواهد شد.
                                </div>
                                <a href="https://gmaxads.com/website-design" class="info-more">
                                    <button type="button" class="btn">
                                        <span>مشاهده بیشتر</span>
                                        <i class="las la-paperclip"></i>
                                    </button>
                                </a>
                            </div>          
                            <!-- Component Info Box Card End -->
                        </div>
                        <div class="swiper-slide">
                            <!-- Component Info Box Card Start -->
                            <div class="info-box">
                                <div class="info-img">
                                    <svg height="auto" width="auto" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve">
                                        <path style="fill:#E21B1B;" d="M493.392,347.76H224.728c-10.256-0.032-18.568-8.344-18.6-18.6V182.84
                                            c0.032-10.256,8.344-18.568,18.6-18.6H493.4c10.256,0.032,18.568,8.344,18.6,18.6v146.328
                                            C511.96,339.424,503.648,347.728,493.392,347.76z" />
                                        <path d="M24.096,300.152v-31.744L0,223.96h15.84l9.152,19.52c2.624,5.664,4.544,9.976,6.592,15.16h0.2
                                            c1.944-4.856,4.064-9.6,6.688-15.16l9.152-19.52H63.32l-25.336,44.096v32.088L24.096,300.152L24.096,300.152z" />
                                        <path d="M112.992,272.096c1.136,15.008-10.112,28.088-25.12,29.224c-1.048,0.08-2.096,0.096-3.136,0.056
                                            c-14.672,0.584-27.04-10.848-27.624-25.52c-0.04-0.936-0.024-1.88,0.04-2.816c-1.136-14.976,10.096-28.04,25.072-29.176
                                            c1.144-0.088,2.288-0.104,3.432-0.04c14.568-0.552,26.832,10.808,27.384,25.376C113.08,270.168,113.064,271.136,112.992,272.096z
                                            M71.512,272.712c0,10.584,5.184,18.64,13.656,18.64c7.928,0,13.48-7.784,13.48-18.912c0-8.6-3.864-18.4-13.344-18.4
                                            C75.472,254,71.512,263.488,71.512,272.712L71.512,272.712z" />
                                        <path d="M173.72,283.624c0,6.552,0.232,12,0.448,16.52h-12.224l-0.68-8.392h-0.208c-3.736,6.136-10.472,9.8-17.656,9.6
                                            c-10.072,0-19.2-6.008-19.2-24v-32.296h13.888v29.976c0,9.152,2.968,15.096,10.304,15.096c6.376-0.184,11.44-5.424,11.408-11.808
                                            v-33.248h13.92C173.72,245.072,173.72,283.624,173.72,283.624z" />
                                        <path d="M493.392,347.76H224.728c-10.256-0.032-18.568-8.344-18.6-18.6V182.84c0.032-10.256,8.344-18.568,18.6-18.6H493.4
                                            c10.256,0.032,18.568,8.344,18.6,18.6v146.328C511.96,339.424,503.648,347.728,493.392,347.76z" />
                                        <g>
                                            <g>
                                            <path style="opacity:0.2;fill:#FFFFFF;enable-background:new    ;" d="M206.128,187.792V313.2
                                                    c0.032,2.336,0.416,4.648,1.144,6.864L392.416,164.24H206.24" />
                                            </g>
                                        </g>
                                        <g>
                                            <path style="fill:#FFFFFF;" d="M262.224,235.568H240.52V223.96h57.6v11.608h-21.96v64.592h-13.936V235.568z" />
                                            <path style="fill:#FFFFFF;" d="M350.12,283.624c0,6.552,0.232,12,0.448,16.52h-12.224l-0.68-8.392h-0.2
                                                c-3.736,6.136-10.472,9.8-17.656,9.6c-10.072,0-19.2-6.008-19.2-24v-32.296h13.872v29.976c0,9.152,2.968,15.096,10.304,15.096
                                                c6.376-0.184,11.44-5.424,11.408-11.808v-33.248h13.92L350.12,283.624z" />
                                            <path style="fill:#FFFFFF;" d="M364.704,300.152c0.232-3.752,0.48-9.824,0.48-15.496v-64.8h13.888v32.8h0.232
                                                c3.92-5.816,10.6-9.152,17.6-8.8c13.48,0,23.072,11.2,22.976,27.928c0,19.8-12.568,29.6-24.984,29.6
                                                c-7.128,0.36-13.856-3.304-17.408-9.496h-0.232l-0.68,8.256L364.704,300.152z M379.104,277.416c-0.016,1.104,0.104,2.2,0.344,3.272
                                                c1.408,5.68,6.472,9.688,12.32,9.76c8.704,0,14.032-7.032,14.032-18.088c0-9.76-4.64-17.688-13.92-17.688
                                                c-5.944,0.2-11,4.376-12.32,10.176c-0.272,1.184-0.416,2.4-0.448,3.616L379.104,277.416L379.104,277.416z" />
                                            <path style="fill:#FFFFFF;" d="M441.168,276.528c0.304,8.256,7.248,14.704,15.504,14.4c0.488-0.016,0.976-0.056,1.456-0.128
                                                c5.2,0.12,10.376-0.736,15.256-2.528l2.048,9.6c-6.144,2.344-12.68,3.504-19.256,3.416c-14.336,1.304-27.024-9.264-28.328-23.6
                                                c-0.128-1.416-0.144-2.84-0.04-4.256c-1.272-15.024,9.872-28.232,24.896-29.504c0.672-0.056,1.336-0.088,2.008-0.096
                                                c17.888,0,23.76,14.744,23.76,26.832c0.016,1.968-0.136,3.936-0.448,5.88h-36.856V276.528z M465.368,266.768
                                                c0.88-6.488-3.664-12.464-10.152-13.344c-0.424-0.056-0.848-0.096-1.28-0.104c-7.136,0.424-12.736,6.296-12.8,13.448H465.368z" />
                                        </g>
                                    </svg>
                                </div>
                                <div class="info-title">تبلیغ در یوتیوب</div>
                                <div class="info-desc">
                                    در یوتیوب دیده شوید! امکان نمایش شما در یوتیوب، قبل از کانال هایی که دوست دارید وجود دارد!
                                </div>
                                <a href="https://gmaxads.com/youtubeads/" class="info-more">
                                    <button type="button" class="btn">
                                        <span>مشاهده بیشتر</span>
                                        <i class="las la-paperclip"></i>
                                    </button>
                                </a>
                            </div>
                            <!-- Component Info Box Card End -->
                        </div>
                        <div class="swiper-slide">
                            <!-- Component Info Box Card Start -->
                            <div class="info-box">
                                <div class="info-img">
                                    <svg height="auto" width="auto" version="1.0" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="800px" height="800px" viewBox="0 0 64 64" enable-background="new 0 0 64 64" xml:space="preserve">
                                        <g>
                                            <path fill="#231F20" d="M32,48c7.732,0,14-6.268,14-14V14c0-7.732-6.268-14-14-14S18,6.268,18,14v20C18,41.732,24.268,48,32,48z
                                                M20,31h5c0.553,0,1-0.447,1-1s-0.447-1-1-1h-5v-4h5c0.553,0,1-0.447,1-1s-0.447-1-1-1h-5v-4h5c0.553,0,1-0.447,1-1s-0.447-1-1-1
                                                h-5v-3c0-6.627,5.373-12,12-12s12,5.373,12,12v3h-5c-0.553,0-1,0.447-1,1s0.447,1,1,1h5v4h-5c-0.553,0-1,0.447-1,1s0.447,1,1,1h5v4
                                                h-5c-0.553,0-1,0.447-1,1s0.447,1,1,1h5v3c0,6.627-5.373,12-12,12s-12-5.373-12-12V31z" />
                                            <path fill="#231F20" d="M51,31.002c-1.657,0-2.999,1.342-3,2.998c-0.001,8.838-7.163,15.999-16,15.999S16.001,42.838,16,34
                                                c0-1.656-1.343-3-3-3s-3,1.344-3,3c0,10.43,7.26,19.157,17,21.423v4.576c0,2.209,1.791,4,4,4h2c2.209,0,4-1.791,4-4v-4.576
                                                C46.74,53.157,54,44.43,54,34C53.999,32.344,52.657,31.002,51,31.002z M37,53.345c-0.654,0.168-1.321,0.304-2,0.407v6.247
                                                c0,1.104-0.896,2-2,2h-2c-1.104,0-2-0.896-2-2v-6.247c-0.679-0.104-1.346-0.239-2-0.407C18.379,51.121,12,43.315,12,34
                                                c0-0.553,0.447-1,1-1s1,0.447,1,1c0.001,9.94,8.059,17.999,18,17.999S49.999,43.94,50,34c0.001-0.551,0.447-0.998,1-0.998
                                                s0.999,0.447,1,0.998C52,43.315,45.621,51.121,37,53.345z" />
                                        </g>
                                    </svg>
                                </div>
                                <div class="info-title">استودیو یوتیوب</div>
                                <div class="info-desc">
                                    استفاده از بروزترین تجهیزات و فضای مناسب ضبط ویدئو یوتیوب و پادکست. امکان استفاده رایگان
                                </div>
                                <a href="https://gmaxads.com/gmaxads-studio/" class="info-more">
                                    <button type="button" class="btn">
                                        <span>مشاهده بیشتر</span>
                                        <i class="las la-paperclip"></i>
                                    </button>
                                </a>
                            </div>
                            <!-- Component Info Box Card End -->
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </section>

    <section id="grow-prfoessionally" class="container-fluid grow-prfoessionally"> <!-- onmouseover="growCursor();" -->
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

    <section id="parallax-new" class="container-fluid parallax-new">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-xl-7 content-column column">
                    <div class="ads">
                        <h3 class="title">تبلیغات در گوگل</h3>
                        <div class="link">
                            <a href="<?php echo get_home_url() . '/googleads/'; ?>">
                                <svg xmlns="http://www.w3.org/2000/svg" height="75" viewBox="0 0 32 32" width="75" xml:space="preserve">
                                    <g fill="#000000"><path d="M2.066 23.314a.502.502 0 0 1-.436-.744L9.278 8.803a.5.5 0 1 1 .874.487L2.503 23.058a.498.498 0 0 1-.437.256zM9.933 27.686a.502.502 0 0 1-.436-.744l4.796-8.634a.5.5 0 1 1 .874.487l-4.796 8.634a.502.502 0 0 1-.438.257z"/></g>
                                    <path d="M15.709 15.761 9.497 26.942a4.004 4.004 0 0 1-3.5 2.059 4.003 4.003 0 0 1-3.493-5.943l7.578-13.639a.502.502 0 0 0-.194-.681.503.503 0 0 0-.68.194L1.629 22.571a5.007 5.007 0 0 0 1.942 6.8c.742.412 1.58.63 2.424.63a5.006 5.006 0 0 0 4.375-2.572l5.921-10.658-.582-1.01z" fill="#000000"/>
                                    <path d="M6 30c-2.757 0-5-2.243-5-5s2.243-5 5-5 5 2.243 5 5-2.243 5-5 5zm0-9c-2.206 0-4 1.794-4 4s1.794 4 4 4 4-1.794 4-4-1.794-4-4-4zM26.004 30.001a5.006 5.006 0 0 1-4.375-2.572l-10-18a5.007 5.007 0 0 1 4.367-7.431c1.816 0 3.492.986 4.374 2.573l10 18a5.007 5.007 0 0 1-1.942 6.8c-.741.412-1.58.63-2.424.63zM15.997 2.998a4.003 4.003 0 0 0-3.494 5.944l10 18a4.004 4.004 0 0 0 3.5 2.059 4.003 4.003 0 0 0 3.493-5.943l-10-18a4 4 0 0 0-3.499-2.06z" fill="#000000"/>
                                </svg>
                                <span class="sup">در بزرگترین وب سایت دنیا دیده شوید</span>
                                <span class="sub">تبلیغات در گوگل ادز می تواند شما را در مقابل کاربرانی که برای خدمات و سرویس های شما جستجو می کنند قرار دهد</span>
                            </a>
                            <a href="<?php echo get_home_url() . '/website-design/'; ?>">
                                <svg enable-background="new 0 0 32 32" height="75px" id="_x3C_Layer_x3E_" version="1.1" viewBox="0 0 32 32" width="75px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <g>
                                        <g id="Google_1_">
                                            <g>
                                                <path d="M16.33,31c-5.777,0-10.942-3.203-13.481-8.358C1.828,20.565,1.31,18.331,1.31,16     c0-2.333,0.519-4.569,1.54-6.644C5.389,4.202,10.553,1,16.33,1c3.66,0,7.082,1.296,9.898,3.748     c0.105,0.091,0.167,0.221,0.172,0.36c0.004,0.139-0.049,0.273-0.146,0.371l-4.225,4.218c-0.182,0.181-0.472,0.195-0.67,0.033     c-1.439-1.177-3.18-1.799-5.029-1.799c-3.497,0-6.58,2.224-7.67,5.533C8.389,14.291,8.25,15.144,8.25,16     c0,0.854,0.137,1.705,0.408,2.53c1.092,3.312,4.174,5.538,7.672,5.538c1.744,0,3.318-0.412,4.556-1.191     c0.854-0.539,1.534-1.238,2.021-2.081c0.139-0.239,0.443-0.321,0.684-0.183c0.239,0.139,0.321,0.444,0.184,0.684     c-0.57,0.984-1.361,1.8-2.354,2.426c-1.397,0.88-3.156,1.345-5.089,1.345c-3.93,0-7.395-2.502-8.622-6.226     C7.404,17.916,7.25,16.96,7.25,16c0-0.963,0.154-1.921,0.461-2.849c1.225-3.72,4.689-6.22,8.619-6.22     c1.933,0,3.758,0.602,5.305,1.746l3.526-3.521C22.611,3.089,19.568,2,16.33,2C10.938,2,6.115,4.988,3.747,9.797     C2.793,11.734,2.31,13.821,2.31,16c0,2.176,0.483,4.263,1.437,6.2C6.115,27.011,10.938,30,16.33,30     c3.465,0,6.703-1.236,9.121-3.48c2.773-2.575,4.239-6.212,4.239-10.52c0-0.601-0.071-1.272-0.212-2H17v4.466h7.118     c0.276,0,0.5,0.224,0.5,0.5s-0.224,0.5-0.5,0.5H16.5c-0.276,0-0.5-0.224-0.5-0.5V13.5c0-0.276,0.224-0.5,0.5-0.5h13.385     c0.234,0,0.438,0.163,0.488,0.392c0.211,0.95,0.317,1.828,0.317,2.608c0,4.593-1.577,8.484-4.56,11.253     C23.528,29.669,20.048,31,16.33,31z" fill="#000000"/>
                                            </g>
                                            <g id="Google">
                                                <g>
                                                    <path d="M4.288,24.019c-0.15,0-0.299-0.067-0.397-0.196c-0.168-0.219-0.126-0.533,0.093-0.701l4.5-3.444      c0.219-0.167,0.534-0.125,0.701,0.093c0.168,0.219,0.126,0.533-0.093,0.701l-4.5,3.444C4.5,23.985,4.394,24.019,4.288,24.019z" fill="#000000"/>
                                                </g>
                                                <g>
                                                    <path d="M8.104,14.09c-0.107,0-0.216-0.035-0.307-0.106l-4.917-3.84C2.662,9.974,2.624,9.66,2.793,9.442      c0.169-0.218,0.484-0.257,0.702-0.086l4.917,3.84c0.218,0.17,0.256,0.484,0.086,0.702C8.4,14.024,8.253,14.09,8.104,14.09z" fill="#000000"/>
                                                </g>
                                                <g>
                                                    <path d="M25.585,27.559c-0.107,0-0.215-0.034-0.306-0.105l-4.682-3.629c-0.218-0.169-0.258-0.483-0.089-0.701      c0.169-0.218,0.484-0.258,0.701-0.089l4.682,3.629c0.218,0.169,0.258,0.483,0.089,0.701      C25.882,27.493,25.734,27.559,25.585,27.559z" fill="#000000"/>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                                <span class="sup">در کمترین زمان به بهترین فروش برسید</span>
                                <span class="sub">تبلیغات در یوتیوب می تواند برند شما را با هزینه ی بسیار کمی در مقابل چشمان میلیون ها کاربر قرار دهد</span>
                            </a>
                        </div>
                    </div>
                    <div class="web">
                        <h3 class="title">طراحی وب سایت</h3>
                        <div class="link">
                            <a href="<?php echo get_home_url() . '/googleads/'; ?>">
                                <svg xmlns="http://www.w3.org/2000/svg" height="75" viewBox="0 0 32 32" width="75" xml:space="preserve">
                                    <g fill="#000000"><path d="M2.066 23.314a.502.502 0 0 1-.436-.744L9.278 8.803a.5.5 0 1 1 .874.487L2.503 23.058a.498.498 0 0 1-.437.256zM9.933 27.686a.502.502 0 0 1-.436-.744l4.796-8.634a.5.5 0 1 1 .874.487l-4.796 8.634a.502.502 0 0 1-.438.257z"/></g>
                                    <path d="M15.709 15.761 9.497 26.942a4.004 4.004 0 0 1-3.5 2.059 4.003 4.003 0 0 1-3.493-5.943l7.578-13.639a.502.502 0 0 0-.194-.681.503.503 0 0 0-.68.194L1.629 22.571a5.007 5.007 0 0 0 1.942 6.8c.742.412 1.58.63 2.424.63a5.006 5.006 0 0 0 4.375-2.572l5.921-10.658-.582-1.01z" fill="#000000"/>
                                    <path d="M6 30c-2.757 0-5-2.243-5-5s2.243-5 5-5 5 2.243 5 5-2.243 5-5 5zm0-9c-2.206 0-4 1.794-4 4s1.794 4 4 4 4-1.794 4-4-1.794-4-4-4zM26.004 30.001a5.006 5.006 0 0 1-4.375-2.572l-10-18a5.007 5.007 0 0 1 4.367-7.431c1.816 0 3.492.986 4.374 2.573l10 18a5.007 5.007 0 0 1-1.942 6.8c-.741.412-1.58.63-2.424.63zM15.997 2.998a4.003 4.003 0 0 0-3.494 5.944l10 18a4.004 4.004 0 0 0 3.5 2.059 4.003 4.003 0 0 0 3.493-5.943l-10-18a4 4 0 0 0-3.499-2.06z" fill="#000000"/>
                                </svg>
                                <span class="sup">در بزرگترین وب سایت دنیا دیده شوید</span>
                                <span class="sub">ویترین آنلاین خود را به با سلیقه ترین و حرفه ای ترین تیم طراحی وب سایت بسپارید</span>
                            </a>
                        </div>
                    </div>
                    <div class="logos">
                        <a href="#">
                            <img src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/enamad.png">
                        </a>
                        <a href="#">
                            <img src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/google-partner.png">
                        </a>
                    </div>
                </div>

                <div class="col-12 col-xl-5 image-column column">
                    <div class="sticky-top">
                        <div class="ads">
                            <img src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/team/optimize/DSC00186.webp" alt="ads">
                            <img src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/team/optimize/DSC00165.webp" alt="ads">
                        </div>
                        <div class="web">
                            <img src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/team/optimize/DSC00278.webp" alt="ads">
                            <img src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/team/optimize/DSC00495.webp" alt="ads">
                        </div>
                    </div>
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
                                <path class="doodle-shape-1" d="M105 10C28-9-29 40 34 56c62 16 91-29 66-29"></path>
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
                        <form method="post" onsubmit="event.preventDefault();">
                            <input type="text" name="info" id="info" placeholder="شماره تماس و یا ایمیل">
                            <button type="button" onclick="newsletterAjaxJs()" onkeypress="return event.keyCode != 13;">ارسال</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="faqs" class="container faqs">
        <div class="row">
            <div class="col-12 column">
                <!-- Component FAQ Start -->
                <div class="faq accordion" id="accordionExample">
                    <div class="accordion-item" data-aos="fade-up" data-aos-duration="500" data-aos-delay="0" data-aos-easing="ease-in-sine">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                تبلیغات در گوگل چگونه به وب سایت ما کمک می کند؟
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                تبلیغات در گوگل، که به آن Google Ads هم گفته می شود، یکی از قدرتمندترین راه‌ها برای تبلیغ محصولات و خدمات شما در اینترنت است. این سرویس به شما اجازه می‌دهد تا تبلیغات خود را در صفحات نتایج جستجوی گوگل، وب‌سایت‌های همکار گوگل (شبکه تبلیغاتی گوگل) و حتی در برنامه‌های موبایلی که تبلیغات گوگل دارند، نمایش دهید.
                                متخصصان جیمکس متشکل از کارشناسان تبلیغات آنلاین و بهینه‌سازی جستجو، که با تجربه و تخصص خود در زمینه گوگل ادز، می‌توانند بهترین راهکارها را برای تبلیغات شما ارائه دهند.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item" data-aos="fade-up" data-aos-duration="500" data-aos-delay="300" data-aos-easing="ease-in-sine">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                درآمد خود را از یوتیوب چگونه نقد کنیم؟
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                کسب درآمد از یوتیوب، یکی از روش‌های جذاب و پرطرفدار برای کسب درآمد از طریق ایجاد ویدیوهای خود است. با ایجاد یک کانال یوتیوب و ارائه محتوای جذاب و مفید، می‌توانید به طور قابل توجهی درآمد کسب کنید. یوتیوب امکانات و ابزارهایی را برای تبلیغ و کسب درآمد از ویدیوها فراهم کرده است.
                                متخصصان جیمکس با تکیه بر تجربه و تخصص، شناخت مشتریان هدف و تحقیق درباره روند و موضوعات مورد علاقه جامعه یوتیوب، می‌توانید یک کسب و کار موفق برای شما در این پلتفرم رقم زده و از تبدیل هوادارانتان به منابع درآمدی استفاده نماید.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item" data-aos="fade-up" data-aos-duration="500" data-aos-delay="600" data-aos-easing="ease-in-sine">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                چرا باید سایت داشته باشیم؟
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                طراحی سایت یکی از اساسی‌ترین راه‌ها برای ایجاد حضور آنلاین قوی و جذاب برای کسب و کار شماست. با طراحی یک وبسایت حرفه‌ای و سازگار با نیازهای شما و مشتریانتان، می‌توانید به صورت مداوم بازدیدکنندگان جدید جذب کنید و بازدیدکنندگان فعلی را به مشتریان وفادار تبدیل کنید.
                                با طراحی سایت حرفه‌ای، می‌توانید به طرفداران و مشتریانتان یک تجربه کاربری بی‌نظیر ارائه دهید و باعث اعتماد بیشتر آن‌ها به کسب و کار شما شوید. اضافه‌کردن امکاناتی مانند فرم تماس، فروش آنلاین، نمونه‌کارها و بازخوردها، بخش‌های اخبار و بلاگ و اینتگراسیون با شبکه‌های اجتماعی نیز می‌تواند به ارتقای تجربه کاربری و افزایش نرخ تبدیل شما کمک کند.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item" data-aos="fade-up" data-aos-duration="500" data-aos-delay="600" data-aos-easing="ease-in-sine">
                        <h2 class="accordion-header" id="headingّFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseّFour" aria-expanded="false" aria-controls="collapseّFour">
                                سئو چگونه به سایت شما کمک می کند؟
                            </button>
                        </h2>
                        <div id="collapseّFour" class="accordion-collapse collapse" aria-labelledby="headingّFour" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                سئو پروسه بهبود دیدن شدن و رنک وب سایت شما در صفحه نتایج گوگل است. جیمکس به کمک استراتژی و تکنیک های مختلف، وب سایت شما را به استانداردهای گوگل نزدیک می کند. همین مسئله باعث می شود که وب سایت شما در گوگل و دیگر موتورهای جستجو بیشتر دیده شده و مشتریان بالقوه خود را جذب نماید.
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Component FAQ End -->
            </div>
        </div>
    </section>
</main>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script> -->

<?php get_footer(); ?>
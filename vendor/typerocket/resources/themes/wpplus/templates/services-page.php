<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access directly. ?>

<?php /* Template Name: قالب صفحه خدمات ما */ ?>

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
?>

<main id="main" class="main services">
    <section id="our-services" class="container-fluid our-services">
        <div class="container">
            <div class="row">
                <div class="col-12 col-xl-6 content-column column">
                    <h1 class="title"><strong>ما</strong> که هستیم و چه کار میکنیم</h1>
                    <p class="desc">
                        شرکت جیمکس ادز متشکل از افراد متخصص گوگل برای حداکثر کردن بازدهی سرویس های تبلیغاتی این شرکت و با سرمایه گذاری شرکت های شناخته شده ی ماموت و مکس آغاز به فعالیت کرده است. ورود شرکت های با سابقه و شناخته شده ی فوق الذکر نشان از اهمیت این سرویس برای کسب و کارهای بزرگ دارد. ما مفتخر به آنیم که خدمات خود را به دیگر شرکت ها هم عرضه کنیم و سهمی در موفقیت شما داشته باشیم.
                    </p>
                </div>

                <div class="col-12 col-xl-6 img-column column">
                    <img src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/services.gif" alt="web-design">
                </div>
            </div>
        </div>
    </section>

    <section id="about-box" class="container about-box">
        <div class="row heading-row">
            <div class="col-12 column">
                <div class="head">هرآنچه شما نیاز دارید</div>
            </div>
        </div>

        <div class="row gap g-3">
            <div class="col-12 col-xl-3 column">
                <!-- Component Boxing Card Start -->
                <div class="boxing aos-init aos-animate" data-aos="fade-in" data-aos-duration="500" data-aos-delay="600" data-aos-easing="ease-in-sine">
                    <div class="img">
                        <img src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/box12.png" alt="">
                    </div>
                    <div class="title">مارکتینگ</div>
                    <div class="desc">
                        مشاوره مارکتینگ جهت موفقیت کسب و کار شما توسط معتبرترین شرکت در زمینه مارکتینگ در کشور
                    </div>
                </div>
                <!-- Component Boxing Card End -->
            </div>
            <div class="col-12 col-xl-3 column">
                <!-- Component Boxing Card Start -->
                <div class="boxing aos-init aos-animate" data-aos="fade-in" data-aos-duration="500" data-aos-delay="0" data-aos-easing="ease-in-sine">
                    <div class="img">
                        <img src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/box13.png" alt="">
                    </div>
                    <div class="title">تبلیغ در گوگل</div>
                    <div class="desc">
                        دسترسی پذیری به مشتری تنها یک راه ۱۰۰٪ مطمئن دارد. ما این سرویس را برای شما فراهم می کنیم
                    </div>
                </div>
                <!-- Component Boxing Card End -->
            </div>
            <div class="col-12 col-xl-3 column">
                <!-- Component Boxing Card Start -->
                <div class="boxing aos-init aos-animate" data-aos="fade-in" data-aos-duration="500" data-aos-delay="300" data-aos-easing="ease-in-sine">
                    <div class="img">
                        <img src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/box14.png" alt="">
                    </div>
                    <div class="title">تبلیغ در یوتیوب</div>
                    <div class="desc">
                        در یوتیوب دیده شوید! امکان نمایش تبلیغ شما در یوتیوب و در کانال های دلخواه شما
                    </div>
                </div>
                <!-- Component Boxing Card End -->
            </div>
            <div class="col-12 col-xl-3 column">
                <!-- Component Boxing Card Start -->
                <div class="boxing aos-init aos-animate" data-aos="fade-in" data-aos-duration="500" data-aos-delay="900" data-aos-easing="ease-in-sine">
                    <div class="img">
                        <img src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/box15.png" alt="">
                    </div>
                    <div class="title">کسب درآمد از یوتیوب</div>
                    <div class="desc">
                        از خدمات اصلی مجموعه جیمکس ادز، نقد کردن درآمد از یوتیوب برای تولید کنندگان محتوای ویدئویی است
                    </div>
                </div>
                <!-- Component Boxing Card End -->
            </div>            
        </div>
    </section>

    <section id="cta" class="container cta">
        <div class="row">
            <div class="col-12 column">
                <!-- Component CTA Start -->
                <div class="content-cta">
                    <div class="title">
                        <strong>اگر همچنان سوالی در ذهن دارید با کارشناسان ما تماس حاصل فرمایید</strong>
                        <p>برای مشاوره و اطلاع از تعرفه ی خدمات تبلیغات گوگل با کارشناسان ما در تماس باشید</p>
                    </div>
                    <a href="https://gmaxads.com/contact-us/" class="btn-cta" target="_blank">
                        <button type="button" class="btn">
                            <span>همین الان مشاوره بگیرید</span>
                            <i class="las la-angle-left"></i>
                        </button>
                    </a>
                </div>
                <!-- Component CTA End -->
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
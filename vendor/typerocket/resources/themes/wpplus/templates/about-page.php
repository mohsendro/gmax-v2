<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access directly. ?>

<?php /* Template Name: قالب صفحه درباره ما */ ?>

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

<main id="main" class="main about">
    <section id="about-description" class="container-fluid about-description">
        <div class="container">
            <div class="row">
                <div class="col-12 col-xl-6 content-column column">
                    <h1 class="title">ما یک شرکت تبلیغات در <strong>گوگل</strong> و <strong>یوتیوب</strong> هستیم</h1>
                    <p class="desc">
                        ما حرفه ای ترین های هر حوزه را در <a href="https://gmaxads.com/">جیمکس ادز</a> جمع کردیم تا به رشد شما و کسب و کار شما کمک کنیم
                        با اطمینان خاطر تبلیغات گوگل خود را به ما بسپارید و بیشترین فروش را تجربه کنید. با مدیریت حرفه ای اکانت گوگل ادز با کمترین هزینه، همیشه بالاتر از رقبای خود دیده شوید و از کلیک رقبا و ربات ها برروی<a href="https://gmaxads.com/googleads/"> تبلیغ در گوگل</a> خود جلوگیری کنید
                    </p>
                    <p class="desc">
                        با <a href="https://gmaxads.com/youtubeads/">تبلیغ در یوتیوب</a> و تبلیغ در سایت های خارجی، برند خود را جهانی کنید و از رقبای داخلی خود جلوتر باشید
                        با تبلیغات در گوگل پلی و اپ استور در کمترین زمان و با کمترین هزینه نصب اپلیکیشن خود را افزایش دهید
                        فقط روی محتوای خود تمرکز کنید و نقد کردن درآمد یوتیوب، سئو کانال و حتی ادیت ویدئو هاتون را به ما بسپارید.
                        به جای خرید تجهیزات گران قیمت، با استودیو جیمکس با بالاترین کیفیت تولید محتوا کنید.
                    </p>
                </div>

                <div class="col-12 col-xl-6 img-column column">
                    <img src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/about.gif" alt="web-design">
                </div>
            </div>
        </div>
    </section>

    <section id="about-box" class="container about-box">
        <div class="row heading-row">
            <div class="col-12 column">
                <div class="head">اهداف ما</div>
            </div>
        </div>

        <div class="row gap g-3">
            <div class="col-12 col-xl-3 column">
                <!-- Component Boxing Card Start -->
                <div class="boxing aos-init aos-animate" data-aos="fade-in" data-aos-duration="500" data-aos-delay="600" data-aos-easing="ease-in-sine">
                    <div class="img">
                        <img src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/box23.png" alt="">
                    </div>
                    <div class="title">گزارش های دقیق</div>
                    <div class="desc">
                        در کنار دسترسی مستقیم به اکانت گوگل ادز، گزارش تبلیغات شما همراه با آنالیز و پیشنهادات بهینه سازی بصورت هفتگی برای شما ارسال می شود
                    </div>
                </div>
                <!-- Component Boxing Card End -->
            </div>
            <div class="col-12 col-xl-3 column">
                <!-- Component Boxing Card Start -->
                <div class="boxing aos-init aos-animate" data-aos="fade-in" data-aos-duration="500" data-aos-delay="0" data-aos-easing="ease-in-sine">
                    <div class="img">
                        <img src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/box20.png" alt="">
                    </div>
                    <div class="title">هزینه های مقرون به صرفه</div>
                    <div class="desc">
                        با مدیریت تخصصی تبلیغات، هزنیه های خود را کاهش دهید و با سرویس جلوگیری از از کلیک رقبا و ربات ها، از هدر رفتن هزینه هاتون جلوگیری کنید
                    </div>
                </div>
                <!-- Component Boxing Card End -->
            </div>
            <div class="col-12 col-xl-3 column">
                <!-- Component Boxing Card Start -->
                <div class="boxing aos-init aos-animate" data-aos="fade-in" data-aos-duration="500" data-aos-delay="300" data-aos-easing="ease-in-sine">
                    <div class="img">
                        <img src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/box18.png" alt="">
                    </div>
                    <div class="title">مشاوره تخصصی مارکتینگ و فنی سایت</div>
                    <div class="desc">
                        با مشاوره ی فنی، تمامی مشکلات سایت سئو خود را برطرف کنید و در تمامی حوزه های دیجیتال مارکتینگ جلوی چشم مشتریان خود بدرخشید
                    </div>
                </div>
                <!-- Component Boxing Card End -->
            </div>
            <div class="col-12 col-xl-3 column">
                <!-- Component Boxing Card Start -->
                <div class="boxing aos-init aos-animate" data-aos="fade-in" data-aos-duration="500" data-aos-delay="900" data-aos-easing="ease-in-sine">
                    <div class="img">
                        <img src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/box19.png" alt="">
                    </div>
                    <div class="title">آنالیز دیتا و رصد رقبا</div>
                    <div class="desc">
                        جدید ترین ترند ها و دغدغه ی مشتریان خود را بیابید و از تمامی رقبای خود جلوتر باشید
                    </div>
                </div>
                <!-- Component Boxing Card End -->
            </div>            
        </div>
    </section>

    <section id="our-team" class="container our-team">
        <div class="row heading-row">
            <div class="col-12 column">
                <div class="head">تیم ما</div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 column">
                <!-- Swiper -->
                <div class="swiper ourteamSwiper">
                    <div class="swiper-wrapper gallery">
                        <a class="swiper-slide" href="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/team/DSC00165.webp">
                            <img src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/team/DSC00165.webp" />
                        </a>
                        <a class="swiper-slide" href="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/team/DSC00186.webp">
                            <img src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/team/DSC00186.webp" />
                        </a>
                        <a class="swiper-slide" href="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/team/DSC00213.webp">
                            <img src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/team/DSC00213.webp" />
                        </a>
                        <a class="swiper-slide" href="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/team/DSC00220.webp">
                            <img src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/team/DSC00220.webp" />
                        </a>
                        <a class="swiper-slide" href="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/team/DSC00237.webp">
                            <img src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/team/DSC00237.webp" />
                        </a>                        
                        <a class="swiper-slide" href="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/team/DSC00250.webp">
                            <img src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/team/DSC00250.webp" />
                        </a>
                        <a class="swiper-slide" href="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/team/DSC00278.webp">
                            <img src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/team/DSC00278.webp" />
                        </a>
                        <a class="swiper-slide" href="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/team/DSC00328.webp">
                            <img src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/team/DSC00328.webp" />
                        </a>
                        <a class="swiper-slide" href="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/team/DSC00376.webp">
                            <img src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/team/DSC00376.webp" />
                        </a>
                        <a class="swiper-slide" href="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/team/DSC00400.webp">
                            <img src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/team/DSC00400.webp" />
                        </a>
                        <a class="swiper-slide" href="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/team/DSC00445.webp">
                            <img src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/team/DSC00445.webp" />
                        </a>
						<a class="swiper-slide" href="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/team/DSC00495.webp">
                            <img src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/team/DSC00495.webp" />
                        </a>
                    </div>
                </div>
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
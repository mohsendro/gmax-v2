<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access directly. ?>

<?php /* Template Name: قالب صفحه تبلیغ در گوگل (جدید) */ ?>

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

    $meta = get_post_meta( $queried_id, 'pageInfo', true );
?>

<main id="main" class="main googleads-new">
    <section id="gads-animated-hero" class="container-fluid gads-animated-hero">
        <div class="container">
            <div class="row">
                <div class="col-12 column">
                    <!-- Swiper -->
                    <div class="swiper googleadsSwiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="title title1">افزایش فروش</div>
                                <div class="image">
                                    <img 
                                        src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/googleads1.png"
                                        width="auto" height="auto" alt="افزایش فروش"
                                    />
                                    <div class="shape shape1"></div>
                                </div>                                
                            </div>

                            <div class="swiper-slide">
                                <div class="title title2">سبقت از رقبا </div>
                                <div class="image">
                                    <img 
                                        src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/googleads3.png"
                                        width="auto" height="auto" alt="سبقت از رقبا "
                                    />  
                                    <div class="shape shape2"></div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="title title3">متمایز بودن برند</div>
                                <div class="image">
                                    <img 
                                        src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/googleads2.png"
                                        width="auto" height="auto" alt="متمایز بودن برند "
                                    />
                                    <div class="shape shape3"></div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="title title4">متمایز بودن برند</div>
                                <div class="image">
                                    <img 
                                        src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/googleads4.png"
                                        width="auto" height="auto" alt="متمایز بودن برند "
                                    />
                                    <div class="shape shape4"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-caption">
                        <div class="caption-title">با تبلیغ در گوگل</div>
                        <div class="caption-desc">
                            دیده شدن محصول یا خدمات شما توسط مشتریان مهم ترین جنبه ی کسب و کار است که با تبلیغ در گوگل ممکن می شود
                        </div>
                        <div class="caption-btn">
                            <a href="#" type="button" class="btn btn-primary">شروع کنید</a>
                            <a href="#" type="button" class="btn btn-outline-primary">تماس با ما</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="advertising-animated-hero" class="container-fluid advertising-animated-hero">
        <div class="container">
            <div class="row">
                <div class="col-12 col-xl-10 mx-auto column">
                    <div class="heading-title">گوگل ادز، به شما کمک می کند تا در بهترین جای ممکن دیده شوید</div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-xl-10 mx-auto column">
                    <div class="tabs">
                        <div class="nav nav-pills" role="tablist" aria-orientation="vertical">
                            <button class="nav-link active" data-bs-toggle="pill" data-bs-target="#v-pills-one" type="button" role="tab" aria-selected="true">Skippable <i class="lab la-youtube"></i></button>
                            <button class="nav-link" data-bs-toggle="pill" data-bs-target="#v-pills-two" type="button" role="tab" aria-selected="false">Non Skippable <i class="lab la-youtube"></i></button>
                            <button class="nav-link" data-bs-toggle="pill" data-bs-target="#v-pills-three" type="button" role="tab" aria-selected="false">In-Feed <i class="lab la-youtube"></i></button>
                            <button class="nav-link" data-bs-toggle="pill" data-bs-target="#v-pills-four" type="button" role="tab" aria-selected="false">Bumper <i class="lab la-youtube"></i></button>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="v-pills-one" role="tabpanel" tabindex="0">
                                <div class="row">
                                    <div class="col-12 col-xl-6 order-2">
                                        <img src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/skippable.png" alt="تبلیغات Skippable" class="image">
                                    </div>
                                    <div class="col-12 col-xl-6 order-1">
                                        <div class="content">
                                            <div class="title">
                                                همه چیز با گوگل شروع می شود 
                                            </div>
                                            <div class="desc">
                                                به کمک تبلیغ در گوگل، فروش و ترافیک بیشتری را تجربه کنید. گوگل ادز به شما این امکان را می دهد که در
                                                مقابل چشم کاربرانی که برای محصوالت و خدمات شما جستجو می کنند قرار بگیرید.
                                            </div>
                                            <a href="tel:02191095659" class="link">
                                                <i class="las la-long-arrow-alt-left"></i>
                                                تماس با ما
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-two" role="tabpanel" tabindex="0">
                                <div class="content">
                                    <img src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/non-skippable.gif" alt="" class="image">
                                    <div class="desc">
                                        تبلیغاتی 15 ثانیه ای که کاربر مجبور به تماشای آنها تا انتها است
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-three" role="tabpanel" tabindex="0">
                                <div class="content">
                                    <img src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/infeed.jpg" alt="" class="image">
                                    <div class="desc">
                                        در صفحه ی اصلی یوتیوب و در سرچ، تبلیغ شما دیده می شود و تنها به ازای کلیک هزینه پرداخت می کنید
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-four" role="tabpanel" tabindex="0">
                                <div class="content">
                                    <img src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/pumber.gif" alt="" class="image">
                                    <div class="desc">
                                        تبلیغات کوتاه 6 ثانیه ای که قابل رد کردن نیستند
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="cta-animated-hero" class="container-fluid cta-animated-hero">
        <div class="container">
            <div class="row">
                <div class="col-12 col-xl-10 mx-auto column">
                    <div class="container-cta">
                        <div class="container-content">
                            <img src="<?php echo TYPEROCKET_DIR_URL . 'resources/assets/img/team/optimize/torkamaneh.webp'; ?>" />
                            <div class="content">
                                <div class="title">
                                    اگر همچنان سوالی در ذهن دارید با کارشناسان ما تماس حاصل فرمایید
                                </div>
                                <div class="desc">
                                    برای مشاوره و اطلاع از تعرفه ی خدمات تبلیغات گوگل با کارشناسان ما در تماس باشید
                                    برای مشاوره و اطلاع از تعرفه ی خدمات تبلیغات گوگل با کارشناسان ما در تماس باشید
                                </div>
                            </div>
                        </div>
                        <a href="https://gmaxads.com/contact-us/" class="btn btn-primary">
                            همین الان مشاوره بگیرید
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="goals-animated-hero" class="container-fluid goals-animated-hero">
        <div class="container">
            <div class="row heading-row">
                <div class="col-12 col-xl-10 mx-auto column">
                    <div class="heading-title">در قوی ترین پلتفرم دنیا به هدف های خود برسید</div>
                    <a href="#" type="button" class="btn btn-outline-primary">تماس با ما</a>
                </div>
            </div>

            <div class="row content-row">
                <div class="col-12 col-xl-10 column">
                    <div class="row">
                        <div class="col-12 col-md-5 col-xl-3 column">
                            <div class="goals-box">
                                <div class="icon">
                                    <img src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/icon/unnamed3.webp" alt="لیدها و کانورژن های خود را به ماکسیمم برسانید">
                                </div>
                                <div class="title">
                                    لیدها و کانورژن های خود را به ماکسیمم برسانید 
                                </div>
                                <span class="desc">
                                    لید هایی با کیفیت داشته باشید و نرخ کانورژن خود را بهبود دهید 
                                </span>
                            </div>
                        </div>
                        <div class="col-12 col-md-5 col-xl-3 column">
                            <div class="goals-box">
                                <div class="icon">
                                    <img src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/icon/unnamed4.webp" alt="فروش آنالین خود را افزایش دهید">
                                </div>
                                <div class="title">
                                    فروش آنالین خود را افزایش دهید
                                </div>
                                <span class="desc">
                                    در جایی که خریدارانتان هستند حضور یابید و فروش خود را افزایش دهید 
                                </span>
                            </div>
                        </div>
                        <div class="col-12 col-md-5 col-xl-3 column">
                            <div class="goals-box">
                                <div class="icon">
                                    <img src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/icon/unnamed5.webp" alt="کسب و کار خود را رونق دهید">
                                </div>
                                <div class="title">
                                    کسب و کار خود را رونق دهید
                                </div>
                                <span class="desc">
                                    عالقه مندان به خدمات و محصوالتتان را با محصوالتتان آشنا کنید 
                                </span>
                            </div>
                        </div>
                        <div class="col-12 col-md-5 col-xl-3 column">
                            <div class="goals-box">
                                <div class="icon">
                                    <img src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/icon/unnamed1.webp" alt="برندتان را قوی کنید">
                                </div>
                                <div class="title">
                                    برندتان را قوی کنید
                                </div>
                                <span class="desc">
                                    برندتان را به مشتریان معرفی کنید و برای آنها نامی آشنا باشید 
                                </span>
                            </div>
                        </div>
                        <div class="col-12 col-md-5 col-xl-3 column">
                            <div class="goals-box">
                                <div class="icon">
                                    <img src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/icon/unnamed2.webp" alt="اپلیکیشن خود را به کاربران معرفی کنید">
                                </div>
                                <div class="title">
                                    اپلیکیشن خود را به کاربران معرفی کنید
                                </div>
                                <span class="desc">
                                    لاگر اپلیکیشن دارید، آن را به کاربرانی که می توانند مخاطب درست شما باشند نشان دهید
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="stacked-animated-hero" class="container-fluid stacked-animated-hero">
        <div class="container">
            <div class="row">
                <div class="col-12 col-xl-10 mx-auto heading-column column">
                    <div class="heading-title">قدرت گوگل را برای <span class="text-primary">کسب و کار خود</span> بکار گیرید </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-xl-8 mx-auto content-column column">
                    <div class="stack-box">
                        <div class="image">
                            <img src="https://lh3.googleusercontent.com/XsZ5EU5NbM-EK-iwdzZBdfSHoZ7D8MkTY61mStGbIgdUOKXWUhUuRrql0GLzSPLFgGIftPgtSqWa-lD7jMvceZCBI7kNgoeUfh0NBZSasTYXaVZBruA=s0-rw-v1" alt="از همه جا مشتری داشته باشید">
                        </div>
                        <div class="info">
                            <div class="title">از همه جا مشتری داشته باشید</div>
                            <p class="desc">
                                به کمک اکوسیستم تبلیغاتی گوگل، در زمان درست و در مکان درست به مخاطبینتان نشان داده خواهید شد. از
                                سرچ گوگل، تا یوتیوب و گوگل دیسکاور، همه جا محل نشان دادن تبلیغ شماست. 
                            </p>
                        </div>
                    </div>
                    <div class="stack-box">
                        <div class="image">
                            <img src="https://lh3.googleusercontent.com/CkX8eVqkOgkvzUjvHeqX3wsuULDUTSHVmkbNkNTpYP08blt9B4Y8PSLYSrlhnvPh649UOhyeNgWDQVln1IHL-LWnA1dprxGaD0gMZL82Mp7G15Cml_Wg=s0-rw-v1" alt="بهبود تبلیغات با ما ">
                        </div>
                        <div class="info">
                            <div class="title">بهبود تبلیغات با ما</div>
                            <p class="desc">
                                جیمکس به صورت مداوم تبلیغات شما را رصد کرده و آن را بهبود می دهد. ما با استفاده از متخصصین خود،
                                هزینه ی تبلیغ در گوگل شما را به بهترین شکل بهینه کرده و عملکرد آن را افزایش خواهیم داد. 
                            </p>
                        </div>
                    </div>
                    <div class="stack-box">
                        <div class="image">
                            <img src="https://lh3.googleusercontent.com/9XYYu14fOg9AtXXPvVajjk6nXVkI-wYzpKEZysPwKGr96WZweWrJMxEmF8SFpQYDOkev3RBzTShc2ropjaU8q9CW3Gl-QQTeBOurwdwPqeemxQ8RFAs=s0-rw-v1" alt="کنترل بودجه ی خود را در دست بگیرید">
                        </div>
                        <div class="info">
                            <div class="title">کنترل بودجه ی خود را در دست بگیرید</div>
                            <p class="desc">
                            ما می توانیم بهترین نتیجه و بازخورد ممکن را با کمترین هزینه ی کلیک تبلیغات گوگل را برای شما فراهم
                            نماییم. کارشناسان جیمکس در این زمینه تخصص خود را به شما نشان خواهند داد 
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
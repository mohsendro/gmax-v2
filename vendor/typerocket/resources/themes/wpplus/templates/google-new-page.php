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
                                        src="https://lh3.googleusercontent.com/1dawnrQJ3IM0Sr6H7KMZVncHl60Pxl1KAvpGHEC9HeiC9YuJk2j0dlfaCCdGSbUFgWJA1MY7nMmW8Ud1CgDNSP2IOoUMN-CibvbBZmp9hZM3b-cqsCkV=s0-rw-v1"
                                        width="auto" height="auto" alt="افزایش فروش"
                                    />
                                    <div class="shape shape1"></div>
                                </div>                                
                            </div>

                            <div class="swiper-slide">
                                <div class="title title2">سبقت از رقبا </div>
                                <div class="image">
                                    <img 
                                        src="https://lh3.googleusercontent.com/6PDhYjkfhtTkjBOtkkIXZdgfHuuc7qWCb79Lxwz1oRn01I4d-mQCs4fBnYQQpjPFt_UMeoNgFd916D6inaGfqj5NNtMsGZQBiGg17DLs60Zmiy1fCEk=s0-rw-v1"
                                        width="auto" height="auto" alt="سبقت از رقبا "
                                    />  
                                    <div class="shape shape2"></div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="title title3">متمایز بودن برند</div>
                                <div class="image">
                                    <img 
                                        src="https://lh3.googleusercontent.com/-JIeW9QhOprw9JLp-hdhKHQXYXGmhlJ-OsNqVcpwVq9pdpkhaddREDuJZboyNnL7QBVIeoy2et7Zr27PBRi98Iy4u7_8FRjrI2MNeXZ839OISCVWczI=s0-rw-v1"
                                        width="auto" height="auto" alt="متمایز بودن برند "
                                    />
                                    <div class="shape shape3"></div>
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
                <div class="col-12 column">
                    <div class="heading-title">گوگل ادز، به شما کمک می کند تا در بهترین جای ممکن دیده شوید</div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 column">
                    <div class="tabs">
                        <div class="nav nav-pills" role="tablist" aria-orientation="vertical">
                            <button class="nav-link active" data-bs-toggle="pill" data-bs-target="#v-pills-one" type="button" role="tab" aria-selected="true">تبلیغات Skippable</button>
                            <button class="nav-link" data-bs-toggle="pill" data-bs-target="#v-pills-two" type="button" role="tab" aria-selected="false">تبلیغات Non Skippable</button>
                            <button class="nav-link" data-bs-toggle="pill" data-bs-target="#v-pills-three" type="button" role="tab" aria-selected="false">تبلیغات In-Feed</button>
                            <button class="nav-link" data-bs-toggle="pill" data-bs-target="#v-pills-four" type="button" role="tab" aria-selected="false">تبلیغات Bumper</button>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="v-pills-one" role="tabpanel" tabindex="0">
                                <div class="content">
                                    <img src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/skippable.gif" alt="" class="image">
                                    <div class="desc">
                                        این تبلیغات بعد از 5 ثانیه قابل رد کردن هستند. اگر کاربر بر روی Skip کلیک کند، هزینه ای شامل شما نمی شود
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
</main>

<?php get_footer(); ?>
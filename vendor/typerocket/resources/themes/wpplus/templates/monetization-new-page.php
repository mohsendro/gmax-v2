<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access directly. ?>

<?php /* Template Name: قالب صفحه کسب درآمد از یوتیوب (جدید) */ ?>

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

<main id="main" class="main monetization-new">
    <section id="monetization-new-hero" class="container-fluid monetization-new-hero">
        <div class="container">
            <div class="row">
                <div class="col-12 column">
                    <div class="content">
                        <div class="title">
                            <span>کسب درآمد از <span class="stroke">یوتیوب</span></span>
                            <span>نقد کردن درآمد <span class="stroke">یوتیوب</span> با بهترین نرخ، در کمترین زمان</span>
                        </div>
                        <div class="desc">
                            جیمکس پکیج کاملی از خدمات و سرویس های کسب درآمد از یوتیوب را به شما ارائه می دهد از خدمات سئو یوتیوب، تا استودیو، ادیت و نقد کردن درآمد شما در جیمکس فراهم شده است
                        </div>
                        <div class="btn-links">
                            <a href="https://panel.gmaxads.com/index.php?rp=/login" target="_blank" type="button" class="btn btn-primary">ثبت نام</a>
                            <a href="tel:02191095659" type="button" class="btn btn-outline-primary">تماس با ما</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="shape-group">
                <div class="shape-right">
                    <div class="shape">
                        <div class="shape">
                            <div class="shape">
                                <div class="shape">
                                    <div class="shape">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="shape-left">
                    <div class="shape">
                        <div class="shape">
                            <div class="shape">
                                <div class="shape">
                                    <div class="shape">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="shape-circle"></div>
            </div>
        </div>
    </section>

    <section id="monetization-new-image" class="container-fluid monetization-new-image">
        <div class="container">
            <div class="row">
                <div class="col-12 column">
                    <div class="image">
                        <img src="<?php //echo TYPEROCKET_DIR_URL; ?>resources/assets/img/youtube7.webp" alt="کسب درآمد از یوتیوب" width="100%" height="auto">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="monetization-new-discover" class="container-fluid monetization-new-discover">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 column">
                    <!-- Swiper -->
                    <div class="swiper discoverSwiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="box-discover">
                                    <div class="image">
                                        <img src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/slider8-800px.webp" alt="" width="auto" height="auto">
                                    </div>
                                    <div class="content">
                                        <div class="title">
                                            علی صالحی <span>مدیر سئو</span>
                                        </div>
                                        <div class="desc">
                                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                                        </div>
                                        <div class="details">
                                            <span>
                                                <div class="sup">لورم ایپسوم</div>
                                                <div class="sub">05:45:47</div>
                                            </span>
                                            <span>
                                                <div class="sup">لورم ایپسوم</div>
                                                <div class="sub">05:45:47</div>
                                            </span>
                                        </div>
                                        <a href="#" class="more">نمایش بیشتر <i class="las la-long-arrow-alt-left"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="box-discover">
                                    <div class="image">
                                        <img src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/slider8-800px.webp" alt="" width="auto" height="auto">
                                    </div>
                                    <div class="content">
                                        <div class="title">
                                            علی صالحی <span>مدیر سئو</span>
                                        </div>
                                        <div class="desc">
                                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                                        </div>
                                        <div class="details">
                                            <span>
                                                <div class="sup">لورم ایپسوم</div>
                                                <div class="sub">05:45:47</div>
                                            </span>
                                            <span>
                                                <div class="sup">لورم ایپسوم</div>
                                                <div class="sub">05:45:47</div>
                                            </span>
                                        </div>
                                        <a href="#" class="more">نمایش بیشتر <i class="las la-long-arrow-alt-left"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="box-discover">
                                    <div class="image">
                                        <img src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/slider8-800px.webp" alt="" width="auto" height="auto">
                                    </div>
                                    <div class="content">
                                        <div class="title">
                                            علی صالحی <span>مدیر سئو</span>
                                        </div>
                                        <div class="desc">
                                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                                        </div>
                                        <div class="details">
                                            <span>
                                                <div class="sup">لورم ایپسوم</div>
                                                <div class="sub">05:45:47</div>
                                            </span>
                                            <span>
                                                <div class="sup">لورم ایپسوم</div>
                                                <div class="sub">05:45:47</div>
                                            </span>
                                        </div>
                                        <a href="#" class="more">نمایش بیشتر <i class="las la-long-arrow-alt-left"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="box-discover">
                                    <div class="image">
                                        <img src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/slider8-800px.webp" alt="" width="auto" height="auto">
                                    </div>
                                    <div class="content">
                                        <div class="title">
                                            علی صالحی <span>مدیر سئو</span>
                                        </div>
                                        <div class="desc">
                                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                                        </div>
                                        <div class="details">
                                            <span>
                                                <div class="sup">لورم ایپسوم</div>
                                                <div class="sub">05:45:47</div>
                                            </span>
                                            <span>
                                                <div class="sup">لورم ایپسوم</div>
                                                <div class="sub">05:45:47</div>
                                            </span>
                                        </div>
                                        <a href="#" class="more">نمایش بیشتر <i class="las la-long-arrow-alt-left"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="box-discover">
                                    <div class="image">
                                        <img src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/slider8-800px.webp" alt="" width="auto" height="auto">
                                    </div>
                                    <div class="content">
                                        <div class="title">
                                            علی صالحی <span>مدیر سئو</span>
                                        </div>
                                        <div class="desc">
                                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                                        </div>
                                        <div class="details">
                                            <span>
                                                <div class="sup">لورم ایپسوم</div>
                                                <div class="sub">05:45:47</div>
                                            </span>
                                            <span>
                                                <div class="sup">لورم ایپسوم</div>
                                                <div class="sub">05:45:47</div>
                                            </span>
                                        </div>
                                        <a href="#" class="more">نمایش بیشتر <i class="las la-long-arrow-alt-left"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="box-discover">
                                    <div class="image">
                                        <img src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/slider8-800px.webp" alt="" width="auto" height="auto">
                                    </div>
                                    <div class="content">
                                        <div class="title">
                                            علی صالحی <span>مدیر سئو</span>
                                        </div>
                                        <div class="desc">
                                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                                        </div>
                                        <div class="details">
                                            <span>
                                                <div class="sup">لورم ایپسوم</div>
                                                <div class="sub">05:45:47</div>
                                            </span>
                                            <span>
                                                <div class="sup">لورم ایپسوم</div>
                                                <div class="sub">05:45:47</div>
                                            </span>
                                        </div>
                                        <a href="#" class="more">نمایش بیشتر <i class="las la-long-arrow-alt-left"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="discoverswiper-button-next swiper-button-next"></div>
                        <div class="discoverswiper-button-prev swiper-button-prev"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
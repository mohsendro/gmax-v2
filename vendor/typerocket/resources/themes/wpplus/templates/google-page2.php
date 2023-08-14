<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access directly. ?>

<?php /* Template Name: 2قالب صفحه تبلیغ در گوگل */ ?>

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
        <div class="containerfluid">
            <div class="row">
                <div class="col-12 column">
                    <!-- Swiper -->
                    <div class="swiper googleadsSwiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <!-- Component Slider Card Start -->
                                <div class="slider-card">
                                    <!-- <img src="https://swiperjs.com/demos/images/nature-1.jpg" /> -->
                                    <!-- <div class="title" style="z-index: 99; position: absolute">افزایش فروش</div> -->
                                    <div class="swipeinner">
                                        <h2 data-swiper-animation="fadeInLeft" data-duration="1s" data-delay="1.25s">UX-DESIGN</h2>
                                        <div class="hrcontainer">
                                            <hr data-swiper-animation="fadeInLeft" data-duration="1s" data-delay="0.25s">
                                        </div>
                                        <p data-swiper-animation="fadeInLeft" data-duration="1s" data-delay="1.5s">test test test test testtest test test test testtest test test test<br>testtest test test test testtest test test test testtest test test test testtest test<br>test test testtest test test test testtest test test test test</p>
                                        <ul>
                                            <li data-swiper-animation="fadeInLeft" data-duration="1s" data-delay="1.75s">test test test test test</li>
                                            <li data-swiper-animation="fadeInLeft" data-duration="1s" data-delay="2s">test test test test test</li>
                                            <li data-swiper-animation="fadeInLeft" data-duration="1s" data-delay="2.25s">test test test test test</li>
                                            <li data-swiper-animation="fadeInLeft" data-duration="1s" data-delay="2.5s">test test test test test</li>
                                            <li data-swiper-animation="fadeInLeft" data-duration="1s" data-delay="2.75s">test test test test test</li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- Component Slider Card End -->
                            </div>
                            <div class="swiper-slide">
                                <!-- Component Slider Card Start -->
                                <div class="slider-card">
                                    <!-- <img src="https://swiperjs.com/demos/images/nature-2.jpg" /> -->
                                    <div class="title" style="z-index: 99; position: absolute">سبقت از رقبا</div>
                                </div>
                                <!-- Component Slider Card End -->
                            </div>
                            <div class="swiper-slide">
                                <!-- Component Slider Card Start -->
                                <div class="slider-card">
                                    <!-- <img src="https://swiperjs.com/demos/images/nature-3.jpg" /> -->
                                    <div class="title" style="z-index: 99; position: absolute">متمایز بودن برند</div>
                                </div>
                                <!-- Component Slider Card End -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
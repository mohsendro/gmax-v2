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
      width: 240px;
      height: 320px;
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

    .swiper-slide:nth-child(10n) {
      background-color: rgb(54, 94, 77);
    }
</style>



<main id="main" class="main index">
    <section id="slider-new" class="container-fluid slider">
        <div class="row">
            <div class="col-12 column">
                <!-- Swiper -->
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                    <div class="swiper-slide">Slide 1</div>
                    <div class="swiper-slide">Slide 2</div>
                    <div class="swiper-slide">Slide 3</div>
                    <div class="swiper-slide">Slide 4</div>
                    <div class="swiper-slide">Slide 5</div>
                    <div class="swiper-slide">Slide 6</div>
                    <div class="swiper-slide">Slide 7</div>
                    <div class="swiper-slide">Slide 8</div>
                    <div class="swiper-slide">Slide 9</div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Initialize Swiper -->
    <script>
       
    </script>
</main>

<?php get_footer(); ?>
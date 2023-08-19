<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access directly. ?>

<?php /* Template Name: قالب صفحه تبلیغ در یوتیوب (جدید) */ ?>

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

<main id="main" class="main youtube-new">
    <section id="youtube-hero" class="container-fluid youtube-hero">
        <div class="container">
            <div class="row">
                <div class="col-12 col-xl-6 column order-1">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="64" height="64">
                        <style><![CDATA[.E{clip-path:url(#A)}]]></style>
                        <defs>
                            <clipPath id="A">
                                <use xlink:href="#B"/>
                            </clipPath>
                            <path id="B" d="M0 0h250.9v312.8H0z"/>
                        </defs>
                        <g transform="matrix(.257748 0 0 .257745 -.361416 2.515516)" class="E">
                            <path d="M85.9 28.6c2.4-6.3 5.7-12.1 10.6-16.8 19.6-19.1 52-14.3 65.3 9.7 10 18.2 20.6 36 30.9 54l51.6 89.8c14.3 25.1-1.2 56.8-29.6 61.1-17.4 2.6-33.7-5.4-42.7-21l-45.4-78.8c-.3-.6-.7-1.1-1.1-1.6-1.6-1.3-2.3-3.2-3.3-4.9L88.8 62.2c-3.9-6.8-5.7-14.2-5.5-22 .3-4 .8-8 2.6-11.6" fill="#3c8bd9"/>
                            <path d="M85.9 28.6c-.9 3.6-1.7 7.2-1.9 11-.3 8.4 1.8 16.2 6 23.5l32.9 56.9c1 1.7 1.8 3.4 2.8 5l-18.1 31.1-25.3 43.6c-.4 0-.5-.2-.6-.5-.1-.8.2-1.5.4-2.3 4.1-15 .7-28.3-9.6-39.7-6.3-6.9-14.3-10.8-23.5-12.1-12-1.7-22.6 1.4-32.1 8.9-1.7 1.3-2.8 3.2-4.8 4.2-.4 0-.6-.2-.7-.5l14.3-24.9L85.2 29.7c.2-.4.5-.7.7-1.1" fill="#fabc04"/>
                            <path d="M11.8 158l5.7-5.1c24.3-19.2 60.8-5.3 66.1 25.1 1.3 7.3.6 14.3-1.6 21.3-.1.6-.2 1.1-.4 1.7-.9 1.6-1.7 3.3-2.7 4.9-8.9 14.7-22 22-39.2 20.9C20 225.4 4.5 210.6 1.8 191c-1.3-9.5.6-18.4 5.5-26.6 1-1.8 2.2-3.4 3.3-5.2.5-.4.3-1.2 1.2-1.2" fill="#34a852"/>
                            <path d="M11.8 158c-.4.4-.4 1.1-1.1 1.2-.1-.7.3-1.1.7-1.6l.4.4" fill="#fabc04"/>
                            <path d="M81.6 201c-.4-.7 0-1.2.4-1.7l.4.4-.8 1.3" fill="#e1c025"/>
                        </g>
                    </svg>
                    <div class="caption">
                        <div class="title">به کمک یوتیوب ادز، برندینگ خود را قوی تر کنید</div>
                        <div class="desc">
                            به کمک تبلیغ در یوتیوب، می توانید در هنگامی که کاربران در حال دیدن ویدئو، جستجو، یا گشت و گذار هستند،
                            محصول یا خدمات خود را معرفی نمایید
                        </div>
                        <div class="btn">
                            <a href="#" type="button" class="btn btn-primary">شروع کنید</a>
                            <a href="#" type="button" class="btn btn-outline-primary">تماس با ما</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-xl-4 column order-2">
                    <img class="image" src="https://lh3.googleusercontent.com/TtBORzG9DZ1hwCF3Vpg2ztztv2fKxaJyEQPAG-ERxyy8S9RbdTdEPzbckJbM24n221vBHpSEwJqDcSMGQoGiR3bgLkLCQ_n-Gde9YGFHDlTlzUwjFYw=s0-rw-v1" alt="YouTube Ads">
                </div>
            </div>
        </div>
    </section>






    <section id="example-hero" class="container-fluid example-hero">
        <div class="container">
            <div class="row">
                <div class="col-12 col-xl-10 mx-auto heading-column column">
                    <div class="heading-title"></div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-xl-8 mx-auto content-column column">
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
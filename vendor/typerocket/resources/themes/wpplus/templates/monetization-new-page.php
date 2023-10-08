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
                            <span>کسب درآمد از یوتیوب</span>
                            <span>نقد کردن درآمد یوتیوب با بهترین نرخ، در کمترین زمان</span>
                        </div>

                        <div class="desc">
                            جیمکس پکیج کاملی از خدمات و سرویس های کسب درآمد از یوتیوب را به شما ارائه می دهد از خدمات سئو یوتیوب، تا استودیو، ادیت و نقد کردن درآمد شما در جیمکس فراهم شده است
                        </div>

                        <div class="btn-links">
                            <a href="https://panel.gmaxads.com/index.php?rp=/login" target="_blank" type="button" class="btn btn-primary">شروع کنید</a>
                            <a href="tel:02191095659" type="button" class="btn btn-outline-primary">تماس با ما</a>
                        </div>
                    </div>

                    <div class="image">
                        <img src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/team/optimize/DSC00278.webp" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
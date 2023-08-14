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
    <section id="hero" class="container-fluid hero">
        <div class="container">
            <div class="row">
                <div class="col-12 column">
                    asdasddsa
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access directly. ?>

<?php get_header(); ?>

<?php the_content(); ?>

<?php
    require TYPEROCKET_DIR_PATH . '/functions/snippets/pagination.php';
    insertPagination(home_url('author/page'), $current_page, $total_page, true);
?>

<?php get_footer(); ?>

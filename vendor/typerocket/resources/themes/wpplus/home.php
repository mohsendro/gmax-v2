<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access directly. ?>

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
    $posts = $post->findAll()->with('meta')->where($where_post)->orderBy('id', 'DESC');
    $posts_data = $posts; 
    $posts = $posts->get();

    if( $posts != null || $posts > 0 ) {

        $count = $posts->count();
        $total_page = ceil($count / $option);
        $current_page = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
        $posts = $posts_data->take($option, ($current_page-1)*$option)->get();

    } else {

        $posts = [];
        $count = 0;
        $total_page = 0;
        $current_page = 0;
        
    }
?>

<main id="main" class="main blogs">
    <section id="blog-archive" class="container blog-archive">
        <div class="row">
            <div class="col-12 column">
                <!-- Component Heading Start -->
                <div class="heading">
                    <h1 class="title">آخرین اخبار و بلاگ</h1>
                </div>
                <!-- Component Heading End -->
            </div>
        </div>

        <?php if( $posts ): ?>
            <div class="row gap gx-3 gy-5">
                <?php foreach( $posts as $post ): ?>
                    <div class="col-12 col-md-6 col-lg-4 col-xl-3 column">
                        <!-- Component Blog Card Start -->
                        <?php get_template_part( 'components/blog', 'card' ); ?>
                        <!-- Component Blog Card End -->
                    </div>
                <?php endforeach; ?>
            </div>
        <?php else: ?>
            <!-- Component Not Result Start -->
            <?php get_template_part( 'components/not', 'result' ); ?>
            <!-- Component Not Result End -->
        <?php endif; ?>

        <?php
            if( $count > 0 ):
                require TYPEROCKET_DIR_PATH . '/functions/snippets/pagination.php';
                insertPagination(home_url('blog/page'), $current_page, $total_page, true);
            endif;
        ?>
    </section>
</main>

<?php get_footer(); ?>
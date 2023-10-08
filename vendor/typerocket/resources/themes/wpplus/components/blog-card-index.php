<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access directly. ?>

<div class="blog-new-card">
	<div class="content-top">
		<a href="<?php echo get_permalink($post->ID); ?>" class="title line-clamp-2"><?php echo wp_trim_words( $post->post_title, 25, '...' ); ?></a>
		<div class="details">
			<div class="date"><?php echo get_the_date('j F Y', $post->ID); ?></div>
			<?php $category = get_the_category($post->ID); ?>
			<div class="category"><?php echo $category[0]->name; ?></div>
		</div>
	</div>

	<div class="info">
		<a href="<?php echo get_permalink($post->ID); ?>" class="arrow">
			<i class="las la-arrow-up"></i>
		</a>
		<a href="<?php echo get_permalink($post->ID); ?>" class="thumbnail">
			<?php if( has_post_thumbnail($post->ID) ): ?>
                <?php echo get_the_post_thumbnail( $post->ID, 'medium' ); ?>
            <?php else: ?>
                <img src="<?php echo TYPEROCKET_DIR_URL; ?>/resources/assets/img/global/placeholder.webp" class="thumbnail">
            <?php endif; ?>
		</a>
	</div>

	<div class="content-bottom">
		<div class="category"><?php echo $category[0]->name; ?></div>
		<a href="<?php echo get_permalink($post->ID); ?>" class="title line-clamp-2"><?php echo wp_trim_words( $post->post_title, 25, '...' ); ?></a>
	</div>
</div>
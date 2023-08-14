<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access directly. ?>

<section id="comment-content" class="container-fluid comment-content">
    <div class="row">
        <div class="col-12 column">
			<?php comment_form(); ?>
			<?php wp_list_comments(); ?>
        </div>
    </div>
</section>




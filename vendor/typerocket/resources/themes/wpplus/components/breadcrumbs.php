<!-- Component Breadcrumbs Start -->
<section id="breadcrumbs" class="container breadcrumbs">
    <div class="row">
        <div class="col-12 column">
            <?php if (function_exists('rank_math_the_breadcrumbs')) rank_math_the_breadcrumbs(); ?>

            <?php
                if ( function_exists('yoast_breadcrumb') ) {
                    yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
                }
            ?>
        </div>
    </div>
</section>
<!-- Component Breadcrumbs End -->
<?php

get_header();

if (have_posts()):
    while (have_posts()):
        the_post();
        ?>

        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="bg-white shadow-sm p-3 mt-3 mb-2">
                        <img class="img-fluid mb-2" src="<?php the_post_thumbnail_url('full'); ?>">
                        <h1 class="h3 mb-2">
                            <?php the_title(); ?>
                        </h1>
                        <p class="text-gray small mb-2">
                            <i class="fas fa-map-marker-alt"></i>
                            <?php the_field('area', get_the_ID()); ?>
                        </p>
                        <ul class="small ul-with-icon-secondary d-flex">
                            <li class="mb-3">
                                <i class="fa fa fa-bed me-1"></i>
                                <?php echo get_field('rooms', get_the_ID()) . ' Rooms'; ?>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <?php
    endwhile;
endif;

get_footer();
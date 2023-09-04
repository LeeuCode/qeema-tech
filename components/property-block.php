<div class="<?php echo $args['member_column'] ?>">
    <div class="card hover-zoom-image mt-3 overflow-hidden shadow-sm">
        <div class="card-header <?php echo $args['overlay']; ?> rounded-0 overflow-hidden position-relative p-0">
            <img class="card-img-top rounded-0" src="<?php the_post_thumbnail_url('full') ?>"
                alt="<?php the_title(); ?>">
        </div>
        <div class="card-body p-3 pt-2 pb-2">
            <div class="details">
                <div>
                    <?php
                    $category = get_the_terms(get_the_ID(), 'property-category');

                    if (count($category) > 0):
                        ?>
                        <a href="#" class="mb-2 text-primary d-block">
                            <i class="far fa-building"></i>
                            <span>
                                <?php echo $category[0]->name; ?>
                            </span>
                        </a>
                    <?php endif; ?>
                    <h4 class="h5 mb-2"><a class="text-black" href="single-property-01.html">
                            <?php the_title(); ?>
                        </a>
                    </h4>
                    <p class="text-gray small mb-2">
                        <i class="fas fa-map-marker-alt"></i>
                        <?php the_field('area', get_the_ID()); ?>
                    </p>
                </div>
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
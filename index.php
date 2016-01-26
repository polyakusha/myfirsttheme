<?php get_header() ?>
        <!--Posts-->
        <div class="row">
            <div class="col-12">
                <div class="posts">
                    <?php while ( have_posts() ) : the_post() ?>

                    <div class="post-preview">

<!--                        Post title-->

                        <h2>
                            <a href="<?php the_permalink() ?>" title="<?php the_title_attribute() ?>">
                                <?php the_title()?>
                            </a>
                        </h2>

<!--                        Post thumbnail-->

                        <div class="post-thumbnail">
                            <?php if (has_post_thumbnail()) : ?>
                                <a href="<?php the_permalink() ?>" title="<?php the_title_attribute() ?>">
                                    <?php the_post_thumbnail('thumbnail') ?>
                                </a>
                            <?php endif ?>
                        </div>

<!--                        Post content-->
                        <?php the_content('Read more(place text)') ?>

<!--                        --><?php //if(comments_open()) : ?>
<!--                            <a href="--><?php //the_permalink() ?><!--" title="--><?php //the_title_attribute() ?><!--">-->
<!--                                --><?php //comments_number('No comments', 'One comment', 'Comment (%)')?>
<!--                            </a>-->
<!--                        --><?php //endif ?>

                    </div>
                    <?php endwhile ?>
                </div>

<!--                @todo: pagination-->

            </div>
        </div>

<?php get_footer() ?>
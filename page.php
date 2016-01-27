<?php get_header() ?>
<?php the_post() ?>

    <!--Posts-->
    <div class="row">
        <div class="twelve columns">
            <div class="post">

                <!--                Post title-->
                <h1><?php the_title()?></h1>

                <!--                Post thumbnail-->
                <div class="post-thumbnail">
                    <?php if (has_post_thumbnail()) : ?>
                        <?php the_post_thumbnail('large') ?>
                    <?php endif ?>
                </div>

                <!--                Post content-->
                <?php the_content() ?>
            </div>

        </div>
    </div>

<?php get_footer() ?>
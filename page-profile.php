<?php
/*
Template Name: Profile Template
*/
?>

<?php get_header(); ?>

    <div id="content">

        <div id="inner-content" class="wrap clearfix">

            <div id="main" class="twelvecol clearfix" role="main">

                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                    <article id="post-<?php the_ID(); ?>" <?php post_class( 'clearfix' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

                        <header class="article-header">

                        </header> <!-- end article header -->

                        <section class="entry-content clearfix" itemprop="articleBody">
                            <?php the_content(); ?>

                            <?php
if ( current_user_can( 'see_providers' ) ) {
    echo 'The current user can see Provider pages';
} ?>
                        </section> <!-- end article section -->

                    </article> <!-- end article -->

                <?php endwhile; else : ?>

                <?php endif; ?>

            </div> <!-- end #main -->

        </div> <!-- end #inner-content -->

    </div> <!-- end #content -->

<?php get_footer(); ?>

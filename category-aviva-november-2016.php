<?php get_header(); ?>

    <div class="content">

        <div id="inner-content" class="wrap clearfix">

            <div class="intro twelvecol first">

                <div id="description" class="entry-content" >
                    <?php echo category_description( $category_id ); ?>
                </div>

                <div id="main" class="twelvecol clearfix first" role="main">

                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                    <article id="post-<?php the_ID(); ?>" <?php post_class( 'clearfix' ); ?> role="article">

                        <header class="article-header">
                            <h1><?php the_title(); ?></h1>
                        </header> <!-- end article header -->

                        <section class="entry-content clearfix">
                            <?php the_content(); ?>
                        </section> <!-- end article section -->

                        <footer class="article-footer">

                        </footer> <!-- end article footer -->

                        <?php // comments_template(); // uncomment if you want to use them ?>

                    </article> <!-- end article -->

                    <?php endwhile; ?>

                    <?php else : ?>

                        <article id="post-not-found" class="hentry clearfix">
                                <header class="article-header">
                                    <h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
                            </header>
                                <section class="entry-content">
                                    <p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
                            </section>
                            <footer class="article-footer">
                                    <p><?php _e( 'This is the error message in the index.php template.', 'bonestheme' ); ?></p>
                            </footer>
                        </article>

                    <?php endif; ?>

                </div> <!-- end #main -->

        </div> <!-- end #inner-content -->

    </div> <!-- end #content -->

<?php wp_footer(); ?>

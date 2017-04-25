<?php get_header(); ?>

    <div id="content">

        <div id="inner-content" class="wrap clearfix">

            <?php get_sidebar('technical'); ?>

                <?php if ( is_user_logged_in() ) { ?>

                    <div id="main" class="ninecol clearfix" role="main">

                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                        <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

                            <header class="article-header">

                                <h1 class="entry-title single-title" itemprop="headline"><?php the_title(); ?></h1>

                                <h2>Target Article from
                                    <?php
                                        $yourTaxonomy = 'target_cat';
                                        // SHOW YOAST PRIMARY CATEGORY, OR FIRST CATEGORY
                                        $category = get_the_terms( $postId, $yourTaxonomy );
                                        $useCatLink = true;
                                        // If post has a category assigned.
                                        if ($category){
                                            $category_display = '';
                                            $category_link = '';
                                            if ( class_exists('WPSEO_Primary_Term') )
                                            {
                                                // Show the post's 'Primary' category, if this Yoast feature is available, & one is set
                                                $wpseo_primary_term = new WPSEO_Primary_Term( 'target_cat', get_the_id() );
                                                $wpseo_primary_term = $wpseo_primary_term->get_primary_term();
                                                $term = get_term( $wpseo_primary_term );
                                                if (is_wp_error($term)) {
                                                    // Default to first category (not Yoast) if an error is returned
                                                    $category_display = $category[0]->name;
                                                    $category_link = get_bloginfo('url') . '/' . 'event-category/' . $term->slug;
                                                } else {
                                                    // Yoast Primary category
                                                    $category_display = $term->name;
                                                    $category_link = get_term_link( $term->term_id );
                                                }
                                            }
                                            else {
                                                // Default, display the first category in WP's list of assigned categories
                                                $category_display = $category[0]->name;
                                                $category_link = get_term_link( $category[0]->term_id );
                                            }
                                            // Display category
                                            if ( !empty($category_display) ){
                                                if ( $useCatLink == true && !empty($category_link) ){
                                                echo '<span class="post-category">';
                                                echo '<a href="'.$category_link.'">'.$category_display.'</a>';
                                                echo '</span>';
                                                } else {
                                                echo '<span class="post-category">'.$category_display.'</span>';
                                                }
                                            }

                                        } ?>

                                </h2>

                            </header> <!-- end article header -->

                            <div class="entry-content clearfix" itemprop="articleBody">
                                <?php the_content(); ?>
                            </div> <!-- end article section -->

                            <footer class="article-footer">

                            </footer> <!-- end article footer -->

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
                                        <p><?php _e( 'This is the error message in the single.php template.', 'bonestheme' ); ?></p>
                                </footer>
                        </article>

                    <?php endif; ?>

                    <p><strong>Back issues of Target are posted here for reference purposes but please note that guidance contained in older editions may not be the most current.  We recommend that any search for information begins with the most recent edition.</strong></p>

					</div> <!-- end #main -->

                <?php } else { ?>

                    <div id="main" class="ninecol clearfix" role="main">

                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                        <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

                            <div class="entry-content clearfix" itemprop="articleBody">

                                <p class="restricted">The content you are trying to access is only available to members. Sorry.</p>

                                <p class="restricted">Please login or register to continue:


                                <?php wp_login_form( $args ); ?>


                                <a class="button" href="http://paradigmgroup.eu/wordpress/wp-login.php?action=register">Register</a></p>

                                <p class="restricted">If you have any trouble logging in, please do not hesitate to contact <a href="mailto:jack.machin@paradigmgroup.eu">Jack Machin</a> with your query.</p>
                            </div> <!-- end article section -->

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
                                        <p><?php _e( 'This is the error message in the single.php template.', 'bonestheme' ); ?></p>
                                </footer>
                        </article>

                    <?php endif; ?>

						<p><strong>Back issues of Target are posted here for reference purposes but please note that guidance contained in older editions may not be the most current.  We recommend that any search for information begins with the most recent edition.</strong></p>

                </div> <!-- end #main -->

            <?php }  ?>

        </div> <!-- end #inner-content -->

    </div> <!-- end #content -->

<?php get_footer(); ?>

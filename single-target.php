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

                                <h2>Target Article from  <?php $primary_cat_id=get_post_meta($product->id,'_yoast_wpseo_primary_product_cat',true);
if($primary_cat_id){
   $product_cat = get_term($primary_cat_id, 'product_cat');
   if(isset($product_cat->name))
       echo $product_cat->name;
}?></h2>

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

<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap clearfix">

                    <?php get_sidebar('technical'); ?>

                    <div id="main" class="ninecol clearfix" role="main">

                        <div class="breadcrumbs">
                      <span xmlns:v="http://rdf.data-vocabulary.org/#">
                            <span typeof="v:Breadcrumb"><a href="http://paradigmgroup.eu" rel="v:url" property="v:title">Home</a></span> » <span typeof="v:Breadcrumb"><a href="http://paradigmgroup.eu/members-area/" rel="v:url" property="v:title">Member's Area</a></span> » <span typeof="v:Breadcrumb"><a href="http://paradigmgroup.eu/members-area/safeguard/" rel="v:url" property="v:title">Safeguard</a></span> » <span typeof="v:Breadcrumb"><a href="http://paradigmgroup.eu/members-area/safeguard/technical-services/" rel="v:url" property="v:title">Technical Services</a></span> » <?php single_cat_title(); ?>
                          </span>
                        </div>

                        <h1 class="archive-title"><?php single_cat_title(); ?></h1>

                            <div class="fourcol clearfix first">
                                <h2><a href="/category/regulatory-updates/file-review-updates/">File Review Updates</a></h2>
                            </div>
                            <div class="fourcol clearfix">
                                <h2><a href="/category/regulatory-updates/compliance-updates/">Compliance Updates</a></h2>
                            </div>
                            <div class="fourcol clearfix last">
                                <h2><a href="/category/regulatory-updates/technical-updates/">Technical Updates</a></h2>
                            </div>

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                                <article id="post-<?php the_ID(); ?>" <?php post_class( 'clearfix' ); ?> role="article">

                                    <header class="article-header">

                                        <h3 class="h2">
                                            <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
                                                <?php the_title(); ?>
                                            </a>
                                            <span class="byline vcard">
                                                <?php printf( __( 'Posted <time class="updated" datetime="%1$s" pubdate>%2$s</time>', 'bonestheme' ), get_the_time( 'Y-m-j' ), get_the_time( __( 'F jS, Y', 'bonestheme' ) )); ?>
                                            </span>
                                        </h3>

                                    </header> <!-- end article header -->

                        <div class="entry-content clearfix">

                            <?php the_excerpt(); ?>

                        </div> <!-- end article section -->

                    </article> <!-- end article -->

                <?php endwhile; ?>

                <?php if ( function_exists( 'bones_page_navi' ) ) {

                    bones_page_navi();

                } else { ?>

                    <nav class="wp-prev-next">
                        <ul class="clearfix">
                            <li class="prev-link"><?php next_posts_link( __( '&laquo; Older Entries', 'bonestheme' )) ?></li>
                            <li class="next-link"><?php previous_posts_link( __( 'Newer Entries &raquo;', 'bonestheme' )) ?></li>
                        </ul>
                    </nav>

                <?php } ?>

                <?php else : ?>

                    <article id="post-not-found" class="hentry clearfix">
                        <header class="article-header">
                            <h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
                        </header>
                        <section class="entry-content">
                            <p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
                        </section>
                        <footer class="article-footer">
                                <p><?php _e( 'This is the error message in the archive.php template.', 'bonestheme' ); ?></p>
                        </footer>
                    </article>

                <?php endif; ?>

            </div> <!-- end #main -->

        </div> <!-- end #inner-content -->

    </div> <!-- end #content -->

<?php get_footer(); ?>

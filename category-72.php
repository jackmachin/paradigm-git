<?php get_header(); ?>
			<div id="content">
				<div id="inner-content" class="wrap clearfix">
					<div class="intro twelvecol">
						<div class="description eightcol">
							<h1>Welcome To Target…</h1>
								<?php echo category_description( $category_id ); ?>
						</div>
					<div class="targetcontents threecol">
							<h3>Regulatory</h3>
								<ul>
									<li><a href="/category/target/december-2013/#post-9874">Dilution Levy</a></li>
									<li><a href="/category/target/december-2013/#post-9872">Compliance Requirements</a></li>
									<li><a href="/category/target/december-2013/#post-9843">CPD Reference Sources</a></li>
									<li><a href="/category/target/december-2013/#post-9782">Best Practice Sessions</a></li>
									<li><a href="/category/target/december-2013/#post-9923">VCT & EIS</a></li>
									<li><a href="/category/target/december-2013/#post-9876">New Paradigm Website</a></li>
								</ul>
							<h3>Strategic Partners</h3>
								<ul>
									<li><a href="/category/target/december-2013/#post-9852">AXA Wealth</a></li>
									<li><a href="/category/target/december-2013/#post-9887">Zurich</a></li>
								</ul>
						</div>
					</div>
						<div id="main" class="twelvecol clearfix" role="main">

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class( 'clearfix' ); ?> role="article">

								<header class="article-header">

									<h1><?php the_title(); ?></h1>

								</header> <!-- end article header -->

								<section class="entry-content clearfix">
									<?php the_content(); ?>
								</section> <!-- end article section -->

								<footer class="article-footer">
									<p class="tags"><?php the_tags( '<span class="tags-title">' . __( 'Tags:', 'bonestheme' ) . '</span> ', ', ', '' ); ?></p>

								</footer> <!-- end article footer -->

								<?php // comments_template(); // uncomment if you want to use them ?>

							</article> <!-- end article -->

							<?php endwhile; ?>

									<?php if ( function_exists( 'bones_page_navi' ) ) { ?>
											<?php bones_page_navi(); ?>
									<?php } else { ?>
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
												<p><?php _e( 'This is the error message in the index.php template.', 'bonestheme' ); ?></p>
										</footer>
									</article>

							<?php endif; ?>

						</div> <!-- end #main -->

				</div> <!-- end #inner-content -->

			</div> <!-- end #content -->

<?php wp_footer(); ?>

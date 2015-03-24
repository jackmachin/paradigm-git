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
									<li><a href="/category/target/november-2013/#post-8527">CP13/14 Regulatory Fees & Levies</a></li>
									<li><a href="/category/target/november-2013/#post-8566">VCT/EIS Investments</a></li>
									<li><a href="/category/target/november-2013/#post-8570">File Review Updates</a></li>
									<li><a href="/category/target/november-2013/#post-8564">Fixed Protection 2014: Application Forms Available</a></li>
									<li><a href="/category/target/november-2013/#post-8074">FCA Interventions</a><li>
								</ul>
							<h3>Strategic Partners</h3>
								<ul>
									<li><a href="/category/target/november-2013/#post-8067">Aegon</a></li>
									<li><a href="/category/target/november-2013/#post-8128">Aviva</a></.li>
									<li><a href="/category/target/november-2013/#post-8063">AXA Wealth</a></li>
									<li><a href="/category/target/november-2013/#post-8923">Bright Grey</a></li>
									<li><a href="/category/target/november-2013/#post-7820">Ingenious</a></li>
									<li><a href="/category/target/november-2013/#post-8047">Legal & General</a></li>
									<li><a href="/category/target/november-2013/#post-8045">Legal & General Investments</a></li>
									<li><a href="/category/target/november-2013/#post-8156">Partnership</a></li>
									<li><a href="/category/target/november-2013/#post-8042">Prudential</a></li>
									<li><a href="/category/target/november-2013/#post-8925">Scottish Provident</a></li>
									<li><a href="/category/target/november-2013/#post-8136">Scottish Widows - Auto Enrolment</a></li>
									<li><a href="/category/target/november-2013/#post-8510">Scottish Widows - Governed Investment Strategies</a></li>
									<li><a href="/category/target/november-2013/#post-8034">Threadneedle</a></li>
									<li><a href="/category/target/november-2013/#post-8032">Zurich</a></li>
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

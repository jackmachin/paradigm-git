<?php get_header(); ?>
			<?php if ( current_user_can( 'read' ) ) { ?>
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
								<li><a href="/category/target/october-2013/#post-6777">Consumer Credit Interim Permissions</a></li>
								<li><a href="/category/target/october-2013/#post-6612">PS13/1</a></li>
								<li><a href="/category/target/october-2013/#post-6610">Client Agreement Updates</a></li>
							</ul>
						<h3>Strategic Partners</h3>
							<ul>
								<li><a href="/category/target/october-2013/#post-6701">Aegon</a></li>
								<li><a href="/category/target/october-2013/#post-6606">Aviva</a></li>
								<li><a href="/category/target/october-2013/#post-6604">AXA Wealth - Nick Lee</a></li>
								<li><a href="/category/target/october-2013/#post-6602">AXA Wealth - Nick Elphick</a></li>
								<li><a href="/category/target/october-2013/#post-6596">Just Retirement</a></li>
								<li><a href="/category/target/october-2013/#post-6600">Legal & General Investments</a></li>
								<li><a href="/category/target/october-2013/#post-6594">Prudential</a></li>
								<li><a href="/category/target/october-2013/#post-6592">Zurich</a></li>
							</ul>
						<h3>Other</h3>
							<ul>
								<li><a href="/category/target/october-2013/#post-6779">RIP Matrix Tool</a></li>
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
		<?php }  else { ?>
			<p style="text-align:center;" class="restricted">Please login to continue: <a class="button" href="/wordpress/wp-login.php/">Login</a></p>
		<?php }	?>
<?php wp_footer(); ?>

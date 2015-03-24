<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap clearfix">

					<div class="intro twelvecol">
							<div id="description" class="eightcol"><?php echo category_description( $category_id ); ?> </div>
							<div class="partnershipcontents threecol">
								<h2>Contents</h2>
								<ul>
									<li><a href="/category/partnership-newsletter/#post-9257">How Client Misunderstanding of Health Issues is Costing Them Income</a></li>
									<li><a href="/category/partnership-newsletter/#post-9266">Care, Financial Advice & Wellbeing</a></li>
									<li><a href="/category/partnership-newsletter/#post-9285">Equity Release – Skiing Uphill?</a></li>
									<li><a href="/category/partnership-newsletter/#post-9272">Dedicated Support from Partnership</a></li>
									<li><a href="/category/partnership-newsletter/#post-9292">Paradigm Later Life Academy</a></li>
							</div>

					</div>

						<div id="main" class="twelvecol clearfix" role="main">

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class( 'clearfix' ); ?> role="article">

								<header class="article-header">
									<?php if (has_post_format ('image') ){} else { ?>
										<h1><?php the_title(); ?></h1>
									<?php } ?>
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

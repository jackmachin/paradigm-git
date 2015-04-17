<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap clearfix">

						<?php get_sidebar(); ?>

						<div id="main" class="ninecol clearfix" role="main">

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class( 'clearfix' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

								<header class="article-header">

								</header> <!-- end article header -->

								<dib class="entry-content clearfix" itemprop="articleBody">
									<?php the_content(); ?>
                                </div> <!-- end article section -->

								<footer class="article-footer">

								</footer> <!-- end article footer -->

							</article> <!-- end article -->

							<?php endwhile; else : ?>

							<?php endif; ?>

						</div> <!-- end #main -->

				</div> <!-- end #inner-content -->

			</div> <!-- end #content -->

<?php get_footer(); ?>

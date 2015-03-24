<?php
/*
Template Name: Learning Template
*/

$main_categories = get_categories( array(
	'taxonomy' => 'custom_cat',
	'parent' => 0,
	'hide_empty' => 0,
) );
?>

<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap clearfix">

					<?php get_sidebar('learning'); ?>

						<div id="main" class="ninecol clearfix" role="main">

							<article id="post-<?php the_ID(); ?>" <?php post_class( 'clearfix' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
								<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
								<header class="article-header">
                  <?php if ( function_exists('yoast_breadcrumb') ) {
yoast_breadcrumb('<p id="breadcrumbs">','</p>');
} ?>
									<h1><?php the_title ()?></h1>
								</header> <!-- end article header -->

								<section class="entry-content clearfix" itemprop="articleBody">
									<?php the_content () ?>
									<?php endwhile; else: ?>
									<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
								<?php endif; ?>
								<?php

																		/*
									 * Loop through Categories and Display Posts within
									 */
									 $args = array(
    'orderby'       => 'name',
    'order'         => 'ASC',
    'hide_empty'    => true,
    'exclude'       => array(),
    'exclude_tree'  => array(),
    'include'       => array(),
    'number'        => '',
    'fields'        => 'all',
    'slug'          => '',
    'parent'         => '0',
    'hierarchical'  => true,
    'child_of'      => 0,
    'get'           => '',
    'name__like'    => '',
    'pad_counts'    => false,
    'offset'        => '',
    'search'        => '',
    'cache_domain'  => 'core'
);

										// Gets every "category" (term) in this taxonomy to get the respective posts
										$terms = get_terms( 'custom_cat',  $args);

										foreach( $terms as $term ) : ?>

											<div class="fourcol tile"">
												<h2 style="text-align: center; margin: 10px 0 0 0;"><a href="http://paradigmgroup.eu/field/<?php echo $term->slug ?>" style="color:#fff"><?php echo $term->name; ?></a></h2>
												<?php
												//list terms in a given taxonomy using wp_list_categories (also useful as a widget if using a PHP Code plugin)

												$taxonomy     = 'custom_cat';
												$orderby      = 'id';
												$show_count   = 1;      // 1 for yes, 0 for no
												$pad_counts   = 0;      // 1 for yes, 0 for no
												$hierarchical = 1;      // 1 for yes, 0 for no
												$title        = '';
												$child= $term->term_id;

												$args = array(
												  'taxonomy'     => $taxonomy,
												  'orderby'      => $orderby,
												  'show_count'   => $show_count,
												  'pad_counts'   => $pad_counts,
												  'hierarchical' => $hierarchical,
												  'title_li'     => $title,
												  'hide_empty'         => 1,
												  'child_of' => $child
												);
												?>

												<ul class="member-list">
												<?php wp_list_categories( $args ); ?>
												</ul>
											</div>


										<?php endforeach; ?>

								</section> <!-- end article section -->

								<footer class="article-footer">

								</footer> <!-- end article footer -->

							</article> <!-- end article -->

						</div> <!-- end #main -->

				</div> <!-- end #inner-content -->

			</div> <!-- end #content -->

<?php get_footer(); ?>

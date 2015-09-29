<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap clearfix">
				
				<?php

				if (is_tax ('target_cat',  array( '2007' , '2008' , '2009' , '2010' , '2011' , '2012' , '2013' , '2014' , 'Special Editions')) ) { 
					
					get_sidebar( 'technical' ); ?>
					
					<div id="main" class="ninecol clearfix" role="main">
					
						<h1>
							<?php if( is_tax() ) {
								global $wp_query;
								$term = $wp_query->get_queried_object();
								$title = $term->name;
								$id = $term->id;
								
								echo $title;
							} ?> Target Archive
							
						</h1>
						<p><b>Back issues of Target are posted here for reference purposes but please note that guidance contained in older editions may not be the most current.  We recommend that any search for information begins with the most recent edition.</b></p>
						<section class="entry-content clearfix">
							<?php

								$categories2 = get_terms('target_cat',array('order' => 'DESC','parent' => $term->term_id , 'hide_empty'=> '1' ));

									foreach ( $categories2 as $category ) { 
									
										$term_id = $category->term_id;
										$term_meta = get_option( "taxonomy_$term_id" );
										$url = $term_meta['tax_image'];
										$pdfurl = $term_meta['tax_pdf'];
										$wordurl = $term_meta ['tax_word'];
									?>

										<h2><a href="http://paradigmgroup.eu/issue/<?php echo $category->slug; ?>"><?php echo $category->name;?></a></h2>
										<div class="twelvecol">
										<div class="twocol">
											<a href="http://paradigmgroup.eu/issue/<?php echo $category->slug; ?>"><img src="<?php echo $url; ?>"/></a>
										</div>
										<div class="ninecol">
										<?php if( ! empty( $term_meta['tax_pdf'] ) ) { ?><a href="<?php echo $pdfurl; ?>">PDF</a><?php } else {} ?> <?php if( ! empty( $term_meta['tax_word'] ) ) { ?><a href="<?php echo $wordurl; ?>">Word</a><?php } else {} ?>
								<?php $posts = get_posts( array( 'target_cat' => $category->slug, 'post_type' => 'target' ) );  ?>
									
									<ul>
										<?php foreach($posts as $post) { 
											setup_postdata($post);  ?>

											<li><?php echo the_title();?></li>

										<?php } ?>
									</ul>
					</div>
					</div>
								<?php }

							?>
						</section>

					<?php } 
				
				else { ?>

					<div id="main" class="twelvecol first clearfix" role="main">

						<h1><?php post_type_archive_title(); ?></h1>
						
						<?php echo category_description( $category_id ); ?> 

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
                                            <p><?php _e( 'This is the error message in the target archive template.', 'bonestheme' ); ?></p>
										</footer>
									</article>

							<?php endif; ?>
							<p><strong>Back issues of Target are posted here for reference purposes but please note that guidance contained in older editions may not be the most current.  We recommend that any search for information begins with the most recent edition.</strong></p>
						</div> <!-- end #main -->
					<?php } ?>
					
					</div> <!-- end #inner-content -->

			</div> <!-- end #content -->

<?php get_footer (); ?>
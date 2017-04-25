<?php get_header(); ?>

    <div id="content">

        <div id="inner-content" class="wrap clearfix">

            <?php

                $term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );
                $parent = get_term($term->parent, get_query_var('taxonomy') );

                if($term->parent > 0)  {
            ?>

            <div id="main" class="twelvecol first clearfix" role="main">
                <div class="ninecol first">
                    <div class="entry-content intro">

                    <h1>Welcome to Target</h1>

                    <?php
                    // SHOW YOAST PRIMARY CATEGORY, OR FIRST CATEGORY
                    $category = get_the_category();
                    $useCatLink = true;
                    // If post has a category assigned.
                    if ($category){
                        $category_display = '';
                        $category_link = '';
                        if ( class_exists('WPSEO_Primary_Term') )
                        {
                            // Show the post's 'Primary' category, if this Yoast feature is available, & one is set
                            $wpseo_primary_term = new WPSEO_Primary_Term( 'category', get_the_id() );
                            $wpseo_primary_term = $wpseo_primary_term->get_primary_term();
                            $term = get_term( $wpseo_primary_term );
                            if (is_wp_error($term)) {
                                // Default to first category (not Yoast) if an error is returned
                                $category_display = $category[0]->name;
                                $category_link = get_category_link( $category[0]->term_id );
                            } else {
                                // Yoast Primary category
                                $category_display = $term->name;
                                $category_link = get_category_link( $term->term_id );
                            }
                        }
                        else {
                            // Default, display the first category in WP's list of assigned categories
                            $category_display = $category[0]->name;
                            $category_link = get_category_link( $category[0]->term_id );
                        }
                        // Display category
                        if ( !empty($category_display) ){
                            if ( $useCatLink == true && !empty($category_link) ){
                            echo '<span class="post-category">';
                            echo '<a href="'.$category_link.'">'.htmlspecialchars($category_display).'</a>';
                            echo '</span>';
                            } else {
                            echo '<span class="post-category">'.htmlspecialchars($category_display).'</span>';
                            }
                        }

                    }
                    ?>

                        <p>If you have any queries regarding Target, please contact: <a href="mailto:helpdesk@paradigmgroup.eu">helpdesk@paradigmgroup.eu</a></p>
                        <p>You can also follow us on Twitter for information updates <a href="http://www.twitter.com/@Paradigmtechnic">@ParadigmTechnic</a></p>

                        <?php

                            global $wp_query;

                            $term_id = $wp_query->queried_object_id;
                            $term_meta = get_option( "taxonomy_$term_id" );
                            $pdfurl = $term_meta['tax_pdf'];
                            $wordurl = $term_meta ['tax_word'];

                        ?>

                        <?php if( ! empty( $term_meta['tax_pdf'] ) ) { ?><p><a href="<?php echo $pdfurl; ?>">PDF Version</a></p><?php } else {} ?>
                        <?php if( ! empty( $term_meta['tax_word'] ) ) { ?><p><a href="<?php echo $wordurl; ?>">Word Version</a></p><?php } else {} ?>

                        </div>

                            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                                <article id="post-<?php the_ID(); ?>" <?php post_class( 'clearfix' ); ?> role="article">

                                    <header class="article-header">

                                        <h1 class="h2"><?php the_title(); ?></h1>

                                    </header> <!-- end article header -->

                                    <div class="entry-content clearfix">

                                        <?php the_content(); ?>

                                    </div> <!-- end article section -->

                                    <footer class="article-footer">
                                        <p><a href="#top">Back to top&hellip;</a></p>
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
                                            <p><?php _e( 'This is the error message in the target archive template.', 'bonestheme' ); ?></p>
                                    </footer>
                                </article>

                            <?php endif; ?>
                        </div>
                        <div class="threecol targetcontents entry-content last">
                          <h2>Contents</h2>
                            <ul>
                              <?php foreach($posts as $post) { setup_postdata($post);  ?>
                                <li><a href="<?php get_category_link( $category_id ); ?> #post-<?php the_id ();?>"><?php echo the_title();?></a></li>
                              <?php } ?>
                            </ul>
                        </div>
                        <div class="twelvecol">
                            <p><strong>Back issues of Target are posted here for reference purposes but please note that guidance contained in older editions may not be the most current. We recommend that any search for information begins with the most recent edition.</strong></p>
                        </div>
                    </div>
                <?php } else { ?>

                    <?php get_sidebar( 'technical' ); ?>

                        <div id="main" class="ninecol clearfix" role="main">

                            <div class="breadcrumbs">
                                <span xmlns:v="http://rdf.data-vocabulary.org/#">
                                <span typeof="v:Breadcrumb"><a href="http://paradigmgroup.eu" rel="v:url" property="v:title">Home</a></span> » <span typeof="v:Breadcrumb"><a href="http://paradigmgroup.eu/members-area/" rel="v:url" property="v:title">Members Area</a></span> » <span typeof="v:Breadcrumb"><a href="http://paradigmgroup.eu/members-area/safeguard/" rel="v:url" property="v:title">Safeguard</a></span> » <span typeof="v:Breadcrumb"><a href="http://paradigmgroup.eu/members-area/safeguard/technical-services/" rel="v:url" property="v:title">Technical Services</a></span> » <span typeof="v:Breadcrumb"><span class="breadcrumb_last" property="v:title"><a href="http://paradigmgroup.eu/members-area/safeguard/technical-services/target/" rel="v:url" property="v:title">Target</a></span></span> » <?php single_cat_title(); ?>
                              </span>
                            </div>

                            <h1><?php single_cat_title(); ?> Target Archive</h1>

                                <p><strong>Back issues of Target are posted here for reference purposes but please note that guidance contained in older editions may not be the most current.  We recommend that any search for information begins with the most recent edition.</strong></p>

                                    <section class="entry-content clearfix">

                                        <?php

                                            $categories2 = get_terms('target_cat',array('orderby' => 'slug', 'order' => 'DESC','parent' => $term->term_id , 'hide_empty'=> '1' ));

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

                                                    <a href="http://paradigmgroup.eu/issue/<?php echo $category->slug; ?>"><img  class="shadow" src="<?php echo $url; ?>"/></a>

                                                </div>

                                                <div class="ninecol">

                                                    <?php if( ! empty( $term_meta['tax_pdf'] ) ) { ?>

                                                        <a href="<?php echo $pdfurl; ?>">PDF</a>

                                                    <?php } else {} ?>

                                                    <?php if( ! empty( $term_meta['tax_word'] ) ) { ?>

                                                        <a href="<?php echo $wordurl; ?>">Word</a>

                                                    <?php } else {} ?>

                                                    <?php $posts = get_posts( array( 'target_cat' => $category->slug, 'post_type' => 'target' ) );  ?>

                                                        <ul>

                                                            <?php foreach($posts as $post) { setup_postdata($post);  ?>

                                                                <li><?php echo the_title();?></li>

                                                            <?php } ?>

                                                        </ul>

                                                </div>

                                            </div>
                                        <?php } ?>
                                    </section>
                                </div>
                        <?php } ?>

				</div> <!-- end #inner-content -->

			</div> <!-- end #content -->

<?php get_footer (); ?>

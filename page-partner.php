<?php
/*
Template Name: Strategic Partner Template
*/
?>

<?php get_header(); ?>

    <div id="content">

        <div id="inner-content" class="wrap clearfix">

            <?php get_sidebar( 'members' ); ?>

            <div id="main" class="ninecol clearfix" role="main">

                <?php if (have_posts()) : while (have_posts()) : the_post();  ?>

                	<?php if ( current_user_can( 'see_provier' ) ) { ?>

                        <article id="post-<?php the_ID(); ?>" <?php post_class( 'clearfix' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

                            <header class="article-header">

                                <?php if ( function_exists('yoast_breadcrumb') ) {
                                    yoast_breadcrumb('<p id="breadcrumbs">','</p>');
                                } ?>

                                <h1><?php the_title ();?></h1>
                            </header> <!-- end article header -->

                            <section class="entry-content clearfix" itemprop="articleBody">
                                <img src="<?php the_field ('logo');?>" class="alignright clearfix">

                                <?php the_field ('intro_text');?>

                                <?php if( have_rows('main_content') ): ?>

                                    <?php while( have_rows('main_content') ): the_row();?>

                                        <h2><a class="aj-collapse" rel="<?php the_sub_field ('section_id') ;?>"><?php  the_sub_field ('section_title') ; ?></a></h2>

                                        <div class="aj-hidden clearfix" id="<?php  the_sub_field ('section_id') ;?>">
                                            <?php  the_sub_field ('section_content') ; ?>
                                        </div>

                                    <?php endwhile; ?>

                                <?php endif; ?>

                                <?php the_field ('afterthoughts');?>

                            </section> <!-- end article section -->

                        </article> <!-- end article -->

                    <?php } else { ?>
                        <div class="members-access-error">
                            <p class="restricted">The content you are trying to access is only available to members. Sorry.</p>
                            <p class="restricted">Please login or register to continue:</p>
                            [my-login-form]

                            <a class="button" href="http://paradigmgroup.eu/wp-login.php?action=register">Register</a>
                            <p class="restricted">If you have any trouble logging in, please do not hesitate to contact <a href="mailto:jack.machin@paradigmgroup.eu">Jack Machin</a> with your query.</p>
                        </div>
                    <?php } ?>
                <?php endwhile; else : ?>

                <?php endif; ?>

            </div> <!-- end #main -->

        </div> <!-- end #inner-content -->

    </div> <!-- end #content -->

<?php get_footer(); ?>

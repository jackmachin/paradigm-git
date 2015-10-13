<?php get_header(); ?>

    <div id="content">

        <div id="inner-content" class="wrap clearfix">

            <?php if (in_category (array('Breaking News'))) {

                get_sidebar('members');

            } elseif (in_category ('Regulatory Updates')) {

                get_sidebar('technical');

            } else {

                get_sidebar();

            } ?>

            <div id="main" class="ninecol clearfix" role="main">

                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                    <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

                    <header class="article-header">

                        <h1 class="entry-title single-title" itemprop="headline"><?php the_title(); ?></h1>

                    </header> <!-- end article header -->

                    <div class="entry-content clearfix" itemprop="articleBody">
                        <?php the_content(); ?>
                    </div> <!-- end article section -->

                    <footer class="article-footer">
                        <?php if (in_category ('Aviva')) { ?>

                            <h4>Visit the <a href="/members-area/strategic-partners/aviva/">Aviva Strategic Partner page</a></h4>

                        <?php } elseif (has_tag ('Aviva')) { ?>

                            <h4>Visit the <a href="/members-area/strategic-partners/aviva/">Aviva Strategic Partner page</a></h4>

                        <?php } elseif (in_category ('Aegon')) { ?>

                            <h4>Visit the <a href="/members-area/strategic-partners/aegon/">Aegon Strategic Partner page</a></h4>

                        <?php } elseif (in_category ('Ageas')) { ?>

                            <h4>Visit the <a href="/members-area/strategic-partners/ageas-protect/">Ageas Protect Strategic Partner page</a></h4>
                        <?php } elseif (in_category ('AXA Wealth')) { ?>

                            <h4>Visit the <a href="/members-area/strategic-partners/axa-wealth/">AXA Wealth Strategic Partner page</a></h4>

                        <?php } elseif  (has_tag ('AXA')) { ?>

                            <h4>Visit the <a href="/members-area/strategic-partners/axa-wealth/">AXA Wealth Strategic Partner page</a></h4>

                        <?php } elseif (in_category ('BlackRock')) { ?>

                            <h4>Visit the <a href="/members-area/strategic-partners/blackrock/">Blackrock Strategic Partner page</a></h4>

                        <?php } elseif (has_tag ('bny')) { ?>

                            <h4>Visit the <a href="/members-area/strategic-partners/bny-mellon">BNY Mellon Strategic Partner page</a></h4>

                        <?php } elseif (in_category ('Bright Grey')) { ?>

                            <h4>Visit the <a href="/members-area/strategic-partners/bright grey/">Bright Grey Strategic Partner page</a></h4>
                        <?php } elseif (in_category ('Cater Allen Private Bank')) { ?>

                            <h4>Visit the <a href="/members-area/strategic-partners/cater-allen-private-bank/">Cater Allen Strategic Partner page</a></h4>
                        <?php } elseif (in_category ('Fidelity')) { ?>

                            <h4>Visit the <a href="/members-area/strategic-partners/fidelity/">Fidelity Strategic Partner page</a></h4>

                        <?php } elseif (in_category ('Friends Life')) { ?>

                            <h4>Visit the <a href="/members-area/strategic-partners/friends-life/">Friends Life Strategic Partner page</a></h4>
                        <?php }	elseif (in_category ('Henderson')) { ?>

                            <h4>Visit the <a href="/members-area/strategic-partners/henderson-global-investors/">Henderson Strategic Partner page</a></h4>
                        <?php } elseif (in_category ('Ingenious')) { ?>

                            <h4>Visit the <a href="/members-area/strategic-partners/ingenious-investments/">Ingenious Strategic Partner page</a></h4>
                        <?php } elseif (has_tag ('Just Retirement')) { ?>

                            <h4>Visit the <a href="/members-area/strategic-partners/just-retirement/">Just Retirement Strategic Partner page</a></h4>
                        <?php } elseif (in_category ('J.P. Morgan')) { ?>

                            <h4>Visit the <a href="/members-area/strategic-partners/j-p-morgan-asset-management/">J.P. Morgan Strategic Partner page</a></h4>
                        <?php } elseif (in_category (16)) { ?>

                            <h4>Visit the <a href="/members-area/strategic-partners/legal-general/">Legal &amp; General Strategic Partner page</a></h4>
                        <?php } elseif (has_tag ('legal-general')) { ?>

                            <h4>Visit the <a href="/members-area/strategic-partners/legal-general/">Legal &amp; General Strategic Partner page</a></h4>
                        <?php } elseif (in_category ('Legal & General Investments')) { ?>

                            <h4>Visit the <a href="/members-area/strategic-partners/legal-general-investments/">Legal &amp; General Investments Strategic Partner page</a></h4>

                        <?php } elseif (in_category ('M&G')) { ?>

                            <h4>Visit the <a href="/members-area/strategic-partners/mg-investments/">M&amp;G Strategic Partner page</a></h4>

                        <?php } elseif (has_tag ('MG')) { ?>

                            <h4>Visit the <a href="/members-area/strategic-partners/mg-investments/">M&amp;G Strategic Partner page</a></h4>

                        <?php } elseif (in_category ('MetLife')) { ?>

                            <h4>Visit the <a href="/members-area/strategic-partners/metlife/">Metlife Strategic Partner page</a></h4>

                        <?php } elseif (in_category ('Octopus')) { ?>

                            <h4>Visit the <a href="/members-area/strategic-partners/octopus/">Octopus Strategic Partner page</a></h4>

                        <?php } elseif (has_tag ('Octopus')) { ?>

                            <h4>Visit the <a href="/members-area/strategic-partners/octopus/">Octopus Strategic Partner page</a></h4>

				        <?php } elseif (has_tag ('Partnership')) { ?>

                            <h4>Visit the <a href="/members-area/strategic-partners/partnership/">Partnership Strategic Partner page</a></h4>
                        <?php } elseif (has_tag ('Parasols')) { ?>

                            <h4>Visit the <a href="/members-area/strategic-partners/para-sols/">Para-Sols Strategic Partner page</a></h4>

                        <?php } elseif (in_category ('Prudential')) { ?>

                            <h4>Visit the <a href="/members-area/strategic-partners/prudential/">Prudential Strategic Partner page</a></h4>

						<?php } elseif (has_tag ('Prudential')) { ?>

                            <h4>Visit the <a href="/members-area/strategic-partners/prudential/">Prudential Strategic Partner page</a></h4>

                        <?php } elseif (has_tag ('Santander')) { ?>

                            <h4>Visit the <a href="/members-area/strategic-partners/santander/">Santander Strategic Partner page</a></h4>

                        <?php } elseif (in_category ('Scottish Widows')) { ?>

                            <h4>Visit the <a href="/members-area/strategic-partners/scottish-widows/">Scottish Widows Strategic Partner page</a></h4>
                        <?php } elseif (in_category ('Scottish Provident')) { ?>

                            <h4>Visit the <a href="/members-area/strategic-partners/scottish-provident/">Scottish Provident Strategic Partner page</a></h4>
                        <?php } elseif (has_tag ('Scottish Life')) { ?>

                            <h4>Visit the <a href="/members-area/strategic-partners/royal-london/">Royal London Strategic Partner page</a></h4>
                        <?php } elseif (has_tag ('Royal London')) { ?>

                            <h4>Visit the <a href="/members-area/strategic-partners/royal-london/">Royal London Strategic Partner page</a></h4>
                        <?php } elseif (has_tag ('Schroders')) { ?>

                            <h4>Visit the <a href="/members-area/strategic-partners/schroders/">Schroders Strategic Partner page</a></h4>

                        <?php } elseif (has_tag ('Threadneedle')) { ?>

                            <h4>Visit the <a href="/members-area/strategic-partners/threadneedle/">Threadneedle Strategic Partner page</a></h4>
                        <?php } elseif (has_tag ('Zurich')) { ?>

                            <h4>Visit the <a href="/members-area/strategic-partners/zurich/">Zurich Strategic Partner page</a></h4>

						<?php } ?>

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
                                <p><?php _e( 'This is the error message in the single.php template.', 'bonestheme' ); ?></p>
                        </footer>
                </article>

            <?php endif; ?>

            </div> <!-- end #main -->

        </div> <!-- end #inner-content -->

    </div> <!-- end #content -->

<?php get_footer(); ?>

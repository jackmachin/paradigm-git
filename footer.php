			<footer class="footer" role="contentinfo">

				<div id="inner-footer" class="wrap clearfix">
					<div class="last"><?php get_search_form(); ?></div>
					<nav class="footer-links" role="navigation">

							<?php

								if ( current_user_can( 'read' ) ) {

									if (is_page_template ('page-members.php')) { bones_member_footer_nav();}

									elseif (is_page_template ('page-technical.php')) { bones_member_footer_nav();}

									elseif (is_page_template ('page-target.php')) { bones_member_footer_nav();}

									elseif (is_page_template ('page-learning.php')) { bones_member_footer_nav();}

									elseif (is_tax ('custom_cat')) { bones_member_footer_nav();}

									elseif ( 'learning' == get_post_type() ) { bones_member_footer_nav();}

									elseif (is_category (array('Regulatory Updates', 'File Review Updates', 'Technical Updates', 'Compliance Updates'))) { bones_member_footer_nav();}

									elseif (in_category (array('Regulatory Updates', 'Breaking News', 'Scottish Widows', 'Henderson'))) { bones_member_footer_nav();}

									elseif (is_tax ('target_cat')) { bones_member_footer_nav();}

									elseif (is_page_template ('page-profile.php')) {}

									else {bones_footer_nav();}
								}

								else {bones_footer_nav();}


							?>
					</nav>

					<p class="source-org copyright">Paradigm Partners Ltd | Registered in England and Wales. Company No.: 09902499 | Paradigm Partners Ltd, Paradigm House, Brooke Court, Wilmslow, Cheshire, SK9 3ND |</p>

				</div> <!-- end #inner-footer -->

			</footer> <!-- end footer -->

		</div> <!-- end #container -->

		<!-- all js scripts are loaded in library/bones.php -->
		<?php wp_footer(); ?>

	</body>

</html> <!-- end page. what a ride! -->

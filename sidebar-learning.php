			<?php if ( current_user_can( 'read' ) ) { ?>

				<div id="sidebar-learning" class="sidebar threecol first clearfix" role="complementary">
					<nav role="navigation">
						<?php bones_learning_nav(); ?>
					</nav>

					<?php dynamic_sidebar ('sidebar-learning');?>

				</div>

			<?php } ?>

			<?php if ( current_user_can( 'read' ) ) { ?>

				<div id="sidebar-members" class="sidebar threecol first clearfix" role="complementary">
					<?php if ( current_user_can( 'see_menu' ) ) { ?>

						<nav role="navigation">
							<?php bones_member_nav(); ?>
						</nav>

					<?php } ?>

					<?php if ( is_active_sidebar( 'sidebar-members' ) ) : ?>

						<?php dynamic_sidebar( 'sidebar-members' ); ?>

					<?php endif; ?>

				</div>

			<?php } ?>

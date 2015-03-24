				<div id="sidebar1" class="sidebar threecol first clearfix" role="complementary">

					<nav role="navigation">
						<?php bones_main_nav(); ?>
					</nav>

					<?php if ( is_active_sidebar( 'sidebar1' ) ) : ?>

						<?php dynamic_sidebar( 'sidebar1' ); ?>

					<?php endif; ?>

				</div>

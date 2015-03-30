<?php if ( current_user_can( 'read' ) ) { ?>

    <div id="sidebar-technical" class="sidebar threecol first clearfix" role="complementary">
        <?php if ( current_user_can( 'see_menu' ) ) { ?>
            <nav role="navigation">
                <?php bones_technical_nav(); ?>
            </nav>


        <?php if ( is_active_sidebar( 'sidebar-technical' ) ) : ?>

            <?php dynamic_sidebar( 'sidebar-technical' ); ?>

        <?php endif; ?>

        <?php }  else dynamic_sidebar ('sidebar-members');?>

    </div>

<?php } ?>

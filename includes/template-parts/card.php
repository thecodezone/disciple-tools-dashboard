<div class="dash-card item dash-card--<?php echo esc_attr( $card->handle ); ?>"
     data-card-handle="<?php echo esc_attr( $card->handle ); ?>"
     id="dash-card--<?php echo esc_attr( $card->handle ); ?>"
     <?php if ( $card->span ): ?> style="--dashboard-card-column: span <?php echo esc_attr( $card->span ); ?> <?php endif; ?>"
>

    <div class="card">
        <?php $card->render(); ?>
        <div class="card-footer">
               <span class="card-nav-btn"
                     onclick="toggleCardNav('<?php echo esc_attr( $card->handle ); ?>')">
                   <svg height="20"
                        viewBox="0 0 4 20"
                        width="20"
                        xmlns="http://www.w3.org/2000/svg"><circle cx="2"
                                                                   cy="2"
                                                                   r="2"/><circle cx="2"
                                                                                  cy="10"
                                                                                  r="2"/><circle cx="2"
                                                                                                 cy="18"
                                                                                                 r="2"/></svg>
               </span>

            <div class="card-nav"
                 id="card-nav-<?php echo esc_attr( $card->handle ); ?>" onmouseleave="closeCardNav('<?php echo esc_attr( $card->handle ); ?>')">
                <div class="card-move-left"
                     onclick="dt_dashboard.moveBack('<?php echo esc_attr( $card->handle ); ?>')">
                    <i class="fi-arrow-left"></i> <?php esc_html_e( "Back", 'disciple-tools-dashboard' ); ?>
                </div>
                <div class="card-move-right"
                     onclick="dt_dashboard.moveForward('<?php echo esc_attr( $card->handle ); ?>')">
                    <i class="fi-arrow-right"></i> <?php esc_html_e( "Forward", 'disciple-tools-dashboard' ); ?>
                </div>
                <div class="card-remove"
                     onclick="dt_dashboard.remove('<?php echo esc_attr( $card->handle ); ?>')">
                    <i class="fi-x"></i> <?php esc_html_e( "Remove", 'disciple-tools-dashboard' ); ?>
                </div>
            </div>
        </div>
    </div>
</div>

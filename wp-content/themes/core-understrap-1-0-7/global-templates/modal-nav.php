						<div class="modal fade" id="ModalNav" tabindex="-1" role="dialog" aria-labelledby="myModalNavLabel" aria-hidden="true">
		  					<div class="modal-dialog  wrapper-darker modal-lg" role="document">
		    					<div class="modal-content">
		      						<div class="modal-body">	        						
		      							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          							<span aria-hidden="true">&times;</span>
		        						</button>

		        							<?php if ( has_nav_menu( 'primary' ) ) : ?>
												<?php wp_nav_menu(
													array(
														'theme_location'  => 'primary',
														'container_class' => 'navbar-modal',
														'container_id'    => '',
														'menu_class'      => 'nav navbar-nav',
														'fallback_cb'     => 'true',
														'menu_id'         => 'main-menu',
														'walker'          => new understrap_WP_Bootstrap_Navwalker(),
													)
												); ?>
											<?php else : ?>
											<!-- Fallback menu if no menu is published on position "primary" -->
												<?php wp_page_menu(
													array(
														'container_class' => 'navbar-modal',
														'menu_id'         => 'main-menu',
														'depth'       => 0,
														'sort_column' => 'menu_order, post_title',
														'menu_class'  => 'nav navbar-nav fallback',
														'menu_class'  => 'nav navbar-nav fallback',
														'menu_class'  => 'nav navbar-nav fallback',

													)
												); ?>

											<?php endif; ?>

											<?php dynamic_sidebar( 'offcanvas' ); ?>

									</div>

								</div>

							</div>

						</div>
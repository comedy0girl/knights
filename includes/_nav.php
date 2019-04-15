<div class="menu-bar container">
	<div class="row upper-nav">
		<div class="six columns upper-left">
			<ul>
				<li><i class="fas fa-phone"></i> (905) 894-1911</li>
				<li><i class="fas fa-envelope-open"></i> campinginfo@knightshideaway.ca</li>
			</ul>
		</div>

		<div class="six columns upper-right">
			<a class="classic-button-white" href="/reservations">Reservations</a>
		</div>
		
	</div>
	<!-- <div class="the-logo"><?php
		$custom_logo_id = get_theme_mod( 'custom_logo' );
		$custom_logo_url = wp_get_attachment_image_url( $custom_logo_id , 'full' );
		echo '<img src="' . esc_url( $custom_logo_url ) . '" alt="">'; ?>
	</div> -->
		<div class="row menu-wrapper"><?php 
			wp_nav_menu(['theme_location' => 'header-menu' ]); ?>
	</div>
	
</div>

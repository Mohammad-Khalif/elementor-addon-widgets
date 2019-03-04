<?php
/**
 * The upsell page template partial.
 */
?>
<div id="sizzify-page-wrapper">
	<div class="pro-features-header">
		<p class="logo">Sizzify - Elementor Addons & Templates</p>
		<span class="slogan">by <a
					href="https://themeisle.com/">ThemeIsle</a></span>
	</div><!-- .pro-features-header -->


	<div class="pro-features-content">

		<div class="pro-feature">
			<div class="pro-feature-features">
				<h2>Extend your experience</h2>
				<p>Sizzify - Elementor Addons & Templates was made to extend your page builder experience. It adds new
					widgets to your favourite page builder. It also comes with a bunch of One-Click Import page
					templates that you can customize to your liking with just a few clicks.</p>
			</div>
			<div class="pro-feature-image">
				<img src="<?php echo esc_url( EA_URI . '/assets/img/templates.jpg' ); ?>"
						alt="Premium Templates"></div>
		</div>

		<?php
		$current_theme = wp_get_theme();
		$theme_name    = $current_theme->get( 'TextDomain' );
		$template      = $current_theme->get( 'Template' );
		if ( $theme_name !== 'neve' && $template !== 'neve' ) {
			?>
			<div class="theme-promotions">
				<?php
				Elementor_Addon_Widgets::get_instance()->show_theme_promotion();
				?>
			</div>
			<?php
		}
		?>


	</div>


<?php
		add_action( EA_PLUGIN_NAME . '_upsell_products_plugin_template', array( Elementor_Addon_Widgets::get_instance(), 'show_upsell_plugins' ), 10, 3 );
		add_action( EA_PLUGIN_NAME . '_upsell_products_theme_template', array( Elementor_Addon_Widgets::get_instance(), 'show_upsell_themes' ), 10, 3 );

		do_action(
			EA_PLUGIN_NAME . '_upsell_products',
            array(
				'otter-blocks' => 'Gutenberg Blocks',
				'visualizer' => 'Visualizer',
			),
            array( 'neve' => 'Neve'),
            array( 'install' => __( 'Install', 'elementor-addon-widgets' ) ),
            array()
		);
?>
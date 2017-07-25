<?php
/**
 * HTML content: Homepage content.
 *
 * @package PHPCheatsheets
 */

// Prevent direct calls to this file.
if ( ! defined( 'APP_DIR' ) ) {
	header( 'Status: 403 Forbidden' );
	header( 'HTTP/1.1 403 Forbidden' );
	exit();
}
?>
		<div id="main-menu">
			<p>
				<a href="<?php echo BASE_URI; ?>compare/" class="top-link<?php echo ( ( $type === 'compare' ) ? ' top-active' : '' ); ?>">
					Variable&nbsp;Comparison<br />Cheat&nbsp;sheet
					<img src="<?php echo BASE_URI; ?>page/images/screenshot-var-compare.png" width="220" height="220" alt="Variable Comparison Cheatsheet Screenshot" />
				</a>
				<a href="<?php echo BASE_URI; ?>arithmetic/" class="top-link<?php echo ( ( $type === 'arithmetic' ) ? ' top-active' : '' ); ?>">
					Variable&nbsp;Arithmetic<br />Cheat&nbsp;sheet
					<img src="<?php echo BASE_URI; ?>page/images/screenshot-var-arithm.png" width="220" height="220" alt="Variable Arithmetic Cheatsheet Screenshot" />
				</a>
				<a href="<?php echo BASE_URI; ?>test/" class="top-link<?php echo ( ( $type === 'test' ) ? ' top-active' : '' ); ?>">
					Variable&nbsp;Testing<br />Cheat&nbsp;sheet
					<img src="<?php echo BASE_URI; ?>page/images/screenshot-var-tests.png" width="220" height="220" alt="Variable Testing Cheatsheet Screenshot" />
				</a>
			</p>
		</div>
		

		<div class="important">
			<h3>Please note: these cheat sheets are generated live with PHP <?php echo htmlspecialchars( PHP_VERSION, ENT_QUOTES, 'UTF-8' ); ?>.</h3>
			<p>Alternatively, you can <a href="<?php echo BASE_URI; ?>static_results/">browse static versions</a> of the cheat sheets generated with various PHP versions.</p>
		</div>

<?php
#BEGIN_EZOIC_INTEGRATION_PHP_CACHE_HANDLER
$ezoic_factory_file = WP_CONTENT_DIR . '/plugins' . '/ezoic-integration/includes/class-ezoic-integration-factory.php';
if ( false == strpos( $_SERVER['REQUEST_URI'], 'wp-admin' ) && file_exists( $ezoic_factory_file ) ) {
   require_once($ezoic_factory_file);
   $ezoic_factory = new Ezoic_Namespace\Ezoic_Integration_Factory();
   if ( $ezoic_factory->bypass_middleware === false ) {
       $ezoic_integrator = $ezoic_factory->new_ezoic_integrator(Ezoic_Namespace\Ezoic_Cache_Type::PHP_CACHE);
       register_shutdown_function(array($ezoic_integrator, "apply_ezoic_middleware"));
   }
}
#END_EZOIC_INTEGRATION_PHP_CACHE_HANDLER
/**
 * File: advanced-cache.php
 *
 * W3 Total Cache advanced cache module.
 *
 * @package W3TC
 */

defined( 'ABSPATH' ) || die();

global $w3tc_start_microtime;
$w3tc_start_microtime = microtime( true );

/**
 * Abort W3TC loading if WordPress is upgrading.
 */
if ( defined( 'WP_INSTALLING' ) && WP_INSTALLING ) {
	return;
}

if ( ! defined( 'W3TC_IN_MINIFY' ) ) {
	if ( ! defined( 'W3TC_DIR' ) ) {
		define( 'W3TC_DIR', ( defined( 'WP_PLUGIN_DIR' ) ? WP_PLUGIN_DIR : WP_CONTENT_DIR . '/plugins' ) . '/w3-total-cache' );
	}

	if ( ! @is_dir( W3TC_DIR ) || ! file_exists( W3TC_DIR . '/w3-total-cache-api.php' ) ) {
		if ( defined( 'WP_ADMIN' ) ) {
			// Only display errors in wp-admin.
			printf( '<strong>W3 Total Cache Error:</strong> some files appear to be missing or out of place. Please re-install plugin or remove <strong>%s</strong>. <br />', __FILE__ );
		}
	} else {
		require_once W3TC_DIR . '/w3-total-cache-api.php';

		if ( class_exists( '\W3TC\Dispatcher' ) ) {
			$w3tc_redirect = \W3TC\Dispatcher::component( 'Mobile_Redirect' );
			$w3tc_redirect->process();

			$w3tc_config = \W3TC\Dispatcher::config();
			if ( $w3tc_config->get_boolean( 'pgcache.enabled' ) ) {
				$o = \W3TC\Dispatcher::component( 'PgCache_ContentGrabber' );
				$o->process();
			}
		}
	}
}
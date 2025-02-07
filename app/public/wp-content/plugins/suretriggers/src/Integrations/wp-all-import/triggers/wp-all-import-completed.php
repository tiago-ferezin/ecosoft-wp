<?php
/**
 * WpAllImportCompleted.
 * php version 5.6
 *
 * @category WpAllImportCompleted
 * @package  SureTriggers
 * @author   BSF <username@example.com>
 * @license  https://www.gnu.org/licenses/gpl-3.0.html GPLv3
 * @link     https://www.brainstormforce.com/
 * @since    1.0.0
 */

namespace SureTriggers\Integrations\WpAllImport\Triggers;

use SureTriggers\Controllers\AutomationController;
use SureTriggers\Traits\SingletonLoader;
use SureTriggers\Integrations\WordPress\WordPress;

if ( ! class_exists( 'WpAllImportCompleted' ) ) :

	/**
	 * WpAllImportCompleted
	 *
	 * @category WpAllImportCompleted
	 * @package  SureTriggers
	 * @author   BSF <username@example.com>
	 * @license  https://www.gnu.org/licenses/gpl-3.0.html GPLv3
	 * @link     https://www.brainstormforce.com/
	 * @since    1.0.0
	 *
	 * @psalm-suppress UndefinedTrait
	 */
	class WpAllImportCompleted {

		/**
		 * Integration type.
		 *
		 * @var string
		 */
		public $integration = 'WpAllImport';

		/**
		 * Trigger name.
		 *
		 * @var string
		 */
		public $trigger = 'wp_all_import_completed';

		use SingletonLoader;

		/**
		 * Constructor
		 *
		 * @since  1.0.0
		 */
		public function __construct() {
			add_filter( 'sure_trigger_register_trigger', [ $this, 'register' ] );
		}

		/**
		 * Register action.
		 *
		 * @param array $triggers trigger data.
		 * @return array
		 */
		public function register( $triggers ) {
			$triggers[ $this->integration ][ $this->trigger ] = [
				'label'         => __( 'Import Completed', 'suretriggers' ),
				'action'        => $this->trigger,
				'common_action' => 'pmxi_after_xml_import',
				'function'      => [ $this, 'trigger_listener' ],
				'priority'      => 10,
				'accepted_args' => 2,
			];

			return $triggers;
		}

		/**
		 *  Trigger listener
		 *
		 * @param int    $import_id Import ID.
		 * @param object $import_obj Import Object.
		 *
		 * @return void|array|bool
		 */
		public function trigger_listener( $import_id, $import_obj ) {

			if ( empty( $import_id ) ) {
				return false;
			}
			
			if ( property_exists( $import_obj, 'failed' ) ) {
				if ( 0 == $import_obj->failed ) {
					return false;
				}
			}

			$context['import'] = $import_obj;
			
			AutomationController::sure_trigger_handle_trigger(
				[
					'trigger' => $this->trigger,
					'context' => $context,
				]
			);
		}
	}

	/**
	 * Ignore false positive
	 *
	 * @psalm-suppress UndefinedMethod
	 */
	WpAllImportCompleted::get_instance();

endif;

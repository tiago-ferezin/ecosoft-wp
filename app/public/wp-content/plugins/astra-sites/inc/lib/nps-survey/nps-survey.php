<?php
/**
 * Plugin Name: NPS Survey
 * Description: It is a nps survey library.
 * Author: Brainstorm Force
 * Version: 1.0.3
 * License: GPL v2
 * Text Domain: nps-survey
 *
 * @package {{package}}
 */

/**
 * Set constants
 */
define( 'NPS_SURVEY_FILE', __FILE__ );
define( 'NPS_SURVEY_BASE', plugin_basename( NPS_SURVEY_FILE ) );
define( 'NPS_SURVEY_DIR', plugin_dir_path( NPS_SURVEY_FILE ) );
define( 'NPS_SURVEY_URL', plugins_url( '/', NPS_SURVEY_FILE ) );
define( 'NPS_SURVEY_VER', '1.0.3' );

require_once 'nps-survey-plugin-loader.php';

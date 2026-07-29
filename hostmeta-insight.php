<?php
/**
 * Plugin Name: HostMeta Insight
 * Plugin URI: https://www.hostmeta.com.br
 * Description: Auditoria inteligente para identificar oportunidades de melhoria em sites WordPress.
 * Version: 0.1.0
 * Requires at least: 6.0
 * Requires PHP: 8.0
 * Author: HostMeta
 * Author URI: https://www.hostmeta.com.br
 * License: GPL2
 * Text Domain: hostmeta-insight
 */

if (!defined('ABSPATH')) {
    exit;
}

define('HMI_VERSION', '0.1.0');
define('HMI_PLUGIN_FILE', __FILE__);
define('HMI_PLUGIN_PATH', plugin_dir_path(__FILE__));
define('HMI_PLUGIN_URL', plugin_dir_url(__FILE__));

require_once HMI_PLUGIN_PATH . 'bootstrap.php';

HostMetaInsight\Core\Application::getInstance()->boot();
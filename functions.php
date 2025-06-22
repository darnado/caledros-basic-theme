<?php

if ( ! defined( 'ABSPATH' ) ) {
    exit; 
}

/**
 * Caledros Basic Theme - A block based Wordpress theme
 * Copyright (C) 2025  David Arnado
 * 
 * This file is part of Caledros Basic Theme.
 * 
 * Caledros Basic Theme is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.

 * Caledros Basic Theme is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.

 * You should have received a copy of the GNU General Public License along
 * with Caledros Forge Theme; if not, see <https://www.gnu.org/licenses/>.
 */

// Define base folder
define('CALEDROS_BASIC_THEME_BASE_FOLDER', get_template_directory());

// Register pattern categories
require_once(CALEDROS_BASIC_THEME_BASE_FOLDER . '/theme-settings/register-pattern-categories.php');

// Remove default block patterns
require_once(CALEDROS_BASIC_THEME_BASE_FOLDER . '/theme-settings/remove-default-block-patterns.php');

// Deactivate REST API
require_once(CALEDROS_BASIC_THEME_BASE_FOLDER . '/theme-settings/deactivate-rest-api.php');

// Add admin page
require_once(CALEDROS_BASIC_THEME_BASE_FOLDER . '/theme-settings/admin-page.php');

// Check if required plugin is installed and activated
require_once(CALEDROS_BASIC_THEME_BASE_FOLDER . '/theme-settings/check-plugin-installation.php');

// Load theme translations
function caledros_basic_theme_load_translations(){
    load_theme_textdomain( 'caledros-basic-theme', CALEDROS_BASIC_THEME_BASE_FOLDER . '/languages' );
}
add_action( 'after_setup_theme', 'caledros_basic_theme_load_translations');

// Run on theme activation
function caledros_basic_theme_activate() {
    update_option('caledros_basic_theme_remove_default_block_patterns', 1);
    update_option('caledros_basic_theme_deactivate_rest_api', 1);
}
add_action('after_switch_theme', 'caledros_basic_theme_activate');


<?php

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
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

// Check if required plugin is installed and activated
function caledros_basic_theme_check_plugin(){
    if ( is_admin() && current_user_can( 'install_plugins' ) && !is_plugin_active( 'caledros-basic-blocks/caledros-basic.php' ) ) {
        add_action( 'admin_notices', function() {
            echo wp_kses_post('<div class="notice notice-warning is-dismissible">
                <p>Please install and activate the <strong>Caledros Basic Blocks</strong> plugin for this theme to work properly.</p>
            </div>');
        });
    }
}
add_action( 'admin_init', 'caledros_basic_theme_check_plugin');
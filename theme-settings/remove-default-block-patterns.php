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

// Remove default block patterns
add_action('after_setup_theme', function() {
    if(get_option('caledros_basic_theme_remove_default_block_patterns', 1)){
        remove_theme_support('core-block-patterns');
    }	
});
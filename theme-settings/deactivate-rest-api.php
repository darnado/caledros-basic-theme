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

// Deactivate REST API for non-authenticated users
add_filter( 'rest_authentication_errors', function( $result ) {
    if(get_option('caledros_basic_theme_deactivate_rest_api', 1)){
        if ( true === $result || is_wp_error( $result ) ) {
            return $result;
        }

        if ( ! is_user_logged_in() ) {
            return new WP_Error(
                'rest_not_logged_in',
                __( 'This is not the page you are looking for', 'caledros-basic-theme' ),
                array( 'status' => 401 )
            );
        }
        return $result;
    }
});
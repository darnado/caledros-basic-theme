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

// Register pattern categories

// Demo images
add_action( 'init', 'caledros_basic_theme_register_demo_images_category' );

function caledros_basic_theme_register_demo_images_category() {
	register_block_pattern_category( 'caledros-basic-theme/demo-images', array( 
		'label'       => __( 'Demo images', 'caledros-basic-theme' ),
		'description' => __( 'Demo images', 'caledros-basic-theme' )
	) );
}

// Demo sliders
add_action( 'init', 'caledros_basic_theme_register_demo_sliders_category' );

function caledros_basic_theme_register_demo_sliders_category() {
	register_block_pattern_category( 'caledros-basic-theme/demo-sliders', array( 
		'label'       => __( 'Demo sliders', 'caledros-basic-theme' ),
		'description' => __( 'Demo sliders', 'caledros-basic-theme' )
	) );
}

// Hero sections
add_action( 'init', 'caledros_basic_theme_register_hero_section_category' );

function caledros_basic_theme_register_hero_section_category() {
	register_block_pattern_category( 'caledros-basic-theme/hero-sections', array( 
		'label'       => __( 'Hero sections', 'caledros-basic-theme' ),
		'description' => __( 'Demo Hero sections for the theme', 'caledros-basic-theme' )
	) );
}

// Sliders
add_action( 'init', 'caledros_basic_theme_register_sliders_category' );

function caledros_basic_theme_register_sliders_category() {
	register_block_pattern_category( 'caledros-basic-theme/sliders', array( 
		'label'       => __( 'Sliders', 'caledros-basic-theme' ),
		'description' => __( 'Sliders', 'caledros-basic-theme' )
	) );
}

// Call to action
add_action( 'init', 'caledros_basic_theme_register_cta_category' );

function caledros_basic_theme_register_cta_category() {
	register_block_pattern_category( 'caledros-basic-theme/call-to-action', array( 
		'label'       => __( 'Call to action', 'caledros-basic-theme' ),
		'description' => __( 'Call to action sections', 'caledros-basic-theme' )
	) );
}

// Layout
add_action( 'init', 'caledros_basic_theme_register_layout_category' );

function caledros_basic_theme_register_layout_category() {
	register_block_pattern_category( 'caledros-basic-theme/layout', array( 
		'label'       => __( 'Layout', 'caledros-basic-theme' ),
		'description' => __( 'Layout', 'caledros-basic-theme' )
	) );
}

// Slider cards
add_action( 'init', 'caledros_basic_theme_register_slider_cards' );

function caledros_basic_theme_register_slider_cards() {
	register_block_pattern_category( 'caledros-basic-theme/slider-cards', array( 
		'label'       => __( 'Slider cards', 'caledros-basic-theme' ),
		'description' => __( 'Slider cards', 'caledros-basic-theme' )
	) );
}

// Demo content
add_action( 'init', 'caledros_basic_theme_register_demo_content' );

function caledros_basic_theme_register_demo_content() {
	register_block_pattern_category( 'caledros-basic-theme/demo-content', array( 
		'label'       => __( 'Demo content', 'caledros-basic-theme' ),
		'description' => __( 'Demo content', 'caledros-basic-theme' )
	) );
}

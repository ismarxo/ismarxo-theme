<?php

namespace App;

use Carbon_Fields\Container;
use Carbon_Fields\Field;

/**
 * Define custom fields
 * Docs: https://carbonfields.net/docs/
 */
add_action( 'carbon_fields_register_fields', function () {
    // Your fields will go here.
});

/**
 * Boot Carbon Fields
 */
add_action( 'after_setup_theme', function () {
    \Carbon_Fields\Carbon_Fields::boot();
});

/**
 * Define custom fields
 * Docs: https://carbonfields.net/docs/
 */
add_action( 'carbon_fields_register_fields', function () {
    Container::make( 'post_meta', 'Page Layout' )
        ->where( 'post_type', '=', 'page' )
        ->add_fields( array(
            Field::make( 'text', 'sage_greeting', 'Greeting' )
        ));
});
<?php

function add_role_traveler()
{
    remove_role('traveler');
    add_role(
        'traveler',
        'Traveler',
        [
            'read'         => true,
            'edit_posts'   => true,
            'upload_files' => true,
            'publish_posts'=> true,
            'delete_posts' => true,
            'edit_published_posts' => true,
        ]
    );
}

// add the simple_role
add_action('init', 'add_role_traveler');

function viajes_init() {
    $labels = array(
        'name'              => _x( 'Viajes', 'posttype general name', 'your-plugin-textdomain' ),
        'singular_name'     => _x( 'Viajes', 'posttype general name', 'your-plugin-textdomain' ),
        'menu_name'         => _x( 'Mis viajes', 'admin menu', 'your-plugin-textdomain' ),
        'name_admin_bar'    => _x( 'Viajes', 'add new on admin bar', 'your-plugin-textdomain' ),
        'add_new'           => _x( 'Añadir nuevo', 'viaje', 'your-plugin-textdomain' ),
        'add_new_item'      => __( 'Añadir nuevo viaje', 'your-plugin-textdomain' ),
        'new_item'          => __( 'Nuevo viaje', 'your-plugin-textdomain' ),
        'edit_item'         => __( 'Editar viaje', 'your-plugin-textdomain' ),
        'view_item'         => __( 'Ver viaje', 'your-plugin-textdomain' ),
        'all_items'         => __( 'Todos los viajes', 'your-plugin-textdomain' ),
        'search_items'      => __( 'Buscar viajes', 'your-plugin-textdomain' ),
        'parent_item_colon' => __( 'Viajes padre', 'your-plugin-textdomain' ),
        'not_found'         => __( 'No hemos encontrado viajes.', 'your-plugin-textdomain' ),
        'not_found_in_trash'=> __( 'No hemos encontrado viajes en la papelera', 'your-plugin-textdomain' ),
    );

    $args = array(
        'labels'            => $labels,
        'description'       => __('Description', 'your-plugin-textdomain'),
        'public'            => true,
        'public_queryable'  => true,
        'show_ui'           => true,
        'show_in_menu'      => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'viaje' ),
        'capability_type'   => 'post',
        'has_archive'       => true,
        'hierarchical'      => false,
        'menu_position'     => null,
        'menu_icon'         => 'dashicons-admin-multisite',
        'supports'          => array( 'title', 'editor', 'author', 'thumbnail' )
    );

    register_post_type( 'viaje', $args );
}

add_action( 'init', 'viajes_init' );


if( function_exists('register_field_group') ):

    register_field_group(array(
        'key' => 'group_5be30076ec31d',
        'title' => 'Viajes',
        'fields' => array(
            array(
                'key' => 'field_5be3007d7371d',
                'label' => 'Destino',
                'name' => 'destino_',
                'type' => 'text',
                'instructions' => '',
                'required' => 1,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
            ),
            array(
                'key' => 'field_5be3029c2f947',
                'label' => 'Vacunas Obligatorias',
                'name' => 'vacunas_obligatorias_',
                'type' => 'text',
                'instructions' => '',
                'required' => 1,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
            ),
            array(
                'key' => 'field_5be302b02f948',
                'label' => 'Vacunas Recomendadas',
                'name' => 'vacunas_recomendadas_',
                'type' => 'text',
                'instructions' => '',
                'required' => 1,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
            ),
            array(
                'key' => 'field_5be302c52f949',
                'label' => 'Transporte Local',
                'name' => 'transporte_local_',
                'type' => 'text',
                'instructions' => '',
                'required' => 1,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
            ),
            array(
                'key' => 'field_5be302d52f94a',
                'label' => 'Peligrosidad',
                'name' => 'peligrosidad_',
                'type' => 'select',
                'instructions' => '',
                'required' => 1,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'choices' => array(
                    'baja' => 'Baja',
                    'media' => 'Media',
                    'alta' => 'Alta',
                    'muy alta' => 'Muy alta',
                ),
                'default_value' => array(
                ),
                'allow_null' => 0,
                'multiple' => 1,
                'ui' => 0,
                'return_format' => 'array',
                'ajax' => 0,
                'placeholder' => '',
            ),
            array(
                'key' => 'field_5be303462f94b',
                'label' => 'Moneda Local',
                'name' => 'moneda_local_',
                'type' => 'text',
                'instructions' => '',
                'required' => 1,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'viaje',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => 1,
        'description' => '',
    ));

endif;

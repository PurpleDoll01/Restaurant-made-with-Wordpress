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

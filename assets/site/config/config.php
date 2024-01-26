<?php

# Kirby Configurations
return [

    # Kirby Settings
    'debug' => true,  # Enable Debug Mode
    'home'  => 'home', # Change the slug for the homepage

    # Markdown Field Configurations
    'community.markdown-field.font' => [
        'family'  => 'sans-serif',
        'scaling' => true,
        'size'    => 'small',
    ],
    'community.markdown-field.modals'     => true,
    'community.markdown-field.blank'      => false,
    'community.markdown-field.invisibles' => false
];
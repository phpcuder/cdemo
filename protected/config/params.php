<?php

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
    'size_label' => array(
        1 => '3.0" H x 4.0" W',
        2 => '6.0" H x 4.0" W',
    ),
    'admin_size_label' => array(
        1 => 'Small',
        2 => 'Large',
    ),
    'price_size_value' => array(
        '295' => 1,
        '595' => 2,
    ),
    'season' => array(
        'spring' => 'Spring',
        'summer' => 'Summer',
        'fall' => 'Fall',
        'winter' => 'Winter',
    ),
    'max_file_size' => '2048000',
    'payment_status' => array(
        0 => 'not paid',
        1 => 'paid',
    ),
);
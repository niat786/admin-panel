<?php

// Create a section
CSF::createSection($prefix, array(
    'title' => 'Insert code - header/footer',
    'fields' => array(
        array(
            'id' => '_infopediya-code-in-header',
            'type' => 'code_editor',
            'title' => 'Header Code',
            'settings' => array(
                'theme' => 'monokai',
                'mode' => 'htmlmixed',
            ),
            'default' => '',
            'sanitize' => false,
        ),

        array(
            'id' => '_infopediya-code-in-footer',
            'type' => 'code_editor',
            'title' => 'Footer Code',
            'settings' => array(
                'theme' => 'monokai',
                'mode' => 'htmlmixed',
            ),
            'default' => '',
            'sanitize' => false,
        ),
    )
));
<?php

// Create a section
CSF::createSection($prefix, array(
    'title' => 'Ads',
    'fields' => array(

        array(
            'id' => '_infopediya_ad-code-after-dl-btn',
            'type' => 'code_editor',
            'title' => 'Single page after download button',
            'settings' => array(
                'theme' => 'monokai',
                'mode' => 'htmlmixed',
            ),
            'sanitize' => false,
        ),
        array(
            'id' => '_infopediya_ad-code-dl-page-above',
            'type' => 'code_editor',
            'title' => 'Download page above',
            'settings' => array(
                'theme' => 'monokai',
                'mode' => 'htmlmixed',
            ),
            'sanitize' => false,
        ),
        array(
            'id' => '_infopediya_ad-code-dl-page-below',
            'type' => 'code_editor',
            'title' => 'Download page below',
            'settings' => array(
                'theme' => 'monokai',
                'mode' => 'htmlmixed',
            ),
            'sanitize' => false,
        ),
    )
));

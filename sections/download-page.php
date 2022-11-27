<?php

// Create a section
CSF::createSection($prefix, array(
    'title' => 'Download Page',
    'fields' => array(

        array(
            'id' => '_infopediya_select-downloading-style',
            'type' => 'select',
            'title' => 'Select downloading style',
            'options' => array(
                'option-1' => 'Show progress bar',
                'option-2' => 'Show timer',
                'option-3' => 'Hide both options',
            ),
            'default' => 'option-1'
        ),

        array(
            'id' => '_infopediya_download-page-timer-seconds',
            'type' => 'number',
            'title' => 'Set timer in seconds',
            'default' => 10,
        ),
        array(
            'id' => '_infopediya_download-page-slug',
            'type' => 'text',
            'title' => 'Download page slug',
            'default' => 'download',
        ),
    )
));
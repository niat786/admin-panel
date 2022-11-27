<?php


// Create a section
CSF::createSection($prefix, array(
    'title' => 'Single Page',
    'fields' => array(
        array(
            'id' => '_infopediya_single-page-default-post-type',
            'type' => 'select',
            'title' => 'Select default post type',
            'options' => array(
                'option-1' => 'Blog post',
                'option-2' => 'File Downloading',
            ),
            'default' => 'option-2'
        ),

        array(
        'id'      => '_infopediya_single-author-name',
        'type'    => 'text',
        'title'   => 'Author name to show',
        'default' => 'Admin'
        ),

          array(
        'id'      => '_infopediya_words_per_min',
        'type'    => 'number',
        'title'   => 'words per minute',
        'default' => 200
        ),

        array(
            'id' => '_infopediya_single-page-show-share-btn',
            'type' => 'checkbox',
            'title' => 'Show share button',
            'default' => true,
        ),

        array(
            'id' => '_infopediya_single-page-show-dl-btn-top',
            'type' => 'checkbox',
            'title' => 'Show download button before content',
            'default' => true,
        ),


        array(
            'id' => '_infopediya_single-page-show-dl-btn-bottom',
            'type' => 'checkbox',
            'title' => 'Show download button after content',
            'default' => false,
        ),
    )
));
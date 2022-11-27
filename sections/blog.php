<?php

// Create a section
CSF::createSection($prefix, array(
    'title' => 'Blog articles',
    'fields' => array(

        array(
            'id' => '_infopediya_blog-show',
            'type' => 'checkbox',
            'title' => 'Show blog section in home page',
            'default' => true,
        ),

        array(
            'id' => '_infopediya_blog-position',
            'type' => 'select',
            'title' => 'Select position',
            'options' => array(
                'option-1' => 'show on top of page',
                'option-2' => 'show on bottom of page',
            ),
            'default' => 'option-1'
        ),

        array(
            'id' => '_infopediya_blog-category',
            'type' => 'text',
            'title' => 'Input category for blog',
            'default' => 'blog',
        ),

        array(
            'id' => '_infopediya_blog-num-posts-home',
            'type' => 'number',
            'title' => 'Posts to show - Home page',
            'default' => 4,
        ),

           array(
            'id' => '_infopediya_blog-num-posts',
            'type' => 'number',
            'title' => 'Posts to show - Blog page',
            'default' => 12,
        ),

        array(
            'id' => '_infopediya_blog-show-featured-img-single',
            'type' => 'checkbox',
            'title' => 'Show featured image in blog article',
            'default' => true,
        ),

        array(
            'id' => '_infopediya_blog-show-date-single',
            'type' => 'checkbox',
            'title' => 'Show date in blog article',
            'default' => true,
        ),

        array(
            'id' => '_infopediya_blog-show-author-single',
            'type' => 'checkbox',
            'title' => 'Show author in blog article',
            'default' => true,
        ),

        array(
            'id' => '_infopediya_blog-show-categories-single',
            'type' => 'checkbox',
            'title' => 'Show categories in blog article',
            'default' => true,
        ),

    )
));
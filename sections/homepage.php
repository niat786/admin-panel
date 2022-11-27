<?php

// Create a section
CSF::createSection($prefix, array(
    'title' => 'Home Page',
    'fields' => array(
        array(
            'id' => '_infopediya_number-homepage-posts',
            'type' => 'number',
            'title' => 'Number of posts to show under each category',
            'default' => 9,
        ),
        array(
            'id' => '_infopediya_checkbox-categories',
            'type' => 'checkbox',
            'title' => 'Select Categories',
            'options' => 'categories',
            'query_args' => array(
                'orderby' => 'name',
                'order' => 'ASC',
            ),
        )
    )
));
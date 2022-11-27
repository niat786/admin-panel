<?php

// Create a section
CSF::createSection($prefix, array(
        'title' => 'Theme Color',
        'fields' => array(


            array(
                'id' => '_infopediya_theme-color',
                'type' => 'color',
                'title' => 'Main Color',
                'default' => '#2591fbfa'
            ),

            array(
                'id' => '_infopediya_color-group-gradient',
                'type' => 'color_group',
                'title' => 'Gradient Colors',
                'options' => array(
                    'color-1' => 'Color 1',
                    'color-2' => 'Color 2',
                ),
                'default' => array(
                    'color-1' => '#000780',
                    'color-2' => '#2591fbfa',
                )
            ),
        ),


    )
);
<?php

$site_url = get_site_url();
function message_callback()
{
    echo "<p>Don't have the code? <a href='/'>You can buy here.</a></p>";
}

CSF::createSection($prefix, array(
    'title' => 'Register Your theme',
    'fields' => array(
        array(
            'id' => '_infopediya_theme_registeration',
            'type' => 'text',
            'title' => 'Domain name',
            'default' => $site_url,
        ),

        array(
            'id' => '_infopediya_theme-purchase-code',
            'type' => 'text',
            'title' => 'Purchase code',
            'default' => '**********',
        ),

        array(
            'type' => 'callback',
            'function' => 'message_callback',
           
        ),

    )
));
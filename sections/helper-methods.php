<?php

$options = get_option('Theme_Options_Panel');

function infopediya_get_theme_header_code()
{
    global $options;
    return $options['_infopediya-code-in-header'] ?? '';
}

function infopediya_get_theme_color()
{
    global $options;
    return $options['_infopediya_theme-color'] ?? '#2591fbfa';

}

function infopediya_get_gradient_color()
{
    global $options;
    return $options['_infopediya_color-group-gradient'] ?? ['color-1' => '#000780', 'color-2' => '#2591fbfa'];

}

// single page

function infopediya_show_share_btn()
{
    global $options;
    return $options['_infopediya_single-page-show-share-btn'];
}

function infopediya_show_dl_btn_top()
{
    global $options;
    return $options['_infopediya_single-page-show-dl-btn-top'];
}

function infopediya_show_dl_btn_bottom()
{
    global $options;
    return $options['_infopediya_single-page-show-dl-btn-bottom'];
}

// single blog page
function infopediya_show_date_single()
{
    global $options;
    return $options['_infopediya_blog-show-date-single'] ?? true;
}

function infopediya_show_categories_single()
{
    global $options;
    return $options['_infopediya_blog-show-categories-single'] ?? true;
}

function infopediya_show_author_single()
{
    global $options;
    return $options['_infopediya_blog-show-author-single'] ?? true;
}

function infopediya_show_featured_img_single()
{
    global $options;
    return $options['_infopediya_blog-show-featured-img-single'] ?? true;
}

function infopediya_author_name()
{
    global $options;
    return $options['_infopediya_single-author-name'] ?? 'Admin';
}

function infopediya_content_reading_time()
{
     global $options;
     $content_count = str_word_count(get_the_content());
     $words_per_min = $options['_infopediya_words_per_min-author-name'] ?? 200;
     if (isset($words_per_min) && $content_count > 200){
        return $content_count/$words_per_min;
     }else {
         return 2;
     }
}



// download page
function infopediya_dl_page_slug() 
{
    global $options;
    return $options['_infopediya_download-page-slug'];
}

function infopediya_downloading_style() 
{
    global $options;
    return $options['_infopediya_select-downloading-style'];
}

function infopediya_dl_timer_seconds() 
{
    global $options;
    return $options['_infopediya_download-page-timer-seconds'];
}
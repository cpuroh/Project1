<?php

/**
 * Used to store website configuration information.
 *
 * @var string
 */
function config($key = '')
{
    $config = [
        'name' => 'Simple PHP Website',
        'nav_menu' => [
            'project/Project1/website' => 'Home',
            'project/Project1/website/content/about-us.php' => 'About Us',
            'project/Project1/website/content/products.php' => 'Products',
            'project/Project1/website/content/contact.php' => 'Contact',
        ],
        'template_path' => 'template',
        'content_path' => 'content',
        'pretty_uri' => true,
        'version' => 'v2.0',
    ];

    return isset($config[$key]) ? $config[$key] : null;
}

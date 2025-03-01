<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Redirect URL
    |--------------------------------------------------------------------------
    |
    | This option controls where the user is redirected when he accesses any
    | of the Rickroll URLs.
    | By default the user is redirected to the Rick Astley's "Never Gonna Give
    | You Up" of course.
    |
    */

    'redirect_url' => 'https://www.youtube.com/watch?v=dQw4w9WgXcQ',

    /*
    |--------------------------------------------------------------------------
    | Rickroll URLs
    |--------------------------------------------------------------------------
    |
    | This array defines which URLs will be redirected.
    | Feel free to add more URLs that people might use to break into your site.
    |
    */

    'urls' => [
        '.env',
        '.git',
        'wp-admin',
        'wp-login',
        'wp-login.php',
        'composer.lock',
        'yarn.lock',
        'package-lock.json',
        'xmlrpc.php',
        'typo3',
        'phpinfo.php',
        '.htaccess',
    ],

];

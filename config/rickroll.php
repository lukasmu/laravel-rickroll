<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Redirect URL
    |--------------------------------------------------------------------------
    |
    | This option controls where the user is redirected when he accesses any
    | of the RickRoll URLs.
    | By default the user is redirected to the Rick Astley's "Never Gonna Give
    | You Up" of course. The Vimeo player is used for a nice full screen
    | experience. Unfortunately, we need to mute the video to allow for
    | autoplay nowadays.
    |
    */

    'redirect_url' => 'https://player.vimeo.com/video/148751763?autoplay=1&muted=1',

    /*
    |--------------------------------------------------------------------------
    | RickRoll URLs
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

<?php

defined('SYSPATH') or die('No direct script access.');

/**
 * @author  arie
 */

/* Dashboard Prefix */
$DPRX = Kohana::$config->load('site.dashboard_prefix');

return array(
    // Page --------------------------------------------------------------------
    'page'                  => array(
        'uri_callback'      => 'pages/<id>/<slug>',
        'regex'             => array(
            'slug'          => '[a-zA-Z0-9-_]+',
            'id'            => '\d+',
        ),
        'defaults'          => array(
            'controller'    => 'page',
            'action'        => 'read',
        )
    ),

    'admin-page'            => array(
        'uri_callback'      => $DPRX.'pages/<action>(/<id>)',
        'regex'             => array(
            'action'        => 'index|create|delete|update|read',
            'id'            => '\d+',
        ),
        'defaults'          => array(
            'controller'    => 'page',
            'directory'     => 'admin',
            'action'        => 'index',
            'id'            => NULL,
        )
    ),
);
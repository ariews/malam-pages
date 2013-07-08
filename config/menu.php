<?php

defined('SYSPATH') or die('No direct script access.');

/**
 * @author  arie
 */

$p  = ORM::factory('page');

return array(
    'admin' => array(
        // ADMIN-PAGE
        99998    => array(
            'title'     => __('Pages'),
            'url'       => $p->admin_index_url_only(),
        ),
    ),
);
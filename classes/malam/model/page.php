<?php

defined('SYSPATH') or die('No direct script access.');

/**
 * @author  arie
 */

abstract class Malam_Model_Page extends Model_Bigcontent
{
    /**
     * Admin route name
     * @var string
     */
    protected $_admin_route_name = 'admin-page';

    /**
     * Route name
     * @var string
     */
    protected $_route_name      = 'page';

    protected $_featured_enable = FALSE;

    protected $_tag_enable      = FALSE;

    protected $_is_direct_call  = FALSE;

    protected $_has_hierarchy   = FALSE;

    protected $_gallery_enable  = FALSE;
}

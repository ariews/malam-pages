<?php

defined('SYSPATH') or die('No direct script access.');

/**
 * @author  arie
 */

abstract class Malam_Controller_Admin_Page extends Controller_Abstract_Backend
{
    /**
     * Page
     * @var Model_Page
     */
    protected $model            = 'page';

    public function action_index()
    {
        $this->title('Pages index');
    }

    public function action_create()
    {
        $this->title('Create Page');
    }

    public function action_update()
    {
        $this->title('Update Page');
    }

    public function action_delete()
    {
        $this->title('Delete Page');
    }
}
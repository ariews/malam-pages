<?php

defined('SYSPATH') or die('No direct script access.');

/**
 * @author  arie
 */

abstract class Malam_Controller_Page extends Controller_Abstract_Frontend
{
    /**
     * Page
     *
     * @var Model_Page
     */
    protected $model    = 'page';

    public function action_read()
    {
        $this->temporary->set(array(
            'title' => $this->page->title,
            'model' => $this->model
        ));

        $this->last_modified($this->page);
    }
}
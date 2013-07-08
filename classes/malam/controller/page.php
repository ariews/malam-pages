<?php

defined('SYSPATH') or die('No direct script access.');

/**
 * @author  arie
 */

abstract class Malam_Controller_Page extends Controller_Abstract_Frontend
{
    /**
     * Page Model
     * @var Model_Page
     */
    private $page;

    public function action_read()
    {
        $this->temporary->set(array(
            'title' => $this->page->title,
            'page'  => $this->page
        ));

        $this->last_modified($this->page);
    }

    public function __construct(Request $request, Response $response)
    {
        parent::__construct($request, $response);

        $this->page = $page = ORM::factory('page');
        /* @var $page Model_Page */

        switch ($request->action())
        {
            case 'read':
                $this->page = $page->find_by_slug(
                        $request->param('slug')
                    )->find();

                if (! $this->page->loaded())
                {
                    throw new HTTP_Exception_404();
                }

                break;
        }

        $this->temporary->set(array(
            'page'  => $this->page
        ));
    }
}
<?php
/*
 * @author Hállex da Silva Costa <hallex.costa@hotmail.com>
 * @copyright (c) 2020 All rights reserved.
 */
namespace App\Source;

use App\Interfaces\InterfaceLayout;
use InvalidArgumentException;

/**
 * [Description]
 * class Layout
 */
class Layout implements InterfaceLayout
{
    /**
     * Page view
     * @var string
     */
    private string $view;
    /**
     * Show master layout (Master Page) - Static
     * @return string [directory relative of page]
     */
    public static function master($layout) : string
    {
        $layout_master = '../app/views/' . $layout . '.php';
        if (!file_exists($layout_master)) {
            throw new InvalidArgumentException('Master layout has not been defined.');
        }
        return $layout_master;
    }
    /**
     * Add new layout
     * @param string $view [your page]
     * @return string [relative directory of the requested page]
     */
    public function add(string $view)
    {
        $this->view = $view;
    }
    /**
     * Load view page
     * @return string Return directory relative of view
     */
    public function load() : string
    {
        $view_page = '../app/views/' . $this->view . '.php';
        if (!file_exists($view_page)) {
            throw new InvalidArgumentException(
                sprintf(
                    'Error 404: Page not found "/%s"',
                    $this->view
                )
            );
        }
        return $view_page;
    }
    public function getView()
    {
        return $this->view;
    }
}

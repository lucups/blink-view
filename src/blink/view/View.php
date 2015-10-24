<?php
/**
 * Copyright (c) 2015 Tony Lu, All rights reserved.
 * Author: Tony Lu <lucups@live.com>
 * Create: 15/10/23 16:09
 */

namespace blink\view;

use blink\core\Object;

/**
 * Class View
 * @package blink\view
 */
class View extends Object
{
    /**
     * @var array config for view engine
     *      [
     *          debug     => true
     *          views_dir => '/src/views/'
     *          cache_dir => '/runtime/cache/'
     *      ]
     */
    public $config;

    /**
     * View Engines Adapter
     * @var array
     */
    private $engines
        = [
            'php' => '\\blink\\view\\adapter\\PhpAdapter',
        ];

    public function init()
    {
    }

    public function registerViewEngines($name, $engine)
    {

    }

    public function render($tpl_relative_path = null, $data = null)
    {
        $tpl_file = app()->root . $this->getViewsDir() . $tpl_relative_path;
        extract($data, EXTR_SKIP);
        ob_start();
        include $tpl_file;
        $contents = ob_get_contents();
        ob_end_clean();
        return $contents;
    }

    public function setViewsDir($views_dir)
    {
        $this->config['views_dir'] = $views_dir;
    }

    public function getViewsDir()
    {
        return $this->config['views_dir'];
    }

    public function setTemplate($tpl_relative_path)
    {
    }
}
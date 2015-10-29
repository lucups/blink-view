<?php
/**
 * Copyright (c) 2015 Tony Lu, All rights reserved.
 * Author: Tony Lu <lucups@live.com>
 * Create: 15/10/24 12:23
 */

namespace blink\view\adapter;

/**
 * Class ViewAdapter
 * @package blink\view\adapter
 */
abstract class ViewAdapter implements AdapterInterface
{
    public $isDebug;

    protected $_viewsDir;
    protected $_cacheDir;

    public function isDebug()
    {
        return $this->isDebug;
    }

    public function getViewsDir()
    {
        return $this->_viewsDir;
    }

    public function setViewsDir($viewsDir)
    {
        $this->$viewsDir = $viewsDir;
        return $this;
    }

    public function getCacheDir()
    {
        return $this->_cacheDir;
    }

    public function setCacheDir($cacheDir)
    {
        $this->_cacheDir = $cacheDir;
        return $this;
    }

    abstract public function render();
}
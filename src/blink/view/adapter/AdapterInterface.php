<?php
/**
 * Copyright (c) 2015 Tony Lu, All rights reserved.
 * Author: Tony Lu <lucups@live.com>
 * Create: 15/10/24 12:22
 */

namespace blink\view\adapter;

/**
 * Interface AdapterInterface
 * @package blink\view\adapter
 */
interface AdapterInterface
{
    /**
     * @return bool
     */
    public function isDebug();

    /**
     * @return string
     */
    public function getViewsDir();

    /**
     * @param string $viewsDir
     * @return $this
     */
    public function setViewsDir($viewsDir);

    /**
     * @return string
     */
    public function getCacheDir();

    /**
     * @param string $cacheDir
     * @return $this
     */
    public function setCacheDir($cacheDir);

    /**
     * @return string
     */
    public function render();
}
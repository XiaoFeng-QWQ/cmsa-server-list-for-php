<?php

namespace Framework;

if (!defined('FRAMEWORK_CORE')) {
    http_response_code('404');
}

use Framework\Route;

/**
 *
 * 入口类
 * 
 */
class Mian
{
    public $route;

    public function __construct()
    {
        $this->route = new Route;
    }

    /**
     * 启动程序
     *
     * @return void
     */
    public function run()
    {
        /**
         * 启动路由
         */
        $this->route->processRoutes();
    }
}

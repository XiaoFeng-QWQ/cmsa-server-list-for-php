<?php
// 在二次开发中，请保留原作者的名称以示尊重。
namespace Framework;

if (!defined('FRAMEWORK_CORE')) {
    http_response_code('404');
}

use Framework\Route;

/**
 * Cmsa Server List For PHP - 入口类
 * 
 * @copyright 2024 XiaoFeng-QWQ
 * @author XiaoFeng-QWQ <1432777209@qq.com>
 * @link https://github.com/XiaoFeng-QWQ/cmsa-server-list-for-php
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

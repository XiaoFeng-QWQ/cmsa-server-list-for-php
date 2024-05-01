<?php

namespace Framework;

if (!defined('FRAMEWORK_CORE')) {
    http_response_code('404');
}

use Framework\Config\App;

/**
 * Cmsa Server List For PHP - 路由类
 * 
 * @copyright 2024 XiaoFeng-QWQ
 * @author XiaoFeng-QWQ <1432777209@qq.com>
 * @link https://github.com/XiaoFeng-QWQ/cmsa-server-list-for-php
 */
class Route
{
    private array $route_rules;
    private $app_config;
    private string $currentUri;

    public function __construct()
    {
        $this->app_config = new App;
        $this->currentUri = filter_var($_SERVER['REQUEST_URI'], FILTER_SANITIZE_URL);
        $this->route_rules = $this->app_config->route_rules;
    }

    public function processRoutes()
    {
        if (empty($this->currentUri)) {
            header("HTTP/1.1 400 Bad Request");
            exit('400 Bad Request');
        }

        $handler = $this->findHandler($this->currentUri);

        if ($handler) {
            $filePath = realpath(FRAMEWORK_DIR . '/App/View' . $handler['file'][0]);

            if ($filePath && is_file($filePath)) {
                include $filePath;
            } else {
                $this->handleNotFound();
            }
        } else {
            $this->handleNotFound();
        }
    }

    private function findHandler(string $uri): ?array
    {
        $uriWithoutQuery = strtok($uri, '?');

        foreach ($this->route_rules as $pattern => $handler) {
            if (strpos($pattern, '/') === 0) {
                if (preg_match("#^$pattern$#", $uriWithoutQuery)) {
                    return $handler;
                }
            } else {
                if ($uriWithoutQuery === $pattern) {
                    return $handler;
                }
            }
        }
        return null;
    }

    private function handleNotFound()
    {
        header("HTTP/1.1 404 Not Found");
        exit('<h3>错误：</h3><blockquote>访问的URL: ' . $this->currentUri . ' 不存在！ Powered By XiaoFeng-QWQ</blockquote>');
    }
}

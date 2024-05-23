<?php

namespace Framework\Config;

/**
 * 应用配置
 */
class App
{
    /**
     * 路由规则
     *
     * @var array
     */
    public array $route_rules = [
        '/' => [
            'file' => [
                '/index.php'
            ],
            'cache' => [
                null
            ]
        ],
        '/[\s\S]*' => [
            'file' => [
                '/details.php'
            ],
            'cache' => [
                null
            ]
        ],
    ];
}

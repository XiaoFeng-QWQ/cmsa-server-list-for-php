<?php
if (!defined('FRAMEWORK_CORE')) {
    http_response_code('404');
}
?>

<!DOCTYPE html>
<html lang="zh-CN" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title>Cuberite Minecraft服务器联盟-服务器列表</title>
    <script>
        // 检测浏览器是否为IE
        function isIE() {
            var userAgent = window.navigator.userAgent;
            // IE浏览器的用户代理字符串中包含 "MSIE" 或 "Trident"
            return userAgent.indexOf('MSIE') !== -1 || userAgent.indexOf('Trident') !== -1;
        }

        // 如果是IE浏览器，则显示提示框
        if (isIE()) {
            var confirmDownload = confirm("您当前正在使用Internet Explorer（IE）浏览器，我们建议您下载其他现代化的浏览器，如谷歌浏览器。是否立即下载？");

            if (confirmDownload) {
                // 跳转到谷歌浏览器下载页面
                window.location.href = "https://www.google.cn/intl/zh-CN/chrome/";
            }
        }
    </script>
    <link href="https://cdn.bootcdn.net/ajax/libs/semantic-ui/2.5.0/semantic.min.css" rel="stylesheet">
    <link href="https://cdn.bootcdn.net/ajax/libs/nprogress/0.2.0/nprogress.min.css" rel="stylesheet">
    <script src="https://cdn.bootcdn.net/ajax/libs/nprogress/0.2.0/nprogress.min.js"></script>
    <script src="https://cdn.bootcdn.net/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.bootcdn.net/ajax/libs/marked/9.0.0/marked.min.js"></script>

    <script src="/public/js/showDetailed.js"></script>
    <script src="/public/js/showList.js"></script>

    <link type="text/css" href="/public/css/stylesheet.css" rel="stylesheet">
    <link rel="shortcut icon" href="/public/img/logo.png" type="image/x-icon">
    <meta name="viewport" content="width=device-width">
    <script>
        NProgress.configure({
            parent: 'body'
        })
        // 监听页面加载事件
        window.addEventListener('load', () => {
            NProgress.done();
        });
        // 监听资源加载事件
        document.addEventListener('readystatechange', () => {
            if (document.readyState === 'interactive') {
                NProgress.start();
            } else if (document.readyState === 'complete') {
                NProgress.done();
                showList();
                showDetailed();
            }
        });
    </script>
</head>

<body>
    <nav class="ui inverted cuberite-theme cuberite-navigation menu">
        <div class="ui container" id="cuberite-navigation-container">
            <a href="/" class="header item">
                <img src="/public/img/logo.png" style="margin-right: 1.5em" alt="Logo" class="logo" />
                <p>Cuberite Minecraft服务器联盟-服务器列表</p>
            </a>
        </div>
    </nav>

    <main class="ui container" id="cuberite-main-container">
        <div class="ui hidden divider"></div>
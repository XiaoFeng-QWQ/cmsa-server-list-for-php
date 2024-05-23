<?php
if (!defined('FRAMEWORK_CORE')) {
    http_response_code('404');
}
?>

</main>
<div id="music-player-container"></div>
<script src="https://cdn.bootcdn.net/ajax/libs/jquery.pjax/2.0.1/jquery.pjax.min.js"></script>
<script src="https://cdn.bootcdn.net/ajax/libs/semantic-ui/2.5.0/semantic.min.js"></script>
<script src="https://cdn.bootcdn.net/ajax/libs/mdui/1.0.2/js/mdui.min.js"></script>
<script src="https://cdn.staticfile.org/aplayer/1.10.1/APlayer.min.js"></script>
<script src="/public/js/musicPlayerSettings.js"></script>
<script src="/public/js/pjax.js"></script>
<script>
    // 新建类
    const musicPlayer = new MusicPlayerSettings();
    // 调用主函数
    musicPlayer.main(); // 使用正确的函数名
</script>
<footer class="ui inverted cuberite-theme cuberite-navigation footer segment">
    <div class="ui center aligned container">
        <div class="ui inverted horizontal link list">
            <a class="item" target="_blank" href="https://cmsa.dfggmc.top">Cuberite Minecraft服务器联盟</a>
            <a class="item" target="_blank" href="https://wiki.cuberite.dfggmc.top">Cuberite中文维基</a>
            <a class="item" target="_blank" href="https://github.com/XiaoFeng-QWQ/cmsa-server-list-for-php">Cmsa Server List For PHP Powered By XiaoFeng-QWQ</a>
        </div>
    </div>
</footer>
</body>

</html>
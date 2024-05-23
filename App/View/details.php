<?php
// 详情页

if (!defined('FRAMEWORK_CORE')) {
    http_response_code('404');
}

require_once FRAMEWORK_APP_PATH . '/View/common/head.php'
?>

<div id="detailsContent">
    <div class="loading">
        <div class="ui segment">
            <div class="ui active inverted dimmer">
                <div class="ui text loader">加载中，很快就好……</div>
            </div>
            <div class="ui placeholder">
                <div class="image header">
                    <div class="line"></div>
                    <div class="line"></div>
                </div>
                <div class="header">
                    <div class="line"></div>
                    <div class="line"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
require_once FRAMEWORK_APP_PATH . '/View/common/footer.php'
?>
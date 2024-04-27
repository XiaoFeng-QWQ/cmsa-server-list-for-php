<?php
if (!defined('FRAMEWORK_CORE')) {
    http_response_code('404');
}

require_once FRAMEWORK_APP_PATH . '/View/common/head.php'
?>

<div id="detailsContent">
    <div class="loading">获取中……</div>
</div>

<?php
require_once FRAMEWORK_APP_PATH . '/View/common/footer.php'
?>
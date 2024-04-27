<?php
if (!defined('FRAMEWORK_CORE')) {
    http_response_code('404');
}

require_once FRAMEWORK_APP_PATH . '/View/common/head.php'
?>

<section id="serverList" class="ui centered link cards">
    <div class="loading">获取中，很快就好……</div>
</section>

<?php
require_once FRAMEWORK_APP_PATH . '/View/common/footer.php'
?>
<?php
if (!defined('FRAMEWORK_CORE')) {
    http_response_code('404');
}

require_once FRAMEWORK_APP_PATH . '/View/common/head.php'
?>

<div id="listLoading">
    <div class="ui three column stackable grid">
        <div class="column">
            <div class="ui raised segment">
                <div class="ui placeholder">
                    <div class="image header">
                        <div class="line"></div>
                        <div class="line"></div>
                    </div>
                    <div class="paragraph">
                        <div class="medium line"></div>
                        <div class="short line"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="column">
            <div class="ui raised segment">
                <div class="ui placeholder">
                    <div class="image header">
                        <div class="line"></div>
                        <div class="line"></div>
                    </div>
                    <div class="paragraph">
                        <div class="medium line"></div>
                        <div class="short line"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="column">
            <div class="ui raised segment">
                <div class="ui placeholder">
                    <div class="image header">
                        <div class="line"></div>
                        <div class="line"></div>
                    </div>
                    <div class="paragraph">
                        <div class="medium line"></div>
                        <div class="short line"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<section id="serverList" class="ui centered link cards"></section>

<?php
require_once FRAMEWORK_APP_PATH . '/View/common/footer.php'
?>
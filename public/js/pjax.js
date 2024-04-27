/**----------------------
 *   ---- 全站Pjax ----
 * ---------------------*/
$(document).pjax('a:not(a[target="_blank"],a[no-pjax])', {
    container: 'main',
    fragment: 'main',
    timeout: 20000
});

$(document).on('pjax:send', function () {
    NProgress.start();
});

$(document).on('pjax:end', function () {
    showList();
    showDetailed();
    NProgress.done();
});
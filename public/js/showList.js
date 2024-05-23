/**
 * 展示列表
 */
function showList() {
  if ($('#serverList').length > 0) {
    $.ajax({
      url: "/public/data/json/list.json",
      dataType: "json",
      success: function (data) {
        if (data.length === 0) {
          $('#listLoading').hide();
          $('#serverList').append('服务器列表数据为空或格式错误！');
          return;
        }

        $.each(data, function (key, item) {
          var html = `
          <a class="cuberite-condensed-plugin card" style="animation-duration: 377ms" href="${item.name}">
              <article class="content">
                  <img class="ui right floated mini image" src="/public/img/${key}/logo.png" alt="${item.name} logo">
                  <h3 class="header">${item.name}</h3>
                  <div class="meta">${item.authr}</div>
                  <p class="description">${item.description}</p>
              </article>
              <div class="extra content">
                  <span>
                      ${item.tag}
                  </span>
                  <span class="right floated">
                      ${item.version}
                  </span>
              </div>
          </a>
          `;
          $('#listLoading').hide();
          $('#serverList').append(html);
        });
      },
      error: function () {
        $('#listLoading').hide();
        $('#serverList').append('服务器列表数据格式错误！');
      }
    });
  }
}
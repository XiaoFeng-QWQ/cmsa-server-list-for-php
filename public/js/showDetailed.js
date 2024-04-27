/**
 * 展示详情页
 */
function showDetailed() {
  if ($('#detailsContent').length > 0) {
    var pathName = window.location.pathname;
    var serverName = pathName.split("/")[1];

    $.getJSON("/public/data/json/list.json")
      .done(function (data) {
        var serverFound = false;

        $.each(data, function (key, item) {
          if (item.name === serverName) {
            var html = `
            <article class="ui cuberite-expanded-plugin two column stackable grid">
                <header class="row">
                    <div class="twelve wide column">
                        <h2 class="ui header">
                            <img class="ui image" src="/public/img/${key}/logo.png" alt="${item.name} logo" />
                            <span class="content">
                                ${item.name}
                                <span class="sub header">
                                    <span class="ui horizontal bulleted list">
                                        <span class="item">${item.authr}</span>
                                        <span class="item">@${item.master}</span>
                                        <span class="item">Cuberite Minecraft服务器联盟</span>
                                    </span>
                                </span>
                            </span>
                        </h2>
                        <nav class="ui horizontal cuberite-expanded-plugin-metadata list">
                            <div class="item">
                                <span class="content">${item.description}</span>
                            </div>
                            <div class="item">
                                <span class="content">${item.version}</span>
                            </div>
                        </nav>
                    </div>
                    <aside class="four wide middle aligned column">
                        <a target="_blank" href="${item.link}">
                            <button class="ui primary fluid labeled icon button">
                                前往官网
                            </button>
                        </a>
                    </aside>
                </header>
            </article>
            <article id="details" class="ui cuberite-expanded-plugin raised padded  segment" style="overflow-x: auto">解析详情文件中……</article>
          `;
            $('#detailsContent .loading').hide();

            $('#detailsContent').html(html);

            $.ajax({
              url: `/public/data/mark-down/details/${key}.md`,
              success: function (markdownText) {
                $('#details').html(marked.parse(markdownText));
              },
              error: function () {
                $('#details').html("无法获取 Markdown 文件。");
              }
            });

            serverFound = true;
            return false; // 结束循环
          }
        });

        if (!serverFound) {
          $('#detailsContent .loading').hide();
          $('#content').html('未找到服务器信息！');
        }
      })
      .fail(function () {
        $('#detailsContent .loading').hide();
        $('#content').html('无法获取服务器列表数据！');
      });
  }
}
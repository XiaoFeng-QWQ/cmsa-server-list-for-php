# cmsa-server-list PHP版本

## 简介
这是一个使用PHP编写的cmsa服务器列表。

## 特色功能
1. 全站使用pjax，享受流畅的浏览体验。
2. 使用[Semantic-UI](https://github.com/Semantic-Org/Semantic-UI)，提供美观的界面。
3. 添加服务器简单方便，只需三步：
    1. 编辑 `/public/data/json/list.json` 文件，按照以下格式添加服务器信息：
       ```json
       {
            "唯一标识符（数字）": {
                "tag": "标签",
                "name": "服务器名称",
                "link": "网址",
                "authr": "创建者",
                "master": "运营者",
                "version": "服务器版本",
                "description": "描述"
            }
        }
       ```
       例如：
       ```json
        {
            "1": {
                "tag": "多世界多玩法",
                "name": "dfgg",
                "link": "https://www.dfggmc.top",
                "authr": "dfgg工作室",
                "master": "peg195",
                "version": "Java1.12.2",
                "description": "多世界多玩法服务器开创者"
            },
            "2": {
                "tag": "MTR, 生存, 建筑, 休闲, 微生电",
                "name": "baketo",
                "link": "https://baketo.framer.ai/",
                "authr": "CoH2",
                "master": "CoH2",
                "version": "Java1.19.2",
                "description": "我们没有高配的CPU, 但是有满怀爱心的玩家!"
            }
        }
       ```
    2. 在 `/public/data/mark-down/details/` 目录下创建详细信息的Markdown文件，文件名与唯一标识符对应，例如：
       ```
       details/1.md
       ```
       Markdown文件内容可参考添加的服务器信息。
    3. 添加服务器logo，在 `/public/img/` 目录下创建以唯一标识符命名的文件夹，并在其中放置logo图片文件，例如：
       ```
       /public/img/1/logo.png
       ```

## 疑问解答
- 如何添加服务器logo？
    在 `/public/img/` 目录下根据唯一标识符创建文件夹，然后将logo图片放置其中，文件路径为 `/public/img/唯一标识符/logo.png`。

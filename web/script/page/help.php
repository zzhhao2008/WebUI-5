<?php view::header("开发帮助页");?>
<div id="face"></div>
<?php
$content=<<<MD
# 能看到此页面，说明你已基本正确安装ZSV-WEBUI5
QQ：2019666136
## 1.概述
本UI框架基于\*A\*P架构，前端使用Boostrap5.2.3、aceeditor、MathJax、marked.js等主流组件  

主体由ZOJ改制而来，因此可能有残余代码。

## 2.部分操作
### 2.1.创建新页面
1. 在`web/script/page/...`下创建新文件`*.php`
2. 在`web/script/route.php`中添加新页面路由
3. 测试
### 2.2 .创建新模块
1. 在`web/script/lib/...`下创建新文件夹
2. 在`web/script/lib/main.php` 内引入新模块
### 2.3 修改导航栏和公司名
1. 在`web/script/lib/main.php` 内修改导航栏项目URI和公司名
2. 编辑`web/script/view/nav.php` 内导航栏
## 3.View组件一览
请查看`web/script/lib/view/`文件夹

## 4.`常见问题`  
### 4.1.页面重路由失效（已配置路由显示404）
1. 使用的服务端错误，应为`Apache `
2. `.htaccess文件被覆盖，`应修改为：
```
Options -MultiViews
RewriteEngine On
RewriteCond %{REQUEST_FILENAME} !-f
RewriteRule ^(.*)$ /index.php [QSA,L]
```

MD;
view::jsMdLt("face",$content);
?>
<?php view::foot()?>
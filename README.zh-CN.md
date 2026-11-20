# Deltaback · 游戏电商网站

[English](README.md) | 简体中文

## 简介

**Deltaback** 是一个销售游戏的电商网站，为大学课程作业而开发。

网站的设计目标是易用、适配移动端、交互友好：只要具备基本的电脑操作能力，就能在任何现代浏览器上使用，无论是常客还是初次访问的用户都能获得简洁顺畅的体验。

## 技术栈

HTML、CSS（CSS Grid 布局）、JavaScript、PHP、MySQL

## 功能截图

### 1. 响应式注册与登录页面

使用网站前，用户需要先注册账号再登录。注册时需填写用户名、有效邮箱和密码，并再次输入密码以确认两次输入一致。

![注册页](https://github.com/hastikacheddy/ecommerce-website/assets/59787014/735b68c4-85d3-4917-b106-da775c1ad801)

注册成功后会跳转到登录页面。若密码与用户名不匹配，会显示错误提示；信息全部正确并提交后，系统会创建会话并跳转到首页。

![登录页](https://github.com/hastikacheddy/ecommerce-website/assets/59787014/b51a6247-178f-4d4f-bd14-9493f014352c)

### 2. 首页

首页包括：

- 侧边导航栏
- 轮播图
- 各游戏分类的商品卡片
- 搜索栏

首页所有组件均为响应式设计，在大多数尺寸的设备上都能正确排列。鼠标悬停在卡片上时会显示分类名称。

![首页](https://github.com/hastikacheddy/ecommerce-website/assets/59787014/68569cc4-9df4-4d2a-bdc2-8a6690d08689)

### 3. 分类页面

游戏卡片使用 HTML 和 CSS 制作，整体布局基于 **CSS Grid**。与主要处理单一方向的 Flexbox 不同，Grid 是二维布局系统，可以同时控制行和列。对应的 SQL 查询保存在 `.php` 文件中，所有商品信息都从数据库加载。

![分类页](https://github.com/hastikacheddy/ecommerce-website/assets/59787014/7a50b061-2687-4484-a1ef-a1d337cd5fca)

### 4. 购物车页面

购物车由三部分组成：购物车列表、支付表单和导航栏。页面会显示商品价格并自动计算总价。

![购物车](https://github.com/hastikacheddy/ecommerce-website/assets/59787014/37f75b82-1a06-48db-b7d0-67c9dde20388)

### 5. 游戏详情页

详情页展示游戏信息、系统配置要求、游戏特色、剧情介绍、预告片、用户评价和相关游戏，所有数据均存储在数据库中。用户可以点击“立即购买”加入购物车，或点击爱心按钮加入心愿单。

![游戏详情](https://github.com/hastikacheddy/ecommerce-website/assets/59787014/b7b9ddb9-f416-44e9-988c-3c612323fccc)

### 6. 历史记录页面

![历史记录](https://github.com/hastikacheddy/ecommerce-website/assets/59787014/ea9c45b9-3bc3-48c2-8c64-a35786ea7f3a)

### 7. 帮助页面

![帮助](https://github.com/hastikacheddy/ecommerce-website/assets/59787014/7cc0e151-3b6d-4219-9b42-080605a0c8b3)

## 本地运行

1. 安装 XAMPP / WAMP 等 PHP + MySQL 环境。
2. 将 `web/` 目录复制到 Web 服务器根目录（如 `htdocs`）。
3. 在 `web/connection.php` 中配置数据库连接信息。
4. 在浏览器中访问对应地址即可。

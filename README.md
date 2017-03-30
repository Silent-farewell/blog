# blog
基于thinkPHP和bootstrap的博客项目 

## 链接
- 博客：http://qiwu.website  
- github：https://github.com/Silent-farewell/blog    

## 简介  

用thinkPHP和bootstrap开发的博客项目，基本功能已经齐备。

## 项目介绍
1. 前台基于boostrap的响应式页面布局适配手机和平板；
2. 后台也是bootstrap模板
3. ueditor 百度富文本编辑器；
4. Aplayer 网易云播放器

## 使用说明
1. 请将所有文件直接放在根目录下；
2. 后台登录密码默认为admin；
3. 需要修改的地方：  

   “/APP/Conf/config.php”:    
   
   //数据库配置   
   'DB_HOST' => '127.0.0.1',    
   'DB_USER' => 'root',      
   'DB_PWD' => '123456',    
   'DB_NAME' => 'myblog',    
   'DB_PREFIX' => 'hd_',   

    //REDIS服务器地址   
    'REDIS_HOST' => '127.0.0.1',   
4. 数据库文件是myblog.sql。

## 网站截图
- 网站首页
![image](https://github.com/Silent-farewell/blog/blob/master/screenshots/shouye01.jpg)

- 文章正文
![image](https://github.com/Silent-farewell/blog/blob/master/screenshots/zhengwen01.jpg)

- 网站后台
![image](https://github.com/Silent-farewell/blog/blob/master/screenshots/houtai02.jpg)

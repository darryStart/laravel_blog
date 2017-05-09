# Host: localhost  (Version: 5.5.53)
# Date: 2017-05-09 16:13:07
# Generator: MySQL-Front 5.3  (Build 4.234)

/*!40101 SET NAMES utf8 */;

#
# Structure for table "web_access"
#

DROP TABLE IF EXISTS `web_access`;
CREATE TABLE `web_access` (
  `role_id` smallint(6) unsigned NOT NULL,
  `node_id` smallint(6) unsigned NOT NULL,
  `level` tinyint(1) NOT NULL,
  `module` varchar(50) DEFAULT NULL,
  KEY `groupId` (`role_id`),
  KEY `nodeId` (`node_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

#
# Data for table "web_access"
#

/*!40000 ALTER TABLE `web_access` DISABLE KEYS */;
INSERT INTO `web_access` VALUES (1,900,0,NULL),(1,805,0,NULL),(1,804,0,NULL),(1,803,0,NULL),(1,802,0,NULL),(1,801,0,NULL),(1,800,0,NULL),(1,712,0,NULL),(1,711,0,NULL),(1,710,0,NULL),(1,709,0,NULL),(1,708,0,NULL),(1,707,0,NULL),(1,706,0,NULL),(1,705,0,NULL),(1,700,0,NULL),(1,606,0,NULL),(1,605,0,NULL),(1,604,0,NULL),(1,603,0,NULL),(1,602,0,NULL),(1,601,0,NULL),(1,600,0,NULL),(1,505,0,NULL),(1,504,0,NULL),(1,502,0,NULL),(1,501,0,NULL),(1,500,0,NULL),(1,408,0,NULL),(1,407,0,NULL),(1,406,0,NULL),(1,405,0,NULL),(1,404,0,NULL),(1,403,0,NULL),(1,402,0,NULL),(1,401,0,NULL),(1,400,0,NULL),(1,306,0,NULL),(1,305,0,NULL),(1,304,0,NULL),(1,307,0,NULL),(1,303,0,NULL),(1,302,0,NULL),(1,301,0,NULL),(1,300,0,NULL),(1,202,0,NULL),(1,201,0,NULL),(1,200,0,NULL),(1,109,0,NULL),(1,108,0,NULL),(1,704,0,NULL),(1,703,0,NULL),(1,702,0,NULL),(1,701,0,NULL),(1,106,0,NULL),(1,105,0,NULL),(1,104,0,NULL),(1,103,0,NULL),(1,102,0,NULL),(1,101,0,NULL),(1,100,0,NULL),(1,3,0,NULL),(1,2,0,NULL),(1,1,0,NULL),(11,1104,0,NULL),(11,1103,0,NULL),(11,1102,0,NULL),(11,1101,0,NULL),(11,1015,0,NULL),(11,1306,0,NULL),(11,1305,0,NULL),(11,1304,0,NULL),(11,1303,0,NULL),(11,1302,0,NULL),(11,1301,0,NULL),(11,1008,0,NULL),(11,1007,0,NULL),(11,1006,0,NULL),(11,1300,0,NULL),(11,1005,0,NULL),(11,1004,0,NULL),(11,1003,0,NULL),(11,1002,0,NULL),(11,1001,0,NULL),(11,1000,0,NULL),(11,405,0,NULL),(11,404,0,NULL),(11,403,0,NULL),(11,402,0,NULL),(11,401,0,NULL),(11,400,0,NULL),(11,309,0,NULL),(11,308,0,NULL),(11,307,0,NULL),(11,908,0,NULL),(11,907,0,NULL),(11,906,0,NULL),(11,905,0,NULL),(11,716,0,NULL),(11,715,0,NULL),(11,714,0,NULL),(11,901,0,NULL),(11,713,0,NULL),(11,900,0,NULL),(11,805,0,NULL),(11,804,0,NULL),(11,803,0,NULL),(11,802,0,NULL),(11,801,0,NULL),(11,800,0,NULL),(11,712,0,NULL),(11,711,0,NULL),(11,710,0,NULL),(11,709,0,NULL),(11,708,0,NULL),(11,707,0,NULL),(11,706,0,NULL),(11,705,0,NULL),(11,700,0,NULL),(11,716,0,NULL),(11,606,0,NULL),(11,605,0,NULL),(11,604,0,NULL),(11,603,0,NULL),(11,600,0,NULL),(11,410,0,NULL),(11,409,0,NULL),(11,408,0,NULL),(11,407,0,NULL),(11,406,0,NULL),(11,405,0,NULL),(11,404,0,NULL),(11,403,0,NULL),(11,402,0,NULL),(11,401,0,NULL),(11,400,0,NULL),(2,200,0,NULL),(2,201,0,NULL),(2,202,0,NULL),(11,306,0,NULL),(11,305,0,NULL),(11,304,0,NULL),(11,904,0,NULL),(11,903,0,NULL),(11,307,0,NULL),(11,505,0,NULL),(11,504,0,NULL),(11,502,0,NULL),(11,500,0,NULL),(11,303,0,NULL),(11,302,0,NULL),(11,301,0,NULL),(11,300,0,NULL),(11,202,0,NULL),(11,201,0,NULL),(11,200,0,NULL),(11,109,0,NULL),(11,108,0,NULL),(11,704,0,NULL),(11,703,0,NULL),(11,702,0,NULL),(11,701,0,NULL),(11,106,0,NULL),(11,105,0,NULL),(8,1015,0,NULL),(8,1006,0,NULL),(8,1000,0,NULL),(8,307,0,NULL),(8,900,0,NULL),(8,800,0,NULL),(8,700,0,NULL),(8,600,0,NULL),(8,400,0,NULL),(8,300,0,NULL),(8,200,0,NULL),(8,104,0,NULL),(8,103,0,NULL),(8,102,0,NULL),(8,101,0,NULL),(8,100,0,NULL),(8,2,0,NULL),(7,202,0,NULL),(7,201,0,NULL),(7,200,0,NULL),(7,106,0,NULL),(7,105,0,NULL),(7,104,0,NULL),(7,103,0,NULL),(7,102,0,NULL),(7,101,0,NULL),(7,100,0,NULL),(6,100,0,NULL),(6,101,0,NULL),(6,102,0,NULL),(6,103,0,NULL),(6,104,0,NULL),(6,105,0,NULL),(6,106,0,NULL),(6,701,0,NULL),(6,702,0,NULL),(6,703,0,NULL),(6,704,0,NULL),(6,108,0,NULL),(6,109,0,NULL),(11,104,0,NULL),(3,201,0,NULL),(3,200,0,NULL),(1,901,0,NULL),(1,903,0,NULL),(1,904,0,NULL),(1,307,0,NULL),(1,308,0,NULL),(1,309,0,NULL),(1,400,0,NULL),(1,401,0,NULL),(1,402,0,NULL),(1,403,0,NULL),(1,404,0,NULL),(1,405,0,NULL),(1,1000,0,NULL),(1,1001,0,NULL),(1,1002,0,NULL),(1,1003,0,NULL),(1,1004,0,NULL),(1,1005,0,NULL),(1,1006,0,NULL),(1,1007,0,NULL),(1,1008,0,NULL),(1,1015,0,NULL),(1,1101,0,NULL),(1,1102,0,NULL),(1,1103,0,NULL),(1,1104,0,NULL),(1,1016,0,NULL),(1,1017,0,NULL),(1,1018,0,NULL),(1,1019,0,NULL),(1,1020,0,NULL),(1,1021,0,NULL),(1,1022,0,NULL),(1,1023,0,NULL),(1,1024,0,NULL),(11,103,0,NULL),(11,102,0,NULL),(11,101,0,NULL),(11,100,0,NULL),(11,3,0,NULL),(11,2,0,NULL),(11,1,0,NULL),(15,430,0,NULL),(15,309,0,NULL),(15,308,0,NULL),(15,307,0,NULL),(15,712,0,NULL),(15,711,0,NULL),(15,710,0,NULL),(15,709,0,NULL),(15,708,0,NULL),(15,707,0,NULL),(11,1016,0,NULL),(11,1017,0,NULL),(11,1018,0,NULL),(11,1019,0,NULL),(11,1020,0,NULL),(11,1021,0,NULL),(11,1022,0,NULL),(11,1023,0,NULL),(11,1024,0,NULL),(11,1307,0,NULL),(11,1308,0,NULL),(15,706,0,NULL),(12,1,0,NULL),(12,2,0,NULL),(12,3,0,NULL),(12,100,0,NULL),(12,101,0,NULL),(12,102,0,NULL),(12,103,0,NULL),(12,104,0,NULL),(12,105,0,NULL),(12,106,0,NULL),(12,701,0,NULL),(12,702,0,NULL),(12,703,0,NULL),(12,704,0,NULL),(12,108,0,NULL),(12,109,0,NULL),(12,200,0,NULL),(12,201,0,NULL),(12,202,0,NULL),(12,300,0,NULL),(12,301,0,NULL),(12,302,0,NULL),(12,303,0,NULL),(12,500,0,NULL),(12,502,0,NULL),(12,504,0,NULL),(12,505,0,NULL),(12,307,0,NULL),(12,903,0,NULL),(12,904,0,NULL),(12,304,0,NULL),(12,305,0,NULL),(12,306,0,NULL),(12,400,0,NULL),(12,401,0,NULL),(12,402,0,NULL),(12,403,0,NULL),(12,404,0,NULL),(12,405,0,NULL),(12,406,0,NULL),(12,407,0,NULL),(12,408,0,NULL),(12,409,0,NULL),(12,410,0,NULL),(12,600,0,NULL),(12,603,0,NULL),(12,604,0,NULL),(12,605,0,NULL),(12,606,0,NULL),(12,716,0,NULL),(12,700,0,NULL),(12,705,0,NULL),(12,706,0,NULL),(12,707,0,NULL),(12,708,0,NULL),(12,709,0,NULL),(12,710,0,NULL),(12,711,0,NULL),(12,712,0,NULL),(12,800,0,NULL),(12,801,0,NULL),(12,802,0,NULL),(12,803,0,NULL),(12,804,0,NULL),(12,805,0,NULL),(12,900,0,NULL),(12,713,0,NULL),(12,901,0,NULL),(12,714,0,NULL),(12,715,0,NULL),(12,716,0,NULL),(12,905,0,NULL),(12,906,0,NULL),(12,907,0,NULL),(12,908,0,NULL),(12,307,0,NULL),(12,308,0,NULL),(12,309,0,NULL),(12,400,0,NULL),(12,401,0,NULL),(12,402,0,NULL),(12,403,0,NULL),(12,404,0,NULL),(12,405,0,NULL),(12,1000,0,NULL),(12,1001,0,NULL),(12,1002,0,NULL),(12,1003,0,NULL),(12,1004,0,NULL),(12,1005,0,NULL),(12,1300,0,NULL),(12,1006,0,NULL),(12,1007,0,NULL),(12,1008,0,NULL),(12,1301,0,NULL),(12,1302,0,NULL),(12,1303,0,NULL),(12,1304,0,NULL),(12,1305,0,NULL),(12,1306,0,NULL),(12,1015,0,NULL),(12,1101,0,NULL),(12,1102,0,NULL),(12,1103,0,NULL),(12,1104,0,NULL),(12,1016,0,NULL),(12,1017,0,NULL),(12,1018,0,NULL),(12,1019,0,NULL),(12,1020,0,NULL),(12,1021,0,NULL),(12,1022,0,NULL),(12,1023,0,NULL),(12,1024,0,NULL),(12,1307,0,NULL),(12,1308,0,NULL),(10,108,0,NULL),(10,704,0,NULL),(10,703,0,NULL),(10,702,0,NULL),(10,701,0,NULL),(10,106,0,NULL),(10,105,0,NULL),(10,104,0,NULL),(10,103,0,NULL),(10,102,0,NULL),(10,101,0,NULL),(10,100,0,NULL),(10,3,0,NULL),(10,2,0,NULL),(10,1,0,NULL),(15,705,0,NULL),(15,700,0,NULL),(15,202,0,NULL),(15,201,0,NULL),(15,200,0,NULL),(15,109,0,NULL),(15,108,0,NULL),(15,704,0,NULL),(15,703,0,NULL),(15,702,0,NULL),(15,701,0,NULL),(15,106,0,NULL),(15,105,0,NULL),(15,104,0,NULL),(15,103,0,NULL),(15,102,0,NULL),(15,101,0,NULL),(15,100,0,NULL),(15,3,0,NULL),(15,2,0,NULL),(15,1,0,NULL),(0,0,0,NULL),(10,705,0,NULL),(10,700,0,NULL),(10,202,0,NULL),(10,201,0,NULL),(10,200,0,NULL),(10,109,0,NULL),(9,808,0,NULL),(9,806,0,NULL),(9,805,0,NULL),(9,804,0,NULL),(9,803,0,NULL),(9,1024,0,NULL),(9,1023,0,NULL),(9,1022,0,NULL),(9,1021,0,NULL),(9,1020,0,NULL),(9,1019,0,NULL),(9,1018,0,NULL),(9,1017,0,NULL),(9,1016,0,NULL),(9,809,0,NULL),(9,1015,0,NULL),(9,802,0,NULL),(9,801,0,NULL),(9,800,0,NULL),(9,435,0,NULL),(9,434,0,NULL),(9,433,0,NULL),(9,432,0,NULL),(9,431,0,NULL),(9,430,0,NULL),(9,309,0,NULL),(9,308,0,NULL),(9,307,0,NULL),(9,712,0,NULL),(9,711,0,NULL),(9,710,0,NULL),(9,709,0,NULL),(9,708,0,NULL),(9,707,0,NULL),(9,706,0,NULL),(9,705,0,NULL),(9,700,0,NULL),(9,202,0,NULL),(9,201,0,NULL),(9,200,0,NULL),(9,109,0,NULL),(9,108,0,NULL),(9,704,0,NULL),(9,703,0,NULL),(9,702,0,NULL),(9,701,0,NULL),(9,106,0,NULL),(9,105,0,NULL),(9,104,0,NULL),(9,103,0,NULL),(9,102,0,NULL),(9,101,0,NULL),(9,100,0,NULL),(9,3,0,NULL),(9,2,0,NULL),(9,1,0,NULL),(15,431,0,NULL),(15,432,0,NULL),(15,433,0,NULL),(15,434,0,NULL),(15,435,0,NULL),(15,1006,0,NULL),(15,1007,0,NULL),(15,1008,0,NULL),(15,1301,0,NULL),(15,1302,0,NULL),(15,1303,0,NULL),(15,1304,0,NULL),(15,1305,0,NULL),(15,1306,0,NULL),(15,1015,0,NULL),(15,1101,0,NULL),(15,1102,0,NULL),(15,1103,0,NULL),(15,1104,0,NULL),(15,1016,0,NULL),(15,1017,0,NULL),(15,1018,0,NULL),(15,1019,0,NULL),(15,1020,0,NULL),(15,1021,0,NULL),(15,1022,0,NULL),(15,1023,0,NULL),(15,1024,0,NULL),(15,1307,0,NULL),(15,1308,0,NULL),(10,706,0,NULL),(10,707,0,NULL),(10,708,0,NULL),(10,709,0,NULL),(10,710,0,NULL),(10,711,0,NULL),(10,712,0,NULL),(10,307,0,NULL),(10,308,0,NULL),(10,309,0,NULL),(10,430,0,NULL),(10,431,0,NULL),(10,432,0,NULL),(10,433,0,NULL),(10,434,0,NULL),(10,435,0,NULL),(10,800,0,NULL),(10,801,0,NULL),(10,802,0,NULL),(10,1015,0,NULL),(10,809,0,NULL),(10,1016,0,NULL),(10,1017,0,NULL),(10,1018,0,NULL),(10,1019,0,NULL),(10,1020,0,NULL),(10,1021,0,NULL),(10,1022,0,NULL),(10,1023,0,NULL),(10,1024,0,NULL),(10,803,0,NULL),(10,804,0,NULL),(10,805,0,NULL),(10,806,0,NULL),(10,808,0,NULL),(10,1307,0,NULL),(10,1308,0,NULL),(10,720,0,NULL),(10,721,0,NULL),(10,722,0,NULL),(10,723,0,NULL),(10,724,0,NULL),(9,1307,0,NULL),(9,1308,0,NULL),(9,720,0,NULL),(9,721,0,NULL),(9,722,0,NULL),(9,723,0,NULL),(9,724,0,NULL);
/*!40000 ALTER TABLE `web_access` ENABLE KEYS */;

#
# Structure for table "web_admin"
#

DROP TABLE IF EXISTS `web_admin`;
CREATE TABLE `web_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(10) DEFAULT NULL COMMENT '显示名称',
  `user` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `userimg` varchar(64) DEFAULT NULL COMMENT '头像',
  `role` int(11) DEFAULT '0',
  `note` varchar(255) DEFAULT NULL,
  `add_time` varchar(255) DEFAULT NULL,
  `update_time` varchar(255) DEFAULT NULL,
  `state` tinyint(4) DEFAULT '1' COMMENT '0:停用 1 正常',
  `last_loginip` varchar(255) DEFAULT NULL,
  `last_logintime` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

#
# Data for table "web_admin"
#

/*!40000 ALTER TABLE `web_admin` DISABLE KEYS */;
INSERT INTO `web_admin` VALUES (1,'忆犹','admin','6c1e8bda332259974f021adcd7b0663966daa8cf','uploads/userimg/2015-11-23/56532a63c80e7.jpg',10,'超级管理员','1389750196','1478619557',1,'127.0.0.1','1478619473'),(14,'起','lunhuis','ac9bbede048b7e3817ce2a9afdc3e721','uploads/userimg/2015-11-23/56532a63c80e7.jpg',0,'超级管理员','1389750196','1478619557',1,'127.0.0.1','1492744736');
/*!40000 ALTER TABLE `web_admin` ENABLE KEYS */;

#
# Structure for table "web_advert"
#

DROP TABLE IF EXISTS `web_advert`;
CREATE TABLE `web_advert` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '' COMMENT '广告标题',
  `desc` varchar(128) CHARACTER SET utf8 DEFAULT '' COMMENT '广告内容描述',
  `click_count` int(11) unsigned DEFAULT '0' COMMENT '点击次数',
  `add_time` int(11) unsigned DEFAULT NULL COMMENT '添加时间',
  `update_time` int(11) unsigned DEFAULT NULL COMMENT '更新时间',
  `state` tinyint(1) unsigned DEFAULT '6' COMMENT '状态 6开启  8关闭',
  `img_url` varchar(255) CHARACTER SET utf8 DEFAULT NULL COMMENT '广告图地址',
  `link` varchar(255) CHARACTER SET utf8 DEFAULT NULL COMMENT '广告链接',
  `order_num` tinyint(3) unsigned DEFAULT '1' COMMENT '广告排序',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# Data for table "web_advert"
#

INSERT INTO `web_advert` VALUES (2,'2','',0,1492740276,1492763717,6,'/uploads/Advert/2017-04-21-16-35-17-58f9c44563328.jpg','',4),(3,'3','',0,1492740282,1492763615,6,'/uploads/Advert/2017-04-21-16-33-35-58f9c3df28658.jpg','',3),(4,'4','',0,1492740288,1492763623,6,'/uploads/Advert/2017-04-21-16-33-43-58f9c3e752bf3.jpg','',2),(5,'5','',0,1492740295,1492763597,6,'/uploads/Advert/2017-04-21-16-33-17-58f9c3cdbcd5d.jpg','',1),(6,'6','',0,1492740304,1492763581,6,'/uploads/Advert/2017-04-21-16-33-01-58f9c3bd695ae.jpg','',12);

#
# Structure for table "web_adverttype"
#

DROP TABLE IF EXISTS `web_adverttype`;
CREATE TABLE `web_adverttype` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `note` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# Data for table "web_adverttype"
#

INSERT INTO `web_adverttype` VALUES (2,'酒店','酒店'),(4,'购物','购物购物购物购物购物购物购物'),(5,'教育','教育'),(6,'休闲','');

#
# Structure for table "web_article"
#

DROP TABLE IF EXISTS `web_article`;
CREATE TABLE `web_article` (
  `art_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '文章逻辑ID',
  `art_face` varchar(128) DEFAULT '' COMMENT '文章图片',
  `art_title` varchar(128) NOT NULL DEFAULT '' COMMENT '文章标题',
  `art_remark` varchar(256) DEFAULT '' COMMENT '文章描述',
  `art_keyword` varchar(32) DEFAULT '' COMMENT '文章关键字',
  `cate_id` smallint(6) NOT NULL DEFAULT '1' COMMENT '文章类别',
  `art_content` text NOT NULL COMMENT '文章内容',
  `art_type` tinyint(1) unsigned DEFAULT NULL COMMENT '文章  6 原创 8 转载',
  `art_views` int(11) NOT NULL DEFAULT '1' COMMENT '文章点击量',
  `art_red` tinyint(1) DEFAULT NULL COMMENT '文章是否推荐 6 推荐 8 不推荐',
  `art_writer` varchar(64) NOT NULL DEFAULT '' COMMENT '作者',
  `create_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '文章发表时间',
  `update_time` int(10) unsigned DEFAULT NULL COMMENT '更新时间',
  PRIMARY KEY (`art_id`),
  KEY `a_title` (`art_title`)
) ENGINE=MyISAM AUTO_INCREMENT=66 DEFAULT CHARSET=utf8 COMMENT='文章表';

#
# Data for table "web_article"
#

/*!40000 ALTER TABLE `web_article` DISABLE KEYS */;
INSERT INTO `web_article` VALUES (4,'/uploads/Article/2017-04-22-14-53-44-58fafdf82c21c.jpg','Thinkphp常用配置','Thinkphp常用配置 \r\nCHECK_FILE_CASE -- windows环境下面的严格检查大小写。','Thinkphp',5,'<p>测试文章</p>',6,118,6,'忆犹',1441378213,1452229154),(5,'/uploads/Article/2017-04-22-14-53-44-58fafdf82c21c.jpg','Thinkphp常用配置','3','Thinkphp',5,'/uploads/Article/2017-04-22-14-53-44-58fafdf82c21c.jpg',8,28,6,'轮回',1441378213,1452229154),(59,'/uploads/Article/2017-04-22-14-53-44-58fafdf82c21c.jpg','Thinkphp常用配置','4','Thinkphp',5,'/uploads/Article/2017-04-22-14-53-44-58fafdf82c21c.jpg',8,23,6,'轮回',1441378213,1452229154),(60,'/uploads/Article/2017-04-22-14-53-44-58fafdf82c21c.jpg','Thinkphp常用配置','5','Thinkphp',5,'/uploads/Article/2017-04-22-14-53-44-58fafdf82c21c.jpg',8,12,6,'轮回',1441378213,1452229154),(61,'/uploads/Article/2017-04-22-14-53-44-58fafdf82c21c.jpg','Thinkphp常用配置','6','Thinkphp',1,'',8,10,6,'轮回',1441378213,1452229154),(62,'/uploads/Article/2017-04-22-14-53-44-58fafdf82c21c.jpg','Thinkphp常用配置','1','Thinkphp',5,'/uploads/Article/2017-04-22-14-53-44-58fafdf82c21c.jpg',8,12,6,'轮回',1441378213,1452229154),(63,'/uploads/Article/2017-04-22-14-53-44-58fafdf82c21c.jpg','Thinkphp常用配置','2','Thinkphp',5,'/uploads/Article/2017-04-22-14-53-44-58fafdf82c21c.jpg',8,1,6,'轮回',1441378213,1452229154),(64,'/uploads/Article/2017-05-04-17-12-06-590af0665784e.jpg','关于ThinkPHP下使用Uploadify插件 仅有火狐提示HTTP Error (302)错误的解决办法','关于ThinkPHP下使用Uploadify插件 仅有火狐提示HTTP Error (302)错误的解决办法','Uploadify',5,'<p>&nbsp;&nbsp;&nbsp;&nbsp;最近用ThinkPHP开发一个项目，集成了批量上传文件插件Uploadify，在谷歌Chrome和IE下都能正常上传，只有火狐下提示这个错误，网上找了很多解决办法，基本都说flash在firefox下重新发起session会话，由于session没有验证通过所以报错，这个问题网上有很多解决方案，但是试了很多，都没有真正解决我的问题，最后看了官方的解决方案</p><p>http://www.uploadify.com/documentation/uploadify/using-sessions-with-uploadify/</p><p>&nbsp;&nbsp;&nbsp;&nbsp;才真正解决，我用的是ThinkPHP框架，同时我开启了_initialize()(不知道这个函数的去看下ThinkPHP帮助手册),在这个函数里，我执行了一个检测用户是否登陆的验证函数，这样每次访问控制器，都会执行验证用户是否登陆有权限执行相应操作，但是因为在火狐中，flash发起的请求并没有连同SESSIONID一同发送到ThinkPHP控制器，所以导致了无法通过用户登陆请求，这时我们可以在uploadify的formData参数中定义一个SESSIONID，这样就可以通过$_POST或$_GET的方法将SESSIONID发送到控制器，在控制器把传递过去的SESSIONID设置为当前会话的SESSIONID，这样就可以通过验证了，但是，这里需要注意一条，重新设置SESSIONID必须要放在执行验证登陆函数的前边，否则无效，因为如果登陆验证不通过，那么后边的代码就都不会执行了。以上供大家参考，有不足之处，望告之，谢谢！</p><p><br/></p>',6,13,6,'忆犹',1493889126,1493889450),(65,'/uploads/Article/2017-05-08-14-28-07-59100ff704bd7.jpg','laravel 生成验证码的方法','在Laravel中有很多图片验证码的库可以使用，本篇介绍其中之一：gregwar/captcha，这个库比较简单，在Laravel中比较常用。','验证码',4,'<p style=\"margin: 10px auto; padding: 0px; color: rgb(85, 85, 85); font-family: verdana, &quot;ms song&quot;, 宋体, Arial, 微软雅黑, Helvetica, sans-serif; font-size: 12px; white-space: normal; background-color: rgb(245, 248, 250);\">首先, composer.json中如下加入配置：</p><pre name=\"code\" class=\"hljs json\" style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; white-space: pre-wrap; word-wrap: break-word; color: rgb(85, 85, 85); font-size: 12px; background-color: rgb(245, 248, 250);\">&quot;require&quot;:&nbsp;{\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;...&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;gregwar/captcha&quot;:&nbsp;&quot;1.*&quot;\r\n&nbsp;&nbsp;&nbsp;&nbsp;},</pre><p style=\"margin: 10px auto; padding: 0px; color: rgb(85, 85, 85); font-family: verdana, &quot;ms song&quot;, 宋体, Arial, 微软雅黑, Helvetica, sans-serif; font-size: 12px; white-space: normal; background-color: rgb(245, 248, 250);\">然后，已成习惯的命令：用cmd执行下面这条命令</p><p style=\"margin: 10px auto; padding: 0px; color: rgb(85, 85, 85); font-family: verdana, &quot;ms song&quot;, 宋体, Arial, 微软雅黑, Helvetica, sans-serif; font-size: 12px; white-space: normal; background-color: rgb(245, 248, 250);\">&nbsp;composer update;</p><p style=\"margin: 10px auto; padding: 0px; color: rgb(85, 85, 85); font-family: verdana, &quot;ms song&quot;, 宋体, Arial, 微软雅黑, Helvetica, sans-serif; font-size: 12px; white-space: normal; background-color: rgb(245, 248, 250);\">以下演示了其中一种使用方式，直接输出图片到网页。</p><p style=\"margin: 10px auto; padding: 0px; color: rgb(85, 85, 85); font-family: verdana, &quot;ms song&quot;, 宋体, Arial, 微软雅黑, Helvetica, sans-serif; font-size: 12px; white-space: normal; background-color: rgb(245, 248, 250);\">我定义了一个Controller：</p><pre name=\"code\" class=\"hljs php\" style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; white-space: pre-wrap; word-wrap: break-word; color: rgb(85, 85, 85); font-size: 12px; background-color: rgb(245, 248, 250);\"><code class=\"php\" style=\"margin: 0px; padding: 0px;\"><span class=\"hljs-preprocessor\" style=\"margin: 0px; padding: 0px;\">&lt;?php <span class=\"hljs-keyword\" style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 255);\">namespace <span class=\"hljs-title\" style=\"margin: 0px; padding: 0px; color: rgb(163, 21, 21);\">App\\<span class=\"hljs-title\" style=\"margin: 0px; padding: 0px;\">Http\\<span class=\"hljs-title\" style=\"margin: 0px; padding: 0px;\">Controllers;<span class=\"hljs-keyword\" style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 255);\">use <span class=\"hljs-title\" style=\"margin: 0px; padding: 0px; color: rgb(163, 21, 21);\">App\\<span class=\"hljs-title\" style=\"margin: 0px; padding: 0px;\">Http\\<span class=\"hljs-title\" style=\"margin: 0px; padding: 0px;\">Requests;<span class=\"hljs-keyword\" style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 255);\">use <span class=\"hljs-title\" style=\"margin: 0px; padding: 0px; color: rgb(163, 21, 21);\">App\\<span class=\"hljs-title\" style=\"margin: 0px; padding: 0px;\">Http\\<span class=\"hljs-title\" style=\"margin: 0px; padding: 0px;\">Controllers\\<span class=\"hljs-title\" style=\"margin: 0px; padding: 0px;\">Controller;<span class=\"hljs-keyword\" style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 255);\">use <span class=\"hljs-title\" style=\"margin: 0px; padding: 0px; color: rgb(163, 21, 21);\">Illuminate\\<span class=\"hljs-title\" style=\"margin: 0px; padding: 0px;\">Http\\<span class=\"hljs-title\" style=\"margin: 0px; padding: 0px;\">Request;<span class=\"hljs-comment\" style=\"margin: 0px; padding: 0px; color: green;\">//引用对应的命名空间<span class=\"hljs-keyword\" style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 255);\">use <span class=\"hljs-title\" style=\"margin: 0px; padding: 0px; color: rgb(163, 21, 21);\">Gregwar\\<span class=\"hljs-title\" style=\"margin: 0px; padding: 0px;\">Captcha\\<span class=\"hljs-title\" style=\"margin: 0px; padding: 0px;\">CaptchaBuilder;<span class=\"hljs-keyword\" style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 255);\">use <span class=\"hljs-title\" style=\"margin: 0px; padding: 0px; color: rgb(163, 21, 21);\">Session;<span class=\"hljs-class\" style=\"margin: 0px; padding: 0px;\"><span class=\"hljs-keyword\" style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 255);\">class <span class=\"hljs-title\" style=\"margin: 0px; padding: 0px; color: rgb(163, 21, 21);\">KitController <span class=\"hljs-keyword\" style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 255);\">extends <span class=\"hljs-title\" style=\"margin: 0px; padding: 0px; color: rgb(163, 21, 21);\">Controller { &nbsp; &nbsp;<span class=\"hljs-comment\" style=\"margin: 0px; padding: 0px; color: green;\">/**\r\n &nbsp; &nbsp; * Display a listing of the resource.\r\n &nbsp; &nbsp; *\r\n &nbsp; &nbsp; * <span class=\"hljs-doctag\" style=\"margin: 0px; padding: 0px; color: gray;\">@return Response\r\n &nbsp; &nbsp; */ &nbsp; &nbsp;<span class=\"hljs-keyword\" style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 255);\">public <span class=\"hljs-function\" style=\"margin: 0px; padding: 0px;\"><span class=\"hljs-keyword\" style=\"margin: 0px; padding: 0px;\">function <span class=\"hljs-title\" style=\"margin: 0px; padding: 0px; color: rgb(163, 21, 21);\">captcha<span class=\"hljs-params\" style=\"margin: 0px; padding: 0px;\">(<span class=\"hljs-variable\" style=\"margin: 0px; padding: 0px; color: green;\">$tmp)\r\n &nbsp; &nbsp;{ &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span class=\"hljs-comment\" style=\"margin: 0px; padding: 0px;\">//生成验证码图片的Builder对象，配置相应属性 &nbsp; &nbsp; &nbsp; &nbsp;<span class=\"hljs-variable\" style=\"margin: 0px; padding: 0px;\">$builder = <span class=\"hljs-keyword\" style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 255);\">new CaptchaBuilder; &nbsp; &nbsp; &nbsp; &nbsp;<span class=\"hljs-comment\" style=\"margin: 0px; padding: 0px; color: green;\">//可以设置图片宽高及字体 &nbsp; &nbsp; &nbsp; &nbsp;<span class=\"hljs-variable\" style=\"margin: 0px; padding: 0px;\">$builder-&gt;build(<span class=\"hljs-variable\" style=\"margin: 0px; padding: 0px;\">$width = <span class=\"hljs-number\" style=\"margin: 0px; padding: 0px;\">100, <span class=\"hljs-variable\" style=\"margin: 0px; padding: 0px;\">$height = <span class=\"hljs-number\" style=\"margin: 0px; padding: 0px;\">40, <span class=\"hljs-variable\" style=\"margin: 0px; padding: 0px;\">$font = <span class=\"hljs-keyword\" style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 255);\">null); &nbsp; &nbsp; &nbsp; &nbsp;<span class=\"hljs-comment\" style=\"margin: 0px; padding: 0px; color: green;\">//获取验证码的内容 &nbsp; &nbsp; &nbsp; &nbsp;<span class=\"hljs-variable\" style=\"margin: 0px; padding: 0px;\">$phrase = <span class=\"hljs-variable\" style=\"margin: 0px; padding: 0px;\">$builder-&gt;getPhrase(); &nbsp; &nbsp; &nbsp; &nbsp;<span class=\"hljs-comment\" style=\"margin: 0px; padding: 0px;\">//把内容存入session\r\n &nbsp; &nbsp; &nbsp; &nbsp;Session::flash(<span class=\"hljs-string\" style=\"margin: 0px; padding: 0px; color: rgb(163, 21, 21);\">&#39;milkcaptcha&#39;, <span class=\"hljs-variable\" style=\"margin: 0px; padding: 0px; color: green;\">$phrase); &nbsp; &nbsp; &nbsp; &nbsp;<span class=\"hljs-comment\" style=\"margin: 0px; padding: 0px;\">//生成图片\r\n &nbsp; &nbsp; &nbsp; &nbsp;header(<span class=\"hljs-string\" style=\"margin: 0px; padding: 0px; color: rgb(163, 21, 21);\">&quot;Cache-Control: no-cache, must-revalidate&quot;);\r\n &nbsp; &nbsp; &nbsp; &nbsp;header(<span class=\"hljs-string\" style=\"margin: 0px; padding: 0px;\">&#39;Content-Type: image/jpeg&#39;); &nbsp; &nbsp; &nbsp; &nbsp;<span class=\"hljs-variable\" style=\"margin: 0px; padding: 0px; color: green;\">$builder-&gt;output();\r\n &nbsp; &nbsp;}\r\n\r\n}</span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></code><br style=\"margin: 0px; padding: 0px;\"/><br style=\"margin: 0px; padding: 0px;\"/><br style=\"margin: 0px; padding: 0px;\"/></pre><p style=\"margin: 10px auto; padding: 0px; color: rgb(85, 85, 85); font-family: verdana, &quot;ms song&quot;, 宋体, Arial, 微软雅黑, Helvetica, sans-serif; font-size: 12px; white-space: normal; background-color: rgb(245, 248, 250);\">下面我们可以设置相应的router访问这个验证码图片, 修改router.php：</p><pre name=\"code\" class=\"hljs php\" style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; white-space: pre-wrap; word-wrap: break-word; color: rgb(85, 85, 85); font-size: 12px; background-color: rgb(245, 248, 250);\">Route::get(&#39;kit/captcha/{tmp}&#39;,&nbsp;&#39;KitController@captcha&#39;);</pre><p style=\"margin: 10px auto; padding: 0px; color: rgb(85, 85, 85); font-family: verdana, &quot;ms song&quot;, 宋体, Arial, 微软雅黑, Helvetica, sans-serif; font-size: 12px; white-space: normal; background-color: rgb(245, 248, 250);\">现在可以通过具体的url，可以访问看到这张图片了</p><p><iframe id=\"iframe_0.34501912983832805\" src=\"data:text/html;charset=utf8,%3Cstyle%3Ebody%7Bmargin:0;padding:0%7D%3C/style%3E%3Cimg%20id=%22img%22%20src=%22http://upload-images.jianshu.io/upload_images/279798-5240740e56d6fad6.png?imageMogr2/auto-orient/strip%257CimageView2/2/w/1240/format/jpg&_=5717561%22%20style=%22border:none;max-width:711px%22%3E%3Cscript%3Ewindow.onload%20=%20function%20()%20%7Bvar%20img%20=%20document.getElementById(\'img\');%20window.parent.postMessage(%7BiframeId:\'iframe_0.34501912983832805\',width:img.width,height:img.height%7D,%20\'http://www.cnblogs.com\');%7D%3C/script%3E\" frameborder=\"0\" scrolling=\"no\" style=\"margin: 0px; padding: 0px; border-width: initial; border-style: none; width: 337px; height: 89px;\"></iframe><br style=\"margin: 0px; padding: 0px;\"/></p><p>验证码</p><p style=\"margin: 10px auto; padding: 0px;\">表单内部写的比较简单，看看即可：</p><pre name=\"code\" class=\"hljs xml\" style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; white-space: pre-wrap; word-wrap: break-word;\"><code class=\"xml\" style=\"margin: 0px; padding: 0px;\"><span class=\"hljs-tag\" style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 255);\"><span class=\"hljs-title\" style=\"margin: 0px; padding: 0px; color: rgb(163, 21, 21);\">&lt;form action=&quot;wer_add&quot; method=&quot;get&quot;&gt;<br style=\"margin: 0px; padding: 0px;\"/> &nbsp; &nbsp;&lt;table&gt;<br style=\"margin: 0px; padding: 0px;\"/>&nbsp;&nbsp; &nbsp; &nbsp;用户名： &lt;input type=&quot;text&quot; name=&quot;username&quot;&gt;&lt;br&gt;<br style=\"margin: 0px; padding: 0px;\"/>&nbsp;&nbsp;&nbsp;&nbsp;密码： &lt;input type=&quot;text&quot; name=&quot;password&quot;&gt;&lt;br&gt;<br style=\"margin: 0px; padding: 0px;\"/>&nbsp;&nbsp;&nbsp;&nbsp;11: &lt;input type=&quot;text&quot; name=&quot;captcha&quot;&nbsp; style=&quot;width: 100px; height:20px &quot;&gt;&lt;/br&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&lt;a onclick=&quot;javascript:re_captcha();&quot; &gt;<br style=\"margin: 0px; padding: 0px;\"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;img src=&quot;{{ url(&#39;kit/captcha&#39;,rand()) }}&quot;&nbsp; alt=&quot;验证码&quot; title=&quot;刷新图片&quot; width=&quot;100&quot; height=&quot;40&quot; id=&quot;captcha&quot; border=&quot;0&quot;&gt;<br style=\"margin: 0px; padding: 0px;\"/>&nbsp;&nbsp;&nbsp;&nbsp;&lt;/a&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&lt;br&gt;<br style=\"margin: 0px; padding: 0px;\"/>&nbsp;&nbsp;&nbsp;&nbsp;&lt;input type=&quot;submit&quot; value=&quot;提交&quot;&gt;&nbsp;&nbsp; &nbsp;<br style=\"margin: 0px; padding: 0px;\"/>&nbsp;&nbsp;&lt;/table&gt;<br/>&lt;/form&gt;<br/><span class=\"hljs-tag\" style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 255);\">&lt;<span class=\"hljs-title\" style=\"margin: 0px; padding: 0px; color: rgb(163, 21, 21);\">script&gt;<span class=\"javascript\" style=\"margin: 0px; padding: 0px;\"> &nbsp;\r\n &nbsp;<span class=\"hljs-function\" style=\"margin: 0px; padding: 0px;\"><span class=\"hljs-keyword\" style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 255);\">function <span class=\"hljs-title\" style=\"margin: 0px; padding: 0px; color: rgb(163, 21, 21);\">re_captcha(<span class=\"hljs-params\" style=\"margin: 0px; padding: 0px;\">) {<span class=\"hljs-string\" style=\"margin: 0px; padding: 0px;\">\r\n &nbsp; &nbsp;$url = &quot;{{ url(&#39;kit/captcha&#39;) }}&quot; + <span class=\"hljs-string\" style=\"margin: 0px; padding: 0px;\">&quot;/&quot; + <span class=\"hljs-built_in\" style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 255);\">Math.random();<span class=\"hljs-built_in\" style=\"margin: 0px; padding: 0px;\">document.getElementById(<span class=\"hljs-string\" style=\"margin: 0px; padding: 0px; color: rgb(163, 21, 21);\">&#39;captcha&#39;).src=$url;\r\n &nbsp;}<br/><span class=\"hljs-tag\" style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 255);\">&lt;/<span class=\"hljs-title\" style=\"margin: 0px; padding: 0px; color: rgb(163, 21, 21);\">script&gt;</span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></code><br style=\"margin: 0px; padding: 0px;\"/><br style=\"margin: 0px; padding: 0px;\"/></pre><p style=\"margin: 10px auto; padding: 0px;\">最后就是在form提交页面验证相应验证码，库中也为我们提供了相应方法：</p><pre name=\"code\" class=\"hljs php\" style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; white-space: pre-wrap; word-wrap: break-word;\"><code class=\"php\" style=\"margin: 0px; padding: 0px;\"><span class=\"hljs-variable\" style=\"margin: 0px; padding: 0px; color: green;\"><span class=\"hljs-variable\" style=\"margin: 0px; padding: 0px;\"><span class=\"hljs-string\" style=\"margin: 0px; padding: 0px; color: rgb(163, 21, 21);\">public function wer_add(){<br style=\"margin: 0px; padding: 0px;\"/>&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; $username=Request::input(&quot;username&quot;);<br style=\"margin: 0px; padding: 0px;\"/>&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;$password=Request::input(&quot;password&quot;);<br style=\"margin: 0px; padding: 0px;\"/>&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;//读取验证码<br style=\"margin: 0px; padding: 0px;\"/>&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;$captcha = Session::get(&#39;milkcaptcha&#39;);<br style=\"margin: 0px; padding: 0px;\"/>&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;if(Request::input(&quot;captcha&quot;)==$captcha){<br style=\"margin: 0px; padding: 0px;\"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;$results = DB::select(&#39;select * from v9_admin where username = ? and password = ? &#39;,array($username,$password));<br style=\"margin: 0px; padding: 0px;\"/>&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;<br style=\"margin: 0px; padding: 0px;\"/>&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;if(empty($results)){<br style=\"margin: 0px; padding: 0px;\"/>&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;echo &#39;用户名或密码错误&#39;;<br style=\"margin: 0px; padding: 0px;\"/>&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;}else{<br style=\"margin: 0px; padding: 0px;\"/>&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;$userid=$results[0]-&gt;userid;<br style=\"margin: 0px; padding: 0px;\"/>&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;Session::put(&#39;username&#39;,$username);<br style=\"margin: 0px; padding: 0px;\"/>&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;Session::put(&#39;userid&#39;,$userid);<br style=\"margin: 0px; padding: 0px;\"/>&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;<br style=\"margin: 0px; padding: 0px;\"/>&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;echo &#39;登陆成功&#39;;<br style=\"margin: 0px; padding: 0px;\"/>&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;}<br style=\"margin: 0px; padding: 0px;\"/>&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;}else{<br style=\"margin: 0px; padding: 0px;\"/>&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;echo &#39;验码错误&#39;;<br style=\"margin: 0px; padding: 0px;\"/>&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;}<br style=\"margin: 0px; padding: 0px;\"/>&nbsp;&nbsp; &nbsp;}&nbsp;&nbsp;&nbsp; </span></span></span></code></pre><p style=\"margin: 10px auto; padding: 0px;\">至此，验证码就完成了。 如有疑问，欢迎回复探讨。</p><p><br/></p>',6,87,6,'忆犹',1494224887,1494224887);
/*!40000 ALTER TABLE `web_article` ENABLE KEYS */;

#
# Structure for table "web_article_cate"
#

DROP TABLE IF EXISTS `web_article_cate`;
CREATE TABLE `web_article_cate` (
  `cate_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `cate_name` varchar(32) DEFAULT NULL,
  `order_num` mediumint(8) unsigned DEFAULT '1',
  PRIMARY KEY (`cate_id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

#
# Data for table "web_article_cate"
#

/*!40000 ALTER TABLE `web_article_cate` DISABLE KEYS */;
INSERT INTO `web_article_cate` VALUES (1,'学习笔记',1),(2,'生活随笔',2),(3,'热点分享',3),(4,'Laravel',4),(5,'PHP',5);
/*!40000 ALTER TABLE `web_article_cate` ENABLE KEYS */;

#
# Structure for table "web_carousel_list"
#

DROP TABLE IF EXISTS `web_carousel_list`;
CREATE TABLE `web_carousel_list` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `addtime` int(11) DEFAULT NULL,
  `state` int(11) DEFAULT NULL,
  `orderby` int(5) DEFAULT NULL,
  `note` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

#
# Data for table "web_carousel_list"
#

INSERT INTO `web_carousel_list` VALUES (2,'22222','/carousel/2016-01-20/569f392b01263.jpg',1453275435,1,3,'yh'),(3,'3333','/carousel/2016-01-20/569f39a9c3273.jpg',1453275561,1,1,'yh'),(4,'4444','/carousel/2016-01-20/569f39b4e4e01.jpg',1453275572,1,2,'h'),(5,'55','/carousel/2016-01-22/56a1be75e884c.jpg',1453437948,1,4,'555');

#
# Structure for table "web_link"
#

DROP TABLE IF EXISTS `web_link`;
CREATE TABLE `web_link` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '友情连接id',
  `link_name` varchar(64) NOT NULL DEFAULT '' COMMENT '友情链接名称',
  `link_url` varchar(128) NOT NULL DEFAULT '' COMMENT '友情连接地址',
  `state` tinyint(1) unsigned DEFAULT '8' COMMENT '状态 6 开启 8关闭',
  `create_time` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '添加时间',
  `update_time` int(11) unsigned DEFAULT NULL COMMENT '更新时间',
  `order_num` mediumint(5) unsigned DEFAULT '100' COMMENT '排序',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8 COMMENT='友情连接表';

#
# Data for table "web_link"
#

/*!40000 ALTER TABLE `web_link` DISABLE KEYS */;
INSERT INTO `web_link` VALUES (1,'轮回博客','http://www.tianjianlong.com.cn',6,1430238360,1494301085,21),(17,'Thinkphp','http://www.thinkphp.cn/',6,1494298677,1494298677,1);
/*!40000 ALTER TABLE `web_link` ENABLE KEYS */;

#
# Structure for table "web_liuyan"
#

DROP TABLE IF EXISTS `web_liuyan`;
CREATE TABLE `web_liuyan` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '留言Id',
  `add_time` int(10) NOT NULL COMMENT '留言评论时间',
  `ip` varchar(16) NOT NULL COMMENT '留言评论ip',
  `content` text NOT NULL COMMENT '留言评论内容',
  `username` varchar(32) NOT NULL COMMENT '留言评论作者',
  `photo` text NOT NULL COMMENT '头像',
  `from` varchar(16) NOT NULL COMMENT '留言评论发表端',
  `email` varchar(32) NOT NULL COMMENT '留言评论邮箱',
  `c_photo` text NOT NULL COMMENT '回复头像',
  `c_name` varchar(32) NOT NULL COMMENT '留言回复作者',
  `c_content` text NOT NULL COMMENT '留言回复内容',
  `c_time` int(10) DEFAULT NULL COMMENT '留言回复时间',
  PRIMARY KEY (`id`),
  KEY `c_uname` (`c_name`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=utf8 COMMENT='文章评论表';

#
# Data for table "web_liuyan"
#

/*!40000 ALTER TABLE `web_liuyan` DISABLE KEYS */;
INSERT INTO `web_liuyan` VALUES (11,1451828736,'114.117.190.189','博主网站很漂亮，希望加个友链','破晓起飞','/Public/Home/images/Portrait/47.jpg','Win 7','dawnflyingnow@qq.com','./userimg/2015-11-23/5653291eed25d.jpg','轮回','好的，链接和名称是什么呢',1451829515);
/*!40000 ALTER TABLE `web_liuyan` ENABLE KEYS */;

#
# Structure for table "web_news"
#

DROP TABLE IF EXISTS `web_news`;
CREATE TABLE `web_news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `keyword` varchar(100) DEFAULT NULL,
  `title` varchar(50) DEFAULT NULL,
  `info` text,
  `add_time` varchar(20) DEFAULT NULL,
  `update_time` varchar(20) DEFAULT NULL,
  `image_url` varchar(100) DEFAULT NULL,
  `view` int(11) DEFAULT NULL,
  `cate_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

#
# Data for table "web_news"
#

INSERT INTO `web_news` VALUES (4,'333334444','2016年甘肃省高校毕业生双向选择洽谈会昨开幕 电子商务和创新创业人才受青睐','<p><span style=\"color: rgb(0, 0, 0); font-family: 宋体, serif; font-size: 14px; line-height: 23px; text-align: justify;\">&nbsp; 兰州晚报讯（记者朱浩源文/图）11月7日，由省人力资源市场和省高校毕业生就业办公室联合举办的“第三届大中城市联合招聘高校毕业生专场活动甘肃分会场暨2016年甘肃省高校毕业生双向选择洽谈会”在省高新技术人才市场开幕，来自省内外的157家用人单位，将提供各类就业岗位1.1万个。据了解，这是今年重点针对高校毕业生的第3场大型招聘活动。</span></p><p style=\"padding: 0px 0px 15px; margin-top: 0px; margin-bottom: 0px; font-size: 14px; line-height: 25px; color: rgb(0, 0, 0); font-family: 宋体, serif; text-align: justify; white-space: normal;\">&nbsp;&nbsp;&nbsp;&nbsp;当日上午9时30分，省高新技术人才市场内人头攒动。记者在三楼青海格尔木一家企业招聘展位前看到求职者人满为患。据该单位张经理介绍：“虽说企业地处格尔木市，公司周边条件艰苦，但已有兰州工业学院和兰州资源环境职业技术学院的180多名毕业生投了简历，其中53人达成意向、10人已现场签约。”</p><p style=\"padding: 0px 0px 15px; margin-top: 0px; margin-bottom: 0px; font-size: 14px; line-height: 25px; color: rgb(0, 0, 0); font-family: 宋体, serif; text-align: justify; white-space: normal;\">&nbsp;&nbsp;&nbsp;&nbsp;记者在采访中了解到，与以往招聘会相比，此次招聘会上电子商务和创新创业人才受青睐。据悉，山东省烟台市电子商务产业园招聘30多名电子商务类人才，而山东一些服装、日用品企业也需要大量设计策划及与电子商务相关的毕业生。</p><p style=\"padding: 0px 0px 15px; margin-top: 0px; margin-bottom: 0px; font-size: 14px; line-height: 25px; color: rgb(0, 0, 0); font-family: 宋体, serif; text-align: justify; white-space: normal;\">&nbsp;&nbsp;&nbsp;&nbsp;在招聘会现场，浙江省奉化市大学生创业园展位前，也聚集了不少求职者。一位大学生问：“你们的园区是啥时候建成的，都集中了哪些类型的企业？”这位负责人很耐心地解释说：“奉化市大学生创业园成立于2006年4月，是以市科技创业服务中心为综合管理基地，集中了电子商务、文化创意、软件研发、科技型企业等。”听完后，该大学生说：“我回去好好考虑一下”。</p><p style=\"padding: 0px 0px 15px; margin-top: 0px; margin-bottom: 0px; font-size: 14px; line-height: 25px; color: rgb(0, 0, 0); font-family: 宋体, serif; text-align: justify; white-space: normal;\"><img src=\"http://123.57.146.56:8083/Uploads//images/2015-11-10//5641849f92e7b.jpg\"/></p><p><br/></p>','1447035140','1448376186','./images/2015-11-24/565477562ca10.jpg',21,4);

#
# Structure for table "web_newscate"
#

DROP TABLE IF EXISTS `web_newscate`;
CREATE TABLE `web_newscate` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `catename` varchar(50) DEFAULT NULL,
  `subtitle` varchar(100) DEFAULT NULL,
  `sort` int(11) DEFAULT NULL,
  `note` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

#
# Data for table "web_newscate"
#

INSERT INTO `web_newscate` VALUES (1,'教育','教育',1,'教育教育教育教育教育1'),(2,'政府出台的政策','政府出台的政策',2,'政府出台的政策2'),(3,'货运渠道管理','货运渠道管理',3,'货运渠道管理'),(4,'公益事业','公益事业',4,'公益事业公益事业');

#
# Structure for table "web_notice"
#

DROP TABLE IF EXISTS `web_notice`;
CREATE TABLE `web_notice` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) DEFAULT NULL,
  `info` text,
  `add_time` varchar(15) DEFAULT NULL,
  `update_time` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;

#
# Data for table "web_notice"
#

/*!40000 ALTER TABLE `web_notice` DISABLE KEYS */;
INSERT INTO `web_notice` VALUES (1,'最新消息','服务热线 0931-00000000','1419217076','1420699497');
/*!40000 ALTER TABLE `web_notice` ENABLE KEYS */;

#
# Structure for table "web_qquser"
#

DROP TABLE IF EXISTS `web_qquser`;
CREATE TABLE `web_qquser` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id',
  `qqname` varchar(128) COLLATE utf8_bin NOT NULL COMMENT 'QQ昵称',
  `qqimg` varchar(128) COLLATE utf8_bin NOT NULL COMMENT 'QQ头像',
  `qqnum` int(11) NOT NULL COMMENT '访问次数',
  PRIMARY KEY (`id`),
  KEY `qqimg` (`qqimg`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='QQ表';

#
# Data for table "web_qquser"
#

INSERT INTO `web_qquser` VALUES (11,'|▍ 〃T','http://q.qlogo.cn/qqapp/101250624/1F110AA89270AD8CD65D7D057ADAADCE/100',42);

#
# Structure for table "web_role"
#

DROP TABLE IF EXISTS `web_role`;
CREATE TABLE `web_role` (
  `id` smallint(6) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `pid` smallint(6) DEFAULT NULL,
  `status` tinyint(1) unsigned DEFAULT NULL,
  `remark` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `pid` (`pid`),
  KEY `status` (`status`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

#
# Data for table "web_role"
#

/*!40000 ALTER TABLE `web_role` DISABLE KEYS */;
INSERT INTO `web_role` VALUES (9,'信息管理员',0,1,'负责信息的查询'),(10,'内容管理员',0,1,'负责内容的添加和修改');
/*!40000 ALTER TABLE `web_role` ENABLE KEYS */;

#
# Structure for table "web_role_user"
#

DROP TABLE IF EXISTS `web_role_user`;
CREATE TABLE `web_role_user` (
  `role_id` mediumint(9) unsigned DEFAULT NULL,
  `user_id` char(32) DEFAULT NULL,
  KEY `group_id` (`role_id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

#
# Data for table "web_role_user"
#

/*!40000 ALTER TABLE `web_role_user` DISABLE KEYS */;
INSERT INTO `web_role_user` VALUES (1,'2'),(7,'5'),(1,'3'),(1,'4'),(3,'6'),(9,'7'),(10,'8'),(9,'9'),(12,'10'),(10,'11'),(10,'12'),(10,'13');
/*!40000 ALTER TABLE `web_role_user` ENABLE KEYS */;

#
# Structure for table "web_said"
#

DROP TABLE IF EXISTS `web_said`;
CREATE TABLE `web_said` (
  `s_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '说说逻辑排序',
  `s_content` text NOT NULL COMMENT '说说内容',
  `s_img` varchar(64) DEFAULT NULL,
  `s_from` varchar(16) NOT NULL DEFAULT '1',
  `s_writer` varchar(32) NOT NULL COMMENT '说说作者',
  `s_view` int(11) NOT NULL DEFAULT '1' COMMENT '说说的显推',
  `create_ip` varchar(16) NOT NULL COMMENT '说说ip',
  `create_time` int(10) NOT NULL COMMENT '说说发表时间',
  PRIMARY KEY (`s_id`),
  KEY `s_id` (`s_id`)
) ENGINE=MyISAM AUTO_INCREMENT=69 DEFAULT CHARSET=utf8 COMMENT='说说表';

#
# Data for table "web_said"
#

/*!40000 ALTER TABLE `web_said` DISABLE KEYS */;
INSERT INTO `web_said` VALUES (12,'<p>新增相册评论</p>','./userimg/2015-11-23/5653291eed25d.jpg','Win 8.1','轮回',1,'42.91.163.0',1436574328),(14,'<p>新版bug:百度编辑器图片不能自适应<br/></p>','./userimg/2015-11-23/5653291eed25d.jpg','iPhone','轮回',2,'42.91.163.0',1437008025),(15,'<p>用户体验性优化</p><p>--优化HTML头部SEO 已完成 7.13</p><p>--修复相册显示底部小BUG 7.13</p><p>--完成QQ登陆后评论 已完成 7.14</p><p><span style=\"line-height: normal;\">--QQ互联已完成</span></p><p><span style=\"line-height: normal;\">--微调评论留言样式 已完成 7.15</span></p><p><span style=\"line-height: normal;\">--前后台程序下载模块</span></p><p><span style=\"line-height: normal;\">--文章图片显示微调 适用手机端</span></p><p><span style=\"line-height: normal;\">--优化文章评论头像不显示</span></p><p><span style=\"line-height: normal;\">--优化相册评论</span></p><p><span style=\"line-height: normal;\">--优化评论留言</span></p><p><span style=\"line-height: normal;\">--优化底部相册列表</span></p><p><span style=\"line-height: normal;\">--更新缩略图</span></p><p><span style=\"line-height: normal;\">--优化显示文章缩略图位置的alt title标签</span></p><p><span style=\"line-height: normal;\">--优化修改文章时 &nbsp;文章发表时间 ip 来自保持不更新</span></p><p><span style=\"line-height: normal;\">--优化评论必须昵称和邮箱 QQ登录后自动获取昵称</span></p><p><br/></p>','./userimg/2015-11-23/5653291eed25d.jpg','Win 8.1','轮回',2,'42.91.163.0',1437147308),(18,'<p>添加搜索样式<img src=\"http://img.baidu.com/hi/jx2/j_0002.gif\"/></p>','./userimg/2015-11-23/5653291eed25d.jpg','Win 8.1','轮回',2,'42.91.163.0',1437407843),(19,'<p>优化评论审核<img src=\"http://img.baidu.com/hi/jx2/j_0003.gif\"/></p>','./userimg/2015-11-23/5653291eed25d.jpg','Win 8.1','轮回',2,'42.91.163.0',1437493504),(21,'<p>优化缩略图像素<img src=\"http://img.baidu.com/hi/jx2/j_0002.gif\"/></p>','./userimg/2015-11-23/5653291eed25d.jpg','Win 8.1','轮回',2,'42.91.163.0',1437748814),(23,'<p>添加了推荐图标</p><p>添加了访客模块</p>','./userimg/2015-11-23/5653291eed25d.jpg','Win 8.1','轮回',1,'42.91.172.147',1441379259),(26,'<p>优化相册显示效果</p><p>优化页脚布局</p><p>优化字体显示大小</p>','./userimg/2015-11-23/5653291eed25d.jpg','Win 8.1','轮回',1,'124.152.7.106',1439960844),(27,'<p>添加页面返回顶部小火箭</p><p>修改按钮样式</p>','./userimg/2015-11-23/5653291eed25d.jpg','Win 8.1','轮回',1,'124.152.7.106',1440462560),(28,'<p>修改QQ登录按钮</p><p><br/></p>','./userimg/2015-11-23/5653291eed25d.jpg','Win 8.1','轮回',1,'42.91.172.147',1441379051),(29,'<p>增加Unix时间戳转换工具</p><p>增加CSS代码格式化工具<br/></p>','./userimg/2015-11-23/5653291eed25d.jpg','Win 8.1','轮回',1,'42.91.172.147',1441549446),(30,'<p>增加站长统计</p>','./userimg/2015-11-23/5653291eed25d.jpg','Win 8.1','轮回',1,'124.152.7.106',1441774817),(31,'<p>增加MD5加密工具</p>','./userimg/2015-11-23/5653291eed25d.jpg','Win 8.1','轮回',1,'42.91.172.20',1441808502),(32,'<p>工作太忙了，文章更新要放缓一下了<img src=\"http://img.baidu.com/hi/jx2/j_0010.gif\"/></p>','./userimg/2015-11-23/5653291eed25d.jpg','Win 8.1','轮回',1,'124.152.7.106',1442449852),(33,'<p>增加百度音乐电台<img src=\"http://img.baidu.com/hi/jx2/j_0006.gif\"/></p>','./userimg/2015-11-23/5653291eed25d.jpg','Win 8.1','轮回',1,'124.152.7.106',1445588489),(38,'<p>后台终于更新了，全新的模板及功能。欢迎大家评测哈。<img src=\"http://img.baidu.com/hi/jx2/j_0011.gif\"/></p>','./userimg/2015-11-23/5653291eed25d.jpg','Win 8.1','轮回',1,'124.152.7.106',1447163667),(59,'<p>增加二维码在线生成工具<img src=\"http://img.baidu.com/hi/jx2/j_0028.gif\"/></p>','./userimg/2015-11-24/56544e5041fab.png','iPhone6 plus','田建',1,'42.91.172.147',1451398645),(60,'<p>在百度编辑器添加的内容在页面调用出现p标签的解决办法：</p><p>{$detail.content|htmlspecialchars_decode|stripslashes}</p>','./userimg/2015-11-23/5653291eed25d.jpg','Win 8.1','田建龙',1,'42.91.172.147',1451473442),(61,'<p>添加了代码高亮插件，以后看代码就不用那么费劲了<img src=\"http://img.baidu.com/hi/tsj/t_0019.gif\"/></p>','./userimg/2015-11-23/5653291eed25d.jpg','Win 8.1','田建龙',1,'42.91.172.147',1451473481),(62,'<p>thinkphp字符串截取</p><p>{$vo.s_content|strip_tags|mb_substr=0,40,&#39;UTF-8&#39;}</p>','./userimg/2015-11-23/5653291eed25d.jpg','Win 8.1','轮回',1,'124.152.7.106',1451473482),(63,'<p>增加了文章缩略图当鼠标移动上去的样式，有喜欢的朋友可以自己研究哦</p><p>不废话，直接上代码：</p><p style=\"line-height: 16px;\"><img style=\"vertical-align: middle; margin-right: 2px;\" src=\"http://tianjianlong.com.cn/Public/Ueditor/dialogs/attachment/fileTypeImages/icon_rar.gif\"/><a style=\"font-size:12px; color:#0066cc;\" href=\"/ueditor/php/upload/file/20151110/1447163373834936.zip\" title=\"css3hover.zip\">css3hover.zip</a></p><p><br/></p>','./userimg/2015-11-23/5653291eed25d.jpg','Win 8.1','轮回',1,'124.152.7.106',1451473483),(64,'<p>最近在一直忙着做新博客，后台已经完成了是基于H+模板开发的，前台使用的拼图模板，很快就会与大家见面的哦。。。。</p>','./userimg/2015-11-23/5653291eed25d.jpg','Win 8.1','轮回',1,'124.152.7.106',1451473484),(67,'<p>新版博客已上线，当然还有很多bug，继续优化.....</p>','./userimg/2015-11-23/5653291eed25d.jpg','Win 8.1','轮回',1,'124.152.7.106',1451894475),(68,'<p>新版本已经开源免费下载，有问题可以给我留言或者进群（151529697）交流哦！！！</p>','./userimg/2015-11-23/5653291eed25d.jpg','Win 8.1','轮回',1,'124.152.7.106',1452759026);
/*!40000 ALTER TABLE `web_said` ENABLE KEYS */;

#
# Structure for table "web_site"
#

DROP TABLE IF EXISTS `web_site`;
CREATE TABLE `web_site` (
  `site_id` smallint(6) unsigned NOT NULL AUTO_INCREMENT,
  `site_key` varchar(32) DEFAULT NULL COMMENT '字段名',
  `site_value` varchar(255) DEFAULT NULL COMMENT '字段值',
  `site_type` tinyint(1) unsigned DEFAULT NULL COMMENT '6 文字 8图片',
  `site_key_desc` varchar(32) DEFAULT NULL COMMENT '字段描述',
  PRIMARY KEY (`site_id`),
  UNIQUE KEY `site_key` (`site_key`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COMMENT='网站配置';

#
# Data for table "web_site"
#

/*!40000 ALTER TABLE `web_site` DISABLE KEYS */;
INSERT INTO `web_site` VALUES (1,'site_name','忆犹博客',6,'网站名称'),(2,'site_url','127.0.0.1',6,'URL地址'),(3,'site_seo','忆犹,忆犹博客,博客,技术分享,分享',6,'SEO关键字'),(4,'site_desc','技术分享博客系统',6,'网站描述信息'),(5,'site_contact_qq','2380840395',6,'联系QQ'),(6,'site_mobile','1830280****',6,'联系电话'),(7,'site_copyright','Copyright © 2016 - 2017 忆犹博客  & 版权所有',6,'版权信息'),(8,'site_keep_record','<a href=\"http://www.miitbeian.gov.cn/\" class=\"foot-my\" target=\"_blank\">陇ICP备15002349号-1</a>',6,'备案信息'),(9,'site_logo','uploads/Site/2017-04-18-11-42-02-58f58b0a7331b.png',8,'网站Logo（180*40）');
/*!40000 ALTER TABLE `web_site` ENABLE KEYS */;

#
# Structure for table "web_tradead"
#

DROP TABLE IF EXISTS `web_tradead`;
CREATE TABLE `web_tradead` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `shopid` int(11) NOT NULL COMMENT '商户ID',
  `mode` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# Data for table "web_tradead"
#


#
# Structure for table "web_treenode"
#

DROP TABLE IF EXISTS `web_treenode`;
CREATE TABLE `web_treenode` (
  `id` int(11) NOT NULL,
  `title` varchar(50) DEFAULT NULL COMMENT '名称',
  `g` varchar(50) DEFAULT NULL COMMENT '分组名称',
  `m` varchar(50) DEFAULT NULL COMMENT '模块名称',
  `a` varchar(50) DEFAULT NULL COMMENT 'action 名称',
  `ico` varchar(50) DEFAULT NULL COMMENT '图标',
  `pid` int(11) DEFAULT NULL COMMENT '0',
  `level` tinyint(4) DEFAULT '1' COMMENT '层级 1,2,3',
  `menuflag` tinyint(4) DEFAULT '1' COMMENT '0: 否 1 是',
  `sort` int(11) DEFAULT '0' COMMENT '排序',
  `single` tinyint(4) DEFAULT '1' COMMENT '是否单节点 0:否 1 是',
  `remark` varchar(255) DEFAULT NULL,
  `status` tinyint(4) DEFAULT '1' COMMENT '0 停用 1 启用',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

#
# Data for table "web_treenode"
#

/*!40000 ALTER TABLE `web_treenode` DISABLE KEYS */;
INSERT INTO `web_treenode` VALUES (1,'WIFI管理','admin','','',NULL,0,1,0,0,1,NULL,1),(2,'首页','admin','index','index','fa fa-home',1,2,1,0,1,NULL,1),(3,'密码修改','admin','index','pwd','',2,3,0,0,1,NULL,1),(100,'系统管理','admin','system','','fa fa-gears',1,2,1,0,0,NULL,1),(101,'角色管理','admin','system','role',NULL,100,2,1,0,1,NULL,1),(102,'添加角色','admin','system','addrole',NULL,100,2,0,0,1,NULL,1),(103,'编辑角色','admin','system','editrole',NULL,100,3,0,0,1,NULL,1),(104,'角色权限','admin','system','roleaccess',NULL,100,3,0,0,1,NULL,1),(105,'用户管理','admin','system','userlist',NULL,100,2,1,0,1,NULL,1),(106,'添加用户','admin','system','adduser',NULL,100,3,0,0,1,NULL,1),(108,'删除用户','admin','system','deluser',NULL,100,3,0,0,1,NULL,1),(109,'删除角色','admin','system','delrole',NULL,100,3,0,0,1,NULL,1),(200,'网站管理','admin','site','','fa fa-envelope',1,1,1,0,0,NULL,1),(201,'网站设置','admin','site','index',NULL,200,3,1,0,1,NULL,1),(203,'轮播管理','admin','system','carousel_list','',100,3,1,0,1,'',1),(307,'广告管理','admin','advert','index','fa fa-cloud',1,1,1,9,0,NULL,1),(308,'添加广告类型','admin','advert','addtype',NULL,307,3,0,0,1,NULL,1),(309,'编辑广告类型','admin','advert','edittype',NULL,307,3,0,1,1,NULL,1),(430,'删除广告类型','admin','advert','deltype',NULL,307,3,0,2,1,NULL,1),(431,'分类管理','admin','advert','indextype',NULL,307,3,1,3,1,NULL,1),(432,'添加广告','admin','advert','add',NULL,307,3,0,4,1,NULL,1),(433,'编辑广告','admin','advert','edit',NULL,307,3,0,5,1,NULL,1),(434,'删除广告','admin','advert','del',NULL,307,3,0,6,1,NULL,1),(435,'广告管理','admin','advert','index',NULL,307,3,1,7,1,NULL,1),(700,'新闻管理','admin','news','','fa fa-flask',1,1,1,0,0,'',1),(701,'系统消息','admin','system','indexnotice','',100,3,1,0,1,'',1),(702,'添加系统消息','admin','system','addnotice','',100,3,0,2,1,'',1),(703,'删除系统消息','admin','system','delnotice','',100,3,0,3,1,'',1),(704,'编辑系统消息','admin','system','editnotice','',100,3,0,4,1,'',1),(705,'新闻管理','admin','news','index','',700,3,1,4,1,'',1),(706,'添加新闻','admin','news','add','',700,3,0,5,1,'',1),(707,'编辑新闻','admin','news','edit',NULL,700,3,0,0,1,NULL,1),(708,'删除新闻','admin','news','del',NULL,700,3,0,0,1,NULL,1),(709,'新闻分类','admin','news','newscate',NULL,700,3,1,0,1,NULL,1),(710,'添加新闻分类','admin','news','addcate',NULL,700,3,0,0,1,NULL,1),(711,'编辑新闻分类','admin','news','editcate',NULL,700,3,0,0,1,NULL,1),(712,'删除新闻分类','admin','news','delcate',NULL,700,3,0,0,1,NULL,1),(720,'说说管理','admin','said','index','fa fa-comments',1,1,1,0,0,NULL,1),(721,'说说管理','admin','said','index',NULL,720,1,1,0,1,NULL,1),(722,'发布说说','admin','said','add',NULL,720,1,0,0,1,NULL,1),(723,'编辑说说','admin','said','edit',NULL,720,1,0,0,1,NULL,1),(724,'删除说说','admin','said','del',NULL,720,1,0,0,1,NULL,1),(730,'留言管理','admin','liuyan','index','fa fa-thumbs-up',1,1,1,0,0,NULL,1),(731,'留言管理','admin','liuyan','index',NULL,730,1,1,0,1,NULL,1),(732,'编辑留言','admin','liuyan','edit',NULL,730,1,0,0,1,NULL,1),(733,'删除留言','admin','liuyan','del',NULL,730,1,0,0,1,NULL,1),(740,'链接管理','admin','link','index','fa fa-link',1,1,1,0,0,NULL,1),(741,'链接管理','admin','link','index',NULL,740,1,1,0,1,NULL,1),(742,'添加链接','admin','link','add',NULL,740,1,0,0,1,NULL,1),(743,'编辑链接','admin','link','edit',NULL,740,1,0,0,1,NULL,1),(744,'删除链接','admin','link','del',NULL,740,1,0,0,1,NULL,1),(800,'文章管理','admin','article','index','fa fa-paste',1,1,1,0,0,NULL,1),(801,'文章分类','admin','article','indextype',NULL,800,1,1,0,1,NULL,1),(802,'文章管理','admin','article','index',NULL,800,1,1,0,1,NULL,1),(803,'添加分类','admin','article','addtype',NULL,1015,1,0,0,1,NULL,1),(804,'编辑分类','admin','article','addtype',NULL,1015,1,0,0,1,NULL,1),(805,'删除分类','admin','article','addtype',NULL,1015,1,0,0,1,NULL,1),(806,'添加文章','admin','article','addtype',NULL,1015,1,0,0,1,NULL,1),(808,'编辑文章','admin','article','addtype',NULL,1015,1,0,0,1,NULL,1),(809,'删除文章','admin','article','addtype',NULL,1015,1,0,0,1,NULL,1);
/*!40000 ALTER TABLE `web_treenode` ENABLE KEYS */;

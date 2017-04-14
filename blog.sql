# Host: localhost  (Version: 5.5.53)
# Date: 2017-04-13 15:38:54
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
INSERT INTO `web_admin` VALUES (1,'轮回爱奇艺','admin','54c3fae5ebdb70299d431aa6c1f7fe1e6327503b','/pulibc/uploads/userimg/2015-11-23/56532a63c80e7.jpg',10,'超级管理员','1389750196','1478619557',1,'127.0.0.1','1478619473'),(14,'起','lunhuis','ac9bbede048b7e3817ce2a9afdc3e721','uploads/userimg/2015-11-23/56532a63c80e7.jpg',0,'超级管理员','1389750196','1478619557',1,'127.0.0.1','1479215132');
/*!40000 ALTER TABLE `web_admin` ENABLE KEYS */;

#
# Structure for table "web_advert"
#

DROP TABLE IF EXISTS `web_advert`;
CREATE TABLE `web_advert` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `subtitle` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `info` text COLLATE utf8_unicode_ci,
  `clickcount` int(11) DEFAULT NULL,
  `addtime` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `updatetime` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `state` tinyint(4) DEFAULT NULL,
  `imageurl` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `linker` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `adverttype` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# Data for table "web_advert"
#

INSERT INTO `web_advert` VALUES (19,'中山美食城','超级聚餐','&lt;p&gt;&lt;img src=&quot;http://123.57.146.56:8083/Uploads//images/2015-11-10//56415921685a9.jpg&quot; _src=&quot;http://123.57.146.56:8083/Uploads//images/2015-11-10//56415921685a9.jpg&quot;/&gt;&lt;/p&gt;&lt;p&gt;\r\n\t中山美食城&lt;/p&gt;&lt;p&gt;\r\n\t地址：兰州市城关区中山路151号&lt;/p&gt;&lt;p&gt;\r\n\tTEL：2155808&lt;/p&gt;',109,'1427419333','1447123237',1,'./images/2015-11-10/56415916015ff.jpg','18919830050','18919830050','888',6),(20,'伊和园清真美食','西关','&lt;p&gt;18919830050&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;http://123.57.146.56:8083/Uploads//images/2015-11-10//5641596c51594.jpg&quot; _src=&quot;http://123.57.146.56:8083/Uploads//images/2015-11-10//5641596c51594.jpg&quot;/&gt;&lt;/p&gt;',25,'1427400447','1447123373',1,'./images/2015-11-10/56415962b0bb2.jpg','18919830050','18919830050','18919830050',6),(21,'锅来锅往','海鲜火锅','<p><img src=\"http://123.57.146.56:8083/Uploads//images/2015-11-10//56415a7167d43.jpg\"/></p><p>费家营十字</p>',25,'1427400877','1450879448',1,'','小周','15682898182','费家营十字',6),(22,'ggegrger','gergergerger','<p>ergergerg</p>',0,'1450878410','1450878410',1,'','ergerg','erger','gergerger',2),(23,'555','55555','<p>555555555555555</p>',0,'1451125426','1451125426',1,'./images/2015-12-26/567e6a9e5f969.png','555555','15682898182','555555',4),(24,'grtgrtg','rtgrtgrtgr','<p>gtrgrtgrtgrt</p>',0,'1452994070','1452994070',1,'./images/2016-01-17/569aee0ec6b5f.jpg','tgrt','grtgrtgrt','grtgtr',5);

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
  `a_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '文章逻辑ID',
  `photo` varchar(64) DEFAULT '' COMMENT '文章图片',
  `a_title` varchar(128) NOT NULL COMMENT '文章标题',
  `a_remark` varchar(256) DEFAULT '' COMMENT '文章描述',
  `a_keyword` varchar(32) DEFAULT '' COMMENT '文章关键字',
  `cate_id` int(11) NOT NULL DEFAULT '1' COMMENT '文章类别',
  `create_time` int(10) NOT NULL COMMENT '文章发表时间',
  `last_time` int(10) DEFAULT NULL,
  `a_content` text NOT NULL COMMENT '文章内容',
  `a_views` int(11) NOT NULL DEFAULT '1' COMMENT '文章是否置顶',
  `a_type` int(1) NOT NULL DEFAULT '1' COMMENT '文章点击量',
  `a_red` int(1) DEFAULT '0',
  `a_from` varchar(16) NOT NULL DEFAULT '1',
  `a_writer` varchar(64) NOT NULL COMMENT '作者',
  `create_ip` varchar(16) NOT NULL,
  PRIMARY KEY (`a_id`),
  KEY `a_title` (`a_title`)
) ENGINE=MyISAM AUTO_INCREMENT=58 DEFAULT CHARSET=utf8 COMMENT='文章表';

#
# Data for table "web_article"
#

/*!40000 ALTER TABLE `web_article` DISABLE KEYS */;
INSERT INTO `web_article` VALUES (4,'./images/2016-01-04/5689ced6df25d.jpg','Thinkphp常用配置','Thinkphp常用配置 \r\nCHECK_FILE_CASE -- windows环境下面的严格检查大小写。','Thinkphp',5,1441378213,1452229154,'<p>测试文章</p>',391,0,1,'Win 8.1','轮回','124.152.7.106');
/*!40000 ALTER TABLE `web_article` ENABLE KEYS */;

#
# Structure for table "web_article_cate"
#

DROP TABLE IF EXISTS `web_article_cate`;
CREATE TABLE `web_article_cate` (
  `cate_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `cate_name` varchar(32) DEFAULT NULL,
  `orderby` tinyint(3) DEFAULT '100',
  PRIMARY KEY (`cate_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

#
# Data for table "web_article_cate"
#

/*!40000 ALTER TABLE `web_article_cate` DISABLE KEYS */;
INSERT INTO `web_article_cate` VALUES (1,'学习笔记',1),(2,'生活随笔',2),(3,'热点分享',3),(4,'.NET',4),(5,'PHP',5),(6,'Java',6);
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
  `name` varchar(64) NOT NULL COMMENT '友情链接名称',
  `url` varchar(128) NOT NULL COMMENT '友情连接地址',
  `state` int(1) DEFAULT NULL,
  `create_time` int(11) NOT NULL COMMENT '添加时间',
  `update_time` int(11) DEFAULT NULL,
  `orderby` int(5) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COMMENT='友情连接表';

#
# Data for table "web_link"
#

/*!40000 ALTER TABLE `web_link` DISABLE KEYS */;
INSERT INTO `web_link` VALUES (1,'轮回博客','http://www.tianjianlong.com.cn',1,1430238360,1451749853,2);
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

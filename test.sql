/*
SQLyog Ultimate v12.08 (64 bit)
MySQL - 5.5.53-log : Database - test
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`test` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `test`;

/*Table structure for table `about` */

DROP TABLE IF EXISTS `about`;

CREATE TABLE `about` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` text COMMENT '具体内容',
  `time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

/*Data for the table `about` */

insert  into `about`(`id`,`content`,`time`) values (1,'<p>ATI 工业自动化是世界领先的机器人附属产品和机械手臂工具的工程研发公司，产品包括自动工具快换装置，多轴力/力矩传感器系统，机器人毛刺清理工具，机器人防碰撞传感器，旋转连接器和顺从装置。我们的机器人末端执行器产品成功的应用在全球数千例不同的应用中。 自1989年起，ATI开始致力于优质优质高效的机器人末端执行工具的研发制造。我们的不懈努力成就了业内最可靠、最具柔性的机器人末端执行工具。 ATI产品的质量和可靠性为客户所认可，提高了许多行业的生产效率，如机器人、航空航天、生物医学、汽车、电子、应用研究、学术、核能以及政府机构。我们通过了ISO9001体系认证，是NAVECO、长城汽车、一汽轿车、长安汽车、吉利汽车、通用、福特、戴姆勒、宝马、本田、丰田、日产、雷诺等汽车厂的工具快换装置(换枪盘)全球供应商；ATI是FUNAC、KUKA、ABB、COMAU、MOTOMAN、NACHI等品牌机器人的合作伙伴。</p>','2019-07-08 11:28:03');

/*Table structure for table `admin` */

DROP TABLE IF EXISTS `admin`;

CREATE TABLE `admin` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) DEFAULT NULL COMMENT '管理员名称',
  `password` char(32) DEFAULT NULL COMMENT '管理员密码',
  `time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;

/*Data for the table `admin` */

insert  into `admin`(`id`,`username`,`password`,`time`) values (2,'admin','123456','2019-07-08 11:28:10'),(20,'admin111','123456','2019-07-08 11:28:13'),(25,'qqq','615203','2019-07-08 11:28:16'),(21,'TiAmo','615203','2019-07-09 11:08:34');

/*Table structure for table `case` */

DROP TABLE IF EXISTS `case`;

CREATE TABLE `case` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL COMMENT '主题',
  `translate` varchar(255) DEFAULT NULL COMMENT '翻译',
  `bg_url` varchar(255) DEFAULT NULL COMMENT '背景图地址',
  `img_url` varchar(255) DEFAULT NULL COMMENT '内容图地址',
  `content` text COMMENT '具体内容',
  `time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

/*Data for the table `case` */

insert  into `case`(`id`,`title`,`translate`,`bg_url`,`img_url`,`content`,`time`) values (1,'汽车制造','Robot deburring tool','img/product-list-1.jpg','img/brand_pic.jpg','<p>\r\n                   ATI提供每周7天，每天24小时的免费技术支持服务； \r\n                     ATI向客户分享每年行业内最新的应用技术。 \r\n                    充足的库存-准时交货：\r\n                     三个工厂的同时生产满足客户需求 \r\n                     充足的零件、组件和成品库存\r\n                     北京、上海、重庆应急库存备件 \r\n                     货期特殊要求时，提供订单加急服务 \r\n                    完善的质保：\r\n                     基于ATI工具快换装置近25年的应用和用户的反馈，ATI提供快 换本体夫人3年质保服务，3年内因产品设计和加工缺陷的原因，ATI负责维修或更换新的产品； \r\n                     提供产品售前、售中、售后的免费培训服务和安装调试指导；\r\n                    免费的产品定制服务：\r\n                     ATI的100余名研发工程师为客户提供免费的产品定制服务； \r\n\r\n                    \r\n                </p>','2019-07-08 11:28:25'),(2,'医疗','Heavy Automation Tool Change','img/product-list-2.jpg','img/brand_pic.jpg','<p>\r\n                   ATI提供每周7天，每天24小时的免费技术支持服务； \r\n                     ATI向客户分享每年行业内最新的应用技术。 \r\n                    充足的库存-准时交货：\r\n                     三个工厂的同时生产满足客户需求 \r\n                     充足的零件、组件和成品库存\r\n                     北京、上海、重庆应急库存备件 \r\n                     货期特殊要求时，提供订单加急服务 \r\n                    完善的质保：\r\n                     基于ATI工具快换装置近25年的应用和用户的反馈，ATI提供快 换本体夫人3年质保服务，3年内因产品设计和加工缺陷的原因，ATI负责维修或更换新的产品； \r\n                     提供产品售前、售中、售后的免费培训服务和安装调试指导；\r\n                    免费的产品定制服务：\r\n                     ATI的100余名研发工程师为客户提供免费的产品定制服务； \r\n\r\n                    \r\n                </p>','2019-07-08 11:28:28'),(3,'航空','Robot deburring tool','img/product-list-1.jpg','img/brand_pic.jpg','<p>\r\n                   ATI提供每周7天，每天24小时的免费技术支持服务； \r\n                     ATI向客户分享每年行业内最新的应用技术。 \r\n                    充足的库存-准时交货：\r\n                     三个工厂的同时生产满足客户需求 \r\n                     充足的零件、组件和成品库存\r\n                     北京、上海、重庆应急库存备件 \r\n                     货期特殊要求时，提供订单加急服务 \r\n                    完善的质保：\r\n                     基于ATI工具快换装置近25年的应用和用户的反馈，ATI提供快 换本体夫人3年质保服务，3年内因产品设计和加工缺陷的原因，ATI负责维修或更换新的产品； \r\n                     提供产品售前、售中、售后的免费培训服务和安装调试指导；\r\n                    免费的产品定制服务：\r\n                     ATI的100余名研发工程师为客户提供免费的产品定制服务； \r\n\r\n                    \r\n                </p>','2019-07-08 11:28:31'),(4,'机器人工具快换工具','Heavy Automation Tool Change','img/product-list-2.jpg','img/brand_pic.jpg','<p>\r\n                   ATI提供每周7天，每天24小时的免费技术支持服务； \r\n                     ATI向客户分享每年行业内最新的应用技术。 \r\n                    充足的库存-准时交货：\r\n                     三个工厂的同时生产满足客户需求 \r\n                     充足的零件、组件和成品库存\r\n                     北京、上海、重庆应急库存备件 \r\n                     货期特殊要求时，提供订单加急服务 \r\n                    完善的质保：\r\n                     基于ATI工具快换装置近25年的应用和用户的反馈，ATI提供快 换本体夫人3年质保服务，3年内因产品设计和加工缺陷的原因，ATI负责维修或更换新的产品； \r\n                     提供产品售前、售中、售后的免费培训服务和安装调试指导；\r\n                    免费的产品定制服务：\r\n                     ATI的100余名研发工程师为客户提供免费的产品定制服务； \r\n\r\n                    \r\n                </p>','2019-07-08 11:28:33'),(5,'机器人毛刺清理工具','Heavy Automation Tool Change','img/product-list-1.jpg','img/brand_pic.jpg','<p>\r\n                   ATI提供每周7天，每天24小时的免费技术支持服务； \r\n                     ATI向客户分享每年行业内最新的应用技术。 \r\n                    充足的库存-准时交货：\r\n                     三个工厂的同时生产满足客户需求 \r\n                     充足的零件、组件和成品库存\r\n                     北京、上海、重庆应急库存备件 \r\n                     货期特殊要求时，提供订单加急服务 \r\n                    完善的质保：\r\n                     基于ATI工具快换装置近25年的应用和用户的反馈，ATI提供快 换本体夫人3年质保服务，3年内因产品设计和加工缺陷的原因，ATI负责维修或更换新的产品； \r\n                     提供产品售前、售中、售后的免费培训服务和安装调试指导；\r\n                    免费的产品定制服务：\r\n                     ATI的100余名研发工程师为客户提供免费的产品定制服务； \r\n\r\n                    \r\n                </p>','2019-07-08 11:28:36'),(7,'11','11','img/20150518205559535953.png','img/','<p>11</p>','2019-07-09 10:53:08');

/*Table structure for table `contact` */

DROP TABLE IF EXISTS `contact`;

CREATE TABLE `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` text COMMENT '具体内容',
  `time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

/*Data for the table `contact` */

insert  into `contact`(`id`,`content`,`time`) values (1,'<p><iframe src=\"http://j.map.baidu.com/NTmUI\" frameborder=\"0\" style=\"width:100%;height:362px;\"></iframe></p><p><span style=\"color: rgb(227, 108, 9);\"><strong>美国ATI工业自动化有限公司北京代表处</strong></span></p><p>北京市朝阳区利泽东园308号博泰嘉华东侧109室</p><p>邮编：100102</p><p>电话：+86 10-8479 8766</p><p>传真：+86 10-6356 3523</p><p>邮箱：china@ati-ia.com&nbsp;</p><p>网址：<a href=\"http://www.ati-ia.com\">www.ati-ia.com</a></p><hr/><p><span style=\"color: rgb(227, 108, 9);\">上海办事处</span></p><p>上海市闵行区漕宝路1467弄九歌花园25号702室</p><p>电话：+86 21-54293081</p><p>邮编：201101</p><p><br/></p>','2019-07-08 05:39:59');

/*Table structure for table `exhibition` */

DROP TABLE IF EXISTS `exhibition`;

CREATE TABLE `exhibition` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL COMMENT '主题',
  `date` varchar(255) DEFAULT NULL COMMENT '日期',
  `place` varchar(255) DEFAULT NULL COMMENT '地点',
  `time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

/*Data for the table `exhibition` */

insert  into `exhibition`(`id`,`title`,`date`,`place`,`time`) values (1,'SIAF广州国际工业自动化技术及装备展览会','2017年3月1日-3日，中国·广州','$exhibition.place','2019-07-09 10:26:24'),(2,'SIAF广州国际工业自动化技术及装备展览会','2017年3月1日-3日，中国·广州','中国进出口商品交易会展馆 ATI展位：2.1馆B27展位','2019-07-08 11:28:53');

/*Table structure for table `join` */

DROP TABLE IF EXISTS `join`;

CREATE TABLE `join` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `engineer` varchar(255) CHARACTER SET utf8mb4 DEFAULT NULL COMMENT '工程师名字',
  `salary` varchar(255) CHARACTER SET utf8mb4 DEFAULT NULL COMMENT '工资',
  `place` varchar(255) CHARACTER SET utf8mb4 DEFAULT NULL COMMENT '地点',
  `experience` varchar(255) CHARACTER SET utf8mb4 DEFAULT NULL COMMENT '经验',
  `duty` text CHARACTER SET utf8mb4 COMMENT '职责',
  `time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

/*Data for the table `join` */

insert  into `join`(`id`,`engineer`,`salary`,`place`,`experience`,`duty`,`time`) values (1,'神','4000','上海','4年','godlike','2019-07-08 11:25:00'),(2,'方案工程师','面议','上海','1-3年/本科','负责服务集群的部署，监控，保证后端服务稳定运行； 负责数据库的架构设计，性能优化，集群扩容，数据备份迁移； 负责微服务集群/数据中心集群的物理资源监控； 负责服务集群的日常维护','2019-07-08 11:29:00'),(3,'销售工程师','面议','上海','1-3年/本科','负责服务集群的部署，监控，保证后端服务稳定运行； 负责数据库的架构设计，性能优化，集群扩容，数据备份迁移； 负责微服务集群/数据中心集群的物理资源监控； 负责服务集群的日常维护','2019-07-08 11:29:02'),(4,'工程师','2102','上海','4年','编程','2019-07-08 11:27:50');

/*Table structure for table `product` */

DROP TABLE IF EXISTS `product`;

CREATE TABLE `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL COMMENT '主题',
  `translate` varchar(255) DEFAULT NULL COMMENT '翻译',
  `bg_url` varchar(255) DEFAULT NULL COMMENT '背景图地址',
  `img_url` varchar(255) DEFAULT NULL COMMENT '内容图地址',
  `video` varchar(255) DEFAULT NULL COMMENT '视频地址',
  `content` text COMMENT '具体内容',
  `time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

/*Data for the table `product` */

insert  into `product`(`id`,`title`,`translate`,`bg_url`,`img_url`,`video`,`content`,`time`) values (1,'机器人工具快换工具','Heavy Automation Tool Changer','img/product-list-2.jpg','img/video-poster.jpg','video/video.mp4','<p>\n                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;ATI柔性机器人毛刺清理工具和精加工产品拥有专利技术，坚固耐用，可用于多种不同材料的毛刺清理和加工，也可应用于非机器人领域。与传统打磨工具相比，ATI打磨工具具有柔性顺从补偿装置，柔性补偿功能允许清理工具对于部件的位置或机器人路径发生变化时能否快速的契合加工部件外形，降低调试难度，使复杂曲面毛刺清理更加简洁便利，同时减少工作时间。\n                </p>\n                <p>\n                    ATI毛刺清理工具在世界范围内得到广泛的应用，匹配机械手去除铝轮毂、变频器壳、同步器壳、同步器齿毂、轴承盖、缸体、阀体、阀盖、输出轴、发动机齿轮等工件的毛刺。\n                </p>\n                <p>\n                    ATI的工程师开发了三种类型的顺从毛刺清理工具，使得自动毛刺清理单元更为安全、一致性和经济。\n                </p>\n                <p>\n                    &nbsp; &nbsp; &nbsp; 径向顺从毛刺清理工具（RC系列），也被称为Flexdeburr，这种毛刺清理工具采用高强度涡轮气动马达，适用于机器人或者CNC机床去除各种材质的毛刺的应用。\n                </p>\n                <p>\n                    &nbsp; &nbsp; &nbsp; 轴向顺从毛刺清理工具（AC系列），也被称为Speedeburr，这种毛刺清理工具采用叶片式气功马达和浮动的旋转刀头，在轴向提供浮动补偿，能有效减少高达75%的机器人试教时间，特别适用于机器人去边缘毛刺和倒角作业。\n                </p>\n                <p>\n                    更多产品型号和产品技术信息，请直接联系我们！\n                </p>\n                <p>\n                    <br/>\n                </p>','2019-07-08 11:29:12'),(2,'机器人毛刺清理工具','Robot deburring tool','img/product-list-1.jpg','img/video-poster.jpg','video/video.mp4','<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;ATI柔性机器人毛刺清理工具和精加工产品拥有专利技术，坚固耐用，可用于多种不同材料的毛刺清理和加工，也可应用于非机器人领域。与传统打磨工具相比，ATI打磨工具具有柔性顺从补偿装置，柔性补偿功能允许清理工具对于部件的位置或机器人路径发生变化时能否快速的契合加工部件外形，降低调试难度，使复杂曲面毛刺清理更加简洁便利，同时减少工作时间。</p><p>ATI毛刺清理工具在世界范围内得到广泛的应用，匹配机械手去除铝轮毂、变频器壳、同步器壳、同步器齿毂、轴承盖、缸体、阀体、阀盖、输出轴、发动机齿轮等工件的毛刺。</p><p>ATI的工程师开发了三种类型的顺从毛刺清理工具，使得自动毛刺清理单元更为安全、一致性和经济。</p><p>&nbsp; &nbsp; &nbsp; 径向顺从毛刺清理工具（RC系列），也被称为Flexdeburr，这种毛刺清理工具采用高强度涡轮气动马达，适用于机器人或者CNC机床去除各种材质的毛刺的应用。</p><p>&nbsp; &nbsp; &nbsp; 轴向顺从毛刺清理工具（AC系列），也被称为Speedeburr，这种毛刺清理工具采用叶片式气功马达和浮动的旋转刀头，在轴向提供浮动补偿，能有效减少高达75%的机器人试教时间，特别适用于机器人去边缘毛刺和倒角作业。</p><p>更多产品型号和产品技术信息，请直接联系我们！</p><p><br/></p>','2019-07-08 03:59:48'),(7,'45','12','img/','img/20150518205559535953.png','video/','','2019-07-09 10:17:05'),(6,'125','12','img/aboutbg.jpg','img/','video/video.mp4','<p>12</p>','2019-07-09 10:11:46');

/*Table structure for table `science` */

DROP TABLE IF EXISTS `science`;

CREATE TABLE `science` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL COMMENT '主题',
  `content` text COMMENT '具体内容',
  `time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;

/*Data for the table `science` */

insert  into `science`(`id`,`title`,`content`,`time`) values (1,'常用机器人的和机器人术语','<p>\r\n                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;ATI柔性机器人毛刺清理工具和精加工产品拥有专利技术，坚固耐用，可用于多种不同材料的毛刺清理和加工，也可应用于非机器人领域。与传统打磨工具相比，ATI打磨工具具有柔性顺从补偿装置，柔性补偿功能允许清理工具对于部件的位置或机器人路径发生变化时能否快速的契合加工部件外形，降低调试难度，使复杂曲面毛刺清理更加简洁便利，同时减少工作时间。\r\n                </p>\r\n                <p>\r\n                    ATI毛刺清理工具在世界范围内得到广泛的应用，匹配机械手去除铝轮毂、变频器壳、同步器壳、同步器齿毂、轴承盖、缸体、阀体、阀盖、输出轴、发动机齿轮等工件的毛刺。\r\n                </p>\r\n                <p>\r\n                    ATI的工程师开发了三种类型的顺从毛刺清理工具，使得自动毛刺清理单元更为安全、一致性和经济。\r\n                </p>\r\n                <p>\r\n                    &nbsp; &nbsp; &nbsp; 径向顺从毛刺清理工具（RC系列），也被称为Flexdeburr，这种毛刺清理工具采用高强度涡轮气动马达，适用于机器人或者CNC机床去除各种材质的毛刺的应用。\r\n                </p>\r\n                <p>\r\n                    &nbsp; &nbsp; &nbsp; 轴向顺从毛刺清理工具（AC系列），也被称为Speedeburr，这种毛刺清理工具采用叶片式气功马达和浮动的旋转刀头，在轴向提供浮动补偿，能有效减少高达75%的机器人试教时间，特别适用于机器人去边缘毛刺和倒角作业。\r\n                </p>\r\n                <p>\r\n                    更多产品型号和产品技术信息，请直接联系我们！\r\n                </p>\r\n                <p>\r\n                    <br/>\r\n                </p>','2019-07-08 11:29:22'),(2,'Tool Changer / Utility Coupler Terms ','<p>\r\n                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;ATI柔性机器人毛刺清理工具和精加工产品拥有专利技术，坚固耐用，可用于多种不同材料的毛刺清理和加工，也可应用于非机器人领域。与传统打磨工具相比，ATI打磨工具具有柔性顺从补偿装置，柔性补偿功能允许清理工具对于部件的位置或机器人路径发生变化时能否快速的契合加工部件外形，降低调试难度，使复杂曲面毛刺清理更加简洁便利，同时减少工作时间。\r\n                </p>\r\n                <p>\r\n                    ATI毛刺清理工具在世界范围内得到广泛的应用，匹配机械手去除铝轮毂、变频器壳、同步器壳、同步器齿毂、轴承盖、缸体、阀体、阀盖、输出轴、发动机齿轮等工件的毛刺。\r\n                </p>\r\n                <p>\r\n                    ATI的工程师开发了三种类型的顺从毛刺清理工具，使得自动毛刺清理单元更为安全、一致性和经济。\r\n                </p>\r\n                <p>\r\n                    &nbsp; &nbsp; &nbsp; 径向顺从毛刺清理工具（RC系列），也被称为Flexdeburr，这种毛刺清理工具采用高强度涡轮气动马达，适用于机器人或者CNC机床去除各种材质的毛刺的应用。\r\n                </p>\r\n                <p>\r\n                    &nbsp; &nbsp; &nbsp; 轴向顺从毛刺清理工具（AC系列），也被称为Speedeburr，这种毛刺清理工具采用叶片式气功马达和浮动的旋转刀头，在轴向提供浮动补偿，能有效减少高达75%的机器人试教时间，特别适用于机器人去边缘毛刺和倒角作业。\r\n                </p>\r\n                <p>\r\n                    更多产品型号和产品技术信息，请直接联系我们！\r\n                </p>\r\n                <p>\r\n                    <br/>\r\n                </p>','2019-07-08 11:29:25'),(3,'工具快换装置/顺从介质连接器模块术语','<p>\r\n                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;ATI柔性机器人毛刺清理工具和精加工产品拥有专利技术，坚固耐用，可用于多种不同材料的毛刺清理和加工，也可应用于非机器人领域。与传统打磨工具相比，ATI打磨工具具有柔性顺从补偿装置，柔性补偿功能允许清理工具对于部件的位置或机器人路径发生变化时能否快速的契合加工部件外形，降低调试难度，使复杂曲面毛刺清理更加简洁便利，同时减少工作时间。\r\n                </p>\r\n                <p>\r\n                    ATI毛刺清理工具在世界范围内得到广泛的应用，匹配机械手去除铝轮毂、变频器壳、同步器壳、同步器齿毂、轴承盖、缸体、阀体、阀盖、输出轴、发动机齿轮等工件的毛刺。\r\n                </p>\r\n                <p>\r\n                    ATI的工程师开发了三种类型的顺从毛刺清理工具，使得自动毛刺清理单元更为安全、一致性和经济。\r\n                </p>\r\n                <p>\r\n                    &nbsp; &nbsp; &nbsp; 径向顺从毛刺清理工具（RC系列），也被称为Flexdeburr，这种毛刺清理工具采用高强度涡轮气动马达，适用于机器人或者CNC机床去除各种材质的毛刺的应用。\r\n                </p>\r\n                <p>\r\n                    &nbsp; &nbsp; &nbsp; 轴向顺从毛刺清理工具（AC系列），也被称为Speedeburr，这种毛刺清理工具采用叶片式气功马达和浮动的旋转刀头，在轴向提供浮动补偿，能有效减少高达75%的机器人试教时间，特别适用于机器人去边缘毛刺和倒角作业。\r\n                </p>\r\n                <p>\r\n                    更多产品型号和产品技术信息，请直接联系我们！\r\n                </p>\r\n                <p>\r\n                    <br/>\r\n                </p>','2019-07-08 11:29:27'),(4,'力/力矩传感器术语','<p>\r\n                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;ATI柔性机器人毛刺清理工具和精加工产品拥有专利技术，坚固耐用，可用于多种不同材料的毛刺清理和加工，也可应用于非机器人领域。与传统打磨工具相比，ATI打磨工具具有柔性顺从补偿装置，柔性补偿功能允许清理工具对于部件的位置或机器人路径发生变化时能否快速的契合加工部件外形，降低调试难度，使复杂曲面毛刺清理更加简洁便利，同时减少工作时间。\r\n                </p>\r\n                <p>\r\n                    ATI毛刺清理工具在世界范围内得到广泛的应用，匹配机械手去除铝轮毂、变频器壳、同步器壳、同步器齿毂、轴承盖、缸体、阀体、阀盖、输出轴、发动机齿轮等工件的毛刺。\r\n                </p>\r\n                <p>\r\n                    ATI的工程师开发了三种类型的顺从毛刺清理工具，使得自动毛刺清理单元更为安全、一致性和经济。\r\n                </p>\r\n                <p>\r\n                    &nbsp; &nbsp; &nbsp; 径向顺从毛刺清理工具（RC系列），也被称为Flexdeburr，这种毛刺清理工具采用高强度涡轮气动马达，适用于机器人或者CNC机床去除各种材质的毛刺的应用。\r\n                </p>\r\n                <p>\r\n                    &nbsp; &nbsp; &nbsp; 轴向顺从毛刺清理工具（AC系列），也被称为Speedeburr，这种毛刺清理工具采用叶片式气功马达和浮动的旋转刀头，在轴向提供浮动补偿，能有效减少高达75%的机器人试教时间，特别适用于机器人去边缘毛刺和倒角作业。\r\n                </p>\r\n                <p>\r\n                    更多产品型号和产品技术信息，请直接联系我们！\r\n                </p>\r\n                <p>\r\n                    <br/>\r\n                </p>','2019-07-08 11:29:31'),(5,'碰撞传感器术语','<p>\r\n                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;ATI柔性机器人毛刺清理工具和精加工产品拥有专利技术，坚固耐用，可用于多种不同材料的毛刺清理和加工，也可应用于非机器人领域。与传统打磨工具相比，ATI打磨工具具有柔性顺从补偿装置，柔性补偿功能允许清理工具对于部件的位置或机器人路径发生变化时能否快速的契合加工部件外形，降低调试难度，使复杂曲面毛刺清理更加简洁便利，同时减少工作时间。\r\n                </p>\r\n                <p>\r\n                    ATI毛刺清理工具在世界范围内得到广泛的应用，匹配机械手去除铝轮毂、变频器壳、同步器壳、同步器齿毂、轴承盖、缸体、阀体、阀盖、输出轴、发动机齿轮等工件的毛刺。\r\n                </p>\r\n                <p>\r\n                    ATI的工程师开发了三种类型的顺从毛刺清理工具，使得自动毛刺清理单元更为安全、一致性和经济。\r\n                </p>\r\n                <p>\r\n                    &nbsp; &nbsp; &nbsp; 径向顺从毛刺清理工具（RC系列），也被称为Flexdeburr，这种毛刺清理工具采用高强度涡轮气动马达，适用于机器人或者CNC机床去除各种材质的毛刺的应用。\r\n                </p>\r\n                <p>\r\n                    &nbsp; &nbsp; &nbsp; 轴向顺从毛刺清理工具（AC系列），也被称为Speedeburr，这种毛刺清理工具采用叶片式气功马达和浮动的旋转刀头，在轴向提供浮动补偿，能有效减少高达75%的机器人试教时间，特别适用于机器人去边缘毛刺和倒角作业。\r\n                </p>\r\n                <p>\r\n                    更多产品型号和产品技术信息，请直接联系我们！\r\n                </p>\r\n                <p>\r\n                    <br/>\r\n                </p>','2019-07-08 11:29:33'),(6,'顺从装置术语 ','<p>\r\n                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;ATI柔性机器人毛刺清理工具和精加工产品拥有专利技术，坚固耐用，可用于多种不同材料的毛刺清理和加工，也可应用于非机器人领域。与传统打磨工具相比，ATI打磨工具具有柔性顺从补偿装置，柔性补偿功能允许清理工具对于部件的位置或机器人路径发生变化时能否快速的契合加工部件外形，降低调试难度，使复杂曲面毛刺清理更加简洁便利，同时减少工作时间。\r\n                </p>\r\n                <p>\r\n                    ATI毛刺清理工具在世界范围内得到广泛的应用，匹配机械手去除铝轮毂、变频器壳、同步器壳、同步器齿毂、轴承盖、缸体、阀体、阀盖、输出轴、发动机齿轮等工件的毛刺。\r\n                </p>\r\n                <p>\r\n                    ATI的工程师开发了三种类型的顺从毛刺清理工具，使得自动毛刺清理单元更为安全、一致性和经济。\r\n                </p>\r\n                <p>\r\n                    &nbsp; &nbsp; &nbsp; 径向顺从毛刺清理工具（RC系列），也被称为Flexdeburr，这种毛刺清理工具采用高强度涡轮气动马达，适用于机器人或者CNC机床去除各种材质的毛刺的应用。\r\n                </p>\r\n                <p>\r\n                    &nbsp; &nbsp; &nbsp; 轴向顺从毛刺清理工具（AC系列），也被称为Speedeburr，这种毛刺清理工具采用叶片式气功马达和浮动的旋转刀头，在轴向提供浮动补偿，能有效减少高达75%的机器人试教时间，特别适用于机器人去边缘毛刺和倒角作业。\r\n                </p>\r\n                <p>\r\n                    更多产品型号和产品技术信息，请直接联系我们！\r\n                </p>\r\n                <p>\r\n                    <br/>\r\n                </p>','2019-07-08 11:29:36'),(7,'毛刺清理工具术语','<p>\r\n                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;ATI柔性机器人毛刺清理工具和精加工产品拥有专利技术，坚固耐用，可用于多种不同材料的毛刺清理和加工，也可应用于非机器人领域。与传统打磨工具相比，ATI打磨工具具有柔性顺从补偿装置，柔性补偿功能允许清理工具对于部件的位置或机器人路径发生变化时能否快速的契合加工部件外形，降低调试难度，使复杂曲面毛刺清理更加简洁便利，同时减少工作时间。\r\n                </p>\r\n                <p>\r\n                    ATI毛刺清理工具在世界范围内得到广泛的应用，匹配机械手去除铝轮毂、变频器壳、同步器壳、同步器齿毂、轴承盖、缸体、阀体、阀盖、输出轴、发动机齿轮等工件的毛刺。\r\n                </p>\r\n                <p>\r\n                    ATI的工程师开发了三种类型的顺从毛刺清理工具，使得自动毛刺清理单元更为安全、一致性和经济。\r\n                </p>\r\n                <p>\r\n                    &nbsp; &nbsp; &nbsp; 径向顺从毛刺清理工具（RC系列），也被称为Flexdeburr，这种毛刺清理工具采用高强度涡轮气动马达，适用于机器人或者CNC机床去除各种材质的毛刺的应用。\r\n                </p>\r\n                <p>\r\n                    &nbsp; &nbsp; &nbsp; 轴向顺从毛刺清理工具（AC系列），也被称为Speedeburr，这种毛刺清理工具采用叶片式气功马达和浮动的旋转刀头，在轴向提供浮动补偿，能有效减少高达75%的机器人试教时间，特别适用于机器人去边缘毛刺和倒角作业。\r\n                </p>\r\n                <p>\r\n                    更多产品型号和产品技术信息，请直接联系我们！\r\n                </p>\r\n                <p>\r\n                    <br/>\r\n                </p>','2019-07-08 11:29:38');

/*Table structure for table `science_video` */

DROP TABLE IF EXISTS `science_video`;

CREATE TABLE `science_video` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `poster` varchar(255) DEFAULT NULL COMMENT '视频显示图地址',
  `video` varchar(255) DEFAULT NULL COMMENT '视频地址',
  `content` text COMMENT '具体内容',
  `time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

/*Data for the table `science_video` */

insert  into `science_video`(`id`,`poster`,`video`,`content`,`time`) values (1,'img/aboutbg.jpg','video/video.mp4','<p><strong>专业的售后技术支持 ：</strong></p><p>&nbsp;ATI提供每周7天，每天24小时的免费技术支持服务；&nbsp;</p><p>&nbsp;ATI向客户分享每年行业内最新的应用技术。&nbsp;</p><p><strong>充足的库存-准时交货：</strong></p><p>&nbsp;三个工厂的同时生产满足客户需求&nbsp;</p><p>&nbsp;充足的零件、组件和成品库存</p><p>&nbsp;北京、上海、重庆应急库存备件&nbsp;</p><p>&nbsp;货期特殊要求时，提供订单加急服务&nbsp;</p><p><strong>完善的质保：</strong></p><p>基于ATI工具快换装置近25年的应用和用户的反馈，ATI提供快 换本体夫人3年质保服务，3年内因产品设计和加工缺陷的原因，ATI负责维修或更换新的产品；&nbsp;</p><p>&nbsp;提供产品售前、售中、售后的免费培训服务和安装调试指导；</p><p><strong>免费的产品定制服务：</strong></p><p>&nbsp;ATI的100余名研发工程师为客户提供免费的产品定制服务；&nbsp;</p><p><strong>技术支持和客服电话：</strong></p><p>联系电话：010-84798766</p><p>传 &nbsp; &nbsp; &nbsp; &nbsp; 真：010-63563522</p><p>电子邮件：china@ati-ia.com</p><p><br/></p>','2019-07-09 09:29:04');

/*Table structure for table `test1` */

DROP TABLE IF EXISTS `test1`;

CREATE TABLE `test1` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img` varchar(255) DEFAULT NULL,
  `time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

/*Data for the table `test1` */

insert  into `test1`(`id`,`img`,`time`) values (1,'/uploads/20190711\\09-34-59.jpg','2019-07-11 09:34:59');

/*Table structure for table `test2` */

DROP TABLE IF EXISTS `test2`;

CREATE TABLE `test2` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL COMMENT '标题',
  `num` int(11) DEFAULT NULL COMMENT '重要程度',
  `time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4;

/*Data for the table `test2` */

insert  into `test2`(`id`,`title`,`num`,`time`) values (1,'白米饭',6,NULL),(2,'牛肉',5,NULL),(3,'红烧肉',8,NULL),(4,'鸡腿',9,NULL),(5,'凉面',7,NULL),(7,'苦瓜',1,NULL),(6,'榴莲',1,NULL),(8,'臭豆腐',3,NULL),(9,'土豆',2,NULL),(10,'果冻',4,'2019-07-10 04:12:51');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

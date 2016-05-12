/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 50542
 Source Host           : localhost
 Source Database       : tpadmin

 Target Server Type    : MySQL
 Target Server Version : 50542
 File Encoding         : utf-8

 Date: 05/12/2016 17:25:29 PM
*/

SET NAMES utf8;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
--  Table structure for `articlescrap`
-- ----------------------------
DROP TABLE IF EXISTS `articlescrap`;
CREATE TABLE `articlescrap` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `content` text,
  `time` varchar(11) DEFAULT '0',
  `cate_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `type` tinyint(1) DEFAULT '1' COMMENT '1:??,2:??,3:??,4:??',
  `status` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `cate_id` (`cate_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `articlescrap`
-- ----------------------------
BEGIN;
INSERT INTO `articlescrap` VALUES ('13', '实验室简介', '&lt;p style=&quot;text-align: left;&quot;&gt;珍稀濒危动植物生态与环境保护重点实验室成立于2005年，是在整合野生动植物生态学实验室、生命过程与环境分析科学实验室以及天然产物研究与开发实验室3个广西高校重点实验室的基础上组建而成的，主要依托于生态学和环境科学2个广西重点学科。该实验室于2008年10月被教育部批准为省部共建重点实验室。&lt;/p&gt;&lt;p style=&quot;text-align:center&quot;&gt;&lt;img alt=&quot;珍稀濒危动植物生态与环境保护重点实验室&quot; src=&quot;http://127.0.0.1/Application/Home/View//Public/static/img/sys1.jpg&quot; style=&quot;margin: 0px; padding: 0px;&quot;/&gt;&lt;/p&gt;&lt;p style=&quot;text-align: left;&quot;&gt;1991年成立了智能信号处理与识别研究小组，同年成立了国内第一个神经网络研究中心。1993年承办了全国神经网络大会。2002年，在保铮教授提议和大力支持下，利用已有的基础，将研究方向作进一步拓广，经学校批准成立了智能信息处理研究所和教育部留学回国人员实验室。&lt;/p&gt;', '1461039628', '2', '1', '1', '1'), ('14', '现任领导', '&lt;p style=&quot;margin-top: 1em;margin-bottom: 1em;padding: 0px;display: inherit;color: rgb(85, 85, 85);word-wrap: break-word;font-family: 微软雅黑;font-size: 14px;line-height: 28px;white-space: normal;text-indent: 35px;background-color: rgb(255, 255, 255)&quot;&gt;&lt;span style=&quot;font-family: SimSun;font-size: 17px&quot;&gt;计算机科学与信息工程学院的现任领导成员年龄、学历层次结构合理，具有丰富的教学、科研、管理经验，富有团结、求实、&amp;nbsp;创新精神，发扬我院优良传统，努力传承文明，与全院师生员工齐心协力，以培养社会主义现代化建设合格人才为目标，注重师生的&amp;nbsp;品德、知识、能力的培养。前进中的计算机科学与信息工程学院必将迎来光辉灿烂的明天！&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;margin-top: 1em;margin-bottom: 1em;padding: 0px;display: inherit;color: rgb(85, 85, 85);word-wrap: break-word;font-family: 微软雅黑;font-size: 14px;line-height: 28px;white-space: normal;text-indent: 35px;background-color: rgb(255, 255, 255)&quot;&gt;&amp;nbsp;&lt;/p&gt;&lt;p style=&quot;margin-top: 1em;margin-bottom: 1em;padding: 0px;display: inherit;color: rgb(85, 85, 85);word-wrap: break-word;font-family: 微软雅黑;font-size: 14px;line-height: 28px;white-space: normal;text-indent: 35px;background-color: rgb(255, 255, 255)&quot;&gt;&lt;br/&gt;&lt;/p&gt;&lt;p style=&quot;margin-top: 1em;margin-bottom: 1em;padding: 0px;display: inherit;color: rgb(85, 85, 85);word-wrap: break-word;font-family: 微软雅黑;font-size: 14px;line-height: 28px;white-space: normal;text-indent: 35px;background-color: rgb(255, 255, 255)&quot;&gt;&lt;span style=&quot;font-family: 宋体;font-size: 17px&quot;&gt;&lt;strong style=&quot;color: rgb(220, 37, 35)&quot;&gt;&lt;span style=&quot;font-family: SimSun&quot;&gt;党&amp;nbsp;委&amp;nbsp;书&amp;nbsp;记&lt;/span&gt;&lt;/strong&gt;&lt;span style=&quot;font-family: SimSun&quot;&gt;&amp;nbsp;:&amp;nbsp;邱&amp;nbsp;祖&amp;nbsp;平&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;margin-top: 1em;margin-bottom: 1em;padding: 0px;display: inherit;color: rgb(85, 85, 85);word-wrap: break-word;font-family: 微软雅黑;font-size: 14px;line-height: 28px;white-space: normal;text-indent: 35px;background-color: rgb(255, 255, 255)&quot;&gt;&lt;span style=&quot;font-family: 宋体;font-size: 17px&quot;&gt;&lt;strong style=&quot;color: rgb(220, 37, 35)&quot;&gt;&lt;span style=&quot;font-family: SimSun&quot;&gt;院&amp;nbsp;长&lt;/span&gt;&lt;/strong&gt;&lt;span style=&quot;font-family: SimSun&quot;&gt;：&amp;nbsp;李&amp;nbsp;先&amp;nbsp;贤&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;margin-top: 1em;margin-bottom: 1em;padding: 0px;display: inherit;color: rgb(85, 85, 85);word-wrap: break-word;font-family: 微软雅黑;font-size: 14px;line-height: 28px;white-space: normal;text-indent: 35px;background-color: rgb(255, 255, 255)&quot;&gt;&lt;span style=&quot;font-family: 宋体;font-size: 17px&quot;&gt;&lt;strong style=&quot;color: rgb(220, 37, 35)&quot;&gt;&lt;span style=&quot;font-family: SimSun&quot;&gt;党&amp;nbsp;委&amp;nbsp;副&amp;nbsp;书&amp;nbsp;记&lt;/span&gt;&lt;/strong&gt;&lt;span style=&quot;font-family: SimSun&quot;&gt;：&amp;nbsp;朱伟军&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;margin-top: 1em;margin-bottom: 1em;padding: 0px;display: inherit;color: rgb(85, 85, 85);word-wrap: break-word;font-family: 微软雅黑;font-size: 14px;line-height: 28px;white-space: normal;text-indent: 35px;background-color: rgb(255, 255, 255)&quot;&gt;&lt;span style=&quot;font-family: 宋体;font-size: 17px&quot;&gt;&lt;strong style=&quot;color: rgb(220, 37, 35)&quot;&gt;&lt;span style=&quot;font-family: SimSun&quot;&gt;副院长（分管教学）：&amp;nbsp;&lt;/span&gt;&lt;/strong&gt;&lt;span style=&quot;font-family: SimSun&quot;&gt;吴璟莉&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;margin-top: 1em;margin-bottom: 1em;padding: 0px;display: inherit;color: rgb(85, 85, 85);word-wrap: break-word;font-family: 微软雅黑;font-size: 14px;line-height: 28px;white-space: normal;text-indent: 35px;background-color: rgb(255, 255, 255)&quot;&gt;&lt;span style=&quot;font-family: 宋体;font-size: 17px&quot;&gt;&lt;strong style=&quot;color: rgb(220, 37, 35)&quot;&gt;&lt;span style=&quot;font-family: SimSun&quot;&gt;副院长（分管科研与实验室）：&amp;nbsp;&lt;/span&gt;&lt;/strong&gt;&lt;span style=&quot;font-family: SimSun&quot;&gt;唐振军&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;margin-top: 1em; margin-bottom: 1em; padding: 0px; display: inherit; color: rgb(85, 85, 85); word-wrap: break-word; font-family: 微软雅黑; font-size: 14px; line-height: 28px; white-space: normal; text-indent: 35px; background-color: rgb(255, 255, 255);&quot;&gt;&lt;span style=&quot;font-family: 宋体;font-size: 17px&quot;&gt;&lt;strong style=&quot;color: rgb(220, 37, 35)&quot;&gt;&lt;span style=&quot;font-family: SimSun&quot;&gt;副院长（分管研究生培养）：&amp;nbsp;&lt;/span&gt;&lt;/strong&gt;&lt;span style=&quot;font-family: SimSun&quot;&gt;李&amp;nbsp;智&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;', '1461044867', '3', '1', '1', '1');
COMMIT;

-- ----------------------------
--  Table structure for `category`
-- ----------------------------
DROP TABLE IF EXISTS `category`;
CREATE TABLE `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pid` int(11) DEFAULT NULL COMMENT '???ID',
  `name` varchar(20) DEFAULT NULL COMMENT '????',
  `title` varchar(100) DEFAULT NULL COMMENT '????',
  `keywords` varchar(255) DEFAULT NULL COMMENT '?????',
  `description` varchar(255) DEFAULT NULL COMMENT '????',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `category`
-- ----------------------------
BEGIN;
INSERT INTO `category` VALUES ('1', '0', '实验室概况', '实验室概况', '', ''), ('2', '1', '实验室简介', '实验室简介', '', ''), ('3', '1', '现任领导', '现任领导', '', ''), ('4', '0', '动态新闻', '动态新闻', '', ''), ('5', '4', '实验室新闻', '实验室新闻', '', ''), ('6', '4', '通知公告', '通知公告', '', ''), ('7', '4', '专题活动', '专题活动', '', ''), ('8', '0', '科学研究', '科学研究', '', ''), ('9', '8', '论文专著', '论文专著', '', ''), ('10', '8', '科研项目', '科研项目', '', ''), ('11', '8', '研究成果', '研究成果', '', ''), ('12', '8', '学术交流', '学术交流', '', ''), ('13', '0', '学术梯队', '学术梯队', '', ''), ('14', '13', '科研队伍', '科研队伍', '', ''), ('15', '13', '招聘信息', '招聘信息', '', ''), ('16', '0', '研究生教育', '研究生教育', '', ''), ('17', '16', '招生信息', '招生信息', '', ''), ('18', '16', '毕业研究生', '毕业研究生', '', ''), ('19', '16', '在校研究生', '在校研究生', '', ''), ('20', '0', '本科教学', '本科教学', '', ''), ('21', '20', '专业介绍', '专业介绍', '', ''), ('22', '20', '培养方案', '培养方案', '', ''), ('23', '20', '课程介绍', '课程介绍', '', '');
COMMIT;

-- ----------------------------
--  Table structure for `links`
-- ----------------------------
DROP TABLE IF EXISTS `links`;
CREATE TABLE `links` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(100) DEFAULT NULL,
  `url` varchar(100) DEFAULT NULL,
  `sort` int(5) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `links`
-- ----------------------------
BEGIN;
INSERT INTO `links` VALUES ('1', '???', 'http://www.cnsecer.com', '100');
COMMIT;

-- ----------------------------
--  Table structure for `member`
-- ----------------------------
DROP TABLE IF EXISTS `member`;
CREATE TABLE `member` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(32) DEFAULT NULL,
  `avatar` varchar(255) DEFAULT NULL COMMENT '??',
  `create_at` varchar(11) DEFAULT '0',
  `update_at` varchar(11) DEFAULT '0',
  `login_ip` varchar(20) DEFAULT NULL,
  `status` tinyint(1) DEFAULT '1' COMMENT '0:???? 1:??',
  `type` tinyint(1) DEFAULT '1' COMMENT '1:???? 2:??? ',
  PRIMARY KEY (`id`),
  KEY `username` (`username`) USING BTREE,
  KEY `password` (`password`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `member`
-- ----------------------------
BEGIN;
INSERT INTO `member` VALUES ('1', 'admin', 'rootphantomy@hotmail.com', '21232f297a57a5a743894a0e4a801fc3', null, '1436679338', '1463045089', '127.0.0.1', '1', '2'), ('2', 'huangyu', 'huangyu@test.com', '4297f44b13955235245b2497399d7a93', null, '1460379148', '0', '127.0.0.1', '1', '2');
COMMIT;

-- ----------------------------
--  Table structure for `member_oauth`
-- ----------------------------
DROP TABLE IF EXISTS `member_oauth`;
CREATE TABLE `member_oauth` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `qq` varchar(100) DEFAULT NULL COMMENT 'QQ openid',
  `sina` varchar(100) DEFAULT NULL COMMENT 'sina openid',
  `github` varchar(100) DEFAULT NULL COMMENT 'github openid',
  `weixin` varchar(255) DEFAULT NULL COMMENT 'weixin openid',
  `member_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `news`
-- ----------------------------
DROP TABLE IF EXISTS `news`;
CREATE TABLE `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `content` text CHARACTER SET utf8,
  `time` varchar(11) CHARACTER SET utf8 DEFAULT '0',
  `cate_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `type` tinyint(1) DEFAULT '1' COMMENT '1:??,2:??,3:??,4:??',
  `status` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
--  Records of `news`
-- ----------------------------
BEGIN;
INSERT INTO `news` VALUES ('14', 'test', '&lt;p&gt;&lt;span style=&quot;font-size: 20px;&quot;&gt;&lt;strong&gt;testtesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttest&lt;/strong&gt;&lt;/span&gt;&lt;/p&gt;', '1461045967', '5', '1', '1', '1'), ('15', '公告', '&lt;p&gt;公告&lt;/p&gt;', '1461046384', '6', '1', '1', '1'), ('16', 'hello', '&lt;p&gt;hello即可根据客户感觉会感觉很干净&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/Public/upload/image/201604/1461862450796851.jpg&quot; title=&quot;1461862450796851.jpg&quot; alt=&quot;034EE6EF93D14A96BD764122EB61ACCF.jpg&quot;/&gt;&lt;/p&gt;', '1461162954', '6', '1', '1', '1'), ('17', '你好么？？', '&lt;p&gt;你好么？？你好么？？你好么？？你好么？？你好么？？你好么？？你好么？？&lt;/p&gt;', '1461941169', '5', '1', '1', '1');
COMMIT;

-- ----------------------------
--  Table structure for `setting`
-- ----------------------------
DROP TABLE IF EXISTS `setting`;
CREATE TABLE `setting` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `key` varchar(255) NOT NULL DEFAULT '',
  `value` varchar(255) NOT NULL DEFAULT '',
  `description` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `key` (`key`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `setting`
-- ----------------------------
BEGIN;
INSERT INTO `setting` VALUES ('1', 'site-name', '???', '???'), ('2', 'site-keywords', '???1,???2', '???'), ('3', 'site-description', '??????', '????'), ('4', 'site-tongji', '&lt;script&gt; console.log(&quot;????&quot;)&lt;/script&gt;', '????'), ('5', 'site-icp', '123456', 'ICP???'), ('6', 'site-url', 'http://www.cnsecer.com', '????');
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;

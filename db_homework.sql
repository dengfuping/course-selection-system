/*
Navicat MySQL Data Transfer

Source Server         : mysql
Source Server Version : 50624
Source Host           : localhost:3306
Source Database       : db_homework

Target Server Type    : MYSQL
Target Server Version : 50624
File Encoding         : 65001

Date: 2016-06-04 00:46:50
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for courses
-- ----------------------------
DROP TABLE IF EXISTS `courses`;
CREATE TABLE `courses` (
  `cid` char(7) NOT NULL,
  `cname` char(40) NOT NULL,
  `professor` char(40) NOT NULL,
  `credit` double(3,1) NOT NULL,
  `tgrade` char(4) NOT NULL,
  `canceledYear` char(4) DEFAULT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of courses
-- ----------------------------
INSERT INTO `courses` VALUES ('1001', '数据库原理', '李森', '3.0', '2014', '2015');
INSERT INTO `courses` VALUES ('1002', '概率论与数理统计', '杨玲玲', '2.0', '2014', null);
INSERT INTO `courses` VALUES ('1003', '计算机网络', '张亚平', '3.0', '2014', null);
INSERT INTO `courses` VALUES ('1004', '汇编语言', '王建荣', '2.0', '2014', '2017');
INSERT INTO `courses` VALUES ('1005', '算法分析', '宫秀军', '3.0', '2014', null);
INSERT INTO `courses` VALUES ('1006', 'C#程序设计', '章亦葵', '2.5', '2014', '2018');
INSERT INTO `courses` VALUES ('1007', '移动平台应用开发', '张怡', '1.5', '2014', '2022');
INSERT INTO `courses` VALUES ('1008', '软件人员英语沟通方法', 'Eliza', '2.0', '2014', '2020');
INSERT INTO `courses` VALUES ('1009', '英语读写译', '田文娟', '2.0', '2014', null);
INSERT INTO `courses` VALUES ('1010', '西方文化', '江滨', '2.0', '2014', null);
INSERT INTO `courses` VALUES ('1011', '英语口语', '姚健', '2.0', '2014', null);
INSERT INTO `courses` VALUES ('1012', '大学英语翻译', '范成功', '2.0', '2014', null);
INSERT INTO `courses` VALUES ('1013', 'C++程序设计', '王建荣', '1.0', '2014', null);

-- ----------------------------
-- Table structure for selectedcourse
-- ----------------------------
DROP TABLE IF EXISTS `selectedcourse`;
CREATE TABLE `selectedcourse` (
  `sid` char(10) NOT NULL,
  `cid` char(7) NOT NULL,
  `selectedYear` char(4) NOT NULL,
  `scores` int(3) DEFAULT NULL,
  KEY `sid` (`sid`) USING BTREE,
  KEY `cid` (`cid`) USING BTREE,
  CONSTRAINT `cid` FOREIGN KEY (`cid`) REFERENCES `courses` (`cid`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `sid` FOREIGN KEY (`sid`) REFERENCES `students` (`sid`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of selectedcourse
-- ----------------------------
INSERT INTO `selectedcourse` VALUES ('3014218002', '1001', '2016', '65');
INSERT INTO `selectedcourse` VALUES ('3014218002', '1004', '2016', '94');
INSERT INTO `selectedcourse` VALUES ('3014218003', '1003', '2016', '68');
INSERT INTO `selectedcourse` VALUES ('3014218003', '1006', '2016', '79');
INSERT INTO `selectedcourse` VALUES ('3014218004', '1001', '2016', '78');
INSERT INTO `selectedcourse` VALUES ('3014218005', '1001', '2016', '83');
INSERT INTO `selectedcourse` VALUES ('3014218003', '1001', '2016', '96');
INSERT INTO `selectedcourse` VALUES ('3014218006', '1001', '2016', '100');
INSERT INTO `selectedcourse` VALUES ('3014218001', '1001', '2016', '84');
INSERT INTO `selectedcourse` VALUES ('3014218001', '1002', '2106', '96');
INSERT INTO `selectedcourse` VALUES ('3014218001', '1003', '2016', '76');
INSERT INTO `selectedcourse` VALUES ('3014218001', '1006', '2016', '87');
INSERT INTO `selectedcourse` VALUES ('3014218001', '1013', '2016', '92');
INSERT INTO `selectedcourse` VALUES ('3014218002', '1002', '2016', '91');
INSERT INTO `selectedcourse` VALUES ('3014218002', '1006', '2016', '86');
INSERT INTO `selectedcourse` VALUES ('3014218007', '1001', '2016', '96');
INSERT INTO `selectedcourse` VALUES ('3014218008', '1002', '2016', '78');
INSERT INTO `selectedcourse` VALUES ('3014218009', '1002', '2016', '87');
INSERT INTO `selectedcourse` VALUES ('3014218011', '1006', '2016', '89');
INSERT INTO `selectedcourse` VALUES ('3014218012', '1004', '2016', '97');
INSERT INTO `selectedcourse` VALUES ('3014218010', '1012', '2016', '69');
INSERT INTO `selectedcourse` VALUES ('3014218004', '1005', '2016', '93');
INSERT INTO `selectedcourse` VALUES ('3014218005', '1004', '2016', '96');
INSERT INTO `selectedcourse` VALUES ('3014218006', '1008', '2016', '86');
INSERT INTO `selectedcourse` VALUES ('3014218007', '1010', '2016', '69');
INSERT INTO `selectedcourse` VALUES ('3014218008', '1009', '2016', '99');
INSERT INTO `selectedcourse` VALUES ('3014218009', '1011', '2016', '84');
INSERT INTO `selectedcourse` VALUES ('3014218010', '1005', '2016', '89');
INSERT INTO `selectedcourse` VALUES ('3014218011', '1007', '2016', '68');
INSERT INTO `selectedcourse` VALUES ('3014218012', '1002', '2016', '99');
INSERT INTO `selectedcourse` VALUES ('3014218013', '1001', '2016', null);
INSERT INTO `selectedcourse` VALUES ('3014218013', '1002', '2016', null);
INSERT INTO `selectedcourse` VALUES ('3014218013', '1003', '2016', null);

-- ----------------------------
-- Table structure for students
-- ----------------------------
DROP TABLE IF EXISTS `students`;
CREATE TABLE `students` (
  `sid` char(10) NOT NULL,
  `sname` char(10) NOT NULL,
  `sex` char(1) NOT NULL,
  `schoolAge` int(2) NOT NULL,
  `schoolYear` char(4) NOT NULL,
  `class` char(1) NOT NULL,
  PRIMARY KEY (`sid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of students
-- ----------------------------
INSERT INTO `students` VALUES ('3014218001', '邓福萍', '男', '19', '2014', '3');
INSERT INTO `students` VALUES ('3014218002', '陈奇毅', '男', '20', '2014', '3');
INSERT INTO `students` VALUES ('3014218003', '陈思光', '男', '19', '2014', '3');
INSERT INTO `students` VALUES ('3014218004', '李雪', '女', '20', '2014', '2');
INSERT INTO `students` VALUES ('3014218005', '石丰名', '男', '21', '2014', '3');
INSERT INTO `students` VALUES ('3014218006', '张宇驰', '男', '20', '2014', '3');
INSERT INTO `students` VALUES ('3014218007', '郭仁杰', '男', '19', '2014', '1');
INSERT INTO `students` VALUES ('3014218008', '秦永贵', '男', '19', '2014', '1');
INSERT INTO `students` VALUES ('3014218009', '张双哲', '男', '18', '2014', '2');
INSERT INTO `students` VALUES ('3014218010', '郭凯', '男', '21', '2014', '1');
INSERT INTO `students` VALUES ('3014218011', '李振雷', '男', '21', '2104', '4');
INSERT INTO `students` VALUES ('3014218012', '马程明', '男', '20', '2104', '2');
INSERT INTO `students` VALUES ('3014218013', '裴顺达', '男', '21', '2104', '4');
INSERT INTO `students` VALUES ('3014218014', '张永辉', '男', '21', '2014', '4');
INSERT INTO `students` VALUES ('3014218015', '赵宇航', '女', '20', '2014', '4');
INSERT INTO `students` VALUES ('3014218016', '常力凡', '女', '19', '2014', '2');
INSERT INTO `students` VALUES ('3014218017', '王小贱', '女', '19', '2104', '1');
INSERT INTO `students` VALUES ('3014218018', '刘小超', '女', '20', '2104', '3');
INSERT INTO `students` VALUES ('3014218019', '赵丹宁', '女', '20', '2014', '3');
INSERT INTO `students` VALUES ('3014218020', '于振洹', '男', '21', '2104', '4');
INSERT INTO `students` VALUES ('3014218999', '测试', '男', '21', '2014', '3');

-- ----------------------------
-- Table structure for teacher
-- ----------------------------
DROP TABLE IF EXISTS `teacher`;
CREATE TABLE `teacher` (
  `username` char(12) NOT NULL,
  `password` char(10) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of teacher
-- ----------------------------
INSERT INTO `teacher` VALUES ('admin', 'admin');

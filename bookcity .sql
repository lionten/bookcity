-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 2017-05-18 22:45:28
-- 服务器版本： 10.0.17-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookcity`
--

-- --------------------------------------------------------

--
-- 表的结构 `bk_list`
--

CREATE TABLE `bk_list` (
  `id` int(11) NOT NULL,
  `src` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `bkname` varchar(222) NOT NULL,
  `intro` varchar(222) NOT NULL COMMENT '简介',
  `auth` varchar(11) NOT NULL COMMENT '作者',
  `publi` varchar(222) NOT NULL COMMENT '出版社',
  `pubdate` varchar(22) NOT NULL COMMENT '出版时间',
  `isbn` varchar(111) NOT NULL,
  `num` int(11) NOT NULL COMMENT '购物车数量'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `bk_list`
--

INSERT INTO `bk_list` (`id`, `src`, `price`, `bkname`, `intro`, `auth`, `publi`, `pubdate`, `isbn`, `num`) VALUES
(11, 'img/170536011236.jpeg', 20.5, '努力，是为了可以选择（职场突破手记！）', '努力的意义在于可以选择自己想要的生活，而不是被生活选择', '沐丞', '民主与建设出版社', '2017年01月', '32524643788', 2),
(12, 'img/170553011453.jpeg', 22.1, '我喜欢生命本来的样子', '著名自由摄影师林帝浣插图，但愿你保持住一份生命的本色', '周国平', '作家出版社', '2017年02月 ', '3e2534576589975672432', 4),
(13, 'img/170521011621.jpeg', 9.8, 'True story of ah Q', '（公版书）鲁迅史诗性小说代表作。一支笔写透中国人4000年的精神顽疾', '鲁迅', '北京联合出版公司', '2014年12月 ', '47458964564243', 0),
(14, 'img/170550011950.jpeg', 2.99, '当你的才华还撑不起你的梦想时', '当红励志作家特立独行的猫专为千万迷茫、彷徨而又年轻、充满希望的年轻人所写的人生成长之书', '特立独行的猫', '武汉出版社', '2016-1-1', '9787543096158', 1),
(15, 'img/170535012135.jpeg', 48.5, 'C++ Primer Plus(第6版)中文版', '畅销30年 从入门到精通必读经典教程全新升级，蔡学镛、孟岩、高博倾力推荐', '[美]Stephen ', '人民邮电出版社', '2012年07月 ', '9787115279460', 0),
(16, 'img/170558012258.jpeg', 23.5, '茶道：从喝茶到懂茶（汉竹）', '爱茶到懂茶，只是一本书的距离', '王建荣', '江苏科学技术出版社', '2016年01月 ', '9787553742847', 1),
(17, 'img/170531012531.jpeg', 17.6, '星星上的人', '如果你遇到星星上的人，请把你所有的爱都给他……', '卡罗琳·帕克丝特', '百花洲文艺出版社', '2017年03月 ', '9787550019805', 1),
(18, 'img/170536011236.jpeg', 20.5, '努力，是为了可以选择（职场突破手记！）', '努力的意义在于可以选择自己想要的生活，而不是被生活选择', '沐丞', '民主与建设出版社', '2017年01月', '32524643788', 0),
(19, 'img/170553011453.jpeg', 22.1, '我喜欢生命本来的样子', '著名自由摄影师林帝浣插图，但愿你保持住一份生命的本色', '周国平', '作家出版社', '2017年02月 ', '3e2534576589975672432', 1),
(20, 'img/170521011621.jpeg', 9.8, 'True story of ah Q', '（公版书）鲁迅史诗性小说代表作。一支笔写透中国人4000年的精神顽疾', '鲁迅', '北京联合出版公司', '2014年12月 ', '47458964564243', 0),
(21, 'img/170550011950.jpeg', 2.99, '当你的才华还撑不起你的梦想时', '当红励志作家特立独行的猫专为千万迷茫、彷徨而又年轻、充满希望的年轻人所写的人生成长之书', '特立独行的猫', '武汉出版社', '2016-1-1', '9787543096158', 0),
(22, 'img/170558012258.jpeg', 23.5, '茶道：从喝茶到懂茶（汉竹）', '爱茶到懂茶，只是一本书的距离', '王建荣', '江苏科学技术出版社', '2016年01月 ', '9787553742847', 0),
(23, 'img/170531012531.jpeg', 17.6, '星星上的人', '如果你遇到星星上的人，请把你所有的爱都给他……', '卡罗琳·帕克丝特', '百花洲文艺出版社', '2017年03月 ', '9787550019805', 0),
(24, 'img/170532100732.jpeg', 19.5, '你心柔软，却有力量--林清玄最新散文精选', '林清玄畅销50万口碑佳作，入选年度大众喜爱的50种图书。代表性精华篇目，图文四色精美装帧，亲写长篇序言；余秋雨，贾平凹、星云大师、尹建莉推荐阅读；温暖文字让心柔软，却生发出力量。', '林清玄', '长江文艺出版社', '2015年04月', '14566545498746256', 0),
(25, 'img/170538101338.jpeg', 1, 'a', 'a', 'a', 'a', 'a', 'a', 0),
(26, 'img/170552101452.jpeg', 2, 'df', 'ds', 'd', 'd', 'd', 'dsd', 0),
(27, 'img/170552102152.jpeg', 43, 'a', 'a', 'a', 'a', 'a', 'a', 0),
(28, 'img/170528102228.jpeg', 43, 'a', 'a', 'a', 'a', 'a', 'a', 0),
(29, 'img/170551102251.jpeg', 43, 'a', 'a', 'a', 'a', 'a', 'dwrd', 0);

-- --------------------------------------------------------

--
-- 表的结构 `regis`
--

CREATE TABLE `regis` (
  `id` int(11) NOT NULL,
  `user` varchar(11) NOT NULL,
  `pass` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `regis`
--

INSERT INTO `regis` (`id`, `user`, `pass`) VALUES
(24, 'sa', '33'),
(25, 'sadf', 'dsdf'),
(26, 'fsf', 'dsf'),
(27, 'frtewrtert', 'dsf'),
(28, 'lijie', 'dsf'),
(29, 'lu', 'sf'),
(30, 'sbs', '111');

-- --------------------------------------------------------

--
-- 表的结构 `shopcart`
--

CREATE TABLE `shopcart` (
  `id` int(11) NOT NULL,
  `src` varchar(222) NOT NULL,
  `bname` varchar(22) NOT NULL,
  `num` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `cost` int(11) NOT NULL,
  `is_delete` int(11) NOT NULL DEFAULT '1',
  `uid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `shopcart`
--

INSERT INTO `shopcart` (`id`, `src`, `bname`, `num`, `price`, `cost`, `is_delete`, `uid`) VALUES
(1, 'dsfdf', '1', 1, 1, 1, 1, 1),
(141, 'img/170553011453.jpeg', '我喜欢生命本来的样子', 4, 22, 88, 1, 12),
(142, 'img/170536011236.jpeg', '努力，是为了可以选择（职场突破手记！）', 2, 21, 41, 1, 11);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bk_list`
--
ALTER TABLE `bk_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `regis`
--
ALTER TABLE `regis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shopcart`
--
ALTER TABLE `shopcart`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bk_list`
--
ALTER TABLE `bk_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `regis`
--
ALTER TABLE `regis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `shopcart`
--
ALTER TABLE `shopcart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=143;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

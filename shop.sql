-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 2019-01-14 10:45:30
-- 服务器版本： 5.7.15-log
-- PHP Version: 5.6.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop`
--

-- --------------------------------------------------------

--
-- 表的结构 `clothes`
--

CREATE TABLE `clothes` (
  `id` int(25) NOT NULL,
  `title` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL,
  `num` int(25) NOT NULL,
  `img` text NOT NULL,
  `img_info` text NOT NULL,
  `img_in` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `clothes`
--

INSERT INTO `clothes` (`id`, `title`, `price`, `num`, `img`, `img_info`, `img_in`) VALUES
(1, '时尚宝宝小黄鸭T恤纯棉耐脏多色', '100', 100, 'paging_img1.jpg', 'images/photo/more1.jpg', ''),
(2, '时尚宝宝纯棉耐脏毛衣', '100', 100, 'images/photo/paging_img2.jpg', 'images/photo/more2.jpg', ''),
(3, '纯棉耐脏兔宝宝', '100', 100, 'images/photo/paging_img3.jpg', 'images/photo/more3.jpg', ''),
(4, '宝宝蓝色鞋', '100', 100, 'images/photo/paging_img4.jpg', 'images/photo/more4.jpg', ''),
(5, '宝宝摇篮床', '100', 100, 'images/photo/paging_img5.jpg', 'images/photo/more5.jpg', ''),
(6, '港版美素佳儿3段奶粉', '100', 100, 'images/photo/mike.jpg', 'images/photo/mike_m.jpg', 'images/photo/mike_f.jpg'),
(7, '婴儿肉松猪肉松金枪鱼松虾肉', '100', 100, 'images/photo/mike1.jpg', 'images/photo/mike1_m.jpg', 'images/photo/mike1_f.jpg'),
(8, 'DHA+ARA苹果香蕉促智力发育', '100', 100, 'images/photo/mike2.jpg', 'images/photo/mike2_m.jpg', 'images/photo/mike2_f.jpg'),
(9, '肌肉蔬菜粥', '100', 100, 'images/photo/mike3.jpg', 'images/photo/mike3_m.jpg', 'images/photo/mike3_f.jpg'),
(10, '促智力奶粉', '100', 100, 'images/photo/mike4.jpg', 'images/photo/mike4_m.jpg', 'images/photo/mike4_f.jpg'),
(11, 'Pampers帮宝适纸尿裤', '100', 100, 'images/photo/diapers.jpg', 'images/photo/diapers_m.jpg', ''),
(12, '花王/妙而舒 纸尿裤', '100', 100, 'images/photo/diapers1.jpg', 'images/photo/diapers1_m.jpg', ''),
(13, 'HUGGIES好奇纸尿裤', '100', 100, 'images/photo/diapers2.jpg', 'images/photo/diapers2_m.jpg', ''),
(14, 'MamyPoko妈咪宝贝纸尿裤', '100', 100, 'images/photo/diapers3.jpg', 'images/photo/diapers3_m.jpg', ''),
(15, '安儿乐Anerle 纸尿裤', '100', 100, 'images/photo/diapers4.jpg', 'images/photo/diapers4_m.jpg', ''),
(16, '舒肤佳 纯白清香沐浴露', '100', 100, 'images/photo/bath.jpg', 'images/photo/bath_m.jpg', ''),
(17, 'LUX 力士 幽莲魅肤沐浴乳', '100', 100, 'images/photo/bath1.jpg', 'images/photo/bath1_m.jpg', ''),
(18, 'LG ON美白香水沐浴露', '100', 100, 'images/photo/bath2.jpg', 'images/photo/bath2_m.jpg', ''),
(19, 'Cow 牛乳石碱浓密泡沫沐浴露', '100', 100, 'images/photo/bath3.jpg', 'images/photo/bath3_m.jpg', ''),
(20, 'DOVE 多芬 滋养美肤沐浴乳', '100', 100, 'images/photo/bath4.jpg', 'images/photo/bath4_m.jpg', ''),
(21, '儿童益智早教乐器玩具', '100', 100, 'images/photo/toy.jpg', 'images/photo/toy_m.jpg', ''),
(22, '儿童益智玩具系列', '100', 100, 'images/photo/toy1.jpg', 'images/photo/toy1_m.jpg', ''),
(23, '梦幻游乐场百变磁力积木77片装', '100', 100, 'images/photo/toy2.jpg', 'images/photo/toy2_m.jpg', ''),
(24, '透明4色圆形彩虹圈12只/展盒', '100', 100, 'images/photo/toy3.jpg', 'images/photo/toy3_m.jpg', ''),
(25, '益智大颗粒积木/10pcs', '100', 100, 'images/photo/toy4.jpg', 'images/photo/toy4_m.jpg', ''),
(26, '玛格罗兰婴儿车小孩可坐躺手推车', '100', 100, 'images/photo/car.jpg', '', ''),
(27, '德拉玛溜娃神器宝宝手推车', '100', 100, 'images/photo/car1.jpg', '', ''),
(28, '婴儿推车超轻便携式可坐可躺简易折叠', '100', 100, 'images/photo/car2.jpg', '', ''),
(29, '轻便婴儿推车可坐可躺折叠便携式宝宝', '100', 100, 'images/photo/car3.jpg', '', ''),
(30, '布袋熊儿童三轮车脚踏车', '100', 100, 'images/photo/car4.jpg', '', ''),
(31, '十万个为什么幼儿版全套', '100', 100, 'images/photo/book.jpg', '', ''),
(32, '儿童文学读物 安娜的礼物', '100', 100, 'images/photo/book2.jpg', '', ''),
(33, '防辐射服孕妇装正品孕妇防辐射衣服', '100', 100, 'images/photo/mon.jpg', '', ''),
(34, '佳韵宝孕妇枕头护腰侧睡卧睡觉枕', '100', 100, 'images/photo/mon1.jpg', '', ''),
(35, '孕妇春装上衣女韩版', '100', 100, 'images/photo/mon2.jpg', '', '');

-- --------------------------------------------------------

--
-- 表的结构 `tb_order`
--

CREATE TABLE `tb_order` (
  `order_id` int(25) NOT NULL COMMENT '订单id',
  `payment` varchar(50) COLLATE utf8_bin DEFAULT NULL COMMENT '实付金额。精确到2位小数;单位:元。如:200.07，表示:200元7分',
  `create_time` datetime DEFAULT NULL COMMENT '订单创建时间',
  `payment_time` datetime DEFAULT NULL COMMENT '付款时间',
  `user_id` bigint(20) DEFAULT NULL COMMENT '用户id',
  `buyer_nick` varchar(50) COLLATE utf8_bin DEFAULT NULL COMMENT '买家昵称',
  `num` varchar(25) COLLATE utf8_bin NOT NULL,
  `address` varchar(255) COLLATE utf8_bin NOT NULL,
  `phone` varchar(25) COLLATE utf8_bin NOT NULL,
  `goods_id` varchar(20) COLLATE utf8_bin NOT NULL,
  `goods_name` varchar(50) COLLATE utf8_bin NOT NULL,
  `confirm` int(25) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- 转存表中的数据 `tb_order`
--

INSERT INTO `tb_order` (`order_id`, `payment`, `create_time`, `payment_time`, `user_id`, `buyer_nick`, `num`, `address`, `phone`, `goods_id`, `goods_name`, `confirm`) VALUES
(28, '400.00', NULL, '2019-01-10 10:15:23', 39, 'wys', '4', '广东省江门市蓬江区', '13414856005', '6,9', '港版美素佳儿3段奶粉,肌肉蔬菜粥', 0),
(29, '300.00', NULL, '2019-01-11 06:35:33', 39, 'wys', '3', '广东省江门市蓬江区', '13414856005', '7,6', '婴儿肉松猪肉松金枪鱼松虾肉,港版美素佳儿3段奶粉', 0),
(30, '200.00', NULL, '2019-01-11 06:41:23', 39, 'wys', '2', '广东省江门市蓬江区', '13414856005', '7,6', '婴儿肉松猪肉松金枪鱼松虾肉,港版美素佳儿3段奶粉', 0),
(31, '100.00', NULL, '2019-01-11 06:41:44', 39, 'wys', '1', '广东省江门市蓬江区', '13414856005', '6', '港版美素佳儿3段奶粉', 0),
(32, '200.00', NULL, '2019-01-11 06:43:57', 39, 'wys', '2', '广东省江门市蓬江区', '13414856005', '6,10', '港版美素佳儿3段奶粉,促智力奶粉', 0),
(33, '200.00', NULL, '2019-01-11 06:55:24', 39, 'wys', '2', '广东省江门市蓬江区', '13414856005', '6,10', '港版美素佳儿3段奶粉,促智力奶粉', 0),
(34, '400.00', NULL, '2019-01-11 07:30:10', 39, 'wys', '4', '广东省江门市蓬江区', '13414856005', '7,13', '婴儿肉松猪肉松金枪鱼松虾肉,HUGGIES好奇纸尿裤', 0),
(35, '400.00', NULL, '2019-01-11 07:30:22', 39, 'wys', '4', '广东省江门市蓬江区', '13414856005', '7,13', '婴儿肉松猪肉松金枪鱼松虾肉,HUGGIES好奇纸尿裤', 0),
(36, '400.00', NULL, '2019-01-11 07:31:18', 39, 'wys', '4', '广东省江门市蓬江区', '13414856005', '7,13', '婴儿肉松猪肉松金枪鱼松虾肉,HUGGIES好奇纸尿裤', 0),
(37, '400.00', NULL, '2019-01-11 07:31:19', 39, 'wys', '4', '广东省江门市蓬江区', '13414856005', '7,13', '婴儿肉松猪肉松金枪鱼松虾肉,HUGGIES好奇纸尿裤', 0),
(38, '300.00', NULL, '2019-01-11 03:41:36', 39, 'wys', '3', '广东省江门市蓬江区', '13414856005', '6,7,9', '港版美素佳儿3段奶粉,婴儿肉松猪肉松金枪鱼松虾肉,肌肉蔬菜粥', 0),
(39, '300.00', NULL, '2019-01-11 04:04:21', 39, 'wys', '0', '广东省江门市蓬江区', '13414856005', '9,6,7', '肌肉蔬菜粥,港版美素佳儿3段奶粉,婴儿肉松猪肉松金枪鱼松虾肉', 0),
(40, '300.00', NULL, '2019-01-11 04:05:13', 39, 'wys', '0', '广东省江门市蓬江区', '13414856005', '7,6,10', '婴儿肉松猪肉松金枪鱼松虾肉,港版美素佳儿3段奶粉,促智力奶粉', 0),
(46, '300.00', NULL, '2019-01-11 04:12:08', 39, 'wys', '1', '广东省江门市蓬江区', '13414856005', '6,7,15', '港版美素佳儿3段奶粉,婴儿肉松猪肉松金枪鱼松虾肉,安儿乐Anerle 纸尿裤', 0),
(48, '200.00', NULL, '2019-01-11 04:13:52', 39, 'wys', '1', '广东省江门市蓬江区', '13414856005', '6,7', '港版美素佳儿3段奶粉,婴儿肉松猪肉松金枪鱼松虾肉', 0),
(49, '200.00', NULL, '2019-01-11 04:14:52', 39, 'wys', '1,1', '广东省江门市蓬江区', '13414856005', '6,7', '港版美素佳儿3段奶粉,婴儿肉松猪肉松金枪鱼松虾肉', 0),
(50, '200.00', NULL, '2019-01-11 04:15:22', 39, 'wys', '1,1', '广东省江门市蓬江区', '13414856005', '6,12', '港版美素佳儿3段奶粉,花王/妙而舒 纸尿裤', 0),
(51, '300.00', NULL, '2019-01-11 04:16:58', 39, 'wys', '1,2', '广东省江门市蓬江区', '13414856005', '6,7', '港版美素佳儿3段奶粉,婴儿肉松猪肉松金枪鱼松虾肉', 0),
(52, '600.00', NULL, '2019-01-11 04:17:45', 39, 'www', '2,1,3', '广东省江门市蓬江区', '13414856005', '6,13,8', '港版美素佳儿3段奶粉,HUGGIES好奇纸尿裤,DHA ARA苹果香蕉促智力发育', 0),
(55, '300.00', NULL, '2019-01-11 04:22:01', 39, 'wys', '2,1', '广东省江门市蓬江区', '13414856005', '6,7', '港版美素佳儿3段奶粉,婴儿肉松猪肉松金枪鱼松虾肉', 0),
(56, '100.00', NULL, '2019-01-11 04:22:19', 39, 'wys', '1', '广东省江门市蓬江区', '13414856005', '7', '婴儿肉松猪肉松金枪鱼松虾肉', 0),
(57, '100.00', NULL, '2019-01-11 04:22:33', 39, 'wys', '1', '广东省江门市蓬江区', '13414856005', '7', '婴儿肉松猪肉松金枪鱼松虾肉', 0),
(58, '100.00', NULL, '2019-01-11 04:23:13', 39, 'wys', '1', '广东省江门市蓬江区', '13414856005', '7', '婴儿肉松猪肉松金枪鱼松虾肉', 0),
(59, '200.00', NULL, '2019-01-11 09:09:45', 39, 'wys', '1,1', '广东省江门市蓬江区', '13414856005', '6,7', '港版美素佳儿3段奶粉,婴儿肉松猪肉松金枪鱼松虾肉', 0);

-- --------------------------------------------------------

--
-- 表的结构 `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `username` varchar(55) NOT NULL,
  `password` varchar(30) NOT NULL,
  `phone` varchar(25) NOT NULL,
  `address` text NOT NULL,
  `adddate` datetime NOT NULL,
  `endate` datetime NOT NULL,
  `confirm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `tb_user`
--

INSERT INTO `tb_user` (`id`, `username`, `password`, `phone`, `address`, `adddate`, `endate`, `confirm`) VALUES
(7, 'zhangsan', 'e10adc3949ba59abbe56e057f20f88', '13414856002', '广东省江门市蓬江区方法', '2015-04-06 17:03:55', '2015-04-06 17:03:55', 0),
(9, 'zhangsan1', 'e10adc3949ba59abbe56e057f20f88', '2147483647', '广东省江门市蓬江区', '2015-04-07 10:32:08', '2015-04-07 10:32:08', 1),
(12, 'zhangsan5', '195d91be1e3ba6f1c857d46f24c5a4', '2147483647', '广东省江门市蓬江区', '2015-04-07 10:46:19', '2015-04-07 10:46:19', 0),
(14, 'lisi', '202cb962ac59075b964b07152d234b', '2147483647', '广东省江门市蓬江区', '2015-06-19 10:02:11', '2015-06-19 10:02:11', 1),
(16, 'lisi1', '202cb962ac59075b964b07152d234b', '2147483647', '广东省江门市蓬江区', '2015-06-19 10:24:27', '2015-06-19 10:24:27', 1),
(22, 'tidy1', '202cb962ac59075b964b07152d234b', '2147483647', '广东省江门市蓬江区', '2015-07-30 17:48:33', '2015-07-30 17:48:33', 0),
(23, 'niuniu', '202cb962ac59075b964b07152d234b', '2147483647', '广东省江门市蓬江区', '2015-08-01 11:48:42', '2015-08-01 11:48:42', 1),
(32, 'niuniu2', '202cb962ac59075b964b07152d234b', '2147483647', '广东省江门市蓬江区', '2015-08-01 12:04:50', '2015-08-01 12:04:50', 0),
(33, 'niuniu3', '202cb962ac59075b964b07152d234b', '2147483647', '广东省江门市蓬江区', '2015-08-01 12:08:26', '2015-08-01 12:08:26', 0),
(34, 'niuniu4', '202cb962ac59075b964b07152d234b', '2147483647', '广东省江门市蓬江区', '2015-08-01 12:13:41', '2015-08-01 12:13:41', 1),
(35, 'test01', '202cb962ac59075b964b07152d234b', '2147483647', '广东省江门市蓬江区', '2015-08-01 12:21:53', '2015-08-01 12:21:53', 1),
(36, 'test02', '202cb962ac59075b964b07152d234b', '1370348890', '广东省江门市蓬江区', '2015-08-01 12:28:39', '2015-08-01 12:28:39', 1),
(37, 'admin', '123456', '2147483647', '广东省江门市蓬江区', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(38, 'www', 'www', '13414856006', '广东省江门市蓬江区', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(39, 'wys', '123456', '13414856005', '广东省江门市蓬江区', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(40, '案说法', '123456', '12345648', '广东省江门市蓬江区闪光灯', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(41, 'admin', '441564', '13458454654', '广东省江门市蓬江区', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clothes`
--
ALTER TABLE `clothes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_order`
--
ALTER TABLE `tb_order`
  ADD PRIMARY KEY (`order_id`),
  ADD UNIQUE KEY `order_id` (`order_id`),
  ADD KEY `create_time` (`create_time`),
  ADD KEY `buyer_nick` (`buyer_nick`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `clothes`
--
ALTER TABLE `clothes`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- 使用表AUTO_INCREMENT `tb_order`
--
ALTER TABLE `tb_order`
  MODIFY `order_id` int(25) NOT NULL AUTO_INCREMENT COMMENT '订单id', AUTO_INCREMENT=60;
--
-- 使用表AUTO_INCREMENT `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

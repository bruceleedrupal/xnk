-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- 主机： localhost
-- 生成日期： 2019-11-05 16:18:08
-- 服务器版本： 5.7.27-0ubuntu0.18.04.1
-- PHP 版本： 7.2.24-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `xnk`
--

-- --------------------------------------------------------

--
-- 表的结构 `fos_user`
--

CREATE TABLE `fos_user` (
  `id` int(11) NOT NULL,
  `username` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username_canonical` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_canonical` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `salt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `confirmation_token` varchar(180) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password_requested_at` datetime DEFAULT NULL,
  `roles` longtext COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '(DC2Type:array)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 转存表中的数据 `fos_user`
--

INSERT INTO `fos_user` (`id`, `username`, `username_canonical`, `email`, `email_canonical`, `enabled`, `salt`, `password`, `last_login`, `confirmation_token`, `password_requested_at`, `roles`) VALUES
(1, 'admin', 'admin', 'brucelee.drupal@gmail.com', 'brucelee.drupal@gmail.com', 1, 'tLzjU19W1n1L.sVhMLGZFTrsnT0edKU7wmGfUEd7GEs', '$argon2i$v=19$m=65536,t=4,p=1$NFlMandwVkoxbmpvcEZFTw$3fcN8AByMa9D4DlPAN/Hb/BfR6+CYj0lxY9oh+R4QYE', '2019-11-04 08:31:22', NULL, NULL, 'a:1:{i:0;s:16:\"ROLE_SUPER_ADMIN\";}');

-- --------------------------------------------------------

--
-- 表的结构 `options`
--

CREATE TABLE `options` (
  `id` int(11) NOT NULL,
  `tree_root` int(11) DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lft` int(11) NOT NULL,
  `lvl` int(11) NOT NULL,
  `rgt` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 转存表中的数据 `options`
--

INSERT INTO `options` (`id`, `tree_root`, `parent_id`, `title`, `lft`, `lvl`, `rgt`) VALUES
(1, 1, NULL, '性别', 1, 0, 6),
(2, 1, 1, '男', 2, 1, 3),
(3, 1, 1, '女', 4, 1, 5),
(4, 4, NULL, '文化程度', 1, 0, 12),
(5, 4, 4, '大学', 2, 1, 3),
(6, 4, 4, '高中', 4, 1, 5),
(7, 4, 4, '初中', 6, 1, 7),
(8, 4, 4, '小学', 8, 1, 9),
(9, 4, 4, '文盲', 10, 1, 11),
(10, 10, NULL, '婚姻状况', 1, 0, 10),
(11, 10, 10, '已婚', 2, 1, 3),
(12, 10, 10, '已婚丧偶', 4, 1, 5),
(13, 10, 10, '已婚离异', 6, 1, 7),
(14, 10, 10, '未婚', 8, 1, 9),
(15, 15, NULL, '职业', 1, 0, 12),
(16, 15, 15, '公务员', 2, 1, 3),
(17, 15, 15, '农民', 4, 1, 5),
(18, 15, 15, '教师', 6, 1, 7),
(19, 15, 15, '经商', 8, 1, 9),
(20, 15, 15, '其他', 10, 1, 11);

-- --------------------------------------------------------

--
-- 表的结构 `patient`
--

CREATE TABLE `patient` (
  `id` int(11) NOT NULL,
  `birthday` date DEFAULT NULL,
  `tall` int(11) DEFAULT NULL,
  `ryrq` date NOT NULL,
  `tel` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zyh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender_id` int(11) NOT NULL,
  `scholarship_id` int(11) DEFAULT NULL,
  `marriage_id` int(11) DEFAULT NULL,
  `career_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 转存表中的数据 `patient`
--

INSERT INTO `patient` (`id`, `birthday`, `tall`, `ryrq`, `tel`, `name`, `zyh`, `gender_id`, `scholarship_id`, `marriage_id`, `career_id`) VALUES
(5, '1985-11-05', 169, '2017-11-30', '18116381898', '李跃健', '800003649', 2, 6, 11, 18);

--
-- 转储表的索引
--

--
-- 表的索引 `fos_user`
--
ALTER TABLE `fos_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_957A647992FC23A8` (`username_canonical`),
  ADD UNIQUE KEY `UNIQ_957A6479A0D96FBF` (`email_canonical`),
  ADD UNIQUE KEY `UNIQ_957A6479C05FB297` (`confirmation_token`);

--
-- 表的索引 `options`
--
ALTER TABLE `options`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_D035FA87A977936C` (`tree_root`),
  ADD KEY `IDX_D035FA87727ACA70` (`parent_id`),
  ADD KEY `lft_ix` (`lft`),
  ADD KEY `rgt_ix` (`rgt`),
  ADD KEY `lft_rgt_ix` (`lft`,`rgt`),
  ADD KEY `lvl_ix` (`lvl`);

--
-- 表的索引 `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_1ADAD7EB708A0E0` (`gender_id`),
  ADD KEY `IDX_1ADAD7EB28722836` (`scholarship_id`),
  ADD KEY `IDX_1ADAD7EB9DAE1DA4` (`marriage_id`),
  ADD KEY `IDX_1ADAD7EBB58CDA09` (`career_id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `fos_user`
--
ALTER TABLE `fos_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 使用表AUTO_INCREMENT `options`
--
ALTER TABLE `options`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- 使用表AUTO_INCREMENT `patient`
--
ALTER TABLE `patient`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- 限制导出的表
--

--
-- 限制表 `options`
--
ALTER TABLE `options`
  ADD CONSTRAINT `FK_D035FA87727ACA70` FOREIGN KEY (`parent_id`) REFERENCES `options` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_D035FA87A977936C` FOREIGN KEY (`tree_root`) REFERENCES `options` (`id`) ON DELETE CASCADE;

--
-- 限制表 `patient`
--
ALTER TABLE `patient`
  ADD CONSTRAINT `FK_1ADAD7EB28722836` FOREIGN KEY (`scholarship_id`) REFERENCES `options` (`id`),
  ADD CONSTRAINT `FK_1ADAD7EB708A0E0` FOREIGN KEY (`gender_id`) REFERENCES `options` (`id`),
  ADD CONSTRAINT `FK_1ADAD7EB9DAE1DA4` FOREIGN KEY (`marriage_id`) REFERENCES `options` (`id`),
  ADD CONSTRAINT `FK_1ADAD7EBB58CDA09` FOREIGN KEY (`career_id`) REFERENCES `options` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

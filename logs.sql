-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2025-03-30 14:10:16
-- 伺服器版本： 10.4.32-MariaDB
-- PHP 版本： 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `ブルアカ`
--

-- --------------------------------------------------------

--
-- 資料表結構 `logs`
--

CREATE TABLE `logs` (
  `id` int(11) NOT NULL,
  `text` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `logs`
--

INSERT INTO `logs` (`id`, `text`, `date`) VALUES
(1, 'modal強化(點旁邊可直接關閉)', '2025-02-05 11:14:00'),
(2, '後台 uiux增強 修改一些icon變成英文', '2025-02-04 11:27:27'),
(3, '更新: login以ajax方式登入', '2025-02-06 11:28:49'),
(4, '初版上線', '2025-02-03 11:50:25'),
(5, '更新: 完成後台學校(select選擇)/增加前後台學生介紹:學校跟社團', '2025-02-09 11:56:12'),
(6, '更新學生介紹 內頁學園,社團/學生介紹底下能選左右學生(id)', '2025-02-10 11:57:54'),
(7, '更新: 後台更新selete 內增加圖片(select2)', '2025-02-11 11:58:14'),
(8, '更新uiux強化 登入直接按enter即可/更新標題圖片更換功能 ', '2025-02-12 11:59:21'),
(9, '修改刪除邏輯 把js集中在.js檔', '2025-02-13 12:02:18'),
(10, '更新 註冊功能', '2025-03-28 12:07:25'),
(11, 'debug js login', '2025-03-29 12:07:53'),
(12, '前台rwd(兩版)完成', '2025-03-30 12:09:07');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `logs`
--
ALTER TABLE `logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- 主機： localhost
-- 產生時間： 2025 年 04 月 13 日 11:36
-- 伺服器版本： 10.3.39-MariaDB-0ubuntu0.20.04.2
-- PHP 版本： 7.4.3-4ubuntu2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `s1130203`
--

-- --------------------------------------------------------

--
-- 資料表結構 `admin`
--

CREATE TABLE `admin` (
  `id` int(10) UNSIGNED NOT NULL,
  `acc` text NOT NULL,
  `pw` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `admin`
--

INSERT INTO `admin` (`id`, `acc`, `pw`) VALUES
(1, '111', '0000'),
(2, '333', '333'),
(4, '1111', '00000'),
(5, 'admin', '1234'),
(6, 'test', '1234'),
(7, 'a', 'aaa\'l');

-- --------------------------------------------------------

--
-- 資料表結構 `bottom`
--

CREATE TABLE `bottom` (
  `id` int(1) UNSIGNED NOT NULL,
  `bottom` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `bottom`
--

INSERT INTO `bottom` (`id`, `bottom`) VALUES
(1, '© NEXON Korea Corp. All Right Reserved.');

-- --------------------------------------------------------

--
-- 資料表結構 `comics`
--

CREATE TABLE `comics` (
  `id` int(10) UNSIGNED NOT NULL,
  `img` text NOT NULL,
  `sh` int(1) UNSIGNED NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `comics`
--

INSERT INTO `comics` (`id`, `img`, `sh`) VALUES
(1, 'comic_1.jpg', 1),
(2, 'comic_2.jpg', 1),
(3, 'comic_3.jpg', 1),
(4, 'comic_4.jpg', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `introductions`
--

CREATE TABLE `introductions` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `logo` text NOT NULL COMMENT '頭像',
  `img` text NOT NULL COMMENT '大圖',
  `schools` text NOT NULL COMMENT '學校',
  `societies` text NOT NULL COMMENT '社團',
  `sh` int(1) NOT NULL DEFAULT 1,
  `text` text NOT NULL COMMENT '文字介紹'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `introductions`
--

INSERT INTO `introductions` (`id`, `name`, `logo`, `img`, `schools`, `societies`, `sh`, `text`) VALUES
(3, 'カズサ', 'kazusa_logo.png', 'kazusa.jpg', 'toriniti', '放課後スイーツ部', 1, '【生徒紹介】a\r\n放課後スイーツ部に所属するゆったりとした静かな性格のカズサさん。\r\nいつも部員の皆さんの奇行に巻き込まれて苦労をしている一方で、\r\nそういう所も大切に思っている心優しい生徒さんです！\r\n\r\n「うん、たまにはこういうのも悪くない 」                                                                                                                                                                                                                                                                                                                                                                                                '),
(4, 'キサキ', 'kisaki-logo.png', 'kisaki.jpg', 'sengaikyo', '玄龍門', 1, '【生徒紹介】\r\n山海経高級中学校所属、生徒会「玄龍門」の門主、キサキさん。\r\n古風で威厳のある言葉遣いと、どこか神秘的にも感じられる印象が相まって、\r\n近寄りがたい雰囲気を漂わせていますが、\r\n本人はむしろ、\r\nそのイメージを職務に活用しているのだとか…。\r\n\r\n「さて、妾に何を見せてくれるのじゃ？」                                                                                                                                                                                                                                                                                                                                                                                                '),
(5, 'キララ', 'kirara-logo.png', 'kirara.jpg', 'gehenna', 'キラキラ部', 1, '【生徒紹介】\r\nゲヘナ学園所属、明るい性格の持ち主のキララさん。\r\n初めて出会った人とも仲良くおしゃべりできるくらい、誰とでも仲良くなれるみたいです！\r\n\r\n「夜桜キララ、楽しむ準備完了～！」                                                                                                                                                                                                                                                                                                                                                                                                '),
(6, 'ミカ', 'mika-logo.png', 'mika.jpg', 'toriniti', 'ティーパーティー ', 1, '【生徒紹介】\r\nトリニティの生徒会「ティーパーティー」の元メンバーであるミカさん。\r\nいつも楽しそうに笑い、無邪気な姿を見せるミカさんですが、人に言えない悩みを胸の裡に抱えているようで…。\r\n\r\n「うん、お待たせ！これからはなんでも私に任せてね☆」                                                                                                                                                                                                                                                                                                                                                                                                 '),
(7, 'セイア', 'seia-logo.png', 'seia.jpg', 'toriniti', 'ティーパーティー ', 1, '【生徒紹介】\r\nトリニティ総合学園所属、\r\n生徒連合「サンクトゥス」のリーダーにしてティーパーティーの一員であるセイアさん。\r\n衒学的でつかみどころのない口調で話す生徒さん。\r\n大の本好きだとか…？？\r\n\r\n「いずれ――道は繋がるだろう。」                                                                                                                                                                                                                                                                                                                                                                                                '),
(8, 'マリー', 'mari-logo.png', 'mari.jpg', 'toriniti', 'シスターフッド', 1, '【生徒紹介】\r\nシスターフッドのシスターにして、\r\nアイドルユニット「アンティーク・セラフィム」のメンバーであるマリーさん。\r\n人助けから始めたアイドル活動でしたが、\r\nマリーさんの「みんなを幸せにしたい」という想いはアイドルに向いていたようで…。\r\n\r\n「本当は……憧れていたんです、アイドルに」                                                                                                                                                                                                                                                                                                                                                                                                '),
(9, 'リオ', 'rio_logo.png', 'rio.jpg', 'minenia', 'セミナー', 1, '【生徒紹介】\r\nミレニアムサイエンススクール所属、生徒会「セミナー」の会長であるリオさん。\r\n合理主義者で、ミレニアムと世界の安全のためなら手段を選ばないことから、\r\n「ビッグシスター」と呼ばれるようになったのだとか…。\r\nまた「アバンギャルド君」をはじめ、\r\n独創的なセンスの持ち主でもあるみたいです！\r\n\r\n「光のない場所で再会するでしょう。」                                                                                                                                                                                                                                                                                                                                 ');

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

-- --------------------------------------------------------

--
-- 資料表結構 `news`
--

CREATE TABLE `news` (
  `id` int(10) UNSIGNED NOT NULL,
  `text` text NOT NULL,
  `look` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `love` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `sh` int(1) UNSIGNED NOT NULL DEFAULT 1,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `news`
--

INSERT INTO `news` (`id`, `text`, `look`, `love`, `sh`, `date`) VALUES
(1, '▎免費招募「100次」活動公告\r\n2025.01.30 10:00\r\n 啊……啊……！！夏萊行政室帶來了活動消息～\r\n\r\n老師，免費招募「100次」活動即將重新回歸啦！\r\n正在等待1月30日(四)開始進行的沙織(泳裝)、日和(泳裝)招募的老師，千萬別錯過這個大好機會唷！\r\n\r\n \r\n\r\n 活動期間\r\n\r\n- 1月30日(四) 上午10點 ~ 2月8日(六) 上午9點59分為止\r\n\r\n \r\n\r\n 活動內容\'', 0, 0, 1, '2025-02-13 03:20:00'),
(2, '▎免費招募「100次」活動公告\r\n2025.01.30 10:00\r\n 啊……啊……！！夏萊行政室帶來了活動消息～\r\n\r\n老師，免費招募「100次」活動即將重新回歸啦！\r\n正在等待1月30日(四)開始進行的沙織(泳裝)、日和(泳裝)招募的老師，千萬別錯過這個大好機會唷！\r\n\r\n \r\n\r\n 活動期間\r\n\r\n- 1月30日(四) 上午10點 ~ 2月8日(六) 上午9點59分為止\r\n\r\n \r\n\r\n 活動內容\'', 0, 0, 1, '2025-02-13 03:20:00'),
(3, '▎1/30 (四) 特別特選招募公告\r\n2025.01.29 17:00\r\n\r\n 啊……啊…！！夏萊行政室帶來了活動消息～\r\n\r\n以下是1月30日(四)10點後，開啟的沙織(泳裝)、日和(泳裝)特別特選招募說明！\r\n\r\n請各位老師要好好把握，在特選期間招募到想要的學生喔！\r\n\r\n \r\n\r\n[特別特選招募 – 沙織(泳裝)、日和(泳裝)]\r\n\r\n* 特別特選招募期間 : 1月30日(四)上午10點 ~ 2月8日(六)上午9點59分\r\n\r\n- 各個特選招募套用對應學生的特選招募機率。\r\n\r\n(例如：沙織(泳裝)(★3)特選招募中套用了「沙織(泳裝)(★3)」的特選機率。)\r\n\r\n- 特別特選招募期間可以使用招募點數選擇招募特別特選招募的對象學生。\r\n\r\n- 特別特選招募學生僅在特別特選招募期間也可透過「常態招募」獲得。\r\n\r\n- 雖然期間尚未確定，但特別特選招募在日後有機會再次進行。\r\n\r\n \r\n1) 沙織(泳裝)(★3)特別特選招募                                                                                                                                                                                                                                                                                                                                                                                                                        ', 0, 0, 1, '2025-02-13 03:20:00'),
(4, '▎〈The Promise at Sunset〉數位串流音源發行！\r\n2025.01.25 12:00\r\n\r\n啊……啊…！！夏萊行政室帶來了消息～\r\n老師，主線劇情 Vol.1〈對策委員會〉篇第 3 章〈夢留下的痕跡〉插曲〈The Promise at Sunset〉的數位音源發行了！\r\n\r\n在《蔚藍檔案》官方 YouTube 頻道中可以確認到 MV，請各位老師多多關注，\r\n未來也敬請期待以優美的旋律與老師見面的瞬間吧！\r\n\r\n???? 〈The Promise at Sunset〉數位音源發行通知\r\n\r\n-  透過以下平台可以使用串流服務以及下載\r\n[立即前往〈The Promise at Sunset〉數位串流音源]\r\n                                                                                                                                                                                                                                                                                                                                                                                                                        ', 0, 0, 1, '2025-02-13 03:20:00'),
(5, '▎1/23 (四) 更新紀念優惠券號碼 4 種總整理！\r\n2025.01.25 11:01\r\n\r\n 啊…啊…！！夏萊行政室帶來了活動消息～ \r\n\r\n老師，〈Sheside outside〉更新和〈The Promise at Sunset〉MV 都有開心地體驗和欣賞了嗎？\r\n\r\n為了給老師更加有趣的經驗，準備了優 4 種惠券號碼！\r\n\r\n尚未領取的老師請參考以下內容將所有禮物帶走吧\r\n\r\n\r\n優惠券號碼通知\r\n\r\n1) [更新 D-３] Sheside outside 更新紀念倒數活動！                                                                                                                                                                                                                                                                                                                                                                                                                        ', 0, 0, 1, '2025-02-13 03:20:00'),
(6, '▎〈The Promise at Sunset〉MV 公開紀念特別獎勵！\r\n2025.01.25 11:00\r\n\r\n啊……啊……！！夏萊行政室帶來了活動消息～\r\n老師，〈The Promise at Sunset〉MV 在《蔚藍檔案》官方YouTube公開了！\r\n\r\n在《蔚藍檔案》官方YouTube欣賞新的 MV，並且領取公告內公開的優惠券號碼獎勵吧~\r\n\r\n [立即前往《蔚藍檔案》官方YouTube頻道]\r\n\r\n \r\n\r\n在活動期間內，透過為了紀念活動劇情〈Sheside outside〉更新的倒數活動公開的優惠券號碼3 種也可一起使用，尚未確認並使用的老師可透過以下公告確認各 D-Day 的優惠券號碼唷！\r\n\r\n[立即前往[更新 D-1]〈Sheside outside〉更新紀念倒數活動！公告]\r\n\r\n \r\n\r\n \r\n活動期間\r\n\r\n- 1 月 25 日 (六) 上午 11 點 ~ 2 月 8 日 (六) 下午 10 點 59 分\r\n\r\n 活動內容\r\n\r\n- 於活動期間內輸入「優惠券號碼」，禮物就會發送至老師們的信箱。 (郵件保管日為 7 日，每個帳號限領 1 次)                                                                                                                                                                                                                                                                                                                                                                                                                        ', 0, 0, 1, '2025-02-13 03:20:00'),
(7, '教師研習「世界公民生命園丁國內研習會」\r\n1.主辦單位：世界展望會\r\n2.研習日期：101年11月14日（三）～15日（四）\r\n3.詳情請參考：\r\nhttp://gc.worldvision.org.tw/seed.html。\r\n請線上報名。                                                                                                                                                                                                                                                                                                                                                                                                                        ', 0, 0, 0, '2025-02-13 03:20:00'),
(8, '▎部分裝置發生閃退/瞬斷的現象通知\r\n2025.01.24 15:30\r\n目前確認使用部分裝置進行遊戲時會發生閃退／瞬斷的現象。\r\n\r\n該現象是根據使用的裝置及環境而發生，目前正在確認具體的原因。\r\n進行遊戲中有發生閃退現象的老師，請變更使用環境再嘗試登入遊玩。\r\n造成您的不便敬請見諒。\r\n後續若有相關更新事項，會再透過本公告通知。                                                                                                                                                                                                                                                                                                ', 0, 0, 1, '2025-02-13 03:20:00'),
(9, '▎1/23 (四) 無中斷更新公告\r\n2025.01.23 18:15\r\n為了提供穩定的遊戲環境，1月23日(四)預計進行無中斷更新。\r\n\r\n \r\n[1月23日(四)無中斷更新公告]\r\n\r\n1. 時間：1月23日(四) 18:20 ~ 18:50\r\n\r\n2. 影響：作業期間可以使用遊戲\r\n*作業期間雖可以使用遊戲，但可能會發生閃退或連線中斷的現象，因此請避免在該期間內進行交易、招募、戰術大賽等主要遊戲內容。\r\n\r\n3. 修正內容：\r\n- 部分帳號無法登入遊戲的現象\r\n\r\n為了提供穩定的遊戲環境，我們會持續努力。\r\n\r\n※ 參考事項\r\n∙ 該公告內容有可能會變更、修正或刪除，煩請持續留意。                                                                                                                                                                                                                                                                                                ', 0, 0, 1, '2025-02-13 03:20:00'),
(10, '▎1/23 (四) 慶典招募公告\r\n2025.01.22 17:00\r\n啊……啊……！！夏萊行政室帶來了活動消息～\r\n\r\n以下是 1/23 (四) 維護後，開啟的星野(武裝)、白子＊TERROR、彌香慶典招募說明！\r\n\r\n請各位老師要好好保握特選期間，招募到想要的學生喔！ \r\n\r\n \r\n[1月23日(四)慶典招募]\r\n\r\n* 慶典招募期間：1 月 23 日 (四) 維護後 ~ 1 月 30 日 (四) 上午 9 點 59 分\r\n- 慶典招募期間★3 學生的獲得機率總和增加為 2 倍。\r\n(原本：3.0%  → 慶典招募期間：6.0%)\r\n- 慶典招募學生僅能在慶典招募期間獲得，在該期間不會進行「常態招募」。\r\n- 慶典招募期間可以使用招募點數選擇招募「星野(武裝)(★3)」、「白子＊TERROR(★3)」、「彌香(★3)」。\r\n- 雖然日程尚未確定，但慶典招募可能會在日後再次進行。\r\n! 慶典招募期間，先前的慶典招募學生「若藻(★3)」、「星野(泳裝)(★3)、花子(泳裝)(★3)、陽奈(禮服)(★3)」也會加入可以獲得的學生清單內。\r\n\r\n1) 星野(武裝)(★3)慶典招募                                                                                                                                                                                                                                                                                                ', 0, 0, 1, '2025-02-13 03:20:00'),
(11, '▎1/23 (四) 更新定期維護公告\r\n2025.01.20 17:00\r\n夏萊行政室帶來了消息~\r\n\r\n以下時間將進行為優化遊戲以及穩定性的作業，因此預計進行維護。\r\n\r\n[1 月 23 日 (四) 更新定期維護說明]\r\n\r\n1. 時間：1 月 23 日 (四) 上午 10 點 ~ 下午 4 點3點50分\r\n2. 影響：維護期間無法登入遊戲\r\n\r\n3. 補償：青輝石 720 個\r\n\r\n4. 維護內容：詳細內容預計後續追加說明\r\n\r\n5. 變更以及結束的主要內容                                                                                                                                                                                                                                                                                                ', 0, 0, 1, '2025-02-13 03:20:00'),
(12, '▎1/16 (四) 特選招募公告\r\n2025.01.15 17:00\r\n啊……啊……！！夏萊行政室帶來了活動消息～\r\n\r\n \r\n以下是1月16日(四)上午10點後，開啟的陽奈、星野特選招募說明！\r\n\r\n請各位老師要好好保握特選期間，招募到想要的學生喔~！\r\n \r\n[1月16日(四)特選招募]\r\n\r\n* 特選招募期間：1月16日(四)上午10點 ~ 1月23日(四)上午9點59分\r\n\r\n- 各個特選招募套用對應學生的特選招募機率。\r\n\r\n(例如：陽奈(★3)特選招募中套用了「陽奈(★3)」的特選機率。)\r\n\r\n-「陽奈(★3)」、「星野(★3)」特選於期間內，也可透過常態招募獲得；在特選期間結束後仍可以透過常態招募獲得。\r\n\r\n- 特選招募期間可以使用招募點數選擇招募「陽奈(★3)」、「星野(★3)」。                                                                                                                                                                                                                                                                        ', 0, 0, 1, '2025-02-13 03:20:00');

-- --------------------------------------------------------

--
-- 資料表結構 `titles`
--

CREATE TABLE `titles` (
  `id` int(10) UNSIGNED NOT NULL,
  `img` text NOT NULL,
  `text` text NOT NULL,
  `sh` int(1) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `titles`
--

INSERT INTO `titles` (`id`, `img`, `text`, `sh`) VALUES
(1, '6454.png', '586499', 0),
(2, 'BAShesideOutside1920x243TW.png', '889DE3', 0),
(3, 'ba_title2025_03.png', 'a14d48', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `total`
--

CREATE TABLE `total` (
  `id` int(1) UNSIGNED NOT NULL,
  `total` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `total`
--

INSERT INTO `total` (`id`, `total`) VALUES
(1, 6062);

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `bottom`
--
ALTER TABLE `bottom`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `comics`
--
ALTER TABLE `comics`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `introductions`
--
ALTER TABLE `introductions`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `titles`
--
ALTER TABLE `titles`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `total`
--
ALTER TABLE `total`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `bottom`
--
ALTER TABLE `bottom`
  MODIFY `id` int(1) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `comics`
--
ALTER TABLE `comics`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `introductions`
--
ALTER TABLE `introductions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `logs`
--
ALTER TABLE `logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `news`
--
ALTER TABLE `news`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `titles`
--
ALTER TABLE `titles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `total`
--
ALTER TABLE `total`
  MODIFY `id` int(1) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- ホスト: localhost
-- 生成日時: 2023 年 7 月 13 日 18:28
-- サーバのバージョン： 10.4.28-MariaDB
-- PHP のバージョン: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `kadai08`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `kadai_table`
--

CREATE TABLE `kadai_table` (
  `id` int(12) NOT NULL,
  `date` datetime NOT NULL,
  `prompt1` text NOT NULL,
  `generate` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `kadai_table`
--

INSERT INTO `kadai_table` (`id`, `date`, `prompt1`, `generate`) VALUES
(24, '2023-07-06 23:35:49', '高い山を一つ教えてください', '日本では最も高い山は富士山だと思います。'),
(26, '2023-07-08 13:26:54', '高い山を一つ教えてください', '。 富士山'),
(28, '2023-07-08 13:30:04', '高い山を一つ教えてください', '。 富士山....\r\n'),
(30, '2023-07-14 01:00:08', '高い山を一つ教えてください', '日本では最高山は富士山なのであります！！！'),
(31, '2023-07-14 01:07:40', '高い山を一つ教えてください', '。日本では富士山(ふじさん）です。\r\n\r\nMount Fuji is the highest mountain in Japan. It is 3,776 meters high.'),
(32, '2023-07-14 01:10:42', '高い山を一つ教えてください', '。\r\n\r\nThere are many high mountains in the world, but Mount Everest is the highest of them all.'),
(33, '2023-07-14 01:15:01', '高い山を一つ教えてください', '。\r\n\r\nThere are many high mountains in the world, but Mount Everest is the highest of them all.'),
(43, '2023-07-14 01:24:04', '高い山を一つ教えてください', '。\r\n\r\n日本の最高山は、富士山です。');

-- --------------------------------------------------------

--
-- テーブルの構造 `kadai_user_table`
--

CREATE TABLE `kadai_user_table` (
  `id` int(12) NOT NULL,
  `name` varchar(64) NOT NULL,
  `lid` varchar(128) NOT NULL,
  `lpw` varchar(64) NOT NULL,
  `kanri_flg` int(1) NOT NULL,
  `life_flg` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `kadai_user_table`
--

INSERT INTO `kadai_user_table` (`id`, `name`, `lid`, `lpw`, `kanri_flg`, `life_flg`) VALUES
(1, 'テスト１管理者', 'test1', 'test1', 1, 0),
(2, 'テスト2一般', 'test2', 'test2', 0, 0),
(3, 'テスト３', 'test3', 'test3', 0, 0);

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `kadai_table`
--
ALTER TABLE `kadai_table`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `kadai_user_table`
--
ALTER TABLE `kadai_user_table`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `kadai_table`
--
ALTER TABLE `kadai_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- テーブルの AUTO_INCREMENT `kadai_user_table`
--
ALTER TABLE `kadai_user_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 21 Oca 2019, 13:43:44
-- Sunucu sürümü: 10.1.37-MariaDB
-- PHP Sürümü: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `kpss`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ders`
--

CREATE TABLE `ders` (
  `ders_id` int(11) NOT NULL,
  `ders_adi` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `menu`
--

CREATE TABLE `menu` (
  `menu_id` int(5) NOT NULL,
  `menu_title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `menu`
--

INSERT INTO `menu` (`menu_id`, `menu_title`) VALUES
(6, 'gelişim psikolojisi'),
(7, 'öğrenim psikolojisi');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `soru`
--

CREATE TABLE `soru` (
  `id` int(11) NOT NULL,
  `ders_id` int(11) NOT NULL,
  `yil` int(11) NOT NULL,
  `soru` text NOT NULL,
  `a` text NOT NULL,
  `b` text NOT NULL,
  `c` text NOT NULL,
  `d` text NOT NULL,
  `e` text NOT NULL,
  `cevap` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sorular`
--

CREATE TABLE `sorular` (
  `id` int(11) NOT NULL,
  `menu_id` text NOT NULL,
  `soru` text NOT NULL,
  `a` text NOT NULL,
  `b` text NOT NULL,
  `c` text NOT NULL,
  `d` text NOT NULL,
  `e` text NOT NULL,
  `cevap` text NOT NULL,
  `aciklama` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `sorular`
--

INSERT INTO `sorular` (`id`, `menu_id`, `soru`, `a`, `b`, `c`, `d`, `e`, `cevap`, `aciklama`) VALUES
(6, '5-7', '0', 'w', 'w', 'w', 'w', 'w', '1', 'w'),
(7, '6-13-16', 'q', 'q', 'q', 'q', 'q', 'q', '2', 'q');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `submenu1`
--

CREATE TABLE `submenu1` (
  `submenu_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `submenu_title` text NOT NULL,
  `child` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `submenu1`
--

INSERT INTO `submenu1` (`submenu_id`, `menu_id`, `submenu_title`, `child`) VALUES
(13, 6, 'denemeler', 1),
(14, 6, 'konu testleri', 1),
(15, 7, 'çıkmış sorular', 1),
(16, 6, 'çift şık', 0);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `submenu2`
--

CREATE TABLE `submenu2` (
  `submenu_id` int(5) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `submenu_title` text NOT NULL,
  `child` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `submenu2`
--

INSERT INTO `submenu2` (`submenu_id`, `menu_id`, `submenu_title`, `child`) VALUES
(16, 13, 'deneme 1', 0),
(17, 14, 'test1', 0),
(18, 15, '2011', 0);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `submenu3`
--

CREATE TABLE `submenu3` (
  `submenu_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `submenu_title` text NOT NULL,
  `child` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`menu_id`);

--
-- Tablo için indeksler `soru`
--
ALTER TABLE `soru`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `sorular`
--
ALTER TABLE `sorular`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `submenu1`
--
ALTER TABLE `submenu1`
  ADD PRIMARY KEY (`submenu_id`);

--
-- Tablo için indeksler `submenu2`
--
ALTER TABLE `submenu2`
  ADD PRIMARY KEY (`submenu_id`);

--
-- Tablo için indeksler `submenu3`
--
ALTER TABLE `submenu3`
  ADD PRIMARY KEY (`submenu_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `menu`
--
ALTER TABLE `menu`
  MODIFY `menu_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Tablo için AUTO_INCREMENT değeri `soru`
--
ALTER TABLE `soru`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `sorular`
--
ALTER TABLE `sorular`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Tablo için AUTO_INCREMENT değeri `submenu1`
--
ALTER TABLE `submenu1`
  MODIFY `submenu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Tablo için AUTO_INCREMENT değeri `submenu2`
--
ALTER TABLE `submenu2`
  MODIFY `submenu_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Tablo için AUTO_INCREMENT değeri `submenu3`
--
ALTER TABLE `submenu3`
  MODIFY `submenu_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

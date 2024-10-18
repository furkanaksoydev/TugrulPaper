-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 18 Eki 2024, 18:33:00
-- Sunucu sürümü: 10.4.32-MariaDB
-- PHP Sürümü: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `tugrulwallpaper`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanicilar`
--

CREATE TABLE `kullanicilar` (
  `Kullanici_ID` int(11) NOT NULL,
  `Kullanici_Adi` varchar(16) NOT NULL,
  `Kullanici_EPosta` varchar(30) NOT NULL,
  `Kullanici_Sifre` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `kullanicilar`
--

INSERT INTO `kullanicilar` (`Kullanici_ID`, `Kullanici_Adi`, `Kullanici_EPosta`, `Kullanici_Sifre`) VALUES
(1, 'Tuğrul', 'tuğrul@gmail.com', 'tuğrul123'),
(2, 'Furkan', 'furkankdzc@gmail.com', 'furkan123'),
(3, 'soner', 'soner@gmail.com', 'soner123');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `resimler`
--

CREATE TABLE `resimler` (
  `Resim_ID` int(11) NOT NULL,
  `Resim_Adi` varchar(16) NOT NULL,
  `Resim_Kodu` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `resimler`
--

INSERT INTO `resimler` (`Resim_ID`, `Resim_Adi`, `Resim_Kodu`) VALUES
(1, 'Naruto Shuriken', 'naruto.jpg'),
(2, 'Kaneki', 'kaneki.jpg'),
(3, 'Orochimaru', 'orochimaru.jpg'),
(4, 'Zetsu', 'zetsu.jpg'),
(5, 'Ramen', 'ramen.jpg'),
(6, 'Eren Titan', 'eren.jpg'),
(7, 'Jiraiya', '4203226902.jpeg'),
(8, 'Zero Two', '3792213597.jpg'),
(9, 'Demon', '3695517464.jpg'),
(10, 'Girl', '3518232959.jpg'),
(11, 'Manzara', '1861523100.jpg');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `kullanicilar`
--
ALTER TABLE `kullanicilar`
  ADD PRIMARY KEY (`Kullanici_ID`);

--
-- Tablo için indeksler `resimler`
--
ALTER TABLE `resimler`
  ADD PRIMARY KEY (`Resim_ID`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `kullanicilar`
--
ALTER TABLE `kullanicilar`
  MODIFY `Kullanici_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tablo için AUTO_INCREMENT değeri `resimler`
--
ALTER TABLE `resimler`
  MODIFY `Resim_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

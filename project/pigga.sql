-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 15 Oca 2023, 20:10:27
-- Sunucu sürümü: 10.4.25-MariaDB
-- PHP Sürümü: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `pigga`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `admin`
--

CREATE TABLE `admin` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `alt_yemekler`
--

CREATE TABLE `alt_yemekler` (
  `id` int(11) UNSIGNED NOT NULL,
  `yemekAdi` varchar(100) NOT NULL,
  `yemekFiyat` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `alt_yemekler`
--

INSERT INTO `alt_yemekler` (`id`, `yemekAdi`, `yemekFiyat`) VALUES
(2, 'Deneme', '50'),
(11, 'Çorba', '45'),
(12, 'Kahvaltı', '99'),
(14, 'simit', '7');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `rezervasyon`
--

CREATE TABLE `rezervasyon` (
  `id` int(11) UNSIGNED NOT NULL,
  `isim` varchar(150) NOT NULL,
  `soyad` varchar(200) NOT NULL,
  `telefon` varchar(11) NOT NULL,
  `masa` varchar(50) NOT NULL,
  `rezSaati` datetime NOT NULL,
  `rezYapan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `rezervasyon`
--

INSERT INTO `rezervasyon` (`id`, `isim`, `soyad`, `telefon`, `masa`, `rezSaati`, `rezYapan`) VALUES
(58, 'Eren', 'Şengül', '05458966254', '9', '2023-01-29 19:02:00', '23'),
(60, 'Eren', 'Şengül', '05458966254', '11', '2023-01-19 17:30:00', '23'),
(61, 'Mustafa', 'Koca', '12345678902', '9', '2023-01-10 17:08:00', '24'),
(62, 'Eren', 'Şengül', '05458966254', '12', '2023-01-10 15:06:00', '24'),
(63, 'Mustafa', 'Koca', '12345678996', '5', '2023-01-10 17:10:00', '24'),
(66, 'Eren', 'Şengül', '05458966254', '3', '2023-01-28 16:30:00', '23'),
(67, 'qweqeqwe', 'Şengül', '05458966254', '10', '2023-01-13 19:10:00', '23'),
(68, 'Eren', 'Şengül', '05458966254', '1', '2023-01-11 18:05:00', '23'),
(70, 'Eren', 'Şengül', '05458966254', '8', '2023-01-14 21:58:00', '23'),
(71, 'Erinç', 'Karataş', '78945632102', '2', '2023-01-15 15:00:00', '25'),
(72, 'Mert', 'Karataş', '45698712302', '7', '2023-01-15 15:00:00', '25'),
(73, 'sdjfkshadk', 'ahaks', '12365478958', '10', '2023-01-13 15:50:00', '25'),
(75, 'Salih', 'Kara', '12345678935', '1', '2023-01-15 16:00:00', '26'),
(77, 'Mert', 'Karataş', '12345678965', '5', '2023-01-16 19:30:00', '25');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `uyeler`
--

CREATE TABLE `uyeler` (
  `id` int(11) UNSIGNED NOT NULL,
  `isim` varchar(50) NOT NULL,
  `soyisim` varchar(50) NOT NULL,
  `telefon` varchar(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `sifre` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `uyeler`
--

INSERT INTO `uyeler` (`id`, `isim`, `soyisim`, `telefon`, `email`, `sifre`) VALUES
(23, 'Eren', 'Şengül', '05458966255', 'erensengull6@hotmail.com', 'c374a9699893675ca2f3b2aad2646fba'),
(24, 'Efe', 'Koca', '12345678998', 'efekoca123456789@gmail.com', 'afabbd54d7765b0c98dedea6f0cdf49c'),
(25, 'Erinç', 'Karataş', '01234567890', 'erinc@gmail.com', '144c5e52adfb60762b319eb484ce1b14'),
(26, 'Mert', 'Kara', '01597532547', 'mert@gmail.com', 'b8a5d0ebbdbad04d341c1f07fcbf4412');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yemekler`
--

CREATE TABLE `yemekler` (
  `id` int(11) UNSIGNED NOT NULL,
  `yemekAdi` varchar(100) NOT NULL,
  `yemekAciklama` varchar(500) NOT NULL,
  `yemekFiyat` varchar(100) NOT NULL,
  `yemekFoto` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `yemekler`
--

INSERT INTO `yemekler` (`id`, `yemekAdi`, `yemekAciklama`, `yemekFiyat`, `yemekFoto`) VALUES
(18, 'Kebap', 'Türk mutfağının vazgeçilmez lezzeti', '110', 'de9bb6fa4694518f20aacdbd34399de0.webp'),
(26, 'Hünkar Beğendi', ' Közlenmiş patlıcan ve meyane ile hazırlanmış bir yatak üzerinde pişirilmiş etin servis edildiği bir Türk lezzeti.', '80', '990ba8ccd0731ba6e5071d9f4f8b1e1e.jpg'),
(27, 'İskender', 'İskender kebabı, tırnak pidesi denilen ince bir ekmek yatağında domates sosuyla servis edilir. Daha sonra üzerine eritilmiş tereyağında gezdirilir ve yanında yoğurtla yenir.', '120', '08751626ed2da3eb680dae2ee5d5ad70.jpg'),
(28, 'Lahmacun', 'Çıtır hamuruyla lezzeti doruklara çıkaracak.', '90', 'f17d769b47d27fe20a5a720e086f154a.jpg'),
(30, 'pizza', 'lezzetli', '110', '24fa8b5b0d6c4c9434c750ee86c46cef.webp');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `alt_yemekler`
--
ALTER TABLE `alt_yemekler`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `rezervasyon`
--
ALTER TABLE `rezervasyon`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `uyeler`
--
ALTER TABLE `uyeler`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `yemekler`
--
ALTER TABLE `yemekler`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `alt_yemekler`
--
ALTER TABLE `alt_yemekler`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Tablo için AUTO_INCREMENT değeri `rezervasyon`
--
ALTER TABLE `rezervasyon`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- Tablo için AUTO_INCREMENT değeri `uyeler`
--
ALTER TABLE `uyeler`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- Tablo için AUTO_INCREMENT değeri `yemekler`
--
ALTER TABLE `yemekler`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

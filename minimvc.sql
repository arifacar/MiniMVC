-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 27 Ara 2015, 22:38:31
-- Sunucu sürümü: 5.6.21
-- PHP Sürümü: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Veritabanı: `minimvc`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `category`
--

CREATE TABLE IF NOT EXISTS `category` (
`ID` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `category`
--

INSERT INTO `category` (`ID`, `name`) VALUES
(1, 'Menu Content'),
(2, 'News');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `content`
--

CREATE TABLE IF NOT EXISTS `content` (
`ID` int(11) NOT NULL,
  `title` text CHARACTER SET utf8,
  `seo_title` text CHARACTER SET utf8,
  `seo_desc` text CHARACTER SET utf8,
  `seo_keywords` text CHARACTER SET utf8,
  `permalink` text CHARACTER SET utf8,
  `description` text CHARACTER SET utf8,
  `content` text CHARACTER SET utf8,
  `image` text CHARACTER SET utf8,
  `thumbnail` varchar(250) CHARACTER SET utf8 DEFAULT NULL,
  `categoryID` int(11) DEFAULT NULL,
  `lang` varchar(11) CHARACTER SET utf8 DEFAULT NULL,
  `create_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `publish_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(11) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=80 DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `content`
--

INSERT INTO `content` (`ID`, `title`, `seo_title`, `seo_desc`, `seo_keywords`, `permalink`, `description`, `content`, `image`, `thumbnail`, `categoryID`, `lang`, `create_date`, `publish_date`, `status`) VALUES
(1, 'Ulaşmaya çalıştığınız sayfa bulunamadı.', '404 - Sayfa Bulunamadı!', 'Sayfa Bulunamadı', '404, Sayfa Bulunamadı', '404', 'Lütfen ulaşmak istediğiniz sayfanın adresini doğru yazdığınızı kontrol edin.', '<p align="justify">Lütfen ulaşmak istediğiniz sayfanın adresini doğru yazdığınızı kontrol edin.</p>\r\n\r\n<p align="justify"> Eğer doğru adresi yazdığınıza eminseniz, ulaşmak istediğiniz sayfa silinmiş olabilir.</p>', '', '', 1, 'tr', '0000-00-00 00:00:00', '2015-09-24 21:39:43', 1),
(2, 'Page not found.', '404 - Page not found.!', 'Page not found', '404, Page not found', '404', 'Page not found.', '<p align="justify">It looks like nothing was found at this location. Maybe try a search?</p><p align="justify">Refresh the page for a new one!</p>', '', '', 1, 'en', '0000-00-00 00:00:00', '2015-09-24 21:39:43', 1),
(3, 'About Us', '', '', '', 'about-us', '', '<p><b>This content comes from database.</b></p>  <div id="lipsum"> <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam sit amet dignissim ipsum. Duis luctus iaculis efficitur. Donec nisl mauris, consectetur quis massa nec, tempus dignissim justo. Proin at luctus nibh. Mauris massa lacus, tincidunt sit amet sapien auctor, tempor pulvinar dui. Maecenas aliquam tellus lectus, quis lobortis leo viverra id. Nulla cursus tincidunt odio, at ultrices mauris porta vel. Duis vitae dolor id metus rhoncus tempus. Nulla gravida lobortis nibh et vulputate. Phasellus eget tristique enim. </p> <p> Mauris tortor nunc, consequat sit amet lacus condimentum, pellentesque egestas nisi. Proin porta tristique nibh. Nam sollicitudin velit dui, sit amet convallis orci imperdiet quis. Nunc laoreet blandit rhoncus. In placerat turpis vel fermentum elementum. Curabitur sit amet malesuada arcu. Donec viverra elit non maximus faucibus. Quisque vehicula metus a viverra suscipit. Morbi enim diam, posuere vitae dapibus ut, convallis quis erat. Vestibulum non ipsum tortor. Cras fringilla risus volutpat lacinia congue. Maecenas dignissim diam orci, sit amet egestas lectus rhoncus quis. Praesent dignissim ante sit amet magna ultrices, eget varius ipsum placerat. Etiam sodales libero et euismod vehicula. </p> <p> Pellentesque pharetra quis quam eget volutpat. Donec interdum turpis urna, quis elementum augue porta dapibus. Vestibulum ut tristique est, sed lobortis dui. Maecenas imperdiet sapien vel sem volutpat feugiat. Quisque condimentum aliquet rutrum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent laoreet ut neque a elementum. Maecenas eget laoreet nisi. Donec finibus volutpat blandit. Aliquam feugiat velit at quam egestas cursus. Sed non erat ex. Praesent sagittis finibus fringilla. Praesent non arcu dapibus, lobortis erat vel, efficitur risus. Ut facilisis lobortis diam non pulvinar. Nunc sed tellus erat. </p> <p> Quisque tempus imperdiet imperdiet. In mollis bibendum sapien in volutpat. Vivamus vitae tristique felis. Mauris vehicula enim justo. Mauris posuere ultrices tortor, ac euismod neque imperdiet dignissim. Aliquam enim purus, feugiat vitae mollis et, lobortis vel felis. Aenean egestas nunc quis nisl porta laoreet. Ut malesuada auctor sem molestie vulputate. Maecenas lacus nulla, porta eget risus at, commodo sodales elit. Donec arcu metus, pellentesque vel suscipit in, fermentum at orci. Suspendisse justo erat, sodales nec egestas nec, porta et dolor. </p> <p> Nullam rutrum facilisis facilisis. Aliquam facilisis, urna sed sollicitudin posuere, augue nulla viverra dolor, vel vehicula justo est sit amet eros. Cras dui turpis, sollicitudin et porttitor mollis, volutpat non orci. Pellentesque erat elit, consectetur at luctus a, auctor eleifend velit. Praesent dapibus lacus vel tortor cursus mattis. Maecenas volutpat nibh a odio dapibus, a fermentum urna fringilla. Etiam bibendum viverra scelerisque. Maecenas varius urna sit amet elit faucibus tincidunt. Praesent blandit placerat nibh a dignissim. In augue eros, mattis sit amet interdum vel, blandit eu magna. Vestibulum eget dignissim velit. Nunc porta, eros eleifend eleifend iaculis, enim neque aliquam nisi, ac mattis mauris risus eget tellus. Nam hendrerit commodo neque et lacinia. Nulla vel dictum mauris, at dictum nisl. Aliquam erat volutpat. </p></div>', '', '', 1, 'en', '0000-00-00 00:00:00', '2015-09-24 21:39:43', 1),
(4, 'Hakkımızda', '', '', '', 'hakkimizda', '', '<p><b>Bu içerik veritabanından gelmektedir.</b></p><div id="lipsum"> <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam sit amet dignissim ipsum. Duis luctus iaculis efficitur. Donec nisl mauris, consectetur quis massa nec, tempus dignissim justo. Proin at luctus nibh. Mauris massa lacus, tincidunt sit amet sapien auctor, tempor pulvinar dui. Maecenas aliquam tellus lectus, quis lobortis leo viverra id. Nulla cursus tincidunt odio, at ultrices mauris porta vel. Duis vitae dolor id metus rhoncus tempus. Nulla gravida lobortis nibh et vulputate. Phasellus eget tristique enim. </p> <p> Mauris tortor nunc, consequat sit amet lacus condimentum, pellentesque egestas nisi. Proin porta tristique nibh. Nam sollicitudin velit dui, sit amet convallis orci imperdiet quis. Nunc laoreet blandit rhoncus. In placerat turpis vel fermentum elementum. Curabitur sit amet malesuada arcu. Donec viverra elit non maximus faucibus. Quisque vehicula metus a viverra suscipit. Morbi enim diam, posuere vitae dapibus ut, convallis quis erat. Vestibulum non ipsum tortor. Cras fringilla risus volutpat lacinia congue. Maecenas dignissim diam orci, sit amet egestas lectus rhoncus quis. Praesent dignissim ante sit amet magna ultrices, eget varius ipsum placerat. Etiam sodales libero et euismod vehicula. </p> <p> Pellentesque pharetra quis quam eget volutpat. Donec interdum turpis urna, quis elementum augue porta dapibus. Vestibulum ut tristique est, sed lobortis dui. Maecenas imperdiet sapien vel sem volutpat feugiat. Quisque condimentum aliquet rutrum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent laoreet ut neque a elementum. Maecenas eget laoreet nisi. Donec finibus volutpat blandit. Aliquam feugiat velit at quam egestas cursus. Sed non erat ex. Praesent sagittis finibus fringilla. Praesent non arcu dapibus, lobortis erat vel, efficitur risus. Ut facilisis lobortis diam non pulvinar. Nunc sed tellus erat. </p> <p> Quisque tempus imperdiet imperdiet. In mollis bibendum sapien in volutpat. Vivamus vitae tristique felis. Mauris vehicula enim justo. Mauris posuere ultrices tortor, ac euismod neque imperdiet dignissim. Aliquam enim purus, feugiat vitae mollis et, lobortis vel felis. Aenean egestas nunc quis nisl porta laoreet. Ut malesuada auctor sem molestie vulputate. Maecenas lacus nulla, porta eget risus at, commodo sodales elit. Donec arcu metus, pellentesque vel suscipit in, fermentum at orci. Suspendisse justo erat, sodales nec egestas nec, porta et dolor. </p> <p> Nullam rutrum facilisis facilisis. Aliquam facilisis, urna sed sollicitudin posuere, augue nulla viverra dolor, vel vehicula justo est sit amet eros. Cras dui turpis, sollicitudin et porttitor mollis, volutpat non orci. Pellentesque erat elit, consectetur at luctus a, auctor eleifend velit. Praesent dapibus lacus vel tortor cursus mattis. Maecenas volutpat nibh a odio dapibus, a fermentum urna fringilla. Etiam bibendum viverra scelerisque. Maecenas varius urna sit amet elit faucibus tincidunt. Praesent blandit placerat nibh a dignissim. In augue eros, mattis sit amet interdum vel, blandit eu magna. Vestibulum eget dignissim velit. Nunc porta, eros eleifend eleifend iaculis, enim neque aliquam nisi, ac mattis mauris risus eget tellus. Nam hendrerit commodo neque et lacinia. Nulla vel dictum mauris, at dictum nisl. Aliquam erat volutpat. </p></div>', '', '', 1, 'tr', '0000-00-00 00:00:00', '2015-09-24 21:39:43', 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
`ID` int(11) NOT NULL,
  `parent_id` int(11) NOT NULL DEFAULT '0',
  `type` int(11) NOT NULL,
  `content_id` int(11) NOT NULL DEFAULT '0',
  `text` text CHARACTER SET utf8 NOT NULL,
  `permalink` text CHARACTER SET utf8 NOT NULL,
  `lang` varchar(11) CHARACTER SET utf8 NOT NULL,
  `sort` int(11) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=61 DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `menu`
--

INSERT INTO `menu` (`ID`, `parent_id`, `type`, `content_id`, `text`, `permalink`, `lang`, `sort`) VALUES
(1, 0, 1, 0, 'Hakkımızda', 'hakkimizda', 'tr', 2),
(2, 0, 1, 0, 'About Us', 'about-us', 'en', 2),
(3, 0, 1, 0, 'İletişim', 'iletisim', 'tr', 3),
(4, 0, 1, 0, 'Contact', 'contact', 'en', 3),
(5, 0, 1, 0, 'Ana Sayfa', '', 'tr', 1),
(6, 0, 1, 0, 'Home', '', 'en', 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `options`
--

CREATE TABLE IF NOT EXISTS `options` (
`ID` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `value` text CHARACTER SET utf8 NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `options`
--

INSERT INTO `options` (`ID`, `name`, `value`) VALUES
(1, 'site_title', 'MiniMVC Project - Application Framework for PHP'),
(2, 'site_desc', 'MiniMVC is an MVC (Model-View-Controller) application framework for PHP.'),
(3, 'site_keywords', 'MiniMVC, MVC, PHP,  Model, View, Controller, PHP Framework, Framework, Framework Application');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`ID` int(11) NOT NULL,
  `mail` varchar(255) CHARACTER SET utf8 NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 NOT NULL,
  `name` varchar(250) CHARACTER SET utf8 NOT NULL,
  `role` int(2) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM AUTO_INCREMENT=169 DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`ID`, `mail`, `password`, `name`, `role`, `date`) VALUES
(1, 'admin@arifacar.com', 'Test123', 'Administrator', 10, '2015-10-24 00:24:04');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `category`
--
ALTER TABLE `category`
 ADD PRIMARY KEY (`ID`);

--
-- Tablo için indeksler `content`
--
ALTER TABLE `content`
 ADD PRIMARY KEY (`ID`);

--
-- Tablo için indeksler `menu`
--
ALTER TABLE `menu`
 ADD PRIMARY KEY (`ID`);

--
-- Tablo için indeksler `options`
--
ALTER TABLE `options`
 ADD PRIMARY KEY (`ID`);

--
-- Tablo için indeksler `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`ID`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `category`
--
ALTER TABLE `category`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- Tablo için AUTO_INCREMENT değeri `content`
--
ALTER TABLE `content`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=80;
--
-- Tablo için AUTO_INCREMENT değeri `menu`
--
ALTER TABLE `menu`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=61;
--
-- Tablo için AUTO_INCREMENT değeri `options`
--
ALTER TABLE `options`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- Tablo için AUTO_INCREMENT değeri `users`
--
ALTER TABLE `users`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=169;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

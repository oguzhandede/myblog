-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 28 Haz 2022, 11:18:30
-- Sunucu sürümü: 10.4.22-MariaDB
-- PHP Sürümü: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `myblog`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `bloglar`
--

CREATE TABLE `bloglar` (
  `blogid` int(11) NOT NULL,
  `blogbaslik` varchar(250) NOT NULL,
  `blogonyazi` mediumtext NOT NULL,
  `blogaciklama` longtext NOT NULL,
  `blogtarih` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `blogtıklanma` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `bloglar`
--

INSERT INTO `bloglar` (`blogid`, `blogbaslik`, `blogonyazi`, `blogaciklama`, `blogtarih`, `blogtıklanma`) VALUES
(36, '1 Kutu Kola İçtikten Sonraki İlk 1 Saate Vücudumuzda Neler Gerçekleşiyor?   ', 'Sadece 1 kutu kola içtiğinizde vücuduzun bu içeceğe nasıl tepki gösterdiğini hiç düşündünüz mü?', '<p>D&uuml;nya &uuml;zerinde en &ccedil;ok t&uuml;ketilen i&ccedil;ecek olan kola, v&uuml;cudunuza girdikten sonra neler yapıyor hi&ccedil; merak ettiniz mi?&nbsp;<strong>Bol şekerli ve asitli bir i&ccedil;ecek olan kola,&nbsp;</strong>v&uuml;cudumuza girdikten sonra &ccedil;ok da masum davranışlar sergilemiyor. &Ouml;zellikle şeker hastaları i&ccedil;in son derece zararlı etkileri bulunan kola, şeker alımıyla birlikte kilo alımlarının da sorumluları arasında yer alıyor. Peki bir kutu kola v&uuml;cudumuza girdiğinde 1 saat i&ccedil;erisinde neler yaşıyoruz?</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Bug&uuml;n sizlere 330 ml&#39;lik standart bir kutu kola i&ccedil;tikten sonraki 1 saatlik s&uuml;rede v&uuml;cudumuzda yaşananları a&ccedil;ıklayacağız. İ&ccedil;erikte yer alan veriler&nbsp;<strong>kola i&ccedil;in yazılmış olsa da Pepsi ve diğer kola markaları i&ccedil;in de benzer s&uuml;re&ccedil;lerin işlediğini s&ouml;yleyelim.&nbsp;</strong><img alt=\"Coca-Cola infografik\" src=\"https://www.webtekno.com/images/editor/default/0003/59/e86a5ebdbe819a69aaf138004cc647c14fa4c344.jpeg\" style=\"height:394px; width:700px\" /></p>\r\n', '2022-06-25 15:21:09', 0),
(38, 'Bitcoin’in Sert Düşüşü Devam Ediyor: Uzmanların Konu Hakkındaki Tahminleri Neler?', 'Bitcoin’in düşüşü akıllara durgunluk veriyor. Sürekli insanların ‘Çok yükselecek’ diye tahminler yürüttüğü Bitcoin, geçtiğimiz gün itibariyle 20.000 doların altına düştü. Peki uzmanlar Bitcoin’in geleceği hakkında ne diyor?', '<p>Son 1 haftada Bitcoin, belki de yaşadığı&nbsp;<strong>en b&uuml;y&uuml;k ve en hızlı d&uuml;ş&uuml;şlerden birini</strong>&nbsp;yaşadı ve b&uuml;t&uuml;n kripto para borsacılarının ellerini ayaklarına doladı. Bundan 6 g&uuml;n &ouml;nce 25.000 diren&ccedil; noktasının altına d&uuml;şen Bitcoin, ge&ccedil;tiğimiz g&uuml;n ile birlikte 20.000 doların altına d&uuml;şt&uuml;.</p>\r\n\r\n<p>D&uuml;n 18.000 dolar seviyesine kadar gerileyen Bitcoin,<strong>&nbsp;bug&uuml;n 19.000 dolardan işlem g&ouml;rmekte</strong>&nbsp;ancak Bitcoin bu stabil olmayan durumu endişe verici. Peki Bitcoin uzmanlarının kripto para biriminin geleceği hakkındaki yorumları neler?</p>\r\n\r\n<h2>Uzmanlar Bitcoin&rsquo;in geleceği i&ccedil;in pek i&ccedil; a&ccedil;ıcı konuşmuyor</h2>\r\n\r\n<p>Bitcoin&rsquo;in 20.000 doların atlına d&uuml;şmesinden dolayı yatırımcılar bir hayli gergin. İnsanlar kripto para biriminin&nbsp;<strong>ne kadar d&uuml;şeceğini kestiremiyor.</strong>&nbsp;Kripto para analizcisi ve CryptoQuant&rsquo;ın CEO&rsquo;su Ki Young Ju, konuya dair uzman g&ouml;r&uuml;şlerini sundu.</p>\r\n\r\n<p>S&ouml;ylemeliyiz ki g&ouml;r&uuml;şleri&nbsp;<strong>pek i&ccedil; a&ccedil;ıcı değil.&nbsp;</strong>Ju&rsquo;nun dediğine g&ouml;re Coinvase&rsquo;den Bitfinex&rsquo;e 15.000 BTC girişi olmuş. Kripto hedge fonları da uzun pozisyonlar i&ccedil;in teminatları doldurmuş. Uzmanın dediğine g&ouml;re kripto para borsaları, m&uuml;şterilerinin satış emirlerini uygulayabilmek i&ccedil;in likidite doldurmuş. Bu sebeple kendisi,&nbsp;<strong>Bitcoin&rsquo;in kısa vadede daha da d&uuml;şeceğini&nbsp;</strong>belirtti.</p>\r\n\r\n<h2><img alt=\"\" src=\"https://www.webtekno.com/images/editor/default/0003/60/5ef858158e3c2bc30771613a08a6e7d953225fde.jpeg\" /></h2>\r\n', '2022-06-19 19:11:19', 0),
(39, 'Kripto Para Piyasasında Geçtiğimiz Haftanın Öne Çıkan Haberleri', 'Geçtiğimiz hafta kripto para dünyası yine hareketli geçti. Bizler de geçtiğimiz hafta yaşanan en dikkat çekici olayları sizler için bir başlık altında topladık.', '<p>Kripto para d&uuml;nyasında ge&ccedil;tiğimiz hafta olduk&ccedil;a &ouml;nemli a&ccedil;ıklamalar ve olaylar g&ouml;rd&uuml;k. Bizler de bu i&ccedil;eriğimizde ge&ccedil;tiğimiz&nbsp;<strong>haftanın en &ccedil;ok okunan, konuşulan ve</strong>&nbsp;<strong>&ouml;ne &ccedil;ıkan kripto para haberlerini</strong>&nbsp;bir araya getirdik. Ge&ccedil;tiğimiz hafta boyunca kripto para d&uuml;nyası, şu haberlerle birlikte kendisini g&ouml;sterdi:</p>\r\n\r\n<h2>Ge&ccedil;tiğimiz haftanın &ouml;ne &ccedil;ıkan kripto para haberleri:</h2>\r\n\r\n<p>Bitcoin&rsquo;in 25.000 dolara d&uuml;şt&uuml;ğ&uuml;n&uuml;&nbsp;sizlerle paylaşmıştık. G&ouml;r&uuml;n&uuml;şe g&ouml;re Bitcoin&rsquo;in &ccedil;akılışı devam ediyor, hatta hızlanıyor zira Bitcoin<strong>&nbsp;20.000 dolar</strong>&nbsp;altına d&uuml;şt&uuml;!</p>\r\n\r\n<p>İlgili habere ulaşmak i&ccedil;in&nbsp;<a href=\"https://www.webtekno.com/bitcoin-20000-dolar-altina-dustu-h124905.html\" target=\"_blank\">bağlantıya<strong>&nbsp;</strong></a>tıklayabilirsiniz.</p>\r\n\r\n<h2><img alt=\"btc\" src=\"https://www.webtekno.com/images/editor/default/0003/60/03d9705dccee72bc90a217ed0791423c3bfb8c96.jpeg\" /></h2>\r\n', '2022-06-19 19:13:53', 0);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `iletisim`
--

CREATE TABLE `iletisim` (
  `id` int(11) NOT NULL,
  `adi` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telefon` varchar(10) NOT NULL,
  `mesaj` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `iletisim`
--

INSERT INTO `iletisim` (`id`, `adi`, `email`, `telefon`, `mesaj`) VALUES
(1, 'asdsad', 'asdsad@asdasdsa', 'asdasd', 'asdsa'),
(2, 'asdsad', 'asdsad@asdasdsa', 'asdasd', 'asdsa'),
(3, 'dasd', 'asdasd@sadasd', 'dasdasd', 'dasdasdas'),
(4, 'dasd', 'asdasd@sadasd', 'dasdasd', 'dasdasdas'),
(5, 'dasd', 'asdasd@sadasd', 'dasdasd', 'dasdasdas'),
(6, 'dasd', 'asdasd@sadasd', 'dasdasd', 'dasdasdas'),
(7, 'dasd', 'asdasd@sadasd', 'dasdasd', 'dasdasdas'),
(8, 'dasd', 'asdasd@sadasd', 'dasdasd', 'dasdasdas');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yonetici`
--

CREATE TABLE `yonetici` (
  `yonid` int(11) NOT NULL,
  `yonad` varchar(50) NOT NULL,
  `yonkulad` varchar(50) NOT NULL,
  `yonparola` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `yonetici`
--

INSERT INTO `yonetici` (`yonid`, `yonad`, `yonkulad`, `yonparola`) VALUES
(9, 'oguz', 'dede', '$2y$10$3lkGnTqNc4V/ys3Vu902GOtpo.Ik4vOqfICtK/djvvD/2wc5NlJvy'),
(10, 'oguzas', 'deee', '123'),
(11, 'dede', 'dedede', '$2y$10$.kEJP1oK.bZjFjfk18W0CuMITNC82P5Cj4kvWmhqyn3ro1Dbk5S5m'),
(12, 'oguz', 'dede', '123');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `bloglar`
--
ALTER TABLE `bloglar`
  ADD PRIMARY KEY (`blogid`);

--
-- Tablo için indeksler `iletisim`
--
ALTER TABLE `iletisim`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `yonetici`
--
ALTER TABLE `yonetici`
  ADD PRIMARY KEY (`yonid`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `bloglar`
--
ALTER TABLE `bloglar`
  MODIFY `blogid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- Tablo için AUTO_INCREMENT değeri `iletisim`
--
ALTER TABLE `iletisim`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Tablo için AUTO_INCREMENT değeri `yonetici`
--
ALTER TABLE `yonetici`
  MODIFY `yonid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

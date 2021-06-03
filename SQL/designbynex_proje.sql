-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 03 Haz 2021, 16:34:44
-- Sunucu sürümü: 10.4.13-MariaDB
-- PHP Sürümü: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `designbynex_proje`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `hakkimizda`
--

CREATE TABLE `hakkimizda` (
  `hakkimizda_id` int(11) NOT NULL,
  `hakkimizda_baslik` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `hakkimizda_icerik` text COLLATE utf8_turkish_ci NOT NULL,
  `hakkimizda_video` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `hakkimizda_vizyon` varchar(500) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `hakkimizda`
--

INSERT INTO `hakkimizda` (`hakkimizda_id`, `hakkimizda_baslik`, `hakkimizda_icerik`, `hakkimizda_video`, `hakkimizda_vizyon`) VALUES
(0, 'Ödev', '<p>Duis finibus, risus a viverra dignissim, erat sapien ullamcorper ipsum, sed vehicula enim magna vel ligula. Curabitur pretium placerat mattis. Nullam lorem nisl, rutrum at erat nec, tristique interdum neque. Etiam nulla eros, mattis eu sem ut, malesuada cursus arcu. Donec non risus porta, efficitur mauris vitae, fermentum lorem. Nam ultricies lobortis ex, sed tincidunt lorem semper vel. Quisque gravida ligula id imperdiet tincidunt. Nulla eget eros non nisl viverra porta. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Etiam sed neque in magna luctus ultrices ut ac orci. Sed mattis risus eu accumsan euismod. Cras tincidunt magna aliquet malesuada ultrices. Sed id ullamcorper turpis, sed ullamcorper erat. Vestibulum id quam non lacus finibus sagittis. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>\r\n', 'video yok', 'deneme kayıt');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tblayar`
--

CREATE TABLE `tblayar` (
  `ayar_id` int(11) NOT NULL,
  `ayar_logo` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_url` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_title` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_description` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_keywords` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_author` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_tel` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_gsm` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_faks` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_mail` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_ilce` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_il` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_adres` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_mesai` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_maps` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_bakim` enum('0','1') COLLATE utf8_turkish_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `tblayar`
--

INSERT INTO `tblayar` (`ayar_id`, `ayar_logo`, `ayar_url`, `ayar_title`, `ayar_description`, `ayar_keywords`, `ayar_author`, `ayar_tel`, `ayar_gsm`, `ayar_faks`, `ayar_mail`, `ayar_ilce`, `ayar_il`, `ayar_adres`, `ayar_mesai`, `ayar_maps`, `ayar_bakim`) VALUES
(0, '/25241depositphotos_52283153-stock-illustration-hand-book-logo.jpg', 'www.harran.edu.tr', 'Harran Üni', 'E ticaret dersi ödev', 'Teknoloji,Kitap', 'Berk-Muhammet-Selahattin', '01234567891', '01234567891', '12121212122', 'harran@mail.com', 'Harran', 'Şanlıurfa', 'Harran Üniversitesi', '09:00-17:00', 'https://www.google.com.tr/maps', '1');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tblbanka`
--

CREATE TABLE `tblbanka` (
  `banka_id` int(11) NOT NULL,
  `banka_ad` varchar(250) COLLATE utf32_turkish_ci NOT NULL,
  `banka_iban` varchar(60) COLLATE utf32_turkish_ci NOT NULL,
  `banka_hesap_adsoyad` varchar(60) COLLATE utf32_turkish_ci NOT NULL,
  `banka_durum` enum('0','1') COLLATE utf32_turkish_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_turkish_ci;

--
-- Tablo döküm verisi `tblbanka`
--

INSERT INTO `tblbanka` (`banka_id`, `banka_ad`, `banka_iban`, `banka_hesap_adsoyad`, `banka_durum`) VALUES
(1, 'GARANTİ', 'TR5600062000 00012990022604 ', 'Berk', '1'),
(5, 'YAPIKREDİ', 'TR5600062000 00012990022604 ', 'Selahattin', '0');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tblkategori`
--

CREATE TABLE `tblkategori` (
  `kategori_id` int(11) NOT NULL,
  `kategori_adi` varchar(55) COLLATE utf8_turkish_ci NOT NULL,
  `kategori_ust` int(11) NOT NULL,
  `kategori_url` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `kategori_seourl` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `kategori_durum` enum('0','1') COLLATE utf8_turkish_ci NOT NULL,
  `kategori_sira` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `tblkategori`
--

INSERT INTO `tblkategori` (`kategori_id`, `kategori_adi`, `kategori_ust`, `kategori_url`, `kategori_seourl`, `kategori_durum`, `kategori_sira`) VALUES
(41, 'Grafik Tasarım', 0, NULL, 'grafik-tasarim', '1', 0),
(42, 'Hobi', 0, NULL, 'hobi', '1', 0),
(43, 'Programlama', 0, NULL, 'programlama', '1', 0),
(49, ' Mobil Programlama', 43, NULL, 'mobil-programlama', '1', 0),
(50, 'Edebiyat', 0, NULL, 'edebiyat', '1', 0),
(51, 'Sanat - Tasarım', 0, NULL, 'sanat-tasarim', '1', 0),
(52, 'Deneme', 43, NULL, 'deneme', '0', 0),
(53, 'Deneme ', 0, NULL, 'deneme', '0', 0),
(54, 'Deneme1', 53, NULL, 'deneme1', '1', 0);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tblmarkalar`
--

CREATE TABLE `tblmarkalar` (
  `MarkaId` int(11) NOT NULL,
  `MarkaAdi` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `MarkaAciklaması` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `MarkaLogo` varchar(50) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tblmenu`
--

CREATE TABLE `tblmenu` (
  `menu_id` int(11) NOT NULL,
  `menu_ust` int(11) NOT NULL,
  `menu_adi` varchar(25) COLLATE utf32_turkish_ci NOT NULL,
  `menu_url` varchar(250) COLLATE utf32_turkish_ci NOT NULL,
  `menu_seourl` varchar(250) COLLATE utf32_turkish_ci NOT NULL,
  `menu_durum` enum('0','1') COLLATE utf32_turkish_ci NOT NULL,
  `menu_sira` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_turkish_ci;

--
-- Tablo döküm verisi `tblmenu`
--

INSERT INTO `tblmenu` (`menu_id`, `menu_ust`, `menu_adi`, `menu_url`, `menu_seourl`, `menu_durum`, `menu_sira`) VALUES
(1, 0, 'Kitaplar', 'urunler', 'kitaplar', '1', 1),
(3, 0, 'Hakkımızda', 'hakkimizda', 'hakkimizda', '1', 2),
(4, 0, 'İletişim', 'iletisim', 'iletisim', '1', 3);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tblresim`
--

CREATE TABLE `tblresim` (
  `resim_id` int(11) NOT NULL,
  `resim_url` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `resim_adi` varchar(250) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tblsepet`
--

CREATE TABLE `tblsepet` (
  `sepet_id` int(11) NOT NULL,
  `kullanici_id` int(11) NOT NULL,
  `urun_id` int(11) NOT NULL,
  `urun_adet` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_turkish_ci;

--
-- Tablo döküm verisi `tblsepet`
--

INSERT INTO `tblsepet` (`sepet_id`, `kullanici_id`, `urun_id`, `urun_adet`) VALUES
(54, 34, 14, 1),
(55, 35, 15, 1),
(56, 35, 14, 1),
(61, 39, 2, 1),
(118, 42, 23, 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tblsiparis`
--

CREATE TABLE `tblsiparis` (
  `siparis_id` int(11) NOT NULL,
  `siparis_zaman` timestamp NOT NULL DEFAULT current_timestamp(),
  `siparis_no` int(11) DEFAULT NULL,
  `kullanici_id` int(11) NOT NULL,
  `siparis_toplam` float(9,2) NOT NULL,
  `siparis_tip` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `siparis_banka` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `siparis_durum` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `tblsiparis`
--

INSERT INTO `tblsiparis` (`siparis_id`, `siparis_zaman`, `siparis_no`, `kullanici_id`, `siparis_toplam`, `siparis_tip`, `siparis_banka`, `siparis_durum`) VALUES
(1, '2021-05-26 10:54:09', NULL, 52, 30.00, 'Banka Havalesi', 'YAPIKREDİ', 0),
(2, '2021-05-26 10:54:25', NULL, 52, 56.00, 'Banka Havalesi', 'GARANTİ', 4),
(3, '2021-05-31 10:05:19', NULL, 52, 69.00, 'Banka Havalesi', 'YAPIKREDİ', 2);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tblsiparis_detay`
--

CREATE TABLE `tblsiparis_detay` (
  `siparisdetay_id` int(11) NOT NULL,
  `siparis_id` int(11) NOT NULL,
  `urun_id` int(11) NOT NULL,
  `urun_fiyat` float(9,2) NOT NULL,
  `urun_adet` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_turkish_ci;

--
-- Tablo döküm verisi `tblsiparis_detay`
--

INSERT INTO `tblsiparis_detay` (`siparisdetay_id`, `siparis_id`, `urun_id`, `urun_fiyat`, `urun_adet`) VALUES
(34, 190046, 2, 500.00, 1),
(35, 190046, 2, 500.00, 1),
(36, 190052, 2, 500.00, 1),
(37, 190052, 2, 500.00, 1),
(38, 190053, 2, 500.00, 1),
(39, 190053, 2, 500.00, 1),
(40, 190053, 2, 500.00, 1),
(41, 190053, 2, 500.00, 1),
(42, 190053, 2, 500.00, 1),
(43, 190053, 2, 500.00, 1),
(44, 190054, 2, 500.00, 1),
(45, 190054, 2, 500.00, 1),
(46, 190055, 2, 500.00, 1),
(47, 190055, 2, 500.00, 1),
(48, 190056, 2, 500.00, 1),
(49, 190057, 2, 500.00, 1),
(50, 190057, 2, 500.00, 5),
(51, 190058, 7, 35.00, 5),
(52, 190059, 24, 56.00, 1),
(53, 190059, 22, 17.00, 1),
(54, 190060, 4, 35.00, 1),
(55, 190060, 22, 17.00, 1),
(106, 1, 22, 17.00, 1),
(107, 1, 23, 13.00, 1),
(108, 2, 24, 56.00, 1),
(109, 3, 24, 56.00, 1),
(110, 3, 23, 13.00, 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tblslider`
--

CREATE TABLE `tblslider` (
  `slider_id` int(11) NOT NULL,
  `slider_ad` varchar(250) COLLATE utf32_turkish_ci NOT NULL,
  `slider_resimyol` varchar(250) COLLATE utf32_turkish_ci NOT NULL,
  `slider_link` varchar(250) COLLATE utf32_turkish_ci NOT NULL,
  `slider_durum` enum('0','1') COLLATE utf32_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_turkish_ci;

--
-- Tablo döküm verisi `tblslider`
--

INSERT INTO `tblslider` (`slider_id`, `slider_ad`, `slider_resimyol`, `slider_link`, `slider_durum`) VALUES
(29, 'd', '/2055331219215772981329422279313033030008slider3.PNG', '', '0'),
(30, 'ds', '/2461728807242992409629798317662296626695slider1.PNG', '', '0'),
(31, 'dd', '/3145531067219302017920215223522378924779Başlıksız-1.png', '', '0');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tblurunler`
--

CREATE TABLE `tblurunler` (
  `urun_id` int(11) NOT NULL,
  `kategori_id` int(11) NOT NULL,
  `marka_id` int(11) NOT NULL,
  `urun_ad` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `urun_detay` text COLLATE utf8_turkish_ci NOT NULL,
  `urun_fiyat` float(9,2) NOT NULL,
  `urun_stok` varchar(20) COLLATE utf8_turkish_ci NOT NULL,
  `urun_seourl` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `urun_onecikar` enum('0','1') COLLATE utf8_turkish_ci NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `tblurunler`
--

INSERT INTO `tblurunler` (`urun_id`, `kategori_id`, `marka_id`, `urun_ad`, `urun_detay`, `urun_fiyat`, `urun_stok`, `urun_seourl`, `urun_onecikar`) VALUES
(3, 41, 0, 'INDESİGN', 'Masaüstü Yayıncılığın mutfağında malzeme olarak metinler, grafikler, çeşitli görseller ve multimedya öğeleri yer alır. Bu malzemeleri pişirmek ve uygun bir biçimde sunmak ise profesyonellerin işidir. Adobe InDesign bu profesyonellerin başında gelir. \r\n\r\nGerek masaüstü yayıncılık gerekse dijital yayıncılık için oldukça kapsamlı ve güncel donanıma sahip olan InDesign, Creative Cloud ile daha geniş bir kullanıcı kitlesiyle buluşmayı hedefliyor. Bu kaynak eserde Adobe Indesign CC’yi keşfedecek zevkli ve kolay bir şekilde kullanmayı öğreneceksiniz. \r\n\r\nKitapta yer alan bazı konu başlıkları; \r\n\r\n• Temel Kavramlar \r\n• Grafik Formatları ve Genel Özellikleri \r\n• EPUB ve Genel Özellikleri \r\n• Creative Cloud’u Kullanma \r\n• InDesign CC’de Neler Yeni? \r\n• Adobe InDesign’in Genel Yapısı \r\n• Yeni Bir Arabirim Yerleşimi Oluşturma \r\n• Akıllı Kılavuzları Kullanma \r\n• Güçlü Yakınlaştırmayla Gezinti Yapma \r\n• Sayfalarla Çalışma \r\n• Aynı Belgede Birden Fazla Sayfa Boyutu ile Çalışma \r\n• Özel Sayfa Boyutları Tasarlama \r\n• Çok Sayfalı Forma Oluşturma \r\n• Mevcut Kalıp Sayfalarıyla Çalışma \r\n• Sayfalara Kalıpları Uygulama \r\n• Başka Bir Belgeden Kalıp Alma \r\n• Sayfa Numaraları Oluşturma \r\n• Belgeye Yazı Yazma \r\n• Yol Etrafına Yazı Yazma \r\n• Belgeye Dışarıdan Bir Metin Ekleme \r\n• Metinleri Biçimlendirme \r\n• Madde İşaretleri ve Numaralandırma İşlemleri \r\n• Sütunları Bölen ya da Sütunlara Yayılan Paragraflar Kullanma \r\n• Dengeli Sütunlar Kullanma \r\n• Metin Değişikliklerini Takip Etme \r\n• Özel Karakterler ve Metin Değişkenleri ile Çalışma \r\n• Kayan Yazılar İçin Otomatik Sayfalar Oluşturma \r\n• Akışkan Mizanpaj Oluşturma \r\n• Akışkan Mizanpaj Kuralı Belirleme \r\n• Paragraf Biçimlendirme \r\n• Paragraf ve Karakter Stilleri ile Çalışma \r\n• Yazım Denetimi Yapma \r\n• Sayfalara Dipnot Ekleme \r\n• Tablo Oluşturma \r\n• Tablo Stilleri ile Çalışma \r\n• Belgeye Resim Ekleme \r\n• Meta Verisi İçeren Resimler İçin Canlı Yazılar Oluşturma \r\n• Hızlı ve Kolay Dönüştürme İşlemleri Yapma \r\n• Belgeye QR Kodu Ekleme \r\n• Çerçeve Kenarlarını Canlı Biçimlendirme \r\n• Vektörel Çizimler Yapma \r\n• Kalem Aracı ile Çizimler Yapma \r\n• Yolları Yönetme \r\n• Kırpma Yolları İle Çalışma \r\n• Nesnelere Efekt Verme \r\n• Nesneleri Çizerken Izgaralara Bölme \r\n• Otomatik Sığdırma \r\n• Nesneleri Izgarada Çoğaltma \r\n• Nesne Stilleri ile Çalışma \r\n• Tablo Stilleri Oluşturma ve Tablolara Uygulama \r\n• Renklerle Çalışma \r\n• Adobe PDF\'ye Dışa Aktarma \r\n• Filmler ve Seslerle Çalışma \r\n• Animasyonlar Tasarlama \r\n• Slayt Gösterisi Oluşturma \r\n• Sayfalar Arası Bağlantı Oluşturma \r\n• Köprü Oluşturma \r\n• Sayfalara Geçiş Efekti Uygulama \r\n• Flash İçin Etkileşimli Web Belgeleri Oluşturma \r\n• Dinamik PDF’ler Oluşturma \r\n• Dijital Yayınlar İçin Alternatif Mizanpaj Oluşturma \r\n• Dijital Yayınlar Oluşturma \r\n• Dijital Yayınları Mobil Uygulama Olarak Yayınlama \r\n• Gelişmiş Yazdırma İşlemleri \r\n• Arka Planda PDF’ye İhraç Etme \r\n• Gelişmiş Dosya Dışa Aktarması Yapma \r\n• Dosyaları Paketleme ', 35.00, '10', 'indesign', '0'),
(4, 41, 0, 'ADOBE AFTER EFFECT', '\r\nKitap Hakkında\r\nAnimasyon ve kreatif komposizyon oluşturma alanında bir sektör standardı haline gelmiş olan After Effects programını kullanarak film, TV, video ve web için profesyonel düzeyde hareketli grafikler ve görsel efektler hazırlayıp sunabilirsiniz. Vektörel olarak hazırlamış olduğunuz tasarımlara animasyon yoluyla hayat kazandırarak hareketli grafikler haline getirebilir, zengin efekt kütüphanesi ile materyallerinizi ve 3D modellerinizi harmanlayarak görsel efektler oluşturabilirsiniz. \r\n\r\nTüm hayal gücünüzü After Effects ile ifade edin! \r\n\r\nKitap içerisinde yer alan konu bazı konu başlıkları; \r\n\r\n• Program Hakkında \r\n\r\n•Bağlantılı Programlar \r\n\r\n•Temel Animasyon Prensipleri \r\n\r\n•Timeline \r\n\r\n•Frame, Keyframe, Saniye Kavramları \r\n\r\n•Timeline ve Toolbar Kısayolları \r\n\r\n•Katmanlarla çalışmak \r\n\r\n•Animasyona giriş \r\n\r\n•Maskeleme \r\n\r\n•Maskeleme Araçları \r\n\r\n•Çeşitli Maskeleme Yöntemleri \r\n\r\n•Efekt ve Plug-in kullanımı \r\n\r\n•Yazı Animasyonları \r\n\r\n•Video Editleme ve Ayarlamalar \r\n\r\n•Video Renk ayarlamaları \r\n\r\n•Kameralar ve kullanımı \r\n\r\n•Işıklar ve Kullanımı \r\n\r\n•Rotobrush ve Green Screen \r\n\r\n•İvme İşlemleri \r\n\r\n•Motion Track Özelliği \r\n\r\n•Fırçalar ve Kullanımı \r\n\r\n•Fırça Animasyonları \r\n\r\n•Doku Taşıma \r\n\r\n•Cineware – Cinema 4D Entegrasyonu \r\n\r\n•3D Logo Animasyonu İntro Yapımı \r\n\r\n•Lens Çizimi Logo Animasyonu \r\n\r\n•Refine Edge Tool ile Rotoskop Tekniği \r\n\r\n•Animasyonlu Görsel Galeri Tasarımı \r\n\r\n•Element 3D Plug-ini ve 3D Yazı Animasyonu \r\n\r\n•Yenilenen 3D Camera Tracker \r\n\r\n•Tipografik Animasyon \r\n\r\n•Animasyonlarda Ses Kullanmak \r\n\r\n•Render (Dışarıya Aktarma) Yöntemleri \r\n\r\n•Hareketli Grafik Tasarımı Nedir? \r\n\r\n•Sinema Tarihinde Hareketli Grafik Tasarımı', 35.00, '10', 'adobe-after-effect', '1'),
(5, 41, 0, 'ADOBE PHOTOSHOP CC', '\r\nKitap Hakkında\r\nAnimasyon ve kreatif komposizyon oluşturma alanında bir sektör standardı haline gelmiş olan After Effects programını kullanarak film, TV, video ve web için profesyonel düzeyde hareketli grafikler ve görsel efektler hazırlayıp sunabilirsiniz. Vektörel olarak hazırlamış olduğunuz tasarımlara animasyon yoluyla hayat kazandırarak hareketli grafikler haline getirebilir, zengin efekt kütüphanesi ile materyallerinizi ve 3D modellerinizi harmanlayarak görsel efektler oluşturabilirsiniz. \r\n\r\nTüm hayal gücünüzü After Effects ile ifade edin! \r\n\r\nKitap içerisinde yer alan konu bazı konu başlıkları; \r\n\r\n• Program Hakkında \r\n\r\n•Bağlantılı Programlar \r\n\r\n•Temel Animasyon Prensipleri \r\n\r\n•Timeline \r\n\r\n•Frame, Keyframe, Saniye Kavramları \r\n\r\n•Timeline ve Toolbar Kısayolları \r\n\r\n•Katmanlarla çalışmak \r\n\r\n•Animasyona giriş \r\n\r\n•Maskeleme \r\n\r\n•Maskeleme Araçları \r\n\r\n•Çeşitli Maskeleme Yöntemleri \r\n\r\n•Efekt ve Plug-in kullanımı \r\n\r\n•Yazı Animasyonları \r\n\r\n•Video Editleme ve Ayarlamalar \r\n\r\n•Video Renk ayarlamaları \r\n\r\n•Kameralar ve kullanımı \r\n\r\n•Işıklar ve Kullanımı \r\n\r\n•Rotobrush ve Green Screen \r\n\r\n•İvme İşlemleri \r\n\r\n•Motion Track Özelliği \r\n\r\n•Fırçalar ve Kullanımı \r\n\r\n•Fırça Animasyonları \r\n\r\n•Doku Taşıma \r\n\r\n•Cineware – Cinema 4D Entegrasyonu \r\n\r\n•3D Logo Animasyonu İntro Yapımı \r\n\r\n•Lens Çizimi Logo Animasyonu \r\n\r\n•Refine Edge Tool ile Rotoskop Tekniği \r\n\r\n•Animasyonlu Görsel Galeri Tasarımı \r\n\r\n•Element 3D Plug-ini ve 3D Yazı Animasyonu \r\n\r\n•Yenilenen 3D Camera Tracker \r\n\r\n•Tipografik Animasyon \r\n\r\n•Animasyonlarda Ses Kullanmak \r\n\r\n•Render (Dışarıya Aktarma) Yöntemleri \r\n\r\n•Hareketli Grafik Tasarımı Nedir? \r\n\r\n•Sinema Tarihinde Hareketli Grafik Tasarımı', 35.00, '10', 'adobe-photoshop-cc', '0'),
(6, 41, 0, '3D MAX', '\r\nKitap Hakkında\r\nAnimasyon ve kreatif komposizyon oluşturma alanında bir sektör standardı haline gelmiş olan After Effects programını kullanarak film, TV, video ve web için profesyonel düzeyde hareketli grafikler ve görsel efektler hazırlayıp sunabilirsiniz. Vektörel olarak hazırlamış olduğunuz tasarımlara animasyon yoluyla hayat kazandırarak hareketli grafikler haline getirebilir, zengin efekt kütüphanesi ile materyallerinizi ve 3D modellerinizi harmanlayarak görsel efektler oluşturabilirsiniz. \r\n\r\nTüm hayal gücünüzü After Effects ile ifade edin! \r\n\r\nKitap içerisinde yer alan konu bazı konu başlıkları; \r\n\r\n• Program Hakkında \r\n\r\n•Bağlantılı Programlar \r\n\r\n•Temel Animasyon Prensipleri \r\n\r\n•Timeline \r\n\r\n•Frame, Keyframe, Saniye Kavramları \r\n\r\n•Timeline ve Toolbar Kısayolları \r\n\r\n•Katmanlarla çalışmak \r\n\r\n•Animasyona giriş \r\n\r\n•Maskeleme \r\n\r\n•Maskeleme Araçları \r\n\r\n•Çeşitli Maskeleme Yöntemleri \r\n\r\n•Efekt ve Plug-in kullanımı \r\n\r\n•Yazı Animasyonları \r\n\r\n•Video Editleme ve Ayarlamalar \r\n\r\n•Video Renk ayarlamaları \r\n\r\n•Kameralar ve kullanımı \r\n\r\n•Işıklar ve Kullanımı \r\n\r\n•Rotobrush ve Green Screen \r\n\r\n•İvme İşlemleri \r\n\r\n•Motion Track Özelliği \r\n\r\n•Fırçalar ve Kullanımı \r\n\r\n•Fırça Animasyonları \r\n\r\n•Doku Taşıma \r\n\r\n•Cineware – Cinema 4D Entegrasyonu \r\n\r\n•3D Logo Animasyonu İntro Yapımı \r\n\r\n•Lens Çizimi Logo Animasyonu \r\n\r\n•Refine Edge Tool ile Rotoskop Tekniği \r\n\r\n•Animasyonlu Görsel Galeri Tasarımı \r\n\r\n•Element 3D Plug-ini ve 3D Yazı Animasyonu \r\n\r\n•Yenilenen 3D Camera Tracker \r\n\r\n•Tipografik Animasyon \r\n\r\n•Animasyonlarda Ses Kullanmak \r\n\r\n•Render (Dışarıya Aktarma) Yöntemleri \r\n\r\n•Hareketli Grafik Tasarımı Nedir? \r\n\r\n•Sinema Tarihinde Hareketli Grafik Tasarımı', 50.00, '10', '3d-max', '1'),
(7, 41, 0, 'ADOBE illustrator CC', '\r\nKitap Hakkında\r\nDünyada ülkelerinin yüzde 80’inde Adobe Illustrator, web arayüzü tasarımından illüstrasyon tasarımına, masaüstü yayıncılıktan kurumsal kimlik çalışmalarına kadar birçok alanda aktif olarak kullanılıyor. \r\n\r\nÜlkemizde birçok iş alanında da Adobe Illustrator kullanıcıları gün geçtikçe çığ gibi büyümektedir. \r\n\r\nBu noktadan hareketle hazırladığımız Adobe Illustrator CS6 kitabı en alt seviyeden başlanarak her kullanıcıya hitap edecek bir şekilde tasarlandı. Kitap içerisinde temel birçok konuya yer vermenin yanı sıra kitap ile birlikte edineceğiniz eğitim videoları ile öğretici görsel uygulamalara da sahip olacaksınız. Bu bağlamda kitap içerisindeki konuları çalışarak ve eğitim videoları içerisindeki örnek uygulamaları yaparak kolay ve zevkli bir şekilde Adobe Illustrator kullanımını öğrenebilirsiniz. \r\n\r\nKitap içerisinde Adobe Illustrator’ la ilgili temel bilgilerin yanı sıra, basit ve karmaşık çizimler yapma, çizimleri boyama, biçimlendirme, katmanlarla çalışma, bitmap resimleri vektörel resimlere dönüştürme, yazı ile çalışma, 3 boyutlu çizimler yapma gibi birçok konu anlatılmaktadır. Ayrıca her bölümün sonunda bölüm içerisindeki bilgileri pekiştirmek için görsel uygulamalar yer almaktadır. \r\n\r\nKitapta yer alan başlıca konu başlıkları şunlardır: \r\n\r\n• Temel Kavramlar \r\n• Adobe Illustrator Arayüzü \r\n• Basit ve Karmaşık Çizimler Yapmak \r\n• Güzel Konturlar Oluşturmak \r\n• Renklerle Etkileşim \r\n• Canlı Renklerle Boyama \r\n• Kıl Fırçası ile Boyama \r\n• Çizimleri Düzenlemek ve Biçimlendirmek \r\n• Şekilleri Birleştirmek \r\n• Şekil Katıştırma Yöntemleri \r\n• Şekil Oluşturma Aracı ile Hızlı Şekil Birleştirmek \r\n• Yazılarla Çalışmak \r\n• Katmanlarla Etkileşim \r\n• Illustrator Efektleri ile 3. Boyuta Geçiş \r\n• Perspektifli Çizimler Yapmak \r\n• Photoshop Efektleri ile Çalışmak \r\n• Çoklu Çalışma Alanları ile Çalışmak \r\n• Çizim Geliştirmeleri ile Etkileşimli Çizimler Yapmak \r\n• Gelişmiş Yazdırma ve İhraç Seçenekleri \r\n• Her Bölümde Öğretici Pratik Uygulamalar', 35.00, '10', 'adobe-illustrator-cc', '1'),
(8, 41, 0, 'GRAFİK TASARIM REHBERİ', 'Bu kitap; grafik ve web tasarım alanında kısa zamanda profesyonel düzeyde işler çıkarmak için tüm grafikerlerin ve grafiker adaylarının yararlanabileceği bir kılavuz niteliğindedir. \r\n\r\nTasarıma nereden başlamalıyım, hangi programları öğrenmeliyim, hangi dilleri öğrenerek web programlamaya adım atmalıyım gibi birçok soruya cevap bulabileceğiniz bu kılavuz, iş hayatınızı da oldukça kolaylaştıracaktır. \r\n\r\nKitap içerisinde yer alan örnekler ile birlikte kurumsal tasarım ürünleri geliştirilmektedir. Matbaa ve reklam sektöründe geliştirilen tasarım ürünlerinin daha kaliteli olması için her tasarımcının bilmesi gereken püf noktalar ve profesyonel bir tasarımcı olmak için izlenmesi gereken tüm teknikler kitapta yer almaktadır. \r\n\r\nKitapta yer alan başlıca konu başlıkları şöyledir: \r\n\r\n• Tasarım ve Tipografi \r\n\r\n• Tasarımların Oluşturulması ve Görselleştirilmesi \r\n\r\n• Tipografik Karakterler ve Özellikler \r\n\r\n• Grafik Tasarım Öğeleri ve Temel İlkeleri \r\n\r\n• Renk ve Ton Düzenlemeleri \r\n\r\n• Grafik-Web Tasarım Öğrenmeye Başlamak \r\n\r\n• Afiş, Kartvizit, El İlanı ve Katalog Hazırlamak \r\n\r\n• Tasarımlarda Renk Oluşumu ve Renk Kullanımı \r\n\r\n• Web Sayfası Tasarımı ve Bilinmesi Gereken Püf Noktalar \r\n\r\n• Web Uygulamaları ve Web Programlama \r\n\r\n• Web Sitesi Programlamaya Başlamak \r\n\r\n• Web Tasarımlarını Müşteriye Beğendirmek İçin 15 Altın Kural \r\n\r\n• Kaliteli Tasarımlar Geliştirmek İçin Yapılması Gerekenler \r\n\r\n• Kurumsal Kimlik Tasarımları ve Uygulama Örnekleri \r\n\r\n• Mobil Uygulama Tasarımı \r\n\r\n• E-Ticaret Sitesi Tasarımı \r\n\r\n• ve Daha Fazlası', 28.00, '10', 'grafik-tasarim-rehberi', '0'),
(9, 41, 0, 'GRAFİK & ANİMASYON', 'Bu kitap Milli Eğitim Bakanlığının hazırlamış olduğu Grafik ve Animasyon Modülleri sistemine uygun olarak daha gelişmiş ve daha yeni teknolojiler ile hazırlanmış bir kaynaktır. \r\n\r\nKitap içerisinde temel olarak Adobe Flash CS5 ve Adobe Fireworks CS5 programları esas alınmıştır. \r\n\r\nAdobe Fireworks CS5 programı ile web sitelerinde kullanmak üzere çizimler yapabilecek ve hazırladığınız grafiklerinizi, butonlarınızı, menülerinizi, albüm ve resim galerilerinizi web sitenizi hazırlarken kullanabileceksiniz. \r\n\r\nAdobe Flash CS5 programı ile de çizimler yapabilecek, animasyonlar oluşturabilecek ve bu animasyonlarınızı web sitelerinizde yayınlayabileceksiniz. Ayrıca Flash’ın dili olan ActionScript 3.0 diline giriş yapacak, verileri ve değişkenleri öğrenecek, fonksiyonları kullanabilecek, koşullar ve döngüler ile de web programcılığına adım atabileceksiniz. Bununla birlikte form elemanları ile çalışabilecek ve etkin olarak PHP dilini de kullanabileceksiniz. \r\n\r\nAnimasyon Düzenleme \r\n\r\n• Adobe Flash CS5 \r\n• Dosya İşlemleri \r\n• Paneller ve Araçlar \r\n• Frame’ler ve Katmanlar \r\n• Çizim Teknikleri \r\n• Animasyon Teknikleri \r\n• Butonlar ve MovieClip’ler \r\n• Metin ve Grafik Düzenlemeleri \r\n• Timeline Kontrolü \r\n• ActionScript 3.0 \r\n• Olay Yöneticileri \r\n• Veriler ve Değişkenler \r\n• Operatörler \r\n• Fonksiyonlar \r\n• Döngüler ve Koşullar \r\n• Component’ler \r\n• ActionScript 3.0 ve PHP \r\n• E-Posta Göndermek \r\n• Ziyaretçi Defteri Yapmak \r\n• Medya Dosyaları ve Oynatıcılar \r\n\r\nGrafik Düzenleme \r\n\r\n• Adobe Fireworks CS5 \r\n• Bitmap ve Vektörel Grafikler \r\n• Paneller ve Araçlar \r\n• Dosya İşlemleri \r\n• Nesnelerle Çalışmak \r\n• Renklerle Çalışmak \r\n• Çizim Araçlarını Kullanmak \r\n• Filtreler ve Efektler \r\n• Metinlerle Çalışmak \r\n• Sayfalarla Çalışmak \r\n• Katmanlar ve Maskeler \r\n• Web Katmanları \r\n• Dilimlerle Çalışmak \r\n• Aktif Bölgelerle Çalışmak \r\n• Açılır Kapanır Menüler \r\n• Resim Galerisi Uygulamaları \r\n• Butonlar ve Bağlantılar \r\n• Optimizasyon İşlemleri \r\n• İhraç İşlemleri \r\n• Toplu İşlemler', 25.00, '10', 'grafik-animasyon', '1'),
(11, 42, 0, 'DİJİTAL FOTOĞRAFÇILIĞA MERHABA', 'Fotoğraf çekmek; kullanılan teknikler, ekipmanlar ve bunun gibi birçok durumun planlı bir şekilde bir araya gelerek güzeli yansıtma kaygısının güdüldüğü estetik kareler ortaya çıkartma çabasıdır. \r\n\r\nBu kitap, temel seviye fotoğraf bilgisinin tecrübelerle harmanlanarak anlatılması sonucu oluşturulmuştur. Kitabı okurken sadece teorik bilgi ile yetinmeyip; bazı durumlar sonucu karşılaşabileceğiniz örnek senaryolarda nasıl davranmanız gerektiğine de karar verebileceksiniz. \r\n\r\nKonu anlatımlarında, tanımlama ve tanımlamanın ardından örnek durumlarla yol gösterme şeklinde devam eden bir ilerleyiş göreceksiniz. Konuların fotoğraflarla desteklenerek devam etmesi, konuyu anlamanıza yardımcı olacak ve aynı şekilde kadraj yetinizi geliştirecektir. \r\n\r\nKitabın temel seviyede ilerleyen anlatımı, sizi kısa sürede fotoğraf çekebilir hale getirecek ve kendi kendinizi geliştirmede ilk adımı atmanıza yardımcı olacaktır. \r\n\r\nKitapta yer alan başlıca konu başlıkları şunlardır: \r\n\r\n• Temel Fotoğrafçılığa Giriş \r\n• Temel Fotoğrafçılık Tarihi \r\n• Fotoğraf Makineleri, Türleri ve Çalışma Prensipleri \r\n• Kompakt Makineler, SLR Makineler, TLR Makineler \r\n• Objektifler ve Objektif Türleri \r\n• Objektiflere Göre Kullanım Sonuçları \r\n• Enstantane, Örtücü \r\n• Enstantane Kullanımı \r\n• Enstantane İle İlgili Örnekler \r\n• Diyafram \r\n• Diyafram Kullanımı \r\n• Diyafram İle İlgili Örnekler \r\n• Enstantane-Diyafram İlişkisi \r\n• ISO \r\n• ISO Kullanımı ve Örnekleri \r\n• Enstantane-Diyafram-ISO Kullanımları \r\n• Işık ve Temel Özellikleri \r\n• Işık ile Çekim Örnekleri \r\n• Cephe Işığı \r\n• Yanal Işık \r\n• Ters Işık \r\n• Kontrast \r\n• Filtreler ve Filtre Özellikleri \r\n• Polarize, UV, ND Filtreler \r\n• Sehpa (Tripod) ve Kullanımı \r\n• Deklanşör (Trigger) ve Kullanımı \r\n• Flashlar \r\n• Tepe Flashları \r\n• Paraflashlar \r\n• SD Kartlar \r\n• CF Kartlar \r\n• Fotoğrafta Kompozisyon \r\n• Basitlik \r\n• Netlik \r\n• 1/3 Kuralı ve Oranlar \r\n• Ritm \r\n• Denge \r\n• Çizgiler \r\n• Perspektif \r\n• Hareket \r\n• Çerçeveleme \r\n• Kesim ve Detay …', 10.00, '5', 'dijital-fotografciliga-merhaba', '0'),
(12, 42, 0, 'DİJİTAL FOTOĞRAFÇILIK', 'Fotoğrafın sınırlarının olmaması, deklanşöre basan herkesin muhteşem fotoğraflar çekeceği anlamına gelmez. Dijital fotoğrafçılıkta bilgi ve teknikle birlikte, sanatsal bir görsel bakış açısına sahip olmak gerekir. Sanatsal bakış açısını kazanmak ve gözü eğitmek için de doğayı çok iyi gözlemlemek önemlidir. Fotoğraf makinesi ve kadraj; bu bakış açısını aktarmak için sadece bir araçtır. Tabi bu aracı da en iyi şekilde kullanıp en uygun çekim tekniklerini uygulamak, muhteşem fotoğrafların ortaya çıkmasına yardımcı olacaktır. \r\n\r\nBu kitap; dijital fotoğraf makineleri ve fotoğraf tekniklerinden başlayarak, dijital fotoğrafçılığın karanlık odası Adobe Photoshop ve Lightroom gibi yazılımlarla birlikte, fotoğrafta kompozisyon kurmanızda yol gösteren bütün bilgilere yer veren nadir ve en güncel eserlerden biridir. \r\n\r\nKitapta yer alan başlıca konu başlıkları şunlardır: \r\n\r\n• Dijital/Sayısal Fotoğrafçılığa Giriş \r\n• Dijital Fotoğraf Makineleri ve Çalışma Prensipleri \r\n• Fotoğraf Makinesi Türleri ve Donanım Bileşenleri \r\n• Görüntü Kaydı ve Görüntü İşleme \r\n• Objektif Tercihleri ve Çeşitleri \r\n• Diyafram Tercihleri ve Çeşitleri \r\n• Işığa Duyarlılık Derecesi ISO \r\n• Pozlama \r\n• Histogram \r\n• Işık ve Renk \r\n• Yardımcı Donanım Parçaları \r\n• Pozometre ile Işığı Ölçmek \r\n• Filtreler ile Çalışmak \r\n• Sehpa Kullanımı \r\n• Yapay Işık Kaynakları ile Çalışmak \r\n• Flaş Aksesuarları \r\n• Stüdyo Işıkları ve Şemsiyeler \r\n• Çekim Sırasında Kullanılan Aksesuarlar \r\n• Çekim Esnasında Estetik Yaklaşımlar ve Kompozisyon Kurgulama \r\n• Kompozisyon ve Oran Kuralları \r\n• Yatay ve Dikey Kadrajlama \r\n• Denge Kuralları \r\n• Dinamizm \r\n• Vurgu ve İlgi Merkezini Belirlemek \r\n• Zıt Renkler ile Vurgu Sağlamak \r\n• Parlaklık ile Vurgu Sağlamak \r\n• Netlik ve Vurgu İlişkisi \r\n• Işık ve Vurgu İlişkisi \r\n• Alan Derinliği \r\n• Ritm \r\n• Armoni ve Uyumluluk \r\n• Perspektif \r\n• Belirginlik \r\n• Kritik An Fotoğraf Çekimleri \r\n• Netlik ve Keskinlik \r\n• Fotoğrafta Sadelik ve Bütünlük \r\n• Görsel Öğeleri Etkili Kullanabilmek \r\n• Renklerin Psikolojik Anlamları \r\n• Form, Biçim ve Siluet Çekimleri \r\n• Doğrultu ve Yön Seçimi \r\n• Hız ve Hareket İzlenimi \r\n• Şemalar \r\n• Estetik Doz \r\n• Yaşam Öğeleri \r\n• Fotoğrafta İstenilen Mesajı Verebilmek \r\n• Fotoğraf Çekimindeki Püf Noktalar ve Teknikler \r\n• Çekim Sonrası Donanım ve Yazılım Araçları \r\n• Adobe Photoshop Ailesi ile Fotoğraf Düzenleme \r\n• Adobe Bridge \r\n• Adobe Photoshop CS6 \r\n• Photoshop Lightroom 4 \r\n• Camera RAW \r\n• Video Uygulamaları \r\n• Dijital Fotoğrafçılıkta Baskı İşlemleri \r\n• Baskıya Yönelik Renk Profil Ayarları \r\n• Yazıcı Ayarları ve Baskı \r\n', 20.00, '5', 'dijital-fotografcilik', '0'),
(13, 43, 0, 'C#  NESNE TABANLI PROGRAMLAMA', 'ÇOK YAKINDA!\r\n\r\n', 35.00, '10', 'c-nesne-tabanli-programlama', '0'),
(14, 43, 0, 'YENİ BAŞLAYANLAR İÇİN SAP ABAP/4', 'Bu kitap; SAP ABAP/4 yazılım dilini öğrenmek isteyen SAP kullanıcısı, programcı ve danışman adayı kişiler için, bilgi seviyelerini başlangıçtan orta seviyeye taşıyabilecek bir içerik sunmaktadır. \r\n\r\nAnlatımı, daha önce SAP ABAP/4 ile hiç tanışmamış kişilerin de rahatlıkla kavrayabileceği şekilde tasarlanmıştır. İçerik bazında, bir danışmanın en çok karşı karşıya kaldığı programlama ihtiyaçlarını barındırmasına özen gösterilmiştir. Kitap sona erdiğinde okuyucunun SAP ABAP/4 ile birçok ihtiyaca cevap verebilen, doğru mimaride ve performansı güçlü uygulamalar yazabilecek bilgi birikimine sahip olması hedeflenmiştir. \r\n\r\n\r\n• ERP ve SAP \r\n• ABAP Dilinin Temel Özellikleri \r\n• ABAP Workbench \r\n• ABAP’ta Temel Veri Tipleri \r\n• ABAP Veri Sözlüğü \r\n• Klasik ABAP Programlama \r\n• Uçuş Veri Modelinin Kullanılması \r\n• Koşullarla Veri İşlenmesi \r\n• ABAP Kodunda Döngülerin Kullanılması \r\n• Mesajların Programda Kullanımı \r\n• ABAP’ta Veritabanı Tabloları ile Çalışılması \r\n• Sistem Performansı Yönüyle ABAP Kodlama \r\n• Modüler Programlama ve Fonksiyonlar \r\n• ALV Rapor Programlama \r\n• Olay Tabanlı Rapor Programlama \r\n• Diyalog Programlama \r\n• Sistem ve Program Analizi (Debug İşlemi) \r\n• Debug İşlemi ve Opsiyonları \r\n• SAP Sistem Analizi \r\n• Ve Daha Fazlası...', 35.00, '5', 'yeni-baslayanlar-icin-sap-abap-4', '0'),
(15, 43, 0, 'PYTHON 3', 'Python, az kod ile çok iş yapmayı sağlayan, nesne yönelimli, yorumsal, modüler ve yüksek seviyeli bir dildir. Basit bir sözdizimine sahip olan Python ile kolay ve keyifli bir şekilde masaüstü uygulamaları, web uygulamaları, veri analizi ve görselleştirme uygulamaları gibi pek çok alanda yazılımlar geliştirilebilir. Programlamaya yeni başlayanlar için son derece uygun bir dil olmanın yanında profesyonel geliştiriciler için de pratik çözümler sunmaktadır. \r\nBu kitapta Python diline ait temel özelliklerin yanında, temel programlama mantığını da öğrenecek, basitten gelişmişe doğru yazılım bileşenleri ve tekniklerini tanıma olanağı bulacaksınız. Komut ezberlemek yerine yazılım dilinin felsefesine hakim olacak ve bu sayede farklı programlama dillerini de rahatlıkla öğrenebilecek bir altyapıya sahip olacaksınız. \r\n\r\n\r\n•	Python nedir? Neden Python? \r\n•	Python sürümleri \r\n•	Python Geliştirme Ortamı \r\n•	Temel veri türleri ve değişkenler \r\n•	Sayısal türler \r\n•	Karakter dizileri ve karakter işlemleri \r\n•	Mantıksal türler \r\n•	Tür dönüşümü \r\n•	Operatörler \r\n•	Karar yapıları \r\n•	Döngü yapıları \r\n•	Atlama deyimleri \r\n•	Listeler \r\n•	Demetler \r\n•	Sözlükler \r\n•	Kümeler \r\n•	Fonksiyonlar \r\n•	Özyineli fonksiyonlar \r\n•	Modüller \r\n•	Tarih – zaman işlemleri \r\n•	Hata yönetimi \r\n•	Dosya işlemleri \r\n•	Nesne yönelimli programlama \r\n•	Sınıflar ve üyeleri \r\n•	Miras ', 35.00, '5', 'python-3', '0'),
(16, 43, 0, 'JAVA ve JAVA TEKNOLOJİLERİ', 'Java, diğer programlama dillerinden çok daha farklı bir dünyadır. İçerdiği teknolojilerin çokluğu nedeniyle yeni başlayanlar genelde Java’ya nereden başlayacaklarını bilemezler. Bununla birlikte hemen hemen bütün teknoloji içerikli konularda olduğu gibi Java konusunda da nitelikli Türkçe kaynak sıkıntısı bulunmaktadır. \r\n\r\nPiyasadaki çoğu Türkçe ve İngilizce kitap, okuyucuya Java Dili’nin kavramlarını vermekte başarılı olsa da bu kitaplar içerdikleri uygulamalar göz önüne alındığında komut satırından çalışan küçük programlar ve çeşitli applet örneklerinden daha ilerisini sunamamaktadırlar. \r\nYeni nesil Java Web teknolojilerine ilgi duyan okuyucuların ise İngilizce kitaplar dışında maalesef hiç bir seçenekleri bulunmamaktadır. \r\nKitap tüm bu temel eksiklikler göz önünde bulundurularak hazırlandı. Kitaptaki örneklerin çok önemli bir kısmı günümüzün en çok kullanılan Entegre Geliştirme Ortamlarından Netbeans IDE’si üzerinde geliştirildi. Netbeans IDE’sinin detaylı bir incelemesini sunan kitap hazırlanan örneklerin Netbeans üzerinde nasıl çalıştırılacağı, hata ayıklama ve derleme gibi işlemlerin profesyonel bir şekilde nasıl kotarılabileceği hakkında detaylı bilgiler içermektedir. \r\n\r\nBu kitap, piyasadaki Java kitaplarının eksiklikleri göz önünde bulundurularak hazırlandı. Piyasadaki tüm Java kitapları, genellikle okuyucuya programlama dilinin bütün özelliklerini anlatır. Fakat bu kitapları bitirenlerin çoğu, kitabı bitirdiklerinde Java programlamaya nereden başlayacaklarını bilemezler. Okuyucular kitabı büyük bir iştahla bitirir. Ellerinde Java’nın hemen hemen tüm konseptlerini anlatan örnek kodlar vardır; fakat kodu derlemek ve çalıştırmak için bildikleri tek yol komut satırından bazı komutları çalıştırmaktır. Belli bir noktadan sonra bir metin editöründe Java kodu yazmak yeni başlayan okuyucunun hevesini kırar ve çoğu daha başlangıçta pes eder. Aslında bu durum hemen hemen bütün programlama kitapları için geçerlidir. \r\n\r\nBu kitabın Java’nın bütün özelliklerini anlatmak gibi bir iddiası yoktur. Bir başka deyişle bu kitap Java’yı her şeyiyle anlatan bir referans kitabı değildir. Kitabın temel iddiası Java’yı profesyonel araçlarla etkin bir şekilde kullanmayı öğretmektir. Peki, Java nasıl etkin bir şekilde kullanılır? Bize göre en temel ihtiyaç bir Entegre Geliştirme Ortamıdır. Kitapta hemen hemen her konu piyasadaki en güçlü Java geliştirme ortamlarından biri olan NetBeans IDE’si kullanılarak anlatılmıştır. İlk 3 bölüm dışındaki tüm örnekler Netbeans projeleri olarak verilmiştir. \r\n\r\nKitabın ilk 5 bölümü Java temellerini anlatır. Değişkenler, kontrol yapıları, mantıksal ifadeler, sınıflar, nesneler, metotlar, döngüler ve kalıtım gibi kavramlar ilk 5 bölümde işlenmiştir. Kitabın geriye kalan 11 bölümü ise uygulamaya yöneliktir. Bu bölümler altında Netbeans temelleri, veritabanı tasarımı, MySQL, Swing, JDBC, JFreeChart, Web Servisleri, JSF 2.0, JPA/Hibernate, Java Mobile gibi piyasada sıklıkla kullanılan kavramlar incelenmiştir. Kitabın 8-13. bölümleri arasında adım adım bir Blog uygulaması geliştirilmiştir. Geliştirilen blog uygulaması için bir veritabanı tasarımı yapılmıştır. Bu veritabanına JDBC aracılığıyla Swing, JSF ve Web servisleri üzerinden erişim gerçekleştirilmiş ve neredeyse tam teşekküllü bir Blog uygulaması geliştirilmiştir. \r\n\r\nKitabın 14 ve 16. Bölümleri ise sırasıyla J2ME ve Java’da İleri Konular olarak adlandırılmıştır. Bu bölümlerden 14 ve 16. bölümler giriş niteliğindeki bölümlerdir. 15. bölüm ise yine tam teşekküllü bir JPA/Hibernate uygulamasıdır. \r\n\r\nKitabı bitirdikten ve örnek uygulamaları çalıştırıp inceledikten sonra, diğer kitapların sonuna geldiğinizde yaşayabileceğiniz olası uygulama eksikliklerini büyük ölçüde kapatmış olacaksınız. \r\n\r\nKitapta yer alan başlıca konu başlıkları: \r\n\r\n• Programlama Dillerinin Tarihçesi \r\n• Java Programlama Dili \r\n• JDK, JRE ve JVM Kavramları \r\n• Java Programlama Dili Temelleri \r\n• Değişkenler, Diziler, If-Else, Switch yapıları, Operatörler, Döngüler, \r\n• Java ile Programlamaya Giriş \r\n• Sınıflar, Nesneler, Metotlar, Statik metotlar, İstisna Yönetimi, Paketler \r\n• Java ile Nesne Tabanlı Programlama Temelleri \r\n• Kalıtım, Arayüzler Çok biçimlilik, Generics ve Collections Kavramları \r\n• Java Build Sistemleri ve IDE’leri \r\n• Ant, Maven \r\n• IDE Kavramı(Netbeans, Eclipse, IntelliJ, JDeveloper, JBuilder) \r\n• Netbeans IDE’si ve kurulumu \r\n• Temel Java Uygulama Yapıları \r\n• Konsol Uygulamaları \r\n• Masaüstü Uygulamaları(Swing, AWT, SWT) \r\n• Web Uygulamaları(JSP, JSF, Struts, Seam, Spring) \r\n• İlişkisel Veritabanı Kavramı(SQL, MySQL, Navicat) \r\n• JDBC ile Veritabanı Programlama Temelleri \r\n• Swing masaüstü uygulaması örneği \r\n• JSF Uygulaması Örneği \r\n• Web Servis Teknolojileri ve Web Servis Uygulaması Örneği \r\n• Diğer Uygulama Örnekleri(Text ve Xml dosyalarına erişim) \r\n• Raporlama araçları (Jasperreports ve Ireport) \r\n• Çok kanallı uygulamalar. \r\n• Netbeans ile Java Tabanlı Cep Telefonu Uygulamaları Geliştirme \r\n• JPA/Hibernate ile Veritabanı Programlama \r\n• Önemli Java Kütüphaneleri’nin İncelenmesi (Apache POI, JESS, Zemberek, Solr, Lucene, JFreeChart, SwingX, Substance)', 35.00, '5', 'java-ve-java-teknolojileri', '0'),
(17, 43, 0, 'CSS3', '\r\nKitap Hakkında\r\nKitapta, CSS3’ün yapısı ve özellikleri baştan sona adım adım anlatılmıştır. Her örnek için açıklamalar eklenmiştir. Zor, anlaşılması kolay olmayan konular için gündelik hayattan örnekler eklenerek ilgili konular basite indirgenmeye çalışılmıştır. \r\nİlk kısımda temel düzeyde HTML konularına giriş yapılmıştır. Bu bölümde okuyucu HTML tarafında eksik kalan veya hatırlamadığı konuları tekrar gözden geçiriyor olacaktır. İkinci kısımda ise CSS konuları ele alınmış ve örneklerle anlatılmıştır. Üçüncü bölümde ise CSS3 konusu, örnekler ile adım adım anlatılmıştır. \r\n\r\n\r\n· HTML \r\n\r\n· XHTML \r\n\r\n· ID ve CLASS \r\n\r\n· Box Model \r\n\r\n· Display Özellikleri \r\n\r\n· Position \r\n\r\n· Medya \r\n\r\n· Z-Index \r\n\r\n· Import \r\n\r\n· Selectors \r\n\r\n· Pseudo UI Selectors \r\n\r\n· Opacity \r\n\r\n· Gradients \r\n\r\n· Tipografi \r\n\r\n· Text-Shadow \r\n\r\n· Flexible Box \r\n\r\n· Box Sizing \r\n\r\n· Border Radius \r\n\r\n· Box Shadow \r\n\r\n· Border Image \r\n\r\n· Multiple Background \r\n\r\n· Background Origin \r\n\r\n· 3D Transform \r\n\r\n· Transitions \r\n\r\n· Animations \r\n\r\n· CSS3 Media Özellikleri', 30.00, '5', 'css3', '1'),
(18, 49, 0, 'ANDROID STUDIO&PROGRAMLAMA', 'ndroid Studio ile güncellenen bu kitap, piyasadaki Android kitaplarıyla kıyaslandığı zaman başlangıç seviyesi ile uzman seviyesi arasında kalan bir konumda yer alır. Giriş seviyesindeki kitaplar mantık olarak bol, basit ve kısa örnekler üzerinden okuyucuları uygulama geliştirmeye aşina hale getirmeyi amaçlar. Uzman seviyesindeki kitaplar da genel olarak oturup baştan sona okuyacağınız kaynaklar olmaktan çok, temel seviyede Android uygulama geliştirme bilgisine sahipseniz, belli konularda ayrıntılı bilgi bulmak için referans olarak, ihtiyaç duydukça kullanabileceğiniz kaynaklardır. \r\n\r\nKitabın amacı; giriş seviyesi ile uzman seviyesi arasında bir kaynak sunmaktır. Her bir bölümde Android mimarisi ile ilgili ayrıntılı bilgiler bulacaksınız. Ayrıca, öğrendiğiniz her bir kavramı, konu anlatımları arasında bulunan çalışır durumdaki projeler yardımıyla pekiştirebileceksiniz. Diğer kaynakların birçoğundan farklı olarak, her bir bölümün sonunda kitap boyunca adım adım geliştireceğimiz bir proje ile ilgili kısımlar bulacaksınız. Bölümlerde anlattığımız ve örnekler üzerinde somutlaştırdığımız kavramları, bu projede daha büyük bir çerçevede görecek ve her bölümde, sonunda yeni özellikler katarak gerçek bir projenin geliştirilme aşamalarını daha net anlayacaksınız. \r\n\r\nTemel nesne tabanlı programlama prensiplerine hakimseniz, bu kitabı kullanarak Android uygulama geliştirme dünyasına adım atabilirsiniz. Daha önceden Android mimarisi ile bilgi edindiyseniz, yine öğrendiklerinizi bu kitap yardımıyla pekiştirebilirsiniz. \r\n\r\nKitapta anlatılan proje genel olarak şunları içermektedir: \r\n\r\nKim Nerede, kitabın ilerleyişi boyunca adım adım geliştireceğimiz bir projedir. Bu projedeki amacımız; anlattığımız kavramları büyük çapta bir uygulamada nasıl kullanabileceğinizi göstermektir. \r\nKim Nerede projesi 4 ana bölümden oluşur. \r\n\r\n• Profil ekranında kendinize ait bir profil oluşturabilecek, profil fotoğrafı çekebilecek ve kaydedebileceksiniz. \r\n• Ayarlar ekranında uygulamanın kullanımı ile ilgili tercihlerinizi belirleyebileceksiniz. \r\n• Kimler ekranında yeni arkadaşlar ekleyip mevcut arkadaşlarınızı listeleyebileceksiniz. \r\n• Son olarak Harita ekranında da arkadaşlarınızın konumlarını ve kendi konumunuzu harita üzerinde görebileceksiniz. \r\n\r\nBu 4 ana ekran, arkaplanda çalışan servisler ve internet üzerinde bir sunucuda yürütülen script’ler sayesinde, kitapta anlattığımız konuların tamamını bu projede işlemeye çalıştık. Ayrıca, projede kitabın ilerleyen bölümlerinde de belirttiğimiz gibi bazı kasıtlı eksiklikler bırakarak, bunları sizin geliştirmenize olanak sağladık ve eksiklikleri giderebilmeniz için yol gösterdik. \r\n\r\nKitap ile birlikte verilen CD içerisinde yer alan görsel eğitim videoları ve projeye ait kaynak kodlar da Android ile programlamayı ve proje yönetim sürecini daha iyi anlamanıza yardımcı olacaktır. \r\n\r\nKitapta yer alan başlıca konu başlıkları şunlardır: \r\n\r\n• Android’le Beraber Gelen Yerel Uygulamalar \r\n• Dalvik Virtual Machine \r\n• Android Studio \r\n• İlk Android Uygulamanız ve SDK Kurulumu \r\n• Temel Android Uygulama Elemanları \r\n• Manifest Dosyası (AndroidManifest.xml) \r\n• Aktiviteler ve Uygulama Hayat Döngüleri \r\n• Uygulama Öncelikleri \r\n• Resources \r\n• Kim Nerede Projesi \r\n• Giriş Ekranı \r\n• Ana Ekran \r\n• Harita Ekranı \r\n• Kimler Ekranı \r\n• Profil Ekranı \r\n• Ayarlar Ekranı \r\n• Proje Yapısı	\r\n• Arayüz Geliştirme \r\n• Tanımsal Ekran Tasarımı \r\n• Programatik Ekran Tasarımı \r\n• View \r\n• Layout \r\n• Ortak View Özellikleri \r\n• Menu \r\n• Debug ve Loglama \r\n• Fragment \r\n• Intent Kavramı ve Yayın Algılayıcılar \r\n• Adapter \r\n• Dialog Fragment \r\n• Intent Kavramı ve Kullanım Amaçları \r\n• Activity - Intent İlişkisi \r\n• Broadcast - Intent İlişkisi \r\n• Preferences ve Dosya Yönetimi \r\n• Durum Bilgisi Kaydetme \r\n• Shared Preferences \r\n• Preference Framework \r\n• Preference Fragment \r\n• Preference Header \r\n• Dosya Yönetimi \r\n• Ayarlar Ekranı \r\n• Veritabanı Yönetimi ve Content Providers \r\n• Veritabanı Yönetimi \r\n• SQLite \r\n• Cursor \r\n• MIME Type \r\n• Android Content Provider Uygulamaları \r\n• Loader Kavramı \r\n• Content Provider Oluşturma \r\n• HTTP POST ve HTTP GET \r\n• Arka Plan İşlemleri \r\n• AsyncTask \r\n• Alarmlar \r\n• Konumlandırma ve Harita Yönetimi \r\n• Location Provider Seçimi \r\n• Konum - Adres Çevrimleri ve Geocoder Kavramı \r\n• Google Maps Android API \r\n• MyLocationOverlay \r\n• Sensörler \r\n• Hareket Sensörleri \r\n• KonumSensörleri \r\n• Çevresel Sensörler \r\n• Uygulamayı Android Market’e Yükleme \r\n• Yayına Hazırlama \r\n• Gerekli Materyalleri Toplama \r\n• Uygulama Konfigürasyonu \r\n• Uygulamanın Derlenmesi \r\n• Sunucuların Hazırlanması \r\n• Test Süreci \r\n• Yayınlama Süreci \r\n• Publisher Hesabı Oluşturma \r\n• Android Developer Console \r\n• Uygulamadan Para Kazanma \r\n• ve Daha Fazlası ', 38.00, '5', 'android-studio-programlama', '1'),
(19, 49, 0, 'WIN10 UYGULAMA GELİŞTİRME', 'Acemi ve uzman geliştiriciler tarafından hazırlanan yeni uygulamalar, Windows Mağazasında bir bir yerini almakta ve hızla gelişmektedir. Windows 10 ile birlikte uygulama geliştirme mantığını bir üst seviyeye taşıyan Microsoft, Universal Windows Platform adı altında yazılan tüm Windows uygulamalarının bütün platformlarda (Masaüstü, RT Tablet, Telefon) çalışmasını amaçlamaktadır. Bu doğrultuda elinizde tuttuğunuz eser ile birlikte Windows Uygulama Mağazasına uygulama geliştirmenin ilk adımını atmış olacaksınız. Böylece fikirlerinizin tüm dünyaya açılması sağlayarak Windows Mağaza uygulamalarına olan ihtiyaca cevap verebilir duruma gelebileceksiniz. \r\n\r\nKitap içerisindeki örneklerin tamamı, Visual Studio 2015 Enterprise programında C# dili kullanılarak yazılmış ve Windows 10 yüklü bilgisayar, tablet ve telefon cihazlarında denenmiştir. \r\n\r\n\r\n\r\n\r\n• Universal Windows 10 Geliştirme Ortamı \r\n\r\n• Device Family \r\n\r\n• Xaml Design \r\n\r\n• Adaptive UI \r\n\r\n• Blend For Visual Studio 2015 \r\n\r\n• Grafik ve Animasyon \r\n\r\n• Navigasyon \r\n\r\n• Xaml Kontrol \r\n\r\n• Sensörler \r\n\r\n• Ses, Video ve Kamera \r\n\r\n• Pil yönetimi \r\n\r\n• Veri Yönetimi \r\n\r\n• Adaptive Code \r\n\r\n• App Lifecycle \r\n\r\n• Notification, Tiles, Toasts \r\n\r\n• Bing Harita \r\n\r\n• Template 10 \r\n\r\n• AppStudio \r\n\r\n• Unity’den Windows 10’a Uygulama Aktarma \r\n\r\n• Mağaza İşlemleri \r\n\r\n• Reklam İşlemleri \r\n', 35.00, '5', 'win10-uygulama-gelistirme', '1'),
(20, 49, 0, 'iOS PROGRAMLAMAYA GİRİŞ', '\r\nKitap Hakkında\r\nMobil uygulamalar son yıllarda giderek daha fazla biçimde kullanım kazanmaktadır. iPhone telefonların yaygın kullanımı göz önüne alındığında, iOS için geliştirilen uygulamaların önemi çok daha iyi anlaşılabilir. Bu durumda, farklı programlama dillerinde uzman yazılımcıların ve mobil uygulama alanında çalışmak isteyen programcıların da mobil uygulama programlama tekniklerini öğrenmesi kaçınılmaz olmaktadır. \r\n\r\nBu kitapta; iPhone ve iPad uygulamak için gerekli olan XCode ve Interface Builder kullanımı, Objective C programlama dili, iPhone görsel arayüz elemanları, SQLite ile veritabanı işlemleri ve dosya kullanımı işlemleri temel olarak örnek uygulamalarla açıklanmıştır. Okurların, kitabı okuyarak örnek uygulamaları yaptıktan sonra daha ileri uygulamalar yazmak için iyi bir temel bilgiler edinmesi ve iOS yazılım mimarisin öğretilmesi amaçlanmıştır. \r\n\r\n• Objective C ile iOS Programlamaya Giriş \r\n• Objective C ile Uygulama Örnekleri \r\n• XCode ve Interface Builder \r\n• iPhone Uygulama Mimarisine Giriş \r\n• iPhone Görsel Arayüz Bileşenleri \r\n• İPhone Görsel Arayüz Programlama \r\n• Uygulama Örnekle', 35.00, '5', 'ios-programlamaya-giris', '0'),
(21, 50, 0, 'Leyla ile Mecnun', 'Arka Kapak Yazısı (Tanıtım Bülteninden)\r\n\r\n“Bir yanımız çöl bir yanımız deniz…”\r\n\r\n “Zaman döngüseldir ve farklı seçimler yapsan da aynı hayatı yaşarsın. Sana verilmiş bir ömür vardır. Bu dünyadaki zamanın bellidir. Ve her şey bir denge içindedir. Biz... Daha doğrusu ben, o dengeyi bozdum…”\r\n\r\nAynı gün aynı hastanede doğmalarıyla başladı her şey. Bir hayatın birden fazla kez yaşanabileceğinin ve yarım kalmış her hikâyenin tamamlanmaya muhtaç olduğunun bir kanıtıydı onlar. Peki Mecnun bu sefer Leylasına kavuşabilecek mi?  Yoksa yine çölde mi açacak gözlerini? Çünkü o çöl çaresiz âşıkların son durağıdır. Kavuşamayan âşıklar o çölde aralar sevdiğini, kavuşanlarsa emlakçı emlakçı dolanır dururlar, 2+1 kombili.\r\n\r\nYayınlandığı dönemde izleyicisini ekrana kilitleyen Leyla ile Mecnun, bu kez bambaşka bir hikâye ile sevenleriyle yeniden buluşuyor. Mecnun, İsmail Abi, Erdal Bakkal, Baba İskender, Yavuz Hırsız, Yedek Kamil, Gözlüklü Çocuk Kaan ve Aksakallı Dede bu kez bambaşka bir maceranın peşine düşüyor. O geminin geleceğine ilk günkü gibi inananların, sevdiği kızın gözlerinin içine bakarak ‘seni seviyorum’ diyemeyenlerin, kendi çölünde kaybolanların hikâyesi Leyla ile Mecnun Burak Aksak’ın kalemiyle yeni başlangıçlar için geri dönüyor.\r\n\r\n \r\n\r\nKatkıda Bulunanlar:\r\nEditör: BÜŞRA HACISALİHOĞLU\r\nKapak Tasarım: SONGÜL  KARAKOÇ\r\n\r\n \r\n\r\n \r\n\r\nHamur Tipi : 2. Hamur\r\n\r\nBaskı Sayısı : 1. Basım\r\n\r\nİlk Baskı Yılı : 2018\r\n\r\nSayfa Sayısı : 272\r\n\r\nEbat : 13,5 x 19,5\r\n\r\nDil : Türkçe', 19.00, '10', 'leyla-ile-mecnun', '0'),
(22, 50, 0, 'Kırlangıç Çığlığı', 'rka Kapak Yazısı (Tanıtım Bülteninden)\r\n\r\n \r\n\r\nAcıyı gördüm. Gözlerinin ortasında bir çiçek gibi büyüyen irisin önce ağır ağır büzülmesini, ardından çığlık gibi ansızın patlamasını gördüm. Titreyen dudaklar, bal mumuna dönüşen yüzleri, çöken yanakları, irileşen elmacık kemiklerini, birer mağara gibi derinleşen göz çukurlarını, kurumuş ağızların içinde pelteleşen dilleri gördüm.\r\n\r\n \r\n\r\nAnladım ki benliğimizin farkına vardığımız an, acının pençesinde kıvrandığımız andır.\r\n\r\n \r\n\r\nÇığlık değil, ürperiş değil, evet, nereden geldiğini bilmediğim o vahşi iniltiyi kalbimin derinliklerinde duydum. Soluksuz kaldım, boğazım kupkuru, alnım ateşler içinde, tuhaf bir hülyaya kapılmışım gibi sürüklendim o dipsiz boşlukta. Hayatın en karanlık sırrıyla yüzleştim.\r\n\r\n \r\n\r\nKaranlığın her aşamasından geçtim, akan kanın sesini duydum, ölümün serinliğini damarlarımda hissettim.\r\n\r\n \r\n\r\nGeçmişin kamburunu çoktan söküp attım sırtımdan.\r\n\r\n \r\n\r\nİnsanın insanı öldürdüğü o ilk ânı gördüm, katilin zafer haykırışını, kurbanın korku çığlığını işittim.\r\n\r\n \r\n\r\nHer an uyanmaya hazır o muhteşem dürtüyü bastırmak, insanlığın en masum haline, en saf doğasına dönmemek için yıllarca ihanet ettim kendime. Kendimle birlikte bütün dünyayı da kandırdım. Neredeyse başaracaktım ama bırakmadılar, benim adıma onlar öldürmeye başladılar.\r\n\r\n \r\n\r\nİşte bu yüzden geri döndüm...\r\n\r\n \r\n\r\nKapak: Lom Creative\r\n\r\nEditör: M. Said Aydın\r\n\r\n \r\nHamur Tipi : 2. Hamur\r\n\r\nBaskı Sayısı : 1. Basım\r\n\r\nİlk Baskı Yılı : 2018\r\n\r\nSayfa Sayısı : 400\r\n\r\nEbat : 13,5 x 23\r\n\r\nDil : Türkçe', 17.00, '10', 'kirlangic-cigligi', '0'),
(23, 51, 0, 'Headbang 2', 'lue Jean, Laneth ve Non Serviam gibi rock ve metal kültürünün en önemli yayınlarına imza atan ekipten arşivlik bir seri.\r\n\r\n \r\n\r\n“Makyajımız, hareketlerimiz hepsinin kökeni aslında yine metale dayanıyor. Bir noktada makyaj yapmaya başladık çünkü aklımızda mesela gözlerinin etrafını siyaha boyayan Misfits tarzı bir imaj vardı…”\r\n\r\n- Jonathan Hulten (Tribulation)\r\n\r\n \r\n\r\n“2016’daki terör saldırısı esnasında uçakta Güney Afrika’ya turneye gidiyorduk. Saldırıdan sonra uçak Yunanistan’a geri döndü. Şimdi yine İstanbul’dayız.”\r\n\r\n- Sakis Tolis (Rotting Christ)\r\n\r\n \r\n\r\n“Albümün adı biraz ironik olarak çelişkili. Hepimiz yolculukta olan karakterleriz. Aslında yolculuğun kendisiyiz. Ve bence nihilizm ve pesimizm yararı olan şeyler değil.”\r\n\r\n- Daniel Cavanagh (Anathema)\r\n\r\n \r\n\r\n“Viking döneminde yapılan çok az şey var. Atalarımızın büyük çoğunluğu bildiğiniz üzere esnaf ve çiftçiydi. Biz daha çok mitoloji, felsefe ve Hristiyanlık öncesi Norveç ve İskandinavya mistisizmi üzerine odaklandık.”\r\n\r\n- Grutle Kjellson (Enslaved)\r\n\r\n \r\n\r\n“Bence insanların black metal’de genellikle yaptıkları hata bunu basit bir şey olarak görmeleri, ama öyle değil. Bu bir yaşam tarzı. Black metal dinsel ve maji geleneklerine dayanır ki bunu anlamak yaşam boyu sürer. İnsanlar buna dahil olmak için aceleci davranıyorlar. Black metal’in üzerine inşa edildiği bu güce saygı gösterilmeli.”\r\n\r\n- Erik Danielsson (Watain)\r\n\r\n \r\n\r\n“Bizim için yaşadığımız ve etrafımızda yaşanan her şey müziğin içine giriyor. Melankoli ve ümitsizlik gruba güç sağlayan iki unsur. Merak ettiğimiz, ilgi duyduğumuz şeylere karşı olan genel bir mücadele de bizi etkileyen bir durum. Bu yüzden ümitsizlik, melankoli ve mücadele müziğimize ve şarkı sözlerimize fazlasıyla yansıyor.”\r\n\r\n- Tomas Lindberg (At The Gates)\r\n\r\n \r\n\r\n“Benim kafamda hala yaptığım şey black metal çünkü sound kulağa farklı gelmesine rağmen aynı çekirdek atmosfer. Ayrıca ben bunu hiçbir uzlaşmaya açık olmadan yapıyorum. Bu black metalin en önemli özelliği, fakat insanlar black metal içinde şunu yapmamalısın, bunu yapmamalısın, diyor. Gerçek black metal albümü ona insanların neye izin verip vermediğini umursamayandır. Bu bir paradoks.”\r\n\r\n - Ihsahn\r\n\r\n \r\n\r\n“Venom yeni bir tür yarattı ama kendimize black metal dememizin sebebi kendimizi diğer her şeyden ayırmak, farklı kılmaktı. Kimseye benzemeyen bir tarzımız vardı. En iyi çalan müzisyen belki ben olmayabilirim ama içimdeki tutkuyla bayrak taşıyıcılığı yapıp, bayrağı  sonraki gruplara devredebilirim.”\r\n\r\n- Tony Dolan (Venom Inc.)', 13.00, '5', 'headbang-2', '1'),
(24, 51, 0, 'Mimarlıkta Teknik Resim', 'Türkiye\'deki mimarlık eğitiminin temel kitaplarından olan Mimarlıkta Teknik Resim\'in 13. baskısı, geliştirilip zenginleştirilen içeriğiyle, sayfa sayısı yaklaşık yüzde 40 artarak tam 524 sayfa çıktı…\r\n\r\n\r\nMimar-öğretim üyeleri Orhan Şahinler ile Fehmi Kızıl\'ın geniş bilgi, deneyim ve birikimlerine dayalı çalışmalarından yola çıkarak hazırladıkları, Türkiye\'deki mimarlık eğitiminin temel kitaplarından olan Mimarlıkta Teknik Resim, mimarlık eğitiminin yanı sıra meslek etkinlikleri için de bir ders ve başvuru kaynağı niteliği taşıyor. Yalnızca teknik resme ilişkin bilgileri doğrudan aktarmakla yetinmeyen kitap, teknik resmi mimarlığın proje düzenleme bilgileri, yapı bilgisi, detaylar, perspektif türleri, şantiye bilgileri, proje örnekleri, çizim örnekleri gibi alt dallarına ilişkin bilgilerle destekleyip somutlaştırarak öğretiyor. \r\n\r\nYazarların üzerinde uzun süre çalışılarak hazırladıkları Mimarlıkta Teknik Resim\'in güncellenmiş ve geliştirilmiş 13. Baskısında, eşlenik dik izdüşüm, algılama, kavrama, bina kesiti ve mimari anlatım dili alanında yeni konular eklendi. Eklenen ve güncellenen konular perspektif anlatım ve açıklayıcı bilgi notları olan çizimlerle daha kolay kavranır hale getirildi, konulara ilişkin çizimlerden birçoğu eğitimde denenip görülen eksiklikleri giderilerek olgunlaştırıldı. Özel konumlu düzlemler, üç temel izdüşümünden objenin kavranması ve gerçek büyüklüğünün bulunması, grafik anlatım ve algılamadaki önemi, ölçekli çizim, 1/200 ölçekli yerleşme planı ve kesiti, 1/200 ve 1/100 ölçekli plan, kesit ve görünüşleriyle fikir ve kesin proje örnekleri, plankotede verilen kotlardan yararlanarak arazinin eşyükseklik çizgilerinin elde edilmesi, eğik düzlemli çatılarda çatı düzlemlerinin arakesitinin ve gerçek büyüklüğünün bulunması, makine teknik resimlerinde boyutlandırma konuları eklendi. \r\n\r\nKitapta yer alan \"teknik resim\"in tanımı ve tarihi gelişimi, teknik resim çiziminde kullanılan gereçler, çizim hazırlıkları ve çizim, geometrik çizimler, resim yöntemleri, kesit türleri, boyutlandırma, merdiven plan ve kesiti, küpeşte görünüşünün çizimi, merdiven basamağı dengelenmesi, plandaki verilerden yararlanarak kesit çizmeden görünüş elde etmek, eşlenik dik izdüşümde gölge ve paralel izdüşümle (aksonometrik) perspektif konuları da zenginleştirildi.\r\n(Tanıtım Bülteninden)\r\n\r\n\r\n\r\nSayfa Sayısı: 524\r\n\r\nBaskı Yılı: 2016\r\n\r\n\r\nDili: Türkçe\r\nYayınevi: Yapı Endüstri Merkezi Yayınları\r\n\r\nİlk Baskı Yılı : 2011\r\n\r\nSayfa Sayısı : 524\r\n\r\nDil : Türkçe', 56.00, '5', 'mimarlikta-teknik-resim', '1');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tblurun_resim`
--

CREATE TABLE `tblurun_resim` (
  `urunfoto_id` int(11) NOT NULL,
  `urun_id` int(11) NOT NULL,
  `urunfoto_resimyol` varchar(255) COLLATE utf32_turkish_ci NOT NULL,
  `urunfoto_sira` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_turkish_ci;

--
-- Tablo döküm verisi `tblurun_resim`
--

INSERT INTO `tblurun_resim` (`urunfoto_id`, `urun_id`, `urunfoto_resimyol`, `urunfoto_sira`) VALUES
(5, 3, '/26043219252578821022127274.png', 0),
(7, 4, '/22087256772263320724164904.png', 0),
(8, 6, '/28187305522493020416180341.png', 0),
(9, 7, '/22626315322651830787190905.png', 0),
(10, 8, '/2045626544211463146195697.png', 0),
(12, 5, '/2134725876310092420295697.png', 0),
(13, 9, '/2495023410269803080295697.png', 0),
(14, 10, '/276832008524966307831726.png', 0),
(15, 11, '/214992741124480275331726.png', 0),
(16, 12, '/2608727456288912518695844.png', 0),
(17, 13, '/29381264712556331670204627.png', 0),
(19, 14, '/24968246332040423495204627.png', 0),
(20, 15, '/27435306862674431695204627.png', 0),
(21, 16, '/29080263522175230095204627.png', 0),
(22, 17, '/30968283852461831164204627.png', 0),
(23, 18, '/24577252232439220547204627.png', 0),
(24, 19, '/29278288703031225880128247.png', 0),
(26, 21, '/317522282028303266550001750839001-1.jpg', 0),
(29, 22, '/317272988320048205230001746599001-1.jpg', 0),
(30, 20, '/214352459621737311891338 (1).png', 0),
(32, 23, '/318852093324780279610001758034001-1.jpg', 0),
(33, 24, '/306252948224457240720000000162857-1.jpg', 0),
(34, 25, '/265292916731210242131404574.jpg', 0),
(35, 25, '/23523240733016722543images (1).jfif', 0),
(36, 25, '/23360255802293828887images.jfif', 0),
(37, 25, '/23381241462621227094indir (1).jfif', 0),
(38, 25, '/24237302512865827036indir.jfif', 0);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tbluyeler`
--

CREATE TABLE `tbluyeler` (
  `kullanici_id` int(11) NOT NULL,
  `kullanici_adsoyad` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_yetki` enum('0','1') COLLATE utf8_turkish_ci NOT NULL DEFAULT '0',
  `kullanici_adres` text COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_mail` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_tel` varchar(11) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_password` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_kayit_tarihi` datetime NOT NULL DEFAULT current_timestamp(),
  `kullanici_img` text COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_durum` int(1) NOT NULL,
  `kullanici_adi` varchar(250) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `tbluyeler`
--

INSERT INTO `tbluyeler` (`kullanici_id`, `kullanici_adsoyad`, `kullanici_yetki`, `kullanici_adres`, `kullanici_mail`, `kullanici_tel`, `kullanici_password`, `kullanici_kayit_tarihi`, `kullanici_img`, `kullanici_durum`, `kullanici_adi`) VALUES
(27, 'Berk Dusunur', '1', 'Lorem Ipsum, dizgi ve baskı endüstrisinde kullanılan mıgır metinlerdir. Lorem Ipsum, adı bilinmeyen bir matbaacının bir hurufat numune kitabı oluşturmak üzere bir yazı galerisini alarak karıştırdığı 1500\'lerden beri endüstri standardı sahte metinler olarak kullanılmıştır. Beşyüz yıl boyunca varlığını sürdürmekle kalmamış, aynı zamanda pek değişmeden elektronik dizgiye de sıçramıştır. 1960\'larda Lorem Ipsum pasajları da içeren Letraset yapraklarının yayınlanması ile ve yakın zamanda Aldus PageMaker gibi Lorem Ipsum sürümleri içeren masaüstü yayıncılık yazılımları sile popüler olmuştur.', 'Berk@gmail.com', '05353533535', '7d4d78464ecdd65398211ccb0b5087eb', '0000-00-00 00:00:00', '/31238photo.jpg', 1, 'admin'),
(52, 'selahattin altuntaş', '1', 'ffas', 'selo@gmail.com', '', '7d4d78464ecdd65398211ccb0b5087eb', '2021-05-08 04:06:04', '', 1, 'deneme'),
(53, 'selahattin altuntaş', '0', 'Harran Üniversitesi', 'deneme@gmail.com', '', '8f10d078b2799206cfe914b32cc6a5e9', '2021-05-18 19:16:08', '', 0, ''),
(54, 'selahattin altuntaş', '0', 'Harran Üniversitesi', 'seloo@gmail.com', '', '7d4d78464ecdd65398211ccb0b5087eb', '2021-05-22 22:12:18', '', 0, '');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tblyorum`
--

CREATE TABLE `tblyorum` (
  `yorum_id` int(11) NOT NULL,
  `kullanici_id` int(11) NOT NULL,
  `urun_id` int(11) NOT NULL,
  `yorum_detay` text COLLATE utf32_turkish_ci NOT NULL,
  `yorum_zaman` timestamp NOT NULL DEFAULT current_timestamp(),
  `yorum_onay` enum('0','1') COLLATE utf32_turkish_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_turkish_ci;

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `hakkimizda`
--
ALTER TABLE `hakkimizda`
  ADD PRIMARY KEY (`hakkimizda_id`);

--
-- Tablo için indeksler `tblayar`
--
ALTER TABLE `tblayar`
  ADD PRIMARY KEY (`ayar_id`);

--
-- Tablo için indeksler `tblbanka`
--
ALTER TABLE `tblbanka`
  ADD PRIMARY KEY (`banka_id`);

--
-- Tablo için indeksler `tblkategori`
--
ALTER TABLE `tblkategori`
  ADD PRIMARY KEY (`kategori_id`);

--
-- Tablo için indeksler `tblmarkalar`
--
ALTER TABLE `tblmarkalar`
  ADD PRIMARY KEY (`MarkaId`);

--
-- Tablo için indeksler `tblmenu`
--
ALTER TABLE `tblmenu`
  ADD PRIMARY KEY (`menu_id`);

--
-- Tablo için indeksler `tblresim`
--
ALTER TABLE `tblresim`
  ADD PRIMARY KEY (`resim_id`);

--
-- Tablo için indeksler `tblsepet`
--
ALTER TABLE `tblsepet`
  ADD PRIMARY KEY (`sepet_id`);

--
-- Tablo için indeksler `tblsiparis`
--
ALTER TABLE `tblsiparis`
  ADD PRIMARY KEY (`siparis_id`);

--
-- Tablo için indeksler `tblsiparis_detay`
--
ALTER TABLE `tblsiparis_detay`
  ADD PRIMARY KEY (`siparisdetay_id`);

--
-- Tablo için indeksler `tblslider`
--
ALTER TABLE `tblslider`
  ADD PRIMARY KEY (`slider_id`);

--
-- Tablo için indeksler `tblurunler`
--
ALTER TABLE `tblurunler`
  ADD PRIMARY KEY (`urun_id`);

--
-- Tablo için indeksler `tblurun_resim`
--
ALTER TABLE `tblurun_resim`
  ADD PRIMARY KEY (`urunfoto_id`);

--
-- Tablo için indeksler `tbluyeler`
--
ALTER TABLE `tbluyeler`
  ADD PRIMARY KEY (`kullanici_id`);

--
-- Tablo için indeksler `tblyorum`
--
ALTER TABLE `tblyorum`
  ADD PRIMARY KEY (`yorum_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `tblbanka`
--
ALTER TABLE `tblbanka`
  MODIFY `banka_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Tablo için AUTO_INCREMENT değeri `tblkategori`
--
ALTER TABLE `tblkategori`
  MODIFY `kategori_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- Tablo için AUTO_INCREMENT değeri `tblmarkalar`
--
ALTER TABLE `tblmarkalar`
  MODIFY `MarkaId` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `tblmenu`
--
ALTER TABLE `tblmenu`
  MODIFY `menu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `tblresim`
--
ALTER TABLE `tblresim`
  MODIFY `resim_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `tblsepet`
--
ALTER TABLE `tblsepet`
  MODIFY `sepet_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=133;

--
-- Tablo için AUTO_INCREMENT değeri `tblsiparis`
--
ALTER TABLE `tblsiparis`
  MODIFY `siparis_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tablo için AUTO_INCREMENT değeri `tblsiparis_detay`
--
ALTER TABLE `tblsiparis_detay`
  MODIFY `siparisdetay_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;

--
-- Tablo için AUTO_INCREMENT değeri `tblslider`
--
ALTER TABLE `tblslider`
  MODIFY `slider_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- Tablo için AUTO_INCREMENT değeri `tblurunler`
--
ALTER TABLE `tblurunler`
  MODIFY `urun_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Tablo için AUTO_INCREMENT değeri `tblurun_resim`
--
ALTER TABLE `tblurun_resim`
  MODIFY `urunfoto_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- Tablo için AUTO_INCREMENT değeri `tbluyeler`
--
ALTER TABLE `tbluyeler`
  MODIFY `kullanici_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- Tablo için AUTO_INCREMENT değeri `tblyorum`
--
ALTER TABLE `tblyorum`
  MODIFY `yorum_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

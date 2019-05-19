-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2019 at 04:16 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 19 May 2019, 17:15:36
-- Sunucu sürümü: 10.1.38-MariaDB
-- PHP Sürümü: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `faculty_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_db`
--

CREATE TABLE `about_db` (
  `about_id` int(11) NOT NULL,
  `faculty_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `about_text_az` text COLLATE utf8_unicode_ci NOT NULL,
  `about_text_en` text COLLATE utf8_unicode_ci NOT NULL,
  `about_text_ru` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `about_db`
--

INSERT INTO `about_db` (`about_id`, `faculty_name`, `about_text_az`, `about_text_en`, `about_text_ru`) VALUES
(1, 'kimya', '<p style=\"text-align:center\">&nbsp;</p>\r\n\r\n<p style=\"text-align:center\">Fak&uuml;ltədə 1 akademik, 20 professor, 69 dosent, 18 baş m&uuml;əllim və assistent &ccedil;alışır. Hazırda Kimya texnologiya fak&uuml;ltəsinin g&uuml;nd&uuml;z ş&ouml;bəsində 831 nəfər əyani, 64 nəfər isə qiyabi ş&ouml;bədə təhsil alır.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>2016-cı ildən ADNSU rektorunun əmri ilə fak&uuml;ltənin nəzdində &laquo;Yeni kimyəvi materiallar və texnologiyalar&raquo; adlı elmi-tədqiqat laboratoriyası yaradılıb. Laboratoriyaya k.e.d, professor Bağıyev Vaqif La&ccedil;ın oğlu rəhbərlik edir.</p>\r\n\r\n<p>&Uuml;mumilikdə fak&uuml;ltədə 13 professor, 4 elmlər doktoru, 68 dosent, 2 assistent və 29 laborant &ccedil;alışır.</p>\r\n\r\n<p style=\"text-align:center\">&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>ADNSU-da kimya&ccedil;ı m&uuml;həndislərin hazırlığı 1921-ci ildən kimya ş&ouml;bəsi kimi &laquo;Neft sənayesi&raquo; fak&uuml;ltəsində, 1934-ci ildən &laquo;Neft texnologiyası&raquo;, 1940-cı ildən isə &laquo;Kimya texnologiyası&raquo; fak&uuml;ltəsində həyata ke&ccedil;irilir.Fak&uuml;ltədə yarandığı g&uuml;ndən indiyədək neft emalı və neft-kimya sənayesi &uuml;&ccedil;&uuml;n 18000-ə yaxın kimya&ccedil;ı-m&uuml;həndis texnoloq hazırlanıb. 1981-ci ildən fak&uuml;ltədə xarici &ouml;lkə vətəndaşlarının hazırlığı həyata ke&ccedil;irilir. &Ouml;tən illər ərzində d&uuml;nyanın 54 &ouml;lkəsi &uuml;&ccedil;&uuml;n 332 bakalavr, 326 magistr və 33 elmlər namizədi hazırlanıb.</p>\r\n\r\n<p>2009/2010-cu tədris ilinədək fak&uuml;ltədə: 1. &laquo;Kimya-texnologiyası&raquo;, 2. &laquo;Ekologiya və təbiətdən istifadə&raquo; və 3. &laquo;Həyat fəaliyyətinin təhl&uuml;kəsizliyi&raquo; istiqamətləri, 2009/2010-cu tədris ilindən isə 1.&raquo;Kimya m&uuml;həndisliyi&raquo;, 2. &laquo;Ekologiya m&uuml;həndisliyi&raquo; və 3. &laquo; F&ouml;vqəladə hallar və həyat fəaliyyətinin təhl&uuml;kəsizliyi&raquo; ixtisasları və 11 ixtisaslaşma &uuml;zrə kredit sistemi ilə bakalavr hazırlığı &nbsp;həyata ke&ccedil;irilir.Fak&uuml;ltədə 3 istiqamət: 1. &laquo;Kimya texnologiyası&raquo; 2. &laquo;Ekologiya və təbiətdən istifadə&raquo; və 3. &laquo;Həyat fəaliyyətinin təhl&uuml;kəsizliyi&raquo; istiqamətləri və 3 ixtisas &uuml;zrə magistr hazırlığı həyata ke&ccedil;irilir.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Fak&uuml;ltənin nəzdində 4 &uuml;mumi və 4 ixtisas kafedrası, 7 tədris, 6 problem və Rusiyanın &laquo;Lukoyl&raquo; firmasının təsis&ccedil;iliyi ilə &laquo;Fizika-kimyəvi &nbsp;analiz metodları&raquo; mərkəzləşdirilmiş laboratoriya fəaliyyət g&ouml;stərir.</p>\r\n\r\n<p>2016-cı ildən fak&uuml;ltədə 2 istiqamət; &laquo;Kimya m&uuml;həndisliyi&raquo; və &laquo;Ekologiya m&uuml;həndisliyi&raquo; ixtisasları &uuml;zrə y&uuml;ksək ixtisaslı m&uuml;həndis hazırlanır.</p>\r\n\r\n<p>Kafedralar: M&ouml;vcud olan 7 kafedra 2016-cı ilin fevral ayından birləşdirilərək:</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li><strong>&laquo;Kimya və qeyri-&uuml;zvi maddələrin texnologiyası&raquo;</strong></li>\r\n	<li><strong>&laquo;&Uuml;zvi maddələr və y&uuml;ksək molekullu birləşmələrin texnologiyası&raquo;</strong></li>\r\n	<li><strong>&laquo;Neft-kimya texnologiyası və sənaye ekologiyası&raquo; kafedraları yaradılıb.</strong></li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Fak&uuml;ltənin nəzdində həm&ccedil;inin &ldquo;İctimai elmlər&raquo; kafedrası da fəaliyyət g&ouml;stərir.</p>\r\n\r\n<p>Kimya texnologiya fak&uuml;ltəsində&nbsp;<strong><em>4 tyutor</em></strong>&nbsp;fəaliyyət g&ouml;stərir.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ol>\r\n	<li><strong>&nbsp;Qədimov İlqar Kamil oğlu</strong></li>\r\n	<li><strong>&nbsp;Ağayev Famil Bayram oğlu</strong></li>\r\n	<li><strong>&nbsp;Əhmədova Dinarə Vəlyəddin qızı</strong></li>\r\n	<li><strong>&nbsp;Həsənova Fərqanə &Ccedil;ingiz qızı&nbsp;</strong></li>\r\n</ol>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&laquo;Kimya və qeyri-&uuml;zvi maddələrin texnologiyası&raquo; kafedrasında 43 əməkdaş, o c&uuml;mlədən 2 professor, 2 elmlər doktoru və 25 dosent, 1 assistent və 13 laborant fəaliyyət g&ouml;stərir.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&laquo;&Uuml;zvi maddələr və y&uuml;ksək molekullu birləşmələrin texnologiyası&raquo; kafedrasında 21 əməkdaş, o c&uuml;mlədən 2 professor və 10 dosent, 1 assistent, 1 baş m&uuml;əllim və 9 laborant fəaliyyət g&ouml;stərir.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&laquo;Neft-kimya texnolgoiyası və sənaye ekologiyasi&raquo; kafedrasında 48 əməkdaş, o c&uuml;mlədən 8 professor, 21 dosent &ccedil;alışır.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&laquo;İctimai elmlər&raquo; kafedrasında 18 əməkdaş, o c&uuml;mlədən 1 professor və 2 nəfəri elmlər doktoru olmaqla 11 dosent, 3 baş m&uuml;əllim və 3 m&uuml;əllimdən ibarətdir. Kafedrada həm&ccedil;inin 4 əvəz&ccedil;i m&uuml;əllim &ccedil;alışır. Tədris k&ouml;mək&ccedil;i heyəti isə 2 nəfərdən ibarətdir.</p>\r\n\r\n<p style=\"text-align:center\">&nbsp;<img alt=\"\" src=\"http://ktf.asoiu.edu.az/public/images/faculty_logo/kimya.png\" style=\"height:250px; width:250px\" /></p>\r\n\r\n<p style=\"text-align:center\">&nbsp;</p>\r\n\r\n<p style=\"text-align:center\">&nbsp;</p>\r\n\r\n<p style=\"text-align:center\">&nbsp;</p>\r\n\r\n<p style=\"text-align:center\">&nbsp;</p>\r\n\r\n<p style=\"text-align:center\">&nbsp;</p>\r\n\r\n<p style=\"text-align:center\">&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n', '<p>En</p>\r\n', '<p>Ru</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `bachelor_about_text`
--

CREATE TABLE `bachelor_about_text` (
  `id` int(11) NOT NULL,
  `bachelor_about_text_az` text COLLATE utf8_unicode_ci NOT NULL,
  `bachelor_about_text_en` text COLLATE utf8_unicode_ci NOT NULL,
  `bachelor_about_text_ru` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `bachelor_about_text`
--

INSERT INTO `bachelor_about_text` (`id`, `bachelor_about_text_az`, `bachelor_about_text_en`, `bachelor_about_text_ru`) VALUES
(1, '<p>bakalavr az2</p>\r\n', '<p>bakalavr&nbsp;en2</p>\r\n', '<p>bakalavr ru2</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `bachelor_speciality_db`
--

CREATE TABLE `bachelor_speciality_db` (
  `bachelor_id` int(11) NOT NULL,
  `bachelor_text` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `bachelor_text_about_az` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `bachelor_text_text_az` text COLLATE utf8_unicode_ci NOT NULL,
  `bachelor_text_about_en` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `bachelor_text_text_en` text COLLATE utf8_unicode_ci NOT NULL,
  `bachelor_text_about_ru` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `bachelor_text_text_ru` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `bachelor_speciality_db`
--

INSERT INTO `bachelor_speciality_db` (`bachelor_id`, `bachelor_text`, `bachelor_text_about_az`, `bachelor_text_text_az`, `bachelor_text_about_en`, `bachelor_text_text_en`, `bachelor_text_about_ru`, `bachelor_text_text_ru`) VALUES
(12, '050628', 'az name', '<h2 style=\"font-style:italic\">az about</h2>\r\n', 'en name', '<p>en about</p>\r\n', 'ru name', '<p>ru about</p>\r\n'),
(13, '050628', 'Prosesleriadasdsaddad', '<p>aboutasdasdasdasdad</p>\r\n', 'en name', '<p>en</p>\r\n', 'ry name', '<p>ru</p>\r\n'),
(14, 'asdsa', 'sadasd', '<p>asdasd</p>\r\n', 'asdsad', '<p>asdasd</p>\r\n', 'asdas', '<p>asdsad</p>\r\n');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `department_about_text`
-- Table structure for table `contact_db`
--

CREATE TABLE `department_about_text` (
  `id` int(11) NOT NULL,
  `department_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `department_about_text`
-- Dumping data for table `contact_db`
--

INSERT INTO `contact_db` (`id`, `contact_text_az`, `contact_text_en`, `contact_text_ru`) VALUES
(1, '<p>Fak&uuml;ltədə 1 akademik, 20 professor, 69 dosent, 18 baş m&uuml;əllim və assistent &ccedil;alışır. Hazırda Kimya texnologiya fak&uuml;ltəsinin g&uuml;nd&uuml;z ş&ouml;bəsində 831 nəfər əyani, 64 nəfər isə qiyabi ş&ouml;bədə təhsil alır.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>2016-cı ildən ADNSU rektorunun əmri ilə fak&uuml;ltənin nəzdində &laquo;Yeni kimyəvi materiallar və texnologiyalar&raquo; adlı elmi-tədqiqat laboratoriyası yaradılıb. Laboratoriyaya k.e.d, professor Bağıyev Vaqif La&ccedil;ın oğlu rəhbərlik edir.</p>\r\n\r\n<p>&Uuml;mumilikdə fak&uuml;ltədə 13 professor, 4 elmlər doktoru, 68 dosent, 2 assistent və 29 laborant &ccedil;alışır.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>ADNSU-da kimya&ccedil;ı m&uuml;həndislərin hazırlığı 1921-ci ildən kimya ş&ouml;bəsi kimi &laquo;Neft sənayesi&raquo; fak&uuml;ltəsində, 1934-ci ildən &laquo;Neft texnologiyası&raquo;, 1940-cı ildən isə &laquo;Kimya texnologiyası&raquo; fak&uuml;ltəsində həyata ke&ccedil;irilir.Fak&uuml;ltədə yarandığı g&uuml;ndən indiyədək neft emalı və neft-kimya sənayesi &uuml;&ccedil;&uuml;n 18000-ə yaxın kimya&ccedil;ı-m&uuml;həndis texnoloq hazırlanıb. 1981-ci ildən fak&uuml;ltədə xarici &ouml;lkə vətəndaşlarının hazırlığı həyata ke&ccedil;irilir. &Ouml;tən illər ərzində d&uuml;nyanın 54 &ouml;lkəsi &uuml;&ccedil;&uuml;n 332 bakalavr, 326 magistr və 33 elmlər namizədi hazırlanıb.</p>\r\n\r\n<p>2009/2010-cu tədris ilinədək fak&uuml;ltədə: 1. &laquo;Kimya-texnologiyası&raquo;, 2. &laquo;Ekologiya və təbiətdən istifadə&raquo; və 3. &laquo;Həyat fəaliyyətinin təhl&uuml;kəsizliyi&raquo; istiqamətləri, 2009/2010-cu tədris ilindən isə 1.&raquo;Kimya m&uuml;həndisliyi&raquo;, 2. &laquo;Ekologiya m&uuml;həndisliyi&raquo; və 3. &laquo; F&ouml;vqəladə hallar və həyat fəaliyyətinin təhl&uuml;kəsizliyi&raquo; ixtisasları və 11 ixtisaslaşma &uuml;zrə kredit sistemi ilə bakalavr hazırlığı &nbsp;həyata ke&ccedil;irilir.Fak&uuml;ltədə 3 istiqamət: 1. &laquo;Kimya texnologiyası&raquo; 2. &laquo;Ekologiya və təbiətdən istifadə&raquo; və 3. &laquo;Həyat fəaliyyətinin təhl&uuml;kəsizliyi&raquo; istiqamətləri və 3 ixtisas &uuml;zrə magistr hazırlığı həyata ke&ccedil;irilir.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Fak&uuml;ltənin nəzdində 4 &uuml;mumi və 4 ixtisas kafedrası, 7 tədris, 6 problem və Rusiyanın &laquo;Lukoyl&raquo; firmasının təsis&ccedil;iliyi ilə &laquo;Fizika-kimyəvi &nbsp;analiz metodları&raquo; mərkəzləşdirilmiş laboratoriya fəaliyyət g&ouml;stərir.</p>\r\n\r\n<p>2016-cı ildən fak&uuml;ltədə 2 istiqamət; &laquo;Kimya m&uuml;həndisliyi&raquo; və &laquo;Ekologiya m&uuml;həndisliyi&raquo; ixtisasları &uuml;zrə y&uuml;ksək ixtisaslı m&uuml;həndis hazırlanır.</p>\r\n\r\n<p>Kafedralar: M&ouml;vcud olan 7 kafedra 2016-cı ilin fevral ayından birləşdirilərək:</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li><strong>&laquo;Kimya və qeyri-&uuml;zvi maddələrin texnologiyası&raquo;</strong></li>\r\n	<li><strong>&laquo;&Uuml;zvi maddələr və y&uuml;ksək molekullu birləşmələrin texnologiyası&raquo;</strong></li>\r\n	<li><strong>&laquo;Neft-kimya texnologiyası və sənaye ekologiyası&raquo; kafedraları yaradılıb.</strong></li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Fak&uuml;ltənin nəzdində həm&ccedil;inin &ldquo;İctimai elmlər&raquo; kafedrası da fəaliyyət g&ouml;stərir.</p>\r\n\r\n<p>Kimya texnologiya fak&uuml;ltəsində&nbsp;<strong><em>4 tyutor</em></strong>&nbsp;fəaliyyət g&ouml;stərir.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ol>\r\n	<li><strong>&nbsp;Qədimov İlqar Kamil oğlu</strong></li>\r\n	<li><strong>&nbsp;Ağayev Famil Bayram oğlu</strong></li>\r\n	<li><strong>&nbsp;Əhmədova Dinarə Vəlyəddin qızı</strong></li>\r\n	<li><strong>&nbsp;Həsənova Fərqanə &Ccedil;ingiz qızı&nbsp;</strong></li>\r\n</ol>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&laquo;Kimya və qeyri-&uuml;zvi maddələrin texnologiyası&raquo; kafedrasında 43 əməkdaş, o c&uuml;mlədən 2 professor, 2 elmlər doktoru və 25 dosent, 1 assistent və 13 laborant fəaliyyət g&ouml;stərir.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&laquo;&Uuml;zvi maddələr və y&uuml;ksək molekullu birləşmələrin texnologiyası&raquo; kafedrasında 21 əməkdaş, o c&uuml;mlədən 2 professor və 10 dosent, 1 assistent, 1 baş m&uuml;əllim və 9 laborant fəaliyyət g&ouml;stərir.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&laquo;Neft-kimya texnolgoiyası və sənaye ek</p>\r\n', '<p>elaqe en22</p>\r\n', '<p>elaqe ru2222222</p>\r\n');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `department_categories`
--

CREATE TABLE `department_categories` (
  `id` int(11) NOT NULL,
  `category_name_az` varchar(255) NOT NULL,
  `category_name_en` varchar(255) NOT NULL,
  `category_name_ru` varchar(255) NOT NULL,
  `category_about_text_az` text NOT NULL,
  `category_about_text_en` text NOT NULL,
  `category_about_text_ru` text NOT NULL,
  `category_contact_az` text NOT NULL,
  `category_contact_en` text NOT NULL,
  `category_contact_ru` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `department_categories`
--

INSERT INTO `department_categories` (`id`, `category_name_az`, `category_name_en`, `category_name_ru`) VALUES
(1, 'ekologiya kafedrasi', 'echology department', 'отдел экологии'),
(2, 'uzvi kimya kafedrasi', 'chemistry department', 'химический факультет');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `department_contact`
--

CREATE TABLE `department_contact` (
  `id` int(11) NOT NULL,
  `contact_email` varchar(100) NOT NULL,
  `contact_phone` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
INSERT INTO `department_categories` (`id`, `category_name_az`, `category_name_en`, `category_name_ru`, `category_about_text_az`, `category_about_text_en`, `category_about_text_ru`, `category_contact_az`, `category_contact_en`, `category_contact_ru`) VALUES
(1, 'ekologiya kafedrasi', 'echology department', 'отдел экологии', '<p><span style=\"font-size:20px\"><span style=\"background-color:#e74c3c\">haqqinda birinici kafedra</span></span></p>\r\n', '<p><span style=\"font-size:20px\"><span style=\"background-color:#e74c3c\">haqqinda birinici kafedra en</span></span></p>\r\n', '<p><span style=\"font-size:20px\"><span style=\"background-color:#e74c3c\">haqqinda birinici kafedra ru</span></span></p>\r\n', '<p>ealqe az3</p>\r\n', '<p>ealqe en3</p>\r\n', '<p>ealqe ru3</p>\r\n'),
(2, 'uzvi kimya kafedrasi', 'chemistry department', 'химический факультет', '<p><span style=\"color:#000000\"><span style=\"font-size:20px\"><span style=\"background-color:#d35400\">haqqinda</span></span></span></p>\r\n', '<p><span style=\"color:#2980b9\"><span style=\"font-size:16px\">haqqinda en2</span></span></p>\r\n', '<p><span style=\"font-size:20px\"><span style=\"color:#f1c40f\">haqqinda ru2</span></span></p>\r\n', '<p>elaqe az 2</p>\r\n', '<p>elaqe en 2</p>\r\n', '<p>elaqe ru 2</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `department_labaratory`
--

CREATE TABLE `department_labaratory` (
  `id` int(11) NOT NULL,
  `laboratory_name_az` varchar(100) NOT NULL,
  `laboratory_name_ru` varchar(255) NOT NULL,
  `laboratory_name_en` varchar(255) NOT NULL,
  `laboratory_desc_az` text NOT NULL,
  `laboratory_desc_ru` text NOT NULL,
  `laboratory_desc_en` text NOT NULL,
  `laboratory_img` varchar(255) NOT NULL,
  `laboratory_catg_az` varchar(255) NOT NULL,
  `laboratory_catg_ru` varchar(255) NOT NULL,
  `laboratory_catg_en` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `department_labaratory`
--

INSERT INTO `department_labaratory` (`id`, `laboratory_name_az`, `laboratory_name_ru`, `laboratory_name_en`, `laboratory_desc_az`, `laboratory_desc_ru`, `laboratory_desc_en`, `laboratory_img`, `laboratory_catg_az`, `laboratory_catg_ru`, `laboratory_catg_en`) VALUES
(2, 'asdasd', 'dasdasda', 'dasdasdas', '<p>asdasdasda<span style=\"background-color:#000000\">asdas</span></p>\r\n', '<p>dasdsa<span style=\"background-color:#000000\">asdadsadas</span></p>\r\n', '<p>dsadasda<span style=\"background-color:#000000\">dsadasdasdsa</span></p>\r\n', 'dani-diamond-posing-how-to-model-photogaphy-best-top-fstoppersb2.jpg', 'ekologiya kafedrasi', 'ekologiya kafedrasi rusca', 'ekologiya kafedrasi ingilisce'),
(3, 'asdasd', 'dasdasda', 'dasdasdas', '<p>asdasdasda<span style=\"background-color:#000000\">asdas</span></p>\r\n', '<p>dasdsa<span style=\"background-color:#000000\">asdadsadas</span></p>\r\n', '<p>dsadasda<span style=\"background-color:#000000\">dsadasdasdsa</span></p>\r\n', 'dani-diamond-posing-how-to-model-photogaphy-best-top-fstoppersb3.jpg', 'ekologiya kafedrasi', 'ekologiya kafedrasi rusca', 'ekologiya kafedrasi ingilisce'),
(4, 'asdasd', 'dasdasda', 'dasdasdas', '<p>asdasdasda<span style=\"background-color:#000000\">asdas</span></p>\r\n', '<p>dasdsa<span style=\"background-color:#000000\">asdadsadas</span></p>\r\n', '<p>dsadasda<span style=\"background-color:#000000\">dsadasdasdsa</span></p>\r\n', 'dani-diamond-posing-how-to-model-photogaphy-best-top-fstoppersb4.jpg', 'ekologiya kafedrasi', 'ekologiya kafedrasi rusca', 'ekologiya kafedrasi ingilisce'),
(6, 'asdasd', 'dasdasda', 'dasdasdas', '<p>asdasdasda<span style=\"background-color:#000000\">asdas</span></p>\r\n', '<p>dasdsa<span style=\"background-color:#000000\">asdadsadas</span></p>\r\n', '<p>dsadasda<span style=\"background-color:#000000\">dsadasdasdsa</span></p>\r\n', 'dani-diamond-posing-how-to-model-photogaphy-best-top-fstoppersb6.jpg', 'ekologiya kafedrasi', 'ekologiya kafedrasi rusca', 'ekologiya kafedrasi ingilisce');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `department_speciality`
--

CREATE TABLE `department_speciality` (
  `id` int(11) NOT NULL,
  `speciality_code` varchar(50) NOT NULL,
  `speciality_name_az` varchar(255) NOT NULL,
  `speciality_name_en` varchar(100) NOT NULL,
  `speciality_name_ru` varchar(100) NOT NULL,
  `speciality_desc_az` text NOT NULL,
  `speciality_desc_en` text NOT NULL,
  `speciality_desc_ru` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `department_speciality`
--

INSERT INTO `department_speciality` (`id`, `speciality_code`, `speciality_name_az`, `speciality_name_en`, `speciality_name_ru`, `speciality_desc_az`, `speciality_desc_en`, `speciality_desc_ru`) VALUES
(6, '224542', 'ds', 'sds', 'dssd', '<p>sds</p>\r\n', '<p>dsd</p>\r\n', '<p>sd</p>\r\n'),
(7, 'asdas', 'dasd', 'a', 'sdas', '<p>sadas</p>\r\n', '<p>dasd</p>\r\n', '<p>dasd</p>\r\n');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `department_teacher`
--

CREATE TABLE `department_teacher` (
  `id` int(11) NOT NULL,
  `teacher_name` varchar(100) NOT NULL,
  `teacher_surname` varchar(100) NOT NULL,
  `teacher_img` varchar(255) NOT NULL,
  `teacher_about` text NOT NULL,
  `teacher_speciality` varchar(100) NOT NULL,
  `teacher_phone` varchar(15) NOT NULL,
  `teacher_lesson` varchar(100) NOT NULL,
  `teacher_email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `doctorate_about_text`
--

CREATE TABLE `doctorate_about_text` (
  `id` int(11) NOT NULL,
  `doctorate_about_text_az` text COLLATE utf8_unicode_ci NOT NULL,
  `doctorate_about_text_en` text COLLATE utf8_unicode_ci NOT NULL,
  `doctorate_about_text_ru` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `doctorate_about_text`
--

INSERT INTO `doctorate_about_text` (`id`, `doctorate_about_text_az`, `doctorate_about_text_en`, `doctorate_about_text_ru`) VALUES
(1, '<p><span style=\"font-size:20px\"><span style=\"color:#000000\">doktorantura az</span></span></p>\r\n', '<p><span style=\"color:#000000\"><span style=\"font-size:28px\">doktorantura &nbsp;en</span></span></p>\r\n', '<p><span style=\"font-size:36px\"><span style=\"color:#000000\">doktorantura ru</span></span></p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `doctorate_speciality_db`
--

CREATE TABLE `doctorate_speciality_db` (
  `doctorate_id` int(11) NOT NULL,
  `doctorate_text` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `doctorate_text_about_az` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `doctorate_text_text_az` text COLLATE utf8_unicode_ci NOT NULL,
  `doctorate_text_about_en` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `doctorate_text_text_en` text COLLATE utf8_unicode_ci NOT NULL,
  `doctorate_text_about_ru` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `doctorate_text_text_ru` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `doctorate_speciality_db`
--

INSERT INTO `doctorate_speciality_db` (`doctorate_id`, `doctorate_text`, `doctorate_text_about_az`, `doctorate_text_text_az`, `doctorate_text_about_en`, `doctorate_text_text_en`, `doctorate_text_about_ru`, `doctorate_text_text_ru`) VALUES
(12, '050628', 'az name doktorantura', '<h2 style=\"font-style:italic\">az doktorantura about</h2>\r\n', 'en name', '<p>en about</p>\r\n', 'ru name', '<p>ru about</p>\r\n'),
(13, '050628', 'Prosesleriadasdsaddad', '<p>aboutasdasdasdasdad</p>\r\n', 'en name', '<p>en</p>\r\n', 'ry name', '<p>ru</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `events_db`
--

CREATE TABLE `events_db` (
  `event_id` int(11) NOT NULL,
  `event_img` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `event_time` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `event_title_az` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `event_title_en` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `event_title_ru` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `event_desc_az` text COLLATE utf8_unicode_ci NOT NULL,
  `event_desc_en` text COLLATE utf8_unicode_ci NOT NULL,
  `event_desc_ru` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `events_db`
--

INSERT INTO `events_db` (`event_id`, `event_img`, `event_time`, `event_title_az`, `event_title_en`, `event_title_ru`, `event_desc_az`, `event_desc_en`, `event_desc_ru`) VALUES
(17, 'IMG_0095.JPG', '2017-12-15', 'Dekabrın 12-də Azərbaycan Dövlət Neft və Sənaye Universitetində (ADNSU) ABŞ Hərbi Qüvvələrinin 1-ci dərəcəli kapitanı, ast', 'Dekabrın 12-də Azərbaycan Dövlət Neft və Sənaye Universitetində (ADNSU) ABŞ Hərbi Qüvvələrinin 1-ci dərəcəli kapitanı, ast', 'Dekabrın 12-də Azərbaycan Dövlət Neft və Sənaye Universitetində (ADNSU) ABŞ Hərbi Qüvvələrinin 1-ci dərəcəli kapitanı, ast', '<p>Dekabrın 12-də Azərbaycan D&ouml;vlət Neft və Sənaye Universitetində (ADNSU) ABŞ Hərbi Q&uuml;vvələrinin 1-ci dərəcəli kapitanı, ast</p>\r\n', '<p>Dekabrın 12-də Azərbaycan D&ouml;vlət Neft və Sənaye Universitetində (ADNSU) ABŞ Hərbi Q&uuml;vvələrinin 1-ci dərəcəli kapitanı, ast</p>\r\n', '<p>Dekabrın 12-də Azərbaycan D&ouml;vlət Neft və Sənaye Universitetində (ADNSU) ABŞ Hərbi Q&uuml;vvələrinin 1-ci dərəcəli kapitanı, ast</p>\r\n'),
(20, 'motorcycle_motorcyclist_cross_130826_3840x2160.jpg', '2019-05-18', 'dssd', 's', 's', '<p>s</p>\r\n', '', ''),
(22, '52967e9aee1c617cb0668d3ef1704eba.jpg', '2019-05-15', 'az', 'en', 'ru', '<p>asdasd</p>\r\n', '<p>asdasdasd</p>\r\n', '<p>asdasdasd</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `laboratory_db`
--

CREATE TABLE `laboratory_db` (
  `id` int(11) NOT NULL,
  `lab_text` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `laboratory_db`
--

INSERT INTO `laboratory_db` (`id`, `lab_text`) VALUES
(1, '<p>2009/2010-cu tədris ilinədək fak&uuml;ltədə: 1. &laquo;Kimya-texnologiyası&raquo;, 2. &laquo;Ekologiya və təbiətdən istifadə&raquo; və 3. &laquo;Həyat fəaliyyətinin təhl&uuml;kəsizliyi&raquo; istiqamətləri, 2009/2010-cu tədris ilindən isə 1.&raquo;Kimya m&uuml;həndisliyi&raquo;, 2. &laquo;Ekologiya m&uuml;həndisliyi&raquo; və 3. &laquo; F&ouml;vqəladə hallar və həyat fəaliyyətinin təhl&uuml;kəsizliyi&raquo; ixtisasları və 11 ixtisaslaşma &uuml;zrə kredit sistemi ilə bakalavr hazırlığı &nbsp;həyata ke&ccedil;irilir.Fak&uuml;ltədə 3 istiqamət: 1. &laquo;Kimya texnologiyası&raquo; 2. &laquo;Ekologiya və təbiətdən istifadə&raquo; və 3. &laquo;Həyat fəaliyyətinin təhl&uuml;kəsizliyi&raquo; istiqamətləri və 3 ixtisas &uuml;zrə magistr hazırlığı həyata ke&ccedil;irilir.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Fak&uuml;ltənin nəzdində 4 &uuml;mumi və 4 ixtisas kafedrası, 7 tədris, 6 problem və Rusiyanın &laquo;Lukoyl&raquo; firmasının təsis&ccedil;iliyi ilə &laquo;Fizika-kimyəvi &nbsp;analiz metodları&raquo; mərkəzləşdirilmiş laboratoriya fəaliyyət g&ouml;stərir.</p>\r\n\r\n<p>2016-cı ildən fak&uuml;ltədə 2 istiqamət; &laquo;Kimya m&uuml;həndisliyi&raquo; və &laquo;Ekologiya m&uuml;həndisliyi&raquo; ixtisasları &uuml;zrə y&uuml;ksək ixtisaslı m&uuml;həndis hazırlanır.</p>\r\n\r\n<p>Kafedralar: M&ouml;vcud olan 7 kafedra 2016-cı ilin fevral ayından birləşdirilərək:</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li><strong>&laquo;Kimya və qeyri-&uuml;zvi maddələrin texnologiyası&raquo;</strong></li>\r\n	<li><strong>&laquo;&Uuml;zvi maddələr və y&uuml;ksək molekullu birləşmələrin texnologiyası&raquo;</strong></li>\r\n	<li><strong>&laquo;Neft-kimya texnologiyası və sənaye ekologiyası&raquo; kafedraları yaradılıb.</strong></li>\r\n</ul>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `logo_and_title`
--

CREATE TABLE `logo_and_title` (
  `id` int(11) NOT NULL,
  `logo_img` varchar(255) NOT NULL,
  `site_title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `logo_and_title`
--

INSERT INTO `logo_and_title` (`id`, `logo_img`, `site_title`) VALUES
(1, 'kimya.png', 'Kimya Fakültəsi');

-- --------------------------------------------------------

--
-- Table structure for table `master_about_text`
--

CREATE TABLE `master_about_text` (
  `id` int(11) NOT NULL,
  `master_about_text_az` text COLLATE utf8_unicode_ci NOT NULL,
  `master_about_text_en` text COLLATE utf8_unicode_ci NOT NULL,
  `master_about_text_ru` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `master_about_text`
--

INSERT INTO `master_about_text` (`id`, `master_about_text_az`, `master_about_text_en`, `master_about_text_ru`) VALUES
(1, '<p style=\"text-align:center\"><span style=\"color:#e74c3c\"><span style=\"font-size:18px\">master az2</span></span></p>\r\n', '<p>master en2</p>\r\n', '<p>master ru2</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `master_speciality_db`
--

CREATE TABLE `master_speciality_db` (
  `master_id` int(11) NOT NULL,
  `master_text` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `master_text_about_az` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `master_text_text_az` text COLLATE utf8_unicode_ci NOT NULL,
  `master_text_about_en` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `master_text_text_en` text COLLATE utf8_unicode_ci NOT NULL,
  `master_text_about_ru` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `master_text_text_ru` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `master_speciality_db`
--

INSERT INTO `master_speciality_db` (`master_id`, `master_text`, `master_text_about_az`, `master_text_text_az`, `master_text_about_en`, `master_text_text_en`, `master_text_about_ru`, `master_text_text_ru`) VALUES
(12, '050628 master2', 'az name master2', '<h2 style=\"font-style:italic\">az about</h2>\r\n', 'en name', '<p>en about</p>\r\n', 'ru name', '<p>ru about</p>\r\n'),
(15, 'f', 'ff', '<p>asdasdsad</p>\r\n', 'asdasd', '<p>asdasdasd</p>\r\n', 'asdsad', '<p>asdsadasd</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `news_db`
--

CREATE TABLE `news_db` (
  `news_id` int(11) NOT NULL,
  `news_title_az` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `news_title_en` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `news_title_ru` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `news_description_az` text COLLATE utf8_unicode_ci NOT NULL,
  `news_description_en` text COLLATE utf8_unicode_ci NOT NULL,
  `news_description_ru` text COLLATE utf8_unicode_ci NOT NULL,
  `news_time` date NOT NULL,
  `news_img` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `news_db`
--

INSERT INTO `news_db` (`news_id`, `news_title_az`, `news_title_en`, `news_title_ru`, `news_description_az`, `news_description_en`, `news_description_ru`, `news_time`, `news_img`) VALUES
(10, 'asd', 'asd', 'asd', '<p>asd</p>\r\n', '<p>asd</p>\r\n', '<p>asd</p>\r\n', '2017-11-30', 'IMG_0045.JPG'),
(11, 'IV Bakı Beynəlxalq Turizm Filmləri Festivalının bağlanış mərasimi keçirilib        ', ' IV Bakı Beynəlxalq Turizm Filmləri Festivalının bağlanış mərasimi keçirilib        ', 'IV Bakı Beynəlxalq Turizm Filmləri Festivalının bağlanış mərasimi keçirilib        ', '<p>Tədbirdə bildirilib ki, festivalın məqsədi turizmin m&uuml;xtəlif sahələrinə həsr olunan, daxili və beynəlxalq turizmin inkişafına təkan verə biləcək filmləri təbliğ etmək, ən yaxşı filmlərin m&uuml;əlliflərini həvəsləndirməkdir. Festival eyni zamanda<', '<p>Tədbirdə bildirilib ki, festivalın məqsədi turizmin m&uuml;xtəlif sahələrinə həsr olunan, daxili və beynəlxalq turizmin inkişafına təkan verə biləcək filmləri təbliğ etmək, ən yaxşı filmlərin m&uuml;əlliflərini həvəsləndirməkdir. Festival eyni zamanda<', '<p>Tədbirdə bildirilib ki, festivalın məqsədi turizmin m&uuml;xtəlif sahələrinə həsr olunan, daxili və beynəlxalq turizmin inkişafına təkan verə biləcək filmləri təbliğ etmək, ən yaxşı filmlərin m&uuml;əlliflərini həvəsləndirməkdir. Festival eyni zamanda<', '2017-11-30', 'default_noimage3.png'),
(18, 'asdasd', 'asdasd', 'asdasd', '<p>asdasd</p>\r\n', '<p>asdasd</p>\r\n', '<p>asdasd</p>\r\n', '2017-12-16', 'IMG_0015.JPG'),
(19, 'ADNSU-da “CanSat” Azərbaycan 2018 model peyk müsabiqəsi haqqında tədbir keçirilib', 'ADNSU-da “CanSat” Azərbaycan 2018 model peyk müsabiqəsi haqqında tədbir keçirilib', 'ADNSU-da “CanSat” Azərbaycan 2018 model peyk müsabiqəsi haqqında tədbir keçirilib', '<p>Dekarbrın 21-də Azərbaycan D&ouml;vlət Neft və Sənaye Universitetində (ADNSU) &ldquo;Azərkosmos&rdquo; ASC və Təhsil Nazirliyinin təşkilat&ccedil;ılığı ilə baş tutacaq &ldquo;CanSat&rdquo; Azərbaycan 2018 model peyk m&uuml;sabiqəsinə dair tədbir ke&ccedil;irilib.</p>\r\n\r\n<p>&ldquo;Azərkosmos&rdquo;-un əməkdaşları &ldquo;CanSat&rdquo;ın yaradılması, m&uuml;sabiqə şərtləri, ke&ccedil;irilmə qaydaları haqqında tələbələrə geniş məlumat veriblər.</p>\r\n\r\n<p>Bildirilib ki, m&uuml;sabiqənin ke&ccedil;irilməsində məqsəd tələbə peyki layihələrinə marağın daha da artırılması, tələbələr arasında k&uuml;tləviləşdirilməsi, Azərbaycanın beynəlxalq analoji m&uuml;sabiqələrdə daha &ccedil;ox və təcr&uuml;bəli komandalarla təmsil olunması, gələcəkdə nano və digər real peyklərin məhz yerli m&uuml;təxəssislər tərəfindən &ouml;lkəmizdə hazırlanması &uuml;&ccedil;&uuml;n təcr&uuml;bi bacarıq və vərdişlərin əldə edilməsidir.</p>\r\n\r\n<p>M&uuml;sabiqədə hər universitet komanda şəklində iştirak edə bilər. &ldquo;CanSat&rdquo; Azərbaycan 2018 model peyk m&uuml;sabiqəsində qalib gələn komanda Beynəlxalq &ldquo;CanSat&rdquo; m&uuml;sabiqəsində iştirak h&uuml;ququ qazanacaq.</p>\r\n\r\n<p>Qeyd edək ki, kosmik texnologiyalar sahəsində universitet tələbələrinin&nbsp; motivasiya və inkişafına y&ouml;nəlmiş Beynəlxalq &ldquo;CanSat&rdquo; m&uuml;sabiqəsi NASA, Amerika Astronomiya Cəmiyyəti (AAS),&nbsp; Amerika Aviasiya və Kosmik Elmlər İnstitutu, (AIAA) eləcə də kosmik sektorda aparıcı qurumların dəstəyilə 1998-ci ildən etibarən hər il ke&ccedil;irilir.</p>\r\n\r\n<p>M&uuml;sabiqə haqqında ətraflı məlumat &uuml;&ccedil;&uuml;n &ldquo;cansat.az&rdquo; saytından məlumat ala bilərsiniz.</p>\r\n', '<p>Dekarbrın 21-də Azərbaycan D&ouml;vlət Neft və Sənaye Universitetində (ADNSU) &ldquo;Azərkosmos&rdquo; ASC və Təhsil Nazirliyinin təşkilat&ccedil;ılığı ilə baş tutacaq &ldquo;CanSat&rdquo; Azərbaycan 2018 model peyk m&uuml;sabiqəsinə dair tədbir ke&ccedil;irilib.</p>\r\n\r\n<p>&ldquo;Azərkosmos&rdquo;-un əməkdaşları &ldquo;CanSat&rdquo;ın yaradılması, m&uuml;sabiqə şərtləri, ke&ccedil;irilmə qaydaları haqqında tələbələrə geniş məlumat veriblər.</p>\r\n\r\n<p>Bildirilib ki, m&uuml;sabiqənin ke&ccedil;irilməsində məqsəd tələbə peyki layihələrinə marağın daha da artırılması, tələbələr arasında k&uuml;tləviləşdirilməsi, Azərbaycanın beynəlxalq analoji m&uuml;sabiqələrdə daha &ccedil;ox və təcr&uuml;bəli komandalarla təmsil olunması, gələcəkdə nano və digər real peyklərin məhz yerli m&uuml;təxəssislər tərəfindən &ouml;lkəmizdə hazırlanması &uuml;&ccedil;&uuml;n təcr&uuml;bi bacarıq və vərdişlərin əldə edilməsidir.</p>\r\n\r\n<p>M&uuml;sabiqədə hər universitet komanda şəklində iştirak edə bilər. &ldquo;CanSat&rdquo; Azərbaycan 2018 model peyk m&uuml;sabiqəsində qalib gələn komanda Beynəlxalq &ldquo;CanSat&rdquo; m&uuml;sabiqəsində iştirak h&uuml;ququ qazanacaq.</p>\r\n\r\n<p>Qeyd edək ki, kosmik texnologiyalar sahəsində universitet tələbələrinin&nbsp; motivasiya və inkişafına y&ouml;nəlmiş Beynəlxalq &ldquo;CanSat&rdquo; m&uuml;sabiqəsi NASA, Amerika Astronomiya Cəmiyyəti (AAS),&nbsp; Amerika Aviasiya və Kosmik Elmlər İnstitutu, (AIAA) eləcə də kosmik sektorda aparıcı qurumların dəstəyilə 1998-ci ildən etibarən hər il ke&ccedil;irilir.</p>\r\n\r\n<p>M&uuml;sabiqə haqqında ətraflı məlumat &uuml;&ccedil;&uuml;n &ldquo;cansat.az&rdquo; saytından məlumat ala bilərsiniz.</p>\r\n', '<p>Dekarbrın 21-də Azərbaycan D&ouml;vlət Neft və Sənaye Universitetində (ADNSU) &ldquo;Azərkosmos&rdquo; ASC və Təhsil Nazirliyinin təşkilat&ccedil;ılığı ilə baş tutacaq &ldquo;CanSat&rdquo; Azərbaycan 2018 model peyk m&uuml;sabiqəsinə dair tədbir ke&ccedil;irilib.</p>\r\n\r\n<p>&ldquo;Azərkosmos&rdquo;-un əməkdaşları &ldquo;CanSat&rdquo;ın yaradılması, m&uuml;sabiqə şərtləri, ke&ccedil;irilmə qaydaları haqqında tələbələrə geniş məlumat veriblər.</p>\r\n\r\n<p>Bildirilib ki, m&uuml;sabiqənin ke&ccedil;irilməsində məqsəd tələbə peyki layihələrinə marağın daha da artırılması, tələbələr arasında k&uuml;tləviləşdirilməsi, Azərbaycanın beynəlxalq analoji m&uuml;sabiqələrdə daha &ccedil;ox və təcr&uuml;bəli komandalarla təmsil olunması, gələcəkdə nano və digər real peyklərin məhz yerli m&uuml;təxəssislər tərəfindən &ouml;lkəmizdə hazırlanması &uuml;&ccedil;&uuml;n təcr&uuml;bi bacarıq və vərdişlərin əldə edilməsidir.</p>\r\n\r\n<p>M&uuml;sabiqədə hər universitet komanda şəklində iştirak edə bilər. &ldquo;CanSat&rdquo; Azərbaycan 2018 model peyk m&uuml;sabiqəsində qalib gələn komanda Beynəlxalq &ldquo;CanSat&rdquo; m&uuml;sabiqəsində iştirak h&uuml;ququ qazanacaq.</p>\r\n\r\n<p>Qeyd edək ki, kosmik texnologiyalar sahəsində universitet tələbələrinin&nbsp; motivasiya və inkişafına y&ouml;nəlmiş Beynəlxalq &ldquo;CanSat&rdquo; m&uuml;sabiqəsi NASA, Amerika Astronomiya Cəmiyyəti (AAS),&nbsp; Amerika Aviasiya və Kosmik Elmlər İnstitutu, (AIAA) eləcə də kosmik sektorda aparıcı qurumların dəstəyilə 1998-ci ildən etibarən hər il ke&ccedil;irilir.</p>\r\n\r\n<p>M&uuml;sabiqə haqqında ətraflı məlumat &uuml;&ccedil;&uuml;n &ldquo;cansat.az&rdquo; saytından məlumat ala bilərsiniz.</p>\r\n', '2017-12-21', '5a3bb277b3eef.JPG'),
(20, 'Amerikalı alim UFAZ tələbələrinə uğurlu sahibkarlıq haqda mühazirə oxuyub', 'Amerikalı alim UFAZ tələbələrinə uğurlu sahibkarlıq haqda mühazirə oxuyub', 'Amerikalı alim UFAZ tələbələrinə uğurlu sahibkarlıq haqda mühazirə oxuyub', '<p>Dekabrın 20-də Azərbaycan D&ouml;vlət Neft və Sənaye Universitetinin (ADNSU) nəzdində fəaliyyət g&ouml;stərən Azərbaycan-Fransız Universitetində (UFAZ) ABŞ-ın Virciniya D&ouml;vlət Universitetinin ke&ccedil;miş rektoru və Pensilvaniya ştatının Lock Haven Universitetinin fəxri rektoru Keit T. Miller ilə g&ouml;r&uuml;ş ke&ccedil;irilib.</p>\r\n\r\n<p>Qonaq hər zaman aktual olan uğurlu sahibkarlığın və dəyişimin &ouml;nəmindən danışıb. Virciniya və Pensilvaniya ştatlarının ali məktəblərinə rəhbərlik etməklə yanaşı, Dr. Keit Miller həm də Amerika D&ouml;vlət Kollec və Universitetlər İttifaqı (AASCU) kimi təşkilatlarda işləyib. Hazırda o AASCU Peşəkar İnkişaf &uuml;zrə Penson Mərkəzində işləyir.</p>\r\n\r\n<p>&Ouml;z m&uuml;hazirəsində Miller əsasən həyat və işdə dəyişimin vacibliyindən danışıb. &ldquo;Siz tapşırıqları y&ouml;nəltməyi &ouml;yrənməlisiniz. İnsanlara stimul verməyi, iş&ccedil;ilərinizə doğru qərarlar qəbul etməyə imkan verməyi &ouml;yrənməlisiniz, x&uuml;susilə də əgər b&ouml;y&uuml;k şirkətdə işləyir və b&ouml;y&uuml;k komandaya rəhbərlik edirsinizsə. Dəyişim &ccedil;ox yaxşıdır. Dəyişim &ouml;nəmlidir. Lakin əgər şirkətləri idarə edirsinizsə siz &ouml;z komanda yoldaşlarınıza stimul verməlisiniz. Bu zəruridir. M&uuml;kafat zəruridir. Ağıllı insanların sizə işləməsi &uuml;&ccedil;&uuml;n onları d&uuml;zg&uuml;n m&uuml;kafatlandırmağı bacarmalısınız&rdquo; &ndash; deyə Miller qeyd edib.</p>\r\n', '<p>Dekabrın 20-də Azərbaycan D&ouml;vlət Neft və Sənaye Universitetinin (ADNSU) nəzdində fəaliyyət g&ouml;stərən Azərbaycan-Fransız Universitetində (UFAZ) ABŞ-ın Virciniya D&ouml;vlət Universitetinin ke&ccedil;miş rektoru və Pensilvaniya ştatının Lock Haven Universitetinin fəxri rektoru Keit T. Miller ilə g&ouml;r&uuml;ş ke&ccedil;irilib.</p>\r\n\r\n<p>Qonaq hər zaman aktual olan uğurlu sahibkarlığın və dəyişimin &ouml;nəmindən danışıb. Virciniya və Pensilvaniya ştatlarının ali məktəblərinə rəhbərlik etməklə yanaşı, Dr. Keit Miller həm də Amerika D&ouml;vlət Kollec və Universitetlər İttifaqı (AASCU) kimi təşkilatlarda işləyib. Hazırda o AASCU Peşəkar İnkişaf &uuml;zrə Penson Mərkəzində işləyir.</p>\r\n\r\n<p>&Ouml;z m&uuml;hazirəsində Miller əsasən həyat və işdə dəyişimin vacibliyindən danışıb. &ldquo;Siz tapşırıqları y&ouml;nəltməyi &ouml;yrənməlisiniz. İnsanlara stimul verməyi, iş&ccedil;ilərinizə doğru qərarlar qəbul etməyə imkan verməyi &ouml;yrənməlisiniz, x&uuml;susilə də əgər b&ouml;y&uuml;k şirkətdə işləyir və b&ouml;y&uuml;k komandaya rəhbərlik edirsinizsə. Dəyişim &ccedil;ox yaxşıdır. Dəyişim &ouml;nəmlidir. Lakin əgər şirkətləri idarə edirsinizsə siz &ouml;z komanda yoldaşlarınıza stimul verməlisiniz. Bu zəruridir. M&uuml;kafat zəruridir. Ağıllı insanların sizə işləməsi &uuml;&ccedil;&uuml;n onları d&uuml;zg&uuml;n m&uuml;kafatlandırmağı bacarmalısınız&rdquo; &ndash; deyə Miller qeyd edib.</p>\r\n', '<p>Dekabrın 20-də Azərbaycan D&ouml;vlət Neft və Sənaye Universitetinin (ADNSU) nəzdində fəaliyyət g&ouml;stərən Azərbaycan-Fransız Universitetində (UFAZ) ABŞ-ın Virciniya D&ouml;vlət Universitetinin ke&ccedil;miş rektoru və Pensilvaniya ştatının Lock Haven Universitetinin fəxri rektoru Keit T. Miller ilə g&ouml;r&uuml;ş ke&ccedil;irilib.</p>\r\n\r\n<p>Qonaq hər zaman aktual olan uğurlu sahibkarlığın və dəyişimin &ouml;nəmindən danışıb. Virciniya və Pensilvaniya ştatlarının ali məktəblərinə rəhbərlik etməklə yanaşı, Dr. Keit Miller həm də Amerika D&ouml;vlət Kollec və Universitetlər İttifaqı (AASCU) kimi təşkilatlarda işləyib. Hazırda o AASCU Peşəkar İnkişaf &uuml;zrə Penson Mərkəzində işləyir.</p>\r\n\r\n<p>&Ouml;z m&uuml;hazirəsində Miller əsasən həyat və işdə dəyişimin vacibliyindən danışıb. &ldquo;Siz tapşırıqları y&ouml;nəltməyi &ouml;yrənməlisiniz. İnsanlara stimul verməyi, iş&ccedil;ilərinizə doğru qərarlar qəbul etməyə imkan verməyi &ouml;yrənməlisiniz, x&uuml;susilə də əgər b&ouml;y&uuml;k şirkətdə işləyir və b&ouml;y&uuml;k komandaya rəhbərlik edirsinizsə. Dəyişim &ccedil;ox yaxşıdır. Dəyişim &ouml;nəmlidir. Lakin əgər şirkətləri idarə edirsinizsə siz &ouml;z komanda yoldaşlarınıza stimul verməlisiniz. Bu zəruridir. M&uuml;kafat zəruridir. Ağıllı insanların sizə işləməsi &uuml;&ccedil;&uuml;n onları d&uuml;zg&uuml;n m&uuml;kafatlandırmağı bacarmalısınız&rdquo; &ndash; deyə Miller qeyd edib.</p>\r\n', '2017-12-20', '5a3baf6b558cb.JPG'),
(21, 'ADNSU-da “Uğurlu sahibkarlıq fəaliyyəti” mövzusunda təqdimat keçirilib', 'ADNSU-da “Uğurlu sahibkarlıq fəaliyyəti” mövzusunda təqdimat keçirilib', 'ADNSU-da “Uğurlu sahibkarlıq fəaliyyəti” mövzusunda təqdimat keçirilib', '<p>Dekabrın 20-də Azərbaycan D&ouml;vlət Neft və Sənaye Universitetində (ADNSU) Virciniya D&ouml;vlət Universitetinin ke&ccedil;miş rektoru Keit T. Miller tərəfindən &ldquo;Uğurlu sahibkarlıq fəaliyyəti&rdquo; m&ouml;vzusunda təqdimat ke&ccedil;irilib.&nbsp;</p>\r\n\r\n<p>Tədbirdə ADNSU-nun Elm və texnika &uuml;zrə prorektoru, g.m.e.d. Rauf Əliyarov, Beynəlxalq Əməkdaşlıq ş&ouml;bəsinin m&uuml;diri Cəmilə İsmayılzadə, şirkət rəhbərləri və gənc sahibkarlar iştirak edib. Biznesin d&uuml;zg&uuml;n qurulması, idarə olunması, Startap ideyalarının biznes inkubatorlarına &ccedil;evrilməsi, eləcə də uğurlu biznes fəaliyyətinin əsas x&uuml;susiyyətləti və tanınmış şirkətlərin biznes strategiyasından danışılıb. ADNSU-da Startap layihələrinin perspektivlərinə toxunan Keit T.Miller gənc biznesmenlərə və &ouml;z biznesini qurmaq istəyən startap&ccedil;ılara t&ouml;vsiyələrini verib.&nbsp;</p>\r\n\r\n<p>Sonra Keit Miller tələbələr &uuml;&ccedil;&uuml;n uğurlu karyera və biznes imkanları haqqında geniş təqdimatla &ccedil;ıxış edib, onların suallarını cavablandırıb.</p>\r\n', '<p>Dekabrın 20-də Azərbaycan D&ouml;vlət Neft və Sənaye Universitetində (ADNSU) Virciniya D&ouml;vlət Universitetinin ke&ccedil;miş rektoru Keit T. Miller tərəfindən &ldquo;Uğurlu sahibkarlıq fəaliyyəti&rdquo; m&ouml;vzusunda təqdimat ke&ccedil;irilib.&nbsp;</p>\r\n\r\n<p>Tədbirdə ADNSU-nun Elm və texnika &uuml;zrə prorektoru, g.m.e.d. Rauf Əliyarov, Beynəlxalq Əməkdaşlıq ş&ouml;bəsinin m&uuml;diri Cəmilə İsmayılzadə, şirkət rəhbərləri və gənc sahibkarlar iştirak edib. Biznesin d&uuml;zg&uuml;n qurulması, idarə olunması, Startap ideyalarının biznes inkubatorlarına &ccedil;evrilməsi, eləcə də uğurlu biznes fəaliyyətinin əsas x&uuml;susiyyətləti və tanınmış şirkətlərin biznes strategiyasından danışılıb. ADNSU-da Startap layihələrinin perspektivlərinə toxunan Keit T.Miller gənc biznesmenlərə və &ouml;z biznesini qurmaq istəyən startap&ccedil;ılara t&ouml;vsiyələrini verib.&nbsp;</p>\r\n\r\n<p>Sonra Keit Miller tələbələr &uuml;&ccedil;&uuml;n uğurlu karyera və biznes imkanları haqqında geniş təqdimatla &ccedil;ıxış edib, onların suallarını cavablandırıb.</p>\r\n', '<p>Dekabrın 20-də Azərbaycan D&ouml;vlət Neft və Sənaye Universitetində (ADNSU) Virciniya D&ouml;vlət Universitetinin ke&ccedil;miş rektoru Keit T. Miller tərəfindən &ldquo;Uğurlu sahibkarlıq fəaliyyəti&rdquo; m&ouml;vzusunda təqdimat ke&ccedil;irilib.&nbsp;</p>\r\n\r\n<p>Tədbirdə ADNSU-nun Elm və texnika &uuml;zrə prorektoru, g.m.e.d. Rauf Əliyarov, Beynəlxalq Əməkdaşlıq ş&ouml;bəsinin m&uuml;diri Cəmilə İsmayılzadə, şirkət rəhbərləri və gənc sahibkarlar iştirak edib. Biznesin d&uuml;zg&uuml;n qurulması, idarə olunması, Startap ideyalarının biznes inkubatorlarına &ccedil;evrilməsi, eləcə də uğurlu biznes fəaliyyətinin əsas x&uuml;susiyyətləti və tanınmış şirkətlərin biznes strategiyasından danışılıb. ADNSU-da Startap layihələrinin perspektivlərinə toxunan Keit T.Miller gənc biznesmenlərə və &ouml;z biznesini qurmaq istəyən startap&ccedil;ılara t&ouml;vsiyələrini verib.&nbsp;</p>\r\n\r\n<p>Sonra Keit Miller tələbələr &uuml;&ccedil;&uuml;n uğurlu karyera və biznes imkanları haqqında geniş təqdimatla &ccedil;ıxış edib, onların suallarını cavablandırıb.</p>\r\n', '2017-12-20', '5a3a5c8a0e838.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `slide`
--

CREATE TABLE `slide` (
  `slide_id` int(11) NOT NULL,
  `slide_image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slide_title_az` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slide_title_en` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `slide_title_ru` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `slide_desc_az` text COLLATE utf8_unicode_ci NOT NULL,
  `slide_desc_en` text COLLATE utf8_unicode_ci NOT NULL,
  `slide_desc_ru` text COLLATE utf8_unicode_ci NOT NULL,
  `slide_link` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `slide`
--

INSERT INTO `slide` (`slide_id`, `slide_image`, `slide_title_az`, `slide_title_en`, `slide_title_ru`, `slide_desc_az`, `slide_desc_en`, `slide_desc_ru`, `slide_link`) VALUES
(31, 'Screenshot_(1).png', 'a', 'a', 'a', '<p>a</p>\r\n', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `specialty_db`
--

CREATE TABLE `specialty_db` (
  `specialty_id` int(11) NOT NULL,
  `specialty_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `specialty_db`
--

INSERT INTO `specialty_db` (`specialty_id`, `specialty_name`) VALUES
(1, 'Kimya mühəndisliyi'),
(2, 'Ekologiya mühəndisliyi');

-- --------------------------------------------------------

--
-- Table structure for table `teachers_db`
--

CREATE TABLE `teachers_db` (
  `teacher_id` int(11) NOT NULL,
  `teacher_name_az` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `teacher_surname_az` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `teacher_about_az` text COLLATE utf8_unicode_ci NOT NULL,
  `teacher_position_az` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `teacher_photo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `department_category_az` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `teacher_name_en` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `teacher_surname_en` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `teacher_about_en` text COLLATE utf8_unicode_ci NOT NULL,
  `teacher_position_en` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `department_category_en` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `teacher_name_ru` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `teacher_surname_ru` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `teacher_about_ru` text COLLATE utf8_unicode_ci NOT NULL,
  `teacher_position_ru` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `department_category_ru` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `teachers_db`
--

INSERT INTO `teachers_db` (`teacher_id`, `teacher_name_az`, `teacher_surname_az`, `teacher_about_az`, `teacher_position_az`, `teacher_photo`, `department_category_az`, `teacher_name_en`, `teacher_surname_en`, `teacher_about_en`, `teacher_position_en`, `department_category_en`, `teacher_name_ru`, `teacher_surname_ru`, `teacher_about_ru`, `teacher_position_ru`, `department_category_ru`) VALUES
(4, 'Cavid', 'Leleyev', '<h2><span style=\"font-size:24px\">MEllim haqqinda</span></h2>\r\n', 'Dosent', '52967e9aee1c617cb0668d3ef1704eba1.jpg', 'uzvi kimya kafedrasi', 'Javid', 'Lalayev', '<p>adsadsdad<tt>asdasdasd<span class=\"marker\">asdasdasdasd</span></tt></p>\r\n', 'Docent', 'chemistry department', 'Джавид', 'Лалайев', '<h1><del><span style=\"font-size:22px\">фываывафываыфвафыва</span></del></h1>\r\n', 'досент', 'химический факультет'),
(5, 'asdasd', 'asdasd', '<p>asdasd</p>\r\n', 'asdasd', 'af75b958a25f5024cb1f52f0f21ca332.jpg', 'ekologiya kafedrasi', 'asdasd', 'asdasd', '<p>asdasdasdasda</p>\r\n', 'asdasd', 'echology department', 'asdasd', 'asdasd', '<p>asdasdad</p>\r\n', 'asdasd', 'отдел экологии');

-- --------------------------------------------------------

--
-- Table structure for table `users_db`
--

CREATE TABLE `users_db` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users_db`
--

INSERT INTO `users_db` (`user_id`, `user_name`, `user_password`, `user_email`) VALUES
(1, 'Admin', 'admin2017', 'admin@mail.ru');

-- --------------------------------------------------------

--
-- Table structure for table `use_links_db`
--

CREATE TABLE `use_links_db` (
  `link_id` int(11) NOT NULL,
  `link_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `link_url` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `use_links_db`
--

INSERT INTO `use_links_db` (`link_id`, `link_title`, `link_url`) VALUES
(6, 'Google', '<p><a href=\"http://www.thechemicalengineer.com/\">http://www.thechemicalengineer.com/</a></p>\r\n\r\n<p><a href=\"https://www.thoughtco.com/chemistry-4133594\">https://www.thoughtco.com/chemistry-4133594</a>asdasd</p>\r\n');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_db`
--
ALTER TABLE `about_db`
  ADD PRIMARY KEY (`about_id`);

--
-- Indexes for table `bachelor_about_text`
--
ALTER TABLE `bachelor_about_text`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bachelor_speciality_db`
--
ALTER TABLE `bachelor_speciality_db`
  ADD PRIMARY KEY (`bachelor_id`);

--
-- Indexes for table `department_about_text`
--
ALTER TABLE `department_about_text`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `department_categories`
--
ALTER TABLE `department_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `department_contact`
--
ALTER TABLE `department_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `department_labaratory`
--
ALTER TABLE `department_labaratory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `department_speciality`
--
ALTER TABLE `department_speciality`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `department_teacher`
--
ALTER TABLE `department_teacher`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctorate_about_text`
--
ALTER TABLE `doctorate_about_text`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctorate_speciality_db`
--
ALTER TABLE `doctorate_speciality_db`
  ADD PRIMARY KEY (`doctorate_id`);

--
-- Indexes for table `events_db`
--
ALTER TABLE `events_db`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `laboratory_db`
--
ALTER TABLE `laboratory_db`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logo_and_title`
--
ALTER TABLE `logo_and_title`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_about_text`
--
ALTER TABLE `master_about_text`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_speciality_db`
--
ALTER TABLE `master_speciality_db`
  ADD PRIMARY KEY (`master_id`);

--
-- Indexes for table `news_db`
--
ALTER TABLE `news_db`
  ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`slide_id`);

--
-- Indexes for table `specialty_db`
--
ALTER TABLE `specialty_db`
  ADD PRIMARY KEY (`specialty_id`);

--
-- Indexes for table `teachers_db`
--
ALTER TABLE `teachers_db`
  ADD PRIMARY KEY (`teacher_id`);

--
-- Indexes for table `users_db`
--
ALTER TABLE `users_db`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `use_links_db`
--
ALTER TABLE `use_links_db`
  ADD PRIMARY KEY (`link_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_db`
--
ALTER TABLE `about_db`
  MODIFY `about_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bachelor_about_text`
--
ALTER TABLE `bachelor_about_text`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bachelor_speciality_db`
--
ALTER TABLE `bachelor_speciality_db`
  MODIFY `bachelor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `department_about_text`
--
ALTER TABLE `department_about_text`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `department_categories`
--
ALTER TABLE `department_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `department_contact`
--
ALTER TABLE `department_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `department_labaratory`
--
ALTER TABLE `department_labaratory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `department_speciality`
--
ALTER TABLE `department_speciality`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `department_teacher`
--
ALTER TABLE `department_teacher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `doctorate_about_text`
--
ALTER TABLE `doctorate_about_text`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `doctorate_speciality_db`
--
ALTER TABLE `doctorate_speciality_db`
  MODIFY `doctorate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `events_db`
--
ALTER TABLE `events_db`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `laboratory_db`
--
ALTER TABLE `laboratory_db`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `logo_and_title`
--
ALTER TABLE `logo_and_title`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `master_about_text`
--
ALTER TABLE `master_about_text`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `master_speciality_db`
--
ALTER TABLE `master_speciality_db`
  MODIFY `master_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `news_db`
--
ALTER TABLE `news_db`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `slide`
--
ALTER TABLE `slide`
  MODIFY `slide_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `specialty_db`
--
ALTER TABLE `specialty_db`
  MODIFY `specialty_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `teachers_db`
--
ALTER TABLE `teachers_db`
  MODIFY `teacher_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users_db`
--
ALTER TABLE `users_db`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `use_links_db`
--
ALTER TABLE `use_links_db`
  MODIFY `link_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

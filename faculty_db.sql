-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 10 May 2019, 22:27:54
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
-- Veritabanı: `faculty_db`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `about_db`
--

CREATE TABLE `about_db` (
  `about_id` int(11) NOT NULL,
  `about_text` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Tablo döküm verisi `about_db`
--

INSERT INTO `about_db` (`about_id`, `about_text`) VALUES
(1, '<p style=\"text-align:center\">&nbsp;</p>\r\n\r\n<p style=\"text-align:center\">Fak&uuml;ltədə 1 akademik, 20 professor, 69 dosent, 18 baş m&uuml;əllim və assistent &ccedil;alışır. Hazırda Kimya texnologiya fak&uuml;ltəsinin g&uuml;nd&uuml;z ş&ouml;bəsində 831 nəfər əyani, 64 nəfər isə qiyabi ş&ouml;bədə təhsil alır.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>2016-cı ildən ADNSU rektorunun əmri ilə fak&uuml;ltənin nəzdində &laquo;Yeni kimyəvi materiallar və texnologiyalar&raquo; adlı elmi-tədqiqat laboratoriyası yaradılıb. Laboratoriyaya k.e.d, professor Bağıyev Vaqif La&ccedil;ın oğlu rəhbərlik edir.</p>\r\n\r\n<p>&Uuml;mumilikdə fak&uuml;ltədə 13 professor, 4 elmlər doktoru, 68 dosent, 2 assistent və 29 laborant &ccedil;alışır.</p>\r\n\r\n<p style=\"text-align:center\">&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>ADNSU-da kimya&ccedil;ı m&uuml;həndislərin hazırlığı 1921-ci ildən kimya ş&ouml;bəsi kimi &laquo;Neft sənayesi&raquo; fak&uuml;ltəsində, 1934-ci ildən &laquo;Neft texnologiyası&raquo;, 1940-cı ildən isə &laquo;Kimya texnologiyası&raquo; fak&uuml;ltəsində həyata ke&ccedil;irilir.Fak&uuml;ltədə yarandığı g&uuml;ndən indiyədək neft emalı və neft-kimya sənayesi &uuml;&ccedil;&uuml;n 18000-ə yaxın kimya&ccedil;ı-m&uuml;həndis texnoloq hazırlanıb. 1981-ci ildən fak&uuml;ltədə xarici &ouml;lkə vətəndaşlarının hazırlığı həyata ke&ccedil;irilir. &Ouml;tən illər ərzində d&uuml;nyanın 54 &ouml;lkəsi &uuml;&ccedil;&uuml;n 332 bakalavr, 326 magistr və 33 elmlər namizədi hazırlanıb.</p>\r\n\r\n<p>2009/2010-cu tədris ilinədək fak&uuml;ltədə: 1. &laquo;Kimya-texnologiyası&raquo;, 2. &laquo;Ekologiya və təbiətdən istifadə&raquo; və 3. &laquo;Həyat fəaliyyətinin təhl&uuml;kəsizliyi&raquo; istiqamətləri, 2009/2010-cu tədris ilindən isə 1.&raquo;Kimya m&uuml;həndisliyi&raquo;, 2. &laquo;Ekologiya m&uuml;həndisliyi&raquo; və 3. &laquo; F&ouml;vqəladə hallar və həyat fəaliyyətinin təhl&uuml;kəsizliyi&raquo; ixtisasları və 11 ixtisaslaşma &uuml;zrə kredit sistemi ilə bakalavr hazırlığı &nbsp;həyata ke&ccedil;irilir.Fak&uuml;ltədə 3 istiqamət: 1. &laquo;Kimya texnologiyası&raquo; 2. &laquo;Ekologiya və təbiətdən istifadə&raquo; və 3. &laquo;Həyat fəaliyyətinin təhl&uuml;kəsizliyi&raquo; istiqamətləri və 3 ixtisas &uuml;zrə magistr hazırlığı həyata ke&ccedil;irilir.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Fak&uuml;ltənin nəzdində 4 &uuml;mumi və 4 ixtisas kafedrası, 7 tədris, 6 problem və Rusiyanın &laquo;Lukoyl&raquo; firmasının təsis&ccedil;iliyi ilə &laquo;Fizika-kimyəvi &nbsp;analiz metodları&raquo; mərkəzləşdirilmiş laboratoriya fəaliyyət g&ouml;stərir.</p>\r\n\r\n<p>2016-cı ildən fak&uuml;ltədə 2 istiqamət; &laquo;Kimya m&uuml;həndisliyi&raquo; və &laquo;Ekologiya m&uuml;həndisliyi&raquo; ixtisasları &uuml;zrə y&uuml;ksək ixtisaslı m&uuml;həndis hazırlanır.</p>\r\n\r\n<p>Kafedralar: M&ouml;vcud olan 7 kafedra 2016-cı ilin fevral ayından birləşdirilərək:</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li><strong>&laquo;Kimya və qeyri-&uuml;zvi maddələrin texnologiyası&raquo;</strong></li>\r\n	<li><strong>&laquo;&Uuml;zvi maddələr və y&uuml;ksək molekullu birləşmələrin texnologiyası&raquo;</strong></li>\r\n	<li><strong>&laquo;Neft-kimya texnologiyası və sənaye ekologiyası&raquo; kafedraları yaradılıb.</strong></li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Fak&uuml;ltənin nəzdində həm&ccedil;inin &ldquo;İctimai elmlər&raquo; kafedrası da fəaliyyət g&ouml;stərir.</p>\r\n\r\n<p>Kimya texnologiya fak&uuml;ltəsində&nbsp;<strong><em>4 tyutor</em></strong>&nbsp;fəaliyyət g&ouml;stərir.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ol>\r\n	<li><strong>&nbsp;Qədimov İlqar Kamil oğlu</strong></li>\r\n	<li><strong>&nbsp;Ağayev Famil Bayram oğlu</strong></li>\r\n	<li><strong>&nbsp;Əhmədova Dinarə Vəlyəddin qızı</strong></li>\r\n	<li><strong>&nbsp;Həsənova Fərqanə &Ccedil;ingiz qızı&nbsp;</strong></li>\r\n</ol>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&laquo;Kimya və qeyri-&uuml;zvi maddələrin texnologiyası&raquo; kafedrasında 43 əməkdaş, o c&uuml;mlədən 2 professor, 2 elmlər doktoru və 25 dosent, 1 assistent və 13 laborant fəaliyyət g&ouml;stərir.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&laquo;&Uuml;zvi maddələr və y&uuml;ksək molekullu birləşmələrin texnologiyası&raquo; kafedrasında 21 əməkdaş, o c&uuml;mlədən 2 professor və 10 dosent, 1 assistent, 1 baş m&uuml;əllim və 9 laborant fəaliyyət g&ouml;stərir.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&laquo;Neft-kimya texnolgoiyası və sənaye ekologiyasi&raquo; kafedrasında 48 əməkdaş, o c&uuml;mlədən 8 professor, 21 dosent &ccedil;alışır.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&laquo;İctimai elmlər&raquo; kafedrasında 18 əməkdaş, o c&uuml;mlədən 1 professor və 2 nəfəri elmlər doktoru olmaqla 11 dosent, 3 baş m&uuml;əllim və 3 m&uuml;əllimdən ibarətdir. Kafedrada həm&ccedil;inin 4 əvəz&ccedil;i m&uuml;əllim &ccedil;alışır. Tədris k&ouml;mək&ccedil;i heyəti isə 2 nəfərdən ibarətdir.</p>\r\n\r\n<p style=\"text-align:center\">&nbsp;<img alt=\"\" src=\"http://ktf.asoiu.edu.az/public/images/faculty_logo/kimya.png\" style=\"height:250px; width:250px\" /></p>\r\n\r\n<p style=\"text-align:center\">&nbsp;</p>\r\n\r\n<p style=\"text-align:center\">&nbsp;</p>\r\n\r\n<p style=\"text-align:center\">&nbsp;</p>\r\n\r\n<p style=\"text-align:center\">&nbsp;</p>\r\n\r\n<p style=\"text-align:center\">&nbsp;</p>\r\n\r\n<p style=\"text-align:center\">&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `bachelor_about_text`
--

CREATE TABLE `bachelor_about_text` (
  `id` int(11) NOT NULL,
  `bachelor_about_text` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Tablo döküm verisi `bachelor_about_text`
--

INSERT INTO `bachelor_about_text` (`id`, `bachelor_about_text`) VALUES
(1, 'kimya və neft-qaz mühəndisliyi üzrə tədris prosesi tələbələrə həm daha geniş çərçivədə biliklərin aşılanması, həm də sənaye nöqteyi-nəzərindən müvafiq biliklərin öyrədilə bilməsi məqsədinə xidmət etmə baxımından təşkil olunur. Burada mühəndislik peşəsini anlamağa imkan yaradan müvafiq peşə bilikləri və ən sadə riyazi və elmi prinsiplər öyrədilir. Tələbələrin öyrəndikləri bilik və bacarıqları daha da təkmilləşdirə bilməsi məqsədi ilə tədris prosesinə müəssisələrə praktik səfərlər, kitabxana və laboratoriya layihələri, əlavə mühazirə materialları da daxil edilmişdir.');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `bachelor_speciality_db`
--

CREATE TABLE `bachelor_speciality_db` (
  `bachelor_id` int(11) NOT NULL,
  `bachelor_text` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `bachelor_text_about` text COLLATE utf8_unicode_ci NOT NULL,
  `bachelor_text_text` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Tablo döküm verisi `bachelor_speciality_db`
--

INSERT INTO `bachelor_speciality_db` (`bachelor_id`, `bachelor_text`, `bachelor_text_about`, `bachelor_text_text`) VALUES
(10, '<p>050649</p>\r\n', '<p>Ekologiya m&uuml;həndisliyi</p>\r\n', '<p>2009/2010-cu tədris ilinədək fak&uuml;ltədə: 1. &laquo;Kimya-texnologiyası&raquo;, 2. &laquo;Ekologiya və təbiətdən istifadə&raquo; və 3. &laquo;Həyat fəaliyyətinin təhl&uuml;kəsizliyi&raquo; istiqamətləri, 2009/2010-cu tədris ilindən isə 1.&raquo;Kimya m&uuml;həndisliyi&raquo;, 2. &laquo;Ekologiya m&uuml;həndisliyi&raquo; və 3. &laquo; F&ouml;vqəladə hallar və həyat fəaliyyətinin təhl&uuml;kəsizliyi&raquo; ixtisasları və 11 ixtisaslaşma &uuml;zrə kredit sistemi ilə bakalavr hazırlığı &nbsp;həyata ke&ccedil;irilir.Fak&uuml;ltədə 3 istiqamət: 1. &laquo;Kimya texnologiyası&raquo; 2. &laquo;Ekologiya və təbiətdən istifadə&raquo; və 3. &laquo;Həyat fəaliyyətinin təhl&uuml;kəsizliyi&raquo; istiqamətləri və 3 ixtisas &uuml;zrə magistr hazırlığı həyata ke&ccedil;irilir.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Fak&uuml;ltənin nəzdində 4 &uuml;mumi və 4 ixtisas kafedrası, 7 tədris, 6 problem və Rusiyanın &laquo;Lukoyl&raquo; firmasının təsis&ccedil;iliyi ilə &laquo;Fizika-kimyəvi &nbsp;analiz metodları&raquo; mərkəzləşdirilmiş laboratoriya fəaliyyət g&ouml;stərir.</p>\r\n\r\n<p>2016-cı ildən fak&uuml;ltədə 2 istiqamət; &laquo;Kimya m&uuml;həndisliyi&raquo; və &laquo;Ekologiya m&uuml;həndisliyi&raquo; ixtisasları &uuml;zrə y&uuml;ksək ixtisaslı m&uuml;həndis hazırlanır.</p>\r\n'),
(11, '<p>34342</p>\r\n', '<p>adsfdfsdf</p>\r\n', '<p>sdfsdfsdfsdfsd</p>\r\n');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `department_about_text`
--

CREATE TABLE `department_about_text` (
  `id` int(11) NOT NULL,
  `department_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `department_about_text`
--

INSERT INTO `department_about_text` (`id`, `department_desc`) VALUES
(1, 'asdadadasdasd');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `department_categories`
--

CREATE TABLE `department_categories` (
  `id` int(11) NOT NULL,
  `category_name_az` varchar(255) NOT NULL,
  `category_name_en` varchar(255) NOT NULL,
  `category_name_ru` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `department_categories`
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

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `department_labaratory`
--

CREATE TABLE `department_labaratory` (
  `id` int(11) NOT NULL,
  `labaratory_name` varchar(100) NOT NULL,
  `labaratory_desc` text NOT NULL,
  `labaratory_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `department_speciality`
--

CREATE TABLE `department_speciality` (
  `id` int(11) NOT NULL,
  `speciality_code` varchar(50) NOT NULL,
  `speciality_name` varchar(255) NOT NULL,
  `speciality_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `department_speciality`
--

INSERT INTO `department_speciality` (`id`, `speciality_code`, `speciality_name`, `speciality_desc`) VALUES
(1, '23342', 'ixtisas adi', 'asdadadasdsad');

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
  `doctorate_id` int(11) NOT NULL,
  `doctorate_about_text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `doctorate_about_text`
--

INSERT INTO `doctorate_about_text` (`doctorate_id`, `doctorate_about_text`) VALUES
(1, 'haqqimizda asdsadsdaadsadasddadasdadas');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `doctorate_speciality_db`
--

CREATE TABLE `doctorate_speciality_db` (
  `doctorate_id` int(11) NOT NULL,
  `doctorate_text` varchar(255) NOT NULL,
  `doctorate_text_about` text NOT NULL,
  `doctorate_text_text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `doctorate_speciality_db`
--

INSERT INTO `doctorate_speciality_db` (`doctorate_id`, `doctorate_text`, `doctorate_text_about`, `doctorate_text_text`) VALUES
(1, '50234', 'Doktorantura ixtisasi', 'ixisas haqqindaasdasasd');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `events_db`
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
-- Tablo döküm verisi `events_db`
--

INSERT INTO `events_db` (`event_id`, `event_img`, `event_time`, `event_title_az`, `event_title_en`, `event_title_ru`, `event_desc_az`, `event_desc_en`, `event_desc_ru`) VALUES
(17, 'IMG_0095.JPG', '2017-12-15', 'Dekabrın 12-də Azərbaycan Dövlət Neft və Sənaye Universitetində (ADNSU) ABŞ Hərbi Qüvvələrinin 1-ci dərəcəli kapitanı, ast', 'Dekabrın 12-də Azərbaycan Dövlət Neft və Sənaye Universitetində (ADNSU) ABŞ Hərbi Qüvvələrinin 1-ci dərəcəli kapitanı, ast', 'Dekabrın 12-də Azərbaycan Dövlət Neft və Sənaye Universitetində (ADNSU) ABŞ Hərbi Qüvvələrinin 1-ci dərəcəli kapitanı, ast', '<p>Dekabrın 12-də Azərbaycan D&ouml;vlət Neft və Sənaye Universitetində (ADNSU) ABŞ Hərbi Q&uuml;vvələrinin 1-ci dərəcəli kapitanı, ast</p>\r\n', '<p>Dekabrın 12-də Azərbaycan D&ouml;vlət Neft və Sənaye Universitetində (ADNSU) ABŞ Hərbi Q&uuml;vvələrinin 1-ci dərəcəli kapitanı, ast</p>\r\n', '<p>Dekabrın 12-də Azərbaycan D&ouml;vlət Neft və Sənaye Universitetində (ADNSU) ABŞ Hərbi Q&uuml;vvələrinin 1-ci dərəcəli kapitanı, ast</p>\r\n'),
(20, 'motorcycle_motorcyclist_cross_130826_3840x2160.jpg', '2019-05-18', 'dssd', 's', 's', '<p>s</p>\r\n', '', '');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `laboratory_db`
--

CREATE TABLE `laboratory_db` (
  `id` int(11) NOT NULL,
  `lab_text` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Tablo döküm verisi `laboratory_db`
--

INSERT INTO `laboratory_db` (`id`, `lab_text`) VALUES
(1, '<p>2009/2010-cu tədris ilinədək fak&uuml;ltədə: 1. &laquo;Kimya-texnologiyası&raquo;, 2. &laquo;Ekologiya və təbiətdən istifadə&raquo; və 3. &laquo;Həyat fəaliyyətinin təhl&uuml;kəsizliyi&raquo; istiqamətləri, 2009/2010-cu tədris ilindən isə 1.&raquo;Kimya m&uuml;həndisliyi&raquo;, 2. &laquo;Ekologiya m&uuml;həndisliyi&raquo; və 3. &laquo; F&ouml;vqəladə hallar və həyat fəaliyyətinin təhl&uuml;kəsizliyi&raquo; ixtisasları və 11 ixtisaslaşma &uuml;zrə kredit sistemi ilə bakalavr hazırlığı &nbsp;həyata ke&ccedil;irilir.Fak&uuml;ltədə 3 istiqamət: 1. &laquo;Kimya texnologiyası&raquo; 2. &laquo;Ekologiya və təbiətdən istifadə&raquo; və 3. &laquo;Həyat fəaliyyətinin təhl&uuml;kəsizliyi&raquo; istiqamətləri və 3 ixtisas &uuml;zrə magistr hazırlığı həyata ke&ccedil;irilir.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Fak&uuml;ltənin nəzdində 4 &uuml;mumi və 4 ixtisas kafedrası, 7 tədris, 6 problem və Rusiyanın &laquo;Lukoyl&raquo; firmasının təsis&ccedil;iliyi ilə &laquo;Fizika-kimyəvi &nbsp;analiz metodları&raquo; mərkəzləşdirilmiş laboratoriya fəaliyyət g&ouml;stərir.</p>\r\n\r\n<p>2016-cı ildən fak&uuml;ltədə 2 istiqamət; &laquo;Kimya m&uuml;həndisliyi&raquo; və &laquo;Ekologiya m&uuml;həndisliyi&raquo; ixtisasları &uuml;zrə y&uuml;ksək ixtisaslı m&uuml;həndis hazırlanır.</p>\r\n\r\n<p>Kafedralar: M&ouml;vcud olan 7 kafedra 2016-cı ilin fevral ayından birləşdirilərək:</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li><strong>&laquo;Kimya və qeyri-&uuml;zvi maddələrin texnologiyası&raquo;</strong></li>\r\n	<li><strong>&laquo;&Uuml;zvi maddələr və y&uuml;ksək molekullu birləşmələrin texnologiyası&raquo;</strong></li>\r\n	<li><strong>&laquo;Neft-kimya texnologiyası və sənaye ekologiyası&raquo; kafedraları yaradılıb.</strong></li>\r\n</ul>\r\n');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `master_about_text`
--

CREATE TABLE `master_about_text` (
  `id` int(11) NOT NULL,
  `master_about_text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `master_about_text`
--

INSERT INTO `master_about_text` (`id`, `master_about_text`) VALUES
(1, 'first text');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `master_speciality_db`
--

CREATE TABLE `master_speciality_db` (
  `master_id` int(11) NOT NULL,
  `master_text` text NOT NULL,
  `master_text_about` text NOT NULL,
  `master_text_text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `master_speciality_db`
--

INSERT INTO `master_speciality_db` (`master_id`, `master_text`, `master_text_about`, `master_text_text`) VALUES
(1, '555Master', '<p>Kimya m&uuml;həndisliyi 555</p>', '<p>2009/2010-cu tədris ilinədək fak&uuml;ltədə: 1. &laquo;Kimya-texnologiyası&raquo;, 2. &laquo;Ekologiya və təbiətdən istifadə&raquo; və 3. &laquo;Həyat fəaliyyətinin təhl&uuml;kəsizliyi&raquo; istiqamətləri, 2009/2010-cu tədris ilindən isə 1.&raquo;Kimya m&uuml;həndisliyi&raquo;, 2. &laquo;Ekologiya m&uuml;həndisliyi&raquo; və 3. &laquo; F&ouml;vqəladə hallar və həyat fəaliyyətinin təhl&uuml;kəsizliyi&raquo; ixtisasları və 11 ixtisaslaşma &uuml;zrə kredit sistemi ilə bakalavr hazırlığı &nbsp;həyata ke&ccedil;irilir.Fak&uuml;ltədə 3 istiqamət: 1. &laquo;Kimya texnologiyası&raquo; 2. &laquo;Ekologiya və təbiətdən istifadə&raquo; və 3. &laquo;Həyat fəaliyyətinin təhl&uuml;kəsizliyi&raquo; istiqamətləri və 3 ixtisas &uuml;zrə magistr hazırlığı həyata ke&ccedil;irilir.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Fak&uuml;ltənin nəzdində 4 &uuml;mumi və 4 ixtisas kafedrası, 7 tədris, 6 problem və Rusiyanın &laquo;Lukoyl&raquo; firmasının təsis&ccedil;iliyi ilə &laquo;Fizika-kimyəvi &nbsp;analiz metodları&raquo; mərkəzləşdirilmiş laboratoriya fəaliyyət g&ouml;stərir.</p>\r\n\r\n<p>2016-cı ildən fak&uuml;ltədə 2 istiqamət; &laquo;Kimya m&uuml;həndisliyi&raquo; və &laquo;Ekologiya m&uuml;həndisliyi&raquo; ixtisasları &uuml;zrə y&uuml;ksək ixtisaslı m&uuml;həndis hazırlanır. 555</p>\r\n'),
(2, '5552', '<p>Kimya m&uuml;həndisliyi 5552</p>', '<p>2009/2010-cu tədris ilinədək fak&uuml;ltədə: 1. &laquo;Kimya-texnologiyası&raquo;, 2. &laquo;Ekologiya və təbiətdən istifadə&raquo; və 3. &laquo;Həyat fəaliyyətinin təhl&uuml;kəsizliyi&raquo; istiqamətləri, 2009/2010-cu tədris ilindən isə 1.&raquo;Kimya m&uuml;həndisliyi&raquo;, 2. &laquo;Ekologiya m&uuml;həndisliyi&raquo; və 3. &laquo; F&ouml;vqəladə hallar və həyat fəaliyyətinin təhl&uuml;kəsizliyi&raquo; ixtisasları və 11 ixtisaslaşma &uuml;zrə kredit sistemi ilə bakalavr hazırlığı &nbsp;həyata ke&ccedil;irilir.Fak&uuml;ltədə 3 istiqamət: 1. &laquo;Kimya texnologiyası&raquo; 2. &laquo;Ekologiya və təbiətdən istifadə&raquo; və 3. &laquo;Həyat fəaliyyətinin təhl&uuml;kəsizliyi&raquo; istiqamətləri və 3 ixtisas &uuml;zrə magistr hazırlığı həyata ke&ccedil;irilir.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Fak&uuml;ltənin nəzdində 4 &uuml;mumi və 4 ixtisas kafedrası, 7 tədris, 6 problem və Rusiyanın &laquo;Lukoyl&raquo; firmasının təsis&ccedil;iliyi ilə &laquo;Fizika-kimyəvi &nbsp;analiz metodları&raquo; mərkəzləşdirilmiş laboratoriya fəaliyyət g&ouml;stərir.</p>\r\n\r\n<p>2016-cı ildən fak&uuml;ltədə 2 istiqamət; &laquo;Kimya m&uuml;həndisliyi&raquo; və &laquo;Ekologiya m&uuml;həndisliyi&raquo; ixtisasları &uuml;zrə y&uuml;ksək ixtisaslı m&uuml;həndis hazırlanır. 5552</p>\r\n');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `news_db`
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
-- Tablo döküm verisi `news_db`
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
-- Tablo için tablo yapısı `phd_about_text`
--

CREATE TABLE `phd_about_text` (
  `id` int(11) NOT NULL,
  `phd_about_text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `phd_about_text`
--

INSERT INTO `phd_about_text` (`id`, `phd_about_text`) VALUES
(1, 'demo info phd');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `phd_speciality_db`
--

CREATE TABLE `phd_speciality_db` (
  `phd_id` int(11) NOT NULL,
  `phd_text` varchar(255) NOT NULL,
  `phd_text_about` text NOT NULL,
  `phd_text_text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `phd_speciality_db`
--

INSERT INTO `phd_speciality_db` (`phd_id`, `phd_text`, `phd_text_about`, `phd_text_text`) VALUES
(1, '1234567', 'kimyaPHd', 'hahha Phd'),
(4, '1234567ddd', 'kimyaPHdddd', 'hahha Phdddd');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `slide`
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
-- Tablo döküm verisi `slide`
--

INSERT INTO `slide` (`slide_id`, `slide_image`, `slide_title_az`, `slide_title_en`, `slide_title_ru`, `slide_desc_az`, `slide_desc_en`, `slide_desc_ru`, `slide_link`) VALUES
(31, 'Screenshot_(1).png', 'a', 'a', 'a', '<p>a</p>\r\n', '', '', '');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `specialty_db`
--

CREATE TABLE `specialty_db` (
  `specialty_id` int(11) NOT NULL,
  `specialty_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Tablo döküm verisi `specialty_db`
--

INSERT INTO `specialty_db` (`specialty_id`, `specialty_name`) VALUES
(1, 'Kimya mühəndisliyi'),
(2, 'Ekologiya mühəndisliyi');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `teachers_db`
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
-- Tablo döküm verisi `teachers_db`
--

INSERT INTO `teachers_db` (`teacher_id`, `teacher_name_az`, `teacher_surname_az`, `teacher_about_az`, `teacher_position_az`, `teacher_photo`, `department_category_az`, `teacher_name_en`, `teacher_surname_en`, `teacher_about_en`, `teacher_position_en`, `department_category_en`, `teacher_name_ru`, `teacher_surname_ru`, `teacher_about_ru`, `teacher_position_ru`, `department_category_ru`) VALUES
(1, 'cavid2', 'leleyev2', '<p><span style=\"color:#27ae60\">asdasdasdasdads</span></p>\r\n', 'bomba oglan2', 'default.png', 'ekologiya kafedrasi', 'asd', 'asdasdasd', '<p>asdasdadasdasdasdadas</p>\r\n', 'asdas', 'echology department', 'asd', 'dasdas0as', '<p><span style=\"background-color:#000000\">0asdasdasd</span></p>\r\n', 'asdaasd', 'отдел экологии'),
(3, 'asdas<br>', 'asdasd<br>', '<p>asdasdasdasdasd</p>\r\n<br>', 'asdasd<br>', 'image3.jpg', 'uzvi kimya kafedrasi<br>', '<br>', '<br>', '<br>', '<br>', 'echology department<br>', '<br>', '<br>', '<br>', '<br>', 'отдел экологии<br>');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users_db`
--

CREATE TABLE `users_db` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Tablo döküm verisi `users_db`
--

INSERT INTO `users_db` (`user_id`, `user_name`, `user_password`, `user_email`) VALUES
(1, 'Admin', 'admin2017', 'admin@mail.ru');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `use_links_db`
--

CREATE TABLE `use_links_db` (
  `link_id` int(11) NOT NULL,
  `link_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `link_url` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Tablo döküm verisi `use_links_db`
--

INSERT INTO `use_links_db` (`link_id`, `link_title`, `link_url`) VALUES
(6, 'Google', '<p><a href=\"http://www.thechemicalengineer.com/\">http://www.thechemicalengineer.com/</a></p>\r\n\r\n<p><a href=\"https://www.thoughtco.com/chemistry-4133594\">https://www.thoughtco.com/chemistry-4133594</a>asdasd</p>\r\n');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `about_db`
--
ALTER TABLE `about_db`
  ADD PRIMARY KEY (`about_id`);

--
-- Tablo için indeksler `bachelor_about_text`
--
ALTER TABLE `bachelor_about_text`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `bachelor_speciality_db`
--
ALTER TABLE `bachelor_speciality_db`
  ADD PRIMARY KEY (`bachelor_id`);

--
-- Tablo için indeksler `department_about_text`
--
ALTER TABLE `department_about_text`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `department_categories`
--
ALTER TABLE `department_categories`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `department_contact`
--
ALTER TABLE `department_contact`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `department_labaratory`
--
ALTER TABLE `department_labaratory`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `department_speciality`
--
ALTER TABLE `department_speciality`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `department_teacher`
--
ALTER TABLE `department_teacher`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `doctorate_about_text`
--
ALTER TABLE `doctorate_about_text`
  ADD PRIMARY KEY (`doctorate_id`);

--
-- Tablo için indeksler `doctorate_speciality_db`
--
ALTER TABLE `doctorate_speciality_db`
  ADD PRIMARY KEY (`doctorate_id`);

--
-- Tablo için indeksler `events_db`
--
ALTER TABLE `events_db`
  ADD PRIMARY KEY (`event_id`);

--
-- Tablo için indeksler `laboratory_db`
--
ALTER TABLE `laboratory_db`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `master_about_text`
--
ALTER TABLE `master_about_text`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `master_speciality_db`
--
ALTER TABLE `master_speciality_db`
  ADD PRIMARY KEY (`master_id`);

--
-- Tablo için indeksler `news_db`
--
ALTER TABLE `news_db`
  ADD PRIMARY KEY (`news_id`);

--
-- Tablo için indeksler `phd_about_text`
--
ALTER TABLE `phd_about_text`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `phd_speciality_db`
--
ALTER TABLE `phd_speciality_db`
  ADD PRIMARY KEY (`phd_id`);

--
-- Tablo için indeksler `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`slide_id`);

--
-- Tablo için indeksler `specialty_db`
--
ALTER TABLE `specialty_db`
  ADD PRIMARY KEY (`specialty_id`);

--
-- Tablo için indeksler `teachers_db`
--
ALTER TABLE `teachers_db`
  ADD PRIMARY KEY (`teacher_id`);

--
-- Tablo için indeksler `users_db`
--
ALTER TABLE `users_db`
  ADD PRIMARY KEY (`user_id`);

--
-- Tablo için indeksler `use_links_db`
--
ALTER TABLE `use_links_db`
  ADD PRIMARY KEY (`link_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `about_db`
--
ALTER TABLE `about_db`
  MODIFY `about_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `bachelor_about_text`
--
ALTER TABLE `bachelor_about_text`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `bachelor_speciality_db`
--
ALTER TABLE `bachelor_speciality_db`
  MODIFY `bachelor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Tablo için AUTO_INCREMENT değeri `department_about_text`
--
ALTER TABLE `department_about_text`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `department_categories`
--
ALTER TABLE `department_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `department_contact`
--
ALTER TABLE `department_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `department_labaratory`
--
ALTER TABLE `department_labaratory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `department_speciality`
--
ALTER TABLE `department_speciality`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `department_teacher`
--
ALTER TABLE `department_teacher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `doctorate_about_text`
--
ALTER TABLE `doctorate_about_text`
  MODIFY `doctorate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `doctorate_speciality_db`
--
ALTER TABLE `doctorate_speciality_db`
  MODIFY `doctorate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `events_db`
--
ALTER TABLE `events_db`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Tablo için AUTO_INCREMENT değeri `laboratory_db`
--
ALTER TABLE `laboratory_db`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `master_about_text`
--
ALTER TABLE `master_about_text`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `master_speciality_db`
--
ALTER TABLE `master_speciality_db`
  MODIFY `master_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `news_db`
--
ALTER TABLE `news_db`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Tablo için AUTO_INCREMENT değeri `phd_about_text`
--
ALTER TABLE `phd_about_text`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `phd_speciality_db`
--
ALTER TABLE `phd_speciality_db`
  MODIFY `phd_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `slide`
--
ALTER TABLE `slide`
  MODIFY `slide_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- Tablo için AUTO_INCREMENT değeri `specialty_db`
--
ALTER TABLE `specialty_db`
  MODIFY `specialty_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `teachers_db`
--
ALTER TABLE `teachers_db`
  MODIFY `teacher_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tablo için AUTO_INCREMENT değeri `users_db`
--
ALTER TABLE `users_db`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `use_links_db`
--
ALTER TABLE `use_links_db`
  MODIFY `link_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

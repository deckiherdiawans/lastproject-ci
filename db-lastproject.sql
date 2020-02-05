-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 04, 2020 at 09:58 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db-lastproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `agents`
--

CREATE TABLE `agents` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `address` varchar(128) NOT NULL,
  `city` varchar(128) NOT NULL,
  `phone` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `image` varchar(128) NOT NULL,
  `role_id` int(1) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `agents`
--

INSERT INTO `agents` (`id`, `name`, `address`, `city`, `phone`, `email`, `username`, `password`, `image`, `role_id`, `is_active`) VALUES
(1, 'Decki Herdiawan Soepandi', 'Jl. Citra Asri Blok B No. 11 Padalarang', 'Bandung Barat', '+6282216668131', 'herdiawand@yahoo.co.id', 'deckiherdiawans', '$2y$10$OUWa3OvnqeSTcJykZRSUuOQAEJGS/Ju.vyeQEee5ulHrkcu4dPSPW', 'decki.png', 1, 1),
(2, 'Tri Untung Sutriyanto', 'Jl. Dago Atas No. 55', 'Bandung', '+6281330003063', 'triuntungsutriyanto@yahoo.com', 'sutriyanto', '$2y$10$XgRAAHynZxJSugQ2RRDBOe1i8kutWRn30wpPggq4z.0s/.WAUX7d6', 'tri.jpg', 2, 1),
(9, 'Edu Ramdhana Putra', 'Jl. Antapani Raya', 'Bandung', '+6281321600700', 'eduramdhanaputra@yahoo.com', 'ramdhana', '$2y$10$9TTHWeHceB2mEfnAwiOS3ewAxd9lZeoyvPnACHogw7NapI0QQvHyW', 'edu.jpg', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `agent_lists_menu`
--

CREATE TABLE `agent_lists_menu` (
  `id` int(11) NOT NULL,
  `agent_menu_id` int(11) NOT NULL,
  `sub_menu` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `div_id` varchar(128) NOT NULL,
  `header_id` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `agent_lists_menu`
--

INSERT INTO `agent_lists_menu` (`id`, `agent_menu_id`, `sub_menu`, `url`, `div_id`, `header_id`, `icon`, `is_active`) VALUES
(1, 2, 'Contacts', 'agent/contacts/', 'menu-contacts', 'link-header-contacts', 'fas fa-address-card fa-6x', 1),
(2, 2, 'Companies', 'agent/companies/', 'menu-companies', 'link-header-companies', 'fas fa-building fa-6x', 1),
(3, 2, 'Agents', 'agent/agents/', 'menu-agents', 'link-header-agents', 'fas fa-id-badge fa-6x', 1);

-- --------------------------------------------------------

--
-- Table structure for table `agent_menu`
--

CREATE TABLE `agent_menu` (
  `id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL,
  `uri_segment` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `agent_menu`
--

INSERT INTO `agent_menu` (`id`, `title`, `url`, `icon`, `is_active`, `uri_segment`) VALUES
(1, 'Tickets', 'agent/', 'fas fa-fw fa-ticket-alt', 1, 'agent'),
(2, 'Lists', 'agent/lists_menu/', 'fa fa-fw fa-user-circle', 1, 'agent'),
(3, 'Reports', 'agent/reports_menu/', 'far fa-fw fa-chart-bar', 1, 'agent'),
(4, 'Staff Portal', 'staff/', 'fas fa-fw fa-sign-out-alt', 1, 'staff'),
(5, 'Client Portal', 'client/', 'fas fa-fw fa-sign-out-alt', 1, 'client');

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` int(11) NOT NULL,
  `brand` varchar(128) NOT NULL,
  `headquarter_address` varchar(128) NOT NULL,
  `headquarter_city` varchar(128) NOT NULL,
  `logo` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `brand`, `headquarter_address`, `headquarter_city`, `logo`) VALUES
(1, '308 Absolute Unscared', 'Jl. Cendrawasih No. 23', 'Yogyakarta', 'default_building2.jpg'),
(2, '17 Seven', 'Jl. Taman Galaxy Raya No. 11 B', 'Bekasi', 'default_building2.jpg'),
(3, 'Arena Experience', 'Jl. Ambon No. 9', 'Bandung', 'default_building2.jpg'),
(4, 'Bloods', 'Jl. Gunung Batu', 'Bandung', 'default_building2.jpg'),
(5, 'Chambers', 'Jl. Boulevard No. 3, Ruko Ruby 1, Panakkukang Mas', 'Makassar', 'default_building2.jpg'),
(6, 'Erigo', 'BSD City', 'Tangerang', 'default_building2.jpg'),
(8, 'Inspired27', 'Jl. Kendalsari 1 No. II-A', 'Malang', 'default_building2.jpg'),
(9, 'Issue', 'Jl. Karunrung No. 26', 'Makassar', 'default_building2.jpg'),
(10, 'Magnum Reload', 'Jl. Gamelan No. 21', 'Bandung', 'default_building2.jpg'),
(11, 'Maternal Disaster', 'Jl. Wira Angun Angun No. 4B', 'Bandung', 'default_building2.jpg'),
(12, 'Monochrome', 'Jl. Raya Merdeka No. 163', 'Tangerang', 'default_building2.jpg'),
(13, 'Nimco', 'Jl. Delima No. 25 B', 'Yogyakarta', 'default_building2.jpg'),
(14, 'Oraqle', 'Jl. ZA. Pagar Alam No. 12B', 'Bandar Lampung', 'default_building2.jpg'),
(15, 'Ouval Research', 'Jl. Buah Batu No. 64', 'Bandung', 'default_building2.jpg'),
(16, 'Premium Nation', 'Jl. Cempaka Putih No. 10 B', 'Jakarta Pusat', 'default_building2.jpg'),
(17, 'Queen Beer', 'Perumahan Grand Galaxy City, Jl. Taman Aster Blok BV No. 10', 'Bekasi', 'default_building2.jpg'),
(18, 'Realizm87', 'Jl. Soekarno-Hatta No. A6', 'Malang', 'default_building2.jpg'),
(19, 'Rown Division', 'Jl. Adi Sucipto No. 1', 'Surakarta (Solo)', 'default_building2.jpg'),
(20, 'Screamous', 'Jl. Matraman No. 2, Buah Batu', 'Bandung', 'default_building2.jpg'),
(21, 'Skaters', 'Jl. Sukagalih, Sukajadi', 'Bandung', 'default_building2.jpg'),
(22, 'Skymo', 'Jl. Sancang No. 7D', 'Bogor', 'default_building2.jpg'),
(23, 'Smith', 'Jl. Sultan Agung No. 27', 'Bandung', 'default_building2.jpg'),
(24, 'Starcross', 'Jl. Cendrawasih No. 32A', 'Yogyakarta', 'default_building2.jpg'),
(25, 'Suicide Anthem', 'Jl. Galaxy Raya No. B-15', 'Bekasi', 'default_building2.jpg'),
(26, 'Tendencies', 'Jl. Bintaro Utama 1 Blok F2 No. 3', 'Jakarta', 'default_building2.jpg'),
(28, 'Thistime Brand', 'Ruko Libersa No. 16, Jl. Karang Satria', 'Bekasi', 'default_building2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `company_id` int(11) NOT NULL,
  `company_brand` varchar(128) NOT NULL,
  `branch_address` varchar(128) NOT NULL,
  `branch_city` varchar(128) NOT NULL,
  `phone` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `note` varchar(128) DEFAULT NULL,
  `image` varchar(128) NOT NULL,
  `role_id` int(1) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `company_id`, `company_brand`, `branch_address`, `branch_city`, `phone`, `email`, `username`, `password`, `note`, `image`, `role_id`, `is_active`) VALUES
(1, 'Adi', 1, '308 Absolute Unscared', 'Jl. Cendrawasih No. 23', 'Yogyakarta', '+6289671306396', 'd.herdiawan.s@gmail.com', 'adi308', '$2y$10$50m3dGZX2jHosy1htrEdR.IXyv.1r75q70ad9S/wNUUZA0CxjdhDy', 'Crew cabang toko utama', 'default_user2.png', 3, 1),
(2, 'Aditya', 13, 'Nimco', 'Jl. Delima No. 25 B', 'Yogyakarta', '+6282137236448', 'd.herdiawan.s@gmail.com', 'aditya_nimco', '$2y$10$8DXarPZNzBsm3GQYfBi1je0Td7A.JVxKP1Wju5g9vQneotDevimVS', 'Crew cabang toko utama', 'default_user2.png', 3, 1),
(3, 'Afid', 6, 'Erigo', 'BSD City', 'Tangerang', '+6282299007192', 'd.herdiawan.s@gmail.com', 'afid_erigo', '$2y$10$m/YkcQcMEDs6sU21AwQyYOF6qHqT2tzwhfhATLQOTXaCfE6AAmwiy', 'Crew distribusi', 'default_user2.png', 3, 1),
(4, 'Aji', 13, 'Nimco', 'Jl. Delima No. 25 B', 'Yogyakarta', '+6281945307205', 'd.herdiawan.s@gmail.com', 'aji_nimco', '$2y$10$Oxtnu0RAMmz/4SYdV7VbS.25okWuQlRDfXH38kJoEeBuATCVBRFtq', 'Crew cabang toko utama', 'default_user2.png', 3, 1),
(5, 'Aldy', 8, 'Inspired27', 'Jl. Kendalsari 1 No. II-A', 'Malang', '+6281230571218', 'd.herdiawan.s@gmail.com', 'aldy_inspired27', '$2y$10$6EEXlf2DiexCvj5MiOYTPuX0ogDQ/xDlfH/iZHwsV5P661wEhXsqW', 'Crew distribusi', 'default_user2.png', 3, 1),
(6, 'Ale', 4, 'Bloods', 'Jl. Gunung Batu', 'Bandung', '+6285738285583', 'd.herdiawan.s@gmail.com', 'ale_bloods', '$2y$10$V/R4b7Ii.6pBll.nLSDDA.JZErheiArYrTVTHAk0XB3XOMA.VfO22', 'Crew distribusi', 'default_user2.png', 3, 1),
(7, 'Andry', 5, 'Chambers', 'Jl. Boulevard No. 3, Ruko Ruby 1, Panakkukang Mas', 'Makassar', '+6281355627244', 'd.herdiawan.s@gmail.com', 'andry_chambers', '$2y$10$d1eND/a3tp7IgM6Zx5RqO.UojkAjnYioTtVtREo681vIjsHcsIOTu', 'Crew distribusi', 'default_user2.png', 3, 1),
(8, 'Angga', 23, 'Smith', 'Jl. Sultan Agung No. 27', 'Bandung', '+6289616942159', 'd.herdiawan.s@gmail.com', 'angga_smith', '$2y$10$uDYBhxsDW9e51xxDUjkwfOxvVGdUGBROzicNwDd.TBJ21noa1F6wS', 'Crew cabang toko utama', 'default_user2.png', 3, 1),
(9, 'Angga', 11, 'Maternal Disaster', 'Jl. Wira Angun Angun No. 4B', 'Bandung', '+6281320091327', 'd.herdiawan.s@gmail.com', 'angga_maternal', '$2y$10$.7vfbLodz1qRk2XGopRLK.Qxrbl1mkCPOI7VL9ueXHRRjtpb/wjfW', 'Crew distribusi', 'default_user2.png', 3, 1),
(10, 'Angling', 19, 'Rown Division', 'Jl. Adi Sucipto No. 1', 'Surakarta (Solo)', '+6287835558516', 'd.herdiawan.s@gmail.com', 'angling_rown', '$2y$10$qOyVlIIL.zt11ou7qLilCO71PjFBngzp1GFlNH934DuHWTf9J0/TG', 'Crew cabang toko utama', 'default_user2.png', 3, 1),
(11, 'Arif', 18, 'Realizm87', 'Jl. Soekarno-Hatta No. A6', 'Malang', '+6283166476900', 'd.herdiawan.s@gmail.com', 'arif_realizm87', '$2y$10$we7GTbSVQKggSbrvjuF2hOUp1LjaGvARvHFeicQo1XWTAbcqwwUCy', 'Crew distribusi', 'default_user2.png', 3, 1),
(12, 'Baden', 23, 'Smith', 'Jl. Sultan Agung No. 27', 'Bandung', '+6285222559224', 'd.herdiawan.s@gmail.com', 'baden_smith', '$2y$10$ME01NokIF9iXnyRUx90gOuYUWzID6UJaZGJ5WS/nUVV0K3r5sFio.', 'Crew distribusi', 'default_user2.png', 3, 1),
(13, 'Bagas', 6, 'Erigo', 'BSD City', 'Tangerang', '+6282210371315', 'd.herdiawan.s@gmail.com', 'bagas_erigo', '$2y$10$o2tfTc9Gs1Oov7y8fB/Xeexm6Rhish3t0Tf6V7nxT.lN9r1O61ZFq', 'Crew distribusi', 'default_user2.png', 3, 1),
(14, 'Boni', 16, 'Premium Nation', 'Jl. Cempaka Putih No. 10 B', 'Jakarta Pusat', '+6285781125527', 'd.herdiawan.s@gmail.com', 'boni_premium', '$2y$10$1byOyHS3lmFPzjfHRuO8p.ZxWsUy4ECf2M.sHjmc5VmnlJ3ZRhz2C', 'Crew cabang toko utama', 'default_user2.png', 3, 1),
(15, 'Choky', 6, 'Erigo', 'BSD City', 'Tangerang', '+6281241846860', 'd.herdiawan.s@gmail.com', 'choky_erigo', '$2y$10$1yTnIhQCA.yu/sQCoHcx0Ov7dE4v8zNg0U5qn08cUd91pnlBnWO9u', 'Crew distribusi', 'default_user2.png', 3, 1),
(16, 'Dede', 9, 'Issue', 'Jl. Sultan Alauddin', 'Makassar', '+628114444562', 'd.herdiawan.s@gmail.com', 'dede_issue', '$2y$10$.xjfSMI.1jpGRdDFN.7JAOUq47KrS0QPqJv3.gSLPSwWbpmVupae.', 'Crew cabang toko 5 Alauddin', 'default_user2.png', 3, 1),
(17, 'Dhamar', 15, 'Ouval Research', 'Jl. Buah Batu No. 64', 'Bandung', '+6288218540369', 'd.herdiawan.s@gmail.com', 'dhamar_ouval', '$2y$10$7S40m3T6Ec8rRSTQJpBAhODIGlDFPKiPGTjEG3deaVKNTL315ZaRO', 'Crew cabang toko Buah Batu', 'default_user2.png', 3, 1),
(18, 'Dhaniar', 8, 'Inspired27', 'Jl. Kendalsari 1 No. II-A', 'Malang', '+62895342015336', 'd.herdiawan.s@gmail.com', 'dhaniar_inspired27', '$2y$10$8LlxNIFMe7AmfLXg2iouTeSKNRVKAJ7fUzy82XQ6zICOYyS7hu4py', 'Crew distribusi', 'default_user2.png', 3, 1),
(19, 'Dindin', 15, 'Ouval Research', 'Jl. Sultan Agung', 'Bandung', '+6282244667433', 'd.herdiawan.s@gmail.com', 'dindin_ouval', '$2y$10$xFyyJGOf/GB7ab3Pb1BPsuaKTS1LHGsWMy1g6nqOF8KJsA58sdB/C', 'Crew cabang toko Sultan Agung', 'default_user2.png', 3, 1),
(20, 'Dirpan', 22, 'Skymo', 'Jl. Sancang No. 7D', 'Bogor', '+6282246566114', 'd.herdiawan.s@gmail.com', 'dirpan_skymo', '$2y$10$606TB261S2h8CY6KamQZ7OpNQtOw6D9/1cyT1O0oUZSYcqE7KFN4K', 'Crew cabang toko utama', 'default_user2.png', 3, 1),
(21, 'Dwi', 26, 'Tendencies', 'Jl. Bintaro Utama 1 Blok F2 No. 3', 'Jakarta', '+6283807789891', 'd.herdiawan.s@gmail.com', 'dwi_tendencies', '$2y$10$JeMWuHdQs1FI/of4MKko9OaL4krMFb9txjoCkfR2a4LaFcJRyIF1y', 'Crew cabang toko utama', 'default_user2.png', 3, 1),
(22, 'Erick', 15, 'Ouval Research', 'Jl. Buah Batu No. 64', 'Bandung', '+628886232835', 'd.herdiawan.s@gmail.com', 'erick_ouval', '$2y$10$o4TmnGOD7iAK3JL1kqlRPOyLKwE5GPToBd70mn2yzhNNDZwxqWI9W', 'Crew cabang toko utama', 'default_user2.png', 3, 1),
(23, 'Erman', 12, 'Monochrome', 'Jl. Raya Merdeka No. 163', 'Tangerang', '+62812380798734', 'd.herdiawan.s@gmail.com', 'erman_monochrome', '$2y$10$qF9Cx51GPFCXGqrPc9gR0uBxqAcSsB5bquTacBK/dSBFDJshm/ZQG', 'Crew distribusi', 'default_user2.png', 3, 1),
(24, 'Ety', 10, 'Magnum Reload', 'Jl. Gamelan No. 21', 'Bandung', '+6282214221880', 'd.herdiawan.s@gmail.com', 'ety_magnum', '$2y$10$qNq1q.9jrTk8yvcAfaAVouAh.S6O7ILLprYU1UAbq4VJ2eIm7a1XW', 'Crew distribusi', 'default_user2.png', 3, 1),
(25, 'Fafa', 18, 'Realizm87', 'Jl. Soekarno-Hatta No. A6', 'Malang', '+6285730658573', 'd.herdiawan.s@gmail.com', 'fafa_realizm87', '$2y$10$k5s.wyLsKg99Et.qLScFt.WEMy/eJUyjxl6jacpf8joy9691sIS1W', 'Crew distribusi & expo', 'default_user2.png', 3, 1),
(26, 'Febby', 21, 'Skaters', 'Jl. Sukagalih, Sukajadi', 'Bandung', '+62859130902848', 'd.herdiawan.s@gmail.com', 'febby_skaters', '$2y$10$nkzRHn7vcobajvVM4s40vuPJx3z2es9AsBTtsTdvMrF15DxYgTjS2', 'Crew distribusi', 'default_user2.png', 3, 1),
(27, 'Fitri', 21, 'Skaters', 'Jl. Sukagalih, Sukajadi', 'Bandung', '+6281221409223', 'd.herdiawan.s@gmail.com', 'fitri_skaters', '$2y$10$ide1.SGw8dZyywT78YLYse6lk/EElN0cygwCcC2WHpdXklx40j3Fy', 'Crew cabang toko utama', 'default_user2.png', 3, 1),
(28, 'Frisda', 17, 'Queen Beer', 'Perumahan Grand Galaxy City, Jl. Taman Aster Blok BV No. 10', 'Bekasi', '+6282216040308', 'd.herdiawan.s@gmail.com', 'frisda_queen', '$2y$10$9iRiZynclHO2Y3hqgR8rbec.FE3cuwUTlVHCeYZovnGo3.X7AUeB6', 'Crew cabang toko utama', 'default_user2.png', 3, 1),
(29, 'Gandjar', 11, 'Maternal Disaster', 'Jl. Wira Angun Angun No. 4B', 'Bandung', '+62816624669', 'd.herdiawan.s@gmail.com', 'gandjar_maternal', '$2y$10$geKXTddH4WYkFtl.bYffK.LvYIaOGLQlNbYE8qqlySTrSCUD8U9zi', 'Crew distribusi', 'default_user2.png', 3, 1),
(30, 'Helmi', 13, 'Nimco', 'Jl. Delima No. 25 B', 'Yogyakarta', '+6281288645105', 'd.herdiawan.s@gmail.com', 'helmi_nimco', '$2y$10$ez9uHuuJqt4mLq2yhEgaMOvCDlOBLPLv/3hGgZxd8QpZBUABCFAsO', 'Crew cabang toko Yogyakarta', 'default_user2.png', 3, 1),
(31, 'Hendra', 14, 'Oraqle', 'Jl. ZA. Pagar Alam No. 12B', 'Bandar Lampung', '+6285267690418', 'd.herdiawan.s@gmail.com', 'hendra_oraqle', '$2y$10$khIceu0RqnYTfJE3Wb1Dq.nnqFXVtaDd/ap6SvBg/0uCtIWZlf5O6', 'Crew distribusi', 'default_user2.png', 3, 1),
(32, 'Hendra', 9, 'Issue', 'Jl. Karunrung No. 26', 'Makassar', '+6282344444185', 'd.herdiawan.s@gmail.com', 'hendra_issue', '$2y$10$njuPpCYerWNJZIP9x7WcdeW9LDasZriip7Lmb1zcuVNWV5CT5iUbu', 'Crew cabang toko utama', 'default_user2.png', 3, 1),
(33, 'Heny', 22, 'Skymo', 'Jl. Sancang No. 7D', 'Bogor', '+6281383472299', 'd.herdiawan.s@gmail.com', 'heny_skymo', '$2y$10$GSlMJHVUAQYI/ZNozNJIsefqijGfScYNU4WXJ74hAcAfF6rJfrV7G', 'Crew distribusi', 'default_user2.png', 3, 1),
(34, 'Irul', 25, 'Suicide Anthem', 'Jl. Galaxy Raya No. B-15', 'Bekasi', '+6285215478385', 'd.herdiawan.s@gmail.com', 'irul_suicide', '$2y$10$oQ0CxkeoVQKQhBtNfB5uIewgiQsPsyyM8HhHALxRQssC5aYxDhiTG', 'Crew distribusi', 'default_user2.png', 3, 1),
(35, 'Iting', 24, 'Starcross', 'Jl. Cendrawasih No. 32A', 'Yogyakarta', '+6282292857286', 'd.herdiawan.s@gmail.com', 'iting_starcross', '$2y$10$Zc7USjfMsyUbf9nzn7PNl.XR7rhVgo07wFHrBzejR7uBm85S0MmzG', 'Crew distribusi', 'default_user2.png', 3, 1),
(36, 'Iwang', 8, 'Inspired27', 'Jl. Kendalsari 1 No. II-A', 'Malang', '+6281217339667', 'd.herdiawan.s@gmail.com', 'iwang_inspired27', '$2y$10$HY9ZRPiQCTxl3QWlxM6aCOpdDny5aRe8ONNstDVgGzN0TrBWrN3WW', 'Crew cabang toko utama', 'default_user2.png', 3, 1),
(37, 'Jefry', 19, 'Rown Division', 'Jl. Adi Sucipto No. 1', 'Surakarta (Solo)', '+6282242277911', 'd.herdiawan.s@gmail.com', 'jefry_rown', '$2y$10$HVctJKRWpVdOckgy5opBsuyrccCmrJ/3TFIAOb3iijahPGaGppY66', 'Crew cabang toko Solo', 'default_user2.png', 3, 1),
(38, 'John', 25, 'Suicide Anthem', 'Jl. Galaxy Raya No. B-15', 'Bekasi', '+6281370017071', 'd.herdiawan.s@gmail.com', 'john_suicide', '$2y$10$gQ3wkkkV5c1FvVXnInkXMuDvbBU2yRFSohQ.sZmAAzBc.9rT3Rtly', 'Crew cabang toko Galaxy', 'default_user2.png', 3, 1),
(39, 'Juan', 26, 'Tendencies', 'Jl. Bintaro Utama 1 Blok F2 No. 3', 'Jakarta', '+6281316044093', 'd.herdiawan.s@gmail.com', 'juan_tendencies', '$2y$10$bhvmiBSLWpOaufXShmGd1eotlPQ.WcU7Qo8y4ZkMFK/mEqKCVmjD6', 'Crew distribusi', 'default_user2.png', 3, 1),
(40, 'Kinoy', 28, 'Thistime Brand', 'Ruko Libersa No. 16, Jl. Karang Satria', 'Bekasi', '+6282298025052', 'd.herdiawan.s@gmail.com', 'kinoy_thistime', '$2y$10$5B.cIQhVnQrWbF/3PIWjJOc6UBOSo2hVHXAlVOLAzT9sSk5U6CwP.', 'Crew distribusi', 'default_user2.png', 3, 1),
(41, 'Kris', 12, 'Monochrome', 'Jl. Raya Merdeka No. 163', 'Tangerang', '+628158032905', 'd.herdiawan.s@gmail.com', 'kris_monochrome', '$2y$10$DxlqlspUUG8piazBfq65/u6aA6VC7IQR7q78GrwiWWnImFz1Kisb2', 'Crew distribusi', 'default_user2.png', 3, 1),
(42, 'Kukuh', 8, 'Inspired27', 'Jl. Kendalsari 1 No. II-A', 'Malang', '+6282233034575', 'd.herdiawan.s@gmail.com', 'kukuh_inspired27', '$2y$10$.esEI0oZoxA9vvq40FwGzOySNQuqrc9qnD6YqI96rIeO0O0k6Ff9.', 'Crew distribusi', 'default_user2.png', 3, 1),
(43, 'Linggar', 0, '308 Absolute Unscared', 'Jl. Cendrawasih No. 23', 'Yogyakarta', '+62895390825210', 'd.herdiawan.s@gmail.com', 'linggar308', '$2y$10$SizMFAOPi1rbel4j/zj3dO7l4a9e5iVsATwUc3VGDFzHpe2VISz.y', 'Crew distribusi', 'default_user2.png', 3, 1),
(44, 'Luky', 23, 'Smith', 'Jl. Sultan Agung No. 27', 'Bandung', '+6282216555995', 'd.herdiawan.s@gmail.com', 'luky_smith', '$2y$10$ZBVrS1nmPPbwdGU9qK7Loe9tNssUUecZNWWN3Hv/jqpha1BKJLtYi', 'Crew distribusi', 'default_user2.png', 3, 1),
(45, 'Made', 13, 'Nimco', 'Jl. Delima No. 25 B', 'Yogyakarta', '+6282234221000', 'd.herdiawan.s@gmail.com', 'made_nimco', '$2y$10$IT/kW3LqlJ6h4WgQ4ejS8OGHUj/ckRzIHVl.HwuJk3GnA2HbN0xaa', 'Crew cabang toko utama', 'default_user2.png', 3, 1),
(46, 'Mame', 16, 'Premium Nation', 'Jl. Cempaka Putih No. 10 B', 'Jakarta Pusat', '+628995654359', 'd.herdiawan.s@gmail.com', 'mame_premium', '$2y$10$ZVI0LjCGXy801xCjgCJj9eTcefN7asYX99lqSXfPXMtxLpX.trhOm', 'Crew distribusi', 'default_user2.png', 3, 1),
(47, 'Marcell', 13, 'Nimco', 'Jl. Delima No. 25 B', 'Yogyakarta', '+6285700028628', 'd.herdiawan.s@gmail.com', 'marcell_nimco', '$2y$10$5nViL1gbDymCkYtp2rxx6.Jwegr7EP96a/z/XmWzslIlfHxjzL606', 'Crew cabang toko utama', 'default_user2.png', 3, 1),
(48, 'Mega', 10, 'Magnum Reload', 'Jl. Gamelan No. 21', 'Bandung', '+6285861182229', 'd.herdiawan.s@gmail.com', 'mega_magnum', '$2y$10$YeuFpkVoihReGVvvp5K6CuyNo/M93/nAl9.OEdp7laqQEk73nEfgO', 'Crew distribusi', 'default_user2.png', 3, 1),
(49, 'Muhlis', 24, 'Starcross', 'Jl. Cendrawasih No. 32A', 'Yogyakarta', '+6281392563731', 'd.herdiawan.s@gmail.com', 'muhlis_starcross', '$2y$10$pCnf9kOvAZtAnI42.u.FZ.wVIOFTaLNB4caXOulq.nHrhdWVxjOrC', 'Crew distribusi', 'default_user2.png', 3, 1),
(50, 'Panca', 15, 'Ouval Research', 'Jl. Tebet Utara Dalam No. 26', 'Jakarta', '+6282129398633', 'd.herdiawan.s@gmail.com', 'panca_ouval', '$2y$10$1Y2E78QgvHg66k83MDbr3.EHWuPflB4MFPBq.qkkfrD/VWUJT8LEe', 'Crew cabang toko Tebet', 'default_user2.png', 3, 1),
(51, 'Rere', 28, 'Thistime Brand', 'Ruko Libersa No. 16, Jl. Karang Satria', 'Bekasi', '+6281311306450', 'd.herdiawan.s@gmail.com', 'rere_thistime', '$2y$10$ZgNH841HqxiMm9jHOzMa2./c8JyLZZCdSxRBHVK6x01afahSbbma6', 'Crew cabang toko utama', 'default_user2.png', 3, 1),
(52, 'Resti', 23, 'Smith', 'Jl. Sultan Agung No. 27', 'Bandung', '+6281322990032', 'd.herdiawan.s@gmail.com', 'resti_smith', '$2y$10$x.HPT0.blG6PocqBy1pXKuGgFFH4jx69ihLbwuUuDNzAoLo3hZdiS', 'Crew distribusi', 'default_user2.png', 3, 1),
(53, 'Ridwan', 1, '308 Absolute Unscared', 'Jl. H. Agus Salim No. 116', 'Bekasi', '+6285376449544', 'd.herdiawan.s@gmail.com', 'ridwan308', '$2y$10$g8VKB9oW5iE8lc7DVuh9wuVXrkuF1IMkrdyVJqqF5ZGcEg4HL9ZuS', 'Crew cabang toko Bekasi', 'default_user2.png', 3, 1),
(54, 'Rizky', 18, 'Realizm87', 'Jl. Soekarno-Hatta No. 79', 'Kediri', '+6282142921598', 'd.herdiawan.s@gmail.com', 'rizky_realizm87', '$2y$10$T9r0ftINrEeH1LZX1jTFOOGmWfqUSMQzji09RvquNGlo3lW/jzFD2', 'Crew cabang toko Kediri', 'default_user2.png', 3, 1),
(55, 'Rizky', 15, 'Ouval Research', 'Jl. Bintaro Utama Blok J3 No. 13', 'Jakarta', '+6285875851518', 'd.herdiawan.s@gmail.com', 'rizky_ouval', '$2y$10$d2SNbSxBcLdZ0QLd8pusf.8Vx8dUICozKPzCI7HbyyEvJ6j4rf2Mm', 'Crew cabang toko Bintaro', 'default_user2.png', 3, 1),
(56, 'Roy', 8, 'Inspired27', 'Jl. Kendalsari 1 No. II-A', 'Malang', '+6289686975108', 'd.herdiawan.s@gmail.com', 'roy_inspired27', '$2y$10$CTbuf1jpvhea97Zqi6uwMOARicw3KgHZ9tvEnyOKesnaNq/WROB5S', 'Crew distribusi', 'default_user2.png', 3, 1),
(57, 'Suryatama', 3, 'Arena Experience', 'Jl. Ambon No. 9', 'Bandung', '+6287821196550', 'd.herdiawan.s@gmail.com', 'suryatama_arena', '$2y$10$d64Ve5jDDKSr.FBEHJqtqOgeWulM6hAjFDJQu3ylX4e/GGF05uYOu', 'Crew cabang toko utama', 'default_user2.png', 3, 1),
(58, 'Tian', 9, 'Issue', 'Jl. Bougenville Raya No. 31', 'Makassar', '+628114115210', 'd.herdiawan.s@gmail.com', 'tian_issue', '$2y$10$VS7WtdHtizlV1QDZDXyUZekj88541jRmLZg/7J3i8oKgUiw7l/fTK', 'Crew cabang toko Bougenville', 'default_user2.png', 3, 1),
(59, 'Tono', 20, 'Screamous', 'Jl. Trunojoyo', 'Bandung', '+6282130291652', 'd.herdiawan.s@gmail.com', 'tono_screamous', '$2y$10$AmNpa0c.8tMhf7sKIN4x/ups6a1T9iIgwyLp4I3lRYLeczrHX/SS.', 'Crew cabang toko Trunojoyo Bandung', 'default_user2.png', 3, 1),
(60, 'Uni', 22, 'Skymo', 'Jl. Raya Mayor Oking Jaya Atmaja No.63, Ciriung, Cibinong', 'Bogor', '+628561681380', 'd.herdiawan.s@gmail.com', 'uni_skymo', '$2y$10$tX8Xn8n12r/EBfuenbe7DOMTxWVBJU9L37t9jF9.erZRTtzeU6rRO', 'Crew cabang toko Cibinong', 'default_user2.png', 3, 1),
(61, 'Vian', 15, 'Ouval Research', 'Jl. Teuku Umar No.232, Denpasar', 'Bali', '+6281236307274', 'd.herdiawan.s@gmail.com', 'vian_ouval', '$2y$10$dLCGkdO/f6OpOsbi1lEKSuFd8Q2ga.JpZ/voEZeGz7oL0ygSr/NG2', 'Crew cabang toko Bali', 'default_user2.png', 3, 1),
(62, 'Vicky', 8, 'Inspired27', 'Jl. Kendalsari 1 No. II-A', 'Malang', '+628122773108', 'd.herdiawan.s@gmail.com', 'vicky_inspired27', '$2y$10$RU1oNWCH7ZqOEnlOzgTicuBtk6eJOxHaWxKK9LYx3dH8t4iJkOQmy', 'Crew distribusi', 'default_user2.png', 3, 1),
(63, 'Wawan', 25, 'Suicide Anthem', 'Jl. Jendral Sudirman No. 27D', 'Purwakarta', '+6287805359214', 'd.herdiawan.s@gmail.com', 'wawan_suicide', '$2y$10$TV78jmgQhmhUbwy5UVwTz.FJMCSdUVUY9wb8ZKQzTGVd546kRE0oG', 'Crew cabang toko Purwakarta', 'default_user2.png', 3, 0),
(64, 'Wika', 19, 'Rown Division', 'Jl. Adi Sucipto No. 1', 'Surakarta (Solo)', '+6288802788324', 'd.herdiawan.s@gmail.com', 'wika_rown', '$2y$10$ZNeU5ITgDmypTgL4Oh6hT.qzaH.5p/S.8M5ZozkUzkxzIMglES0o6', 'Crew distribusi', 'default_user2.png', 3, 0),
(66, 'Yahya', 13, 'Nimco', 'Jl. Srijaya Negara', 'Palembang', '+6281575197287', 'd.herdiawan.s@gmail.com', 'yahya_nimco', '$2y$10$gR7xFZc53.J4/cIz1wQgCewTt1sXgkCgqmdnda/qZqjfbkyQIfda.', 'Crew cabang toko Palembang', 'default_user2.png', 3, 0),
(67, 'Yuni', 21, 'Skaters', 'Jl. Sukagalih, Sukajadi', 'Bandung', '+6282129084941', 'd.herdiawan.s@gmail.com', 'yuni_skaters', '$2y$10$1B1WoY9N9pxUEPPHGMI1/ODmnZ5spn01uykwKB8Uy2.IMQCeGrzje', 'Crew distribusi', 'default_user2.png', 3, 0),
(68, 'Tia', 2, '17 Seven', 'Jl. Taman Galaxy Raya No. 11 B', 'Bekasi', '+6283822772112', 'd.herdiawan.s@gmail.com', 'tia17seven', '$2y$10$NY4I7ze/XCpK1c.lC3Q/gOBJG2RWoN8.sZxh7whwu3b55Vg5G3oGC', 'Crew distribusi', 'default_user2.png', 3, 1),
(69, 'Budi', 2, '17 Seven', 'Jl. Taman Galaxy Raya No. 11 B', 'Bekasi', '+6289671306396', 'd.herdiawan.s@gmail.com', 'budi17seven', '$2y$10$TIB8vg4hCxQDDzMI.qowg.EK2uSN8tCH06zVWi7MTrJZpNtSF2kLa', 'Crew cabang toko utama', 'default_user2.png', 3, 0),
(70, 'Mulki', 3, 'Arena Experience', 'Jl. Raya Purwakarta', 'Purwakarta', '+6282132345677', 'd.herdiawan.s@gmail.com', 'mulki_arena', '$2y$10$wXkZAAiTYaD1v0SU.rcCj.V2672PC4j.aQ3nLxeYJZQAd.mgpphZK', 'Crew cabang toko Purwakarta', 'default_user2.png', 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` int(11) NOT NULL,
  `subject` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `subject`) VALUES
(1, 'Data laporan selisih / tidak muncul'),
(2, 'Data stok selisih / tidak muncul'),
(3, 'Installasi'),
(4, 'Konfigurasi Dropbox'),
(5, 'Konfigurasi Printer'),
(6, 'Konfigurasi Raven'),
(7, 'Pembatalan transaksi / rollback'),
(8, 'Pembuatan berkas PDT'),
(9, 'Perbaikan nilai diskon'),
(10, 'Perbaikan nilai konsinyasi'),
(11, 'Perbaikan tata letak barcode / faktur'),
(12, 'Sistem tidak dapat diakses'),
(13, 'Sistem muncul notifikasi error'),
(14, 'Database suspect');

-- --------------------------------------------------------

--
-- Table structure for table `tickets`
--

CREATE TABLE `tickets` (
  `id` int(11) NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_by` varchar(128) NOT NULL,
  `contact_name` varchar(128) NOT NULL,
  `company_brand` varchar(128) NOT NULL,
  `contact_email` varchar(128) NOT NULL,
  `contact_image` varchar(128) NOT NULL,
  `type` varchar(128) NOT NULL,
  `module` varchar(128) NOT NULL,
  `subject` varchar(128) NOT NULL,
  `description` varchar(3520) NOT NULL,
  `priority` varchar(128) NOT NULL,
  `agent_name` varchar(128) NOT NULL,
  `start_time` datetime DEFAULT NULL,
  `finish_time` datetime DEFAULT NULL,
  `status` varchar(128) NOT NULL,
  `note` varchar(1024) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tickets`
--

INSERT INTO `tickets` (`id`, `date_created`, `date_updated`, `created_by`, `contact_name`, `company_brand`, `contact_email`, `contact_image`, `type`, `module`, `subject`, `description`, `priority`, `agent_name`, `start_time`, `finish_time`, `status`, `note`) VALUES
(1, '2020-01-24 09:30:45', '2020-02-04 15:43:23', 'Juan', 'Juan', 'Tendencies', 'd.herdiawan.s@gmail.com', 'default_user2.png', 'Remote', 'Distribution', 'Pembatalan transaksi / rollback', '<p>Hallo</p><p>Revota, Transaksi starcros lampung minta tolong dibatalkan<br>id : 1512277821</p><p>pass : dekatama</p>', 'Medium', 'Edu Ramdhana Putra', '2020-01-27 00:10:00', '2020-01-27 09:07:00', 'Resolved', ''),
(2, '2020-01-24 09:32:59', '2020-02-04 15:43:23', 'Ale', 'Adi', 'Bloods', 'd.herdiawan.s@gmail.com', 'default_user2.png', 'Remote', 'Shop', 'Installasi', '<p>sore, mas mau install revota lagi, toko tangerang baru beres install ulang windows,<br>1 522 206 695<br>fh3t96/bloods</p><p>anydesk<br>bldstanggerang-pc@ad<br>bloods2002</p><p>terimakasih</p>', 'Low', 'Decki Herdiawan Soepandi', '2020-01-26 11:09:00', '2020-01-26 16:31:00', 'Resolved', ''),
(3, '2020-01-24 09:39:35', '2020-02-04 15:43:23', 'Gandjar', 'Gandjar', 'Maternal Disaster', 'd.herdiawan.s@gmail.com', 'default_user2.png', 'Remote', 'Shop', 'Sistem muncul notifikasi error', '<p>Selamat pagi,</p><p>mau nanya nih knp yah sering banget RUNTIME ERROR DI DIST TRANSACTION HISTORY ONLINE SALES UNTUK PROSES APPROVE & SHIPPED.<br>ID TeamViewer: 1 432 543 767<br>Password: 43445s</p><p>Terima kasih</p>', 'Medium', 'Decki Herdiawan Soepandi', '2020-01-26 22:07:00', '2020-01-26 23:41:00', 'Resolved', ''),
(4, '2020-01-24 09:44:27', '2020-02-04 15:43:23', 'Gandjar', 'Gandjar', 'Maternal Disaster', 'd.herdiawan.s@gmail.com', 'default_user2.png', 'Remote', 'Distribution', 'Installasi', '<p>Selamat pagi,</p><p>mau request instalasi revota. berikut id & password revota<br>ID: 1 432 444 123<br>Password: fd4sq4</p><p>Terima kasih</p>', 'Low', 'Tri Untung Sutriyanto', '2020-01-26 22:10:00', '2020-01-26 23:39:00', 'Resolved', ''),
(5, '2020-01-24 09:49:16', '2020-02-04 15:43:23', 'Gandjar', 'Gandjar', 'Maternal Disaster', 'd.herdiawan.s@gmail.com', 'default_user2.png', 'Remote', 'Distribution', 'Installasi', '<p>Selamat sore, saya nia dari akunting house of smith mau minta tolong untuk instal software revota di pc saya. terimakasih :)</p><p>ID TeamViewer: 1 459 012 921<br>Password: fdfdwe</p><p><i><strong>Thanks and Regards</strong></i></p>', 'Low', 'Edu Ramdhana Putra', '2020-01-29 00:00:00', '2020-01-29 02:08:00', 'Resolved', ''),
(6, '2020-01-24 09:54:03', '2020-02-04 15:43:23', 'Gandjar', 'Gandjar', 'Maternal Disaster', 'd.herdiawan.s@gmail.com', 'default_user2.png', 'Remote', 'Distribution', 'Pembatalan transaksi / rollback', '<p>sore, maaf mas mau minta cancel delivery ada double input</p><p>no invoice<br>0301WDL20A16031<br>0301WDL20A16049</p><p>terima kasih</p>', 'Low', 'Tri Untung Sutriyanto', '2020-01-27 01:05:00', '2020-01-27 09:09:00', 'Resolved', ''),
(7, '2020-01-24 09:56:06', '2020-02-04 15:43:23', 'Gandjar', 'Gandjar', 'Maternal Disaster', 'd.herdiawan.s@gmail.com', 'default_user2.png', 'Remote', 'Expo', 'Pembuatan berkas PDT', '<p>Dear revota</p><p>Mau minta tolong PDT-kan all stock brand Mechajoy dan Papersmoot<br>ID TeamViewer: 1 458 430 120<br>Password: asu9s1</p>', 'Low', 'Edu Ramdhana Putra', '2020-01-26 23:44:00', '2020-01-28 17:58:00', 'Resolved', ''),
(8, '2020-01-24 10:01:18', '2020-02-04 15:43:23', 'Decki Herdiawan Soepandi', 'Resti', 'Smith', 'd.herdiawan.s@gmail.com', 'default_user2.png', 'Remote', 'Shop', 'Installasi', '<p>Dear Revota Team, </p><p>Berikut saya sampaikan untuk permintaan instal revota di komputer dengan ID ini, dikarenakan kemarin ganti Harddisk. Adapun ID team viewer nya adalah : </p><p>ID : 1 510 392 510<br>Pass : 148nnm</p><p>Regards,<br>NAzar</p>', 'Low', 'Tri Untung Sutriyanto', '2020-01-26 23:44:00', '2020-01-28 17:59:00', 'Resolved', ''),
(9, '2020-01-24 10:05:17', '2020-02-04 15:43:23', 'Decki Herdiawan Soepandi', 'Andry', 'Chambers', 'd.herdiawan.s@gmail.com', 'default_user2.png', 'Remote', 'Shop', 'Perbaikan nilai konsinyasi', '<p>selamat sore, berikut lampiran data brand yang salah konsinyasi dan discount di bulan desember  2019, mohon untuk di edit sesuai keterangan yang ada di kolom. terima kasih kami tunggu</p><p>Teamviewer :<br>ID : 808 490 654<br>Pass : n2jy68<br><br>Best regards,<br><strong>CV. CHAMBERS CELEBES</strong></p>', 'Low', 'Tri Untung Sutriyanto', '2020-01-27 09:07:00', '2020-01-28 18:00:00', 'Resolved', ''),
(10, '2020-01-25 09:59:48', '2020-02-04 15:43:23', 'Decki Herdiawan Soepandi', 'Linggar', '308 Absolute Unscared', 'd.herdiawan.s@gmail.com', 'default_user2.png', 'Remote', 'Shop', 'Installasi', '<p>Hallo Revota.</p><p>Mohon bantuannya untuk install sistem toko di komputer saya.<br>ID TeamViewer: 1 432 546 542<br>Password: fdsrew</p>', 'Low', 'Tri Untung Sutriyanto', '2020-01-27 09:10:00', '2020-01-28 18:02:00', 'Resolved', ''),
(12, '2020-01-27 01:01:55', '2020-02-04 15:43:23', 'Fafa', 'Fafa', 'Realizm87', 'd.herdiawan.s@gmail.com', 'default_user2.png', 'Remote', 'Shop', 'Perbaikan nilai konsinyasi', '<p>Hallo Revota.</p><p>Mohon bantuannya untuk perbaikan nilai konsinyasi lagi, brand ROUGHNECK1991 per bulan Januari harusnya konsinyasi 30%.<br>ID TeamViewer: 1 444 543 342<br>Password: dfd2f5</p><p>Terima kasih.</p>', 'Medium', 'Decki Herdiawan Soepandi', '2020-02-02 17:35:00', '0000-00-00 00:00:00', 'In Progress', ''),
(13, '2020-01-27 01:04:04', '2020-02-04 15:43:23', 'Fafa', 'Fafa', 'Realizm87', 'd.herdiawan.s@gmail.com', 'default_user2.png', 'On The Spot', 'Shop', 'Installasi', '<p>Hallo Revota.</p><p>Mohon bantuannya untuk install sistem Revota di komputer baru, Issue mau buka toko baru di Bandung.<br>ID TeamViewer 1: 1 446 432 641<br>Password: sf1g4g</p>', 'Medium', 'Decki Herdiawan Soepandi', '2020-02-03 07:33:00', '0000-00-00 00:00:00', 'In Progress', ''),
(14, '2020-01-27 01:10:55', '2020-02-04 15:43:23', 'Decki Herdiawan Soepandi', 'Baden', 'Smith', 'd.herdiawan.s@gmail.com', 'default_user2.png', 'Remote', 'Shop', 'Installasi', '<p>Hallo Mas Decki, mohon bantuannya untuk install ulang Revota di store Sultan, komputernya abis diinstall ulang.</p><p>ID TeamViewer: 1 546 345 345<br>Password: ljsfdk2</p><p>Terima kasih Mas Decki.</p>', 'Medium', 'Decki Herdiawan Soepandi', '2020-01-28 18:07:00', '2020-01-29 02:10:00', 'Resolved', ''),
(15, '2020-01-27 01:13:00', '2020-02-04 15:43:23', 'Fafa', 'Fafa', 'Realizm87', 'd.herdiawan.s@gmail.com', 'default_user2.png', 'Remote', 'Online', 'Database suspect', '<p>Hallo Revota.</p><p>Tolong dicek, ini sistem Revota ga bisa dibuka.<br>ID TeamViewer: 1 432 432 423<br>Password: fds542</p>', 'Urgent', 'Edu Ramdhana Putra', '2020-01-27 09:11:00', '2020-01-28 18:03:00', 'Resolved', ''),
(16, '2020-01-27 01:14:47', '2020-02-04 15:43:23', 'Fafa', 'Fafa', 'Realizm87', 'd.herdiawan.s@gmail.com', 'default_user2.png', 'Visit', 'Distribution', 'Installasi', '<p>Hallo Revota.</p><p>Mohon bantuannya untuk berkunjung ke lokasi, ada komputer yang harus diinstall ulang dan ada yang ingin dibicarakan juga.<br>Ditunggu konfirmasinya.</p><p>Terima kasih.</p>', 'Medium', 'Tri Untung Sutriyanto', '2020-02-03 07:33:00', '2020-02-04 19:01:31', 'Resolved', ''),
(17, '2020-01-27 01:15:47', '2020-02-04 15:43:23', 'Fafa', 'Fafa', 'Realizm87', 'd.herdiawan.s@gmail.com', 'default_user2.png', 'Remote', 'Expo', 'Pembuatan berkas PDT', '<p>Hallo.</p><p>Tolong buatkan file PDT ya.<br>ID TeamViewer: 1 434 668 293<br>Password: fjadtid</p>', 'Low', 'Edu Ramdhana Putra', '2020-02-03 07:34:00', '2020-02-04 18:52:19', 'Resolved', ''),
(18, '2020-02-03 07:42:37', '2020-02-04 15:43:23', 'Ale', 'Ale', 'Bloods', 'd.herdiawan.s@gmail.com', 'default_user2.png', 'Remote', 'Expo', 'Sistem tidak dapat diakses', '<p>Hallo Revota.</p><p>Mohon bantuannya, sistem Revota Expo tidak bisa dibuka.</p><p>Terima kasih.</p>', 'Low', 'Decki Herdiawan Soepandi', '2020-02-03 10:58:00', '0000-00-00 00:00:00', 'In Progress', ''),
(19, '2020-02-03 07:47:50', '2020-02-04 15:43:23', 'Ale', 'Ale', 'Bloods', 'd.herdiawan.s@gmail.com', 'default_user2.png', 'On The Spot', 'Online', 'Installasi', '<p>Hallo Revota.</p><p>Mohon bantuannya untuk melakukan installasi sistem Revota Online di 5 komputer kami.<br>Komputer masih tersimpan di kantor pusat.</p><p>Demikian, Terima kasih.</p>', 'High', 'Decki Herdiawan Soepandi', '2020-02-03 11:18:00', '0000-00-00 00:00:00', 'In Progress', ''),
(20, '2020-02-03 07:52:30', '2020-02-04 15:43:23', 'Decki Herdiawan Soepandi', 'Angling', 'Rown Division', 'd.herdiawan.s@gmail.com', 'default_user2.png', 'Remote', 'Distribution', 'Database suspect', '<p>Hallo Revota.</p><p>Mohon bantuannya, sistem Revota server distribusi tidak bisa dibuka.<br>Sebelumnya sempet mati lampu juga, mohon dicek ya.</p><p>Terima kasih.</p>', 'Urgent', 'Tri Untung Sutriyanto', '2020-02-03 07:51:00', '0000-00-00 00:00:00', 'In Progress', ''),
(21, '2020-02-03 07:54:58', '2020-02-04 15:43:23', 'Fitri', 'Fitri', 'Skaters', 'd.herdiawan.s@gmail.com', 'default_user2.png', 'Remote', 'Shop', 'Pembuatan berkas PDT', '<p>Selamat pagi.</p><p>Tolong bantu buatkan file PDT return all stock.<br>ID TeamViewer: 1 434 764 789<br>Password: fds54i</p>', 'Medium', 'Tri Untung Sutriyanto', '2020-02-04 14:18:40', '0000-00-00 00:00:00', 'In Progress', ''),
(22, '2020-02-03 07:57:37', '2020-02-04 16:53:57', 'Mega', 'Mega', 'Magnum Reload', 'd.herdiawan.s@gmail.com', 'default_user2.png', 'Visit', 'Expo', 'Perbaikan tata letak barcode / faktur', '<p>Selamat pagi.</p><p>Tolong bantu setting layout barcode, printer-nya ganti soalnya.<br>ID TeamViewer: 1 555 754 778<br>Password: als541</p>', 'Medium', 'Edu Ramdhana Putra', '2020-02-04 23:53:57', NULL, 'In Progress', ''),
(24, '2020-02-03 08:07:11', '2020-02-04 15:43:23', 'Mulki', 'Mulki', 'Arena Experience', 'd.herdiawan.s@gmail.com', 'default_user2.png', 'Remote', 'Expo', 'Sistem muncul notifikasi error', '<p>Selamat pagi Revota.</p><p>Mohon bantuannya, sistem Revota kami muncul notifikasi error di fitur kasirnya, tolong dicek ya.<br>ID AnyDesk: 432 543 564<br>Password: arena@ad</p><p>Terima kasih.</p>', 'Low', '---', NULL, NULL, 'Open', NULL),
(25, '2020-02-03 08:17:16', '2020-02-04 15:43:23', 'Helmi', 'Helmi', 'Nimco', 'd.herdiawan.s@gmail.com', 'default_user2.png', 'Remote', 'Distribution', 'Perbaikan nilai diskon', '<p>Selamat pagi Revota.</p><p>Tolong perbaiki nilai diskon data barang yang baru saya input barusan, diskonnya salah.<br>ID TeamViewer: 1 432 666 531<br>Password: fjl127</p><p>Terima kasih.</p>', 'Medium', '---', NULL, NULL, 'Open', NULL),
(26, '2020-02-03 08:20:48', '2020-02-04 15:43:23', 'Suryatama', 'Suryatama', 'Arena Experience', 'd.herdiawan.s@gmail.com', 'default_user2.png', 'Remote', 'Shop', 'Konfigurasi Dropbox', '<p>Selamat pagi Revota.</p><p>Dropbox di komputer server toko Trunojoyo tidak aktif, mohon dicek.</p><p>Terima kasih.</p>', 'Medium', '---', NULL, NULL, 'Open', NULL),
(27, '2020-02-03 08:23:10', '2020-02-04 15:43:23', 'Suryatama', 'Suryatama', 'Arena Experience', 'd.herdiawan.s@gmail.com', 'default_user2.png', 'Remote', 'Online', 'Konfigurasi Raven', '<p>Selamat pagi Revota.</p><p>Pengiriman report Raven tidak sampai ke email, mohon dicek.</p><p>Terima kasih.</p>', 'Medium', '---', NULL, NULL, 'Open', NULL),
(28, '2020-02-03 11:01:09', '2020-02-04 15:43:23', 'Suryatama', 'Suryatama', 'Arena Experience', 'd.herdiawan.s@gmail.com', 'default_user2.png', 'On The Spot', 'Expo', 'Installasi', '<p>Hallo.</p><p>Mohon bantuannya untuk install ulang sistem Revota.</p><p>Terima kasih.</p>', 'Medium', '---', NULL, NULL, 'Open', NULL),
(29, '2020-02-04 11:12:28', '2020-02-04 15:43:23', 'Fafa', 'Fafa', 'Realizm87', 'd.herdiawan.s@gmail.com', 'default_user2.png', 'Remote', 'Expo', 'Installasi', '<p>Selamat siang.</p><p>Tolong bantu install ulang sistem Revota.</p><p>Terima kasih.</p>', '---', '---', NULL, NULL, 'Open', NULL),
(30, '2020-02-04 18:31:36', '2020-02-04 16:57:26', 'Edu Ramdhana Putra', 'Aditya', 'Nimco', 'd.herdiawan.s@gmail.com', 'default_user2.png', 'Remote', 'Expo', 'Konfigurasi Dropbox', '<p>Hallo.</p><p>Dropbox tidak aktif, mohon diperbaiki.</p><p>Terima kasih.</p>', 'Medium', 'Edu Ramdhana Putra', '2020-02-04 18:46:55', '2020-02-04 23:57:26', 'Resolved', ''),
(31, '2020-02-05 00:58:05', '2020-02-04 17:58:05', 'Fafa', 'Fafa', 'Realizm87', 'd.herdiawan.s@gmail.com', 'default_user2.png', 'Remote', 'Distribution', 'Konfigurasi Printer', '<p>Hallo.</p><p>Tolong bantuannya untuk setting ulang printer barcode di komputer server distribusi, printer-nya tiba-tiba ga bisa dipake.</p><p>Terima kasih.</p>', '---', '---', NULL, NULL, 'Open', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(1) NOT NULL,
  `role_id` int(1) NOT NULL,
  `menu_id` int(1) NOT NULL,
  `lists_menu_id` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`, `lists_menu_id`) VALUES
(1, 1, 1, 1),
(2, 1, 2, 2),
(3, 1, 3, 3),
(4, 1, 4, 0),
(5, 1, 5, 0),
(6, 2, 4, 0),
(7, 2, 5, 0),
(8, 3, 5, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'Staff'),
(3, 'Client');

-- --------------------------------------------------------

--
-- Table structure for table `user_token`
--

CREATE TABLE `user_token` (
  `id` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `username` varchar(128) NOT NULL,
  `token` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_token`
--

INSERT INTO `user_token` (`id`, `email`, `username`, `token`) VALUES
(60, 'd.herdiawan.s@gmail.com', 'wawan_suicide', 'peZzkWVCJehsgFsV5v4RdDS7GIEmp5inpm16vRt/yNU='),
(61, 'd.herdiawan.s@gmail.com', 'wika_rown', 'GJs7EEzmyoQbd98GnuZlyGhLVkK6bg1W0rU9nEI1D5Y='),
(63, 'd.herdiawan.s@gmail.com', 'yahya_nimco', 'I4uSVOIvYlSKOr6akmE2wDwgHf/eDo7kxZ88lQCFPag='),
(64, 'd.herdiawan.s@gmail.com', 'yuni_skaters', '+Uukjn0l054q691gSQ3Jrsa6uLaRRRUQyK3u/N11sJc='),
(65, 'd.herdiawan.s@gmail.com', 'budi17seven', '78tkAQ7VcCB0s01w74nmU9Tk085e7Cacyj+BmDi9SeM=');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agents`
--
ALTER TABLE `agents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `agent_lists_menu`
--
ALTER TABLE `agent_lists_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `agent_menu`
--
ALTER TABLE `agent_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tickets`
--
ALTER TABLE `tickets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_token`
--
ALTER TABLE `user_token`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agents`
--
ALTER TABLE `agents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `agent_lists_menu`
--
ALTER TABLE `agent_lists_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `agent_menu`
--
ALTER TABLE `agent_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;
--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `tickets`
--
ALTER TABLE `tickets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user_token`
--
ALTER TABLE `user_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 13, 2021 at 09:56 AM
-- Server version: 10.3.32-MariaDB-log-cll-lve
-- PHP Version: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `selflov1_alpro`
--

-- --------------------------------------------------------

--
-- Table structure for table `informasi`
--

CREATE TABLE `informasi` (
  `id` int(11) NOT NULL,
  `matkul` varchar(100) NOT NULL,
  `judul` varchar(500) NOT NULL,
  `deadline` varchar(30) NOT NULL,
  `deskripsi` varchar(500) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `informasi`
--

INSERT INTO `informasi` (`id`, `matkul`, `judul`, `deadline`, `deskripsi`, `date_created`) VALUES
(20, 'Matematika Diskrit', 'Quiz 2', '10 Desember 2021', 'Materi Peluang diskrit & Relasi Rekrusif', 1638719410),
(21, 'Matematika Diskrit', 'UAS Matdis', '13 Desember 2021', 'Materi Graph, Pohon & Aljabar Boolean', 1638794881),
(22, 'Dasar-Dasar Pemrograman', 'Mengulas Aplikasi Game', 'Desember 2021', 'Tugas kelompok menyusun pseudecode dan flowchart dari sebuah aplikasi game yang sudah ditentukan.', 1638795185);

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nim` char(10) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `nim`, `jurusan`, `email`) VALUES
(4, 'Putri', '11212', 'IPA', 'putri@gmail.com'),
(7, 'putri', '2112', 'Informatika', 'saddadnabbil@gmail.com'),
(8, 'Putri', '3333', 'Informatika', 'nabbilsaddad@gmail.com'),
(9, 'sdfasfafasdfasdfas', '1213', 'sdfasdfsf', 'maghfinugraha@gmail.com'),
(10, 'sdfasfwefawfwaf', '232323', 'Informatika', 'saddadnabbil@gmail.com'),
(11, 'awfefawfaw', '12112', 'Informatika', 'saddadnabbil@gmail.com'),
(12, 'safsfasdf', '11', 'asdadad', 'saddadnabbil@gmail.com'),
(13, 'saddad nabbil', '121212', 'Informatika', 'saddadnabbil@gmail.com'),
(14, 'fgdfrgdfgd', '121212', 'Informatika', 'saddadnabbil@gmail.com'),
(15, 'saddad nabbil', '21212', 'Informatika', 'saddadnabbil@gmail.com'),
(16, 'fbgfbfb', '211212', 'Informatika', 'nabbilsaddad@gmail.com'),
(17, 'gfnfnghhngh', '312313', 'Informatika', 'saddadnabbil@gmail.com'),
(18, 'hgngng', '435345', 'Informatika', 'saddadnabbil@gmail.com'),
(19, 'fgbfgnfgn', '1231213', 'Informatika', 'saddadnabbil@gmail.com'),
(20, 'saddad nabbil', '423422', 'Informatika', 'saddadnabbil@gmail.com'),
(21, '324242', '42324', 'Informatika', 'saddadnabbil@gmail.com'),
(22, 'saddad nabbil', '2112513', 'Informatika', 'saddadnabbil@gmail.com'),
(23, '2', '333', 'Informatika', 'saddadnabbil@gmail.com'),
(24, 'YOANE ERMA QORINA NUFUS', '123', 'Teknik Informatika', 'agadoang@gmail.com'),
(25, 'saddadnabbil', '123', 'informatika', 'saddadnabbil@gmail.com'),
(26, 'abeng', '123', 'Wiwiwieiwiiw', 'saddadnabbil@gmail.com'),
(27, 'Abc', '111', 'Informatika', 'Abc@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `nim` char(10) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `nohp` varchar(100) NOT NULL,
  `alamat` varchar(75) NOT NULL,
  `tanggal_lahir` varchar(150) NOT NULL,
  `instagram` varchar(100) NOT NULL,
  `twitter` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `password` varchar(250) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `nim`, `jurusan`, `nohp`, `alamat`, `tanggal_lahir`, `instagram`, `twitter`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(59, 'Saddad Nabbil', '3337210001', 'Teknik Informatika', '08171779790222', 'Kec. Rangkasbitung, Kab. Lebak', 'Lebak, 9 Mei 2003', 'raditya_dika', 'ssadada', 'saddadnabbil@gmail.com', 'IMG_20211127_084558_387.jpg', '$2y$10$jcY4bAEAwTYWMTJNh9e2nutY9MICi1hr2MZDJcajJM11hu9Kcr2cW', 1, 1, 1638385735),
(67, 'Hafiz Ibrahim', '3337210012', 'Informatika', '087874711053', 'Aweh', '11 Juli 2003', 'hafizibrahimm_', '-', 'hafizibrahim1173@gmail.com', 'Beruang.png', '$2y$10$SBrl6Y0zDB4kN/oIc.P9K.HPi/YE19FeMi9IPt3I0KZGLe2w1lz3m', 1, 1, 1638687711),
(68, 'Alfhiyana', '3337210032', 'Informatika', '08101103101103', 'Tangerang', 'Hari Pahlawan', 'amorazl_', 'ntsana', 'alfhiyana11@gmail.com', '—Pngtree—continuous_line_drawing_vector_of_4099561.png', '$2y$10$kqmDvoe.lCB.EwrXeZLw8eJkhSrfXLsawK8yYT53gv9oOkVrR9LdS', 1, 1, 1638705009),
(69, 'Nur Ali Arfan', '3337210033', '', '', '', '', '', '', 'nuraliarfan13@gmail.com', 'default.jpg', '$2y$10$h0HpWJ7I2I.CRTnU7U3TFOGg5d0BVAMNti56FXlEq.YLAp2SykrJu', 1, 1, 1638796712),
(72, 'Rifqi Fahrezi', '3337210021', 'Informatika', '085156670508', 'Seoul, Korea', '27 Mei 2003', 'rifqi_fhrz27', 'kepo', 'rifqifahrezi310@gmail.com', 'default.jpg', '$2y$10$8IbVK0.cc4/2TGc4tfDMX.zzSovbQexSnZLN52DU0Y46tFYE/yQRe', 2, 1, 1638843864),
(76, 'ridho', '3337210019', '', '', '', '', '', '', 'ridhomauludin252@gmail.com', 'default.jpg', '$2y$10$F6leI2BgAXHCB1982SlLq.UR0JcHZcW0Pw6fT4cDwVJ0pzO0pE8nW', 2, 0, 1638845214),
(78, 'Dhafin Rizky Aulia', '3337210045', '', '', '', '', '', '', '3337210045@untirta.ac.id', 'default.jpg', '$2y$10$yHf1OAjsnfx79bv6.qsDQ.n8bg54q1uSorfVYA0cRr7JyAahzvqWm', 2, 1, 1638847338),
(83, 'fadel najmi adliansyah', '3337210008', '', '', '', '', '', '', 'fadelnajmiadliansyah@gmail.com', 'default.jpg', '$2y$10$hbUxJkM0yBp4VRcc7RnP4.4PR3Tu/mDqJVdmECRzoJo81GVrO.QPa', 2, 0, 1638874825),
(84, 'Dhimas Tyas Granadi', '3337210028', '', '', '', '', '', '', 'dhimasscout@gmail.com', 'default.jpg', '$2y$10$slIAhs4j.5UFM.jXhx/ZSO3/ZqvvGkvaxfm6ZknaCeCPpCE.OMsVW', 2, 1, 1638874830),
(85, 'Andi Surya Priyadi', '3337210017', 'Informatika', '085693418860', 'Pandeglang, Banten', '03 april 2003', 'andiiiii.sp', '-', '3337210017@untirta.ac.id', 'default.jpg', '$2y$10$Vqvlh21MEmkRyF2NIXZuqOd1RfXPOEef/jVyNuRSqCtJ.KsTkkhfu', 2, 1, 1638874896),
(86, 'Irsyad Hadi Annafi', '3337210034', '', '', '', '', '', '', 'irsyad.hadiannafi@gmail.com', 'default.jpg', '$2y$10$TSHWyVlGTw7Gg9fZ3lNnmundHb7wBKC/Isw3YxFTQIVsAXP/hlkty', 2, 1, 1638874957),
(87, 'Alya Fauzia Azizah', '3337210054', '', '', '', '', '', '', 'bluepaint2.14@gmail.com', 'default.jpg', '$2y$10$wdfCywZfkxp.qo.UlUCLZuymbGnq2mYQ4yFjKJOw3DRfHrGZOXtKu', 2, 0, 1638875031),
(88, 'Valdy Ramadhan', '3337210027', 'Informatika', '08380979892', 'Dimensi Lain', '2002-11-29', 'vforvaldy', 'vforvaldy', 'lyxiebyte@gmail.com', 'default.jpg', '$2y$10$/HZADzvmZCUP0KMJb7pV9O/ip86HiqeDK9E/1vtuSQs/d6kBaULiO', 2, 1, 1638875166),
(89, 'sultan', '3337210046', '', '', '', '', '', '', 'sultannfaturahman@gmail.com', 'default.jpg', '$2y$10$C5K.hRBSLFwFtBGIdFLVxOrm7BNLsznncFTg6kuQpZlXnLbdQKUSq', 2, 1, 1638875326),
(90, 'Zahrani Anindita', '3337210048', '', '', '', '', '', '', 'zahranindita67@gmail.com', 'default.jpg', '$2y$10$0TbcN68afDbwWEmKJtFvdeSMGJoBIxQUuq0anCYE/ocIN/dHK1Ose', 2, 1, 1638875343),
(91, 'Ahmad Nurdin', '3337210052', '', '', '', '', '', '', 'nurnurdinnur11@gmail.com', 'default.jpg', '$2y$10$0aR3YjGr928EyHEnolresOAyAqjVmf0u7Fiy7iPaL4agXpukiBlxq', 2, 1, 1638875857),
(92, 'Iqbal Maftuha Fauzy', '3337210056', '', '', '', '', '', '', '3337210056@untirta.ac.id', 'default.jpg', '$2y$10$kNVZTI6Ccz.dGz7.M7i/aed8JaoCVnM2wuPgEGYPYJEZJZi.hFzvy', 2, 0, 1638875879),
(93, 'Rijal Fauzi', '3337210003', '', '', '', '', '', '', '3337210003@untirta.ac.id', 'default.jpg', '$2y$10$X7QH6vSTpEPcdcx.p0OjQe3s1NKLcf2GLNCPMtlyVyIdiUxz5zOqy', 2, 0, 1638876295),
(94, 'Ryan Dedi Pratama', '3337210062', '', '', '', '', '', '', 'shiteham@gmail.com', 'default.jpg', '$2y$10$HN8da55HbIqYsVCF6P5Ab.IhmdYbiRNgnTUvPo/8luPf5URvQ5vUq', 2, 1, 1638876724),
(95, 'King Naufal', '3337210037', 'Informatika', '080000', 'Konoha', '29 februari', 'Gawrgura', 'Gawrgura', 'naufalnasrullahh@gmail.com', 'images(4).jpg', '$2y$10$iTSIwAergdetUVVAG.F3Du178qX5MZPZC4VKIaJ07WK9WivS9foM.', 2, 1, 1638877526),
(96, 'Nada Salsabila', '3337210016', '', '', '', '', '', '', 'daslbv@gmail.com', 'default.jpg', '$2y$10$i8bZKCFUVn5LO4A3JZBb.OAV97mSw07GUoGSG2oUax5gpH5A5EqIK', 2, 0, 1638892557),
(98, 'Saddad Nabbil', '3337210001', 'Teknik Informatika', '081717797907', 'Bukit Narimbang Asri Blok A10 / 03 Rangkasbitung. Banten', 'Lebak, 9 Mei 2003', 'abeen.g', 'abeen.g', 'nabbilsaddad@gmail.com', 'default.jpg', '$2y$10$F5jnBdIhJWwF1gGDQ4IE7ulh7cv/ibd9gylM4utWSddOsiEY/.vMm', 2, 1, 1638962021),
(99, 'Mahasiswa1', '333333333', 'Informatika', '', '', '', '', '', 'test@gmail.com', '', '', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Admin'),
(2, 'User');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'Member');

-- --------------------------------------------------------

--
-- Table structure for table `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `url` varchar(100) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `is_active`) VALUES
(1, 1, 'Home', 'admin', 1),
(2, 2, 'Home', 'user', 1),
(3, 2, 'Information', 'user_informasi', 1),
(4, 1, 'Information', 'admin_informasi', 1),
(6, 2, 'Mahasiswa', 'user_mahasiswa', 1),
(7, 1, 'Mahasiswa', 'mahasiswa', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_token`
--

CREATE TABLE `user_token` (
  `id` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `token` varchar(128) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_token`
--

INSERT INTO `user_token` (`id`, `email`, `token`, `date_created`) VALUES
(25, 'test@inibae.com', 'AHiewKSQDyA+6N4PdCnT2YIKGWteRprLnrpvgGIKV4c=', 1638387142),
(26, 'email@agaprasetya.com', '9sIGQVFupa3XQcM1c5tySIbqfIZHMfX64GKSRik9ci4=', 1638401472),
(27, 'alditarijal@gmail.com', 'eP/+k8MlsZyoMk6Bgkn+FxX1jKSJBUdAXrnf+Pipbig=', 1638424196),
(34, 'agapublisher@gmail.com', 'GoMWcv2tX63P0Yzn/jqkzbgw7jrt7aWo94wN/bEHjCA=', 1638843715),
(39, 'kurokurokun7@gmail.com', 'a8gOIQ8OzgOWN+/Xvg9NkFhc1HCq3vnuDEUSjTWYn8g=', 1638844132),
(40, 'ridhomauludin252@gmail.com', 'VcT4sL+6FRU20VUt7+vTMV1gFWwPdp7F+IbTdq/knmk=', 1638845214),
(43, 'dhafinrizkyaulia@gmail.com', 'x8GLB8bzY/bCxhZxwiJF54Aic3JEh8rdx77a0bvX1wo=', 1638847620),
(46, 'alditarijal@gmail.com', 'lhQqW8n8M3lxoBrZ37gmZ+tBSiyWuYBhVfBbm6W8apI=', 1638858296),
(47, 'fadelnajmiadliansyah@gmail.com', 'mUB3C/bFvLmtGFb2FLpXN2VxVwb8evY52u+1DZqdtLA=', 1638874825),
(51, 'bluepaint2.14@gmail.com', 'lO6yY0Et1sSDkposrixcp3laVKpTSfanWSCOpUQ42lI=', 1638875031),
(56, '3337210056@untirta.ac.id', 'dwobDkSInsHLysPXtqTYmgNHgo8GYk+g3xriQICPAtc=', 1638875879),
(57, '3337210003@untirta.ac.id', 'qyTmrvLKs0F/SoIVzOPIeM1qWY+3gaykovDOldgQMjY=', 1638876295),
(60, 'daslbv@gmail.com', 'n9VRshiWpbj5CQA+zpVi5dt4FqM3ONH+AtHlST1F0KA=', 1638892557);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `informasi`
--
ALTER TABLE `informasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
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
-- AUTO_INCREMENT for table `informasi`
--
ALTER TABLE `informasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user_token`
--
ALTER TABLE `user_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD CONSTRAINT `user_menu_ibfk_1` FOREIGN KEY (`id`) REFERENCES `user_sub_menu` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `user_role`
--
ALTER TABLE `user_role`
  ADD CONSTRAINT `user_role_ibfk_1` FOREIGN KEY (`id`) REFERENCES `user_menu` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

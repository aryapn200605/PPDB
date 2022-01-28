-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2022 at 03:34 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pendaftaran`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_pribadi`
--

CREATE TABLE `data_pribadi` (
  `id_peserta` varchar(50) NOT NULL,
  `user` varchar(200) NOT NULL,
  `NIK` bigint(50) NOT NULL,
  `nama_lengkap` varchar(200) NOT NULL,
  `jenis_kelamin` varchar(50) NOT NULL,
  `tempat_lahir` varchar(200) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `agama` varchar(50) NOT NULL,
  `cita_cita` varchar(200) NOT NULL,
  `jumlah_saudara` int(50) NOT NULL,
  `berat_badan` decimal(50,0) NOT NULL,
  `tinggi_badan` decimal(50,0) NOT NULL,
  `golongan_darah` char(5) NOT NULL,
  `alamat` text NOT NULL,
  `rt` int(11) NOT NULL,
  `rw` int(11) NOT NULL,
  `kelurahan` varchar(200) NOT NULL,
  `kecamatan` varchar(200) NOT NULL,
  `kota` varchar(200) NOT NULL,
  `provinsi` varchar(200) NOT NULL,
  `kode_pos` int(11) NOT NULL,
  `telepon` int(11) NOT NULL,
  `tinggal_dengan` varchar(200) NOT NULL,
  `nama_ayah` varchar(200) NOT NULL,
  `pekerjaan_ayah` varchar(200) NOT NULL,
  `nama_ibu` varchar(200) NOT NULL,
  `pekerjaan_ibu` varchar(200) NOT NULL,
  `nama_sekolah` varchar(50) NOT NULL,
  `foto1` varchar(99) NOT NULL,
  `foto2` varchar(99) NOT NULL,
  `foto3` varchar(99) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_pribadi`
--

INSERT INTO `data_pribadi` (`id_peserta`, `user`, `NIK`, `nama_lengkap`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `agama`, `cita_cita`, `jumlah_saudara`, `berat_badan`, `tinggi_badan`, `golongan_darah`, `alamat`, `rt`, `rw`, `kelurahan`, `kecamatan`, `kota`, `provinsi`, `kode_pos`, `telepon`, `tinggal_dengan`, `nama_ayah`, `pekerjaan_ayah`, `nama_ibu`, `pekerjaan_ibu`, `nama_sekolah`, `foto1`, `foto2`, `foto3`, `status`) VALUES
('08/01/22|07:10:49AM', 'user@gmail.com', 2147483647, 'arya putra nugroho', 'Laki - laki', 'sukabumi', '2005-06-05', 'Islam', 'programmer', 4, '54', '174', 'A', 'Unitex Jl.Melati 5', 2, 6, 'sindangrasa', 'tajur', 'bogor', 'jawa barat', 14077, 2147483647, 'Asrama', 'eddy', 'pelaut', 'susan', 'rumah tangga', 'SMP Al-Musthafawiyah', 'android.png', 'atom.png', 'css.png', 'Diterima'),
('08/01/22|07:23:05AM', 'dhafin@gmail.com', 98978787, 'M.Dhafin Al-Kindy', 'Laki - laki', 'Bandar Lampung', '2005-12-02', 'Islam', 'Koruptor', 5, '69', '177', 'B', 'Gg.Gandaria No 31', 2, 11, 'Sawangan lama', 'Sawangan', 'Depok', 'Jawa barat', 16511, 2147483647, 'Orang Tua', 'Agus Cahyono', 'Politikus', 'Susi Ayuni', 'Ibu Rumah Tangga', 'Smpn 25 Depok', '—Pngtree—hacker coding with a keyboard_5426760.png', 'stand-by.png', 'css.png', 'Diterima'),
('09/01/22|08:15:47AM', 'aryapn@gmail.com', 9866765, 'Arya', 'Laki - laki', 'Sukabumi', '2005-06-05', 'Islam', 'Developer', 4, '54', '174', 'A', 'Unitex', 2, 6, 'Sindangrasa', 'Tajur', 'Bogor', 'Jawa Barat', 14077, 2147483647, 'Orang Tua', 'Eddy', 'Pelaut', 'Susan', 'Rumah Tangga', 'SMP', '-18.png', 'after-effects.png', 'android.png', 'Diterima');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `nama_lengkap` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`nama_lengkap`, `username`, `password`, `status`) VALUES
('arya', 'admin@gmail.com', '12345', 'admin'),
('Arya Putra Nugroho', 'aryapn@gmail.com', '12345', 'user'),
('Dhafin', 'dhafin@gmail.com', '12345', 'user'),
('user', 'user@gmail.com', '12345', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_pribadi`
--
ALTER TABLE `data_pribadi`
  ADD PRIMARY KEY (`id_peserta`),
  ADD KEY `user` (`user`),
  ADD KEY `user_2` (`user`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `data_pribadi`
--
ALTER TABLE `data_pribadi`
  ADD CONSTRAINT `data_pribadi_ibfk_1` FOREIGN KEY (`user`) REFERENCES `user` (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

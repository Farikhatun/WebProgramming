-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 20, 2021 at 05:59 AM
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
-- Database: `ppdbonline`
--

-- --------------------------------------------------------

--
-- Table structure for table `table_siswa`
--

CREATE TABLE `table_siswa` (
  `nis` int(11) NOT NULL,
  `namaSiswa` varchar(255) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `tmptLahir` varchar(255) NOT NULL,
  `tglLahir` date NOT NULL,
  `jenisKelamin` enum('perempuan','laki_laki') NOT NULL,
  `alamat` text NOT NULL,
  `telp` varchar(12) NOT NULL,
  `sekolahAsal` varchar(255) NOT NULL,
  `hobi` text NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `table_siswa`
--

INSERT INTO `table_siswa` (`nis`, `namaSiswa`, `nik`, `tmptLahir`, `tglLahir`, `jenisKelamin`, `alamat`, `telp`, `sekolahAsal`, `hobi`, `email`) VALUES
(12344, 'siswa 2', '123456788', 'bali ', '2002-01-01', 'laki_laki', 'jalan in aja deh', '081222221111', 'smp disini senang disana senang', 'makan', 'siswa2@gmail.com'),
(12345, 'siswa 1', '123456789', 'jakarta', '2001-07-07', 'perempuan', 'jl suka suka 1', '087788887777', 'smp suka bodoh', 'tidur', 'siswa1@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `table_user`
--

CREATE TABLE `table_user` (
  `id_user` int(11) NOT NULL,
  `nis` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `table_siswa`
--
ALTER TABLE `table_siswa`
  ADD PRIMARY KEY (`nis`);

--
-- Indexes for table `table_user`
--
ALTER TABLE `table_user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `username` (`username`),
  ADD KEY `nis` (`nis`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `table_siswa`
--
ALTER TABLE `table_siswa`
  MODIFY `nis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12346;

--
-- AUTO_INCREMENT for table `table_user`
--
ALTER TABLE `table_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `table_user`
--
ALTER TABLE `table_user`
  ADD CONSTRAINT `table_user_ibfk_1` FOREIGN KEY (`nis`) REFERENCES `table_siswa` (`nis`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

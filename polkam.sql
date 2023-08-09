-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 09, 2023 at 01:37 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `polkam`
--

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `id_dosen` int(11) NOT NULL,
  `nrp` varchar(45) NOT NULL,
  `nidn` varchar(45) NOT NULL,
  `nama_lengkap` varchar(45) NOT NULL,
  `gelar` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `gender` set('L','P') NOT NULL,
  `pendidikan_terakhir` varchar(45) NOT NULL,
  `foto` varchar(45) NOT NULL,
  `kode_prodi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` int(11) NOT NULL,
  `nama_kelas` varchar(45) NOT NULL,
  `kode_prodi` int(11) NOT NULL,
  `id_dosen` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id_mahasiswa` int(11) NOT NULL,
  `nim` int(11) NOT NULL,
  `nama_lengkap` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `gender` set('P','L','','') NOT NULL,
  `status_study` set('Study','Lulus','','') NOT NULL,
  `jenjang_study` set('D2','D3','D4','') NOT NULL,
  `semester_awal` varchar(45) NOT NULL,
  `kode_prodi` int(11) NOT NULL,
  `id_semester` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `foto` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `prodi_kaprodi`
--

CREATE TABLE `prodi_kaprodi` (
  `id_kaprodi` int(11) NOT NULL,
  `kode_prodi` int(11) NOT NULL,
  `id_dosen` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `program_studi`
--

CREATE TABLE `program_studi` (
  `kode_prodi` int(11) NOT NULL,
  `kode_dikti` int(11) NOT NULL,
  `nama_prodi` varchar(45) NOT NULL,
  `jenjang` varchar(45) NOT NULL,
  `akreditasi` varchar(45) NOT NULL,
  `singkatan` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `program_studi`
--

INSERT INTO `program_studi` (`kode_prodi`, `kode_dikti`, `nama_prodi`, `jenjang`, `akreditasi`, `singkatan`) VALUES
(11, 41433, 'Teknik Pengolahan Sawit', 'D3', 'B', 'TPS'),
(12, 21408, 'Perawatan Dan Perbaikan Mesin', 'D3', 'B', 'PPM'),
(13, 55401, 'Teknik Informatika', 'D3', 'B', 'TIF'),
(14, 63311, 'Administrasi Bisnis Internasional', 'D4', 'B', 'ABI');

-- --------------------------------------------------------

--
-- Table structure for table `semester`
--

CREATE TABLE `semester` (
  `id_semester` int(11) NOT NULL,
  `semester` varchar(45) NOT NULL,
  `keterangan` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `email` varchar(128) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `aktif` set('Y','N') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`email`, `nama`, `password`, `aktif`) VALUES
('admin@admin.com', 'Diki Wahyudy', '1352caf9bbccf8818f45adfd6ee026a8', 'Y');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`id_dosen`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id_mahasiswa`);

--
-- Indexes for table `prodi_kaprodi`
--
ALTER TABLE `prodi_kaprodi`
  ADD PRIMARY KEY (`id_kaprodi`);

--
-- Indexes for table `program_studi`
--
ALTER TABLE `program_studi`
  ADD PRIMARY KEY (`kode_prodi`);

--
-- Indexes for table `semester`
--
ALTER TABLE `semester`
  ADD PRIMARY KEY (`id_semester`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dosen`
--
ALTER TABLE `dosen`
  MODIFY `id_dosen` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id_mahasiswa` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `prodi_kaprodi`
--
ALTER TABLE `prodi_kaprodi`
  MODIFY `id_kaprodi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `program_studi`
--
ALTER TABLE `program_studi`
  MODIFY `kode_prodi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `semester`
--
ALTER TABLE `semester`
  MODIFY `id_semester` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

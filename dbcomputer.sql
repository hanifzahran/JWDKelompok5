-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2021 at 09:59 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbcomputer`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbcomputer`
--

CREATE TABLE `tbcomputer` (
  `idcomputer` varchar(5) NOT NULL,
  `jeniscomputer` varchar(50) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `pemilik` varchar(40) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbcomputer`
--

INSERT INTO `tbcomputer` (`idcomputer`, `jeniscomputer`, `kategori`, `pemilik`, `status`) VALUES
('BK001', 'Belajar PHP', 'Ilmu Komputer', 'Candra', 'Dipinjam'),
('BK002', 'Belajar HTML', 'Ilmu Komputer', 'Rahmat Hakim', 'Dipinjam'),
('BK003', 'Kumpulan Puisi', 'Karya Sastra', 'Bejo', 'Tersedia'),
('BK004', 'Sejarah Islam', 'Ilmu Agama', 'Sutejo', 'Dipinjam'),
('BK005', 'Pintar CSS', 'Ilmu Komputer', 'Anton', 'Tersedia'),
('BK006', 'Kumpulan Cerpen', 'Karya Sastra', 'Rudi', 'Dipinjam'),
('BK007', 'Keamanan Data', 'Ilmu Komputer', 'Nusron', 'Dipinjam'),
('BK008', 'Dasar-Dasar Database', 'Ilmu Komputer', 'Andi', 'Dipinjam'),
('BK009', 'Kumpulan Cerpen 2', 'Karya Sastra', 'Sutejo', 'Tersedia'),
('BK010', 'Peradaban Islam', 'Ilmu Agama', 'Aminnudin', 'Tersedia'),
('BK011', 'Kumpulan Cerpen 3', 'Karya Sastra', 'Rudi', 'Tersedia'),
('BK012', 'Teknologi Informasi', 'Ilmu Komputer', 'Andi A', 'Dipinjam'),
('BK013', 'Dermaga Biru', 'Karya Sastra', 'Sutejo', 'Tersedia');

-- --------------------------------------------------------

--
-- Table structure for table `tbcustomer`
--

CREATE TABLE `tbcustomer` (
  `idcustomer` varchar(5) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jeniskelamin` varchar(10) NOT NULL,
  `alamat` varchar(40) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbcustomer`
--

INSERT INTO `tbcustomer` (`idcustomer`, `nama`, `jeniskelamin`, `alamat`, `status`) VALUES
('AG001', 'Riki Subekti', 'Pria', 'Jl.Semangka No 3', 'Sedang Meminjam'),
('AG002', 'Aini Rahmawati', 'Wanita', 'Jl.Anggrek No 45', 'Sedang Meminjam'),
('AG003', 'Rudi Hartono', 'Pria', 'Jl.Manggis 98', 'Sedang Meminjam'),
('AG004', 'Dino Riano', 'Pria', 'Jl.Melon No 33', 'Sedang Meminjam'),
('AG005', 'Agus Wardoyo', 'Pria', 'Jl.Cempedak No 88', 'Tidak Meminjam'),
('AG006', 'Shinta Riani', 'Wanita', 'JL.Jeruk No 1', 'Sedang Meminjam'),
('AG007', 'Irwan Hakim', 'Pria', 'Jl.Salak No 34', 'Tidak Meminjam'),
('AG008', 'Indah Dian', 'Wanita', 'Jl.Semangka No 23', 'Sedang Meminjam'),
('AG009', 'Rina Auliah coba 2', 'Wanita', 'Jl.Merpati No 445', 'Tidak Meminjam'),
('AG010', '', '', '', 'Tidak Meminjam');

-- --------------------------------------------------------

--
-- Table structure for table `tbtransaksi`
--

CREATE TABLE `tbtransaksi` (
  `idtransaksi` varchar(5) NOT NULL,
  `idcustomer` varchar(5) NOT NULL,
  `idcomputer` varchar(5) NOT NULL,
  `tglpinjam` date NOT NULL,
  `tglkembali` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbtransaksi`
--

INSERT INTO `tbtransaksi` (`idtransaksi`, `idcustomer`, `idcomputer`, `tglpinjam`, `tglkembali`) VALUES
('TR001', 'AG002', 'BK002', '2016-11-03', '0000-00-00'),
('TR002', 'AG003', 'BK003', '2016-11-04', '2016-11-04'),
('TR003', 'AG001', 'BK001', '2016-11-04', '2021-02-23'),
('TR004', 'AG003', 'BK003', '2016-11-04', '2016-11-04'),
('TR005', 'AG006', 'BK004', '2016-11-04', '2021-02-23'),
('TR006', 'AG003', 'BK005', '2016-11-05', '2016-11-05'),
('TR007', 'AG008', 'BK013', '2016-11-05', '2021-02-23'),
('TR031', 'AG010', 'BK003', '2017-01-22', '2021-02-23');

-- --------------------------------------------------------

--
-- Table structure for table `tbuser`
--

CREATE TABLE `tbuser` (
  `iduser` int(5) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `alamat` varchar(40) NOT NULL,
  `password` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbuser`
--

INSERT INTO `tbuser` (`iduser`, `nama`, `alamat`, `password`) VALUES
(1, 'admin', 'jakarta', '81dc9bdb52d04dc20036dbd8313ed055');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

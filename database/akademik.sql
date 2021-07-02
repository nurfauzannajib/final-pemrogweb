-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 28, 2019 at 12:56 PM
-- Server version: 5.7.24
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `akademik`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

DROP TABLE IF EXISTS `tb_admin`;
CREATE TABLE IF NOT EXISTS `tb_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id`, `username`, `password`) VALUES
(3, 'admin', '21232f297a57a5a743894a0e4a801fc3');
(4, 'fauzan' '123456');

-- --------------------------------------------------------

--
-- Table structure for table `tb_mahasiswa`
--

DROP TABLE IF EXISTS `tb_mahasiswa`;
CREATE TABLE IF NOT EXISTS `tb_mahasiswa` (
  `nim` varchar(16) NOT NULL,
  `nama_mhs` varchar(200) NOT NULL,
  PRIMARY KEY (`nim`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_mahasiswa`
--

INSERT INTO `tb_mahasiswa` (`nim`, `nama_mhs`) VALUES
('09745', 'Umi Khalimah Khusnah'),
('09756', 'Wilda Ulfianti'),
('09765', 'Fahmi Ihsani'),
('23451', 'Ari Kusuma'),
('54321', 'Muhammad Lutfi');

-- --------------------------------------------------------

--
-- Table structure for table `tb_matkul`
--

DROP TABLE IF EXISTS `tb_matkul`;
CREATE TABLE IF NOT EXISTS `tb_matkul` (
  `kode_matkul` varchar(4) NOT NULL,
  `nama_matkul` varchar(200) NOT NULL,
  `sks` int(2) NOT NULL,
  PRIMARY KEY (`kode_matkul`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_matkul`
--

INSERT INTO `tb_matkul` (`kode_matkul`, `nama_matkul`, `sks`) VALUES
('A11', 'Matematika', 2),
('A12', 'Ilmu Pengetahuan Alam', 2),
('A13', 'Ilmu Pengetahuan Sosial', 2),
('A14', 'PHP', 2),
('A15', 'Perangkat Bergerak', 2),
('A16', 'Mobile', 3),
('A17', 'HTML', 3),
('A18', 'Pyhton', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tb_nilai`
--

DROP TABLE IF EXISTS `tb_nilai`;
CREATE TABLE IF NOT EXISTS `tb_nilai` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kode_matkul` varchar(4) NOT NULL,
  `nim` varchar(16) NOT NULL,
  `nilai` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_nilai`
--

INSERT INTO `tb_nilai` (`id`, `kode_matkul`, `nim`, `nilai`) VALUES
(20, 'A11', '54321', '90'),
(21, 'A11', '09756', '80'),
(22, 'A12', '09756', '70'),
(23, 'A12', '54321', '80'),
(24, 'A14', '54321', '70'),
(25, 'A15', '54321', '50'),
(26, 'A13', '54321', '60'),
(27, 'A14', '09756', '60'),
(28, 'A13', '09756', '70'),
(29, 'A15', '09756', '60'),
(30, 'A18', '09756', '75'),
(31, 'A17', '09756', '90'),
(32, 'A16', '09756', '84'),
(33, 'A11', '09745', '90'),
(34, 'A11', '09765', '70'),
(35, 'A14', '23451', '60'),
(36, 'A12', '09745', '70'),
(37, 'A13', '09745', '60'),
(38, 'A14', '09745', '70'),
(39, 'A15', '09745', '50'),
(40, 'A16', '09745', '85'),
(41, 'A17', '09745', '80'),
(42, 'A18', '09745', '85'),
(44, 'A12', '09765', '60'),
(45, 'A13', '09765', '70'),
(46, 'A14', '09765', '80'),
(47, 'A15', '09765', '90'),
(48, 'A16', '09765', '69'),
(49, 'A17', '09765', '80'),
(50, 'A18', '09765', '100'),
(51, 'A11', '23451', '70'),
(52, 'A12', '23451', '80'),
(53, 'A13', '23451', '90'),
(54, 'A15', '23451', '78'),
(55, 'A16', '23451', '81'),
(56, 'A17', '23451', '69'),
(57, 'A18', '23451', '95'),
(58, 'A16', '54321', '85'),
(59, 'A17', '54321', '80'),
(60, 'A18', '54321', '87');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

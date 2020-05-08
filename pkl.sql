-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2020 at 07:23 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pkl`
--

-- --------------------------------------------------------

--
-- Table structure for table `bts`
--

CREATE TABLE `bts` (
  `id_bts` int(11) NOT NULL,
  `Nama_JenisFile` varchar(45) DEFAULT NULL,
  `Koordinat` varchar(45) DEFAULT NULL,
  `KodePelanggan_PLN` varchar(45) DEFAULT NULL,
  `Nama_PIC` varchar(45) DEFAULT NULL,
  `NoHp_PIC` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id_Customer` int(11) NOT NULL,
  `id_Karyawan` int(11) DEFAULT NULL,
  `NIK` int(20) DEFAULT NULL,
  `Nama_JenisFile` text DEFAULT NULL,
  `Alamat` varchar(45) DEFAULT NULL,
  `Jenis_Pelanggan` varchar(45) DEFAULT NULL,
  `NPWP` varchar(45) DEFAULT NULL,
  `Status` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `customer_alat`
--

CREATE TABLE `customer_alat` (
  `id_Customer_Alat` int(11) NOT NULL,
  `id_BTS` int(11) DEFAULT NULL,
  `id_Customer` int(11) DEFAULT NULL,
  `id_Layanan` int(11) DEFAULT NULL,
  `Jarak` varchar(45) DEFAULT NULL,
  `Ketinggian_Pipa` varchar(45) DEFAULT NULL,
  `Jenis_Transmisi` varchar(45) DEFAULT NULL,
  `Jenis_Cpe` varchar(45) DEFAULT NULL,
  `Status_Cpe` varchar(45) DEFAULT NULL,
  `Ip_Radio` varchar(45) DEFAULT NULL,
  `Port` varchar(45) DEFAULT NULL,
  `Username` varchar(45) DEFAULT NULL,
  `Password` varchar(45) DEFAULT NULL,
  `SSID` varchar(45) DEFAULT NULL,
  `Freq` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `customer_file`
--

CREATE TABLE `customer_file` (
  `id_Customer_File` int(11) NOT NULL,
  `id_Customer` int(11) DEFAULT NULL,
  `id_Jenis_File` int(11) DEFAULT NULL,
  `id_Karyawan` int(11) DEFAULT NULL,
  `Nama_JenisFile` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `customer_jadwal`
--

CREATE TABLE `customer_jadwal` (
  `id_Customer_Jadwal` int(11) NOT NULL,
  `id_Customer_Alat` int(11) DEFAULT NULL,
  `id_Karyawan` int(11) DEFAULT NULL,
  `Tanggal` datetime DEFAULT NULL,
  `Jenis_Visit` varchar(45) DEFAULT NULL,
  `Status` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `customer_layanan`
--

CREATE TABLE `customer_layanan` (
  `id_Customer_Layanan` int(11) NOT NULL,
  `id_Customer` int(11) DEFAULT NULL,
  `id_Layanan` int(11) DEFAULT NULL,
  `Tgl_Aktifasi` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `No_Faktur` int(11) NOT NULL,
  `id_Customer` int(11) NOT NULL,
  `id_Detail_Invoice` int(11) NOT NULL,
  `Tanggal` date NOT NULL,
  `Tgl_JatuhTempo` datetime NOT NULL,
  `Sub_Total` varchar(45) NOT NULL,
  `Status_Ppn` varchar(45) NOT NULL,
  `Ppn` varchar(45) NOT NULL,
  `Total` varchar(45) NOT NULL,
  `Status_Lunas` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `invoice_detail`
--

CREATE TABLE `invoice_detail` (
  `id_Invoice_Detail` int(11) NOT NULL,
  `No_Faktur` int(11) DEFAULT NULL,
  `id_Produk` int(11) DEFAULT NULL,
  `Qty` int(11) DEFAULT NULL,
  `Satuan` int(11) DEFAULT NULL,
  `Jumlah` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `jenis_file`
--

CREATE TABLE `jenis_file` (
  `id_Jenis_File` int(11) NOT NULL,
  `Nama_JenisFile` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `karyawan_master`
--

CREATE TABLE `karyawan_master` (
  `id_Karyawan` int(11) NOT NULL,
  `NIP` varchar(45) DEFAULT NULL,
  `Nama_JenisFile` varchar(45) DEFAULT NULL,
  `Jenis_Pelanggan` varchar(45) DEFAULT NULL,
  `Password` varchar(45) DEFAULT NULL,
  `NoHp` varchar(45) DEFAULT NULL,
  `Level` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `layanan`
--

CREATE TABLE `layanan` (
  `id_Layanan` int(11) NOT NULL,
  `id_Layanan_Jenis` int(11) DEFAULT NULL,
  `Nama_Layanan` text DEFAULT NULL,
  `Kapasitas` varchar(45) DEFAULT NULL,
  `Harga` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `layanan_jenis`
--

CREATE TABLE `layanan_jenis` (
  `id_Layanan_Jenis` int(11) NOT NULL,
  `Nama_JenisFile` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bts`
--
ALTER TABLE `bts`
  ADD PRIMARY KEY (`id_bts`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_Customer`);

--
-- Indexes for table `customer_alat`
--
ALTER TABLE `customer_alat`
  ADD PRIMARY KEY (`id_Customer_Alat`);

--
-- Indexes for table `customer_file`
--
ALTER TABLE `customer_file`
  ADD PRIMARY KEY (`id_Customer_File`);

--
-- Indexes for table `customer_jadwal`
--
ALTER TABLE `customer_jadwal`
  ADD PRIMARY KEY (`id_Customer_Jadwal`);

--
-- Indexes for table `customer_layanan`
--
ALTER TABLE `customer_layanan`
  ADD PRIMARY KEY (`id_Customer_Layanan`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`No_Faktur`);

--
-- Indexes for table `invoice_detail`
--
ALTER TABLE `invoice_detail`
  ADD PRIMARY KEY (`id_Invoice_Detail`);

--
-- Indexes for table `jenis_file`
--
ALTER TABLE `jenis_file`
  ADD PRIMARY KEY (`id_Jenis_File`);

--
-- Indexes for table `karyawan_master`
--
ALTER TABLE `karyawan_master`
  ADD PRIMARY KEY (`id_Karyawan`);

--
-- Indexes for table `layanan`
--
ALTER TABLE `layanan`
  ADD PRIMARY KEY (`id_Layanan`);

--
-- Indexes for table `layanan_jenis`
--
ALTER TABLE `layanan_jenis`
  ADD PRIMARY KEY (`id_Layanan_Jenis`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bts`
--
ALTER TABLE `bts`
  MODIFY `id_bts` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id_Customer` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customer_alat`
--
ALTER TABLE `customer_alat`
  MODIFY `id_Customer_Alat` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customer_file`
--
ALTER TABLE `customer_file`
  MODIFY `id_Customer_File` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customer_jadwal`
--
ALTER TABLE `customer_jadwal`
  MODIFY `id_Customer_Jadwal` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customer_layanan`
--
ALTER TABLE `customer_layanan`
  MODIFY `id_Customer_Layanan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `No_Faktur` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `invoice_detail`
--
ALTER TABLE `invoice_detail`
  MODIFY `id_Invoice_Detail` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jenis_file`
--
ALTER TABLE `jenis_file`
  MODIFY `id_Jenis_File` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `karyawan_master`
--
ALTER TABLE `karyawan_master`
  MODIFY `id_Karyawan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `layanan`
--
ALTER TABLE `layanan`
  MODIFY `id_Layanan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `layanan_jenis`
--
ALTER TABLE `layanan_jenis`
  MODIFY `id_Layanan_Jenis` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2020 at 06:39 PM
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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_Admin` int(11) NOT NULL,
  `NIP` varchar(45) DEFAULT NULL,
  `Nama` varchar(45) DEFAULT NULL,
  `Email` varchar(45) DEFAULT NULL,
  `Password` varchar(45) DEFAULT NULL,
  `NoHp` varchar(45) DEFAULT NULL,
  `Alamat` varchar(45) DEFAULT NULL,
  `Level` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `id_user` int(11) NOT NULL,
  `nama` varchar(45) DEFAULT NULL,
  `Email` varchar(45) DEFAULT NULL,
  `NoHp` varchar(45) DEFAULT NULL,
  `Password` varchar(45) DEFAULT NULL,
  `NIK` int(20) DEFAULT NULL,
  `Nama_JenisFile` text DEFAULT NULL,
  `Alamat` varchar(45) DEFAULT NULL,
  `Jenis_Pelanggan` varchar(45) DEFAULT NULL,
  `Status` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id_Customer`, `id_Karyawan`, `id_user`, `nama`, `Email`, `NoHp`, `Password`, `NIK`, `Nama_JenisFile`, `Alamat`, `Jenis_Pelanggan`, `Status`) VALUES
(1, 1, 0, 'Supono', 'Supono@gmail.com', '0089097898698', 'suponoganteng', 1233, 'download (1).jpg', 'Jember', 'Bulanan', 'Non Aktif'),
(2, NULL, 0, 'Adit', 'adit@gmail.com', '98908908977', 'aditcebong', 2147483647, '1232', 'Lumajang', 'Perorangan', 'No');

-- --------------------------------------------------------

--
-- Table structure for table `customer_alat`
--

CREATE TABLE `customer_alat` (
  `id_Customer_Alat` int(11) NOT NULL,
  `id_BTS` int(11) DEFAULT NULL,
  `id_Customer` int(11) DEFAULT NULL,
  `id_Layanan` int(11) DEFAULT NULL,
  `id_Karyawan` int(11) DEFAULT NULL,
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
  `Tgl_Pemasangan` datetime DEFAULT NULL,
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
  `id_Customer` int(11) DEFAULT NULL,
  `id_Karyawan` int(11) DEFAULT NULL,
  `id_Detail_Invoice` int(11) DEFAULT NULL,
  `Tanggal` date DEFAULT NULL,
  `Tgl_JatuhTempo` datetime DEFAULT NULL,
  `Sub_Total` varchar(45) DEFAULT NULL,
  `Status_Ppn` varchar(45) DEFAULT NULL,
  `Ppn` varchar(45) DEFAULT NULL,
  `Total` varchar(45) DEFAULT NULL,
  `Status_Lunas` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`No_Faktur`, `id_Customer`, `id_Karyawan`, `id_Detail_Invoice`, `Tanggal`, `Tgl_JatuhTempo`, `Sub_Total`, `Status_Ppn`, `Ppn`, `Total`, `Status_Lunas`) VALUES
(1, 1, 1, 1, '2020-06-21', '2021-07-31 00:00:00', '59.000', 'Aktif', '21.000', '90.000', 'Lunas');

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
-- Table structure for table `karyawan_master`
--

CREATE TABLE `karyawan_master` (
  `id_Karyawan` int(11) NOT NULL,
  `NIP` varchar(45) DEFAULT NULL,
  `Nama` varchar(45) DEFAULT NULL,
  `Email` varchar(45) DEFAULT NULL,
  `Password` varchar(45) DEFAULT NULL,
  `NoHp` varchar(45) DEFAULT NULL,
  `Alamat` varchar(45) DEFAULT NULL,
  `Level` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `karyawan_master`
--

INSERT INTO `karyawan_master` (`id_Karyawan`, `NIP`, `Nama`, `Email`, `Password`, `NoHp`, `Alamat`, `Level`) VALUES
(1, '4574905979079', 'Rojali', 'rojali@gmail.com', 'rojalikumis', '089809707077', 'Belakang gramedia', NULL),
(3, '07767969767676', 'Slamet', 'slamet@gmail.com', 'slametimut', '089809707077', 'Pamekasan', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `layanan`
--

CREATE TABLE `layanan` (
  `id_Layanan` int(11) NOT NULL,
  `id_Layanan_Jenis` int(11) DEFAULT NULL,
  `Nama_Layanan` text DEFAULT NULL,
  `Nama_Layanan_Jenis` varchar(45) DEFAULT NULL,
  `Tgl_Aktifasi` date DEFAULT NULL,
  `Kapasitas` varchar(45) DEFAULT NULL,
  `Harga` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `layanan`
--

INSERT INTO `layanan` (`id_Layanan`, `id_Layanan_Jenis`, `Nama_Layanan`, `Nama_Layanan_Jenis`, `Tgl_Aktifasi`, `Kapasitas`, `Harga`) VALUES
(1, 1, 'LITE', NULL, NULL, '10 Mbps', '200.000'),
(2, 2, 'FAMILY', NULL, NULL, '20 Mbps', '385.000'),
(3, 3, 'UMKM', NULL, NULL, '20 Mbps', '585.000'),
(4, 4, 'STARTUP', NULL, NULL, '50 Mbps', '725.000');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `id_Sales` int(11) NOT NULL,
  `NIP` varchar(45) DEFAULT NULL,
  `Nama` varchar(45) DEFAULT NULL,
  `Email` varchar(45) DEFAULT NULL,
  `Password` varchar(45) DEFAULT NULL,
  `NoHp` varchar(45) DEFAULT NULL,
  `Alamat` varchar(45) DEFAULT NULL,
  `Level` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`id_Sales`, `NIP`, `Nama`, `Email`, `Password`, `NoHp`, `Alamat`, `Level`) VALUES
(2, '07767969767676', 'Wildan', 'wildan@gmail.com', 'wildancimoy', '089809707077', 'Lumajang', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `level` enum('sales','admin','pegawai','customer') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `email`, `password`, `level`) VALUES
(1, 'alrizal@gmail.com', '123', 'sales'),
(2, 'riyad@gmail.com', '1234', 'admin'),
(3, 'makbar@gmail.com', '12345', 'pegawai'),
(4, 'wildan@gmail.com', '123456', 'customer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_Admin`);

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
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`id_Sales`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_Admin` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bts`
--
ALTER TABLE `bts`
  MODIFY `id_bts` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id_Customer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
  MODIFY `No_Faktur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `invoice_detail`
--
ALTER TABLE `invoice_detail`
  MODIFY `id_Invoice_Detail` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `karyawan_master`
--
ALTER TABLE `karyawan_master`
  MODIFY `id_Karyawan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `layanan`
--
ALTER TABLE `layanan`
  MODIFY `id_Layanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `id_Sales` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

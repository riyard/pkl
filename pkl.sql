-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 22 Mei 2020 pada 13.25
-- Versi Server: 10.1.10-MariaDB
-- PHP Version: 7.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Struktur dari tabel `bts`
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
-- Struktur dari tabel `customer`
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
  `Nama_JenisFile` text,
  `Alamat` varchar(45) DEFAULT NULL,
  `Jenis_Pelanggan` varchar(45) DEFAULT NULL,
  `Status` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `customer`
--

INSERT INTO `customer` (`id_Customer`, `id_Karyawan`, `id_user`, `nama`, `Email`, `NoHp`, `Password`, `NIK`, `Nama_JenisFile`, `Alamat`, `Jenis_Pelanggan`, `Status`) VALUES
(1, 1, 0, 'Supono', 'Supono@gmail.com', '0089097898698', 'suponoganteng', 1233, 'download (1).jpg', 'Jember', 'Bulanan', 'Aktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `customer_alat`
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
-- Struktur dari tabel `customer_file`
--

CREATE TABLE `customer_file` (
  `id_Customer_File` int(11) NOT NULL,
  `id_Customer` int(11) DEFAULT NULL,
  `id_Karyawan` int(11) DEFAULT NULL,
  `Nama_JenisFile` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `customer_jadwal`
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
-- Struktur dari tabel `customer_layanan`
--

CREATE TABLE `customer_layanan` (
  `id_Customer_Layanan` int(11) NOT NULL,
  `id_Customer` int(11) DEFAULT NULL,
  `id_Layanan` int(11) DEFAULT NULL,
  `Tgl_Aktifasi` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `invoice`
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
-- Dumping data untuk tabel `invoice`
--

INSERT INTO `invoice` (`No_Faktur`, `id_Customer`, `id_Karyawan`, `id_Detail_Invoice`, `Tanggal`, `Tgl_JatuhTempo`, `Sub_Total`, `Status_Ppn`, `Ppn`, `Total`, `Status_Lunas`) VALUES
(1, 1, 1, 1, '2020-06-21', '2021-07-31 00:00:00', '59.000', 'Aktif', '21.000', '90.000', 'Lunas');

-- --------------------------------------------------------

--
-- Struktur dari tabel `invoice_detail`
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
-- Struktur dari tabel `karyawan`
--

CREATE TABLE `karyawan` (
  `id_Karyawan` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `Nama` varchar(45) DEFAULT NULL,
  `NIP` varchar(45) DEFAULT NULL,
  `Email` varchar(45) DEFAULT NULL,
  `NoHp` varchar(45) DEFAULT NULL,
  `Alamat` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `karyawan`
--

INSERT INTO `karyawan` (`id_Karyawan`, `id_user`, `Nama`, `NIP`, `Email`, `NoHp`, `Alamat`) VALUES
(1, 0, 'Supono', '1234456', 'Supono@gmail.com', '085677909877', 'Jember');

-- --------------------------------------------------------

--
-- Struktur dari tabel `karyawan_master`
--

CREATE TABLE `karyawan_master` (
  `id_Karyawan` int(11) NOT NULL,
  `NIP` varchar(45) DEFAULT NULL,
  `Nama_JenisFile` varchar(45) DEFAULT NULL,
  `Jenis_Pelanggan` varchar(45) DEFAULT NULL,
  `Email` varchar(45) DEFAULT NULL,
  `Password` varchar(45) DEFAULT NULL,
  `NoHp` varchar(45) DEFAULT NULL,
  `Level` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `layanan`
--

CREATE TABLE `layanan` (
  `id_Layanan` int(11) NOT NULL,
  `id_Layanan_Jenis` int(11) DEFAULT NULL,
  `Nama_Layanan` text,
  `Nama_Layanan_Jenis` varchar(45) DEFAULT NULL,
  `Tgl_Aktifasi` date DEFAULT NULL,
  `Kapasitas` varchar(45) DEFAULT NULL,
  `Harga` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `layanan`
--

INSERT INTO `layanan` (`id_Layanan`, `id_Layanan_Jenis`, `Nama_Layanan`, `Nama_Layanan_Jenis`, `Tgl_Aktifasi`, `Kapasitas`, `Harga`) VALUES
(1, 1, 'LITE', NULL, NULL, '10 Mbps', '200.000'),
(2, 2, 'FAMILY', NULL, NULL, '20 Mbps', '385.000'),
(3, 3, 'UMKM', NULL, NULL, '20 Mbps', '585.000'),
(4, 4, 'STARTUP', NULL, NULL, '50 Mbps', '725.000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `level` enum('sales','admin','pegawai','customer') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
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
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id_Karyawan`);

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
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

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
  MODIFY `id_Customer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
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
-- AUTO_INCREMENT for table `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `id_Karyawan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `karyawan_master`
--
ALTER TABLE `karyawan_master`
  MODIFY `id_Karyawan` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `layanan`
--
ALTER TABLE `layanan`
  MODIFY `id_Layanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

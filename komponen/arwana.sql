-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Mar 2022 pada 05.26
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `arwana`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(5) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` text NOT NULL,
  `nama_admin` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `nama_admin`) VALUES
(1, 'root', 'dc76e9f0c0006e8f919e0c515c66dbba3982f785', 'Admin Pusat');

-- --------------------------------------------------------

--
-- Struktur dari tabel `keranjang`
--

CREATE TABLE `keranjang` (
  `id_keranjang` int(5) NOT NULL,
  `id_pelanggan` int(5) NOT NULL,
  `id_produk` int(5) NOT NULL,
  `qty` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` int(5) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` text NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `id_provinsi` int(5) NOT NULL,
  `no_hp` varchar(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `username`, `password`, `nama_lengkap`, `alamat`, `id_provinsi`, `no_hp`) VALUES
(2, 'fazal', '849b0a7dcb9fd41b44d08923b270e9132f42a241', 'Fazal Said', 'Everywhere', 65, '082233439041'),
(3, 'kasumi', '779a4b9c248ab29f598354c63302022098472d85', 'Toyama Kasumi', 'Tokyo', 62, '088930495869'),
(4, 'saaya', '0aa784d3270f02a8907330fd4b7ea6ed0bc2a73a', 'Yamabuki Saaya', 'Tokyo', 65, '084839202938');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id_pemesanan` int(5) NOT NULL,
  `kode_pemesanan` varchar(10) NOT NULL,
  `id_pelanggan` int(5) NOT NULL,
  `id_produk` int(5) NOT NULL,
  `qty` int(5) NOT NULL,
  `tanggal_pemesanan` date NOT NULL,
  `total` int(10) NOT NULL,
  `status_bayar` varchar(15) NOT NULL,
  `status_kirim` varchar(15) NOT NULL,
  `metode_bayar` varchar(30) NOT NULL,
  `bukti` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pemesanan`
--

INSERT INTO `pemesanan` (`id_pemesanan`, `kode_pemesanan`, `id_pelanggan`, `id_produk`, `qty`, `tanggal_pemesanan`, `total`, `status_bayar`, `status_kirim`, `metode_bayar`, `bukti`) VALUES
(9, 'TR-ARW0001', 2, 1, 1, '2022-03-15', 1000000, 'Belum Bayar', 'Selesai', '', ''),
(10, 'TR-ARW0002', 2, 1, 1, '2022-03-15', 1000000, 'Belum Bayar', 'Selesai', '', ''),
(11, 'TR-ARW0002', 2, 2, 1, '2022-03-15', 1500000, 'Belum Bayar', 'Selesai', '', ''),
(12, 'TR-ARW0003', 4, 1, 1, '2022-03-15', 1000000, 'Belum Bayar', 'Dikemas', '', ''),
(13, 'TR-ARW0003', 4, 2, 1, '2022-03-15', 1500000, 'Belum Bayar', 'Dikemas', '', ''),
(14, 'TR-ARW0004', 4, 1, 1, '2022-03-16', 1000000, 'Belum Bayar', 'Dikemas', '', ''),
(15, 'TR-ARW0004', 4, 2, 1, '2022-03-16', 1500000, 'Belum Bayar', 'Dikemas', '', ''),
(16, 'TR-ARW0005', 2, 2, 1, '2022-03-16', 1500000, 'Belum Bayar', 'Dikemas', '', ''),
(17, 'TR-ARW0006', 2, 1, 1, '2022-03-16', 1000000, 'Belum Bayar', 'Dikemas', '', ''),
(18, 'TR-ARW0006', 2, 2, 1, '2022-03-16', 1500000, 'Belum Bayar', 'Dikemas', '', ''),
(19, 'TR-ARW0007', 2, 2, 1, '2022-03-16', 1500000, 'Belum Bayar', 'Dikemas', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(5) NOT NULL,
  `id_admin` int(5) NOT NULL,
  `nama_produk` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `stok` int(5) NOT NULL,
  `harga` int(11) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id_produk`, `id_admin`, `nama_produk`, `deskripsi`, `stok`, `harga`, `gambar`) VALUES
(1, 0, 'Arwana 1', '', 9, 1000000, ''),
(2, 0, 'Arwana 2', '', -12, 1500000, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `provinsi`
--

CREATE TABLE `provinsi` (
  `id_provinsi` int(5) NOT NULL,
  `nama_provinsi` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `provinsi`
--

INSERT INTO `provinsi` (`id_provinsi`, `nama_provinsi`) VALUES
(61, 'KALIMANTAN BARAT'),
(62, 'KALIMANTAN TENGAH'),
(63, 'KALIMANTAN SELATAN'),
(64, 'KALIMANTAN TIMUR'),
(65, 'KALIMANTAN UTARA');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `keranjang`
--
ALTER TABLE `keranjang`
  ADD PRIMARY KEY (`id_keranjang`);

--
-- Indeks untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indeks untuk tabel `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id_pemesanan`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indeks untuk tabel `provinsi`
--
ALTER TABLE `provinsi`
  ADD PRIMARY KEY (`id_provinsi`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `keranjang`
--
ALTER TABLE `keranjang`
  MODIFY `id_keranjang` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id_pelanggan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `id_pemesanan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `provinsi`
--
ALTER TABLE `provinsi`
  MODIFY `id_provinsi` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

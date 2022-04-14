-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Apr 2022 pada 11.34
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

--
-- Dumping data untuk tabel `keranjang`
--

INSERT INTO `keranjang` (`id_keranjang`, `id_pelanggan`, `id_produk`, `qty`) VALUES
(48, 2, 11, 1);

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
(2, 'fazal', '849b0a7dcb9fd41b44d08923b270e9132f42a241', 'Fazal Said Wicaksono', 'Pokoknya disini', 62, '082233439041'),
(6, 'anonymous', 'b88188c17399d2eae9caa60c03bd858f7d88619e', 'Anonymous', 'dimana saja, yang penting disini', 61, '083492034859'),
(7, 'demo', '89e495e7941cf9e40e6980d14a16bf023ccd4c91', 'Demo Akun', 'No address', 64, '083495039485');

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
  `status_kirim` varchar(20) NOT NULL,
  `metode_bayar` varchar(30) NOT NULL,
  `bukti` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pemesanan`
--

INSERT INTO `pemesanan` (`id_pemesanan`, `kode_pemesanan`, `id_pelanggan`, `id_produk`, `qty`, `tanggal_pemesanan`, `total`, `status_bayar`, `status_kirim`, `metode_bayar`, `bukti`) VALUES
(27, 'TR-ARW0001', 2, 12, 2, '2022-03-25', 2800000, 'Sudah Bayar', 'Selesai', 'BT', 'liburan7alam.jpg'),
(28, 'TR-ARW0001', 2, 10, 3, '2022-03-25', 6900000, 'Sudah Bayar', 'Selesai', 'BT', 'liburan7alam.jpg'),
(32, 'TR-ARW0002', 2, 15, 2, '2022-03-30', 4800000, 'Sudah Bayar', 'Selesai', 'BT', 'valooops.png'),
(33, 'TR-ARW0002', 2, 13, 1, '2022-03-30', 2600000, 'Sudah Bayar', 'Selesai', 'BT', 'valooops.png'),
(34, 'TR-ARW0002', 2, 11, 1, '2022-03-30', 2800000, 'Sudah Bayar', 'Selesai', 'BT', 'valooops.png'),
(35, 'TR-ARW0003', 2, 10, 1, '2022-03-30', 2300000, 'Sudah Bayar', 'Dikemas', 'BT', 'isi21-removebg-preview.png'),
(36, 'TR-ARW0003', 2, 6, 1, '2022-03-30', 1500000, 'Sudah Bayar', 'Dikemas', 'BT', 'isi21-removebg-preview.png'),
(37, 'TR-ARW0003', 2, 9, 2, '2022-03-30', 5000000, 'Sudah Bayar', 'Dikemas', 'BT', 'isi21-removebg-preview.png'),
(38, 'TR-ARW0003', 2, 13, 1, '2022-03-30', 2600000, 'Sudah Bayar', 'Dikemas', 'BT', 'isi21-removebg-preview.png'),
(39, 'TR-ARW0004', 6, 9, 12, '2022-04-05', 30000000, 'Sudah Bayar', 'Selesai', 'BT', 'fauna_kucing(1).png'),
(40, 'TR-ARW0004', 6, 10, 8, '2022-04-05', 18400000, 'Sudah Bayar', 'Selesai', 'BT', 'fauna_kucing(1).png'),
(41, 'TR-ARW0005', 6, 6, 1, '2022-04-05', 1500000, 'Sudah Bayar', 'Selesai', 'BT', 'liburan5mobil.jpg'),
(42, 'TR-ARW0005', 6, 7, 11, '2022-04-05', 22000000, 'Sudah Bayar', 'Selesai', 'BT', 'liburan5mobil.jpg'),
(43, 'TR-ARW0006', 7, 8, 2, '2022-04-10', 2600000, 'Belum Bayar', 'Menunggu Pembayaran', '', '');

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
(6, 1, 'Arwana Partai', 'Ukuran: 25 cm', 50, 1500000, '1648223255594.jpg'),
(7, 1, 'Arwana Cabai Merah', 'Ukuran: 30 cm', 19, 2000000, '1648223255643.jpg'),
(8, 1, 'Arwana Semi Spesial', '<p>Ukuran 35 cm</p>', 14, 1300000, '1648223255698.jpg'),
(9, 1, 'Arwana Spesial', '<p>Ukuran 30cm</p>', 20, 2500000, '1648223255750.jpg'),
(10, 1, 'Arwana Metalk', '<p>Ukuran 27cm</p>', 19, 2300000, '1648223255795.jpg'),
(11, 1, 'Arwana Ekor Kipas', '<p>Ukuran 22 cm</p>', 19, 2800000, '1648223255837.jpg'),
(12, 1, 'Arwana Semi Short Body', 'Ukuran: 17 cm', 20, 1400000, '1648223255875.jpg'),
(13, 1, 'Arwana Dayang Setan', 'Ukuran: 35 cm', 19, 2600000, '1648223255915.jpg'),
(14, 1, 'Arwana Semi Punuk Unta', '<p>Ukuran: 33 cm</p>', 20, 2500000, '1648223255965.jpg'),
(15, 1, 'Arwana Punuk Unta', 'Ukuran: 20 cm', 20, 2400000, '1648223256006.jpg');

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
  MODIFY `id_keranjang` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id_pelanggan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `id_pemesanan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `provinsi`
--
ALTER TABLE `provinsi`
  MODIFY `id_provinsi` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

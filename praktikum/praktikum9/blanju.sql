-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Nov 2023 pada 08.06
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blanju`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `cartdetails`
--

CREATE TABLE `cartdetails` (
  `kodeDetilKeranjang` int(11) NOT NULL,
  `kodeKeranjang` int(11) NOT NULL,
  `kodeProduk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `cartdetails`
--

INSERT INTO `cartdetails` (`kodeDetilKeranjang`, `kodeKeranjang`, `kodeProduk`) VALUES
(1, 1, 6),
(4, 1, 8),
(5, 1, 8),
(6, 1, 45);

-- --------------------------------------------------------

--
-- Struktur dari tabel `carts`
--

CREATE TABLE `carts` (
  `kodeKeranjang` int(11) NOT NULL,
  `kodePelanggan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `carts`
--

INSERT INTO `carts` (`kodeKeranjang`, `kodePelanggan`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `categories`
--

CREATE TABLE `categories` (
  `kodeKategori` int(11) NOT NULL,
  `namaKategori` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `categories`
--

INSERT INTO `categories` (`kodeKategori`, `namaKategori`) VALUES
(1, 'makanan'),
(2, 'minuman'),
(3, 'sayuran'),
(4, 'buah-buahan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `customers`
--

CREATE TABLE `customers` (
  `kodePelanggan` int(11) NOT NULL,
  `emailPelanggan` varchar(100) NOT NULL,
  `passwordPelanggan` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `customers`
--

INSERT INTO `customers` (`kodePelanggan`, `emailPelanggan`, `passwordPelanggan`) VALUES
(1, 'pelanggan@gmail.com', 'p314ngg4n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `orderdetails`
--

CREATE TABLE `orderdetails` (
  `kodeDetilPesanan` int(11) NOT NULL,
  `kodePesanan` int(11) NOT NULL,
  `kodeProduk` int(11) NOT NULL,
  `hargaProduk` int(11) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `orders`
--

CREATE TABLE `orders` (
  `kodePesanan` int(11) NOT NULL,
  `kodePelanggan` int(11) NOT NULL,
  `tanggalPesan` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `products`
--

CREATE TABLE `products` (
  `kodeProduk` int(11) NOT NULL,
  `kodeKategori` int(11) NOT NULL,
  `namaProduk` varchar(100) NOT NULL,
  `gambarProduk` varchar(255) NOT NULL,
  `hargaProduk` int(11) NOT NULL,
  `stokProduk` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `products`
--

INSERT INTO `products` (`kodeProduk`, `kodeKategori`, `namaProduk`, `gambarProduk`, `hargaProduk`, `stokProduk`, `created_at`, `updated_at`) VALUES
(1, 1, 'kebab', '1_kebab.jpg', 120000, 10, '2023-11-23 00:44:31', NULL),
(2, 2, 'jus jeruk', '2_jus-jeruk.jpg', 20000, 12, '2023-11-23 00:44:31', NULL),
(3, 3, 'brokoli', '3_brokoli.jpg', 10000, 5, '2023-11-23 00:44:31', NULL),
(4, 4, 'durian', '4_durian.jpg', 50000, 0, '2023-11-23 00:44:31', NULL),
(5, 1, 'pizza', '5_pizza.jpg', 150000, 8, '2023-10-24 12:45:00', NULL),
(6, 2, 'kopi', '6_kopi.jpg', 22000, 20, '2023-11-23 00:44:31', NULL),
(7, 3, 'wortel', '7_wortel.jpg', 5000, 2, '2023-11-23 00:44:32', NULL),
(8, 4, 'mangga', '8_mangga.jpg', 10000, 0, '2023-11-23 00:44:32', NULL),
(9, 1, 'sushi', '9_sushi.jpg', 100000, 3, '2023-11-23 00:44:32', NULL),
(10, 2, 'teh', '10_teh.jpg', 15000, 10, '2023-11-23 00:44:32', NULL),
(11, 2, 'bubble drink', '11_bubble-tea.jpg', 25000, 36, '2023-11-23 00:54:55', NULL),
(12, 2, 'green tea', '12_green-tea.jpg', 42000, 50, '2023-11-23 00:54:55', NULL),
(13, 1, 'waffle', '13_waffle.jpg', 56000, 20, '2023-11-23 00:15:58', NULL),
(14, 2, 'espresso', '14_espresso.jpg', 31000, 21, '2023-11-23 00:16:42', NULL),
(15, 2, 'lemonade', '15_lemonade.jpg', 20000, 15, '2023-11-23 00:16:59', NULL),
(16, 2, 'strawberry smoothie', '16_strwaberry-smoothie.jpg', 34000, 24, '2023-11-23 00:54:55', NULL),
(17, 2, 'mojito', '17_mojito.jpg', 75000, 24, '2023-11-23 00:17:49', NULL),
(18, 2, 'strawberry shake', '18_strawberry-shake.jpg', 38000, 50, '2023-11-23 00:54:55', NULL),
(19, 2, 'cocktail', '19_cocktail.jpg', 53000, 23, '2023-11-23 00:21:58', NULL),
(20, 2, 'ice latte', '20_iced-latte.jpg', 40000, 18, '2023-11-23 00:54:55', NULL),
(21, 2, 'hot chocolate', '21_hot-chocolate.jpg', 52000, 14, '2023-11-23 00:54:55', NULL),
(22, 1, 'ratatouille', '22_Ratatouille.jpg', 120000, 27, '2023-11-23 00:22:24', NULL),
(23, 1, 'omelette', '23_omelette.jpg', 38000, 21, '2023-11-23 00:20:32', NULL),
(24, 1, 'croissant', '24_croissant.jpg', 47000, 46, '2023-11-23 00:22:55', NULL),
(25, 1, 'cupcake', '25_cupcake.jpg', 36000, 58, '2023-11-23 00:23:19', NULL),
(26, 1, 'steak', '26_steak.jpg', 155000, 80, '2023-11-23 00:23:43', NULL),
(27, 1, 'sandwich', '27_sanwich.jpg', 49000, 13, '2023-11-23 00:24:11', NULL),
(28, 1, 'burger', '28_burger.jpg', 50000, 17, '2023-11-23 00:24:34', NULL),
(29, 4, 'rasberi', '29_rasberi.jpg', 32000, 70, '2023-11-23 00:25:08', NULL),
(30, 4, 'anggur', '30_anggur.jpg', 46000, 12, '2023-11-23 00:25:47', NULL),
(31, 3, 'bawang merah', '31_bawang-merah.jpg', 18000, 45, '2023-11-23 00:54:55', NULL),
(32, 3, 'kacang polong', '32_kacang-polong.jpg', 14000, 12, '2023-11-23 00:54:55', NULL),
(33, 3, 'tomat', '33_tomat.jpg', 24000, 32, '2023-11-23 00:26:49', NULL),
(34, 4, 'kiwi', '34_kiwi.jpg', 46000, 35, '2023-11-23 00:27:32', NULL),
(35, 4, 'melon', '35_melon.jpg', 36000, 26, '2023-11-23 00:27:55', NULL),
(36, 4, 'bluberi', '36_bluberi.jpg', 57000, 23, '2023-11-23 00:28:49', NULL),
(37, 4, 'apel', '37_apel.jpg', 42000, 54, '2023-11-23 00:29:16', NULL),
(38, 4, 'buah naga', '38_buah-naga.jpg', 78000, 52, '2023-11-23 00:54:55', NULL),
(39, 4, 'pisang', '39_pisang.jpg', 35000, 41, '2023-11-23 00:29:57', NULL),
(40, 4, 'ceri', '40_ceri.jpg', 54000, 45, '2023-11-23 00:30:17', NULL),
(41, 1, 'kentang goreng', '41_kentang-goreng.jpg', 51000, 31, '2023-11-23 00:54:55', NULL),
(42, 4, 'stroberi', '42_stroberi.jpg', 78000, 43, '2023-11-23 00:30:46', NULL),
(43, 4, 'nanas', '43_nanas.jpg', 47000, 12, '2023-11-23 00:31:07', NULL),
(44, 4, 'pepaya', '44_pepaya.jpg', 34000, 26, '2023-11-23 00:31:28', NULL),
(45, 4, 'persik', '45_persik.jpg', 63000, 16, '2023-11-23 00:31:53', NULL),
(46, 3, 'bawang putih', '46_bawang-putih.jpg', 21000, 50, '2023-11-23 00:54:55', NULL),
(47, 3, 'jamur', '47_jamur.jpg', 32000, 53, '2023-11-23 00:32:17', NULL),
(48, 1, 'ramen', '48_ramen.jpg', 84000, 34, '2023-11-23 00:32:37', NULL),
(49, 1, 'dimsum', '49_dimsum.jpg', 72000, 38, '2023-11-23 00:32:55', NULL),
(50, 3, 'cabai', '50_cabai.jpg', 30000, 11, '2023-11-23 00:34:31', NULL),
(51, 3, 'terong', '51_terong.jpg', 33000, 43, '2023-11-23 00:34:53', NULL),
(52, 1, 'nasi goreng', '52_nasi-goreng.jpg', 56000, 42, '2023-11-23 00:54:55', NULL),
(53, 1, 'macaron', '53_macaron.jpg', 85000, 32, '2023-11-23 00:40:55', NULL),
(54, 1, 'mie goreng jawa', '54_mie-goreng-jawa.jpg', 49000, 26, '2023-11-23 00:54:55', NULL),
(55, 1, 'choco cookies', '55_choco-cookies.jpg', 62000, 21, '2023-11-23 00:54:55', NULL),
(56, 2, 'matcha', '56_matcha-tea.jpg', 58000, 9, '2023-11-23 00:54:55', NULL),
(57, 1, 'pancake', '57_pancake.jpg', 76000, 46, '2023-11-23 00:41:13', NULL),
(58, 4, 'jeruk', '58_jeruk.jpg', 40000, 32, '2023-11-23 00:38:54', NULL),
(59, 4, 'lemon', '59_lemon.jpg', 42000, 31, '2023-11-23 00:39:19', NULL),
(60, 3, 'jahe', '60_jahe.jpg', 27000, 41, '2023-11-23 00:39:40', NULL),
(61, 1, 'taco', '61_taco.jpg', 67000, 31, '2023-11-23 00:51:07', NULL),
(62, 1, 'ayam goreng', '62_ayam-goreng.jpg', 48000, 42, '2023-11-23 00:54:55', NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `cartdetails`
--
ALTER TABLE `cartdetails`
  ADD PRIMARY KEY (`kodeDetilKeranjang`),
  ADD KEY `FK_MENDETAIL` (`kodeKeranjang`),
  ADD KEY `FK_TERMASUK` (`kodeProduk`);

--
-- Indeks untuk tabel `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`kodeKeranjang`),
  ADD KEY `FK_Menambahkan` (`kodePelanggan`);

--
-- Indeks untuk tabel `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`kodeKategori`) USING BTREE;

--
-- Indeks untuk tabel `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`kodePelanggan`);

--
-- Indeks untuk tabel `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD PRIMARY KEY (`kodeDetilPesanan`),
  ADD KEY `FK_Memiliki` (`kodePesanan`),
  ADD KEY `FK_Membeli` (`kodeProduk`);

--
-- Indeks untuk tabel `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`kodePesanan`),
  ADD KEY `FK_MEMESAN` (`kodePelanggan`);

--
-- Indeks untuk tabel `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`kodeProduk`) USING BTREE,
  ADD KEY `fk_products_mempunyai_kategori` (`kodeKategori`) USING BTREE;

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `cartdetails`
--
ALTER TABLE `cartdetails`
  MODIFY `kodeDetilKeranjang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `carts`
--
ALTER TABLE `carts`
  MODIFY `kodeKeranjang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `categories`
--
ALTER TABLE `categories`
  MODIFY `kodeKategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `customers`
--
ALTER TABLE `customers`
  MODIFY `kodePelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `orderdetails`
--
ALTER TABLE `orderdetails`
  MODIFY `kodeDetilPesanan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `orders`
--
ALTER TABLE `orders`
  MODIFY `kodePesanan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `products`
--
ALTER TABLE `products`
  MODIFY `kodeProduk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `cartdetails`
--
ALTER TABLE `cartdetails`
  ADD CONSTRAINT `FK_MENDETAIL` FOREIGN KEY (`kodeKeranjang`) REFERENCES `carts` (`kodeKeranjang`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_TERMASUK` FOREIGN KEY (`kodeProduk`) REFERENCES `products` (`kodeProduk`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `FK_Menambahkan` FOREIGN KEY (`kodePelanggan`) REFERENCES `customers` (`kodePelanggan`);

--
-- Ketidakleluasaan untuk tabel `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD CONSTRAINT `FK_Membeli` FOREIGN KEY (`kodeProduk`) REFERENCES `products` (`kodeProduk`),
  ADD CONSTRAINT `FK_Memiliki` FOREIGN KEY (`kodePesanan`) REFERENCES `orders` (`kodePesanan`);

--
-- Ketidakleluasaan untuk tabel `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `FK_MEMESAN` FOREIGN KEY (`kodePelanggan`) REFERENCES `customers` (`kodePelanggan`);

--
-- Ketidakleluasaan untuk tabel `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `fk_products_mempunyai_kategori` FOREIGN KEY (`kodeKategori`) REFERENCES `categories` (`kodeKategori`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

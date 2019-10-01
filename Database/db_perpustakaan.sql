-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 01 Okt 2019 pada 04.11
-- Versi Server: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_perpustakaan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_buku`
--

CREATE TABLE `data_buku` (
  `id_buku` varchar(50) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `kode_buku` varchar(20) NOT NULL,
  `id_jenis` varchar(50) NOT NULL,
  `id_klas` varchar(50) NOT NULL,
  `isbn` varchar(200) NOT NULL,
  `penulis` varchar(200) NOT NULL,
  `penerbit` varchar(200) NOT NULL,
  `id_lokasi` varchar(50) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_buku`
--

INSERT INTO `data_buku` (`id_buku`, `judul`, `kode_buku`, `id_jenis`, `id_klas`, `isbn`, `penulis`, `penerbit`, `id_lokasi`, `keterangan`, `jumlah`, `created`, `modified`) VALUES
('5030e334-7c82-4f66-a401-91ebfe6e790f', 'otodidak pemograman ruby untuk pemula', 'BK-201909290013', '1f14756f-5d4c-494b-bf61-23ee81247023', '25b6c1a0-c44e-4db9-a280-e57495e820e0', '87206464364121', 'Dint Hamdi', 'CV. Jadilah sukses', '2950a32a-e961-4d52-b1b2-47d681bf3142', '', 10, '2019-09-29 20:33:36', '2019-10-01 08:19:47'),
('52b503da-eb28-41eb-b659-9edf5591aaaa', 'Kewirausahaan &amp; Manajemen', 'BK-201909290001', 'da1f3909-2d2b-406f-9308-ec99a20a7322', 'f831cd4d-0bb1-4543-889c-db7762a75c0e', '0382931272343', 'Dint Hamdi', 'CV. Buku Kita', '2950a32a-e961-4d52-b1b2-47d681bf3142', '', 10, '2019-09-29 11:43:22', '2019-09-29 20:11:42'),
('588244f8-d4b8-47c6-b421-113bd53b8f14', 'Sistem Informasi Pemetaan', 'BK-201909290002', '1f14756f-5d4c-494b-bf61-23ee81247023', 'd4fa8a43-0711-4102-b9ca-cdc6ebd124a9', '0328313715353', 'Dint Hamdi', 'CV. Buku Kita', '2950a32a-e961-4d52-b1b2-47d681bf3142', '', 10, '2019-09-29 13:31:28', '2019-10-01 08:20:00'),
('5a5148f8-2bd7-489b-a43d-3d8469de8344', '100% forex : belajar menghasilkan uang', 'BK-201909290005', 'facd797b-2eb6-4c75-8c04-002ba24d0ec5', 'f831cd4d-0bb1-4543-889c-db7762a75c0e', '0382931272361', 'Dint Hamdi', 'Buku Bagus', '771c257c-66f5-41e0-810f-38c298d05b4a', '', 10, '2019-09-29 20:20:58', '2019-10-01 08:20:00'),
('5f1e5549-35cd-4801-bc2c-0d15a51a2619', 'mahir berbahasa inggris dalam sepekan', 'BK-201909290012', 'da1f3909-2d2b-406f-9308-ec99a20a7322', '6f16804e-d529-45bc-aa21-0e4fc27cd0d6', '0328313715312', 'Imam Hambali', 'CV. Nanatsu No Taizai', '214d2072-189e-4e25-aed1-1c085f649041', '', 10, '2019-09-29 20:33:11', '2019-10-01 09:09:25'),
('6acde7f7-0140-429a-91ae-c994b07d0e62', '100 fakta yang mencerdaskan anda', 'BK-201909290004', 'da1f3909-2d2b-406f-9308-ec99a20a7322', 'f831cd4d-0bb1-4543-889c-db7762a75c0e', '0382931232343', 'Andi Hidayat', 'CV. Jadilah sukses', '2950a32a-e961-4d52-b1b2-47d681bf3142', '', 10, '2019-09-29 20:15:47', '2019-10-01 08:20:00'),
('7aa25a2e-9212-43f7-9f7f-c0f2586db19d', 'anatomi &amp; fisiologi terapan dalam kebidanan ed.3', 'BK-201909290011', 'facd797b-2eb6-4c75-8c04-002ba24d0ec5', 'f831cd4d-0bb1-4543-889c-db7762a75c0e', '0382931272354', 'Dint Hamdi', 'CV. Nanatsu No Taizai', '2950a32a-e961-4d52-b1b2-47d681bf3142', '', 10, '2019-09-29 20:32:44', '2019-10-01 08:20:00'),
('812671bc-45ef-44ec-9376-511c65d13a37', 'spiritual entrepreneurship', 'BK-201909290010', '1f14756f-5d4c-494b-bf61-23ee81247023', 'f831cd4d-0bb1-4543-889c-db7762a75c0e', '0382931272398', 'Andi Hidayat', 'CV. Jadilah sukses', '771c257c-66f5-41e0-810f-38c298d05b4a', '', 10, '2019-09-29 20:32:20', '2019-10-01 08:20:00'),
('94fdc3aa-0bc7-438f-8c01-3cf2a1d888fe', 'bedah kebidanan ed.12', 'BK-201909290015', '1f14756f-5d4c-494b-bf61-23ee81247023', 'f831cd4d-0bb1-4543-889c-db7762a75c0e', '092126464364121', 'Imam Hambali', 'CV. Jadilah sukses', '9ca5d31b-fdc0-4027-aaa2-c76bf18ba36c', '', 10, '2019-09-29 20:34:53', '2019-10-01 08:20:00'),
('97a111da-86ba-4755-93c3-3a6221d54c42', 'bahasa indonesia ekspresi diri dan akademik', 'BK-201909290016', 'da1f3909-2d2b-406f-9308-ec99a20a7322', 'f831cd4d-0bb1-4543-889c-db7762a75c0e', '0382931272143', 'Imam Hambali', 'CV. Jadilah sukses', '2950a32a-e961-4d52-b1b2-47d681bf3142', '', 10, '2019-09-29 20:35:16', '2019-10-01 08:20:00'),
('9845a4ac-faea-48bd-8b34-ca4b1390b266', '200 rekor menakjubkan bumi nusantara', 'BK-201909290007', 'da1f3909-2d2b-406f-9308-ec99a20a7322', 'd4fa8a43-0711-4102-b9ca-cdc6ebd124a9', '009426464364121', 'Dint Hamdi', 'CV. Jadilah sukses', '771c257c-66f5-41e0-810f-38c298d05b4a', '', 10, '2019-09-29 20:23:56', '2019-10-01 08:20:00'),
('a45c2474-21e4-43d4-a631-184b18120c59', '200 rekor menakjubkan bumi nusantara', 'BK-201909290008', '1f14756f-5d4c-494b-bf61-23ee81247023', 'f831cd4d-0bb1-4543-889c-db7762a75c0e', '09812646436434', 'Andi Hidayat', 'CV. Jadilah sukses', '214d2072-189e-4e25-aed1-1c085f649041', '', 10, '2019-09-29 20:26:01', '2019-10-01 08:20:00'),
('b24aa85b-f5ee-46b0-bf44-6c873f8bfe0e', 'anatomi &amp; fisiologi tubuh manusia', 'BK-201909290014', 'facd797b-2eb6-4c75-8c04-002ba24d0ec5', '0e70c3fa-c45a-4eb3-ba80-5513f1e950d7', '09656464364121', 'Anderson', 'CV. Info islamku', 'bb88db1f-f4cd-4adb-816b-7570766828da', '', 10, '2019-09-29 20:34:18', '2019-10-01 08:20:00'),
('b79f82ba-9e48-4e9c-a26a-b3d2e6c1eeaf', 'pemrograman dasar web', 'BK-201910010017', '1f14756f-5d4c-494b-bf61-23ee81247023', '6f16804e-d529-45bc-aa21-0e4fc27cd0d6', '0723182143', 'Dint Hamdi ', 'Buku Bagus', 'bb88db1f-f4cd-4adb-816b-7570766828da', '', 10, '2019-10-01 08:18:23', '2019-10-01 08:20:00'),
('eae612f0-62b0-4915-998b-d52e36989157', '7 keajaiban rezeki', 'BK-201909290009', 'da1f3909-2d2b-406f-9308-ec99a20a7322', 'f831cd4d-0bb1-4543-889c-db7762a75c0e', '009926464364121', 'Wahid', 'CV. Nanatsu No Taizai', '771c257c-66f5-41e0-810f-38c298d05b4a', '', 10, '2019-09-29 20:31:51', '2019-10-01 09:11:29'),
('f240f408-85c0-4b15-8f9c-d8783add9f1d', '200 rekor menakjubkan bumi nusantara', 'BK-201909290006', '1f14756f-5d4c-494b-bf61-23ee81247023', 'd4fa8a43-0711-4102-b9ca-cdc6ebd124a9', '41026464364121', 'Imam Hambali', 'CV. Jadilah sukses', '214d2072-189e-4e25-aed1-1c085f649041', '', 10, '2019-09-29 20:22:58', '2019-10-01 08:20:00'),
('fc6a9dfe-06f4-4629-a100-97d22aeac8f6', 'Peristiwa alam', 'BK-201909290003', 'facd797b-2eb6-4c75-8c04-002ba24d0ec5', '72f22f29-fb9b-455b-9e04-40406ee75e10', '4141426464364', 'Andi Hidayat', 'CV. Jadilah sukses', '771c257c-66f5-41e0-810f-38c298d05b4a', '', 10, '2019-09-29 20:07:50', '2019-10-01 08:20:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_ebook`
--

CREATE TABLE `data_ebook` (
  `id_ebook` varchar(50) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `kode_ebook` varchar(20) NOT NULL,
  `id_jenis` varchar(50) NOT NULL,
  `id_klas` varchar(50) NOT NULL,
  `penulis` varchar(200) NOT NULL,
  `file_ebook` varchar(200) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `created` date DEFAULT NULL,
  `modified` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_ebook`
--

INSERT INTO `data_ebook` (`id_ebook`, `judul`, `kode_ebook`, `id_jenis`, `id_klas`, `penulis`, `file_ebook`, `keterangan`, `created`, `modified`) VALUES
('138c0c22-02bb-457d-a06a-7cf1654f9187', 'pemrograman web', 'EB-201910010003', '1f14756f-5d4c-494b-bf61-23ee81247023', '65ee64bb-cc34-4f1a-928c-ab9674f77136', 'Anderson', 'ebook-191001-51a5ee8715.pdf', '', '2019-10-01', NULL),
('3ac48c21-957c-466c-82ff-aa23d3b5a096', 'pemrograman dasar java', 'EB-201910010004', '1f14756f-5d4c-494b-bf61-23ee81247023', '65ee64bb-cc34-4f1a-928c-ab9674f77136', 'Andi Hidayat', 'ebook-191001-c7f8d7b22f.pdf', '', '2019-10-01', NULL),
('509b5a55-8c07-4c3a-935e-230482154c4a', 'codeigniter pemula', 'EB-201910010002', '1f14756f-5d4c-494b-bf61-23ee81247023', 'f831cd4d-0bb1-4543-889c-db7762a75c0e', 'Dint Hamdi ', 'ebook-191001-20729a8120.pdf', '', '2019-10-01', NULL),
('afb472fc-74d2-4852-a6cb-4b2065dbcecd', 'bedah kebidanan ed.12', 'EB-201910010005', 'da1f3909-2d2b-406f-9308-ec99a20a7322', 'f831cd4d-0bb1-4543-889c-db7762a75c0e', 'Dint Hamdi ', 'ebook-191001-f4510636d5.pdf', '', '2019-10-01', NULL),
('cc234b1b-8111-427a-a312-6dcf7e4cd14b', 'pemrograman kotlin pemula', 'EB-201910010006', '1f14756f-5d4c-494b-bf61-23ee81247023', '65ee64bb-cc34-4f1a-928c-ab9674f77136', 'Dint Hamdi ', 'ebook-191001-2346d0baf2.pdf', '', '2019-10-01', NULL),
('e35e10fe-2e92-4913-b5ff-7d725d6d07a5', 'Peristiwa alam', 'EB-201909300001', '1f14756f-5d4c-494b-bf61-23ee81247023', '25b6c1a0-c44e-4db9-a280-e57495e820e0', 'Dint Hamdi ', 'ebook-190930-634e9cc901.pdf', '', '2019-09-30', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_bacaan`
--

CREATE TABLE `jenis_bacaan` (
  `id_jenis` varchar(50) NOT NULL,
  `kode_jenis` varchar(20) NOT NULL,
  `nama_jenis` varchar(200) NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jenis_bacaan`
--

INSERT INTO `jenis_bacaan` (`id_jenis`, `kode_jenis`, `nama_jenis`, `created`, `modified`) VALUES
('1f14756f-5d4c-494b-bf61-23ee81247023', 'BCA-26003', 'ebook', '2019-09-26 21:17:27', '2019-09-26 21:17:50'),
('da1f3909-2d2b-406f-9308-ec99a20a7322', 'BCA-26002', 'novel', '2019-09-26 21:16:35', '2019-09-26 21:16:40'),
('facd797b-2eb6-4c75-8c04-002ba24d0ec5', 'BCA-26001', 'buku', '2019-09-26 21:16:30', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `klasifikasi_buku`
--

CREATE TABLE `klasifikasi_buku` (
  `id_klas` varchar(50) NOT NULL,
  `kode_klas` varchar(20) NOT NULL,
  `nama_klas` varchar(100) NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `klasifikasi_buku`
--

INSERT INTO `klasifikasi_buku` (`id_klas`, `kode_klas`, `nama_klas`, `created`, `modified`) VALUES
('0599346a-5cab-4a18-9b8b-7ff8804dc0ab', 'KLS-26015', 'Biologi', '2019-09-26 09:59:54', NULL),
('07f5e1bc-a328-4c5f-84d8-ea9f6d858c8a', 'KLS-26003', 'Filsafat', '2019-09-26 09:56:29', NULL),
('0a620600-8d11-4508-8df3-e6f708b10c6d', 'KLS-26011', 'Fisika', '2019-09-26 09:59:20', NULL),
('0e70c3fa-c45a-4eb3-ba80-5513f1e950d7', 'KLS-26019', 'Teknik', '2019-09-26 10:04:49', NULL),
('10e1ba9f-b5d7-420c-a452-f33a7b11d15d', 'KLS-26018', 'Teknologi', '2019-09-26 10:01:02', NULL),
('25b6c1a0-c44e-4db9-a280-e57495e820e0', 'KLS-26020', 'Pertanian', '2019-09-26 10:07:30', NULL),
('389efae7-da0a-445c-b422-1d656a059a46', 'KLS-26014', 'Fosil dan kehidupan prasejarah', '2019-09-26 09:59:49', NULL),
('65ee64bb-cc34-4f1a-928c-ab9674f77136', 'KLS-26022', 'Teknik Kimia', '2019-09-26 10:07:55', NULL),
('6f16804e-d529-45bc-aa21-0e4fc27cd0d6', 'KLS-28024', 'bahasa', '2019-09-28 22:35:14', NULL),
('72f22f29-fb9b-455b-9e04-40406ee75e10', 'KLS-26013', 'Ilmu kebumian dan geologi', '2019-09-26 09:59:42', NULL),
('76a91f43-1b0e-4d58-b977-1f9893dfd63c', 'KLS-26006', 'Pendidikan', '2019-09-26 09:58:48', NULL),
('828c541b-62e6-459c-a485-44d6cd000a9f', 'KLS-26005', 'Hukum', '2019-09-26 09:58:39', NULL),
('84395a46-9279-4a90-a399-83de5c522840', 'KLS-26010', 'Astronomi', '2019-09-26 09:59:14', NULL),
('8ad019c8-ee1a-402a-81a1-782ae3b90dee', 'KLS-26012', 'Kimia', '2019-09-26 09:59:36', NULL),
('8ee5c532-b728-4c1a-b23a-66303f2c882d', 'KLS-26016', 'Tanaman', '2019-09-26 09:59:59', NULL),
('bd8d52cc-080b-4d0b-a174-f4c6b6a20154', 'KLS-26007', 'Administrasi publik dan ilmu kemiliteran', '2019-09-26 09:58:55', NULL),
('c454ab57-151e-41b2-8d9c-e4ca3aeca965', 'KLS-26009', 'Matematika', '2019-09-26 09:59:09', NULL),
('d4fa8a43-0711-4102-b9ca-cdc6ebd124a9', 'KLS-26021', 'Managemen Rumah Tangga dan Keluarga', '2019-09-26 10:07:38', NULL),
('d594d4f5-1416-4402-84c8-280f3260dc6d', 'KLS-26008', 'Sains', '2019-09-26 09:59:02', NULL),
('d86bbeba-31a3-44a3-9bfa-6d486a82e038', 'KLS-26002', 'agama', '2019-09-26 09:55:31', NULL),
('dad5ed28-404f-46d5-996d-c60e9be2799b', 'KLS-26001', 'Pemrograman', '2019-09-26 09:55:00', NULL),
('efdb5aca-b96e-4c78-9c8a-80472352c91e', 'KLS-26004', 'Ekonomi', '2019-09-26 09:58:33', NULL),
('f831cd4d-0bb1-4543-889c-db7762a75c0e', 'KLS-26023', 'Konstruksi', '2019-09-26 10:08:01', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id_pinjam` int(11) NOT NULL,
  `kode_pinjam` varchar(50) NOT NULL,
  `id_buku` varchar(50) NOT NULL,
  `rfid_mhs` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `jam` time NOT NULL,
  `jatuh_tempo` date NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `peminjaman`
--

INSERT INTO `peminjaman` (`id_pinjam`, `kode_pinjam`, `id_buku`, `rfid_mhs`, `tanggal`, `jam`, `jatuh_tempo`, `jumlah`) VALUES
(1, 'TRX-20191001001', 'a45c2474-21e4-43d4-a631-184b18120c59', '0002310329', '2019-10-01', '08:06:00', '2019-10-03', 1),
(2, 'TRX-20191001002', '94fdc3aa-0bc7-438f-8c01-3cf2a1d888fe', '041080207004', '2019-10-01', '08:07:00', '2019-10-03', 1),
(3, 'TRX-20191001003', '812671bc-45ef-44ec-9376-511c65d13a37', '01050104001', '2019-10-01', '08:08:00', '2019-10-03', 1),
(4, 'TRX-20191001003', '7aa25a2e-9212-43f7-9f7f-c0f2586db19d', '01050104001', '2019-10-01', '08:08:00', '2019-10-03', 1),
(5, 'TRX-20191001004', '9845a4ac-faea-48bd-8b34-ca4b1390b266', '041020707008', '2019-10-01', '08:10:00', '2019-10-03', 1),
(6, 'TRX-20191001004', 'b24aa85b-f5ee-46b0-bf44-6c873f8bfe0e', '041020707008', '2019-10-01', '08:10:00', '2019-10-03', 1),
(7, 'TRX-20191001005', 'f240f408-85c0-4b15-8f9c-d8783add9f1d', '01040306005', '2019-10-01', '08:11:00', '2019-10-03', 1),
(8, 'TRX-20191001005', '97a111da-86ba-4755-93c3-3a6221d54c42', '01040306005', '2019-10-01', '08:11:00', '2019-10-03', 1);

--
-- Trigger `peminjaman`
--
DELIMITER $$
CREATE TRIGGER `peminjaman_buku` AFTER INSERT ON `peminjaman` FOR EACH ROW BEGIN
UPDATE data_buku SET jumlah=jumlah-NEW.jumlah
WHERE id_buku = NEW.id_buku;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengembalian`
--

CREATE TABLE `pengembalian` (
  `id_kembali` int(11) NOT NULL,
  `kode_pinjam` varchar(50) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `rfid_mhs` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `jumlah` int(11) NOT NULL,
  `denda` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengembalian`
--

INSERT INTO `pengembalian` (`id_kembali`, `kode_pinjam`, `judul`, `rfid_mhs`, `tanggal`, `jumlah`, `denda`) VALUES
(1, 'TRX-20190930001', 'Peristiwa alam', '0002310329', '2019-09-30', 1, '2000'),
(2, 'TRX-20190930002', '200 rekor menakjubkan bumi nusantara', '0002310329', '2019-09-30', 1, '2000'),
(3, 'TRX-20190930003', 'Peristiwa alam', '0002310329', '2019-09-30', 1, '2000'),
(4, 'TRX-20190930004', '200 rekor menakjubkan bumi nusantara', '0002310329', '2019-09-30', 1, '2000'),
(15, 'TRX-20191001006', 'mahir berbahasa inggris dalam sepekan', '0002310329', '2019-10-01', 25, ''),
(16, 'TRX-20191001006', '7 keajaiban rezeki', '00023103291', '2019-10-01', 2, '');

--
-- Trigger `pengembalian`
--
DELIMITER $$
CREATE TRIGGER `pengembalian_barang` AFTER INSERT ON `pengembalian` FOR EACH ROW BEGIN
UPDATE data_buku SET jumlah = jumlah+NEW.jumlah
WHERE judul = NEW.judul;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `peta_lokasi`
--

CREATE TABLE `peta_lokasi` (
  `id_lokasi` varchar(50) NOT NULL,
  `kode_lokasi` varchar(255) NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `peta_lokasi`
--

INSERT INTO `peta_lokasi` (`id_lokasi`, `kode_lokasi`, `created`, `updated`) VALUES
('214d2072-189e-4e25-aed1-1c085f649041', 'A-002', '2019-09-28 20:07:38', NULL),
('2950a32a-e961-4d52-b1b2-47d681bf3142', 'ab-002', '2019-09-28 20:39:54', NULL),
('483125a3-8949-4adc-8fd1-7c3628bd19c8', 'B-003', '2019-09-28 20:39:24', NULL),
('771c257c-66f5-41e0-810f-38c298d05b4a', 'A-003', '2019-09-28 20:07:43', '2019-09-28 20:08:09'),
('9ca5d31b-fdc0-4027-aaa2-c76bf18ba36c', 'AB-001', '2019-09-28 20:39:07', NULL),
('bb88db1f-f4cd-4adb-816b-7570766828da', 'A-001', '2019-09-28 20:07:13', '2019-09-28 20:07:19'),
('cdf7439d-2d3f-44dd-b9cd-ce0768f28e4b', 'ab-003', '2019-09-28 20:39:42', NULL),
('e4478970-5aac-464f-a930-facdcd3384c2', 'B-002', '2019-09-28 20:39:15', NULL),
('f05f38c8-1de3-460a-8efe-7a66f097293a', 'B-001', '2019-09-28 20:07:25', '2019-09-28 20:07:29');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` enum('0','1') NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `email`, `password`, `level`, `created`, `updated`) VALUES
(1, 'arman nur hidayat', 'admin', 'admin@gmail.com', '$2y$10$JQSdYuXP6FNh77wqf.QFruHhwvicZSXAeNzD6PVJBBKVuqfn6Dvdi', '1', '2019-09-28 12:08:51', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_buku`
--
ALTER TABLE `data_buku`
  ADD PRIMARY KEY (`id_buku`),
  ADD KEY `buku_ibfk_1` (`id_klas`),
  ADD KEY `buku_ibfk_2` (`id_jenis`),
  ADD KEY `id_lokasi` (`id_lokasi`);

--
-- Indexes for table `data_ebook`
--
ALTER TABLE `data_ebook`
  ADD PRIMARY KEY (`id_ebook`),
  ADD KEY `buku_ibfk_1` (`id_klas`),
  ADD KEY `buku_ibfk_2` (`id_jenis`);

--
-- Indexes for table `jenis_bacaan`
--
ALTER TABLE `jenis_bacaan`
  ADD PRIMARY KEY (`id_jenis`);

--
-- Indexes for table `klasifikasi_buku`
--
ALTER TABLE `klasifikasi_buku`
  ADD PRIMARY KEY (`id_klas`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id_pinjam`),
  ADD KEY `id_buku` (`id_buku`);

--
-- Indexes for table `pengembalian`
--
ALTER TABLE `pengembalian`
  ADD PRIMARY KEY (`id_kembali`);

--
-- Indexes for table `peta_lokasi`
--
ALTER TABLE `peta_lokasi`
  ADD PRIMARY KEY (`id_lokasi`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `id_pinjam` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `pengembalian`
--
ALTER TABLE `pengembalian`
  MODIFY `id_kembali` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `data_buku`
--
ALTER TABLE `data_buku`
  ADD CONSTRAINT `data_buku_ibfk_1` FOREIGN KEY (`id_klas`) REFERENCES `klasifikasi_buku` (`id_klas`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `data_buku_ibfk_2` FOREIGN KEY (`id_jenis`) REFERENCES `jenis_bacaan` (`id_jenis`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `data_buku_ibfk_3` FOREIGN KEY (`id_lokasi`) REFERENCES `peta_lokasi` (`id_lokasi`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD CONSTRAINT `peminjaman_ibfk_1` FOREIGN KEY (`id_buku`) REFERENCES `data_buku` (`id_buku`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

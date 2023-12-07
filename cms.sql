-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Des 2023 pada 05.26
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `caraousel`
--

CREATE TABLE `caraousel` (
  `id_caraousel` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Pixsel Art\r\n'),
(2, 'Informasi'),
(3, 'Game\r\n'),
(9, 'Berita\r\n'),
(10, 'Sejarah'),
(11, 'Keagamaan'),
(12, 'Bahasa Jawa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `konfigurasi`
--

CREATE TABLE `konfigurasi` (
  `id_konfigurasi` int(11) NOT NULL,
  `judul_website` varchar(200) NOT NULL,
  `profil_website` text NOT NULL,
  `instagram` varchar(100) NOT NULL,
  `facebook` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `alamat` varchar(150) NOT NULL,
  `no_wa` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `konfigurasi`
--

INSERT INTO `konfigurasi` (`id_konfigurasi`, `judul_website`, `profil_website`, `instagram`, `facebook`, `email`, `alamat`, `no_wa`) VALUES
(1, 'Web CMSXIRC', 'Belajar Membuat web CMS', 'https://www.instagram.com/_dangouu/', 'https://www.facebook.com/profile.php?id=100087066956881', 'arrofisamsung168@gmail.com', 'Ngasem RT 03 RW 09 Karangrejo Kerjo Karanganyar\r\n', '6281329113137');

-- --------------------------------------------------------

--
-- Struktur dari tabel `konten`
--

CREATE TABLE `konten` (
  `id_konten` int(11) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `keterangan` text NOT NULL,
  `foto` varchar(50) NOT NULL,
  `slug` varchar(200) NOT NULL,
  `id_kategori` varchar(20) NOT NULL,
  `tanggal` date NOT NULL,
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `konten`
--

INSERT INTO `konten` (`id_konten`, `judul`, `keterangan`, `foto`, `slug`, `id_kategori`, `tanggal`, `username`) VALUES
(14, 'THE FRONT THAT WAS', 'During the event, players can complete missions in [Limited-Time Support Event] by clearing stages in \'Main Theme\' to obtain rewards, including Emergency Sanity Booster, Emergency Sanity Concentrate, etc. Furthermore, all Operators will earn more Trust in Main Theme stages and Supplies stages after certain requirement being met; some Operators can receive an additional Trust boost. These two types can stack.', '20231008100255.png', 'THE-FRONT-THAT-WAS', '3', '2023-10-08', 'Arrofi'),
(18, 'Pixel Art', '<p><strong>Apa itu PIXEL ART</strong></p>\r\n<p>Pixel art adalah bentuk seni digital yang dibuat dengan menggunakan pixel atau titik-titik kecil sebagai elemen dasarnya. Setiap pixel adalah bagian kecil dari gambar keseluruhan, dan seniman pixel art menggunakan setiap pixel ini dengan hati-hati untuk membuat ilustrasi atau gambar yang utuh. Karena penggunaan pixel yang terbatas, pixel art seringkali memiliki gaya yang sederhana, mirip dengan gaya grafis pada video game klasik.<br /><br /></p>', '20231129084617.png', 'Pixel-Art', '1', '2023-11-29', '2'),
(21, 'Rumah Adat Jawa Tengah', '<p class=\"MsoNormal\"><strong>Joglo</strong> adalah rumah adat tradisional Jawa yang memiliki ciri khas arsitektur yang megah dan artistik. Istilah \"<strong>joglo</strong>\" berasal dari bahasa Jawa yang berarti \"<strong>mendatangkan rezeki</strong>\" atau \"<strong>mendatangkan</strong> <strong>keberuntungan</strong>.\" Rumah joglo umumnya menjadi simbol kekayaan dan kebangsawanan di Jawa.</p>\r\n<p class=\"MsoNormal\">&nbsp;</p>\r\n<p class=\"MsoNormal\">Berikut adalah beberapa ciri khas rumah adat joglo:</p>\r\n<p class=\"MsoNormal\">&nbsp;</p>\r\n<p class=\"MsoNormal\">1. <strong>Atap Limasan</strong>: Salah satu ciri utama joglo adalah atapnya yang khas. Atap joglo disebut atap limasan, yang memiliki bentuk tiga tingkatan. Atap ini terbuat dari bahan kayu dengan ukiran-ukiran indah, dan bagian tengahnya biasanya lebih tinggi daripada bagian pinggirannya.</p>\r\n<p class=\"MsoNormal\">2. <strong>Tiang Soko Guru</strong>: Rumah joglo ditopang oleh sejumlah tiang penyangga yang disebut soko guru. Tiang ini biasanya terbuat dari kayu yang kuat dan diukir dengan motif-motif tradisional Jawa.</p>\r\n<p class=\"MsoNormal\">3. <strong>Ruang Terbuka</strong>: Joglo memiliki ruang terbuka di tengah-tengah bangunan yang disebut pendopo. Pendopo merupakan tempat berkumpul keluarga atau tamu dan sering digunakan untuk kegiatan tradisional seperti upacara adat, perayaan, atau pertemuan.</p>\r\n<p class=\"MsoNormal\">4. <strong>Ukiran Kayu </strong>: Seluruh bagian rumah joglo dihiasi dengan ukiran-ukiran kayu yang sangat indah dan rumit. Motif ukiran ini mencerminkan kekayaan budaya Jawa dan bisa menggambarkan berbagai elemen alam, flora, fauna, atau motif geometris.</p>\r\n<p class=\"MsoNormal\">5. <strong>Tata Letak Simetris</strong>: Bangunan joglo dirancang dengan tata letak simetris. Hal ini menciptakan keseimbangan dan harmoni dalam desain rumah, mencerminkan filosofi Jawa tentang keseimbangan hidup.</p>\r\n<p class=\"MsoNormal\">6. <strong>Material Tradisional</strong>: Bahan-bahan yang digunakan untuk membangun rumah joglo biasanya terbuat dari kayu, batu, dan bambu. Kayu yang paling sering digunakan adalah kayu jati atau kayu merbau karena daya tahan dan keindahannya.</p>\r\n<p class=\"MsoNormal\">7. <strong>Fungsi Ruang</strong>: Rumah joglo biasanya memiliki beberapa fungsi ruang yang terpisah, seperti kamar tidur, ruang keluarga, dapur, dan tempat ibadah. Namun, semuanya terhubung melalui pendopo sebagai pusat aktivitas.</p>\r\n<p class=\"MsoNormal\">&nbsp;</p>\r\n<p class=\"MsoNormal\">Rumah joglo tidak hanya sebagai tempat tinggal, tetapi juga mencerminkan kekayaan budaya dan nilai-nilai tradisional Jawa. Meskipun telah mengalami perkembangan dan modifikasi seiring waktu, rumah joglo tetap menjadi simbol keindahan dan kebangsawanan dalam budaya Jawa.</p>', '20231202045716.png', 'Rumah-Adat-Jawa-Tengah', '12', '2023-12-02', 'Azka GG'),
(22, 'Proklamasi kemerdekaan indonesia', '<p class=\"MsoNormal\">Tentu, berikut adalah informasi tentang Proklamasi Kemerdekaan Indonesia:</p>\r\n<p class=\"MsoNormal\">&nbsp;</p>\r\n<p class=\"MsoNormal\"><strong>1. Tanggal Proklamasi:</strong></p>\r\n<p class=\"MsoNormal\"><span style=\"mso-spacerun: yes;\">&nbsp;</span>Proklamasi Kemerdekaan Indonesia terjadi pada tanggal 17 Agustus 1945.</p>\r\n<p class=\"MsoNormal\"><strong>2. Tempat Proklamasi:</strong></p>\r\n<p class=\"MsoNormal\">Proklamasi ini dibacakan oleh Soekarno dan Mohammad Hatta di Jalan Pegangsaan Timur 56, Jakarta. Saat itu, rumah tersebut menjadi kediaman Soekarno.</p>\r\n<p class=\"MsoNormal\"><strong>3. Pemicu Proklamasi:</strong></p>\r\n<p class=\"MsoNormal\">Proklamasi Kemerdekaan Indonesia dilatarbelakangi oleh keinginan untuk membebaskan Indonesia dari penjajahan kolonial Belanda, yang telah berlangsung selama lebih dari 300 tahun.</p>\r\n<p class=\"MsoNormal\"><strong>4. Penandatangan Proklamasi</strong>:</p>\r\n<p class=\"MsoNormal\">Proklamasi ditandatangani oleh Soekarno sebagai Presiden dan Mohammad Hatta sebagai Wakil Presiden.</p>\r\n<p class=\"MsoNormal\"><strong>5. Isi Proklamasi</strong>:</p>\r\n<p class=\"MsoNormal\">Isi proklamasi menyatakan kemerdekaan Indonesia. Sebagian dari isi proklamasi ini sebagai beriku<em>t:</em></p>\r\n<p class=\"MsoNormal\"><em>\"Kami, bangsa Indonesia, dengan ini menjatakan kemerdekaan Indonesia. Hal-hal yang mengenai pemindahan kekuasaan dan lain-lain diselenggarakan dengan cara saksama dan dalam tempo yang sesingkat-singkatnya.\"</em></p>\r\n<p class=\"MsoNormal\"><strong>6. Reaksi Pihak Belanda:</strong></p>\r\n<p class=\"MsoNormal\">Belanda awalnya menolak mengakui kemerdekaan Indonesia dan berusaha untuk mengembalikan kendali mereka. Konflik bersenjata pun terjadi, yang dikenal sebagai Perang Kemerdekaan Indonesia atau Agresi Militer Belanda I.</p>\r\n<p class=\"MsoNormal\"><strong>7. Pengakuan Internasional:</strong></p>\r\n<p class=\"MsoNormal\">Meskipun awalnya tidak diakui oleh banyak negara, seiring berjalannya waktu, dukungan internasional untuk kemerdekaan Indonesia semakin meningkat, dan Indonesia akhirnya diakui sebagai negara yang merdeka.</p>\r\n<p class=\"MsoNormal\"><strong>8. Hari Kemerdekaan:</strong></p>\r\n<p class=\"MsoNormal\">17 Agustus kemudian ditetapkan sebagai Hari Kemerdekaan Indonesia dan dirayakan setiap tahun sebagai hari libur nasional.</p>\r\n<p class=\"MsoNormal\">&nbsp;</p>\r\n<p class=\"MsoNormal\">Proklamasi Kemerdekaan Indonesia adalah peristiwa bersejarah yang menandai awal dari perjuangan panjang untuk mempertahankan dan membangun negara Indonesia. Itu menjadi tonggak penting dalam sejarah perjuangan kemerdekaan Indonesia dari penjajahan.</p>', '20231202051914.png', 'Proklamasi-kemerdekaan-indonesia', '10', '2023-12-02', 'Azka GG');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(70) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `password` varchar(200) NOT NULL,
  `level` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `nama`, `password`, `level`) VALUES
(10, 'Azka GG', 'Azka GG', '1903485d4e380f94c98fa4b6a81e091a', 'Admin'),
(15, 'Arrofi', 'Arrofi', '7f3f6085c0992d8c2c0d3f88e9c3ef2b', 'Admin'),
(16, '1', '1', 'c4ca4238a0b923820dcc509a6f75849b', 'Kontributor'),
(17, '2', '2', 'c81e728d9d4c2f636f067f89cc14862c', 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `caraousel`
--
ALTER TABLE `caraousel`
  ADD PRIMARY KEY (`id_caraousel`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `konfigurasi`
--
ALTER TABLE `konfigurasi`
  ADD PRIMARY KEY (`id_konfigurasi`);

--
-- Indeks untuk tabel `konten`
--
ALTER TABLE `konten`
  ADD PRIMARY KEY (`id_konten`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `caraousel`
--
ALTER TABLE `caraousel`
  MODIFY `id_caraousel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `konfigurasi`
--
ALTER TABLE `konfigurasi`
  MODIFY `id_konfigurasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `konten`
--
ALTER TABLE `konten`
  MODIFY `id_konten` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

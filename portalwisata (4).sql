-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 28, 2019 at 09:24 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portalwisata`
--

-- --------------------------------------------------------

--
-- Table structure for table `bluelagoons`
--

CREATE TABLE `bluelagoons` (
  `id` int(10) UNSIGNED NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bluelagoons`
--

INSERT INTO `bluelagoons` (`id`, `file`, `keterangan`, `created_at`, `updated_at`) VALUES
(2, '1577558305_blue.jpg', 'Blue Lagoon Jogja merupakan salah satu obyek wisata yang di jadikan tempat pemandian sumber mata air ini yang muncul dari permukaan tanah di dalam kolam. Apabila Anda melihat ke dalam kolam akan terlihat gelembung-gelembung kecil yang muncul dari permukaan tanah. Hal itu menunjukkan bahwa terdapat air yang terus menerus muncul dari permukaan tanah tersebut. Meskipun Blue Lagoon di Jogja ini sudah lama namun tempat wisata ini mulai tenar dipertengahan tahun 2014. Pemandian Blue Lagoon ini terletak di Desa Dalem, Widodomartani, Ngemplak, Sleman, Yogyakarta. Menurut salah satu warga, tempat ini juga dikenal dengan nama Tirta Budi. Tempat ini ramai pengunjung pada saat hari sabtu, minggu dan juga hari libur lainnya. Biasanya Blue Lagoon ini kebanyakan dikunjungi oleh anak-anak muda yang ingin berenang, foto-foto atau sekedar bermain air. Apabila Anda ingin berkunjung ke tempat ini, sebaiknya Anda berpakaian santai dan menyediakan baju cadangan karena tempat ini merupakan wisata air.\r\n\r\nUntuk bisa menikmati segarnya air alami di sini tentu saja para anda akan diharuskan membayar sejumlah harga tiket masuk Blue Lagoon Jogja. Tapi jangan khawatir, karena harga tiket masuk Blue Lagoon Jogja yang harus dibayarkan tidaklah mahal. Anda cukup merogoh kocek sedalam Rp 3.000,- saja untuk setiap orangnya. Sedangkan jika anda membawa kendaraan roda dua, untuk ongkos parkirnya anda cukup membayar Rp 2.000,- Bagi anda yang berkunjung ke Blue Lagoon Jogja ini anda tidak perlu khawatir dengan fasilitas yang ada. Tempat ini juga telah didukung dengan beberapa fasilitas umum yang bisa digunakan untuk menunjang kenyamanan para pengunjung. Misalnya toilet umum, ruang ganti pakaian, bahkan juga beberapa warung makan kecil juga telah tersedia di area ini. Jadi selain berenang anda juga bisa menikmati suasana alam yang asri sambil minum kopi atau sekadar duduk-duduk ngobrol dengan santai. Akses menuju tempat ini tergolong mudah. Dari pusat Kota Jogja, wisatawan cukup menyusuri Jalan Kaliurang. Sesampainya di pertigaan Besi – Jangkang (Jalan Kaliurang Km 13), silahkan belok kanan dan ikuti jalan raya hingga Pasar Jangkang. Dari pertigaan Pasar Jangkang ambil arah kanan sekitar 100 meter dan ikuti petunjuk arah yang menuju Blue Lagoon.', '2019-12-28 11:38:25', '2019-12-28 11:38:25');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomor` int(11) NOT NULL,
  `komen` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `nama`, `email`, `nomor`, `komen`, `created_at`, `updated_at`) VALUES
(1, 'Farrel Muh Shihab', '1132321@asdas', 98889, 'sadasda', '2019-12-07 02:40:03', '2019-12-07 02:40:03'),
(2, 'andini', 'eweaass@gmal', 909, 'wah keren aplikasinya', '2019-12-07 02:42:43', '2019-12-07 02:42:43');

-- --------------------------------------------------------

--
-- Table structure for table `content2s`
--

CREATE TABLE `content2s` (
  `id` int(10) UNSIGNED NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `content2s`
--

INSERT INTO `content2s` (`id`, `file`, `keterangan`, `created_at`, `updated_at`) VALUES
(4, '1577559528_bluelagoon.jpg', 'awewaewaewa', '2019-12-28 11:58:48', '2019-12-28 11:58:48');

-- --------------------------------------------------------

--
-- Table structure for table `content3s`
--

CREATE TABLE `content3s` (
  `id` int(10) UNSIGNED NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `content3s`
--

INSERT INTO `content3s` (`id`, `file`, `keterangan`, `created_at`, `updated_at`) VALUES
(2, '1577040606_18523224(1).jpg', 'wawawa', '2019-12-22 11:50:06', '2019-12-22 11:50:06');

-- --------------------------------------------------------

--
-- Table structure for table `contents`
--

CREATE TABLE `contents` (
  `id` int(10) UNSIGNED NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contents`
--

INSERT INTO `contents` (`id`, `file`, `keterangan`, `created_at`, `updated_at`) VALUES
(10, '1576696439_museumullen.jpg', 'Ullen Sental, Museum dengan Suasana Mistis yang Menyimpan Koleksi Dinasti Kerajaan Mataram', '2019-12-18 12:13:59', '2019-12-18 12:13:59');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jogjabays`
--

CREATE TABLE `jogjabays` (
  `id` int(10) UNSIGNED NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jogjabays`
--

INSERT INTO `jogjabays` (`id`, `file`, `keterangan`, `created_at`, `updated_at`) VALUES
(3, '1577382444_jogjabay.jpg', 'Liburan adalah sesuatu yang sangat menyenangkan tetapi, Sobat Native mungkin bingung mau liburan kemana? Udara panas memang paling tepat untuk berenang dan bermain air. Nah, permainan air ini menjadi sesuatu hal yang paling menyenangkan. Di Yogyakata, ada banyak sekali kawasan yang bisa dipakai untuk berenang.\r\n\r\n\r\nDiantara semua tempat tersebut, ada satu tempat yang membuat semua mata akan tertuju ke tempat ini. Jogja Bay Pirates Adventure Waterpark adalah tempatnya bermain air. Destinasi kelas dunia dan menjadi waterpark terbesar di Indonesa dan Asia Tenggara ini menyimpan segala keseruan dan tantangan menarik.\r\n\r\nKawasan ini dibangun diatas tanah milik kas daerah maguwoharjo. Dengan luas kurang lebih 7,7 ha. Kurang lebih ada 19 wahana permainan yang bisa dinikmati oleh Sobat Native. Banyak wisatawan berkata bila Jogja bay adalah waterpark tercanggih dan terlengkap di Indonesia dengan Tema Bajak laut.\r\n\r\nPihak pengelola Jogja Bay memadukan dua buah konsep antara tradisi jogja dan tokoh bajak laut eropa yang asyik dan menyenangkan. Sebuah perkampungan Bajak laut yang dikemas dengan penuh tanaman hijau dan thematic old pirates.\r\n\r\nCukup menyenangkan bukan berada di kawasan ini?\r\n\r\n\r\nWahana Jogja Bay ini dikemas secara khusus untuk permainan dan edukasi. Dimana, Sobat Native akan disuguhkan dengan wahana yang berpadu dengan gempa bumi dan juga tsunami. Ada sedikitnya 8 ombak besar yang tersedia disini. Sobat Native, bisa belajar bagaimana caranya menghadapi gempa bumi dan tsunami.Jogja Bay juga menghadirkan beberapa ikon karnaval yang bisa disaksikan pertunjukkannya setiap hari sabtu dan minggu di Harbour Teater. Pertunjukan Spektakuler ini akan dimulai pada pukul 3 sore. Sobat Native pun juga bisa berfoto-foto ria dengan karakter-karakter tersebut. Drama musikal ini menceritakan tentang jogja bay dengan judul The Guardian Past In The Future.Nah, di tempat ini Sobat Native bisa menkmati museum air water for life. Museum ini akan membahas secara tuntas bagaimana air yang berfungsi untuk tubuh. Selain itu, ada pula sejarah panjang mengenai selokan mataram, tempat pengaliran air terbesar di Yogyakarta dan namanya sudah dikenal oleh seluruh warga Yogyakarta.', '2019-12-26 10:47:24', '2019-12-26 10:47:24');

-- --------------------------------------------------------

--
-- Table structure for table `kembangarums`
--

CREATE TABLE `kembangarums` (
  `id` int(10) UNSIGNED NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kembangarums`
--

INSERT INTO `kembangarums` (`id`, `file`, `keterangan`, `created_at`, `updated_at`) VALUES
(2, '1577552152_kembangarum.jpg', 'Desa Wisata Kembang Arum ini adalah desa yang telah diresmikan pada pertengahan tahun 2005. Pemandangan di Desa Wisata Kembang Arum yang bersih dan tertata rapi membuat para pengunjung betah berlama lama disini. Suasana yang ada sangat tenang dengan perumahan tradisional, pemandangan yang asri dan juga udara yang segar. Desa Wisata Kembang Arum ini menawarkan wisata edukasi dan alam sebagai sajian untuk para pengunjung. Desa wisata ini manfaatkan tanah seluas 22 hektar yang terdiri dari tanah warga, kas desa dan sanggar pratista. Pak Hery Kustriyatmo sebagai pengelola mampu menggerakkan ekonomi lokal dengan merespon potensi alam yang telah ditata dengan indah sehingga desa ini sudah didatangani sekitar 65.000 orang baik lokal maupun mancanegara. Kegiatan kegiatan yang ada dalam desa wisata ini banyak melibatkan peran masyarakat setempat untuk berpartisipasi secara aktif. Dengan melibatkan masyarakat secara langsung, hal ini menjadikan warga lokal sebagai tuan rumah di negerinya sendiri serta mampu menciptakan rasa memiliki terhadap desanya sendiri. Paket acara wisata yang masuk dalam agenda kegiatan Desa Wisata Kembang Arum pun juga berasal dari kegiatan sehari hari warga yang dilakukan secara inisiatif oleh warga sekitar sendiri. Di Kembang Arum ini juga terdapat fasilitas Outbound yang baik untuk anak anak karena mereka akan diajak untuk bergerak sekaligus memaksimalkan penggunaan otak kanan dan kiri. Dari Outbound para pengunjung dapat mengenali karakter seseorang apakah penuh motivasi, memiliki jiwa kepemimpinanm pantang menyerah, dan lain sebagainya. Beberapa permainan tradisional yang ada disini diantaranya egrang, engklak, dakon, gobak sodor, dan lain lain. Selain itu pada saat musim tanam padi tiba, para pengunjung juga dapat menikmati edukasi dan terlibat langsung dalam kegiatan mengolah sawah seperti membajak sawah dan menanam padi. Pengalaman bercocok tanam langsung dari sawah dapat menjadikan pengalaman yang unik dan menarik terutama bagi generasi muda, terutama untuk menghargai makanan yang telah tersedia di atas meja.', '2019-12-28 09:55:52', '2019-12-28 09:55:52');

-- --------------------------------------------------------

--
-- Table structure for table `konten`
--

CREATE TABLE `konten` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `konten` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `konten`
--

INSERT INTO `konten` (`id`, `konten`, `created_at`, `updated_at`) VALUES
(1, 'Candi Prambanan adalah candi Hindu terbesar di Indonesia sekaligus salah satu candi yang terindah di Asia Tenggara. Menurut prasasti Siwagrha, candi ini mulai dibangun pada masa pemerintahan Rakai Pikatan (pertengahan abad ke-9) dari Kerajaan Mataram Kuno.\r\n\r\nNamun, oleh sebab yang masih misterius, pusat kerajaan pindah ke Jawa Timur di akhir abad ke-10. Candi yang megah ini pun terbengkalai dan sebagian tertimbun material letusan Gunung Merapi. Perlahan-lahan, wilayah Prambanan menjadi hutan lebat.\r\n\r\nBeratus-ratus tahun kemudian barulah reruntuhan candi ini ditemukan kembali. Pada saat itu belum diketahui sejarah candi ini sehingga terciptalah legenda Roro Jonggrang yang diceritakan turun temurun.\r\n\r\nUpaya pemugaran candi secara serius dimulai sejak 1930-an dan pemugaran candi utama baru rampung tahun 1953', NULL, NULL),
(2, 'Liburan adalah sesuatu yang sangat menyenangkan tetapi, Sobat Native mungkin bingung mau liburan kemana? Udara panas memang paling tepat untuk berenang dan bermain air. Nah, permainan air ini menjadi sesuatu hal yang paling menyenangkan. Di Yogyakata, ada banyak sekali kawasan yang bisa dipakai untuk berenang.', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `konten2s`
--

CREATE TABLE `konten2s` (
  `id` int(10) UNSIGNED NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `konten2s`
--

INSERT INTO `konten2s` (`id`, `gambar`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, 'image/jogjabay.jpg', 'Liburan adalah sesuatu yang sangat menyenangkan tetapi, Sobat Native mungkin bingung mau liburan kemana? Udara panas memang paling tepat untuk berenang dan bermain air. Nah, permainan air ini menjadi sesuatu hal yang paling menyenangkan. Di Yogyakata, ada banyak sekali kawasan yang bisa dipakai untuk berenang.\r\nDiantara semua tempat tersebut, ada satu tempat yang membuat semua mata akan tertuju ke tempat ini. Jogja Bay Pirates Adventure Waterpark adalah tempatnya bermain air. Destinasi kelas dunia dan menjadi waterpark terbesar di Indonesa dan Asia Tenggara ini menyimpan segala keseruan dan tantangan menarik.', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_07_084219_create_contacts_table', 1),
(5, '2019_12_11_141645_create_table_konten', 2),
(6, '2019_12_15_073242_create_ratings_table', 3),
(7, '2019_12_18_173005_create_contents_table', 4),
(8, '2019_12_22_154404_create_content2s_table', 5),
(9, '2019_12_22_182330_create_content3s_table', 6),
(10, '2019_12_24_194506_create_konten2s_table', 7),
(11, '2019_12_25_154619_create_jogjabays_table', 8),
(12, '2019_12_26_164915_create_jogjabays_table', 9),
(13, '2019_12_28_162815_create_kembangarums_table', 10),
(14, '2019_12_28_171407_create_sindukusumas_table', 11),
(15, '2019_12_28_182320_create_bluelagoons_table', 12),
(16, '2019_12_28_190616_create_ratubokos_table', 13),
(17, '2019_12_28_192018_create_prambanans_table', 14),
(18, '2019_12_28_200947_create_monjalis_table', 15);

-- --------------------------------------------------------

--
-- Table structure for table `monjalis`
--

CREATE TABLE `monjalis` (
  `id` int(10) UNSIGNED NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `monjalis`
--

INSERT INTO `monjalis` (`id`, `file`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, '1577564252_monjali.jpeg', 'Bangunan Berbentuk Seperti Tumpeng Dengan Taman Lampion Kota Yogyakarta juga menyimpan perjuangan selama masa penjajahan Belanda. Semuanya ada di sebuah museum yang letaknya tidak jauh dari pusat kota Yogyakarta. Nama museum tersebut adalah Museum Monumen Jogja Kembali. Tepatnya di Dusun Jongkang, Sariharjo, Kec. Sleman, Daerah Istimewa Yogyakarta. Monjali (Monumen Jogja Kembali) disebut-sebut sebagai wisata keluarga yang memiliki nilai-nilai edukasi sekaligus wisata yang menyenangkan.\r\n\r\nSelain terdapat sebuah taman bernama Taman Pelangi (sebagian orang menyebutnya Taman Lampion), di obyek wisata Monjali ini juga terdapat museum sejarah dan budaya. Museum Monumen Jogja Kembali merupakan penghormatan kepada pahlawan-pahlawan yang merebut kembali kemerdekaan Republik Indonesia dari tangan Penjajah Belanda. Tgl 1 Maret 1949 pasukan TNI yang dipimpin oleh Letkol Soeharto atas persetujuan Sri Sultan Hamengkubuwono IX melakukan serangan dadakan ke markas Belanda di Pusat Kota Yogyakarta. Monumen ini dibangun dengan bentuk kerucut seperti tumpeng, sebenarnya bentuk tersebut menyerupai gunung. Bangunan ini sebagai pertanda kesuburan dan sebagai upaya pelestarian budaya nenek moyang. Penempatan Museum Monumen Jogya Kembali (Monjali) bukan tanpa maksud. Letak bangunannya terletak pada sumbu imajiner yang menghubungkan antara Merapi, keraton, Tugu, Panggung Krapyak, dan parangtritis. Titik imajiner tepatnya pada lantai tiga menumen tersebut, tepat berdirinya tiang bendera. Museum ini sering di kenal oleh masyarakat sekitar dengan sebutan Monjali yaitu singkatan dari Monumen Jogja Kembali, luas lahan dari museum ini sendiri cukup luas, diperkirakan luasnya mencapai 5 Hektar. Selain bentuk monumen yang unik, penataan Museum Monumen Jogja Kembali (monjali) juga menarik. Terdapat empat jalan menuju bangunan utama yang dikelilingi kolam (jagang). Museum Monumen Jogja Kembali ini memiliki 4 lantai secara keseluruhan didalamnya terdapat benda-benda bersejarah dan klasik diantaranya adalah mesin ketik jaman dahulu, telephone, buku – buku ensiklopedia, Senjata, replika dan masih banyak lagi.\r\n\r\nSaat memasuki halaman museum, dimana terdapat sebuah dinding besar yang memuat sebuah puisi Chairil Anwar berjudul “Karawang-Bekasi” dan 422 nama pahlawan yang telah gugur di daerah Wehrkreise III tanggal 19 Desember 1948 sampai 29 Juni 1949. Pada lantai dasar terdapat beberapa benda bukti sejarah perjuangan bangsa Indonesia melawan penjajah dan juga beberapa benda klasik yang cukup unik seperti telpon jaman dulu, mesin ketik, beragam senjata dan masih banyak lagi. Lantai kedua, terdapat beberapa diorama atau patung sebuah patung lengkap dengan background dan pakaianya menggambarkan perjuangan ketika pada zaman penjajahan Belanda yang mengkhianati perjanjian Reville dan membuat pemerintah marah dan terjadi pertumpahan darah, selain itu di lantai dua ini terdapat lukisan dinding yang menggambarkan perjuangan bangsa Indonesia pada waktu itu dengan 2 Dimensi. Lantai ke tiga, pada ruangan ini dikhususkan ruangan untuk mendoakan para pahlawan yang telah berjuang dan gugur, tempat ini dinamakan sebagai tempat Garbha Graha, pada bagian tengah ruangan ini terdapat bendera merah putih berkibar yang melambangkan kemerdekaan Indonesia yang di belakangnya terdapat lukisan tulisan Mantan Presiden ke 2 RI yaitu Alm. Pak Suharto. Harga tiket masuk obyek wisata Monjali ini adalah Rp 10.000 untuk hari biasa dan Rp 15.000 untuk hari libur atau hari-hari besar lainnya. Dengan satu tiket saja Anda bisa mengelilingi komplek wisata di tempat ini. Untuk membawa kamera DSLR sendiri dikenakan biaya Rp. 1,000. Taman wisata yang terdapat di Monjali ini bisa Anda nikmati dari pagi hingga malam, dimana Anda akan dimanjakan dengan sejumlah fasilitas permainannya yang begitu mengasikan. Terdapat lebih dari 20 jenis permainan, 25 stand makanan dan minuman yang bisa menambah kegembiraan.\r\n\r\nTaman yang dibuka tahun 2011 ini memiliki fasilitas mulai dari wahana atraksi maupun wahana air, sepeti euro bungae, rumah ballon, battery car, junior jet, trampoline, halicak, bumper boat, speed boat, bom bom car, sepeda tandem, safari train, ATV, becak air, seperti bola air, perahu dayung dan lainnya sebagainya. Harga tiap wahana bervariasai, mulai dari Rp 10.000 sampai Rp 20.000. Bagi Anda yang hobi memancing, Anda bisa menikmati fasilitas kolam pemancingan yang ada di taman ini, dan yang menarik adalah bisa langsung dimasak. Monumen Jogja Kembali (Monjali) pada malam hari suasana berubah menjadi berwarna. Di sana banyak lampu lampion dengan berbagai bentuk. Berbeda dengan siang hari, wisata malam di Monjali juga sangat menarik. Anda bisa menikmati berbagai wahana seperti sepeda dan kendaraan dengan hiasan lampu yang menarik. Berbagai lampion dengan bentuk dan warna yang indah mengelilingi Monjali. Selain itu, ada juga wahana balon air besar yang dapat memuat dua atau tiga orang dan balon ini akan bergerak menggelinding di atas permukaan air. Bagi Anda yang ingin berkunjung ke wisata Monumen Jogja Kembali tidak perlu khawatir dan repot membawa bekal dari rumah karena di kawasan wisata ini terdapat banyak pedagang yang menjual beragam panganan. Mulai dari yang hanya sekedar jajanan cemilan ringan, makanan berat hingga beragam pilihan minumanpun tersedia disini. Soal harga, Anda tidak perlu khawatir karena harga yang ditawarkan pun sangat terjangkau. Museum Monumen Jogja Kembali adalah kebanggaan warga Yogyakarta yang wajib anda kunjungi. Sebagai bagian wisata sejarah yang akan memperkaya pengetahuan, tempat ini cukup menarik minat wisatawan termasuk dari mancanegara. Monumen Yogya Kembali ini bisa di akses dari perempatan Tugu Yogyakarta lurus ke arah utara sampai ke perempatan ringroad utara. Setelah sampai di perempatan ringroad utara belok ke kiri (arah barat), kemudian ambil jalur ke arah sebaliknya melalui area pemotong arah yang sudah disediakan. Monumen Jogja Kembali berada sekitar 50 meter sebelah barat perempatan ringroad pada sisi utara jalan.', '2019-12-28 13:17:32', '2019-12-28 13:17:32');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `prambanans`
--

CREATE TABLE `prambanans` (
  `id` int(10) UNSIGNED NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `prambanans`
--

INSERT INTO `prambanans` (`id`, `file`, `keterangan`, `created_at`, `updated_at`) VALUES
(2, '1577563691_prambanan.jpg', 'Candi Prambanan atau Candi Roro Jonggrang adalah kompleks candi Hindu terbesar di Indonesia yang dibangun pada abad ke-9 masehi. Candi ini dipersembahkan untuk Trimurti, tiga dewa utama Hindu yaitu Brahma sebagai dewa pencipta, Wishnu sebagai dewa pemelihara, dan Siwa sebagai dewa pemusnah. Berdasarkan prasasti Siwagrha nama asli kompleks candi ini adalah Siwagrha (bahasa Sanskerta yang bermakna \'Rumah Siwa\'), dan memang di garbagriha (ruang utama) candi ini bersemayam arca Siwa Mahadewa setinggi tiga meter yang menujukkan bahwa di candi ini dewa Siwa lebih diutamakan. Kompleks candi ini terletak di kecamatan Prambanan, Sleman, DI Yogyakarta dan kecamatan Prambanan, Klaten, Jawa Tengah kurang lebih 17 kilometer timur laut Yogyakarta, 50 kilometer barat daya Surakarta dan 120 kilometer selatan Semarang, persis di perbatasan antara provinsi Jawa Tengah dan Daerah Istimewa Yogyakarta. Letaknya sangat unik, Candi Prambanan terletak di wilayah administrasi desa Bokoharjo, Prambanan, Sleman, sedangkan pintu masuk kompleks Candi Prambanan terletak di wilayah adminstrasi desa Tlogo, Prambanan, Klaten. Candi ini adalah termasuk Situs Warisan Dunia UNESCO, candi Hindu terbesar di Indonesia, sekaligus salah satu candi terindah di Asia Tenggara. Arsitektur bangunan ini berbentuk tinggi dan ramping sesuai dengan arsitektur Hindu pada umumnya dengan candi Siwa sebagai candi utama memiliki ketinggian mencapai 47 meter menjulang di tengah kompleks gugusan candi-candi yang lebih kecil. Sebagai salah satu candi termegah di Asia Tenggara, candi Prambanan menjadi daya tarik kunjungan wisatawan dari seluruh dunia.Candi Prambanan adalah candi Hindu terbesar di Indonesia sekaligus salah satu candi yang terindah di Asia Tenggara. Menurut prasasti Siwagrha, candi ini mulai dibangun pada masa pemerintahan Rakai Pikatan (pertengahan abad ke-9) dari Kerajaan Mataram Kuno. Namun, oleh sebab yang masih misterius, pusat kerajaan pindah ke Jawa Timur di akhir abad ke-10. Candi yang megah ini pun terbengkalai dan sebagian tertimbun material letusan Gunung Merapi. Perlahan-lahan, wilayah Prambanan menjadi hutan lebat. Beratus-ratus tahun kemudian barulah reruntuhan candi ini ditemukan kembali. Pada saat itu belum diketahui sejarah candi ini sehingga terciptalah legenda Roro Jonggrang yang diceritakan turun temurun. Upaya pemugaran candi secara serius dimulai sejak 1930-an dan pemugaran candi utama baru rampung tahun 1953.Candi Prambanan dihiasi relief yang menceritakan kisah Ramayana dan Krishnayana. Kisah Ramayana dimulai dari kelahiran Rama, penculikan Sinta (istri Rama) oleh Rahwana, upaya penyelamatan Sinta oleh Hanoman (panglima kera), pertemuan kembali Rama dan Sinta, hingga penyerahan tahta Rama kepada anaknya. Relief cerita Ramayana ini dipahat pada dinding sebelah dalam pagar sepanjang lorong galeri yang mengelilingi candi utama. Relief ini dibaca dengan cara mengitari candi searah jarum jam, dimulai dari sisi timur candi Siwa (42 adegan) dan dilanjutkan ke candi Brahma (30 adegan). Tak jauh dari Candi Prambanan, kisah cinta Rama dan Sinta yang terpahat abadi ini juga dipentaskan dalam bentuk sendratari setiap Selasa malam, Kamis malam, dan Sabtu malam. Sendratari Ramayana Prambanan memegang rekor dunia Guinness World Records sebagai pentas tari Ramayana yang paling banyak melibatkan penari sekaligus sebagai sendratari yang paling lama dan rutin mementaskan tari Ramayana sejak 1961 hingga 2012. London dan New York memiliki The Phantom of the Opera, Jogja punya Sendratari Ramayana. Pada musim kemarau, pementasan dilakukan di luar ruangan dengan Candi Prambanan yang disorot lampu sebagai latar belakangnya.', '2019-12-28 13:08:11', '2019-12-28 13:08:11');

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

CREATE TABLE `ratings` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `rating` int(11) NOT NULL,
  `rateable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rateable_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ratubokos`
--

CREATE TABLE `ratubokos` (
  `id` int(10) UNSIGNED NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ratubokos`
--

INSERT INTO `ratubokos` (`id`, `file`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, '1577560580_2.jpg', 'Pada abad ke 17, ada seorang warga eropa yang sempat berkunjung ke Jawa, tepatnya di wilayah Bokoharjo. Hanya saja, orang tersebut tidak menemukan situs yang dimaksud. Orang eropa yang masih penasaran dengan situs ini pun bercerita dengan H.J. De Graff orang Belanda yang kemudian dilakukanlah sebuah penelitian oleh FDX Bosch yang pada akhirnya ditemukanlah reruntuhan ini. Menurut Prasati Abhayagiri wihara yang mempunyai angka 792 M Situs Ratu Baka merupakan tempat Rakai Panangkaran yang mengundurkan diri dari Raja Mataram karena, membutuhkan sebuah ketenangan. Kemudian, Rakai Panangkaran membangun sebuah wihara yang disebut Abhayagiri Wihara. Ada pula sebuah cerita yang berkembang bahwa Ratu Boko ini diambil dari sebuah nama yang juga mengacu pada Ayah dari legenda Roro Jonggrang. Cerita ini sudah berkembang pesat di kalangan masyarakat sekitar. Keraton Ratu Boko sudah digunakan pada masa dinasti Syailendra. Situs Ratu Boko merupakan peninggalan Agama Budha. Karena, Rakai Panangkaran diketahui beragama budha. Hal ini diketahui dengan adanya Arca Dyani Budha Tetapi, Situs ini pun bisa juga disebut dengan situs peninggalan agama Hindu dengan ditemukannya Arca Durga, Yoni, dan Ganesha\r\n\r\nYogyakarta tidak hanya sekedar bentang alamnya saja, melainkan tentang sejarah dan budaya yang juga sangat menarik untuk disimak. Tak heran bila, Yogyakarta disebut-sebut sebagai pusat pariwisata selanjutnya setelah Pulau Bali. Perpaduan alam dan budaya di Kota yang disebut dengan Kota Gudeg ini memang bisa diacungi jempol.\r\n\r\nCandi Ratu Boko atau juga disebut Situs Ratu Buko ini adalah bukti dari peninggalan sejarah negeri ini. Mengapa bisa disebuit juga dengan Situs? Karena, Ratu Boko adalah reruntuhan dari sebuah istana dan bangunannya pun tidak ada yang menyerupai Candi. Tempat ini pun juga bisa disebut dengan Keraton Ratu Boko.', '2019-12-28 12:16:20', '2019-12-28 12:16:20');

-- --------------------------------------------------------

--
-- Table structure for table `sindukusumas`
--

CREATE TABLE `sindukusumas` (
  `id` int(10) UNSIGNED NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sindukusumas`
--

INSERT INTO `sindukusumas` (`id`, `file`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, '1577555253_sindukusuma.jpg', 'Sindu Kusuma Edupark yang diresmikan pembukaannya tanggal 20 Desember 2014 SKE adalah wahana permainan, baik untuk anak dan dewasa. Kesemuanya memberikan hiburan bagi seluruh anggota keluarga \"SKE berdiri diatas lahan seluas 7 Hektar, merupakan unit usaha dari KUSUMA AGROWISATA yang berpusat di Kota Wisata Batu Jawa Timur, dan sudah berpengalaman dalam pembangunan daya tarik wisata. Pengelolaan SKE ditangani oleh Manajemen yang sudah mengelola beberapa wahana Waterpark / Themepark dan atau Edupark di Indonesia Dengan mengandalkan konsep edukasi, SKE akan tampil sebagai wahana wisata keluarga yang mampu memberikan pengalaman dan kesan tersendiri bagi setiap pengunjungnya. SKE sebagai sebagai wahana wisata keluarga sangat memperhatikan nilai nilai Adiluhung Budaya Jawa yang dipakai sebagai Tata Laku Utama dalam memberikan layanan prima kepada setiap pengunjungnya agar memperoleh pengalaman pelayanan yang luar biasa. Dengan Bertekad menjadi wahana wisata keluarga terbaik, SKE berusaha secara pasti memberikan wahana-wahana baru yang lebih menarik, menyenangkan dan lebih semarak bagi pengunjung. Akan hadir beberapa wahana baru setiap tahun sebagai wujud penyegaran wahana.\r\nBuka setiap hari pukul 08.00 - 23.00 WIB Sindu Kusuma Edupark (SKE) merupakan sebuah destinasi rekreasi yang terletak di Jogjakarta. Di tujuh hektar kawasan taman yang selesai dibangun tahun 2014 ini, terdapat bermacam-macam wahana, baik wahana bermain maupun wahana belajar yang bisa dinikmati oleh semua anggota keluarga. Wahana yang paling terkenal dari SKE adalah bianglalanya, yang merupakan sebuah wahana bermain sekaligus ikon SKE sendiri. Bila Singapore memiliki Flyer setinggi 165 meter, sementara Malaysia punya Eye setinggi 88 meter, dan di Thailand ada Asiatique setinggi 60 meter, Indonesia memiliki Cakra Manggilingan dengan tinggi 48 meter. Di tingkat Asia Tenggara, bianglala ini memang mesti berpuas diri duduk di peringkat keenam sebagai bianglala tertinggi, tetapi di tingkat nasional, ia duduk di peringkat pertama.\r\n\r\nberada di jantung Sindu Kusuma Edupark (SKE), Cakra yang terdiri dari 28 buah kapsul yang masing-masing dapat memuat empat orang termasuk ke dalam aspek bermain taman yang mengusung tagline \"The City of Fantasy, Wahana Wisata Keluarga\" itu. Daya tarik utama Cakra adalah persembahan bird eye view 360 derajat ketika kapsul yang kita tumpangi sudah berada di titik puncak.\r\n\r\nDari atas, kita tidak hanya menyaksikan pemandangan seantero SKE, atau wilayah sekitar yang rimbun hijau, atau Kota Jogja dan gedung-gedungnya, tetapi juga bukit-bukit di kejauhan dan Gunung Merapi. Dan bila senja-lalu kemudian malam-tiba, pemandangan semakin elok saja. Tidak heran bila wahana yang sekali berotasi memakan waktu enam menit ini menjadi ikon SKE. Cakra Manggilingan patut dicoba bila kita sedang berkunjung ke SKE. Namun, SKE tidak terbatas pada Cakra. Saat kami berkunjung, ada setidaknya 18 wahana bermain yang sedang beroperasi, baik yang sudah lama ada maupun yang baru ditambahkan, beberapa diantaranya House of Terror (Rumah Hantu), Area Ketangkasan, Bioskop 8D, Bioskop 4D, Montor Tumbur (Bumper Car), Sepeda Mabur (Flying Bicycle), Cangkir Mabur (Spinning Cup), Kursi Mabur (Flying Chair), Taman Lampu, dan Waterpark. Dan semua wahana di SKE ini sebetulnya patut dicoba, walaupun hanya sekali.\r\n\r\nPanggon Lunjak, misalnya. Di trampoline yang dilengkapi dengan mesin untuk membantu melontarkan pengunjung lebih tinggi ini, kita bisa melompat sesuka hati-bahkan sampai salto-salto-tanpa takut terpental keluar area. Wahana ini cukup menyenangkan, meskipun untuk alasan keselamatan, hanya mereka yang berberat badan maksimal 70 kg dapat mencobanya.Lalu, bioskop 4D dan 8D dengan pilihan-pilihan film yang cukup seru, mulai dari film kartun sampai film horror, juga siap menghibur kita. Yang pertama dinamai 4D Ride sebab selain gambar yang ditampilkan terlihat bervolume, juga karena kursi yang kita duduki bergerak mengikuti adegan di dalam layar dan ada efek hembusan angin, sehingga sensasi menonton terasa semakin nyata.Sementara itu, yang kedua, bioskop 8D, sebenarnya tidak jauh berbeda dari yang pertama. Bedanya hanya ada pada masalah tambahan efek-efek yang tidak ada di 4D. Misalnya, di bioskop 8D, semacam tuas keluar dari bagian bawah kursi dan mencolek-colek kaki kita, sehingga saat adegan-adegan menegangkan, kita bisa terperanjat kaget. Oleh karena itu, menonton film, khususnya bergenre horor di bioskop ini bakal seru.\r\n\r\nDi samping wahana bermain, SKE juga menawarkan wahana edukasi. Begitu memasuki gerbang sebenarnya kita sudah merasakan sisi edukasi taman yang satu pengembang dengan Kusuma Agrowisata di Batu ini. Di koridor yang menuntun masuk diletakkan panel-panel informatif mengenai fakta-fakta yang mungkin kita belum ketahui sebelumnya. Misalnya, dijelaskan mengenai tinggi bianglala terbesar yang ada di dunia dibandingkan dengan kebanggan SKE sendiri. Namun wahana edukasi SKE yang sebenarnya ada di dalam taman dan formatnya serupa museum. Yang pertama ada Omah Batik yang menyambut kita pertama kali begitu keluar dari koridor masuk. Di dalam museum batik ini, kita bisa mempelajari berbagai macam motif batik sekaligus mempelajari cerita perjalanan batik dari dulu sampai booming seperti sekarang.Kemudian ada juga Omah Musik yang menurut Yoga-Marketing dan Sales Supervisor SKE-menceritakan perkembangan sejarah musik. Di dalam museum ini pula kita juga bisa melihat macam-macam alat vintage yang berhubungan dengan musik. Contohnya, kita bisa melihat dan mendengar langsung gramofon antik yang dibunyikan dengan amplifier kayu yang juga antik memutar lagu lawas Indonesia yang tidak lagi terdengar di televisi.Dengan jumlah hanya dua, wahana edukasi SKE memang masih terbilang sedikit. Namun, berdasarkan keterangan Yoga, dalam waktu dekat wahana edukasi lain akan segera menyusul, di samping wahana bermain baru juga. Tiga contoh yang disebutkan pria kelahiran Bangka yang sore itu mengantarkan kami berkeliling SKE adalah planetarium dan permainan menggambar virtual untuk wisata belajar, dan water park besar untuk kelompok wisata bermain. Di luar ini, Yoga juga menambahkan bahwa dalam waktu dekat, halaman parkir SKE yang amat luas akan ditransformasi sebagian menjadi pasar kuliner yang bakal menarik perhatian muda-mudi atau siapa saja yang ingin berwisata kuliner di malam hari. Untuk saat ini, bila ingin makan sambil bersantai setelah lelah bermain di SKE, ada Jogja Festival Resto dan kafe yang menawarkan berbagai makanan dan minuman', '2019-12-28 10:47:33', '2019-12-28 10:47:33');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(4, 'lkok', 'kea@sadsa', NULL, '$2y$10$n/ZSbABI3OlxmJtWjJr4/u67KzqMRQ3ru2bVBnoKAyeFVz/2uSEW.', NULL, '2019-12-23 11:15:05', '2019-12-23 11:15:05'),
(5, 'koko', '128@gmail.com', NULL, '$2y$10$kwFgySLPhJTCSdCezDyCSewRAwyymw8bPK79TLc26DTJmbU2NY27C', NULL, '2019-12-23 11:20:40', '2019-12-23 11:20:40'),
(6, 'raz', 'popopo@we', NULL, '$2y$10$ZZDw7vTr0j83PUuUgpbOZuMvor0Syvy7JduZxIdeMWR2ax1NUnr3.', NULL, '2019-12-23 11:42:44', '2019-12-23 11:42:44'),
(7, 'kevin', 'po12@we', NULL, '$2y$10$q277jAB5JGDSoQi0HzYg6OyaIcHr6N6iVAPD6nt2qhah8T3cxGDmK', NULL, '2019-12-25 07:30:49', '2019-12-25 07:30:49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bluelagoons`
--
ALTER TABLE `bluelagoons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `content2s`
--
ALTER TABLE `content2s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `content3s`
--
ALTER TABLE `content3s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contents`
--
ALTER TABLE `contents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jogjabays`
--
ALTER TABLE `jogjabays`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kembangarums`
--
ALTER TABLE `kembangarums`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `konten`
--
ALTER TABLE `konten`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `konten2s`
--
ALTER TABLE `konten2s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `monjalis`
--
ALTER TABLE `monjalis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `prambanans`
--
ALTER TABLE `prambanans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ratings`
--
ALTER TABLE `ratings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ratings_rateable_type_rateable_id_index` (`rateable_type`,`rateable_id`),
  ADD KEY `ratings_rateable_id_index` (`rateable_id`),
  ADD KEY `ratings_rateable_type_index` (`rateable_type`),
  ADD KEY `ratings_user_id_foreign` (`user_id`);

--
-- Indexes for table `ratubokos`
--
ALTER TABLE `ratubokos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sindukusumas`
--
ALTER TABLE `sindukusumas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bluelagoons`
--
ALTER TABLE `bluelagoons`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `content2s`
--
ALTER TABLE `content2s`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `content3s`
--
ALTER TABLE `content3s`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contents`
--
ALTER TABLE `contents`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jogjabays`
--
ALTER TABLE `jogjabays`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kembangarums`
--
ALTER TABLE `kembangarums`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `konten`
--
ALTER TABLE `konten`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `konten2s`
--
ALTER TABLE `konten2s`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `monjalis`
--
ALTER TABLE `monjalis`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `prambanans`
--
ALTER TABLE `prambanans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ratings`
--
ALTER TABLE `ratings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ratubokos`
--
ALTER TABLE `ratubokos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sindukusumas`
--
ALTER TABLE `sindukusumas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ratings`
--
ALTER TABLE `ratings`
  ADD CONSTRAINT `ratings_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

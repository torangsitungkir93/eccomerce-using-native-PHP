-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Nov 2019 pada 20.09
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toko_dvd`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`username`, `password`, `nama_lengkap`, `email`) VALUES
('admin', '123', 'Torangto Situngkir', 'torangsitungkir93@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `film`
--

CREATE TABLE `film` (
  `id` int(11) NOT NULL,
  `judul_film` varchar(50) NOT NULL,
  `bahasa` varchar(50) NOT NULL,
  `subtittle` varchar(50) NOT NULL,
  `gambar_film` varchar(100) NOT NULL,
  `genre_film` varchar(50) NOT NULL,
  `harga_film` int(11) NOT NULL,
  `desk_film` text NOT NULL,
  `stok_film` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `film`
--

INSERT INTO `film` (`id`, `judul_film`, `bahasa`, `subtittle`, `gambar_film`, `genre_film`, `harga_film`, `desk_film`, `stok_film`) VALUES
(25, 'Rush Hour 3', 'Inggris', 'Indonesia', '5dd0275861561.jpg', 'Action', 20000, 'Film Rush Hour 3 (2007) menceritakan tentang dua orang polisi bernama Lee dan Carter. Film ini merupakan sekuel terakhir dari Rush Hour. Dalam episode kali ini, mereka berhadapan dengan Shy Sen seorang mafia China. Ia bahkan menembak Han di bahunya dan menganggu konferensi yang sedang dihadiri oleh Han. Kepala Inspektur Lee mengejar sang penembak dan menyudutkannya. Dari sanalah Lee tahu bahwa sang pembunuh adalah seorang berkebangsaan Jepang bernama Kenji, kawannya. Ketika Lee ragu untuk menembak Kenji, dia berhasil melarikan diri tepat sebelum Carter datang dan hendak membantu penangkapan.                        ', 15),
(26, 'John Wick 2', 'Inggris', 'Indonesia', '5dd027d6b5a53.jpg', 'Action', 25000, 'Film ini bercerita tentang mantan pembunuh bayaran, John Wick (Keanu Reeves), yang kembali beraksi. Kali ini, John harus menghadapi krisis identitas yang mempertanyakan jati dirinya sebagai seorang suami yang bersedih atas kematian istrinya atau seorang pembunuh bayaran internasional tanpa belas kasihan.', 16),
(27, 'BLADE', 'Inggris', 'Indonesia', '5dd0280a157be.jpg', 'Action', 15000, 'Blade adalah cerita tentang manusia setengah vampire yang disebut \"DayWalker. Ia berjuang melawan vampir di dunia yang berusaha memusnahkan manusia. Ia Dilahirkan dengan kekuatan yang jauh lebih besar daripada vampir manapun, ia menjadi pejuang legendaris yang dikenal sebagai Blade', 7),
(29, 'KillBill Vol. 2', 'Inggris', 'Indonesia', '5dd0288450098.jpg', 'Action', 23000, 'Blade adalah cerita tentang manusia setengah vampire yang disebut \"DayWalker. Ia berjuang melawan vampir di dunia yang berusaha memusnahkan manusia. Ia Dilahirkan dengan kekuatan yang jauh lebih besar daripada vampir manapun, ia menjadi pejuang legendaris yang dikenal sebagai Blade', 3),
(30, 'The Expendables 2', 'Inggris', 'Indonesia', '5dd028ac40706.jpg', 'Action', 30000, 'Blade adalah cerita tentang manusia setengah vampire yang disebut \"DayWalker. Ia berjuang melawan vampir di dunia yang berusaha memusnahkan manusia. Ia Dilahirkan dengan kekuatan yang jauh lebih besar daripada vampir manapun, ia menjadi pejuang legendaris yang dikenal sebagai Blade', 17),
(31, 'Die Hard', 'Inggris', 'Indonesia', '5dd028cd369aa.jpg', 'Action', 13000, 'Blade adalah cerita tentang manusia setengah vampire yang disebut \"DayWalker. Ia berjuang melawan vampir di dunia yang berusaha memusnahkan manusia. Ia Dilahirkan dengan kekuatan yang jauh lebih besar daripada vampir manapun, ia menjadi pejuang legendaris yang dikenal sebagai Blade', 4),
(32, 'Pacific Rim', 'Inggris', 'Indonesia', '5dd02905836f4.jpg', 'Action', 31000, 'Blade adalah cerita tentang manusia setengah vampire yang disebut \"DayWalker. Ia berjuang melawan vampir di dunia yang berusaha memusnahkan manusia. Ia Dilahirkan dengan kekuatan yang jauh lebih besar daripada vampir manapun, ia menjadi pejuang legendaris yang dikenal sebagai Blade', 22),
(33, 'Batman: The Dark Knight', 'Inggris', 'Cina', '5dd02934f2e6a.jpeg', 'Action', 24000, 'Blade adalah cerita tentang manusia setengah vampire yang disebut \"DayWalker. Ia berjuang melawan vampir di dunia yang berusaha memusnahkan manusia. Ia Dilahirkan dengan kekuatan yang jauh lebih besar daripada vampir manapun, ia menjadi pejuang legendaris yang dikenal sebagai Blade', 16),
(34, 'Kong Skull Island', 'Inggris', 'Inggris', '5dd0295854a8a.jpg', 'Action', 15000, '\r\nAda sebuah pulau yang belum pernah dijamak oleh manusia. Namun telah terdeteksi oleh satelit luar angkasa keberadaan pulau misterius tersebut. Menurut cerita yang berkembang di masyarakat. Sering terjadi kapal atau pesawat yang hilang di suatu daerah di lautan. Namun orang-orang tidak tahu kemana hilangnya pesawat tersebut. Dan hingga kini belum ditemukan keberadaanya orang atau pun bangkai pesawatnya. Daerah itu dikenal luas oleh masyarakat dengan istilah daerah segi tiga bermuda.\r\n\r\nAda sebuah misi untuk bisa menemukan keberadaan pulau tersembunyi tersebut. Seorang ilmuwan lalu menghubungi Kapten Amerika yang sedang bertugas perang di Vietnam. Ilmuwan itu menginginkan untuk bisa menemukan pulau misterius tersebut dengan bantuan kendaraan pesawat tempur Amerika. Kapten itu pun bersedia untuk diajak pergi oleh ilmuwan tersebut untuk menemukan pulau misterius tersebut. Nama pulau itu adalah “Skull Island” atau sebutan dalam bahasa Indonesia adalah pulau tengkorak.\r\n\r\nRombongan pesawat tempur Amerika pun terbang menuju pulau tengkorak. Pulau tersebut tidak terlihat karena dikelilingi oleh awan-awan gelap yang menyelimutinya. Kilatan petir dan suara gemuruh terdengar didalamnya. Ketika pesawat tempur Amerika menembus awan-awan gelap, pesawat mendadak tidak bisa dikendalikan. Pesawat berputar-putar tak terkendali mengikuti arus awan. Namun, akhirnya semua kru pesawat terbang bisa menembus awan-awan gelap yang melindungi pulau tengkorak.\r\n\r\nSetelah berhasil memasuki pulau tengkorak, mereka lalu meneliti tanah yang ada dipulau tengkorak dengan cara memasang bahan peledak. Bom peledak pun diletuskan dengan bunyi yang begitu keras dan nyala api yang membara. Tak ada yang menyangka bahwa didepan mereka terlihat makhluk raksasa yang mengamuk karena daerahnya di rusak. Bentuk makhluk itu menyerupai kera, lebih tepatnya adalah kingkong raksasa.', 22),
(35, 'Wrath of The Titans', 'Inggris', 'Indonesia', '5dd029af9826b.jpeg', 'Action', 8000, 'Blade adalah cerita tentang manusia setengah vampire yang disebut \"DayWalker. Ia berjuang melawan vampir di dunia yang berusaha memusnahkan manusia. Ia Dilahirkan dengan kekuatan yang jauh lebih besar daripada vampir manapun, ia menjadi pejuang legendaris yang dikenal sebagai Blade', 1),
(36, 'Hansel & Gretel: Witch Hunter', 'Inggris', 'Indonesia', '5dd029d59e10e.jpg', 'Action', 26000, 'Blade adalah cerita tentang manusia setengah vampire yang disebut \"DayWalker. Ia berjuang melawan vampir di dunia yang berusaha memusnahkan manusia. Ia Dilahirkan dengan kekuatan yang jauh lebih besar daripada vampir manapun, ia menjadi pejuang legendaris yang dikenal sebagai Blade', 12),
(37, 'The Hobbit: The Battle of The Five Armies', 'Inggris', 'Indonesia', '5dd02a70380fb.jpg', 'Adventure', 27000, 'Film ini masih melanjutkan petualangan epik dari Bilbo Baggins, Thorin Oakenshield, dan para Kurcaci. Setelah mereklamasikan tanah air mereka dari Dragon Smaug, tanpa sadar para Kurcaci melepaskan sebuah kekuatan mematikan ke dunia. Hal ini membuat Smaug sangat marah dan murka serta menyemburkan api-api panasnya pada mereka yang tak berdaya, wanita, juga anak-anak di Lake-Town. Sementara Thorin yang terobsesi atas segala harta yang telah direklamasi rela mengorbankan persahabatan dan kehormatannya dengan menimbun harta tersebut. Pada saat yang bersamaan, Bilbo tengah panik melihat kondisi Hobbit yang berada di jurang kehancuran. Namun rupanya masih ada bahaya yang lebih besar yang tak terlihat oleh siapapun kecuali Penyihir Gandalf. Musuh besar, Sauron, telah mengutus siluman Orcs untuk menyerang Gunung Sunyi.', 19),
(38, 'Mad Max: Fury Road', 'Inggris', 'Indonesia', '5dd02b11a8551.jpg', 'Adventure', 17000, 'Setelah bencana nuklir, dunia telah menjadi padang pasir dan peradaban telah runtuh. Max Rockatansky (Tom Hardy), seorang pria yang selamat dari bencana tersebut, ditangkap oleh War Boy, tentara Immortan Joe (Hugh Keays-Byrne) yang kejam, dan dibawa ke benteng Joe. Ditunjuk sebagai pendonor darah, Max dipenjara dan dimanfaatkan sebagai \"kantong darah\" untuk seorang War Boy yang sakit bernama Nux (Nicholas Hoult). Sementara itu, Imperator Furiosa (Charlize Theron), salah satu letnan Joe, diutus untuk mencari dan mengumpulkan bensin menggunakan truk semi lapis baja dengan alat pengeboran bernama War Rig. Ketika ia mengemudi keluar jalur, Joe menyadari bahwa kelima istrinya, wanita yang dipilih untuk melahirkan anak, hilang dan melarikan diri bersama Furiosa. Joe memimpin seluruh pasukannya untuk mengejar Furiosa, meminta bantuan di dekat Gas Town dan Bullet Farm.', 17),
(39, 'The Adventures of Tintin', 'Inggris', 'Indonesia', '5dd02b352bde3.jpg', 'Adventure', 16000, 'Setelah bencana nuklir, dunia telah menjadi padang pasir dan peradaban telah runtuh. Max Rockatansky (Tom Hardy), seorang pria yang selamat dari bencana tersebut, ditangkap oleh War Boy, tentara Immortan Joe (Hugh Keays-Byrne) yang kejam, dan dibawa ke benteng Joe. Ditunjuk sebagai pendonor darah, Max dipenjara dan dimanfaatkan sebagai \"kantong darah\" untuk seorang War Boy yang sakit bernama Nux (Nicholas Hoult). Sementara itu, Imperator Furiosa (Charlize Theron), salah satu letnan Joe, diutus untuk mencari dan mengumpulkan bensin menggunakan truk semi lapis baja dengan alat pengeboran bernama War Rig. Ketika ia mengemudi keluar jalur, Joe menyadari bahwa kelima istrinya, wanita yang dipilih untuk melahirkan anak, hilang dan melarikan diri bersama Furiosa. Joe memimpin seluruh pasukannya untuk mengejar Furiosa, meminta bantuan di dekat Gas Town dan Bullet Farm.', 13),
(40, 'Chronicles of Narnia: The Voyage of The Dawn Tread', 'Inggris', 'Indonesia', '5dd02b73cd64a.jpg', 'Adventure', 21000, 'Setelah bencana nuklir, dunia telah menjadi padang pasir dan peradaban telah runtuh. Max Rockatansky (Tom Hardy), seorang pria yang selamat dari bencana tersebut, ditangkap oleh War Boy, tentara Immortan Joe (Hugh Keays-Byrne) yang kejam, dan dibawa ke benteng Joe. Ditunjuk sebagai pendonor darah, Max dipenjara dan dimanfaatkan sebagai \"kantong darah\" untuk seorang War Boy yang sakit bernama Nux (Nicholas Hoult). Sementara itu, Imperator Furiosa (Charlize Theron), salah satu letnan Joe, diutus untuk mencari dan mengumpulkan bensin menggunakan truk semi lapis baja dengan alat pengeboran bernama War Rig. Ketika ia mengemudi keluar jalur, Joe menyadari bahwa kelima istrinya, wanita yang dipilih untuk melahirkan anak, hilang dan melarikan diri bersama Furiosa. Joe memimpin seluruh pasukannya untuk mengejar Furiosa, meminta bantuan di dekat Gas Town dan Bullet Farm.', 21),
(41, 'Pirates of The Carribean: On Stranger Tides', 'Inggris', 'Indonesia', '5dd02bba70907.jpg', 'Adventure', 23500, 'Setelah bencana nuklir, dunia telah menjadi padang pasir dan peradaban telah runtuh. Max Rockatansky (Tom Hardy), seorang pria yang selamat dari bencana tersebut, ditangkap oleh War Boy, tentara Immortan Joe (Hugh Keays-Byrne) yang kejam, dan dibawa ke benteng Joe. Ditunjuk sebagai pendonor darah, Max dipenjara dan dimanfaatkan sebagai \"kantong darah\" untuk seorang War Boy yang sakit bernama Nux (Nicholas Hoult). Sementara itu, Imperator Furiosa (Charlize Theron), salah satu letnan Joe, diutus untuk mencari dan mengumpulkan bensin menggunakan truk semi lapis baja dengan alat pengeboran bernama War Rig. Ketika ia mengemudi keluar jalur, Joe menyadari bahwa kelima istrinya, wanita yang dipilih untuk melahirkan anak, hilang dan melarikan diri bersama Furiosa. Joe memimpin seluruh pasukannya untuk mengejar Furiosa, meminta bantuan di dekat Gas Town dan Bullet Farm.', 5),
(42, 'The Lord of The Ring: The Fellowship of The Ring', 'Inggris', 'Inggris', '5dd02bf329ef3.jpg', 'Adventure', 17500, 'Setelah bencana nuklir, dunia telah menjadi padang pasir dan peradaban telah runtuh. Max Rockatansky (Tom Hardy), seorang pria yang selamat dari bencana tersebut, ditangkap oleh War Boy, tentara Immortan Joe (Hugh Keays-Byrne) yang kejam, dan dibawa ke benteng Joe. Ditunjuk sebagai pendonor darah, Max dipenjara dan dimanfaatkan sebagai \"kantong darah\" untuk seorang War Boy yang sakit bernama Nux (Nicholas Hoult). Sementara itu, Imperator Furiosa (Charlize Theron), salah satu letnan Joe, diutus untuk mencari dan mengumpulkan bensin menggunakan truk semi lapis baja dengan alat pengeboran bernama War Rig. Ketika ia mengemudi keluar jalur, Joe menyadari bahwa kelima istrinya, wanita yang dipilih untuk melahirkan anak, hilang dan melarikan diri bersama Furiosa. Joe memimpin seluruh pasukannya untuk mengejar Furiosa, meminta bantuan di dekat Gas Town dan Bullet Farm.', 13),
(43, 'The Hobbit: An Unexpected Journey', 'Inggris', 'Inggris', '5dd02c1d4ede0.jpg', 'Adventure', 26000, 'Setelah bencana nuklir, dunia telah menjadi padang pasir dan peradaban telah runtuh. Max Rockatansky (Tom Hardy), seorang pria yang selamat dari bencana tersebut, ditangkap oleh War Boy, tentara Immortan Joe (Hugh Keays-Byrne) yang kejam, dan dibawa ke benteng Joe. Ditunjuk sebagai pendonor darah, Max dipenjara dan dimanfaatkan sebagai \"kantong darah\" untuk seorang War Boy yang sakit bernama Nux (Nicholas Hoult). Sementara itu, Imperator Furiosa (Charlize Theron), salah satu letnan Joe, diutus untuk mencari dan mengumpulkan bensin menggunakan truk semi lapis baja dengan alat pengeboran bernama War Rig. Ketika ia mengemudi keluar jalur, Joe menyadari bahwa kelima istrinya, wanita yang dipilih untuk melahirkan anak, hilang dan melarikan diri bersama Furiosa. Joe memimpin seluruh pasukannya untuk mengejar Furiosa, meminta bantuan di dekat Gas Town dan Bullet Farm.', 10),
(44, 'The Hobbit: The Desolation of Smaug', 'Inggris', 'Indonesia', '5dd02c40bac81.jpg', 'Adventure', 17000, 'Setelah bencana nuklir, dunia telah menjadi padang pasir dan peradaban telah runtuh. Max Rockatansky (Tom Hardy), seorang pria yang selamat dari bencana tersebut, ditangkap oleh War Boy, tentara Immortan Joe (Hugh Keays-Byrne) yang kejam, dan dibawa ke benteng Joe. Ditunjuk sebagai pendonor darah, Max dipenjara dan dimanfaatkan sebagai \"kantong darah\" untuk seorang War Boy yang sakit bernama Nux (Nicholas Hoult). Sementara itu, Imperator Furiosa (Charlize Theron), salah satu letnan Joe, diutus untuk mencari dan mengumpulkan bensin menggunakan truk semi lapis baja dengan alat pengeboran bernama War Rig. Ketika ia mengemudi keluar jalur, Joe menyadari bahwa kelima istrinya, wanita yang dipilih untuk melahirkan anak, hilang dan melarikan diri bersama Furiosa. Joe memimpin seluruh pasukannya untuk mengejar Furiosa, meminta bantuan di dekat Gas Town dan Bullet Farm.', 16),
(45, 'Shrek', 'Inggris', 'Indonesia', '5dd02c766f1c8.jpg', 'Animation', 13000, 'Shrek (Mike Myers), ogre yang selalu sendiri di rawanya, sangat kesal ketika seluruh makhluk-makhluk dari dongeng, termasuk Pinocchio, Three Little Pigs, dan Donkey (Eddie Murphy), dipaksa mengungsi ke rawa milik Shrek oleh Lord Farquaad (John Lithgow). Shrek pergi bersama Donkey untuk meminta Lord Farquaad untuk mengembalikan rawanya. Sementara itu, Farquaad memaksa Gingy untuk memeberitahu di mana Magic Mirror. Mirror mengatakan kepadanya bahwa Farquaad dapat menjadi raja yang sesungguhnya dengan menikahi seorang putri. Mirror memberinya pilihan: Cinderella, Snow White, dan Putri Fiona (Cameron Diaz). Farquaad pun memilih Fiona.', 13),
(47, 'Ice Age: Collision Course', 'Inggris', 'Inggris', '5dd02d211d18a.jpg', 'Animation', 50000, 'Shrek (Mike Myers), ogre yang selalu sendiri di rawanya, sangat kesal ketika seluruh makhluk-makhluk dari dongeng, termasuk Pinocchio, Three Little Pigs, dan Donkey (Eddie Murphy), dipaksa mengungsi ke rawa milik Shrek oleh Lord Farquaad (John Lithgow).\r\n\r\nShrek pergi bersama Donkey untuk meminta Lord Farquaad untuk mengembalikan rawanya. Sementara itu, Farquaad memaksa Gingy untuk memeberitahu di mana Magic Mirror. Mirror mengatakan kepadanya bahwa Farquaad dapat menjadi raja yang sesungguhnya dengan menikahi seorang putri. Mirror memberinya pilihan: Cinderella, Snow White, dan Putri Fiona (Cameron Diaz). Farquaad pun memilih Fiona.', 45),
(49, 'Cars 3', 'Inggris', 'Indonesia', '5dd02e2582b9f.jpg', 'Animation', 35000, 'Shrek (Mike Myers), ogre yang selalu sendiri di rawanya, sangat kesal ketika seluruh makhluk-makhluk dari dongeng, termasuk Pinocchio, Three Little Pigs, dan Donkey (Eddie Murphy), dipaksa mengungsi ke rawa milik Shrek oleh Lord Farquaad (John Lithgow).\r\nShrek pergi bersama Donkey untuk meminta Lord Farquaad untuk mengembalikan rawanya. Sementara itu, Farquaad memaksa Gingy untuk memeberitahu di mana Magic Mirror. Mirror mengatakan kepadanya bahwa Farquaad dapat menjadi raja yang sesungguhnya dengan menikahi seorang putri. Mirror memberinya pilihan: Cinderella, Snow White, dan Putri Fiona (Cameron Diaz). Farquaad pun memilih Fiona.', 31),
(50, 'Ralph Break The Internet', 'Inggris', 'Indonesia', '5dd02e4f7d05d.jpg', 'Animation', 29000, 'Shrek (Mike Myers), ogre yang selalu sendiri di rawanya, sangat kesal ketika seluruh makhluk-makhluk dari dongeng, termasuk Pinocchio, Three Little Pigs, dan Donkey (Eddie Murphy), dipaksa mengungsi ke rawa milik Shrek oleh Lord Farquaad (John Lithgow).\r\nShrek pergi bersama Donkey untuk meminta Lord Farquaad untuk mengembalikan rawanya. Sementara itu, Farquaad memaksa Gingy untuk memeberitahu di mana Magic Mirror. Mirror mengatakan kepadanya bahwa Farquaad dapat menjadi raja yang sesungguhnya dengan menikahi seorang putri. Mirror memberinya pilihan: Cinderella, Snow White, dan Putri Fiona (Cameron Diaz). Farquaad pun memilih Fiona.', 11),
(51, 'Spies In Disguise', 'Inggris', 'Indonesia', '5dd02e7ea9b32.jpg', 'Animation', 50000, 'Shrek (Mike Myers), ogre yang selalu sendiri di rawanya, sangat kesal ketika seluruh makhluk-makhluk dari dongeng, termasuk Pinocchio, Three Little Pigs, dan Donkey (Eddie Murphy), dipaksa mengungsi ke rawa milik Shrek oleh Lord Farquaad (John Lithgow).\r\nShrek pergi bersama Donkey untuk meminta Lord Farquaad untuk mengembalikan rawanya. Sementara itu, Farquaad memaksa Gingy untuk memeberitahu di mana Magic Mirror. Mirror mengatakan kepadanya bahwa Farquaad dapat menjadi raja yang sesungguhnya dengan menikahi seorang putri. Mirror memberinya pilihan: Cinderella, Snow White, dan Putri Fiona (Cameron Diaz). Farquaad pun memilih Fiona.', 36),
(52, 'Incredibles 2', 'Inggris', 'Indonesia', '5dd02ea42ca7c.jpg', 'Animation', 36000, 'Shrek (Mike Myers), ogre yang selalu sendiri di rawanya, sangat kesal ketika seluruh makhluk-makhluk dari dongeng, termasuk Pinocchio, Three Little Pigs, dan Donkey (Eddie Murphy), dipaksa mengungsi ke rawa milik Shrek oleh Lord Farquaad (John Lithgow).\r\nShrek pergi bersama Donkey untuk meminta Lord Farquaad untuk mengembalikan rawanya. Sementara itu, Farquaad memaksa Gingy untuk memeberitahu di mana Magic Mirror. Mirror mengatakan kepadanya bahwa Farquaad dapat menjadi raja yang sesungguhnya dengan menikahi seorang putri. Mirror memberinya pilihan: Cinderella, Snow White, dan Putri Fiona (Cameron Diaz). Farquaad pun memilih Fiona.', 17),
(53, 'Coco', 'Inggris', 'Inggris', '5dd02ed46e96c.jpg', 'Animation', 53000, 'Shrek (Mike Myers), ogre yang selalu sendiri di rawanya, sangat kesal ketika seluruh makhluk-makhluk dari dongeng, termasuk Pinocchio, Three Little Pigs, dan Donkey (Eddie Murphy), dipaksa mengungsi ke rawa milik Shrek oleh Lord Farquaad (John Lithgow).\r\nShrek pergi bersama Donkey untuk meminta Lord Farquaad untuk mengembalikan rawanya. Sementara itu, Farquaad memaksa Gingy untuk memeberitahu di mana Magic Mirror. Mirror mengatakan kepadanya bahwa Farquaad dapat menjadi raja yang sesungguhnya dengan menikahi seorang putri. Mirror memberinya pilihan: Cinderella, Snow White, dan Putri Fiona (Cameron Diaz). Farquaad pun memilih Fiona.', 48),
(54, 'The Iron Giant', 'Inggris', 'Spanyol', '5dd02eff1791b.jpg', 'Animation', 42000, 'Shrek (Mike Myers), ogre yang selalu sendiri di rawanya, sangat kesal ketika seluruh makhluk-makhluk dari dongeng, termasuk Pinocchio, Three Little Pigs, dan Donkey (Eddie Murphy), dipaksa mengungsi ke rawa milik Shrek oleh Lord Farquaad (John Lithgow).\r\nShrek pergi bersama Donkey untuk meminta Lord Farquaad untuk mengembalikan rawanya. Sementara itu, Farquaad memaksa Gingy untuk memeberitahu di mana Magic Mirror. Mirror mengatakan kepadanya bahwa Farquaad dapat menjadi raja yang sesungguhnya dengan menikahi seorang putri. Mirror memberinya pilihan: Cinderella, Snow White, dan Putri Fiona (Cameron Diaz). Farquaad pun memilih Fiona.', 31),
(55, 'Abraham Lincoln: Vampire Hunter', 'Inggris', 'Indonesia', '5dd02f3ebac46.jpg', 'Horror', 13000, 'Abraham Lincoln: Vampire Hunter adalah sebuah film horor-laga-fantasi Amerika Serikat tahun 2012 yang berdasarkan novel mashup dengan nama sama karya pengarang Seth Grahame-Smith. Film ini disutradarai dan co-diproduksi oleh Timur Bekmambetov, bersama dengan Tim Burton. Penulis novel, Seth Grahame-Smith, menulis skenario diadaptasi, dan Benjamin Walker membintangi sebagai karakter judul. Tokoh kehidupan nyata Abraham Lincoln, Presiden Amerika Serikat ke-16 (1861â€“1865), digambarkan dalam novel dan film ketika memiliki identitas rahasia sebagai pemburu vampir. Pembuatan film dimulai di Louisiana pada Maret 2011 dan film ini dirilis dalam bentuk 3D pada tanggal 20 Juni 2012 di Britania Raya dan 22 Juni 2012 di Amerika Serikat.', 13),
(56, 'The Exorcist', 'Inggris', 'Indonesia', '5dd02f5c40738.png', 'Horror', 66600, 'Abraham Lincoln: Vampire Hunter adalah sebuah film horor-laga-fantasi Amerika Serikat tahun 2012 yang berdasarkan novel mashup dengan nama sama karya pengarang Seth Grahame-Smith. Film ini disutradarai dan co-diproduksi oleh Timur Bekmambetov, bersama dengan Tim Burton. Penulis novel, Seth Grahame-Smith, menulis skenario diadaptasi, dan Benjamin Walker membintangi sebagai karakter judul. Tokoh kehidupan nyata Abraham Lincoln, Presiden Amerika Serikat ke-16 (1861â€“1865), digambarkan dalam novel dan film ketika memiliki identitas rahasia sebagai pemburu vampir. Pembuatan film dimulai di Louisiana pada Maret 2011 dan film ini dirilis dalam bentuk 3D pada tanggal 20 Juni 2012 di Britania Raya dan 22 Juni 2012 di Amerika Serikat.', 666),
(57, 'The Nun', 'Inggris', 'Indonesia', '5dd02f79337fc.jpg', 'Horror', 21000, 'Abraham Lincoln: Vampire Hunter adalah sebuah film horor-laga-fantasi Amerika Serikat tahun 2012 yang berdasarkan novel mashup dengan nama sama karya pengarang Seth Grahame-Smith. Film ini disutradarai dan co-diproduksi oleh Timur Bekmambetov, bersama dengan Tim Burton. Penulis novel, Seth Grahame-Smith, menulis skenario diadaptasi, dan Benjamin Walker membintangi sebagai karakter judul. Tokoh kehidupan nyata Abraham Lincoln, Presiden Amerika Serikat ke-16 (1861â€“1865), digambarkan dalam novel dan film ketika memiliki identitas rahasia sebagai pemburu vampir. Pembuatan film dimulai di Louisiana pada Maret 2011 dan film ini dirilis dalam bentuk 3D pada tanggal 20 Juni 2012 di Britania Raya dan 22 Juni 2012 di Amerika Serikat.', 12),
(58, 'Annabelle', 'Inggris', 'Indonesia', '5dd02faa349a8.jpg', 'Horror', 13000, 'Abraham Lincoln: Vampire Hunter adalah sebuah film horor-laga-fantasi Amerika Serikat tahun 2012 yang berdasarkan novel mashup dengan nama sama karya pengarang Seth Grahame-Smith. Film ini disutradarai dan co-diproduksi oleh Timur Bekmambetov, bersama dengan Tim Burton. Penulis novel, Seth Grahame-Smith, menulis skenario diadaptasi, dan Benjamin Walker membintangi sebagai karakter judul. Tokoh kehidupan nyata Abraham Lincoln, Presiden Amerika Serikat ke-16 (1861â€“1865), digambarkan dalam novel dan film ketika memiliki identitas rahasia sebagai pemburu vampir. Pembuatan film dimulai di Louisiana pada Maret 2011 dan film ini dirilis dalam bentuk 3D pada tanggal 20 Juni 2012 di Britania Raya dan 22 Juni 2012 di Amerika Serikat.', 13),
(59, 'IT', 'Inggris', 'Inggris', '5dd02fc15c2e9.jpg', 'Horror', 25000, 'Abraham Lincoln: Vampire Hunter adalah sebuah film horor-laga-fantasi Amerika Serikat tahun 2012 yang berdasarkan novel mashup dengan nama sama karya pengarang Seth Grahame-Smith. Film ini disutradarai dan co-diproduksi oleh Timur Bekmambetov, bersama dengan Tim Burton. Penulis novel, Seth Grahame-Smith, menulis skenario diadaptasi, dan Benjamin Walker membintangi sebagai karakter judul. Tokoh kehidupan nyata Abraham Lincoln, Presiden Amerika Serikat ke-16 (1861â€“1865), digambarkan dalam novel dan film ketika memiliki identitas rahasia sebagai pemburu vampir. Pembuatan film dimulai di Louisiana pada Maret 2011 dan film ini dirilis dalam bentuk 3D pada tanggal 20 Juni 2012 di Britania Raya dan 22 Juni 2012 di Amerika Serikat.', 52),
(60, 'The Cabin in The Woods', 'Inggris', 'Indonesia', '5dd02fe33b93f.jpg', 'Horror', 17000, 'Abraham Lincoln: Vampire Hunter adalah sebuah film horor-laga-fantasi Amerika Serikat tahun 2012 yang berdasarkan novel mashup dengan nama sama karya pengarang Seth Grahame-Smith. Film ini disutradarai dan co-diproduksi oleh Timur Bekmambetov, bersama dengan Tim Burton. Penulis novel, Seth Grahame-Smith, menulis skenario diadaptasi, dan Benjamin Walker membintangi sebagai karakter judul. Tokoh kehidupan nyata Abraham Lincoln, Presiden Amerika Serikat ke-16 (1861â€“1865), digambarkan dalam novel dan film ketika memiliki identitas rahasia sebagai pemburu vampir. Pembuatan film dimulai di Louisiana pada Maret 2011 dan film ini dirilis dalam bentuk 3D pada tanggal 20 Juni 2012 di Britania Raya dan 22 Juni 2012 di Amerika Serikat.', 17),
(61, 'Train to Busan', 'Korea', 'Inggris', '5dd0301a7ddba.jpg', 'Horror', 31000, 'Abraham Lincoln: Vampire Hunter adalah sebuah film horor-laga-fantasi Amerika Serikat tahun 2012 yang berdasarkan novel mashup dengan nama sama karya pengarang Seth Grahame-Smith. Film ini disutradarai dan co-diproduksi oleh Timur Bekmambetov, bersama dengan Tim Burton. Penulis novel, Seth Grahame-Smith, menulis skenario diadaptasi, dan Benjamin Walker membintangi sebagai karakter judul. Tokoh kehidupan nyata Abraham Lincoln, Presiden Amerika Serikat ke-16 (1861â€“1865), digambarkan dalam novel dan film ketika memiliki identitas rahasia sebagai pemburu vampir. Pembuatan film dimulai di Louisiana pada Maret 2011 dan film ini dirilis dalam bentuk 3D pada tanggal 20 Juni 2012 di Britania Raya dan 22 Juni 2012 di Amerika Serikat.', 13),
(62, 'The Shining', 'Inggris', 'Inggris', '5dd0305090084.jpg', 'Horror', 33000, 'Abraham Lincoln: Vampire Hunter adalah sebuah film horor-laga-fantasi Amerika Serikat tahun 2012 yang berdasarkan novel mashup dengan nama sama karya pengarang Seth Grahame-Smith. Film ini disutradarai dan co-diproduksi oleh Timur Bekmambetov, bersama dengan Tim Burton. Penulis novel, Seth Grahame-Smith, menulis skenario diadaptasi, dan Benjamin Walker membintangi sebagai karakter judul. Tokoh kehidupan nyata Abraham Lincoln, Presiden Amerika Serikat ke-16 (1861â€“1865), digambarkan dalam novel dan film ketika memiliki identitas rahasia sebagai pemburu vampir. Pembuatan film dimulai di Louisiana pada Maret 2011 dan film ini dirilis dalam bentuk 3D pada tanggal 20 Juni 2012 di Britania Raya dan 22 Juni 2012 di Amerika Serikat.', 84),
(63, 'The Office', 'Inggris', 'Inggris', '5dd03086e1aee.jpg', 'Romance', 40000, 'Abraham Lincoln: Vampire Hunter adalah sebuah film horor-laga-fantasi Amerika Serikat tahun 2012 yang berdasarkan novel mashup dengan nama sama karya pengarang Seth Grahame-Smith. Film ini disutradarai dan co-diproduksi oleh Timur Bekmambetov, bersama dengan Tim Burton. Penulis novel, Seth Grahame-Smith, menulis skenario diadaptasi, dan Benjamin Walker membintangi sebagai karakter judul. Tokoh kehidupan nyata Abraham Lincoln, Presiden Amerika Serikat ke-16 (1861â€“1865), digambarkan dalam novel dan film ketika memiliki identitas rahasia sebagai pemburu vampir. Pembuatan film dimulai di Louisiana pada Maret 2011 dan film ini dirilis dalam bentuk 3D pada tanggal 20 Juni 2012 di Britania Raya dan 22 Juni 2012 di Amerika Serikat.                                                ', 3),
(70, 'Kimi no Na wa.', 'Jepang (	君の名は。)', 'Indonesia,Inggris', '5dd2c37b770bd.png', 'Romance', 29000, '            Kimi no Na wa bercerita seputar kehidupan seorang gadis bernama Mitsuha Miyamizu dan seorang anak lelaki bernama Taki Tachibana. Mitsuha adalah anak dari desa sementara Taki tinggal di tengah kota Tokyo. Terkadang mereka bermimpi seperti sedang bertukar jiwa, tetapi lama-kelamaan mimpi itu terasa semakin nyata. Saat mereka sadar bahwa mereka berdua tidak bermimpi, mereka mulai membuat buku harian untuk melaporkan kejadian yang mereka alami saat bertukar tempat. Suatu hari, fenomena pertukaran ini pun tersebut berhenti. Perasaan resah dan cinta yang timbul di dalam hati membuat mereka berusaha mencari keberadaan satu sama lain.Cerita tersebut dikatakan terinspirasi dari dongeng tua di Jepang yang menceritakan tentang dua bersaudara lelaki dan perempuan. Karena kepribadiannya, si anak lelaki dibesarkan seperti perempuan sedangkan si anak perempuan dibesarkan seperti lelaki. Selain dongeng, ada juga puisi tentang mimpi yang menginspirasi elemen di mana mereka berdua bertukar setelah terbangun dari tidur, layaknya orang yang bermimpi. Tema cerita yang familiar seperti inilah yang berhasil membuat Kimi no Na wa diterima dengan baik oleh penonton Jepang.', 5),
(71, 'The Best Fried Chicken', 'Korea', 'Indonesia', '5dd2c4bbd51b1.jpg', 'Drama', 19000, '            Seorang pria yang diperankan oleh Park Sun-Ho bekerja untuk sebuah perusahaan besar. Mimpinya adalah menjalankan restoran ayam. Seorang wanita diperankan Kim So-Hye ingin menjadi penulis webtoon. Dia tinggal di rumah pemandian yang ditinggalkan kakeknya. Dia mengasingkan dirinya dari masyarakat. Kedua individu ini bertemu dan tumbuh bersama.', 7),
(72, 'Kinkyori Renai Season Zero', 'Jepang', 'Indonesia', '5dd2c74d1afb3.jpg', 'Drama', 27000, '            Film mantap', 0),
(73, '  Class of Lies  미스터 기간제', 'Korea', 'Indonesia', '5dd2c7a559d93.jpg', 'Drama', 31000, 'Ki Moo-Hyeok yang diperankan oleh Yoon Gyun-Sang adalah seorang pengacara dengan tingkat kemenangan tinggi. Dia sangat menyukai uang dan hanya peduli tentang itu. Suatu hari Dia harus merasakan titik terendahnya, karena sebuah kasus pembunuhan di sekolah menengah. Dia ingin mencoba kembali memperbaiki namanya.\r\n \r\nAkhirnya Moo-Hyeok mengganti identitas dan ke sekolah menengah untuk mulai bekerja sebagai guru sementara (kalau di Indonesia guru honorer). Dia mencoba mengungkap kebenaran dan rahasia yang dimiliki para siswa di sekolah itu. Ki Moo Hyeok juga terlobat dengan seorang guru bernama Ha So-Hyun diperankan oleh Keum Sae-Rok.\r\n \r\nDia adalah guru olahraga yang sangat mencintai murid-muridnya. Ki Moo-Hyeok dan Ha So-Hyun kemudian bekerja sama untuk mencari tahu rahasia para siswa dan kebenaran yang ada.', 3),
(74, 'Hotel Del Luna', 'Korea', 'Indonesia', '5dd2c8188b1bc.jpg', 'Drama', 21000, 'Karena kasus yang tidak terduga, seorang pria mulai bekerja di Hotel del Luna sebagai asisten manaher termuda yang pernah ada di sebuah perusahaan perhotelan multinasional.\r\n \r\nDia sangat perfeksionis dan tulis, terlihat berkepala dingin, tetapi sebenarnya dia memiliki hati yang lembut.\r\n \r\nCEO Hotel del Luna itu adalah adalah Jang Man-Wol yang diperankan oleh IU, seorang wanita cantik, tapi dia tidak baik kepada orang lain.\r\n \r\nDia membuat kesalahan besar bertahun-tahun yang lalu dan karena itu, dia telah berada di bawah kutukan selama lebih dari 1.000 tahun. Hotel itu terletak di pusat kota Seoul dan memiliki penampilan sangat tua.\r\n \r\nPelanggan hotel terdiri dari hantu. ', 5),
(75, 'Abyss', 'Korea', 'Indonesia', '5dd2c8c8688bb.jpg', 'Drama', 35000, 'Karena roti misterius, penampilan jaksa wanita cantik dan pria jelek benar-benar berubah. Kejaksaan berubah dari yang cantik ke yang biasa dan pria yang jelek berubah menjadi pria tampan. Karena perubahan itu, jaksa menyelidiki apa yang terjadi. Dia menemukan cinta sejati selama proses tersebut.\r\n \r\nDiawali dari seorang bernama Ko Se-Yeon yang diperankan oleh Park Bo-Young adalah jaksa yang cantik dan dia pandai dalam pekerjaannya. Dia mengalami kecelakaan dan meninggal. Karena roti Abyss yang misterius, Ko Se-Yeon dihidupkan kembali, tetapi sekarang ia memiliki penampilan yang berbeda.\r\n \r\nKo Se-Yeon sekarang memiliki penampilan yang sama. Roti misterius Abyss membangkitkan orang mati, tetapi mereka mendapatkan penampilan yang berbeda. Penampilan mereka tergantung pada seberapa baik semangat mereka.\r\n \r\nSementara itu, Cha Min diperankan oleh Ahn Hyo-Seop adalah penerus perusahaan kosmetik. Ia cerdas, rendah hati dan memiliki hati yang baik. Dia juga tidak menarik. Cha Min mengalami kecelakaan dan meninggal. Karena roti Abyss yang misterius, ia hidup kembali dengan penampilan yang berbeda. Dia sekarang memiliki penampilan yang tampan.\r\n \r\nKo Se-Yeon mulai bekerja sebagai pengacara di sebuah firma hukum. Cha Min mulai bekerja untuk Ko Se-Yeon di firma hukum.\r\n', 0),
(76, 'Dilan 1991', 'Indonesia', 'Indonesia', '5dd2c949a0a57.jpg', 'Drama', 10000, '            Film Dilan dan Milea', 1),
(77, 'Strangers from Hell', 'Korea', 'Indonesia', '5dd2c997d5cc3.jpg', 'Drama', 19000, 'Drama Hell Is Other People menceritakan tentang Yoon Jong-Woo yang diperankan oleh Im Si-Wan adalah seorang pria berusia 20-an. Dia telah tinggal di kota kecil selama hidupnya, tetapi dia mendapat pekerjaan di sebuah kantor kecil di Seoul.\r\n \r\nYoon Jong-Woo pindah ke Seoul dan tinggal di sebuah apartemen murah yang berbagi dapur dan kamar mandinya dengan penghuni lainnya. Dia tidak suka tinggal di apartemen dan dia tidak suka penghuni lain yang tampak aneh dan curiga.', 0),
(78, 'K2 더 케이투 ', 'Korea', 'Indonesia', '5dd2c9d4eead1.jpg', 'Drama', 24000, 'Cerita dalam serial The K2 akan berfokus pada Kim Je Ha (Ji Chang Wook). Kim Je Ha adalah mantan prajurit yang kini menjadi seorang pengawal. Ia ditugaskan untuk mengawal Choi Yoo Jin (Soon Yoon A), istri dari calon presiden (Cho Seong Ha) yang juga putri dari keluarga kaya.\r\n\r\nSementara itu, Ko An Na (Yoona) adalah putri rahasia harapan presiden. An Na memiliki sifat yang suka menyendiri. Bagaimana kisah mereka selengkapnya? ', 3),
(79, 'After Chapter 1', 'Inggris', 'Indonesia', '5dd2cb0f601ff.jpg', 'Romance', 20000, '            Film yang bagus', 0),
(80, 'Midnight Sun', 'Inggris', 'indonesia', '5dd2cb4e2a7f3.jpg', 'Romance', 12000, '            Film ini cukup bagus', 3),
(81, 'That All Boys', 'Inggris', 'Indonesia', '5dd2cc73d002f.jpg', 'Romance', 19000, 'Film bagus', 0),
(82, 'The Fault in Our Stars', 'Inggris', 'Indonesia', '5dd2cce841777.jpg', 'Romance', 31000, 'Hazel Grace Lancaster (Shailene Woodley) merupakan seorang remaja yang tinggal di Indianapolis yang menderita kanker tiroid yang telah menyebar ke paru-parunya. Percaya bahwa Hazel depresi, ibunya, Frannie (Laura Dern), mendesak Hazel untuk menghadiri komunitas dukungan pasien kanker tiap minggu untuk membantunya berteman dengan orang-orang yang mengalami hal yang sama. Di sana, Hazel bertemu dengan Augustus Waters (Ansel Elgort), seorang remaja yang menawan yang kehilangan kakinya karena kanker tulang, tetapi sejak saat itu, Augustus tampaknya terbebas dari kanker. Ia mengundang Hazel ke rumahnya di mana mereka berteman karena hobi mereka dan setuju untuk membaca buku favorit masing-masing. Hazel merekomendasikan novel An Imperial Affliction, novel tentang seorang gadis yang menderita kanker bernama Anna yang mirip dengan pengalamannya, dan Augustus memberikan Hazel novel Counter Insurgence. Mereka tetap berhubungan melalui teks selama beberapa minggu dan semakin dekat. Setelah Augustus selesai membaca novel itu, ia mengungkapkan rasa frustrasinya dengan akhir novel yang mendadak (berakhir di tengah-tengah kalimat). Hazel menjelaskan bahwa penulis novel tersebut yang misterius, Peter Van Houten (Willem Dafoe), beristirahat di Amsterdam setelah novel tersebut dipublikasikan dan belum terdengar kabarnya sejak saat itu.', 10),
(83, 'Joker ', 'Inggris', 'Indonesia', '5dd2cf1232ce9.jpg', 'Action', 35000, 'Joker, Arthur Fleck (Joaquin Phoenix) hidup sepi dalam gaduhnya Gotham. Tanpa sosok Ayah, satu-satunya sahabat yang ia miliki adalah Ibunya yang rapuh, Penny Fleck (Frances Conroy).\r\n\r\n\r\nArthur menjalani kehidupan sehari-harinya menjadi dua sosok badut; yang pertama adalah pekerjaan sehari-harinya sebagai badut sewaan, yang kedua adalah sisi aslinya. Menjadi badut membuatnya merasa diterima di masyarakat, walau ia tetap sering dikerjai dan diolok sekelilingnya.\r\n\r\nWalau diberi panggilan “Happy” oleh Ibunya, Arthur tak pernah merasa bahagia sekali pun. Hadirnya Murray Franklin (Robert De Niro) justru membawa kekecewaan baginya. Lalu bagaimana transformasi Arthur Fleck menjadi Joker? Apa titik balik baginya? Apa hubungannya dengan Arkham State Hospital (Arkham Asylum)?            ', 3),
(84, 'Crows Zero', 'Inggris', 'Indonesia', '5dd2cf7b491d8.jpg', 'Action', 19000, 'Takiya Genji (Shun Oguri) adalah siswa kelas tiga yang baru saja pindah ke Sekolah Khusus Pria Suzuran. Saat masuknya bertepatan dengan masa orientasi siswa kelas satu. Selama orientasi siswa baru, yakuza datang ke sekolah tersebut untuk melakukan pembalasan dendam pada siswa kelas tiga Tamao Serizawa (Takayuki Yamada) karena sudah menyerang beberapa anggota geng mereka. Para preman tersebut salah mengira Genji adalah target mereka dan sebuah kericuhan pun terjadi di lapangan sekolah. Sementara itu, Serizawa sedang mengunjungi teman baiknya Tatsukawa Tokio (Kenta Kiritani) yang baru saja keluar dari rumah sakit. Pada saat kembali ke sekolah, Serizawa menyaksikan Genji yang mengalahkan yakuza terakhir.\r\n\r\nMalam itu, Genji pergi ke sebuah klub malam yang ia sering kunjungi dan bertemu dengan penyanyi R&B Aizawa Ruka (Meisa Kuroki). Dia kemudian pergi untuk menemui ayahnya, seorang bos yakuza Takiya Hideo (Goro Kishitani) untuk mencanangkan ambisinya untuk menguasai Suzuran. Ayahnya juga dulu bermimpi untuk menguasai Suzuran tetapi gagal. Genji membuat Hideo berjanji untuk mengakuinya sebagai penerusnya jika dia berhasil. Keesokan harinya, Genji menantang Serizawa berkelahi, tetapi dihentikan oleh Tokio. Dia memberi tahu Genji bahwa jika dia benar-benar ingin membuat sebuah impresi dia harus mulai dengan mengalahkan Rindaman, seorang petarung legendaris di sekolah tersebut.            ', 0),
(85, 'Gemini Man', 'Inggris', 'Indonesia', '5dd2d003e7c18.jpg', 'Action', 23000, 'Gemini Man menyajikan olahan sci-fi plus aksi baku hantam yang akan membuatmu penasaran. Aktor Will Smith harus menghadapi dirinya yang lebih muda, walau sudah tua dirinya berhasil tampil prima di setiap adegan laga. \r\n\r\nPenonton pun diajak menebak-nebak seperti apa alur di film ini. Sayangnya, bekal cerita sci-fi tidak begitu menyeimbangi akting Will Smith. Jalan cerita cukup bertele-tele, dan tidak langsung kepada pokok permasalahan, sehingga beberapa plot yang ditempatkan di film ini terlihat ngasal. \r\n\r\nNamun, jika bicara adegan action atau adegan baku hantam yang disajikan, kamu akan benar-benar dihibur dengan adegan sengit saat Brogan dan Junior yang saling mencoba membunuh satu sama lain. Meskipun begitu, muncul beberapa adegan ekstrim yang membuat penonton terngaga.\r\n\r\nPerpaduan sutradara Ang Lee, produser berpengalaman Jerry Bruckheimer dan aktor-aktris berpengalaman seperti Clive Owen, Mary Elizabeth Winstead hingga Benedict Wong pun belum mampu menyelematkan film ini.\r\n\r\nMisalnya saja, saat Will Smith menggunakan motor gunungnya dan melemparnya dengan santai. Atau, pada sebuah adegan dimana Brogan dan Junior yang kemudian  saling melemparkan granat.  Selain akan membuat kamu ternganga, adegan-adegan ini juga akan membuat kamu geleng-geleng kepala. \r\n\r\nPaling mencolok dalam film Gemini Man tentu visual efek pada wajah Will Smith. Harus diakui visual CGI dalam film ini ciamik, menggunakan kecanggihan “De-Aging” dan inilah keunggulan film Gemini Man. Efek penggunaan wajah yang lebih muda pada sosok Will Smith, mampu menyajikan visualisasi yang benar-benar meyakinkan penonton bahwa sang aktor yang menjadi muda sungguh terpampang nyata. ', 9);

-- --------------------------------------------------------

--
-- Struktur dari tabel `penjualan`
--

CREATE TABLE `penjualan` (
  `id_jual` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `nama_penerima` varchar(100) NOT NULL,
  `kota` varchar(50) NOT NULL,
  `postal` varchar(10) NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` varchar(30) NOT NULL,
  `status_jual` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `penjualan`
--

INSERT INTO `penjualan` (`id_jual`, `username`, `id_produk`, `jumlah`, `nama_penerima`, `kota`, `postal`, `alamat`, `no_hp`, `status_jual`) VALUES
(20, 'torangto93', 53, 2, 'Mahardika Silvesta', 'Wasinton DC', '993423', 'Forest Street', '08166666666', 'Success'),
(28, 'Banning', 35, 1, 'Mike Banning ', 'Jogja', '99911', 'Jln Tambak bayan No 10', '08136582994', 'Pending'),
(29, 'Banning', 36, 1, 'Mike Banning ', 'Jogja', '99911', 'Jln Tambak bayan No 10', '08136582994', 'Success'),
(30, 'Banning', 32, 1, 'Mike Banning ', 'Jogja', '99911', 'Jln Tambak bayan No 10', '08136582994', 'Pending'),
(31, 'Banning', 76, 2, 'Mike Banning ', 'Jogja', '99911', 'Jln Tambak bayan No 10', '08136582994', 'Success');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `nama` varchar(80) NOT NULL,
  `email` varchar(100) NOT NULL,
  `no_hp` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`nama`, `email`, `no_hp`, `username`, `password`) VALUES
('Mimin Ganteng', 'asdashhh@ymail.com', '123180122', 'admin', 'admin'),
('Mike Banning', 'Mike_banning@yahoo.co.id', '08136274833', 'Banning', '123'),
('Torangto Situngkir', 'torangtositungkir93@gmail.com', '08139775285', 'torangto93', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indeks untuk tabel `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`id_jual`),
  ADD KEY `fk_penjualan` (`username`),
  ADD KEY `fkid_produk` (`id_produk`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `film`
--
ALTER TABLE `film`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT untuk tabel `penjualan`
--
ALTER TABLE `penjualan`
  MODIFY `id_jual` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `penjualan`
--
ALTER TABLE `penjualan`
  ADD CONSTRAINT `fk_penjualan` FOREIGN KEY (`username`) REFERENCES `user` (`username`),
  ADD CONSTRAINT `fkid_produk` FOREIGN KEY (`id_produk`) REFERENCES `film` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

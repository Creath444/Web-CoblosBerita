-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Jan 2024 pada 02.31
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web-pemilu`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_berita`
--

CREATE TABLE `tbl_berita` (
  `id_berita` int(11) NOT NULL,
  `judul_berita` varchar(255) DEFAULT NULL,
  `penulis` varchar(50) DEFAULT NULL,
  `isi_berita` text DEFAULT NULL,
  `tgl_berita` date DEFAULT NULL,
  `kategori_berita` varchar(50) DEFAULT NULL,
  `gambar_berita` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_berita`
--

INSERT INTO `tbl_berita` (`id_berita`, `judul_berita`, `penulis`, `isi_berita`, `tgl_berita`, `kategori_berita`, `gambar_berita`) VALUES
(1, 'Kubu Ganjar-Mahfud Ungkap Bakal Lakukan Ini Saat Kampanye Terbuka', 'Daniel A. Fajri', '<p>Komisi Pemilihan Umum (KPU) menentukan kampanye rapat umum atau kampanye terbuka Pemilu 2024 digelar pada 21 Januari hingga 10 Februari 2024 mendatang. Kubu pendukung pasangan calon (paslon) nomor urut 3 Ganjar Pranowo-Mahfud Md telah menyiapkan berbagai opsi di kampanye tersebut. “Kami sudah menyiapkan berbagai opsi kampanye dari Ibu Mega, Pak Ganjar, Prof Mahfud, Pak Mardiono, Pak Hary Tanoe, Pak Andika, dan Pak Sandiaga Uno,\" ujar Sekretaris Tim Pemenangan Nasional (TPN) Ganjar-Mahfud, Hasto Kristiyanto di Jakarta, Ahad, 14 Januari 2024. Para menteri PDIP yang berada dalam Kabinet Indonesia Maju pun, kata Hasto, telah dipersiapkan untuk turun ke bawah bersama rakyat melakukan kampanye sesuai zonasi. Selain itu, Hasto berujar, para elite parpol hingga kader TPN Ganjar-Mahfud pun akan melakukan kampanye terbuka zonasi. \"Jadi, kami sudah menyiapkan dengan baik, tinggal menunggu keputusan resmi dari KPU terkait dengan pembagian zonasi,\" katanya. Hasto yang juga Sekretaris Jenderal PDIP itu mengatakan pihaknya tinggal menunggu keputusan resmi dari KPU terkait pembagian zonasi untuk kampanye Pilpres 2024. Pasalnya, kata Hasto, sampai saat ini informasi mengenai hal itu tak kunjung dipublikasikan. \"Sebenarnya yang kami sesalkan sampai sekarang. Ini hal-hal yang terkait dengan teknis kampanye akbar belum dikeluarkan oleh KPU termasuk pembagian zonasinya,\" jelas Hasto. Bila mendapatkan zonasi di Sumatera, sambung dia, PDIP akan memulai dari Sumatra Utara. Begitu pula dengan Jawa yang akan dimulai dari Jawa Tengah. Sehingga, lanjut Hasto, daerah-daerah yang menjadi basis PDIP itu akan menjadi fokus kampanye terbuka zonasi. Kemudian, 18 provinsi yang menjadi lumbung suara PDIP pada Pemilu 2019 akan menjadi konsentrasi PDIP memenangkan Ganjar-Mahfud. Megawati direncanakan turun gunung Ketua DPP PDIP Puan Maharani mengatakan bahwa rencana kampanye terbuka koalisi partai politik pendukung Ganjar-Mahfud akan berjalan dengan baik, lancar, dan tertib. \"Dan semua pihak menghargai dan menghormati posisinya masing-masing,\" kata Puan seperti dikutip dari Tempo, Ahad, 14 Januari. Namun Puan belum memastikan Ketua Umum PDIP Megawati Soekarnoputri akan hadir di daerah mana. Sejauh ini, kata dia, TPN Ganjar-Mahfud masih menjadwalkan kehadiran Megawati. \"Masih kami jadwalkan di tempat yang memang rakyat menunggu,\" kata Puan.</p>', '2024-01-16', 'Pilpres', '659882986_mahfud.jpg'),
(3, 'Ketua Bawaslu soal Pemasangan APK di Pohon: Kami Akan Telusuri', 'Editor  Eko Ari Wibowo', '<p>Ketua Badan Pengawas Pemilihan Umum (<a href=\"https://www.tempo.co/tag/bawaslu\" target=\"_blank\" rel=\"noopener\">Bawaslu</a>) Rahmat Bagja, mengatakan larangan pemasangan alat peraga kampanye atau APK di pohon atau dipaku pada pohon. Menurut dia peraturan itu sudah termuat dalam Peraturan Komisi Pemilihan Umum (<a href=\"https://www.tempo.co/tag/pkpu\" target=\"_blank\" rel=\"noopener\">PKPU</a>).</p>\r\n<p>\"Dalam PKPU itu tidak boleh menempel (pohon) atau dipaku. Dulu kan kesepakatannya tidak boleh dipaku itu. Nah kemudian sekarang dilarang,\" kata Rahmat saat ditemui di gedung Dewan Kehormatan Penyelenggara Pemilu (DKPP), di Jakarta Pusat, Senin, 15 Januari 2024.</p>\r\n<div class=\"bacajuga\">\r\n<div class=\"inbacajuga\">\r\n<p>Hal tersebut merespons banyak baliho calon legislatif hingga calon presiden wakil presiden yang bertebaran ditempel di pohon. Pemasangan&nbsp;<a href=\"https://www.tempo.co/tag/apk\" target=\"_blank\" rel=\"noopener\">APK</a>&nbsp;di pohon itu sempat dicecar warga dengan memberikan frasa \"tersangka penusukan pohon\". Frasa itu ditulis di gambar caleg yang balihonya terpasang di pohon.</p>\r\n<p>Dia menyatakan penurunan APK itu merupakan kewenangan KPU melalui Panitia Pemilihan Kecamatan atau PPK.</p>\r\n<p>\"Kalau dilarang maka penurunannya oleh KPU seharusnya,\" tutur dia. Menurut dia, aturannya sudah diatur dalam Undang-Undang Pemilu.</p>\r\n<p>Namun dia mengatakan ada kewenangan Bawaslu untuk penurunan APK yang pemasangannya melanggar aturan. Pencabutan APK bermasalah itu akan melibatkan Satuan Polisi Pamong Praja di wilayah setempat.</p>\r\n<p>Sebelumnya ramai dibahas di media sosial perihal pemasangan APK di pohon. Sebuah video viral di media sosial yang memperlihatkan warga bereaksi dengan menandai puluhan poster kampanye caleg yang dipasang di pohon.</p>\r\n<p>Salah satu video beredar pada Jumat, 12 Januari 2024. Video di Instagram itu memperlihatkan warga menuliskan sejumlah caleg jadi \"tersangka penusukan pohon\" di pinggir jalan di Jakarta.</p>\r\n<p>Rahmat Bagja mengatakan akan memeriksa kembali pemasangan alat peraga kampanye yang dipasang secara serampangan dan melanggar aturan. Dia belum memastikan soal sanksi kepada calon legislatif atau calon presiden yang alat peraga terpasang di tempat terlarang. \"Kalau begitu kami akan periksa,\" ujar dia.</p>\r\n<p>Namun dia juga menyebutkan soal baliho yang diberi cat warna itu bisa termasuk pengrusakan alat peraga. \"Kan merusak alat peraga, tapi nanti ada pertanyaan khususnya, alat peraganya kan dipasang tidak pada tempatnya. Nah, itu jadi persoalan kan, ada tabrakan hukum di situ,\" ujar dia.</p>\r\n<p>Rahmat mengatakan, Bawaslu akan menelusuri lagi sejumlah tempat yang menjadi tempat pemasangan APK yang melanggar aturan tersebut. \"Kan pas dipilox kan tidak kelihatan, tuh. Videonya kan sebar,\" ucap dia.</p>\r\n</div>\r\n</div>', '2024-01-17', 'Pileg', '634476805_pileg.jpg'),
(4, 'Pilkada Serentak 2024, KPU Jawa Barat: Habiskan Anggaran Rp 1,15 Triliun', 'Ahmad Fikri ', '<p><strong>Bandung</strong>&nbsp;-&nbsp;Ketua Komisi Pemilihan Umum (KPU) Jawa Barat, Rifqi Ali Mubarok, mengatakan lembaganya telah menghitung seluruh biaya pemilihan kepala daerah atau&nbsp;<a href=\"https://www.tempo.co/tag/pilkada-serentak-2024\" target=\"_blank\" rel=\"noopener\">Pilkada Serentak 2024</a>&nbsp;di wilayah tersebut. Menurut Rifqi, untuk menggelar pemilihan gubernur dan pemilihan bupati /walikota se-Jawa Barat,&nbsp; pihaknya membutuhkan anggaran sebesar&nbsp; Rp 1,15 triliun.</p>\r\n<p>&ldquo;Itu untuk Pilgub dan pemilihan bupati/walikota ada pendanaan bersama,&rdquo; kata dia, Senin, 18 September 2023.&nbsp;</p>\r\n<p>Pilkada Serentak 2024 dijadwalkan digelar serentak di seluruh Indonesia pada 27 November 2024. Jawa Barat sendiri akan menggelar pemilihan gubernur serta pemilihan bupati dan wali kota di 27 kabupaten/kota.</p>\r\n<h2>Termasuk pembiayaan bersama</h2>\r\n<p>Rifqi mengatakan, nilai tersebut termasuk untuk pendanaan Pilgub Jawa Barat serta pendanaan bersama dengan&nbsp;<a href=\"https://www.tempo.co/tag/kpu\" target=\"_blank\" rel=\"noopener\">KPU</a>&nbsp;Kabupaten/Kota. Dia menyatakan terdapat sejumlah komponen biaya yang dibiayai secara bersama.</p>\r\n<p>Ia mencontohkan, pembiayaan untuk honor panitia penyelenggara dari tingkat atas sampai bawah. Misalnya, honor Panitia Pemilihan Kecamatan (PPK) dan Panitia Pemungutan Suara (PPS) akan dibiayai melalui anggaran provinsi.&nbsp; Sementara untuk biaya Kelompok Penyelenggara Pemungutan Suara (KPPS) akan dibiayai melalui anggaran kabupaten/kota.</p>\r\n<p>&ldquo;Itu sudah termasuk pendanaan bersama. Kalau tersendiri, pelaksanaan pilgub itu bisa sampai Rp 2 tirliun,&rdquo; kata Rifqi.&nbsp;</p>\r\n<h2>Honor penyelenggara paling besar</h2>\r\n<p>Rifqi memerinci komponen pembiayaan dana Pilgub Jawa Barat. Diantaranya yang paling besar proporsinya untuk honor panitia&nbsp;<em>adhoc</em>&nbsp;yakni&nbsp;<a href=\"https://www.tempo.co/tag/ppk\" target=\"_blank\" rel=\"noopener\">PPK</a>&nbsp;dan PPS mencapai 40 persen setara sektiar Rp 500 miliar, selanjutnya logistik pilkada 24 persen atau setara hampir mendekati Rp 300 miliar.</p>\r\n<p>&ldquo;Sisanya barang dan jasa lainnya,&rdquo; kata dia.&nbsp;</p>\r\n<p>Di dalam komponen barang dan jasa lainnya tersebut termasuk biaya sosialisasi dan alat peraga kampanye. Sosialisasi misalnya, menurut dia, proporsinya setara 4 persen dana pilkada, alat peraga kampanye setara 5 persen dana pilkada.</p>\r\n<h2>Selanjutnya, Rp 35 ribu per pemilih</h2>', '2024-01-18', 'Pilkada', '699047124_pilkada.jpg'),
(5, 'Pilpres 2024 Satu atau Dua Putaran? Ini Aturan Pilpres 2 Putaran', 'Eiben Heizard', '<p><strong>Jakarta</strong>&nbsp;- Salah satu opsi yang mungkin terjadi dalam Pemilihan Presiden disingkat&nbsp;<a href=\"https://www.tempo.co/tag/pilpres-2024\" target=\"_blank\" rel=\"noopener\"><strong>Pilpres 2024</strong></a>, sebulan lagi di Indonesia, adalah terjadinya pemilu dua putaran.</p>\r\n<p>Penerapan sistem ini di Indonesia telah dijelaskan dalam Undang-Undang Nomor 7 Tahun 2017 tentang Pemilihan Umum. Pelaksanaan pemilu dua putaran ini juga telah diatur oleh Peraturan Komisi Pemilihan Umum (KPU).</p>\r\n<div class=\"bacajuga\">\r\n<div class=\"inbacajuga\">\r\n<p>Ketentuan ini berlaku khususnya pada Pemilu Presiden dan Wakil Presiden (Pilpres), dengan syarat dan prosedur yang harus dipenuhi sesuai dengan ketentuan hukum yang berlaku.</p>\r\n<h2>Aturan Main Pilpres 2 Putaran</h2>\r\n<p>Berdasarkan ketentuan Pasal 6A ayat (3) UUD 1945, penentuan terpilihnya seseorang sebagai Presiden dan Wakil Presiden memerlukan perolehan suara lebih dari 50 persen dari jumlah suara dengan sedikitnya 20 persen suara di setiap provinsi yang tersebar di lebih dari setengah jumlah provinsi di Indonesia.</p>\r\n<p>Selain itu, pasal 416 Ayat (2) UU Pemilu menjelaskan bahwa jika tidak ada pasangan calon (paslon) yang berhasil meraih suara melebihi 50 persen dari total suara dalam Pemilihan Presiden (Pilpres), dengan minimal 20 persen suara di setiap provinsi yang tersebar di lebih dari setengah jumlah provinsi di Indonesia, maka akan dilakukan pemilu putaran kedua. Dalam situasi ini, pemilih akan memberikan suara mereka dua kali, karena pemungutan suara dilakukan sebanyak dua kali.</p>\r\n<p>Pilpres putaran kedua melibatkan paslon yang meraih suara terbanyak pada putaran pertama dan kedua. Pasangan calon yang memenangkan suara terbanyak dalam putaran kedua, tanpa memperhatikan persyaratan distribusi suara (lebih dari 50 persen), akan diumumkan sebagai Presiden dan Wakil Presiden terpilih. Mereka kemudian akan dilantik sebagai Presiden dan Wakil Presiden.</p>\r\n<p><strong>Skenario Tahapan Pilpres 2024 Putaran Kedua</strong></p>\r\n<p>1. Pemutakhiran data pemilih dan penyusunan daftar pemilih (22 Maret 2024-25 April 2024)<br>2. Masa kampanye pemilu (2 Juni 2024-22 Juni 2024)<br>3. Masa tenang (23 Juni 2024-25 Juni 2024)<br>4. Pemungutan suara (26 Juni 2024)<br>5. Penghitungan suara (26 Juni 2024-27 Juni 2024)<br>6. Rekapitulasi hasil penghitungan suara (27 Juni 2024-20 Juli 2024).</p>\r\n</div>\r\n</div>', '2024-01-23', 'Pilpres', '140130988_pilpres.jpg'),
(6, 'Pengeluaran LADK PSI Hanya Rp 180 Ribu, KPU dan Bawaslu Bilang Begini', 'Antara', '<p><strong>Jakarta</strong> - Komisi Pemilihan Umum (KPU) memberikan waktu 1 hari kepada PSI&nbsp;untuk memperbaiki laporan awal dana kampanye (LADK).</p>\r\n<p>\"Setelah menerima dokumen LADK dari PSI, kami juga mengonfirmasi. Informasi yang kami terima bahwa PSI akan memperbaiki LADK-nya,\" kata Koordinator Divisi Teknis KPU RI Idham Holik usai menghadiri acara Uji Coba Tiga Rancangan PKPU di Jakarta, Kamis, 11 Januari 2024.</p>\r\n<p>Apabila calon anggota legislatif (caleg) yang terlibat dalam partai politik tidak mau mengumpulkan atau telat menyelesaikan revisi LADK dari tenggat waktu, kata Idham, KPU akan mengumumkan nama partai yang tidak mau melaporkan LADK.</p>\r\n<p>\"Terdapat pula sanksi berupa diskualifikasi jika caleg masih enggan melaporkan LADK-nya,\" kata Idham.</p>\r\n<p>Proses diskualifikasi tersebut, lanjut dia, secara berjenjang, yakni caleg yang duduk di kabupaten/kota akan didiskualifikasi oleh&nbsp;<a href=\"https://www.tempo.co/tag/kpu\">KPU</a> kabupaten/kota terkait. Sementara itu, KPU RI akan menangani caleg pada Pemilu Anggota DPR RI.</p>\r\n<p>Dijelaskan pula bahwa semula batas akhir pelaporan LADK&nbsp;pada tanggal 7 Januari 2024. Namun, KPU membuka masa perbaikan hingga 12 Januari 2024 bagi partai yang mau melaporkan atau mengevaluasi laporan.</p>\r\n<p>\"Kami meyakini pemilih Indonesia makin sadar tentang arti penting kampanye yang transparan,\" ucapnya.</p>\r\n<h2><strong>Bawaslu: Harus diupdate terus</strong></h2>\r\n<p>Sebelumnya, Ketua Badan Pengawas Pemilihan Umum RI Rahmat Bagja memandang perlu pengecekan pengeluaran LADK PSI hanya sebesar Rp 180 ribu.</p>\r\n<p>\"Ya, itu harus dicek kenapa yang bersangkutan demikian,\" kata Bagja, Rabu, 10 Januari 2024.</p>\r\n<p>Menurut Bagja, terkadang partai politik menyerahkan laporan seadanya dan baru melakukan perbaikan belakangan. Hal itu&nbsp;menjadi persoalan proforma di kalangan partai politik.</p>\r\n<p>\"Kadang-kadang orang untuk mematuhi proforma itu dimasukkan dahulu, perbaikannya belakangan. Itu juga jadi persoalan,\" ujar Bagja.</p>\r\n<p>Bagja mengatakan bahwa&nbsp;LADK partai politik, baik penerimaan maupun pengeluaran, harus terus diperbarui, terlebih akan ada laporan penerimaan dan pengeluaran dana kampanye (LPPDK).</p>\r\n<p>\"Harus diupdate terus, kan ada LPPDK nanti. Di situ akan dilihat update-nya,\" ucap Rahmat.</p>', '2024-01-23', 'Pileg', '307080611_pileg1.jpg'),
(7, 'Sejumlah Tanggapan soal Usulan Pilkada Dimajukan, dari Presiden, Wapres, Parpol hingga DPR', 'Kukuh', '<p><strong>Jakarta</strong> - Wacana perubahan jadwal&nbsp; Pilkada Serentak 2024 dalam beberapa waktu terakhir mengemuka karena terdapat anggapan bahwa pemungutan suara pada November tidak sesuai dengan desain awal keserentakan pilkada. Sehingga penyelenggaraanya pun harus dimajukan menjadi September 2024.</p>\r\n<p>Wacana &nbsp;tersebut juga muncul dalam ranah publik agar roda kepemimpinan pemerintah daerah tidak terlalu lama diisi oleh penjabat kepala daerah. Percepatan penyelenggaraan pilkada itu disebut-sebut akan dilakukan melalui penerbitan Peraturan Pemerintah Pengganti Undang-Undang (Perpu) oleh Presiden.</p>\r\n<p>Namun Presiden Joko Widodo mengatakan urgensi penerbitan Perpu tentang Pilkada 2024 perlu dipertimbangkan secara mendalam.</p>\r\n<p>\"Belum sampai ke situ kok saya. Urgensinya apa, alasannya apa, semuanya perlu dipertimbangkan secara mendalam,\" kata Jokowi di sela kegiatan di Tangerang, Banten, Kamis kemarin, 31 Agustus 2023.</p>\r\n<p>Jokowi berujar semua kajian masih dilakukan oleh Kementerian Dalam Negeri. Dia mengaku belum mengetahui hasil kajian tersebut. \"Saya kira semua itu masih kajian di Kemendagri dan saya belum tahu mengenai itu,\" ujarnya.</p>\r\n<p>\"Kalau pun alasannya ada, artinya logikanya masuk, dan ada, jangan terlalu jauh mungkin jaraknya, jangan terlalu jauh sesudah pilpres ke pilkada,\" kata Maruf setelah menghadiri acara Haul Masyayikh, Wisuda Purna Siswa, dan Hari Jadi ke-28 Pondok Pesantren Al-Anwar Bangkalan, Jawa Timur, seperti dikutip dari Kantor Berita <em>Antara</em>, Kamis, 31 Agustus 2023.</p>\r\n<p>Meski demikian, Maruf menegaskan bahwa pemajuan Pilkada 2024 &nbsp;baru sebatas usulan. Menurut dia realisasi pemajuan waktu pilkada tergantung dengan urgensi serta dampaknya. Jika terdapat urgensi pemajuan pilkada yang dapat memberikan manfaat bagi semua pihak, Maruf menilai kenapa tidak agar hal itu terjadi.</p>\r\n<p>\"Kita akan lihat kalau alasannya masuk akal, ya, saya kira untuk kebaikan saja. Kalau tidak, itu tentu akan kembali ke waktu yang lama. Jadi kalau memang memajukan itu punya nilai tambah, nilai kebaikan ya kenapa tidak, bisa saja begitu,\" tutur Maruf.</p>\r\n<p>Wakil Ketua Umum Partai Gerindra Habiburokhman menyatakan keberatan terhadap wacana percepatan Pilkada 2024. Menurutnya, percepatan jadwal pelaksanaan pilkada dapat mengganggu persiapan partai.</p>\r\n<p>\"Jangan, tetap&nbsp;<em>on schedule&nbsp;</em>(sesuai jadwal) saja karena kan itu semua orang sudah mempersiapkan, masing-masing partai sudah mempersiapkan, jeda waktu itu sudah dihitung banget loh. Jeda waktu sekian bulan kalau kami sudah hitung-hitungan banget, sudah matang,\" ujarnya saat ditemui di kompleks DPR RI, Jakarta Selatan, Kamis, 31 Agustus 2023.&nbsp;</p>', '2024-01-23', 'Pilkada', '1219499766_pil.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_login`
--

CREATE TABLE `tbl_login` (
  `id_login` int(11) NOT NULL,
  `nama_login` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_login`
--

INSERT INTO `tbl_login` (`id_login`, `nama_login`, `email`, `username`, `password`) VALUES
(2, 'admin', 'admin@gmail.com', 'admin', '21232f297a57a5a743894a0e4a801fc3');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_berita`
--
ALTER TABLE `tbl_berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indeks untuk tabel `tbl_login`
--
ALTER TABLE `tbl_login`
  ADD PRIMARY KEY (`id_login`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_berita`
--
ALTER TABLE `tbl_berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tbl_login`
--
ALTER TABLE `tbl_login`
  MODIFY `id_login` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Bulan Mei 2022 pada 08.42
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
-- Database: `mutu`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pertanyaans`
--

CREATE TABLE `pertanyaans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bagian` bigint(20) NOT NULL,
  `bab_id` bigint(20) NOT NULL,
  `sub_bab_id` bigint(20) DEFAULT NULL,
  `question` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pertanyaans`
--

INSERT INTO `pertanyaans` (`id`, `bagian`, `bab_id`, `sub_bab_id`, `question`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, 'Guru dapat mengidentifikasi karakteristik belajar setiap peserta didik di kelasnya.', NULL, NULL),
(2, 1, 1, 1, 'Guru memastikan bahwa semua peserta didik mendapatkan kesempatan yang sama untuk berpartisipasi aktif dalam kegiatan pembelajaran.', NULL, NULL),
(3, 1, 1, 1, 'Guru dapat mengatur kelas untuk memberikan kesempatan belajar yang sama pada semua peserta didik dengan kelainan fisik dan kemampuan belajar yang berbeda.\r\n', NULL, NULL),
(4, 1, 1, 1, 'Guru mencoba mengetahui penyebab penyimpangan perilaku peserta didik untuk mencegah agar perilaku tersebut tidak merugikan peserta didik lainnya.\r\n', NULL, NULL),
(5, 1, 1, 1, 'Guru membantu mengembangkan potensi dan mengatasi kekurangan peserta didik.', NULL, NULL),
(6, 1, 1, 1, 'Guru memperhatikan peserta didik dengan kelemahan fisik tertentu agar dapat mengikuti aktivitas pembelajaran, sehingga peserta didik tersebut tidak termarginalkan (tersisihkan, diolok‐olok, minder, dsb).\r\n', NULL, NULL),
(7, 1, 1, 2, 'Guru memberi kesempatan kepada peserta didik un tuk menguasai materi pembelajaran sesuai usia dan kemampuan belajarnya melalui pengaturan proses pembelajaran dan aktivitas yang bervariasi.', NULL, NULL),
(8, 1, 1, 2, 'Guru selalu memastikan tingkat pemahaman peserta didik terhadap materi pembelajaran tertentu dan menyesuaikan aktivitas pembelajaran berikutnya berdasarkan tingkat pemahaman tersebut.\r\n', NULL, NULL),
(9, 1, 1, 2, 'Guru dapat menjelaskan alasan pelaksanaan kegiatan/aktivitas yang dilakukannya, baik yang sesuai maupun yang berbeda dengan rencana, terkait keberhasilan pembelajaran.\r\n', NULL, NULL),
(10, 1, 1, 2, 'Guru menggunakan berbagai teknik untuk memotiviasi kemauan belajar peserta didik.\r\n', NULL, NULL),
(11, 1, 1, 2, 'Guru merencanakan kegiatan pembelajaran yang saling terkait satu sama lain, dengan memperhatikan tujuan pembelajaran maupun proses belajar peserta didik.', NULL, NULL),
(12, 1, 1, 2, 'Guru memperhatikan respon peserta didik yang belum/kurang memahami materi pembelajaran yang diajarkan dan menggunakannya untuk memperbaiki rancangan pembelajaran berikutnya.\r\n', NULL, NULL),
(13, 1, 1, 3, 'Guru dapat menyusun silabus/ATP yang sesuai dengan kurikulum.\r\n', NULL, NULL),
(14, 1, 1, 3, 'Guru merancang rencana pembelajaran yang sesuai dengan silabus untuk membahas materi ajar tertentu agar peserta didik dapat mencapai kompetensi dasar yang ditetapkan.\r\n', NULL, NULL),
(15, 1, 1, 3, 'Guru mengikuti urutan materi pembelajaran dengan memperhatikan tujuan pembelajaran.\r\n', NULL, NULL),
(16, 1, 1, 3, 'Guru memilih materi pembelajaran yang: a) sesuai dengan tujuan pembelajaran, b) tepat dan mutakhir, c) sesuai dengan usia dan tingkat kemampuan belajar peserta didik, d) dapat dilaksanakan di kelas dan e) sesuai dengan konteks kehidupan sehari‐hari peserta.', NULL, NULL),
(17, 1, 1, 4, 'Guru melaksanakan aktivitas pembelajaran sesuai dengan rancangan yang telah disusun secara lengkap dan pelaksanaan aktivitas tersebut mengindikasikan bahwa guru mengerti tentang tujuannya.\r\n', NULL, NULL),
(18, 1, 1, 4, 'Guru melaksanakan aktivitas pembelajaran yang bertujuan untuk membantu proses belajar peserta didik, bukan untuk menguji sehingga membuat peserta didik merasa tertekan.\r\n', NULL, NULL),
(19, 1, 1, 4, 'Guru mengkomunikasikan informasi baru (misalnya materi tambahan) sesuai dengan usia dan tingkat kemampuan belajar peserta didik.\r\n', NULL, NULL),
(20, 1, 1, 4, 'Guru menyikapi kesalahan yang dilakukan peserta didik sebagai tahapan proses pembelajaran, bukan semata‐mata kesalahan yang harus dikoreksi. Misalnya: dengan mengetahui terlebih dahulu peserta didik lain yang setuju/tidak setuju dengan jawaban tersebut, sebelum memberikan penjelasan tentang jawaban yg benar.\r\n', NULL, NULL),
(21, 1, 1, 4, 'Guru melaksanakan kegiatan pembelajaran sesuai isi kurikulum dan mengkaitkannya dengan konteks kehidupan sehari‐hari peserta didik.\r\n', NULL, NULL),
(22, 1, 1, 4, 'Guru melakukan aktivitas pembelajaran secara bervariasi dengan waktu yang cukup untuk kegiatan pembelajaran yang sesuai dengan usia dan tingkat kemampuan belajar dan mempertahankan perhatian peserta didik.', NULL, NULL),
(23, 1, 1, 4, 'Guru mengelola kelas dengan efektif tanpa mendominasi atau sibuk dengan kegiatannya sendiri agar semua waktu peserta dapat termanfaatkan secara produktif.', NULL, NULL),
(24, 1, 1, 4, 'Guru mampu menyesuaikan aktivitas pembelajaran yang dirancang dengan kondisi kelas.\r\n', NULL, NULL),
(25, 1, 1, 4, 'Guru memberikan banyak kesempatan kepada peserta didik untuk bertanya, mempraktekkan dan berinteraksi dengan peserta didik lain.\r\n', NULL, NULL),
(26, 1, 1, 4, 'Guru mengatur pelaksanaan aktivitas pembelajaran secara sistematis untuk membantu proses belajar peserta didik. Sebagai contoh: guru menambah informasi baru setelah mengevaluasi pemahaman peserta didik terhadap materi sebelumnya.\r\n', NULL, NULL),
(27, 1, 1, 4, 'Guru menggunakan alat bantu mengajar, dan/atau audio‐visual (termasuk TIK) untuk meningkatkan motivasi belajar peserta didik dalam mencapai tujuan pembelajaran.\r\n', NULL, NULL),
(28, 1, 1, 5, 'Guru menganalisis hasil belajar berdasarkan segala bentuk penilaian terhadap setiap peserta didik untuk mengetahui tingkat kemajuan masing‐masing.\r\n', NULL, NULL),
(29, 1, 1, 5, 'Guru merancang dan melaksanakan aktivitas pembelajaran yang mendorong peserta didik untuk belajar sesuai dengan kecakapan dan pola belajar masing‐masing.\r\n', NULL, NULL),
(30, 1, 1, 5, 'Guru merancang dan melaksanakan aktivitas pembelajaran untuk memunculkan daya kreativitas dan kemampuan berfikir kritis peserta didik.\r\n', NULL, NULL),
(31, 1, 1, 5, 'Guru secara aktif membantu peserta didik dalam proses pembelajaran dengan memberikan perhatian kepada setiap individu.\r\n', NULL, NULL),
(32, 1, 1, 5, 'Guru dapat mengidentifikasi dengan benar tentang bakat, minat, potensi, dan kesulitan belajar masingmasing peserta didik.\r\n', NULL, NULL),
(33, 1, 1, 5, 'Guru memberikan kesempatan belajar kepada peserta didik sesuai dengan cara belajarnya masingmasing.\r\n', NULL, NULL),
(34, 1, 1, 5, 'Guru memusatkan perhatian pada interaksi dengan peserta didik dan mendorongnya untuk memahami dan menggunakan informasi yang disampaikan.\r\n', NULL, NULL),
(35, 1, 1, 6, 'Guru menggunakan pertanyaan untuk mengetahui pemahaman dan menjaga partisipasi peserta didik,termasuk memberikan pertanyaan terbuka yang menuntut peserta didik untuk menjawab dengan ide dan pengetahuan mereka.\r\n', NULL, NULL),
(36, 1, 1, 6, 'Guru memberikan perhatian dan mendengarkan semua pertanyaan dan tanggapan peserta didik, tanpa menginterupsi, kecuali jika diperlukan untuk membantu atau mengklarifikasi pertanyaan/tanggapan tersebut.\r\n', NULL, NULL),
(37, 1, 1, 6, 'Guru menanggapi pertanyaan peserta didik secara tepat, benar, dan mutakhir, sesuai tujuan pembelajaran dan isi kurikulum, tanpa mempermalukannya.\r\n', NULL, NULL),
(38, 1, 1, 6, 'Guru menyajikan kegiatan pembelajaran yang dapat menumbuhkan kerja sama yang baik antarpeserta didik.\r\n', NULL, NULL),
(39, 1, 1, 6, 'Guru mendengarkan dan memberikan perhatian terhadap semua jawaban peserta didik baik yang benar maupun yang dianggap salah untuk mengukur tingkat pemahaman peserta didik.\r\n', NULL, NULL),
(40, 1, 1, 6, 'Guru memberikan perhatian terhadap pertanyaan peserta didik dan meresponnya secara lengkap dan relevan untuk menghilangkan kebingungan pada peserta didik.\r\n', NULL, NULL),
(41, 1, 1, 7, 'Guru menyusun alat penilaian yang sesuai dengan tujuan pembelajaran untuk mencapai kompetensi tertentu seperti yang tertulis dalam RPP.', NULL, NULL),
(42, 1, 1, 7, 'Guru melaksanakan penilaian dengan berbagai teknik dan jenis penilaian, selain penilaian formal yang dilaksanakan sekolah, dan mengumumkan hasil serta implikasinya kepada peserta didik, tentang tingkat pemahaman terhadap materi pembelajaran yang telah dan akan dipelajari.\r\n', NULL, NULL),
(43, 1, 1, 7, 'Guru menganalisis hasil penilaian untuk mengidentifikasi topik/kompetensi dasar yang sulit sehingga diketahui kekuatan dan kelemahan masing‐masing peserta didik untuk keperluan remedial dan pengayaan.\r\n', NULL, NULL),
(44, 1, 1, 7, 'Guru memanfaatkan masukan dari peserta didik dan merefleksikannya untuk meningkatkan pembelajaran selanjutnya, dan dapat membuktikannya melalui catatan, jurnal pembelajaran, rancangan pembelajaran, materi tambahan, dan sebagainya.\r\n', NULL, NULL),
(45, 1, 1, 7, 'Guru memanfatkan hasil penilaian sebagai bahan penyusunan rancangan pembelajaran yang akan dilakukan selanjutnya.\r\n', NULL, NULL),
(46, 1, 2, 8, 'Guru menghargai dan mempromosikan prinsip‐prinsip Pancasila sebagai dasar ideologi dan etika bagi semua warga Indonesia.\r\n', NULL, NULL),
(47, 1, 2, 8, 'Guru mengembangkan kerjasama dan membina kebersamaan dengan teman sejawat tanpa memperhatikan perbedaan yang ada (misalnya: suku, agama, dan gender).\r\n', NULL, NULL),
(48, 1, 2, 8, 'Guru saling menghormati dan menghargai teman sejawat sesuai dengan kondisi dan keberadaan masing‐masing.\r\n', NULL, NULL),
(49, 1, 2, 8, 'Guru memiliki rasa persatuan dan kesatuan sebagai bangsa Indonesia.\r\n', NULL, NULL),
(50, 1, 2, 8, 'Guru mempunyai pandangan yang luas tentang keberagaman bangsa Indonesia (misalnya: budaya,suku, agama).\r\n', NULL, NULL),
(51, 1, 2, 9, 'Guru bertingkah laku sopan dalam berbicara, berpenampilan, dan berbuat terhadap semua peserta didik, orang tua, dan teman sejawat.\r\n', NULL, NULL),
(52, 1, 2, 9, 'Guru mau membagi pengalamannya dengan kolega, termasuk mengundang mereka untukmengobservasi cara mengajarnya dan memberikan masukan.\r\n', NULL, NULL),
(53, 1, 2, 9, 'Guru mampu mengelola pembelajaran yang membuktikan bahwa guru dihormati oleh peserta didik, sehingga semua peserta didik selalu memperhatikan guru dan berpartisipasi aktif dalam proses pembelajaran.\r\n', NULL, NULL),
(54, 1, 2, 9, 'Guru bersikap dewasa dalam menerima masukan dari peserta didik dan memberikan kesempatan kepada peserta didik untuk berpartisipasi dalam proses pembelajaran.\r\n', NULL, NULL),
(55, 1, 2, 9, 'Guru berperilaku baik untuk mencitrakan nama baik sekolah.\r\n', NULL, NULL),
(56, 1, 2, 10, 'Guru mengawali dan mengakhiri pembelajaran dengan tepat waktu.\r\n', NULL, NULL),
(57, 1, 2, 10, 'Jika guru harus meninggalkan kelas, guru mengaktifkan siswa dengan melakukan hal‐hal produktif terkait dengan mata pelajaran, dan meminta guru piket atau guru lain untuk mengawasi kelas.\r\n', NULL, NULL),
(58, 1, 2, 10, 'Guru memenuhi jam mengajar dan dapat melakukan semua kegiatan lain di luar jam mengajar berdasarkan ijin dan persetujuan pengelola sekolah.\r\n', NULL, NULL),
(59, 1, 2, 10, 'Guru meminta ijin dan memberitahu lebih awal, dengan memberikan alasan dan bukti yang sah jika tidak menghadiri kegiatan yang telah direncanakan, termasuk proses pembelajaran di kelas.\r\n', NULL, NULL),
(60, 1, 2, 10, 'Guru menyelesaikan semua tugas administratif dan non‐pembelajaran dengan tepat waktu sesuai standar yang ditetapkan.', NULL, NULL),
(61, 1, 2, 10, 'Guru memanfaatkan waktu luang selain mengajar untuk kegiatan yang produktif terkait dengan tugasnya.\r\n', NULL, NULL),
(62, 1, 2, 10, 'Guru memberikan kontribusi terhadap pengembangan sekolah dan mempunyai prestasi yang berdampak positif terhadap nama baik sekolah.\r\n', NULL, NULL),
(63, 1, 2, 10, 'Guru merasa bangga dengan profesinya sebagai guru.\r\n', NULL, NULL),
(64, 1, 3, 11, 'Guru memperlakukan semua peserta didik secara adil, memberikan perhatian dan bantuan sesuai kebutuhan masing‐masing, tanpa memperdulikan faktor personal.', NULL, NULL),
(65, 1, 3, 11, 'Guru menjaga hubungan baik dan peduli dengan teman sejawat (bersifat inklusif), serta berkontribusi positif terhadap semua diskusi formal dan informal terkait dengan pekerjaannya.\r\n', NULL, NULL),
(66, 1, 3, 11, 'Guru sering berinteraksi dengan peserta didik dan tidak membatasi perhatiannya hanya pada kelompok tertentu (misalnya: peserta didik yang pandai, kaya, berasal dari daerah yang sama dengan guru).\r\n', NULL, NULL),
(67, 1, 3, 12, 'Guru menyampaikan informasi tentang kemajuan, kesulitan, dan potensi peserta didik kepada orang tuanya, baik dalam pertemuan formal maupun tidak formal antara guru dan orang tua, teman sejawat, dan dapat menunjukkan buktinya.\r\n', NULL, NULL),
(68, 1, 3, 12, 'Guru ikut berperan aktif dalam kegiatan di luar pembelajaran yang diselenggarakan oleh sekolah dan masyarakat dan dapat memberikan bukti keikutsertaannya.\r\n', NULL, NULL),
(69, 1, 3, 12, 'Guru memperhatikan sekolah sebagai bagian dari masyarakat, berkomunikasi dengan masyarakat sekitar, serta berperan dalam kegiatansosial di masyarakat.', NULL, NULL),
(70, 1, 4, 13, 'Guru melakukan pemetaan standar kompetensi / Elemen dan kompetensi dasar /CP untuk mata pelajaran yang diampunya, untuk mengidentifikasi materi pembelajaran yang dianggap sulit, melakukan perencanaan dan pelaksanaan pembelajaran, dan memperkirakan alokasi waktu yang diperlukan.\r\n', NULL, NULL),
(71, 1, 4, 13, 'Guru menyertakan informasi yang tepat dan mutakhir di dalam perencanaan dan pelaksanaan pembelajaran.\r\n', NULL, NULL),
(72, 1, 4, 13, 'Guru menyusun materi, perencanaan dan pelaksanaan pembelajaran yang berisi informasi yang tepat, mutakhir, dan yang membantu peserta didik untuk memahami konsep materi pembelajaran.\r\n', NULL, NULL),
(73, 1, 4, 14, 'Guru melakukan evaluasi diri secara spesifik, diri lengkap, dan didukung dengan contoh pengalaman sendiri.\r\n', NULL, NULL),
(74, 1, 4, 14, 'Guru memiliki jurnal pembelajaran, catatan masukan dari teman sejawat atau hasil penilaian proses pembelajaran sebagai bukti yang menggambarkan kinerjanya.\r\n', NULL, NULL),
(75, 1, 4, 14, 'Guru memanfaatkan bukti  gambaran kinerjanya untuk mengembangkan perencanaan dan pelaksanaan pembelajaran selanjutnya dalam program Pengembangan Keprofesian Berkelanjutan (PKB).\r\n', NULL, NULL),
(76, 1, 4, 14, 'Guru dapat mengaplikasikan pengalaman PKB dalam perencanaan, pelaksanaan, penilaian pembelajaran dan tindak lanjutnya.\r\n', NULL, NULL),
(77, 1, 4, 14, 'Guru melakukan penelitian, mengembangkan karya inovasi, mengikuti kegiatan ilmiah (misalnya seminar, konferensi), dan aktif dalam melaksanakan PKB.\r\n', NULL, NULL),
(78, 1, 4, 14, 'Guru dapat memanfaatkan TIK dalam berkomunikasi dan pelaksanaan PKB.\r\n', NULL, NULL),
(79, 2, 5, NULL, 'Usaha-usaha yang telah saya lakukan untuk memenuhi dan  mengembangkan 14 kompetensi inti tersebut.', NULL, NULL),
(80, 2, 5, NULL, 'Kendala yang saya hadapi dalam memenuhi dan mengembangkan kompetensi inti tersebut.', NULL, NULL),
(81, 2, 5, NULL, 'Keberhasilan yang saya capai setelah mengikuti pengembangan keprofesian berkelanjutan untuk memenuhi dan mengembangkan kompetensi inti tersebut.', NULL, NULL),
(82, 2, 5, NULL, 'Pengembangan keprofesian berkelanjutan yang masih saya butuhkan dalam memenuhi dan mengembangkan kompetensi inti tersebut.', NULL, NULL),
(83, 2, 6, NULL, 'Usaha-usaha yang telah saya lakukan untuk memenuhi dan  mengembangkan kompetensi untuk menghasilkan publikasi ilmiah.', NULL, NULL),
(84, 2, 6, NULL, 'Kendala yang saya hadapi dalam memenuhi dan mengembangkan kompetensi untuk menghasilkan publikasi ilmiah.', NULL, NULL),
(85, 2, 6, NULL, 'Keberhasilan yang saya capai setelah mengikuti pengembangan keprofesian berkelanjutan untuk memenuhi dan mengembangkan kompetensi untuk untuk menghasilkan publikasi ilmiah.', NULL, NULL),
(86, 2, 7, NULL, 'Usaha-usaha yang telah saya lakukan untuk memenuhi dan  mengembangkan kompetensi untuk menghasilkan karya inovatif.', NULL, NULL),
(87, 2, 7, NULL, 'Kendala yang saya hadapi dalam memenuhi dan mengembangkan kompetensi untuk menghasilkan karya inovatif.', NULL, NULL),
(88, 2, 7, NULL, 'Keberhasilan yang saya capai setelah mengikuti pengembangan keprofesian berkelanjutan untuk memenuhi dan mengembangkan kompetensi untuk menghasilkan karya inovatif.', NULL, NULL),
(89, 2, 8, NULL, 'Usaha-usaha yang telah saya lakukan untuk memenuhi dan  mengembangkan kompetensi penunjang pelaksanaan pembelajaran yang berkualitas.', NULL, NULL),
(90, 2, 8, NULL, 'Kendala yang saya hadapi dalam memenuhi dan mengembangkan kompetensi penunjang pelaksanaan pembelajaran yang berkualitas.', NULL, NULL),
(91, 2, 8, NULL, 'Keberhasilan yang saya capai setelah mengikuti pengembangan keprofesian berkelanjutan untuk memenuhi dan mengembangkan kompetensi penunjang pelaksanaan pembelajaran yang berkualitas.', NULL, NULL),
(92, 2, 8, NULL, 'Pengembangan keprofesian berkelanjutan yang masih saya butuhkan dalam memenuhi dan mengembangkan kompetensi penunjang pelaksanaan pembelajaran yang berkualitas.', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `pertanyaans`
--
ALTER TABLE `pertanyaans`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `pertanyaans`
--
ALTER TABLE `pertanyaans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

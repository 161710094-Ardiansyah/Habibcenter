-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 22, 2018 at 04:25 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jabarid`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikels`
--

CREATE TABLE `artikels` (
  `id` int(10) UNSIGNED NOT NULL,
  `foto` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `judul` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori_id` int(10) UNSIGNED NOT NULL,
  `tag` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `artikels`
--

INSERT INTO `artikels` (`id`, `foto`, `slug`, `judul`, `deskripsi`, `kategori_id`, `tag`, `created_at`, `updated_at`) VALUES
(2, 'bmQd2M_4CKpMs_kunjungan-stan-lan.jpg', 'pwri-sekretariat-dprd-jabar-beri-dampak-positif', 'PWRI Sekretariat DPRD Jabar Beri Dampak Positif', '<p dir="ltr">Ketua DPRD Provinsi Jawa Barat KH Habib Syarif al aydrusmenghadiri sekaligus memberikan sambutan pada Acara Pengesahan/Pengukuhan Pengurus Persatuan Wredatama Republik Indonesia (PWRI) Sekretariat DPRD Provinsi Jawa Barat Masa Bhakti 2018-2023, di Lobby Ruang Rapat Paripurna DPRD Provinsi Jawa Barat, Kamis (20/9/2018).&nbsp;</p>\r\n\r\n<p dir="ltr">&ldquo;Saya mengapresiasi atas telah dikukuhkannya PWRI Sekretariat DPRD Provinsi Jawa Barat. Saya pun berharap PWRI Sekretariat DPRD Provinsi Jawa Barat dapat terus menjaga silaturahmi, dan dapat memberikan masukan-masukan kepada Sekretariat DPRD Provinsi Jawa Barat&rdquo; ucap Ineu kepada wartawan.</p>\r\n\r\n<p dir="ltr">Lebih lanjut Ketua DPRD Provinsi Jawa Barat yang karib disapa Teh Ineu tersebut berharap dengan pengalaman, informasi, dan jaringan yang dimiliki oleh PWRI Sekretariat DPRD Provinsi Jawa Barat dapat bermanfaat untuk membentuk kegiatan-kegiatan yang positif, dan bermanfaat bagi keluarga besar PWRI Sekretariat DPRD Provinsi Jawa Bara dan masyarakat pada umunya.</p>\r\n\r\n<p dir="ltr">&quot;Tanpa mereka DPRD Provinsi Jawa Barat tidak akan berjalan baik&quot; ujarnya.</p>\r\n\r\n<p dir="ltr">Sementara itu Ketua PWRI Jawa Barat Danny Setiawan dalam kesempatan yang sama menjelaskan, saat ini pihaknya tengah mendorong OPD di Provinsi Jawa Barat untuk membentuk keorganisasian paguyuban.</p>\r\n\r\n<p dir="ltr">&ldquo;Saya sedang mencoba bagaimana unit-unit PWRI di OPD Provinsi Jawa Barat termasuk di Sekretariat DPRD Provinsi Jawa Barat untuk membangun keorganisasian paguyuban. Dari lima belas sekarang sudah menjadi dua puluh dari jumlah OPD di Jawa Barat yang mencapai 40 OPD&rdquo; ungkap Danny.</p>\r\n\r\n<p dir="ltr">Danny menjelaskan, saat ini PWRI di Jawa Barat selain menjadi wadah untuk bersilatutahmi, kini PWRI dituntut untuk proaktif. Selanjutnya menurut Danny PWRI Jawa Barat tengah menjalankan program kerja yang terfokus dalam berbagai sektor.</p>\r\n\r\n<p dir="ltr">Danny pun mengucapkan terimakasih atas dukungan yang telah diberikan oleh DPRD Provinsi Jawa Barat terhadap PWRI di Jawa Barat.</p>', 6, '["1"]', '2018-10-15 17:26:54', '2018-10-21 11:20:27'),
(3, 'UcR0Bx_Fh8oSa_img-0822.jpg', 'dprd-dorong-rsud-gunung-jati-tingkatkan-pelayanan', 'DPRD Dorong RSUD Gunung Jati Tingkatkan Pelayanan', '<p style="margin-left:0cm; margin-right:0cm">DPRD Provinsi Jawa Barat meminta&nbsp; Rumah Sakit Umum Daerah (RSUD) Gunung&nbsp; Jati, Kota Cirebon untuk meningkatkan pelayanan kesehatan.</p>\r\n\r\n<p style="margin-left:0cm; margin-right:0cm">Ketua Komisi V DPRD Provinsi Jawa Barat, Syamsul Bachri mengatakan, jajaran manajemen RSUD Gunung Jati harus selalu berkomitmen tunggi untuk meningkatkan mutu pelayanan, sarana, prasarana sebagai rumah sakit rujukan regional di Jawa Barat bagian timur.</p>\r\n\r\n<p style="margin-left:0cm; margin-right:0cm">&quot;Terlebih pelayanan prima harus menjadi prioritas bagi masyarakat yang akan menggunakan rumah sakit ini,&quot; ujar Syamsul di RSUD Gungung Jati, Kota Cirebon, Kamis (4/10/2018).</p>\r\n\r\n<p style="margin-left:0cm; margin-right:0cm">Menurut dia, sekalipun RSUD Gunung Jati sudah terakreditasi paripurna, perubahan harus terus dilakukan untuk memenuhi kebutuhan masyarakat Kota Cirebon dan sekitarnya dalam bidang pelayanan kesehatan.</p>\r\n\r\n<p style="margin-left:0cm; margin-right:0cm">&quot;Perubahan itu penting agar RSUD Gunung Jati bisa menjadi agent of change dalam hal pelayanan kesehatan,&quot; katanya.</p>\r\n\r\n<p style="margin-left:0cm; margin-right:0cm">Dia menambahkan, setiap RSUD di Jawa Barat harus memiliki peralatan medis yang representatif. Hal itu untuk mencegah kebergantungan kepada RSUP Hasan Sadikin dalam penanganan maupun pelayanan kekepada masyarakat. Sehingga, RSUD di daerah bisa memaksimalkan pelayanan disetiap wilayahnya.</p>\r\n\r\n<p style="margin-left:0cm; margin-right:0cm">&ldquo;Jangan sampai ketika alat medisnya tidak ada menjadi alasan untuk melayani masyarakat,&rdquo; ucapnya.</p>\r\n\r\n<p style="margin-left:0cm; margin-right:0cm">Direktur RSUD Gunung Jati, dr. Bunadi mengatakan, pihaknya mengharapkan dukungan anggaran yang representatif untuk operasional dan menunjang pelayanan rumah sakit terhadap masyarakat. Selain itu, secara internal membutuhkan sumber daya manusia yang memiliki kompetensi sesuai standar pelayanan rumah sakit.</p>\r\n\r\n<p style="margin-left:0cm; margin-right:0cm">&ldquo;Sehingga tidak mengganggu berjalannya pelayanan rumah sakit, karena itu tenaga yang profesional sangat dibutuhkan,&rdquo; tandas Bunadi.</p>', 6, '["1"]', '2018-10-15 17:28:27', '2018-10-21 11:20:47'),
(4, 'QFwbkH_gww5dx_rutilahu-1.jpg', 'dprd-jabar-terjun-langsung-awasi-program-rutilahu', 'DPRD Jabar Terjun Langsung Awasi Program Rutilahu', '<p style="margin-left:0in; margin-right:0in; text-align:start">Dewan Perwakilan Rakyat Daerah (DPRD) beserta Pemerintah Provinsi Jawa Barat akan menunjuk secara langsung fasilitator untuk mengatur serta mengawasi penggunaan dana bantuan yang akan diberikan kepada penerima program pembangunan Rutilahu.</p>\r\n\r\n<p style="margin-left:0in; margin-right:0in; text-align:start">Hal tersebut diungkapkan Ketua DPRD Provinsi Jawa Barat Ineu Purwadewi Sundari saat melaksanakan monitoring Program Pembangunan Rumah Tak Layak Huni (Rutilahu) bersama Komisi IV DPRD Provinsi Jawa Barat di Desa Sutawagi, Kabupaten Majalengka, Rabu (3/10/2018).</p>\r\n\r\n<p style="margin-left:0in; margin-right:0in; text-align:start">Ketua DPRD yang karib disapa Teh Ineu tersebut mengatakan, program Pembangunan Rutilahu disambut baik oleh masyarakat Jawa Barat.</p>\r\n\r\n<p style="margin-left:0in; margin-right:0in; text-align:start">&ldquo;Kalau kemarin kita melihat program Rutilahu di daerah perkotaan hari ini kita bisa bandingkan bagaimana program Rutilahu ini diimplementasikan di daerah pedesaan, ternyata antusias dari masyarakat penerima bantuan sangat luar biasa&rdquo; kata Ineu.</p>\r\n\r\n<p style="margin-left:0in; margin-right:0in; text-align:start">Ineu menyatakan, pihaknya bersama Pemerintah Provinsi Jawa Barat akan menunjuk masyarakat setempat untuk mengatur dan mengawasi penggunaan dana bantuan yang diperuntukan untuk pembangunan Rutilahu.</p>\r\n\r\n<p style="margin-left:0in; margin-right:0in; text-align:start">Dalam Program Rutilahu, masyarakat penerima bantuan menerima dana sebesar 13,5 Juta hingga 15 Juta Rupiah untuk setiap pembangunan 1 unit rumah.</p>\r\n\r\n<p style="margin-left:0in; margin-right:0in; text-align:start">Ineu menambahkan saat ini DPRD dan dinas terkait telah melakukan diskusi lebih lanjut terkait rencana perubahan anggaran program Rutilahu.</p>\r\n\r\n<p style="margin-left:0in; margin-right:0in; text-align:start">&ldquo;Kemarin ada diskusi kita dengan dinas terkait rutilahu ini, terkait adanya rencana perubahan pagu anggaran. Karena ketika kita melihat di daerah-daerah ada tiga pembangunan rumah yang dilakukan sejak awal sehingga kebutuhannya semakin tinggi&rdquo; ujar Ineu.</p>\r\n\r\n<p style="margin-left:0in; margin-right:0in; text-align:start">Kedepan diharapkan dengan bertambahnya pagu anggaran Rutilahu menjadi 17 Juta Rupiah per 1 unit rumah dapat memberikan dampak positif dan sebagai salah satu upaya percepatan pembangunan&nbsp; Rutilahu di Jawa Barat.</p>\r\n\r\n<p style="margin-left:0in; margin-right:0in; text-align:start">&ldquo;Kita berharap apabila ada tambahan anggaran Rutilahu dari 13 Juta menjadi 17 Juta Rupiah setidaknya pembangunan Rutilahu menjadi lebih baik. Tinggal bagaimana setelah ini ada pemberdayaan ekonomi&nbsp; sehingga bisa berjalan dengan pembangunan di desa-desa&rdquo; kata Ineu.</p>\r\n\r\n<p style="margin-left:0in; margin-right:0in; text-align:start">Sehingga dengan rencana tersebut diharapkan, dapat mewujudkan fasilitas kesehatan rumah tangga yang lebih baik dan sehat bagi masyarakat Jawa Barat.</p>\r\n\r\n<p style="margin-left:0in; margin-right:0in; text-align:start">&ldquo;Mereka berharap program ini tetap ada, karena banyak masyarakat yang masih membutuhkan perbaikan untuk rumahnya. Kami berharap Pemerintah Provinsi bisa fokus terhadap program ini dapat terus berjalan , penataan lingkungan kumuh harus terus diperhatikan. Sehingga dapat mendorong perekonomian di desa-desa seperti harapan kita bersama&rdquo; pungkas Ineu.</p>', 6, '["1"]', '2018-10-15 17:29:27', '2018-10-21 11:21:09'),
(5, 'kairuU_2P3f3y_xxx-3659.jpg', 'adpsi-dorong-kemajuan-kinerja-dprd-provinsi', 'ADPSI Dorong Kemajuan Kinerja DPRD Provinsi', '<p>Ketua DPRD Provinsi Jawa Barat Ineu Purwadewi Sundari bersama Sekretaris DPRD Provinsi Jawa Barat Daud Achmad, menghadiri acara pembukaan Rapat Kerja Nasional Asosiasi DPRD Provinsi Seluruh Indonesia (Rakernas ADPSI) di Hotel Borobudur, DKI Jakarta Kamis, 11 Oktober 2018.<br />\r\nKetua DPRD Provinsi Jawa Barat Ineu Purwadewi Sundari mengapresiasi, rangkaian kegiatan ADPSI ini dan berharap kedepannya ADPSI ini akan membawa kemajuan bagi kinerja DPRD Provinsi se-Indonesia.<br />\r\n&quot;Saya berharap Rakernas ADPSI ini bisa menghasilkan rekomendasi yang bisa membawa kemajuan untuk bagaimana kinerja DPRD makin baik kedepan&quot; ucap Ineu.<br />\r\nSelain itu Ia pun berharap, ADPSI ini bisa menjadi ajang pendidikan yang akan ditularkan dengan tujuan untuk pengembangan ilmu politik kepada kader-kader di partai politik, yang akan berpengaruh di DPRD wilayahnya masing masing.<br />\r\n&quot;Kemudian juga bagaimana kebijakan politik yang ada ini bisa memberikan semangat kepada partai politik untuk memberikan pendidikan politik kaderisasi diberikan di partai politik untuk pengembangan kader kader, yang tentunya kedepannya akan berpengaruh kepada anggota DPRD di wilayahnya masing masing&quot; tutur Ineu.<br />\r\nLebih lanjut Ineu menjelaskan, ajang ADPSI ini bisa menjadi jembatan komunikasi dan informasi antara DPRD Provinsi se-Indonesia dengan Pemerintah pusat, sehingga setiap permasalahan yang berkaitan dengan DPRD Provinsi se Indonesia dapat segera ditindak lanjuti.<br />\r\n&quot;ADPSI ini saya berharap tetap bisa menjadi jembatan yang memberikan informasi kemudian komunikasi dengan Pemerintah pusat ini bisa hasilnya diberikan kepada daerah , kemudian yang terkait dengan masalah masalah yang berkaitan dengan DPRD tentunya ini bisa ditindak lanjuti baik oleh ADPSI secara keseluruhan maupun bisa menjadi bahan yang didiskusikan di tingkat pusat maupun di daerah&quot; pungkas Ineu.<br />\r\nTurut hadir dalam acara tersebut Menteri Dalam Negeri Republik Indonesia yang dalam hal ini diwakili oleh Deputi Bidang Politik dan Pemerintahan Umum Sudarmo, Ketua ADPSI yang juga sebagai Ketua DPRD Provinsi Banten, Asep Rahmatullah, serta seluruh Pimpinan DPRD Provinsi se-Indonesia.</p>', 5, '["1"]', '2018-10-15 17:30:08', '2018-10-21 11:21:28'),
(6, 'WRu9gq_2uxSIo_komisi-iii-kunker-bjb-rawamangun-jakarta-gugi-85.jpg', 'komisi-iii-mendorong-kontribusi-bumd', 'Komisi III Mendorong Kontribusi BUMD', '<p>Anggota Komisi III DPRD Provinsi Jawa Barat Iemas Masithoh M. Noor mengatakan, perlu ada perhatian lebih dari seluruh element Pemerintah Provinsi Jawa Barat untuk mendorong kontribusi Badan Usaha Milik Daerah (BUMD) Jawa Barat yang saat ini dinilai masih belum mampu memberikan kontribusi yang maksimal.<br />\r\n&ldquo;Sebenarnya itu tidak semua (BUMD), tetapi bisa ditingkatkan dengan upaya dari berbagi aspek dan perhatian pemerintah daerah itu sangat penting untuk meningkatkan kinerja mereka&rdquo; ucap Iemas saat melaksanakan Kunjungan Kerja Komisi III DPRD Provinsi Jawa Barat ke Kantor UPTD Pusat Pengelolaan Pendapatan Daerah (P3D) Kabupaten Subang, Senin (9/10/2018).<br />\r\nIa menambahkan, saat ini pihaknya tengah melakukan upaya-upaya untuk meningkatkankan kontribusi BUMD di Jawa Barat. Menurut Iemas, DPRD Provinsi Jawa Barat sesuai dengan tugas dan fungsinya yang sudah melakukan upaya maksimal dalam hal mendorong kinerja BUMD .<br />\r\n&ldquo;DPRD sebagai wakil rakyat yang sesuai dengan undang-undang 23 2014, kalau provinsi berarti di pasal 96 yaitu fungsi DPRD membuat Perda, Budgeting dan pengawasan. Jadi pengawasan yang terus menerus itu sangat perlu dilakukan di berbagai tempat yang mungkin harus diawasi sesuai dengan APBD Provinsi Jawa Barat itu membuat yang harus diawasi menjadi terawasi. Sehingga kinerja seluruh BUMD yanga da di Jawa Barat bisa meningkat&rdquo;pungkas Iemas.</p>', 5, '["1","2"]', '2018-10-15 17:50:35', '2018-10-21 11:21:54'),
(7, 'oYSOMT_71lKRi_dsc-2101.jpg', 'sekwan-jabar-serahkan-13-sk-kenaikan-pangkat-asn', 'Sekwan Jabar Serahkan 13 SK Kenaikan Pangkat ASN', '<p style="margin-left:0cm; margin-right:0cm">Sebanyak 13 Aparatur Sipil Negara (ASN) dilingkungan Sekretariat DPRD Provinsi Jawa Barat mendapat kenaikan pangkat PNSD TMT 1 April. Kenaikan pangkat tersebut salah satunya penilaian dari Badan Kepegawaian Daerah (BKD) mengenai prestasi kerja sekurang-kurangnya berpredikat baik dalam kurun waktu dua tahun terakhir.</p>\r\n\r\n<p style="margin-left:0cm; margin-right:0cm">Sekretaris DPRD Provinsi Jawa Barat, Drs. Daud Achmad mengapresiasi atas ASN yang mendapatkan penghargaan kenaikan pangkat. Menurut dia, kenaikan pangkat tersebut harus sejalan bahkan harus lebih ditingkatkan dengan berjiwa corsa. Selain itu, bukan hanya kesejahteraannya saja yang mengalami peningkatan tetapi juga etos kerjanya juga harus meningkat.</p>\r\n\r\n<p style="margin-left:0cm; margin-right:0cm">&ldquo;Saya berpesan agar yang naik pangkat ini tidak cepat berpuas diri, tetapi harus lebih memotivasi lagi untuk terus memperbaiki pelayanan terhadap masyarakat,&rdquo; ujar Daud dalam sambutannya, di halaman Gedung DPRD Prov Jabar, Jalan Diponegoro no. 27, Kota Bandung, &nbsp;Senin (13/8/2018).</p>\r\n\r\n<p style="margin-left:0cm; margin-right:0cm">Sekretaris DPRD Provinsi Jawa Barat, Drs.Daud Achmad langsung menyerahkan SK Gubernur Jawa Barat tentang kenaikan pangkat PNSD TMT 1 April kepada 13 ASN di lingkungan Selretariat DPRD Provinsi Jawa Barat.</p>', 5, '["1"]', '2018-10-15 17:51:10', '2018-10-21 11:22:23'),
(8, '5xSlr2_Ewjvqi_10.jpg', 'sekretariat-dprd-jabar-gelar-outbond-di-yogyakarta', 'Sekretariat DPRD Jabar Gelar Outbond Di Yogyakarta', '<p style="margin-left:0cm; margin-right:0cm">Sekretariat DPRD Provinsi Jawa Barat kembali menyelenggarakan outbond untuk meningkatkan etos kerja di lingkungan Sekretariat DPRD Jabar. Perhelatan ynag diselenggarakan setiap tahun ini tak lain bertujuan untuk merefresh kondisi yang sudah penat dengan rutinitas pekerjaan agar kembali bersemangat. Kali ini outbond di gelar di Yogyakarta dengan dua tujuan outbond, yakni Kawasan Wisata gunung Merapi dan Gua Pindul di Gunung Kidul. Perjalananan outbond diawali dengan destinasi Kawasan Merapi atau yang di kenal dengan Lava Tour.&nbsp;</p>\r\n\r\n<p style="margin-left:0cm; margin-right:0cm"><strong>Lava Tour</strong></p>\r\n\r\n<p style="margin-left:0cm; margin-right:0cm">Siapa sih yang tak kenal &nbsp;Merapi? Gunung yang terletak di perbatasan Jawa Tengah dan Yogyakarta ini bisa jadi merupakan gunung yang paling terkenal di Indonesia. Ini bukan soal pemandangannya ciamik atau treknya yang asyik, namun lebih karena statusnya yang sering galau alias berganti-ganti sehingga kerap muncul di televisi. Gunung yang terletak dalam satu garis lurus dengan Tugu Jogja, Kraton, dan Pantai Parangtritis ini menjadi gunung berapi paling aktif di Indonesia bahkan dunia. Nyaris setiap 4 tahun sekali Merapi erupsi dan memuntahkan material vulkanik yang meluluhlantakkan desa-desa di sekitarnya. Meski begitu, orang-orang tetap mencintainya dan kembali tinggal di lereng Merapi.</p>\r\n\r\n<p style="margin-left:0cm; margin-right:0cm">Setelah erupsi besar pada tahun 2010 lalu, kawasan Gunung Merapi sisi selatan rata diterjang lahar dan menyisakan lautan pasir yang luas. Tak mau terlalu lama larut dalam kesedihan, warga pun mengubah petaka menjadi berkah dengan cara menawarkan paket wisata bertajuk Lava Tour Merapi. Belajar dari warga Bromo yang mampu mendapatkan penghasilan dari mengantarkan tamu-tamu menyusuri kawasan Pasir Berbisik, warga Kaliurang pun menawarkan paket wisata menyusuri lautan pasir dan bebatuan sisa erupsi.</p>\r\n\r\n<p style="margin-left:0cm; margin-right:0cm">Wisatawan yang mengikuti Lava Tour Merapi akan diajak menyusuri kaki Merapi menggunakan jeep Willys buatan Amerika. Selain willys, ada juga kendaraan adventure lainnya yang tak kalah gagah. Rute yang ditempuh bermula dari Parkiran Tlogo Putri, Kalikuning, hingga bunker Kaliadem dan kembali lagi ke Kaliurang. Semakin jauh rute yang kamu pilih, semakin banyak tempat yang bisa kamu lihat. Bahkan jika memilih paket Long Trip kamu bisa mengunjungi makam Mbah Maridjan yang tersohor itu. Selama mengikuti paket wisata ini kamu juga akan diajak singgah ke berbagai tempat yang memiliki kisah menarik.</p>\r\n\r\n<p style="margin-left:0cm; margin-right:0cm">Kali ini, giliran rombongan dari Sekretariat DPRD Provinsi Jawa Barat yang akan menjajal trek Lava Tour di Gunung yang dikunceni mendiang Mbah Marijan itu. Ada 50 mobil lebih untuk mengangkut rombongan Setwan ke jalur-jalur yang sudah ditentukan. Mesin sudah menderu-deru siap menggasak tanah yang&nbsp; berbalut pasir dari muntahan vulkanis gunung merapi. Tidak lupa pemandu tour sebelumnya mengingatkan peserta tour untuk mengikuti saran para juru mudi mobil jeep.</p>\r\n\r\n<p style="margin-left:0cm; margin-right:0cm"><strong>Touring Menggunakan Jeep</strong></p>\r\n\r\n<p style="margin-left:0cm; margin-right:0cm">Namanya saja Lava Tour Merapi, tentu saja aktivitas utama wisata ini adalah touring di Lereng Merapi menggunakan jeep terbuka. Di sepanjang jalan kamu bisa menyaksikan pemandangan yang beragam seperti perkampungan yang sudah rata dengan tanah, lautan pasir, hingga Merapi yang berdiri dengan megahnya. Semua hal ini mampu membuatmu berdecak ngeri ataupun kagum terhadap kebesaran Sang Pencipta. Petualanganmu kemudian akan dilanjutkan menyusuri hamparan pasir luas lengkap dengan batu-batu besar yang berserakan. Sebagai penutup perjalanan, kamu akan diajak melewati jalanan sempit dengan turunan curam dan berkelok. Pastikan kamu terus berpegangan supaya tidak terjungkal saat pengemudi Willys beraksi menginjak rem atau menarik gas secara mendadak.</p>\r\n\r\n<p style="margin-left:0cm; margin-right:0cm"><strong>Mengunjungi &nbsp;Mini &nbsp;Museum Sisa Hartaku</strong></p>\r\n\r\n<p style="margin-left:0cm; margin-right:0cm">Sejenak mata terpejam membayangkan dahsyatnya peristiwa yang terjadi di malam itu. Waktu menunjukan tepat pukul 00.05 WIB, ditengah orang lain terlelap tidur dengan nyenyaknya. Di tempat yang menjadi&nbsp; museum ini&nbsp; justru harus mengalami hal yang pedih dari keganasan sang merapi.</p>\r\n\r\n<p style="margin-left:0cm; margin-right:0cm">Kuatkan hatimu saat menyaksikan mini museum ini. Di tempat ini kamu akan melihat saksi bisu letusan Merapi. Botol kaca yang meleleh, kerangka sepeda motor, peralatan dapur yang rusak dan berselimut abu, mesin jahit, tabung televise hingga hewan peliharaan yang hanya tersisa kerangkanya merupakan koleksi mini museum ini. Sebuah jam dinding yang berhenti di angka 00.05 menjadi penanda waktu terjadinya kisah pilu tersebut.</p>\r\n\r\n<p style="margin-left:0cm; margin-right:0cm"><strong>Mengunjungi Bunker Kaliadem</strong></p>\r\n\r\n<p style="margin-left:0cm; margin-right:0cm">Kawasan Kaliadem merupakan pemberhentian utama dari tour ini. Sebelum terjadi erupsi, kawasan ini merupakan hutan yang cukup asri namun kini semua sudah rata dengan pasir. Di Kaliadem kamu bisa menyaksikan Merapi yang berdiri dengan gagah serta masuk ke sebuah bunker yang dibangun untuk menyelamatkan diri tatkala terjadi erupsi. Rombongan Setwan pun berebut ingin memasuki bunker yang hanya berukuran sekitar 4x4 itu.</p>\r\n\r\n<p style="margin-left:0cm; margin-right:0cm">Rombongan pun harus mengakhiri perlajalan lava tour. Pelajaran yang dapat dipetik sangat banyak tinggal menyisakan kenangan dan bayangan yang ternyata letusan itu benar-benar terjadi. &nbsp;Tetapi perjalanan outbond belum berakhir di lava tour. Perjalanan dari kawasan Kaliurang dilanjutkan ke wilayah Wonosari, Gunung Kidul. Tak lain tujuan outbond di wilayah itu menyusuri Gua Pindul yang sarat dengan filosofi.</p>\r\n\r\n<p style="margin-left:0cm; margin-right:0cm"><strong>Cave Tubing Gua Pindul</strong></p>\r\n\r\n<p style="margin-left:0cm; margin-right:0cm">Sesampainya di kawasan Gua Pindul, rombongan bukannya disambut selamat datang, malah disuguhi hidangan khas Gunung Kidul lengkap dengan nasi merahnya. Hmmm, memang sudah saatnya jam makan siang. Peserta cave tubing pun lahap menyantap masakan khas Gunung Pindul ini. Namun ada baiknya juga, lantaran akan menyusuri gua dengan aliran sungai.</p>\r\n\r\n<p style="margin-left:0cm; margin-right:0cm">Menyusuri sungai menggunakan perahu karet merupakan hal yang biasa, namun jika sungai itu mengalir di dalam gua tentu saja akan menjadi petualangan yang mengasyikkan sekaligus menegangkan. Gua Pindul, salah satu gua yang merupakan rangkaian dari 7 gua dengan aliran sungai bawah tanah yang ada di Desa Bejiharjo, Karangmojo, menawarkan sensasi petualangan tersebut. Selama kurang lebih 45 - 60 menit wisatawan akan diajak menyusuri sungai di gelapnya perut bumi sepanjang 300 m menggunakan ban pelampung. Petualangan yang memadukan aktivitas body rafting dan caving ini dikenal dengan istilah cave tubing.</p>\r\n\r\n<p style="margin-left:0cm; margin-right:0cm">Tidak diperlukan persiapan khusus untuk melakukan cave tubing di Gua Pindul. Peralatan yang dibutuhkan hanyalah ban pelampung, life vest, serta head lamp yang semuanya sudah disediakan oleh pengelola. Aliran sungai yang sangat tenang menjadikan aktivitas ini aman dilakukan oleh siapapun, mulai dari anak-anak hingga orang dewasa. Waktu terbaik untuk cave tubing di Gua Pindul adalah pagi hari sekitar pukul 09.00 atau 10.00 WIB. Selain karena airnya tidak terlalu dingin, jika cuaca sedang cerah pada jam-jam tersebut akan muncul cahaya surga yang berasal dari sinar matahari yang menerobos masuk melewati celah besar di atap gua.</p>\r\n\r\n<p style="margin-left:0cm; margin-right:0cm">Sambil merasakan dinginnya air sungai yang membelai tubuh di tengah gua yang minim pencahayaan, seorang pemandu bercerita tentang asal-usul penamaan Gua Pindul. Menurut legenda yang dipercayai masyarakat dan dikisahkan turun temurun, nama Gua Pindul dan gua-gua lain yang ada di Bejiharjo tak bisa dipisahkan dari cerita pengembaraan Joko Singlulung mencari ayahnya. Setelah menjelajahi hutan lebat, gunung, dan sungai, Joko Singlulung pun memasuki gua-gua yang ada di Bejiharjo. Saat masuk ke salah satu gua mendadak Joko Singlulung terbentur batu, sehingga gua tersebut dinamakan Gua Pindul yang berasal dari kata pipi gebendul.</p>\r\n\r\n<p style="margin-left:0cm; margin-right:0cm">Selain menceritakan tentang legenda Gua Pindul, pemandu pun akan menjelaskan ornamen yang ditemui di sepanjang pengarungan. Di gua ini terdapat beberapa ornamen cantik seperti batu kristal, moonmilk, serta stalaktit dan stalagmit yang indah. Sebuah pilar raksasa yang terbentuk dari proses pertemuan stalaktit dan stalagmit yang usianya mencapai ribuan tahun menghadang di depan. Di beberapa bagian atap gua juga terdapat lukisan alami yang diciptakan oleh kelelawar penghuni gua. Di tengah gua terdapat satu tempat yang menyerupai kolam besar dan biasanya dijadikan tempat beristirahat sejenak sehingga wisatawan dapat berenang atau terjun dari ketinggian. Tatkala YogYES masih menikmati indahnya ornamen gua di sela bunyi kepak kelelawar dan kecipak air, mendadak pengarungan sudah sampai di mulut keluar gua. Bendungan Banyumoto yang dibangun sejak jaman Belanda dengan latar belakang perbukitan karst pun menyambut.</p>\r\n\r\n<p style="margin-left:0cm; margin-right:0cm">Tujuan dari Outbond Sekretariat DPRD Jabar</p>\r\n\r\n<p style="margin-left:0cm; margin-right:0cm">&nbsp;Tujuan utama saat mengadakan outbound adalah untuk membentuk jika kepemimpinan (leadership). Dengan acara outdoor, games dan tantangan yang diberikan outbound, seseorang akan dibentuk kepemimpinannya. Hal itu sudah terkandung di dalamnya makna akan tanggung jawab, kepedulian, rasa setia kawan, saling bantu dan dukung, ilmu memimpin, problem solving dll. Leadhership tidak hanya perlu untuk pimpinan dan manajemen saja, semua anggota tim harus tahu dan terbentuk kepemimpinan dalam diri mereka. Hal itu dikemukakan Sekretaris DPRD Provinsi&nbsp; Jawa Barat, Drs. Daud Achmad.</p>\r\n\r\n<p style="margin-left:0cm; margin-right:0cm">&quot;Saya berharap kebersamaan yang terjalin dalam kegiatan outbond ini bisa diterpakan dalam suasana kerja, sehingga kita bisa menghasilkan kinerja yang positif dan baik bagi sekretariat dprd provinsi jawa barat,&quot; ujar Daud disela acara puncak Silaturahmi Sekretariat DPRD Jabar, di Yogyakarta belum lama ini.</p>\r\n\r\n<p style="margin-left:0cm; margin-right:0cm">Dia menambahkan, semua karyawan di lingkungan Sekretariat DPRD Jabar harus mengetahui bahwa semuanya adalah bagian dari tim. Yang karenanya, semua yang mereka lakukan sangat berpengaruh pada tim. Langsung ataupun tidak langsung. Apapun level mereka. Di dalam pelaksanaan outbound, tidak dibatasi mana karyawan, pimpinan dan manajemen. Semua lebur menjadi satu tim.</p>\r\n\r\n<p style="margin-left:0cm; margin-right:0cm">&ldquo;Semuanya butuh kekompakan dalam menjalankan sebuah pekerjaan atau di kita (Setwan-red) harus saling bahu membahu,&rdquo; tambahnya.</p>\r\n\r\n<p style="margin-left:0cm; margin-right:0cm">&nbsp;</p>\r\n\r\n<p style="margin-left:0cm; margin-right:0cm">Demikian halnya dengan Kepala Sub Bagian Publikasi dan Indformasi, Ary Heryanto, S.STP., MM yang mengungkapkan, dalam rangka meningkatan Kinerja. &nbsp;Adanya peningkatan kinerja yang karena itu besar harapannya ada peningkatan pelayanan terhadap pekerjaan yang dilakukan di masing-masing bagian. Ladhership dan tim building harus bermuara pada kerja yang semakin bagus, semakin cepat dengan hasil yang meningkat.</p>\r\n\r\n<p style="margin-left:0cm; margin-right:0cm">&ldquo;Mengapresiasi kegiatan ini yang diharapkan dapat mempererat hubungan baik di lingkungan kantor dan dapat mengoptimalkan dalam kinerja,&rdquo; ujar Ary.</p>\r\n\r\n<p style="margin-left:0cm; margin-right:0cm">Berkaitan dengan pengalaman outbond, lanjut Ary, yang dilakukan di dua tempat yakni Lava Taour Merapi dan Cave Tubing Gua Pindul kita dapat memetik hikmahnya bahwa manusia hanya bisa berencana tuhanlah yang menentukan. Semuanya dapat disimpulkan bahwa tidak ada yang dapat melampaui kekuasaan tuhan jika sudah berkehendak.</p>\r\n\r\n<p style="margin-left:0cm; margin-right:0cm">&ldquo;Kita melihat dari peristiwa merapi ini banyak hal yang telah kita rencanakan tetapi tuhanlah yang menentukannya,&rdquo; pungkasnya.</p>', 5, '["1"]', '2018-10-15 17:52:13', '2018-10-21 11:23:03');

-- --------------------------------------------------------

--
-- Table structure for table `biografis`
--

CREATE TABLE `biografis` (
  `id` int(10) UNSIGNED NOT NULL,
  `foto` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `biografis`
--

INSERT INTO `biografis` (`id`, `foto`, `nama`, `deskripsi`, `created_at`, `updated_at`) VALUES
(1, 'NWemV8_0UE4RF_AAkAQ4_ZQ9Njr_nqmBDF_Photo Profile-01.jpg', 'KH. Habib Syarief Muhammad Al Aydrus-', '<div class="fbq-text-content-inner">\r\n<p style="margin-left:0in; margin-right:0in"><strong><span style="font-size:11pt"><strong><span style="font-size:17.0pt"><span style="color:#4b5d67">Profil Habib Syarief Muhammad Al Aydrus</span></span></strong></span></strong></p>\r\n\r\n<p style="margin-left:0in; margin-right:0in; text-align:justify"><strong>&nbsp;</strong></p>\r\n\r\n<p style="margin-left:0in; margin-right:0in; text-align:justify"><strong><span style="font-size:16px"><span style="color:#4b5d67">Namanya biasa ditulis &ldquo;K.H. Drs. Habib Syarief Muhammad Al-Aydarus&rdquo;. Tak banyak habib yang juga dipanggil kiai atau ditulis &ldquo;K.H.&rdquo; di depan namanya. Tokoh habaib Kota Kembang, tokoh NU Jawa Barat, pendidik, pence&shy;ramah, dan ketua umum Yayasan As&shy;salaam, ini termasuk dalam kelompok yang tak banyak itu. Ayahnya, yang telah berpulang 7 Maret 1985 yang lalu, juga demikian, sering ditulis namanya dengan &ldquo;K.H.&rdquo;, yakni K.H. Habib Utsman Al-Aydarus. Beliau ini tokoh terkemuka di Bandung di masanya.</span></span></strong></p>\r\n\r\n<p style="margin-left:0in; margin-right:0in; text-align:justify"><strong><span style="font-size:16px"><span style="color:#4b5d67">Habib Syarief Muhammad memang seorang kiai, baik dilihat dari ilmunya, wawasannya, penampilannya, pemba&shy;waannya, pergaulannya, sikapnya, mau&shy;pun pendiriannya. Bahkan sosoknya lebih menggambarkan sosok seorang kiai pribumi daripada sosok seorang habib sebagaimana dalam bayangan kebanyakan orang.</span></span></strong></p>\r\n\r\n<p style="margin-left:0in; margin-right:0in; text-align:justify"><strong><span style="font-size:16px"><span style="color:#4b5d67">Meskipun demikian, identitas dan jiwa kehabibannya sama sekali tak hilang, bahkan berkurang pun tidak. Baik dari nama&shy;nya, keyakinannya, amaliah&shy;nya, kecenderungannya, pergaulannya, per&shy;juangannya, maupun keistiqamah&shy;an&shy;nya.</span></span></strong></p>\r\n\r\n<p style="margin-left:0in; margin-right:0in; text-align:justify"><strong><span style="font-size:16px"><span style="color:#4b5d67">Di samping kiai, ia pun KIAI, dalam arti kreatif, inovatif, aktif, dan inklusif. Ini bukan singkatan yang dibuat-buat dan dicocok-cocokkan dengannya. Orang yang mengenalnya cukup dekat, insya Allah, akan sependapat bahwa masing-masing kata itu memang terlihat dalam dirinya.</span></span></strong></p>\r\n\r\n<p style="margin-left:0in; margin-right:0in; text-align:justify"><strong><span style="font-size:16px"><span style="color:#4b5d67">Kreativitasnya dapat dilihat dari apa yang dilakukannya sejak kecil, remaja, dan terus hingga kini.</span></span></strong></p>\r\n\r\n<p style="margin-left:0in; margin-right:0in; text-align:justify"><strong><span style="font-size:16px"><span style="color:#4b5d67">Ia pun seorang yang inovatif. Lang&shy;kah-langkah yang ditempuhnya dan terobosan-terobosan yang dilakukannya dalam mengembangkan Yayasan As&shy;salaam jelas-jelas menunjukkan hal itu. Jangan heran jika Assalaam dengan berbagai lembaga pendidikannya, serta berbagai unit kegiatan lainnya, terus berkembang pesat dan kini menjadi sa&shy;lah satu yayasan Islam yang sangat di&shy;kenal di Bandung dan diakui memiliki kualitas yang baik.</span></span></strong></p>\r\n\r\n<p style="margin-left:0in; margin-right:0in; text-align:justify"><strong><span style="font-size:16px"><span style="color:#4b5d67">Kemudian, berbagai peran dan ama&shy;nah yang diembannya sejak di bangku kuliah, bahkan sejak remaja, sampai kini, merupakan bukti nyata aktivitasnya yang lama. Sedangkan pergaulannya yang luas dan kedekatannya dengan berbagai kalangan jelas menunjukkan inklusi&shy;vitas&shy;nya. Jadi memang ia seorang KIAI.</span></span></strong></p>\r\n\r\n<p style="margin-left:0in; margin-right:0in; text-align:justify"><strong><span style="font-size:16px"><strong><span style="color:#4b5d67">Tetap tak Lupa Mengajar</span></strong></span></strong></p>\r\n\r\n<p style="margin-left:0in; margin-right:0in; text-align:justify"><strong><span style="font-size:16px"><span style="color:#4b5d67">Habib Syarief Muhammad lahir di Ban&shy;dung tanggal 5 November 1954, put&shy;ra pasangan Habib Utsman bin Husein Al-Aydarus dan Hj. Aisyah binti Djali Radjoe Soetan. Ia anak pertama dari lima bersaudara. Adik-adiknya adalah Syarifah Hamidah, Syarif Ahmad, Syarif Hamid, dan Syarifah Mahmudah. Selain itu, Habib Syarief juga memiliki dua ka&shy;kak perempuan lain ibu, yakni Syarifah Fathimah dan Syarifah Maimunah.</span></span></strong></p>\r\n\r\n<p style="margin-left:0in; margin-right:0in; text-align:justify"><strong><span style="font-size:16px"><span style="color:#4b5d67">Sosok yang ramah, mudah akrab, dan tak suka menonjolkan diri ini memu&shy;lai pendidikan formalnya di lembaga pendidikan yang dirintis ayahandanya sendiri, Assalaam. Jenjang TK dan SD diselesaikannya di sini. Kemudian ia melanjutkan ke PGAN (Pendidikan Guru Agama Negeri) enam tahun di Bandung, tahun 1968-1973.</span></span></strong></p>\r\n\r\n<p style="margin-left:0in; margin-right:0in; text-align:justify"><strong><span style="font-size:16px"><span style="color:#4b5d67">Setelah menuntaskan pendidikan&shy;nya di PGAN, akhir tahun 1973, Habib Syarief melangkahkan kaki ke Yogya&shy;karta di awal tahun&nbsp; 1974. Di sini ia&nbsp; me&shy;lanjutkan pendidikannya di Fakultas Adab IAIN Sunan Kalijaga, yang dapat diselesaikan tahun 1980, sambil mondok di Pesantren Krapyak, asuhan tokoh NU terkemuka, K.H. Ali Maksum.</span></span></strong></p>\r\n\r\n<p style="margin-left:0in; margin-right:0in; text-align:justify"><strong><span style="font-size:16px"><span style="color:#4b5d67">Saat kanak-kanak dan remaja, di samping mengaji kepada ayahandanya sendiri, ia juga mengaji kepada para kiai di Bandung meskipun tidak menetap di pesantren mereka. Di antaranya mengaji ilmu falak kepada Ajengan Burhan, pengasuh Pesantren Cijaura.</span></span></strong></p>\r\n\r\n<p style="margin-left:0in; margin-right:0in; text-align:justify"><strong><span style="font-size:16px"><span style="color:#4b5d67">Sejak kecil telah tumbuh kecintaan&shy;nya terhadap ilmu dan buku. Salah satu yang memotivasinya, ia menyaksikan sendiri bagaimana ayahnya selalu muthalaah kitab setiap hari sekitar enam jam, setiap ba&lsquo;da zhuhur, ba&lsquo;da isya, dan pagi hari. Padahal, beliau setiap dua hari mengkhatamkan Al-Qur&rsquo;an. Belum lagi waktunya untuk membaca shalawat. Apa yang dilakukan sang ayah itu me&shy;motivasinya untuk gemar membaca.</span></span></strong></p>\r\n\r\n<p style="margin-left:0in; margin-right:0in; text-align:justify"><strong><span style="font-size:16px"><span style="color:#4b5d67">Di masa kanak-kanak, setiap hari Jum&rsquo;at, ia ikut pengajian kitab&nbsp;<em>Minhajul Abidin</em>&nbsp;dan&nbsp;<em>Ihya Ulumiddin,&nbsp;</em>yang diasuh ayahandanya. Juga pengajian kitab&nbsp;<em>Al-Hikam</em>&nbsp;di hari Sabtu. Khusus untuk ilmu-ilmu alat, sang ayah menyuruhnya untuk belajar kepada kakak sepupunya, ke&shy;ponakan sang ayah sendiri, Habib Ahmad bin Hasyim Al-Aydarus. Namun tidak sampai tuntas, karena ia keburu pindah ke Yogya.</span></span></strong></p>\r\n\r\n<p style="margin-left:0in; margin-right:0in; text-align:justify"><strong><span style="font-size:16px"><span style="color:#4b5d67">Ia memilih kuliah di IAIN&nbsp;Yogya ka&shy;rena sejak di PGA telah banyak mem&shy;baca buku-buku yang ditulis oleh para guru besar IAIN Yogya. Di antaranya buku-buku karya Prof. Hasbi Ash-Shiddiqi, Prof. Mukhtar Yahya, Dr. K.H. M. Tholhah Mansoer, Prof. Mukti Ali, Prof. Zaini Dahlan. Ada sekitar 15 pe&shy;nulis yang bukunya sering ia baca dan sebagian besar mereka adalah guru be&shy;sar dan dosen-dosen senior di sana.</span></span></strong></p>\r\n\r\n<p style="margin-left:0in; margin-right:0in; text-align:justify"><strong><span style="font-size:16px"><span style="color:#4b5d67">Ketika pertama kali datang di Yogya, ia tinggal di kediaman Dr. K.H. Tholhah Mansur. Kemudian atas saran beberapa orang, termasuk K.H. Anwar Musaddad, ia masuk Pesantren Krapyak sambil kuliah di IAIN Yogya.</span></span></strong></p>\r\n\r\n<p style="margin-left:0in; margin-right:0in; text-align:justify"><strong><span style="font-size:16px"><span style="color:#4b5d67">Karena sejak kecil menyukai seni, ia memilih Fakultas Adab, sebab ia yakin bahwa di dalamnya ada unsur-unsur seni. Pada tiga tahun pertama, kuliah be&shy;lum dijuruskan. Akhirnya setelah menda&shy;patkan sarjana muda, ia memilih jurusan sejarah kebudayaan Islam. Pilihannya jatuh pada sejarah kebudayaan Islam, bukan jurusan sastra Arab, karena ke&shy;betulan cocok dengan dosen-dosen yang mengajar materi-materi yang ber&shy;kaitan dengan sejarah.</span></span></strong></p>\r\n\r\n<p style="margin-left:0in; margin-right:0in; text-align:justify"><strong><span style="font-size:16px"><span style="color:#4b5d67">Di antara dosen-dosen favoritnya saat itu adalah Prof. Dr. Nouruzzaman Shiddiqi dan Dra. Chadijah Nasution. Nouruzzaman Shiddiqi dipandangnya mampu mengkombinasikan dengan baik metodologi Timur dan Barat. Cara pe&shy;nyampaiannya pun enak, gayanya san&shy;tai, dan sering memberikan informasi dari buku-buku mutakhir. Sedangkan Chadijah Nasution dikatakannya mem&shy;berikan materi yang mendalam dan di&shy;dukung dengan data-data yang jarang di&shy;ketahui orang. Ia pun sangat mengua&shy;sai sejarah pendidikan Islam di Indo&shy;nesia.</span></span></strong></p>\r\n\r\n<p style="margin-left:0in; margin-right:0in; text-align:justify"><strong><span style="font-size:16px"><span style="color:#4b5d67">Saat kuliah, Habib Syarief Muham&shy;mad dikenal sebagai aktivis dan organi&shy;satoris. Di tingkat II ia sudah menjadi ke&shy;tua rayon (tingkat fakultas) PMII, padahal biasanya yang menjadi ketua rayon adalah mahasiswa tingkat III atau tingkat IV. Di tingkat III meningkat menjadi ketua komisariat (tingkat universitas), sedang&shy;kan ketua-ketua rayonnya teman-teman seangkatannya.</span></span></strong></p>\r\n\r\n<p style="margin-left:0in; margin-right:0in; text-align:justify"><strong><span style="font-size:16px"><span style="color:#4b5d67">Kesibukannya berorganisasi tidak membuat kuliahnya terbengkalai. Pada tahun 1980 ia dapat menuntaskannya. Saat sarjana muda, tugas akhir yang ditulisnya berjudul&nbsp;<em>Pengaruh Bahasa Arab terhadap Kebudayaan Islam di Indonesia</em>. Sedangkan ketika skripsi, yang ditulisnya adalah&nbsp;<em>Peran Nahdlatul Ulama dalam Perubahan Sosial di Indonesia</em>. Ia cukup puas dapat menun&shy;tas&shy;kan skripsinya tersebut karena saat itu sulit sekali mencari referensi tentang NU, tidak seperti sekarang, sehingga membutuhkan perjuangan yang cukup berat.</span></span></strong></p>\r\n\r\n<p style="margin-left:0in; margin-right:0in; text-align:justify"><strong><span style="font-size:16px"><span style="color:#4b5d67">Sepulang dari Yogyakarta, Habib Syarief diminta untuk membantu abah&shy;nya mengajar di SMP Assalaam. Na&shy;mun ini hanya berjalan sekitar dua tahun. Tampaknya jiwa dan pola pikir aktivisnya yang masih menyala-nyala membuatnya tak betah menjalani kegiatan ini.</span></span></strong></p>\r\n\r\n<p style="margin-left:0in; margin-right:0in; text-align:justify"><strong><span style="font-size:16px"><span style="color:#4b5d67">Tahun 1982, ia meminta izin kepada sang ayah untuk mengajar di perguruan tinggi. Pertama-tama ia mengajar di ITB dengan materi Al-Islam (kuliah agama Islam). Bertahun-tahun ia mengajar sampai hampir diangkat menjadi tenaga pengajar tetap. Namun akhirnya tak jadi, karena ayahnya tak mengizinkannya men&shy;jadi pegawai negeri. Meskipun Habib Syarief beberapa kali mencoba menjadi dosen tetap di beberapa per&shy;guruan tinggi negeri, upayanya selalu &rdquo;di&shy;potong di tengah jalan&rdquo; oleh sang ayah.</span></span></strong></p>\r\n\r\n<p style="margin-left:0in; margin-right:0in; text-align:justify"><strong><span style="font-size:16px"><span style="color:#4b5d67">Namun hal tersebut tak membuatnya patah semangat untuk terus mengajar, baik di perguruan tinggi negeri maupun swasta, meskipun tak menjadi PNS. Tahun 1983 ia mulai mengajar di Uninus dan langsung menjadi sekretaris fakultas sastra. Di fakultas yang sama ia sempat pula menjadi pembantu dekan II (1991-1995) dan pembantu dekan III (1985-1995) sampai akhirnya pembantu rektor III (1995-1999) dan pembantu rektor IV (1999-2003) selama pengabdiannya di kampus ini.</span></span></strong></p>\r\n\r\n<p style="margin-left:0in; margin-right:0in; text-align:justify"><strong><span style="font-size:16px"><span style="color:#4b5d67">Selain di kedua perguruan tinggi itu, ia pun mengajar di Unisba, Inisi, Ikopin, Unpas, Politeknik Swiss, dan lain-lain. Tercatat, ada 11 perguruan tinggi tempat ia mengajar. Sebagiannya ada yang cu&shy;kup lama, seperti di Uninus, yang di&shy;jalani&shy;nya selama kurang lebih 16 tahun hingga tahun 1999. Di ITB selama de&shy;lapan tahun, di Unisba sekitar tiga sam&shy;pai empat tahun. Ada pula yang hanya dua-tiga tahun saja.</span></span></strong></p>\r\n\r\n<p style="margin-left:0in; margin-right:0in; text-align:justify"><strong><span style="font-size:16px"><span style="color:#4b5d67">Selain memberikan mata kuliah Al-Islam, ia juga mengajar materi-materi lainnya, di antaranya Ilmu Budaya Da&shy;sar, Filsafat Umum, Metodologi Peneli&shy;tian, Tafsir, Hadits, Ulumul-Qur&rsquo;an.</span></span></strong></p>\r\n\r\n<p style="margin-left:0in; margin-right:0in; text-align:justify"><strong><span style="font-size:16px"><span style="color:#4b5d67">Selama periode itu pula, kegiatan Habib Syarief bertambah lagi dengan memberikan pengajian dan ceramah di masyarakat di berbagai tempat, yang dari waktu ke waktu juga terus bertam&shy;bah. &rdquo;Sekitar sembilan puluh persen wila&shy;yah Jawa Barat telah dikelilingi. Waktu itu masih senang-senangnya ngomong,&rdquo; katanya mengenang saat-saat itu.</span></span></strong></p>\r\n\r\n<p style="margin-left:0in; margin-right:0in; text-align:justify"><strong><span style="font-size:16px"><strong><span style="color:#4b5d67">Bekerja sampai 16 Jam per Hari</span></strong></span></strong></p>\r\n\r\n<p style="margin-left:0in; margin-right:0in; text-align:justify"><strong><span style="font-size:16px"><span style="color:#4b5d67">Sejak kecil ia memang telah mulai me&shy;miliki pengalaman berbicara di depan umum dan pengalaman menulis. Ketika duduk di kelas III&nbsp;SD ia telah berbicara di depan umum saat acara perpisahan Assalaam gabungan di sebuah bioskop sangat terkenal di Bandung, bioskop Nusantara. Bioskop itu pada tahun 1967 pernah pula dijadikan salah satu arena Muktamar NU, yang ayahnya, Habib Utsman, menjadi ketua panitia. Sang ayah tampaknya telah menyiapkannya agar ia memiliki pengalaman berbicara di depan umum sejak kecil dan agar memiliki rasa percaya diri yang kuat.</span></span></strong></p>\r\n\r\n<p style="margin-left:0in; margin-right:0in; text-align:justify"><strong><span style="font-size:16px"><span style="color:#4b5d67">Kegemaran membaca juga telah tum&shy;buh sejak kecil. Berbagai buku di&shy;bacanya. Cerita-cerita karya Kho Ping Ho, Sherlock Holmes, Agatha Cristie, Karl May, misalnya, telah disantapnya sejak kanak-kanak.</span></span></strong></p>\r\n\r\n<p style="margin-left:0in; margin-right:0in; text-align:justify"><strong><span style="font-size:16px"><span style="color:#4b5d67">Masa pertengahan 1980-an hingga pertengahan 1990-an memang merupa&shy;kan saat-saat tersibuk dalam kehidup&shy;annya. Mengajar di berbagai kampus, memberikan pengajian dan ceramah di mana-mana, serta mengikuti macam-macam kegiatan ilmiah. &rdquo;Selama sekitar 10 tahun itu, saya bekerja sampai 16 jam per hari. Tidak ada hari hari libur. Hari Sabtu dan Ahad pun tetap sibuk ke sana-kemari,&rdquo; katanya.</span></span></strong></p>\r\n\r\n<p style="margin-left:0in; margin-right:0in; text-align:justify"><strong><span style="font-size:16px"><span style="color:#4b5d67">Ketika kegiatan ceramah dari waktu ke waktu terus bertambah, akhirnya se&shy;dikit demi sedikit ia pun terpaksa mengu&shy;rangi kegiatan mengajarnya, dan ber&shy;hen&shy;ti sama sekali pada tahun 1999 ke&shy;tika ia harus ke Jakarta saat menda&shy;patkan amanah sebagai anggota MPR.</span></span></strong></p>\r\n\r\n<p style="margin-left:0in; margin-right:0in; text-align:justify"><strong><span style="font-size:16px"><span style="color:#4b5d67">Bukan hanya membaca, mengajar, dan berceramah yang menemani hari-harinya saat itu bahkan hingga seka&shy;rang, melainkan juga aktivitas organi&shy;sasi, terutama di NU. Di organisasi Islam terbesar di Indonesia ini, kiprahnya di&shy;awali tahun 1982 saat menjadi wakil ketua PCNU Bandung yang dipegang&shy;nya hingga tahun 1985. Setelah itu ber&shy;turut-turut mendapat kepercayaan seba&shy;gai wakil katib Syuriah PWNU Jawa Barat (1985-1990), wakil ketua Tanfidzi&shy;yah PWNU Jawa Barat (1990-1995), dan ketua Tanfidziyah PWNU Jawa Barat (1995-1998). Jabatannya sebagai ketua Tanfidziyah PWNU tak sampai akhir pe&shy;riode, karena ia harus melepasnya sejak menjadi ketua Tanfidziyah DPW Partai Kebangkitan Bangsa (1998-2000).</span></span></strong></p>\r\n\r\n<p style="margin-left:0in; margin-right:0in; text-align:justify"><strong><span style="font-size:16px"><span style="color:#4b5d67">Di luar itu, amanah yang pernah dan sedang diembannya di antaranya seba&shy;gai ketua umum Yayasan Assalaam Bandung (1985-sekarang), anggota pengurus MUI kota Bandung (1984-1988), anggota pengurus DKM Masjid Agung Bandung (1996-1998), anggota pengurus Forum Komunikasi Umat Ber&shy;agama Jawa Barat (1996-1998), ang&shy;gota Dewan Pembina GP Ansor Jawa Barat (1993-1998), a&lsquo;wan PBNU (2005-2009), penasihat Rabithah Alawiyah cabang Bandung (2007-2011).</span></span></strong></p>\r\n\r\n<p style="margin-left:0in; margin-right:0in; text-align:justify"><strong><span style="font-size:16px"><span style="color:#4b5d67">Pada tahun 1999 Habib Syarief menjadi anggota MPR dari fraksi utusan daerah Provinsi Jawa Barat bersama empat orang lainnya, termasuk Ginanjar Kartasasmita. Setiap provinsi mendapat jatah lima orang untuk fraksi utusan dae&shy;rah dan dipilih oleh anggota DPRD ma&shy;sing-masing provinsi. Di MPR ia kemu&shy;dian diberi amanah sebagai wakil ketua Fraksi PKB. Sebagaimana diketahui, ma&shy;sing-masing anggota fraksi utusan daerah yang berasal dari parpol, di MPR bergabung dengan masing-masing par&shy;polnya.</span></span></strong></p>\r\n\r\n<p style="margin-left:0in; margin-right:0in; text-align:justify"><strong><span style="font-size:16px"><span style="color:#4b5d67">Habib Syarief pun dipercaya duduk dalam Panitia AdHoc II BP MPR dan terlibat dalam proses amandemen 1 dan 2 UUD 1945. Selesai amandemen, ke&shy;sibukannya berlanjut bersama beberapa anggota lainnya untuk mensosialisasi&shy;kannya, baik di dalam maupun di luar ne&shy;geri. Dalam kapasitasnya sebagai anggota MPR pula ia bersama anggota de&shy;legasi yang lain berkesempatan me&shy;lakukan studi banding ke beberapa ne&shy;gara.</span></span></strong></p>\r\n\r\n<p style="margin-left:0in; margin-right:0in; text-align:justify"><strong><span style="font-size:16px"><span style="color:#4b5d67">Setelah tak lagi menjadi anggota MPR, kesibukannya bukan berkurang, malah semakin bertambah. Di samping mengelola dan mengembangkan As&shy;salaam beserta segenap pengurus ya&shy;yasan dan mereka semua yang terlibat, ia tetap menjadi pendidik dan pencera&shy;mah di berbagai kesempatan. Jadwal aca&shy;ranya dari hari ke hari sangat padat. Belum lagi kegiatan-kegiatan dzikir yang diasuhnya, seperti istighatsah dan se&shy;bagainya.</span></span></strong></p>\r\n\r\n<p style="margin-left:0in; margin-right:0in; text-align:justify"><strong><span style="font-size:16px"><span style="color:#4b5d67">Habib Syarief juga menjadi kolumnis dan penulis artikel di berbagai media cetak. Di antaranya tulisannya secara teratur muncul di harian&nbsp;<em>Pikiran</em>&nbsp;<em>Rakyat</em>&nbsp;Ban&shy;dung dan media-media lain. Ia juga menjadi muballigh di berbagai acara keislaman di TVRI Pusat, TVRI Jabar-Banten, dan berbagai TV swasta.</span></span></strong></p>\r\n\r\n<p style="margin-left:0in; margin-right:0in; text-align:justify"><strong><span style="font-size:16px"><span style="color:#4b5d67">Sosok produktif ini pun telah meng&shy;ha&shy;silkan banyak karya, di antaranya yang telah terbit adalah&nbsp;<em>Agar Hidup Selalu Berkah,</em>&nbsp;<em>Wirid Penyejuk Qalbu (Istighatsah Istisyfa&rsquo;),</em>&nbsp;<em>Kapita Selekta Dakwah,</em>&nbsp;<em>Wirid Harian,</em>&nbsp;<em>135 shalawat Nabi,Kronologi Perjalanan Ibadah Haji,</em>&nbsp;<em>79 Macam Shalat Sunnah,</em>&nbsp;<em>Panduan Doa Manasik Haji</em>,&nbsp;<em>Siraman Pengantin,Pengurusan Jenazah,</em>&nbsp;<em>1001 Doa Pilihan.</em></span></span></strong></p>\r\n\r\n<p style="margin-left:0in; margin-right:0in; text-align:justify"><strong><span style="font-size:16px"><span style="color:#4b5d67">Dari pernikahannya dengan Dra. Hj. Ayusdarniati, Habib Syarief dikarunia empat permata hati: H.M. Luthfi Alman&shy;faluthi, S.T., Hj. Syarifah Rafika Zakiah, H.M. Rifki Noval, dan Hj. Syarifah Zafira.</span></span></strong></p>\r\n</div>', '2018-10-15 17:19:40', '2018-10-15 17:19:40');

-- --------------------------------------------------------

--
-- Table structure for table `contents`
--

CREATE TABLE `contents` (
  `id` int(10) UNSIGNED NOT NULL,
  `background` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto_profil` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_header` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_1` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi_1` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_2` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi_2` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `linkvideo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unique_url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `footer` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contents`
--

INSERT INTO `contents` (`id`, `background`, `foto_profil`, `title_header`, `title_1`, `deskripsi_1`, `title_2`, `deskripsi_2`, `linkvideo`, `unique_url`, `footer`, `created_at`, `updated_at`) VALUES
(1, 'jbnhrI_7TWGjX_ie5JvH_index.jpg', 'DZNTXt_A1Gh48_65vFpr_Foto Utama-01.png', 'KH. Habib Syarief Muhammad Al Aydrus', 'Selamat Datang di situs resmi Habib Center', 'Mengajak warga kota Bandung dan kota Cimahi turut mendukung dan memilih Habib Syarief Muhammad untuk melanjutkan perjuangan dan pengabdiannya di Jawa Barat', 'Sekilas Habib Syarief Muhammad Al Aydrus', '<div class="fbq-item fbq-justify-align fbq-primary-font fbq-text js-item-text">\r\n<div class="fbq-row" style="margin-bottom:-15px; margin-left:-15px; margin-right:-15px; margin-top:-15px">\r\n<div style="padding:0 15px">\r\n<div>\r\n<p>Drs.Syarief Muhammad, yang sering dikenal juga dengan habib syarief Muhammad Al&#39;aydrus. Ada juga yang mengenal beliau dengan KH. Habib Syarief Muhammad Al&#39;aydarus. Beliau memiliki sisi kepemimpinan dan kharisma yang sangat kuat. selain sebagai tokoh NU Jawa Barat, Beliau juga seorang yang murah senyum dan seorang dai, baik dilihat dari ilmunya, wawasannya, penampilannya, pembawaannya, pergaulannya, sikapnya,maupun pendiriannya. Bahkan sosoknya lebih menggambarkan sosok seorang kiai pribumi daripada sosok seorang habib sebagaimana dalam bayangan kebanyakan orang.</p>\r\n\r\n<p>Meskipun demikian, identitas dan jiwa kehabibannya sama sekali tak hilang, bahakan berkurang pun tidak. Baik dari namanya, keyakinannya, amaliahnya, kecenderungannya, pergaulannya, perjuangannya, maupun keistiqomhannya. Tampak sekali beliau adalah sosok yang murah senyum, mudah bergaul, dekat dengan siapa pun dan sosok yang tidak suka menonjokan diri.</p>\r\n\r\n<p>Drs.Syarief Muhammad adalah pemimpin yang kreatif, inovatif, aktif dan inklusif. Pengalamannya dalam berorganisasi hingga pernah menjadi anggota MPR tahun1999 dari fraksi utusan daerah Provinsi Jawa Barat, membuat beliau memiliki sifat yang amanah dan penuh tanggung jawab.</p>\r\n\r\n<p>Kesibukan beliau sekarang disamping sebgai ketua umum yayasan Assalaam dan anggota komisi V DPRD Provinsi Jawa Barat(2014-2019), beliau juga sering diminta menjadi penasehat di yayasan dan lembaga lainnya, baik lembaga social maupun lembaga pendidikan.</p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n\r\n<p>&nbsp;</p>', 'https://www.youtube.com/watch?v=5who6cE-wBg', '5who6cE-wBg', '<p>Ayo bersama</p>\r\n\r\n<p>saling membantu menghadirkan Jawa barat juara lahir batin yang memiliki manusia beriman, bahagia dan berkualitas.</p>', '2018-10-15 17:00:25', '2018-10-15 17:56:16');

-- --------------------------------------------------------

--
-- Table structure for table `kategoris`
--

CREATE TABLE `kategoris` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kategoris`
--

INSERT INTO `kategoris` (`id`, `nama`, `slug`, `created_at`, `updated_at`) VALUES
(4, 'all', 'all', '2018-10-18 21:41:08', '2018-10-18 21:41:08'),
(5, 'aktual', 'aktual', '2018-10-21 11:19:37', '2018-10-21 11:19:37'),
(6, 'dprd', 'dprd', '2018-10-21 11:19:47', '2018-10-21 11:19:47');

-- --------------------------------------------------------

--
-- Table structure for table `list_homes`
--

CREATE TABLE `list_homes` (
  `id` int(10) UNSIGNED NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `list_homes`
--

INSERT INTO `list_homes` (`id`, `deskripsi`, `created_at`, `updated_at`) VALUES
(1, '<div>1.Taushiyah dan Istighosah.</div>\r\n\r\n<div>&nbsp; Sabtu, 20 Oktober 2018.</div>\r\n\r\n<div>&nbsp; Mesjid Hidayatussalaam.</div>\r\n\r\n<div>&nbsp; Jalan Kebon Manggu Gang Lebe No 11 Bandung</div>\r\n\r\n<div>2.Ceramah pengajian</div>\r\n\r\n<div>&nbsp; Ahad , 21 Oktober 2018</div>\r\n\r\n<div>&nbsp; Mesjid Al Fath</div>\r\n\r\n<div>&nbsp; Jalan Pagarsih</div>\r\n\r\n<div>&nbsp; Jam 08.00 - 09.00</div>', '2018-10-15 17:00:25', '2018-10-21 13:48:15');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_09_17_224350_create_biografis_table', 1),
(4, '2018_09_17_225941_laratrust_setup_tables', 1),
(5, '2018_09_17_234424_create_tags_table', 1),
(6, '2018_09_18_001421_create_kategoris_table', 1),
(7, '2018_09_18_001852_create_contents_table', 1),
(8, '2018_09_18_004154_create_artikels_table', 1),
(9, '2018_09_20_200059_create_list_homes_table', 1),
(10, '2018_09_21_233000_create_youtubes_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permission_user`
--

CREATE TABLE `permission_user` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `user_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Admin', NULL, '2018-10-15 17:00:24', '2018-10-15 17:00:24');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `role_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `user_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`role_id`, `user_id`, `user_type`) VALUES
(1, 1, 'App\\User');

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `nama`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'JABAR', 'jabar', '2018-10-15 17:17:31', '2018-10-15 17:17:31'),
(2, 'DPRD', 'dprd', '2018-10-15 17:17:52', '2018-10-15 17:17:52');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@habibcenter.com', '$2y$10$WIB/NlzYii3kR/ZAyaGONO.8gTo8YN80pxTNoQrL23dVJBf9bP10W', 'GeC1rXR7jOC1FpZbQk2euE2FQZIpgiaQDwzYJV4L5Gz5BptNLppf7sexDC61', '2018-10-15 17:00:25', '2018-10-15 17:00:25');

-- --------------------------------------------------------

--
-- Table structure for table `youtubes`
--

CREATE TABLE `youtubes` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unique_url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `youtubes`
--

INSERT INTO `youtubes` (`id`, `title`, `url`, `unique_url`, `created_at`, `updated_at`) VALUES
(1, 'Habib Syarief Muhammad Al Aydrus : Kepimimpinan Rasulullah SAW (Part-1)', 'https://www.youtube.com/watch?v=MbOG_w0JwOs', 'MbOG_w0JwOs', '2018-10-15 17:14:37', '2018-10-15 17:14:37'),
(2, 'Habib Syarief Muhammad Al Aydrus : Meraih Kekhusuan Dalam Sholat (Part-1)', 'https://www.youtube.com/watch?v=nEtaK3b6ltE', 'nEtaK3b6ltE', '2018-10-15 17:15:42', '2018-10-15 17:15:42'),
(3, 'Habib Syarief Muhammad Al Aydrus : Istighotsah Lil Istisyfa (Part-1)', 'https://www.youtube.com/watch?v=cj7s85DHvoM', 'cj7s85DHvoM', '2018-10-15 17:16:24', '2018-10-15 17:16:24'),
(4, 'Habib Syarief Muhammad Al Aydrus : Hidup Sehat Menurut Konsep Islam (Part-1)', 'https://www.youtube.com/watch?v=Sq8WCXdxxjQ', 'Sq8WCXdxxjQ', '2018-10-15 17:16:53', '2018-10-15 17:16:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikels`
--
ALTER TABLE `artikels`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `artikels_judul_unique` (`judul`),
  ADD KEY `artikels_kategori_id_foreign` (`kategori_id`);

--
-- Indexes for table `biografis`
--
ALTER TABLE `biografis`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `biografis_nama_unique` (`nama`);

--
-- Indexes for table `contents`
--
ALTER TABLE `contents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategoris`
--
ALTER TABLE `kategoris`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kategoris_nama_unique` (`nama`);

--
-- Indexes for table `list_homes`
--
ALTER TABLE `list_homes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_unique` (`name`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_role_id_foreign` (`role_id`);

--
-- Indexes for table `permission_user`
--
ALTER TABLE `permission_user`
  ADD PRIMARY KEY (`user_id`,`permission_id`,`user_type`),
  ADD KEY `permission_user_permission_id_foreign` (`permission_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`user_id`,`role_id`,`user_type`),
  ADD KEY `role_user_role_id_foreign` (`role_id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tags_nama_unique` (`nama`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `youtubes`
--
ALTER TABLE `youtubes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `youtubes_title_unique` (`title`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikels`
--
ALTER TABLE `artikels`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `biografis`
--
ALTER TABLE `biografis`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `contents`
--
ALTER TABLE `contents`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `kategoris`
--
ALTER TABLE `kategoris`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `list_homes`
--
ALTER TABLE `list_homes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `youtubes`
--
ALTER TABLE `youtubes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `artikels`
--
ALTER TABLE `artikels`
  ADD CONSTRAINT `artikels_kategori_id_foreign` FOREIGN KEY (`kategori_id`) REFERENCES `kategoris` (`id`);

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `permission_user`
--
ALTER TABLE `permission_user`
  ADD CONSTRAINT `permission_user_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

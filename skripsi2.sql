-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 06, 2018 at 03:38 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `skripsi2`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `no` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`no`, `username`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `alternatif`
--

CREATE TABLE `alternatif` (
  `id_gitar` varchar(100) NOT NULL,
  `merk` varchar(20) NOT NULL,
  `jeniskayu` varchar(50) NOT NULL,
  `fret` varchar(30) NOT NULL,
  `seri` varchar(100) NOT NULL,
  `deskripsi` varchar(500) NOT NULL,
  `foto` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alternatif`
--

INSERT INTO `alternatif` (`id_gitar`, `merk`, `jeniskayu`, `fret`, `seri`, `deskripsi`, `foto`) VALUES
('G_001', 'Gretsch', 'Maple', '22', 'White Falcon', 'Based on the earliest White Falconâ„¢ guitars of the mid â€™50s, this model is as close to the original as you can get short of having a time machine. Features include period-correct body and neck construction, wiring and electronics. The single-coil DynaSonicâ„¢ pickups are faithfully recreated by Seymour DuncanÂ®, and the Falconâ€™s signature eye-catching trim is preserved. Includes a vintage-style speckled-gray case.', '62gretsch 1.jpg'),
('G_002', 'Fender', 'Alder', '22', 'American Elite SratocasterÂ®', 'Externally the American Elite Stratocaster has Fenderâ€™s timeless style, but under the hood itâ€™s an entirely new breed of guitar designed for 21st-century players who constantly push the envelope. With over a dozen new innovations, each guitar is a true performer with eye-catching style, exceptional feel and versatile sound from the very first moment you plug it in and play.', '35fender 1.jpg'),
('G_003', 'Ibanez', 'Mahogany', '24', 'GIO GRG121DX ', 'A guitar doesn''t have to cost a bundle to sound good. The GIO series was developed for players who want Ibanez quality in a more affordable package. Not only do they look and play better than everything else in their price range, but their rigorous inspection, set-up and warranty is the same as Ibanez''s more expensive models.', '81ibanez1.jpg'),
('G_004', 'Gibson', 'GB', '22', 'Les Paul Birdseye', 'Stunning torrefied birdseye maple top. Hand selected mahogany body and neck with a thick ironwood fingerboard. Classic Gibson humbucker pickups and hand-wired electronics. A quintessential Les Paul both in tones and looks.', '83gibson1.jpg'),
('G_005', 'Yamaha', 'Alder', '22', 'Pacifia PAC611HFM', 'Seri Pacifia pertama diluncurkan pada tahun 1990, dimana fleksibilitas, suara dan individualitas adalah kunci dari seri ini. PAC611HFM adalah perwujudan konsep Pacifica saat ini.\r\nPelontar yang diredam menggunakan teflon secara signifikan mengurangi kerusakan senar sementara meminimalkan lonjakan frekuensi sebesar 2KHz. Menggabungkan pelana ini dengan bridgeplate baja asli Yamaha memberikan kombinasi sempurna, respon cepat, dan ketahanan yang kuat.', '95yamaha1.jpg'),
('G_006', 'Yamaha', 'Alder', '24', 'RGX 420DZII', 'Yamaha seri RGX menawarkan gaya dan spesifikasi untuk tipe pemain agresif. Leher gitar yang lebih tipis sangat cocok untuk latihan gitar yang intens dan humbucker keramik yang dipilih secara khusus memberikan nada modern yang jernih dan kuat. Dengan 24 fret dilengkapi dengan double locking tremolos untuk meningkatkan performa suara dan performa bermain gitar.', '52yamaha2.jpg'),
('G_007', 'Yamaha', 'Maple/Mahogany', '22', 'Revstar RSP20CR', 'Yamaha seri Revstar terinspirasi oleh garis-garis gaya dan kinerja keras dari sepeda CafÃ© Racer yang mewarnai jalanan London 1960-an, Profesional Revstar dengan sepenuh hati merangkul konsep menjadi paket pengerjaan gitar luhur. Bagian dan bahan premium yang dipilih dengan tangan dikombinasikan dengan kecerdikan dan pengetahuan yang mencerminkan etika teknik berorientasi Jepang, memastikan bahwa gitar ini sesuai dengan etos dari fungsi, karakter, dan gaya CafÃ© Racer.', '86yamaha3.jpg'),
('G_008', 'Ibanez', 'Mahogany', '24', 'ARZ-300 BK', 'Ibanez ARZ-300 BK ini dirancang untuk overdrive yang kuat, yang terdengar sangat profesional. Ibanez ARZ300 dalam hal kualitas dan suara gitar yang tenang bisa bersaing dengan produk high-end. Desain yang modern namun memiliki karakter suara yang buas, membuat banyak orang menyuakainya.', '92Ibanez2.jpg'),
('G_009', 'Ibanez', 'Basswood', '24', 'RG370DX', 'Gitar yang dibuat oleh Ibanez ini diperkenalkan pada tahun 2003. Gitar ini diproduksi di Korea pada tahun 2003-2005 dengan fitur yang dimiliki body basswood, Ibanez made pickup, double locking tremolo dan Wizard II neck dengan rosewood fingerboard. Namun pada tahun 2005 produksi gitar dipindahkan ke Indonesia dengan beberapa spesifikasi yang berubah, termasuk pickup dan bridge.\r\nDesain gitar RG370DX ini didasarkan pada model Ibanez sebelumnya yang dibuat di Korea â€œRG370â€. Pada tahun 2011, RG', '16ibanez3.jpg'),
('G_010', 'Fender', 'Alder', '22', 'American Professional Telecaster Deluxe Shawbucker', 'Fender telecaster ini memiliki desain sederhana namun kualitas profesional. menjadikan hidup lebih baik bagi musisi. Telecaster terus melakukan inovasi dan perbaikan dengan memeriksa setiap komponen sedetail mungkin yang hampir mikroskopik.  American Professional Telecaster: semua yang Anda butuhkan untuk bermain sebaik mungkin ada dalam gitar ini.', '66fender2.jpg'),
('G_011', 'Fender', 'Ash', '22', 'Deluxe Stratocaster', 'Gitar dengan suara yang serbaguna, khas gaya dan suara Fender yang terkenal. Strat Deluxe memiliki beberapa leukan di leher gitar. Menggabungkan suara bebas noise dengan kenyamanan bermain yang disempurnakan. Instrumen ramping ini adalah model yang benar-benar mewah yang unggul di studio maupun di panggung.', '81fender3.jpg'),
('G_012', 'Gretsch', 'Maple', '22', 'G2622T With Bigsby', 'Merevitalisasi elemen terbaik dari masa lalu, G2622T Streamliner Center Block Double Cutaway dengan Bigsby meledak ke era musik modern dengan suara dan gaya yang kuat. G2622T yang ramping dirancang untuk para gitaris yang menuntut lebih dari sekadar hal biasa dari instrumen gitar, lebih gaya dan yang terpenting, lebih banyak volume-sementara tetap mempertahankan semua yang Anda harapkan dari Gretsch.', '77gretsch2.jpg'),
('G_013', 'Gretsch', 'Maple', '22', 'G2622T Streamliner Center Block Double Cutaway', 'Merevitalisasi elemen terbaik dari masa lalu, G2622T Streamliner Center Block Double Cutaway dengan Bigsby meledak ke era musik modern dengan suara dan gaya yang kuat. Brash dan umpan balik-tahan, G2622T yang ramping dirancang untuk para gitaris yang menuntut lebih dari sekadar hal biasa dari instrumen-lebih banyak kinerja, lebih gaya dan yang terpenting, lebih banyak volume-sementara tetap mempertahankan semua yang Anda harapkan dari Gretsch.', '32gretsch3.jpg'),
('G_014', 'Gibson', 'Mahogany', '22', 'SG Standard Black', 'Gibson SG Standard memiliki dua humbucker yang satu suara keras dan satunya untuk menyeimbangkan soft tone, sehingga menggabungkan rock and roll murni dengan kelas murni. Dengan jarak senar dengan fretboard dekat membuat anda sangat nyaman untuk licking, maupun teknik gitar yang sangat sulit sehingga mudah untuk dipelajari.', '74gibson2.jpg'),
('G_015', 'Gibson', 'Maple', '22', 'Memphis 2016 Late 60''s ES-335TD', 'Pada akhir 1960-an, semi-solidbody milik Gibson menampilkan neck yang lebih ramping dan sempit yang menawarkan aksi cepat dan playabilty yang mudah, dan hadir dengan perangkat keras krom tahan lama. Gibson Memphis dengan bangga mempersembahkan Edisi Terbatas 2016 ini yang menggabungkan fitur ini dengan sepasang humbucker MHS dan sirkuit Memphis Tone, yang dirancang untuk menghasilkan nada terbaik yang ditawarkan semi solid.', '39gibson3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `kriteria`
--

CREATE TABLE `kriteria` (
  `kode_kri` varchar(20) NOT NULL,
  `nama_kri` varchar(50) NOT NULL,
  `tipe_kri` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kriteria`
--

INSERT INTO `kriteria` (`kode_kri`, `nama_kri`, `tipe_kri`) VALUES
('C_001', 'Harga', 'cost'),
('C_002', 'Berat Gitar (Kg)', 'cost'),
('C_003', 'Garansi (Tahun)', 'benefit'),
('C_004', 'Tingkat Keawetan', 'benefit'),
('C_005', 'Tingkat Ketenaran Merk', 'cost');

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE `nilai` (
  `id_nilai` int(11) NOT NULL,
  `id_gitar` varchar(50) NOT NULL,
  `kode_kri` varchar(50) NOT NULL,
  `nilai` double NOT NULL,
  `normalisasi` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nilai`
--

INSERT INTO `nilai` (`id_nilai`, `id_gitar`, `kode_kri`, `nilai`, `normalisasi`) VALUES
(1, 'G_001', 'C_001', 70653310, '0.0177'),
(2, 'G_001', 'C_002', 9.8, '0.2551'),
(3, 'G_001', 'C_003', 2, '0.5000'),
(4, 'G_001', 'C_004', 5, '1.0000'),
(5, 'G_001', 'C_005', 5, '0.2000'),
(6, 'G_002', 'C_001', 30000000, '0.0417'),
(7, 'G_002', 'C_002', 3, '0.8333'),
(8, 'G_002', 'C_003', 3, '0.7500'),
(9, 'G_002', 'C_004', 3, '0.6000'),
(10, 'G_002', 'C_005', 2, '0.5000'),
(11, 'G_003', 'C_001', 37000000, '0.0338'),
(12, 'G_003', 'C_002', 2.5, '1.0000'),
(13, 'G_003', 'C_003', 3, '0.7500'),
(14, 'G_003', 'C_004', 4, '0.8000'),
(15, 'G_003', 'C_005', 1, '1.0000'),
(21, 'G_004', 'C_001', 33000000, '0.0379'),
(22, 'G_004', 'C_002', 10, '0.2500'),
(23, 'G_004', 'C_003', 2, '0.5000'),
(24, 'G_004', 'C_004', 5, '1.0000'),
(25, 'G_004', 'C_005', 2, '0.5000'),
(26, 'G_005', 'C_001', 5520000, '0.2264'),
(27, 'G_005', 'C_002', 11, '0.2273'),
(28, 'G_005', 'C_003', 4, '1.0000'),
(29, 'G_005', 'C_004', 3, '0.6000'),
(30, 'G_005', 'C_005', 4, '0.2500'),
(31, 'G_006', 'C_001', 3089000, '0.4047'),
(32, 'G_006', 'C_002', 3.4, '0.7353'),
(33, 'G_006', 'C_003', 4, '1.0000'),
(34, 'G_006', 'C_004', 3, '0.6000'),
(35, 'G_006', 'C_005', 4, '0.2500'),
(36, 'G_007', 'C_001', 26800000, '0.0466'),
(37, 'G_007', 'C_002', 18, '0.1389'),
(38, 'G_007', 'C_003', 4, '1.0000'),
(39, 'G_007', 'C_004', 3, '0.6000'),
(40, 'G_007', 'C_005', 4, '0.2500'),
(41, 'G_008', 'C_001', 4400000, '0.2841'),
(42, 'G_008', 'C_002', 7, '0.3571'),
(43, 'G_008', 'C_003', 3, '0.7500'),
(44, 'G_008', 'C_004', 4, '0.8000'),
(45, 'G_008', 'C_005', 1, '1.0000'),
(46, 'G_009', 'C_001', 4320000, '0.2894'),
(47, 'G_009', 'C_002', 4, '0.6250'),
(48, 'G_009', 'C_003', 3, '0.7500'),
(49, 'G_009', 'C_004', 4, '0.8000'),
(50, 'G_009', 'C_005', 1, '1.0000'),
(61, 'G_010', 'C_001', 25950000, '0.0482'),
(62, 'G_010', 'C_002', 15, '0.1667'),
(63, 'G_010', 'C_003', 2, '0.5000'),
(64, 'G_010', 'C_004', 3, '0.6000'),
(65, 'G_010', 'C_005', 2, '0.5000'),
(66, 'G_011', 'C_001', 11200000, '0.1116'),
(67, 'G_011', 'C_002', 15, '0.1667'),
(68, 'G_011', 'C_003', 1, '0.2500'),
(69, 'G_011', 'C_004', 3, '0.6000'),
(70, 'G_011', 'C_005', 2, '0.5000'),
(71, 'G_012', 'C_001', 13200000, '0.0947'),
(72, 'G_012', 'C_002', 19, '0.1316'),
(73, 'G_012', 'C_003', 2, '0.5000'),
(74, 'G_012', 'C_004', 5, '1.0000'),
(75, 'G_012', 'C_005', 5, '0.2000'),
(76, 'G_013', 'C_001', 7920000, '0.1578'),
(77, 'G_013', 'C_002', 14, '0.1786'),
(78, 'G_013', 'C_003', 2, '0.5000'),
(79, 'G_013', 'C_004', 5, '1.0000'),
(80, 'G_013', 'C_005', 5, '0.2000'),
(81, 'G_014', 'C_001', 1250000, '1.0000'),
(82, 'G_014', 'C_002', 7, '0.3571'),
(83, 'G_014', 'C_003', 1, '0.2500'),
(84, 'G_014', 'C_004', 5, '1.0000'),
(85, 'G_014', 'C_005', 2, '0.5000'),
(86, 'G_015', 'C_001', 39500000, '0.0316'),
(87, 'G_015', 'C_002', 20, '0.1250'),
(88, 'G_015', 'C_003', 4, '1.0000'),
(89, 'G_015', 'C_004', 5, '1.0000'),
(90, 'G_015', 'C_005', 2, '0.5000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `alternatif`
--
ALTER TABLE `alternatif`
  ADD PRIMARY KEY (`id_gitar`);

--
-- Indexes for table `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`kode_kri`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id_nilai`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `no` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id_nilai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

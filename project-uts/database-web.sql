-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               5.7.24 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping structure for table project-uts.aboutus
DROP TABLE IF EXISTS `aboutus`;
CREATE TABLE IF NOT EXISTS `aboutus` (
  `shortver` varchar(500) DEFAULT NULL,
  `longver` varchar(500) DEFAULT NULL,
  `complete` varchar(500) DEFAULT NULL,
  `history` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table project-uts.aboutus: ~1 rows (approximately)
/*!40000 ALTER TABLE `aboutus` DISABLE KEYS */;
INSERT INTO `aboutus` (`shortver`, `longver`, `complete`, `history`) VALUES
	('Fantastic Agency dibuat untuk membantu para travelers dalam mencari hotel dan resort yang sesuai dengan budget yag telah ditentukan oleh para traveler', 'Kantor kami berada di Universitas Pembangunan Jaya, sangat mudah untuk Anda menemukan kantor kami. Kantor kami hanya berjarak 3 menit dari stasiun Jurangmangu dan 5 menit dari tol pondok aren. Anda dapat menemui kami di sosial media milik kami.', 'Fantastic Agency dibuat untuk membantu para travelers dalam mencari hotel dan resort yang sesuai dengan budget yag telah ditentukan oleh para traveler', 'Fantastic Agency dibuat pada tahun 2020, saat ini usia Agency masih berumur 1 tahun. Agency kami dibuat atas dasar keresahan para pendiri yang sangat menyukai traveling namun, sulit untuk menemukan agency yang sesuai dengan budget para pendiri.');
/*!40000 ALTER TABLE `aboutus` ENABLE KEYS */;

-- Dumping structure for table project-uts.anastasya
DROP TABLE IF EXISTS `anastasya`;
CREATE TABLE IF NOT EXISTS `anastasya` (
  `name` varchar(50) DEFAULT NULL,
  `comments` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table project-uts.anastasya: ~1 rows (approximately)
/*!40000 ALTER TABLE `anastasya` DISABLE KEYS */;
INSERT INTO `anastasya` (`name`, `comments`) VALUES
	('Anastasya Octaviani', '"Suka sekali dengan resort yang direkomendasikan oleh Fantastic Agency, bakal langganan nih kalau mau liburan bareng teman dan keluarga"');
/*!40000 ALTER TABLE `anastasya` ENABLE KEYS */;

-- Dumping structure for table project-uts.anggun
DROP TABLE IF EXISTS `anggun`;
CREATE TABLE IF NOT EXISTS `anggun` (
  `name` varchar(50) DEFAULT NULL,
  `comments` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table project-uts.anggun: ~1 rows (approximately)
/*!40000 ALTER TABLE `anggun` DISABLE KEYS */;
INSERT INTO `anggun` (`name`, `comments`) VALUES
	('Anggun Sinta', '"What a beautiful website, thank you so much Fantastic Agency for recomended resort"');
/*!40000 ALTER TABLE `anggun` ENABLE KEYS */;

-- Dumping structure for table project-uts.anthonys
DROP TABLE IF EXISTS `anthonys`;
CREATE TABLE IF NOT EXISTS `anthonys` (
  `name` varchar(50) DEFAULT NULL,
  `comments` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table project-uts.anthonys: ~1 rows (approximately)
/*!40000 ALTER TABLE `anthonys` DISABLE KEYS */;
INSERT INTO `anthonys` (`name`, `comments`) VALUES
	('Anthony S', '"Berkat Fantastic Agency liburan saya dan keluarga jadi lebih seru dan menyenangkan"');
/*!40000 ALTER TABLE `anthonys` ENABLE KEYS */;

-- Dumping structure for table project-uts.comments
DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `name` char(50) DEFAULT NULL,
  `email` char(50) DEFAULT NULL,
  `massage` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table project-uts.comments: ~0 rows (approximately)
/*!40000 ALTER TABLE `comments` DISABLE KEYS */;
/*!40000 ALTER TABLE `comments` ENABLE KEYS */;

-- Dumping structure for table project-uts.contactdetails
DROP TABLE IF EXISTS `contactdetails`;
CREATE TABLE IF NOT EXISTS `contactdetails` (
  `name` char(50) DEFAULT NULL,
  `phone` char(50) DEFAULT NULL,
  `mobilephone` char(50) DEFAULT NULL,
  `email` char(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table project-uts.contactdetails: ~1 rows (approximately)
/*!40000 ALTER TABLE `contactdetails` DISABLE KEYS */;
INSERT INTO `contactdetails` (`name`, `phone`, `mobilephone`, `email`) VALUES
	('Sabrina', '123-345-789', '91182323434', 'sabrina@gmail.com');
/*!40000 ALTER TABLE `contactdetails` ENABLE KEYS */;

-- Dumping structure for table project-uts.enquirymanohara
DROP TABLE IF EXISTS `enquirymanohara`;
CREATE TABLE IF NOT EXISTS `enquirymanohara` (
  `name` varchar(50) NOT NULL DEFAULT '',
  `email` char(50) DEFAULT NULL,
  `phone` char(50) DEFAULT NULL,
  `date1` char(50) DEFAULT NULL,
  `date2` char(50) DEFAULT NULL,
  `pesan` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table project-uts.enquirymanohara: ~0 rows (approximately)
/*!40000 ALTER TABLE `enquirymanohara` DISABLE KEYS */;
/*!40000 ALTER TABLE `enquirymanohara` ENABLE KEYS */;

-- Dumping structure for table project-uts.enquirynusadua
DROP TABLE IF EXISTS `enquirynusadua`;
CREATE TABLE IF NOT EXISTS `enquirynusadua` (
  `name` varchar(50) NOT NULL,
  `email` char(50) DEFAULT NULL,
  `phone` char(50) DEFAULT NULL,
  `date1` char(50) DEFAULT NULL,
  `date2` char(50) DEFAULT NULL,
  `pesan` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table project-uts.enquirynusadua: ~0 rows (approximately)
/*!40000 ALTER TABLE `enquirynusadua` DISABLE KEYS */;
/*!40000 ALTER TABLE `enquirynusadua` ENABLE KEYS */;

-- Dumping structure for table project-uts.enquirypinkbuild
DROP TABLE IF EXISTS `enquirypinkbuild`;
CREATE TABLE IF NOT EXISTS `enquirypinkbuild` (
  `name` varchar(50) NOT NULL,
  `email` char(50) DEFAULT NULL,
  `phone` char(50) DEFAULT NULL,
  `date1` char(50) DEFAULT NULL,
  `date2` char(50) DEFAULT NULL,
  `pesan` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table project-uts.enquirypinkbuild: ~0 rows (approximately)
/*!40000 ALTER TABLE `enquirypinkbuild` DISABLE KEYS */;
/*!40000 ALTER TABLE `enquirypinkbuild` ENABLE KEYS */;

-- Dumping structure for table project-uts.enquiryseribu
DROP TABLE IF EXISTS `enquiryseribu`;
CREATE TABLE IF NOT EXISTS `enquiryseribu` (
  `name` varchar(50) NOT NULL,
  `email` char(50) DEFAULT NULL,
  `phone` char(50) DEFAULT NULL,
  `date1` char(50) DEFAULT NULL,
  `date2` char(50) DEFAULT NULL,
  `pesan` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table project-uts.enquiryseribu: ~0 rows (approximately)
/*!40000 ALTER TABLE `enquiryseribu` DISABLE KEYS */;
/*!40000 ALTER TABLE `enquiryseribu` ENABLE KEYS */;

-- Dumping structure for table project-uts.enquirytheberoi
DROP TABLE IF EXISTS `enquirytheberoi`;
CREATE TABLE IF NOT EXISTS `enquirytheberoi` (
  `name` varchar(50) NOT NULL,
  `email` char(50) DEFAULT NULL,
  `phone` char(50) DEFAULT NULL,
  `date1` char(50) DEFAULT NULL,
  `date2` char(50) DEFAULT NULL,
  `pesan` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table project-uts.enquirytheberoi: ~0 rows (approximately)
/*!40000 ALTER TABLE `enquirytheberoi` DISABLE KEYS */;
/*!40000 ALTER TABLE `enquirytheberoi` ENABLE KEYS */;

-- Dumping structure for table project-uts.enquirytongging
DROP TABLE IF EXISTS `enquirytongging`;
CREATE TABLE IF NOT EXISTS `enquirytongging` (
  `name` varchar(50) NOT NULL,
  `email` char(50) DEFAULT NULL,
  `phone` char(50) DEFAULT NULL,
  `date1` datetime DEFAULT NULL,
  `date2` datetime DEFAULT NULL,
  `pesan` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table project-uts.enquirytongging: ~0 rows (approximately)
/*!40000 ALTER TABLE `enquirytongging` DISABLE KEYS */;
/*!40000 ALTER TABLE `enquirytongging` ENABLE KEYS */;

-- Dumping structure for table project-uts.info
DROP TABLE IF EXISTS `info`;
CREATE TABLE IF NOT EXISTS `info` (
  `checkin` varchar(500) DEFAULT NULL,
  `checkout` varchar(500) DEFAULT NULL,
  `pets` char(50) DEFAULT NULL,
  `policies` varchar(500) DEFAULT NULL,
  `fees` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table project-uts.info: ~1 rows (approximately)
/*!40000 ALTER TABLE `info` DISABLE KEYS */;
INSERT INTO `info` (`checkin`, `checkout`, `pets`, `policies`, `fees`) VALUES
	('Waktu checkin dilakukan setelah Anda masuk ke hotel', 'Checkout dilakukan 5 menit sebelum waktu checkout yang telah ditentukan', 'Not allowed', 'Dilarang membawa pulang barang-barang apapun dari hotel, kecuali yang diizinkan untuk dibawa pulang', 'Pembayaran dapat dilakukan setelah anda membooking kamar pada website serta dapat dilakukan pada saat anda tiba di resepsionis');
/*!40000 ALTER TABLE `info` ENABLE KEYS */;

-- Dumping structure for table project-uts.james
DROP TABLE IF EXISTS `james`;
CREATE TABLE IF NOT EXISTS `james` (
  `name` varchar(50) DEFAULT NULL,
  `comments` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table project-uts.james: ~1 rows (approximately)
/*!40000 ALTER TABLE `james` DISABLE KEYS */;
INSERT INTO `james` (`name`, `comments`) VALUES
	('James Raul', '"Rekomended sekali untuk teman-teman yang ingin cari-cari agen travel yang murah dengan kualitas oke punya"');
/*!40000 ALTER TABLE `james` ENABLE KEYS */;

-- Dumping structure for table project-uts.kimmy
DROP TABLE IF EXISTS `kimmy`;
CREATE TABLE IF NOT EXISTS `kimmy` (
  `name` varchar(50) DEFAULT NULL,
  `comments` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table project-uts.kimmy: ~1 rows (approximately)
/*!40000 ALTER TABLE `kimmy` DISABLE KEYS */;
INSERT INTO `kimmy` (`name`, `comments`) VALUES
	('Kimmy', '"Sangat terbantu sekali dengan website ini, biaya liburan yang terjangkau"');
/*!40000 ALTER TABLE `kimmy` ENABLE KEYS */;

-- Dumping structure for table project-uts.manoharahotel
DROP TABLE IF EXISTS `manoharahotel`;
CREATE TABLE IF NOT EXISTS `manoharahotel` (
  `name` varchar(50) DEFAULT NULL,
  `price` char(50) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `deskripsinya` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table project-uts.manoharahotel: ~1 rows (approximately)
/*!40000 ALTER TABLE `manoharahotel` DISABLE KEYS */;
INSERT INTO `manoharahotel` (`name`, `price`, `description`, `deskripsinya`) VALUES
	('The Manohara Hotel Yogyakarta', 'Rp 3.000.000 - Rp 4.000.000', 'The Manohara Hotel Yogyakarta adalah hotel yang berkawasan di Sleman, Yogyakarta', 'The Manohara Hotel Yogyakarta adalah hotel yang berkawasan di Kabupaten Sleman, Daerah Istimewa Yogyakarta ini memiliki keunikan yang berbeda dari hotel lainnya. Hotel ini memiliki konsep seperti rumah susun yang berwarna-warni. Hotel ini berada di lokasi yang sangat strategis di Yogyakarta dan sangat dekat dengan bandara, jaraknya hanya sekitar 4.9 km. Jika anda ingin menikmati udara di sekitar hotel anda dapat pergi ke monumen tugu yang hanya berjarak sekitar 1,5 km dari hotel');
/*!40000 ALTER TABLE `manoharahotel` ENABLE KEYS */;

-- Dumping structure for table project-uts.nusaduabeachhotel
DROP TABLE IF EXISTS `nusaduabeachhotel`;
CREATE TABLE IF NOT EXISTS `nusaduabeachhotel` (
  `name` varchar(50) DEFAULT NULL,
  `price` char(50) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `deskripsinya` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table project-uts.nusaduabeachhotel: ~1 rows (approximately)
/*!40000 ALTER TABLE `nusaduabeachhotel` DISABLE KEYS */;
INSERT INTO `nusaduabeachhotel` (`name`, `price`, `description`, `deskripsinya`) VALUES
	('Nusa Dua Beach Hotel & Spa', 'Rp 5.000.000 - Rp 6.000.000', 'Nusa Dua Beach Hotel & Spa adalah hotel bintang 5 yang berkawasan di Nusa Dua, Bali.', 'Nusa Dua Beach Hotel & SPA, hotel yang terletak di Jl. Nusa Dua, Bali ini menawarkan pemandangan langsung menuju pantai. Selain itu, hotel ini dikelilingi banyak candi yang akan menambah wawasan Anda serta candi-candinya Instagramable.');
/*!40000 ALTER TABLE `nusaduabeachhotel` ENABLE KEYS */;

-- Dumping structure for table project-uts.pinkbuilding
DROP TABLE IF EXISTS `pinkbuilding`;
CREATE TABLE IF NOT EXISTS `pinkbuilding` (
  `name` varchar(50) DEFAULT NULL,
  `price` char(50) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `deskripsinya` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table project-uts.pinkbuilding: ~1 rows (approximately)
/*!40000 ALTER TABLE `pinkbuilding` DISABLE KEYS */;
INSERT INTO `pinkbuilding` (`name`, `price`, `description`, `deskripsinya`) VALUES
	('Pink Building Resort', 'Rp 40.000.000 - Rp 50.000.000', 'Pink Building Resort adalah resort yang bernuansa pink dengan pemandangan langsung menghadap ke laut lepas yang berada di New York, USA.', 'Pink Building Resort, hotel yang terletak di New York, USA ini menawarkan pemandangan langsung menuju pantai. Selain itu Anda akan merasakan sejuknya udara di sekitar hotel. Banyak pengalaman yang akan Anda dapatkan ketika berada di hotel ini dan Anda akan sangat menikmati waktu liburan Anda di tempat ini');
/*!40000 ALTER TABLE `pinkbuilding` ENABLE KEYS */;

-- Dumping structure for table project-uts.seriburesort
DROP TABLE IF EXISTS `seriburesort`;
CREATE TABLE IF NOT EXISTS `seriburesort` (
  `name` varchar(50) DEFAULT NULL,
  `price` char(50) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `deskripsinya` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table project-uts.seriburesort: ~1 rows (approximately)
/*!40000 ALTER TABLE `seriburesort` DISABLE KEYS */;
INSERT INTO `seriburesort` (`name`, `price`, `description`, `deskripsinya`) VALUES
	('Seribu Resort & Hotel', 'Rp 2.000.000 - Rp 3.000.000', 'Seribu Resort & Hotel adalah resort dan hotel yang terletak di pinggir pantai pulau seribu yang menyajikan pemandangan langsung kelaut dan dikelilingi banyaknya pohon kelapa.', 'Seribu Resort & Hotel, hotel yang terletak di Pulau Seribu ini menawarkan pemandangan langsung menuju pantai. Selain itu Anda akan merasakan sejuknya udara di sekitar hotel. Banyak pengalaman yang akan Anda dapatkan ketika berada di hotel ini dan Anda akan sangat menikmati waktu liburan Anda di tempat ini');
/*!40000 ALTER TABLE `seriburesort` ENABLE KEYS */;

-- Dumping structure for table project-uts.theoberoi
DROP TABLE IF EXISTS `theoberoi`;
CREATE TABLE IF NOT EXISTS `theoberoi` (
  `name` varchar(50) DEFAULT NULL,
  `price` char(50) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `deskripsinya` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table project-uts.theoberoi: ~1 rows (approximately)
/*!40000 ALTER TABLE `theoberoi` DISABLE KEYS */;
INSERT INTO `theoberoi` (`name`, `price`, `description`, `deskripsinya`) VALUES
	('The Oberoi Udaivilas, Udaipur', 'Rp 15.000.000 - Rp 20.000.000', 'The Oberoi Udaivilas, Udaipur adalah hotel bintang 5 yang menawarkan pemandangan langsung ke laut yang berada di Udaipur, India.', 'The Oberoi Udaivilas, hotel yang terletak di Udaipur, India ini menawarkan pemandangan langsung menuju pantai. Selain itu Anda akan merasakan sejuknya udara di sekitar hotel. Banyak pengalaman yang akan Anda dapatkan ketika berada di hotel ini dan Anda akan sangat menikmati waktu liburan Anda di tempat ini');
/*!40000 ALTER TABLE `theoberoi` ENABLE KEYS */;

-- Dumping structure for table project-uts.tongginghotel
DROP TABLE IF EXISTS `tongginghotel`;
CREATE TABLE IF NOT EXISTS `tongginghotel` (
  `name` varchar(50) DEFAULT NULL,
  `price` char(50) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `deskripsinya` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table project-uts.tongginghotel: ~1 rows (approximately)
/*!40000 ALTER TABLE `tongginghotel` DISABLE KEYS */;
INSERT INTO `tongginghotel` (`name`, `price`, `description`, `deskripsinya`) VALUES
	('Tongging Point Hotel', 'Rp 4.000.000 - Rp 5.000.000', 'Tongging Point Hotel adalah hotel bintang 4 yang berada di kawasan Danau Toba, Sumatera Utara.', 'Tongging Point Hotel, hotel yang terletak di Jl. Raya Merek, Sumatera Utara ini menawarkan pemandangan langsung menuju pada Danau Toba. Mata Anda akan langsung menatap pada pemandangan sekitar hotel yang sangat hijau ketika Anda membuka gorden kamar Anda. Suhu di tempat ini akan membuat Anda seperti berada di Luar Negeri pada saat musim salju.');
/*!40000 ALTER TABLE `tongginghotel` ENABLE KEYS */;

-- Dumping structure for table project-uts.travis
DROP TABLE IF EXISTS `travis`;
CREATE TABLE IF NOT EXISTS `travis` (
  `name` varchar(50) DEFAULT NULL,
  `comments` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table project-uts.travis: ~1 rows (approximately)
/*!40000 ALTER TABLE `travis` DISABLE KEYS */;
INSERT INTO `travis` (`name`, `comments`) VALUES
	('Travis Cout', '"Baru pertama kali pakai dan ternyata pelayanannya bagus sekali, mulai dari penjemputan dari rumah sampai transportasi dari bandara ke resortnya sudah terjamin"');
/*!40000 ALTER TABLE `travis` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;

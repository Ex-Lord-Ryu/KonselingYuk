/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 100427 (10.4.27-MariaDB)
 Source Host           : localhost:3306
 Source Schema         : konselingyuk

 Target Server Type    : MySQL
 Target Server Version : 100427 (10.4.27-MariaDB)
 File Encoding         : 65001

 Date: 14/07/2023 13:35:27
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for artikel
-- ----------------------------
DROP TABLE IF EXISTS `artikel`;
CREATE TABLE `artikel`  (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `judul` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `gambar` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `author` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `jenis_konten` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `konten` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `tanggal` date NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of artikel
-- ----------------------------
INSERT INTO `artikel` VALUES (2, 'Seberapa optimalkah konseling online?', 'uploads/female-doctor-working-with-upset-man.jpg', 'KonselingYuk', 'Artikel', 'Sering sekali mendapati bahwa konseling online kurang maksimal di banding dengan pertemuan secara tatap muka namun belum menjawab pernyataan diatas mari kita cari tau sejarah konseling online ini. Konseling online sendiri sebenarnya bukan sesuatu yang baru. Fenomena ini muncul pertama kali pada tahun 1960 dan 1970 lewat software Eliza and Parry. \r\nSebelumnya bentuk pelayanan konseling hanya bisa dijangkau hanya dengan pertemuan secara langsung dan menentukan jadwal secara langsung.\r\n\r\nPertanyaannya seberapa optimalkah pelayanan konseling secara online dalam dunia psikologi ini?\r\n1.	Membantu dalam mengatur schedule secara optimal dan efisien baik untuk konselor maupun customer.\r\n2.	Terapi online dan layanan terapi melalui telekonferensi juga bisa memberikan penanganan yang dibutuhkan orang-orang yang memiliki mobilitas yang rendah.\r\n\r\nNamun memang tidak bisa dipungkiri bahwa terapi online tidak bisa digunakan saat penanganan secara profesional tetap dilakukan pertemuan secara tatap muka tetapi dengan adanya kemudahan konseling online ini juga membantu dalam mengatur jadwal secara flexibel, efektif tanpa harus bertemu secara langsung. Konseling online hadir dalam bentuk yang berbeda \r\n\r\n', '2023-07-11');
INSERT INTO `artikel` VALUES (3, 'Emosi Negatif', 'uploads/esmosi negatif.jpg', 'KonselingYuk', 'Information', 'Goleman (2002) mengatakan emosi dasar negatif adalah perasaan individu yang dirasakan kurang menyenangkan (ketakutan, kekhawatiran, kecemasan, kebencian, kemarahan) yang berlebihan yang dapat membuat individu bertindak dengan sangat tidak rasional atau diluar kontrol. (Plutchick, 1987) mendefinisikan emosi dasar negatif adalah suatu keadaan dalam diri seseorang yang dirasakan kurang menyenangkan sehingga mempengaruhi sikap dan perilaku individu dalam berhubungan dengan orang lain. Emosi negatif juga dapat memberikan dampak yang signifikan saat kalian sedang menjalani hari bisa merusak suasana hati, tidak mempunyai semangat dalam menjalani hari. Nah kali ini kita akan coba beda bagaimana kita mengelola emosi negatif dengan baik dan benar.\r\nMari kita bedah!\r\nMenurut Markham (2004), faktor-faktor yang menyebabkan terjadinya emosi dasar negatif yaitu ada 3:\r\n1.	Disposisi adalah kepekaan objek terhadap stimulus tertentu, karena tidak semua stimulus dapat membangkitkan emosi.Manusia tidak hanya memiliki emosi, menjadi emosional akibat situasi yang mengubah kesiapan aksinya, tapi manusia juga mengatur dan menangani emosinya (handle). \r\n2.	Pengalaman emosi memiliki penyebab yang lebih tepat disebut anteseden.\r\n3.	Manusia tidak hanya memiliki emosi, menjadi emosional akibat situasi yang mengubah kesiapan aksinya, tapi manusia juga mengatur dan menangani emosinya (handle). \r\n\r\nDari sini kita sudah lebih tau penyebab - penyebab emosi negatif muncul dalam diri lalu bagaimana kita bisa mengendalikannya? Beberapa cara ini akan sangat efektif jika kalian sungguh menerapkannya dengan benar.\r\n\r\n1.	Acceptance emotion and Affirmation\r\nTerima emosi yang kalian sedang alami dari semua kejadian yang mungkin tidak menyenangkan kalian harus terima bahwa emosi ini hanya sesaat dan kalian akan melewatinya\r\n2.	Olahraga dan Olah Jiwa\r\nOlahraga membantu menyediakan jalan keluar bagi kita untuk melepaskan emosi negatif, jelas psikolog Yvonne Thomas, PhD. Dirinya berujar bahwa aktivitas fisik dapat melatih beberapa emosi dengan bernapas lebih dalam dan dengan aktif menyalurkan kembali emosi melalui gerakan tubuh. Olahraga juga akan memicu endorfin yang bisa menenangkan dan membuat rileks. Lalu olah jiwa lakukan meditasi setiap pagi jika klian belum pernah melakukannya coba dengan 5 menit pertama fokus kepada hal hal yang membuat kalian bersyukur serta mencoba meyakini bahwa akan banyak hal diluar kontrol kalian.\r\n3.	Lakukan kegiatan yang membuat anda senang (positif)\r\nYang terakhir melakukan kegiatan yang kalian sukai yang bisa membuat merasa senang saat melakukannya.\r\n', '2023-07-11');
INSERT INTO `artikel` VALUES (4, ' Kesehatan mental : Mahasiswa', 'uploads/Feeling Blue-amico.png', 'KonselingYuk', 'Information', 'Kesadaran dalam mengetahui bahwa kesehatan mental sangat penting untuk menjadi urgensi bagi masyarakat masih sangat kurang. Masih saja ke tabuan menghantui beberapa masyarakat, mereka masih menganggap mereka dengan sebutan orang “abnormall” terlalu cari perhatian dan masih banyak sekali stigma buruk yang berkeliaran. Diskriminasi yang mendarah daging terhadap orang yang sedang berjuang menuju kondisi well-being nya ini sungguh sangat disayangkan karena mereka justru akan mempersulit kesembuhan dari seorang yang terkena isu kesehatan mental ini. Kalangan mahasiswa yang sering kali mendapati hal hal seperti ini banyak social life nya. Berdasarkan studi terbaru dari Boston University, mahasiswa menjadi kelompok paling rentan mengalami depresi dan stres. Karena itu, kesehatan mental menjadi isu penting untuk tidak dianggap sepele bagi mahasiswa. (Idn times)\r\n\r\nElvine pun memaparkan hasil survey kesehatan mental dengan sampel 3.901 mahasiswa. Hasilnya, sebanyak 76 persen mahasiswa merasa stres sangat berat, berat, dan sedang.Mahasiswa juga mengalami depresi sebesar 59 persen gabungan dari kategori depresi sangat berat, berat, dan sedang. Untuk gangguan kecemasan, 78 persen mahasiswa merasa cemas sangat berat, berat, dan sedang. Kecemasan yang berlanjut akan berdampak jauh membahayakan \r\nMerespons kondisi diatas, sudah sepantasnya warga Indonesia saling mengedukasi satu sama lain untuk meningkatkan awareness akan kesehatan mental. Akan jauh lebih baik apabila seluruh lapisan masyarakat menyadari pentingnya kesehatan mental, sebagai salah satu upaya pencegahan untuk menekan angka penduduk yang mengalami gangguan jiwa. Konsep person in environment  bisa menjadi salah satu pilihan tepat untuk menyebarkan kesadaran akan kesehatan mental di Indonesia. Konsep ini menekankan pada eksistensi dan keberadaan individu yang tidak bisa terlepas dari pengaruh lingkungan sekitarnya, begitu juga individu yang secara tidak langsung memberi pengaruh terhadap lingkungan (Putri, Wibhawa, & Gutama, 2015).\r\nKonsep person in environment juga menitikberatkan pada penggabungan antara individu dengan situasi juga lingkungan menjadi suatu konsep yang tunggal. Berdasarkan konsep ini, permasalahan kesehatan mental dilihat secara bersamaan, dimana tidak hanya dilihat dari sisi individunya saja, namun juga bagaimana individu tersebut dalam lingkungan sosialnya. Dengan mengaplikasikan konsep ini, seluruh lapisan masyarakat akan saling memberikan pengaruh yang baik terhadap satu sama lain perihal kesehatan mental. peningkatan kesehatan mental masyarakat harus dimulai dengan meningkatkan psikoedukasi, memperluas informasi, dan menyebarkannya kepada orang-orang terdekat. Selain itu, upaya ini harus diimbangi dengan peningkatan jumlah tenaga kesehatan mental di Indonesia, salah satunya dengan adanya psikolog di kampus.\r\nDengan adanya urgensi yang menjadi keresahan diharapkan setiap instansi pendidikan dapat sadar akan hal yang ada ini karena membantu kesejahteraan mental orang lain akan sangat bermanfaat dampaknya. \r\n', '2023-07-11');
INSERT INTO `artikel` VALUES (5, 'Menggali Kesejahteraan: Menjaga Keseimbangan dalam Hidup', 'uploads/bahagia.jpeg', 'KonselingYuk', 'Information', 'Kesejahteraan adalah keadaan di mana seseorang merasa baik secara fisik, mental, dan emosional. Ini melibatkan keseimbangan yang baik antara kepuasan materi, kesehatan fisik, hubungan sosial yang positif, da n kepuasan emosional. Dalam dunia yang serba sibuk dan penuh tekanan saat ini, menjaga kesejahteraan telah menjadi prioritas bagi banyak orang. Dalam artikel ini, kita akan menjelajahi pentingnya kesejahteraan dan langkah-langkah yang dapat diambil untuk mencapainya.\r\nKesehatan fisik: Kesejahteraan yang baik dimulai dengan menjaga kesehatan fisik. Melakukan latihan fisik secara teratur, makan makanan bergizi, dan menjaga tidur yang cukup merupakan langkah penting dalam menjaga kesejahteraan fisik. Aktivitas fisik meningkatkan aliran darah, memperkuat sistem kekebalan tubuh, dan mengurangi risiko penyakit kronis. Dengan merawat tubuh kita, kita memberikan dasar yang kuat untuk kesejahteraan yang holistik.\r\nKesejahteraan emosional: Kesejahteraan emosional melibatkan kesadaran dan pengelolaan emosi kita. Penting untuk mengakui dan menghargai emosi yang kita alami, baik itu senang, sedih, takut, atau marah. Menjaga keseimbangan emosional melibatkan praktik seperti meditasi, refleksi diri, atau terlibat dalam kegiatan yang meningkatkan kebahagiaan, seperti hobi atau waktu bersama orang-orang yang kita cintai.\r\nHubungan sosial yang positif: Kualitas hubungan sosial yang kita miliki berdampak signifikan pada kesejahteraan kita. Membangun dan memelihara hubungan yang sehat dan positif dengan keluarga, teman, dan masyarakat dapat memberikan dukungan sosial yang penting dalam menghadapi tantangan hidup. Melibatkan diri dalam kegiatan sosial, seperti bergabung dengan klub atau organisasi, juga dapat memperluas jaringan sosial kita dan memberikan rasa kepemilikan dan komunitas yang kuat.\r\nPencapaian dan pertumbuhan: Merasa berhasil dan meraih tujuan yang bermakna adalah komponen penting dari kesejahteraan. Mengidentifikasi tujuan pribadi, baik dalam karier, pendidikan, atau pengembangan pribadi, memberikan fokus dan arah dalam hidup kita. Ketika kita mencapai tujuan-tujuan ini, kita merasa terpenuhi dan percaya diri. Selain itu, terus tumbuh dan belajar juga penting untuk memelihara kesejahteraan kita. Mengeksplorasi minat baru, menghadapi tantangan, dan mengembangkan keterampilan baru memberikan rasa pencapaian dan kepuasan diri.\r\nMencari arti dan makna: Pencarian arti dan makna dalam hidup memberikan fondasi yang kuat untuk kesejahteraan. Ini melibatkan refleksi pada nilai-nilai dan keyakinan pribadi kita, serta menemukan tujuan yang lebih besar daripada diri sendiri. Aktivitas seperti praktik spiritual, mempraktikkan kebaikan, atau memberikan kontribusi kepada komunitas atau lingkungan sekitar dapat memberikan rasa pemenuhan dan tujuan yang mendalam.\r\nMengutamakan kesejahteraan dalam hidup kita merupakan investasi yang berharga. Ketika kita menjaga keseimbangan dalam aspek fisik, emosional, dan sosial, kita dapat merasakan kehidupan yang lebih bermakna dan bahagia. Dalam dunia yang sibuk dan menuntut ini, penting untuk mengingat bahwa kesejahteraan adalah perjalanan, bukan tujuan akhir. Dengan kesadaran dan komitmen untuk menjaga kesejahteraan kita, kita dapat menciptakan kehidupan yang sehat dan bermakna.\r\n', '2023-07-11');

-- ----------------------------
-- Table structure for counselors
-- ----------------------------
DROP TABLE IF EXISTS `counselors`;
CREATE TABLE `counselors`  (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `gambar` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `specialization` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `created_at` datetime NULL DEFAULT NULL,
  `updated_at` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 15 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `version` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `class` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `group` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `namespace` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `time` int NOT NULL,
  `batch` int UNSIGNED NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES (1, '2023-07-01-092725', 'App\\Database\\Migrations\\CreateTables', 'default', 'App', 1688988377, 1);
INSERT INTO `migrations` VALUES (2, '2023-07-06-074210', 'App\\Database\\Migrations\\CreateArtikelTable', 'default', 'App', 1688988377, 1);
INSERT INTO `migrations` VALUES (3, '2023-07-10-081530', 'App\\Database\\Migrations\\CreateCounselorsTable', 'default', 'App', 1688988377, 1);

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `role` enum('admin','mahasiswa') CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT 'mahasiswa',
  `created_at` datetime NULL DEFAULT NULL,
  `updated_at` datetime NULL DEFAULT NULL,
  `deleted_at` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 24 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (23, 'admin', 'admin@gmail.com', '$2y$10$JHqKdX/6R22Y39ZZEm7LmuDf4nOWVJkgtigZHmcZGWd.52W8VPz6e', 'admin', NULL, NULL, NULL);

SET FOREIGN_KEY_CHECKS = 1;

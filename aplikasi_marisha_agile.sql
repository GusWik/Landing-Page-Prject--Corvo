/*
Navicat MySQL Data Transfer

Source Server         : aplikasi_marisha_agile
Source Server Version : 50736
Source Host           : newdemo.aplikasiskripsi.com:3306
Source Database       : aplikasi_marisha_agile

Target Server Type    : MYSQL
Target Server Version : 50736
File Encoding         : 65001

Date: 2021-11-29 13:08:59
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for tb_cart
-- ----------------------------
DROP TABLE IF EXISTS `tb_cart`;
CREATE TABLE `tb_cart` (
  `cart_id` int(11) NOT NULL AUTO_INCREMENT,
  `id_customer` varchar(255) DEFAULT NULL,
  `id_produk` varchar(255) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  PRIMARY KEY (`cart_id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of tb_cart
-- ----------------------------
INSERT INTO `tb_cart` VALUES ('3', null, '6', '1');
INSERT INTO `tb_cart` VALUES ('4', '4', '6', '1');
INSERT INTO `tb_cart` VALUES ('8', '3', '6', '1');

-- ----------------------------
-- Table structure for tb_customer
-- ----------------------------
DROP TABLE IF EXISTS `tb_customer`;
CREATE TABLE `tb_customer` (
  `customer_id` int(11) NOT NULL AUTO_INCREMENT,
  `customer` varchar(255) DEFAULT NULL,
  `no_hp` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `verifikasi_code` varchar(255) DEFAULT NULL,
  `is_verifikasi` int(11) NOT NULL DEFAULT '0' COMMENT '0, 1',
  PRIMARY KEY (`customer_id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of tb_customer
-- ----------------------------
INSERT INTO `tb_customer` VALUES ('1', 'Hasan Sadikin', '01284713821', 'hasan@gmail.com', 'Alamat', 'hasan', '4297f44b13955235245b2497399d7a93', null, '0');
INSERT INTO `tb_customer` VALUES ('2', 'Eko', '02348247234', 'eko@gmail.com', 'alamat lengkap', 'eko', '4297f44b13955235245b2497399d7a93', null, '0');
INSERT INTO `tb_customer` VALUES ('3', 'Benjamin', null, 'benjamin@gmail.com', null, 'benjamin', '4297f44b13955235245b2497399d7a93', null, '1');
INSERT INTO `tb_customer` VALUES ('4', 'Bambang Setiawan', null, 'bambangkun2021@gmail.com', null, 'bambang', '4297f44b13955235245b2497399d7a93', null, '0');
INSERT INTO `tb_customer` VALUES ('11', 'Abdul Latif', null, 'latifeducate@gmail.com', null, 'latif', '4297f44b13955235245b2497399d7a93', '819700', '1');
INSERT INTO `tb_customer` VALUES ('12', 'tiwi', null, 'tiwi@gmail.com', null, 'tiwi', '4297f44b13955235245b2497399d7a93', '587139', '0');
INSERT INTO `tb_customer` VALUES ('13', 'tiwi', null, 'tiwi@gmail.com', null, 'tiwi', '4297f44b13955235245b2497399d7a93', '921601', '0');
INSERT INTO `tb_customer` VALUES ('14', 'tiwi', null, 'tiwi@gmail.com', null, 'tiwi', '4297f44b13955235245b2497399d7a93', '537154', '0');
INSERT INTO `tb_customer` VALUES ('15', 'fsdf', null, 'latifeducate@gmail.com', null, 'sda', 'a8f5f167f44f4964e6c998dee827110c', '649587', '0');
INSERT INTO `tb_customer` VALUES ('16', 'fwerew', null, 'tiwi@gmail.com', null, 'tiwi', '4297f44b13955235245b2497399d7a93', '387187', '0');
INSERT INTO `tb_customer` VALUES ('17', 'tiwi', '0888888888', 'tiwi@gmail.com', null, 'tiwi', '4297f44b13955235245b2497399d7a93', '439276', '0');
INSERT INTO `tb_customer` VALUES ('18', 'tiwi', '0888888888', 'kalender.dokterskripsi@gmail.com', null, 'tiwi', '4297f44b13955235245b2497399d7a93', '810071', '0');
INSERT INTO `tb_customer` VALUES ('19', 'tiwi', '0888888888', 'kalender.dokterskripsi@gmail.com', null, 'tiwi', '4297f44b13955235245b2497399d7a93', '507059', '0');
INSERT INTO `tb_customer` VALUES ('20', 'tiwi', '0888888888', 'kalendar.dokterskripsi@gmail.com', null, 'tiwi', '4297f44b13955235245b2497399d7a93', '362096', '0');
INSERT INTO `tb_customer` VALUES ('21', 'marisha', '02155588800', 'marishac.works@gmail.com', null, 'marisha_test', '202cb962ac59075b964b07152d234b70', '485517', '1');
INSERT INTO `tb_customer` VALUES ('22', 'Abdul Latif', '56445645623', 'latifeducate@gmail.com', null, 'adeum', '4297f44b13955235245b2497399d7a93', '379820', '0');
INSERT INTO `tb_customer` VALUES ('23', 'Marisha Claudia', '089523433000', 'marishac.works@gmail.com', null, 'marisha', '4297f44b13955235245b2497399d7a93', '775336', '0');

-- ----------------------------
-- Table structure for tb_kategori
-- ----------------------------
DROP TABLE IF EXISTS `tb_kategori`;
CREATE TABLE `tb_kategori` (
  `kategori_id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kategori` varchar(255) DEFAULT NULL,
  `icon` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`kategori_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of tb_kategori
-- ----------------------------
INSERT INTO `tb_kategori` VALUES ('1', 'Semua Produk', '/uploads/kategori/FI23112021094023779.png');
INSERT INTO `tb_kategori` VALUES ('2', 'Produk Segar', '/uploads/kategori/FI23112021094424422.png');
INSERT INTO `tb_kategori` VALUES ('3', 'Dapur & Bahan Makanan', '/uploads/kategori/FI23112021094836485.jpg');
INSERT INTO `tb_kategori` VALUES ('4', 'Olahan Susu & Telur', '/uploads/kategori/FI23112021095025816.jpg');
INSERT INTO `tb_kategori` VALUES ('5', 'Rumah Tangga & Hewan Peliharaan', '/uploads/kategori/FI23112021095111372.png');
INSERT INTO `tb_kategori` VALUES ('6', 'Makanan Ringan', '/uploads/kategori/FI23112021095259575.png');
INSERT INTO `tb_kategori` VALUES ('7', 'Daging & Makanan Laut', '/uploads/kategori/FI23112021095429688.png');
INSERT INTO `tb_kategori` VALUES ('8', 'Minuman, Kopi & Teh', '/uploads/kategori/FI23112021095547346.png');
INSERT INTO `tb_kategori` VALUES ('9', 'Produk Beku', '/uploads/kategori/FI23112021095656395.jpg');
INSERT INTO `tb_kategori` VALUES ('10', 'Roti-rotian & Sarapan', '/uploads/kategori/FI23112021095749547.jpg');
INSERT INTO `tb_kategori` VALUES ('11', 'Perawatan Pribadi & Kesehatan', '/uploads/kategori/FI23112021100140385.png');
INSERT INTO `tb_kategori` VALUES ('12', 'Bayi & Ibu', '/uploads/kategori/FI23112021100231706.png');
INSERT INTO `tb_kategori` VALUES ('13', 'Barang Bukan Makanan & Perkakas Rumah', '/uploads/kategori/FI23112021100451310.png');

-- ----------------------------
-- Table structure for tb_kurir
-- ----------------------------
DROP TABLE IF EXISTS `tb_kurir`;
CREATE TABLE `tb_kurir` (
  `kurir_id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kurir` varchar(255) DEFAULT NULL,
  `no_hp` varchar(255) DEFAULT NULL,
  `jasa_pengiriman` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`kurir_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of tb_kurir
-- ----------------------------
INSERT INTO `tb_kurir` VALUES ('1', 'Bambang Pamungkas', '08234726423', '3');

-- ----------------------------
-- Table structure for tb_produk
-- ----------------------------
DROP TABLE IF EXISTS `tb_produk`;
CREATE TABLE `tb_produk` (
  `produk_id` int(11) NOT NULL AUTO_INCREMENT,
  `id_kategori` int(11) DEFAULT NULL,
  `kode_produk` varchar(255) DEFAULT NULL,
  `nama_produk` varchar(255) DEFAULT NULL,
  `harga` varchar(255) DEFAULT NULL,
  `stok` varchar(255) DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `deskripsi` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`produk_id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of tb_produk
-- ----------------------------
INSERT INTO `tb_produk` VALUES ('6', '6', 'F1213', 'Richeese Siip Bites Cheese 50gr', '4200', '3434', '/uploads/produk/FI18112021093107683.webp', 'Richeese Siip Bites Cheese 50gr / Makanan Ringan');
INSERT INTO `tb_produk` VALUES ('7', '8', 'F1212', 'ICHITAN Thai Milk Tea 310 ml', '8500', '67', '/uploads/produk/FI23112021101344692.jpg', 'Ichitan Thai Milk Tea 310 ml\r\nMinuman khas authentic Thailand dan merupakan product terlaris Ichitan Indonesia, menggunakan daun teh pilihan dan skim milk dengan kualitas terbaik untuk memberikan eksperimen minuman Thai milk tea yang asli.\r\n\r\nIchitan Thai');
INSERT INTO `tb_produk` VALUES ('8', '2', 'PS0001', 'Brokoli Segar Fresh 500 gr', '23000', '12', '/uploads/produk/FI23112021101626566.jpg', 'Kondisi: Baru\r\nBerat: 500 Gram\r\nKategori: Sayuran\r\nEtalase: sayur mayur segar\r\nDimohon untuk membaca deskripsi produk terlebih dahulu sebelum memesan.\r\nSayuran Segar yang diambil langsung dari tengkulak oleh penjual dengan harga terjangkau, namun tetap me');
INSERT INTO `tb_produk` VALUES ('9', '3', 'DB001', 'Beras Sania 5kg', '55000', '67', '/uploads/produk/FI23112021101908487.webp', 'Kondisi: Baru\r\nBerat: 5.300 Gram\r\nKategori: Beras Putih\r\nEtalase: BERAS\r\n• Sertifikat : Halal\r\n• Beras murni\r\n• Berasal dari padi berkualitas\r\n• Diproses secara higienis dan tidak menggunakan pemutih atau pengawet\r\n• Menghasilkan nasi yang pulen\r\n• Aman d');
INSERT INTO `tb_produk` VALUES ('10', '4', 'OST0001', 'H2e Telur Renkoles 10\'S', '54000', '67', '/uploads/produk/FI23112021102102121.jpg', 'Kondisi: Baru\r\nBerat: 500 Gram\r\nKategori: Telur\r\nEtalase: Egg Telur');
INSERT INTO `tb_produk` VALUES ('11', '7', 'DM0001', 'Daging Sapi Frozen ', '98000', '3', '/uploads/produk/FI23112021102629191.jpg', 'Kondisi: Baru\r\nBerat: 1.000 Gram\r\nKategori: Daging Sapi\r\nEtalase: lauk pauk\r\ndijamin fresh dan berkualitas');
INSERT INTO `tb_produk` VALUES ('12', '9', 'PB001', 'Cedea Salmon Ball 200gr Frozen Food Grosir', '11800', '12', '/uploads/produk/FI23112021102759103.jpg', 'Cedea Salmon Ball 200gr Frozen Food Grosir\r\nProduk sesuai dengan judul dan gambar.\r\n\r\nKami pastikan produk yang akan dikirim melalui quality control dan kami packing dengan baik.\r\n\r\nProduk merupakan fast moving product, alangkah bijaknya bila mengkonfirma');
INSERT INTO `tb_produk` VALUES ('13', '9', 'PB002', 'Champ Baso Ayam 500gr Frozen Food Grosir', '23500', '67', '/uploads/produk/FI23112021102908804.jpg', 'Champ Baso Ayam 500gr Frozen Food Grosir\r\nProduk sesuai dengan judul dan gambar.\r\n\r\nKami pastikan produk yang akan dikirim melalui quality control dan kami packing dengan baik.\r\n\r\nProduk merupakan fast moving product, alangkah bijaknya bila mengkonfirmasi');
INSERT INTO `tb_produk` VALUES ('14', '9', 'PB003', 'Belfoods Royal Golden Fillet 500gr Frozen Food Grosir', '58300', '67', '/uploads/produk/FI23112021103032529.webp', 'Kondisi: Baru\r\nBerat: 400 Gram\r\nKategori: Baso & Daging Olahan Lainnya\r\nEtalase: Semua Etalase\r\nProduk sesuai dengan judul dan gambar.\r\n\r\nKami pastikan produk yang akan dikirim melalui quality control dan kami packing dengan baik.\r\nProduk merupakan fast m');

-- ----------------------------
-- Table structure for tb_transaksi
-- ----------------------------
DROP TABLE IF EXISTS `tb_transaksi`;
CREATE TABLE `tb_transaksi` (
  `transaksi_id` int(11) NOT NULL AUTO_INCREMENT,
  `no_transaksi` varchar(255) DEFAULT NULL,
  `id_customer` int(11) DEFAULT NULL,
  `tgl_transaksi` varchar(255) DEFAULT NULL,
  `no_telp_pembeli` varchar(255) DEFAULT NULL,
  `alamat_rumah` varchar(255) DEFAULT '',
  `jalan` varchar(255) DEFAULT NULL,
  `kode_pos` varchar(255) DEFAULT NULL,
  `kota` varchar(255) DEFAULT '',
  `tgl_pengiriman` varchar(255) DEFAULT NULL,
  `jam_pengiriman` varchar(255) DEFAULT NULL,
  `payment_method` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT '0',
  `bukti_pembayaran` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`transaksi_id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of tb_transaksi
-- ----------------------------
INSERT INTO `tb_transaksi` VALUES ('1', '2810210001', '2', '2021-10-28', '08234726423', 'Alamat Pengiriman Sesuai lokasi saya aja di database', null, null, null, null, null, null, '0', null);
INSERT INTO `tb_transaksi` VALUES ('3', '1711210002', '3', '2021-11-17', '08234726423', 'Alamat', 'fdsffdsfs', '432432', 'Bogor', '2021-11-19', '8.00AM - 10.00AM', 'cashondelivery', '0', null);
INSERT INTO `tb_transaksi` VALUES ('4', '2411210003', '3', '2021-11-24', null, 'Cibinong', 'Ciriung', '11111', 'bogor', null, '10.00AM - 12.00PM', 'cashondelivery', '0', null);
INSERT INTO `tb_transaksi` VALUES ('5', '2411210004', '3', '2021-11-24', null, 'Cibinong', 'Ciriung', '11111', 'bogor', null, '10.00AM - 12.00PM', 'card', '0', null);
INSERT INTO `tb_transaksi` VALUES ('6', '2611210005', '21', '2021-11-26', null, 'Sukasejati Garden City Blok B-23, Cikarang Selatan', 'Jl. Sukasejati', '17530', 'Bekasi', '2021-11-27', '10.00AM - 12.00PM', 'cashondelivery', '0', null);
INSERT INTO `tb_transaksi` VALUES ('7', '2911210006', '11', '2021-11-29', null, 'Jl. Ruko Kranggan Permai, Rt.003/rw.010, Jatisampurna, Kec. Jatisampurna, Kota Bks, Jawa Barat 17435', 'streetJl. Ruko Kranggan Permai, Rt.003/rw.010, Jatisampurna, Kec. Jatisampurna, Kota Bks, Jawa Barat 17435', '432432', 'Bogor', '2021-11-30', '10.00AM - 12.00PM', 'cashondelivery', '0', null);
INSERT INTO `tb_transaksi` VALUES ('8', '2911210007', '11', '2021-11-29', null, 'Jl. Ruko Kranggan Permai, Rt.003/rw.010, Jatisampurna, Kec. Jatisampurna, Kota Bks, Jawa Barat 17435', 'streetJl. Ruko Kranggan Permai, Rt.003/rw.010, Jatisampurna, Kec. Jatisampurna, Kota Bks, Jawa Barat 17435', '432432', 'Bogor', '2021-11-30', '10.00AM - 12.00PM', 'cashondelivery', '0', null);
INSERT INTO `tb_transaksi` VALUES ('9', '2911210008', '11', '2021-11-29', null, 'Jl. Ruko Kranggan Permai, Rt.003/rw.010, Jatisampurna, Kec. Jatisampurna, Kota Bks, Jawa Barat 17435', 'streetJl. Ruko Kranggan Permai, Rt.003/rw.010, Jatisampurna, Kec. Jatisampurna, Kota Bks, Jawa Barat 17435', '432432', 'Bogor', '2021-11-30', '10.00AM - 12.00PM', 'card', '0', null);
INSERT INTO `tb_transaksi` VALUES ('10', '2911210009', '11', '2021-11-29', null, 'Jl. Ruko Kranggan Permai, Rt.003/rw.010, Jatisampurna, Kec. Jatisampurna, Kota Bks, Jawa Barat 17435', 'streetJl. Ruko Kranggan Permai, Rt.003/rw.010, Jatisampurna, Kec. Jatisampurna, Kota Bks, Jawa Barat 17435', '432432', 'Bogor', '2021-11-30', '10.00AM - 12.00PM', 'card', '0', null);
INSERT INTO `tb_transaksi` VALUES ('11', '2911210010', '11', '2021-11-29', null, 'Jl. Ruko Kranggan Permai, Rt.003/rw.010, Jatisampurna, Kec. Jatisampurna, Kota Bks, Jawa Barat 17435', 'streetJl. Ruko Kranggan Permai, Rt.003/rw.010, Jatisampurna, Kec. Jatisampurna, Kota Bks, Jawa Barat 17435', '432432', 'Bogor', '2021-11-30', '10.00AM - 12.00PM', 'card', '0', null);
INSERT INTO `tb_transaksi` VALUES ('12', '2911210011', '11', '2021-11-29', null, 'Jl. Ruko Kranggan Permai, Rt.003/rw.010, Jatisampurna, Kec. Jatisampurna, Kota Bks, Jawa Barat 17435', 'streetJl. Ruko Kranggan Permai, Rt.003/rw.010, Jatisampurna, Kec. Jatisampurna, Kota Bks, Jawa Barat 17435', '432432', 'Bogor', '2021-11-30', '10.00AM - 12.00PM', 'card', '0', null);
INSERT INTO `tb_transaksi` VALUES ('13', '2911210012', '11', '2021-11-29', null, 'Jl. Ruko Kranggan Permai, Rt.003/rw.010, Jatisampurna, Kec. Jatisampurna, Kota Bks, Jawa Barat 17435', 'streetJl. Ruko Kranggan Permai, Rt.003/rw.010, Jatisampurna, Kec. Jatisampurna, Kota Bks, Jawa Barat 17435', '432432', 'Bogor', '2021-11-30', '10.00AM - 12.00PM', 'card', '0', null);
INSERT INTO `tb_transaksi` VALUES ('14', '2911210013', '11', '2021-11-29', null, 'Jl. Ruko Kranggan Permai, Rt.003/rw.010, Jatisampurna, Kec. Jatisampurna, Kota Bks, Jawa Barat 17435', 'streetJl. Ruko Kranggan Permai, Rt.003/rw.010, Jatisampurna, Kec. Jatisampurna, Kota Bks, Jawa Barat 17435', '432432', 'Bogor', '2021-11-30', '10.00AM - 12.00PM', 'card', '0', null);
INSERT INTO `tb_transaksi` VALUES ('15', '2911210014', '11', '2021-11-29', '08123456789', 'Jl. Ruko Kranggan Permai, Rt.003/rw.010, Jatisampurna, Kec. Jatisampurna, Kota Bks, Jawa Barat 17435', 'streetJl. Ruko Kranggan Permai, Rt.003/rw.010, Jatisampurna, Kec. Jatisampurna, Kota Bks, Jawa Barat 17435', '432432', 'Bogor', '2021-11-30', '10.00AM - 12.00PM', 'card', '0', null);
INSERT INTO `tb_transaksi` VALUES ('16', '2911210015', '11', '2021-11-29', '08123456789', 'Jl. Ruko Kranggan Permai, Rt.003/rw.010, Jatisampurna, Kec. Jatisampurna, Kota Bks, Jawa Barat 17435', 'streetJl. Ruko Kranggan Permai, Rt.003/rw.010, Jatisampurna, Kec. Jatisampurna, Kota Bks, Jawa Barat 17435', '432432', 'Bogor', '2021-11-30', '10.00AM - 12.00PM', 'card', '0', '/uploads/bukti_bayar/29112021130125291.jpg');
INSERT INTO `tb_transaksi` VALUES ('17', '2911210016', '11', '2021-11-29', '08561068669', 'Jl. Ruko Kranggan Permai, Rt.003/rw.010, Jatisampurna, Kec. Jatisampurna, Kota Bks, Jawa Barat 17435', 'streetJl. Ruko Kranggan Permai, Rt.003/rw.010, Jatisampurna, Kec. Jatisampurna, Kota Bks, Jawa Barat 17435', '432432', 'Bogor', '2021-11-30', '10.00AM - 12.00PM', 'card', '0', '/uploads/bukti_bayar/29112021130207914.jpg');
INSERT INTO `tb_transaksi` VALUES ('18', '2911210017', '11', '2021-11-29', '085610686691', 'Jl. Ruko Kranggan Permai, Rt.003/rw.010, Jatisampurna, Kec. Jatisampurna, Kota Bks, Jawa Barat 17435', 'streetJl. Ruko Kranggan Permai, Rt.003/rw.010, Jatisampurna, Kec. Jatisampurna, Kota Bks, Jawa Barat 17435', '432432', 'Bogor', '2021-11-30', '4.00PM - 6.00PM', 'card', '0', '/uploads/bukti_bayar/29112021130316932.jpg');

-- ----------------------------
-- Table structure for tb_transaksi_detail
-- ----------------------------
DROP TABLE IF EXISTS `tb_transaksi_detail`;
CREATE TABLE `tb_transaksi_detail` (
  `transaksi_detail_id` int(11) NOT NULL AUTO_INCREMENT,
  `id_transaksi` varchar(255) DEFAULT NULL,
  `id_produk` varchar(255) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `harga_produk` varchar(255) DEFAULT NULL,
  `sub_total` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`transaksi_detail_id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of tb_transaksi_detail
-- ----------------------------
INSERT INTO `tb_transaksi_detail` VALUES ('1', '1', '6', '1', '85000', '1');
INSERT INTO `tb_transaksi_detail` VALUES ('2', '3', '6', '3', '85000', null);
INSERT INTO `tb_transaksi_detail` VALUES ('3', '3', '5', '3', '38000', null);
INSERT INTO `tb_transaksi_detail` VALUES ('4', '4', '5', '1', '3800', null);
INSERT INTO `tb_transaksi_detail` VALUES ('5', '4', '8', '1', '23000', null);
INSERT INTO `tb_transaksi_detail` VALUES ('6', '5', '8', '2', '23000', null);
INSERT INTO `tb_transaksi_detail` VALUES ('7', '6', '8', '1', '23000', null);
INSERT INTO `tb_transaksi_detail` VALUES ('8', '7', '7', '1', '8500', null);
INSERT INTO `tb_transaksi_detail` VALUES ('9', '8', '8', '1', '23000', null);
INSERT INTO `tb_transaksi_detail` VALUES ('10', '9', '6', '1', '4200', null);
INSERT INTO `tb_transaksi_detail` VALUES ('11', '9', '8', '4', '23000', null);
INSERT INTO `tb_transaksi_detail` VALUES ('12', '11', '8', '6', '23000', null);
INSERT INTO `tb_transaksi_detail` VALUES ('13', '12', '8', '4', '23000', null);
INSERT INTO `tb_transaksi_detail` VALUES ('14', '13', '8', '4', '23000', null);
INSERT INTO `tb_transaksi_detail` VALUES ('15', '14', '8', '4', '23000', null);
INSERT INTO `tb_transaksi_detail` VALUES ('16', '15', '8', '4', '23000', null);
INSERT INTO `tb_transaksi_detail` VALUES ('17', '16', '8', '4', '23000', null);
INSERT INTO `tb_transaksi_detail` VALUES ('18', '17', '8', '4', '23000', '92000');
INSERT INTO `tb_transaksi_detail` VALUES ('19', '18', '8', '2', '23000', '46000');

-- ----------------------------
-- Table structure for tb_user
-- ----------------------------
DROP TABLE IF EXISTS `tb_user`;
CREATE TABLE `tb_user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) DEFAULT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `role` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tb_user
-- ----------------------------
INSERT INTO `tb_user` VALUES ('1', 'Admin', 'admin', 'e10adc3949ba59abbe56e057f20f883e', 'admin');
INSERT INTO `tb_user` VALUES ('22', 'Kamal', 'kamal', 'e10adc3949ba59abbe56e057f20f883e', 'kepala_divisi');

-- ----------------------------
-- Table structure for tb_voucher
-- ----------------------------
DROP TABLE IF EXISTS `tb_voucher`;
CREATE TABLE `tb_voucher` (
  `voucher_id` int(11) NOT NULL AUTO_INCREMENT,
  `id_produk` varchar(255) DEFAULT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`voucher_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of tb_voucher
-- ----------------------------
INSERT INTO `tb_voucher` VALUES ('1', null, 'Diskon Sumpah Pemuda', '/uploads/voucher/FI27102021164644313.jpg');
SET FOREIGN_KEY_CHECKS=1;

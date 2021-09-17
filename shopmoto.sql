-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 13, 2021 at 08:50 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopmoto`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id_blog` int(11) NOT NULL,
  `title` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `content` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id_blog`, `title`, `img`, `content`) VALUES
(1, 'Honda CB500X 2022, được ra mắt tại châu Âu vào ngày 1 tháng 9 với những cải tiến về hệ thống giảm xó', 'data/blog/img/blog1.jpg', 'data/blog/content/blog1.txt'),
(2, 'Webike SRC Kawasaki France Trickstar đến với Bol d’Or trong vai trò tạm thời đứng đầu giải vô địch t', 'data/blog/img/blog2.jpg', 'data/blog/content/blog2.txt');

-- --------------------------------------------------------

--
-- Table structure for table `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id_danhmuc` int(11) NOT NULL,
  `tendm` varchar(50) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `danhmuc`
--

INSERT INTO `danhmuc` (`id_danhmuc`, `tendm`) VALUES
(1, 'Xe Ga'),
(2, 'Xe Số'),
(3, 'Phân Khối Lớn'),
(4, 'Xe Điện'),
(5, 'Ô tô');

-- --------------------------------------------------------

--
-- Table structure for table `dungtich`
--

CREATE TABLE `dungtich` (
  `id_dungt` int(11) NOT NULL,
  `sodungt` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dungtich`
--

INSERT INTO `dungtich` (`id_dungt`, `sodungt`) VALUES
(1, '<50cc'),
(2, '50cc<&&<100cc'),
(3, '100cc<&&<150cc'),
(4, '150cc<&&<200cc'),
(5, '200cc<&&<250cc');

-- --------------------------------------------------------

--
-- Table structure for table `hangsx`
--

CREATE TABLE `hangsx` (
  `id_hang` int(11) NOT NULL,
  `tenhang` text NOT NULL,
  `img` text CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hangsx`
--

INSERT INTO `hangsx` (`id_hang`, `tenhang`, `img`) VALUES
(1, 'Hãng Khác', '0'),
(2, 'Yamaha', 'data/logo/YAMAHA.jpg'),
(3, 'Suzuki', 'data/logo/SUZUKI.jpg'),
(4, 'HonDa', 'data/logo/HONDA.jpg'),
(5, 'RollRoy', 'data/logo/roll.png'),
(6, 'Kawasaki', 'data/logo/kawasaki.jpg'),
(7, 'Ducati', 'data/logo/du.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `hoadon`
--

CREATE TABLE `hoadon` (
  `id_hoadon` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `status` text NOT NULL,
  `hotennn` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `diachi` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `sdt` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hoadon`
--

INSERT INTO `hoadon` (`id_hoadon`, `id_user`, `id_product`, `status`, `hotennn`, `diachi`, `sdt`) VALUES
(999, 0, 34, 'admin Vip', '', '', ''),
(1064, 4, 11, 'Thanh Toán Khi Nhận Hàng', 'Nguyên Văn Tuyển', '22 Lang Ha', '0934998386'),
(1111, 4, 6, 'GD Thanh cong qua :NCB', 'Nguyễn Văn Tuyển', 'NamĐỊnh', '0336669135'),
(1204, 4, 17, 'GD Thanh cong qua :NCB', 'Nguyen Van Tuyen', 'NamĐỊnh', '0336669135');

-- --------------------------------------------------------

--
-- Table structure for table `hopso`
--

CREATE TABLE `hopso` (
  `id_hopso` int(11) NOT NULL,
  `tenhs` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hopso`
--

INSERT INTO `hopso` (`id_hopso`, `tenhs`) VALUES
(1, '4 Cấp'),
(2, '5 Cấp'),
(3, '6 Cấp'),
(4, '7 cấp'),
(5, 'Tự Động');

-- --------------------------------------------------------

--
-- Table structure for table `mau`
--

CREATE TABLE `mau` (
  `id_mau` int(11) NOT NULL,
  `mamau` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mau`
--

INSERT INTO `mau` (`id_mau`, `mamau`) VALUES
(1, 'Xanh'),
(2, 'Đỏ'),
(3, 'Vàng');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id_product` int(11) NOT NULL,
  `tensp` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `gia` int(11) NOT NULL,
  `dungt` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `kicht` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `trongl` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `id_danhmuc` int(11) NOT NULL,
  `id_hang` int(11) NOT NULL,
  `ccaoyen` varchar(50) NOT NULL,
  `ktbanhxe` varchar(50) NOT NULL,
  `dongco` varchar(50) CHARACTER SET utf8 NOT NULL,
  `hopso` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `phanh` varchar(50) NOT NULL,
  `cstoida` varchar(50) NOT NULL,
  `id_mau` int(11) NOT NULL,
  `id_hopso` int(11) NOT NULL,
  `id_dungt` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id_product`, `tensp`, `img`, `gia`, `dungt`, `kicht`, `trongl`, `id_danhmuc`, `id_hang`, `ccaoyen`, `ktbanhxe`, `dongco`, `hopso`, `phanh`, `cstoida`, `id_mau`, `id_hopso`, `id_dungt`) VALUES
(1, 'HonDa-AB', 'data/imgproduct/ab.jpg', 43000, '125cc', '124mm x 89 mm', '111kg', 1, 1, '95mm', '40mm', 'Xăng', 'Tự Động', 'ABS', '400Wat', 1, 5, 2),
(2, 'AXELO', 'data/imgproduct/AXELO.jpg', 25000, '110cc', '99mm x 56mm', '90kg', 2, 3, '85mm', '30mm', 'Xăng', '4 Cấp', 'Thường', '300 mã', 1, 5, 3),
(3, 'CB150RSF', 'data/imgproduct/CB150RSF.jpg', 19500, '175cc', '121mm x 57mm', '135kg', 3, 2, '95mm', '33mm', 'xăng', '5 Cấp', 'ABS', '560 mã', 3, 4, 2),
(4, 'Ducati259', 'data/imgproduct/ducati259.jpg', 30000, '300cc', '124mm x 68mm', '156kg', 3, 7, '98mm', '40mm', 'Full Xăng Điện Tử', '6 Cấp', 'ABS', '700 Mã', 2, 5, 4),
(5, 'ducati599', 'data/imgproduct/ducati599.jpg', 35000, '450cc', '129mm x 71mm', '145kg', 3, 7, '98mm', '42mm', 'Xăng ', '6 Cấp', 'ABS', '700 Mã', 2, 1, 3),
(6, 'Ducati JP', 'data/imgproduct/ducatijp.jpg', 11008, '1000cc', '136mm x 81mm', '212kg', 3, 7, '99mm', '43mm', 'Xăng', ' Cấp', 'ABS', '1043 Mã', 2, 1, 5),
(7, 'EXCITER', 'data/imgproduct/EXCITER.jpg', 43000, '150cc', '98mm x 45mm', '124kg', 2, 2, '87mm', '38mm', 'Xăng', '5 Cấp', 'Thường', '300 Mã', 1, 4, 3),
(8, 'FREEGO', 'data/imgproduct/FREEGO.jpg', 32000, '125cc', '111mm x 68mm', '128kg', 1, 3, '87mm', '36mm', 'Xăng', 'Ga', 'Thường', '250 Mã', 1, 4, 2),
(9, 'GD', 'data/imgproduct/GD.jpg', 12500, '210cc', '99mm x 56mm', '90kg', 2, 4, '85mm', '30mm', 'Xăng', '5 Cấp', 'Thường', '320 mã', 3, 4, 4),
(10, 'GSXBANDIT', 'data/imgproduct/GSXBANDIT.jpg', 29500, '375cc', '121mm x 57mm', '135kg', 3, 1, '95mm', '33mm', 'xăng', '5 Cấp', 'ABS', '560 mã', 1, 5, 5),
(11, 'GSXR', 'data/imgproduct/GSXR.jpg', 30000, '300cc', '124mm x 68mm', '156kg', 3, 2, '98mm', '40mm', 'Full Xăng Điện Tử', '6 Cấp', 'ABS', '700 Mã', 1, 5, 4),
(12, 'GSXS', 'data/imgproduct/GSXS.jpg', 3500, '450cc', '129mm x 71mm', '145kg', 3, 2, '98mm', '42mm', 'Xăng ', '6 Cấp', 'ABS', '700 Mã', 1, 4, 1),
(13, 'H2R', 'data/imgproduct/h2r.jpg', 11008, '1000cc', '136mm x 81mm', '212kg', 3, 6, '99mm', '43mm', 'Xăng', ' 6Cấp', 'ABS', '1043 Mã', 3, 3, 4),
(14, 'LATTE', 'data/imgproduct/LATTE.jpg', 43000, '150cc', '98mm x 45mm', '124kg', 1, 1, '87mm', '38mm', 'Xăng', 'Ga', 'Thường', '300 Mã', 1, 3, 4),
(15, 'monkey', 'data/imgproduct/monkey.jpg', 32000, '125cc', '111mm x 68mm', '128kg', 2, 1, '87mm', '36mm', 'Xăng', ' Cấp', 'Thường', '250 Mã', 2, 5, 1),
(16, 'MT', 'data/imgproduct/MT.jpg', 32000, '125cc', '111mm x 68mm', '128kg', 3, 2, '87mm', '36mm', 'Xăng', ' Cấp', 'Thường', '250 Mã', 3, 1, 4),
(17, 'new1', 'data/imgproduct/new1.jpg', 12500, '210cc', '99mm x 56mm', '90kg', 1, 4, '85mm', '30mm', 'Xăng', 'Ga', 'Thường', '320 mã', 2, 4, 3),
(18, 'new2', 'data/imgproduct/new2.jpg', 2950, '375cc', '121mm x 57mm', '135kg', 3, 2, '95mm', '33mm', 'xăng', '5 Cấp', 'ABS', '560 mã', 1, 3, 5),
(19, 'new3', 'data/imgproduct/new3.jpg', 3000, '300cc', '124mm x 68mm', '156kg', 3, 3, '98mm', '40mm', 'Full Xăng Điện Tử', '6 Cấp', 'ABS', '700 Mã', 0, 0, 0),
(20, 'ninja150', 'data/imgproduct/ninja150.jpg', 3500, '450cc', '129mm x 71mm', '145kg', 3, 6, '98mm', '42mm', 'Xăng ', '6 Cấp', 'ABS', '700 Mã', 2, 4, 1),
(21, 'ninjz1000', 'data/imgproduct/ninjz1000.jpg', 11008, '1000cc', '136mm x 81mm', '212kg', 3, 6, '99mm', '43mm', 'Xăng', ' Cấp', 'ABS', '1043 Mã', 3, 3, 2),
(22, 'NVX', 'data/imgproduct/NVX.jpg', 43000, '150cc', '98mm x 45mm', '124kg', 1, 4, '87mm', '38mm', 'Xăng', '5 Cấp', 'Thường', '300 Mã', 3, 5, 1),
(23, 'r15', 'data/imgproduct/r15.jpg', 32000, '125cc', '111mm x 68mm', '128kg', 3, 2, '87mm', '36mm', 'Xăng', ' Cấp', 'Thường', '250 Mã', 2, 4, 2),
(24, 'RAIDER', 'data/imgproduct/RAIDER.jpg', 320, '125cc', '111mm x 68mm', '128kg', 2, 3, '87mm', '36mm', 'Xăng', ' Cấp', 'Thường', '250 Mã', 1, 4, 3),
(25, 'RollRoyce', 'data/imgproduct/rollroyce.jpg', 12500, '210cc', '99mm x 56mm', '90kg', 5, 5, '85mm', '30mm', 'Xăng', '5 Cấp', 'Thường', '320 mã', 2, 5, 2),
(26, 'SH', 'data/imgproduct/shh.jpg', 2950, '125cc', '121mm x 57mm', '135kg', 1, 4, '95mm', '33mm', 'xăng', '5 Cấp', 'ABS', '560 mã', 1, 3, 2),
(27, 'spoke', 'data/imgproduct/spoke.jpg', 3000, '300cc', '124mm x 68mm', '156kg', 3, 3, '98mm', '40mm', 'Full Xăng Điện Tử', '6 Cấp', 'ABS', '700 Mã', 3, 5, 1),
(28, 'vario', 'data/imgproduct/vario.jpg', 3500, '450cc', '129mm x 71mm', '145kg', 1, 3, '98mm', '42mm', 'Xăng ', '6 Cấp', 'ABS', '700 Mã', 3, 4, 2),
(29, 'winnerx', 'data/imgproduct/winnerx.jpg', 11008, '1000cc', '136mm x 81mm', '212kg', 3, 4, '99mm', '43mm', 'Xăng', ' Cấp', 'ABS', '1043 Mã', 2, 5, 2),
(30, 'Xmax', 'data/imgproduct/xmax.jpg', 4300, '150cc', '98mm x 45mm', '124kg', 4, 1, '87mm', '38mm', 'Xăng', '5 Cấp', 'Thường', '300 Mã', 2, 4, 1),
(31, 'Xmen', 'data/imgproduct/xmen.png', 32000, '125cc', '111mm x 68mm', '128kg', 4, 1, '87mm', '36mm', 'Xăng', ' Cấp', 'Thường', '250 Mã', 2, 1, 3),
(32, 'XSR', 'data/imgproduct/XSR.jpg', 32000, '125cc', '111mm x 68mm', '128kg', 3, 4, '87mm', '36mm', 'Xăng', ' Cấp', 'Thường', '250 Mã', 3, 4, 2),
(33, 'z300', 'data/imgproduct/z250.jpg', 12500, '210cc', '99mm x 56mm', '90kg', 3, 6, '85mm', '30mm', 'Xăng', '5 Cấp', 'Thường', '320 mã', 3, 2, 4),
(34, 'z1000', 'data/imgproduct/z1000.jpg', 29500, '1043cc', '121mm x 57mm', '135kg', 3, 6, '95mm', '33mm', 'xăng', '5 Cấp', 'ABS', '560 mã', 3, 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `slide`
--

CREATE TABLE `slide` (
  `id_slide` int(11) NOT NULL,
  `link` varchar(50) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slide`
--

INSERT INTO `slide` (`id_slide`, `link`) VALUES
(1, 'data/slide/sl1.png'),
(2, 'data/slide/sl2.png'),
(3, 'data/slide/sl3.png'),
(4, 'data/slide/sl4.png');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(100) CHARACTER SET utf8 NOT NULL,
  `pass` text NOT NULL,
  `img` text DEFAULT NULL,
  `name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `level` int(11) DEFAULT NULL,
  `gmail` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `pass`, `img`, `name`, `level`, `gmail`) VALUES
(1, 'admin', '827ccb0eea8a706c4c34a16891f84e7b', 'data/user/ava.jpg', 'Lê Thu Thảo', 1, 'aaaa@gmail.com'),
(4, 'hihi', '827ccb0eea8a706c4c34a16891f84e7b', NULL, 'Nguyễn Công MInh', 0, 'aaaa@gmail.com'),
(5, 'minh', '827ccb0eea8a706c4c34a16891f84e7b', NULL, 'Nguyen Van Trung', NULL, 'nguyen@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id_blog`);

--
-- Indexes for table `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id_danhmuc`);

--
-- Indexes for table `dungtich`
--
ALTER TABLE `dungtich`
  ADD PRIMARY KEY (`id_dungt`);

--
-- Indexes for table `hangsx`
--
ALTER TABLE `hangsx`
  ADD PRIMARY KEY (`id_hang`);

--
-- Indexes for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`id_hoadon`);

--
-- Indexes for table `hopso`
--
ALTER TABLE `hopso`
  ADD PRIMARY KEY (`id_hopso`);

--
-- Indexes for table `mau`
--
ALTER TABLE `mau`
  ADD PRIMARY KEY (`id_mau`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id_product`);

--
-- Indexes for table `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`id_slide`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id_blog` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id_danhmuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `dungtich`
--
ALTER TABLE `dungtich`
  MODIFY `id_dungt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `hangsx`
--
ALTER TABLE `hangsx`
  MODIFY `id_hang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `id_hoadon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100000000;

--
-- AUTO_INCREMENT for table `hopso`
--
ALTER TABLE `hopso`
  MODIFY `id_hopso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `mau`
--
ALTER TABLE `mau`
  MODIFY `id_mau` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `slide`
--
ALTER TABLE `slide`
  MODIFY `id_slide` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

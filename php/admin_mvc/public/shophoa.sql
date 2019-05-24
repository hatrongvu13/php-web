-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 28, 2016 at 11:20 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `shophoa`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `HoTen` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `TenDN` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `MatKhau` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `HoTen`, `TenDN`, `MatKhau`) VALUES
(1, 'Lâm Mỹ Hạnh', 'lmhanh', 'lmhanh'),
(2, 'Đỗ Thị Thảo Nhi', 'thaonhi', 'thaonhi');

-- --------------------------------------------------------

--
-- Table structure for table `chude_hoa`
--

CREATE TABLE IF NOT EXISTS `chude_hoa` (
  `MaCD` int(11) NOT NULL,
  `MaHoa` int(11) NOT NULL,
  PRIMARY KEY (`MaCD`,`MaHoa`),
  KEY `H_CD` (`MaHoa`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `chude_hoa`
--

INSERT INTO `chude_hoa` (`MaCD`, `MaHoa`) VALUES
(2, 1),
(2, 2),
(3, 3),
(3, 4),
(3, 5),
(2, 6),
(2, 7),
(3, 7),
(3, 8),
(2, 9),
(3, 10),
(3, 11),
(3, 12),
(4, 12),
(4, 13),
(2, 14),
(2, 15),
(4, 17),
(2, 19),
(2, 21),
(3, 21),
(2, 22),
(3, 22),
(2, 26),
(4, 31),
(4, 32),
(3, 33),
(3, 35),
(2, 36),
(1, 37),
(1, 38),
(1, 39),
(1, 40),
(1, 41),
(1, 42),
(1, 43),
(1, 44),
(1, 45),
(1, 46),
(1, 47),
(1, 48),
(5, 49),
(5, 50),
(5, 51),
(5, 52),
(5, 53),
(5, 54),
(5, 55),
(5, 56),
(5, 57),
(5, 58),
(5, 59),
(5, 60),
(4, 61),
(4, 62),
(4, 63),
(4, 64),
(4, 65),
(4, 73),
(4, 74);

-- --------------------------------------------------------

--
-- Table structure for table `chu_de`
--

CREATE TABLE IF NOT EXISTS `chu_de` (
  `MaCD` int(11) NOT NULL AUTO_INCREMENT,
  `TenCD` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`MaCD`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `chu_de`
--

INSERT INTO `chu_de` (`MaCD`, `TenCD`) VALUES
(1, 'Hoa cưới'),
(2, 'Hoa tình yêu'),
(3, 'Hoa sinh nhật'),
(4, 'Hoa chúc mừng'),
(5, 'Hoa chia buồn');

-- --------------------------------------------------------

--
-- Table structure for table `hoa`
--

CREATE TABLE IF NOT EXISTS `hoa` (
  `MaHoa` int(11) NOT NULL AUTO_INCREMENT,
  `TenHoa` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Gia` double NOT NULL,
  `ThanhPhan` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `NoiDung` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `Hinh` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `MaLoai` int(11) NOT NULL,
  `ThoiGian` date DEFAULT NULL,
  `KhuyenMai` tinyint(1) NOT NULL,
  PRIMARY KEY (`MaHoa`),
  KEY `MaLoai` (`MaLoai`),
  KEY `MaHoa` (`MaHoa`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=77 ;

--
-- Dumping data for table `hoa`
--

INSERT INTO `hoa` (`MaHoa`, `TenHoa`, `Gia`, `ThanhPhan`, `NoiDung`, `Hinh`, `MaLoai`, `ThoiGian`, `KhuyenMai`) VALUES
(1, 'Trót yêu', 300000, 'Hoa hồng đỏ, Hoa thạch thảo trắng, Hoa cúc xanh', 'Mẫu hoa "Trót yêu" được thiết kế với tông đỏ chủ đao gồm hoa hồng và thạch thảo trắng. Sắc đỏ nồng nàn của hoa hồng như một thông điệp yêu thương say đắm dành cho người nhận. Nếu bạn đang tìm kiếm môt món quà cho một nửa của mình, đừng bỏ qua "Trót yêu" nhé.', 'hoa_bo_1.jpg', 1, '2016-07-27', 0),
(2, 'Lãng mạn', 550000, 'Hoa hồng, Hoa cúc, Các hoa phụ khác', 'Tông màu hồng luôn là sự lựa chọn dễ thương và ngọt ngào dành riêng cho người đặc biệt của bạn. Bó hoa "Hồng Xinh" với sự kết hợp của hoa hồng sen, cát tường trắng, và chút chấm phá của đồng tiền màu hồng sẽ đem đến cho người nhận thật nhiều niềm vui.', 'hoa_bo_2.jpg', 1, '2016-06-01', 1),
(3, 'Ngọt ngào', 350000, 'Hoa hồng, Hoa thạch thảo trắng, Hoa phi yến', 'Được kế hợp từ hoa hồng điểm xuyết với thạch thảo trắng, bó hoa "Ngọt ngào" mang sắc màu tươi sáng, dịu ngọt và sẽ là món quà tuyệt vời dành cho những người thân yêu của bạn. Hãy để những bông hoa tươi thắm này thay lời và gửi những yêu thương, cảm xúc của bạn.', 'hoa_bo_3.jpg', 1, '2016-07-27', 0),
(4, 'Tình bạn', 550000, 'Hoa hồng vàng, Chuỗi ngọc, Hoa hoàng anh, Hoa thạch thảo trắng, Hoa cúc xanh', 'Mẫu hoa tình bạn được thiết kế với tông màu vàng chủ đạo. Người gửi hoa hồng vàng khẳng định tình cảm trực tiếp từ trái tim mình, không chút hoài nghi. Một biểu tượng lý tưởng của tình bạn chân thật, hoa hồng này cũng thể hiện niềm vui và thỏa thích mà không có bất kỳ ẩn ý tiêu cực nào.', 'hoa_bo_4.jpg', 1, '2016-06-13', 1),
(5, 'Rực rỡ', 350000, 'Hoa hồng đỏ, Hoa cẩm chướng', '"Rực rỡ" bao gồm hoa hồng và cát tường đỏ, được bó một cách đơn giản trên nền đỏ tạo nên cảm giác tươi mới khi nhìn vào, hãy tặng Rực rỡ đến người nhận kèm với những lời chúc may mắn và tốt đẹp nhất. Thích hợp để tặng kỉ niệm, sinh nhật,...', 'hoa_bo_5.jpg', 1, '2016-07-27', 0),
(6, 'Hạnh phúc', 550000, 'Hoa hồng trắng, Hoa hồng cam, Hoa salem tím, Hoa cúc xanh, Các loại hoa phụ', 'Bó hoa "Hạnh phúc" được thiết kế với tông nhiều màu như một lời an lành, hạnh phúc đến người yêu thương, một hạnh phúc "Hạnh phúc". Đây sẽ là món quà tinh thần tuyệt vời dành tặng những người thân yêu của bạn.', 'hoa_bo_6.jpg', 1, '2016-07-27', 0),
(7, 'Bỡ ngỡ', 600000, 'Hoa hồng đỏ, Hoa baby trắng, Lá và hoa phụ', 'Với màu đỏ rực rỡ của hoa hồng, cùng với sự xinh xắn của hoa baby trắng tạo một sự hài hòa thanh nhã.Nếu ai đó được tặng một bó hoa "to đùng" thế này chắc hẳn rất bỡ ngỡ vì hạnh phúc', 'hoa_bo_7.jpg', 1, '2016-07-27', 0),
(8, 'Trọn vẹn', 550000, 'Hồng vàng, Cúc tím, Cúc mini, Hoa baby, Các loại hoa phụ khác', 'Bó hoa Trọn vẹn được thiết kế với tông màu vàng tím hài hòa như một lời an lành, hạnh phúc đến người, một hạnh phúc "trọn vẹn". Đây sẽ là món quà tinh thần tuyệt vời dành tặng những người thân yêu của bạn.', 'hoa_bo_8.jpg', 1, '2016-07-27', 0),
(9, 'Thẹn thùng', 400000, 'Hoa hồng tím, Hoa tú cầu, Hoa cẩm chướng, Búp sen, Lá và hoa phụ', 'Lãng mạn, ngọt ngào và nhẹ nhàng, mẫu hoa như chút tình thơ mộng, ngây thơ tuổi học trò. Được kết hợp từ hoa hồng tím và tú cầu mini, "Thẹn thùng" chắc chắn sẽ làm rung động bất cứ ai. Đây sẽ là món quà tuyệt vời dành tặng những người thân yêu của bạn.', 'hoa_bo_9.jpg', 1, '2016-06-07', 1),
(10, 'Tình bạn tươi đẹp', 400000, 'Hoa hồng, Hoa thạch thảo trắng, Chuỗi ngọc, Các loại lá', '"Tình bạn tươi đẹp" với tông cam xinh rực rỡ và cũng không kém phần dịu dàng. Hoa thích hợp để dành tặng những cô gái tràn đầy nữ tính bên cạnh bạn.', 'hoa_bo_10.jpg', 1, '2016-06-06', 1),
(11, 'Ngày mới', 350000, 'Hoa hồng vàng, Hoa hoàng anh, Hoa thạch thảo trắng, Hoa cúc trắng mini', '"Ngày Mới" gồm những hoa đang nở rộ khoe sắc thể hiện thông điệp "Hãy luôn vui vẻ và tràn đầy sức sống nhé!". Thích hợp để tặng bạn bè, người thân, sinh nhật...', 'hoa_bo_11.jpg', 1, '2016-07-27', 0),
(12, 'Sunshine', 500000, '20 đóa hoa hướng dương, Hoa sao trắng', '"Sunshine" - đúng như cái tên của nó, tỏa sáng và rực rỡ. Bó hoa là sự kết hợp của những bông hoa mặt trời,tuy đơn giản nhưng không kém phần nổi bật. Hãy tặng món quà này cho những người quan trọng của bạn và mang đến cho họ những ngày đầy nắng ấm nhé.', 'hoa_bo_12.jpg', 1, '2016-05-27', 1),
(13, 'Thanh khiết', 650000, 'Hoa hồng Ecuador màu xanh bơ, Thạch thảo trắng, Hoa cẩm chướng Nhật (Green Wicky), Lá phụ', 'Màu xanh lá chính là màu tự nhiên nên luôn gợi cho người ta cảm giác gần gũi, tự nhiên. Nó cho tượng trưng cho sự phát triển, hòa thuận, tươi mát màu mỡ. Màu xanh còn thể hiện sự hi vọng, chống chọi mọi khó khăn.', 'hoa_hop_1.jpg', 2, '2016-07-27', 0),
(14, 'Tuổi thanh xuân', 350000, 'Hoa hồng đỏ, Hoa hồng cam, Hoa phi yến, Hoa lá phụ', 'Được thiết kế từ hoa hồng, phi yến, mẫu hoa gợi lên nét ngọt ngào và dịu dàng của người con gái. "Tuổi thanh xuân" sẽ là món quà tuyệt vời cùng thông điệp an lành, hạnh phúc cho những người bạn gái của bạn', 'hoa_hop_2.jpg', 2, '2016-06-16', 1),
(15, 'Lúc mới yêu', 250000, 'Hoa hồng đỏ', 'Đơn giản, tinh tế và cổ điển là những gì có thể nhận xét về mẫu hoa này. Hoa hồng đỏ và hộp gỗ thông chính là sự kết hợp hoàn hảo, không bao giờ lỗi mốt. Nếu bạn đang tìm một món quà bất ngờ dành tặng cho những người thân yêu của mình, chọn ngay "Lúc mới yêu" nhé!', 'hoa_hop_3.jpg', 2, '2016-07-27', 0),
(16, 'Thầm mong', 250000, 'Hoa hồng kem, Hoa hồng đỏ, Hoa Salem tím', 'Nhẹ nhàng và tao nhã, "Thầm mong" như một điều ước cho những điều an lành, hạnh phúc và may mắn cho người nhận. ', 'hoa_hop_4.jpg', 2, '2016-06-03', 1),
(17, 'Đong đầy', 450000, 'Hoa hồng đỏ, Hoa hồng kem, Hoa tú cầu', 'Với sự kết hợp tinh tế của hoa hồng và tú cầu, hộp hoa mang thông điệp sum họp, đong đầy, vươn lên tầm cao mới, thích hợp để tạng dịp chúc mừng, tặng người thân..', 'hoa_hop_5.jpg', 2, '2016-07-27', 0),
(18, 'Đại dương xanh', 400000, 'Hoa hồng đỏ, Hoa tú cầu, Hoa cẩm chướng, Hoa cúc trắng, Các loại hoa phụ khác', 'Mang theo nguồn cảm hứng từ đại dương xanh thẳm, mẫu hoa "Đại dương xanh" là sự kết hợp độc đáo giữa tú cầu và hoa cẩm chướng Nhật xanh mướt cùng hoa hồng và cúc trắng tinh khôi. Tông màu xanh trắng này gợi lên sự thanh lịch, tươi mát và chắc chắn sẽ mang lại nhiều niềm vui cho người nhận.', 'hoa_hop_6.jpg', 2, '2016-07-27', 0),
(19, 'Mùa yêu đầu', 250000, 'Hoa hồng đỏ, Hoa hồng da', 'Hộp hoa với sự kết hợp khéo léo của hai màu hoa hồng mang đến hình ảnh của một bản tình ca lãng mạn, ngọt ngào. Mẫu hoa như món quà bất ngờ cùng thông điệp "Anh nhớ em rất nhiều".', 'hoa_hop_7.jpg', 2, '2016-07-27', 0),
(20, 'May mắn', 400000, 'Sen đá, Hoa hướng dương, Hoa hồng, Các loại hoa phụ', 'Được thiết kế với tông kết hợp, mẫu hoa gồm hoa hướng dương và sen đá mang đến thông điệp về một tình yêu bền vững, trọn đời. Ngoài ra còn có ý nghĩa mang lại tài lộc, may mắn cho gia đình. Đây sẽ là món quà tuyệt vời dành tặng những người thân yêu của bạn.', 'hoa_hop_8.jpg', 2, '2016-07-27', 0),
(21, 'Giọt nắng hồng', 300000, 'Hoa hồng, Hoa phi yến, Cẩm chướng Nhật (Green Wicky), Các loại hoa phụ', 'Nhẹ nhàng và ngọt ngào như một giọt nắng ban mai, mẫu hoa mang đến một cảm giác yên bình, đáng yêu và dịu mắt đến không ngờ. Thiết kế đơn giản chỉ với 2 loại hoa nhưng "Giọt nắng hồng" vẫn nổi bật và dễ dàng chiều lòng những người yêu hoa.', 'hoa_hop_9.jpg', 2, '2016-06-19', 1),
(22, 'Thầm mong', 350000, 'Hoa hồng các loại, Hoa baby trắng, Lá phụ', 'Nhẹ nhàng và tao nhã, "Thầm mong" như một điều ước cho những điều an lành, hạnh phúc và may mắn cho người nhận. ', 'hoa_hop_10.jpg', 2, '2016-07-27', 0),
(23, 'Giấc mơ hoa', 400000, 'Hoa hồng, Hoa ly mini, Hoa cúc tím, Hoa cúc Calimero, Hoa phụ khác', 'Với sự kết hợp tinh tế nhiều loại hoa mang sắc màu thanh nhã mang lại một cảm gác bình yên. "Giấc mơ hoa" như một điều ước cho những điều an lành, hạnh phúc và may mắn cho người nhận. ', 'hoa_hop_11.jpg', 2, '2016-07-27', 0),
(24, 'Season''s love', 380000, 'Hoa hồng, Hoa tú cầu, Hoa thạch thảo tím, Hoa cúc tím', 'Hộp hoa "Season''s love" được thiết kế với hoa hồng đỏ chủ đạo và mang màu sắc tươi sáng, ngọt ngào. Đúng như tên gọi, mẫu hoa tựa như lời yêu thương gửi đến người thân, gia đình và bạn bè. Khởi đầu một mùa xuân mới với thông điệp yêu thương này bạn nhé!', 'hoa_hop_12.jpg', 2, '2016-07-27', 0),
(25, 'Hương mùa xuân', 550000, 'Hoa phi yến, Hoa cẩm chướng, Hoa thược dược', 'Giỏ hoa mang một vẻ đẹp rạng rỡ, tươi mới qua sự kết hợp đa dạng của các loại hoa như hoa phi yến, cẩm chướng, cúc hồng. Sự sắp xếp tự nhiên và hài hòa của giỏ hoa mang lại cảm giác như mùa xuân đã về đến. Hãy để "Hương mùa xuân" thổi một làn gió mới đến cho những người thân yêu quanh bạn nhé.', 'hoa_gio_1.jpg', 3, '2016-07-27', 0),
(26, 'Chốn mộng mơ', 400000, 'Hoa hồng leo, Giỏ tre', 'Người ấy của bạn chắc chắn sẽ không khỏi động lòng khi nhìn thấy giỏ hoa xinh đẹp này trước cửa nhà! Được thiết kế trên nền hoa hồng da cùng hồng đỏ rực rỡ, chắc hẳn đây là cách tuyệt vời nhất để bày tỏ thành ý của bạn đến người đặc biệt rồ', 'hoa_gio_2.jpg', 3, '2016-07-27', 0),
(27, 'Sáng tinh mơ', 450000, 'Hoa hồng trắng, Hoa tú cầu', 'Lẵng hoa Sáng Tinh Mơ với tổng màu trắng tinh khiết, xen lẫn hoa baby. Một món quà nhẹ nhàng, lãng mạn và ngọt ngào.', 'hoa_gio_3.jpg', 3, '2016-07-27', 0),
(28, 'Qua miền lãng du', 450000, 'Hoa hồng, Hoa cẩm chướng, Hoa cúc mini, Các loại hoa lá phụ khác', 'Rong ruổi giữa đất trời, tìm đến những vùng đất mới, khám phá vạn vật chắc hẳn là mơ ước của rất nhiều người. “Qua miền lãng du” là một mẫu hoa gồm nhiều loại hoa khác nhau, lối sắp xếp tạo nên một tổng thể đa dạng nhưng cũng thật tự nhiên. Có lẽ vì thế, “Qua miền lãng du” chính là món quà dành tặng ý nghĩa dành cho những tâm hồn yêu tự do, tha thiết được tung hoàng khắp chốn nhân gian. ', 'hoa_gio_4.jpg', 3, '2016-07-27', 0),
(29, 'Classic', 500000, '50 đóa hoa hồng đỏ, Hoa baby', 'Giỏ hoa The Classic, hay còn gọi là Cổ điển, được thiết kế từ 50 bông hồng đỏ kết hợp hoa baby trong giỏ mây sang trọng đem đến một vẻ đẹp của sự đơn giản, hoải cổ và quý phái.', 'hoa_gio_5.jpg', 3, '2016-07-27', 0),
(30, 'Tinh tế', 550000, 'Hoa hồng đỏ, Hoa ly, Hoa baby', 'Sự kết hợp của hoa hồng, hoa ly với một chút nhẹ nhàng của hoa baby rất hài hoa tinh tế. Giỏ hoa thích hợp tặng thầy cô, người thân, các dịp lễ..', 'hoa_gio_6.jpg', 3, '2016-07-27', 0),
(31, 'Nhiệt huyết 1', 800000, 'Hoa địa lan, Hoa hồng môn, Hoa cúc, Hoa hồng, Hoa lan mokara, Hoa cát tường, Các loại hoa phụ', 'Giỏ hoa "Nhiệt huyết" được thiết kế với nhiều màu sắc. Như một lời chúc ngày mới tràn đầy năng lượng và sáng tạo. "Nhiệt huyết" khoác thêm trên mình một hi vọng về sự thành công. Hãy dành tặng "Nhiệt huyết 2" cho bạn bè, người thân, đồng nghiệp, đối tác ... ', 'hoa_gio_7.jpg', 3, '2016-06-15', 1),
(32, 'Nhiệt huyết 2', 850000, 'Hoa ly, Hoa lan hồ điệp, Hoa địa lan, Hoa hồng môn, Hoa tú cầu, Hoa cát tường', 'Giỏ hoa "Nhiệt huyết" được thiết kế với nhiều màu sắc. Như một lời chúc ngày mới tràn đầy năng lượng và sáng tạo. "Nhiệt huyết" khoác thêm trên mình một hi vọng về sự thành công. Hãy dành tặng "Nhiệt huyết 2" cho bạn bè, người thân, đồng nghiệp, đối tác ... ', 'hoa_gio_8.jpg', 3, '2016-07-27', 0),
(33, 'Nắng ban mai', 450000, 'Hoa cúc đại, Hoa đồng tiền, Hoa cúc mini', 'Như tia nắng ban mai mai rọi vào phòng lúc sáng sớm, giỏ hoa mang nét đẹp rất duyên, rất ngọt ngào. "Nắng ban mai" thích hợp để dành tăng sinh nhật, kỉ niệm.. cho những cô gái dịu dàng và vẫn thường mơ mộng.', 'hoa_gio_9.jpg', 3, '2016-07-27', 0),
(34, 'My Dear', 500000, 'Hoa cát tường nhiều màu, Hoa tú cầu', 'My Dear là giỏ hoa cát tường nhiều màu kết hợp với hoa tú cầu nhẹ nhàng, tươi mát. "My dear" là mẫu hoa thích hợp để bạn gửi đến mẹ, chị gái bởi vẻ đẹp mộc mạc, bình dị.', 'hoa_gio_10.jpg', 3, '2016-07-27', 0),
(35, 'Đón xuân', 550000, 'Hoa hồng, Hoa cúc,Hoa thạch thảo tím,Hoa cẩm chướng, Các loại hoa phụ khác', 'Giỏ hoa với nhiều loại hoa có tông màu tươi sáng như thể "Mùa xuân đến trăm hoa đua nhau khoe sắc". "Đón xuân" mang đến sự vui tươi, sôi nổi... đó chính là nụ cười và có lẽ chỉ có nụ cười mới mang nhiều vẻ đẹp như vậy. Thích hợp tặng sinh nhật, bạn bè, người yêu...', 'hoa_gio_11.jpg', 3, '2016-07-27', 0),
(36, 'Đắm say', 600000, 'Hoa hồng đỏ, Hoa hồng trắng, Hoa salem trắng', 'Sắc đỏ nồng nàn và quyến rũ của những bông hồng sasa này chắc chắn sẽ đem đến cho người nhận cảm giác về một tình yêu đầy lãng mạn, ngọt ngào. Còn chần chờ gì nữa mà không cùng "Đắm say" thể hiện tình yêu của bạn. Hãy chọn "Đắm say" trong những dịp như sinh nhật, chúc mừng, giáng sinh, cầu hôn hay thậm chí chẳng vì một ngày đặc biệt nào cả. Chỉ đơn giản là thể hiện tình yêu mà thôi.', 'hoa_gio_12.jpg', 3, '2016-06-12', 1),
(37, 'Luxury queen', 1000000, 'Hoa lan hồ điệp trắng, hồng', 'Sự kết hợp giữa những cành lan hồ điệp sẽ mang đến cho cô dâu nét đẹp dịu dàng mà quý phái.', 'hoa_cuoi_1.jpg', 6, '2016-06-08', 1),
(38, 'Love Paradise', 450000, 'Hoa hồng trắng, Hoa chuỗi ngọc', 'Không quá rực rỡ nhưng cũng đủ để làm cô dâu trở nên nổi bật và rạng rỡ biết bao. Sắc trắng tinh khôi của hoa hồng trắng kết hợp với màu đỏ của chuỗi ngọc như thể hiện một tình yêu đầy lãng mạn, tinh khôi những và cũng tràn đầy nồng nhiệt.', 'hoa_cuoi_2.jpg', 6, '2016-07-27', 0),
(39, 'Dáng ngọc', 450000, 'Hoa đồng tiền, Hoa baby, Hoa cẩm chướng', '"Dáng ngọc" dành cho những cô dâu thích sự nhẹ nhàng trong sáng nhưng tràn vị ngọt ngào trong tình yêu', 'hoa_cuoi_3.jpg', 6, '2016-06-09', 1),
(40, 'Love is color', 500000, 'Hoa hồng nhiều màu', 'Bó hoa cưới kết hợp nhiều màu sắc của hoa hồng theo gam màu pastel làm cho cô dâu thêm phần sang trọng và rạng rỡ trong ngày cưới.', 'hoa_cuoi_4.jpg', 6, '2016-07-27', 0),
(41, 'Fresh girl', 450000, 'Hoa hoàng anh, Hoa hồng, Hoa địa lan', 'Bó hoa mang đến vẻ đẹp trong lành thuần khiết như chính tên gọi của nó. "Fresh girl" sẽ mang đến cảm giác tự tin cho cô dâu trong ngày trọng đại.', 'hoa_cuoi_5.jpg', 6, '2016-07-27', 0),
(42, 'Purple Tulip', 500000, '30 đóa hoa Tulip tím', 'Bó hoa tuy đơn giản nhưng khoác lên mình sự sang trọng quý phái. Bó hoa cưới này chắc chắn là sự lựa chọn tuyệt vời cho các cô dâu nhân ngày trọng đại.', 'hoa_cuoi_6.jpg', 6, '2016-07-27', 0),
(43, 'Tinh khôi', 600000, 'Hoa hồng trắng, Hoa hồng môn trắng, Hoa cẩm chướng Nhật (Green Wicky)', '"Tinh khôi" là mẫu hoa độc đáo, khác lạ dành cho cô dâu. Với tông màu trắng thuần khiết sẽ làm cho cô dâu y hệt như nàng công chúa bước ra từ cổ tích bên chàng hoàng tử ngọt ngào, say đắm.', 'hoa_cuoi_7.jpg', 6, '2016-07-27', 0),
(44, 'Đẳng cấp', 700000, 'Hoa mẫu đơn nhiều màu', 'Sắc rực rỡ của hoa mẫu đơn chắc chắn làm cho cô dâu thêm phần nổi bật trong ngày cưới. Hoa mẫu đơn mang sức hấp dẫn nồng nàn, thể hiện vẻ đẹp, sức quyến rũ của tình yêu. Ngoài ra bó hoa mẫu đơn còn làm cho cô dâu trở nên đẳng cấp và sang trọng.', 'hoa_cuoi_8.jpg', 6, '2016-07-27', 0),
(45, 'Fresh love', 700000, 'Hoa hồng trắng, Hoa hồng xanh, Sen đá, Các loại hoa lá phụ khác', 'Một bó hoa cưới thể hiện chính tình yêu ngọt ngào nhưng cũng đầy màu sắc của những cung bậc tình cảm giữa cô dâu- chú rể. Và cả niềm hi vọng về một tương lai phía trước đầy hạnh phúc.', 'hoa_cuoi_9.jpg', 6, '2016-07-27', 0),
(46, 'My love', 600000, 'Hoa hồng, Hoa lan, Các loại hoa phụ', 'Bó hoa cưới đơn giản nhưng cũng không kém phần sang trọng với tông màu trắng- tím. Như chính tình yêu lãng mạn và đầy thủy chung của cô dâu - chú rể.', 'hoa_cuoi_10.jpg', 6, '2016-07-27', 0),
(47, 'I''m your', 600000, 'Hoa hồng, Hoa mẫu đơn, Hoa baby', '"I''m your" là mẫu hoa độc đáo, khác lạ dành cho cô dâu. Với thông điệp đơn giản, chân thành "Em luôn đặc biệt, em là chính em và em là của anh", "I''m your" dành cho những bạn yêu thích sự mới lạ, độc đáo nhưng vẫn đơn giản và đẹp.', 'hoa_cuoi_11.jpg', 6, '2016-07-27', 0),
(48, 'Lavender - Rose', 650000, 'Hoa lavender, Hoa hồng, Các loại hoa lá phụ', 'Bó hoa cưới mang sắc tím như chính tình yêu lãng mạn, thủy chung của cô dâu chú rể. Cùng với hoa lavender với vẻ đẹp hoang sơ mới mẻ, mang đến hương thơm nhẹ nhàng phảng phất tạo một cảm giác khó quên.', 'hoa_cuoi_12.jpg', 6, '2016-07-27', 0),
(49, 'Giã biệt', 1200000, 'Hoa ly trắng, Hoa cúc trắng, Hoa hồng, Hoa cẩm chướng Nhật (Green Wicky)', 'Trong cuộc sống chúng ta mất bất cứ thứ gì chúng ta cũng có thể có lại được , nhưng khi chúng ta mất vĩnh viễn một người thân hay một người bạn chúng ta không bao giờ tìm lại được. Với vòng hoa chia buồn Giã Biệt được kết từ hoa Cúc, hoa ly và các phụ liệu khác. Chúng tôi sẽ thay mặt bạn đưa tiễn họ và chia sẽ cùng gia đình họ.', 'hoa_chia_buon_1.jpg', 4, '2016-05-31', 1),
(50, 'Thương nhớ', 1100000, 'Hoa ly, Hoa cúc nhiều màu, Hoa tú cầu xanh, Các loại hoa lá phụ khác', 'Bạn bè, người thân ra đi luôn để lại nỗi buồn và nhung nhớ khôn nguôi trong tâm trí mỗi người. Trong giây phút chia cách đau thương, từng kỷ niệm được hồi tưởng như một cuốn phim chiếu chậm, tràn ngập những niềm vui, nỗi buồn cũng như tiếc nuối. Kệ hoa “Thương nhớ” chất chứa nỗi niềm riêng của người ở lại giành cho người đã khuất, những nỗi niềm giờ đây đã không biết tỏ cùng ai.', 'hoa_chia_buon_2.jpg', 4, '2016-07-27', 0),
(51, 'Miền an lạc', 1200000, 'Hoa ly, Hoa cúc tím, Hoa cúc trắng, Hoa tú cầu', 'Rũ bỏ những muộn phiền, trần ai của cuộc sống, để lòng thanh thản tiến vào hư vô là ý nghĩa của kệ hoa chia buồn “Miền An Lạc”. “Miền An Lạc” thể hiện lòng thành kính của những người ở lại đối với người đã ra đi, nguyện cầu ai rồi cũng đến được bến bờ bình yên.', 'hoa_chia_buon_3.jpg', 4, '2016-07-27', 0),
(52, 'Thành kính phân ưu', 900000, 'Hoa cúc trắng, Hoa ly trắng, Hoa tú cầu, Hoa mini trắng, Các loại lá phụ', 'Thành Kính Phân Ưu 1 gồm có hoa Cúc Trắng, hoa Ly Trắng, môn xanh và cẩm tú cầu. Thích hợp để tặng chia buồn.', 'hoa_chia_buon_4.jpg', 4, '2016-07-27', 0),
(53, 'Hạ trắng', 950000, 'Hoa ly trắng, Hoa hồng môn, Hoa cúc trắng, Hoa hồng, Các loại lá phụ', 'Trong cuộc sống chúng ta mất bất cứ thứ gì chúng ta cũng có thể có lại được , nhưng khi chúng ta mất vĩnh viễn một người thân hay một người bạn chúng ta không bao giờ tìm lại được. Với vòng hoa chia buồn "Hạ trắng" chúng tôi sẽ thay mặt bạn đưa tiễn họ và chia sẻ cùng gia đình họ.', 'hoa_chia_buon_5.jpg', 4, '2016-07-27', 0),
(54, 'Nốt trầm', 1100000, 'Hoa ly trắng, Hoa cúc trắng, lan hồ điệp trắng, Hoa cúc tím', 'Có người từng ví mỗi cuộc đời tựa như một bản nhạc với đầy đủ cung bậc thăng trầm. Ứng với những khoảnh khắc tươi vui là những giai điệu rộn ràng và ngược lại, đối với những đớn đau, mất mát thì người ta chỉ có thể cảm nhận sự buồn bã, trầm mặc. Kệ hoa “Nốt trầm” gửi gắm niềm tiếc thương của người ở lại đối với người đã đi xa, cảm tạ vì đã xuất hiện và là một phần cuộc sống của nhau, cùng nhau tạo nên bản nhạc ý nghĩa của cuộc đời.', 'hoa_chia_buon_6.jpg', 4, '2016-07-27', 0),
(55, 'Tôn kính', 650000, 'Hoa lan tím, Hoa ly, Các loại lá phụ khác ', 'Trong cuộc sống chúng ta mất bất cứ thứ gì chúng ta cũng có thể có lại được, nhưng khi chúng ta mất vĩnh viễn một người thân hay một người bạn chúng ta không bao giờ tìm lại được. Với vòng hoa chia buồn Tôn Kính được kết từ hoa Ly Hồng, hoa Lan Tím và các phụ liệu khác chúng tôi sẽ thay mặt bạn đưa tiễn họ và chia sẻ cùng gia đình họ.', 'hoa_chia_buon_7.jpg', 4, '2016-07-27', 0),
(56, 'Luyến tiếc', 800000, 'Hoa hồng môn, Hoa ly trắng, Hoa cúc trắng, Hoa hồng xanh, Hoa tú cầu, Các loại hoa lá phụ khác', 'Trong cuộc sống chúng ta mất bất cứ thứ gì chúng ta cũng có thể có lại được, nhưng khi chúng ta mất vĩnh viễn một người thân hay một người bạn chúng ta không bao giờ tìm lại được. Với vòng hoa chia buồn Luyến Tiếc được kết từ hoa ly trắng, cúc trắng, hồng môn xanh và các phụ liệu khác. chúng tôi sẽ thay mặt bạn đưa tiễn họ và chia sẽ cùng gia đình họ.', 'hoa_chia_buon_8.jpg', 4, '2016-07-27', 0),
(57, 'Cõi mơ', 1000000, 'Hoa hồng vàng, Hoa hồng trắng, Hoa cúc tím, Hoa hồng tím, Các loại hoa lá phụ khác', 'Trong cuộc sống chúng ta mất bất cứ thứ gì chúng ta cũng có thể có lại được , nhưng khi chúng ta mất vĩnh viễn một người thân hay một người bạn chúng ta không bao giờ tìm lại được. Với vòng hoa chia buồn Cõi Mơ được kết từ hoa Hồng, hoa Cúc nhiều màu, và các phụ liệu khác chúng tôi sẽ thay mặt bạn đưa tiễn họ và chia sẻ cùng gia đình họ.', 'hoa_chia_buon_9.jpg', 4, '2016-06-17', 1),
(58, 'Vĩnh biệt', 1100000, 'Hoa lan hồ điệp trắng, Hoa hồng trắng, Hoa cúc trắng', 'Trong cuộc sống chúng ta mất bất cứ thứ gì chúng ta cũng có thể có lại được , nhưng khi chúng ta mất vĩnh viễn một người thân hay một người bạn chúng ta không bao giờ tìm lại được. Với vòng hoa chia buồn Vĩnh biệt 1 được kết từ hoa Cúc Trắng, Lan hồ điệp Trắng, Hồng Trắng và các phụ liệu khác chúng tôi sẽ thay mặt bạn đưa tiễn họ và chia sẻ cùng gia đình họ.', 'hoa_chia_buon_10.jpg', 4, '2016-07-27', 0),
(59, 'Hạc trắng', 700000, 'Hoa hồng trắng, Hoa lan trắng, Các loại lá phụ', 'Trong cuộc sống chúng ta mất bất cứ thứ gì chúng ta cũng có thể có lại được, nhưng khi chúng ta mất vĩnh viễn một người thân hay một người bạn chúng ta không bao giờ tìm lại được. Với kệ hoa chia buồn Hạc Trắng được kết từ hoa Lan, Hồng trắng trên kệ gỗ và các phụ liệu khác chúng tôi sẽ thay mặt bạn đưa tiễn họ và chia sẻ cùng gia đình họ.', 'hoa_chia_buon_11.jpg', 4, '2016-07-27', 0),
(60, 'Vĩnh cửu', 750000, 'Hoa lan trắng, Hoa lan tím, Các loại lá phụ', 'Trong cuộc sống chúng ta mất bất cứ thứ gì chúng ta cũng có thể có lại được, nhưng khi chúng ta mất vĩnh viễn một người thân hay một người bạn chúng ta không bao giờ tìm lại được. Với kệ hoa chia buồn Vĩnh cửu được kết từ hoa lan trắng, lan tím, và các phụ liệu khác chúng tôi sẽ thay mặt bạn đưa tiễn họ và chia sẻ cùng gia đình họ.', 'hoa_chia_buon_12.jpg', 4, '2016-07-27', 0),
(61, 'Bách chiến bách thắng', 2000000, 'Hoa địa lan, Hoa lan hồ điệp, Hoa lan vũ nữ, Các loại hoa lá phụ khác', 'Kệ hoa khai trương kết hợp hài hòa giữa các loại hoa lan với màu sắc thanh lịch. Kệ hoa mang ý nghĩa tốt đẹp bới sắc màu ấy là biểu tượng của thành công, hợp tác thuận lợi. Thích hợp tặng dịp khai trương công ty, cửa hàng, văn phòng..', 'hoa_chuc_mung_1.jpg', 4, '2016-07-27', 0),
(62, 'Phát triển bền vững', 2100000, 'Hoa tú cầu, Hoa hồng, Hoa cúc mini, Hoa thủy tiên Nhật, Các loại hoa phụ khác', 'Kệ hoa kết hợp nhiều màu sắc rất bắt mắt và không kém phần sang trọng. Kệ hoa là lời chúc mừng tốt đẹp nhất gửi đến đối tác, khách hàng, bạn bè nhân ngày kỉ niệm thành lập, khai trương công ti, văn phòng, nhà hàng...', 'hoa_chuc_mung_2.jpg', 4, '2016-07-27', 0),
(63, 'Thịnh vượng', 1300000, 'Hoa lan mokara 3 tầng, Các loại lá phụ', 'Chọn tông vàng làm màu sắc chủ đạo, kệ hoa sử dụng hoa lan mokara mang đến vẻ đẹp thanh nhã. Màu sắc ôn hòa của kệ hoa kết hợp thiết kế 3 tầng sẽ khiến không gian của bạn thêm phần sang trọng. Kệ hoa thích hợp tặng bạn bè, khách hàng, đối tác nhân dịp khai trương', 'hoa_chuc_mung_3.jpg', 4, '2016-05-30', 1),
(64, 'Phát tài - Phát lộc', 800000, 'Hoa hồng môn đỏ, Hoa ly, Hoa lan mokara, Hoa hồng đỏ, Hoa thiên điểu, Các loại lá phụ', 'Những đóa hoa tươi màu đỏ bắt mắt được cắm theo phong cách sóng đôi sẽ trở thành món quà nổi bật của bạn. Lẵng hoa được thiết kế với hoa hồng đỏ, hồng môn đỏ kết hợp hoa ly, hoa lan vàng biểu trưng cho sự phát tài, phát lộc. Hoa dành cho khai trương nhà hàng, công ti với thông điệp chúc đối tác ngày càng vươn xa.', 'hoa_chuc_mung_4.jpg', 4, '2016-07-27', 0),
(65, 'Niềm tin', 600000, 'Hoa thiên điểu, Hoa hồng, Hoa tú cầu, Hoa hoàng anh, Các loại lá phụ', 'Trong những dịp khai trương, chúc mừng, giỏ hoa này sẽ là lựa chọn dành cho bạn. Mang vẻ đẹp tươi sáng và nét lịch sự, giỏ hoa là sự kết hợp giữa hoa tú cầu, hoa hồng xanh và hoa thiên điểu.', 'hoa_binh_1.jpg', 5, '2016-06-10', 1),
(66, 'Rạng rỡ', 650000, 'Hoa hồng vàng, Hoa hướng dương, Hoa baby, Hoa cẩm chướng Nhật, Các loại lá phụ', '"Rạng rỡ" là một món quà thích hợp tặng người thân, những người mà bạn quí trọng. Bình hoa là sự kết hợp những bông hoa hướng dương vàng rực, hoa hồng duyên dáng trên nền hoa baby mỏng manh. Bình hoa thể hiện sự trân trọng, niềm tự hào mà bạn muốn gửi tới người nhận.', 'hoa_binh_2.jpg', 5, '2016-06-03', 1),
(67, 'Gắn kết yêu thương', 650000, 'Hoa hồng da, Hoa hồng đỏ, Hoa tú cầu, Hoa baby', 'Gắn Kết Yêu Thương gồm hoa hoa hồng nhiều màu kết hơp cùng các loại lá phụ cao cấp. Những sắc màu tươi tắn, trẻ trung, đáng yêu và đầy cá tính của hai trái tim trẻ nguyện sánh bước và gắn kết cùng nhau trên con đường đời. Thích hợp để tặng chúc sức khỏe, kỉ niệm,..', 'hoa_binh_3.jpg', 5, '2016-06-10', 1),
(68, 'Dịu dàng', 680000, 'Hoa hồng, Hoa cát tường tím, Hoa cúc tím, Hoa baby, Các loại hoa lá phụ', 'Được thiết kế với tông màu hồng tím, bình hoa Dịu dàng mang lại một vẻ đẹp dịu dàng, ngọt ngào và không kém phần lãng mạn. Những hoa cát tường tím điểm xuyết trên nền hoa hồng kết hợp đồng cúc, baby. Một bình hoa thế này sẽ là món quà tuyệt vời để chúc người luôn hạnh phúc và ngập tràn tình yêu', 'hoa_binh_4.jpg', 5, '2016-06-05', 1),
(69, 'Sum họp', 700000, 'Hoa hồng đỏ, Hoa cát tường tím, Hoa sen đá, Các loai hoa phụ khác', '"Một chiều thênh thang,về nơi con sóng tràn Nơi đây bình yên một màu xanh gió trong lành...". Bình hoa như nhắn gửi yêu thương đến hạnh phúc gia đình, sự sum họp quây quần bên nhau.', 'hoa_binh_5.jpg', 5, '2016-05-28', 1),
(70, 'Tia nắng ban mai', 450000, 'Hoa thiên điểu, Hoa lan mokara, Hoa hướng dương, Hoa hồng, Hoa cúc xanh', 'Rực rỡ và ấm áp như những tia nắng ban mai, mẫu hoa được thiết kế theo tông màu vàng này chắc chắn sẽ mang đến cho người nhận niềm hạnh phúc và may mắn. Mẫu hoa thích hợp tặng các dịp chúc mừng, cảm ơn v.v...', 'hoa_binh_6.jpg', 5, '2016-06-08', 1),
(71, 'Tình yêu ngọt ngào', 750000, 'Hoa hồng, Hoa tú cầu hồng, Hoa cát tường, Các loại hoa lá phụ khác', '"Tình yêu ngọt ngào" là sự kết hợp dễ thương của các loại hoa màu hồng và bình sứ cao cấp. Những đóa hoa đang nở rộ khoe sắc tươi tắn chứa đựng một tình yêu mãnh liệt, nồng cháy của một trái tim sôi nổi. Thích hợp để tặng người yêu, kỉ niệm, sinh nhật,...', 'hoa_binh_7.jpg', 5, '2016-07-27', 0),
(72, 'An nhiên', 400000, 'Hoa hồng trắng, Hoa tú cầu, Hoa hồng da, Lá khuynh diệp', 'Sắc trắng kết hợp cùng một chút màu xanh mát rượi của tú cầu luôn mang lại một cảm giác bình yên, trong trẻo đến lạ. "An nhiên" sẽ mang đến cho người nhận lời chúc an lành, bình yên trong tâm hồn và nhiều niềm vui trong cuộc sống.', 'hoa_binh_8.jpg', 5, '2016-06-06', 1),
(73, 'Thắng lợi', 800000, 'Hoa thiên điểu, Hoa hướng dương, Hoa lan vũ nữ, Hoa phi yến, Các loại lá', 'Kệ hoa được kết hợp từ nhiều loại hoa với tông màu vàng chủ đạo. Màu sắc tươi tắn sẽ là kệ hoa nổi bật trong ngày khai trương văn phòng của bạn.', 'hoa_binh_9.jpg', 5, '2016-07-27', 0),
(74, 'Sắc vàng', 800000, 'Hoa lan vữ nữ, Hoa hồng vàng,Các loại hoa lá phụ', 'Bình hoa với tông màu vàng là chủ đạo, mang đến cảm giác tươi mới cho người nhận. Ngoài ra với sự kết hợp tinh tế của các loại hoa làm cho "Sắc vàng" mang vẻ đẹp sang trọng. Thích hợp để trưng bày, hoặc giành tặng cho bạn bè, người thân, đối tác…', 'hoa_binh_10.jpg', 5, '2016-07-27', 0),
(75, 'Give love', 380000, 'Hoa hồng, Hoa cúc tím, Hoa baby', 'Chọn tông hồng - trắng làm màu sắc chủ đạo, “Give love” tạo nên một tổng thể nhẹ nhàng, khơi gợi cảm giác thư thái, vui tươi khi ngắm nhìn. Tên gọi “Give love” gửi gắm thông điệp: Tình yêu vốn dĩ không phải là điều ta nhận đuợc mà là những gì ta cho đi. Hãy chia sẻ yêu thương khi ta còn có thể vì chính tình yêu sẽ làm cuộc sống thêm tươi vui, hạnh phúc! Tách hoa “Give love” phù hợp tặng cho bạn bè, người thân và cả người ấy. Đặc biệt, với kích thước nhỏ gọn, “Give love” phù hợp trưng bày ở nhiều không gian khác nhau.', 'hoa_binh_11.jpg', 5, '2016-06-04', 1),
(76, 'Ngày cuối tuần', 450000, 'Hoa hồng, Hoa tú cầu, Hoa hoàng anh', 'Sau một tuần làm việc mệt nhoài, chúng ta đều có quyền tự thưởng cho mình những ngày nghỉ để phục hồi năng lượng. Những ngày cuối tuần có thể trôi qua nhẹ nhàng và tùy ý, miễn sao chúng khiến bản thân cảm thấy thoải mái, dễ chịu. Dựa trên ý tưởng đó, “Ngày cuối tuần” ra đời với sự tập hợp của nhiều loại hoa có điểm chung là dịu nhẹ, tinh khiết. Hy vọng rằng món quà này sẽ đem đến cho khách hàng “một làn gió mát”, giảm bớt áp lực giữa cuộc sống bộn bề lo toan, tiếp sức cho những ngày dài phía trước.', 'hoa_binh_12.jpg', 5, '2016-06-16', 1);

-- --------------------------------------------------------

--
-- Table structure for table `khach_hang`
--

CREATE TABLE IF NOT EXISTS `khach_hang` (
  `ma_khach_hang` int(11) NOT NULL AUTO_INCREMENT,
  `ten_khach_hang` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `phai` tinyint(1) NOT NULL DEFAULT '0',
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `dia_chi` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `dien_thoai` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `ghi_chu` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`ma_khach_hang`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=18 ;

--
-- Dumping data for table `khach_hang`
--

INSERT INTO `khach_hang` (`ma_khach_hang`, `ten_khach_hang`, `phai`, `email`, `dia_chi`, `dien_thoai`, `ghi_chu`) VALUES
(12, 'Nguyễn Thị Thảo', 0, 'thao@gmail.com', 'đường số 27 Bình Phú Quận 6', '0123456799', 'Sinh Nhật'),
(13, 'Trần Thu Trang', 0, 'trang@yahoo.com', 'Chung cư An Phú Quận 12', '0123456799', 'Đám cưới'),
(14, 'Đỗ Lâm Thiên', 1, 'thien@mail.com', '357 Lê Hồng Phong, Q.10', '8331056', ''),
(15, 'Khuất Thùy Phương', 0, 'kpt@edu.vn', 'Nguyễn Oanh, Gò Vấp', '9874125', ''),
(16, 'Lê Thành Tâm', 1, 'lethanhtam@gmail.com', 'Số 2 Nguyễn Trãi Quận 5', '0123456789', 'Vui lòng gửi hàng đúng ngày'),
(17, 'Mai Thu Thảo', 0, 'thao@gmail.com', 'Nguyễn Văn Cừ', '0235698758', '');

-- --------------------------------------------------------

--
-- Table structure for table `loai_hoa`
--

CREATE TABLE IF NOT EXISTS `loai_hoa` (
  `MaLoai` int(11) NOT NULL AUTO_INCREMENT,
  `TenLoai` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`MaLoai`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Dumping data for table `loai_hoa`
--

INSERT INTO `loai_hoa` (`MaLoai`, `TenLoai`) VALUES
(1, 'Hoa bó'),
(2, 'Hoa hộp'),
(3, 'Hoa cắm giỏ'),
(4, 'Hoa đại sảnh'),
(5, 'Hoa cắm bình'),
(6, 'Hoa cầm tay');

-- --------------------------------------------------------

--
-- Table structure for table `loai_tin`
--

CREATE TABLE IF NOT EXISTS `loai_tin` (
  `MaLoaiTin` int(11) NOT NULL AUTO_INCREMENT,
  `TenLoaiTin` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`MaLoaiTin`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `loai_tin`
--

INSERT INTO `loai_tin` (`MaLoaiTin`, `TenLoaiTin`) VALUES
(1, 'Tin tức mới'),
(2, 'Tin công ty'),
(3, 'Tin khuyến mãi');

-- --------------------------------------------------------

--
-- Table structure for table `tin_tuc`
--

CREATE TABLE IF NOT EXISTS `tin_tuc` (
  `MaTT` int(11) NOT NULL AUTO_INCREMENT,
  `TenTT` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `NoiDung` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `Hinh` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `ThoiGian` date NOT NULL,
  `MaLoaiTin` int(11) NOT NULL,
  PRIMARY KEY (`MaTT`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

--
-- Dumping data for table `tin_tuc`
--

INSERT INTO `tin_tuc` (`MaTT`, `TenTT`, `NoiDung`, `Hinh`, `ThoiGian`, `MaLoaiTin`) VALUES
(1, 'Hoa tươi cho ngày mới năng động', 'Giữa cuộc sống bộn bề và tấp nập này, có bao giờ bạn dừng lại suy nghĩ cho bản thân hay chỉ lao đầu vào công việc và những lo toan cuộc sống? Đừng để thời gian lấy đi những giá trị của cuộc sống, hãy dừng lại suy ngẫm và tạo niềm vui riêng cho mình.\r\nĐôi khi công việc và tình cảm khiến bạn thấy chán nản và thất vọng, đó cũng là lúc bạn nên dành thời gian suy nghĩ và tìm cách cuốn mọi chuyện ra khỏi đầu óc, tìm cách cân bằng mọi thứ xung quanh mình.|tin_tuc_1.jpg|Những lúc thế này bạn có nghĩ đến một bó hoa tươi cho riêng mình?\r\nBạn có biết màu sắc của hoa khiến ta thêm vui vẻ, hương hoa xoa dịu đi nỗi buồn, và nhìn những cánh hoa khiến ta vơi đi nỗi buồn không? Hoa không chỉ là một thực vật vô tri vô giác, nó cũng có cảm xúc và tâm trạng, ngôn ngữ của riêng nó.Vậy tại sao bạn không làm bạn với chúng?\r\nNhững lúc chúng ta có tâm sự nhưng không biết bày tỏ cùng ai, thì hoa chính là người bạn giúp ta trút bỏ những ưu phiền. Ngắm nhìn những cánh hoa tươi đẹp, hương thơm thoang thoảng, lòng ta sẽ thêm thoải mái.|tin_tuc_2.jpg|Còn gì tuyệt vời hơn khi mỗi sáng thức dậy đươc ngắm những bông hoa tươi thắm đầy sức sống đúng không nào. Vậy tại sao bạn không chọn bó hoa tươi cho riêng mình?\r\nHãy liên hệ ngay với chúng tôi để được cung cấp những sản phẩm hoa tươi đẹp được tuyển chọn từ những bông hoa được chăm sóc tốt nhất. Hotline: 0912345678', 'tin_tuc_1.jpg', '2016-06-02', 1),
(2, 'Những phương pháp giữ hoa lâu tàn theo cách dân gian', 'Một bình hoa đẹp nếu bạn mua về chưng nhưng sau đó chỉ được 1 - 2 ngày đã biến sắc rồi tàn lụi thì thật là đáng tiếc. Nhưng làm sao để có thể giữ hoa lâu tàn hơn. Vì Không phải ai cũng biết cách để giữ chúng lâu tàn hơn.', 'tin_tuc_3.jpg', '2016-05-25', 1),
(3, 'Lung linh những chiếc váy hoa tí hon dễ thương', 'Với đôi tay khéo léo nghệ sĩ đã sắp xếp những cánh hoa, bông hoa và vẽ nên những bức tranh thật ấn tượng và trông rất thực về chiếc váy của người phụ nữ.\r\nHoa và thời trang là hai niềm đam mê của phái đẹp. Kết hợp giữa 2 yếu tố này tạo nên vẻ đẹp khó tả. Và đây cũng chính là nguồn cảm hứng giúp nghệ sĩ thi giác người Malaysia, Limzy tạo nên những bản phác thảo thời trang từ rất nhiều loại hoa khác nhau như hồng, cẩm chướng, hoa lan, hướng dương.', 'tin_tuc_4.jpg', '2016-06-13', 1),
(4, 'Những cách tặng hoa bất ngờ cho ngày 20/10', 'Tặng hoa là một nghĩa cử đẹp của phái nam dành cho phái đẹp, nó không chỉ là một hành động đẹp đơn thuần mà ẩn sâu bên trong nghĩa cử hành động đó là một sự sâu sắc về tình cảm mà qua đó nói lên được tâm tư suy nghĩ của con người đối với nhau và cũng thay cho một lời bày tỏ tình cảm yêu thương. Ngày 20/10 là dịp để chúng ta biết ơn và tri ân những người đã thầm lặng dõi theo cuộc sống của gia đình, những bóng hồng luôn làm tươi đẹp gia đình và tạo bước thành công cho những thành viên khác, là bàn đạp tiến lên xây dựng hạnh phúc vững bền. Đó là những người phụ nữ của gia đình của xã hội là vợ, là bà, là mẹ, là vợ, là em gái, là người yêu thương.', 'tin_tuc_5.jpg', '2016-01-01', 1),
(5, 'Giới thiệu', '<div class="container">\r\n	<div class="row">\r\n        <!--<h1 class="panel panel-heading h1 bg-purple text-center text-white">Giới thiệu</h1> -->\r\n        <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2 gioi_thieu">\r\n        <!--đổi đường dẫnsrc="../images/icon_hoa.png" -->\r\n        	<img src="public/images/icon_hoa.png" /><span class="text-success h4">FLOWERSHOP</span>\r\n            <p class="text-primary">Chào mừng Quý khách đã đến với Flowershop.<br />\r\n            Chúng tôi xin gửi đến quý khách lời chào trân trọng nhất!<br /><br />\r\n           	Mỗi bông hoa mang trong mình những thông điệp yêu thương, tình cảm của người gửi muốn trao tặng cho những người thân yêu. Trải qua hơn 04 năm hình thành và phát triển, chúng tôi dần tạo được niềm tin trong lòng khách hàng bởi uy tín của Dịch vụ và Chất lượng trong từng sản phẩm hoa tươi, quà tặng...<br /><br />\r\n            Hoa luôn biểu trưng cho cái đẹp, hoa tươi còn mang lại mùi hương, màu sắc của mỗi loài hoa mang một ý nghĩa riêng. Ngày nay hoa tươi không thể thiếu trong cuộc sống hàng ngày, việc tặng hoa cũng là cả một nghệ thuật.<br /><br />\r\n            Việc tặng hoa thể hiện sự yêu mến, tôn trọng hay chia buồn tùy vào hoàn cảnh của mỗi người mà tặng cho phù hợp. Với mỗi khách hàng chúng tôi sẽ tư vấn để khách hàng có được sự lựa chọn đúng và phù hợp nhất.<br /><br />\r\n            Các sản phẩm - dịch vụ của chúng tôi bao gồm:<br /><br />\r\n            <span class="col-xs-12 col-sm-12 col-md-6 col-lg-6">\r\n            - Hoa cưới - Hoa bàn tiệc<br /><br />\r\n            - Hoa tình yêu<br /><br />\r\n            - Hoa sinh nhật<br /><br />\r\n            - Hoa khai trương - Hoa chúc mừng<br /><br />\r\n            - Hoa chia buồn<br /><br />\r\n            </span>\r\n            <span class="col-xs-12 col-sm-12 col-md-6 col-lg-6">\r\n            - Hoa bó<br /><br />\r\n            - Hoa hộp<br /><br />\r\n            - Hoa giỏ<br /><br />\r\n            - Hoa đại sảnh<br /><br />\r\n            - Hoa cắm bình<br /><br />\r\n            </span>\r\n            Flowershop là nơi hội tụ của vô số các loại hoa của Việt Nam và hoa nhập khẩu được chọn lọc tỉ mỉ và được thực hiện tỉ mỉ bởi đội ngũ nhân viên chuyên nghiệp, tạo ra những sản phẩm về hoa đầy tính sáng tạo mang phong cách tinh tế - sang trọng - đẳng cấp đến từng chi tiết.<br /><br />\r\n            Để đáp ứng nhu cầu đa dạng và ngày càng cao của khách hàng về hoa tươi, chúng tôi cung cấp các dịch vụ giao hoa đến tận địa chỉ và nhận các đơn đặt theo yêu cầu của khách hàng.<br />\r\n            Vui lòng truy cập website: www.flowershop.com hoặc gọi đến số hotline 0912345678 để được tư vấn và hỗ trợ.<br />\r\n            Xin chân thành cảm ơn Qúy khách hàng đã ủng hộ Shop hoa tươi của chúng tôi.\r\n            </p>\r\n        </div>\r\n    </div> <!--end row-->\r\n</div>', '', '2016-07-01', 2),
(6, 'Hướng dẫn', '<p>\r\n    Bạn có thể chọn một số cách thanh toán sau:<br />\r\n    <span style="color:red">1. Tiền mặt</span><br />\r\n    <span style="color:red">1.1 Thanh toán trực tiếp tại văn phòng công ty</span><br />\r\n    Công ty TNHH Flowershop<br />\r\n    Địa chỉ 1: 280 An Dương Vương, phường 4, quận 5, TPHCM<br />\r\n    Địa chỉ 2: 351 Lạc Long Quân, phường 5, quận 11, TPHCM<br />\r\n    Điện thoại: 0912345678 - (08) 321 322 323<br />\r\n    <span style="color:red">1.2 Thanh toán tiền mặt khi nhận hoa</span><br />\r\n    Chúng tôi hỗ trợ phương thức thanh toán COD (Cash on Delivery) - thanh toán tiền mặt khi giao hoa trong trường hợp bạn là người đặt và người nhận hoa, nhằm hỗ trợ tối đa việc đặt và nhận hàng.<br />\r\n    <span style="color:red">1.3 Thu tiền mặt ở địa điểm khác</span><br />\r\n    Trong trường hợp bạn không phải người nhận hoa để thanh toán tiền mặt khi nhận hoa, bạn cũng không thể chuyển khoản hoặc đến văn phòng công ty Flowershop.com để thanh toán, chúng tôi hỗ trợ giao hoa và thu tiền ở 2 địa điểm khác nhau. Tuy nhiên, phương thức thanh toán này sẽ có thêm phí dịch vụ (tùy khu vực). Vui lòng liên hệ nhân viên để biết thêm chi tiết (email lienheflowershop@gmail.com hoặc hotline (08) 321 322 323/ 0912345678)<br />\r\n    <span style="color:red">2. Thanh toán chuyển khoản qua ngân hàng:</span><br />\r\n    Bạn đến bất kỳ ngân hàng nào ở Việt Nam để chuyển tiền theo thông tin bên dưới (bạn không nhất thiết phải có tài khoản ngân hàng)<br />\r\n    <img src="public/images/lien_lac.png" /> <br />\r\n    <span style="color:red">3. Thanh toán qua Western Union hoặc các dịch vụ chuyển tiền.</span><br />\r\n    Vui lòng chuyển cho anh: Bùi Phúc Hải<br />\r\n    Địa chỉ: 196/26-28 Cộng Hòa, P.12, Q. Tân Bình, Tp. Hồ Chí Minh, ĐT: 01234567147<br />\r\n    \r\n    Sau khi chuyển xong, vui lòng gửi cho chúng tôi 4 thông tin sau:<br />\r\n    \r\n    - Người gửi tiền<br />\r\n    \r\n    - Mã số gửi tiền (10 con số)<br />\r\n    \r\n    - Số tiền.<br />\r\n    \r\n    - Địa chỉ gửi tiền<br />\r\n    \r\n    Sau khi Quý khách đã chuyển tiền vào tài khoản hoặc gửi tiền qua bưu điện, Quý khách vui lòng thông báo cho Flowershop qua địa chỉ E-mail: lienheflowershop@gmail.com hoặc gọi điện về Hotline: (08) 321 322 323 hoặc 0912345678.\r\n</p>', '', '2016-07-01', 2),
(7, 'Chính sách và Điều khoản', '<h3 align="center">Các Điều Khoản và quy định</h3>\r\n<p>\r\n<p style="color:red">ĐIỀU KHOẢN 1 – MỤC ĐÍCH ÁP DỤNG</p>\r\nCác nội dung trong "Các Điều Khoản Mua Hàng" được áp dụng dành riêng cho việc bán hàng của chúng tôi trên trang web http://flowershop.com hoặc đặt qua điện thoại. Khách hàng đặt mua hàng đồng nghĩa với việc khách hàng chấp nhận một cách không điều kiện các điều khoản có trong "Các Điều Khoản Mua Hàng". Các thông tin khách hàng dùng để đăng ký trên trang web của chúng tôi sẽ là những yếu tố được sử dụng trong cam kết của khách hàng với chúng tôi.<br />\r\nNgược lại, tất cả các yêu cầu của khách hàng không được chấp nhận bởi công ty chúng tôi đều không có giá trị. Công ty chúng tôi có quyền thay đổi nội dung các điều khoản bất kỳ lúc nào. Chúng tôi khuyến cáo khách hàng nên tham khảo thường xuyên trên trang web để cập nhập nội dung các điều khoản mua hàng.<br />\r\n<p style="color:red">ĐIỀU KHOẢN 2 – TRUY CẬP TRANG WEB</p>\r\n2.1. Các mặt hàng có giá khác 0đ (không đồng) đươc đặt trên website đều là các mặt hàng khách hàng có thể mua.<br />\r\n2.2. Để có thể đặt mua hàng, khách hàng cần phải hoàn tất thủ tục cung cấp các thông tin liên lạc cá nhân. Trong đó, khách hàng cần điền một số thông tin bắt buộc để có thể thực hiện việc đặt mua. Khách hàng cần thiết phải nhập thông tin chính xác, cụ thể và đầy đủ. Trong trường hợp khách hàng cung cấp thông tin sai, không chính xác và không đầy đủ, công ty chúng tôi có quyền từ chối và hủy bỏ đơn hàng. Khách hàng chịu hoàn toàn trách nhiệm đối với tất cả hậu quả tài chính có thể xảy ra trong quá trình sử dụng trang web bằng tài khoản đăng ký của mình.<br />\r\n2.3. Chúng tôi khuyến cáo khách hàng một số chú ý sau đây :<br />\r\n- Khách hàng chỉ được phép sử dụng và/hoặc tải xuống các thông tin có trên trang web của chúng tôi vì mục đích cá nhân, không vì mục đích thương mại và có giới hạn về thời gian.<br />\r\n- Khách hàng không được phép copy hoặc sử dụng nội dung có trên trang web của chúng tôi trên các trang web khác.\r\n- Khách hàng không được phép sử dụng, sử dụng lại, thay đổi, di chuyển, trích dẫn, thay thế, phát tán … trực tiếp hoặc gián tiếp, dưới bất kỳ hình thức nào toàn bộ hoặc từng phần (hình ảnh, nội dung …) có trên trang web của chúng tôi cũng như tên, biểu trưng, biểu tượng của trang web và của công ty.<br />\r\n- Khách hàng vui lòng thông báo cho chúng tôi về bất kỳ những vi phạm kể trên, để chúng tôi có hướng xử lý nhằm phục vụ khách hàng ngày một tốt hơn.<br />\r\n<p style="color:red">ĐIỀU KHOẢN 3 – ĐẶT MUA HÀNG</p>\r\nHiện nay, chúng tôi chỉ tiếp nhận những đơn đặt hàng giao tại Việt Nam và một số quốc gia trên thế giới.<br />\r\nKhách hàng cần phải hoàn tất các yêu cầu khi thanh toán mua hàng để có thể đặt mua hàng. Sau khi khách hàng mua hàng, chúng tôi sẽ gọi điện thoại xác nhận về thời điểm cũng nhưng phương cách mua hàng, tất cả thông tin này đều được thâu âm và chỉ được sử dụng khi có khiếu nại.<br />\r\n \r\nCác thông tin khách hàng sử dụng khi đăng ký với chúng tôi sẽ được sử dụng sau đó trong quá trình giao hàng. Chúng tôi có quyền tạm ngưng, hủy bỏ hoặc từ chối tất cả các đơn hàng của một khách hàng trong trường hợp có vấn đề liên quan đến thông tin cung cấp và thanh toán của các đơn hàng trước đó.<br />\r\n<p style="color:red">ĐIỀU KHOẢN 4 – TÌNH TRẠNG HÀNG HÓA</p>\r\nCác mẫu hàng và giá đều sẵn sàng khi chúng xuất hiện trên trang web của chúng tôi, trong giới hạn số lượng tồn kho sẵn có. Trong trường hợp không có đủ nguyên vật liệu cấu thành sản phẩm của khách hàng, chúng tôi sẽ tiến hành trao đổi với khách hàng phương án thay thế, sau khi được sự đồng ý của khách hàng thì đơn hàng mới có hiệu lực.<br />\r\n<p style="color:red">ĐIỀU KHOẢN 5 – GIÁ</p>\r\nTất cả giá sản phẩm đều bằng tiền VND, đã bao gồm phí chuyển hàng qua đối tác của chúng tôi và chưa bao gồm thuế VAT (10%). Khách hàng thanh toán bằng tiền Mỹ Kim (USD) sẽ áp dụng tỉ giá ngoại tệ của Ngân hàng Vietcombank tại thời điểm thanh toán. Khách hàng cũng có thể chuyển khoản cho chúng tôi bằng các ngoại tệ khác. Chi tiết vui lòng liên hệ địa chỉ mail : lienheflowershop.com<br />\r\nChúng tôi nhận chuyển hàng tới Tp. Hồ Chí Minh, Hà Nội và các tỉnh thành trên toàn quốc, ngoài ra chúng tôi cũng có chuyển một số đơn hàng đến các quốc gia khác, các đơn hàng chuyển ngoài Tp. Hồ Chí Minh và Hà Nội vui lòng liên lạc với số điện thoại của chúng tôi ở phần liên hệ.<br />\r\nChúng tôi giữ quyền thay đổi giá hàng hóa bất kỳ lúc nào, nhưng luôn ở mức giá hợp lý nhất với chất lượng tốt nhất để nâng cao tính cạnh tranh và đảm bảo lợi ích của khách hàng.<br /> \r\n</p>', '', '2016-07-01', 2),
(8, 'Tin khuyến mãi', '<!--Phần ghi chú 1-->\r\n            <div class="alert alert-success" role="alert">\r\n            	<p>- Sản phẩm bạn đang chọn là sản phẩm được thiết kế đặc biệt!<br />\r\n                - Hiện nay, Flowershop chỉ thử nghiệm cung cấp cho thị trường Tp. Hồ Chí Minh<br />\r\n                - Miễn phí giao hoa tại các quận nội thành TPHCM. Các quận khác vui lòng liên hệ để biết thêm chi tiết (Giá giao sẽ từ 20.000đ - 60.000đ).<br />\r\n                - Ngoài ra chúng tôi có thể cắm hoa theo yêu cầu của bạn\r\n				</p>\r\n            </div>\r\n             <!--Phần ghi chú 2-->\r\n            <div class="alert alert-danger" role="alert">\r\n                  <p><span class="badge bg-red">1</span> Tặng thiệp miễn phí <br />\r\n                    <span class="badge bg-red">2</span> Giảm ngay 20.000đ khi mua online <br />\r\n                    <span class="badge bg-red">3</span> Giảm tiếp 3% cho đơn hàng ONLINE* lần thứ 2, 5% cho đơn hàng ONLINE* lần thứ 6 và 10% cho đơn hàng ONLINE* lần thứ 12 (Chỉ áp dụng Tp. HCM) <br />\r\n                    <span class="badge bg-red">4</span> Giao gấp trong vòng 2 giờ <br />\r\n                    <span class="badge bg-red">5</span> Cam kết hoa tươi trên 3 ngày<br />\r\n                    <span class="badge bg-red">6</span> Giao hàng đi các tỉnh <br />\r\n                    </p>\r\n			</div>', '', '2016-07-01', 3);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chude_hoa`
--
ALTER TABLE `chude_hoa`
  ADD CONSTRAINT `CD_H` FOREIGN KEY (`MaCD`) REFERENCES `chu_de` (`MaCD`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `H_CD` FOREIGN KEY (`MaHoa`) REFERENCES `hoa` (`MaHoa`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `hoa`
--
ALTER TABLE `hoa`
  ADD CONSTRAINT `FK_H_LH` FOREIGN KEY (`MaLoai`) REFERENCES `loai_hoa` (`MaLoai`) ON DELETE NO ACTION ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

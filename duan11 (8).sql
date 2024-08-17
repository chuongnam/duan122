-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 17, 2024 at 06:39 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `duan11`
--

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `id_bill` int NOT NULL,
  `bill_name` varchar(225) NOT NULL,
  `bill_address` varchar(225) NOT NULL,
  `tel` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `email` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `total` int NOT NULL,
  `pttt` varchar(224) NOT NULL,
  `ngaydathang` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`id_bill`, `bill_name`, `bill_address`, `tel`, `email`, `total`, `pttt`, `ngaydathang`) VALUES
(281, 'nguyen chuong nam', 'ha noi2', '0902883822', 'chuongnam04@gmail.com', 2570000, 'Trả tiền khi nhận hàng', '12-12-23 12:15:28'),
(282, 'chuong nam', 'trinh van bo-my dinh', '0232313310', 'chuongnam04@gmail.com', 8100000, 'Trả tiền khi nhận hàng', '12-12-23 01:21:11');

-- --------------------------------------------------------

--
-- Table structure for table `binhluan`
--

CREATE TABLE `binhluan` (
  `id_binhluan` int NOT NULL,
  `id_user` int NOT NULL,
  `product_id` int NOT NULL,
  `date` varchar(225) NOT NULL,
  `noidung` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `binhluan`
--

INSERT INTO `binhluan` (`id_binhluan`, `id_user`, `product_id`, `date`, `noidung`) VALUES
(4, 4, 40, '06:23:20am 02/12/2023', 'sản phấm rất là tuyệt với'),
(11, 5, 40, '01:56:52am 08/12/2023', 'sản phẩm đẹp'),
(12, 5, 42, '02:24:37am 08/12/2023', 'sản phấm rất là tuyệt với'),
(13, 5, 42, '03:24:43am 10/12/2023', 'sản phấm rất là tuyệt với'),
(14, 5, 41, '2023-12-11 14:35:39', 'sản phẩm đẹp\r\n'),
(15, 5, 40, '12:16:06am 12/12/2023', 'nam');

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `brand_id` int NOT NULL,
  `cartegory_id` int NOT NULL,
  `tendanhmuc` varchar(225) NOT NULL,
  `tenloaisp` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_bill` int NOT NULL,
  `pro_name` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `images` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `dongia` int NOT NULL,
  `soluong` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `thanhtien` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `id_bill` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `color` varchar(225) NOT NULL,
  `trangthai_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_bill`, `pro_name`, `images`, `dongia`, `soluong`, `thanhtien`, `id_bill`, `color`, `trangthai_id`) VALUES
(313, 'Xe Đạp Trẻ Em Youth VINBIKE Spin 12 – Bánh 12 Inches', 'xedap1.jpg', 790000, '2', '1580000', '281', 'vàng', 2),
(314, 'Xe Đạp Trẻ Em Youth VINBIKE Ruby 16 – Bánh 16 Inches', 'xedap2.jpg', 990000, '1', '990000', '281', 'vàng', 1),
(315, 'Xe Đạp Trẻ Em Youth VINBIKE Spin 12 – Bánh 12 Inches', 'xedap1.jpg', 790000, '9', '7110000', '282', 'vàng', 1),
(316, 'Xe Đạp Trẻ Em Youth VINBIKE Ruby 16 – Bánh 16 Inches', 'xedap2.jpg', 990000, '1', '990000', '282', 'vàng', 100);

-- --------------------------------------------------------

--
-- Table structure for table `kythuat`
--

CREATE TABLE `kythuat` (
  `kt_id` int NOT NULL,
  `khungsuon` varchar(225) NOT NULL,
  `yen` varchar(225) NOT NULL,
  `taynam` varchar(225) NOT NULL,
  `lop` varchar(225) NOT NULL,
  `xich` varchar(225) NOT NULL,
  `vanh` varchar(225) NOT NULL,
  `product_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `kythuat`
--

INSERT INTO `kythuat` (`kt_id`, `khungsuon`, `yen`, `taynam`, `lop`, `xich`, `vanh`, `product_id`) VALUES
(9, 'ALUXX aluminum alloy frame', 'Aluminum alloy, 30.9mm', 'Shimano CUES SL-U6000, 2×10', 'CST LITESTEP 27.5X1.95', 'Forged aluminum legs 26/40T, 2-PC hollow one', 'Giant double layer, aluminum alloy, dedicated for disc brakes', 40),
(10, 'ALUXX-Grade Aluminum', 'Giant custom', 'Microshift 3×7', '27.5×2.1', 'Stainless, 14g', 'Giant 27.5″, aluminum, double wall', 41),
(11, 'ALUXX-Grade Aluminum', 'Giant Kids', 'Alloy junior, adjustable reach', 'Innova IA-2094, 16×2.25″', 'Platform', 'Giant Kids 16″, alloy', 42),
(12, 'ALUXX-Grade Aluminum', 'Giant custom', 'Tektro', '27.5×2.1', 'SR Suntour 27.5″', 'Giant 27.5″, aluminum, double wall', 43),
(13, 'ALUXX-Grade aluminum', 'Giant Approach', 'Shimano Claris', 'Giant 700×25', 'Giant SR3 wheelset', 'Giant SR3 wheelset', 44);

-- --------------------------------------------------------

--
-- Table structure for table `lienhe`
--

CREATE TABLE `lienhe` (
  `lienhe_id` int NOT NULL,
  `bl_name` varchar(225) NOT NULL,
  `sodienthoai` int NOT NULL,
  `noidungbinhluan` text NOT NULL,
  `email` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `lienhe`
--

INSERT INTO `lienhe` (`lienhe_id`, `bl_name`, `sodienthoai`, `noidungbinhluan`, `email`) VALUES
(21, 'chuong nam', 987654321, 'nam', 'chuongnam04@gmail.com'),
(22, 'chuong nam', 987654321, 'nam', 'chuongnam04@gmail.com'),
(23, 'chuong nam', 987654321, 'nam', 'chuongnam04@gmail.com'),
(24, 'chuong nam', 987654321, 'nam', 'chuongnam04@gmail.com'),
(26, 'chuong nam', 987654321, 'nam', 'chuongnam04@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `loaixe`
--

CREATE TABLE `loaixe` (
  `cartegory_id` int NOT NULL,
  `tendanhmuc` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `loaixe`
--

INSERT INTO `loaixe` (`cartegory_id`, `tendanhmuc`) VALUES
(124, 'xe đạp trẻ em'),
(145, 'xe đạp địa hình'),
(146, 'xe đạp thể thao');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int NOT NULL,
  `product_name` varchar(225) NOT NULL,
  `product_gia` int NOT NULL,
  `images` varchar(225) NOT NULL,
  `product_mota` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `soluong` int NOT NULL,
  `masp` int NOT NULL,
  `color` varchar(225) NOT NULL,
  `cartegory_id` int NOT NULL,
  `luotxem` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_gia`, `images`, `product_mota`, `soluong`, `masp`, `color`, `cartegory_id`, `luotxem`) VALUES
(40, 'Xe Đạp Trẻ Em Youth VINBIKE Spin 12 – Bánh 12 Inches', 790000, 'xedap1.jpg', 'Xe Đạp Trẻ Em Youth VINBIKE Spin 12 – Bánh 12 Inches là mẫu xe đạp siêu dễ thương và đảm bảo các bé đều mê đắm với màu sắc bắt mắt và thiết kế có tính thẩm mĩ cao. Xe Đạp Trẻ Em Youth VINBIKE Spin 12 – Bánh 12 Inches có kích thước phù hợp với các bé yêu từ 2 – 3 tuổi năng động và thích khám phá.', 12, 90923, 'Đen', 124, 14),
(41, 'Xe Đạp Trẻ Em Youth VINBIKE Ruby 16 – Bánh 16 Inches', 990000, 'xedap2.jpg', 'Xe đạp trẻ em Youth Vinbike Ruby 16 có vẻ ngoài năng động cùng màu hồng đáng yêu, tạo cho bé cảm giác thích thú mỗi lần đạp xe. Đây sẽ là một lựa chọn phù hợp cho các bé gái vui chơi quanh nhà hay tập luyện thể dục thể thao mỗi ngày', 100, 909, 'Hồng', 124, 21),
(42, 'Xe Đạp Trẻ Em Youth LIV Adore F/W 16 – Bánh 16 Inches – 2022', 3790000, 'xedap3.jpg', 'Xe Đạp Trẻ Em Youth LIV Adore F/W 16 – 2022 đang được nhiều phụ huynh lựa chọn cho các công chúa nhỏ từ 4 – 7 tuổi. Xe tạo ấn tượng với kiểu dáng nhỏ nhắn và màu sắc dễ thương, giúp các con thêm thích thú trong việc rèn luyện thể chất và vui chơi vào những ngày cuối tuần.\r\n\r\n \r\n\r\nMê mẩn với diện mạo xe nữ tính, đáng yêu\r\nSản phẩm có ghi đông thiết kế chữ U mềm mại cùng phụ kiện giỏ trước sành điệu. Dù vậy nhưng mẫu xe không hề kém đi phần cứng cáp và chắc chắn nhờ bộ khung to dày cùng bộ lốp bản rộng, đảm bảo sự cân bằng và vững chãi để các bé luôn thoải mái chơi đùa.\r\n\r\n \r\n\r\nSản phẩm ra mắt thị trường với hai phiên bản màu sắc đẹp mê mẩn: Màu Xanh dịu dàng (Ice Green) và màu Tím rực rỡ (Plum) để các nàng công chúa dễ dàng lựa chọn theo sở thích riêng.', 10, 293, 'Tím', 124, 0),
(43, 'Xe Đạp Địa Hình MTB GIANT Rincon 2 27.5 – Phanh Đĩa, Bánh 27.5 Inches', 7590000, 'xedap4.jpg', 'Xe đạp địa hình MTB GIANT Rincon 2 27.5 – 2022 là mẫu xe đạp leo núi unisex dành cho cả nam và nữ. Sản phẩm có thiết kế năng động, bắt mắt cùng những tính năng hiện đại và hiệu suất cao, dễ dàng di chuyển trên mọi dạng địa hình từ bằng phẳng đến gồ ghề, do đó được rất nhiều người thích thú.\r\n\r\n \r\n\r\nPhong cách thiết kế hiện đại và năng động\r\n \r\n\r\nMTB GIANT Rincon 2 27.5 – 2022 sở hữu kiểu dáng gọn gàng, cứng cáp đầy khỏe khoắn, rất phù hợp cho mục đích tập luyện thể thao hoặc dùng cho những chuyến đi dã ngoại, đi phượt địa hình phức tạp.\r\n\r\nPhiên bản 2022 ra mắt với 3 lựa chọn màu sắc: màu đen mạnh mẽ (Black), màu ghi thanh lịch (Grey), màu xanh trẻ trung (Blue). Cùng với đó là 3 loại kích cỡ là S, M và L dành cho khách hàng lựa chọn phù hợp với vóc dáng.', 12, 34232, 'Xanh Dương', 145, 0),
(44, 'Xe Đạp Đua Đường Trường Road GIANT Contend 2 – Bánh 700C – 2024', 19990000, 'xedap5.jpg', 'Sở hữu thiết kế đẹp mắt và hiệu suất cao, xe đạp đua đường trường Road GIANT Contend 2 phiên bản 2024 thu hút ánh nhìn của những tín đồ đam mê chinh phục đường đua đầy thử thách. Cùng với đó, mẫu xe còn được trang bị nhiều linh kiện cao cấp, bền bỉ đáp ứng tốt nhu cầu di chuyển trên con đường dốc đá gồ ghề.', 121, 9325, 'Đen,', 146, 0),
(48, ' Xe Đạp Đường Phố Touring GIANT Fastroad 1 – Phanh Đĩa, Bánh 700C – 2024', 26990000, 'xedap6.jpg', 'Là một sản phẩm đáng chú ý trong dòng xe đạp đường phố và du lịch của hãng GIANT, xe đạp đường phố Touring GIANT Fastroad 1 phiên bản 2024 “ghi điểm” với thiết kế thể thao, năng động, sắc màu thời thượng kết hợp cùng bộ linh kiện cao cấp, bền bỉ. Mẫu xe này sẽ là lựa chọn tuyệt vời dành cho các bạn trẻ có nhu cầu đạp xe rèn luyện sức khỏe, đam mê khám phá các cung đường đẹp.', 142, 9277, 'Xanh', 146, 0),
(49, 'Xe Đạp Đường Phố Touring GIANT Fastroad 2 – Phanh Đĩa, Bánh 700C – 2024', 23490000, 'xedap7.jpg', 'Xe đạp đường phố GIANT Fastroad 2 – 2024 ghi điểm với cấu hình cao cùng thiết kế mang phong cách thể thao, cá tính và có nhiều tính năng tiện ích hiện đại. Mẫu xe đạp được nhiều bạn lựa chọn làm phương tiện đi làm, dạo phố hay thể dục thể thao,… vừa rèn luyện thể chất vừa thể hiện được sức trẻ năng động, khỏe khoắn.', 12, 12817, 'Ghi', 146, 0),
(50, ' Xe Đạp Trẻ Em Youth VINBIKE Rock – Phanh Đĩa, Bánh 20 Inches', 3390000, 'xedap8.jpg', 'Xe đạp trẻ em Youth MAX BIKE Elsa 14 với kích thước bánh 14 inch được thiết kế đặc biệt cho các bé, với một số tính năng an toàn và tiện ích đáng chú ý. Khung xe được làm từ vật liệu MAX BIKE STL 14″ chắc chắn và bền bỉ, mang lại sự ổn định và an toàn trong quá trình sử dụng.', 123, 12827, 'Đỏ', 124, 0);

-- --------------------------------------------------------

--
-- Table structure for table `trangthai`
--

CREATE TABLE `trangthai` (
  `trangthai_id` int NOT NULL,
  `name` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `trangthai`
--

INSERT INTO `trangthai` (`trangthai_id`, `name`) VALUES
(1, 'chờ xác nhận'),
(2, 'đang giao'),
(3, 'đã giao'),
(4, 'đã hủy');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int NOT NULL,
  `user_name` varchar(225) NOT NULL,
  `pass` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `role_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `pass`, `email`, `role_id`) VALUES
(5, 'chuong nam', '123456', 'chuongnam04@gmail.com', 2),
(6, 'admin', '1234567', 'admin@fpt.edu.vn', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id_bill`);

--
-- Indexes for table `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`id_binhluan`);

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_bill`);

--
-- Indexes for table `kythuat`
--
ALTER TABLE `kythuat`
  ADD PRIMARY KEY (`kt_id`);

--
-- Indexes for table `lienhe`
--
ALTER TABLE `lienhe`
  ADD PRIMARY KEY (`lienhe_id`);

--
-- Indexes for table `loaixe`
--
ALTER TABLE `loaixe`
  ADD PRIMARY KEY (`cartegory_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `trangthai`
--
ALTER TABLE `trangthai`
  ADD PRIMARY KEY (`trangthai_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `id_bill` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=283;

--
-- AUTO_INCREMENT for table `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `id_binhluan` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `brand_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_bill` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=317;

--
-- AUTO_INCREMENT for table `kythuat`
--
ALTER TABLE `kythuat`
  MODIFY `kt_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `lienhe`
--
ALTER TABLE `lienhe`
  MODIFY `lienhe_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `loaixe`
--
ALTER TABLE `loaixe`
  MODIFY `cartegory_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=149;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `trangthai`
--
ALTER TABLE `trangthai`
  MODIFY `trangthai_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

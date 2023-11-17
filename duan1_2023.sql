-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 17, 2023 lúc 01:17 PM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `duan1_2023`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan`
--

CREATE TABLE `binhluan` (
  `id_bl` int(11) DEFAULT NULL,
  `noidung` varchar(255) DEFAULT NULL,
  `ngaybl` datetime DEFAULT NULL,
  `danhgia` int(11) DEFAULT NULL,
  `id_sp` int(11) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `binhluan`
--

INSERT INTO `binhluan` (`id_bl`, `noidung`, `ngaybl`, `danhgia`, `id_sp`, `id_user`) VALUES
(0, 'Rất đẹp', '2023-11-30 09:59:22', 5, 0, 1),
(1, 'Rất xịn', '2023-11-17 10:11:41', 5, 3, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietdonhang`
--

CREATE TABLE `chitietdonhang` (
  `id_ctdh` int(11) NOT NULL,
  `id_dh` int(11) DEFAULT NULL,
  `id_sp` int(11) DEFAULT NULL,
  `id_size` int(11) DEFAULT NULL,
  `id_mau` int(11) DEFAULT NULL,
  `id_img` int(11) DEFAULT NULL,
  `thanhtien` int(11) DEFAULT NULL,
  `soluong` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `chitietdonhang`
--

INSERT INTO `chitietdonhang` (`id_ctdh`, `id_dh`, `id_sp`, `id_size`, `id_mau`, `id_img`, `thanhtien`, `soluong`) VALUES
(0, 1, 1, 1, 1, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitiethoadon`
--

CREATE TABLE `chitiethoadon` (
  `id_cthd` int(11) NOT NULL,
  `id_hd` int(11) DEFAULT NULL,
  `id_sp` int(11) DEFAULT NULL,
  `id_size` int(11) DEFAULT NULL,
  `id_mau` int(11) DEFAULT NULL,
  `id_img` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `soluong` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietsp`
--

CREATE TABLE `chitietsp` (
  `id_ctsp` int(11) NOT NULL,
  `id_sp` int(11) DEFAULT NULL,
  `id_size` int(11) DEFAULT NULL,
  `id_mau` int(11) DEFAULT NULL,
  `id_img` int(11) DEFAULT NULL,
  `soluong` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `chitietsp`
--

INSERT INTO `chitietsp` (`id_ctsp`, `id_sp`, `id_size`, `id_mau`, `id_img`, `soluong`) VALUES
(0, 1, 1, 1, 1, 23);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id_dm` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`id_dm`, `name`) VALUES
(0, 'Áo thun'),
(1, 'Áo polo'),
(2, 'Áo sơ mi'),
(3, 'Áo dài tay'),
(4, 'Áo khoác'),
(5, 'Áo Tanktop'),
(6, 'Áo thể thao');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhang`
--

CREATE TABLE `donhang` (
  `id_dh` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `trangthai` int(11) DEFAULT NULL,
  `ngaydat` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

CREATE TABLE `hoadon` (
  `id_hd` int(11) NOT NULL,
  `id_dh` int(11) DEFAULT NULL,
  `pttt` varchar(255) DEFAULT NULL,
  `tongtien` int(11) DEFAULT NULL,
  `ngaythanhtoan` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `mau`
--

CREATE TABLE `mau` (
  `id_mau` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `mau`
--

INSERT INTO `mau` (`id_mau`, `name`) VALUES
(0, 'Đen '),
(1, 'Đỏ'),
(2, 'Xanh đậm'),
(3, 'Xanh nhạt'),
(4, 'Xanh lá cây'),
(5, 'Xám'),
(6, 'Trắng'),
(7, 'Rêu'),
(8, 'Be'),
(9, 'Nâu');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `id_sp` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `original_price` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `img` varchar(255) NOT NULL,
  `mota` text DEFAULT NULL,
  `trangthai` int(11) DEFAULT NULL,
  `id_dm` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id_sp`, `name`, `original_price`, `price`, `img`, `mota`, `trangthai`, `id_dm`) VALUES
(0, 'Áo dài tay Cotton Compact V2', 360, 249, 'Áo dài tau Cotton Compact V2(249k).png', 'Đặc điểm nổi bật\r\n- Chất liệu: 95% Cotton Compact + 5% Spandex\r\n- Bề mặt vải Cotton mềm mịn, cảm giác mát lần đầu chạm tay\r\n- Thấm hút mồ hôi tốt\r\n- Độ xù lông thấp\r\n- Vải có độ bền cao, co giãn 4 chiều và hạn chế bai nhão\r\n- Tự hào sản xuất tại Việt Nam', 1, 3),
(1, 'Áo giữ nhiệt Modal Ultra', 260, 229, 'Áo dài tau Cotton Compact V2(249k).png', 'Đặc điểm nổi bật\r\n- Chất liệu: 50% Modal (gỗ sồi), 42% Cotton, 8% Spandex\r\n- Ưu điểm của Cotton Modal: kháng khuẩn, giữ nhiệt, mềm mại và co giãn\r\n- Kiểu dáng: Slimfit ôm nhẹ vào cơ thể\r\n- Phù hợp với: mặc hàng ngày hoặc cũng có thể vận động thể thao\r\n- Người mẫu: 1m77 - 69kg * Mặc áo size L\r\n- Tự hào sản xuất tại Việt Nam', 1, 3),
(2, 'Áo Hoodie Essential', 500, 469, 'Áo dài tau Cotton Compact V2(249k).png', 'Đặc điểm nổi bật\r\n- Chất liệu: Nỉ chân cua\r\n- Thành phần: 62% Cotton + 38% Polyester\r\n- Định lượng vải: 360gsm dày dặn\r\n- Khả năng giữ nhiệt tốt, giữ ấm cơ thể\r\n- Chống nhăn và hạn chế xù lông mặt vải\r\n- Vải có độ bền cao, không bai nhão\r\n- Form: Regular, ôm nhẹ\r\n- Tự hào sản xuất tại Việt Nam\r\n- Người mẫu: 1m77 - 69kg, mặc áo size 2XL', 1, 3),
(3, 'Áo khoác có mũ Daily Wear', 550, 459, 'Áo dài tau Cotton Compact V2(249k).png', 'Đặc điểm nổi bật\r\n- Chất liệu áo khoác nam có mũ Daily Wear: 100% Polyester\r\n- Công nghệ ứng dụng: HeiQ Viro Block\r\n- Phù hợp với: khoác ngoài chống nắng, tránh gió\r\n- Kiểu dáng: nhỏ gọn, dễ mặc\r\n- Tự hào sản xuất tại Việt Nam\r\n- Người mẫu: 182 cm - 76 kg, mặc áo 2XL', 1, 4),
(4, 'Áo khoác thể thao Pro Active', 500, 469, 'Áo dài tau Cotton Compact V2(249k).png', 'Đặc điểm nổi bật\r\n- Thành phần: 100% Polyester\r\n- Chất liệu áo khoác thể thao có khả năng giữ ấm\r\n- Hạn chế xù lông và chống nhăn\r\n- Form áo: Regular, ôm nhẹ\r\n- Tự hào sản xuất tại Việt Nam\r\n- Người mẫu: 1m77 - 69kg, mặc áo 2XL', 1, 4),
(5, 'Áo nỉ chui đâu Essentials', 400, 369, 'Áo dài tau Cotton Compact V2(249k).png', 'Đặc điểm nổi bật\r\n- Chất liệu áo nỉ chui đầu Essential: : vải nỉ chân cua\r\n- Thành phần: 62% Cotton + 38% Polyester\r\n- Định lượng vải: 360gsm dày dặn\r\n- Khả năng giữ nhiệt tốt, giữ ấm cơ thể\r\n- Chống nhăn và hạn chế xù lông mặt vải\r\n- Vải có độ bền cao, không bai nhão\r\n- Form: Regular, ôm nhẹ\r\n- Tự hào sản xuất tại Việt Nam\r\n- Người mẫu: 1m77 - 69kg, mặc áo 2XL', 1, 3),
(6, 'Áo thể thao dài tay Active V2', 260, 199, 'Áo dài tau Cotton Compact V2(249k).png', 'Đặc điểm nổi bật\r\n- Chất liệu 100% Recycle Polyester\r\n- Vải xử lý hoàn thiện tính năng Thấm hút (Wicking) và Công nghệ Nhanh khô (Ex-Dry)\r\n- Vải co giãn và nhanh khô, thoải mái cho mọi vận động\r\n- Logo phản quang, dễ dàng nhận diện và an toàn hơn trong đêm\r\n- Phù hợp với: chơi thể thao\r\n- Form áo: Slim fit, ôm vừa\r\n- Tự hào sản xuất tại Việt Nam\r\n- Người mẫu: 182 cm - 76 kg, mặc áo 2XL', 1, 6),
(7, 'Polo Ice Cooling', 500, 349, 'Áo dài tau Cotton Compact V2(249k).png', 'Đặc điểm nổi bật\r\n- Thành phần: 85% Polyamide + 15% Spandex\r\n- Vải được xử lý hoàn thiện tính năng Thấm hút (Wicking) và Nhanh khô (Ex-Dry)\r\n- Đường lai tay và lai áo cắt laser được ép seam hiện đại\r\n- Kiểu dệt Pique thoáng khí, mang đến cảm giác mát mẻ khi mặc\r\n- Vải có độ bền cao, hạn chế co rút và chống nhăn tốt\r\n- Tự hào sản xuất tại Việt Nam\r\n- Người mẫu: 182 cm - 76 kg, mặc áo 2XL', 1, 1),
(8, 'Polo thể thao V1', 260, 169, 'Áo dài tau Cotton Compact V2(249k).png', 'Đặc điểm nổi bật\r\n- Chất liệu: 100% Recycled Polyester\r\n- Định lượng vải 130gsm siêu nhẹ\r\n- Công nghệ ứng dụng: Wicking & Quick-Dry\r\n- Kiểu dáng: áo Polo thể thao vừa vặn\r\n- Nhà cung cấp vải lĩnh vực đồ thể thao hàng đầu: Promax\r\n- Tự hào sản xuất tại Việt Nam \r\n- Người mẫu: 184 cm - 73 kg, mặc áo size 2XL', 1, 1),
(9, 'Polo thể thao V2', 260, 189, 'Áo dài tau Cotton Compact V2(249k).png', 'Đặc điểm nổi bật\r\n- Chất liệu: 100% Recycled Polyester\r\n- Định lượng vải 140gsm siêu nhẹ\r\n- Công nghệ ứng dụng: Wicking & Quick-Dry\r\n- Kiểu dáng: áo Polo thể thao vừa vặn\r\n- Nhà cung cấp vải lĩnh vực đồ thể thao hàng đầu: Promax\r\n- Tự hào sản xuất tại Việt Nam * Xem nhà máy >\r\n- Người mẫu: 184 cm - 73 kg, mặc áo size 2XL', 1, 1),
(10, 'Tanktop Gym Powerfit', 260, 209, 'Áo dài tau Cotton Compact V2(249k).png', 'Đặc điểm nổi bật\r\n- Chất liệu: 86% Poly + 14% Spandex\r\n- Co giãn 4 chiều mang lại sự thoải mái để bạn vận động hết mình\r\n- Chất liệu thấm mồ hôi và khô nhanh, thoáng khí mang lại khả năng khô thoáng vượt trội\r\n- Kiểu dáng áo: Form Slim fit\r\n- Người mẫu: 180cm - 80kg, mặc áo size XL\r\n- Tự hào sản xuất tại Việt Nam\r\n**Hạn chế giặt máy ở các chế độ mạnh. Khi giặt bạn nên lộn ngược áo.', 1, 5),
(11, 'Tanktop thể thao Active phối màu', 260, 169, 'Áo dài tau Cotton Compact V2(249k).png', 'Rất đẹp', 1, 5),
(12, 'Tanktop thể thao Active V2', 260, 139, 'Áo dài tau Cotton Compact V2(249k).png', 'Đặc điểm nổi bật\r\n- Chất liệu: 100% Recycled Polyester\r\n- Vải xử lí hoàn thiện tính năng Thấm hút (Wicking) và Nhanh khô (Ex-Dry)\r\n- Co giãn 2 chiều\r\n- Thoáng mát với chất vải thấm hút tốt, phù hợp mặc chơi thể thao\r\n- Kiểu dáng: Regular fit dáng suông\r\n- Tự hào sản xuất tại Việt Nam\r\n- Người mẫu: 182 cm - 76 kg, mặc áo 2XL', 1, 5),
(13, 'T-Shirt Cotton 200GMS', 260, 139, 'Áo dài tau Cotton Compact V2(249k).png', 'Đặc điểm nổi bật\r\n- Chất liệu: 100% Cotton mềm mại\r\n- Định lượng vải: 200gsm, dày dặn\r\n- Dáng áo vừa vặn, phù hợp với đi chơi, đi làm và ở nhà\r\n- Tự hào sản xuất tại Việt Nam', 1, 0),
(14, 'T-Shirt Cotton Team Whales', 260, 349, 'Áo dài tau Cotton Compact V2(249k).png', 'Đặc điểm nổi bật\r\n- Chất liệu: 95% Cotton Compact - 5% Spandex\r\n- Phù hợp với: mặc ở nhà, đi làm, đi chơi\r\n- Kiểu dáng: Regular Fit dáng suông\r\n- Tự hào sản xuất tại Việt Nam', 1, 0),
(15, 'T-Shirt chạy bộ Graphic Special', 260, 199, 'Áo dài tau Cotton Compact V2(249k).png', 'Đặc điểm nổi bật\r\n- Chất liệu: 100% Polyester\r\n- Xử lý hoàn thiện vải: Quick-Dry + Wicking + Stretch\r\n- Công nghệ Chafe-Free hạn chế tối đa ma sát trong quá trình vận động từ các đường may tối giản hoá\r\n- Sản phẩm được đánh giá phù hợp với hoạt động chạy bộ bởi các Runner chuyên nghiệp\r\n- Tự hào sản xuất tại Việt Nam\r\n- Người mẫu: 176 cm - 76 kg, mặc áo XL', 1, 0),
(16, 'T-Shirt thể thao Active', 260, 199, 'Áo dài tau Cotton Compact V2(249k).png', 'Đặc điểm nổi bật\r\n- Chất liệu: 100% Recycled Polyester\r\n- Vải xử lí hoàn thiện tính năng Thấm hút (Wicking) và Nhanh khô (Ex-Dry)\r\n- Co giãn 2 chiều\r\n- Thoáng mát với chất vải thấm hút tốt, phù hợp mặc chơi thể thao\r\n- Kiểu dáng: Regular fit dáng suông\r\n- Tự hào sản xuất tại Việt Nam\r\n- Người mẫu: 182 cm - 76 kg, mặc áo 2XL', 1, 0),
(17, 'T-Shirt thể thao Promax-S1', 260, 139, 'Áo dài tau Cotton Compact V2(249k).png', 'Đặc điểm nổi bật\r\n- Chất liệu: 100% Polyester\r\n- Xử lý hoàn thiện vải: Quick-Dry và Wicking\r\n- Dệt kiểu Mesh, thoáng khí\r\n- Phù hợp với: chơi thể thao, mặc ở nhà\r\n- Kiểu dáng: Regular fit dáng suông\r\n- Người mẫu: 175 cm - 75 kg, mặc size XL\r\n- Tự hào sản xuất tại Việt Nam ', 1, 0),
(18, 'T-Shirt thể thao Team Whales', 500, 499, 'Áo dài tau Cotton Compact V2(249k).png', 'Đặc điểm nổi bật\r\n- Chất liệu: 100% Polyester\r\n- Xử lý hoàn thiện vải: Quick-Dry và Wicking\r\n- Dệt kiểu Mesh, thoáng khí\r\n- Hoạ tiết hình in chuyển nhiệt không lo bong tróc\r\n- Phù hợp với: chơi thể thao, mặc ở nhà\r\n- Kiểu dáng: Regular fit dáng suông\r\n- Tự hào sản xuất tại Việt Nam', 1, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `size`
--

CREATE TABLE `size` (
  `id_size` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `size`
--

INSERT INTO `size` (`id_size`, `name`) VALUES
(0, 'M'),
(1, 'L'),
(2, 'XL');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `id_user` int(11) NOT NULL,
  `user` varchar(255) DEFAULT NULL,
  `pass` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `tel` varchar(255) DEFAULT NULL,
  `role` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`id_user`, `user`, `pass`, `email`, `address`, `tel`, `role`) VALUES
(0, 'admin', '123456', 'hoadtph31026@fpt.edu.vn', 'Trịnh Văn Bô, Nam Từ Liêm, Hà Nội', '0987654321', 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD PRIMARY KEY (`id_ctdh`);

--
-- Chỉ mục cho bảng `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD PRIMARY KEY (`id_cthd`);

--
-- Chỉ mục cho bảng `chitietsp`
--
ALTER TABLE `chitietsp`
  ADD PRIMARY KEY (`id_ctsp`);

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id_dm`);

--
-- Chỉ mục cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`id_dh`);

--
-- Chỉ mục cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`id_hd`);

--
-- Chỉ mục cho bảng `mau`
--
ALTER TABLE `mau`
  ADD PRIMARY KEY (`id_mau`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id_sp`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

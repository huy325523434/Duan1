CREATE TABLE `donhang` (
  `id_dh` integer PRIMARY KEY,
  `id_user` integer,
  `trangthai` varchar(255),
  `ngaydat` datetime
);

CREATE TABLE `binhluan` (
  `id_bl` integer,
  `noidung` varchar(255),
  `ngaybl` datetime,
  `danhgia` integer,
  `id_sp` integer,
  `id_user` integer
);

CREATE TABLE `chitietdonhang` (
  `id_ctdh` integer PRIMARY KEY,
  `id_dh` integer,
  `id_sp` integer,
  `id_size` integer,
  `id_mau` integer,
  `id_img` integer,
  `thanhtien` varchar(255),
  `soluong` integer
);

CREATE TABLE `hoadon` (
  `id_hd` integer PRIMARY KEY,
  `id_dh` integer,
  `pttt` varchar(255),
  `tongtien` integer,
  `ngaythanhtoan` datetime
);

CREATE TABLE `chitiethoadon` (
  `id_cthd` integer PRIMARY KEY,
  `id_hd` integer,
  `id_sp` integer,
  `id_size` integer,
  `id_mau` integer,
  `id_img` integer,
  `price` integer,
  `soluong` integer
);

CREATE TABLE `danhmuc` (
  `id_dm` integer PRIMARY KEY,
  `name` varchar(255)
);

CREATE TABLE `sanpham` (
  `id_sp` integer PRIMARY KEY,
  `name` varchar(255),
  `original_price` integer,
  `mota` text,
  `trangthai` integer,
  `id_dm` integer
);

CREATE TABLE `taikhoan` (
  `id_user` integer PRIMARY KEY,
  `user` varchar(255),
  `pass` varchar(255),
  `email` varchar(255),
  `address` varchar(255),
  `tel` varchar(255),
  `role` integer
);

CREATE TABLE `size` (
  `id_size` integer PRIMARY KEY,
  `name` varchar(255)
);

CREATE TABLE `mau` (
  `id_mau` integer PRIMARY KEY,
  `name` varchar(255)
);

CREATE TABLE `chitietsp` (
  `id_ctsp` integer PRIMARY KEY,
  `id_sp` integer,
  `id_size` integer,
  `id_mau` integer,
  `id_img` integer,
  `price` integer,
  `soluong` integer
);

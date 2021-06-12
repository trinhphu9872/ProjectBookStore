-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 12, 2021 lúc 02:19 PM
-- Phiên bản máy phục vụ: 10.4.17-MariaDB
-- Phiên bản PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `dbbook`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietdonhang`
--

CREATE TABLE `chitietdonhang` (
  `MachiTietDH` int(255) NOT NULL,
  `MaDonHang` int(11) NOT NULL,
  `MaSP` longtext NOT NULL,
  `SoLuong` int(11) NOT NULL,
  `DonGia` float NOT NULL,
  `ChietKhau` float NOT NULL,
  `TongTien` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `chitietdonhang`
--

INSERT INTO `chitietdonhang` (`MachiTietDH`, `MaDonHang`, `MaSP`, `SoLuong`, `DonGia`, `ChietKhau`, `TongTien`) VALUES
(61, 41, 'VH-01', 3, 120000, 15, 360000),
(62, 41, 'VH-02', 5, 90000, 15, 450000),
(72, 48, 'TA-03', 1, 158000, 15, 158000),
(73, 48, 'IT-02', 2, 552981, 15, 1105960),
(74, 48, 'IT-01', 1, 159000, 15, 159000),
(75, 49, 'TA-01', 5, 425000, 15, 2125000),
(76, 49, 'IT-04', 5, 828550, 15, 4142750),
(77, 50, 'IT-02', 1, 681000, 15, 681000),
(78, 50, 'IT-01', 2, 159000, 15, 318000),
(79, 50, 'IT-05', 1, 459895, 15, 459895),
(80, 51, 'TA-03', 1, 158000, 15, 158000),
(81, 52, 'IT-01', 1, 159000, 15, 159000),
(82, 55, 'IT-01', 1, 159000, 15, 0),
(83, 56, 'IT-01', 1, 159000, 15, 159000),
(84, 56, 'TA-01', 1, 425000, 15, 425000),
(85, 57, 'IT-01', 1, 159000, 15, 0),
(86, 58, 'IT-01', 1, 159000, 15, 0),
(87, 59, 'IT-01', 1, 159000, 15, 0),
(88, 60, 'IT-01', 1, 159000, 15, 0),
(89, 61, 'IT-01', 1, 159000, 15, 0),
(90, 62, 'IT-01', 1, 159000, 15, 159000),
(91, 63, 'IT-01', 1, 159000, 15, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietgiohang`
--

CREATE TABLE `chitietgiohang` (
  `MaChiTietGH` int(255) NOT NULL,
  `MaGioHang` int(255) NOT NULL,
  `MaSP` mediumtext NOT NULL,
  `TenSP` text NOT NULL,
  `TacGia` text NOT NULL,
  `SoLuongMua` int(255) NOT NULL,
  `SoLuong` int(255) NOT NULL,
  `DonGia` float NOT NULL,
  `TongCong` float NOT NULL,
  `ImagePath` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `chitietgiohang`
--

INSERT INTO `chitietgiohang` (`MaChiTietGH`, `MaGioHang`, `MaSP`, `TenSP`, `TacGia`, `SoLuongMua`, `SoLuong`, `DonGia`, `TongCong`, `ImagePath`) VALUES
(2631, 993, 'IT-03', 'React js: The Ultimate Beginner\'s Guide to Learn React js Programming Step by Step', 'Claudia Alves', 3, 18, 799232, 2397700, '~/ImageProduct/IT-03_132658209836509598.jpg'),
(2632, 993, 'IT-01', 'Code Dạo Kí Sự - Lập Trình Viên Đâu Phải Chỉ Biết Code', 'Phạm Huy Hoàng (Developer)', 1, 34, 159000, 159000, '~/ImageProduct/IT-01_132658203018545238.jpg'),
(2697, 1036, 'IT-01', 'Code Dạo Kí Sự - Lập Trình Viên Đâu Phải Chỉ Biết Code', 'Phạm Huy Hoàng (Developer)', 1, 34, 159000, 159000, '~/ImageProduct/IT-01_132658203018545238.jpg'),
(2698, 1036, 'IT-03', 'React js: The Ultimate Beginner\'s Guide to Learn React js Programming Step by Step', 'Claudia Alves', 1, 18, 799232, 799232, '~/ImageProduct/IT-03_132658209836509598.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhang`
--

CREATE TABLE `donhang` (
  `MaDH` int(255) NOT NULL,
  `MaKH` int(11) NOT NULL,
  `TenNguoiNhan` text NOT NULL,
  `PhoneNguoiNhan` int(11) NOT NULL,
  `DiaChiNguoiNhan` text NOT NULL,
  `ThoiGianTao` date NOT NULL,
  `PhuongThucThanhToan` text NOT NULL,
  `TongGiaTriDonHang` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `donhang`
--

INSERT INTO `donhang` (`MaDH`, `MaKH`, `TenNguoiNhan`, `PhoneNguoiNhan`, `DiaChiNguoiNhan`, `ThoiGianTao`, `PhuongThucThanhToan`, `TongGiaTriDonHang`) VALUES
(41, 1, '\r\nNguyễn Chí Thành                        ', 123456789, '\r\nTP.HCM                        ', '2021-05-06', 'Thẻ ATM', 810000),
(48, 1, '\r\nNguyễn Chí Thành 123                        ', 123456789, '\r\nTP.HCM                        ', '2021-05-18', 'Tiền mặt', 1422960),
(49, 1, '\r\nTroy Nguyeen                        ', 0, '\r\n3 Đường 30, Phường Linh Đông, Quận Thủ Đức                        ', '2021-05-18', 'Thẻ ATM', 6267750),
(50, 20, '\r\nLý Quốc Hòa                        ', 53535353, '\r\nLong An                        ', '2021-05-18', 'Tiền mặt', 1458900),
(51, 20, '\r\nLý Quốc Hòa                        ', 53535353, '\r\nLong An                        ', '2021-05-18', 'Ví Momo', 158000),
(52, 15, '\r\nBui Quoc Dat                        ', 59113, '\r\n123 hung vuong                        ', '2021-05-19', 'Tiền mặt', 159000),
(53, 15, 'Bui Quoc Dat', 59113, '123 hung vuong', '2021-05-20', 'Tiền mặt', 100000),
(54, 15, 'Bui Quoc Dat', 59113, '123 hung vuong', '2021-05-20', 'Tiền mặt', 100000),
(55, 15, 'Bui Quoc Dat', 59113, '123 hung vuong', '2021-05-20', 'Tiền mặt', 100000),
(56, 15, '\r\nBui Quoc Dat                        ', 59113, '\r\n123 hung vuong                        ', '2021-05-20', 'Thẻ ATM', 584000),
(57, 15, 'Bui Quoc Dat', 59113, '123 hung vuong', '2021-05-20', 'Tiền mặt', 100000),
(58, 15, 'Bui Quoc Dat', 59113, '123 hung vuong', '2021-05-22', 'Tiền mặt', 100000),
(59, 15, 'Bui Quoc Dat', 59113, '123 hung vuong', '2021-05-22', 'Tiền mặt', 100000),
(60, 15, 'Bui Quoc Dat', 59113, '123 hung vuong', '2021-05-22', 'Tiền mặt', 100000),
(61, 15, 'Bui Quoc Dat', 59113, '123 hung vuong', '2021-05-22', 'Tiền mặt', 100000),
(62, 15, 'Bui Quoc Dat', 59113, '123 hung vuong', '2021-05-22', 'Tiền mặt', 100000),
(63, 15, 'Bui Quoc Dat', 59113, '123 hung vuong', '2021-05-24', 'Tiền mặt', 100000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giohang`
--

CREATE TABLE `giohang` (
  `MaGH` int(255) NOT NULL,
  `MaKH` int(11) NOT NULL,
  `TongTien` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `giohang`
--

INSERT INTO `giohang` (`MaGH`, `MaKH`, `TongTien`) VALUES
(993, 1, 2556696),
(1036, 20, 958232);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lichsugd`
--

CREATE TABLE `lichsugd` (
  `MaGD` int(255) NOT NULL,
  `MaDH` int(11) NOT NULL,
  `MaKH` int(11) NOT NULL,
  `ThoiGianGD` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaisanpham`
--

CREATE TABLE `loaisanpham` (
  `MaLoaiSP` int(255) NOT NULL,
  `CodeLoaiSP` text NOT NULL,
  `TenLoaiSP` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `loaisanpham`
--

INSERT INTO `loaisanpham` (`MaLoaiSP`, `CodeLoaiSP`, `TenLoaiSP`) VALUES
(1, 'IT', 'Sách IT'),
(2, 'VH', 'Sách Văn Học'),
(3, 'TA', 'Sách Tiếng Anh');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `MaSP` varchar(255) NOT NULL,
  `TenSP` text NOT NULL,
  `MaLoaiSP` int(11) NOT NULL,
  `TacGia` text NOT NULL,
  `NXB` text NOT NULL,
  `DonGia` float NOT NULL,
  `MoTa` text NOT NULL,
  `SoLuong` int(11) NOT NULL,
  `SoTrang` int(11) NOT NULL,
  `TrongLuong` text NOT NULL,
  `KichThuoc` text NOT NULL,
  `LoaiBia` text NOT NULL,
  `TrangThai` time NOT NULL,
  `ImagePath` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`MaSP`, `TenSP`, `MaLoaiSP`, `TacGia`, `NXB`, `DonGia`, `MoTa`, `SoLuong`, `SoTrang`, `TrongLuong`, `KichThuoc`, `LoaiBia`, `TrangThai`, `ImagePath`) VALUES
('0', 'Code Dạo Kí Sự - Lập Trình Viên Đâu Phải Chỉ Biết Code', 1, 'Phạm Huy Hoàng (Developer)', 'NXB Dân Trí', 159000, 'Nếu các bạn có đọc các blog về lập trình ở Việt Nam thì có lẽ cái tên Tôi đi code dạo không có gì quá xa lạ đối với các bạn.\r\n\r\nVề tác giả của blog Tôi đi code dạo, anh tên thật là Phạm Huy Hoàng, một Developer Full Stack, cựu sinh viên trường FPT University, hiện tại anh đang học Thạc sĩ Computer Science tại Đại học Lancaster ở Anh (học bổng $18000). Trước khi qua Xứ Sở Sương Mù, anh đã từng làm việc tại FPT Software và ASWIG Solutions.\r\n\r\nVới mong muốn chia sẻ kinh nghiệm học lập trình và các kỹ năng mà anh đã trải qua trong suốt quá trình học và làm việc với tư cách là người đi trước cũng như là một Developer Full Stack, nên anh đã quyết định xuất bản sách “Code dạo ký sự – lập trình viên đâu phải chỉ biết code”.\r\n\r\nHiện tại, trên thị trường sách Việt Nam với chủ đề về IT nói chung và lập trình viên nói riêng đều rất khan hiếm, chủ yếu là dịch lại từ tác giả nước ngoài. Chúng ta đã quá mải mê vào những đầu sách dạng “Những cách làm giàu hay đại loại vậy” đã khiến chúng ta ảo tưởng phần nào về bản thân mà thật sự kỹ năng của bạn không cho phép để làm điều đó.\r\n\r\nVì thế chúng ta cần những đầu sách để định hướng nghề nghiệp và xây dựng kiến thức thật vững chắc, khi đó bạn mới có thể nghĩ tới những điều tuyệt vời hơn trong tương lai. “Code dạo ký sự – lập trình viên đâu phải chỉ biết code” sẽ đem lại cho bạn điều đó.\r\n\r\nMột số sách công nghệ hiện nay quá khô cứng, tập trung nhiều vào kĩ thuật nên khó tiếp thu. Số sách cò lại đa phần là về thuật toán, khá cũ, hoặc tập trung vào một công nghệ, rất mau hết hạn.\r\n\r\nCuốn sách này hoàn toàn khác những cuốn sách về IT và công nghệ trên thị thường. Vậy nó có điểm nào đặc biệt?\r\n\r\nNhững bài viết ngắn gọn và thú vị về những kĩ năng mềm và cứng mà một lập trình viên phải có, được mình rút chiết qua bao kinh nghiệm xương máu.\r\nGiọng văn hài hước dí dỏm, đọc không hề giống sách kĩ thuật nhưng lại dễ tiếp thu.\r\nSách tập trung vào khả năng tự học và định hướng người đọc. Có kĩ năng tự học, có định hướng tốt, bạn sẽ dễ dàng sống sót và thăng tiến trong ngành này.', 34, 211, '2', '12', 'Bìa cứng', '00:00:00', '/bookcode.jpg'),
('1', 'Cracking the Coding Interview', 1, 'Gayle Laakmann McDowell', 'Nước ngoài', 552981, 'Gayle Laakmann McDowell is the founder and CEO of CareerCup and the author of Cracking the PM Interview and Cracking the Tech Career.\r\n\r\nHer background is in software development. She has worked as a software engineer at Google, Microsoft, and Apple. At Google, she interviewed hundreds of software engineers and evaluated thousands of hiring packets on the hiring committee. She holds a B.S.E. and M.S.E. in computer science from the University of Pennsylvania and an MBA from the Wharton School.\r\n\r\nShe now consults with tech companies to improve their hiring process and with startups to prepare them for acquisition interviews.', 21, 153, '1.5', '15', 'Bìa cứng', '00:00:00', '/book_interview.jpg'),
('2', 'React js: The Ultimate Beginner\'s Guide to Learn React js Programming Step by Step', 1, 'Claudia Alves', 'Nước ngoài', 799232, 'React js is a JavaScript framework. React was originally created by engineers at Facebook to solve the challenges involved when developing complex user interfaces with datasets that change over time. This is not a trivial undertaking and must not only be maintainable, but also scalable to work at the scale of Facebook. React js was actually born in Facebook’s ads organization, where they had been utilizing a traditional client-side Model-View-Controller approach. Applications such as these normally consist of two-way data binding along with rendering template. React changed the way that these applications were created by making some daring advances in web development. When React js was released in 2013, the web development community was both interested and seemingly disgusted by what React was doing. As you will discover throughout this book, React challenges conventions that have become the de-facto standards for JavaScript framework best practices. React does this by introducing many new paradigms and shifting the status quo of what it takes to create scalable and maintainable JavaScript applications and user interfaces. Along with the shift in front-end development mentality, React comes with a rich set of features that make composing a single-page application or user interface approachable for developers of many skill levels—from those who have just been introduced to JavaScript, to seasoned veterans of the web. You will see these features—such as the virtual DOM, JSX, and Flux concepts—as you read this book and discover how they can be used to create complex user interfaces.You will also see, in brief, how Facebook is continually challenging the development world with React Native. React Native is a new open source library for creating native user interfaces utilizing the same principles as React’s JavaScript library. By creating a Native UI library, React has pushed its value proposition of “learn once, write anywhere.” This paradigm shift applies to being able to utilize the core concepts of React in order to make maintainable interfaces. By now it is possible you are thinking that there is nothing React can’t do when it comes to development. This is not the case, and in order to further understand what React is, you need an understanding of what React is not, which you learn later in this chapter. First, you will understand the underlying problems that caused React to be created and how React solves those problems.', 18, 144, '1.7', '14', 'Bìa mềm', '00:00:00', '/book_reactjs.jpg'),
('3', 'Elements of Programming Interviews in Python: The Insiders\' Guide', 1, 'Adnan Aziz', 'Nước ngoài', 828550, 'This is the Python version of our book. See the website for links to the C++ and Java version.Have you ever...\r\nWanted to work at an exciting futuristic company?\r\nStruggled with an interview problem thatcould have been solved in 15 minutes?\r\nWished you could study real-world computing problems?\r\nIf so, you need to read Elements of Programming Interviews (EPI).\r\n\r\nEPI is your comprehensive guide to interviewing for software development roles.\r\n\r\nThe core of EPI is a collection of over 250 problems with detailed solutions. The problems are representative of interview questions asked at leading software companies. The problems are illustrated with 200 figures, 300 tested programs, and 150 additional variants.\r\n\r\nThe book begins with a summary of the nontechnical aspects of interviewing, such as strategies for a great interview, common mistakes, perspectives from the other side of the table, tips on negotiating the best offer, and a guide to the best ways to use EPI. We also provide a summary of data structures, algorithms, and problem solving patterns.\r\n\r\nCoding problems are presented through a series of chapters on basic and advanced data structures, searching, sorting, algorithm design principles, and concurrency. Each chapter stars with a brief introduction, a case study, top tips, and a review of the most important library methods. This is followed by a broad and thought-provoking set of problems.\r\n\r\nA practical, fun approach to computer science fundamentals, as seen through the lens of common programming interview questions.\r\nJeff Atwood/Co-founder, Stack Overflow and Discourse', 97, 441, '3', '17', 'Bìa cứng', '00:00:00', '/python_book.jpg'),
('4', 'HTML and CSS: Design and Build Websites', 1, 'Jon Duckett', 'Nước ngoài', 459895, 'A full-color introduction to the basics of HTML and CSS from the publishers of Wrox!\r\nEvery day, more and more people want to learn some HTML and CSS. Joining the professional web designers and programmers are new audiences who need to know a little bit of code at work (update a content management system or e-commerce store) and those who want to make their personal blogs more attractive. Many books teaching HTML and CSS are dry and only written for those who want to become programmers, which is why this book takes an entirely new approach.\r\n\r\nIntroduces HTML and CSS in a way that makes them accessible to everyone―hobbyists, students, and professionals―and it’s full-color throughout\r\nUtilizes information graphics and lifestyle photography to explain the topics in a simple way that is engaging\r\nBoasts a unique structure that allows you to progress through the chapters from beginning to end or just dip into topics of particular interest at your leisure\r\nThis educational book is one that you will enjoy picking up, reading, then referring back to. It will make you wish other technical topics were presented in such a simple, attractive and engaging way!', 41, 490, '3.1', '18', 'Bìa cứng', '00:00:00', '/css.png'),
('5', '\"HACK\" NÃO 1500', 3, 'Nguyễn Hiệp', 'Nhà Xuất Bản Thế Giới', 425000, 'CUỐN SÁCH HỌC TIẾNG ANH HACK NÃO 1500 SẼ PHÙ HỢP VỚI AI?\r\n- Học sinh cấp 3 đang muốn tăng 1-3 điểm thi tiếng Anh THPTQG;\r\n\r\n- Sinh viên cần thêm ít nhất 200-300 điểm TOEIC để đủ điều kiện ra trường;\r\n\r\n- Người đi làm muốn mở rộng vốn từ để đọc hiểu tài liệu và giao tiếp cơ bản hằng ngày bằng tiếng Anh;\r\n\r\n- Người trung tuổi hoặc lớn tuổi muốn học lại tiếng Anh từ đầu;\r\n\r\n- Các bạn nhỏ hơn với sự hướng dẫn của bố mẹ.', 34, 536, '3', '23', 'Bìa mềm', '00:00:00', '/book_hacknao1500tuvung.jpg'),
('6', '\"HACK\" NÃO IELTS', 3, 'Nguyễn Hiệp', 'NXB Lao động', 495000, 'CUỐN SÁCH HỌC TIẾNG ANH HACK NÃO IELTS SẼ PHÙ HỢP VỚI AI?\r\n- Học sinh cấp 3 đang muốn tăng 1-3 điểm thi tiếng Anh THPTQG;\r\n\r\n- Sinh viên cần thêm ít nhất 200-300 điểm TOEIC để đủ điều kiện ra trường;\r\n\r\n- Người đi làm muốn mở rộng vốn từ để đọc hiểu tài liệu và giao tiếp cơ bản hằng ngày bằng tiếng Anh;\r\n\r\n- Người trung tuổi hoặc lớn tuổi muốn học lại tiếng Anh từ đầu;\r\n\r\n- Các bạn nhỏ hơn với sự hướng dẫn của bố mẹ.', 102, 536, '4.1', '20', 'Bìa mềm', '00:00:00', '/book_hacknao-ielts.jpg'),
('7', 'IELTS 15 ACADEMIC', 3, 'Cambridge', 'CAMBRIDGE', 158000, 'Cambridge IELTS 15 – Cuốn sách thứ 15 trong bộ sách huyền thoại\r\nCambridge IELTS từ nhà xuất bản Cambridge, với 2 phiên bản Academic và\r\nGeneral Training đã chính thức lên kệ tại Công ty Cổ phần Sách Việt Nam.\r\nVới đầy đủ 4 kỹ năng listening, reading, writing, speaking cùng với answer\r\nkeys, Cambridge IELTS 15 sẽ cung cấp những kiến thức đầy đủ từ cấu trúc\r\nbài thi, các modul cần thiết, bài mẫu hay các kĩ năng cần thiết giúp bạn có\r\nthể sẵn sàng bước vào kì thi IELTS với những trải nghiệm tốt nhất, sát với\r\nthực tế nhất.', 1, 140, '1.8', '17', 'Bìa mềm', '00:00:00', '/book_ielts.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `maKH` int(11) NOT NULL,
  `tenTk` text NOT NULL,
  `root` text DEFAULT NULL,
  `matKhau` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`maKH`, `tenTk`, `root`, `matKhau`) VALUES
(1, 'trinhphu9872', 'admin', 'hello123'),
(2, 'Quynh1103', 'Admin', 'abc123'),
(3, 'Trongcong1104', 'User', 'abc123'),
(4, 'Dung2333', 'Admin', 'abc123'),
(5, 'Nguye1213', 'User', 'abc123');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `trangthaidonhang`
--

CREATE TABLE `trangthaidonhang` (
  `MaTrangThaiDH` int(11) NOT NULL,
  `MaDH` int(11) NOT NULL,
  `ThoiGian` date NOT NULL,
  `TrangThai` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `trangthaidonhang`
--

INSERT INTO `trangthaidonhang` (`MaTrangThaiDH`, `MaDH`, `ThoiGian`, `TrangThai`) VALUES
(121, 41, '2021-05-06', 'Admin đã tiếp nhận'),
(123, 41, '2021-05-06', 'Đang giao hàng'),
(128, 41, '2021-05-06', 'Chờ xác nhận'),
(138, 48, '2021-05-18', 'Chờ xác nhận'),
(139, 49, '2021-05-18', 'Chờ xác nhận'),
(140, 49, '2021-05-18', 'Admin đã tiếp nhận'),
(141, 50, '2021-05-18', 'Chờ xác nhận'),
(142, 51, '2021-05-18', 'Chờ xác nhận'),
(143, 52, '2021-05-19', 'Chờ xác nhận');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD PRIMARY KEY (`MachiTietDH`),
  ADD KEY `MaDonHang` (`MaDonHang`);

--
-- Chỉ mục cho bảng `chitietgiohang`
--
ALTER TABLE `chitietgiohang`
  ADD KEY `MaGioHang` (`MaGioHang`);

--
-- Chỉ mục cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`MaDH`);

--
-- Chỉ mục cho bảng `giohang`
--
ALTER TABLE `giohang`
  ADD PRIMARY KEY (`MaGH`);

--
-- Chỉ mục cho bảng `lichsugd`
--
ALTER TABLE `lichsugd`
  ADD PRIMARY KEY (`MaGD`),
  ADD KEY `MaDH` (`MaDH`),
  ADD KEY `MaKH` (`MaKH`);

--
-- Chỉ mục cho bảng `loaisanpham`
--
ALTER TABLE `loaisanpham`
  ADD PRIMARY KEY (`MaLoaiSP`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`MaSP`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`maKH`);

--
-- Chỉ mục cho bảng `trangthaidonhang`
--
ALTER TABLE `trangthaidonhang`
  ADD PRIMARY KEY (`MaTrangThaiDH`),
  ADD KEY `MaDH` (`MaDH`);

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD CONSTRAINT `chitietdonhang_ibfk_1` FOREIGN KEY (`MaDonHang`) REFERENCES `donhang` (`MaDH`);

--
-- Các ràng buộc cho bảng `chitietgiohang`
--
ALTER TABLE `chitietgiohang`
  ADD CONSTRAINT `chitietgiohang_ibfk_1` FOREIGN KEY (`MaGioHang`) REFERENCES `giohang` (`MaGH`);

--
-- Các ràng buộc cho bảng `lichsugd`
--
ALTER TABLE `lichsugd`
  ADD CONSTRAINT `lichsugd_ibfk_1` FOREIGN KEY (`MaDH`) REFERENCES `donhang` (`MaDH`),
  ADD CONSTRAINT `lichsugd_ibfk_2` FOREIGN KEY (`MaKH`) REFERENCES `taikhoan` (`maKH`);

--
-- Các ràng buộc cho bảng `trangthaidonhang`
--
ALTER TABLE `trangthaidonhang`
  ADD CONSTRAINT `trangthaidonhang_ibfk_1` FOREIGN KEY (`MaDH`) REFERENCES `donhang` (`MaDH`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

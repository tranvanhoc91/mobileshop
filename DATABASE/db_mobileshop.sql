-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2017 年 3 朁E09 日 03:30
-- サーバのバージョン： 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_mobileshop`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `articles`
--

CREATE TABLE `articles` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `alias` varchar(255) NOT NULL,
  `introtext` mediumtext NOT NULL,
  `fulltext` mediumtext NOT NULL,
  `image` varchar(250) NOT NULL,
  `section_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `author` varchar(100) NOT NULL,
  `created` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `modified` datetime NOT NULL,
  `modified_by` int(11) NOT NULL,
  `published` tinyint(4) NOT NULL DEFAULT '1',
  `time_up` datetime NOT NULL,
  `time_down` datetime NOT NULL,
  `ordering` int(11) NOT NULL,
  `metakey` text NOT NULL,
  `metadesc` text NOT NULL,
  `access` int(11) NOT NULL,
  `hits` int(11) NOT NULL,
  `trash` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `articles`
--

INSERT INTO `articles` (`id`, `title`, `alias`, `introtext`, `fulltext`, `image`, `section_id`, `category_id`, `menu_id`, `author`, `created`, `created_by`, `modified`, `modified_by`, `published`, `time_up`, `time_down`, `ordering`, `metakey`, `metadesc`, `access`, `hits`, `trash`) VALUES
(1, 'iPhone 4 xách tay lại rớt giá.', 'iPhone-4-xach-tay-lai-rot-gia.', 'Sau khi đạt ngưỡng gần 22 triệu đồng cho loại 32GB, giá iPhone 4 xách tay tại nhiều cửa hàng đồng loạt giảm nhẹ trong sáng nay.', '<div class="Normal">\r\n	<p class="Normal">\r\n		Hiện iPhone 4 phi&ecirc;n bản quốc tế loại 16GB rao b&aacute;n tại web b&aacute;n h&agrave;ng R&acirc;u V&agrave;ng, TP HCM chỉ c&ograve;n 18,5 triệu đồng, giảm 400.000 đồng so với tuần trước. C&ograve;n phi&ecirc;n bản 32GB gi&aacute; 21,5 triệu đồng, giảm 400.000 đồng.</p>\r\n	<span class="Apple-tab-span" style="white-space: pre;">&nbsp;</span>\r\n	<table align="center" border="0" cellpadding="3" cellspacing="0" style="width: 1px;">\r\n		<tbody>\r\n			<tr>\r\n				<td>\r\n					<img alt="iPhone 4 xách tay lại rớt giá" height="320" src="http://images.thegioididong.com/Files/2010/11/15/24437/22_iPhone-4-xach-tay-lai-rot-gia.jpg" title="iPhone 4 xách tay lại rớt giá" width="480" /></td>\r\n			</tr>\r\n			<tr>\r\n				<td class="Image">\r\n					<div style="text-align: center;">\r\n						Gi&aacute; iPhone 4 x&aacute;ch tay đồng loạt hạ nhiệt. Ảnh:<em> Ho&agrave;ng H&agrave;.</em></div>\r\n				</td>\r\n			</tr>\r\n		</tbody>\r\n	</table>\r\n	<p class="Normal">\r\n		Hệ thống cửa h&agrave;ng của Nhật Cường , iPhone 4 loại 16GB được rao b&aacute;n với gi&aacute; 18,9 triệu đồng, giảm 300.000 đồng so với cuối tuần trước. C&ograve;n phi&ecirc;n bản 32GB giảm từ mức 21,9 triệu đồng xuống c&ograve;n 21,6 triệu đồng, giảm 300.000 đồng. Ngo&agrave;i giảm gi&aacute;, kh&aacute;ch h&agrave;ng mua sản phẩm tại đ&acirc;y c&ograve;n được hưởng ch&iacute;nh s&aacute;ch khuyến m&atilde;i như k&egrave;m theo ốp lưng, bao da...</p>\r\n	<p class="Normal">\r\n		Tại một số cửa h&agrave;ng kh&aacute;c ở H&agrave; Nội, gi&aacute; iPhone 4 cũng giảm nhẹ, khoảng v&agrave;i trăm ngh&igrave;n đồng so với trước. Hiện iPhone 4 loại 32 GB phi&ecirc;n bản quốc tế được ch&agrave;o b&aacute;n tại cửa h&agrave;ng iShopvn với gi&aacute; 21,6 triệu đồng, tăng 100.000 đồng so với trước. Gi&aacute; ni&ecirc;m yết bằng đồng đ&ocirc;la Mỹ l&agrave; 1.026 USD. Tuy nhi&ecirc;n, phi&ecirc;n bản 16GB lại giảm từ mức 19,5 triệu đồng xuống c&ograve;n 18,9 triệu đồng.</p>\r\n	<p class="Normal">\r\n		Trong số c&aacute;c điểm b&aacute;n iPhone 4 (kh&ocirc;ng thuộc hệ thống nh&agrave; mạng), Trung t&acirc;m Viễn th&ocirc;ng Asia lu&ocirc;n ni&ecirc;m yết gi&aacute; b&aacute;n thấp hơn so với c&aacute;c điểm b&aacute;n kh&aacute;c. Hiện iPhone 4 loại 16GB phi&ecirc;n bản quốc tế tại đ&acirc;y chỉ c&ograve;n 18,2 triệu đồng v&agrave; phi&ecirc;n bản 32GB gi&aacute; ni&ecirc;m yết 21 triệu đồng.</p>\r\n	<p class="Normal">\r\n		Cuối tuần qua, hai h&atilde;ng viễn th&ocirc;ng VinaPhone v&agrave; Viettel tiếp tục tung ra thị trường khoảng 700 chiếc iPhone 4. Trong đ&oacute;, Viettel 200 chiếc, c&ograve;n VinaPhone 500 chiếc. Tuy nhi&ecirc;n, số lượng m&aacute;y n&agrave;y được ti&ecirc;u thụ ngay trong khoảng 2 giờ mở b&aacute;n.</p>\r\n	<p class="Normal">\r\n		Việc iPhone 4 của nh&agrave; mạng thấp hơn gi&aacute; tr&ecirc;n thị trường tự do v&agrave;i triệu đồng l&agrave; nguy&ecirc;n nh&acirc;n khiến sản phẩm b&aacute;n tại đ&acirc;y vẫn sốt. Hiện phi&ecirc;n bản 16GB kh&ocirc;ng b&aacute;n k&egrave;m g&oacute;i cước cam kết của Viettel v&agrave;o khoảng 14,5 triệu đồng v&agrave; 16,7 triệu đồng với phi&ecirc;n bản 32GB. Theo kế hoạch, từ nay đến cuối th&aacute;ng VinaPhone v&agrave; Viettel sẽ đưa về thị trường khoảng 1.000 chiếc iPhone 4 nữa.</p>\r\n</div>\r\n', 'iPhone_4_xach_tay_lai_rot_gia._1316188632.jpg', 3, 23, 0, 'Triệu Gia Thắng', '2011-09-01 21:23:48', 1, '0000-00-00 00:00:00', 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Apple,mobile,iphone,iphone4, điện thoại, smartphone', 'mobileshop,mobile,it,nokia,samsung,iphone,motorola,Q-mobile,LG...', 0, 65, 0),
(23, '10 smartphone mới về Việt Nam', '10-smartphone-moi-ve-viet-nam', 'ICTnews – Bất chấp ảnh hưởng của lạm phát đẩy chi phí sinh hoạt lên cao khiến phần đông người tiêu dùng phải “thắt lưng buộc bụng”, điện thoại di động vẫn là lĩnh vực đang phát triển bùng nổ tại Việt Nam.', '<div style="margin-top: 10px;">\r\n	<table align="center" border="0" cellpadding="2" cellspacing="2" style="text-align: right;" width="80%">\r\n		<tbody>\r\n			<tr>\r\n				<td>\r\n					<img alt="10 smartphone mới về Việt Nam" border="1" height="331" src="http://images.thegioididong.com/Files/2010/11/08/24118/21_10-smartphone-moi-ve-Viet-Nam.jpg" title="10 smartphone mới về Việt Nam" width="480" /></td>\r\n			</tr>\r\n			<tr>\r\n				<td>\r\n					<div style="text-align: center;">\r\n						HTC HD7 </div>\r\n				</td>\r\n			</tr>\r\n			<tr>\r\n				<td>\r\n					<img alt="10 smartphone mới về Việt Nam" border="1" height="333" src="http://images.thegioididong.com/Files/2010/11/08/24118/22_10-smartphone-moi-ve-Viet-Nam.jpg" title="10 smartphone mới về Việt Nam" width="480" /></td>\r\n			</tr>\r\n			<tr>\r\n				<td style="text-align: center;">\r\n					HTC Desire HD<br />\r\n					&nbsp;</td>\r\n			</tr>\r\n			<tr>\r\n				<td>\r\n					<img alt="10 smartphone mới về Việt Nam" border="1" height="360" src="http://images.thegioididong.com/Files/2010/11/08/24118/23_10-smartphone-moi-ve-Viet-Nam.jpg" title="10 smartphone mới về Việt Nam" width="480" /></td>\r\n			</tr>\r\n			<tr>\r\n				<td style="text-align: center;">\r\n					Samsung Omnia 7<br />\r\n					&nbsp;</td>\r\n			</tr>\r\n			<tr>\r\n				<td>\r\n					<img alt="10 smartphone mới về Việt Nam" border="1" height="308" src="http://images.thegioididong.com/Files/2010/11/08/24118/24_10-smartphone-moi-ve-Viet-Nam.jpg" title="10 smartphone mới về Việt Nam" width="480" /></td>\r\n			</tr>\r\n			<tr>\r\n				<td style="text-align: center;">\r\n					Nokia N8</td>\r\n			</tr>\r\n			<tr>\r\n				<td>\r\n					<img alt="10 smartphone mới về Việt Nam" border="1" height="342" src="http://images.thegioididong.com/Files/2010/11/08/24118/25_10-smartphone-moi-ve-Viet-Nam.jpg" title="10 smartphone mới về Việt Nam" width="480" /></td>\r\n			</tr>\r\n			<tr>\r\n				<td style="text-align: center;">\r\n					Samsung Galaxy Tab<br />\r\n					&nbsp;</td>\r\n			</tr>\r\n			<tr>\r\n				<td>\r\n					<img alt="10 smartphone mới về Việt Nam" border="1" height="355" src="http://images.thegioididong.com/Files/2010/11/08/24118/26_10-smartphone-moi-ve-Viet-Nam.jpg" title="10 smartphone mới về Việt Nam" width="480" /></td>\r\n			</tr>\r\n			<tr>\r\n				<td style="text-align: center;">\r\n					HTC Desire Z<br />\r\n					&nbsp;</td>\r\n			</tr>\r\n			<tr>\r\n				<td>\r\n					<img alt="10 smartphone mới về Việt Nam" border="1" height="356" src="http://images.thegioididong.com/Files/2010/11/08/24118/27_10-smartphone-moi-ve-Viet-Nam.jpg" title="10 smartphone mới về Việt Nam" width="480" /></td>\r\n			</tr>\r\n			<tr>\r\n				<td style="text-align: center;">\r\n					LG Optimus 7<br />\r\n					&nbsp;</td>\r\n			</tr>\r\n			<tr>\r\n				<td>\r\n					<img alt="10 smartphone mới về Việt Nam" border="1" height="320" src="http://images.thegioididong.com/Files/2010/11/08/24118/28_10-smartphone-moi-ve-Viet-Nam.jpg" title="10 smartphone mới về Việt Nam" width="480" /></td>\r\n			</tr>\r\n			<tr>\r\n				<td style="text-align: center;">\r\n					Dell Streak<br />\r\n					&nbsp;</td>\r\n			</tr>\r\n			<tr>\r\n				<td>\r\n					<img alt="10 smartphone mới về Việt Nam" border="1" height="320" src="http://images.thegioididong.com/Files/2010/11/08/24118/29_10-smartphone-moi-ve-Viet-Nam.jpg" title="10 smartphone mới về Việt Nam" width="480" /></td>\r\n			</tr>\r\n			<tr>\r\n				<td style="text-align: center;">\r\n					Nokia C7<br />\r\n					&nbsp;</td>\r\n			</tr>\r\n			<tr>\r\n				<td>\r\n					<img alt="10 smartphone mới về Việt Nam" border="1" height="366" src="http://images.thegioididong.com/Files/2010/11/08/24118/30_10-smartphone-moi-ve-Viet-Nam.jpg" title="10 smartphone mới về Việt Nam" width="480" /></td>\r\n			</tr>\r\n			<tr>\r\n				<td>\r\n					<div style="text-align: center;">\r\n						HTC Trophy </div>\r\n					<div style="text-align: right;">\r\n						&nbsp;</div>\r\n					<div style="text-align: right;">\r\n						&nbsp;</div>\r\n					<div style="text-align: right;">\r\n						Theo Kim Huệ </div>\r\n				</td>\r\n			</tr>\r\n		</tbody>\r\n	</table>\r\n</div>\r\n', '10_smartphone_moi_ve_Viet_Nam_1316189738.jpg', 3, 23, 0, 'Triệu Gia Thắng', '2011-09-12 00:00:00', 1, '0000-00-00 00:00:00', 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'mobilephone,apple,smartphone, điện thoại', 'Thế giới điện thoại,mobileshop,công nghệ thông tin,bán hàng trực tuyến,điện thoại di động..', 0, 65, 0),
(57, 'FBI: Hàng trăm nghìn người có thể sẽ mất Internet vào tháng 7', 'fbI-hang-tram-nghin-nguoi-co-the-se-mat-Internet-vao-thang-7', 'Theo FBI, người dùng Internet cần kiểm tra máy tính có bị lây nhiễm một loại vi rút thay đổi DNS hay không, trước nguy cơ họ có thể bị mất Internet vào tháng 7/2012.', '<p>\r\n	&nbsp;</p>\r\n<p style="margin-top: 5px; margin-right: 0px; margin-bottom: 12px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-style: initial; border-color: initial; border-image: initial; outline-width: 0px; outline-style: initial; outline-color: initial; font-size: 13px; vertical-align: baseline; background-image: initial; background-attachment: initial; background-origin: initial; background-clip: initial; background-color: transparent; text-indent: 20px; color: rgb(0, 0, 0); font-family: ''Helvetica Neue'', Helvetica, Arial, sans-serif; line-height: 19px; ">\r\n	Theo FBI, người d&ugrave;ng Internet cần kiểm tra m&aacute;y t&iacute;nh c&oacute; bị l&acirc;y nhiễm một loại vi r&uacute;t thay đổi DNS hay kh&ocirc;ng, trước nguy cơ họ c&oacute; thể bị mất Internet v&agrave;o th&aacute;ng 7/2012.</p>\r\n<div class="image-container image-center" style="margin-top: 10px; margin-right: auto; margin-bottom: 10px; margin-left: auto; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-style: initial; border-color: initial; border-image: initial; outline-width: 0px; outline-style: initial; outline-color: initial; font-size: 13px; vertical-align: baseline; background-image: initial; background-attachment: initial; background-origin: initial; background-clip: initial; background-color: transparent; text-align: center; color: rgb(0, 0, 0); font-family: ''Helvetica Neue'', Helvetica, Arial, sans-serif; line-height: 19px; width: 460px; ">\r\n	<a class="fancybox" href="http://vtcdn.com/sites/default/files/images/2012/4/21/img-1334979343-1.jpg" rel="lightbox" style="margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-style: initial; border-color: initial; border-image: initial; outline-width: 0px; outline-style: initial; outline-color: initial; vertical-align: baseline; background-image: initial; background-attachment: initial; background-origin: initial; background-clip: initial; background-color: transparent; color: rgb(34, 102, 187); text-decoration: none; "><img alt="" src="http://vtcdn.com/sites/default/files/imagecache/med/images/2012/4/21/img-1334979343-1.jpg" style="border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-style: initial; border-color: initial; border-image: initial; margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; outline-width: 0px; outline-style: initial; outline-color: initial; font-size: 1em; vertical-align: baseline; background-image: initial; background-attachment: initial; background-origin: initial; background-clip: initial; background-color: transparent; max-width: 100%; background-position: initial initial; background-repeat: initial initial; " title="" /></a></div>\r\n<p style="margin-top: 5px; margin-right: 0px; margin-bottom: 12px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-style: initial; border-color: initial; border-image: initial; outline-width: 0px; outline-style: initial; outline-color: initial; font-size: 13px; vertical-align: baseline; background-image: initial; background-attachment: initial; background-origin: initial; background-clip: initial; background-color: transparent; text-indent: 20px; color: rgb(0, 0, 0); font-family: ''Helvetica Neue'', Helvetica, Arial, sans-serif; line-height: 19px; ">\r\n	Mọi việc bắt đầu từ khi một nh&oacute;m hacker quốc tế t&igrave;m c&aacute;ch kiểm so&aacute;t m&aacute;y t&iacute;nh bị l&acirc;y nhiễm tr&ecirc;n to&agrave;n thế giới để thực hiện h&agrave;nh vi quảng c&aacute;o trực tuyến lừa đảo.</p>\r\n<p style="margin-top: 5px; margin-right: 0px; margin-bottom: 12px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-style: initial; border-color: initial; border-image: initial; outline-width: 0px; outline-style: initial; outline-color: initial; font-size: 13px; vertical-align: baseline; background-image: initial; background-attachment: initial; background-origin: initial; background-clip: initial; background-color: transparent; text-indent: 20px; color: rgb(0, 0, 0); font-family: ''Helvetica Neue'', Helvetica, Arial, sans-serif; line-height: 19px; ">\r\n	Th&aacute;ng 11/2011, Cục Điều tra Li&ecirc;n bang Mỹ (FBI) v&agrave; c&aacute;c nh&agrave; chức tr&aacute;ch ph&aacute;t hiện một nh&oacute;m hacker đang thực hiện quảng c&aacute;o trực tuyến tr&aacute;i ph&eacute;p tr&ecirc;n rất nhiều m&aacute;y t&iacute;nh bị l&acirc;y nhiễm. Ch&uacute;ng lợi dụng c&aacute;c lỗ hổng trong hệ điều h&agrave;nh Microsoft Windows để c&agrave;i đặt phần mềm g&acirc;y hại tr&ecirc;n 570.000 m&aacute;y t&iacute;nh to&agrave;n thế giới. M&aacute;y t&iacute;nh l&acirc;y nhiễm sẽ bị v&ocirc; hiệu h&oacute;a khả năng cập nhật phần mềm chống vi r&uacute;t v&agrave; thay đổi c&aacute;ch tương th&iacute;ch với c&aacute;c địa chỉ website theo hệ thống t&ecirc;n miền Internet (DNS).</p>\r\n<p style="margin-top: 5px; margin-right: 0px; margin-bottom: 12px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-style: initial; border-color: initial; border-image: initial; outline-width: 0px; outline-style: initial; outline-color: initial; font-size: 13px; vertical-align: baseline; background-image: initial; background-attachment: initial; background-origin: initial; background-clip: initial; background-color: transparent; text-indent: 20px; color: rgb(0, 0, 0); font-family: ''Helvetica Neue'', Helvetica, Arial, sans-serif; line-height: 19px; ">\r\n	Hệ thống DNS l&agrave; một mạng lưới c&aacute;c m&aacute;y chủ c&oacute; nhiệm vụ dịch địa chỉ web th&agrave;nh c&aacute;c địa kĩ thuật số chỉ số m&agrave; m&aacute;y t&iacute;nh sử dụng. M&aacute;y t&iacute;nh bị l&acirc;y nhiễm bị lập tr&igrave;nh lại để sử dụng c&aacute;c m&aacute;y chủ DNS giả mạo của hacker. Điều n&agrave;y cho ph&eacute;p hacker chuyển hướng m&aacute;y t&iacute;nh tới c&aacute;c phi&ecirc;n bản giả mạo của một trang web bất k&igrave;, v&agrave; thu lợi nhuận từ những website giả mạo đ&oacute;. Theo FBI, số tiền ch&uacute;ng thu về được l&agrave; &iacute;t nhất 14 triệu USD.</p>\r\n<p style="margin-top: 5px; margin-right: 0px; margin-bottom: 12px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-style: initial; border-color: initial; border-image: initial; outline-width: 0px; outline-style: initial; outline-color: initial; font-size: 13px; vertical-align: baseline; background-image: initial; background-attachment: initial; background-origin: initial; background-clip: initial; background-color: transparent; text-indent: 20px; color: rgb(0, 0, 0); font-family: ''Helvetica Neue'', Helvetica, Arial, sans-serif; line-height: 19px; ">\r\n	&Ocirc;ng Tom Grasso, một nh&acirc;n vi&ecirc;n cao cấp của FBI, cho biết: &ldquo;Ch&uacute;ng t&ocirc;i nhận ra rằng nếu ngay lập tức l&agrave;m ngừng hoạt động hệ thống của tội phạm, c&aacute;c nạn nh&acirc;n sẽ kh&ocirc;ng thể sử dụng Internet, người d&ugrave;ng b&igrave;nh thường sẽ mở tr&igrave;nh duyệt Internet Explorer v&agrave; thấy hiển thị th&ocirc;ng b&aacute;o &ldquo;page not found&rdquo; v&agrave; nghĩ rằng Internet bị đứt kết nối&rdquo;.</p>\r\n<p style="margin-top: 5px; margin-right: 0px; margin-bottom: 12px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-style: initial; border-color: initial; border-image: initial; outline-width: 0px; outline-style: initial; outline-color: initial; font-size: 13px; vertical-align: baseline; background-image: initial; background-attachment: initial; background-origin: initial; background-clip: initial; background-color: transparent; text-indent: 20px; color: rgb(0, 0, 0); font-family: ''Helvetica Neue'', Helvetica, Arial, sans-serif; line-height: 19px; ">\r\n	Ch&iacute;nh v&igrave; thế trước khi tiến h&agrave;ng bắt giữ, FBI đ&atilde; mời &ocirc;ng Paul Vixie, Chủ tịch ki&ecirc;m nh&agrave; s&aacute;ng lập li&ecirc;n đo&agrave;n&nbsp;<em style="margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-style: initial; border-color: initial; border-image: initial; outline-width: 0px; outline-style: initial; outline-color: initial; vertical-align: baseline; background-image: initial; background-attachment: initial; background-origin: initial; background-clip: initial; background-color: transparent; ">Internet Systems Consortium</em>, tới c&agrave;i đặt hai m&aacute;y chủ Internet để thay thế những m&aacute;y chủ giả mạo bị tịch thu m&agrave; m&aacute;y t&iacute;nh bị l&acirc;y nhiễm đang sử dụng. C&aacute;c quan chức li&ecirc;n bang dự định cho m&aacute;y chủ hoạt động tới th&aacute;ng 3/2012 để người d&ugrave;ng c&oacute; cơ hội l&agrave;m sạch m&aacute;y t&iacute;nh, nhưng mọi việc vẫn chưa ho&agrave;n th&agrave;nh. T&ograve;a &aacute;n Li&ecirc;n bang đ&atilde; đồng &yacute; l&ugrave;i hạn ch&oacute;t đến ng&agrave;y 9/7/2012. Sau ng&agrave;y n&agrave;y, những m&aacute;y t&igrave;nh c&ograve;n chứa m&atilde; độc sẽ bị ngắt kết nối Internet do m&aacute;y chủ DNS m&agrave; ch&uacute;ng trỏ đến kh&ocirc;ng c&ograve;n hoạt động.</p>\r\n<p style="margin-top: 5px; margin-right: 0px; margin-bottom: 12px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-style: initial; border-color: initial; border-image: initial; outline-width: 0px; outline-style: initial; outline-color: initial; font-size: 13px; vertical-align: baseline; background-image: initial; background-attachment: initial; background-origin: initial; background-clip: initial; background-color: transparent; text-indent: 20px; color: rgb(0, 0, 0); font-family: ''Helvetica Neue'', Helvetica, Arial, sans-serif; line-height: 19px; ">\r\n	FBI khuyến c&aacute;o người d&ugrave;ng n&ecirc;n gh&eacute; thăm trang web www.dcwg.org do một đối t&aacute;c bảo mật cung cấp. Trang web n&agrave;y sẽ th&ocirc;ng b&aacute;o cho người d&ugrave;ng l&agrave; họ đ&atilde; bị l&acirc;y nhiễm hay chưa, v&agrave; hướng dẫn c&aacute;ch khắc phục. Hầu hết c&aacute;c nạn nh&acirc;n sẽ kh&ocirc;ng biết m&aacute;y t&iacute;nh của m&igrave;nh đ&atilde; bị l&acirc;y nhiễm, mặc d&ugrave; phần mềm g&acirc;y hại l&agrave;m chậm tốc độ lướt web v&agrave; v&ocirc; hiệu qu&aacute; phần mềm chống vi r&uacute;t, khiến m&aacute;y t&iacute;nh c&oacute; nguy cơ bị x&acirc;m phạm bởi những loại m&atilde; độc kh&aacute;c.</p>\r\n<p style="margin-top: 5px; margin-right: 0px; margin-bottom: 12px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-style: initial; border-color: initial; border-image: initial; outline-width: 0px; outline-style: initial; outline-color: initial; font-size: 13px; vertical-align: baseline; background-image: initial; background-attachment: initial; background-origin: initial; background-clip: initial; background-color: transparent; text-indent: 20px; color: rgb(0, 0, 0); font-family: ''Helvetica Neue'', Helvetica, Arial, sans-serif; line-height: 19px; ">\r\n	Theo ICTnews/Huffington Post</p>\r\n', 'fbI-hang-tram-nghin-nguoi-co-the-se-mat-Internet-vao-thang-7-1335026051.jpg', 3, 21, 0, 'Triệu Gia Thắng', '2012-04-22 00:33:01', 1, '0000-00-00 00:00:00', 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, '', '', 0, 68, 0),
(2, 'Loạt công nghệ màn hình cho tương lai của Samsung', 'loat-cong-nghe-man-hinh-cho-tuong-lai-cua-Samsung', 'sao chua co tom tat nhi', '<table align="center" border="0" cellpadding="3" cellspacing="0" style="text-align: center;" width="12">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n				<img alt="Loạt công nghệ màn hình cho tương lai của Samsung" border="1" height="300" src="http://images.thegioididong.com/Files/2010/11/11/24277/1_Loat-cong-nghe-man-hinh-cho-tuong-lai-cua-Samsung.jpg" title="Loạt công nghệ màn hình cho tương lai của Samsung" width="450" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n				Thiết bị di động 2 m&agrave;n h&igrave;nh Super AMOLED 4,5 inch của h&atilde;ng điện tử H&agrave;n Quốc thu h&uacute;t nhiều sự ch&uacute; &yacute; của kh&aacute;ch tham dự. M&aacute;y hỗ trợ độ tương phản l&ecirc;n đến 100.000:1.<br />\r\n				&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n				<img alt="Loạt công nghệ màn hình cho tương lai của Samsung" border="1" height="250" src="http://images.thegioididong.com/Files/2010/11/11/24277/2_Loat-cong-nghe-man-hinh-cho-tuong-lai-cua-Samsung.jpg" title="Loạt công nghệ màn hình cho tương lai của Samsung" width="450" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n				Tấm nền AMOLED 7 inch c&oacute; độ ph&acirc;n giải 1.024 x 600 pixel hứa hẹn được t&iacute;ch hợp trong m&aacute;y t&iacute;nh bảng thế hệ mới của h&atilde;ng.<br />\r\n				&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n				<img alt="Loạt công nghệ màn hình cho tương lai của Samsung" border="1" height="256" src="http://images.thegioididong.com/Files/2010/11/11/24277/3_Loat-cong-nghe-man-hinh-cho-tuong-lai-cua-Samsung.jpg" title="Loạt công nghệ màn hình cho tương lai của Samsung" width="450" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td align="middle" class="Normal">\r\n				Thiết bị hiển thị c&oacute; khả năng uốn cong.<br />\r\n				&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n				<img alt="Loạt công nghệ màn hình cho tương lai của Samsung" border="1" height="352" src="http://images.thegioididong.com/Files/2010/11/11/24277/4_Loat-cong-nghe-man-hinh-cho-tuong-lai-cua-Samsung.jpg" title="Loạt công nghệ màn hình cho tương lai của Samsung" width="450" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td align="middle" class="Normal">\r\n				Sản phẩm gập v&agrave;o như m&aacute;y t&iacute;nh x&aacute;ch tay.<br />\r\n				&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n				<img alt="Loạt công nghệ màn hình cho tương lai của Samsung" border="1" height="252" src="http://images.thegioididong.com/Files/2010/11/11/24277/5_Loat-cong-nghe-man-hinh-cho-tuong-lai-cua-Samsung.jpg" title="Loạt công nghệ màn hình cho tương lai của Samsung" width="450" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td align="middle" class="Normal">\r\n				M&agrave;n h&igrave;nh laptop trong suốt.</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', 'Loat_cong_nghe_man_hinh_cho_tuong_lai_cua_Samsung_1316188716.jpg', 3, 21, 0, 'Triệu Gia Thắng', '2011-09-01 09:38:00', 1, '0000-00-00 00:00:00', 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, '', '', 0, 67, 0),
(3, 'Cận cảnh LG Cookie Camera_Anh hào đa tà', 'can-canh-LG-cookie-camera-anh-hoa-da-ta', 'LG Electronics VN vừa chính thức tung thêm mẫu điện thoại di động mới LG Cookie Camera làm phong phú thêm dòng điện thoại Cookie Series.', '\r\n<div class="Normal"> \r\n  <p style="text-align: justify;">		Là một sản phẩm cảm ứng tiếp theo thuộc Cookie Series phục vụ khách hàng có mức thu thập tầm trung được LG tung ra thị trường, LG Cookie Camera không chỉ có dáng vẻ khỏe mạnh, trẻ trung mà còn tích hợp rất nhiều tính năng tiện ích được các bạn trẻ yêu thích hiện nay. Ngoài những tính năng như kết nối wifi, mạng xã hội, push mail là những tính năng cần thiết phải có, sản phẩm này còn đặc biệt dành cho các khách hàng yêu thích chụp ảnh.</p> \r\n  <p style="text-align: justify;"> <strong>Phó nhóm nhiều “chấm”</strong></p> \r\n  <p style="text-align: justify;">		Phát biểu về việc cho ra đời dòng sản phẩm điện thoại mới này, Ông Na Kyeng Seok – Giám đốc ngành hàng Điện thoại di động LG - cho biết “LG Cookie Camera là một trong những dòng điện thoại mang nhiều tính năng hữu ích và hiện đại được LG thiết kế dành riêng cho nam giới và những ai yêu thích vẻ đẹp cá tính, thích được trở thành các nhiếp ảnh gia. Cookie Camera sở hữu một camera với độ sắc nét cao, tính năng push mail hoàn hảo, chúng tôi mong muốn mang lại cho khách hàng một sản phẩm cao cấp với giá cả phải chăng phù hợp với túi tiền của đa số người tiêu dùng”.</p> \r\n  <p style="text-align: justify;">		Đúng như tên gọi Cookie Camera, điểm đặc biệt nhất của sản phẩm này chính là tính năng chụp ảnh cực kỳ sắc nét và tinh tế của nó. Cookie Camera được trang bị một máy ảnh có độ phân giải lên tới 5.0MP với đèn Flash LED giúp cho tấm ảnh luôn sáng đẹp ngay cả khi ở trong nhà hay trong điều kiện thiếu ánh sáng. Ngoài ra, hệ thống đèn LED này cũng hoạt động rất hiệu quả khi có nhu cầu sử dụng máy ảnh như một máy quay video. Để giúp lưu lại những khoảnh khắc đáng nhớ nhất, đẹp nhất trong cuộc sống thường ngày, LG đã hợp tác với hãng sản xuất ống kính máy ảnh nổi tiếng thế giới của Đức, Schneider&nbsp; Kreuznach – một nhãn hiệu ống kính máy ảnh hàng đầu, chuyên cung cấp cho các hãng máy ảnh uy tín như Samsung, Kodak… Chính sự hợp tác này đã giúp Cookie Camera,&nbsp; trở thành một trong những sản phẩm điện thoại máy ảnh chất lượng cao với giá cả phải chăng nhất hiện nay.</p> \r\n  <p style="text-align: justify;"> <strong>Thiết kế cá tính</strong></p> \r\n  <p style="text-align: justify;">		Cookie Camera&nbsp; được LG chăm chút kỹ lưỡng về mặt thiết kế với tông màu sẫm mạnh mẽ. Màn hình cảm ứng 3 inch chiếm hầu hết mặt trước của máy, chỉ để lại ba nút chức năng (khởi tạo/kết thúc cuộc gọi &amp; phím Menu) ở phía dưới. Mặt sau được thiết kế như một chiếc máy ảnh phổ thông với ống kính và đèn flash LED. Nhờ đó, LG Cookie Camera trông rất sang trọng và nam tính, phù hợp với đối tượng khách hàng nam giới.</p> \r\n  <p style="text-align: justify;">		Phần cạnh máy bao gồm kết nối microUSB, nút chụp ảnh và nút tăng giảm âm lượng. Nút nguồn/ khóa máy được bố trí ở trên đỉnh. Tại đây cũng có giắc cắm tai nghe chuẩn 3,5 mm, phù hợp với tất cả tai nghe của các hãng khác nhau. Điều đó tạo sự tiện lợi nếu bạn là người có yêu cầu cao về chất lượng âm thanh.</p> \r\n  <p style="text-align: justify;">		Kết nối và chia sẻ, Cookie Camera hỗ trợ kết nối Wi-fi kết hợp với trình duyệt web mạnh mẽ hàng đầu Opera Mini 5 mang lại cho người dùng một trải nghiệm duyệt web như trên máy tính. Được tích hợp sẵn ứng dụng quản lý mạng xã hội như Facebook, Twitter, hay Myspace, người dùng có thể dễ dàng truy cập vào các mạng xã hội này để chia sẻ và giao lưu với tất cả bạn bè. Không chỉ là một công cụ giải trí, Cookie Camera&nbsp; còn rất hữu ích dành cho những người cần liên tục kiểm tra lịch làm việc, email, văn bản hay công việc chưa hoàn tất, cho phép người dùng có thể push mail với tất cả các tài khoản thông dụng như Gmail, Hotmail, Yahoo mail hay những tài khoản email khác. Với tính năng này, người dùng có thể kiểm tra hòm thư điện tử của mình mọi lúc mọi nơi như trên chiếc máy tính cá nhân mà không lo ngại sẽ bỏ lỡ một tin tức quan trọng nào gửi qua email.</p> \r\n  <p style="text-align: center;"> <img hspace="0" border="0" align="baseline" title="Cận cảnh LG Cookie Camera – Anh hào đa tài." alt="Cận cảnh LG Cookie Camera – Anh hào đa tài." src="http://images.thegioididong.com/Files/2010/11/11/24300/53_Can-canh-LG-Cookie-Camera---Anh-hao-da-tai.jpg" /></p> \r\n  <p style="text-align: justify;"> <strong>Nhiều tính năng gia tăng: </strong></p> \r\n  <p style="text-align: justify;">		Một ứng dụng nữa không thể bỏ qua của LG Cookie Camera là có thể chụp ảnh màn hình (website, tin nhắn, ghi chú…), sau đó tự chỉnh sửa lại bằng những công cụ màu sắc, đồ họa đơn giản và gửi tin nhắn MMS hay đính kèm trong email gửi cho bạn bè của mình. Công cụ này sẽ là phần hỗ trợ tuyệt vời cho những bạn đam mê sáng tạo và mong muốn tạo dấu ấn của mình qua mỗi khung hình. Song hành với ống kính Schneider&nbsp; Kreuznach 5.0 MP, việc tạo dáng và chỉnh sửa ảnh sẽ được hoàn tất trong một khâu khép kín trên chiếc di động Cookie Camera.</p> \r\n  <p style="text-align: justify;">		Camera đã một lần nữa chứng tỏ sự thông minh vượt trội so với các dòng điện thoại trước đó với việc khóa mở màn hình thông minh và truy cập nhanh các tính năng bằng cách vẽ lên màn hình các biểu tượng. Mỗi một tính năng của chiếc điện thoại sẽ được gắn với một hình ảnh đơn giản nhất định do khách hàng lựa chọn. Và khi muốn truy cập nhanh vào những ứng dụng này, thay vì phải mở máy, nhấn vào các biểu tượng thì việc cần làm sẽ chỉ là vẽ lên màn hình cảm ứng của LG Camera&nbsp; những hình mà bạn lựa chọn cho những ứng dụng đó. Ví dụ: có thể gắn ứng dụng email bằng một chữ M, hộp tin nhắn bằng một hình tròn hay hình tam giác…. Màn hình cảm ứng sẽ nhanh chóng nhận và xử lý dữ liệu để đưa người sử dụng tới đúng ứng dụng cần. Điều này sẽ tạo cho người dùng một cảm giác hết sức thú vị và thích thú bởi sự thân thiện và ngộ nghĩnh của nó.</p> \r\n  <p style="text-align: justify;">		Bên cạnh những tính năng nổi trội, LG Cookie Camera&nbsp; vẫn sở hữu những tính năng của một chiếc điện thoại thông thường, kỹ thuật liên lạc tốt, thiết kế hiện đại trẻ trung với kích thước màn hình rộng tới 3 inches cho độ phân giải lớn, màu sắc rực rỡ; bộ nhớ trong lên tới 30MB và hỗ trợ thẻ nhớ ngoài MicroSD 16GB, đảm bảo lưu trữ được rất nhiều thông tin cho khách hàng.Sản phẩm LG Cookie Camera&nbsp; hiện đã có bán với giá 3,4 triệu đồng tại tất cả các đại lý điện thoại di động, các siêu thị điện máy và các cửa hàng trên toàn quốc. LG Cookie Camera với dáng vẻ khoẻ mạnh, trẻ trung thích hợp với nhiều bạn trẻ cá tính.</p> \r\n</div> ', 'Can_canh_LG_Cookie_Camera_Anh_hao_da_ta_1316189091.jpg', 3, 23, 0, 'Triệu Gia Thắng', '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, '', '', 0, 131, 0),
(17, 'Nghị sĩ Nga phát sốt vì iPhone và iPad', 'Nghị sĩ Nga phát sốt vì iPhone và iPad', 'Những hình ảnh được chụp gần đây trong cuộc họp Hạ viện Nga cho thấy nhiều nhà làm luật ở nước này rất hứng thú với smartphone, laptop hay máy tính bảng của Apple.>Sư thầy phát sốt vì iPhone 4', '\r\n<table width="52" cellspacing="0" cellpadding="3" border="0" align="center" style="text-align: center;"> \r\n  <tbody> \r\n    <tr> \r\n      <td> <img width="470" height="264" border="1" alt="Nghị sĩ Nga phát sốt vì iPhone và iPad" title="Nghị sĩ Nga phát sốt vì iPhone và iPad" src="http://images.thegioididong.com/Files/2010/11/15/24433/1_Nghi-si-Nga-phat-sot-vi-iPhone-va-iPad.jpg" /></td> \r\n    </tr> \r\n    <tr> \r\n      <td align="middle" class="Normal">				Tổng thống Dmitry Medvedev dùng máy tính bảng của Apple.<br /><br /></td> \r\n    </tr> \r\n    <tr> \r\n      <td> <img width="470" height="313" border="1" alt="Nghị sĩ Nga phát sốt vì iPhone và iPad" title="Nghị sĩ Nga phát sốt vì iPhone và iPad" src="http://images.thegioididong.com/Files/2010/11/15/24433/2_Nghi-si-Nga-phat-sot-vi-iPhone-va-iPad.jpg" /></td> \r\n    </tr> \r\n    <tr> \r\n      <td align="middle" class="Normal">				Một nghị sĩ say mê lướt cảm ứng trên iPad.<br /><br /></td> \r\n    </tr> \r\n    <tr> \r\n      <td> <img width="470" height="313" border="1" alt="Nghị sĩ Nga phát sốt vì iPhone và iPad" title="Nghị sĩ Nga phát sốt vì iPhone và iPad" src="http://images.thegioididong.com/Files/2010/11/15/24433/3_Nghi-si-Nga-phat-sot-vi-iPhone-va-iPad.jpg" /></td> \r\n    </tr> \r\n    <tr> \r\n      <td> <img width="470" height="313" border="1" alt="Nghị sĩ Nga phát sốt vì iPhone và iPad" title="Nghị sĩ Nga phát sốt vì iPhone và iPad" src="http://images.thegioididong.com/Files/2010/11/15/24433/4_Nghi-si-Nga-phat-sot-vi-iPhone-va-iPad.jpg" /></td> \r\n    </tr> \r\n    <tr> \r\n      <td align="middle" class="Normal">				Trao đổi công việc.<br /><br /></td> \r\n    </tr> \r\n    <tr> \r\n      <td> <img width="470" height="705" border="1" alt="Nghị sĩ Nga phát sốt vì iPhone và iPad" title="Nghị sĩ Nga phát sốt vì iPhone và iPad" src="http://images.thegioididong.com/Files/2010/11/15/24433/5_Nghi-si-Nga-phat-sot-vi-iPhone-va-iPad.jpg" /></td> \r\n    </tr> \r\n    <tr> \r\n      <td align="middle" class="Normal">				Hướng dẫn cách sử dụng.<br /><br /></td> \r\n    </tr> \r\n    <tr> \r\n      <td> <img width="470" height="313" border="1" alt="Nghị sĩ Nga phát sốt vì iPhone và iPad" title="Nghị sĩ Nga phát sốt vì iPhone và iPad" src="http://images.thegioididong.com/Files/2010/11/15/24433/6_Nghi-si-Nga-phat-sot-vi-iPhone-va-iPad.jpg" /></td> \r\n    </tr> \r\n    <tr> \r\n      <td align="middle" class="Normal">				Laptop MacBook.</td> \r\n    </tr> \r\n  </tbody> \r\n</table> ', 'Nghi_si_Nga_phat_sot_vi_iPhone_va_iPad_1316189634.png', 3, 23, 0, 'Triệu Gia Thắng', '2011-08-18 00:00:00', 1, '0000-00-00 00:00:00', 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, '', '', 0, 112, 0),
(4, 'Điện thoại hai sim của Mỹ ở VN', '', 'X-Smart là chiếc điện thoại hai sim với thiết kế khá lạ, model này do hãng Dr.Care chuyên về thiết bị gia đình sản xuất. Máy có hai sim giống điện thoại Trung Quốc.', '\r\n<table width="80%" cellspacing="2" cellpadding="2" border="0" align="center"> \r\n  <tbody> \r\n    <tr> \r\n      <td class="Normal"> <img width="480" height="320" border="1" title="Điện thoại hai sim của Mỹ ở VN" alt="Điện thoại hai sim của Mỹ ở VN" src="http://images.thegioididong.com/Files/2010/11/15/24431/421_dien-thoai-hai-sim-cua-My-o-VN.jpg" /></td> \r\n    </tr> \r\n    <tr> \r\n      <td class="Normal">				Model này được bán ở TP HCM với giá hơn 500 USD.</td> \r\n    </tr> \r\n    <tr> \r\n      <td class="Normal"> <img width="480" height="315" border="1" title="Điện thoại hai sim của Mỹ ở VN" alt="Điện thoại hai sim của Mỹ ở VN" src="http://images.thegioididong.com/Files/2010/11/15/24431/422_dien-thoai-hai-sim-cua-My-o-VN.jpg" /></td> \r\n    </tr> \r\n    <tr> \r\n      <td class="Normal">				Máy có các phụ kiện đi kèm như sạc, tai nghe, cáp USB và bao da vải mềm.</td> \r\n    </tr> \r\n    <tr> \r\n      <td class="Normal"> <img width="480" height="335" border="1" title="Điện thoại hai sim của Mỹ ở VN" alt="Điện thoại hai sim của Mỹ ở VN" src="http://images.thegioididong.com/Files/2010/11/15/24431/423_dien-thoai-hai-sim-cua-My-o-VN.jpg" /></td> \r\n    </tr> \r\n    <tr> \r\n      <td class="Normal">				Mặt trước của máy là màn hình cảm ứng 3,2 inch...</td> \r\n    </tr> \r\n    <tr> \r\n      <td class="Normal"> <img width="480" height="329" border="1" title="Điện thoại hai sim của Mỹ ở VN" alt="Điện thoại hai sim của Mỹ ở VN" src="http://images.thegioididong.com/Files/2010/11/15/24431/424_dien-thoai-hai-sim-cua-My-o-VN.jpg" /></td> \r\n    </tr> \r\n    <tr> \r\n      <td class="Normal">				... phía dưới là các nút bấm số được bố trí theo hàng ngang. Góc dưới, phía phải là hai nút gọi điện sim 1 và 2, viên bi điều khiển ở giữa và phía phải là nút back và tắt cuộc gọi.</td> \r\n    </tr> \r\n    <tr> \r\n      <td class="Normal"> <img width="480" height="259" border="1" title="Điện thoại hai sim của Mỹ ở VN" alt="Điện thoại hai sim của Mỹ ở VN" src="http://images.thegioididong.com/Files/2010/11/15/24431/425_dien-thoai-hai-sim-cua-My-o-VN.jpg" /></td> \r\n    </tr> \r\n    <tr> \r\n      <td class="Normal">				Khe cắm thẻ nhớ microSD bên trái.</td> \r\n    </tr> \r\n    <tr> \r\n      <td class="Normal"> <img width="480" height="304" border="1" title="Điện thoại hai sim của Mỹ ở VN" alt="Điện thoại hai sim của Mỹ ở VN" src="http://images.thegioididong.com/Files/2010/11/15/24431/426_dien-thoai-hai-sim-cua-My-o-VN.jpg" /></td> \r\n    </tr> \r\n    <tr> \r\n      <td class="Normal">				Cạnh phải chiếc di động này là nút tăng giảm âm lượng, camera và giắc 3,5 mm.</td> \r\n    </tr> \r\n    <tr> \r\n      <td class="Normal"> <img width="480" height="291" border="1" title="Điện thoại hai sim của Mỹ ở VN" alt="Điện thoại hai sim của Mỹ ở VN" src="http://images.thegioididong.com/Files/2010/11/15/24431/427_dien-thoai-hai-sim-cua-My-o-VN.jpg" /></td> \r\n    </tr> \r\n    <tr> \r\n      <td class="Normal">				Nút nguồn trên đỉnh.</td> \r\n    </tr> \r\n    <tr> \r\n      <td class="Normal"> <img width="480" height="320" border="1" title="Điện thoại hai sim của Mỹ ở VN" alt="Điện thoại hai sim của Mỹ ở VN" src="http://images.thegioididong.com/Files/2010/11/15/24431/428_dien-thoai-hai-sim-cua-My-o-VN.jpg" /></td> \r\n    </tr> \r\n    <tr> \r\n      <td class="Normal">				Cổng microUSB và cổng sạc phía trên.</td> \r\n    </tr> \r\n    <tr> \r\n      <td class="Normal"> <img width="480" height="368" border="1" title="Điện thoại hai sim của Mỹ ở VN" alt="Điện thoại hai sim của Mỹ ở VN" src="http://images.thegioididong.com/Files/2010/11/15/24431/429_dien-thoai-hai-sim-cua-My-o-VN.jpg" /></td> \r\n    </tr> \r\n    <tr> \r\n      <td class="Normal">				Model này được giới thiệu là chế tác từ sapphire và platinum.</td> \r\n    </tr> \r\n    <tr> \r\n      <td class="Normal"> <img width="480" height="346" border="1" title="Điện thoại hai sim của Mỹ ở VN" alt="Điện thoại hai sim của Mỹ ở VN" src="http://images.thegioididong.com/Files/2010/11/15/24431/430_dien-thoai-hai-sim-cua-My-o-VN.jpg" /></td> \r\n    </tr> \r\n    <tr> \r\n      <td class="Normal">				Màn hình Home.</td> \r\n    </tr> \r\n    <tr> \r\n      <td class="Normal"> <img width="480" height="369" border="1" title="Điện thoại hai sim của Mỹ ở VN" alt="Điện thoại hai sim của Mỹ ở VN" src="http://images.thegioididong.com/Files/2010/11/15/24431/431_dien-thoai-hai-sim-cua-My-o-VN.jpg" /></td> \r\n    </tr> \r\n    <tr> \r\n      <td class="Normal">				Menu chính với các icon hình lục giác.</td> \r\n    </tr> \r\n    <tr> \r\n      <td class="Normal"> <img width="480" height="322" border="1" title="Điện thoại hai sim của Mỹ ở VN" alt="Điện thoại hai sim của Mỹ ở VN" src="http://images.thegioididong.com/Files/2010/11/15/24431/432_dien-thoai-hai-sim-cua-My-o-VN.jpg" /></td> \r\n    </tr> \r\n    <tr> \r\n      <td class="Normal">				Pin theo máy dung lượng 1.500 mAh, hai khe cắm sim nằm phía dưới.</td> \r\n    </tr> \r\n  </tbody> \r\n</table> ', 'Dien_thoai_hai_sim_cua_My_o_VN_1316189223.jpg', 3, 23, 0, 'Triệu Gia Thắng', '2011-08-25 22:23:27', 1, '0000-00-00 00:00:00', 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, '', '', 0, 104, 0),
(5, 'Nokia N8 có giá chính thức 10,5tr VND.', 'nokia-n8-co-gia-chinh-thuc-105tr-vnd.', 'Đại diện của Nokia Việt Nam khẳng định điện thoại được trang bị camera 12 megapixel và hệ điều hành Symbian 3 của họ sẽ có giá thấp hơn nhiều so với hàng xách tay (17 triệu đồng).', '<p class="Lead">\r\n	Đại diện của Nokia Việt Nam khẳng định điện thoại được trang bị camera 12 megapixel v&agrave; hệ điều h&agrave;nh Symbian 3 của họ sẽ c&oacute; gi&aacute; thấp hơn nhiều so với h&agrave;ng x&aacute;ch tay (17 triệu đồng).</p>\r\n<table align="center" border="0" cellpadding="3" cellspacing="0" width="336">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n				<img border="1" height="301" src="http://vnexpress.net/Files/Subject/3B/A2/19/9C/N1.jpg" width="400" /></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n<p class="Normal">\r\n	Hiện người d&ugrave;ng c&oacute; thể đăng k&yacute; mua N8 tr&ecirc;n trang <em>nokia.com.vn/n8</em>. Ngo&agrave;i ra, từ ng&agrave;y 22/10, kh&aacute;ch h&agrave;ng c&oacute; thể trải nghiệm thử v&agrave; đặt h&agrave;ng tại 5 cửa h&agrave;ng trưng b&agrave;y v&agrave; b&aacute;n sản phẩm của Nokia tại H&agrave; Nội, Đ&agrave; Nẵng v&agrave; TP HCM. N8 bắt đầu được ph&acirc;n phối từ cuối th&aacute;ng n&agrave;y. 1.000 người sở hữu điện thoại đầu ti&ecirc;n sẽ nhận được một phần qu&agrave; l&agrave; ba l&ocirc; du lịch cao cấp.</p>\r\n<p class="Normal">\r\n	Nokia khẳng định đ&acirc;y l&agrave; điện thoại chụp ảnh tốt nhất thế giới. Người sử dụng c&ograve;n c&oacute; thể chỉnh sửa ảnh v&agrave; video trực tiếp tr&ecirc;n thiết bị. Thiết bị hoạt động tr&ecirc;n nền Symbian thế hệ mới, hỗ trợ xem video HD tr&ecirc;n TV m&agrave;n h&igrave;nh rộng v&agrave; hoạt động đa nhiệm với tr&igrave;nh tr&igrave;nh quản l&yacute; t&aacute;c vụ trực quan.</p>\r\n<p class="Normal">\r\n	Sản phẩm sử dụng m&agrave;n h&igrave;nh cảm ứng điện dung AMOLED 3,5 inch, độ ph&acirc;n giải 640 x 360 pixel, tỷ lệ 16:9. N8 c&oacute; k&iacute;ch thước 113,5 x 59 x 12,9 mm, trọng lượng 135 g, được trang bị vỏ nh&ocirc;m với c&aacute;c m&agrave;u trắng, x&aacute;m, xanh l&aacute; c&acirc;y, xanh dương v&agrave; cam.</p>\r\n', 'Nokia_N8_co_gia_chinh_thuc_10,5tr_VND._1316188523.png', 3, 23, 0, 'Triệu Gia Thắng', '2011-08-26 14:34:36', 1, '0000-00-00 00:00:00', 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 3, 'Nokia,mobile, vietnam, shop,mobileshop', 'Nokia,mobile, vietnam, shop,mobileshop', 0, 1, 0),
(6, 'Nokia C3-01 Touch and Type miễn phí tại Anh', 'nokia-c3-01-touch-and-type-mien-phi-tai-Anh', 'Hãng điện thoại Phần Lan vừa cho biết, chiếc điện thoại Nokia C3-01 Touch and Type sẽ chính thức có mặt tại thị trường Anh thông qua ba nhà mạng là O2, Vodafone và T-Mobile.', '<div style="text-align: center;">\r\n	<div class="info_news" style="width: 552px; display: table;">\r\n		H&atilde;ng điện thoại Phần Lan vừa cho biết, chiếc điện thoại Nokia C3-01 Touch and Type sẽ ch&iacute;nh thức c&oacute; mặt tại thị trường Anh th&ocirc;ng qua ba nh&agrave; mạng l&agrave; O2, Vodafone v&agrave; T-Mobile. </div>\r\n	<div style="margin-top: 10px;">\r\n		<div class="Normal">\r\n			<p style="margin: 0px; padding: 0px; text-align: justify;">\r\n				Như vậy, những kh&aacute;ch h&agrave;ng tại Anh c&oacute; thể mua chiếc điện thoại C3-01 Touch and Type ho&agrave;n to&agrave;n miễn ph&iacute; nếu đồng &yacute; k&yacute; v&agrave;o bản hợp đồng c&oacute; thời hạn 2 năm. Ngo&agrave;i ra, kh&aacute;ch h&agrave;ng cũng c&oacute; thể mua chiếc điện thoại n&agrave;y th&ocirc;ng qua k&ecirc;nh b&aacute;n h&agrave;ng Pay As You Go với gi&aacute; 240 USD&nbsp;v&agrave; thanh to&aacute;n theo&nbsp;h&igrave;nh thức trả tiền h&agrave;ng th&aacute;ng.</p>\r\n			<p style="margin: 0px; padding: 0px; text-align: justify;">\r\n				&nbsp;</p>\r\n			<p style="margin: 0px; padding: 0px; text-align: center;">\r\n				<img alt="Nokia C3-01 Touch and Type miễn phí tại Anh" class="news-image" src="http://images.thegioididong.com/Files/2010/11/15/24403/11_Nokia-C3-01-Touch-and-Type-mien-phi-tai-Anh.jpg" title="Nokia C3-01 Touch and Type miễn phí tại Anh" /></p>\r\n			<p style="margin: 0px; padding: 0px; text-align: center;">\r\n				<em>Chiếc điện thoại Nokia C3-01 Touch and Type</em></p>\r\n			<p style="margin: 0px; padding: 0px; text-align: center;">\r\n				&nbsp;</p>\r\n			<p style="margin: 0px; padding: 0px; text-align: justify;">\r\n				Chiếc điện thoại mới C3-01 Touch and Type được Nokia c&ocirc;ng bố lần đầu ti&ecirc;n v&agrave;o th&aacute;ng 9, m&aacute;y chạy tr&ecirc;n hệ điều h&agrave;nh S40 v&agrave; c&oacute; thiết kế giống chiếc X3-01 Touch and Type ra mắt c&aacute;ch đ&acirc;y kh&ocirc;ng l&acirc;u.</p>\r\n			<p style="margin: 0px; padding: 0px; text-align: justify;">\r\n				C3-01 Touch and Type c&oacute; thiết kế với k&iacute;ch thước 111 x 47,5 x 11 mm, bộ vỏ th&eacute;p, cứng c&aacute;p, camera 5 megapixel, kết nối 3G v&agrave; Wi-Fi, b&agrave;n ph&iacute;m QWERTY. M&aacute;y mới c&oacute; m&agrave;n h&igrave;nh cảm ứng 2,4 inch, hỗ trợ ph&iacute;m chơi nhạc, b&agrave;n ph&iacute;m số với 12 n&uacute;t bấm b&ecirc;n dưới.</p>\r\n			<p style="margin: 0px; padding: 0px; text-align: justify;">\r\n				Nokia C3-01 Touch and Type sở hữu nhiều t&iacute;nh năng tr&ecirc;n giao diện S40 như Wi-Fi, chạy 4 băng tần GSM/GPRS/EDGE, hỗ trợ 3G với HSPA. M&aacute;y cho ph&eacute;p mở rộng bộ nhớ trong bằng khe cắm thẻ microSD dung lượng tới 32GB.</p>\r\n			<p style="margin: 0px; padding: 0px; text-align: justify;">\r\n				Ngo&agrave;i ra, C3-01 Touch and Type t&iacute;ch hợp Twitter, Facebook v&agrave; phần mềm Nokia Messaging c&ugrave;ng c&aacute;c ứng dụng e-mail.</p>\r\n		</div>\r\n	</div>\r\n</div>\r\n', 'Nokia_C3-01_Touch_and_Type_mien_phi_tai_Anh_1316189521.png', 3, 23, 0, 'Triệu Gia Thắng', '2011-08-18 00:00:00', 1, '0000-00-00 00:00:00', 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'nokia,nokia c3, nokiac3_01, mobiel', 'nokia,nokia c3, nokiac3_01, mobiel', 0, 1, 0),
(42, 'Nokia N9 có giá hơn 13 triệu đồng tại VN', 'nokia-n9-co-gia-hon-13-trieu-dong-tai-vn', 'Nokia sẽ đưa N9 đến Việt Nam trong một sự kiện được tổ chức cuối tháng này, bản 16 GB dự kiến có giá 13,2 triệu, trong khi model 64 GB gần 15 triệu.', '<h2 class="Lead" style="font-family: ''Times New Roman''; font-size: 11pt; color: rgb(95, 95, 95); font-weight: bold;">\r\n	Nokia sẽ đưa N9 đến Việt Nam trong một sự kiện được tổ chức cuối th&aacute;ng n&agrave;y, bản 16 GB dự kiến c&oacute; gi&aacute; 13,2 triệu, trong khi model 64 GB gần 15 triệu.</h2>\r\n<table align="center" border="0" cellpadding="3" cellspacing="0" width="1">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n				<img alt="N9 với thiết kế tiết kiệm phím bấm tối đa. Ảnh: Quốc Huy." border="1" height="318" src="http://vnexpress.net/Files/Subject/3b/a2/f3/2b/nokia-n9-vietnam.jpg" width="480" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td align="center" class="Image" style="font-family: Arial; font-size: 8.5pt; color: rgb(0, 0, 0);">\r\n				N9 với thiết kế tiết kiệm ph&iacute;m bấm tối đa. Ảnh:<span class="Apple-converted-space">&nbsp;</span><em>Quốc Huy.</em></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n<p class="Normal" style="font-family: ''Times New Roman''; font-size: 11.8pt; color: rgb(0, 0, 0);">\r\n	Giấy mời tham dự lễ ra mắt N9 tại Việt Nam đ&atilde; được Nokia gửi tới giới truyền th&ocirc;ng. Sự kiện n&agrave;y diễn ra v&agrave;o 27/9 tới. M&aacute;y dự kiến b&aacute;n v&agrave;o th&aacute;ng 10 với 3 m&agrave;u ch&iacute;nh l&agrave; hồng, xanh v&agrave; đen.</p>\r\n<p class="Normal" style="font-family: ''Times New Roman''; font-size: 11.8pt; color: rgb(0, 0, 0);">\r\n	Nokia chưa c&ocirc;ng bố gi&aacute; b&aacute;n ch&iacute;nh thức thiết bị n&agrave;y tại Việt Nam, tuy nhi&ecirc;n, theo một hệ thống b&aacute;n lẻ lớn tại TP HCM, gi&aacute; ch&iacute;nh h&atilde;ng bản 16 GB l&agrave; 13.200.000 đồng, trong khi model 64 GB c&oacute; gi&aacute; 14.750.000 đồng.</p>\r\n<p class="Normal" style="font-family: ''Times New Roman''; font-size: 11.8pt; color: rgb(0, 0, 0);">\r\n	Mức gi&aacute; hơn 13,2 triệu của bản 16 GB rẻ hơn Samsung Galaxy S II, HTC Sensation hay LG Optimus 3D, những smartphone mạnh mẽ đang b&aacute;n tr&ecirc;n thị trường, trong khi bản 64 GB lại cao hơn từ 200.000 đồng đến hơn một triệu đồng.</p>\r\n<p class="Normal" style="font-family: ''Times New Roman''; font-size: 11.8pt; color: rgb(0, 0, 0);">\r\n	Hiện N9 l&agrave; mẫu smartphone cao cấp nhất của Nokia. Tr&ecirc;n ph&acirc;n kh&uacute;c n&agrave;y, cuối năm nay h&atilde;ng sẽ tr&igrave;nh l&agrave;ng th&ecirc;m d&ograve;ng Windows Phone hợp t&aacute;c với Microsoft. D&ugrave; N9 nhận được nhiều t&iacute;n hiệu tốt từ người d&ugrave;ng sau khi ra mắt, h&atilde;ng di động Phần Lan cho biết họ vẫn tập trung mạnh cho Windows Phone hơn. N9 chỉ xuất hiện tại 20 quốc gia, một số thị trường lớn như Mỹ, Anh sẽ kh&ocirc;ng b&aacute;n.</p>\r\n<p class="Normal" style="font-family: ''Times New Roman''; font-size: 11.8pt; color: rgb(0, 0, 0);">\r\n	N9 l&agrave; smartphone chạy hệ điều h&agrave;nh MeeGo đầu ti&ecirc;n, thiết bị c&oacute; giao diện hiện đại với 3 m&agrave;n h&igrave;nh ch&iacute;nh. Model n&agrave;y sở hữu thiết kế tiết kiệm ph&iacute;m bấm, mặt trước l&agrave; m&agrave;n h&igrave;nh cảm ứng 3,9 inch sử dụng c&ocirc;ng nghệ AMOLED. N9 hỗ trợ c&ocirc;ng nghệ NFC cho ph&eacute;p kết nối với loa, giao tiếp hai m&aacute;y để trao đổi nội dung, m&aacute;y ảnh 8 Megapixel, hỗ trợ quay phim HD.</p>\r\n', 'Nokia_N9_co_gia_hon_13_trieu_dong_tai_VN_1316826208.jpg', 3, 23, 0, 'Triệu Gia Thắng', '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Nokia, N9, Nokia N9, MeeGo, Giá N9, Bán Nokia N9', 'nokia-n9-co-gia-hon-13-trieu-dong-tai-vn', 0, 0, 0);
INSERT INTO `articles` (`id`, `title`, `alias`, `introtext`, `fulltext`, `image`, `section_id`, `category_id`, `menu_id`, `author`, `created`, `created_by`, `modified`, `modified_by`, `published`, `time_up`, `time_down`, `ordering`, `metakey`, `metadesc`, `access`, `hits`, `trash`) VALUES
(24, '5 điện thoại cao cấp giảm giá mạnh ở Việt Nam', '5-dien-thoai-cao-cap-giam-gia-manh-o-viet-nam', 'Chỉ trong một khoảng thời gian ngắn, nhiều smartphone như Motorola Backflip, Samsung Wave hay Sony Ericsson Satio đã giảm từ 1 cho đến 2 triệu đồng.\r\nTrong số này không xuất hiện sản phẩm của Nokia do giá USD thị trường tự do tăng chóng mặt khiến giá điện thoại của hãng này còn tăng cao hơn trước.', '<div style="margin-top: 10px;">\r\n	<h3 class="SubTitle" style="margin: 0px; padding: 0px; font-size: 15px; line-height: 41px; text-align: left; text-indent: 20px; color: rgb(66, 52, 62); text-transform: uppercase;">\r\n		<a href="http://thegioididong.com/sieu-thi-dien-thoai-di-dong-motorola,san-pham-42-4-22875-khu-vuc-13,motorola-mb300-backflip.aspx" style="text-decoration: none; color: rgb(88, 57, 66);">MOTOROLA BACKFLIP</a></h3>\r\n	<table align="center" border="0" cellpadding="3" cellspacing="0" width="66">\r\n		<tbody>\r\n			<tr>\r\n				<td>\r\n					<img alt="5 điện thoại cao cấp giảm giá mạnh ở Việt Nam" border="1" height="350" src="http://images.thegioididong.com/Files/2010/11/12/24334/1_5-dien-thoai-cao-cap-giam-gia-manh-o-Viet-Nam.jpg" title="5 điện thoại cao cấp giảm giá mạnh ở Việt Nam" width="450" /></td>\r\n			</tr>\r\n			<tr>\r\n				<td align="middle" class="Normal">\r\n					&nbsp;</td>\r\n			</tr>\r\n		</tbody>\r\n	</table>\r\n	<p class="Normal" style="margin: 0px; padding: 0px;">\r\n		Motorola Backflip l&agrave; một trong những mẫu smartphone giảm gi&aacute; mạnh nhất trong thời gian vừa qua, từ 8 triệu xuống gần 6 triệu đồng. Sản phẩm từng được tạp ch&iacute;&nbsp;<em>Cnet&nbsp;</em>b&igrave;nh chọn l&agrave; điện thoại xuất sắc nhất triển l&atilde;m CES 2010. Backflip sử dụng m&agrave;n h&igrave;nh điện dung 3,1 inch độ ph&acirc;n giải 480 x 320 pixel, chip tốc độ 528 MHz. Những t&iacute;nh năng giải tr&iacute; k&egrave;m theo bao gồm camera 5 megapixel tự động lấy n&eacute;t, đ&egrave;n flash LED, giắc 3,5 mm, t&iacute;ch hợp nhiều t&iacute;nh năng mạng x&atilde; hội Facebook, Twitter... (Ảnh:&nbsp;<em>H&agrave; Mai</em>)<em>.</em></p>\r\n	<h3 class="SubTitle" style="margin: 0px; padding: 0px; font-size: 15px; line-height: 41px; text-align: left; text-indent: 20px; color: rgb(66, 52, 62); text-transform: uppercase;">\r\n		<a href="http://thegioididong.com/sieu-thi-dien-thoai-di-dong-samsung,san-pham-42-2-22999,samsung-s8500-wave.aspx" style="text-decoration: none; color: rgb(88, 57, 66);">SAMSUNG WAVE</a></h3>\r\n	<table align="center" border="0" cellpadding="3" cellspacing="0" width="48">\r\n		<tbody>\r\n			<tr>\r\n				<td>\r\n					<img alt="5 điện thoại cao cấp giảm giá mạnh ở Việt Nam" border="1" height="450" src="http://images.thegioididong.com/Files/2010/11/12/24334/2_5-dien-thoai-cao-cap-giam-gia-manh-o-Viet-Nam.jpg" title="5 điện thoại cao cấp giảm giá mạnh ở Việt Nam" width="450" /></td>\r\n			</tr>\r\n			<tr>\r\n				<td align="middle" class="Normal">\r\n					&nbsp;</td>\r\n			</tr>\r\n		</tbody>\r\n	</table>\r\n	<p class="Normal" style="margin: 0px; padding: 0px;">\r\n		Samsung Wave giảm gi&aacute; hơn 1 triệu đồng so với thời điểm mới xuất hiện tại VN. Sản phẩm c&oacute; thiết kế mỏng thời trang, vỏ kim loại chắc chắn, chip tốc độ 1 GHz, sử dụng m&agrave;n h&igrave;nh 3,3 inch Super AMOLED cho h&igrave;nh ảnh s&aacute;ng đẹp, rực rỡ dưới ảnh nắng mặt trời. Những th&ocirc;ng số kh&aacute;c bao gồm hệ điều h&agrave;nh Bada, camera 5 megapixel, quay video HD 720p, cảm ứng điện dung v&agrave; giao diện TouchWiz UI 3.0. (Ảnh:&nbsp;<em>T.M.H</em>)<em>.</em></p>\r\n	<h3 class="SubTitle" style="margin: 0px; padding: 0px; font-size: 15px; line-height: 41px; text-align: left; text-indent: 20px; color: rgb(66, 52, 62); text-transform: uppercase;">\r\n		<a href="http://thegioididong.com/sieu-thi-dien-thoai-di-dong-motorola,san-pham-42-4-23263,motorola--xt720-milestone.aspx" style="text-decoration: none; color: rgb(88, 57, 66);">MOTOROLA MILESTONE XT720</a></h3>\r\n	<table align="center" border="0" cellpadding="3" cellspacing="0" width="2">\r\n		<tbody>\r\n			<tr>\r\n				<td>\r\n					<img alt="5 điện thoại cao cấp giảm giá mạnh ở Việt Nam" border="1" height="346" src="http://images.thegioididong.com/Files/2010/11/12/24334/3_5-dien-thoai-cao-cap-giam-gia-manh-o-Viet-Nam.jpg" title="5 điện thoại cao cấp giảm giá mạnh ở Việt Nam" width="450" /></td>\r\n			</tr>\r\n			<tr>\r\n				<td align="middle" class="Normal">\r\n					&nbsp;</td>\r\n			</tr>\r\n		</tbody>\r\n	</table>\r\n	<p class="Normal" style="margin: 0px; padding: 0px;">\r\n		Gi&aacute; của Milestone XT720 giảm khoảng 2,2 triệu đồng so với thời điểm c&aacute;ch đ&acirc;y 2 th&aacute;ng. Sản phẩm c&oacute; kiểu d&aacute;ng mỏng chỉ khoảng 10,9 mm, chạy hệ điều h&agrave;nh Android 2.1, hỗ trợ tr&igrave;nh duyệt web tốc độ cao. M&agrave;n h&igrave;nh của m&aacute;y rộng 3,7 inch, chip 720 MHz v&agrave; camera 8 &quot;chấm&quot;. (Ảnh:&nbsp;<em>Motorola</em>)<em>.</em></p>\r\n	<h3 class="SubTitle" style="margin: 0px; padding: 0px; font-size: 15px; line-height: 41px; text-align: left; text-indent: 20px; color: rgb(66, 52, 62); text-transform: uppercase;">\r\n		<a href="http://thegioididong.com/sieu-thi-dien-thoai-di-dong-sony-ericsson,san-pham-42-3-22058,sony-ericsson-satio-u1.aspx" style="text-decoration: none; color: rgb(88, 57, 66);">SONY ERICSSON SATIO</a></h3>\r\n	<table align="center" border="0" cellpadding="3" cellspacing="0" width="84">\r\n		<tbody>\r\n			<tr>\r\n				<td>\r\n					<img alt="5 điện thoại cao cấp giảm giá mạnh ở Việt Nam" border="1" height="283" src="http://images.thegioididong.com/Files/2010/11/12/24334/4_5-dien-thoai-cao-cap-giam-gia-manh-o-Viet-Nam.jpg" title="5 điện thoại cao cấp giảm giá mạnh ở Việt Nam" width="450" /></td>\r\n			</tr>\r\n			<tr>\r\n				<td align="middle" class="Normal">\r\n					&nbsp;</td>\r\n			</tr>\r\n		</tbody>\r\n	</table>\r\n	<p class="Normal" style="margin: 0px; padding: 0px;">\r\n		Sony Ericsson Satio l&agrave; một trong những điện thoại chụp h&igrave;nh 12 megapixel đầu ti&ecirc;n tr&ecirc;n thế giới. Gi&aacute; của m&aacute;y hạ khoảng 1 triệu đồng trong 1 th&aacute;ng gần đ&acirc;y. Sản phẩm sử dụng m&agrave;n h&igrave;nh cảm ứng 3,5 inch tỷ lệ 16:9, chip 600 MHz, bộ nhớ 8 GB v&agrave; thẻ nhớ microSD. Điểm nhấn ở Satio l&agrave; camera độ ph&acirc;n giải si&ecirc;u cao với đ&egrave;n flash Xeon v&agrave; khả năng chạm v&agrave;o c&aacute;c vị tr&iacute; trong khung h&igrave;nh để lấy n&eacute;t. Thiết bị c&oacute; k&iacute;ch thước 112 x 55 x 13 mm, nặng 126 gram, hỗ trợ Bluetooth, GPS, Wi-Fi, FM, nhận dạng chữ viết... (Ảnh:&nbsp;<em>Sony Ericsson</em>)<em>.</em></p>\r\n	<h3 class="SubTitle" style="margin: 0px; padding: 0px; font-size: 15px; line-height: 41px; text-align: left; text-indent: 20px; color: rgb(66, 52, 62); text-transform: uppercase;">\r\n		<a href="http://thegioididong.com/sieu-thi-dien-thoai-di-dong-motorola,san-pham-42-4-22681,motorola-milestone.aspx" style="text-decoration: none; color: rgb(88, 57, 66);">MOTOROLA MILESTONE</a></h3>\r\n	<table align="center" border="0" cellpadding="3" cellspacing="0" width="18">\r\n		<tbody>\r\n			<tr>\r\n				<td>\r\n					<img alt="5 điện thoại cao cấp giảm giá mạnh ở Việt Nam" border="1" height="335" src="http://images.thegioididong.com/Files/2010/11/12/24334/5_5-dien-thoai-cao-cap-giam-gia-manh-o-Viet-Nam.jpg" title="5 điện thoại cao cấp giảm giá mạnh ở Việt Nam" width="450" /></td>\r\n			</tr>\r\n			<tr>\r\n				<td align="middle" class="Normal">\r\n					&nbsp;</td>\r\n			</tr>\r\n		</tbody>\r\n	</table>\r\n	<p class="Normal" style="margin: 0px; padding: 0px;">\r\n		Gi&aacute; của điện thoại Motorola MileStone gần đ&acirc;y hạ th&ecirc;m 1,2 triệu đồng. Sản phẩm c&oacute; m&agrave;n h&igrave;nh cảm ứng 3,7 inch độ ph&acirc;n giải 480 x 854 pixel, chip ARM Cortex A8 550 MHz, b&agrave;n ph&iacute;m trượt. Những th&ocirc;ng số kh&aacute;c bao gồm camera 5 megapixel v&agrave; hai đ&egrave;n flash LED cho h&igrave;nh ảnh đẹp trong điều kiện thiếu &aacute;nh s&aacute;ng, hỗ trợ thẻ nhớ ngo&agrave;i 32 GB, kết nối 3G, GPS, Wi-Fi. (Ảnh:&nbsp;<em>Motorola</em>).</p>\r\n	<div>\r\n		&nbsp;</div>\r\n</div>\r\n', '5_dien_thoai_cao_cap_giam_gia_manh_o_Viet_Nam_1316189912.jpg', 3, 23, 0, 'Triệu Gia Thắng', '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'MOTOROLA,điện thoại ', 'MOTOROLA,điện thoại ', 0, 2, 0),
(25, 'Apple và Samsung chính thức vượt Nokia.', 'Apple-va-Samsung-chinh-thuc-vuot-nokia.', 'Apple và Samsung đã chính thức vượt qua "vương triều Nokia" tồn tại suốt 15 năm sau khi các hãng công bố tình hình kinh doanh quý II.', '<div class="image-container image-center" style="font-size: 12px; width: 460px;">\r\n	<div style="text-align: left; font-size: 12px;">\r\n		Apple đ&atilde; trở th&agrave;nh nh&agrave; sản xuất smartphone lớn nhất thế giới.&nbsp;<span class="image-credit">Ảnh: Daylife</span>. </div>\r\n</div>\r\n<p style="text-align: left; margin: 1em 0px; padding: 0px;">\r\n	Nokia đ&atilde; thống trị thị trường di động th&ocirc;ng minh từ năm 1996 khi d&ograve;ng Communicator ra đời, tuy nhi&ecirc;n với sự thay đổi qu&aacute; nhanh ch&oacute;ng của thị trường, chỉ trong 3 th&aacute;ng h&atilde;ng đ&atilde; sụt từ vị tr&iacute; số một xuống thứ 3.</p>\r\n<p style="text-align: left; margin: 1em 0px; padding: 0px;">\r\n	Apple b&aacute;n được lượng iPhone kỷ lục, 20,3 triệu chiếc trong qu&yacute;, mặc d&ugrave; trong hơn một năm qua h&atilde;ng kh&ocirc;ng cập nhật th&ecirc;m sản phẩm mới. Trong khi xu hướng l&agrave;ng di động, c&aacute;c h&atilde;ng lu&ocirc;n cập nhật model mới nhanh ch&oacute;ng mặt.</p>\r\n<p style="text-align: left; margin: 1em 0px; padding: 0px;">\r\n	Sau khi Apple b&aacute;o c&aacute;o kết quả kinh doanh tuần trước, h&ocirc;m qua Samsung cũng th&ocirc;ng b&aacute;o đ&atilde; b&aacute;n được 19 triệu chiếc smartphone, vượt Nokia với chỉ 16,7 triệu m&aacute;y. Samsung th&agrave;nh c&ocirc;ng nhờ sự đi l&ecirc;n của d&ograve;ng sản phẩm sử dụng phần mềm Android từ Google.</p>\r\n<p style="text-align: left; margin: 1em 0px; padding: 0px;">\r\n	&quot;D&ograve;ng Galaxy đ&atilde; cho thấy sự th&agrave;nh c&ocirc;ng của Samsung, đặc biệt mẫu Galaxy S II&quot;, Neil Mawston, nh&agrave; nghi&ecirc;n cứu của h&atilde;ng Strategy Analytics nhận x&eacute;t, c&ocirc;ng ty n&agrave;y ước t&iacute;nh lượng điện thoại th&ocirc;ng minh đ&atilde; tăng 76% trong qu&yacute; II so với một năm trước đ&oacute;, trong khi con số dự đo&aacute;n của ABI Research l&agrave; 62%.</p>\r\n<p style="text-align: left; margin: 1em 0px; padding: 0px;">\r\n	Tuy vậy, nh&igrave;n chung thị trường di động đang tăng trưởng chậm lại trong khoảng thời gian từ th&aacute;ng 4 đến hết th&aacute;ng 6, doanh số c&aacute;c mẫu di động cơ bản sụt giảm lần đầu ti&ecirc;n trong 7 qu&yacute; gần đ&acirc;y do người ti&ecirc;u d&ugrave;ng kềm chế chi ti&ecirc;u - h&atilde;ng nghi&ecirc;n cứu IDC cho biết.</p>\r\n<div class="image-container image-center" style="font-size: 12px; width: 460px;">\r\n	<div style="text-align: center; ">\r\n		<a class="fancybox" href="http://vtcdn.com/sites/default/files/images/2011/7/30/img-1312043656-2.jpg" rel="lightbox" style="outline-style: none; text-decoration: none;"><img border="0" src="http://vtcdn.com/sites/default/files/imagecache/med/images/2011/7/30/img-1312043656-2.jpg" style="border-style: none; text-align: center;" /></a> </div>\r\n	<div style="text-align: left; font-size: 12px;">\r\n		Nokia mất vương triều smartphone sau 15 năm ph&aacute;t triển.&nbsp;<span class="image-credit">Ảnh: Daylife</span>. </div>\r\n</div>\r\n<p style="text-align: left; margin: 1em 0px; padding: 0px;">\r\n	Doanh số điện thoại th&ocirc;ng minh tăng trưởng 11,3% trong v&ograve;ng một năm qua đạt 365,4 triệu chiếc, nhưng sự tăng trưởng cũng chậm hơn nếu so với 16,8% của qu&yacute; trước đ&oacute;. Strategy Analytics ước t&iacute;nh tổng thị trường c&oacute; 361 triệu chiếc di động b&aacute;n ra trong qu&yacute;.</p>\r\n<p style="text-align: left; margin: 1em 0px; padding: 0px;">\r\n	IDC cho rằng, doanh số c&aacute;c d&ograve;ng di động &iacute;t t&iacute;nh năng đ&atilde; giảm 4% so với năm ngo&aacute;i v&agrave; dịch chuyển l&ecirc;n smartphone, những điều n&agrave;y r&otilde; r&agrave;ng nhất ở c&aacute;c nước ph&aacute;t triển như Mỹ, Nhật Bản, T&acirc;y &Acirc;u.</p>\r\n<p style="text-align: left; margin: 1em 0px; padding: 0px;">\r\n	&quot;Điện thoại phổ th&ocirc;ng giảm mạnh c&oacute; ảnh hưởng nhất đến nh&agrave; sản xuất di động h&agrave;ng đầu thế giới&quot;, nh&agrave; ph&acirc;n t&iacute;ch Kevin Restivo cho biết. &quot;Nokia đ&atilde; mất dần thị phần v&agrave;o tay c&aacute;c đối thủ c&oacute; điện thoại gi&aacute; thấp như Micromax, TCL-Alcatel hay Huawei&quot;.</p>\r\n<p style="text-align: left; margin: 1em 0px; padding: 0px;">\r\n	Hiện Nokia vẫn l&agrave; nh&agrave; sản xuất c&oacute; lượng di động b&aacute;n ra lớn nhất thế giới, tuy nhi&ecirc;n doanh số của h&atilde;ng đ&atilde; giảm 20% so với năm ngo&aacute;i, điều n&agrave;y đ&atilde; gi&uacute;p Samsung thu hẹp khoảng c&aacute;ch gần nhất từ trước tới nay.</p>\r\n<p style="text-align: left; margin: 1em 0px; padding: 0px;">\r\n	Nhiều nh&agrave; ph&acirc;n t&iacute;ch dự đo&aacute;n, Samsung sẽ trở th&agrave;nh h&atilde;ng di động số một thế giới v&agrave;o năm sau.</p>\r\n', 'Apple_va_Samsung_chinh_thuc_vuot_Nokia._1316190016.png', 3, 23, 0, 'Triệu Gia Thắng', '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 2, 'Samsung,Apple', '', 0, 66, 0),
(48, 'Android Market và Gmail bị khoá tại Trung Quốc', 'Android-market-va-gmail-bi-khoa-tai-trung-Quoc', 'Bên cạnh ảnh hưởng không thể bàn cãi với giới công nghệ, Steve Jobs còn mãi mãi thay đổi cách thức sử dụng thiết bị di động của chúng ta.', '<p>\r\n	Người d&ugrave;ng Android tại quốc gia đ&ocirc;ng d&acirc;n nhất chỉ đăng nhập được v&agrave;o t&agrave;i khoản <span class="VietAdTextLink" id="link0" style="text-decoration: underline; border-bottom-style: solid; border-bottom-width: 1px; white-space: nowrap;">Google</span> m&agrave; kh&ocirc;ng thể sử dụng được Gmail hay Android Market.</p>\r\n<div class="image-container image-center" style="width: 460px;">\r\n	<p style="text-align: center; ">\r\n		<a class="fancybox" href="http://vtcdn.com/sites/default/files/images/2011/10/12/img-1318417638-1.jpg" rel="lightbox"><img alt="" src="http://vtcdn.com/sites/default/files/imagecache/med/images/2011/10/12/img-1318417638-1.jpg" title="" /></a></p>\r\n	<div>\r\n		Người d&ugrave;ng Android ở Trung Quốc kh&ocirc;ng thể sử dụng Android Market hay Gmail. <span class="image-credit">Ảnh: Slashgear</span>.</div>\r\n</div>\r\n<p>\r\n	Theo Android Community, Trung Quốc đang kiểm duyệt việc truy cập v&agrave;o c&aacute;c ứng dụng như Gmail hay Android Market tr&ecirc;n c&aacute;c thiết bị Android của Google.</p>\r\n<p>\r\n	Hiện tại, ứng dụng Gmail lẫn gian ứng dụng Android Market của Google đều bị kho&aacute; tại Trung Quốc. Website c&ocirc;ng nghệ tr&ecirc;n cho biết, thời gian kho&aacute; ứng dụng tr&ecirc;n đ&atilde; k&eacute;o d&agrave;i được 36 tiếng v&agrave; xảy ra đối với mọi nh&agrave; mạng cũng như thiết bị Android đang hoạt động ở đất nước n&agrave;y. Một số người d&ugrave;ng cho biết ứng dụng Gmail của họ kh&ocirc;ng hoạt động mặc d&ugrave; vẫn c&oacute; thể truy cập v&agrave;o t&agrave;i khoản trực tuyến của Google. Hiện tại, nước n&agrave;y vẫn chưa đưa ra l&iacute; do giải th&iacute;ch cho h&agrave;nh động tr&ecirc;n.</p>\r\n<p>\r\n	Slashgear nhận định, h&agrave;nh động tr&ecirc;n của Trung Quốc nhằm gi&uacute;p cho c&aacute;c hệ điều h&agrave;nh của m&igrave;nh thống trị tại thị trường bản địa, điển h&igrave;nh l&agrave; hệ điều h&agrave;nh Qiushi (một phi&ecirc;n bản Android của h&atilde;ng t&igrave;m kiếm Baidu).</p>\r\n<p>\r\n	H&atilde;ng t&igrave;m kiếm lớn nhất Trung Quốc bắt đầu tạo ra nền tảng di động cho ri&ecirc;ng m&igrave;nh từ th&aacute;ng 3. Một v&agrave;i tin đồn gần đ&acirc;y cho biết ch&iacute;nh phủ Trung Quốc l&agrave; người hậu thuẫn cho c&ocirc;ng việc tr&ecirc;n.</p>\r\n', 'Android-Market-va-Gmail-bi-khoa-tai-Trung-Quoc-1318476172.jpg', 3, 23, 0, 'Triệu Gia Thắng', '2011-10-13 11:20:21', 1, '0000-00-00 00:00:00', 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 2, 'Thị trường,android market,baidu,Gmail,Google,Trung Quốc,thông tin công nghệ,tin công nghệ,bảo mật,cô', 'Người dùng Android tại quốc gia đông dân nhất chỉ đăng nhập được vào tài khoản Google mà không thể sử dụng được Gmail hay Android Market.', 0, 65, 0),
(47, 'Steve Jobs thay đổi ngành di động như thế nào', 'Steve-jobs-thay-doi-nganh-di-dong-nhu-the-nao', 'Bên cạnh ảnh hưởng không thể bàn cãi với giới công nghệ, Steve Jobs còn mãi mãi thay đổi cách thức sử dụng thiết bị di động của chúng ta.', '<p>\r\n	B&ecirc;n cạnh ảnh hưởng kh&ocirc;ng thể b&agrave;n c&atilde;i với giới c&ocirc;ng nghệ, Steve Jobs c&ograve;n m&atilde;i m&atilde;i thay đổi c&aacute;ch thức sử dụng thiết bị di động của ch&uacute;ng ta.</p>\r\n<div class="image-container image-center" style="width: 460px;">\r\n	<a class="fancybox" href="http://vtcdn.com/sites/default/files/images/2011/10/13/img-1318466309-1.jpg" rel="lightbox"><img alt="" src="http://vtcdn.com/sites/default/files/imagecache/med/images/2011/10/13/img-1318466309-1.jpg" title="" /></a></div>\r\n<p>\r\n	Vị CEO t&agrave;i năng vừa ra đi ở tuổi 56 c&oacute; một cuộc đời đầy thăng trầm nhưng lu&ocirc;n l&agrave; một trong những người c&oacute; ảnh hưởng nhất đối với giới c&ocirc;ng nghệ. Việc đưa th&ocirc;ng tin ca ngợi &ocirc;ng tại thời điểm n&agrave;y c&oacute; phần hơi &ldquo;t&eacute; nước theo mưa&rdquo; song bắt buộc phải thừa nhận rằng một m&igrave;nh &ocirc;ng đ&atilde; biến đổi c&aacute;ch thức m&agrave; ch&uacute;ng ta sử dụng thiết bị di động trong thế kỷ 21 n&agrave;y theo một c&aacute;ch m&agrave; chưa một <span class="VietAdTextLink" id="link0" style="text-decoration: underline; border-bottom-style: solid; border-bottom-width: 1px; white-space: nowrap;">c&ocirc;ng ty</span> hay c&aacute; nh&acirc;n n&agrave;o l&agrave;m được.</p>\r\n<p>\r\n	Ở đ&acirc;y kh&ocirc;ng chỉ đề cập cụ thể tới lĩnh vực điện to&aacute;n hay điện thoại di động, m&agrave; c&ograve;n cần n&oacute;i tới những điều vượt qua cả hai yếu tố đ&oacute; gộp lại, li&ecirc;n quan tới những m&oacute;n &ldquo;đồ chơi&rdquo; m&agrave; ch&uacute;ng ta mang theo h&agrave;ng ng&agrave;y, c&aacute;ch ch&uacute;ng được tạo ra v&agrave; được sử dụng trong thực tế như thế n&agrave;o. Với tầm nh&igrave;n của m&igrave;nh, Jobs đ&atilde; mang tới cho người d&ugrave;ng những <span class="VietAdTextLink" id="link1" style="text-decoration: underline; border-bottom-style: solid; border-bottom-width: 1px; white-space: nowrap;">sản phẩm</span> m&agrave; họ đ&atilde; ngưỡng mộ từ l&acirc;u qua c&aacute;c bộ phim khoa học giả tưởng. V&iacute; dụ như kh&aacute;i niệm PADD v&agrave; c&aacute;c thiết bị li&ecirc;n lạc trong loạt phim giả tưởng kinh điển Star Trek. Hoặc l&agrave; &ocirc;ng hoạch định những ch&iacute;nh s&aacute;ch tung sản phẩm &ldquo;ngược đời&rdquo; như chiến dịch đưa sản phẩm trước đ&acirc;y chỉ b&aacute;n được ở thị trường Nhật ra b&aacute;n rộng r&atilde;i tr&ecirc;n to&agrave;n thế giới.</p>\r\n<div class="image-container image-center" style="width: 460px;">\r\n	<a class="fancybox" href="http://vtcdn.com/sites/default/files/images/2011/10/13/img-1318466309-2.jpg" rel="lightbox"><img alt="" src="http://vtcdn.com/sites/default/files/imagecache/med/images/2011/10/13/img-1318466309-2.jpg" title="" /></a></div>\r\n<h4>\r\n	Một thế giới di động theo phong c&aacute;ch Steve Jobs</h4>\r\n<p>\r\n	Tầm nh&igrave;n của Jobs về thiết bị di động, s&acirc;u xa hơn nữa l&agrave; hệ sinh th&aacute;i di động đ&atilde; gi&uacute;p cho iPhone cất c&aacute;nh 5 năm về trước v&agrave; tiếp tục bay cao, sau đ&oacute; l&agrave; c&aacute;c sản phẩm kh&aacute;c như gian h&agrave;ng trực tuyến App Store rồi tới sự ra đời của Macbook Air. C&aacute;c sản phẩm n&agrave;y, nếu kh&ocirc;ng c&oacute; sự ph&ugrave; ph&eacute;p của Jobs th&igrave; chắc sẽ nằm nhạt nh&ograve;a trong đ&aacute;m c&aacute;c sản phẩm tương tự hay thậm ch&iacute; ch&igrave;m nghỉm.</p>\r\n<p>\r\n	H&atilde;y thử nh&igrave;n lại một ch&uacute;t những g&igrave; ch&uacute;ng ta c&oacute; trước khi iPhone xuất hiện. C&aacute;c thiết bị di động c&oacute; m&agrave;n h&igrave;nh cảm ứng thời đ&oacute; thường lai PDA (thiết bị trợ gi&uacute;p c&aacute; nh&acirc;n), sử dụng giao diện nh&agrave;m ch&aacute;n, phần mềm ứng dụng th&igrave; &iacute;t ỏi, quan trọng hơn l&agrave; ch&uacute;ng chưa tho&aacute;t được sự quản l&yacute; của c&aacute;c nh&agrave; mạng. Hầu hết c&aacute;c thao t&aacute;c bao gồm truy cập nội dung như nhạc v&agrave; phim, sử dụng GPS đều phải thực hiện th&ocirc;ng qua dịch vụ của nh&agrave; cung cấp mạng di động. Chắc chắn điều n&agrave;y kh&ocirc;ng thể l&agrave;m h&agrave;i l&ograve;ng người d&ugrave;ng.</p>\r\n<p>\r\n	Thị trường điện thoại di động khi ấy l&agrave; một mớ c&aacute;c thiết bị hỗn tạp cho đến khi iPhone xuất hiện c&ugrave;ng với &ldquo;ph&eacute;p m&agrave;u&rdquo; m&agrave;n h&igrave;nh cảm ứng đa điểm. Giới chuy&ecirc;n m&ocirc;n đ&aacute;nh gi&aacute;, với ph&aacute;t kiến n&agrave;y, Jobs đ&atilde; vượt qua c&aacute;c đối thủ một khoảng c&aacute;ch rất d&agrave;i. Tuy điện thoại Android ra mắt chỉ sau đ&oacute; c&oacute; hơn 1 năm, nhưng c&aacute;c đối thủ cạnh tranh đ&atilde; phải tốn nhiều thời gian m&agrave; vẫn chưa theo kịp với Apple. Điều n&agrave;y minh chứng cho sự nh&igrave;n xa tr&ocirc;ng rộng của Jobs cũng như sự quyết t&acirc;m của &ocirc;ng v&agrave; Apple khi ki&ecirc;n định theo đuổi việc sản xuất iPhone. Khi sản phẩm n&agrave;y ra mắt, c&aacute;c đối thủ cạnh tranh chỉ c&ograve;n c&aacute;ch chạy theo &ldquo;h&iacute;t kh&oacute;i&rdquo;.</p>\r\n<p>\r\n	Cho đến ng&agrave;y h&ocirc;m nay iPhone đ&atilde; trở n&ecirc;n qu&aacute; phổ biến, bạn c&oacute; thể bắt gặp ch&uacute;ng ở bất kỳ đ&acirc;u từ qu&aacute;n x&aacute;, nh&agrave; h&agrave;ng, lớp học .v.v&hellip; Đối với những người hay di chuyển, iPhone phi&ecirc;n bản quốc tế l&agrave; một trợ thủ đắc lực. B&ecirc;n cạnh việc c&oacute; thể sử dụng được ở bất kỳ quốc gia n&agrave;o, người d&ugrave;ng c&oacute; thể kiểm tra lộ tr&igrave;nh qua Google Maps với độ ch&iacute;nh x&aacute;c cao, hoặc lướt web trong những l&uacute;c nh&agrave;n rỗi.</p>\r\n<p>\r\n	iPhone v&agrave; c&aacute;c đối thủ của n&oacute; chắc chắn đ&atilde; mang lại cho ch&uacute;ng ta sự thay đổi trong việc kết nối khi di chuyển m&agrave; kh&ocirc;ng cần bận t&acirc;m đến những vướng mắc cũ nữa.</p>\r\n<h4>\r\n	Di dộng d&agrave;nh cho mọi người</h4>\r\n<div class="image-container image-center" style="width: 413px;">\r\n	<a class="fancybox" href="http://vtcdn.com/sites/default/files/images/2011/10/13/img-1318466309-3.jpg" rel="lightbox"><img alt="" src="http://vtcdn.com/sites/default/files/imagecache/med/images/2011/10/13/img-1318466309-3.jpg" title="" /></a></div>\r\n<p>\r\n	B&ecirc;n cạnh điện thoại di động, Jobs c&ograve;n đưa tới những thay đổi tương tự với mẫu thiết kế Macbook Air đ&igrave;nh đ&aacute;m. Theo như th&ocirc;ng tin từ nội bộ Apple th&igrave; dự &aacute;n m&aacute;y t&iacute;nh x&aacute;ch tay si&ecirc;u mỏng n&agrave;y được &ocirc;ng đặc biệt quan t&acirc;m. &Ocirc;ng biết rằng thị trường đang chờ đợi một sản phẩm kết hợp tốt c&aacute;c yếu tố về thiết kế, cấu h&igrave;nh v&agrave; gi&aacute; th&agrave;nh.</p>\r\n<p>\r\n	Ngay khi MacBook Air được ra mắt, th&uacute; thực l&agrave; người viết vẫn kh&ocirc;ng tin tưởng lắm v&agrave;o tương lai của n&oacute; do vẫn bị ảnh hưởng của chuyến gh&eacute; thăm Nhật Bản trước đ&oacute;. T&aacute;c giả đ&atilde; thấy rất nhiều mẫu m&aacute;y t&iacute;nh x&aacute;ch tay si&ecirc;u di động mỏng nhẹ, cấu h&igrave;nh tốt nhưng lại chỉ d&agrave;nh cho thị trường nội địa. Chắc chắn những người ưa th&iacute;ch c&aacute;c mẫu m&aacute;y x&aacute;ch tay c&oacute; trọng lượng dưới 2kg sẽ bị ấn tượng với c&aacute;c mẫu m&aacute;y n&agrave;y. Nhưng khi n&ecirc;u c&acirc;u hỏi cho c&aacute;c nh&agrave; sản xuất Nhật Bản về việc đưa c&aacute;c mẫu m&aacute;y n&agrave;y b&aacute;n tại Mỹ, t&aacute;c giả nhận được c&ugrave;ng một c&acirc;u trả lời &ldquo;kh&ocirc;ng c&oacute; thị trường cho những mẫu n&agrave;y ở Mỹ&rdquo;.</p>\r\n<p>\r\n	Bằng sự sắc sảo v&agrave; quyết đo&aacute;n của m&igrave;nh, c&oacute; thể n&oacute;i Steve Jobs đ&atilde; một tay g&acirc;y dựng thị trường m&aacute;y t&iacute;nh x&aacute;ch tay si&ecirc;u mỏng nhẹ tại Mỹ v&agrave; chứng minh cho người Nhật thấy họ đ&atilde; sai lầm. Quan điểm của &ocirc;ng l&agrave; chỉ cần t&igrave;m đ&uacute;ng c&aacute;c điểm quan trọng l&agrave; sẽ c&oacute; thị trường. Kh&ocirc;ng phải l&agrave; người d&ugrave;ng phổ th&ocirc;ng kh&ocirc;ng quan t&acirc;m tới c&aacute;c mẫu m&aacute;y mỏng si&ecirc;u di động, m&agrave; mấu chốt l&agrave; họ kh&ocirc;ng th&iacute;ch mức gi&aacute; qu&aacute; cao m&agrave; c&aacute;c nh&agrave; sản xuất đặt ra (nhắm v&agrave;o khối người d&ugrave;ng doanh nghiệp l&agrave; ch&iacute;nh) cho c&aacute;c thiết bị si&ecirc;u mỏng nhẹ n&agrave;y.</p>\r\n<p>\r\n	V&agrave;o thời điểm ra mắt, MacBook Air l&agrave; sản phẩm mới, gi&aacute; cạnh tranh hơn một phần do nỗ lực rất lớn của Apple trong việc y&ecirc;u cầu chuỗi cung ứng linh kiện phải giảm gi&aacute; th&agrave;nh để sản phẩm c&oacute; được mức gi&aacute; hấp dẫn tr&ecirc;n thị trường. V&agrave; h&atilde;y xem, sau 3 năm, khi MacBook Air l&agrave;m mưa l&agrave;m gi&oacute; tại ph&acirc;n kh&uacute;c n&agrave;y, c&aacute;c nh&agrave; sản xuất kh&aacute;c mới chậm trễ v&agrave;o cuộc với d&ograve;ng sản phẩm Ultrabook c&oacute; c&ugrave;ng ti&ecirc;u ch&iacute; mỏng, nhẹ gi&aacute; hợp l&yacute;. Năm sau, c&aacute;c mẫu m&aacute;y dựa tr&ecirc;n nền tảng kiến tr&uacute;c vi xử l&yacute; ARM hứa hẹn sẽ c&ograve;n mỏng v&agrave; nhẹ hơn nữa.</p>\r\n<div class="image-container image-center" style="width: 440px;">\r\n	<a class="fancybox" href="http://vtcdn.com/sites/default/files/images/2011/10/13/img-1318466309-4.jpg" rel="lightbox"><img alt="" src="http://vtcdn.com/sites/default/files/imagecache/med/images/2011/10/13/img-1318466309-4.jpg" title="" /></a></div>\r\n<p>\r\n	iPad l&agrave; dấu ấn thứ 3 m&agrave; theo chủ quan của người viết l&agrave; dấu ấn quan trọng nhất của Jobs trong việc thay đổi quan niệm về thiết bị di động của ch&uacute;ng ta. Kh&aacute;i niệm m&aacute;y t&iacute;nh bảng (tablet hay slate) đ&atilde; c&oacute; tr&ecirc;n thị trường từ nhiều năm nhưng gần như kh&ocirc;ng c&oacute; c&aacute;ch n&agrave;o khởi sắc cho d&ugrave; c&oacute; sự hẫu thuẫn rất lớn từ một thi&ecirc;n t&agrave;i kh&aacute;c l&agrave; Bill Gates c&ugrave;ng Microsoft. Chỉ đến khi được Steve Jobs &ldquo;ph&aacute;t minh lại&rdquo;, m&aacute;y t&iacute;nh bảng mới trở n&ecirc;n phổ biến v&agrave; tạo ra một cơn sốt chưa từng c&oacute; đối với người ti&ecirc;u d&ugrave;ng.</p>\r\n<p>\r\n	Chiếc iPad đầu ti&ecirc;n được &ocirc;ng giới thiệu v&agrave;o năm 2010 v&agrave; được m&ocirc; tả như một thiết bị kỳ diệu v&agrave; c&oacute; t&iacute;nh c&aacute;ch mạng. Mặc d&ugrave; c&oacute; hệ điều h&agrave;nh giống với iPhone nhưng iPad nổi trội hơn với c&aacute;c ưu điểm về mặt thiết kế vật l&yacute;. N&oacute; c&oacute; c&aacute;c đường lượn trang nh&atilde;, tho&aacute;t khỏi vẻ ngo&agrave;i h&igrave;nh hộp như vi&ecirc;n gạch. N&oacute; mỏng, v&agrave; hơn hết m&agrave;n h&igrave;nh của n&oacute; đ&aacute;p ứng rất tốt c&aacute;c thao t&aacute;c của người d&ugrave;ng. iPad c&oacute; sức mạnh xử l&yacute; v&agrave; hiệu năng ấn tượng để c&oacute; thể thay thế m&aacute;y t&iacute;nh x&aacute;ch tay trong nhiều trường hợp. V&agrave; điểm nhấn cuối c&ugrave;ng của iPad l&agrave; gi&aacute; b&aacute;n rất cạnh tranh khiến n&oacute; ngay lập tức chiếm lấy ng&ocirc;i vị số 1 của thị trường.</p>\r\n<p>\r\n	Những g&igrave; Steve Jobs v&agrave; cộng sự đ&atilde; l&agrave;m cho c&ocirc;ng nghệ di động thật v&ocirc; c&ugrave;ng quan trọng. Sau iPhone, c&aacute;c PDA-phone (điện thoại ki&ecirc;m m&aacute;y trợ gi&uacute;p c&aacute; nh&acirc;n) truyền thống gần như biến mất, c&aacute;c điện thoại di động đa phương tiện thuộc về c&aacute;c đại gia trong l&agrave;ng di động như c&aacute;c mẫu m&aacute;y &ldquo;ho&agrave;nh tr&aacute;ng&rdquo; của Sony Ericsson v&agrave; Nokia cũng kh&ocirc;ng sống nổi. Tiếp sau đ&oacute;, l&agrave;n s&oacute;ng của c&aacute;c điện thoại Android m&ocirc; phỏng thiết kế v&agrave; c&aacute;ch d&ugrave;ng của iPhone mới c&oacute; thể l&agrave;m cho sản phẩm của Apple phải chia sẻ thị phần.</p>\r\n<p>\r\n	Sau Macbook Air, người d&ugrave;ng sẽ c&oacute; điều kiện để dễ d&agrave;ng sở hữu c&aacute;c mẫu m&aacute;y t&iacute;nh x&aacute;ch tay si&ecirc;u di động hơn m&agrave; trước đ&acirc;y hầu như chỉ d&agrave;nh cho những doanh nh&acirc;n cao cấp. Sau iPad, số lượng m&aacute;y t&iacute;nh bảng của c&aacute;c nh&agrave; sản xuất kh&aacute;c tr&ecirc;n thị trường đang nhiều l&ecirc;n từng ng&agrave;y. Ch&uacute;ng ta c&oacute; thể thấy c&aacute;c thiết bị trước đ&acirc;y chỉ c&oacute; trong phim khoa học viễn tưởng được sử dụng tại qu&aacute;n c&agrave; ph&ecirc;, giảng đường, bến xe... Ch&uacute;ng hiện diện được ở khắp nơi một phần l&agrave; nhờ c&oacute; tầm nh&igrave;n của Steve Jobs. Tầm nh&igrave;n ấy c&oacute; được kế thừa v&agrave; ph&aacute;t triển hay kh&ocirc;ng vẫn c&ograve;n l&agrave; một c&acirc;u hỏi lớn cho Apple n&oacute;i ri&ecirc;ng v&agrave; giới c&ocirc;ng nghệ n&oacute;i chung.</p>\r\n<p>\r\n	Mới c&oacute; tin l&agrave; trước khi ra đi, Steve Jobs đ&atilde; l&ecirc;n kế hoạch cho Apple tới tận 4 năm sau, nhưng sau đ&oacute; th&igrave; sao? C&acirc;u trả lời một phần đ&atilde; được h&eacute; lộ qua buổi ra mắt iPhone 4S vừa rồi. Kh&ocirc;ng ai c&oacute; thể thay thế Jobs!</p>\r\n<div class="image-container image-center" style="width: 460px;">\r\n	<a class="fancybox" href="http://vtcdn.com/sites/default/files/images/2011/10/13/img-1318466309-5.jpg" rel="lightbox"><img alt="" src="http://vtcdn.com/sites/default/files/imagecache/med/images/2011/10/13/img-1318466309-5.jpg" title="" /></a>\r\n	<div>\r\n		Tim Cook sẽ phải rất vất vả khi l&agrave; người kế nhiệm của Steve Jobs.</div>\r\n</div>\r\n', 'Steve-Jobs-thay-doi-nganh-di-dong-nhu-the-nao-1318475804.jpg', 3, 21, 0, 'Triệu Gia Thắng', '2011-10-13 11:15:43', 1, '0000-00-00 00:00:00', 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', '', 0, 65, 0),
(49, 'Zing đứng đầu top 5 mạng xã hội tại Việt Nam', 'Zing-dung-dau-top-5-mang-xa-hoi-tai-viet-nam', 'Theo công bố của BUZZ DIGITAL về thị phần các mạng xã hội ở các nước Châu Á vào tháng 8, trong top 5 mạng xã hội phổ biến nhất Việt Nam hoàn toàn không có tên mạng xã hội lớn nhất thế giới hiện nay.', '<div class="content node-content">\r\n	<p>\r\n		Theo c&ocirc;ng bố của BUZZ DIGITAL về thị phần c&aacute;c mạng x&atilde; hội ở c&aacute;c nước Ch&acirc;u &Aacute; v&agrave;o th&aacute;ng 8, trong top 5 mạng x&atilde; hội phổ biến nhất Việt Nam ho&agrave;n to&agrave;n kh&ocirc;ng c&oacute; t&ecirc;n mạng x&atilde; hội lớn nhất thế giới hiện nay.</p>\r\n	<div class="image-container image-center" style="width: 360px;">\r\n		<a class="fancybox" href="http://vtcdn.com/sites/default/files/images/2011/10/13/img-1318465430-1.jpg" rel="lightbox"><img alt="" src="http://vtcdn.com/sites/default/files/imagecache/med/images/2011/10/13/img-1318465430-1.jpg" title="" /></a></div>\r\n	<p>\r\n		Cụ thể, top 5 mạng x&atilde; hội phổ biến nhất ở Việt Nam theo thứ tự bao gồm Zing (1.700 triệu lượt truy cập-page view), Nhaccuatui (280 triệu lượt), Clip.vn (97 triệu lượt), Blogspot (26 triệu) v&agrave; cuối c&ugrave;ng l&agrave; &ldquo;tiểu blog&rdquo; Twitter với 3,9 triệu lượt truy cập.</p>\r\n	<p>\r\n		Như vậy, mạng x&atilde; hội Facebook d&ugrave; đang c&oacute; khoảng 2,5 triệu th&agrave;nh vi&ecirc;n tại Việt Nam, tương đương 0,34% d&acirc;n số Việt Nam (theo số liệu của checkfacebook.com) vẫn kh&ocirc;ng lọt được v&agrave;o trong top 5 mạng x&atilde; hội phổ biến nhất ở Việt Nam.</p>\r\n	<p>\r\n		Đ&aacute;ng ch&uacute; &yacute;, theo kết quả đ&aacute;nh gi&aacute; tr&ecirc;n, t&igrave;nh h&igrave;nh xếp hạng mạng x&atilde; hội phổ biến tại Việt Nam &quot;dường như&quot; đ&atilde; c&oacute; nhiều thay đổi, so với Bản b&aacute;o c&aacute;o của h&atilde;ng nghi&ecirc;n cứu thị trường Cimigo. Cụ thể, Bản b&aacute;o c&aacute;o người d&ugrave;ng <span class="VietAdTextLink" id="link0" style="text-decoration: underline; border-bottom-style: solid; border-bottom-width: 1px; white-space: nowrap;">Internet</span> (NetCitizens) Việt Nam 2011 được h&atilde;ng nghi&ecirc;n cứu thị trường Cimigo thực hiện trong khoảng thời gian từ th&aacute;ng 11-12/2010 chỉ ra rằng: năm 2010, 70% số người sử dụng mạng x&atilde; hội ở Việt Nam l&agrave; th&agrave;nh vi&ecirc;n của Facebook, tăng mạnh so với năm 2009 (chỉ c&oacute; khoảng 47%). Mạng x&atilde; hội Zing Me đ&atilde; tăng gấp 3 lần trong v&ograve;ng 1 năm v&agrave; leo l&ecirc;n đứng thứ 2, chiếm gần 20% số lượng người sử dụng mạng x&atilde; hội. Yahoo 360 Plus đứng ở vị tr&iacute; số 3, thu h&uacute;t được khoảng 12% người sử dụng mạng x&atilde; hội, giảm khoảng 1% so với năm 2009.</p>\r\n	<p>\r\n		Cũng theo c&ocirc;ng bố của BUZZ DIGITAL, Việt Nam hiện nay đang c&oacute; khoảng 28,3 triệu người sử dụng Internet, tương đương 31,5% d&acirc;n số. Con số n&agrave;y thấp hơn so với số liệu về t&igrave;nh h&igrave;nh ph&aacute;t triển Internet th&aacute;ng 8 của Trung t&acirc;m Internet Việt Nam (VNNIC) với hơn 30 triệu người sử dụng Internet (ứng với 34,58% d&acirc;n số).</p>\r\n	<p>\r\n		BUZZ DIGITAL l&agrave; một <span class="VietAdTextLink" id="link1" style="text-decoration: underline; border-bottom-style: solid; border-bottom-width: 1px; white-space: nowrap;">c&ocirc;ng ty</span> chuy&ecirc;n tư vấn thương hiệu v&agrave; tiếp thị số được th&agrave;nh lập năm 2010 v&agrave; l&agrave; một trong những c&ocirc;ng ty tư vấn thương hiệu v&agrave; tiếp thị số đầu ti&ecirc;n tại Việt Nam. Hiện BUZZ DIGITAL c&oacute; trụ sở tại H&agrave; Nội với hơn 15 nh&acirc;n sự tư vấn v&agrave; triển khai to&agrave;n bộ c&aacute;c dịch vụ truyền th&ocirc;ng tiếp thị online của những c&ocirc;ng ty tư vấn thương hiệu, Agency h&agrave;ng đầu như T&amp;A Ogilvy, LeBros, FTA Research, Dat Viet VAC, Goldsun&hellip;</p>\r\n	<p>\r\n		Theo ICTnews</p>\r\n</div>\r\n', 'Zing-dung-dau-top-5-mang-xa-hoi-tai-Viet-Nam-1318476342.jpg', 3, 21, 0, 'Triệu Gia Thắng', '2011-10-13 11:22:52', 1, '0000-00-00 00:00:00', 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 'Internet,BUZZ DIGITAL,Facebook,mạng xã hội,NetCitizens,người dùng internet,zing,thông tin công nghệ,', 'Theo công bố của BUZZ DIGITAL về thị phần các mạng xã hội ở các nước Châu Á vào tháng 8, trong top 5 mạng xã hội phổ biến nhất Việt Nam hoàn toàn không có tên mạng xã hội lớn nhất thế giới hiện nay.', 0, 65, 0),
(50, 'Dịch vụ BlackBerry tê liệt lây lan đến Mỹ và Canada', 'dich-vu-blackberry-te-liet-lay-lan-den-my-va-canada', 'Thuê bao BlackBerry trên toàn thế giới tiếp tục bị gián đoạn trong 3 ngày liên tiếp khi RIM thực hiện chuyển đổi một số cơ sở hạ tầng. Bên cạnh đó, người dùng tại Mỹ và Canada nay đã nằm trong danh...', '<div class="content node-content">\r\n	<p>\r\n		Thu&ecirc; bao BlackBerry tr&ecirc;n to&agrave;n thế giới tiếp tục bị gi&aacute;n đoạn trong 3 ng&agrave;y li&ecirc;n tiếp khi RIM thực hiện chuyển đổi một số cơ sở hạ tầng. B&ecirc;n cạnh đ&oacute;, người d&ugrave;ng tại Mỹ v&agrave; Canada nay đ&atilde; nằm trong danh s&aacute;ch bị ảnh hưởng.</p>\r\n	<div class="image-container image-center" style="width: 460px;">\r\n		<a class="fancybox" href="http://vtcdn.com/sites/default/files/images/2011/10/13/img-1318442413-1.jpg" rel="lightbox"><img alt="" src="http://vtcdn.com/sites/default/files/imagecache/med/images/2011/10/13/img-1318442413-1.jpg" title="" /></a></div>\r\n	<p>\r\n		Kh&aacute;ch h&agrave;ng sử dụng smartphone BlackBerry của Research In Motion (RIM) ở Mỹ v&agrave; Canada b&acirc;y giờ kh&ocirc;ng thể truy cập v&agrave;o <span class="VietAdTextLink" id="link0" style="text-decoration: underline; border-bottom-style: solid; border-bottom-width: 1px; white-space: nowrap;">email</span> v&agrave; BlackBerry Message tương tự như người d&ugrave;ng ở ch&acirc;u &Acirc;u, Trung Đ&ocirc;ng, Ấn Độ v&agrave; ch&acirc;u Phi <a href="http://www.thongtincongnghe.com/article/28841">bị vấn đề tương tự</a> trước đ&oacute;.</p>\r\n	<h4>\r\n		Gi&aacute;n đoạn l&agrave;m t&ecirc; liệt c&aacute;c hoạt động</h4>\r\n	<p>\r\n		Kh&aacute;ch h&agrave;ng tại Mỹ v&agrave; Canada bắt đầu ph&agrave;n n&agrave;n về việc <span class="VietAdTextLink" id="link1" style="text-decoration: underline; border-bottom-style: solid; border-bottom-width: 1px; white-space: nowrap;">dịch vụ</span> email của m&igrave;nh bị tr&igrave; ho&atilde;n. Một người sử dụng ở Boston cho biết rằng &ocirc;ng đ&atilde; bắt đầu thấy sự chậm trễ của dịch vụ email v&agrave;o s&aacute;ng sớm h&ocirc;m 12, &ocirc;ng chỉ c&oacute; thể nhận được email đ&oacute; sau khoảng 3 giờ kể từ thời điểm gửi.</p>\r\n	<p>\r\n		Trước đ&oacute; RIM đổ lỗi cho sự gi&aacute;n đoạn dịch vụ bị ảnh hưởng Ch&acirc;u &Acirc;u, Trung Đ&ocirc;ng, Ấn Độ, Mỹ La-tinh v&agrave; ch&acirc;u Phi. Sau đ&oacute;, RIM cho biết vấn đề đ&atilde; được sửa. Nhưng h&atilde;ng cũng n&oacute;i th&ecirc;m rằng c&ocirc;ng ty c&oacute; thể mất một thời gian để l&agrave;m việc với c&aacute;c dữ liệu bị tồn đọng hiện vẫn chưa được gửi đến c&aacute;c thiết bị thu&ecirc; bao. Email bắt đầu được đến một số người sử dụng v&agrave;o cuối ng&agrave;y h&ocirc;m qua ở trạng th&aacute;i &quot;nhỏ giọt&quot; một.</p>\r\n	<p>\r\n		Theo giải th&iacute;ch của RIM h&ocirc;m 11 vừa qua cho biết: &quot;Mặc d&ugrave; hệ thống n&agrave;y được thiết kế để chuyển đổi dự ph&ograve;ng đến một bộ chuyển mạch sao lưu, nhưng chức năng n&agrave;y trước đ&acirc;y chưa được chạy thử nghiệm. Kết quả l&agrave;, một lượng lớn dữ liệu được tạo ra đang tồn đọng v&agrave; h&atilde;ng đang l&agrave;m việc để xử l&iacute; c&aacute;c dữ liệu tồn đọng cũng như kh&ocirc;i phục lại dịch vụ b&igrave;nh thường c&agrave;ng nhanh c&agrave;ng tốt. Ch&uacute;ng t&ocirc;i th&agrave;nh thật xin lỗi kh&aacute;ch h&agrave;ng v&igrave; sự bất tiện n&agrave;y v&agrave; ch&uacute;ng t&ocirc;i sẽ tiếp tục gửi th&ocirc;ng b&aacute;o đến người d&ugrave;ng.&quot;</p>\r\n	<div class="image-container image-center" style="width: 460px;">\r\n		<a class="fancybox" href="http://vtcdn.com/sites/default/files/images/2011/10/13/img-1318442413-2.jpg" rel="lightbox"><img alt="" src="http://vtcdn.com/sites/default/files/imagecache/med/images/2011/10/13/img-1318442413-2.jpg" title="" /></a></div>\r\n	<p>\r\n		Đ&oacute; l&agrave; chưa r&otilde; liệu c&aacute;c vấn đề n&agrave;y c&oacute; g&acirc;y rắc rối cho kh&aacute;ch h&agrave;ng nước ngo&agrave;i cũng c&oacute; bị ảnh hưởng đến dịch vụ ở Bắc Mỹ hay kh&ocirc;ng. Chỉ biết rằng, RIM đ&atilde; thừa nhận về việc c&oacute; một vấn đề với dịch vụ của m&igrave;nh tại Mỹ v&agrave; Canada. Nhưng h&atilde;ng đ&atilde; kh&ocirc;ng cung cấp th&ecirc;m c&aacute;c th&ocirc;ng tin cụ thể.</p>\r\n	<p>\r\n		Thu&ecirc; bao BlackBerry ở ch&acirc;u Mỹ c&oacute; thể gặp sự cố chậm trễ dịch vụ li&ecirc;n tục v&agrave;o s&aacute;ng 13/10. RIM cho biết họ đang tiến h&agrave;nh giải quyết t&igrave;nh h&igrave;nh tr&ecirc;n c&agrave;ng nhanh c&agrave;ng tốt v&agrave; đ&atilde; gửi lời xin lỗi đến kh&aacute;ch h&agrave;ng của m&igrave;nh v&igrave; sự bất tiện n&agrave;y. H&atilde;ng cũng sẽ cung cấp một bản cập nhật ngay sau khi th&ocirc;ng tin cụ thể được đưa ra.</p>\r\n	<p>\r\n		Người d&ugrave;ng BlackBerry ở Canada v&agrave; c&aacute;c bộ phận của Trung v&agrave; Nam Mỹ cũng bị gi&aacute;n đoạn dịch vụ trong th&aacute;ng trước, khi dịch vụ email v&agrave; BlackBerry Message của h&atilde;ng bị ngưng hoạt động.</p>\r\n	<h4>\r\n		Ưu nhiều m&agrave; nhược cũng c&oacute;</h4>\r\n	<p>\r\n		Kiến tr&uacute;c mạng của RIM BlackBerry c&oacute; ưu v&agrave; nhược điểm ri&ecirc;ng.</p>\r\n	<p>\r\n		Kh&ocirc;ng giống như c&aacute;c nền tảng điện thoại th&ocirc;ng minh kh&aacute;c, RIM thu nhận tất cả c&aacute;c email v&agrave; tin nhắn th&ocirc;ng qua m&aacute;y chủ BlackBerry của m&igrave;nh tại c&aacute;c trung t&acirc;m hoạt động tr&ecirc;n to&agrave;n thế giới. Kiến tr&uacute;c n&agrave;y tập trung cho c&aacute;c dịch vụ của h&atilde;ng, c&oacute; khả năng th&ecirc;m m&atilde; h&oacute;a v&agrave; bảo mật cho tin nhắn ngay tr&ecirc;n m&aacute;y chủ trước khi đưa đến m&aacute;y của chủ nh&acirc;n cần nhận. V&agrave; đối với nhiều kh&aacute;ch h&agrave;ng của c&ocirc;ng ty, t&iacute;nh năng an ninh bổ sung n&agrave;y l&agrave; l&iacute; do ch&iacute;nh m&agrave; họ sử dụng dịch vụ.</p>\r\n	<div class="image-container image-center" style="width: 460px;">\r\n		<a class="fancybox" href="http://vtcdn.com/sites/default/files/images/2011/10/13/img-1318442413-3.jpg" rel="lightbox"><img alt="" src="http://vtcdn.com/sites/default/files/imagecache/med/images/2011/10/13/img-1318442413-3.jpg" title="" /></a></div>\r\n	<p>\r\n		Tuy nhi&ecirc;n, kiến ​​tr&uacute;c cũng c&oacute; nghĩa l&agrave; chỉ cần một điểm duy nhất tr&ecirc;n mạng lưới bị lỗi sẽ c&oacute; thể l&agrave;m gi&aacute;n đoạn việc gửi/nhận tin nhắn l&agrave;m ảnh hưởng đến h&agrave;ng triệu kh&aacute;ch h&agrave;ng.</p>\r\n	<p>\r\n		Theo <a class="ext" href="http://news.cnet.com/8301-30686_3-20119163-266/blackberry-service-issues-spread-to-u.s-and-canada/?tag=mncol;topStories" target="_blank">CNET</a></p>\r\n</div>\r\n', 'Dich-vu-BlackBerry-te-liet-lay-lan-den-My-va-Canada-1318476602.jpg', 3, 21, 0, 'Triệu Gia Thắng', '2011-10-13 11:27:15', 1, '0000-00-00 00:00:00', 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Internet,Blackberry,BlackBerry Message,email,RIM,tê liệt,thông tin công nghệ,tin công nghệ,bảo mật,c', 'Thuê bao BlackBerry trên toàn thế giới tiếp tục bị gián đoạn trong 3 ngày liên tiếp khi RIM thực hiện chuyển đổi một số cơ sở hạ tầng. Bên cạnh đó, người dùng tại Mỹ và Canada nay đã nằm trong danh sách bị ảnh hưởng', 0, 66, 0),
(51, 'Trở nên nổi tiếng nhờ ảnh tưởng niệm về Steve Jobs', 'tro-nen-noi-tieng-nho-anh-tuong-niem-ve-Steve-jobs', 'Jonathan Mak, cậu sinh viên người Hong Kong 19 tuổi, đã trở nên nổi tiếng trong cộng đồng dân cư mạng nhờ bức ảnh tưởng niệm ông trùm công nghệ thông tin Steve Jobs', '<p>\r\n	Jonathan Mak, cậu sinh vi&ecirc;n người Hong Kong 19 tuổi, đ&atilde; trở n&ecirc;n nổi tiếng trong cộng đồng d&acirc;n cư mạng nhờ bức ảnh tưởng niệm &ocirc;ng tr&ugrave;m c&ocirc;ng nghệ th&ocirc;ng tin Steve Jobs.</p>\r\n<div class="image-container image-center" style="width: 460px;">\r\n	<a class="fancybox" href="http://vtcdn.com/sites/default/files/images/2011/10/11/img-1318323716-1.jpg" rel="lightbox"><img alt="" src="http://vtcdn.com/sites/default/files/imagecache/med/images/2011/10/11/img-1318323716-1.jpg" title="" /></a>\r\n	<div>\r\n		Jonathan Mak v&agrave; thiết kế logo của m&igrave;nh</div>\r\n</div>\r\n<p>\r\n	Từ logo h&igrave;nh quả t&aacute;o cắn dở của Apple, Mak đ&atilde; kh&eacute;o l&eacute;o lồng gh&eacute;p bức ảnh của Steve Jobs v&agrave;o g&oacute;c khuyết. &Yacute; tưởng s&aacute;ng tạo n&agrave;y của cậu được khơi nguồn cảm hứng từ ch&iacute;nh người s&aacute;ng lập Apple. &ldquo;&Ocirc;ng ấy (Steve Jobs) l&agrave; một trong số &iacute;t người m&agrave; t&ocirc;i muốn đưa v&agrave;o trong c&aacute;c thiết kế của m&igrave;nh - &yacute; tưởng (của Jobs) tuy đơn giản nhưng lại mang những th&ocirc;ng điệp mạnh mẽ&quot;.</p>\r\n<p>\r\n	Logo &ldquo;quả t&aacute;o v&agrave; Steve Jobs&rdquo; được Mak đưa l&ecirc;n mạng từ hồi cuối th&aacute;ng 8 khi Jobs từ chức CEO, nhưng tại thời điểm đ&oacute; h&igrave;nh ảnh chưa g&acirc;y được nhiều sự ch&uacute; &yacute;.</p>\r\n<p>\r\n	Sau khi Jobs mất, lập tức bức ảnh cũng như chủ nh&acirc;n của n&oacute; &ldquo;bỗng dưng nổi tiếng&quot;. H&agrave;ng trăm ngh&igrave;n email, lời nhắn được gửi đến Mak khiến cậu kh&ocirc;ng thể tin nổi. Thậm ch&iacute; một v&agrave;i tờ b&aacute;o của Mỹ v&agrave; Đức đ&atilde; li&ecirc;n lạc với Mak để mua lại bản quyền h&igrave;nh ảnh tr&ecirc;n v&agrave; mời cậu l&agrave;m việc.</p>\r\n<p>\r\n	&ldquo;T&ocirc;i rất vui v&igrave; nhận được sự ch&uacute; &yacute; của mọi người, nhưng t&ocirc;i muốn tập trung v&agrave;o việc học trước khi đi l&agrave;m&quot; - Mak, hiện l&agrave; sinh vi&ecirc;n năm 2 khoa thiết kế đồ họa Trường B&aacute;ch khoa Hong Kong, n&oacute;i.</p>\r\n<p>\r\n	Khi ph&oacute;ng vi&ecirc;n AFP hỏi về những cơ hội kinh tế từ logo n&agrave;y, Mak cho biết cậu đang c&acirc;n nhắc việc li&ecirc;n hệ với Apple để b&agrave;n về vấn đề bản quyền v&igrave; d&ugrave; sao logo cũng được thiết kết dựa tr&ecirc;n logo c&oacute; sẵn của h&atilde;ng n&agrave;y.</p>\r\n<p>\r\n	Tuy nhi&ecirc;n, tr&ecirc;n mạng, một số doanh nghiệp đ&atilde; nhanh tay sử dụng logo của Mark để in l&ecirc;n c&aacute;c sản phẩm tưởng niệm như &aacute;o ph&ocirc;ng, mũ...</p>\r\n<p>\r\n	Mak cho biết nếu nhận được tiền bản quyền từ thiết kế n&agrave;y, cậu sẽ d&agrave;nh một phần tiền cho c&ocirc;ng t&aacute;c nghi&ecirc;n cứu căn bệnh ung thư.</p>\r\n<p>\r\n	Steve Jobs mất v&igrave; bệnh ung thư tuyến tụy ở tuổi 56.</p>\r\n<p>\r\n	Theo Nhịp sống số - Tuổi trẻ Online</p>\r\n', 'Tro-nen-noi-tieng-nho-anh-tuong-niem-ve-Steve-Jobs-1318476836.jpg', 3, 23, 0, 'Trần Văn Học', '2011-10-13 11:30:02', 1, '0000-00-00 00:00:00', 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Giải trí,ảnh tưởng niệm,Jonathan Mak,nổi tiếng,steve jobs,ý tưởng thiết kế,thông tin công nghệ,tin c', 'Jonathan Mak, cậu sinh viên người Hong Kong 19 tuổi, đã trở nên nổi tiếng trong cộng đồng dân cư mạng nhờ bức ảnh tưởng niệm ông trùm công nghệ thông tin Steve Jobs.', 0, 65, 0),
(52, 'AT&T ép Apple để có iPhone 4S 4G', 'At&t-ep-Apple-de-co-iPhone-4S-4g', 'Theo như một tài liệu nội bộ vừa bị rò rỉ thì có vẻ như AT&T đã gây sức ép nhiều lần với Apple để phiên bản iPhone mới nhất có thể hiển thị biểu tượng 4G.', '<p>\r\n	Theo như một t&agrave;i liệu nội bộ vừa bị r&ograve; rỉ th&igrave; c&oacute; vẻ như AT&amp;T đ&atilde; g&acirc;y sức &eacute;p nhiều lần với Apple để phi&ecirc;n bản iPhone mới nhất c&oacute; thể hiển thị biểu tượng 4G.</p>\r\n<div class="image-container image-center" style="width: 460px;">\r\n	<a class="fancybox" href="http://vtcdn.com/sites/default/files/images/2011/10/10/img-1318247123-1.jpg" rel="lightbox"><img alt="" src="http://vtcdn.com/sites/default/files/imagecache/med/images/2011/10/10/img-1318247123-1.jpg" title="" /></a></div>\r\n<p>\r\n	Việc iPhone 4S hỗ trợ c&ocirc;ng nghệ 4G được AT&amp;T khẳng định l&agrave; một điều kiện quan trọng để mạng n&agrave;y triển khai được c&aacute;c chiến lược tiếp thị sản phẩm của m&igrave;nh. Trong khi đ&oacute;, iPhone 4S d&ugrave; c&oacute; đạt được đến tốc độ của HSPA+ (tương đương với 4G) th&igrave; vẫn chưa thể coi l&agrave; 4G đ&iacute;ch thực (l&agrave; hai c&ocirc;ng nghệ LTE hoặc WiMax). Một nguồn tin giấu t&ecirc;n cho biết c&aacute;c quan chức của AT&amp;T kh&ocirc;ng h&agrave;i l&ograve;ng với việc n&agrave;y, nhất l&agrave; khi AT&amp;T vốn l&agrave; nh&agrave; mạng đối t&aacute;c l&acirc;u năm nhất của Quả t&aacute;o.</p>\r\n<p>\r\n	T&agrave;i liệu n&oacute;i tr&ecirc;n tiết lộ rằng, hiện AT&amp;T đang l&agrave;m việc với Apple để c&oacute; thể cập nhật biểu tượng th&ocirc;ng b&aacute;o mạng th&agrave;nh 4G, thay v&igrave; 3G như trong thiết kế gốc. V&agrave; c&oacute; vẻ như Apple cũng nhượng bộ trước &yacute; tưởng n&agrave;y. Sự thay đổi sẽ đến dưới h&igrave;nh thức một bản update d&agrave;nh cho hệ điều h&agrave;nh iOS v&agrave; do Apple trực tiếp ph&aacute;t h&agrave;nh. Tuy nhi&ecirc;n t&agrave;i liệu kh&ocirc;ng đề cập đến thời điểm ra mắt cụ thể của bản cập nhật n&oacute;i tr&ecirc;n.</p>\r\n<p>\r\n	Tuy nhi&ecirc;n, Apple đ&atilde; thể hiện r&otilde; quan điểm của h&atilde;ng trong b&agrave;i thuyết tr&igrave;nh tại sự kiện &quot;H&atilde;y c&ugrave;ng n&oacute;i iPhone&quot; hồi giữa tuần trước khi kh&ocirc;ng hề khẳng định iPhone 4S l&agrave; một thiết bị 4G. Apple vẫn coi iPhone 4S l&agrave; một thiết bị 3G nhưng nhấn mạnh rằng, con dế n&agrave;y c&oacute; thể đạt đến tốc độ download 14,4 Mb/gi&acirc;y - nhanh ngang ngửa với 4G.</p>\r\n<p>\r\n	&quot;Sẽ rất th&uacute; vị nếu chứng kiến Apple nhượng bộ trước AT&amp;T, một h&agrave;nh động vốn rất hiếm gặp ở Quả t&aacute;o&quot;, một quan chức trong giới b&igrave;nh luận. iPhone 4S sẽ bắt đầu b&agrave;y b&aacute;n tr&ecirc;n thị trường từ ng&agrave;y 14/10 tới đ&acirc;y.</p>\r\n<p>\r\n	Hiện tại, AT&amp;T đang tiếp thị nhiều thiết bị 4G như Samsung Infuse 4G v&agrave; HTC Inspire 4G, tuy nhi&ecirc;n mạng n&agrave;y sẽ chỉ triển khai hệ thống 4G LTE đ&iacute;ch thực đến 15 thị trường v&agrave;o cuối năm nay.</p>\r\n<p>\r\n	Theo VietNamNet</p>\r\n', 'AT&T-ep-Apple-de-co-iPhone-4S-4G-1318476957.jpg', 3, 23, 0, 'Triệu Gia Thắng', '2011-10-13 11:33:56', 1, '0000-00-00 00:00:00', 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Thị trường,Apple,AT&T,công nghệ 4G,iPhone 4S,rò rỉ,thông tin công nghệ,tin công nghệ,bảo mật,công ng', 'Theo như một tài liệu nội bộ vừa bị rò rỉ thì có vẻ như AT&T đã gây sức ép nhiều lần với Apple để phiên bản iPhone mới nhất có thể hiển thị biểu tượng 4G.', 0, 85, 0);
INSERT INTO `articles` (`id`, `title`, `alias`, `introtext`, `fulltext`, `image`, `section_id`, `category_id`, `menu_id`, `author`, `created`, `created_by`, `modified`, `modified_by`, `published`, `time_up`, `time_down`, `ordering`, `metakey`, `metadesc`, `access`, `hits`, `trash`) VALUES
(27, '“Bệnh” thường gặp trên 4 đời điện thoại iPhone', '“benh”-thuong-gap-tren-4-doi-dien-thoai-iPhone', 'Đây là những lỗi đặc trưng xảy ra trên từng phiên bản, từ iPhone 2G cho đến iPhone 4. Một số hiện tượng này có thể sửa chữa dễ dàng, còn lại buộc phải thay toàn bộ bo mạch hoặc màn hình.', '<div class="content node-content">\r\n	<p>\r\n		Đ&acirc;y l&agrave; những lỗi đặc trưng xảy ra tr&ecirc;n từng phi&ecirc;n bản, từ iPhone 2G cho đến iPhone 4. Một số hiện tượng n&agrave;y c&oacute; thể sửa chữa dễ d&agrave;ng, c&ograve;n lại buộc phải thay to&agrave;n bộ bo mạch hoặc m&agrave;n h&igrave;nh.</p>\r\n	<p>\r\n		Từ năm 2007 đến nay, Apple đ&atilde; cho ra mắt 4 phi&ecirc;n bản iPhone mang nhiều phong c&aacute;ch. C&aacute;c <span class="VietAdTextLink" id="link0" style="text-decoration: underline; border-bottom-style: solid; border-bottom-width: 1px; white-space: nowrap;">sản phẩm</span> n&agrave;y đều gặp phải những vấn đề kh&aacute;c hẳn nhau.</p>\r\n	<h4>\r\n		iPhone 2G</h4>\r\n	<p>\r\n		Điện thoại đầu ti&ecirc;n của Apple đ&atilde; được hơn 4 năm tuổi v&agrave; người d&ugrave;ng chỉ c&oacute; thể mua sản phẩm đ&atilde; qua sử dụng. M&aacute;y d&ugrave;ng vi xử l&iacute; tốc độ 412 MHz, m&agrave;n h&igrave;nh 3,5 inch v&agrave; camera chụp ảnh 2 megapixel.</p>\r\n	<div class="image-container image-center" style="width: 450px;">\r\n		<div style="text-align: justify;">\r\n			&nbsp;</div>\r\n		<div style="text-align: center;">\r\n			<div style="text-align: justify; margin-left: 40px;">\r\n				<a class="fancybox" href="http://vtcdn.com/sites/default/files/images/2011/9/16/img-1316133423-1.jpg" rel="lightbox"><img alt="" src="http://vtcdn.com/sites/default/files/imagecache/med/images/2011/9/16/img-1316133423-1.jpg" title="" /></a></div>\r\n		</div>\r\n		<div style="text-align: center;">\r\n			iPhone 2G.<br />\r\n			&nbsp;</div>\r\n	</div>\r\n	<p>\r\n		Theo &ocirc;ng Phan Tiến, quản l&iacute; c&ocirc;ng ty iShop tr&ecirc;n đường B&ugrave;i Thị Xu&acirc;n (S&agrave;i G&ograve;n), lỗi hay gặp nhất tr&ecirc;n sản phẩm l&agrave; c&oacute; đốm tr&ecirc;n m&agrave;n h&igrave;nh v&agrave; dần loang sang chỗ kh&aacute;c. Hiện tượng n&agrave;y xảy ra khi xuất hiện sự va chạm mạnh hoặc rơi từ độ cao xuống mặt đất. L&uacute;c đầu n&oacute; chỉ l&agrave; một điểm lệch m&agrave;u nhỏ, về sau sẽ l&acirc;y lan ra to&agrave;n m&agrave;n h&igrave;nh. &Ocirc;ng Tiến cho biết để khắc phục buộc phải thay phần hiển thị. Do cảm ứng v&agrave; m&agrave;n h&igrave;nh d&iacute;nh liền với nhau n&ecirc;n phải thay cả 2 v&agrave; số tiền v&agrave;o khoảng 1 triệu đồng.</p>\r\n	<p>\r\n		Một vấn đề nhỏ kh&aacute;c thường xuy&ecirc;n gặp tr&ecirc;n iPhone 2G l&agrave; hiện tượng loa bị r&egrave; hoặc &acirc;m thanh nhỏ. Nguy&ecirc;n nh&acirc;n l&agrave; do bụi đ&oacute;ng cặn l&agrave;m giảm chất lượng &acirc;m thanh. Biện ph&aacute;p khắc phục kh&aacute; đơn giản, chỉ cần mang ra cửa h&agrave;ng chuy&ecirc;n phần cứng Apple v&agrave; nhờ vệ sinh tại chỗ với gi&aacute; dưới 100 ngh&igrave;n đồng.</p>\r\n	<h4>\r\n		iPhone 3G</h4>\r\n	<p>\r\n		iPhone 3G tr&igrave;nh l&agrave;ng v&agrave;o th&aacute;ng 6/2008. M&aacute;y c&oacute; cấu h&igrave;nh giống hệt model 2G, chỉ kh&aacute;c ở kiểu d&aacute;ng, th&ecirc;m kết nối 3G v&agrave; định vị GPS.</p>\r\n	<div class="image-container image-center" style="width: 450px;">\r\n		<div style="text-align: justify;">\r\n			<div style="margin-left: 40px;">\r\n				<a class="fancybox" href="http://vtcdn.com/sites/default/files/images/2011/9/16/img-1316133423-2.jpg" rel="lightbox"><img alt="" src="http://vtcdn.com/sites/default/files/imagecache/med/images/2011/9/16/img-1316133423-2.jpg" style="width: 454px; height: 324px;" title="" /></a></div>\r\n		</div>\r\n		<div style="text-align: center;">\r\n			iPhone 3G.<br />\r\n			&nbsp;</div>\r\n	</div>\r\n	<p>\r\n		Vấn đề hay xảy ra nhất tr&ecirc;n điện thoại n&agrave;y l&agrave; hỏng kết nối Wi-Fi v&agrave; thường đi k&egrave;m Bluetooth. Đ&acirc;y cũng l&agrave; kinh nghiệm của những người hay mua iPhone 3G cũ, thường xuy&ecirc;n kiểm tra c&aacute;c kết nối kh&ocirc;ng d&acirc;y đầu ti&ecirc;n. Theo một chuy&ecirc;n gia về iPhone, khi sản phẩm kh&ocirc;ng bắt được Wi-Fi, người d&ugrave;ng thử reset lại c&agrave;i đặt mạng. Nếu kh&ocirc;ng khắc phục được buộc phải mang ra h&agrave;ng với ph&iacute; sửa v&agrave;o khoảng 900 ngh&igrave;n đồng.</p>\r\n	<h4>\r\n		iPhone 3GS</h4>\r\n	<p>\r\n		iPhone 3GS c&oacute; thiết kế giữ nguy&ecirc;n của model 3G nhưng được n&acirc;ng cấp l&ecirc;n chip tốc độ cao hơn, RAM gấp đ&ocirc;i 256 MB, camera 3,2 megapixel, tự động lấy n&eacute;t.</p>\r\n	<div class="image-container image-center" style="width: 450px;">\r\n		<div style="margin-left: 40px;">\r\n			<a class="fancybox" href="http://vtcdn.com/sites/default/files/images/2011/9/16/img-1316133423-3.jpg" rel="lightbox"><img alt="" src="http://vtcdn.com/sites/default/files/imagecache/med/images/2011/9/16/img-1316133423-3.jpg" title="" /></a></div>\r\n		<div style="text-align: center;">\r\n			iPhone 3GS.<br />\r\n			&nbsp;</div>\r\n	</div>\r\n	<p>\r\n		Sản phẩm n&agrave;y được cho l&agrave; ổn định nhất trong 4 đời iPhone. M&aacute;y hầu như &iacute;t c&oacute; lỗi nặng, chỉ duy nhất chết IC nguồn do d&ugrave;ng sạc nh&aacute;i, giả kh&ocirc;ng ch&iacute;nh h&atilde;ng. Hiện tượng c&oacute; thể nhận biết khi m&aacute;y bật kh&ocirc;ng l&ecirc;n kể cả khi cắm điện. Khi đ&oacute;, người d&ugrave;ng phải mang m&aacute;y ra tiệm với chi ph&iacute; sửa khoảng từ 800 ngh&igrave;n đến 1,2 triệu đồng.</p>\r\n	<h4>\r\n		iPhone 4</h4>\r\n	<p>\r\n		Apple tr&igrave;nh l&agrave;ng iPhone 4 v&agrave;o năm ngo&aacute;i với kiểu d&aacute;ng ho&agrave;n to&agrave;n mới, m&agrave;n h&igrave;nh giữ nguy&ecirc;n 3,5 inch nhưng được n&acirc;ng cấp độ ph&acirc;n giải 960 x 640 pixel, cao gấp 4 lần so với ba model trước. Ngo&agrave;i ra, chip cũng c&oacute; tốc độ nhanh hơn, RAM 512 MB v&agrave; camera 5 &quot;chấm&quot;.</p>\r\n	<div class="image-container image-center" style="width: 450px;">\r\n		<div style="margin-left: 40px;">\r\n			<a class="fancybox" href="http://vtcdn.com/sites/default/files/images/2011/9/16/img-1316133423-4.jpg" rel="lightbox"><img alt="" src="http://vtcdn.com/sites/default/files/imagecache/med/images/2011/9/16/img-1316133423-4.jpg" title="" /></a></div>\r\n		<div style="text-align: center;">\r\n			iPhone 4.<br />\r\n			&nbsp;</div>\r\n	</div>\r\n	<p>\r\n		Theo &ocirc;ng Mai Triều Nguy&ecirc;n, Gi&aacute;m đốc c&ocirc;ng ty Mai Nguy&ecirc;n (S&agrave;i G&ograve;n), iPhone 4 hay bị mắc lỗi về &acirc;m thanh, s&oacute;ng v&agrave; n&uacute;t Home chập chờn. Người n&agrave;y cho biết, nhiều đợt h&agrave;ng iPhone 4 ch&iacute;nh h&atilde;ng bị lỗi loa đ&agrave;m thoại với tỉ lệ rất cao l&ecirc;n đến 30%. C&ograve;n n&uacute;t Home chập chờn l&agrave; do bị ẩm khi nước hoặc mồ h&ocirc;i x&acirc;m nhập trong qu&aacute; tr&igrave;nh sử dụng. Tất cả 2 trường hợp tr&ecirc;n đều được mang l&ecirc;n c&ocirc;ng ty ph&acirc;n phối để tiến h&agrave;nh kiểm tra v&agrave; đổi mới.</p>\r\n	<p>\r\n		C&ograve;n trường hợp mất s&oacute;ng thường xảy ra tr&ecirc;n iPhone 4 đợt đầu ti&ecirc;n sản xuất v&agrave; biện ph&aacute;p khắc phục kh&aacute; đơn giản l&agrave; trang bị vỏ bảo vệ để tr&aacute;nh chạm tay trực tiếp v&agrave;o phần bắt s&oacute;ng.</p>\r\n	<h4>\r\n		Bảng so s&aacute;nh 5 đời iPhone</h4>\r\n	<h4>\r\n		&nbsp;</h4>\r\n	<div class="image-container image-center" style="width: 460px;">\r\n		<div style="margin-left: 40px;">\r\n			<a class="fancybox" href="http://vtcdn.com/sites/default/files/images/2011/9/16/img-1316133423-5.jpg" rel="lightbox"><img alt="" src="http://vtcdn.com/sites/default/files/imagecache/med/images/2011/9/16/img-1316133423-5.jpg" title="" /></a></div>\r\n	</div>\r\n	<p style="text-align: right;">\r\n		&nbsp;</p>\r\n	<p style="text-align: right;">\r\n		Theo VnExpress</p>\r\n</div>\r\n', 'benh_thuong_gap_tren_4_doi_dien_thoai_iPhone_1316190154.jpeg', 3, 23, 0, 'Triệu Gia Thắng', '2011-09-12 00:00:00', 1, '0000-00-00 00:00:00', 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'iphone,smartphone,mobile,điện thoại, apple', '', 0, 77, 0),
(46, 'LG công bố điện thoại 2 SIM LG S367', 'lg-cong-bo-dien-thoai-2-SIm-lg-S367', 'LG vừa tung ra thị trường mẫu điện thoại 2 SIM mới nhất mang tên S367 nhằm đem đến sự tiện dụng cho người dùng sử dụng nhiều SIM và cần đến sự gọn nhẹ.', '<p>\r\n	LG vừa tung ra thị trường mẫu điện thoại 2 SIM mới nhất mang t&ecirc;n S367 nhằm đem đến sự tiện dụng cho người d&ugrave;ng sử dụng nhiều SIM v&agrave; cần đến sự gọn nhẹ.</p>\r\n<div class="image-container image-center" style="width: 410px;">\r\n	<a class="fancybox" href="http://vtcdn.com/sites/default/files/images/2011/10/13/lg-s367-dual-sim.jpg" rel="lightbox"><img alt="" src="http://vtcdn.com/sites/default/files/imagecache/med/images/2011/10/13/lg-s367-dual-sim.jpg" title="" /></a></div>\r\n<p>\r\n	M&aacute;y c&oacute; thiết kế dạng thanh truyền thống, với giao diện sử dụng th&acirc;n thiện v&agrave; kh&aacute; đơn giản, ph&ugrave; hợp với mọi đối tượng người d&ugrave;ng.</p>\r\n<p>\r\n	Chiếc điện thoại hai sim mới của LG c&oacute; k&iacute;ch thước 117 x 50,9 x 11,5 mm, m&agrave;n h&igrave;nh 2,4 inch độ ph&acirc;n giải QVGA (240x320 pixel), camera 2 Mpx, khe cắm thẻ nhớ microSD, pin dung lượng 900 mAh.Model n&agrave;y chạy tr&ecirc;n mạng GSM, EDGE với t&iacute;nh năng Push Mail, nghe nhạc, FM radio, Bluetooth 2.1 v&agrave; microUSB 2.0</p>\r\n<p>\r\n	LG S367 sẽ được ph&aacute;t h&agrave;nh v&agrave;o cuối th&aacute;ng Mười, đầu th&aacute;ng Mười Một tới, với mức gi&aacute; v&agrave;o khoảng 150 USD.</p>\r\n', 'lg-cong-bo-dien-thoai-2-SIm-lg-S367-1335023592.jpg', 3, 23, 0, 'Triệu Gia Thắng', '2011-10-13 11:12:05', 1, '0000-00-00 00:00:00', 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Điện thoại,2 sim,công bố,LG,LG S367,thông tin công nghệ,tin công nghệ,bảo mật,công nghệ,máy tính,diệ', 'LG vừa tung ra thị trường mẫu điện thoại 2 SIM mới nhất mang tên S367 nhằm đem đến sự tiện dụng cho người dùng sử dụng nhiều SIM và cần đến sự gọn nhẹ', 0, 65, 0),
(53, 'Bài viết giới thiệu về công ty', 'bai-viet-gioi-thieu-ve-cong-ty', '', '<p>\r\n	gioi theu ocng&nbsp;</p>\r\n<p style="margin-top: 5px; margin-right: 0px; margin-bottom: 12px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-style: initial; border-color: initial; border-image: initial; outline-width: 0px; outline-style: initial; outline-color: initial; font-size: 13px; vertical-align: baseline; background-image: initial; background-attachment: initial; background-origin: initial; background-clip: initial; background-color: transparent; text-indent: 20px; color: rgb(0, 0, 0); font-family: ''Helvetica Neue'', Helvetica, Arial, sans-serif; line-height: 19px; ">\r\n	Theo Microsoft, lập tr&igrave;nh khả năng nhận diện c&aacute;c thao t&aacute;c cử chỉ tr&ecirc;n m&aacute;y t&iacute;nh bảng l&agrave; nhiệm vụ v&ocirc; c&ugrave;ng kh&oacute; khăn, phức tạp. Theo bằng s&aacute;ng chế vừa nộp l&ecirc;n cơ quan cấp bằng s&aacute;ng chế của Mỹ, Microsoft m&ocirc; tả r&aacute;t nhiều chi tiết về c&ocirc;ng nghệ mới. Chẳng hạn c&aacute;c kĩ sư chế tạo cần phải lập tr&igrave;nh để MTB c&oacute; thể ph&acirc;n biệt được một cử chỉ điều khiển bằng tay với việc điều khiển cảm ứng b&igrave;nh thường cũng như những động t&aacute;c tay ngẫu nhi&ecirc;n n&agrave;o đ&oacute;. Một số c&ocirc;ng nghệ tương tự tr&ecirc;n thị trường c&oacute; thể kể đến như 3D GUI tr&ecirc;n nền tảng iOS của Apple hay s&aacute;ng chế nhận diện điều khiển cử chỉ th&ocirc;ng qua camera tr&ecirc;n MTXT của Google.</p>\r\n<p style="margin-top: 5px; margin-right: 0px; margin-bottom: 12px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-style: initial; border-color: initial; border-image: initial; outline-width: 0px; outline-style: initial; outline-color: initial; font-size: 13px; vertical-align: baseline; background-image: initial; background-attachment: initial; background-origin: initial; background-clip: initial; background-color: transparent; text-indent: 20px; color: rgb(0, 0, 0); font-family: ''Helvetica Neue'', Helvetica, Arial, sans-serif; line-height: 19px; ">\r\n	Để thực hiện được việc nhận diện điều khiển cử chỉ của MTB, c&aacute;c kĩ sư chế tạo của Microsoft đ&atilde; thiết kế một tập hợp c&aacute;c cử chỉ nhất định, bao gồm h&igrave;nh d&aacute;ng c&aacute;c ng&oacute;n tay, động t&aacute;c (b&uacute;ng, trượt...). Camera ph&iacute;a trước của MTB được c&agrave;i đặt một hệ thống xử l&iacute; h&igrave;nh ảnh c&oacute; thể &quot;hiểu&quot; được cử chỉ tay của người d&ugrave;ng, đồng thời cũng ph&acirc;n biệt được đ&oacute; l&agrave; cử chỉ chạm hay kh&ocirc;ng chạm v&agrave;o m&agrave;n h&igrave;nh, hoặc người d&ugrave;ng c&oacute; thể sử dụng một lớp đậy m&agrave;n h&igrave;nh trong suốt để thực hiện điều n&agrave;y.</p>\r\n<p style="margin-top: 5px; margin-right: 0px; margin-bottom: 12px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-style: initial; border-color: initial; border-image: initial; outline-width: 0px; outline-style: initial; outline-color: initial; font-size: 13px; vertical-align: baseline; background-image: initial; background-attachment: initial; background-origin: initial; background-clip: initial; background-color: transparent; text-indent: 20px; color: rgb(0, 0, 0); font-family: ''Helvetica Neue'', Helvetica, Arial, sans-serif; line-height: 19px; ">\r\n	Mặc d&ugrave; vậy, Microsoft kh&ocirc;ng tiết lộ nhiều về những kế hoạch li&ecirc;n quan đến c&ocirc;ng nghệ mới cũng như kh&ocirc;ng hề c&oacute; bất k&igrave; cam kết n&agrave;o về việc c&aacute;c MTB tr&ecirc;n nền tảng Windows Phone sẽ nhận được c&ocirc;ng nghệ đ&oacute; hay kh&ocirc;ng, nhưng cuộc chạy đua với iOS v&agrave; Android chắc chắn sẽ khiến cho Microsoft phải nhanh ch&oacute;ng đưa ra vũ kh&iacute; b&iacute; mật của m&igrave;nh ra thị trường. Giống như RIM đ&atilde; tiết lộ, những g&igrave; m&agrave; Microsoft muốn đạt được th&ocirc;ng qua c&ocirc;ng nghệ n&agrave;y kh&ocirc;ng chỉ l&agrave; vươn l&ecirc;n đứng đầu trong thị trường MTB. Trước mắt, Microsoft tự tin rằng chỉ với Windows 8, với những chức năng mới độc đ&aacute;o đ&atilde; đủ để cạnh tranh với c&aacute;c thương hiệu kh&aacute;c, c&ograve;n điều khiển bằng cử chỉ sẽ l&agrave; l&aacute; b&agrave;i sau c&ugrave;ng quyết định thắng thua của h&atilde;ng n&agrave;y.</p>\r\n', '', 4, 34, 0, 'Administrator', '2012-04-06 00:43:06', 1, '0000-00-00 00:00:00', 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', '', 0, 65, 0),
(54, 'Bài viết đăng tin tuyển dụng', 'bai-viet-dang-tin-tuyen-dung', '', '<p>\r\n	ssssssssssssssssssssssssssssssss</p>\r\n', '', 4, 35, 0, 'Administrator', '2012-04-06 00:43:38', 1, '0000-00-00 00:00:00', 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', '', 0, 65, 0),
(55, 'Bài viết đăng tin bảo hành', 'bai-viet-dang-tin-bao-hanh', '', '<p>\r\n	<span style="font-size:14px;"><span style="color: rgb(51, 51, 51); font-family: Arial, Helvetica, sans-serif; "><span style="background-color:#ffffff;">Xin qu&yacute; kh&aacute;ch kiểm tra h&agrave;ng kỹ khi nhận h&agrave;ng. H&agrave;ng được giao ho&agrave;n to&agrave;n mới 100% v&agrave; c&oacute; d&aacute;n tem bảo h&agrave;nh của Ho&agrave;n Long. Tr&ecirc;n tem c&oacute; ghi r&otilde; ng&agrave;y th&aacute;ng năm v&agrave; thời hạn bảo h&agrave;nh theo đ&uacute;ng quy định bảo h&agrave;nh của nh&agrave; sản xuất.</span></span></span></p>\r\n<p>\r\n	<strong style="color: rgb(51, 51, 51); font-family: Arial, Helvetica, sans-serif; background-color: rgb(232, 232, 232); "><span style="color: rgb(0, 0, 255); "><span style="background-color:#ffffff;">I. ĐỐI VỚI TẤT CẢ C&Aacute;C LINH KIỆN THIẾT BỊ MUA RỜI</span></span></strong></p>\r\n<p>\r\n	<strong style="color: rgb(255, 0, 0); font-family: Arial, Helvetica, sans-serif; background-color: rgb(232, 232, 232); "><span style="background-color:#ffffff;">1. Điều kiện bảo h&agrave;nh:</span></strong></p>\r\n<p style="text-align: left; ">\r\n	<span style="font-size:14px;"><span style="font-family:arial,helvetica,sans-serif;">- Tất cả c&aacute;c linh kiện, thiết bị phải c&oacute; tem bảo h&agrave;nh của Ho&agrave;n Long v&agrave; tem phải c&ograve;n trong thời hạn bảo h&agrave;nh.</span></span></p>\r\n<div style="text-align: left; ">\r\n	<span style="font-size:14px;"><span style="font-family:arial,helvetica,sans-serif;">- Tem bảo h&agrave;nh, m&atilde; vạch seri number phải c&ograve;n nguy&ecirc;n vẹn, kh&ocirc;ng c&oacute; dấu hiệu cạo sửa, tẩy xo&aacute; hay bị r&aacute;ch mờ.</span></span></div>\r\n<div style="text-align: left; ">\r\n	<span style="font-size:14px;"><span style="font-family:arial,helvetica,sans-serif;">- Những hư hỏng của thiết bị được x&aacute;c định do lỗi kỹ thuật hoặc lỗi của nh&agrave; sản xuất.</span></span></div>\r\n<div style="text-align: left; ">\r\n	<span style="font-size:14px;"><span style="font-family:arial,helvetica,sans-serif;">- C&aacute;c sản phẩm main board hoặc CPU socket 775 khi bảo h&agrave;nh cần phải c&oacute; nắp đậy.</span></span></div>\r\n<div style="text-align: left; ">\r\n	<span style="font-size:14px;"><span style="font-family:arial,helvetica,sans-serif;">- Đối với c&aacute;c sản phẩm c&oacute; k&egrave;m theo phiếu bảo h&agrave;nh ch&iacute;nh h&atilde;ng, qu&yacute; kh&aacute;ch h&agrave;ng cần phải cung cấp phiếu bảo h&agrave;nh k&egrave;m theo khi bảo h&agrave;nh thiết bị.</span></span></div>\r\n<div style="text-align: left; ">\r\n	&nbsp;</div>\r\n<div style="text-align: left; ">\r\n	<strong style="color: rgb(255, 0, 0); font-family: Arial, Helvetica, sans-serif; background-color: rgb(232, 232, 232); "><span style="background-color:#ffffff;">2. Điều kiện kh&ocirc;ng bảo h&agrave;nh:</span></strong></div>\r\n<div style="text-align: left; ">\r\n	&nbsp;</div>\r\n<div style="text-align: left; ">\r\n	<span style="font-size:14px;">- Thiết bị do va chạm hoặc đ&atilde; bị rơi rớt, bể mẻ, m&oacute;p m&eacute;o, biến dạng, trầy xước, ẩm gỉ, gỉ s&eacute;t, ph&ugrave; tụ.</span></div>\r\n<div>\r\n	<span style="font-size:14px;">- Thiết bị c&oacute; dấu hiệu ch&aacute;y nổ, chuột bọ,c&ocirc;n tr&ugrave;ng x&acirc;m nhập hoặc được sử dụng trong m&ocirc;i trường ẩm ướt.</span></div>\r\n<div>\r\n	<span style="font-size:14px;">- Hư hỏng do thi&ecirc;n tai hoả hoạn,sử dụng nguồn điện kh&ocirc;ng ổn định hoặc do vận chuyển kh&ocirc;ng đ&uacute;ng quy c&aacute;ch.</span></div>\r\n<div>\r\n	<span style="font-size:14px;">- Kh&ocirc;ng bảo h&agrave;nh c&aacute;c thiết bị phụ kiện như:bộ sạc, tai nghe, cable nối, vỏ m&aacute;y, n&uacute;t c&ocirc;ng tắc, d&acirc;y điện, remote điều khiển, quạt giải nhiệt.</span></div>\r\n<div>\r\n	<span style="font-size:14px;">- Kh&ocirc;ng bảo h&agrave;nh c&aacute;c thiết bị main board bị cong ch&acirc;n socket, CPU bị cong hoặc g&atilde;y ch&acirc;n.</span></div>\r\n<div>\r\n	<span style="font-size:14px;">- Kh&ocirc;ng chịu tr&aacute;ch nhiệm bảo h&agrave;nh dữ liệu c&oacute; chứa trong thiết bị lưu trữ của kh&aacute;ch h&agrave;ng khi bảo h&agrave;nh thiết bị.</span></div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	<strong style="color: rgb(255, 0, 0); font-family: Arial, Helvetica, sans-serif; background-color: rgb(232, 232, 232); "><span style="background-color:#ffffff;">3. Phương thức bảo h&agrave;nh:</span></strong></div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	<div>\r\n		<span style="font-size:14px;">- Tất cả c&aacute;c thiết bị được bảo h&agrave;nh miễn ph&iacute; trong suốt thời hạn bảo h&agrave;nh.</span></div>\r\n	<div>\r\n		<span style="font-size:14px;">- H&agrave;ng mới mua trong v&ograve;ng 05 ng&agrave;y sẽ được đổi ngay h&agrave;ng mới nếu việc kiểm tra h&agrave;ng đ&oacute; hư hỏng do lỗi của nh&agrave; sản xuất. Trong trường hợp kh&ocirc;ng c&oacute; h&agrave;ng mới để đổi th&igrave; sẽ thoả thuận đổi sang h&agrave;ng mới kh&aacute;c c&oacute; gi&aacute; trị tương đương hoặc sẽ ho&agrave;n trả lại đ&uacute;ng số tiền m&agrave; qu&yacute; kh&aacute;ch đ&atilde; mua. Ch&uacute; &yacute; : kh&ocirc;ng &aacute;p dụng đối với c&aacute;c thiết bị như : m&aacute;y in, mực in, c&aacute;c thiết bị c&oacute; t&iacute;nh chất hao m&ograve;n, c&aacute;c thiết bị bị cắt rời, bẻ g&atilde;y, l&agrave;m mất bao b&igrave; hoặc bị trầy xước, dơ bẩn.</span></div>\r\n	<div>\r\n		<span style="font-size:14px;">- Trường hợp h&agrave;ng đ&atilde; mua qu&aacute; thời hạn 05 ng&agrave;y th&igrave; sẽ được nhận lại để bảo h&agrave;nh(sửa chữa). Nếu kh&ocirc;ng thể sửa chữa được th&igrave; cửa h&agrave;ng sẽ thay thế một sản phẩm kh&aacute;c tương đương v&agrave; sản phẩm n&agrave;y kh&ocirc;ng nhất thiết mới 100%.</span></div>\r\n	<div>\r\n		<span style="font-size:14px;">- Thời gian giải quyết bảo h&agrave;nh từ 3-&gt;7 ng&agrave;y kể từ ng&agrave;y nhận (trừ ng&agrave;y chủ nhật v&agrave; c&aacute;c ng&agrave;y lễ) v&agrave; tuỳ từng trường hợp c&oacute; thể giải quyết sớm hơn hoặc chậm hơn.</span></div>\r\n	<div>\r\n		<span style="font-size:14px;">- Đối với c&aacute;c thiết bị kh&ocirc;ng thể sửa chữa được m&agrave; thiết bị n&agrave;y hết h&agrave;ng do kh&ocirc;ng c&ograve;n sản xuất nữa hoặc kh&ocirc;ng c&ograve;n lưu h&agrave;nh tr&ecirc;n thị trường, qu&yacute; kh&aacute;ch phải đợi nh&agrave; ph&acirc;n phối đổi h&agrave;ng kh&aacute;c c&oacute; gi&aacute; trị tương đương hoặc cao hơn v&agrave; b&ugrave; tiền theo thoả thuận của gi&aacute; cả hiện h&agrave;nh tr&ecirc;n thị trường. Thời hạn bảo h&agrave;nh đối với sản phẩm được thay thế sẽ được t&iacute;nh tiếp tục chứ kh&ocirc;ng bảo h&agrave;nh lại từ đầu.</span></div>\r\n	<div>\r\n		<span style="font-size:14px;">- Đối với c&aacute;c thiết bị kh&ocirc;ng sửa chữa được trong nước phải gởi sang nh&agrave; sản xuất ở nước ngo&agrave;i th&igrave; thời hạn c&oacute; thể k&eacute;o d&agrave;i từ 4 đến 6 tuần. Trong trường hợp n&agrave;y cửa h&agrave;ng sẽ thay thế một sản phẩm c&oacute; t&iacute;nh năng tương đương để qu&yacute; kh&aacute;ch tạm sử dụng.</span></div>\r\n	<div>\r\n		&nbsp;</div>\r\n	<div>\r\n		<strong style="color: rgb(51, 51, 51); font-family: Arial, Helvetica, sans-serif; background-color: rgb(232, 232, 232); "><span style="color: rgb(0, 0, 255); "><span style="background-color:#ffffff;">II. ĐỐI VỚI C&Aacute;C LINH KIỆN, THIẾT BỊ ĐƯỢC CẤP PHIẾU BẢO H&Agrave;NH CH&Iacute;NH H&Atilde;NG NHƯ: M&Aacute;Y IN, M&Aacute;Y SCANNER, SẢN PHẨM CỦA INTEL:</span></span></strong></div>\r\n	<div>\r\n		&nbsp;</div>\r\n	<div>\r\n		<span style="font-size:14px;">- Khi mua c&aacute;c thiết bị, linh kiện n&agrave;y qu&yacute; kh&aacute;ch sẽ nhận được phiếu bảo h&agrave;nh, tr&ecirc;n phiếu c&oacute; ghi r&otilde; c&aacute;c điều kiện bảo h&agrave;nh, địa chỉ bảo h&agrave;nh, quyền lợi của kh&aacute;ch h&agrave;ng&hellip; Kh&aacute;ch h&agrave;ng phải xuất tr&igrave;nh phiếu bảo h&agrave;nh khi bảo h&agrave;nh sản phẩm trực tiếp tại trung t&acirc;m bảo h&agrave;nh ghi tr&ecirc;n phiếu hoặc tại cửa h&agrave;ng Ho&agrave;n Long.</span></div>\r\n	<div>\r\n		<span style="font-size:14px;">- Đối với m&aacute;y in, ch&uacute;ng t&ocirc;i kh&ocirc;ng bảo h&agrave;nh bao lụa, đầu phun mực.</span></div>\r\n	<div>\r\n		&nbsp;</div>\r\n</div>\r\n<p>\r\n	&nbsp;</p>\r\n<div>\r\n	<span style="font-size:14px;"><em>Ch&acirc;n th&agrave;nh cảm ơn qu&yacute; kh&aacute;ch đ&atilde; tin tưởng sử dụng sản phẩm v&agrave; ủng hộ Quy Định Bảo H&agrave;nh của Ho&agrave;n Long</em></span></div>\r\n<div>\r\n	<span style="font-size:14px;"><em>Rất h&acirc;n hạnh v&agrave; sẵn s&agrave;ng phục vụ qu&yacute; kh&aacute;ch.</em></span></div>\r\n', '', 4, 36, 0, 'Administrator', '2012-04-08 00:43:50', 1, '0000-00-00 00:00:00', 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', '', 0, 65, 0);

-- --------------------------------------------------------

--
-- テーブルの構造 `categories`
--

CREATE TABLE `categories` (
  `id` int(11) UNSIGNED NOT NULL,
  `parent_id` int(11) NOT NULL DEFAULT '0',
  `title` varchar(100) NOT NULL,
  `alias` varchar(100) NOT NULL,
  `section_id` int(11) NOT NULL,
  `description` text NOT NULL,
  `published` tinyint(1) NOT NULL DEFAULT '1',
  `ordering` int(11) NOT NULL DEFAULT '1',
  `access` int(11) NOT NULL DEFAULT '0',
  `params` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `categories`
--

INSERT INTO `categories` (`id`, `parent_id`, `title`, `alias`, `section_id`, `description`, `published`, `ordering`, `access`, `params`) VALUES
(1, 0, 'Nokia', 'nokia', 1, '', 1, 1, 0, ''),
(2, 0, 'Sam Sung', 'sam-sung', 1, '', 1, 1, 0, ''),
(3, 0, 'Iphone', 'IPhONE', 1, '', 1, 0, 0, ''),
(4, 3, 'Iphone 4', 'Iphone-4', 1, '', 1, 1, 0, ''),
(5, 3, 'Iphone 4S', 'Iphone-5', 1, '', 1, 2, 0, ''),
(6, 0, 'LG', 'lg', 1, '', 1, 0, 0, ''),
(7, 0, 'Sony', 'Sony', 1, '', 1, 0, 0, ''),
(8, 0, 'Q-Mobile', 'Q-mobile', 1, '', 1, 0, 0, ''),
(9, 0, 'MobiStar', 'mobiStar', 1, '', 1, 0, 0, ''),
(10, 0, 'Motorola', 'motorola', 1, '', 1, 0, 0, ''),
(11, 0, 'Blackbery', 'blackbery', 1, '', 1, 0, 0, ''),
(12, 0, 'HTC', 'htc', 1, '', 1, 0, 0, ''),
(13, 0, 'Mobell', 'mobell', 1, '', 1, 0, 0, ''),
(14, 0, 'K-Touch', 'k-touch', 1, '', 1, 0, 0, ''),
(15, 1, 'Nokia Series', 'Nokia-Series', 1, '<p>\r\n	C&aacute;c sản phẩm b&igrave;nh d&acirc;n của nokia</p>\r\n', 1, 0, 0, ''),
(16, 1, 'Nokia C-series', 'Nokia-c-series', 1, '', 1, 0, 0, ''),
(17, 1, 'Nokia E-series', 'Nokia-E-series', 1, '', 1, 0, 0, ''),
(18, 1, 'Nokia N-series', 'Nokia-N-series', 1, '', 1, 0, 0, ''),
(19, 1, 'Nokia X-series', 'Nokia-x-series', 1, '', 1, 0, 0, ''),
(20, 3, 'Iphone 5', 'Iphone-5', 1, '', 1, 0, 0, ''),
(21, 0, 'Tin công nghệ', 'tin-cong-nghe', 3, '', 1, 0, 0, ''),
(22, 0, 'TIn khuyến mãi', 'tIn-khuyen-mai', 3, '', 1, 0, 0, ''),
(23, 0, 'Điện thoại', 'dien-thoai', 3, '', 1, 0, 0, ''),
(24, 0, 'Giải trí', 'giai-tri', 3, '', 1, 0, 0, ''),
(25, 0, 'Thẻ nhớ ', 'the-nho', 2, '', 1, 0, 0, ''),
(26, 0, 'Pin', 'Pin', 2, '', 1, 0, 0, ''),
(27, 0, 'Sạc', 'Sac', 2, '', 1, 0, 0, ''),
(28, 0, 'Tai nghe', 'tai-nghe', 2, '', 1, 0, 0, ''),
(29, 0, 'Loa', 'loa', 2, '', 1, 0, 0, ''),
(30, 0, 'USB', 'USb', 2, '', 1, 0, 0, ''),
(31, 0, 'Fan tản nhiệt', 'fan-tan-nhiet', 2, '', 1, 0, 0, ''),
(32, 0, 'Dây cáp', 'day-cap', 2, '', 1, 0, 0, ''),
(33, 0, 'Đầu đọc thẻ nhớ', 'dau-doc-the-nho', 2, '', 1, 0, 0, ''),
(34, 0, 'Giới thiệu', 'gioi-thieu', 4, '<p>\r\n	Category n&agrave;y chứa nội dung b&agrave;i giới thiệu về webstie--&gt;dạng article layout</p>\r\n', 1, 0, 0, ''),
(35, 0, 'Tuyển dụng', 'tuyen-dung', 4, '', 1, 0, 0, ''),
(36, 0, 'Bảo hành', 'bao-hanh', 4, '', 1, 0, 0, '');

-- --------------------------------------------------------

--
-- テーブルの構造 `comments`
--

CREATE TABLE `comments` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `created` datetime NOT NULL,
  `published` tinyint(1) NOT NULL,
  `product_id` int(11) NOT NULL,
  `access` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- テーブルの構造 `components`
--

CREATE TABLE `components` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` varchar(50) NOT NULL,
  `component` varchar(50) NOT NULL,
  `link` varchar(255) NOT NULL,
  `ordering` int(11) NOT NULL,
  `access` int(11) NOT NULL DEFAULT '0',
  `published` tinyint(1) NOT NULL,
  `params` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `components`
--

INSERT INTO `components` (`id`, `title`, `component`, `link`, `ordering`, `access`, `published`, `params`) VALUES
(5, 'San pham ', 'com_product', 'option=com_product', 0, 0, 1, ''),
(3, 'Home', 'com_frontpage', 'option=com_frontpage', 0, 0, 1, ''),
(4, 'Bai viet', 'com_content', 'option=com_content', 0, 0, 1, '');

-- --------------------------------------------------------

--
-- テーブルの構造 `contact`
--

CREATE TABLE `contact` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `view` tinyint(1) NOT NULL DEFAULT '0',
  `replied` tinyint(1) NOT NULL DEFAULT '0',
  `trash` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `contact`
--

INSERT INTO `contact` (`id`, `title`, `content`, `fullname`, `email`, `time`, `view`, `replied`, `trash`) VALUES
(4, 'Khiếu nại về giá sản phẩm điện thoại cao cấp', 'Trong một bài vết trước đây về nghiên cứu bảo mật trên trang blog Security Research & Defense, Microsoft cho biết họ đã nhận ra được một số giấy chứng nhận giả mạo được phát hành bởi DigiNotar được cấp cho các lĩnh vực như Microsoft.com, Windowsupdate.com và Update.microsoft.com. Kết quả là, công ty chỉ định tất cả các giấy chứng nhận DigiNotar là không đáng tin và ngay lập tức cung cấp bản cập nhật bảo mật của Windows có thể được cài đặt bằng tay và sẽ tự động cài đặt cho tất cả người dùng bật chế độ Auto Update.\r\n\r\nTuy nhiên, mặc dù đưa ra những hành động của mình nhưng Microsoft cho rằng Windows Update của công ty có chức năng bảo vệ tránh bất kỳ mối đe dọa từ các chứng chỉ bảo mật giả.\r\n\r\nTheo kỹ sư Jonathan Ness của Microsoft viết trên blog thì những kẻ tấn công không thể tận dụng một giấy chứng nhận Windows Update giả mạo để cài đặt phần mềm độc hại thông qua máy chủ Windows Update. Windows Update client sẽ chỉ cài đặt các bản cập nhật có chữ ký xác nhận chứng chỉ CA của Microsft vốn được ban hành và đảm bảo bởi Microsoft”.', 'Trieu Gia Thang', 'tranvanhoc.tb@gmail.com', '2011-09-13 10:21:39', 1, 0, 0),
(5, 'Khiếu nại về giá sản phẩm điện thoại cao cấp', 'Trong một bài vết trước đây về nghiên cứu bảo mật trên trang blog Security Research & Defense, Microsoft cho biết họ', 'Văn Học', 'tranvanhoc.tb@gmail.com', '2011-09-13 10:23:04', 1, 1, 0),
(6, 'Khiếu nại về giá sản phẩm điện thoại cao cấp', 'Trong một bài vết trước đây về nghiên cứu bảo mật trên trang blog Security Research & Defense, Microsoft cho biết họ', 'Văn Học', 'tranvanhoc.tb@gmail.com', '2011-09-13 10:23:21', 1, 0, 0),
(7, 'Khiếu nại về giá sản phẩm điện thoại cao cấp', 'Trong một bài vết trước đây về nghiên cứu bảo mật trên trang blog Security Research & Defense, Microsoft cho biết họ', 'Văn Học', 'tranvanhoc.tb@gmail.com', '2011-09-13 10:23:30', 1, 0, 0),
(8, 'Khiếu nại về giá sản phẩm điện thoại cao cấp', 'Trong một bài vết trước đây về nghiên cứu bảo mật trên trang blog Security Research & Defense, Microsoft cho biết họ', 'Văn Học', 'tranvanhoc.tb@gmail.com', '2011-09-13 10:23:38', 1, 0, 0),
(12, 'f', 'fsd', 'fasdfa', 'tieugiathang@gmail.com', '2012-05-23 01:11:31', 1, 0, 1),
(13, 'fa', 'fsdfsd', 'aaaaaaaaaaaaa', 'tieugiathang@gmail.com', '2012-05-23 01:13:17', 1, 0, 0),
(14, 'fa', 'fsdfsd', 'aaaaaaaaaaaaa', 'tieugiathang@gmail.com', '2012-05-23 01:13:46', 1, 0, 0),
(15, 'sdf', 'dsfsd', 'dfas', 'tieugiathang@gmail.com', '2012-05-23 01:48:13', 1, 0, 1),
(19, 'Cho em mượn ít tiền anh học ơi', 'egegege', 'Nguyễn Giang Nam', 'tranvanhoc.tb@gmail.com', '2012-05-24 06:13:57', 1, 0, 0);

-- --------------------------------------------------------

--
-- テーブルの構造 `department`
--

CREATE TABLE `department` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` varchar(250) NOT NULL,
  `address` varchar(350) NOT NULL,
  `phone` int(11) NOT NULL,
  `fax` int(11) NOT NULL,
  `description` text NOT NULL,
  `ordering` int(11) NOT NULL,
  `image` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `department`
--

INSERT INTO `department` (`id`, `title`, `address`, `phone`, `fax`, `description`, `ordering`, `image`) VALUES
(1, 'Trụ sở chính ', 'Hoàn Long Building 244 Cống Quỳnh, P.Phạm Ngũ Lão, Q.1, Tp.HCM', 983940965, 983940965, 'tru so chinh', 1, 'abc.jpg'),
(2, 'chinh nhat 1 ', '101 Sương Nguyệt Ánh, P.Bến Thành, Q.1, Tp.HCM', 983940965, 983940965, 'chi nhanh thu nhat', 2, 'ddd.png');

-- --------------------------------------------------------

--
-- テーブルの構造 `groups`
--

CREATE TABLE `groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(0, 'public', 'All '),
(1, 'user', 'thanh vien cua website'),
(2, 'Administrator', 'Những thành viên trong ban quản trị website-Admin');

-- --------------------------------------------------------

--
-- テーブルの構造 `invoice`
--

CREATE TABLE `invoice` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL DEFAULT '0',
  `order_name` varchar(100) NOT NULL,
  `order_address` varchar(350) NOT NULL,
  `order_phone` int(11) NOT NULL,
  `order_email` varchar(250) NOT NULL,
  `delivery_name` varchar(100) NOT NULL,
  `delivery_address` varchar(350) NOT NULL,
  `delivery_phone` int(11) NOT NULL,
  `delivery_email` varchar(100) NOT NULL,
  `comment` text NOT NULL,
  `created` datetime NOT NULL,
  `payed` tinyint(1) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `invoice`
--

INSERT INTO `invoice` (`id`, `user_id`, `order_name`, `order_address`, `order_phone`, `order_email`, `delivery_name`, `delivery_address`, `delivery_phone`, `delivery_email`, `comment`, `created`, `payed`) VALUES
(1, 0, 'Triệu Gia Thắng', 'Thành phố Hồ Chí Minh', 983940965, 'trieugiathang@gmail.com', 'Trai Thai Binh', 'Thái Bình ', 983940965, 'tranvanhoc.tb@gmail.com', 'Chúc mày có một cuộc sống vui vẻ.', '2012-04-18 08:12:05', 0),
(7, 31, 'Triệu Gia Thắng', 'Quang Hưng - Kiến Xương - Thái Bình', 983940965, 'trieugiathang@gmail.com', 'Nguyễn Văn Thịnh', 'Mễ Trì - Hà Nội', 988798800, 'tranvanhoc.tb@gmail.com', 'Anh tặng chú mấy cái điện thoại để chú phân phát cho bọn trẻ con ở gần nhà cho nó gọi nhau đi học nhà trẻ.Cần thêm bao nhiêu thì cứ nói.anh sẽ đáp ứng', '2012-05-30 08:35:28', 0),
(12, 0, 'Cao Thai Son', 'HN', 99999, 'caothaison@gmail.com', 'Khắc Việt', 'TpHCm', 332231, 'viet@yahoo.com', '', '2012-05-24 11:49:58', 0),
(11, 36, 'Phạm Đan Trường', 'TpHCM', 999999999, 'dantruong@gmail.com', 'Ưng Hoàng Phúc', 'An Giang', 98888888, 'unghoangphuc@gmail.com', '', '2012-05-23 23:03:33', 1),
(13, 0, 'Nguyễn Giang Nam', 'Hà Tĩnh ', 985050907, 'giangnam@gmail.com', 'Trần Văn Học', 'Thái Bình', 983940965, 'tranvanhoc.tb@gmail.com', '', '2012-05-24 11:52:27', 0),
(14, 0, 'Triệu Gia', 'HN', 983940965, 'trieugiathang@gmail.com', 'Việt', 'Thủ Đức - TpHCM', 2147483647, 'tranvanhoc.tb@gmail.com', '', '2012-05-24 11:53:25', 1);

-- --------------------------------------------------------

--
-- テーブルの構造 `manufacturer`
--

CREATE TABLE `manufacturer` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `url` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `manufacturer`
--

INSERT INTO `manufacturer` (`id`, `name`, `email`, `description`, `url`) VALUES
(1, 'Nokia', 'nokia@gmail.com', 'Trang chu cua nokia', 'nokia.com'),
(2, 'Sam Sung', 'samsung@gmail.com', '', 'samsung.com'),
(3, 'LG', 'lg@gmail.com', '', ''),
(4, 'Research in Motion', '', '', ''),
(5, 'Sony Ericsson', '', '', ''),
(6, 'Motorola', '', '', ''),
(7, 'Apple', '', '', ''),
(8, 'HTC', '', '', ''),
(10, 'G''Five', '', '', ''),
(11, 'Khác', '', '', '');

-- --------------------------------------------------------

--
-- テーブルの構造 `menu`
--

CREATE TABLE `menu` (
  `id` int(11) UNSIGNED NOT NULL,
  `parent_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `alias` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL DEFAULT 'component',
  `catid` int(11) NOT NULL,
  `component_id` int(11) NOT NULL,
  `menu_type_id` int(11) NOT NULL,
  `published` tinyint(1) NOT NULL,
  `ordering` int(11) NOT NULL,
  `access` int(11) NOT NULL,
  `params` text NOT NULL,
  `home` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `menu`
--

INSERT INTO `menu` (`id`, `parent_id`, `title`, `alias`, `type`, `catid`, `component_id`, `menu_type_id`, `published`, `ordering`, `access`, `params`, `home`) VALUES
(2, 0, 'Liên hệ', 'lien-he', 'component', 0, 4, 2, 1, 6, 0, '', 0),
(22, 0, 'Bảo hành', 'bao-hanh', 'component', 36, 4, 2, 1, 5, 0, '', 0),
(11, 0, 'Trang chủ', 'trang-chu', 'component', 0, 5, 2, 1, 0, 0, '', 0),
(12, 0, 'Giới thiệu', 'gioi-thieu', 'component', 34, 4, 2, 1, 1, 1, '', 0),
(21, 0, 'Tuyển dụng', 'tuyen-dung', 'component', 35, 4, 2, 1, 4, 0, '', 0),
(20, 0, 'Tin tức', 'tin-tuc', 'component', 0, 4, 2, 1, 3, 0, '', 0),
(19, 0, 'Sản phẩm', 'san-pham/default', 'component', 0, 5, 2, 1, 2, 0, '', 0);

-- --------------------------------------------------------

--
-- テーブルの構造 `menu_type`
--

CREATE TABLE `menu_type` (
  `id` int(11) UNSIGNED NOT NULL,
  `menutype` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `menu_type`
--

INSERT INTO `menu_type` (`id`, `menutype`, `title`, `description`) VALUES
(1, 'mainmenu', 'Main Menu', 'The main menu for the site'),
(2, 'topmenu', 'Top Menu', 'Menu display top site');

-- --------------------------------------------------------

--
-- テーブルの構造 `mobile_network`
--

CREATE TABLE `mobile_network` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `mobile_network`
--

INSERT INTO `mobile_network` (`id`, `title`) VALUES
(1, 'MobiFone'),
(2, 'VinaPhone'),
(3, 'Viettel'),
(4, 'Vietnamobile'),
(5, 'Beeline');

-- --------------------------------------------------------

--
-- テーブルの構造 `modules`
--

CREATE TABLE `modules` (
  `id` int(11) UNSIGNED NOT NULL,
  `module` varchar(100) NOT NULL,
  `title` varchar(255) NOT NULL,
  `position` varchar(50) NOT NULL,
  `published` tinyint(1) NOT NULL,
  `ordering` int(11) NOT NULL,
  `show_title` tinyint(1) NOT NULL,
  `access` int(11) NOT NULL,
  `params` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `modules`
--

INSERT INTO `modules` (`id`, `module`, `title`, `position`, `published`, `ordering`, `show_title`, `access`, `params`) VALUES
(6, 'mod_counter', 'Thống kê', 'left', 1, 10, 1, 0, 'Array'),
(12, 'mod_cart', 'Giỏ hàng', 'right', 1, 0, 1, 0, 'Array'),
(7, 'mod_footer', 'Footer', 'footer', 1, 1, 1, 0, 'Array'),
(9, 'mod_menu', 'Top Menu', 'topmenu', 1, 0, 0, 0, 'Array'),
(10, 'mod_search', 'Tìm kiếm sản phẩm', 'left', 1, 1, 1, 0, 'Array'),
(11, 'mod_login', 'Đăng nhập', 'right', 1, 4, 1, 0, 'Array'),
(13, 'mod_support', 'Hỗ trợ trực tuyến', 'right', 1, 3, 1, 0, 'Array'),
(14, 'mod_category', 'Danh mục sản phẩm', 'left', 1, 2, 1, 0, 'Array'),
(15, 'mod_accessory', 'Linh kiện sản phẩm', 'left', 1, 3, 1, 0, 'Array'),
(16, 'mod_scrolladvert', 'Quảng cáo trượt 2 bên ', 'right', 0, 0, 0, 0, 'Array'),
(17, 'mod_mainmenu', 'Main Menu', 'left', 0, 0, 1, 0, 'Array'),
(20, 'mod_poll', 'Binh Chon ', 'right', 0, 1, 1, 0, 'Array'),
(21, 'mod_relatednews', 'Các tin liên quan', 'relatednews', 1, 1, 1, 0, 'Array'),
(22, 'mod_bottommenu', 'Menu footer', 'bottommenu', 1, 1, 0, 0, 'Array'),
(23, 'mod_newproduct', 'Sản phẩm mới nhất', 'left', 1, 5, 1, 0, 'Array'),
(24, 'mod_hotproduct', 'Sản phẩm bán chạy nhất', 'left', 1, 6, 1, 0, 'Array'),
(25, 'mod_relative_price_product', 'Sản phẩm đồng giá', 'right', 0, 6, 1, 0, 'Array'),
(26, 'mod_slideshow', 'Slideshow Sản phẩm nội bật', 'slideshow', 1, 1, 0, 0, 'Array'),
(27, 'mod_advertisement', 'Quảng cáo ', 'right', 1, 2, 1, 0, 'Array');

-- --------------------------------------------------------

--
-- テーブルの構造 `module_menu`
--

CREATE TABLE `module_menu` (
  `menu_id` int(11) NOT NULL,
  `module_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- テーブルの構造 `order_detail`
--

CREATE TABLE `order_detail` (
  `id` int(11) NOT NULL,
  `invoice_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `created` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `order_detail`
--

INSERT INTO `order_detail` (`id`, `invoice_id`, `product_id`, `quantity`, `created`) VALUES
(1, 7, 80, 1, '2012-05-23 23:00:04'),
(2, 7, 55, 2, '2012-05-23 23:00:04'),
(3, 7, 75, 1, '2012-05-23 23:01:58'),
(4, 7, 67, 1, '2012-05-23 23:01:58'),
(5, 7, 80, 1, '2012-05-23 23:01:58'),
(6, 11, 80, 1, '2012-05-23 23:03:33'),
(7, 11, 76, 1, '2012-05-23 23:03:33'),
(8, 2, 8, 1, '2012-05-24 10:13:55'),
(9, 2, 37, 2, '2012-05-24 10:13:55'),
(10, 2, 30, 3, '2012-05-24 10:13:55'),
(11, 12, 55, 2, '2012-05-24 11:49:58'),
(12, 12, 79, 1, '2012-05-24 11:49:58'),
(13, 12, 77, 1, '2012-05-24 11:49:58'),
(14, 12, 29, 2, '2012-05-24 11:49:58'),
(15, 13, 58, 1, '2012-05-24 11:52:27'),
(16, 14, 58, 1, '2012-05-24 11:53:25'),
(17, 7, 8, 11, '2012-05-24 14:35:05'),
(18, 7, 38, 3, '2012-05-24 14:35:05'),
(19, 7, 29, 13, '2012-05-28 14:13:00'),
(20, 7, 117, 1, '2012-05-30 08:35:28'),
(21, 7, 116, 1, '2012-05-30 08:35:28');

-- --------------------------------------------------------

--
-- テーブルの構造 `order_payment`
--

CREATE TABLE `order_payment` (
  `id` int(11) UNSIGNED NOT NULL,
  `invoice_id` int(11) NOT NULL,
  `order_detail_id` int(11) NOT NULL,
  `total_price` decimal(15,5) NOT NULL,
  `amount_paid` decimal(15,5) NOT NULL,
  `payment_by` varchar(100) NOT NULL,
  `payment_account` varchar(255) NOT NULL,
  `payment_time` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- テーブルの構造 `polls`
--

CREATE TABLE `polls` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL DEFAULT '',
  `enable` tinyint(1) NOT NULL DEFAULT '0',
  `access` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `polls`
--

INSERT INTO `polls` (`id`, `title`, `enable`, `access`) VALUES
(1, 'Theo bạn đội bóng nào sẽ vô địch EURO 2012?', 0, 0),
(2, 'Bạn thấy giao diện website này thế nào?', 1, 0);

-- --------------------------------------------------------

--
-- テーブルの構造 `poll_option`
--

CREATE TABLE `poll_option` (
  `id` int(11) NOT NULL,
  `poll_id` int(11) NOT NULL,
  `option` varchar(250) NOT NULL,
  `ordering` int(11) NOT NULL DEFAULT '0',
  `published` tinyint(1) NOT NULL DEFAULT '1',
  `defaultChecked` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `poll_option`
--

INSERT INTO `poll_option` (`id`, `poll_id`, `option`, `ordering`, `published`, `defaultChecked`) VALUES
(1, 1, 'Anh', 1, 1, 1),
(2, 1, 'Đức', 2, 1, 0),
(3, 1, 'Pháp', 3, 1, 0),
(4, 1, 'Tây Ban Nha', 4, 1, 0),
(5, 2, 'Đẹp', 1, 1, 1),
(6, 2, 'Xấu', 2, 1, 0),
(7, 2, 'Bình thường', 3, 1, 0);

-- --------------------------------------------------------

--
-- テーブルの構造 `poll_vote`
--

CREATE TABLE `poll_vote` (
  `id` int(11) NOT NULL,
  `poll_id` int(11) NOT NULL,
  `option_id` int(11) NOT NULL,
  `ip` varchar(250) NOT NULL,
  `time` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `poll_vote`
--

INSERT INTO `poll_vote` (`id`, `poll_id`, `option_id`, `ip`, `time`) VALUES
(1, 1, 1, '127.0.0.1', '2012-06-02 00:00:00'),
(2, 1, 3, '192.168.1.22', '2012-02-01 22:00:14'),
(3, 1, 4, '192.168.1.56', '2012-02-01 22:00:14'),
(4, 1, 2, '172.45.100.25', '2012-02-01 22:00:14'),
(5, 2, 3, '127.0.0.1', '2012-06-02 00:00:00'),
(6, 2, 1, '127.0.0.1', '2012-06-02 00:00:00'),
(7, 2, 2, '127.0.0.1', '2012-06-02 00:00:00'),
(8, 1, 3, '192.168.1.112', '2012-02-01 22:00:14');

-- --------------------------------------------------------

--
-- テーブルの構造 `products`
--

CREATE TABLE `products` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` varchar(50) NOT NULL,
  `alias` varchar(250) NOT NULL,
  `thumb_image` varchar(100) NOT NULL,
  `full_image` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  `published` tinyint(1) NOT NULL DEFAULT '1',
  `category_id` int(11) NOT NULL,
  `section_id` int(11) NOT NULL,
  `manufacturer_id` int(11) NOT NULL,
  `short_description` varchar(250) NOT NULL,
  `full_description` text NOT NULL,
  `weight` decimal(10,1) NOT NULL,
  `width` decimal(10,1) NOT NULL,
  `height` decimal(10,1) NOT NULL,
  `thickness` decimal(10,1) NOT NULL,
  `product_discount_id` int(11) NOT NULL DEFAULT '0',
  `product_currency_id` int(11) NOT NULL,
  `product_style_id` int(11) NOT NULL,
  `video_call` tinyint(4) NOT NULL DEFAULT '0',
  `java` tinyint(4) NOT NULL DEFAULT '0',
  `recording` tinyint(4) NOT NULL DEFAULT '0',
  `music` tinyint(4) NOT NULL DEFAULT '0',
  `radio` tinyint(4) NOT NULL DEFAULT '0',
  `tivi` tinyint(4) NOT NULL DEFAULT '0',
  `recording_call` tinyint(4) NOT NULL DEFAULT '0',
  `wifi` tinyint(4) NOT NULL DEFAULT '0',
  `blutouch` tinyint(4) NOT NULL DEFAULT '0',
  `gps` tinyint(4) NOT NULL DEFAULT '0',
  `gprs` tinyint(4) NOT NULL DEFAULT '0',
  `contact` varchar(50) NOT NULL,
  `message` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `product_camera_id` int(11) NOT NULL,
  `product_simcard_id` int(11) NOT NULL,
  `product_connection_id` int(11) NOT NULL,
  `memory_internal` int(1) NOT NULL,
  `product_memorycard_id` int(11) NOT NULL,
  `product_ram_id` int(11) NOT NULL,
  `cpu` varchar(100) NOT NULL,
  `product_os_id` int(11) NOT NULL,
  `display_type` varchar(100) NOT NULL,
  `display_px` varchar(50) NOT NULL,
  `display_size` varchar(50) NOT NULL,
  `display_touch_id` int(11) NOT NULL,
  `pin` varchar(20) NOT NULL,
  `quantity` int(11) NOT NULL,
  `warranty` int(11) NOT NULL DEFAULT '12',
  `hits` int(11) NOT NULL DEFAULT '0',
  `access` int(11) NOT NULL DEFAULT '0',
  `ordering` int(11) NOT NULL DEFAULT '1',
  `created_date` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `modified_by` int(11) NOT NULL,
  `trash` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `products`
--

INSERT INTO `products` (`id`, `title`, `alias`, `thumb_image`, `full_image`, `price`, `published`, `category_id`, `section_id`, `manufacturer_id`, `short_description`, `full_description`, `weight`, `width`, `height`, `thickness`, `product_discount_id`, `product_currency_id`, `product_style_id`, `video_call`, `java`, `recording`, `music`, `radio`, `tivi`, `recording_call`, `wifi`, `blutouch`, `gps`, `gprs`, `contact`, `message`, `email`, `product_camera_id`, `product_simcard_id`, `product_connection_id`, `memory_internal`, `product_memorycard_id`, `product_ram_id`, `cpu`, `product_os_id`, `display_type`, `display_px`, `display_size`, `display_touch_id`, `pin`, `quantity`, `warranty`, `hits`, `access`, `ordering`, `created_date`, `created_by`, `modified_by`, `trash`) VALUES
(1, 'Nokia N9 64GB ', 'nokia-n9-64gb', 'nokia-n9-64gb-1331575565.jpg', 'demo.jpg', 13490000, 1, 18, 1, 1, '', 'Tom tat tinh nang noi bat cua tung san pham ', '135.0', '61.2', '116.5', '12.1', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 'không giới hạn, danh bạ hình ảnh;', 'SMS,MMS,Email,Plush Mail,IM ', '', 4, 1, 3, 9, 6, 3, '', 8, 'Màn hỉnh cảm ứng điện dung AMOLED, 16 triệu màu, chống trầy xướ, chống chói dưới ánh nắng mặt trời, ', '480x854 pixels', ' 3.9 inches', 3, 'Li-ion 1450 mAh (BV-', 39, 0, 99, 0, 0, '2012-03-17 09:43:20', 1, 1, 0),
(2, 'Samsung S7250 (Wave M) ', 'Samsung-S7250-(Wave-m)', 'Samsung-S7250-(Wave-m)-1331576154.jpg', '', 5740000, 1, 2, 1, 2, '', '<p>\r\n	Tom tat tinh nang noi bat cua tung san pham</p>\r\n', '121.0', '63.3', '113.8', '12.2', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 'có, danh bạ hình ảnh;', 'SMS, MMS, Email, Plush Mailm IM ', '', 3, 1, 3, 2, 7, 1, '832MHz', 7, 'Màn hình cảm ứng điện dung TFT, 16 triệu màu', '320x480 pixels', '3.65 inches', 3, 'Li-ion 1350 mAh ', 56, 0, 11, 0, 0, '2012-03-28 11:51:44', 1, 1, 0),
(3, 'LG E510 (Optimus Hub) ', 'lg-E510-(Optimus-hub)', 'lg-E510-(Optimus-hub)-1331576781.jpg', 'demo.jpg', 5550000, 1, 6, 1, 3, '', '<div class="box_right">\r\n	<ul class="item_list">\r\n		<li>\r\n			Hệ điều h&agrave;nh: iOS 4</li>\r\n		<li>\r\n			CPU: ARM Cortex A8 1GHz processor - Ram: 512 MB</li>\r\n		<li>\r\n			Bộ nhớ trong: 32 GB</li>\r\n		<li>\r\n			M&agrave;n h&igrave;nh TFT, 16 triệu m&agrave;u, rộng 3.5 inches</li>\r\n		<li>\r\n			Camera: 5.0 MP (2592 x 1944 pixels), hỗ trợ Tự động lấy n&eacute;t, Đ&egrave;n flash LED, Chạm lấy n&eacute;t, Led video light</li>\r\n		<li>\r\n			Dung lượng pin: 1420 mAh</li>\r\n	</ul>\r\n</div>\r\n<p>\r\n	&nbsp;</p>\r\n', '123.0', '60.8', '113.4', '11.9', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 'không giới hạn, danh bạ hình ảnh;', 'SMS, MMS,Email, Plush Mail, IM ', 'yahoo,gmail', 3, 1, 3, 2, 7, 2, '800MHz ARM v6, Adreno 200 CPU, Qualcomm MSM 7227T chipset', 3, 'Màn hình cảm ứng điện dung TFT, 256K màu', '320x480 pixels', '', 3, 'Li-ion 1500 mAh ', 34, 0, 53, 0, 0, '2012-03-17 17:19:03', 1, 1, 0),
(4, 'dfsdfsd', 'dfsdfsd', '', 'demo.jpg', 0, 1, 1, 1, 1, '', 'Tom tat tinh nang noi bat cua tung san pham ', '0.0', '0.0', '0.0', '0.0', 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', 1, 1, 1, 1, 1, 1, '', 1, '', '', '', 1, '', 0, 12, 65, 0, 0, '2012-03-13 01:57:01', 1, 0, 1),
(5, 'Thẻ nhớ MicroSD 2GB (PNY)', 'the-nho-microSd-2gb-(PnY)', 'the-nho-microSd-2gb-(PnY)-1331615941.jpg', 'demo.jpg', 135000, 1, 25, 2, 11, '', 'Tom tat tinh nang noi bat cua tung san pham ', '0.0', '0.0', '0.0', '0.0', 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', 1, 1, 1, 1, 1, 1, '', 1, '', '', '', 1, '', 12, 12, 72, 0, 0, '2012-03-13 12:16:47', 15, 0, 0),
(6, 'Thẻ nhớ MicroSD 2GB (Transcend)', 'the-nho-microSd-2gb-(transcend)', 'the-nho-microSd-2gb-(transcend)-1331690662.jpg', 'demo.jpg', 150000, 1, 25, 2, 1, '', 'Tom tat tinh nang noi bat cua tung san pham ', '0.0', '0.0', '0.0', '0.0', 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', 1, 1, 1, 1, 1, 1, '', 1, '', '', '', 1, '', 12, 12, 71, 0, 0, '2012-03-14 09:04:46', 15, 15, 0),
(7, 'HTC A310e (Explorer)', 'htc-A310e-(Explorer)', 'htc-A310e-(Explorer)-1331708536.jpg', 'demo.jpg', 4750, 1, 12, 1, 8, '', 'Tom tat tinh nang noi bat cua tung san pham ', '108.0', '2.0', '102.8', '0.0', 1, 1, 1, 1, 1, 1, 1, 1, 0, 1, 1, 0, 1, 1, '', '', '', 3, 1, 3, 2, 8, 2, '', 3, '', '', '', 1, 'Li-Ion 1230 mAh ', 0, 12, 65, 0, 0, '2012-03-14 14:03:59', 15, 15, 1),
(8, 'HTC A310e (Explorer)', 'htc-A310e-(Explorer)', 'htc-A310e-(Explorer)-1331709764.jpg', 'demo.jpg', 4750000, 1, 12, 1, 8, '', 'Tom tat tinh nang noi bat cua tung san pham ', '108.0', '57.0', '102.8', '12.9', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 'có', 'SMS, MMS, Email, Plush Mail, IM ', '', 3, 1, 3, 2, 8, 2, '', 3, 'Màn hình cảm ứng TFT, 265k triệu màu', '320 x 480Pixels', '3.2 inches', 3, 'Li-Ion 1230 mAh ', 50, 12, 272, 0, 0, '2012-03-14 14:14:12', 15, 0, 0),
(9, 'Thẻ nhớ MicroSD 2GB (ADATA)', 'the-nho-microSd-2gb-(AdAtA)', 'the-nho-microSd-2gb-(AdAtA)-1331741799.jpg', 'demo.jpg', 135000, 1, 25, 2, 11, '', 'Tom tat tinh nang noi bat cua tung san pham ', '0.0', '0.0', '0.0', '0.0', 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', 1, 1, 1, 1, 1, 1, '', 1, '', '', '', 1, '', 12, 12, 67, 0, 0, '2012-03-14 23:15:32', 15, 0, 0),
(10, '	 Thẻ nhớ MicroSD 4GB (Transcend)', 'the-nho-microSd-4gb-(transcend)', 'the-nho-microSd-4gb-(transcend)-1331741857.jpg', 'demo.jpg', 180000, 1, 25, 2, 11, '', 'Tom tat tinh nang noi bat cua tung san pham ', '0.0', '0.0', '0.0', '0.0', 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', 1, 1, 1, 1, 1, 1, '', 1, '', '', '', 1, '', 12, 12, 67, 0, 0, '2012-03-14 23:16:44', 15, 0, 0),
(11, '	 Thẻ nhớ MicroSD Class 4 - 4GB (Silicon)', 'the-nho-microSd-class-4---4gb-(Silicon)', 'the-nho-microSd-class-4---4gb-(Silicon)-1331741916.jpg', 'demo.jpg', 180000, 1, 25, 2, 11, '', 'Tom tat tinh nang noi bat cua tung san pham ', '0.0', '0.0', '0.0', '0.0', 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', 1, 1, 1, 1, 1, 1, '', 1, '', '', '', 1, '', 12, 12, 65, 0, 0, '2012-03-14 23:17:38', 15, 0, 0),
(12, 'Thẻ nhớ MicroSD 8GB (Transcend)', 'the-nho-microSd-8gb-(transcend)', 'the-nho-microSd-8gb-(transcend)-1331742140.jpg', 'demo.jpg', 290000, 1, 25, 2, 11, '', 'Tom tat tinh nang noi bat cua tung san pham ', '0.0', '0.0', '0.0', '0.0', 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', 1, 1, 1, 1, 1, 1, '', 1, '', '', '', 1, '', 12, 12, 65, 0, 0, '2012-03-14 23:21:28', 15, 0, 0),
(13, '	 Thẻ nhớ MicroSD Class 4 - 8GB (Silicon)', 'the-nho-microSd-class-4---8gb-(Silicon)', 'the-nho-microSd-class-4---8gb-(Silicon)-1331742206.jpg', 'demo.jpg', 260000, 1, 25, 2, 11, '', 'Tom tat tinh nang noi bat cua tung san pham ', '0.0', '0.0', '0.0', '0.0', 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', 1, 1, 1, 1, 1, 1, '', 1, '', '', '', 1, '', 12, 12, 70, 0, 0, '2012-03-14 23:22:21', 15, 0, 0),
(14, 'Đầu đọc thẻ nhớ Ipad', 'dau-doc-the-nho-Ipad', 'dau-doc-the-nho-Ipad-1331742391.jpg', '', 650000, 1, 33, 2, 11, '', '<p>\r\n	Tom tat tinh nang noi bat cua tung san pham</p>\r\n', '0.0', '0.0', '0.0', '0.0', 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', 1, 1, 1, 1, 1, 1, '', 1, '', '', '', 1, '', 12, 0, 3, 0, 0, '2012-03-27 12:15:51', 15, 1, 0),
(15, 'Đầu đọc thẻ nhớ Reader (bằng nhựa)', 'dau-doc-the-nho-reader-(bang-nhua)', 'dau-doc-the-nho-reader-(bang-nhua)-1331742451.jpg', '', 60000, 1, 33, 2, 11, '', '<p>\r\n	Tom tat tinh nang noi bat cua tung san pham</p>\r\n', '0.0', '0.0', '0.0', '0.0', 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', 1, 1, 1, 1, 1, 1, '', 1, '', '', '', 1, '', 12, 0, 0, 0, 0, '2012-03-27 12:19:00', 15, 1, 0),
(16, 'Đầu đọc thẻ nhớ Reader Multi In One (bật nắp)', 'dau-doc-the-nho-reader-multi-In-One-(bat-nap)', 'dau-doc-the-nho-reader-multi-In-One-(bat-nap)-1331742495.jpg', '', 100000, 1, 33, 2, 11, '', '<p>\r\n	Tom tat tinh nang noi bat cua tung san pham</p>\r\n', '0.0', '0.0', '0.0', '0.0', 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', 1, 1, 1, 1, 1, 1, '', 1, '', '', '', 1, '', 12, 0, 0, 0, 0, '2012-03-27 12:19:23', 15, 1, 0),
(17, 'Đầu đọc thẻ nhớ All In One', 'dau-doc-the-nho-All-In-One', 'dau-doc-the-nho-All-In-One-1331742555.jpg', '', 60000, 1, 33, 2, 11, '', '<p>\r\n	Tom tat tinh nang noi bat cua tung san pham</p>\r\n', '0.0', '0.0', '0.0', '0.0', 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', 1, 1, 1, 1, 1, 1, '', 1, '', '', '', 1, '', 0, 0, 2, 0, 0, '2012-03-27 12:20:21', 15, 1, 0),
(18, 'Đầu đọc thẻ nhớ Reader Caro All In One', 'dau-doc-the-nho-reader-caro-All-In-One', 'dau-doc-the-nho-reader-caro-All-In-One-1331742596.jpg', '', 105000, 1, 33, 2, 11, '', '<p>\r\n	Tom tat tinh nang noi bat cua tung san pham</p>\r\n', '0.0', '0.0', '0.0', '0.0', 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', 1, 1, 1, 1, 1, 1, '', 1, '', '', '', 1, '', 0, 0, 1, 0, 0, '2012-03-27 12:20:54', 15, 1, 0),
(19, 'Đầu đọc thẻ nhớ Reader P8K (Trancend)', 'dau-doc-the-nho-reader-P8k-(trancend)', 'dau-doc-the-nho-reader-P8k-(trancend)-1331742634.jpg', 'demo.jpg', 270000, 1, 25, 2, 11, '', 'Tom tat tinh nang noi bat cua tung san pham ', '0.0', '0.0', '0.0', '0.0', 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', 1, 1, 1, 1, 1, 1, '', 1, '', '', '', 1, '', 0, 12, 68, 0, 0, '2012-03-14 23:29:57', 15, 0, 0),
(20, 'Đầu đọc thẻ nhớ Reader SSKIII', 'dau-doc-the-nho-reader-SSkIII', 'dau-doc-the-nho-reader-SSkIII-1331742689.jpg', 'demo.jpg', 150000, 1, 25, 2, 11, '', 'Tom tat tinh nang noi bat cua tung san pham ', '0.0', '0.0', '0.0', '0.0', 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', 1, 1, 1, 1, 1, 1, '', 1, '', '', '', 1, '', 0, 12, 67, 0, 0, '2012-03-14 23:30:35', 15, 0, 0),
(21, 'Đầu đọc thẻ nhớ Reader SSKIII', 'dau-doc-the-nho-reader-SSkIII', 'dau-doc-the-nho-reader-SSkIII-1331742693.jpg', 'demo.jpg', 150000, 1, 25, 2, 11, '', 'Tom tat tinh nang noi bat cua tung san pham ', '0.0', '0.0', '0.0', '0.0', 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', 1, 1, 1, 1, 1, 1, '', 1, '', '', '', 1, '', 0, 12, 65, 0, 0, '2012-03-14 23:30:35', 15, 0, 0),
(22, 'Giắc cắm đọc thẻ', 'giac-cam-doc-the', 'giac-cam-doc-the-1331742732.jpg', 'demo.jpg', 95000, 1, 25, 2, 11, '', 'Tom tat tinh nang noi bat cua tung san pham ', '0.0', '0.0', '0.0', '0.0', 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', 1, 1, 1, 1, 1, 1, '', 1, '', '', '', 1, '', 0, 12, 69, 0, 0, '2012-03-14 23:31:34', 15, 0, 0),
(23, 'Cáp AV Iphone (Zin)', 'cap-Av-Iphone-(Zin)', 'cap-Av-Iphone-(Zin)-1331742947.jpg', '', 650000, 1, 32, 2, 11, '', '<p>\r\n	Tom tat tinh nang noi bat cua tung san pham</p>\r\n', '0.0', '0.0', '0.0', '0.0', 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', 1, 1, 1, 1, 1, 1, '', 1, '', '', '', 1, '', 0, 0, 166, 0, 0, '2012-03-27 12:17:20', 15, 1, 0),
(24, 'Cáp AV Iphone', 'cap-Av-Iphone', 'cap-Av-Iphone-1331742993.jpg', '', 190000, 1, 32, 2, 11, '', '<p>\r\n	Tom tat tinh nang noi bat cua tung san pham</p>\r\n', '0.0', '0.0', '0.0', '0.0', 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', 1, 1, 1, 1, 1, 1, '', 1, '', '', '', 1, '', 0, 0, 15, 0, 0, '2012-03-27 12:16:28', 15, 1, 0),
(25, 'Cáp Iphone', 'cap-Iphone', 'cap-Iphone-1331743050.JPG', '', 100000, 1, 32, 2, 11, '', '<p>\r\n	Tom tat tinh nang noi bat cua tung san pham</p>\r\n', '0.0', '0.0', '0.0', '0.0', 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', 1, 1, 1, 1, 1, 1, '', 1, '', '', '', 1, '', 0, 0, 0, 0, 0, '2012-03-27 12:18:26', 15, 1, 0),
(26, 'Cáp Nokia DKU2', 'cap-nokia-dkU2', 'cap-nokia-dkU2-1331743082.jpg', '', 90000, 1, 32, 2, 11, '', '<p>\r\n	Tom tat tinh nang noi bat cua tung san pham</p>\r\n', '0.0', '0.0', '0.0', '0.0', 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', 1, 1, 1, 1, 1, 1, '', 1, '', '', '', 1, '', 0, 0, 0, 0, 0, '2012-03-27 12:18:07', 15, 1, 0),
(27, 'Thẻ nhớ MicroSD Class 4-16G(Silicon)', 'the-nho-microSd-class-4-16g(Silicon)', 'the-nho-mIcrOSd-clASS-4---16g-(-SIlIcOn-)-1331743119.jpg', '', 650000, 1, 25, 2, 11, '', '<p>\r\n	Tom tat tinh nang noi bat cua tung san pham</p>\r\n', '0.0', '0.0', '0.0', '0.0', 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', 1, 1, 1, 1, 1, 1, '', 1, '', '', '', 1, '', 0, 0, 0, 0, 0, '2012-03-24 14:39:49', 15, 1, 0),
(28, 'Iphone 4S 32GB White (Quốc tế)', 'Iphone-4S-32gb-White-(Quoc-te)', 'Iphone-4S-32gb-White-(Quoc-te)-1331802237.jpg', 'demo.jpg', 20500000, 1, 5, 1, 7, '', 'Tom tat tinh nang noi bat cua tung san pham ', '140.0', '58.6', '115.5', '9.3', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 'không giới hạn, danh bạ hình ảnh', 'SMS,MMS,Email,Plush Mail,IM ', '', 4, 1, 3, 8, 1, 2, '1 GHz dual-core ARM Cortex-A9, PowerVR SGX543MP2 GPU, Apple A5 chipset', 5, 'Màn hình cảm ứng điện dung TFT LED-blacklit IPS, 16 triệu màu', '640x960 pixels', ' 3.5 inches', 3, 'Li-Po 1420 mAh ', 50, 12, 204, 0, 0, '2012-03-15 16:04:20', 15, 15, 0),
(29, 'Iphone 4S 32GB Black (Quốc tế)', 'Iphone-4S-32gb-black-(Quoc-te)', 'Iphone-4S-32gb-black-(Quoc-te)-1331802537.jpg', 'demo.jpg', 20200000, 1, 5, 1, 7, '', 'Tom tat tinh nang noi bat cua tung san pham ', '140.0', '58.6', '115.2', '9.3', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 'không giới hạn, danh bạ hình ảnh;', 'SMS,MMS,Email,Plush Mail,IM ', '', 4, 1, 3, 8, 1, 2, '1 GHz dual-core ARM Cortex-A9, PowerVR SGX543MP2 GPU, Apple A5 chipset', 5, 'Màn hình cảm ứng điện dung TFT LED-blacklit IPS, 16 triệu màu', '640x960 pixels', '3.5 inches', 3, 'Li-Po 1420 mAh ', 43, 12, 152, 0, 0, '2012-03-15 16:05:25', 15, 0, 0),
(30, 'Nokia E7', 'nokia-E7', 'nokia-E7-1331803039.jpg', '', 9719000, 1, 17, 1, 1, '', '<p>\r\n	Tom tat tinh nang noi bat cua tung san pham</p>\r\n', '176.0', '62.4', '123.7', '13.6', 2, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 'không giới hạn, danh bạ hình ảnh', 'SMS, MMS,Email, Plush Mail, IM ', '', 4, 1, 3, 7, 1, 2, 'ARM 11 600 MHz', 2, 'Màn hình cảm ứng điện dung AMOLED, 16 triệu màu', '360x640 pixels', '4.0 inches', 3, 'Li-ion 1200 mAh (BL-', 56, 0, 15, 0, 0, '2012-04-17 23:41:34', 15, 1, 0),
(31, 'Samsung P7300 (Galaxy Tab 8.9)', 'Samsung-P7300-(galaxy-tab-8.9)', 'Samsung-P7300-(galaxy-tab-8.9)-1331803485.jpg', 'demo.jpg', 11960000, 1, 2, 1, 2, '', 'Tom tat tinh nang noi bat cua tung san pham ', '470.0', '157.8', '230.9', '8.6', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 'không giới hạn, danh bạ hình ảnh', 'SMS, MMS, Email, Plush Mail, IM ', '', 3, 1, 3, 7, 1, 3, 'Dual-core Cortex-A9', 3, 'Màn hình cảm ứng điện dung PLS TFT, 16 triệu màu', '800 x 1280 pixels', '8.9 inches', 3, 'Li-Po 6100 mAh ', 56, 12, 105, 0, 0, '2012-03-15 16:18:23', 15, 0, 0),
(32, 'Nokia E5', 'nokia-E5', 'nokia-E5-1331803864.png', 'demo.jpg', 3999000, 1, 1, 1, 1, '', '<div class="box_right">\r\n	He</div>\r\n<div class="box_right">\r\n	dfdf</div>\r\n<div class="box_right">\r\n	fd</div>\r\n<div class="box_right">\r\n	f</div>\r\n<div class="box_right">\r\n	df</div>\r\n<div class="box_right">\r\n	df</div>\r\n<div class="box_right">\r\n	df</div>\r\n<div class="box_right">\r\n	d</div>\r\n<div class="box_right">\r\n	f</div>\r\n<p>\r\n	&nbsp;</p>\r\n', '126.0', '58.9', '115.0', '12.8', 2, 1, 1, 0, 1, 1, 1, 1, 0, 1, 1, 1, 1, 1, 'không giới hạn, danh bạ hình ảnh;', 'SMS, MMS, Email, Plush Mail, IM ', '', 3, 1, 3, 2, 8, 2, 'ARM 11 600 MHz processor', 2, 'Màn hình TFT, 262.144 màu', '320x240 pixels', '2.36 inches', 1, 'Li-ion 1200 mAh (BL-', 56, 0, 55, 0, 0, '2012-03-17 17:27:39', 15, 1, 0),
(33, 'Nokia C2-01 ', 'nokia-c2-01', 'nokia-c2-01-1331804246.jpg', '', 1790000, 1, 1, 1, 1, '', '<p>\r\n	Tom tat tinh nang noi bat cua tung san pham</p>\r\n', '89.0', '46.9', '109.8', '15.3', 2, 1, 1, 0, 1, 0, 1, 1, 0, 0, 0, 1, 0, 1, '2000 số, danh bạ hình ảnh', 'SMS,MMS,Email ', 'có', 2, 1, 1, 2, 7, 1, '', 1, 'Màn hình TFT, 256K màu', '240x320 pixels', ' 2.0 inches', 1, 'Li-ion 1020 (BL-5C) ', 56, 0, 3, 0, 0, '2012-03-31 09:36:49', 15, 1, 0),
(34, 'Sony Ericssion LT180i ', 'Sony-Ericssion-lt180i', 'SOnY-ErIcSSOn-lt18i-(xPErIA-Arc-S)-1331804646.jpg', '', 12190000, 1, 7, 1, 5, '', '<p>\r\n	Tom tat tinh nang noi bat cua tung san pham</p>\r\n', '117.0', '63.0', '125.0', '8.7', 2, 1, 1, 0, 1, 0, 1, 1, 1, 0, 1, 1, 1, 1, 'Lưu không giới hạn, danh bạ hình ảnh', 'SMS, MMS, Email, Plush Mail, IM ', 'có', 4, 1, 3, 2, 8, 2, '1.4 GHz Scorpion, Adreno 205 GPU, Qualcomm MSM8255T Snapdragon', 3, 'Màn hình cảm ứng điện dung LED-blacklit LCD, 16 triệu màu', '480x854 pixels', ' 4.2 inches', 3, 'Li-Po 1500 mAh ', 56, 0, 8, 0, 0, '2012-03-28 10:50:09', 15, 1, 0),
(35, 'Mobistar @835', 'mobistar-@835', 'mobistar-@835-1331804967.jpg', 'demo.jpg', 1060000, 1, 9, 1, 11, '', 'Tom tat tinh nang noi bat cua tung san pham ', '93.0', '11.0', '60.0', '13.5', 2, 1, 1, 0, 1, 0, 1, 1, 0, 0, 0, 1, 0, 1, '500 số', 'SMS, MMS ', '', 2, 1, 2, 2, 1, 1, '', 1, 'Màn hình TFT, 262.144 màu', '320x240 pixels', '2.2 inches', 1, 'Pin chuẩn Li-ion 950', 50, 12, 83, 0, 0, '2012-03-15 16:44:09', 15, 0, 0),
(36, 'Mobistar F535', 'mobistar-f535', 'mobistar-f535-1331805258.jpg', 'demo.jpg', 930000, 1, 9, 1, 11, '', 'Tom tat tinh nang noi bat cua tung san pham ', '99.0', '45.0', '95.0', '14.8', 2, 1, 3, 0, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, '500 số', 'SMS, MMS ', '', 2, 2, 2, 1, 1, 1, '', 1, 'Màn hình TFT, 262.144 màu', '128x160 pixels', '2.0 inches', 1, 'Pi chuẩn Li-ion 900 ', 45, 12, 69, 0, 0, '2012-03-15 16:49:29', 15, 0, 0),
(37, 'Q-Mobile T26', 'Q-mobile-t26', 'Q-mobile-t26-1331805578.jpg', 'demo.jpg', 1050000, 1, 8, 1, 11, '', 'Tom tat tinh nang noi bat cua tung san pham ', '93.0', '57.0', '101.0', '10.3', 3, 1, 1, 0, 0, 0, 1, 1, 0, 0, 0, 0, 0, 1, '250 số', 'SMS, MMS ', '', 2, 2, 2, 1, 1, 1, '', 1, 'Màn hình cảm ứng TFT, QVGA', '', '2.8 inches', 2, 'Li-Ion 1000mAh. ', 56, 12, 97, 0, 0, '2012-03-15 16:54:21', 15, 0, 0),
(38, 'K-TOUCH V388', 'k-tOUch-v388', 'k-tOUch-v388-1331806155.jpg', 'demo.jpg', 1299000, 1, 14, 1, 11, '', 'Tom tat tinh nang noi bat cua tung san pham ', '96.0', '59.3', '115.0', '12.0', 1, 1, 1, 0, 1, 0, 1, 1, 0, 0, 0, 1, 0, 1, '300 số', 'SMS/MMS', '', 2, 2, 2, 1, 4, 1, '', 1, 'TFT, 262.144 màu', '240 x 320 Pixels', '2.4 inches', 1, 'Pin chuẩn Li-Ion 850', 56, 12, 72, 0, 0, '2012-03-15 16:59:41', 15, 0, 0),
(39, 'MOTOROLA XT720 ', 'mOtOrOlA-xt720', 'mOtOrOlA-xt720-1331811303.jpg', 'demo.jpg', 7499000, 1, 10, 1, 6, '', 'Tom tat tinh nang noi bat cua tung san pham ', '160.0', '60.9', '116.0', '10.9', 2, 1, 1, 0, 1, 0, 1, 1, 1, 0, 1, 1, 1, 1, 'Không giới hạn', 'SMS/MMS/Instant Messaging', 'Có, SMTP/IMAP4/POP3/Push Mail', 4, 1, 3, 2, 8, 2, 'ARM Cortex A8 600 MHz', 3, 'TFT, 16 triệu màu', '480 x 800 pixels', '3.7 inches', 3, 'Pin chuẩn Li-Po 1420', 56, 12, 75, 0, 0, '2012-03-15 18:09:22', 15, 0, 0),
(40, 'HTC A7272 (Desire Z)', 'htc-A7272-(desire-Z)', 'htc-A7272-(desire-Z)-1332903237.jpg', '', 12300000, 1, 12, 1, 8, '', '', '180.0', '60.4', '119.0', '14.2', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 'không giới hạn, danh bạ hình ảnh', 'SMS, MMS, Email, Plush Mail, IM ', 'có', 3, 1, 3, 3, 8, 2, 'Qualcomm MSM 7230 800 MHz', 3, 'Màn hình càm ứng điện dung S-LCD, 16 triệu màu', '480x800 pixels', '3.7 inches', 3, 'Li-ion 1300 mAh', 65, 0, 2, 0, 0, '2012-03-28 09:45:00', 1, 0, 0),
(41, 'Nokia N9 64GB', 'nokia-n9-64gb', 'nokia-n9-64gb-1332903620.jpg', '', 12900000, 1, 1, 1, 1, '', '', '135.0', '61.2', '116.5', '2.1', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 'không giới hạn, danh bạ hình ảnh', 'SMS,MMS,Email,Plush Mail,IM ', 'có', 4, 1, 3, 9, 1, 3, '', 8, 'Màn hỉnh cảm ứng điện dung AMOLED, 16 triệu màu, chống trầy xướ, chống chói dưới ánh nắng mặt trời, ', '480x854 pixels', '3.9 inches', 3, 'Li-ion 1450 mAh (BV-', 45, 0, 8, 0, 0, '2012-03-28 11:46:59', 1, 1, 0),
(42, 'HTC A8181', 'htc-A8181', 'htc-A8181-1332909564.jpg', '', 9650000, 1, 12, 1, 8, '', '', '136.0', '60.0', '119.0', '11.9', 1, 1, 1, 0, 1, 0, 1, 1, 1, 0, 1, 1, 1, 1, 'không giới hạn, danh bạ hình ảnh;', 'SMS, MMS, Email, IM ', 'có', 3, 1, 3, 2, 8, 2, 'Qualcomm Snapdragon QSD8250 1 GHz processor', 3, 'Màn hình cảm ứng điện dung AMOLED, 16 triệu màu', '480x800 pixels', '3.7 inches', 3, 'HTC A8181', 50, 0, 1, 0, 0, '2012-03-28 11:14:14', 1, 0, 0),
(43, 'LG P990 ', 'lg-P990', 'lg-P990-1332909763.jpg', '', 9410000, 1, 6, 1, 3, '', '', '139.0', '63.2', '123.9', '10.9', 1, 1, 1, 0, 1, 0, 1, 1, 1, 0, 1, 1, 1, 1, 'không giới hạn, danh bạ hình ành;', 'SMS, MMS, Email, Plush Mail, IM ', 'có', 4, 1, 3, 6, 8, 2, 'Dual-corel 1GHz ARM Cortex-A9, ULP GeFore GPU, Tegra 2 chipset', 3, 'Màn hình cảm ứng điện dung IPS LCD, 16 triệu màu', '480x800 pixels', '', 3, 'Li-ion 1500 mAh ', 50, 0, 2, 0, 0, '2012-03-28 11:39:27', 1, 0, 0),
(44, 'Nokia X7', 'nokia-x7', 'nokia-x7-1332909953.jpg', '', 8690000, 1, 1, 1, 1, '', '', '146.0', '62.8', '119.7', '11.9', 1, 1, 1, 0, 1, 0, 1, 1, 1, 0, 1, 1, 1, 1, 'không giới hạn, danh bạ hình ảnh;', 'SMS,MMS, Email, Plush Mail,IM ', 'có', 4, 1, 3, 3, 8, 2, '', 2, 'Màn hình cảm ứng điện dung AMOLED, 16 Triệu màu', '360x640 pixels', ' 4.0 inches', 3, 'Li-ion 1200 mAh (BL-', 56, 0, 1, 0, 0, '2012-03-31 09:36:19', 1, 1, 0),
(45, 'Samsung I9003 (Galaxy S)', 'Samsung-I9003-(galaxy-S)', 'Samsung-I9003-(galaxy-S)-1332910261.jpg', '', 8150000, 1, 2, 1, 2, '', '', '131.0', '64.2', '123.7', '10.6', 1, 1, 1, 0, 1, 0, 1, 1, 1, 0, 1, 1, 1, 1, 'không giới hạn, danh bạ hình ảnh;', 'SMS, MMS, EMail, Plush Mail, IM, RSS ', 'có', 3, 1, 3, 5, 8, 2, '1GHz Cortex A8, PowerVR SGX530 GPU, TI OMAP 3630 chipset', 3, 'Màn hình cảm ứng điện dung SC-LCD, 16 triệu màu', '480x800 pixels', '4.0 inches', 3, 'Li-ion 1650 mAh ', 45, 0, 2, 0, 0, '2012-03-28 11:47:17', 1, 0, 0),
(46, 'Nokia E6-00', 'nokia-E6-00', 'nokia-E6-00-1332921623.png', '', 6790000, 1, 1, 1, 1, '', '', '133.0', '59.0', '115.0', '10.5', 2, 1, 1, 0, 1, 0, 1, 1, 1, 0, 1, 1, 1, 1, 'Khả năng lưu các mục và fields không giới hạn, dan', 'SMS, MMS,Email,Plush Mail, IM ', 'có', 4, 1, 3, 6, 8, 1, '', 2, 'TFT LCD, 16,7 triệu màu, Màn hình cảm ứng điện dung, Cảm ứng hướng', '640x480 pixels', '2.46 inches', 3, 'Li-ion 1500 mAh ', 46, 0, 1, 0, 0, '2012-03-31 09:37:08', 1, 1, 0),
(47, 'Nokia C7', 'nokia-c7', 'nokia-c7-1332921807.jpg', '', 6749000, 1, 1, 1, 1, '', '', '130.0', '56.8', '117.3', '10.5', 1, 1, 1, 0, 1, 0, 1, 1, 1, 0, 1, 0, 1, 1, 'Không giới hạn, danh bạ hình ảnh;', 'SMS, MMS,Email, Plush Mail, IM ', 'có', 4, 1, 3, 6, 8, 2, '680 MHz ARM 11, Broadcom BCM2727 GPU', 2, 'Màn hình cảm ứng diện dung AMOLED, 16 triệu màu', '360x640 pixels', ' 3.5 inches', 3, 'Li-ion 1200 mAh (BL-', 49, 0, 7, 0, 0, '2012-03-28 15:00:29', 1, 0, 0),
(48, 'HTC A510e', 'htc-A510e', 'htc-A510e-1332922101.jpg', '', 6699000, 1, 12, 1, 8, '', '', '105.0', '59.4', '101.3', '12.4', 1, 1, 1, 0, 1, 0, 1, 1, 1, 0, 1, 1, 1, 1, 'không giới hạn, danh bạ hình ảnh;', 'SMS, MMS, EMail, Plush Mail, IM ', 'co', 3, 1, 3, 2, 8, 2, '600 MHz', 3, 'Màn hình cảm ứng điện dung TFT, 256K màu', '320x480 pixels', ' 3.2 inches', 3, 'Li-ion 1230 mAh ', 65, 0, 3, 0, 0, '2012-03-28 15:03:32', 1, 0, 0),
(49, 'Samsung S5830 (Galaxy Ace)', 'Samsung-S5830-(galaxy-Ace)', 'Samsung-S5830-(galaxy-Ace)-1332922404.jpg', '', 6390000, 1, 2, 1, 2, '', '', '113.0', '59.9', '112.4', '11.5', 1, 1, 1, 0, 1, 0, 1, 1, 1, 0, 1, 1, 1, 1, 'khả năng lưu không giới hạn', 'SMS, MMS, EMail ', 'có', 3, 1, 3, 2, 8, 2, '800 MHz ARM 11 processor, Adreno 200 GPU, Qualcomm MSM7227 chipset', 3, 'Màn hình cảm ứng điện dung TFT, 16 triệu màu', '320x480 pixels', '3.5 inches', 3, 'Li-ion 1350 mAh ', 65, 0, 5, 0, 0, '2012-03-28 15:08:26', 1, 0, 0),
(50, 'Nokia N9 64GB', 'nokia-n9-64gb', 'nokia-n9-64gb-1333156909.jpg', '', 12999000, 1, 1, 1, 1, '', '', '135.0', '116.5', '61.2', '7.6', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 1, 1, '', '', '', 4, 1, 2, 9, 1, 3, 'ARM Cortex A8 1GHz processor', 8, 'Super AMOLED 16 triệu màu', '480x854', '3.9 inches', 2, 'Li-ion 1350 mAh ', 0, 0, 0, 0, 0, '2012-03-31 08:12:37', 1, 0, 1),
(51, 'NOKIA 701', 'nOkIA-701', 'nOkIA-701-1333158078.jpg', '', 7299000, 1, 1, 1, 1, '', '', '131.0', '56.8', '117.2', '11.0', 1, 1, 1, 1, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '', '', 3, 1, 2, 6, 8, 3, '1GHz processor', 2, 'LED-backlit IPS TFT 16 triệu màu', '360x640', '3.5 inches', 3, 'Li-ion 1300 mAh ', 0, 0, 8, 0, 0, '2012-03-31 09:37:51', 1, 1, 0),
(52, 'NOKIA N8', 'nOkIA-n8', 'nOkIA-n8-1333158370.jpg', '', 0, 1, 1, 1, 1, '', '', '135.0', '113.5', '59.0', '12.9', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '', '', 3, 1, 3, 7, 8, 2, 'ARM 11 680 MHz processor', 2, 'AMOLED 16 triệu màu', '360x640', '3.5 inches', 3, 'Li-ion 1200 mAh ', 0, 0, 0, 0, 0, '2012-03-31 08:41:18', 1, 0, 0),
(53, 'NOKIA 700', 'nOkIA-700', 'nOkIA-700-1333159185.jpg', '', 6899000, 1, 1, 1, 1, '', '', '96.0', '50.7', '110.0', '9.7', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '', '', 3, 1, 3, 4, 8, 2, '1GHz processor', 2, 'AMOLED 16 triệu màu', '360x640', '3.2 inches', 3, 'Li-ion 1080 mAh', 0, 0, 5, 0, 0, '2012-03-31 09:38:37', 1, 1, 0),
(54, 'NOKIA C3-01.5', 'nOkIA-c3-01.5', 'nOkIA-c3-01.5-1333159595.jpg', '', 6699000, 1, 1, 1, 1, '', '', '100.0', '47.5', '111.0', '11.0', 1, 1, 1, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '', '', 3, 1, 3, 2, 8, 2, '1GHz processor', 1, 'TFT, 262.144 màu', '240x320', '2.4 inches', 2, 'Li-ion 1050 mAh', 0, 0, 2, 0, 0, '2012-03-31 09:39:53', 1, 1, 0),
(55, 'NOKIA E72', 'nOkIA-E72', 'nOkIA-E72-1333160142.jpg', '', 6049000, 1, 17, 1, 1, '', '', '128.0', '58.0', '114.0', '10.0', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '', '', 3, 1, 3, 2, 7, 2, 'ARM 11 600 MHz processor', 2, 'TFT, 16 triệu màu', '320x240 pixels', '2.4 inches', 1, 'Li-ion 1500 mAh', 0, 0, 11, 0, 0, '2012-04-17 23:41:54', 1, 1, 0),
(56, 'NOKIA 603', 'nOkIA-603', 'nOkIA-603-1333160342.jpg', '', 5669000, 1, 1, 1, 1, '', '', '109.6', '57.1', '113.5', '12.7', 1, 1, 1, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '', '', 3, 1, 3, 4, 8, 3, '1GHz processor', 2, 'TFT, 16 triệu màu', '360x640', '3.5 inches', 3, 'Li-ion 1300 mAh ', 0, 0, 1, 0, 0, '2012-03-31 09:42:38', 1, 1, 0),
(57, 'NOKIA C6', 'nOkIA-c6', 'nOkIA-c6-1333160872.jpg', '', 5599000, 1, 1, 1, 1, '', '', '150.0', '53.0', '113.0', '16.8', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '', '', 3, 1, 3, 2, 7, 2, 'ARM 11 434 MHz processor', 2, 'TFT, 16 triệu màu', '360x640', '3.2 inches', 2, 'Nokia BL-4J', 0, 0, 1, 0, 0, '2012-03-31 09:35:10', 1, 1, 0),
(58, 'NOKIA E71', 'nOkIA-E71', 'nOkIA-E71-1333161207.jpg', '', 4899000, 1, 17, 1, 1, '', '', '121.0', '49.5', '107.5', '13.6', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '', '', 2, 1, 3, 2, 6, 2, 'ARM 11 369 MHz processor', 2, 'TFT, 16 triệu màu', '320x240 pixels', '', 1, 'Nokia BL-4L', 0, 0, 16, 0, 0, '2012-04-17 23:42:32', 1, 1, 0),
(59, 'NOKIA 500', 'nOkIA-500', 'nOkIA-500-1333162462.jpg', '', 4449000, 1, 1, 1, 1, '', '', '93.0', '53.8', '111.3', '14.1', 1, 1, 1, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '', '', 3, 1, 3, 4, 8, 2, '1GHz processor', 2, 'TFT, 16 triệu màu', '360x640', '3.2 inches', 3, 'Li-ion 1110 mAh ', 0, 0, 0, 0, 0, '2012-03-31 09:50:06', 1, 0, 0),
(60, ' NOKIA C3-01 TOUCH AND TYPE', 'nOkIA-c3-01-tOUch-And-tYPE', 'nOkIA-c3-01-tOUch-And-tYPE-1333163105.jpg', '', 3839000, 1, 1, 1, 1, '', '', '100.0', '47.5', '111.0', '11.0', 1, 1, 1, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '', '', 3, 1, 3, 2, 8, 2, '', 1, 'TFT, 262.144 màu', '240x320', '2.4 inches', 2, 'Nokia BL-5CT', 0, 0, 1, 0, 0, '2012-03-31 10:04:50', 1, 1, 0),
(61, 'NOKIA C5-00.2', 'nOkIA-c5-00.2', 'nOkIA-c5-00.2-1333163333.jpg', '', 3499000, 1, 1, 1, 1, '', '', '95.0', '46.0', '112.3', '12.3', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '', '', 3, 1, 3, 2, 8, 2, 'ARM 11 600 MHz processor', 2, 'TFT, 16 triệu màu', '240x320', '2.2 inches', 1, 'Nokia BL-5CT', 0, 0, 1, 0, 0, '2012-03-31 10:05:34', 1, 0, 0),
(62, 'NOKIA X3-02.5 TOUCH AND TYPE', 'nOkIA-x3-02.5-tOUch-And-tYPE', 'nOkIA-x3-02.5-tOUch-And-tYPE-1333163667.jpg', '', 3499000, 1, 19, 1, 1, '', '', '77.4', '48.4', '106.2', '9.6', 1, 1, 1, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '', '', 3, 1, 3, 2, 7, 2, '1GHz processor', 1, 'TFT, 262.144 màu', '240x320', '2.4 inches', 2, 'Nokia BL-4S', 0, 0, 9, 0, 0, '2012-04-17 23:40:41', 1, 1, 0),
(63, 'NOKIA C5-03', 'nOkIA-c5-03', 'nOkIA-c5-03-1333164503.jpg', '', 3499000, 1, 1, 1, 1, '', '', '93.0', '51.0', '105.8', '13.8', 1, 1, 1, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '', '', 3, 1, 3, 2, 7, 2, 'ARM 11 450 MHz processor', 2, 'TFT, 16 triệu màu', '360x640', '3.2 inches', 2, 'Li-ion 1000 mAh ', 0, 0, 1, 0, 0, '2012-03-31 10:14:28', 1, 0, 0),
(64, 'NOKIA 303', 'nOkIA-303', 'nOkIA-303-1333164738.jpg', '', 3299000, 1, 1, 1, 1, '', '', '99.0', '55.7', '116.5', '13.9', 1, 1, 1, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '', '', 3, 1, 3, 2, 8, 2, '1GHz processor', 1, 'TFT, 262.144 màu', '320x240', '2.6 inches', 3, 'Nokia BL-3L', 0, 0, 2, 0, 0, '2012-03-31 10:28:24', 1, 0, 0),
(65, 'NOKIA E63', 'nOkIA-E63', 'nOkIA-E63-1333165734.jpg', '', 0, 1, 1, 1, 1, '', '', '77.4', '48.4', '106.2', '9.6', 1, 1, 1, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '', '', 2, 1, 3, 2, 7, 2, '', 1, 'TFT, 262.144 màu', '240x320', '2.4 inches', 2, 'Nokia BL-4S', 0, 0, 2, 0, 3129000, '2012-03-31 10:46:47', 1, 1, 1),
(66, 'NOKIA E63', 'nOkIA-E63', 'nOkIA-E63-1333165453.jpg', '', 3129000, 1, 1, 1, 1, '', '', '126.0', '59.0', '113.0', '13.0', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '', '', 2, 1, 3, 2, 6, 1, '', 2, 'TFT, 16 triệu màu', '320x240 pixels', '', 1, 'Nokia BL-4L', 0, 0, 7, 0, 0, '2012-03-31 10:40:32', 1, 0, 0),
(67, 'NOKIA C5-06', 'nOkIA-c5-06', 'nOkIA-c5-06-1333165569.jpg', '', 2899000, 1, 1, 1, 1, '', '', '93.0', '51.0', '105.8', '13.8', 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', 1, 1, 1, 1, 1, 1, '', 2, '', '', '', 1, 'Li-ion 1000 mAh ', 0, 0, 1, 0, 0, '2012-03-31 10:44:13', 1, 0, 0),
(68, 'NOKIA C5-06', 'nOkIA-c5-06', 'nOkIA-c5-06-1333165993.jpg', '', 2899000, 1, 1, 1, 1, '', '', '93.0', '51.0', '105.8', '13.8', 1, 1, 1, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '', '', 2, 1, 2, 2, 7, 2, '600 MHz processor', 2, 'TFT, 16 triệu màu', '360x640', '3.2 inches', 2, 'Li-ion 1000 mAh ', 0, 0, 2, 0, 0, '2012-03-31 10:49:13', 1, 0, 0),
(69, 'NOKIA 5233', 'nOkIA-5233', 'nOkIA-5233-1333166253.jpg', '', 2789000, 1, 1, 1, 1, '', '', '115.0', '51.7', '111.0', '15.5', 1, 1, 1, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '', '', 2, 1, 2, 2, 7, 1, 'ARM 11 434 MHz processor', 2, 'TFT, 16 triệu màu', '360x640', '3.2 inches', 2, 'Nokia BL-5J', 0, 0, 6, 0, 0, '2012-03-31 10:58:54', 1, 1, 0),
(70, 'SAMSUNG GALAXY NOTE N7000', 'SAmSUng-gAlAxY-nOtE-n7000', 'SAmSUng-gAlAxY-nOtE-n7000-1333180631.jpg', '', 15999000, 1, 2, 1, 2, '', '', '178.0', '83.0', '164.9', '9.7', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '', '', 4, 1, 3, 7, 8, 3, 'ARM Cortex A9 1,4GHz dual-core processor', 3, 'Super AMOLED 16 triệu màu', '800x1280', '5.3 inches', 3, 'Li-ion 2500 mAh ', 0, 0, 2, 0, 0, '2017-02-15 03:57:50', 1, 1, 0),
(71, 'SAMSUNG GALAXY S II I9100G', 'SAmSUng-gAlAxY-S-II-I9100g', 'SAmSUng-gAlAxY-S-II-I9100g-1333180823.jpg', '', 12499000, 1, 2, 1, 2, '', '', '116.0', '66.1', '125.3', '8.5', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '', '', 4, 1, 3, 7, 8, 3, 'ARM Cortex A9 1,2GHz dual-core processor', 3, 'Super AMOLED Plus 16 triệu màu', '480x800', '4.3 inches', 3, 'Li-ion 1650 mAh ', 0, 0, 0, 0, 0, '2012-03-31 14:57:12', 1, 0, 1),
(72, 'SAMSUNG GALAXY S II I9100G', 'SAmSUng-gAlAxY-S-II-I9100g', 'SAmSUng-gAlAxY-S-II-I9100g-1333180823.jpg', '', 12499000, 1, 2, 1, 2, '', '', '116.0', '66.1', '125.3', '8.5', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '', '', 4, 1, 3, 7, 8, 3, 'ARM Cortex A9 1,2GHz dual-core processor', 3, 'Super AMOLED Plus 16 triệu màu', '480x800', '4.3 inches', 3, 'Li-ion 1650 mAh ', 0, 0, 8, 0, 0, '2012-03-31 14:57:12', 1, 0, 0),
(73, 'SAMSUNG GALAXY TAB P1000', 'SAmSUng-gAlAxY-tAb-P1000', 'SAmSUng-gAlAxY-tAb-P1000-1333180978.jpg', '', 9490000, 1, 2, 1, 2, '', '', '385.0', '120.0', '190.0', '12.0', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '', '', 4, 1, 3, 7, 8, 2, 'ARM Cortex A8 1GHz processor', 3, 'TFT, 16 triệu màu', '600x1024', '7.0 inches', 3, 'Li-ion 1650 mAh ', 0, 0, 1, 0, 0, '2012-03-31 15:00:24', 1, 0, 0),
(74, 'SAMSUNG GALAXY S I9003 4GB', 'SAmSUng-gAlAxY-S-I9003-4gb', 'SAmSUng-gAlAxY-S-I9003-4gb-1333181154.jpg', '', 9399000, 1, 2, 1, 2, '', '', '131.0', '64.2', '123.7', '10.6', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '', '', 3, 1, 3, 5, 8, 2, 'TI OMAP 3630 1 GHz processor', 3, 'Super Clear LCD 16 triệu màu', '480x800', '4 inches', 3, 'Li-ion 1650 mAh ', 0, 0, 4, 0, 0, '2012-03-31 15:02:59', 1, 0, 0),
(75, 'SAMSUNG S8530 WAVE II', 'SAmSUng-S8530-WAvE-II', 'SAmSUng-S8530-WAvE-II-1333181320.jpg', '', 9399000, 1, 2, 1, 2, '', '', '135.0', '59.8', '123.9', '11.8', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '', '', 3, 1, 3, 4, 8, 1, 'ARM Cortex A8 1GHz processor', 7, 'Super Clear LCD 16 triệu màu', '480x800', '3.7 inches', 3, 'Li-ion 1500 mAh ', 0, 0, 6, 0, 0, '2012-03-31 15:05:56', 1, 0, 0),
(76, 'SAMSUNG WAVE 3 S8600', 'SAmSUng-WAvE-3-S8600', 'SAmSUng-WAvE-3-S8600-1333181461.jpg', '', 8089000, 1, 2, 1, 2, '', '', '122.0', '64.2', '125.9', '9.9', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '', '', 3, 1, 3, 5, 8, 1, '1.4 GHz processor', 7, 'Super AMOLED 16 triệu màu', '480x800', '4 inches', 3, 'Li-ion 1500 mAh ', 0, 0, 8, 0, 0, '2012-03-31 15:13:31', 1, 1, 0),
(77, 'SAMSUNG GALAXY W I8150', 'SAmSUng-gAlAxY-W-I8150', 'SAmSUng-gAlAxY-W-I8150-1333181895.jpg', '', 7949000, 1, 2, 1, 2, '', '', '109.9', '59.8', '115.5', '11.5', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '', '', 3, 1, 3, 4, 8, 2, '1.4 GHz processor', 3, 'TFT, 16 triệu màu', '480x800', '3.7 inches', 3, 'Li-ion 1500 mAh ', 0, 0, 13, 0, 0, '2012-03-31 15:16:11', 1, 0, 0),
(78, 'SAMSUNG S5830 ACE', 'SAmSUng-S5830-AcE', 'SAmSUng-S5830-AcE-1333182415.jpg', '', 6399000, 1, 2, 1, 2, '', '', '113.0', '59.9', '112.4', '11.5', 1, 1, 1, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '', '', 3, 1, 3, 2, 8, 2, 'Qualcomm QCT MSM7227-1 Turbo 800 MHz processor', 3, 'TFT, 16 triệu màu', '320x480 pixels', '3.5 inches', 3, 'Li-ion 1320 mAh ', 0, 0, 15, 0, 0, '2012-03-31 15:18:16', 1, 0, 0),
(79, 'SamSung Torino S6102', 'SamSung-torino-S6102', 'SAmSUng-tOrInO-S6102-(SAmSUng-gAlAxY-Y-dUOS-S6102)-1333183044.jpg', '', 4489000, 1, 2, 1, 2, '', '', '109.0', '60.0', '109.8', '12.0', 1, 1, 1, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '', '', 2, 2, 3, 2, 8, 2, '832 MHz processor', 3, 'TFT, 262.144 màu', '240x320', '3.14 inches', 3, 'Li-ion 1300 mAh ', 0, 0, 9, 0, 0, '2012-04-05 23:27:19', 1, 1, 0),
(80, 'SAMSUNG GALAXY MINI S5570', 'SAmSUng-gAlAxY-mInI-S5570', 'SAmSUng-gAlAxY-mInI-S5570-1333183282.jpg', '', 3679000, 1, 2, 1, 2, '', '', '105.0', '60.8', '110.4', '12.1', 1, 1, 1, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '', '', 2, 1, 2, 1, 8, 1, '600 MHz processor', 3, 'TFT, 262.144 màu', '240x320 pixels', '3.1 inches', 3, 'Li-ion 1200 mAh ', 0, 0, 25, 0, 0, '2012-03-31 15:37:24', 1, 0, 0),
(81, 'Hệ thống siêu thị điện thoại di động', 'he-thong-sieu-thi-dien-thoai-di-dong', 'he-thong-sieu-thi-dien-thoai-di-dong---mobileShop-1336525365.jpg', '', 0, 1, 1, 1, 1, '', '', '0.0', '0.0', '0.0', '0.0', 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', 1, 1, 1, 1, 1, 1, '', 1, '', '', '', 1, '', 0, 0, 0, 0, 0, '2012-05-09 09:02:51', 1, 1, 1),
(82, 'xsd', 'xsd', '', '', 32432432, 1, 1, 1, 1, '', '', '0.0', '0.0', '0.0', '0.0', 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', 1, 1, 1, 1, 1, 1, '', 1, '', '', '', 1, '', 0, 0, 0, 0, 2, '2012-05-22 11:08:53', 1, 0, 1),
(83, 'IPHONE 4S 16GB', 'IPhOnE-4S-16gb', 'IPhOnE-4S-16gb-1337699759.jpg', '', 17499000, 1, 5, 1, 7, '', '', '140.0', '58.6', '115.2', '9.3', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '', '', 3, 1, 1, 7, 1, 1, 'ARM Cortex A9 1GHz dual-core processor', 1, 'LED-backlit IPS TFT 16 triệu màu', '640 x 960 pixels', '3.5 inches', 3, 'Li-ion', 0, 0, 0, 0, 0, '2012-05-22 11:20:13', 1, 1, 0),
(84, 'IPHONE 4S 64GB', 'IPhOnE-4S-64gb', 'IPhOnE-4S-64gb-1337699953.jpg', '', 37990000, 1, 5, 1, 7, '', '', '140.0', '58.6', '115.2', '9.3', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '', '', 4, 1, 1, 9, 1, 1, 'ARM Cortex A9 1GHz dual-core processor', 1, 'LED-backlit IPS TFT 16 triệu màu', '640 x 960 pixels', '3.5 inches', 3, 'Li-ion ', 0, 0, 2, 0, 0, '2012-05-22 11:20:44', 1, 1, 0),
(85, 'iPhone 2G  ', 'iPhone-2g', 'iPhone-2g-1337700430.jpg', '', 6790000, 1, 3, 1, 7, '', '', '116.0', '58.6', '115.2', '10.5', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '', '', 1, 1, 1, 4, 1, 1, 'ARM Cortex A8 1GHz processor', 1, 'LED-backlit IPS TFT 16 triệu màu', '640 x 960 pixels', '3.5 inches', 3, 'Li-ion 1650 mAh ', 0, 0, 1, 0, 0, '2012-05-22 11:28:22', 1, 1, 0),
(86, 'IPHONE 3G', 'IPhOnE-3g', 'IPhOnE-3g-1337700621.jpg', '', 7949000, 1, 3, 1, 7, '', '', '131.0', '58.6', '111.0', '10.5', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '', '', 4, 1, 1, 5, 1, 1, 'ARM Cortex A8 1GHz processor', 1, 'LED-backlit IPS TFT 16 triệu màu', '640 x 960 pixels', '3.5 inches', 3, 'Li-ion 1500 mAh ', 0, 0, 0, 0, 0, '2012-05-22 11:28:41', 1, 0, 0),
(87, 'IPHONE 3GS', 'IPhOnE-3gS', 'IPhOnE-3gS-1337700791.jpg', '', 8690000, 1, 3, 1, 7, '', '', '131.0', '56.8', '105.8', '8.5', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '', '', 4, 1, 1, 5, 1, 1, 'ARM 11 600 MHz processor', 1, 'Super AMOLED Plus 16 triệu màu', '640 x 960 pixels', '3.5 inches', 3, 'Li-ion 1300 mAh ', 0, 0, 1, 0, 0, '2012-05-22 11:31:18', 1, 0, 0),
(88, 'IPHONE 4 CDMA', 'IPhOnE-4-cdmA', 'IPhOnE-4-cdmA-1337700905.jpg', '', 12499000, 1, 4, 1, 7, '', '', '93.0', '66.1', '111.0', '11.0', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '', '', 4, 1, 1, 6, 1, 1, 'ARM Cortex A9 1GHz dual-core processor', 1, 'LED-backlit IPS TFT 16 triệu màu', '640 x 960 pixels', '3.5 inches', 3, 'Li-ion 1500 mAh ', 0, 0, 1, 0, 0, '2012-05-22 11:33:37', 1, 0, 0),
(89, 'IPHONE 4 32GB', 'IPhOnE-4-32gb', 'IPhOnE-4-32gb-1337701034.jpg', '', 12999000, 1, 4, 1, 7, '', '', '131.0', '47.5', '105.8', '10.5', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '', '', 4, 1, 1, 8, 1, 1, 'ARM Cortex A9 1,2GHz dual-core processor', 1, 'LED-backlit IPS TFT 16 triệu màu', '640 x 960 pixels', '3.5 inches', 3, 'Li-ion 1500 mAh ', 0, 0, 1, 0, 0, '2012-05-22 11:35:08', 1, 0, 0),
(90, 'IPHONE 4 8GB', 'IPhOnE-4-8gb', 'IPhOnE-4-8gb-1337701142.jpg', '', 7299000, 1, 4, 1, 7, '', '', '116.0', '47.5', '105.8', '11.0', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '', '', 4, 1, 1, 6, 1, 1, 'ARM 11 600 MHz processor', 1, 'LED-backlit IPS TFT 16 triệu màu', '640 x 960 pixels', '3.5 inches', 3, 'Li-ion 1650 mAh ', 0, 0, 0, 0, 0, '2012-05-22 11:37:25', 1, 0, 0),
(91, 'IPHONE 4 16GB', 'IPhOnE-4-16gb', 'IPhOnE-4-16gb-1337701256.jpg', '', 12790000, 1, 4, 1, 7, '', '', '116.0', '66.1', '115.2', '10.5', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '', '', 4, 1, 1, 7, 1, 1, 'ARM Cortex A9 1,2GHz dual-core processor', 1, 'LED-backlit IPS TFT 16 triệu màu', '640 x 960 pixels', '3.5 inches', 3, 'Li-ion 1500 mAh ', 0, 0, 1, 0, 0, '2012-05-22 11:39:05', 1, 0, 0),
(92, 'LG OPTIMUS 3D P920', 'lg-OPtImUS-3d-P920', 'lg-OPtImUS-3d-P920-1337701602.jpg', '', 10990000, 1, 6, 1, 3, '', '', '168.0', '68.0', '128.8', '11.9', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '', '', 3, 1, 1, 6, 8, 2, 'TI OMAP4 Dual-core 1GHz processor', 3, '3D LCD 16 triệu màu', '480x800', '4.3 inches', 3, 'Li-ion 1500 mAh ', 0, 0, 0, 0, 0, '2012-05-22 11:43:08', 1, 0, 0),
(93, 'LG PRADA 3.0', 'lg-PrAdA-3.0', 'lg-PrAdA-3.0-1337701744.jpg', '', 11989000, 1, 6, 1, 3, '', '', '131.0', '58.6', '105.8', '11.0', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '', '', 3, 1, 1, 6, 8, 3, 'ARM Cortex A9 1GHz dual-core processor', 3, 'IPS+ LCD, 16 triệu màu', '480x800', '3.5 inches', 3, 'Li-ion 1500 mAh ', 0, 0, 0, 0, 0, '2012-05-22 11:46:46', 1, 0, 0),
(94, 'LG OPTIMUS 3D MAX P725', 'lg-OPtImUS-3d-mAx-P725', 'lg-OPtImUS-3d-mAx-P725-1337786073.jpg', '', 11799000, 1, 6, 1, 3, '', '', '131.0', '56.8', '105.8', '10.5', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '', '', 4, 1, 1, 6, 8, 3, 'TI OMAP 4430, Dual-core 1.2 GHz Cortex-A9', 3, '3D LCD 16 triệu màu', '480x800', '4.3 inches', 3, 'Li-ion 1000 mAh ', 0, 0, 0, 0, 0, '2012-05-23 11:12:04', 1, 0, 0),
(95, 'LG OPTIMUS 2X P990', 'lg-OPtImUS-2x-P990', 'lg-OPtImUS-2x-P990-1337786479.jpg', '', 9899000, 1, 6, 1, 3, '', '', '131.0', '66.1', '115.2', '10.5', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '', '', 4, 1, 1, 5, 8, 3, '1GHz processor', 3, 'TFT, 16 triệu màu', '480x800', '3.2 inches', 3, 'Li-ion 1500 mAh ', 0, 0, 0, 0, 0, '2012-05-23 11:14:35', 1, 0, 0),
(96, 'LG OPTIMUS L7 P705', 'lg-OPtImUS-l7-P705', 'lg-OPtImUS-l7-P705-1337786557.jpg', '', 7799000, 1, 6, 1, 3, '', '', '131.0', '56.8', '105.8', '10.5', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '', '', 3, 1, 1, 5, 8, 3, 'ARM 11 434 MHz processor', 3, 'TFT, 262.144 màu', '480x800', '3.5 inches', 3, 'Li-ion 1500 mAh ', 0, 0, 0, 0, 0, '2012-05-23 11:21:22', 1, 0, 0),
(97, 'LG OPTIMUS BLACK P970', 'lg-OPtImUS-blAck-P970', 'lg-OPtImUS-blAck-P970-1337786656.jpg', '', 7299000, 1, 6, 1, 3, '', '', '131.0', '66.1', '115.2', '11.0', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '', '', 4, 1, 1, 6, 7, 3, 'ARM Cortex A9 1,2GHz dual-core processor', 3, 'LED-backlit IPS TFT 16 triệu màu', '480x800', '3.5 inches', 3, 'Li-ion 1500 mAh ', 0, 0, 0, 0, 0, '2012-05-23 11:22:39', 1, 0, 0),
(98, 'LG OPTIMUS SOL E730', 'lg-OPtImUS-SOl-E730', 'lg-OPtImUS-SOl-E730-1337787012.jpg', '', 6799000, 1, 6, 1, 3, '', '', '100.0', '48.4', '125.3', '11.0', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '', '', 4, 1, 1, 3, 5, 4, 'ARM Cortex A8 1GHz processor', 3, 'TFT, 16 triệu màu', '480x800', '3.2 inches', 3, 'Li-ion 1650 mAh ', 0, 0, 0, 0, 0, '2012-05-23 11:24:18', 1, 0, 0),
(99, 'LG OPTIMUS HUB E510', 'lg-OPtImUS-hUb-E510', 'lg-OPtImUS-hUb-E510-1337787340.jpg', '', 5299000, 1, 6, 1, 3, '', '', '116.0', '66.1', '105.8', '10.5', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '', '', 3, 1, 1, 2, 6, 4, 'ARM 11 600 MHz processor', 3, 'TFT, 16 triệu màu', '480x800', '3.5 inches', 3, 'Li-ion 1000 mAh ', 0, 0, 0, 0, 0, '2012-05-23 11:30:16', 1, 0, 0),
(100, 'LG OPTIMUS ONE P500', 'lg-OPtImUS-OnE-P500', 'lg-OPtImUS-OnE-P500-1337787454.jpg', '', 5740000, 1, 6, 1, 3, '', '', '135.0', '47.5', '125.3', '9.3', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '', '', 4, 1, 1, 2, 4, 4, 'Qualcomm MSM 7227 600 MHz processor', 3, 'LED-backlit IPS TFT 16 triệu màu', '360x640', '3.2 inches', 3, 'Li-ion 1500 mAh ', 0, 0, 1, 0, 0, '2012-05-23 11:35:44', 1, 0, 0),
(101, 'ONY ERICSSON LT26I', 'OnY-ErIcSSOn-lt26I', 'OnY-ErIcSSOn-lt26I-1337787711.jpg', '', 13990000, 1, 7, 1, 5, '', '', '93.0', '47.5', '106.2', '8.5', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '', '', 4, 1, 1, 8, 1, 3, 'Qualcomm MSM 8260 Snapdragon, 1.5 GHz dual-core processor', 3, 'LED-backlit IPS TFT 16 triệu màu', '480x800', '4.3 inches', 3, 'Li-ion 1650 mAh ', 0, 0, 2, 0, 0, '2012-05-23 11:39:44', 1, 0, 0),
(102, 'SONY ERICSSON LT26I', 'SOnY-ErIcSSOn-lt26I', 'SOnY-ErIcSSOn-lt26I-1338026735.jpg', '', 13990000, 1, 7, 1, 5, '', '', '131.0', '47.5', '105.8', '11.0', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '', '', 3, 1, 1, 8, 1, 3, 'Qualcomm MSM 8260 Snapdragon, 1.5 GHz dual-core processor', 3, 'LED-backlit IPS TFT 16 triệu màu', '720 x 1280', '4.3 inches', 3, 'Li-ion 1650 mAh ', 0, 0, 2, 0, 0, '2012-05-26 06:02:34', 1, 0, 0),
(103, 'SONY ERICSSON LT22I', 'SOnY-ErIcSSOn-lt22I', 'SOnY-ErIcSSOn-lt22I-1338026864.jpg', '', 11990000, 1, 7, 1, 5, '', '', '100.0', '56.8', '105.8', '11.0', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '', '', 4, 1, 1, 7, 1, 3, 'Dual-core 1 GHz Cortex-A9', 3, 'LED-backlit IPS TFT 16 triệu màu', '540 x 960', ' 4.0 inches', 3, 'Li-ion 1500 mAh ', 0, 0, 0, 0, 0, '2012-05-26 06:05:37', 1, 0, 0),
(104, 'SONY ERICSSON XPERIA ARC S LT18I', 'SOnY-ErIcSSOn-xPErIA-Arc-S-lt18I', 'SOnY-ErIcSSOn-xPErIA-Arc-S-lt18I-1338026974.jpg', '', 10490000, 1, 7, 1, 5, '', '', '131.0', '48.4', '115.2', '11.0', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '', '', 4, 1, 1, 3, 8, 2, '1.4 GHz Scorpion processor, Adreno 205 GPU, Qualcomm MSM8255T Snapdragon', 3, 'LED-backlit IPS TFT 16 triệu màu', '480x800', '4.3 inches', 3, 'Li-ion 1300 mAh ', 0, 0, 0, 0, 0, '2012-05-26 06:07:46', 1, 0, 0),
(105, 'SONY ERICSSON XPERIA ARC LT15I', 'SOnY-ErIcSSOn-xPErIA-Arc-lt15I', 'SOnY-ErIcSSOn-xPErIA-Arc-lt15I-1338027106.jpg', '', 9990000, 1, 7, 1, 5, '', '', '131.0', '56.8', '115.2', '11.0', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '', '', 4, 1, 1, 3, 7, 2, 'ARM 11 600 MHz processor', 3, 'LED-backlit IPS TFT 16 triệu màu', '360x640', '3.2 inches', 3, 'Li-ion 1300 mAh ', 0, 0, 6, 0, 0, '2012-05-26 06:09:36', 1, 0, 0),
(106, 'SONY ERICSSON XPERIA PRO MK16I', 'SOnY-ErIcSSOn-xPErIA-PrO-mk16I', 'SOnY-ErIcSSOn-xPErIA-PrO-mk16I-1338027204.jpg', '', 8990000, 1, 7, 1, 5, '', '', '116.0', '56.8', '111.0', '11.0', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '', '', 4, 1, 1, 3, 7, 2, 'ARM Cortex A9 1GHz dual-core processor', 3, 'LED-backlit IPS TFT 16 triệu màu', '360x640', '3.5 inches', 3, 'Li-ion 1500 mAh ', 0, 0, 4, 0, 0, '2012-05-26 06:11:48', 1, 0, 0),
(107, 'SONY ERICSSON MT27I', 'SOnY-ErIcSSOn-mt27I', 'SOnY-ErIcSSOn-mt27I-1338027348.jpg', '', 8990000, 1, 7, 1, 5, '', '', '131.0', '47.5', '106.2', '10.5', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '', '', 3, 1, 1, 3, 7, 2, 'ARM 11 434 MHz processor', 3, 'TFT, 16 triệu màu', '360x640', '3.5 inches', 3, 'Li-ion 1300 mAh ', 0, 0, 2, 0, 0, '2012-05-26 06:13:41', 1, 0, 0),
(108, 'SONY ERICSSON ST25I', 'SOnY-ErIcSSOn-St25I', 'SOnY-ErIcSSOn-St25I-1338027451.jpg', '', 7490000, 1, 7, 1, 5, '', '', '93.0', '48.4', '106.2', '9.3', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '', '', 3, 1, 1, 4, 1, 3, '1GHz processor', 3, 'LED-backlit IPS TFT 16 triệu màu', '480x800', '4.3 inches', 3, 'Li-ion 1000 mAh ', 0, 0, 0, 0, 0, '2012-05-26 06:15:50', 1, 0, 0),
(109, 'BLACKBERRY BOLD TOUCH 9900', 'blAckbErrY-bOld-tOUch-9900', 'blAckbErrY-bOld-tOUch-9900-1338085817.jpg', '', 14690000, 1, 11, 1, 11, '', '', '130.0', '66.0', '115.0', '10.5', 1, 1, 1, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 'Không giới hạn', 'SMS/MMS', 'Có, SMTP/IMAP4/POP3/Push Mail', 3, 1, 3, 6, 8, 3, '1.2 GHz processor', 4, 'TFT, 16 triệu màu', '640 x 480 pixels', '2.8 inches', 1, 'Pin chuẩn Li-Ion 123', 56, 0, 4, 0, 0, '2012-05-26 22:23:46', 1, 0, 0),
(110, 'BLACKBERRY TORCH 9800', 'blAckbErrY-tOrch-9800', 'blAckbErrY-tOrch-9800-1338086263.jpg', '', 14090000, 1, 11, 1, 11, '', '', '161.0', '62.0', '111.0', '14.6', 1, 1, 3, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 'Không giới hạn', 'SMS/MMS', 'Có, SMTP/IMAP4/POP3/Push Mail', 3, 1, 3, 5, 8, 2, '624 MHz processor', 4, 'TFT, 16 triệu màu', '360 x 480 pixels', '3.2 inches', 3, ' Li-Ion 1230 mAh ', 45, 0, 0, 0, 0, '2012-05-26 22:30:20', 1, 0, 0),
(111, 'BlackBerry Curve 9300 ', 'blackberry-curve-9300', 'blackberry-curve-9300-1338086500.jpg', '', 4840000, 1, 11, 1, 11, '', '', '104.0', '60.0', '109.0', '13.9', 1, 1, 1, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 'Không giới hạn', 'SMS/MMS', 'Có, SMTP/IMAP4/POP3/Push Mail', 3, 1, 3, 2, 8, 2, '', 4, 'TFT, 65.536 màu', '320 x 240 Pixels', '2.4 inches', 1, ' Li-Ion 1150 mAh ', 65, 0, 30, 0, 0, '2012-05-26 22:37:45', 1, 0, 0),
(112, 'BLACKBERRY BOLD 9790', 'blAckbErrY-bOld-9790', 'blAckbErrY-bOld-9790-1338086690.jpg', '', 11499000, 1, 11, 1, 11, '', '', '107.0', '60.0', '110.0', '11.4', 1, 1, 1, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 'Không giới hạn', 'SMS/MMS', 'Có, SMTP/IMAP4/POP3/Push Mail', 3, 1, 3, 6, 8, 3, 'Marvel Tavor MG1 1 GHz processor', 4, 'TFT, 16 triệu màu', '480 x 360 Pixels', '2.4 inches', 3, 'Pin chuẩn Li-Ion 123', 56, 0, 3, 0, 0, '2012-05-26 22:41:43', 1, 0, 0),
(113, 'BLACKBERRY CURVE 9360', 'blAckbErrY-cUrvE-9360', 'blAckbErrY-cUrvE-9360-1338086904.jpg', '', 7130000, 1, 11, 1, 11, '', '', '99.0', '60.0', '109.0', '11.0', 1, 1, 1, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 'Không giới hạn', 'SMS/MMS', 'Có, SMTP/IMAP4/POP3/Push Mail', 3, 1, 3, 2, 8, 2, '800MHz processor', 4, 'TFT, 16 triệu màu', '480 x 360 Pixels', '2.4 inches', 1, 'Pin chuẩn Li-Ion 100', 60, 0, 0, 0, 0, '2012-05-26 22:44:53', 1, 0, 0),
(114, 'MOBELL M770', 'mObEll-m770', 'mObEll-m770-1338087109.jpg', '', 1789000, 1, 13, 1, 11, '', '', '0.0', '56.5', '110.0', '12.0', 1, 1, 1, 0, 1, 0, 1, 1, 0, 0, 0, 1, 0, 1, '1000 số', 'SMS/MMS', '', 2, 2, 1, 2, 6, 1, '', 1, 'TFT, 262.144 màu', '240 x 400 Pixels', '3.2 inches', 2, ' Li-Ion 1000 mAh ', 47, 0, 2, 0, 0, '2012-05-26 22:48:28', 1, 0, 0),
(115, 'MOBELL MW660', 'mObEll-mW660', 'mObEll-mW660-1338087287.jpg', '', 1389000, 1, 13, 1, 11, '', '', '0.0', '0.0', '0.0', '0.0', 1, 1, 1, 0, 1, 0, 1, 1, 0, 0, 0, 1, 0, 1, '1000 số', 'SMS/MMS', '', 2, 2, 2, 1, 6, 1, '', 1, 'TFT, 262.144 màu', '240 x 320 Pixels', '2.4 inches', 1, 'Pin chuẩn Li-Ion 100', 46, 0, 6, 0, 0, '2012-05-26 22:51:51', 1, 0, 0),
(116, 'MOBELL M730', 'mObEll-m730', 'mObEll-m730-1338087419.jpg', '', 1250000, 1, 13, 1, 11, '', '', '0.0', '56.0', '106.0', '12.5', 1, 1, 1, 0, 1, 0, 1, 1, 0, 0, 0, 1, 0, 1, '1000 số', 'SMS/MMS', '', 2, 2, 2, 1, 6, 1, '', 1, 'TFT, 65.536 màu', '240 x 400 Pixels', '2.8 inches', 2, 'Pin chuẩn Li-Ion 140', 48, 0, 0, 1, 0, '2017-02-15 03:55:21', 1, 1, 0),
(117, 'MOBELL M760', 'mObEll-m760', 'mObEll-m760-1338087596.jpg', '', 1490000, 1, 13, 1, 11, '', '', '118.0', '59.0', '107.0', '13.4', 1, 1, 1, 0, 1, 0, 1, 1, 0, 0, 0, 1, 0, 1, '2000 số', 'SMS/MMS', '', 2, 2, 2, 1, 6, 1, '', 1, 'TFT, 65.536 màu', '320 x 480 Pixels', '3.2 inches', 2, 'Pin chuẩn Li-Ion 100', 64, 0, 10, 0, 0, '2012-05-26 22:57:02', 1, 0, 0),
(118, 'MOBELL M116', 'mObEll-m116', 'mObEll-m116-1338087721.jpg', '', 1090000, 1, 13, 1, 11, '', '', '0.0', '0.0', '0.0', '0.0', 1, 1, 1, 0, 0, 0, 1, 1, 0, 0, 0, 1, 0, 1, '1000 số', 'SMS/MMS', '', 2, 2, 2, 1, 6, 1, '', 1, 'TFT, 65.536 màu', '176 x 220 Pixels', '2.0 inches', 1, 'Pin chuẩn Li-Ion 132', 56, 0, 4, 0, 0, '2012-05-26 22:59:59', 1, 0, 0),
(119, 'test IPHONE 7', 'test-IPhOnE-7', 'test-IPhOnE-7-1487127143.jpg', '', 2147483647, 1, 3, 1, 7, '', '<p>\r\n	gagsd</p>\r\n', '252.0', '1251.0', '252.0', '25.0', 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', 4, 3, 4, 8, 5, 5, '', 5, '', '', '', 1, '222', 0, 0, 3, 0, 2, '2017-02-15 03:58:56', 1, 1, 0);

-- --------------------------------------------------------

--
-- テーブルの構造 `product_camera`
--

CREATE TABLE `product_camera` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `product_camera`
--

INSERT INTO `product_camera` (`id`, `title`, `description`) VALUES
(1, 'No', ''),
(2, '2.0 Mpx', ''),
(3, '5.0 Mpx', ''),
(4, '7.2 Mpx', '');

-- --------------------------------------------------------

--
-- テーブルの構造 `product_connection`
--

CREATE TABLE `product_connection` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `product_connection`
--

INSERT INTO `product_connection` (`id`, `title`) VALUES
(1, '0'),
(2, '2G'),
(3, '3G'),
(4, '4G');

-- --------------------------------------------------------

--
-- テーブルの構造 `product_currency`
--

CREATE TABLE `product_currency` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `code` varchar(25) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `product_currency`
--

INSERT INTO `product_currency` (`id`, `name`, `code`) VALUES
(1, 'Đồng', 'VND'),
(2, 'dollar Mỹ', 'USD'),
(3, 'Afghanistan Afghani', 'AFA'),
(4, 'Albanian Lek', 'ALL'),
(5, 'Netherlands Antillian Guilder', 'ANG'),
(6, 'Angolan Kwanza', 'AOK'),
(7, 'Argentine Peso', 'ARS'),
(9, 'Australian Dollar', 'AUD'),
(10, 'Aruban Florin', 'AWG'),
(11, 'Barbados Dollar', 'BBD'),
(12, 'Bangladeshi Taka', 'BDT'),
(14, 'Bulgarian Lev', 'BGL'),
(15, 'Bahraini Dinar', 'BHD'),
(16, 'Burundi Franc', 'BIF'),
(17, 'Bermudian Dollar', 'BMD'),
(18, 'Brunei Dollar', 'BND'),
(19, 'Bolivian Boliviano', 'BOB'),
(20, 'Brazilian Real', 'BRL'),
(21, 'Bahamian Dollar', 'BSD'),
(22, 'Bhutan Ngultrum', 'BTN'),
(23, 'Burma Kyat', 'BUK'),
(24, 'Botswanian Pula', 'BWP'),
(25, 'Belize Dollar', 'BZD'),
(26, 'Canadian Dollar', 'CAD'),
(27, 'Swiss Franc', 'CHF'),
(28, 'Chilean Unidades de Fomento', 'CLF'),
(29, 'Chilean Peso', 'CLP'),
(30, 'Yuan (Chinese) Renminbi', 'CNY'),
(31, 'Colombian Peso', 'COP'),
(32, 'Costa Rican Colon', 'CRC'),
(33, 'Czech Koruna', 'CZK'),
(34, 'Cuban Peso', 'CUP'),
(35, 'Cape Verde Escudo', 'CVE'),
(36, 'Cyprus Pound', 'CYP'),
(40, 'Danish Krone', 'DKK'),
(41, 'Dominican Peso', 'DOP'),
(42, 'Algerian Dinar', 'DZD'),
(43, 'Ecuador Sucre', 'ECS'),
(44, 'Egyptian Pound', 'EGP'),
(46, 'Ethiopian Birr', 'ETB'),
(47, 'Euro', 'EUR'),
(49, 'Fiji Dollar', 'FJD'),
(50, 'Falkland Islands Pound', 'FKP'),
(52, 'British Pound', 'GBP'),
(53, 'Ghanaian Cedi', 'GHC'),
(54, 'Gibraltar Pound', 'GIP'),
(55, 'Gambian Dalasi', 'GMD'),
(56, 'Guinea Franc', 'GNF'),
(58, 'Guatemalan Quetzal', 'GTQ'),
(59, 'Guinea-Bissau Peso', 'GWP'),
(60, 'Guyanan Dollar', 'GYD'),
(61, 'Hong Kong Dollar', 'HKD'),
(62, 'Honduran Lempira', 'HNL'),
(63, 'Haitian Gourde', 'HTG'),
(64, 'Hungarian Forint', 'HUF'),
(65, 'Indonesian Rupiah', 'IDR'),
(66, 'Irish Punt', 'IEP'),
(67, 'Israeli Shekel', 'ILS'),
(68, 'Indian Rupee', 'INR'),
(69, 'Iraqi Dinar', 'IQD'),
(70, 'Iranian Rial', 'IRR'),
(73, 'Jamaican Dollar', 'JMD'),
(74, 'Jordanian Dinar', 'JOD'),
(75, 'Japanese Yen', 'JPY'),
(76, 'Kenyan Shilling', 'KES'),
(77, 'Kampuchean (Cambodian) Riel', 'KHR'),
(78, 'Comoros Franc', 'KMF'),
(79, 'North Korean Won', 'KPW'),
(80, '(South) Korean Won', 'KRW'),
(81, 'Kuwaiti Dinar', 'KWD'),
(82, 'Cayman Islands Dollar', 'KYD'),
(83, 'Lao Kip', 'LAK'),
(84, 'Lebanese Pound', 'LBP'),
(85, 'Sri Lanka Rupee', 'LKR'),
(86, 'Liberian Dollar', 'LRD'),
(87, 'Lesotho Loti', 'LSL'),
(89, 'Libyan Dinar', 'LYD'),
(90, 'Moroccan Dirham', 'MAD'),
(91, 'Malagasy Franc', 'MGF'),
(92, 'Mongolian Tugrik', 'MNT'),
(93, 'Macau Pataca', 'MOP'),
(94, 'Mauritanian Ouguiya', 'MRO'),
(95, 'Maltese Lira', 'MTL'),
(96, 'Mauritius Rupee', 'MUR'),
(97, 'Maldive Rufiyaa', 'MVR'),
(98, 'Malawi Kwacha', 'MWK'),
(99, 'Mexican Peso', 'MXP'),
(100, 'Malaysian Ringgit', 'MYR'),
(101, 'Mozambique Metical', 'MZM'),
(102, 'Nigerian Naira', 'NGN'),
(103, 'Nicaraguan Cordoba', 'NIC'),
(105, 'Norwegian Kroner', 'NOK'),
(106, 'Nepalese Rupee', 'NPR'),
(107, 'New Zealand Dollar', 'NZD'),
(108, 'Omani Rial', 'OMR'),
(109, 'Panamanian Balboa', 'PAB'),
(110, 'Peruvian Nuevo Sol', 'PEN'),
(111, 'Papua New Guinea Kina', 'PGK'),
(112, 'Philippine Peso', 'PHP'),
(113, 'Pakistan Rupee', 'PKR'),
(114, 'Polish Złoty', 'PLN'),
(116, 'Paraguay Guarani', 'PYG'),
(117, 'Qatari Rial', 'QAR'),
(118, 'Romanian Leu', 'RON'),
(119, 'Rwanda Franc', 'RWF'),
(120, 'Saudi Arabian Riyal', 'SAR'),
(121, 'Solomon Islands Dollar', 'SBD'),
(122, 'Seychelles Rupee', 'SCR'),
(123, 'Sudanese Pound', 'SDP'),
(124, 'Swedish Krona', 'SEK'),
(125, 'Singapore Dollar', 'SGD'),
(126, 'St. Helena Pound', 'SHP'),
(127, 'Sierra Leone Leone', 'SLL'),
(128, 'Somali Shilling', 'SOS'),
(129, 'Suriname Guilder', 'SRG'),
(130, 'Sao Tome and Principe Dobra', 'STD'),
(131, 'Russian Ruble', 'RUB'),
(132, 'El Salvador Colon', 'SVC'),
(133, 'Syrian Potmd', 'SYP'),
(134, 'Swaziland Lilangeni', 'SZL'),
(135, 'Thai Bath', 'THB'),
(136, 'Tunisian Dinar', 'TND'),
(137, 'Tongan Pa''anga', 'TOP'),
(138, 'East Timor Escudo', 'TPE'),
(139, 'Turkish Lira', 'TRY'),
(140, 'Trinidad and Tobago Dollar', 'TTD'),
(141, 'Taiwan Dollar', 'TWD'),
(142, 'Tanzanian Shilling', 'TZS'),
(143, 'Uganda Shilling', 'UGS'),
(144, 'US Dollar', 'USD'),
(145, 'Uruguayan Peso', 'UYP'),
(146, 'Venezualan Bolivar', 'VEB'),
(147, 'Vietnamese Dong', 'VND'),
(148, 'Vanuatu Vatu', 'VUV'),
(149, 'Samoan Tala', 'WST'),
(150, 'Democratic Yemeni Dinar', 'YDD'),
(151, 'Yemeni Rial', 'YER'),
(152, 'Dinar', 'RSD'),
(153, 'South African Rand', 'ZAR'),
(154, 'Zambian Kwacha', 'ZMK'),
(155, 'Zaire Zaire', 'ZRZ'),
(156, 'Zimbabwe Dollar', 'ZWD'),
(157, 'Slovak Koruna', 'SKK'),
(158, 'Armenian Dram', 'AMD');

-- --------------------------------------------------------

--
-- テーブルの構造 `product_discount`
--

CREATE TABLE `product_discount` (
  `id` int(11) UNSIGNED NOT NULL,
  `percent` decimal(10,1) NOT NULL,
  `start_date` int(11) DEFAULT NULL,
  `end_date` int(11) DEFAULT NULL,
  `description` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `product_discount`
--

INSERT INTO `product_discount` (`id`, `percent`, `start_date`, `end_date`, `description`) VALUES
(1, '0.0', 0, 0, 'Không áp dụng khuyến mãi'),
(2, '10.0', 0, 0, 'Khuyến mãi dịp năm học mới'),
(3, '50.0', 0, 0, 'Khuyến mãi dịp sinh nhật công ty');

-- --------------------------------------------------------

--
-- テーブルの構造 `product_display_touch`
--

CREATE TABLE `product_display_touch` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `product_display_touch`
--

INSERT INTO `product_display_touch` (`id`, `title`) VALUES
(1, 'No'),
(2, 'Cảm ứng điện trở,đơn điểm'),
(3, 'Cảm ứng điện dung,đa điểm');

-- --------------------------------------------------------

--
-- テーブルの構造 `product_language`
--

CREATE TABLE `product_language` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `product_language`
--

INSERT INTO `product_language` (`id`, `title`) VALUES
(1, 'Tiếng Việt'),
(2, 'Tiếng Anh'),
(3, 'Tiếng Trung Quốc'),
(4, 'Tiếng Hàn'),
(5, 'Tiếng Nhật'),
(6, 'Tiếng Pháp');

-- --------------------------------------------------------

--
-- テーブルの構造 `product_memory`
--

CREATE TABLE `product_memory` (
  `id` int(11) UNSIGNED NOT NULL,
  `value` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `product_memory`
--

INSERT INTO `product_memory` (`id`, `value`) VALUES
(1, '0'),
(2, '512M'),
(3, '1G'),
(4, '2G'),
(5, '4G'),
(6, '8G'),
(7, '16G'),
(8, '32G'),
(9, '64G'),
(10, '128G');

-- --------------------------------------------------------

--
-- テーブルの構造 `product_os`
--

CREATE TABLE `product_os` (
  `id` int(11) NOT NULL,
  `title` varchar(50) DEFAULT 'none'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `product_os`
--

INSERT INTO `product_os` (`id`, `title`) VALUES
(1, 'Không'),
(2, 'symbian'),
(3, 'android'),
(4, 'blackberry'),
(5, 'ios'),
(6, 'webos'),
(7, 'bada'),
(8, 'meego'),
(9, 'windows mobile'),
(10, 'windows phone');

-- --------------------------------------------------------

--
-- テーブルの構造 `product_simcard`
--

CREATE TABLE `product_simcard` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `product_simcard`
--

INSERT INTO `product_simcard` (`id`, `title`, `description`) VALUES
(1, 'Một sim một sóng', ''),
(2, 'Hai sim một sóng', ''),
(3, 'Ba sim ba sóng', ''),
(4, 'Bốn sim bốn sóng', '');

-- --------------------------------------------------------

--
-- テーブルの構造 `product_style`
--

CREATE TABLE `product_style` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `product_style`
--

INSERT INTO `product_style` (`id`, `title`, `description`) VALUES
(1, 'Thanh', ''),
(2, 'Nắp gập', ''),
(3, 'Nắp trượt', '');

-- --------------------------------------------------------

--
-- テーブルの構造 `rs_product_language`
--

CREATE TABLE `rs_product_language` (
  `product_id` int(11) UNSIGNED NOT NULL,
  `language_id` int(11) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `rs_product_language`
--

INSERT INTO `rs_product_language` (`product_id`, `language_id`) VALUES
(2, 1),
(2, 2),
(2, 4),
(17, 1),
(17, 2);

-- --------------------------------------------------------

--
-- テーブルの構造 `rs_product_mobile_network`
--

CREATE TABLE `rs_product_mobile_network` (
  `product_id` int(11) NOT NULL,
  `mobile_network_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `rs_product_mobile_network`
--

INSERT INTO `rs_product_mobile_network` (`product_id`, `mobile_network_id`) VALUES
(1, 1),
(1, 2);

-- --------------------------------------------------------

--
-- テーブルの構造 `sections`
--

CREATE TABLE `sections` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `alias` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `published` tinyint(1) NOT NULL,
  `ordering` int(11) NOT NULL,
  `access` int(11) NOT NULL,
  `type` varchar(50) NOT NULL,
  `params` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `sections`
--

INSERT INTO `sections` (`id`, `title`, `alias`, `image`, `description`, `published`, `ordering`, `access`, `type`, `params`) VALUES
(1, 'Danh mục điện thoại', 'danh-muc-dien-thoai', 'danh-muc-dien-thoai-1330329630.jpg', '', 1, 1, 0, 'product', ''),
(2, 'Phụ kiện ĐTDĐ', 'phu-kien-dtdd', 'Phu-kien-dtdd-1330329651.jpg', '', 1, 2, 0, 'accessory', ''),
(3, 'Tin tức', 'tin-tuc', 'tin-tuc-1487127989.jpg', '', 1, 2, 0, 'news', ''),
(4, 'uncategoriesed', 'uncategoriesed', 'uncategoriesed-1487127995.jpg', '', 1, 0, 0, 'uncategoriesed', '');

-- --------------------------------------------------------

--
-- テーブルの構造 `sessions`
--

CREATE TABLE `sessions` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip` varchar(50) NOT NULL,
  `time` int(11) NOT NULL,
  `token` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL,
  `client` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `sessions`
--

INSERT INTO `sessions` (`id`, `ip`, `time`, `token`, `user_id`, `client`) VALUES
(18, '127.0.0.1', 1337788957, '5bebd340c511be08c1e9e6536e2d36f4', 36, 0),
(45, '127.0.0.1', 1338341680, 'fd278a8f5571d3db556bd83198beb09a', 31, 0),
(64, '::1', 1489026164, '042b1cd756a6b6b7c3517cd63eea2325', 1, 0),
(63, '::1', 1487128085, '55603a5f239e435c642244be3e891b85', 1, 0);

-- --------------------------------------------------------

--
-- テーブルの構造 `support_online`
--

CREATE TABLE `support_online` (
  `id` int(11) UNSIGNED NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `nickname` varchar(255) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `description` text NOT NULL,
  `published` tinyint(1) NOT NULL,
  `ordering` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- テーブルの構造 `templates`
--

CREATE TABLE `templates` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` varchar(100) NOT NULL,
  `default` tinyint(1) NOT NULL DEFAULT '0',
  `description` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `templates`
--

INSERT INTO `templates` (`id`, `title`, `default`, `description`) VALUES
(3, 'mobileshop', 1, ''),
(8, 'webshop', 0, '');

-- --------------------------------------------------------

--
-- テーブルの構造 `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `group_id` int(11) NOT NULL,
  `block` tinyint(100) NOT NULL,
  `actived` tinyint(1) NOT NULL,
  `registerDate` datetime NOT NULL,
  `lastvisitDate` datetime NOT NULL,
  `hash` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `group_id`, `block`, `actived`, `registerDate`, `lastvisitDate`, `hash`) VALUES
(1, 'admin', '96e79218965eb72c92a549dd5a330112', 'sfsfffffdfds@gmail.com', 2, 0, 1, '2012-02-01 22:00:14', '2017-02-15 04:08:04', ''),
(36, 'traithaibinh', '8004a28262a8a0931005a72dc45fc403', 'traithaibinh@gmail.com', 1, 0, 1, '2012-04-20 17:47:19', '2012-05-17 19:05:35', ''),
(37, 'tuanhung', '96e79218965eb72c92a549dd5a330112', 'tuanhung@mgail.com', 1, 0, 1, '2012-05-16 09:13:06', '2012-05-16 11:24:07', ''),
(31, 'trieugiathang', '8004a28262a8a0931005a72dc45fc403', 'trieugiathang@gmail.com', 1, 0, 1, '2012-04-04 16:28:05', '2012-05-30 09:35:44', '');

-- --------------------------------------------------------

--
-- テーブルの構造 `user_info`
--

CREATE TABLE `user_info` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `gender` tinyint(1) NOT NULL,
  `birthday` date NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `ssn` int(11) NOT NULL,
  `occupation` varchar(100) NOT NULL,
  `company` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `user_info`
--

INSERT INTO `user_info` (`id`, `user_id`, `firstname`, `lastname`, `gender`, `birthday`, `mobile`, `ssn`, `occupation`, `company`, `address`, `city`, `country`) VALUES
(1, 1, 'Triệu Gia', 'Thắng', 1, '1991-06-17', '0983940965', 15180991, 'Sinh viên', 'hcmutrans', '532D XVNT,P.25,quận Bình Thạnh', 'TpHCM', 'Việt Nam'),
(2, 31, 'Triệu', 'Gia Thắng', 1, '1991-06-17', '0985050907', 151809941, 'Đánh giầy,bán báo', 'Ve chai', 'Thủ Đức', 'TpHCM', 'Việt Nam'),
(32, 36, 'fadf', 'dsafds', 1, '0000-00-00', '2423', 2423, 'sfsdf', 'sfsd', 'fsdfsd', 'fsdfsd', 'fsd');

-- --------------------------------------------------------

--
-- テーブルの構造 `weblinks`
--

CREATE TABLE `weblinks` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `published` tinyint(1) NOT NULL,
  `ordering` int(11) NOT NULL,
  `description` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `components`
--
ALTER TABLE `components`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manufacturer`
--
ALTER TABLE `manufacturer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu_type`
--
ALTER TABLE `menu_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mobile_network`
--
ALTER TABLE `mobile_network`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `modules`
--
ALTER TABLE `modules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_payment`
--
ALTER TABLE `order_payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `polls`
--
ALTER TABLE `polls`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `poll_option`
--
ALTER TABLE `poll_option`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pollid` (`poll_id`,`option`(1));

--
-- Indexes for table `poll_vote`
--
ALTER TABLE `poll_vote`
  ADD PRIMARY KEY (`id`),
  ADD KEY `poll_id` (`ip`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_camera`
--
ALTER TABLE `product_camera`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_connection`
--
ALTER TABLE `product_connection`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_currency`
--
ALTER TABLE `product_currency`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_discount`
--
ALTER TABLE `product_discount`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_display_touch`
--
ALTER TABLE `product_display_touch`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_language`
--
ALTER TABLE `product_language`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_memory`
--
ALTER TABLE `product_memory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_os`
--
ALTER TABLE `product_os`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_simcard`
--
ALTER TABLE `product_simcard`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_style`
--
ALTER TABLE `product_style`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rs_product_language`
--
ALTER TABLE `rs_product_language`
  ADD PRIMARY KEY (`product_id`,`language_id`);

--
-- Indexes for table `sections`
--
ALTER TABLE `sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `support_online`
--
ALTER TABLE `support_online`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `templates`
--
ALTER TABLE `templates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `weblinks`
--
ALTER TABLE `weblinks`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `components`
--
ALTER TABLE `components`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `manufacturer`
--
ALTER TABLE `manufacturer`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `menu_type`
--
ALTER TABLE `menu_type`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `mobile_network`
--
ALTER TABLE `mobile_network`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `modules`
--
ALTER TABLE `modules`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `order_payment`
--
ALTER TABLE `order_payment`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `polls`
--
ALTER TABLE `polls`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `poll_option`
--
ALTER TABLE `poll_option`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `poll_vote`
--
ALTER TABLE `poll_vote`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=120;
--
-- AUTO_INCREMENT for table `product_camera`
--
ALTER TABLE `product_camera`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `product_connection`
--
ALTER TABLE `product_connection`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `product_currency`
--
ALTER TABLE `product_currency`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=159;
--
-- AUTO_INCREMENT for table `product_discount`
--
ALTER TABLE `product_discount`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `product_display_touch`
--
ALTER TABLE `product_display_touch`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `product_language`
--
ALTER TABLE `product_language`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `product_memory`
--
ALTER TABLE `product_memory`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `product_os`
--
ALTER TABLE `product_os`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `product_simcard`
--
ALTER TABLE `product_simcard`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `product_style`
--
ALTER TABLE `product_style`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `sections`
--
ALTER TABLE `sections`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `sessions`
--
ALTER TABLE `sessions`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;
--
-- AUTO_INCREMENT for table `support_online`
--
ALTER TABLE `support_online`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `templates`
--
ALTER TABLE `templates`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `weblinks`
--
ALTER TABLE `weblinks`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

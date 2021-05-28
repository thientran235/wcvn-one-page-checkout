<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Add Vietnam Cities to WooCommerce
 *
 * @credit: https://github.com/8manos/wc-city-select
 * @author   htdat
 * @since    1.2
 *
 *
 */
class WCVN_OnePageCheckout_Cities {

	public function __construct() {
		add_filter( 'wc_city_select_cities', array( $this, 'add_cities' ) );
	}

	/**
	 * Add Vietnam Cities
	 *
	 * @param $cities
	 *
	 * @return array
	 */
	public function add_cities( $cities ) {
		/**
		 * @source: https://github.com/htdat/woo-viet/issues/4#issuecomment-277449462
		 * @source: https://gist.github.com/10h30/7e9307d405ff9ef88cf7d226c90a5d13
		 * @source: https://github.com/daohoangson/dvhcvn
		 */
		$cities['VN'] = array(
			'AN-GIANG'        => array(
				'Huyện An Phú',
				'Thành phố Châu Đốc',
				'Huyện Châu Phú',
				'Huyện Châu Thành',
				'Huyện Chợ Mới',
				'Thành phố Long Xuyên',
				'Huyện Phú Tân',
				'Thị xã Tân Châu',
				'Huyện Thoại Sơn',
				'Huyện Tịnh Biên',
				'Huyện Tri Tôn',
			),
			'BA-RIA-VUNG-TAU' => array(
				'Thành phố Bà Rịa',
				'Huyện Châu Đức',
				'Huyện Côn Đảo',
				'Huyện Đất Đỏ',
				'Huyện Long Điền',
				'Thị xã Phú Mỹ',
				'Thành phố Vũng Tàu',
				'Huyện Xuyên Mộc',
			),
			'BAC-GIANG'       => array(
				'Thành phố Bắc Giang',
				'Huyện Hiệp Hòa',
				'Huyện Lạng Giang',
				'Huyện Lục Nam',
				'Huyện Lục Ngạn',
				'Huyện Sơn Động',
				'Huyện Tân Yên',
				'Huyện Việt Yên',
				'Huyện Yên Dũng',
				'Huyện Yên Thế',
			),
			'BAC-KAN'         => array(
				'Huyện Ba Bể',
				'Thành Phố Bắc Kạn',
				'Huyện Bạch Thông',
				'Huyện Chợ Đồn',
				'Huyện Chợ Mới',
				'Huyện Na Rì',
				'Huyện Ngân Sơn',
				'Huyện Pác Nặm',
			),
			'BAC-LIEU'        => array(
				'Thành phố Bạc Liêu',
				'Huyện Đông Hải',
				'Thị xã Giá Rai',
				'Huyện Hoà Bình',
				'Huyện Hồng Dân',
				'Huyện Phước Long',
				'Huyện Vĩnh Lợi',
			),
			'BAC-NINH'        => array(
				'Thành phố Bắc Ninh',
				'Huyện Gia Bình',
				'Huyện Lương Tài',
				'Huyện Quế Võ',
				'Huyện Thuận Thành',
				'Huyện Tiên Du',
				'Thị xã Từ Sơn',
				'Huyện Yên Phong',
			),
			'BEN-TRE'         => array(
				'Huyện Ba Tri',
				'Thành phố Bến Tre',
				'Huyện Bình Đại',
				'Huyện Châu Thành',
				'Huyện Chợ Lách',
				'Huyện Giồng Trôm',
				'Huyện Mỏ Cày Bắc',
				'Huyện Mỏ Cày Nam',
				'Huyện Thạnh Phú',
			),
			'BINH-DINH'       => array(
				'Huyện An Lão',
				'Thị xã An Nhơn',
				'Huyện Hoài Ân',
				'Huyện Hoài Nhơn',
				'Huyện Phù Cát',
				'Huyện Phù Mỹ',
				'Thành phố Qui Nhơn',
				'Huyện Tây Sơn',
				'Huyện Tuy Phước',
				'Huyện Vân Canh',
				'Huyện Vĩnh Thạnh',
			),
			'BINH-DUONG'      => array(
				'Huyện Bắc Tân Uyên',
				'Huyện Bàu Bàng',
				'Thị xã Bến Cát',
				'Huyện Dầu Tiếng',
				'Thị xã Dĩ An',
				'Huyện Phú Giáo',
				'Thị xã Tân Uyên',
				'Thành phố Thủ Dầu Một',
				'Thị xã Thuận An',
			),
			'BINH-PHUOC'      => array(
				'Thị xã Bình Long',
				'Huyện Bù Đăng',
				'Huyện Bù Đốp',
				'Huyện Bù Gia Mập',
				'Huyện Chơn Thành',
				'Huyện Đồng Phú',
				'Thành phố Đồng Xoài',
				'Huyện Hớn Quản',
				'Huyện Lộc Ninh',
				'Huyện Phú Riềng',
				'Thị xã Phước Long',
			),
			'BINH-THUAN'      => array(
				'Huyện Bắc Bình',
				'Huyện Đức Linh',
				'Huyện Hàm Tân',
				'Huyện Hàm Thuận Bắc',
				'Huyện Hàm Thuận Nam',
				'Thị xã La Gi',
				'Thành phố Phan Thiết',
				'Huyện Phú Quí',
				'Huyện Tánh Linh',
				'Huyện Tuy Phong',
			),
			'CA-MAU'          => array(
				'Thành phố Cà Mau',
				'Huyện Cái Nước',
				'Huyện Đầm Dơi',
				'Huyện Năm Căn',
				'Huyện Ngọc Hiển',
				'Huyện Phú Tân',
				'Huyện Thới Bình',
				'Huyện Trần Văn Thời',
				'Huyện U Minh',
			),
			'CAN-THO'         => array(
				'Quận Bình Thuỷ',
				'Quận Cái Răng',
				'Huyện Cờ Đỏ',
				'Quận Ninh Kiều',
				'Quận Ô Môn',
				'Huyện Phong Điền',
				'Huyện Thới Lai',
				'Quận Thốt Nốt',
				'Huyện Vĩnh Thạnh',
			),
			'CAO-BANG'        => array(
				'Huyện Bảo Lạc',
				'Huyện Bảo Lâm',
				'Thành phố Cao Bằng',
				'Huyện Hạ Lang',
				'Huyện Hà Quảng',
				'Huyện Hoà An',
				'Huyện Nguyên Bình',
				'Huyện Phục Hoà',
				'Huyện Quảng Uyên',
				'Huyện Thạch An',
				'Huyện Thông Nông',
				'Huyện Trà Lĩnh',
				'Huyện Trùng Khánh',
			),
			'DA-NANG'         => array(
				'Quận Cẩm Lệ',
				'Quận Hải Châu',
				'Huyện Hòa Vang',
				'Huyện Hoàng Sa',
				'Quận Liên Chiểu',
				'Quận Ngũ Hành Sơn',
				'Quận Sơn Trà',
				'Quận Thanh Khê',
			),
			'DAK-LAK'         => array(
				'Huyện Buôn Đôn',
				'Thị Xã Buôn Hồ',
				'Thành phố Buôn Ma Thuột',
				'Huyện Cư Kuin',
				'Huyện Cư M\'gar',
				'Huyện Ea H\'leo',
				'Huyện Ea Kar',
				'Huyện Ea Súp',
				'Huyện Krông A Na',
				'Huyện Krông Bông',
				'Huyện Krông Búk',
				'Huyện Krông Năng',
				'Huyện Krông Pắc',
				'Huyện Lắk',
				'Huyện M\'Đrắk',
			),
			'DAK-NONG'        => array(
				'Huyện Cư Jút',
				'Huyện Đăk Glong',
				'Huyện Đắk Mil',
				'Huyện Đắk R\'Lấp',
				'Huyện Đắk Song',
				'Thị xã Gia Nghĩa',
				'Huyện Krông Nô',
				'Huyện Tuy Đức',
			),
			'DIEN-BIEN'       => array(
				'Huyện Điện Biên',
				'Huyện Điện Biên Đông',
				'Thành phố Điện Biên Phủ',
				'Huyện Mường Ảng',
				'Huyện Mường Chà',
				'Thị Xã Mường Lay',
				'Huyện Mường Nhé',
				'Huyện Nậm Pồ',
				'Huyện Tủa Chùa',
				'Huyện Tuần Giáo',
			),
			'DONG-NAI'        => array(
				'Thành phố Biên Hòa',
				'Huyện Cẩm Mỹ',
				'Huyện Định Quán',
				'Thành phố Long Khánh',
				'Huyện Long Thành',
				'Huyện Nhơn Trạch',
				'Huyện Tân Phú',
				'Huyện Thống Nhất',
				'Huyện Trảng Bom',
				'Huyện Vĩnh Cửu',
				'Huyện Xuân Lộc',
			),
			'DONG-THAP'       => array(
				'Thành phố Cao Lãnh',
				'Huyện Cao Lãnh',
				'Huyện Châu Thành',
				'Thị xã Hồng Ngự',
				'Huyện Hồng Ngự',
				'Huyện Lai Vung',
				'Huyện Lấp Vò',
				'Thành phố Sa Đéc',
				'Huyện Tam Nông',
				'Huyện Tân Hồng',
				'Huyện Thanh Bình',
				'Huyện Tháp Mười',
			),
			'GIA-LAI'         => array(
				'Thị xã An Khê',
				'Thị xã Ayun Pa',
				'Huyện Chư Păh',
				'Huyện Chư Prông',
				'Huyện Chư Pưh',
				'Huyện Chư Sê',
				'Huyện Đăk Đoa',
				'Huyện Đăk Pơ',
				'Huyện Đức Cơ',
				'Huyện Ia Grai',
				'Huyện Ia Pa',
				'Huyện KBang',
				'Huyện Kông Chro',
				'Huyện Krông Pa',
				'Huyện Mang Yang',
				'Huyện Phú Thiện',
				'Thành phố Pleiku',
			),
			'HA-GIANG'        => array(
				'Huyện Bắc Mê',
				'Huyện Bắc Quang',
				'Huyện Đồng Văn',
				'Thành phố Hà Giang',
				'Huyện Hoàng Su Phì',
				'Huyện Mèo Vạc',
				'Huyện Quản Bạ',
				'Huyện Quang Bình',
				'Huyện Vị Xuyên',
				'Huyện Xín Mần',
				'Huyện Yên Minh',
			),
			'HA-NAM'          => array(
				'Huyện Bình Lục',
				'Huyện Duy Tiên',
				'Huyện Kim Bảng',
				'Huyện Lý Nhân',
				'Thành phố Phủ Lý',
				'Huyện Thanh Liêm',
			),
			'HA-NOI'          => array(
				'Quận Ba Đình',
				'Huyện Ba Vì',
				'Quận Bắc Từ Liêm',
				'Quận Cầu Giấy',
				'Huyện Chương Mỹ',
				'Huyện Đan Phượng',
				'Huyện Đông Anh',
				'Quận Đống Đa',
				'Huyện Gia Lâm',
				'Quận Hà Đông',
				'Quận Hai Bà Trưng',
				'Huyện Hoài Đức',
				'Quận Hoàn Kiếm',
				'Quận Hoàng Mai',
				'Quận Long Biên',
				'Huyện Mê Linh',
				'Huyện Mỹ Đức',
				'Quận Nam Từ Liêm',
				'Huyện Phú Xuyên',
				'Huyện Phúc Thọ',
				'Huyện Quốc Oai',
				'Huyện Sóc Sơn',
				'Thị xã Sơn Tây',
				'Quận Tây Hồ',
				'Huyện Thạch Thất',
				'Huyện Thanh Oai',
				'Huyện Thanh Trì',
				'Quận Thanh Xuân',
				'Huyện Thường Tín',
				'Huyện Ứng Hòa',
			),
			'HA-TINH'         => array(
				'Huyện Cẩm Xuyên',
				'Huyện Can Lộc',
				'Huyện Đức Thọ',
				'Thành phố Hà Tĩnh',
				'Thị xã Hồng Lĩnh',
				'Huyện Hương Khê',
				'Huyện Hương Sơn',
				'Huyện Kỳ Anh',
				'Thị xã Kỳ Anh',
				'Huyện Lộc Hà',
				'Huyện Nghi Xuân',
				'Huyện Thạch Hà',
				'Huyện Vũ Quang',
			),
			'HAI-DUONG'       => array(
				'Huyện Bình Giang',
				'Huyện Cẩm Giàng',
				'Thành phố Chí Linh',
				'Huyện Gia Lộc',
				'Thành phố Hải Dương',
				'Huyện Kim Thành',
				'Thị xã Kinh Môn',
				'Huyện Nam Sách',
				'Huyện Ninh Giang',
				'Huyện Thanh Hà',
				'Huyện Thanh Miện',
				'Huyện Tứ Kỳ',
			),
			'HAI-PHONG'       => array(
				'Huyện An Dương',
				'Huyện An Lão',
				'Huyện Bạch Long Vĩ',
				'Huyện Cát Hải',
				'Quận Đồ Sơn',
				'Quận Dương Kinh',
				'Quận Hải An',
				'Quận Hồng Bàng',
				'Quận Kiến An',
				'Huyện Kiến Thuỵ',
				'Quận Lê Chân',
				'Quận Ngô Quyền',
				'Huyện Thuỷ Nguyên',
				'Huyện Tiên Lãng',
				'Huyện Vĩnh Bảo',
			),
			'HAU-GIANG'       => array(
				'Huyện Châu Thành',
				'Huyện Châu Thành A',
				'Huyện Long Mỹ',
				'Thị xã Long Mỹ',
				'Thị xã Ngã Bảy',
				'Huyện Phụng Hiệp',
				'Thành phố Vị Thanh',
				'Huyện Vị Thuỷ',
			),
			'HO-CHI-MINH'     => array(
				'Quận 1',
				'Quận 2',
				'Quận 3',
				'Quận 4',
				'Quận 5',
				'Quận 6',
				'Quận 7',
				'Quận 8',
				'Quận 9',
				'Quận 10',
				'Quận 11',
				'Quận 12',
				'Huyện Bình Chánh',
				'Quận Bình Tân',
				'Quận Bình Thạnh',
				'Huyện Cần Giờ',
				'Huyện Củ Chi',
				'Quận Gò Vấp',
				'Huyện Hóc Môn',
				'Huyện Nhà Bè',
				'Quận Phú Nhuận',
				'Quận Tân Bình',
				'Quận Tân Phú',
				'Quận Thủ Đức',
			),
			'HOA-BINH'        => array(
				'Huyện Cao Phong',
				'Huyện Đà Bắc',
				'Thành phố Hòa Bình',
				'Huyện Kim Bôi',
				'Huyện Kỳ Sơn',
				'Huyện Lạc Sơn',
				'Huyện Lạc Thủy',
				'Huyện Lương Sơn',
				'Huyện Mai Châu',
				'Huyện Tân Lạc',
				'Huyện Yên Thủy',
			),
			'HUNG-YEN'        => array(
				'Huyện Ân Thi',
				'Thành phố Hưng Yên',
				'Huyện Khoái Châu',
				'Huyện Kim Động',
				'Thị xã Mỹ Hào',
				'Huyện Phù Cừ',
				'Huyện Tiên Lữ',
				'Huyện Văn Giang',
				'Huyện Văn Lâm',
				'Huyện Yên Mỹ',
			),
			'KHANH-HOA'       => array(
				'Huyện Cam Lâm',
				'Thành phố Cam Ranh',
				'Huyện Diên Khánh',
				'Huyện Khánh Sơn',
				'Huyện Khánh Vĩnh',
				'Thành phố Nha Trang',
				'Thị xã Ninh Hòa',
				'Huyện Trường Sa',
				'Huyện Vạn Ninh',
			),
			'KIEN-GIANG'      => array(
				'Huyện An Biên',
				'Huyện An Minh',
				'Huyện Châu Thành',
				'Huyện Giang Thành',
				'Huyện Giồng Riềng',
				'Huyện Gò Quao',
				'Thành phố Hà Tiên',
				'Huyện Hòn Đất',
				'Huyện Kiên Hải',
				'Huyện Kiên Lương',
				'Huyện Phú Quốc',
				'Thành phố Rạch Giá',
				'Huyện Tân Hiệp',
				'Huyện U Minh Thượng',
				'Huyện Vĩnh Thuận',
			),
			'KON-TUM'         => array(
				'Huyện Đắk Glei',
				'Huyện Đắk Hà',
				'Huyện Đắk Tô',
				'Huyện Ia H\' Drai',
				'Huyện Kon Plông',
				'Huyện Kon Rẫy',
				'Thành phố Kon Tum',
				'Huyện Ngọc Hồi',
				'Huyện Sa Thầy',
				'Huyện Tu Mơ Rông',
			),
			'LAI-CHAU'        => array(
				'Thành phố Lai Châu',
				'Huyện Mường Tè',
				'Huyện Nậm Nhùn',
				'Huyện Phong Thổ',
				'Huyện Sìn Hồ',
				'Huyện Tam Đường',
				'Huyện Tân Uyên',
				'Huyện Than Uyên',
			),
			'LAM-DONG'        => array(
				'Huyện Bảo Lâm',
				'Thành phố Bảo Lộc',
				'Huyện Cát Tiên',
				'Huyện Đạ Huoai',
				'Thành phố Đà Lạt',
				'Huyện Đạ Tẻh',
				'Huyện Đam Rông',
				'Huyện Di Linh',
				'Huyện Đơn Dương',
				'Huyện Đức Trọng',
				'Huyện Lạc Dương',
				'Huyện Lâm Hà',
			),
			'LANG-SON'        => array(
				'Huyện Bắc Sơn',
				'Huyện Bình Gia',
				'Huyện Cao Lộc',
				'Huyện Chi Lăng',
				'Huyện Đình Lập',
				'Huyện Hữu Lũng',
				'Thành phố Lạng Sơn',
				'Huyện Lộc Bình',
				'Huyện Tràng Định',
				'Huyện Văn Lãng',
				'Huyện Văn Quan',
			),
			'LAO-CAI'         => array(
				'Huyện Bắc Hà',
				'Huyện Bảo Thắng',
				'Huyện Bảo Yên',
				'Huyện Bát Xát',
				'Thành phố Lào Cai',
				'Huyện Mường Khương',
				'Thị xã Sa Pa',
				'Huyện Si Ma Cai',
				'Huyện Văn Bàn',
			),
			'LONG-AN'         => array(
				'Huyện Bến Lức',
				'Huyện Cần Đước',
				'Huyện Cần Giuộc',
				'Huyện Châu Thành',
				'Huyện Đức Hòa',
				'Huyện Đức Huệ',
				'Thị xã Kiến Tường',
				'Huyện Mộc Hóa',
				'Thành phố Tân An',
				'Huyện Tân Hưng',
				'Huyện Tân Thạnh',
				'Huyện Tân Trụ',
				'Huyện Thạnh Hóa',
				'Huyện Thủ Thừa',
				'Huyện Vĩnh Hưng',
			),
			'NAM-DINH'        => array(
				'Huyện Giao Thủy',
				'Huyện Hải Hậu',
				'Huyện Mỹ Lộc',
				'Thành phố Nam Định',
				'Huyện Nam Trực',
				'Huyện Nghĩa Hưng',
				'Huyện Trực Ninh',
				'Huyện Vụ Bản',
				'Huyện Xuân Trường',
				'Huyện Ý Yên',
			),
			'NGHE-AN'         => array(
				'Huyện Anh Sơn',
				'Huyện Con Cuông',
				'Thị xã Cửa Lò',
				'Huyện Diễn Châu',
				'Huyện Đô Lương',
				'Thị xã Hoàng Mai',
				'Huyện Hưng Nguyên',
				'Huyện Kỳ Sơn',
				'Huyện Nam Đàn',
				'Huyện Nghi Lộc',
				'Huyện Nghĩa Đàn',
				'Huyện Quế Phong',
				'Huyện Quỳ Châu',
				'Huyện Quỳ Hợp',
				'Huyện Quỳnh Lưu',
				'Huyện Tân Kỳ',
				'Thị xã Thái Hoà',
				'Huyện Thanh Chương',
				'Huyện Tương Dương',
				'Thành phố Vinh',
				'Huyện Yên Thành',
			),
			'NINH-BINH'       => array(
				'Huyện Gia Viễn',
				'Huyện Hoa Lư',
				'Huyện Kim Sơn',
				'Huyện Nho Quan',
				'Thành phố Ninh Bình',
				'Thành phố Tam Điệp',
				'Huyện Yên Khánh',
				'Huyện Yên Mô',
			),
			'NINH-THUAN'      => array(
				'Huyện Bác Ái',
				'Huyện Ninh Hải',
				'Huyện Ninh Phước',
				'Huyện Ninh Sơn',
				'Thành phố Phan Rang-Tháp Chàm',
				'Huyện Thuận Bắc',
				'Huyện Thuận Nam',
			),
			'PHU-THO'         => array(
				'Huyện Cẩm Khê',
				'Huyện Đoan Hùng',
				'Huyện Hạ Hoà',
				'Huyện Lâm Thao',
				'Huyện Phù Ninh',
				'Thị xã Phú Thọ',
				'Huyện Tam Nông',
				'Huyện Tân Sơn',
				'Huyện Thanh Ba',
				'Huyện Thanh Sơn',
				'Huyện Thanh Thuỷ',
				'Thành phố Việt Trì',
				'Huyện Yên Lập',
			),
			'PHU-YEN'         => array(
				'Huyện Đông Hòa',
				'Huyện Đồng Xuân',
				'Huyện Phú Hoà',
				'Huyện Sơn Hòa',
				'Thị xã Sông Cầu',
				'Huyện Sông Hinh',
				'Huyện Tây Hoà',
				'Huyện Tuy An',
				'Thành phố Tuy Hoà',
			),
			'QUANG-BINH'      => array(
				'Thị xã Ba Đồn',
				'Huyện Bố Trạch',
				'Thành Phố Đồng Hới',
				'Huyện Lệ Thủy',
				'Huyện Minh Hóa',
				'Huyện Quảng Ninh',
				'Huyện Quảng Trạch',
				'Huyện Tuyên Hóa',
			),
			'QUANG-NAM'       => array(
				'Huyện Bắc Trà My',
				'Huyện Đại Lộc',
				'Thị xã Điện Bàn',
				'Huyện Đông Giang',
				'Huyện Duy Xuyên',
				'Huyện Hiệp Đức',
				'Thành phố Hội An',
				'Huyện Nam Giang',
				'Huyện Nam Trà My',
				'Huyện Nông Sơn',
				'Huyện Núi Thành',
				'Huyện Phú Ninh',
				'Huyện Phước Sơn',
				'Huyện Quế Sơn',
				'Thành phố Tam Kỳ',
				'Huyện Tây Giang',
				'Huyện Thăng Bình',
				'Huyện Tiên Phước',
			),
			'QUANG-NGAI'      => array(
				'Huyện Ba Tơ',
				'Huyện Bình Sơn',
				'Huyện Đức Phổ',
				'Huyện Lý Sơn',
				'Huyện Minh Long',
				'Huyện Mộ Đức',
				'Huyện Nghĩa Hành',
				'Thành phố Quảng Ngãi',
				'Huyện Sơn Hà',
				'Huyện Sơn Tây',
				'Huyện Sơn Tịnh',
				'Huyện Tây Trà',
				'Huyện Trà Bồng',
				'Huyện Tư Nghĩa',
			),
			'QUANG-NINH'      => array(
				'Huyện Ba Chẽ',
				'Huyện Bình Liêu',
				'Thành phố Cẩm Phả',
				'Huyện Cô Tô',
				'Huyện Đầm Hà',
				'Thị xã Đông Triều',
				'Thành phố Hạ Long',
				'Huyện Hải Hà',
				'Huyện Hoành Bồ',
				'Thành phố Móng Cái',
				'Thị xã Quảng Yên',
				'Huyện Tiên Yên',
				'Thành phố Uông Bí',
				'Huyện Vân Đồn',
			),
			'QUANG-TRI'       => array(
				'Huyện Cam Lộ',
				'Huyện Cồn Cỏ',
				'Huyện Đa Krông',
				'Thành phố Đông Hà',
				'Huyện Gio Linh',
				'Huyện Hải Lăng',
				'Huyện Hướng Hóa',
				'Thị xã Quảng Trị',
				'Huyện Triệu Phong',
				'Huyện Vĩnh Linh',
			),
			'SOC-TRANG'       => array(
				'Huyện Châu Thành',
				'Huyện Cù Lao Dung',
				'Huyện Kế Sách',
				'Huyện Long Phú',
				'Huyện Mỹ Tú',
				'Huyện Mỹ Xuyên',
				'Thị xã Ngã Năm',
				'Thành phố Sóc Trăng',
				'Huyện Thạnh Trị',
				'Huyện Trần Đề',
				'Thị xã Vĩnh Châu',
			),
			'SON-LA'          => array(
				'Huyện Bắc Yên',
				'Huyện Mai Sơn',
				'Huyện Mộc Châu',
				'Huyện Mường La',
				'Huyện Phù Yên',
				'Huyện Quỳnh Nhai',
				'Thành phố Sơn La',
				'Huyện Sông Mã',
				'Huyện Sốp Cộp',
				'Huyện Thuận Châu',
				'Huyện Vân Hồ',
				'Huyện Yên Châu',
			),
			'TAY-NINH'        => array(
				'Huyện Bến Cầu',
				'Huyện Châu Thành',
				'Huyện Dương Minh Châu',
				'Huyện Gò Dầu',
				'Huyện Hòa Thành',
				'Huyện Tân Biên',
				'Huyện Tân Châu',
				'Thành phố Tây Ninh',
				'Huyện Trảng Bàng',
			),
			'THAI-BINH'       => array(
				'Huyện Đông Hưng',
				'Huyện Hưng Hà',
				'Huyện Kiến Xương',
				'Huyện Quỳnh Phụ',
				'Thành phố Thái Bình',
				'Huyện Thái Thụy',
				'Huyện Tiền Hải',
				'Huyện Vũ Thư',
			),
			'THAI-NGUYEN'     => array(
				'Huyện Đại Từ',
				'Huyện Định Hóa',
				'Huyện Đồng Hỷ',
				'Thị xã Phổ Yên',
				'Huyện Phú Bình',
				'Huyện Phú Lương',
				'Thành phố Sông Công',
				'Thành phố Thái Nguyên',
				'Huyện Võ Nhai',
			),
			'THANH-HOA'       => array(
				'Huyện Bá Thước',
				'Thị xã Bỉm Sơn',
				'Huyện Cẩm Thủy',
				'Huyện Đông Sơn',
				'Huyện Hà Trung',
				'Huyện Hậu Lộc',
				'Huyện Hoằng Hóa',
				'Huyện Lang Chánh',
				'Huyện Mường Lát',
				'Huyện Nga Sơn',
				'Huyện Ngọc Lặc',
				'Huyện Như Thanh',
				'Huyện Như Xuân',
				'Huyện Nông Cống',
				'Huyện Quan Hóa',
				'Huyện Quan Sơn',
				'Huyện Quảng Xương',
				'Thành phố Sầm Sơn',
				'Huyện Thạch Thành',
				'Thành phố Thanh Hóa',
				'Huyện Thiệu Hóa',
				'Huyện Thọ Xuân',
				'Huyện Thường Xuân',
				'Huyện Tĩnh Gia',
				'Huyện Triệu Sơn',
				'Huyện Vĩnh Lộc',
				'Huyện Yên Định',
			),
			'THUA-THIEN-HUE'  => array(
				'Huyện A Lưới',
				'Thành phố Huế',
				'Thị xã Hương Thủy',
				'Thị xã Hương Trà',
				'Huyện Nam Đông',
				'Huyện Phong Điền',
				'Huyện Phú Lộc',
				'Huyện Phú Vang',
				'Huyện Quảng Điền',
			),
			'TIEN-GIANG'      => array(
				'Huyện Cái Bè',
				'Thị xã Cai Lậy',
				'Huyện Cai Lậy',
				'Huyện Châu Thành',
				'Huyện Chợ Gạo',
				'Thị xã Gò Công',
				'Huyện Gò Công Đông',
				'Huyện Gò Công Tây',
				'Thành phố Mỹ Tho',
				'Huyện Tân Phú Đông',
				'Huyện Tân Phước',
			),
			'TRA-VINH'        => array(
				'Huyện Càng Long',
				'Huyện Cầu Kè',
				'Huyện Cầu Ngang',
				'Huyện Châu Thành',
				'Huyện Duyên Hải',
				'Thị xã Duyên Hải',
				'Huyện Tiểu Cần',
				'Huyện Trà Cú',
				'Thành phố Trà Vinh',
			),
			'TUYEN-QUANG'     => array(
				'Huyện Chiêm Hóa',
				'Huyện Hàm Yên',
				'Huyện Lâm Bình',
				'Huyện Na Hang',
				'Huyện Sơn Dương',
				'Thành phố Tuyên Quang',
				'Huyện Yên Sơn',
			),
			'VINH-LONG'       => array(
				'Huyện  Vũng Liêm',
				'Thị xã Bình Minh',
				'Huyện Bình Tân',
				'Huyện Long Hồ',
				'Huyện Mang Thít',
				'Huyện Tam Bình',
				'Huyện Trà Ôn',
				'Thành phố Vĩnh Long',
			),
			'VINH-PHUC'       => array(
				'Huyện Bình Xuyên',
				'Huyện Lập Thạch',
				'Thành phố Phúc Yên',
				'Huyện Sông Lô',
				'Huyện Tam Đảo',
				'Huyện Tam Dương',
				'Huyện Vĩnh Tường',
				'Thành phố Vĩnh Yên',
				'Huyện Yên Lạc',
			),
			'YEN-BAI'         => array(
				'Huyện Lục Yên',
				'Huyện Mù Căng Chải',
				'Thị xã Nghĩa Lộ',
				'Huyện Trạm Tấu',
				'Huyện Trấn Yên',
				'Huyện Văn Chấn',
				'Huyện Văn Yên',
				'Thành phố Yên Bái',
				'Huyện Yên Bình',
			),
		);

		return $cities;

	}
}

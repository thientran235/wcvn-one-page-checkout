<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * The class to handle Vietnam Provinces
 *
 * @author   htdat
 * @since    1.0
 *
 */
class WCVN_OnePageCheckout_Provinces {

	/**
	 * Constructor: Add filters
	 */
	public function __construct() {
		add_filter( 'woocommerce_states', array( $this, 'add_provinces' ) );
		add_filter( 'woocommerce_get_country_locale', array( $this, 'edit_vn_locale' ) );
		add_filter( 'woocommerce_localisation_address_formats', array( $this, 'edit_vn_address_formats' ), 99 );
		// Hook in
		add_filter( 'woocommerce_checkout_fields', array( $this, 'checkout_fields' ), 20 );

	}

	public function checkout_fields( $fields ) {
		if ( !empty($fields['billing']) ) {
			foreach ($fields['billing'] as $key => $billing) {
				if ( empty($billing['placeholder']) ) {
					$billing['placeholder'] = $billing['label'];
				}
				$fields['billing'][$key] = $billing;
			}



			$fields['billing']['billing_country']['class'] = array('form-row-first');
	   		$fields['billing']['billing_state']['class'] = array('form-row-first');
	   		$fields['billing']['billing_city']['class'] = array('form-row-last');
	   		$fields['billing']['billing_phone']['class'] = array('form-row-first');
	   		$fields['billing']['billing_email']['class'] = array('form-row-last');

			$fields['billing']['billing_address_1']['class'] = array('form-row-wide');


		}

		if ( !empty($fields['shipping']) ) {
			foreach ($fields['shipping'] as $key => $shipping) {
				if ( empty($shipping['placeholder']) ) {
					$shipping['placeholder'] = $shipping['label'];
				}
				$fields['shipping'][$key] = $shipping;
			}

			$fields['shipping']['shipping_address_1']['class'] = array('form-row-wide');
		}

	     return $fields;
	}

	public function edit_vn_address_formats( $array ) {

		$array['VN'] = "{name}\n{company}\n{address_1}\n{city}\n{state}\n{country}";

		return $array;

	}

	public function edit_vn_locale( $array ) {
		$array['VN']['state']['label']    = __( 'Province', 'woo-viet' );
		$array['VN']['state']['required'] = true;

		$array['VN']['city']['label']      = __( 'District', 'woo-viet' );
		$array['VN']['postcode']['hidden'] = true;

		return $array;
	}

	public function add_provinces( $states ) {
		/**
		 * @source: https://vi.wikipedia.org/wiki/Tỉnh_thành_Việt_Nam and https://en.wikipedia.org/wiki/Provinces_of_Vietnam
		 */
		$states['VN'] = array(
			'AN-GIANG'        => __( 'An Giang', 'woo-viet' ),
			'BA-RIA-VUNG-TAU' => __( 'Ba Ria - Vung Tau', 'woo-viet' ),
			'BAC-LIEU'        => __( 'Bac Lieu', 'woo-viet' ),
			'BAC-KAN'         => __( 'Bac Kan', 'woo-viet' ),
			'BAC-GIANG'       => __( 'Bac Giang', 'woo-viet' ),
			'BAC-NINH'        => __( 'Bac Ninh', 'woo-viet' ),
			'BEN-TRE'         => __( 'Ben Tre', 'woo-viet' ),
			'BINH-DUONG'      => __( 'Binh Duong', 'woo-viet' ),
			'BINH-DINH'       => __( 'Binh Dinh', 'woo-viet' ),
			'BINH-PHUOC'      => __( 'Binh Phuoc', 'woo-viet' ),
			'BINH-THUAN'      => __( 'Binh Thuan', 'woo-viet' ),
			'CA-MAU'          => __( 'Ca Mau', 'woo-viet' ),
			'CAO-BANG'        => __( 'Cao Bang', 'woo-viet' ),
			'CAN-THO'         => __( 'Can Tho', 'woo-viet' ),
			'DA-NANG'         => __( 'Da Nang', 'woo-viet' ),
			'DAK-LAK'         => __( 'Dak Lak', 'woo-viet' ),
			'DAK-NONG'        => __( 'Dak Nong', 'woo-viet' ),
			'DONG-NAI'        => __( 'Dong Nai', 'woo-viet' ),
			'DONG-THAP'       => __( 'Dong Thap', 'woo-viet' ),
			'DIEN-BIEN'       => __( 'Dien Bien', 'woo-viet' ),
			'GIA-LAI'         => __( 'Gia Lai', 'woo-viet' ),
			'HA-GIANG'        => __( 'Ha Giang', 'woo-viet' ),
			'HA-NAM'          => __( 'Ha Nam', 'woo-viet' ),
			'HA-NOI'          => __( 'Ha Noi', 'woo-viet' ),
			'HA-TINH'         => __( 'Ha Tinh', 'woo-viet' ),
			'HAI-DUONG'       => __( 'Hai Duong', 'woo-viet' ),
			'HAI-PHONG'       => __( 'Hai Phong', 'woo-viet' ),
			'HOA-BINH'        => __( 'Hoa Binh', 'woo-viet' ),
			'HAU-GIANG'       => __( 'Hau Giang', 'woo-viet' ),
			'HUNG-YEN'        => __( 'Hung Yen', 'woo-viet' ),
			'HO-CHI-MINH'     => __( 'Ho Chi Minh', 'woo-viet' ),
			'KHANH-HOA'       => __( 'Khanh Hoa', 'woo-viet' ),
			'KIEN-GIANG'      => __( 'Kien Giang', 'woo-viet' ),
			'KON-TUM'         => __( 'Kon Tum', 'woo-viet' ),
			'LAI-CHAU'        => __( 'Lai Chau', 'woo-viet' ),
			'LAO-CAI'         => __( 'Lao Cai', 'woo-viet' ),
			'LANG-SON'        => __( 'Lang Son', 'woo-viet' ),
			'LAM-DONG'        => __( 'Lam Dong', 'woo-viet' ),
			'LONG-AN'         => __( 'Long An', 'woo-viet' ),
			'NAM-DINH'        => __( 'Nam Dinh', 'woo-viet' ),
			'NGHE-AN'         => __( 'Nghe An', 'woo-viet' ),
			'NINH-BINH'       => __( 'Ninh Binh', 'woo-viet' ),
			'NINH-THUAN'      => __( 'Ninh Thuan', 'woo-viet' ),
			'PHU-THO'         => __( 'Phu Tho', 'woo-viet' ),
			'PHU-YEN'         => __( 'Phu Yen', 'woo-viet' ),
			'QUANG-BINH'      => __( 'Quang Binh', 'woo-viet' ),
			'QUANG-NAM'       => __( 'Quang Nam', 'woo-viet' ),
			'QUANG-NGAI'      => __( 'Quang Ngai', 'woo-viet' ),
			'QUANG-NINH'      => __( 'Quang Ninh', 'woo-viet' ),
			'QUANG-TRI'       => __( 'Quang Tri', 'woo-viet' ),
			'SOC-TRANG'       => __( 'Soc Trang', 'woo-viet' ),
			'SON-LA'          => __( 'Son La', 'woo-viet' ),
			'TAY-NINH'        => __( 'Tay Ninh', 'woo-viet' ),
			'THAI-BINH'       => __( 'Thai Binh', 'woo-viet' ),
			'THAI-NGUYEN'     => __( 'Thai Nguyen', 'woo-viet' ),
			'THANH-HOA'       => __( 'Thanh Hoa', 'woo-viet' ),
			'THUA-THIEN-HUE'  => __( 'Thua Thien - Hue', 'woo-viet' ),
			'TIEN-GIANG'      => __( 'Tien Giang', 'woo-viet' ),
			'TRA-VINH'        => __( 'Tra Vinh', 'woo-viet' ),
			'TUYEN-QUANG'     => __( 'Tuyen Quang', 'woo-viet' ),
			'VINH-LONG'       => __( 'Vinh Long', 'woo-viet' ),
			'VINH-PHUC'       => __( 'Vinh Phuc', 'woo-viet' ),
			'YEN-BAI'         => __( 'Yen Bai', 'woo-viet' ),
		);

		return $states;

	}

}

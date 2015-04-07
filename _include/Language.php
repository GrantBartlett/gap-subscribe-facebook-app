<?php

class Language {

	/**
	 *
	 */
	public function setLanguage() {

		if ( ! empty( $_REQUEST['signed_request'] ) ) {
			$signed_request = $_REQUEST['signed_request'];
		}

		if ( isset( $signed_request ) ) {
			$data_signed_request = explode( '.', $signed_request ); // Get the part of the signed_request we need.
			$jsonData = base64_decode( $data_signed_request['1'] ); // Base64 Decode signed_request making it JSON.
			$objData  = json_decode( $jsonData, true ); // Split the JSON into arrays.
			return $objData['user']['locale'];
		}
	}

	/**
	 * @return string
	 */
	public function getLanguage() {
		$language = $this->setLanguage();

		switch ( $language ) {

			case "en_GB" :
				return $language;

			case "ar_AR" :
				return $language;
				break;

			default  :
				return "en_GB";
				break;
		}
	}

}
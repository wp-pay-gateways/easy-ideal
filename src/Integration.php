<?php

class Pronamic_WP_Pay_Gateways_EasyIDeal_Integration {
	public function __construct() {
		$this->id            = 'easy-ideal';
		$this->name          = 'Easy iDeal - iDEAL';
		$this->url           = 'http://www.easy-ideal.com/',
		$this->dashboard_url = 'https://www.qantanipayments.com/backoffice/login/';
		$this->provider      = 'easy-ideal';
	}

	public function get_config_factory_class() {
		return 'Pronamic_WP_Pay_Gateways_Qantani_ConfigFactory';
	}

	public function get_config_class() {
		return 'Pronamic_WP_Pay_Gateways_Qantani_Config';
	}

	public function get_gateway_class() {
		return 'Pronamic_WP_Pay_Gateways_Qantani_Gateway';
	}
}

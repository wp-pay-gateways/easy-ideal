<?php

class Pronamic_WP_Pay_Gateways_EasyIDeal_GatewayIntegration {
	public function __construct() {
		$this->id = 'easy-ideal';
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

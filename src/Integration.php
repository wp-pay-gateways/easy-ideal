<?php

class Pronamic_WP_Pay_Gateways_EasyIDeal_Integration extends Pronamic_WP_Pay_Gateways_Qantani_Integration {
	public function __construct() {
		$this->id            = 'easy-ideal';
		$this->name          = 'Easy iDeal - iDEAL';
		$this->url           = 'http://www.easy-ideal.com/';
		$this->dashboard_url = 'https://www.qantanipayments.com/backoffice/login/';
		$this->provider      = 'easy-ideal';
	}
}

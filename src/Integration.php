<?php

/**
 * Title: Easy iDeal - Integration test
 * Description:
 * Copyright: Copyright (c) 2005 - 2016
 * Company: Pronamic
 *
 * @author Remco Tolsma
 * @version 1.0.2
 * @since 1.0.0
 */
class Pronamic_WP_Pay_Gateways_EasyIDeal_Integration extends Pronamic_WP_Pay_Gateways_Qantani_Integration {
	public function __construct() {
		$this->id            = 'easy-ideal';
		$this->name          = 'Easy iDeal - iDEAL';
		$this->url           = 'http://www.easy-ideal.com/';
		$this->product_url   = 'http://www.easy-ideal.com/';
		$this->dashboard_url = 'https://www.qantanipayments.com/backoffice/login/';
		$this->provider      = 'easy-ideal';
		$this->deprecated    = false;
	}
}

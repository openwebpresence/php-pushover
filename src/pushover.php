<?php
/**
 * PHP library for the pushover.net API: https://pushover.net/api
 *
 * Copyright (c) 2017. Brian Tafoya <btafoya@briantafoya.com>. All Rights Reserved.
 *
 * @author Brian Tafoya <btafoya@briantafoya.com>
 * @version 0.1
 * @package pushover
 * @example test.php
 * @link https://pushover.net/api
 * @license MIT License
 */


use GuzzleHttp\Client;


/**
 * Class pushover
 */
class pushover {


	/**
	 * @var string
	 */
	public $api_url = 'https://api.pushover.net/1/messages.json';


	/**
	 * @var null
	 */
	public $token = null;


	/**
	 * @var null
	 */
	public $user = null;


	/**
	 * pushover constructor.
	 *
	 * @param $token
	 * @param $user
	 */
	public function __construct($token, $user) {
		$this->token = $token;
		$this->user = $user;
	}


	/**
	 * @param $title
	 * @param $message
	 *
	 * @return mixed
	 */
	public function sendPushover($title, $message) {

		$client = new Client([
			'timeout'  => 2.0,
			'http_errors' => false,
		]);

		$response = $client->request('POST', $this->api_url, [
			'form_params' => [
				"token" => $this->token,
				"user" => $this->user,
				"message" => $message,
				"title" => $title,
			]
		]);

		return json_decode((string)$response->getBody());
	}
}
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

include "vendor/autoload.php";

$token = "[token]";
$user = "[user]";
$title = "New Download";
$message = "Test 123";

$pushover = New pushover($token, $user);

$pushover->sendPushover($title, $message);

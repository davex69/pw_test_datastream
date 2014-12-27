<?php

require_once 'vendor/autoload.php';

define('PW_PROJECT_ROOT', dirname(__FILE__));
define('PW_INPUT_STREAM', PW_PROJECT_ROOT . '/data/stream');

(new Paymentwall\DataFilter)->search();


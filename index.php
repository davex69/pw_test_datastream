<?php

require_once 'vendor/autoload.php';
require_once 'config.php';

//ini_set('memory_limit', '1M');

(new Paymentwall\DataFilter)->search();


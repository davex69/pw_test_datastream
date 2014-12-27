<?php

namespace Paymentwall;

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

class DataFilter
{
    public function search()
    {
        $log = new Logger('pw_filter');
        $log->pushHandler(new StreamHandler('php://stdout', Logger::INFO));

        foreach ((new DataProvider)->getData() as $lineNumber => $line) {
            list($val1, $val2, $val3) = explode(' ', trim($line));

            if ($val1 + $val2 == $val3) {
                $logStr = sprintf("%d => %s", $lineNumber, $val3);
                $log->info($logStr);
            }
        }
    }
}


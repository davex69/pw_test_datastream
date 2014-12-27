<?php

require_once 'config.php';

$service = stream_socket_server("tcp://0.0.0.0:5682", $errno, $errstr);

if (!$service) {
    echo "$errstr ($errno)\n";
} else {
    $src = fopen(PW_INPUT_STREAM, 'r');

    while ($conn = stream_socket_accept($service)) {
        stream_copy_to_stream($src, $conn);
        fclose($conn);
        rewind($src);
    }

    fclose($service);
}


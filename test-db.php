<?php

require dirname(__DIR__) . '/bootstrap.php';

try {
    new Database();
    echo 'SUCCESS: Database connection OK';
} catch (Throwable $e) {
    http_response_code(500);
    echo 'Database connection failed';
}
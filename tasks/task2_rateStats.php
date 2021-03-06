<?php

require_once 'bootstrap.php';

/**
 * ====== PLEASE PROVIDE THE FOLLOWING: =======
 * Development Time Estimate [in hours]:    ???
 * Actual Development Time [in hours]:      ???
 * Your thoughts and comments:              ???
 * ============================================
 */

/**
 * correct input EXAMPLE - it may be modified (and will be modified during task assessment)
 */
$_GET = [
    'dateFrom' => '2019-08-01',
    'dateTo' => '2020-09-01',
    'currency' => 'GBP',
];

$controller = new \Api\ExchangeRates\CalculatorController();
$response = $controller->getRateStatsAction($_GET);


// print the returned response
http_response_code($response->getHttpCode());
header('Content-type: application/json');
echo $response->getContent(true);
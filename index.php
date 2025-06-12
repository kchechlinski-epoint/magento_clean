<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

if (PHP_SAPI == 'cli-server') {
    // To help the built-in PHP dev server, check if the request was actually for
    // something which should probably be served as a static file
    $url  = parse_url($_SERVER['REQUEST_URI']);
    $file = __DIR__ . $url['path'];
    if (is_file($file)) {
        return false;
    }
}

$_SERVER['SCRIPT_FILENAME'] = dirname(__FILE__) . '/pub/index.php';
$_SERVER['SCRIPT_NAME'] = '/index.php';

require dirname(__FILE__) . '/pub/index.php'; 
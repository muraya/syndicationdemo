<?php

/**
 * Beep core landing page.
 *
 * This file acts as the landing page for all requests from the APIs.
 *
 * @copyright 2013 Cellulant Ltd
 * @version 3.0.0
 * @since 2.2.0
 */

define('BASE_DIR', dirname(__FILE__));
define('DS', DIRECTORY_SEPARATOR);

require_once 'lib' . DS . 'Bootstrap.php';

session_start();
  header('Content-Type: application/json');
$instance = new Bootstrap();
$instance->router();



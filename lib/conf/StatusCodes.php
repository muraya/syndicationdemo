<?php

/**
 * Transaction status constants. Contains the statuses in which a transaction
 * can be in during processing.
 *
 * PHP VERSION 5.3.6
 *
 * @category  Core
 * @package   Core
 * @author    Duncan Muraya <duncan.muraya@cellulant.com>
 * @copyright 2013 Cellulant Ltd
 * @license   Proprietary License
 * @link      http://www.cellulant.com
 */
class StatusCodes
{

    const FAILURE = 0;
    const CHANNEL_REQUEST_DELIVERED = 1;

    const PENDING_STATUS = 2;
    const WALLET_SUCCESS_STATUS_CODE = 1;

    const FETCH_CUSTOMER_WALLET_DATA_FAILED = 3;

    const PIN_PROMPT_INVOKED_FAILED = 25;
    const PIN_PROMPT_INVOKED_SUCCESFULLY = 32;

    const CLIENT_AUTHENTICATED_SUCCESSFULLY = 131;
    const CLIENT_AUTHENTICATION_FAILED = 132;

    const GENERIC_SUCCESS_STATUS_CODE = 173;
    const GENERIC_FAILURE_STATUS_CODE = 174;

    const STATUS_PUSH_FAILURE = 180;
    const STATUS_PUSH_SUCCESS = 183;

    const OVERALL_SUCCESS = 200;

    // TODO --- have the invalid token status code documented -- 399
    const INVALID_TOKEN = 399;

    const REQUEST_INTERFACE_NOT_FOUND = 404;
    const FETCH_LIMIT = 500;

    const INTERNAL_SERVER_ERROR = 500;

    const INVALID_BANK_ACCOUNT = 167;

}

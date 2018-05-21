<?php
/**
 * Created by PhpStorm.
 * User: mkenya
 * Date: 02/03/18
 * Time: 10:41
 */

class SAFKEMessages
{

    /**
     * Default message to rendender for a successfully posted transaction
     */
    const DEFAULT_TR_MESSAGE = 'Transaction Posted Succesfully';

    /**
     * Default message for success
     */
    const SUCCESS_MESSAGE = "Successfully processed";

    /**
     * Default message for a failure in processing a transaction
     */
    const DEFAULT_FAILURE_RESPONSE = "There was an error processing your request. Please try again later.";

    /**
     * Default message when inputs on the payload are wrongly formatted
     */
    const INVALID_REQUEST_PARAMETERS_MESSAGE = "Some inputs are wrongly formatted";

    /**
     * Default messagee for an authentication failure
     */
    const DEFAULT_AUTHENTIFICATION_FAILURE_MESSAGE = 'Wrong username/password/timestamp combination';

    /**
     * Default message for an internal server error
     */
    const INTERNAL_SERVER_ERROR_MESSAGE = 'Internal Application error. Please retry';

    const DEFAULT_PIN_PROMT_MESSAGE = 'Please provide us with your pin';

    /**
     * Default response message for a B2C async response
     */
    const DEFAULT_ASYNC_B2C_RESPONSE_MESSAGE = 'Please wait for authorization request from your bank';

    /**
     * Default message when the mobile number provide is not registered for mobile banking
     */
    const EMPTY_BANKING_INSTITUTIONS_MESSAGE = 'MSISDN not registered for Mobile banking.';

    /**
     * Default message in the event of a failure to get customer data from wallet
     */
    const FETCH_CUSTOMER_WALLET_DATA_FAILED = 'Could not fetch client data from wallet.';

    /**
     * Overall Callback failure message
     */
    const CALLBACK_FAILURE_MESSAGE = "Transaction failed. Please contact Cellulant support";



}
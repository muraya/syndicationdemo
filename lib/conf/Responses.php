<?php
/**
 * Created by PhpStorm.
 * User: muraya
 * Date: 3/14/18
 * Time: 1:38 PM
 */

class Responses
{
    /**
     * Default bank transaction request message
     */
    const DEFAULT_BANK_TRANSACTION_REQUEST_MESSAGE = 'Please wait for authorization request from your bank.';

    /**
     * The default B2C pin prompt message
     */
    const B2C_PIN_PROMPT_TEMPLATE = ' Please enter your mobile banking PIN to transfer KES #AMOUNT# from #BANK# to recipient number #MSISDN#.You will be charged KES #CHARGE#';

    /**
     * The default B2C account selection prompt
     */
    const B2C_ACCOUNT_SELECTION_PROMPT_TEMPLATE = "Please select the account to move money from:";

    /**
     * The default B2C invalid bank option selected prompt
     */
    const B2C_SECOND_ACCOUNT_SELECTION_PROMPT_TEMPLATE = "Invalid option selected. #number# attempt(s) remaining. Allowed options to choose from are:";

    /**
     * The default b2c no bank accounts found for the user message
     */
    const NO_ACCOUNTS_MESSAGE = 'There are no accounts found for this client';

    /**
     * The default error message for an unknown bank chosen
     */
    const UNKNOWN_BANK = 'The bank chosen is not configured with us';

    /**
     * The default message for maximum account selection retries
     */
    const MAX_ACC_SELECTION_RETRY = 'Max account selection retries reached';

    /**
     * Message to be ssent for a scenario where the last sim swap date is 48 hours from the current date
     */
    const RECENTLY_SWAPPED_LINE = 'The request has been blocked for security reasons. Please contact celulant support.';

    /**
     * The amount being sent is not within
     */
    const INVALID_TRANSACTION_AMOUNT_LIMIT = "Amount is not within the set limits";

    /**
     * The default prompt message a customer with
     */
    const BLOCKED_INACTIVE_ACCOUNT_MESSAGE = "We are unable to process your request.Please contact your nearest bank branch or call #CONTACT_NUMBER#";
}
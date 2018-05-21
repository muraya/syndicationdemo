<?php

/**
 * This class holds the configuration settings.
 *
 * @category  Core
 * @package   Core
 * @author    Duncan Muraya <duncan.muraya@cellulant.com>
 * @copyright 2013 Cellulant Ltd
 * @license   Proprietary License
 * @link      http://www.cellulant.com
 */
class Config
{
    /**
     * Database host name or IP address.
     *
     * @var string
     */
    const LOCAL_HOST = "localhost";
    const LOCAL_USER = "catUser";
    const LOCAL_PASSWORD = "catPassword";
    const LOCAL_DATABASE = "hub_ke";
    const LOCAL_PORT = "3306";

######################## Syndication Api Logs ##################################
    /**
     * File location for info logs.
     *
     * @var string
     */
    const INFO = "/var/log/applications/ke/hub4/hubServices/syndi/info.log";

    /**
     * File location for error logs.
     *
     * @var string
     */
    const ERROR = "/var/log/applications/ke/hub4/hubServices/syndi/error.log";

    /**
     * File location for fatal logs.
     *
     * @var string
     */
    const FATAL = "/var/log/applications/ke/hub4/hubServices/syndi/fatal.log";

    /**
     * File location for debug logs.
     *
     * @var string
     */
    const DEBUG = "/var/log/applications/ke/hub4/hubServices/syndi/debug.log";

    /**
     * File location for verbose logs.
     *
     * @var string
     */
    const VERBOSE  = "/var/log/applications/ke/hub4/hubServices/syndi/verbose.log";

######################## Syndication Crons Logs ##################################
    /**
     * File location for cron info logs.
     *
     * @var string
     */
    const CRON_INFO = "/var/log/applications/ke/hub4/hubServices/syndi/crons/info.log";

    /**
     * File location for cron error logs.
     *
     * @var string
     */
    const CRON_ERROR = "/var/log/applications/ke/hub4/hubServices/syndi/crons/error.log";

    /**
     * File location for cron fatal logs.
     *
     * @var string
     */
    const CRON_FATAL = "/var/log/applications/ke/hub4/hubServices/syndi/crons/fatal.log";

    /**
     * File location for cron debug logs.
     *
     * @var string
     */
    const CRON_DEBUG = "/var/log/applications/ke/hub4/hubServices/syndi/crons/debug.log";

    /**
     * File location for verbose logs.
     *
     * @var string
     */
    const CRON_VERBOSE  = "/var/log/applications/ke/hub4/hubServices/syndi/crons/verbose.log";


    /**
     * URL to the validation URL.
     *
     * @var string
     */
    const VALIDATION_URL = "http://197.159.100.249:9000/hub/services/paymentGateway/JSON/Validation.php";
//    const VALIDATION_URL = "http://127.0.0.1/html-ke/hub/services/paymentGatewayBeta/JSON/Validation.php";


    /**
     * ========================================================================
     * Cellulant Mobile Number Portability configurations. This configuration are used for the
     * MNP service Logic.
     * ========================================================================
     */


//    const REDIST_HOST = '192.168.254.239';
    const REDIST_HOST = '127.0.0.1';
    const REDIS_PORT = 6379;
    const REDIS_PASSWORD ='lemon';
//    const REDIS_PASSWORD ='Hub2017!@';
    const REDIS_PERSISTENT=1;
    const REDIST_TCP='tcp';
    const SMS_MESSAGE_TYPE='BULK';

    /**
     * HUB Database Connection Details .
     *
     * @var int
     */

    ######### Dev Databases configs #############

    const HUB_HOST = '192.168.254.238';
    const HUB_PORT = '3306';
    const HUB_USER = 'catUser';
    const HUB_PASS ='catPassword';
    const HUB_DB = "hub4_trunk";

    const CAVIAR_HOST = '192.168.254.238';
    const CAVIAR_PORT = 3306;
    const CAVIAR_USER = "catUser";
    const CAVIAR_PASS = "catPassword";
    const CAVIAR_DB = "catdb_ke";

    /**
     * Limit for database unique fetch.
     *cd
     * @var int
     */

    /**
     * the default failure response response
     */
    const DEFAULT_SUCCESS_RESPONSE = "Request processed successfully.";


    const DEFAULT_FAILURE_RESPONSE = "There was an error processing your request. Please try again later.";

    /**
     * Default timeout response
     */
    const DEFAULT_FRIENDLY_RESPONSE = "Timeout Error please try again.";

    /**
     * Url to hub profiling
     */
    const HUB_PROFILING_API_URL = "http://192.168.254.242/apis/ProfilingAPI/";
//    const HUB_PROFILING_API_URL = "http://197.159.100.242:9000/hub/channels/api/ProfilingAPI_4.5/";

    /**
     * Specifies the origin of the request
     */
    const DEFAULT_REQUEST_ORIGIN = "MULA_USSD";

    /**
     * Specifies the country code
     */
    const COUNTRY_CODE = "KE";

    /**
     * Profiling API methods
     */
    const HUB_PROFILING_API_CREATE_PROFILE = "createProfile/";
    const HUB_PROFILING_API_CHECK_PROFILE = "CheckProfile/";
    const HUB_PROFILING_API_CREATE_CLIENT_PROFILE = "createClientProfile/";

    const HUB_PROFILING_API_CREATE_CLIENT_PROFILE_ACCOUNTS = "createClientProfileAccounts/";
    const HUB_PROFILING_API_FETCH_CLIENT_PROFILE = "fetchCustomerProfileData/";

    const HUB_PROFILING_API_DELETE_CLIENT_PROFILE_ACCOUNTS = "deleteClientProfileAccounts/";
    const HUB_PROFILING_API_UPDATE_CLIENT_PROFILE_ACCOUNTS = "updateClientProfileAccounts/";

    const HUB_PROFILING_API_FETCH_BANKS = "fetchBanks/";
    const HUB_PROFILING_API_CREATE_IMPLICIT_ATTRIBUTES = "createImplicitAttributes/";

    const APIUSER = "airtel_api";
    const APIPASS = "!23qweASD";

    /**
     * Default curl read timeout
     */
    const DETAULT_CURL_READ_TIMEOUT = 20000; // read timeout in seconds

    /**
     * curl connection timeout
     */
    const DETAULT_CURL_CONNECTION_TIMEOUT = 20000; // connection time out in seconds

    /**
     * The default hub client id
     */
    const DEFAULT_HUB_CLIENT_ID = 2;

    /**
     * The default active activation status
     */
    const ACTIVE_ACTIVATION_STATUS = "ACTIVE";

    /**
     * The default active activation status description
     */
    const ACTIVE_ACTIVATION_STATUS_DESCRIPTION = "Customer is active";

    const SAFARICOM_BASE_PASSWORD_STRING = "testAlpha";

    const TRANSACTION_EXPIRY_PERIOD = "testAlpha";

    /**
     * The saf network id
     */
    const SAFARICOM_NETWORK_ID = 1;

    /**
     * The IMC ID
     */
    const IMC_ID = 4;

    /**
     * The default path to the rsa key
     */
    const RSA_KEY_PATH = '/var/log/applications/ke/hub4/hubServices/syndi/keys/';

    /**
     * The rsa key size
     */
    const RSA_KEY_SIZE = 2048;

    /**
     * The default status code for a success
     */
    const SUCCESS = 200;

    /**
     * The default status code for an authentication failure
     */
    const AUTHENTICATION_FAILURE = 403;

    /**
     * The default status code for request interface is not found
     */
    const REQUEST_INTERFACE_NOT_FOUND = 404;

    /**
     * The default status code for invalid request parameters sent
     */
    const INVALID_REQUEST_PARAMETERS = 405;

    /**
     * The default status code for an invalid command id
     */
    const INVALID_COMMAND_ID = 406;

    /**
     * The default status code for an unsuccessful request
     */
    const REQUEST_UNSUCCESSFUL = 407;

    /**
     * The default internal server error response code
     */
    const INTERNAL_SERVER_ERROR = 500;

    /**
     * The default error message for an internal server error
     */
    const INTERNAL_SERVER_ERROR_MESSAGE = 'Internal Application error. Please retry';

    /**
     * The bank enrolment key
     */
    const BANK_ENROLMENT_KEY = 72; // 72 93

    /**
     * The blowfish algorithm key
     */
    const BLOW_FISH_KEY = '$2a$07$usesomesillystringforsalt';


    const AUTHENTICATION_PASSWORD = 'iamawesome';

    /**
     * The default error message rendered in case bank code could not be fetched
     */
    const BANK_CODE_ERROR_MESSAGE = 'Could not fetch bank code';

    /**
     * The default error message in case an api fails to get its results
     */
    const API_FETCH_ERROR_MESSAGE = 'Could not fetch the api result';

    /**
     * Used for flagging erronous logs// should be turned off in production
     */
    const IS_VERBOSE_ENABLED  = true;

    /**
     * The client activation sytem id
     */
    const ACTIVATION_CLIENT_SYSTEM_ID  = 765;

    /**
     * The default username for an incoming request
     */
    const INCOMING_AUTH_USERNAME = 'ke_safappUser';

    /**
     * The default password for an incoming request
     */
    const INCOMING_AUTH_PASSWORD = '$2a$08$T/eqpeG6ZlCtN56PnzdDw.FzWeqs9NsH1G4CVoNnpxEp/LRIfMRaG';

    /**
     * The default username for an outgoing request
     */
    const OUTGOING_AUTH_USERNAME = 'CELLULANT';

    /**
     * The daefault password for an outgoing request
     */
    const OUTGOING_AUTH_PASSWORD = 'OEYwOTU1RjcwOUVDQzg4QTRGMDcxOUQ0RjVCMzg0ODBBOUNCMDRFMTAxMTI1QzZEMkMwOTE1MEEwQUE4RUNDQw==';

    /**
     * The default timeframe period used when fetching channel request data from db
     */
    const DEFAULT_FETCH_QUERY_TIMEFRAME = 3600;

    /**
     * The default failure code in case of failure to provide pin or select an account
     */
    const OVERALSTATUS_FAILURE_CODE = 3;

    /**
     * Default failure message when a pin is not provided or an account is not selected
     */
    const OVERALSTATUS_FAILURE_MSG = 'Failed to provide pin/account';

    /**
     * Default status code for a processed transaction
     */
    const OVERALSTATUS_PROCESSED_TRANSACTION_CODE = 306;

    /**
     * Default message for a processed transaction
     */
    const OVERALSTATUS_PROCESSED_TRANSACTION_MSG = 'Request already processed';

    /**
     * Default value for account selection retry
     */
    const DEFAULT_ACCOUNT_SELECTION_RETRY = 0;

    /**
     * Maximum number of retry's allowed for account selection
     */
    const MAX_ACCOUNT_SELECTION_RETRY = 3;

    /**
     *  Maximum of records the CaviarBankEnrolments cron should fetch in an instance
     */
    const CAVIAR_FETCH_LIMIT = 80;

    /**
     *  Bank Enrolments Redis Key
     */
    const BANK_ENROLEMENTS_REDIS_KEY = 'KE.CORE.IA.';

    /**
     *  Bank Enrolments Redis Field
     */
    const BANK_ENROLEMENTS_REDIS_FIELD = 'bankEnrolment';

    /**
     *  Default Country Code
     */
    const DEFAULT_COUNTRY_DIAL_CODE = '254';

    /**
     *  Default country MSISDN number length
     */
    const DEFAULT_COUNTRY_MSISDN_LENGTH = 12;

    /**
     * The minimum amount allowed for a customer to transfer
     */
    const MIN_TRANSACTION_AMOUNT = 100;

    /**
     * The maximum amount allowed for a customer to transfer
     */
    const MAX_TRANSACTION_AMOUNT = 70000;

    /**
     * This is a url for the transaction request wrapper.
     */
    const TRANSACTION_REQUEST_WRAPPER_URL = 'http://192.168.252.236/syndication/apis/mss/walletRequestWrapper/process';
    //"http://192.168.252.236/syndication/apis/mss/walletRequestWrapper";

}

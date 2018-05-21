<?php
/**
 * Created by PhpStorm.
 * User: mkenya
 * Date: 28/02/18
 * Time: 13:32
 *  A config class to define all the safaricom specific configs
 */

class SAFKEConfigs
{
    /**
     * Default code for a success request
     */
    const SUCCESS = 200;

    /**
     * Default code when the request fails to get bank institution codes
     *
     */
    const EMPTY_BANKING_INSTITUTIONS_CODE = 401;

    /**
     * Default code for an authentication failure on your request
     */
    const AUTHENTICATION_FAILURE = 403;

    /**
     * Default code value for request interface not found
     */
    const REQUEST_INTERFACE_NOT_FOUND = 404;

    /**
     * Default code value for a request with invalid request parameters
     */
    const INVALID_REQUEST_PARAMETERS = 405;

    /**
     * Default code value for invalid command id provided on the request
     */
    const INVALID_COMMAND_ID = 406;

    /**
     * Default code value for an unsuccessful request
     */
    const REQUEST_UNSUCCESSFUL = 407;

    /**
     * Default error code value for internal server error
     */
    const INTERNAL_SERVER_ERROR = 500;

    /**
     * Default fetch limit value for a query
     */
    const FETCH_LIMIT = 500;

    /**
     * Default blowfish encryption key
     */
    const BLOW_FISH_KEY = '$2a$qefqfq67894rkjkv62hvcjkhkoo1';//'$2a$qefqfq67894rkjkv786vcjkhkjv9';

    /**
     * Default url to handle the USSD push
     */
    const DEFAULT_SAFKE_USSDPUSH_ENDPOINT= "https://196.201.214.115:10508/authcallback";
    //"http://10.250.250.43/mss2/apis/mss/tests/testStubs/ussdPushEndpoint.php";
    //"http://localhost/syndication/apis/mss/tests/testStubs/ussdPushEndpoint.php";

    /**
     * Default callback url to handle the pinprompt
     */
    const DEFAULT_SAFKE_PINPROMT_HANDLECALLBACK="https://197.159.100.16:9510/mss/AuthCallback/processPinPromptCallback";
    // "http://197.159.100.16:9000/mss/AuthCallback/processPinPromptCallback";
    //"http://localhost/syndication/apis/mss/authUssdCallBack";

    /**
     * Default username
     */
    const DEFAULT_USERNAME = 'CELLULANT';

    /**
     * Default third party name value
     */
    const DEFAULT_THIRD_PARTY_NAME = "INTEGRATOR";

    /**
     * Default third party name received from saf payload
     */
    const DEFAULT_SAF_THIRD_PARTY_NAME = "Safaricom";

    /**
     * The default access code value
     */
    const DEFAULT_ACCESS_CODE = 'DHfn7vnDTONvJMLaCrOenQ==';

    /**
     * Default third party ID value
     */
    const DEFAULT_THIRD_PARTY_ID = 2171;

    /**
     * Default command ID value
     */
    const DEFAULT_COMMAND_ID = 'authUSSD';

    /**
     * Default password value
     */
    const DEFAULT_PASSWORD = 'OEYwOTU1RjcwOUVDQzg4QTRGMDcxOUQ0RjVCMzg0ODBBOUNCMDRFMTAxMTI1QzZEMkMwOTE1MEEwQUE4RUNDQw==';

    /**
     *Default client code value
     */
    const DEFAULT_CLIENT_CODE = 'SAFKE';

    /**
     * Default url invoked for requesting a pin prompt request
     */
    const DEFAULT_SAFKE_PINPROMPT_URL = 'http://197.159.100.249:9000/mnoAppsProxy/pushMenus/PinPromptMenu/process';
    //'http://10.250.250.28:9000/pushMenus/PinPromptMenu/process';
    //'http://192.168.253.112/pushMenus/PinPromptMenu/process';

    /**
     * Default transaction request access pont value set when saving a channel request
     */
    const DEFAULT_TR_ACCESS_POINT = 'Safaricom App';

    /**
     * Default gateway ID value set when saving a channel request
     */
    const DEFAULT_GATEWAYID = 7;

    /**
     * Default priority value set when saving a channel request
     */
    const DEFAULT_PRIORITY = 1;

    /**
     * Default connector id value set when saving a channel request
     */
    const DEFAULT_CONNECTORID = 1;

    /**
     * Default safaricom network id value set when saving a channel request
     */
    const SAFARICOM_NETWORK_ID = 1;

    /**
     * Default imc id value set when saving a channel request
     */
    const IMC_ID = 4;

    /**
     * Default client system id value set when saving a channel request
     */
    const CLIENT_SYSTEM_ID = 763;

    /**
     * Default external system service id value set when saving a chennel request
     */
    const DEFAULT_EXTERNAL_SYSTEM_SERVICE_ID = 1;

    /**
     * Default activity id value set when saving a channel request
     */
    const DEFAULT_ACTIVITY_ID = 7;

    /**
     * Default clientACKID value set when saving a channel request
     */
    const DEFAULT_CLIENT_ACKID = 'NULL';

    /**
     * Default status description value set when saving a channel request
     */
    const DEFAULT_STATUS_DESCRIPTION = 1;

    /**
     * Default service description value set when saving a channel request
     */
    const DEFAULT_SERVICE_DESCRIPTION = 0;

    /**
     * The default app id value set when saving a channel request
     */
    const DEFAULT_APP_ID = 1;

    /**
     * Default MOCOST value set when saving a channel request
     */
    const DEFAULT_MOCOST = 0;

    /**
     * Default bucket id value set when saving a channel request
     */
    const DEFAULT_BUCKET_ID = 0;

    /**
     * Default number of sends value set when saving a channel request
     */
    const DEFAULT_NUMBER_OF_SENDS = 1;

    /**
     * A config for setting the expiry date for a channel request
     */
    const CHANNEL_REQUEST_EXPIRY_PERIOD = 'adddate(now(), INTERVAL 24 HOUR)';

    /**
     * The default passsword for saf
     */
    const DEFAULT_SAF_PASSWORD = 'abcd';

    /**
     * The default url hit to handle an account selection callback
     */
    const DEFAULT_SAFKE_ACCOUNT_SELECTION_HANDLECALLBACK = "https://197.159.100.16:9510/mss/AuthCallback/processAccountSelection";
    // "http://197.159.100.16:9000/mss/AuthCallback/processAccountSelection";
        //"http://localhost/syndication/apis/mss/processAccountSelection";

    /**
     * The username attached on the callback url sent
     */
    const CALLBACK_USERNAME = "ke_safappUser";

    /**
     * The password attached on the callback url sent
     */
    const CALLBACK_PASSWORD = '$2a$08$T/eqpeG6ZlCtN56PnzdDw.FzWeqs9NsH1G4CVoNnpxEp/LRIfMRaG';
    //'$2a$08$T/eqpeG6ZlCtN56PnzdDw.FzWeqs9NsH1G4CVoNnpxEp/LRIfMRaG';

    /**
     * Used to inform saf to encrypt the value sent on the Encparam column
     */
    const ENC = 1;  //enc data

    /**
     * Used to inform saf not to encrypt the value on the Encparam column
     */
    const ENC_DEFAULT = 0;

    /**
     * The initialisation vector
     */
    const IV =  'IGUY2e10'; //initialisation vector

    /**
     * The default safaricom client name tto be appended on the txid sent
     */
    const DEFAULT_SAF_TXID = "SFC";

    /**
     * The default time frame for a sim swap time check
     */
    const SIM_SWAP_TIME_CHECK = 2;
}
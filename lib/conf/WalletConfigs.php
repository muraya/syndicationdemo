<?php


/**
 * A suumary  of WalletConfigs
 *
 * @author ericwanjau
 */
class WalletConfigs {
    //put your code here
    public static $bankWallets=array(
        'MULAWALLWALLET' => array(
            "bank" => "DTB",
            "logRequestParams" => array(
                'apiUrl' => 'http://197.159.100.247:9000/wallet/IS_APIs/CustomerRegistration/fetchCustomerData',
                //'http://10.254.12.5/MB/wallet/Cloud_APIs/CloudRequestLogger/logSyncronousRequest',
                'apiFunction' => 'processCloudRequest',
                'apiCredentials' => array(
                    'username' => 'admin',
                    'password' => 'admin'
                )
            ),
            "fetchCustomerDataParams" => array(

                'apiUrl' => 'http://dtb-ke/MB/wallet/IS_APIs/CustomerRegistration/fetchCustomerData',
                //'http://10.254.12.5/MB/wallet/IS_APIs/CustomerRegistration/fetchCustomerData',
                'apiFunction' => 'fetchCustomerData',
                'apiCredentials' => array(
                    'username' => 'dtb_mb_api_user', //'admin',
                    'password' => 'dtb_@pi_us3r', //'admin'
                )
            ),
        ),
        'DTBKE' => array(
            "bank" => "DTB",
            "logRequestParams" => array(
                'apiUrl' => 'http://dtb-ke/MB/wallet/Cloud_APIs/CloudRequestLogger/logSyncronousRequest',
                //'http://10.254.12.5/MB/wallet/Cloud_APIs/CloudRequestLogger/logSyncronousRequest',
                'apiFunction' => 'processCloudRequest',
                'apiCredentials' => array(
                    'username' => 'admin',
                    'password' => 'admin'
                )
            ),
            "fetchCustomerDataParams" => array(
                'apiUrl' => 'http://197.159.100.247:9000/wallet/IS_APIs/CustomerRegistration/fetchCustomerData/',
                //'http://10.254.12.5/MB/wallet/IS_APIs/CustomerRegistration/fetchCustomerData',
                'apiFunction' => 'fetchCustomerData',
                'apiCredentials' => array(
                    'username' => 'system-user', //'admin',
                    'password' => 'lipuka', //'admin'
                )
            ),
            "walletDebitRequest" => array(
                'apiUrl' => 'http://197.159.100.247:9000/wallet/Cloud_APIs/index',
                //'http://10.254.12.5/MB/wallet/IS_APIs/CustomerRegistration/fetchCustomerData',
                'apiFunction' => 'processCloudRequest',
                'apiCredentials' => array(
                    'username' => 'admin', //'admin',
                    'password' => 'admin', //'admin'
                ),
                "apiParameters" => array(
                    'B2CSERVICEID' => 'BILL_PAY', //service id for b2c
                    'B2CFLAVOUR' => 'open', // flavour for b2c
                    'B2CMERCHANTCODE' => 'MPESASFAPP', //b2c merchant code
                    'B2CCBSID' => 1, //CBSID
                    'B2CENROLL' => 'no', // b2c enroll
                    'B2CCOLUMND' => 'NULL', //column D for b2c
                    'B2CCOLUMNB' => 'NULL', //column b for b2c
                    'B2CCOLUMNC' => 'MPESASFAPP', //column c for b2c
                    'B2CDESTINATION' => '*369*984#', // b2c destination
                    'B2CIMCID' => 2, //b2c imcid
                    'B2CNETWORKID' => 1, // b2c networkID
                    'B2CIMCREQUESTID' => 1, //b2c imcRequestID
                    'B2CREQUESTMODE' => 1, //b2c requestMode
                )
            ),
        ),
        'BARCKE' => array(
            "bank" => "BARCKE",
            "logRequestParams" => array(
                'apiUrl' => 'http://dtb-ke/MB/wallet/Cloud_APIs/CloudRequestLogger/logSyncronousRequest',
                //'http://10.254.12.5/MB/wallet/Cloud_APIs/CloudRequestLogger/logSyncronousRequest',
                'apiFunction' => 'processCloudRequest',
                'apiCredentials' => array(
                    'username' => 'admin',
                    'password' => 'admin'
                )
            ),
            "fetchCustomerDataParams" => array(
                'apiUrl' => 'http://197.159.100.247:9000/wallet/IS_APIs/CustomerRegistration/fetchCustomerData',
                //'http://10.254.12.5/MB/wallet/IS_APIs/CustomerRegistration/fetchCustomerData',
                'apiFunction' => 'fetchCustomerData',
                'apiCredentials' => array(
                    'username' => 'system-user', //'admin',
                    'password' => 'lipuka', //'admin'
                )
            ),
            "walletDebitRequest" => array(
                'apiUrl' => 'http://197.159.100.247:9000/wallet/Cloud_APIs/index',
                //'http://10.254.12.5/MB/wallet/IS_APIs/CustomerRegistration/fetchCustomerData',
                'apiFunction' => 'processCloudRequest',
                'apiCredentials' => array(
                    'username' => 'admin', //'admin',
                    'password' => 'admin', //'admin'
                )
            ),
        ),
    );

}

//
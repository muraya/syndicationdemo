<?php
/**
 * Created by PhpStorm.
 * User: muraya
 * Date: 1/19/18
 * Time: 5:20 PM
 *
 * This class holds the multi dimension array of the clients
 * using the bill Syndicate.
 *
 * @category  Core
 * @package   Core
 * @author    Duncan Muraya <duncan.muraya@cellulant.com>
 * @copyright 2013 Cellulant Ltd
 * @license   Proprietary License
 * @link      http://www.cellulant.com
 */


class ClientConfigs
{
    public static $clientData = array(
//        1 => array(
//            'clientName' => 'Cellulant_KE',
//            'clientCode' => 'CELLULANTKE',
//            'payBillNumber' => '232345',
//            'hasCaviarProfiles'=>true,
//        ),
//        2 => array(
//            'clientName' => 'MULA_KE',
//            'clientCode' => 'MULAKE',
//            'payBillNumber' => '765775',
//            'clientToken' => '81dc9bdb52d04dc20036dbd8313ed055',
//            'hasCaviarProfiles'=>true,
//        ),
        5 => array(
            'clientName' => 'BOA_KE',
            'clientCode' => 'AFRIKE',
            'payBillNumber' => '293745',
            'hasCaviarProfiles' => true,
            'B2CCharge' => 35,
            'isB2CActive' => true,
            'CONTACT_NUMBER' => '+254732390800'
        ),
        12 => array(
            'clientName' => 'Barclays Kenya',
            'clientCode' => 'BARCKE',
            'payBillNumber' => '958574',
            'hasCaviarProfiles' => true,
            'B2CCharge' => 35,
            'isB2CActive' => true,
            'CONTACT_NUMBER' => '+254732390800'
        ),
        18 => array(
            'clientName' => 'EcoBank_KE',
            'clientCode' => 'ECOCKE',
            'payBillNumber' => '435354',
            'hasCaviarProfiles' => true,
            'B2CCharge' => 35,
            'isB2CActive' => true
        ),
//        3 => array(
        1 => array(
            'clientName' => 'DTB_KE',
            'clientCode' => 'DTBKE',
            'payBillNumber' => '722475',
            'hasCaviarProfiles' => true,
            'B2CCharge' => 35,
            'isB2CActive' => true,
            'CONTACT_NUMBER' => '+254732390800'
        ),
//        26 => array(
//            'clientName' => 'DTB_KE',
//            'clientCode' => 'DTBKE',
//            'payBillNumber' => '722475',
//            'hasCaviarProfiles' => true
//        ),
        27 => array(
            'clientName' => 'Stanbic_KE',
            'clientCode' => 'SBICKE',
            'payBillNumber' => '535234',
            'hasCaviarProfiles' => true,
            'B2CCharge' => 35,
            'isB2CActive' => true,
            'CONTACT_NUMBER' => '+254732390800'
        ),
        43 => array(
            'clientName' => 'Faulu_KE',
            'clientCode' => 'FAUMKE',
            'payBillNumber' => '132322',
            'hasCaviarProfiles' => true,
            'B2CCharge' => 35,
            'isB2CActive' => true
        ),
        69 => array(
            'clientName' => 'CELKE',
            'clientCode' => 'CELKE',
            'clientToken' => '81dc9bdb52d04dc20036dbd8313ed055',
            'partnerAPIUrl' => 'http://localhost/TestApps/SafaricomBillReceive/',
            'hasCaviarProfiles' => false,
            'B2CCharge' => 35,
            'isB2CActive' => true,
            'CONTACT_NUMBER' => '+254732390800'
        ),
        426 => array(
            'clientName' => 'BRITAM',
            'clientCode' => 'BRITAM',
            'clientToken' => '81dc9bdb52d04dc20036dbd8313ed055',
            'partnerAPIUrl' => 'http://localhost/TestApps/BritamBillReceive/',
            'hasCaviarProfiles' => false,
            'B2CCharge' => 35,
            'isB2CActive' => true,
            'CONTACT_NUMBER' => '+254732390800'
        ),
        2 => array(
            'clientName' => 'KCB',
            'clientCode' => 'KCB',
            'payBillNumber' => '552565',
            'clientToken' => '81dc9bdb52d04dc20036dbd8313ed055',
            'partnerAPIUrl' => 'http://127.0.0.1/syndication/index.php?url=LinkedAccounts/customerData',
            'hasCaviarProfiles' => false,
            'B2CCharge' => 35,
            'isB2CActive' => true,
            'CONTACT_NUMBER' => '+254732390800'
        ),
        3 => array(
            'clientName' => 'Barclays Bank Kenya',
            'clientCode' => 'BBK',
            'payBillNumber' => '196353',
            'clientToken' => '81dc9bdb52d04dc20036dbd8313ed055',
            'partnerAPIUrl' => 'http://127.0.0.1/syndication/index.php?url=LinkedAccounts/customerData',
            'hasCaviarProfiles' => true,
            'B2CCharge' => 35,
            'isB2CActive' => true,
            'CONTACT_NUMBER' => '+254732390800'
        ),
    );
}
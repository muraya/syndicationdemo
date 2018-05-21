<?php
/**
 * Created by PhpStorm.
 * User: mkenya
 * Date: 4/23/18
 * Time: 9:42 AM
 * A class to haddle all the configs needed to be passed to rabbitMQ
 */

class RabbitMQConfigs
{
    const TRANSACTION_REQUEST_QUEUE_NAME = 'SAFB2CTESTS';//'TRANSACTIONREQUESTCALLBACK';
    const TRANSACTION_REQUESTMQ_URL = 'http://localhost/publisher/transactionRequest/index.php';
    //'https://10.250.250.43:9001/hub/apis/publisherCopy/transactionRequest/index.php';

    const CAVIAR_BANK_PROFILES_QUEUE_NAME = 'CAVIARBANKPROFILES';
    const CAVIAR_BANK_PROFILESMQ_URL = 'http://localhost/publisher/caviarbankprofiles/index.php';


}
<?php
/**
 * Created by PhpStorm.
 * User: muraya
 * Date: 4/6/18
 * Time: 3:19 PM
 */

use PHPUnit\Framework\TestCase;

class WalletRequestWrapperTest extends TestCase
{
    /**
     * @param array $payload this is the payload being pushed to api
     * @param array $expectedPayload is the expected response payload from the api call
     *
     * @dataProvider providerTestFetchMyFIReturnsResponse
     */

    public function testWalletRequestWrapper($payload, $expectedPayload)
    {

        $result = $this->post("http://127.0.0.1/syndication/apis/mss/FetchMyFI/process", json_encode($payload));

        $this -> assertEquals($expectedPayload, $result);

    }

    public function providerTestWalletRequestWrapper()
    {
        return array(
            // test the general response here
            array(
                array(
                    "TransactionRequest"=>  array(
                        "requestHeader"=>array(
                            "txid" => "SFC12362358",
                            "cid" => "FinancialInstitutionToMpesa",
                            "ln" => "apiuser",
                            "ps" => "ZjgyZjY0ODljMWFkMjFkNjM2N2YzMzJiNDAwMmU2YWIyYmNiNGMwNTUwOGM1NmFiMTU5Mzk3NTFlYmNhZjI3MQ==",
                            "dt" => "20170615082020",
                            "pid" => "2171",
                            "pnm" => "Safaricom",
                            "authcode" => "as23sdd3ae23rw23323",
                        ),
                        "requestData"=>array(
                            "data"=>array(
                                array(
                                    "key" => "cburl",
                                    "value" => "http://127.0.0.1/"
                                ),
                                array(
                                    "key" => "Sender",
                                    "value" => "2547220706001"
                                ),
                                array(
                                    "key" => "SenderBankID",
                                    "value" =>  "3"
                                ),
                                array(
                                    "key" => "SenderBankName",
                                    "value" => "Barclays Bank Kenya"
                                ),
                                array(
                                    "key" => "ReceiverIdentity",
                                    "value" => "Customer"
                                ),
                                array(
                                    "key" => "ReceiverIdentifierType",
                                    "value" => "msisdn"
                                ),
                                array(
                                    "key" => "ReceiverIdentifier",
                                    "value" => "2547280840"
                                ),
                                array(
                                    "key" => "AccReference",
                                    "value" =>  "12312312312312312323"
                                ),
                                array(
                                    "key" => "amount",
                                    "value" => "200"
                                ),
                                array(
                                    "key" =>  "Remarks",
                                    "value" => "Transfer to Other MPESA Customer"
                                ),
                            )
                        )
                    )
                )
            ,
                array('id' => 1,
                    'BankAlias' => 'CELLULANTKE',
                    'BankName' => 'Cellulant_KE',
                    'BankShortCode' => '232345',
                    'BankID' => '1',
                    'AuthType' => '2'
                )
            ),
        );
    }


     function post($url,$fields) {

        //open connection
        $ch = curl_init();

        //set the url, number of POST vars, POST data
        curl_setopt($ch, CURLOPT_URL, $url);

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_NOSIGNAL, 1);
        curl_setopt($ch, CURLOPT_POST, count($fields));
        curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);

        //execute post
        $result = curl_exec($ch);
        //close connection
        curl_close($ch);
        return $result;

    }


}
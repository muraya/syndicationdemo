<?php

use PHPUnit\Framework\TestCase;

class FetchMyFITest extends TestCase
{

    /**
     * @param array $payload this is the payload being pushed to api
     * @param array $expectedPayload is the expected response payload from the api call
     *
     * @dataProvider providerTestFetchMyFI
     */

    public function testFetchMyFI($payload, $expectedPayload)
    {

        $result = $this->post("http://localhost/syndication/apis/mss/FetchMyFI/process", json_encode($payload));

        $this -> assertEquals($expectedPayload, json_decode($result, true) );

    }


    public function providerTestFetchMyFI()
    {
        return array(

            /**
             *  Test general success request with all parameters provided
             */

            array(
                array(
                    "TransactionRequest" => array(
                                "requestHeader" => array(
                                    "txid" => "SFC1231231231",
                                    "cid" => "fetchMyFI",
                                    "ln" => "ke_safappUser",
                                    "ps" => "YTk3MzBjOGJhMjEzODM5MjNkOGFiYmUwYjA2Y2JkNzMzYmIwOGM4YjBjODM2YzJiNGZmYjAzODAxNTljMGViMA==",
                                    "dt" => "20180516115422",
                                    "pid" => "2171",
                                    "pnm" => "SAFARICOM",
                                    "authcode" => "as23sdd3ae23rw23323"
                                ),
                            "requestData" => array(
                                        "data" => array(
                                                        array(
                                                            "key" =>"msisdn",
                                                            "value" => "254720375118"
                                                        )
                                                     )
                                                 )
                                            )
                                    )
              ,

                array(
                    "TransactionResponse" => array(
                        "responseHeader" => array(
                            "txid" => "SFC1231231231",
                            "dt" => "20180516115422",
                            "rcode" => 200,
                            "rtext" => "Successfully processed"
                        ),
                            "responseData" => array(
                                        "data" => array(array(
                                            "id" => "1",
                                            "BankAlias" => "DTBKE",
                                            "BankName" => "DTB_KE",
                                            "BankShortCode" => "722475",
                                            "BankID" => "1",
                                            "AuthType" => "2"
                                        ),
                                            array(
                                                "id" => "2",
                                                "BankAlias" => "KCB",
                                                "BankName" => "KCB",
                                                "BankShortCode" => "552565",
                                                "BankID" => "2",
                                                "AuthType" => "2"
                                            ))
                                     )
                                )
                        )
            ),

            /**
             *  Assertion of a non-enrolled mobile number
             */

            array(
                array(
                    "TransactionRequest" => array(
                                "requestHeader" => array(
                                    "txid" => "SFC1231231231",
                                    "cid" => "fetchMyFI",
                                    "ln" => "ke_safappUser",
                                    "ps" => "YTk3MzBjOGJhMjEzODM5MjNkOGFiYmUwYjA2Y2JkNzMzYmIwOGM4YjBjODM2YzJiNGZmYjAzODAxNTljMGViMA==",
                                    "dt" => "20180516115422",
                                    "pid" => "2171",
                                    "pnm" => "SAFARICOM",
                                    "authcode" => "as23sdd3ae23rw23323"
                                ),
                            "requestData" => array(
                                        "data" => array(
                                                        array(
                                                            "key" =>"msisdn",
                                                            "value" => "254720000000"
                                                        )
                                                     )
                                                 )
                                             )
                                        )
              ,

                array(
                    "TransactionResponse" => array(
                        "responseHeader" => array(
                            "txid" => "SFC1231231231",
                            "dt" => "20180516115422",
                            "rcode" => 401,
                            "rtext" => "MSISDN not registered for Mobile banking."
                        ),
                        "responseData" => array(
                            "data" => []
                        )
                    )
                )
            ),

            /**
             *  Assertion of wrong username details
             */

            array(
                array(
                    "TransactionRequest" => array(
                        "requestHeader" => array(
                            "txid" => "SFC1231231231",
                            "cid" => "fetchMyFI",
                            "ln" => "ke_safappUserr",
                            "ps" => "YTk3MzBjOGJhMjEzODM5MjNkOGFiYmUwYjA2Y2JkNzMzYmIwOGM4YjBjODM2YzJiNGZmYjAzODAxNTljMGViMA==",
                            "dt" => "20180516115422",
                            "pid" => "2171",
                            "pnm" => "SAFARICOM",
                            "authcode" => "as23sdd3ae23rw23323"
                        ),
                        "requestData" => array(
                            "data" => array(
                                array(
                                    "key" =>"msisdn",
                                    "value" => "254720375118"
                                )
                            )
                        )
                    )
                )
              ,

                array(
                    "TransactionResponse" => array(
                        "responseHeader" => array(
                            "txid" => "SFC1231231231",
                            "dt" => "20180516115422",
                        ),
                            "responseData" => array(
                                "rcode" => 403,
                                "rtext" => "Wrong username/password/timestamp combination"
                                     )
                                )
                        )
            ),

            /**
             *  Test password/timestamp mismatch details
             *  Changed the last digit of timestamp from 2 to 1
             */

            array(
                array(
                    "TransactionRequest" => array(
                                "requestHeader" => array(
                                    "txid" => "SFC1231231231",
                                    "cid" => "fetchMyFI",
                                    "ln" => "ke_safappUser",
                                    "ps" => "YTk3MzBjOGJhMjEzODM5MjNkOGFiYmUwYjA2Y2JkNzMzYmIwOGM4YjBjODM2YzJiNGZmYjAzODAxNTljMGViMA==",
                                    "dt" => "20180516115421",
                                    "pid" => "2171",
                                    "pnm" => "SAFARICOM",
                                    "authcode" => "as23sdd3ae23rw23323"
                                ),
                            "requestData" => array(
                                "data" => array(
                                                array(
                                                    "key" =>"msisdn",
                                                    "value" => "254720375118"
                                                )
                                            )
                                         )
                                    )
                              )
              ,

                array(
                    "TransactionResponse" => array(
                        "responseHeader" => array(
                            "txid" => "SFC1231231231",
                            "dt" => "20180516115421",
                        ),
                            "responseData" => array(
                                "rcode" => 403,
                                "rtext" => "Wrong username/password/timestamp combination"
                                     )
                                )
                        )
            ),

            /**
             * Assertion of missing request header key values
             */

            array(
                array(
                    "TransactionRequest"=>  array(
                        "requestHeader"=>array (
                            "txid" => "",
                            "cid" => "",
                            "ln" => "",
                            "ps" => "",
                            "dt" =>  "",
                            "pid" => "",
                            "pnm" => "" ,
                            "authcode" => ""
                        ),
                        "requestData"=>array(
                            "data"=>array(
                                array(
                                    'key' => 'msisdn',
                                    'value' => '254713281311'
                                ),
                            )
                        )
                    )
                )
              ,
                array(
                    "TransactionResponse" => array(
                        "responseHeader" => array(
                            "txid" => "",
                            "dt" => "",
                            "rcode" => 405,
                            "rtext" => "Some inputs are wrongly formatted"
                        ),
                        "responseData" => array(
                            "data" => 405
                        )
                    )
                )
            ),

            /**
             *  Assertion of a completely wrong json format
             */

            array(
                array(
                     "url" => "",
                     "clientCode" => "SAFKE",
                    "method" => "",
                    "hubID" => 1222166,
                    "protocol" => "",
                    "serviceID" => 5,
                    "sslEnabled" => 0,
                    "sslCertificatePath" => "",
                    "beepTransactionID" => "63330431",
                    "payerTransactionID" => "KE-ADC-099-180312-121900340-166786-145",
                    "receiverNarration" => "{'extSysParams' => {'extCode' => '0','extDesc' => 'Success'},'extraData' => {'narration' => '254722848351 - JOHN NYANSERA','B2CFunds' => '322825116.00'},'responseDesc' => 'The service request is processed successfully.'}",
                    "receiptNumber" => "MCC88D2GCC",
                    "statusCode" => "183",
                    "statusDescription" => "Payment has been accepted by merchant",
                    "msisdn" => "254714296754",
                    "paymentMode" => "B2M",
                    "currency" => "KES",
                    "accountNumber" => "254712046329",
                    "invoiceNumber" => "KE-CKL-12032018 => 121900-254722848351",
                    "amountPaid" => 45000,
                    "serviceCode" => "MPESAB2C",
                    "paymentDate" => "2018-03-12 12:19:00.0",
                    "payerNarration" => "SAFARICOM",
                    "customerName" => "Customer"
                )
            ,
                array(
                    "TransactionResponse" => array(
                        "responseHeader" => array(
                            "txid" => "",
                            "dt" => "",
                            "rcode" => 405,
                            "rtext" => "Some inputs are wrongly formatted"
                        ),
                        "responseData" => array(
                            "data" => 405
                        )
                    )
                )
            ),
        );
    }


    public function post($url,$fields) {

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
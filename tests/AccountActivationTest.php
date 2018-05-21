<?php

use PHPUnit\Framework\TestCase;

class AccountActivationTest extends TestCase
{

    /**
     * @param array $payload this is the payload being pushed to api
     * @param array $expectedPayload is the expected response payload from the api call
     *
     * @dataProvider providerTestFetchMyFI
     */

    public function testAccountActivation($payload, $expectedPayload)
    {

        $result = $this->post("http://localhost/syndication/apis/mss/bankTransfer", json_encode($payload));

        $this -> assertEquals($expectedPayload, json_decode($result, true) );

    }

    public function providerTestAccountActivation()
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
                            "cid" => "activate",
                            "ln" => "ke_safappUser",
                            "ps" => "YTk3MzBjOGJhMjEzODM5MjNkOGFiYmUwYjA2Y2JkNzMzYmIwOGM4YjBjODM2YzJiNGZmYjAzODAxNTljMGViMA==",
                            "dt" => "20180516115422",
                            "pid" => "2171",
                            "pnm" => "SAFARICOM"
                        ),
                        "requestData" => array(
                            "data" => array(
                                array(
                                    "key" =>"cburl",
                                    "value" => "http://127.0.0.1/"
                                ),
                                array(
                                    "key" =>"authcode",
                                    "value" => "as23sdd3ae23rw23323"
                                ),
                                array(
                                    "key" =>"msisdn",
                                    "value" => "254713281311"
                                ),
                                array(
                                    "key" =>"Firstname",
                                    "value" => "John"
                                ),
                                array(
                                    "key" =>"Lastname",
                                    "value" => "John"
                                ),
                                array(
                                    "key" =>"Surname",
                                    "value" => "Sir"
                                ),
                                array(
                                    "key" =>"idType",
                                    "value" => "1"
                                ),
                                array(
                                    "key" =>"idNumber",
                                    "value" => "123123123123123123"
                                ),
                                array(
                                    "key" =>"IMSI",
                                    "value" => "123asdasd1233sdasd"
                                ),
                                array(
                                    "key" =>"LastSimSwap",
                                    "value" => "201712231325000"
                                ),
                                array(
                                    "key" =>"Remarks",
                                    "value" => "SFC Customer Account Activation"
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
                            "rcode" => 200,
                            "rtext" => "Successfully processed"
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
<?php
/**
 * Created by PhpStorm.
 * User: mkenya
 * Date: 01/03/18
 * Time: 11:42
 *   A stub class used to render the expected responses
 */

class TransactionRequest
{

    public function process()
    {
        $payload = array(
            "TransactionResponse" => array(
                "header" => array(
                    "txid" => "SFC1231231231",
                    "dt" => "20170615082020"
                ),
                "responseData" => array(
                    "rcode" => 200,
                    "rtext" => "Successfully processed"
                )
            )
        );

        echo json_encode($payload);
        exit();
    }

    public function processUSSDCallBack()
    {
        $payload = array(
            "AuthResponse" => array(
                "responseHeader" => array(
                    "txid" => "BNK1231231231",
                    "dt" => "20170615082020"
                ),
                "responseData" => array(
                    "rcode" => 200,
                    "rtext" => "Successfully processed"
                )
            )
        );

        echo json_encode($payload);
        exit();
    }
}
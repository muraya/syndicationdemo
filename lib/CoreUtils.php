<?php

/**
 * This file contains core utilities.
 *
 * PHP VERSION 5.3.6
 */

class CoreUtils
{

    /**
     * Receives the post from API and decodes the JSON string.
     *
     * @return array returns the decoded JSON string or an error message and
     *               appropriate status code if there is an error
     *
     */
    public static function receivePost()
    {
        $jsonPOST = file_get_contents("php://input");

        if ($jsonPOST == null) {
            // No post
            $authStatus['authStatusCode'] = StatusCodes::GENERIC_FAILURE_STATUS_CODE;
            $authStatus['authStatusDescription'] = "Payload not posted successfully to the processor.";

            $response["authStatus"] = $authStatus;
            $response["results"] = array();

            return $response;

        } else {
            $requestPayload = json_decode($jsonPOST, true);

            if ($requestPayload != null || $requestPayload != false) {

                $coreAppLogger = new CoreAppLogger();
                $coreAppLogger->infoLog(Config::INFO, -1, "Received Payload : ". json_encode($requestPayload));

                return $requestPayload;

            } else {
                // Cannot decode
                $authStatus['authStatusCode'] = StatusCodes::GENERIC_FAILURE_STATUS_CODE;
                $authStatus['authStatusDescription'] = "Internal API server error, "
                    . "payload cannot be decoded. Please Contact the Cellulant support.";

                $response["authStatus"] = $authStatus;
                $response["results"] = array();
                return $response;
            }
        }
    }


    /**
     * Renders the final response passed to the function
     * @param $response
     * @param null $uniqueID
     */
    public function renderResponse($response,$uniqueID = null){

        $log = new CoreAppLogger();

        $log->debugLog(Config::INFO, $uniqueID, "RenderingResponse ".  json_encode($response), '', '');

        echo json_encode($response);

        exit();

    }

    /**
     * Appends status code and message to an error response
     * @param null $message
     * @param null $status
     */
    public function renderError($message=null ,$status=null){

        $response=array(
            "authStatus"=>array(
                "authStatusCode"=>($status) ? $status: StatusCodes::GENERIC_FAILURE_STATUS_CODE,
                "authStatusDescription"=>$message,
            ),
            "results"=>array());

        $this -> renderResponse($response,$_GET['url']);
    }



}

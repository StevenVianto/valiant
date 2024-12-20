<?php
if (!function_exists('callAPI')) {
    function callAPI($method, $url, $data = false)
    {
        $curl = curl_init();
        switch (strtoupper($method)) {
            case "POST":
                curl_setopt($curl, CURLOPT_POST, 1);
                if ($data) {
                    curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data));
                }
                break;
            case "PUT":
                curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PUT");
                if ($data) {
                    curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data));
                }
                break;
            case "DELETE":
                curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "DELETE");
                break;
            default: // GET
                if ($data) {
                    $url = sprintf("%s?%s", $url, http_build_query($data));
                }
                break;
        }

        // Set cURL options
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array(
            'Content-Type: application/json',
        ));
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0); // Disable SSL host verification
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0); // Disable SSL peer verification
        
        $result = curl_exec($curl);
        if (!$result) {
            echo curl_error($curl);
            die("Connection Failure");
        }
        curl_close($curl);
        return json_decode($result, true);
    }
}

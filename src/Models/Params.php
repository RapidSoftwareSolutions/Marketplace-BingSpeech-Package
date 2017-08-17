<?php
/**
 * Created by PhpStorm.
 * User: igor
 * Date: 24.07.17
 * Time: 12:04
 */

namespace Models;

class Params
{
    public static function createParams($requiredParams, $optionalParams, $requestParams)
    {
        $data = [];

        foreach ($requiredParams as $rapidName=>$vendorName)
        {
            $data[$vendorName] =  $requestParams[$rapidName];
        }

        foreach ($requestParams as $key=>$value)
        {
            if(array_key_exists($key, $optionalParams) && !empty($value))
            {
                $data[$optionalParams[$key]] = $value;
            }
        }

        return $data;
    }


    public static function createRequestBody($data, $bodyParams)
    {
        $requestBody = [];
        foreach ($data as $key=>$value)
        {
            if(in_array($key, $bodyParams))
            {
                $requestBody[$key] = $value;
            }
        }
        return $requestBody;
    }
}
<?php
/**
 * ActivityApi
 * PHP version 5
 *
 * @category Class
 * @package  BumbalCommunicationPortal
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Bumbal Communication Portal API
 *
 * Bumbal Communication API documentation
 *
 * OpenAPI spec version: 1.0
 * Contact: gerb@bumbal.eu
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace BumbalCommunicationPortal\API;

use \BumbalCommunicationPortal\ApiClient;
use \BumbalCommunicationPortal\ApiException;
use \BumbalCommunicationPortal\Configuration;
use \BumbalCommunicationPortal\ObjectSerializer;

/**
 * ActivityApi Class Doc Comment
 *
 * @category Class
 * @package  BumbalCommunicationPortal
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ActivityApi
{
    /**
     * API Client
     *
     * @var \BumbalCommunicationPortal\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \BumbalCommunicationPortal\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\BumbalCommunicationPortal\ApiClient $apiClient = null)
    {
        if ($apiClient === null) {
            $apiClient = new ApiClient();
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \BumbalCommunicationPortal\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \BumbalCommunicationPortal\ApiClient $apiClient set the API client
     *
     * @return ActivityApi
     */
    public function setApiClient(\BumbalCommunicationPortal\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation activityInfoRetrieve
     *
     * Retrieve Activity Info
     *
     * @param string $token Token of the Requested Activity (required)
     * @throws \BumbalCommunicationPortal\ApiException on non-2xx response
     * @return \BumbalCommunicationPortal\Model\ActivityInfoModel
     */
    public function activityInfoRetrieve($token)
    {
        list($response) = $this->activityInfoRetrieveWithHttpInfo($token);
        return $response;
    }

    /**
     * Operation activityInfoRetrieveWithHttpInfo
     *
     * Retrieve Activity Info
     *
     * @param string $token Token of the Requested Activity (required)
     * @throws \BumbalCommunicationPortal\ApiException on non-2xx response
     * @return array of \BumbalCommunicationPortal\Model\ActivityInfoModel, HTTP status code, HTTP response headers (array of strings)
     */
    public function activityInfoRetrieveWithHttpInfo($token)
    {
        // verify the required parameter 'token' is set
        if ($token === null) {
            throw new \InvalidArgumentException('Missing the required parameter $token when calling activityInfoRetrieve');
        }
        // parse inputs
        $resourcePath = "/activity/retrieve-info";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json', 'application/xml']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json', 'application/xml']);

        // query params
        if ($token !== null) {
            $queryParams['token'] = $this->apiClient->getSerializer()->toQueryValue($token);
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('ApiKey');
        if (strlen($apiKey) !== 0) {
            $headerParams['ApiKey'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\BumbalCommunicationPortal\Model\ActivityInfoModel',
                '/activity/retrieve-info'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\BumbalCommunicationPortal\Model\ActivityInfoModel', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BumbalCommunicationPortal\Model\ActivityInfoModel', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation activityRetrieve
     *
     * Retrieve Activity
     *
     * @param string $token Token of the Requested Activity (required)
     * @param string $zipcode ZipCode of the Requested Activity (required)
     * @throws \BumbalCommunicationPortal\ApiException on non-2xx response
     * @return \BumbalCommunicationPortal\Model\ActivityModel
     */
    public function activityRetrieve($token, $zipcode)
    {
        list($response) = $this->activityRetrieveWithHttpInfo($token, $zipcode);
        return $response;
    }

    /**
     * Operation activityRetrieveWithHttpInfo
     *
     * Retrieve Activity
     *
     * @param string $token Token of the Requested Activity (required)
     * @param string $zipcode ZipCode of the Requested Activity (required)
     * @throws \BumbalCommunicationPortal\ApiException on non-2xx response
     * @return array of \BumbalCommunicationPortal\Model\ActivityModel, HTTP status code, HTTP response headers (array of strings)
     */
    public function activityRetrieveWithHttpInfo($token, $zipcode)
    {
        // verify the required parameter 'token' is set
        if ($token === null) {
            throw new \InvalidArgumentException('Missing the required parameter $token when calling activityRetrieve');
        }
        // verify the required parameter 'zipcode' is set
        if ($zipcode === null) {
            throw new \InvalidArgumentException('Missing the required parameter $zipcode when calling activityRetrieve');
        }
        // parse inputs
        $resourcePath = "/activity/retrieve";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json', 'application/xml']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json', 'application/xml']);

        // query params
        if ($token !== null) {
            $queryParams['token'] = $this->apiClient->getSerializer()->toQueryValue($token);
        }
        // query params
        if ($zipcode !== null) {
            $queryParams['zipcode'] = $this->apiClient->getSerializer()->toQueryValue($zipcode);
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('ApiKey');
        if (strlen($apiKey) !== 0) {
            $headerParams['ApiKey'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\BumbalCommunicationPortal\Model\ActivityModel',
                '/activity/retrieve'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\BumbalCommunicationPortal\Model\ActivityModel', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BumbalCommunicationPortal\Model\ActivityModel', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation validateToken
     *
     * Validate Token
     *
     * @param string $token Token of the Requested Activity (required)
     * @throws \BumbalCommunicationPortal\ApiException on non-2xx response
     * @return \BumbalCommunicationPortal\Model\PortalParameterModel[]
     */
    public function validateToken($token)
    {
        list($response) = $this->validateTokenWithHttpInfo($token);
        return $response;
    }

    /**
     * Operation validateTokenWithHttpInfo
     *
     * Validate Token
     *
     * @param string $token Token of the Requested Activity (required)
     * @throws \BumbalCommunicationPortal\ApiException on non-2xx response
     * @return array of \BumbalCommunicationPortal\Model\PortalParameterModel[], HTTP status code, HTTP response headers (array of strings)
     */
    public function validateTokenWithHttpInfo($token)
    {
        // verify the required parameter 'token' is set
        if ($token === null) {
            throw new \InvalidArgumentException('Missing the required parameter $token when calling validateToken');
        }
        // parse inputs
        $resourcePath = "/activity/validate-token";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json', 'application/xml']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json', 'application/xml']);

        // query params
        if ($token !== null) {
            $queryParams['token'] = $this->apiClient->getSerializer()->toQueryValue($token);
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('ApiKey');
        if (strlen($apiKey) !== 0) {
            $headerParams['ApiKey'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\BumbalCommunicationPortal\Model\PortalParameterModel[]',
                '/activity/validate-token'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\BumbalCommunicationPortal\Model\PortalParameterModel[]', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BumbalCommunicationPortal\Model\PortalParameterModel[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}

<?php
/**
 * CustomerCustomerMetadataV1Api
 * PHP version 5
 *
 * @category Class
 * @package  SpringImport\Swagger\Magento2\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Magento Enterprise
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 2.1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace SpringImport\Swagger\Magento2\Client\Api;

use \SpringImport\Swagger\Magento2\Client\ApiClient;
use \SpringImport\Swagger\Magento2\Client\ApiException;
use \SpringImport\Swagger\Magento2\Client\Configuration;
use \SpringImport\Swagger\Magento2\Client\ObjectSerializer;

/**
 * CustomerCustomerMetadataV1Api Class Doc Comment
 *
 * @category Class
 * @package  SpringImport\Swagger\Magento2\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CustomerCustomerMetadataV1Api
{
    /**
     * API Client
     *
     * @var \SpringImport\Swagger\Magento2\Client\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \SpringImport\Swagger\Magento2\Client\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\SpringImport\Swagger\Magento2\Client\ApiClient $apiClient = null)
    {
        if ($apiClient === null) {
            $apiClient = new ApiClient();
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \SpringImport\Swagger\Magento2\Client\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \SpringImport\Swagger\Magento2\Client\ApiClient $apiClient set the API client
     *
     * @return CustomerCustomerMetadataV1Api
     */
    public function setApiClient(\SpringImport\Swagger\Magento2\Client\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation customerCustomerMetadataV1GetAllAttributesMetadataGet
     *
     * 
     *
     * @throws \SpringImport\Swagger\Magento2\Client\ApiException on non-2xx response
     * @return \SpringImport\Swagger\Magento2\Client\Model\CustomerDataAttributeMetadataInterface[]
     */
    public function customerCustomerMetadataV1GetAllAttributesMetadataGet()
    {
        list($response) = $this->customerCustomerMetadataV1GetAllAttributesMetadataGetWithHttpInfo();
        return $response;
    }

    /**
     * Operation customerCustomerMetadataV1GetAllAttributesMetadataGetWithHttpInfo
     *
     * 
     *
     * @throws \SpringImport\Swagger\Magento2\Client\ApiException on non-2xx response
     * @return array of \SpringImport\Swagger\Magento2\Client\Model\CustomerDataAttributeMetadataInterface[], HTTP status code, HTTP response headers (array of strings)
     */
    public function customerCustomerMetadataV1GetAllAttributesMetadataGetWithHttpInfo()
    {
        // parse inputs
        $resourcePath = "/V1/attributeMetadata/customer";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept([]);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\SpringImport\Swagger\Magento2\Client\Model\CustomerDataAttributeMetadataInterface[]',
                '/V1/attributeMetadata/customer'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\SpringImport\Swagger\Magento2\Client\Model\CustomerDataAttributeMetadataInterface[]', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\SpringImport\Swagger\Magento2\Client\Model\CustomerDataAttributeMetadataInterface[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\SpringImport\Swagger\Magento2\Client\Model\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\SpringImport\Swagger\Magento2\Client\Model\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 0:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\SpringImport\Swagger\Magento2\Client\Model\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation customerCustomerMetadataV1GetAttributeMetadataGet
     *
     * 
     *
     * @param string $attributeCode  (required)
     * @throws \SpringImport\Swagger\Magento2\Client\ApiException on non-2xx response
     * @return \SpringImport\Swagger\Magento2\Client\Model\CustomerDataAttributeMetadataInterface
     */
    public function customerCustomerMetadataV1GetAttributeMetadataGet($attributeCode)
    {
        list($response) = $this->customerCustomerMetadataV1GetAttributeMetadataGetWithHttpInfo($attributeCode);
        return $response;
    }

    /**
     * Operation customerCustomerMetadataV1GetAttributeMetadataGetWithHttpInfo
     *
     * 
     *
     * @param string $attributeCode  (required)
     * @throws \SpringImport\Swagger\Magento2\Client\ApiException on non-2xx response
     * @return array of \SpringImport\Swagger\Magento2\Client\Model\CustomerDataAttributeMetadataInterface, HTTP status code, HTTP response headers (array of strings)
     */
    public function customerCustomerMetadataV1GetAttributeMetadataGetWithHttpInfo($attributeCode)
    {
        // verify the required parameter 'attributeCode' is set
        if ($attributeCode === null) {
            throw new \InvalidArgumentException('Missing the required parameter $attributeCode when calling customerCustomerMetadataV1GetAttributeMetadataGet');
        }
        // parse inputs
        $resourcePath = "/V1/attributeMetadata/customer/attribute/{attributeCode}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept([]);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // path params
        if ($attributeCode !== null) {
            $resourcePath = str_replace(
                "{" . "attributeCode" . "}",
                $this->apiClient->getSerializer()->toPathValue($attributeCode),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\SpringImport\Swagger\Magento2\Client\Model\CustomerDataAttributeMetadataInterface',
                '/V1/attributeMetadata/customer/attribute/{attributeCode}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\SpringImport\Swagger\Magento2\Client\Model\CustomerDataAttributeMetadataInterface', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\SpringImport\Swagger\Magento2\Client\Model\CustomerDataAttributeMetadataInterface', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\SpringImport\Swagger\Magento2\Client\Model\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\SpringImport\Swagger\Magento2\Client\Model\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\SpringImport\Swagger\Magento2\Client\Model\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 0:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\SpringImport\Swagger\Magento2\Client\Model\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation customerCustomerMetadataV1GetAttributesGet
     *
     * 
     *
     * @param string $formCode  (required)
     * @throws \SpringImport\Swagger\Magento2\Client\ApiException on non-2xx response
     * @return \SpringImport\Swagger\Magento2\Client\Model\CustomerDataAttributeMetadataInterface[]
     */
    public function customerCustomerMetadataV1GetAttributesGet($formCode)
    {
        list($response) = $this->customerCustomerMetadataV1GetAttributesGetWithHttpInfo($formCode);
        return $response;
    }

    /**
     * Operation customerCustomerMetadataV1GetAttributesGetWithHttpInfo
     *
     * 
     *
     * @param string $formCode  (required)
     * @throws \SpringImport\Swagger\Magento2\Client\ApiException on non-2xx response
     * @return array of \SpringImport\Swagger\Magento2\Client\Model\CustomerDataAttributeMetadataInterface[], HTTP status code, HTTP response headers (array of strings)
     */
    public function customerCustomerMetadataV1GetAttributesGetWithHttpInfo($formCode)
    {
        // verify the required parameter 'formCode' is set
        if ($formCode === null) {
            throw new \InvalidArgumentException('Missing the required parameter $formCode when calling customerCustomerMetadataV1GetAttributesGet');
        }
        // parse inputs
        $resourcePath = "/V1/attributeMetadata/customer/form/{formCode}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept([]);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // path params
        if ($formCode !== null) {
            $resourcePath = str_replace(
                "{" . "formCode" . "}",
                $this->apiClient->getSerializer()->toPathValue($formCode),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\SpringImport\Swagger\Magento2\Client\Model\CustomerDataAttributeMetadataInterface[]',
                '/V1/attributeMetadata/customer/form/{formCode}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\SpringImport\Swagger\Magento2\Client\Model\CustomerDataAttributeMetadataInterface[]', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\SpringImport\Swagger\Magento2\Client\Model\CustomerDataAttributeMetadataInterface[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\SpringImport\Swagger\Magento2\Client\Model\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\SpringImport\Swagger\Magento2\Client\Model\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 0:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\SpringImport\Swagger\Magento2\Client\Model\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation customerCustomerMetadataV1GetCustomAttributesMetadataGet
     *
     * 
     *
     * @param string $dataInterfaceName  (optional)
     * @throws \SpringImport\Swagger\Magento2\Client\ApiException on non-2xx response
     * @return \SpringImport\Swagger\Magento2\Client\Model\CustomerDataAttributeMetadataInterface[]
     */
    public function customerCustomerMetadataV1GetCustomAttributesMetadataGet($dataInterfaceName = null)
    {
        list($response) = $this->customerCustomerMetadataV1GetCustomAttributesMetadataGetWithHttpInfo($dataInterfaceName);
        return $response;
    }

    /**
     * Operation customerCustomerMetadataV1GetCustomAttributesMetadataGetWithHttpInfo
     *
     * 
     *
     * @param string $dataInterfaceName  (optional)
     * @throws \SpringImport\Swagger\Magento2\Client\ApiException on non-2xx response
     * @return array of \SpringImport\Swagger\Magento2\Client\Model\CustomerDataAttributeMetadataInterface[], HTTP status code, HTTP response headers (array of strings)
     */
    public function customerCustomerMetadataV1GetCustomAttributesMetadataGetWithHttpInfo($dataInterfaceName = null)
    {
        // parse inputs
        $resourcePath = "/V1/attributeMetadata/customer/custom";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept([]);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // query params
        if ($dataInterfaceName !== null) {
            $queryParams['dataInterfaceName'] = $this->apiClient->getSerializer()->toQueryValue($dataInterfaceName);
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\SpringImport\Swagger\Magento2\Client\Model\CustomerDataAttributeMetadataInterface[]',
                '/V1/attributeMetadata/customer/custom'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\SpringImport\Swagger\Magento2\Client\Model\CustomerDataAttributeMetadataInterface[]', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\SpringImport\Swagger\Magento2\Client\Model\CustomerDataAttributeMetadataInterface[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\SpringImport\Swagger\Magento2\Client\Model\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\SpringImport\Swagger\Magento2\Client\Model\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 0:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\SpringImport\Swagger\Magento2\Client\Model\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}

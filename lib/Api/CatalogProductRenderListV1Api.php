<?php
/**
 * CatalogProductRenderListV1Api
 * PHP version 5
 *
 * @category Class
 * @package  SpringImport\Swagger\Magento2\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Magento Commerce for B2B 2.2
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 2.2
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.3.1
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace SpringImport\Swagger\Magento2\Client\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use SpringImport\Swagger\Magento2\Client\ApiException;
use SpringImport\Swagger\Magento2\Client\Configuration;
use SpringImport\Swagger\Magento2\Client\HeaderSelector;
use SpringImport\Swagger\Magento2\Client\ObjectSerializer;

/**
 * CatalogProductRenderListV1Api Class Doc Comment
 *
 * @category Class
 * @package  SpringImport\Swagger\Magento2\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CatalogProductRenderListV1Api
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation catalogProductRenderListV1GetListGet
     *
     * @param  int $storeId storeId (required)
     * @param  string $currencyCode currencyCode (required)
     * @param  string $searchCriteriaFilterGroupsFiltersField Field (optional)
     * @param  string $searchCriteriaFilterGroupsFiltersValue Value (optional)
     * @param  string $searchCriteriaFilterGroupsFiltersConditionType Condition type (optional)
     * @param  string $searchCriteriaSortOrdersField Sorting field. (optional)
     * @param  string $searchCriteriaSortOrdersDirection Sorting direction. (optional)
     * @param  int $searchCriteriaPageSize Page size. (optional)
     * @param  int $searchCriteriaCurrentPage Current page. (optional)
     *
     * @throws \SpringImport\Swagger\Magento2\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \SpringImport\Swagger\Magento2\Client\Model\CatalogDataProductRenderSearchResultsInterface
     */
    public function catalogProductRenderListV1GetListGet($storeId, $currencyCode, $searchCriteriaFilterGroupsFiltersField = null, $searchCriteriaFilterGroupsFiltersValue = null, $searchCriteriaFilterGroupsFiltersConditionType = null, $searchCriteriaSortOrdersField = null, $searchCriteriaSortOrdersDirection = null, $searchCriteriaPageSize = null, $searchCriteriaCurrentPage = null)
    {
        list($response) = $this->catalogProductRenderListV1GetListGetWithHttpInfo($storeId, $currencyCode, $searchCriteriaFilterGroupsFiltersField, $searchCriteriaFilterGroupsFiltersValue, $searchCriteriaFilterGroupsFiltersConditionType, $searchCriteriaSortOrdersField, $searchCriteriaSortOrdersDirection, $searchCriteriaPageSize, $searchCriteriaCurrentPage);
        return $response;
    }

    /**
     * Operation catalogProductRenderListV1GetListGetWithHttpInfo
     *
     * @param  int $storeId (required)
     * @param  string $currencyCode (required)
     * @param  string $searchCriteriaFilterGroupsFiltersField Field (optional)
     * @param  string $searchCriteriaFilterGroupsFiltersValue Value (optional)
     * @param  string $searchCriteriaFilterGroupsFiltersConditionType Condition type (optional)
     * @param  string $searchCriteriaSortOrdersField Sorting field. (optional)
     * @param  string $searchCriteriaSortOrdersDirection Sorting direction. (optional)
     * @param  int $searchCriteriaPageSize Page size. (optional)
     * @param  int $searchCriteriaCurrentPage Current page. (optional)
     *
     * @throws \SpringImport\Swagger\Magento2\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \SpringImport\Swagger\Magento2\Client\Model\CatalogDataProductRenderSearchResultsInterface, HTTP status code, HTTP response headers (array of strings)
     */
    public function catalogProductRenderListV1GetListGetWithHttpInfo($storeId, $currencyCode, $searchCriteriaFilterGroupsFiltersField = null, $searchCriteriaFilterGroupsFiltersValue = null, $searchCriteriaFilterGroupsFiltersConditionType = null, $searchCriteriaSortOrdersField = null, $searchCriteriaSortOrdersDirection = null, $searchCriteriaPageSize = null, $searchCriteriaCurrentPage = null)
    {
        $returnType = '\SpringImport\Swagger\Magento2\Client\Model\CatalogDataProductRenderSearchResultsInterface';
        $request = $this->catalogProductRenderListV1GetListGetRequest($storeId, $currencyCode, $searchCriteriaFilterGroupsFiltersField, $searchCriteriaFilterGroupsFiltersValue, $searchCriteriaFilterGroupsFiltersConditionType, $searchCriteriaSortOrdersField, $searchCriteriaSortOrdersDirection, $searchCriteriaPageSize, $searchCriteriaCurrentPage);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\SpringImport\Swagger\Magento2\Client\Model\CatalogDataProductRenderSearchResultsInterface',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\SpringImport\Swagger\Magento2\Client\Model\ErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation catalogProductRenderListV1GetListGetAsync
     *
     * 
     *
     * @param  int $storeId (required)
     * @param  string $currencyCode (required)
     * @param  string $searchCriteriaFilterGroupsFiltersField Field (optional)
     * @param  string $searchCriteriaFilterGroupsFiltersValue Value (optional)
     * @param  string $searchCriteriaFilterGroupsFiltersConditionType Condition type (optional)
     * @param  string $searchCriteriaSortOrdersField Sorting field. (optional)
     * @param  string $searchCriteriaSortOrdersDirection Sorting direction. (optional)
     * @param  int $searchCriteriaPageSize Page size. (optional)
     * @param  int $searchCriteriaCurrentPage Current page. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function catalogProductRenderListV1GetListGetAsync($storeId, $currencyCode, $searchCriteriaFilterGroupsFiltersField = null, $searchCriteriaFilterGroupsFiltersValue = null, $searchCriteriaFilterGroupsFiltersConditionType = null, $searchCriteriaSortOrdersField = null, $searchCriteriaSortOrdersDirection = null, $searchCriteriaPageSize = null, $searchCriteriaCurrentPage = null)
    {
        return $this->catalogProductRenderListV1GetListGetAsyncWithHttpInfo($storeId, $currencyCode, $searchCriteriaFilterGroupsFiltersField, $searchCriteriaFilterGroupsFiltersValue, $searchCriteriaFilterGroupsFiltersConditionType, $searchCriteriaSortOrdersField, $searchCriteriaSortOrdersDirection, $searchCriteriaPageSize, $searchCriteriaCurrentPage)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation catalogProductRenderListV1GetListGetAsyncWithHttpInfo
     *
     * 
     *
     * @param  int $storeId (required)
     * @param  string $currencyCode (required)
     * @param  string $searchCriteriaFilterGroupsFiltersField Field (optional)
     * @param  string $searchCriteriaFilterGroupsFiltersValue Value (optional)
     * @param  string $searchCriteriaFilterGroupsFiltersConditionType Condition type (optional)
     * @param  string $searchCriteriaSortOrdersField Sorting field. (optional)
     * @param  string $searchCriteriaSortOrdersDirection Sorting direction. (optional)
     * @param  int $searchCriteriaPageSize Page size. (optional)
     * @param  int $searchCriteriaCurrentPage Current page. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function catalogProductRenderListV1GetListGetAsyncWithHttpInfo($storeId, $currencyCode, $searchCriteriaFilterGroupsFiltersField = null, $searchCriteriaFilterGroupsFiltersValue = null, $searchCriteriaFilterGroupsFiltersConditionType = null, $searchCriteriaSortOrdersField = null, $searchCriteriaSortOrdersDirection = null, $searchCriteriaPageSize = null, $searchCriteriaCurrentPage = null)
    {
        $returnType = '\SpringImport\Swagger\Magento2\Client\Model\CatalogDataProductRenderSearchResultsInterface';
        $request = $this->catalogProductRenderListV1GetListGetRequest($storeId, $currencyCode, $searchCriteriaFilterGroupsFiltersField, $searchCriteriaFilterGroupsFiltersValue, $searchCriteriaFilterGroupsFiltersConditionType, $searchCriteriaSortOrdersField, $searchCriteriaSortOrdersDirection, $searchCriteriaPageSize, $searchCriteriaCurrentPage);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'catalogProductRenderListV1GetListGet'
     *
     * @param  int $storeId (required)
     * @param  string $currencyCode (required)
     * @param  string $searchCriteriaFilterGroupsFiltersField Field (optional)
     * @param  string $searchCriteriaFilterGroupsFiltersValue Value (optional)
     * @param  string $searchCriteriaFilterGroupsFiltersConditionType Condition type (optional)
     * @param  string $searchCriteriaSortOrdersField Sorting field. (optional)
     * @param  string $searchCriteriaSortOrdersDirection Sorting direction. (optional)
     * @param  int $searchCriteriaPageSize Page size. (optional)
     * @param  int $searchCriteriaCurrentPage Current page. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function catalogProductRenderListV1GetListGetRequest($storeId, $currencyCode, $searchCriteriaFilterGroupsFiltersField = null, $searchCriteriaFilterGroupsFiltersValue = null, $searchCriteriaFilterGroupsFiltersConditionType = null, $searchCriteriaSortOrdersField = null, $searchCriteriaSortOrdersDirection = null, $searchCriteriaPageSize = null, $searchCriteriaCurrentPage = null)
    {
        // verify the required parameter 'storeId' is set
        if ($storeId === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $storeId when calling catalogProductRenderListV1GetListGet'
            );
        }
        // verify the required parameter 'currencyCode' is set
        if ($currencyCode === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $currencyCode when calling catalogProductRenderListV1GetListGet'
            );
        }

        $resourcePath = '/V1/products-render-info';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($searchCriteriaFilterGroupsFiltersField !== null) {
            $queryParams['searchCriteria[filterGroups][][filters][][field]'] = ObjectSerializer::toQueryValue($searchCriteriaFilterGroupsFiltersField);
        }
        // query params
        if ($searchCriteriaFilterGroupsFiltersValue !== null) {
            $queryParams['searchCriteria[filterGroups][][filters][][value]'] = ObjectSerializer::toQueryValue($searchCriteriaFilterGroupsFiltersValue);
        }
        // query params
        if ($searchCriteriaFilterGroupsFiltersConditionType !== null) {
            $queryParams['searchCriteria[filterGroups][][filters][][conditionType]'] = ObjectSerializer::toQueryValue($searchCriteriaFilterGroupsFiltersConditionType);
        }
        // query params
        if ($searchCriteriaSortOrdersField !== null) {
            $queryParams['searchCriteria[sortOrders][][field]'] = ObjectSerializer::toQueryValue($searchCriteriaSortOrdersField);
        }
        // query params
        if ($searchCriteriaSortOrdersDirection !== null) {
            $queryParams['searchCriteria[sortOrders][][direction]'] = ObjectSerializer::toQueryValue($searchCriteriaSortOrdersDirection);
        }
        // query params
        if ($searchCriteriaPageSize !== null) {
            $queryParams['searchCriteria[pageSize]'] = ObjectSerializer::toQueryValue($searchCriteriaPageSize);
        }
        // query params
        if ($searchCriteriaCurrentPage !== null) {
            $queryParams['searchCriteria[currentPage]'] = ObjectSerializer::toQueryValue($searchCriteriaCurrentPage);
        }
        // query params
        if ($storeId !== null) {
            $queryParams['storeId'] = ObjectSerializer::toQueryValue($storeId);
        }
        // query params
        if ($currencyCode !== null) {
            $queryParams['currencyCode'] = ObjectSerializer::toQueryValue($currencyCode);
        }


        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                []
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                [],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}

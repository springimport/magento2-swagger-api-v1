<?php
/**
 * RmaRmaManagementV1Api
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
 * RmaRmaManagementV1Api Class Doc Comment
 *
 * @category Class
 * @package  SpringImport\Swagger\Magento2\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class RmaRmaManagementV1Api
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
     * Operation rmaRmaManagementV1SaveRmaPost
     *
     * @param  \SpringImport\Swagger\Magento2\Client\Model\Body179 $body body (optional)
     *
     * @throws \SpringImport\Swagger\Magento2\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \SpringImport\Swagger\Magento2\Client\Model\RmaDataRmaInterface
     */
    public function rmaRmaManagementV1SaveRmaPost($body = null)
    {
        list($response) = $this->rmaRmaManagementV1SaveRmaPostWithHttpInfo($body);
        return $response;
    }

    /**
     * Operation rmaRmaManagementV1SaveRmaPostWithHttpInfo
     *
     * @param  \SpringImport\Swagger\Magento2\Client\Model\Body179 $body (optional)
     *
     * @throws \SpringImport\Swagger\Magento2\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \SpringImport\Swagger\Magento2\Client\Model\RmaDataRmaInterface, HTTP status code, HTTP response headers (array of strings)
     */
    public function rmaRmaManagementV1SaveRmaPostWithHttpInfo($body = null)
    {
        $returnType = '\SpringImport\Swagger\Magento2\Client\Model\RmaDataRmaInterface';
        $request = $this->rmaRmaManagementV1SaveRmaPostRequest($body);

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
                        '\SpringImport\Swagger\Magento2\Client\Model\RmaDataRmaInterface',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\SpringImport\Swagger\Magento2\Client\Model\ErrorResponse',
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
     * Operation rmaRmaManagementV1SaveRmaPostAsync
     *
     * 
     *
     * @param  \SpringImport\Swagger\Magento2\Client\Model\Body179 $body (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function rmaRmaManagementV1SaveRmaPostAsync($body = null)
    {
        return $this->rmaRmaManagementV1SaveRmaPostAsyncWithHttpInfo($body)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation rmaRmaManagementV1SaveRmaPostAsyncWithHttpInfo
     *
     * 
     *
     * @param  \SpringImport\Swagger\Magento2\Client\Model\Body179 $body (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function rmaRmaManagementV1SaveRmaPostAsyncWithHttpInfo($body = null)
    {
        $returnType = '\SpringImport\Swagger\Magento2\Client\Model\RmaDataRmaInterface';
        $request = $this->rmaRmaManagementV1SaveRmaPostRequest($body);

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
     * Create request for operation 'rmaRmaManagementV1SaveRmaPost'
     *
     * @param  \SpringImport\Swagger\Magento2\Client\Model\Body179 $body (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function rmaRmaManagementV1SaveRmaPostRequest($body = null)
    {

        $resourcePath = '/V1/returns';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

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
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation rmaRmaManagementV1SaveRmaPut
     *
     * @param  string $id id (required)
     * @param  \SpringImport\Swagger\Magento2\Client\Model\Body177 $body body (optional)
     *
     * @throws \SpringImport\Swagger\Magento2\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \SpringImport\Swagger\Magento2\Client\Model\RmaDataRmaInterface
     */
    public function rmaRmaManagementV1SaveRmaPut($id, $body = null)
    {
        list($response) = $this->rmaRmaManagementV1SaveRmaPutWithHttpInfo($id, $body);
        return $response;
    }

    /**
     * Operation rmaRmaManagementV1SaveRmaPutWithHttpInfo
     *
     * @param  string $id (required)
     * @param  \SpringImport\Swagger\Magento2\Client\Model\Body177 $body (optional)
     *
     * @throws \SpringImport\Swagger\Magento2\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \SpringImport\Swagger\Magento2\Client\Model\RmaDataRmaInterface, HTTP status code, HTTP response headers (array of strings)
     */
    public function rmaRmaManagementV1SaveRmaPutWithHttpInfo($id, $body = null)
    {
        $returnType = '\SpringImport\Swagger\Magento2\Client\Model\RmaDataRmaInterface';
        $request = $this->rmaRmaManagementV1SaveRmaPutRequest($id, $body);

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
                        '\SpringImport\Swagger\Magento2\Client\Model\RmaDataRmaInterface',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\SpringImport\Swagger\Magento2\Client\Model\ErrorResponse',
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
     * Operation rmaRmaManagementV1SaveRmaPutAsync
     *
     * 
     *
     * @param  string $id (required)
     * @param  \SpringImport\Swagger\Magento2\Client\Model\Body177 $body (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function rmaRmaManagementV1SaveRmaPutAsync($id, $body = null)
    {
        return $this->rmaRmaManagementV1SaveRmaPutAsyncWithHttpInfo($id, $body)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation rmaRmaManagementV1SaveRmaPutAsyncWithHttpInfo
     *
     * 
     *
     * @param  string $id (required)
     * @param  \SpringImport\Swagger\Magento2\Client\Model\Body177 $body (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function rmaRmaManagementV1SaveRmaPutAsyncWithHttpInfo($id, $body = null)
    {
        $returnType = '\SpringImport\Swagger\Magento2\Client\Model\RmaDataRmaInterface';
        $request = $this->rmaRmaManagementV1SaveRmaPutRequest($id, $body);

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
     * Create request for operation 'rmaRmaManagementV1SaveRmaPut'
     *
     * @param  string $id (required)
     * @param  \SpringImport\Swagger\Magento2\Client\Model\Body177 $body (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function rmaRmaManagementV1SaveRmaPutRequest($id, $body = null)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling rmaRmaManagementV1SaveRmaPut'
            );
        }

        $resourcePath = '/V1/returns/{id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                '{' . 'id' . '}',
                ObjectSerializer::toPathValue($id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

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
            'PUT',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation rmaRmaManagementV1SearchGet
     *
     * @param \SpringImport\Swagger\Magento2\Client\Model\FrameworkSearchCriteriaInterface $searchCriteria Search criteria. (required)
     *
     * @throws \SpringImport\Swagger\Magento2\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \SpringImport\Swagger\Magento2\Client\Model\RmaDataRmaSearchResultInterface
     */
    public function rmaRmaManagementV1SearchGet($searchCriteria)
    {
        list($response) = $this->rmaRmaManagementV1SearchGetWithHttpInfo($searchCriteria);
        return $response;
    }

    /**
     * Operation rmaRmaManagementV1SearchGetWithHttpInfo
     *
     * @param \SpringImport\Swagger\Magento2\Client\Model\FrameworkSearchCriteriaInterface $searchCriteria Search criteria. (required)
     *
     * @throws \SpringImport\Swagger\Magento2\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \SpringImport\Swagger\Magento2\Client\Model\RmaDataRmaSearchResultInterface, HTTP status code, HTTP response headers (array of strings)
     */
    public function rmaRmaManagementV1SearchGetWithHttpInfo($searchCriteria)
    {
        $returnType = '\SpringImport\Swagger\Magento2\Client\Model\RmaDataRmaSearchResultInterface';
        $request = $this->rmaRmaManagementV1SearchGetRequest($searchCriteria);

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
                        '\SpringImport\Swagger\Magento2\Client\Model\RmaDataRmaSearchResultInterface',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\SpringImport\Swagger\Magento2\Client\Model\ErrorResponse',
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
     * Operation rmaRmaManagementV1SearchGetAsync
     *
     * 
     *
     * @param \SpringImport\Swagger\Magento2\Client\Model\FrameworkSearchCriteriaInterface $searchCriteria Search criteria. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function rmaRmaManagementV1SearchGetAsync($searchCriteria)
    {
        return $this->rmaRmaManagementV1SearchGetAsyncWithHttpInfo($searchCriteria)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation rmaRmaManagementV1SearchGetAsyncWithHttpInfo
     *
     * 
     *
     * @param \SpringImport\Swagger\Magento2\Client\Model\FrameworkSearchCriteriaInterface $searchCriteria Search criteria. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function rmaRmaManagementV1SearchGetAsyncWithHttpInfo($searchCriteria)
    {
        $returnType = '\SpringImport\Swagger\Magento2\Client\Model\RmaDataRmaSearchResultInterface';
        $request = $this->rmaRmaManagementV1SearchGetRequest($searchCriteria);

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
     * Create request for operation 'rmaRmaManagementV1SearchGet'
     *
     * @param \SpringImport\Swagger\Magento2\Client\Model\FrameworkSearchCriteriaInterface $searchCriteria Search criteria. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function rmaRmaManagementV1SearchGetRequest($searchCriteria)
    {

        $resourcePath = '/V1/returns';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($searchCriteriaFilterGroupsFiltersField !== null) {
            $queryParams['searchCriteria[filterGroups][0][filters][0][field]'] = ObjectSerializer::toQueryValue($searchCriteriaFilterGroupsFiltersField);
        }
        // query params
        if ($searchCriteriaFilterGroupsFiltersValue !== null) {
            $queryParams['searchCriteria[filterGroups][0][filters][0][value]'] = ObjectSerializer::toQueryValue($searchCriteriaFilterGroupsFiltersValue);
        }
        // query params
        if ($searchCriteriaFilterGroupsFiltersConditionType !== null) {
            $queryParams['searchCriteria[filterGroups][0][filters][0][conditionType]'] = ObjectSerializer::toQueryValue($searchCriteriaFilterGroupsFiltersConditionType);
        }
        // query params
        if ($searchCriteriaSortOrdersField !== null) {
            $queryParams['searchCriteria[sortOrders][0][field]'] = ObjectSerializer::toQueryValue($searchCriteriaSortOrdersField);
        }
        // query params
        if ($searchCriteriaSortOrdersDirection !== null) {
            $queryParams['searchCriteria[sortOrders][0][direction]'] = ObjectSerializer::toQueryValue($searchCriteriaSortOrdersDirection);
        }
        // query params
        if ($searchCriteriaPageSize !== null) {
            $queryParams['searchCriteria[pageSize]'] = ObjectSerializer::toQueryValue($searchCriteriaPageSize);
        }
        // query params
        if ($searchCriteriaCurrentPage !== null) {
            $queryParams['searchCriteria[currentPage]'] = ObjectSerializer::toQueryValue($searchCriteriaCurrentPage);
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

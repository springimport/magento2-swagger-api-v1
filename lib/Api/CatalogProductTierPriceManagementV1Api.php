<?php
/**
 * CatalogProductTierPriceManagementV1Api
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
 * CatalogProductTierPriceManagementV1Api Class Doc Comment
 *
 * @category Class
 * @package  SpringImport\Swagger\Magento2\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CatalogProductTierPriceManagementV1Api
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
     * Operation catalogProductTierPriceManagementV1AddPost
     *
     * @param  string $sku sku (required)
     * @param  string $customerGroupId &#39;all&#39; can be used to specify &#39;ALL GROUPS&#39; (required)
     * @param  float $price price (required)
     * @param  float $qty qty (required)
     *
     * @throws \SpringImport\Swagger\Magento2\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return bool
     */
    public function catalogProductTierPriceManagementV1AddPost($sku, $customerGroupId, $price, $qty)
    {
        list($response) = $this->catalogProductTierPriceManagementV1AddPostWithHttpInfo($sku, $customerGroupId, $price, $qty);
        return $response;
    }

    /**
     * Operation catalogProductTierPriceManagementV1AddPostWithHttpInfo
     *
     * @param  string $sku (required)
     * @param  string $customerGroupId &#39;all&#39; can be used to specify &#39;ALL GROUPS&#39; (required)
     * @param  float $price (required)
     * @param  float $qty (required)
     *
     * @throws \SpringImport\Swagger\Magento2\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of bool, HTTP status code, HTTP response headers (array of strings)
     */
    public function catalogProductTierPriceManagementV1AddPostWithHttpInfo($sku, $customerGroupId, $price, $qty)
    {
        $returnType = 'bool';
        $request = $this->catalogProductTierPriceManagementV1AddPostRequest($sku, $customerGroupId, $price, $qty);

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
                        'bool',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\SpringImport\Swagger\Magento2\Client\Model\ErrorResponse',
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
     * Operation catalogProductTierPriceManagementV1AddPostAsync
     *
     * 
     *
     * @param  string $sku (required)
     * @param  string $customerGroupId &#39;all&#39; can be used to specify &#39;ALL GROUPS&#39; (required)
     * @param  float $price (required)
     * @param  float $qty (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function catalogProductTierPriceManagementV1AddPostAsync($sku, $customerGroupId, $price, $qty)
    {
        return $this->catalogProductTierPriceManagementV1AddPostAsyncWithHttpInfo($sku, $customerGroupId, $price, $qty)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation catalogProductTierPriceManagementV1AddPostAsyncWithHttpInfo
     *
     * 
     *
     * @param  string $sku (required)
     * @param  string $customerGroupId &#39;all&#39; can be used to specify &#39;ALL GROUPS&#39; (required)
     * @param  float $price (required)
     * @param  float $qty (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function catalogProductTierPriceManagementV1AddPostAsyncWithHttpInfo($sku, $customerGroupId, $price, $qty)
    {
        $returnType = 'bool';
        $request = $this->catalogProductTierPriceManagementV1AddPostRequest($sku, $customerGroupId, $price, $qty);

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
     * Create request for operation 'catalogProductTierPriceManagementV1AddPost'
     *
     * @param  string $sku (required)
     * @param  string $customerGroupId &#39;all&#39; can be used to specify &#39;ALL GROUPS&#39; (required)
     * @param  float $price (required)
     * @param  float $qty (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function catalogProductTierPriceManagementV1AddPostRequest($sku, $customerGroupId, $price, $qty)
    {
        // verify the required parameter 'sku' is set
        if ($sku === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $sku when calling catalogProductTierPriceManagementV1AddPost'
            );
        }
        // verify the required parameter 'customerGroupId' is set
        if ($customerGroupId === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $customerGroupId when calling catalogProductTierPriceManagementV1AddPost'
            );
        }
        // verify the required parameter 'price' is set
        if ($price === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $price when calling catalogProductTierPriceManagementV1AddPost'
            );
        }
        // verify the required parameter 'qty' is set
        if ($qty === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $qty when calling catalogProductTierPriceManagementV1AddPost'
            );
        }

        $resourcePath = '/V1/products/{sku}/group-prices/{customerGroupId}/tiers/{qty}/price/{price}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($sku !== null) {
            $resourcePath = str_replace(
                '{' . 'sku' . '}',
                ObjectSerializer::toPathValue($sku),
                $resourcePath
            );
        }
        // path params
        if ($customerGroupId !== null) {
            $resourcePath = str_replace(
                '{' . 'customerGroupId' . '}',
                ObjectSerializer::toPathValue($customerGroupId),
                $resourcePath
            );
        }
        // path params
        if ($price !== null) {
            $resourcePath = str_replace(
                '{' . 'price' . '}',
                ObjectSerializer::toPathValue($price),
                $resourcePath
            );
        }
        // path params
        if ($qty !== null) {
            $resourcePath = str_replace(
                '{' . 'qty' . '}',
                ObjectSerializer::toPathValue($qty),
                $resourcePath
            );
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
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation catalogProductTierPriceManagementV1GetListGet
     *
     * @param  string $sku sku (required)
     * @param  string $customerGroupId &#39;all&#39; can be used to specify &#39;ALL GROUPS&#39; (required)
     *
     * @throws \SpringImport\Swagger\Magento2\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \SpringImport\Swagger\Magento2\Client\Model\CatalogDataProductTierPriceInterface[]
     */
    public function catalogProductTierPriceManagementV1GetListGet($sku, $customerGroupId)
    {
        list($response) = $this->catalogProductTierPriceManagementV1GetListGetWithHttpInfo($sku, $customerGroupId);
        return $response;
    }

    /**
     * Operation catalogProductTierPriceManagementV1GetListGetWithHttpInfo
     *
     * @param  string $sku (required)
     * @param  string $customerGroupId &#39;all&#39; can be used to specify &#39;ALL GROUPS&#39; (required)
     *
     * @throws \SpringImport\Swagger\Magento2\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \SpringImport\Swagger\Magento2\Client\Model\CatalogDataProductTierPriceInterface[], HTTP status code, HTTP response headers (array of strings)
     */
    public function catalogProductTierPriceManagementV1GetListGetWithHttpInfo($sku, $customerGroupId)
    {
        $returnType = '\SpringImport\Swagger\Magento2\Client\Model\CatalogDataProductTierPriceInterface[]';
        $request = $this->catalogProductTierPriceManagementV1GetListGetRequest($sku, $customerGroupId);

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
                        '\SpringImport\Swagger\Magento2\Client\Model\CatalogDataProductTierPriceInterface[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\SpringImport\Swagger\Magento2\Client\Model\ErrorResponse',
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
     * Operation catalogProductTierPriceManagementV1GetListGetAsync
     *
     * 
     *
     * @param  string $sku (required)
     * @param  string $customerGroupId &#39;all&#39; can be used to specify &#39;ALL GROUPS&#39; (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function catalogProductTierPriceManagementV1GetListGetAsync($sku, $customerGroupId)
    {
        return $this->catalogProductTierPriceManagementV1GetListGetAsyncWithHttpInfo($sku, $customerGroupId)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation catalogProductTierPriceManagementV1GetListGetAsyncWithHttpInfo
     *
     * 
     *
     * @param  string $sku (required)
     * @param  string $customerGroupId &#39;all&#39; can be used to specify &#39;ALL GROUPS&#39; (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function catalogProductTierPriceManagementV1GetListGetAsyncWithHttpInfo($sku, $customerGroupId)
    {
        $returnType = '\SpringImport\Swagger\Magento2\Client\Model\CatalogDataProductTierPriceInterface[]';
        $request = $this->catalogProductTierPriceManagementV1GetListGetRequest($sku, $customerGroupId);

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
     * Create request for operation 'catalogProductTierPriceManagementV1GetListGet'
     *
     * @param  string $sku (required)
     * @param  string $customerGroupId &#39;all&#39; can be used to specify &#39;ALL GROUPS&#39; (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function catalogProductTierPriceManagementV1GetListGetRequest($sku, $customerGroupId)
    {
        // verify the required parameter 'sku' is set
        if ($sku === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $sku when calling catalogProductTierPriceManagementV1GetListGet'
            );
        }
        // verify the required parameter 'customerGroupId' is set
        if ($customerGroupId === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $customerGroupId when calling catalogProductTierPriceManagementV1GetListGet'
            );
        }

        $resourcePath = '/V1/products/{sku}/group-prices/{customerGroupId}/tiers';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($sku !== null) {
            $resourcePath = str_replace(
                '{' . 'sku' . '}',
                ObjectSerializer::toPathValue($sku),
                $resourcePath
            );
        }
        // path params
        if ($customerGroupId !== null) {
            $resourcePath = str_replace(
                '{' . 'customerGroupId' . '}',
                ObjectSerializer::toPathValue($customerGroupId),
                $resourcePath
            );
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
     * Operation catalogProductTierPriceManagementV1RemoveDelete
     *
     * @param  string $sku sku (required)
     * @param  string $customerGroupId &#39;all&#39; can be used to specify &#39;ALL GROUPS&#39; (required)
     * @param  float $qty qty (required)
     *
     * @throws \SpringImport\Swagger\Magento2\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return bool
     */
    public function catalogProductTierPriceManagementV1RemoveDelete($sku, $customerGroupId, $qty)
    {
        list($response) = $this->catalogProductTierPriceManagementV1RemoveDeleteWithHttpInfo($sku, $customerGroupId, $qty);
        return $response;
    }

    /**
     * Operation catalogProductTierPriceManagementV1RemoveDeleteWithHttpInfo
     *
     * @param  string $sku (required)
     * @param  string $customerGroupId &#39;all&#39; can be used to specify &#39;ALL GROUPS&#39; (required)
     * @param  float $qty (required)
     *
     * @throws \SpringImport\Swagger\Magento2\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of bool, HTTP status code, HTTP response headers (array of strings)
     */
    public function catalogProductTierPriceManagementV1RemoveDeleteWithHttpInfo($sku, $customerGroupId, $qty)
    {
        $returnType = 'bool';
        $request = $this->catalogProductTierPriceManagementV1RemoveDeleteRequest($sku, $customerGroupId, $qty);

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
                        'bool',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\SpringImport\Swagger\Magento2\Client\Model\ErrorResponse',
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
     * Operation catalogProductTierPriceManagementV1RemoveDeleteAsync
     *
     * 
     *
     * @param  string $sku (required)
     * @param  string $customerGroupId &#39;all&#39; can be used to specify &#39;ALL GROUPS&#39; (required)
     * @param  float $qty (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function catalogProductTierPriceManagementV1RemoveDeleteAsync($sku, $customerGroupId, $qty)
    {
        return $this->catalogProductTierPriceManagementV1RemoveDeleteAsyncWithHttpInfo($sku, $customerGroupId, $qty)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation catalogProductTierPriceManagementV1RemoveDeleteAsyncWithHttpInfo
     *
     * 
     *
     * @param  string $sku (required)
     * @param  string $customerGroupId &#39;all&#39; can be used to specify &#39;ALL GROUPS&#39; (required)
     * @param  float $qty (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function catalogProductTierPriceManagementV1RemoveDeleteAsyncWithHttpInfo($sku, $customerGroupId, $qty)
    {
        $returnType = 'bool';
        $request = $this->catalogProductTierPriceManagementV1RemoveDeleteRequest($sku, $customerGroupId, $qty);

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
     * Create request for operation 'catalogProductTierPriceManagementV1RemoveDelete'
     *
     * @param  string $sku (required)
     * @param  string $customerGroupId &#39;all&#39; can be used to specify &#39;ALL GROUPS&#39; (required)
     * @param  float $qty (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function catalogProductTierPriceManagementV1RemoveDeleteRequest($sku, $customerGroupId, $qty)
    {
        // verify the required parameter 'sku' is set
        if ($sku === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $sku when calling catalogProductTierPriceManagementV1RemoveDelete'
            );
        }
        // verify the required parameter 'customerGroupId' is set
        if ($customerGroupId === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $customerGroupId when calling catalogProductTierPriceManagementV1RemoveDelete'
            );
        }
        // verify the required parameter 'qty' is set
        if ($qty === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $qty when calling catalogProductTierPriceManagementV1RemoveDelete'
            );
        }

        $resourcePath = '/V1/products/{sku}/group-prices/{customerGroupId}/tiers/{qty}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($sku !== null) {
            $resourcePath = str_replace(
                '{' . 'sku' . '}',
                ObjectSerializer::toPathValue($sku),
                $resourcePath
            );
        }
        // path params
        if ($customerGroupId !== null) {
            $resourcePath = str_replace(
                '{' . 'customerGroupId' . '}',
                ObjectSerializer::toPathValue($customerGroupId),
                $resourcePath
            );
        }
        // path params
        if ($qty !== null) {
            $resourcePath = str_replace(
                '{' . 'qty' . '}',
                ObjectSerializer::toPathValue($qty),
                $resourcePath
            );
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
            'DELETE',
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

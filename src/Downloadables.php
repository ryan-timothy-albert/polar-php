<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Polar;

use Polar\Hooks\HookContext;
use Polar\Models\Operations;
use Speakeasy\Serializer\DeserializationContext;

class Downloadables
{
    private SDKConfiguration $sdkConfiguration;
    /**
     * @param  SDKConfiguration  $sdkConfig
     */
    public function __construct(public SDKConfiguration $sdkConfig)
    {
        $this->sdkConfiguration = $sdkConfig;
    }
    /**
     * @param  string  $baseUrl
     * @param  array<string, string>  $urlVariables
     *
     * @return string
     */
    public function getUrl(string $baseUrl, array $urlVariables): string
    {
        $serverDetails = $this->sdkConfiguration->getServerDetails();

        if ($baseUrl == null) {
            $baseUrl = $serverDetails->baseUrl;
        }

        if ($urlVariables == null) {
            $urlVariables = $serverDetails->options;
        }

        return Utils\Utils::templateUrl($baseUrl, $urlVariables);
    }

    /**
     * Get Downloadable
     *
     * @param  string  $token
     * @return Operations\CustomerPortalDownloadablesCustomerPortalDownloadablesGetResponse
     * @throws \Polar\Models\Errors\APIException
     */
    public function get(string $token): Operations\CustomerPortalDownloadablesCustomerPortalDownloadablesGetResponse
    {
        $request = new Operations\CustomerPortalDownloadablesCustomerPortalDownloadablesGetRequest(
            token: $token,
        );
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/v1/customer-portal/downloadables/{token}', Operations\CustomerPortalDownloadablesCustomerPortalDownloadablesGetRequest::class, $request);
        $urlOverride = null;
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        $httpRequest = new \GuzzleHttp\Psr7\Request('GET', $url);
        $hookContext = new HookContext('customer_portal:downloadables:customer_portal.downloadables.get', null, $this->sdkConfiguration->securitySource);
        $httpRequest = $this->sdkConfiguration->hooks->beforeRequest(new Hooks\BeforeRequestContext($hookContext), $httpRequest);
        $options = Utils\Utils::convertHeadersToOptions($httpRequest, $options);
        $httpRequest = Utils\Utils::removeHeaders($httpRequest);
        try {
            $httpResponse = $this->sdkConfiguration->client->send($httpRequest, $options);
        } catch (\GuzzleHttp\Exception\GuzzleException $error) {
            $res = $this->sdkConfiguration->hooks->afterError(new Hooks\AfterErrorContext($hookContext), null, $error);
            if ($res !== null) {
                $httpResponse = $res;
            }
        }
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();
        if ($statusCode == 400 || $statusCode == 404 || $statusCode == 410 || $statusCode == 422 || $statusCode >= 400 && $statusCode < 500 || $statusCode >= 500 && $statusCode < 600) {
            $res = $this->sdkConfiguration->hooks->afterError(new Hooks\AfterErrorContext($hookContext), $httpResponse, null);
            if ($res !== null) {
                $httpResponse = $res;
            }
        }
        if ($statusCode == 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $httpResponse = $this->sdkConfiguration->hooks->afterSuccess(new Hooks\AfterSuccessContext($hookContext), $httpResponse);

                $serializer = Utils\JSON::createSerializer();
                $responseData = (string) $httpResponse->getBody();
                $obj = $serializer->deserialize($responseData, 'mixed', 'json', DeserializationContext::create()->setRequireAllRequiredProperties(true));
                $response = new Operations\CustomerPortalDownloadablesCustomerPortalDownloadablesGetResponse(
                    statusCode: $statusCode,
                    contentType: $contentType,
                    rawResponse: $httpResponse,
                    any: $obj);

                return $response;
            } else {
                throw new \Polar\Models\Errors\APIException('Unknown content type received', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
            }
        } elseif ($statusCode == 302) {
            $httpResponse = $this->sdkConfiguration->hooks->afterSuccess(new Hooks\AfterSuccessContext($hookContext), $httpResponse);

            return new Operations\CustomerPortalDownloadablesCustomerPortalDownloadablesGetResponse(
                statusCode: $statusCode,
                contentType: $contentType,
                rawResponse: $httpResponse
            );
        } elseif ($statusCode == 400 || $statusCode == 404 || $statusCode == 410 || $statusCode >= 400 && $statusCode < 500 || $statusCode >= 500 && $statusCode < 600) {
            throw new \Polar\Models\Errors\APIException('API error occurred', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
        } elseif ($statusCode == 422) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $httpResponse = $this->sdkConfiguration->hooks->afterSuccess(new Hooks\AfterSuccessContext($hookContext), $httpResponse);

                $serializer = Utils\JSON::createSerializer();
                $responseData = (string) $httpResponse->getBody();
                $obj = $serializer->deserialize($responseData, '\Polar\Models\Errors\HTTPValidationError', 'json', DeserializationContext::create()->setRequireAllRequiredProperties(true));
                throw $obj->toException();
            } else {
                throw new \Polar\Models\Errors\APIException('Unknown content type received', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
            }
        } else {
            throw new \Polar\Models\Errors\APIException('Unknown status code received', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
        }
    }

    /**
     * List Downloadables
     *
     * @param  string|array<string>|null  $organizationId
     * @param  string|array<string>|null  $benefitId
     * @param  ?int  $page
     * @param  ?int  $limit
     * @return Operations\CustomerPortalDownloadablesListResponse
     * @throws \Polar\Models\Errors\APIException
     */
    private function listIndividual(string|array|null $organizationId = null, string|array|null $benefitId = null, ?int $page = null, ?int $limit = null): Operations\CustomerPortalDownloadablesListResponse
    {
        $request = new Operations\CustomerPortalDownloadablesListRequest(
            organizationId: $organizationId,
            benefitId: $benefitId,
            page: $page,
            limit: $limit,
        );
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/v1/customer-portal/downloadables/');
        $urlOverride = null;
        $options = ['http_errors' => false];

        $qp = Utils\Utils::getQueryParams(Operations\CustomerPortalDownloadablesListRequest::class, $request, $urlOverride);
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        $httpRequest = new \GuzzleHttp\Psr7\Request('GET', $url);
        $hookContext = new HookContext('customer_portal:downloadables:list', null, $this->sdkConfiguration->securitySource);
        $httpRequest = $this->sdkConfiguration->hooks->beforeRequest(new Hooks\BeforeRequestContext($hookContext), $httpRequest);
        $options['query'] = Utils\QueryParameters::standardizeQueryParams($httpRequest, $qp);
        $options = Utils\Utils::convertHeadersToOptions($httpRequest, $options);
        $httpRequest = Utils\Utils::removeHeaders($httpRequest);
        try {
            $httpResponse = $this->sdkConfiguration->client->send($httpRequest, $options);
        } catch (\GuzzleHttp\Exception\GuzzleException $error) {
            $res = $this->sdkConfiguration->hooks->afterError(new Hooks\AfterErrorContext($hookContext), null, $error);
            if ($res !== null) {
                $httpResponse = $res;
            }
        }
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();
        if ($statusCode == 422 || $statusCode >= 400 && $statusCode < 500 || $statusCode >= 500 && $statusCode < 600) {
            $res = $this->sdkConfiguration->hooks->afterError(new Hooks\AfterErrorContext($hookContext), $httpResponse, null);
            if ($res !== null) {
                $httpResponse = $res;
            }
        }
        if ($statusCode == 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $httpResponse = $this->sdkConfiguration->hooks->afterSuccess(new Hooks\AfterSuccessContext($hookContext), $httpResponse);

                $serializer = Utils\JSON::createSerializer();
                $responseData = (string) $httpResponse->getBody();
                $obj = $serializer->deserialize($responseData, '\Polar\Models\Components\ListResourceDownloadableRead', 'json', DeserializationContext::create()->setRequireAllRequiredProperties(true));
                $response = new Operations\CustomerPortalDownloadablesListResponse(
                    statusCode: $statusCode,
                    contentType: $contentType,
                    rawResponse: $httpResponse,
                    listResourceDownloadableRead: $obj);
                $sdk = $this;

                $response->next = function () use ($sdk, $request, $responseData, $organizationId, $benefitId, $limit): ?Operations\CustomerPortalDownloadablesListResponse {
                    $page = $request != null ? $request->page : 0;
                    $nextPage = $page + 1;
                    $jsonObject = new \JsonPath\JsonObject($responseData);
                    $numPages = $jsonObject->get('$.pagination.max_page');
                    if ($numPages == null || $numPages[0] <= $page) {
                        return null;
                    }
                    if (! $responseData) {
                        return null;
                    }
                    $jsonObject = new \JsonPath\JsonObject($responseData);
                    $results = $jsonObject->get('$.items');

                    if (is_array($results)) {
                        $results = $results[0];
                    }
                    if (count($results) === 0) {
                        return null;
                    }
                    $limit = $request != null ? $request->limit : 0;
                    if (count($results) < $limit) {
                        return null;
                    }

                    return $sdk->listIndividual(
                        organizationId: $organizationId,
                        benefitId: $benefitId,
                        page: $nextPage,
                        limit: $limit,
                    );
                };


                return $response;
            } else {
                throw new \Polar\Models\Errors\APIException('Unknown content type received', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
            }
        } elseif ($statusCode == 422) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $httpResponse = $this->sdkConfiguration->hooks->afterSuccess(new Hooks\AfterSuccessContext($hookContext), $httpResponse);

                $serializer = Utils\JSON::createSerializer();
                $responseData = (string) $httpResponse->getBody();
                $obj = $serializer->deserialize($responseData, '\Polar\Models\Errors\HTTPValidationError', 'json', DeserializationContext::create()->setRequireAllRequiredProperties(true));
                throw $obj->toException();
            } else {
                throw new \Polar\Models\Errors\APIException('Unknown content type received', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
            }
        } elseif ($statusCode >= 400 && $statusCode < 500 || $statusCode >= 500 && $statusCode < 600) {
            throw new \Polar\Models\Errors\APIException('API error occurred', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
        } else {
            throw new \Polar\Models\Errors\APIException('Unknown status code received', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
        }
    }
    /**
     * List Downloadables
     *
     * @param  string|array<string>|null  $organizationId
     * @param  string|array<string>|null  $benefitId
     * @param  ?int  $page
     * @param  ?int  $limit
     * @return \Generator<Operations\CustomerPortalDownloadablesListResponse>
     * @throws \Polar\Models\Errors\APIException
     */
    public function list(string|array|null $organizationId = null, string|array|null $benefitId = null, ?int $page = null, ?int $limit = null): \Generator
    {
        $res = $this->listIndividual($organizationId, $benefitId, $page, $limit);
        while ($res !== null) {
            yield $res;
            $res = $res->next($res);
        }
    }

}
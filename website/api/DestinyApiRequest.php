<?php

namespace Destiny2\Api;

/**
 * Request builder
 */
class DestinyApiRequest
{
    /**
     * @var string
     */
    private $method;
    /**
     * @var string
     */
    private $endpoint;
    /**
     * @var array
     */
    private $query = [];
    /**
     * @var array
     */
    private $headers = [];
    /**
     * @var array
     */
    private $body = [];

    public function getMethod()
    {
        return $this->method;
    }

    public function setMethod(string $method)
    {
        $method = strtoupper($method);

        if (!in_array($method, ['GET', 'POST', 'PUT', 'DELETE'])) {
            throw new \Exception("Invalid method: {$method}");
        }

        $this->method = $method;
        return $this;
    }

    public function getEndpoint()
    {
        return $this->endpoint;
    }

    public function setEndpoint(string $endpoint)
    {
        $this->endpoint = $endpoint;
        return $this;
    }

    /**
     * Provide a list of endpoint params to replace
     */
    public function buildEndpoint($endpoint, $params = [])
    {
        foreach ($params as $param => $value) {
            str_ireplace("{{$param}}", $value, $endpoint);
        }

        $this->endpoint = $endpoint;
        return $this;
    }

    public function getQuery(): array
    {
        return $this->query;
    }

    public function setQuery(array $query)
    {
        $this->query = $query;
        return $this;
    }

    public function addQuery(string $field, $value)
    {
        $this->query[$field] = $value;
        return $this;
    }

    public function hasQuery()
    {
        return !empty($this->query);
    }

    public function getHeaders(): array
    {
        return $this->headers;
    }

    public function setHeaders(array $headers)
    {
        $this->headers = $headers;
        return $this;
    }

    public function addHeader(string $field, $value)
    {
        $this->headers[$field] = $value;
        return $this;
    }

    public function hasHeaders()
    {
        return !empty($this->headers);
    }

    public function getBody(): array
    {
        return $this->body;
    }

    public function setBody(array $body)
    {
        $this->body = $body;
        return $this;
    }

    public function addBody(string $field, $value)
    {
        $this->body[$field] = $value;
        return $this;
    }

    public function hasBody(): bool
    {
        return !empty($this->body);
    }
}

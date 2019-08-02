<?php

namespace Destiny2\Api;

use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;
use Symfony\Component\HttpClient\HttpClient;
use Symfony\Contracts\HttpClient\HttpClientInterface;

/**
 * Handles requests to the API
 */
class DestinyApiRequestHandler
{
    /**
     * The endpoint for accessing the Bungie.net API.
     */
    const URI_API = 'https://www.bungie.net';
    /**
     * Authorization endpoint
     */
    const URI_AUTHORISE = 'https://www.bungie.net/en/oauth/authorize';
    /**
     * The endpoint for accessing the Bungie.net API.
     */
    const URI_PLATFORM = '/Platform';
    /**
     * When you have registered an Application at https://www.bungie.net/en/Application,
     * you will receive an API key. You should pass it in via this header with every request.
     */
    const API_KEY_HEADER = 'X-API-Key';
    /**
     * @var ParameterBagInterface
     */
    protected $param;
    /**
     * @var string
     */
    private $accessToken;

    public function __construct(ParameterBagInterface $param)
    {
        $this->param = $param;
    }

    /**
     * Get a http client
     */
    private function getClient(): HttpClientInterface
    {
        return HttpClient::create([
            'base_uri' => self::URI_API
        ]);
    }

    /**
     * @param string|null $accessToken
     * @return DestinyApiRequestHandler
     */
    protected function setAccessToken(?string $accessToken = null): self
    {
        $this->accessToken = $accessToken ?: DestinyApiToken::getToken('access_token');
        return $this;
    }

    /**
     * @param DestinyApiRequest $request
     * @return array
     * @throws \Symfony\Contracts\HttpClient\Exception\ClientExceptionInterface
     * @throws \Symfony\Contracts\HttpClient\Exception\DecodingExceptionInterface
     * @throws \Symfony\Contracts\HttpClient\Exception\RedirectionExceptionInterface
     * @throws \Symfony\Contracts\HttpClient\Exception\ServerExceptionInterface
     * @throws \Symfony\Contracts\HttpClient\Exception\TransportExceptionInterface
     */
    protected function request(DestinyApiRequest $request): array
    {
        // build options
        $options = [
            'headers' => [
                self::API_KEY_HEADER => $this->param->get('DESTINY_API_KEY'),
            ],
        ];

        // if we have queries
        if ($request->hasQuery()) {
            $options = array_merge($options, [
                'query' => $request->getQuery()
            ]);
        }

        // if we have body
        if ($request->hasQuery()) {
            $options = array_merge($options, [
                'body' => $request->getBody()
            ]);
        }

        // if we have headers
        if ($request->hasQuery()) {
            $options['headers'] = array_merge($options['headers'], $request->getHeaders());
        }

        // if we have an access token, use that
        if ($this->accessToken) {
            $options = array_merge($options, [
                'auth_bearer' => $this->accessToken
            ]);
        } else {
            $options = array_merge($options, [
                'auth_basic' => [
                    $this->param->get('DESTINY_API_CLIENT_ID'),
                    $this->param->get('DESTINY_API_CLIENT_SECRET')
                ]
            ]);
        }

        try {
            $response = $this->getClient()->request($request->getMethod(), $request->getEndpoint(), $options);
            $response->getContent();
        } catch (\Exception $ex) {
            print_r(
                $response->getInfo('debug')
            );
            die;
        }

        // reset access token
        $this->setAccessToken(null);
        return $response->toArray();
    }
}

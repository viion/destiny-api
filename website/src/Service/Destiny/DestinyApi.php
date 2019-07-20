<?php

namespace App\Service\Destiny;

use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;
use Symfony\Component\HttpClient\HttpClient;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class DestinyApi
{
    /**
     * When you have registered an Application at https://www.bungie.net/en/Application,
     * you will receive an API key. You should pass it in via this header with every request.
     */
    const API_KEY_HEADER = 'X-API-Key';
    /**
     * The endpoint for accessing the Bungie.net API. You probably guessed that already.
     */
    const ENDPOINT_API = 'https://www.bungie.net';
    /**
     * Authorization endpoint
     */
    const ENDPOINT_AUTHORISE = 'https://www.bungie.net/en/oauth/authorize';
    /**
     * https://bungie-net.github.io/multi/index.html#about-security
     */
    const ENDPOINT_TOKEN = '/App/Oauth/Token/';
    /**
     * https://bungie-net.github.io/multi/operation_get_User-GetBungieNetUserById.html#operation_get_User-GetBungieNetUserById
     */
    const ENDPOINT_USER_GET_BUNGLE_NET_USER_BY_ID = '/User/GetBungieNetUserById/%s';
    
    const ENDPOINT_USER_GET_MEMBERSHIP_CURRENT = '/User/GetMembershipsForCurrentUser';
    
    const ENDPOINT_USER_GET_MEMBERSHIP_DATA_BY_ID = '/User/GetMembershipsById/%s/%s';
    
    const ENDPOINT_DESTINY2_GET_LINKED_PROFILES = '/Destiny2/%s/Profile/%s/LinkedProfiles/';
    
    const ENDPOINT_DESTINY2_GET_PROFILE = '/Destiny2/%s/Profile/%s/';
    
    const ENDPOINT_DESTINY2_GET_CHARACTER = '/Destiny2/%s/Profile/%s/Character/%s/';
    
    
    /**
     * Generics
     */
    const METHOD_GET = 'GET';
    const METHOD_POST = 'POST';
    const METHOD_PUT = 'PUT';
    const METHOD_DELETE = 'DELETE';
    
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
            'base_uri' => self::ENDPOINT_API
        ]);
    }
    
    protected function setAccessToken(?string $accessToken = null): self
    {
        $this->accessToken = $accessToken;
        return $this;
    }
    
    /**
     * @param $method
     * @param $endpoint
     * @param $body
     */
    protected function request($method, $endpoint, $params = [])
    {
        $options = [
            'headers' => [
                self::API_KEY_HEADER => $this->param->get('DESTINY_API_KEY'),
            ],
        ];

        // if we have a post body
        if ($params) {
            $options = array_merge($options, $params);
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
        
        // grab response
        $response = $this->getClient()->request(
            $method,
            "/Platform" . $endpoint,
            $options
        );
        
        try {
            $response->getContent();
        } catch (\Exception $ex) {
            print_r(
                $response->getInfo('debug')
            );
            die;
        }
        
        // reset access token
        $this->setAccessToken(null);
        
        return $response;
    }
}

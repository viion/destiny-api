<?php

namespace App\Service\Destiny\API;

use App\Service\Destiny\DestinyApi;
use Delight\Cookie\Cookie;
use Ramsey\Uuid\Uuid;

/**
 * Documentation
 * https://github.com/Bungie-net/api/wiki/OAuth-Documentation
 */
class Auth extends DestinyApi
{
    /**
     * Cookie name for storing the token
     */
    const COOKIE_NAME = 'destiny2_auth_token';
    /**
     * response_type: Must be “code”
     */
    const QUERY_RESPONSE_TYPE = 'response_type';
    /**
     * client_id: Provided by the portal
     */
    const QUERY_CLIENT_ID = 'client_id';
    /**
     * client_secret: Confidential clients may provide this parameter if they are not using the
     * Authorization header. Public clients must not provide the client_secret parameter.
     */
    const QUERY_CLIENT_SECRET = 'client_secret';
    /**
     * state: Provide a query state
     */
    const QUERY_STATE = 'state';
    /**
     * The redirect_uri parameter is optional. If it is present, it must be a
     * case sensitive exact match with the value registered in the portal.
     */
    const QUERY_REDIRECT_URI = 'redirect_uri';
    /**
     * Value must be set to “authorization_code”.
     */
    const QUERY_GRANT_TYPE = 'grant_type';
    /**
     * code: Authorization code received from the authorization endpoint.
     */
    const QUERY_CODE = 'code';
    /**
     * refresh_token: Previously issued refresh token
     */
    const QUERY_REFRESH_TOKEN = 'refresh_token';
    /**
     * Hard coded response type
     */
    const RESPONSE_TYPE = 'code';
    /**
     * Grant type for authorising a new token
     */
    const GRANT_TYPE_AUTHORISE = 'authorization_code';
    /**
     * Grant type for refreshing a token
     */
    const GRANT_TYPE_REFRESH = 'refresh_token';
    
    /**
     * Request an authorisation url
     */
    public function requestAuthorisation()
    {
        $queryParams = http_build_query([
            self::QUERY_RESPONSE_TYPE => self::RESPONSE_TYPE,
            self::QUERY_CLIENT_ID     => $this->param->get('DESTINY_API_CLIENT_ID'),
            self::QUERY_STATE         => Uuid::uuid4()->toString(),
        ]);
        
        return DestinyApi::ENDPOINT_AUTHORISE .'?'. $queryParams;
    }
    
    /**
     * Request a token from our authorisation code
     */
    public function requestToken(string $code)
    {
        return $this->request(
            DestinyApi::METHOD_POST,
            DestinyApi::ENDPOINT_TOKEN,
            [
                'body' => [
                    self::QUERY_GRANT_TYPE => self::GRANT_TYPE_AUTHORISE,
                    self::QUERY_CODE => $code,
                ]
            ]
        )->toArray();
    }
    
    /**
     * Refresh a users token
     */
    public function refreshToken()
    {
        $token = $this->getToken();
    
        return $this->request(
            DestinyApi::METHOD_POST,
            DestinyApi::ENDPOINT_TOKEN,
            [
                'body' => [
                    self::QUERY_GRANT_TYPE => self::GRANT_TYPE_REFRESH,
                    self::QUERY_REFRESH_TOKEN => $token['refresh_token'],
                ]
            ]
        )->toArray();
    }
    
    /**
     * Store a retrieved token in the users cookies
     */
    public function setToken(array $token)
    {
        $cookie = new Cookie(self::COOKIE_NAME);
        $cookie->setValue(json_encode($token));
        $cookie->setMaxAge($token['refresh_expires_in']);
        $cookie->setPath('/');
        $cookie->setDomain('destiny2.local');
        $cookie->save();
    }
    
    /**
     * Restore a users tokens from their cookies
     */
    public function getToken()
    {
        $token = Cookie::get(self::COOKIE_NAME);
        
        if (empty($token)) {
            return null;
        }
        
        return json_decode($token, true);
    }
}

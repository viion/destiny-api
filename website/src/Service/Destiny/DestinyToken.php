<?php

namespace App\Service\Destiny;

use Delight\Cookie\Cookie;

class DestinyToken
{
    /**
     * Cookie name for storing the token
     */
    const COOKIE_NAME = 'destiny2_auth_token';
    /**
     * Store a retrieved token in the users cookies
     */
    public static function setToken(array $token)
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
    public static function getToken($field = null)
    {
        $token = Cookie::get(self::COOKIE_NAME);

        if (empty($token)) {
            return null;
        }

        $token = json_decode($token, true);

        if ($field) {
            return $token[$field] ?? null;
        }

        return $token;
    }
}

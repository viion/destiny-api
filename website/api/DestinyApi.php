<?php

namespace Destiny2\Api;

class DestinyApi
{
    /**
     * The endpoint for accessing the Bungie.net API.
     */
    const ENDPOINT_API = 'https://www.bungie.net';
    /**
     * Authorization endpoint
     */
    const ENDPOINT_AUTHORISE = 'https://www.bungie.net/en/oauth/authorize';
    /**
     * The endpoint for accessing the Bungie.net API.
     */
    const ENDPOINT_PLATFORM = '/Platform';
    /**
     * When you have registered an Application at https://www.bungie.net/en/Application,
     * you will receive an API key. You should pass it in via this header with every request.
     */
    const API_KEY_HEADER = 'X-API-Key';
}

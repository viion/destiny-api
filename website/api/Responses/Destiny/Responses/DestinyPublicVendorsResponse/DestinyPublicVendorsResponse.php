<?php

namespace Destiny2\Api\Responses\Destiny\Responses\DestinyPublicVendorsResponse;

/**
 * DestinyPublicVendorsResponse
 *
 * A response containing all valid components for the public Vendors endpoint.
 *  It is a decisively smaller subset of data compared to what we can get when we
 * know the specific user making the request.
 *  If you want any of the other data - item details, whether or not you can buy
 * it, etc... you'll have to call in the context of a character. I know, sad but
 * true.
 */
class DestinyPublicVendorsResponse
{

    const TYPE = 'object';

    const OBJECT = 'Destiny2\\Api\\Objects\\Destiny\\Responses\\DestinyPublicVendorsResponse\\DestinyPublicVendorsResponse::class';


}


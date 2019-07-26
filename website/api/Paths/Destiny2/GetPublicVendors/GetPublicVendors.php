<?php

namespace Destiny2\Api\Paths\Destiny2\GetPublicVendors;

/**
 * GetPublicVendors
 *
 * Get items available from vendors where the vendors have items for sale that are
 * common for everyone. If any portion of the Vendor's available inventory is
 * character or account specific, we will be unable to return their data from this
 * endpoint due to the way that available inventory is computed. As I am often
 * guilty of saying: 'It's a long story...'
 */
class GetPublicVendors
{

    const SUMMARY = 'Destiny2.GetPublicVendors';

    const URI = '/Destiny2//Vendors/';

    const METHOD = 'GET';

    const TAGS = [
        'Destiny2',
        'Preview',
    ];

    const OPERATION_ID = 'Destiny2.GetPublicVendors';

    const IS_DEPRECATED = false;

    const IS_PREVIEW = true;

    const RESPONSE = [
        200 => '#/components/responses/Destiny.Responses.DestinyPublicVendorsResponse',
    ];

    public static function build($parameters)
    {
        $test = 1;
        return $test;
    }


}


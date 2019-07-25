<?php

namespace Destiny2\Api\Paths\Destiny2;

/**
 * GetVendor
 *
 * Get the details of a specific Vendor.
 */
class GetVendor
{

    const NAME = 'Destiny2.GetVendor';

    const URI = '/Destiny2/{membershipType}/Profile/{destinyMembershipId}/Character/{characterId}/Vendors/{vendorHash}/';

    const METHOD = 'GET';

    const TAGS = [
        'Destiny2',
    ];

    const OPERATION_ID = 'Destiny2.GetVendor';

    const IS_DEPRECATED = false;

    const IS_PREVIEW = false;

    const RESPONSE = [
        200 => '#/components/responses/Destiny.Responses.DestinyVendorResponse',
    ];

    public static function build($parameters)
    {
        $test = 1;
        return $test;
    }


}


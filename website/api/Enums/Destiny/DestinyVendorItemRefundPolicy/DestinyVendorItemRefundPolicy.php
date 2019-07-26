<?php

namespace Destiny2\Api\Enums\Destiny\DestinyVendorItemRefundPolicy;

/**
 * DestinyVendorItemRefundPolicy
 *
 * The action that happens when the user attempts to refund an item.
 */
class DestinyVendorItemRefundPolicy
{

    const TYPE = 'integer';

    const TYPE_FORMAT = 'int32';

    const ENUMS_ALLOWED = [
        '0',
        '1',
        '2',
    ];

    const ENUMS = [
        'NotRefundable' => '0',
        'DeletesItem' => '1',
        'RevokesLicense' => '2',
    ];


}


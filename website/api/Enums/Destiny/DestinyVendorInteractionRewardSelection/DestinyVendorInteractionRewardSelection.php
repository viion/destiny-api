<?php

namespace Destiny2\Api\Enums\Destiny\DestinyVendorInteractionRewardSelection;

/**
 * DestinyVendorInteractionRewardSelection
 *
 * When a Vendor Interaction provides rewards, they'll either let you choose one or
 * let you have all of them. This determines which it will be.
 */
class DestinyVendorInteractionRewardSelection
{

    const TYPE = 'integer';

    const TYPE_FORMAT = 'int32';

    const ENUMS_ALLOWED = [
        '0',
        '1',
        '2',
    ];

    const ENUMS = [
        'None' => '0',
        'One' => '1',
        'All' => '2',
    ];


}


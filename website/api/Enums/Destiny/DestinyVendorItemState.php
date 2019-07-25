<?php

namespace Destiny2\Api\Enums\Destiny;

/**
 * DestinyVendorItemState
 */
class DestinyVendorItemState
{

    const NAME = 'Destiny.DestinyVendorItemState';

    const TYPE = 'integer';

    const TYPE_FORMAT = 'int32';

    const ENUMS_ALLOWED = [
        '0',
        '1',
        '2',
        '4',
        '8',
        '16',
        '32',
        '64',
        '128',
        '256',
        '512',
    ];

    const ENUMS = [
        'None' => '0',
        'Incomplete' => '1',
        'RewardAvailable' => '2',
        'Complete' => '4',
        'New' => '8',
        'Featured' => '16',
        'Ending' => '32',
        'OnSale' => '64',
        'Owned' => '128',
        'WideView' => '256',
        'NexusAttention' => '512',
    ];


}


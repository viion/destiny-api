<?php

namespace Destiny2\Api\Enums\Destiny\DestinyVendorItemState;

/**
 * DestinyVendorItemState
 *
 * The possible states of Destiny Profile Records. IMPORTANT: Any given item can
 * theoretically have many of these states simultaneously: as a result, this was
 * altered to be a flags enumeration/bitmask for v3.2.0.
 */
class DestinyVendorItemState
{

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


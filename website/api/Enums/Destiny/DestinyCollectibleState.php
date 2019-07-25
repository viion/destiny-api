<?php

namespace Destiny2\Api\Enums\Destiny;

/**
 * DestinyCollectibleState
 */
class DestinyCollectibleState
{

    const NAME = 'Destiny.DestinyCollectibleState';

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
    ];

    const ENUMS = [
        'None' => '0',
        'NotAcquired' => '1',
        'Obscured' => '2',
        'Invisible' => '4',
        'CannotAffordMaterialRequirements' => '8',
        'InventorySpaceUnavailable' => '16',
        'UniquenessViolation' => '32',
        'PurchaseDisabled' => '64',
    ];


}


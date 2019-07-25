<?php

namespace Destiny2\Api\Enums\Destiny;

/**
 * EquipFailureReason
 */
class EquipFailureReason
{

    const NAME = 'Destiny.EquipFailureReason';

    const TYPE = 'integer';

    const TYPE_FORMAT = 'int32';

    const ENUMS_ALLOWED = [
        '0',
        '1',
        '2',
        '4',
        '8',
        '16',
    ];

    const ENUMS = [
        'None' => '0',
        'ItemUnequippable' => '1',
        'ItemUniqueEquipRestricted' => '2',
        'ItemFailedUnlockCheck' => '4',
        'ItemFailedLevelCheck' => '8',
        'ItemNotOnCharacter' => '16',
    ];


}


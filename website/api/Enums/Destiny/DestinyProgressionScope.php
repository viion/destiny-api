<?php

namespace Destiny2\Api\Enums\Destiny;

/**
 * DestinyProgressionScope
 */
class DestinyProgressionScope
{

    const NAME = 'Destiny.DestinyProgressionScope';

    const TYPE = 'integer';

    const TYPE_FORMAT = 'int32';

    const ENUMS_ALLOWED = [
        '0',
        '1',
        '2',
        '3',
        '4',
        '5',
        '6',
        '7',
        '8',
    ];

    const ENUMS = [
        'Account' => '0',
        'Character' => '1',
        'Clan' => '2',
        'Item' => '3',
        'ImplicitFromEquipment' => '4',
        'Mapped' => '5',
        'MappedAggregate' => '6',
        'MappedStat' => '7',
        'MappedUnlockValue' => '8',
    ];


}


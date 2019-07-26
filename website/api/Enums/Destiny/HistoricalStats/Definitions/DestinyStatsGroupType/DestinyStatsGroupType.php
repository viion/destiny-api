<?php

namespace Destiny2\Api\Enums\Destiny\HistoricalStats\Definitions\DestinyStatsGroupType;

/**
 * DestinyStatsGroupType
 *
 * If the enum value is > 100, it is a "special" group that cannot be queried for
 * directly (special cases apply to when they are returned, and are not relevant in
 * general cases)
 */
class DestinyStatsGroupType
{

    const TYPE = 'integer';

    const TYPE_FORMAT = 'int32';

    const ENUMS_ALLOWED = [
        '0',
        '1',
        '2',
        '3',
        '100',
        '101',
        '102',
        '103',
        '104',
    ];

    const ENUMS = [
        'None' => '0',
        'General' => '1',
        'Weapons' => '2',
        'Medals' => '3',
        'ReservedGroups' => '100',
        'Leaderboard' => '101',
        'Activity' => '102',
        'UniqueWeapon' => '103',
        'Internal' => '104',
    ];


}


<?php

namespace Destiny2\Api\Enums\Destiny\DestinyGameVersions;

/**
 * DestinyGameVersions
 *
 * A flags enumeration/bitmask indicating the versions of the game that a given
 * user has purchased.
 */
class DestinyGameVersions
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
    ];

    const ENUMS = [
        'None' => '0',
        'Destiny2' => '1',
        'DLC1' => '2',
        'DLC2' => '4',
        'Forsaken' => '8',
        'YearTwoAnnualPass' => '16',
        'Shadowkeep' => '32',
    ];


}


<?php

namespace Destiny2\Api\Types\Destiny\HistoricalStats\Definitions\DestinyActivityModeType;

/**
 * DestinyActivityModeType
 *
 * No description
 */
class DestinyActivityModeType
{

    const TYPE = 'array';

    const ITEMS = [
        'type' => 'integer',
        'description' => 'For historical reasons, this list will have both D1 and D2-relevant Activity Modes in it. Please don\'t take this to mean that some D1-only feature is coming back!',
        'format' => 'int32',
        'reference' => '#/components/schemas/Destiny.HistoricalStats.Definitions.DestinyActivityModeType',
        'is_bitmask' => false,
    ];


}


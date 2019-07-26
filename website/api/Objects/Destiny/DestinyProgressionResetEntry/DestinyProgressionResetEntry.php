<?php

namespace Destiny2\Api\Objects\Destiny\DestinyProgressionResetEntry;

/**
 * DestinyProgressionResetEntry
 *
 * Represents a season and the number of resets you had in that season.
 *  We do not necessarily - even for progressions with resets - track it over all
 * seasons. So be careful and check the season numbers being returned.
 */
class DestinyProgressionResetEntry
{

    const TYPE = 'object';

    public $season = [
        'type' => 'integer',
        'format' => 'int32',
    ];

    public $resets = [
        'type' => 'integer',
        'format' => 'int32',
    ];


}


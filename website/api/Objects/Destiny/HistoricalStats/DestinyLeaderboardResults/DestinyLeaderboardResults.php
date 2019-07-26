<?php

namespace Destiny2\Api\Objects\Destiny\HistoricalStats\DestinyLeaderboardResults;

/**
 * DestinyLeaderboardResults
 *
 * No description
 */
class DestinyLeaderboardResults
{

    const TYPE = 'object';

    public $focusMembershipId = [
        'type' => 'integer',
        'description' => 'Indicate the membership ID of the account that is the focal point of the provided leaderboards.',
        'format' => 'int64',
        'nullable' => true,
    ];

    public $focusCharacterId = [
        'type' => 'integer',
        'description' => 'Indicate the character ID of the character that is the focal point of the provided leaderboards. May be null, in which case any character from the focus membership can appear in the provided leaderboards.',
        'format' => 'int64',
        'nullable' => true,
    ];


}


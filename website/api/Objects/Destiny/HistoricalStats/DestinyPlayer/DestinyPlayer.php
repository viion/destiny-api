<?php

namespace Destiny2\Api\Objects\Destiny\HistoricalStats\DestinyPlayer;

/**
 * DestinyPlayer
 *
 * No description
 */
class DestinyPlayer
{

    const TYPE = 'object';

    public $destinyUserInfo = [
        'type' => 'object',
        'allOf' => [
            [
                '$ref' => '#/components/schemas/User.UserInfoCard',
            ],
        ],
        'description' => 'Details about the player as they are known in game (platform display name, Destiny emblem)',
    ];

    public $characterClass = [
        'type' => 'string',
        'description' => 'Class of the character if applicable and available.',
    ];

    public $classHash = [
        'type' => 'integer',
        'format' => 'uint32',
    ];

    public $raceHash = [
        'type' => 'integer',
        'format' => 'uint32',
    ];

    public $genderHash = [
        'type' => 'integer',
        'format' => 'uint32',
    ];

    public $characterLevel = [
        'type' => 'integer',
        'description' => 'Level of the character if available. Zero if it is not available.',
        'format' => 'int32',
    ];

    public $lightLevel = [
        'type' => 'integer',
        'description' => 'Light Level of the character if available. Zero if it is not available.',
        'format' => 'int32',
    ];

    public $bungieNetUserInfo = [
        'type' => 'object',
        'allOf' => [
            [
                '$ref' => '#/components/schemas/User.UserInfoCard',
            ],
        ],
        'description' => 'Details about the player as they are known on BungieNet. This will be undefined if the player has marked their credential private, or does not have a BungieNet account.',
    ];

    public $clanName = [
        'type' => 'string',
        'description' => 'Current clan name for the player. This value may be null or an empty string if the user does not have a clan.',
    ];

    public $clanTag = [
        'type' => 'string',
        'description' => 'Current clan tag for the player. This value may be null or an empty string if the user does not have a clan.',
    ];

    public $emblemHash = [
        'type' => 'integer',
        'description' => 'If we know the emblem\'s hash, this can be used to look up the player\'s emblem at the time of a match when receiving PGCR data, or otherwise their currently equipped emblem (if we are able to obtain it).',
        'format' => 'uint32',
    ];


}


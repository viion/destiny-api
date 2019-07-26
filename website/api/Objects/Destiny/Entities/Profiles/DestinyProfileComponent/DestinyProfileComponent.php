<?php

namespace Destiny2\Api\Objects\Destiny\Entities\Profiles\DestinyProfileComponent;

/**
 * DestinyProfileComponent
 *
 * The most essential summary information about a Profile (in Destiny 1, we called
 * these "Accounts").
 */
class DestinyProfileComponent
{

    const TYPE = 'object';

    public $userInfo = [
        'type' => 'object',
        'allOf' => [
            [
                '$ref' => '#/components/schemas/User.UserInfoCard',
            ],
        ],
        'description' => 'If you need to render the Profile (their platform name, icon, etc...) somewhere, this property contains that information.',
    ];

    public $dateLastPlayed = [
        'type' => 'string',
        'description' => 'The last time the user played with any character on this Profile.',
        'format' => 'date-time',
    ];

    public $versionsOwned = [
        'type' => 'integer',
        'description' => 'If you want to know what expansions they own, this will contain that data.
 IMPORTANT: This field may not return the data you\'re interested in for Cross-Saved users. It returns the last ownership data we saw for this account - which is to say, what they\'ve purchased on the platform on which they last played, which now could be a different platform.
 If you don\'t care about per-platform ownership and only care about whatever platform it seems they are playing on most recently, then this should be "good enough." Otherwise, this should be considered deprecated. We do not have a good alternative to provide at this time with platform specific ownership data for DLC.',
        'format' => 'int32',
        'x-enum-reference' => [
            '$ref' => '#/components/schemas/Destiny.DestinyGameVersions',
        ],
        'x-enum-is-bitmask' => true,
    ];

    public $characterIds = [
        'type' => 'array',
        'items' => [
            'type' => 'integer',
            'format' => 'int64',
        ],
        'description' => 'A list of the character IDs, for further querying on your part.',
    ];


}


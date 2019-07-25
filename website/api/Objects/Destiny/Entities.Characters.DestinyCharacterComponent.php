<?php

namespace Destiny2\Api\Objects\Destiny;

/**
 * Entities.Characters.DestinyCharacterComponent
 */
class Entities.Characters.DestinyCharacterComponent
{

    const NAME = 'Destiny.Entities.Characters.DestinyCharacterComponent';

    const TYPE = 'object';

    public $membershipId = [
        'type' => 'integer',
        'description' => 'Every Destiny Profile has a membershipId. This is provided on the character as well for convenience.',
        'format' => 'int64',
    ];

    public $membershipType = [
        'type' => 'integer',
        'description' => 'membershipType tells you the platform on which the character plays. Examine the BungieMembershipType enumeration for possible values.',
        'format' => 'int32',
        'x-enum-reference' => [
            '$ref' => '#/components/schemas/BungieMembershipType',
        ],
        'x-enum-is-bitmask' => false,
    ];

    public $characterId = [
        'type' => 'integer',
        'description' => 'The unique identifier for the character.',
        'format' => 'int64',
    ];

    public $dateLastPlayed = [
        'type' => 'string',
        'description' => 'The last date that the user played Destiny.',
        'format' => 'date-time',
    ];

    public $minutesPlayedThisSession = [
        'type' => 'integer',
        'description' => 'If the user is currently playing, this is how long they\'ve been playing.',
        'format' => 'int64',
    ];

    public $minutesPlayedTotal = [
        'type' => 'integer',
        'description' => 'If this value is 525,600, then they played Destiny for a year. Or they\'re a very dedicated Rent fan. Note that this includes idle time, not just time spent actually in activities shooting things.',
        'format' => 'int64',
    ];

    public $light = [
        'type' => 'integer',
        'description' => 'The user\'s calculated "Light Level". Light level is an indicator of your power that mostly matters in the end game, once you\'ve reached the maximum character level: it\'s a level that\'s dependent on the average Attack/Defense power of your items.',
        'format' => 'int32',
    ];

    public $stats = [
        'type' => 'object',
        'additionalProperties' => [
            'type' => 'integer',
            'format' => 'int32',
        ],
        'description' => 'Your character\'s stats, such as Agility, Resilience, etc... *not* historical stats.
You\'ll have to call a different endpoint for those.',
        'x-dictionary-key' => [
            'type' => 'integer',
            'format' => 'uint32',
        ],
    ];

    public $raceHash = [
        'type' => 'integer',
        'description' => 'Use this hash to look up the character\'s DestinyRaceDefinition.',
        'format' => 'uint32',
        'x-mapped-definition' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.DestinyRaceDefinition',
        ],
    ];

    public $genderHash = [
        'type' => 'integer',
        'description' => 'Use this hash to look up the character\'s DestinyGenderDefinition.',
        'format' => 'uint32',
        'x-mapped-definition' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.DestinyGenderDefinition',
        ],
    ];

    public $classHash = [
        'type' => 'integer',
        'description' => 'Use this hash to look up the character\'s DestinyClassDefinition.',
        'format' => 'uint32',
        'x-mapped-definition' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.DestinyClassDefinition',
        ],
    ];

    public $raceType = [
        'type' => 'integer',
        'description' => 'Mostly for historical purposes at this point, this is an enumeration for the character\'s race.
It\'ll be preferable in the general case to look up the related definition: but for some people this was too convenient to remove.',
        'format' => 'int32',
        'x-enum-reference' => [
            '$ref' => '#/components/schemas/Destiny.DestinyRace',
        ],
        'x-enum-is-bitmask' => false,
    ];

    public $classType = [
        'type' => 'integer',
        'description' => 'Mostly for historical purposes at this point, this is an enumeration for the character\'s class.
It\'ll be preferable in the general case to look up the related definition: but for some people this was too convenient to remove.',
        'format' => 'int32',
        'x-enum-reference' => [
            '$ref' => '#/components/schemas/Destiny.DestinyClass',
        ],
        'x-enum-is-bitmask' => false,
    ];

    public $genderType = [
        'type' => 'integer',
        'description' => 'Mostly for historical purposes at this point, this is an enumeration for the character\'s Gender.
It\'ll be preferable in the general case to look up the related definition: but for some people this was too convenient to remove. And yeah, it\'s an enumeration and not a boolean. Fight me.',
        'format' => 'int32',
        'x-enum-reference' => [
            '$ref' => '#/components/schemas/Destiny.DestinyGender',
        ],
        'x-enum-is-bitmask' => false,
    ];

    public $emblemPath = [
        'type' => 'string',
        'description' => 'A shortcut path to the user\'s currently equipped emblem image. If you\'re just showing summary info for a user, this is more convenient than examining their equipped emblem and looking up the definition.',
    ];

    public $emblemBackgroundPath = [
        'type' => 'string',
        'description' => 'A shortcut path to the user\'s currently equipped emblem background image. If you\'re just showing summary info for a user, this is more convenient than examining their equipped emblem and looking up the definition.',
    ];

    public $emblemHash = [
        'type' => 'integer',
        'description' => 'The hash of the currently equipped emblem for the user. Can be used to look up the DestinyInventoryItemDefinition.',
        'format' => 'uint32',
        'x-mapped-definition' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.DestinyInventoryItemDefinition',
        ],
    ];

    public $emblemColor = [
        'type' => 'object',
        'allOf' => [
            [
                '$ref' => '#/components/schemas/Destiny.Misc.DestinyColor',
            ],
        ],
        'description' => 'A shortcut for getting the background color of the user\'s currently equipped emblem without having to do a DestinyInventoryItemDefinition lookup.',
    ];

    public $levelProgression = [
        'type' => 'object',
        'allOf' => [
            [
                '$ref' => '#/components/schemas/Destiny.DestinyProgression',
            ],
        ],
        'description' => 'The progression that indicates your character\'s level. Not their light level, but their character level: you know, the thing you max out a couple hours in and then ignore for the sake of light level.',
    ];

    public $baseCharacterLevel = [
        'type' => 'integer',
        'description' => 'The "base" level of your character, not accounting for any light level.',
        'format' => 'int32',
    ];

    public $percentToNextLevel = [
        'type' => 'number',
        'description' => 'A number between 0 and 100, indicating the whole and fractional % remaining to get to the next character level.',
        'format' => 'float',
    ];

    public $titleRecordHash = [
        'type' => 'integer',
        'description' => 'If this Character has a title assigned to it, this is the identifier of the DestinyRecordDefinition that has that title information.',
        'format' => 'uint32',
        'nullable' => true,
        'x-mapped-definition' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.Records.DestinyRecordDefinition',
        ],
    ];


}


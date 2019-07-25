<?php

namespace Destiny2\Api\Objects\Destiny;

/**
 * Definitions.DestinyActivityDefinition
 */
class Definitions.DestinyActivityDefinition
{

    const NAME = 'Destiny.Definitions.DestinyActivityDefinition';

    const TYPE = 'object';

    public $displayProperties = [
        'type' => 'object',
        'allOf' => [
            [
                '$ref' => '#/components/schemas/Destiny.Definitions.Common.DestinyDisplayPropertiesDefinition',
            ],
        ],
        'description' => 'The title, subtitle, and icon for the activity. We do a little post-processing on this to try and account for Activities where the designers have left this data too minimal to determine what activity is actually being played.',
    ];

    public $originalDisplayProperties = [
        'type' => 'object',
        'allOf' => [
            [
                '$ref' => '#/components/schemas/Destiny.Definitions.Common.DestinyDisplayPropertiesDefinition',
            ],
        ],
        'description' => 'The unadulterated form of the display properties, as they ought to be shown in the Director (if the activity appears in the director).',
    ];

    public $selectionScreenDisplayProperties = [
        'type' => 'object',
        'allOf' => [
            [
                '$ref' => '#/components/schemas/Destiny.Definitions.Common.DestinyDisplayPropertiesDefinition',
            ],
        ],
        'description' => 'The title, subtitle, and icon for the activity as determined by Selection Screen data, if there is any for this activity. There won\'t be data in this field if the activity is never shown in a selection/options screen.',
    ];

    public $releaseIcon = [
        'type' => 'string',
        'description' => 'If the activity has an icon associated with a specific release (such as a DLC), this is the path to that release\'s icon.',
    ];

    public $releaseTime = [
        'type' => 'integer',
        'description' => 'If the activity will not be visible until a specific and known time, this will be the seconds since the Epoch when it will become visible.',
        'format' => 'int32',
    ];

    public $activityLevel = [
        'type' => 'integer',
        'description' => 'The difficulty level of the activity.',
        'format' => 'int32',
    ];

    public $activityLightLevel = [
        'type' => 'integer',
        'description' => 'The recommended light level for this activity.',
        'format' => 'int32',
    ];

    public $destinationHash = [
        'type' => 'integer',
        'description' => 'The hash identifier for the Destination on which this Activity is played. Use it to look up the DestinyDestinationDefinition for human readable info about the destination. A Destination can be thought of as a more specific location than a "Place". For instance, if the "Place" is Earth, the "Destination" would be a specific city or region on Earth.',
        'format' => 'uint32',
        'x-mapped-definition' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.DestinyDestinationDefinition',
        ],
    ];

    public $placeHash = [
        'type' => 'integer',
        'description' => 'The hash identifier for the "Place" on which this Activity is played. Use it to look up the DestinyPlaceDefinition for human readable info about the Place. A Place is the largest-scoped concept for location information. For instance, if the "Place" is Earth, the "Destination" would be a specific city or region on Earth.',
        'format' => 'uint32',
        'x-mapped-definition' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.DestinyPlaceDefinition',
        ],
    ];

    public $activityTypeHash = [
        'type' => 'integer',
        'description' => 'The hash identifier for the Activity Type of this Activity. You may use it to look up the DestinyActivityTypeDefinition for human readable info, but be forewarned: Playlists and many PVP Map Activities will map to generic Activity Types. You\'ll have to use your knowledge of the Activity Mode being played to get more specific information about what the user is playing.',
        'format' => 'uint32',
        'x-mapped-definition' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.DestinyActivityTypeDefinition',
        ],
    ];

    public $tier = [
        'type' => 'integer',
        'description' => 'The difficulty tier of the activity.',
        'format' => 'int32',
    ];

    public $pgcrImage = [
        'type' => 'string',
        'description' => 'When Activities are completed, we generate a "Post-Game Carnage Report", or PGCR, with details about what happened in that activity (how many kills someone got, which team won, etc...) We use this image as the background when displaying PGCR information, and often use it when we refer to the Activity in general.',
    ];

    public $rewards = [
        'type' => 'array',
        'items' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.DestinyActivityRewardDefinition',
        ],
        'description' => 'The expected possible rewards for the activity. These rewards may or may not be accessible for an individual player based on their character state, the account state, and even the game\'s state overall. But it is a useful reference for possible rewards you can earn in the activity. These match up to rewards displayed when you hover over the Activity in the in-game Director, and often refer to Placeholder or "Dummy" items: items that tell you what you can earn in vague terms rather than what you\'ll specifically be earning (partly because the game doesn\'t even know what you\'ll earn specifically until you roll for it at the end)',
    ];

    public $modifiers = [
        'type' => 'array',
        'items' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.DestinyActivityModifierReferenceDefinition',
        ],
        'description' => 'Activities can have Modifiers, as defined in DestinyActivityModifierDefinition. These are references to the modifiers that *can* be applied to that activity, along with data that we use to determine if that modifier is actually active at any given point in time.',
    ];

    public $isPlaylist = [
        'type' => 'boolean',
        'description' => 'If True, this Activity is actually a Playlist that refers to multiple possible specific Activities and Activity Modes. For instance, a Crucible Playlist may have references to multiple Activities (Maps) with multiple Activity Modes (specific PvP gameplay modes). If this is true, refer to the playlistItems property for the specific entries in the playlist.',
    ];

    public $challenges = [
        'type' => 'array',
        'items' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.DestinyActivityChallengeDefinition',
        ],
        'description' => 'An activity can have many Challenges, of which any subset of them may be active for play at any given period of time. This gives the information about the challenges and data that we use to understand when they\'re active and what rewards they provide. Sadly, at the moment there\'s no central definition for challenges: much like "Skulls" were in Destiny 1, these are defined on individual activities and there can be many duplicates/near duplicates across the Destiny 2 ecosystem. I have it in mind to centralize these in a future revision of the API, but we are out of time.',
    ];

    public $optionalUnlockStrings = [
        'type' => 'array',
        'items' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.DestinyActivityUnlockStringDefinition',
        ],
        'description' => 'If there are status strings related to the activity and based on internal state of the game, account, or character, then this will be the definition of those strings and the states needed in order for the strings to be shown.',
    ];

    public $playlistItems = [
        'type' => 'array',
        'items' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.DestinyActivityPlaylistItemDefinition',
        ],
        'description' => 'Represents all of the possible activities that could be played in the Playlist, along with information that we can use to determine if they are active at the present time.',
    ];

    public $activityGraphList = [
        'type' => 'array',
        'items' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.DestinyActivityGraphListEntryDefinition',
        ],
        'description' => 'Unfortunately, in practice this is almost never populated. In theory, this is supposed to tell which Activity Graph to show if you bring up the director while in this activity.',
    ];

    public $matchmaking = [
        'type' => 'object',
        'allOf' => [
            [
                '$ref' => '#/components/schemas/Destiny.Definitions.DestinyActivityMatchmakingBlockDefinition',
            ],
        ],
        'description' => 'This block of data provides information about the Activity\'s matchmaking attributes: how many people can join and such.',
    ];

    public $guidedGame = [
        'type' => 'object',
        'allOf' => [
            [
                '$ref' => '#/components/schemas/Destiny.Definitions.DestinyActivityGuidedBlockDefinition',
            ],
        ],
        'description' => 'This block of data, if it exists, provides information about the guided game experience and restrictions for this activity. If it doesn\'t exist, the game is not able to be played as a guided game.',
    ];

    public $directActivityModeHash = [
        'type' => 'integer',
        'description' => 'If this activity had an activity mode directly defined on it, this will be the hash of that mode.',
        'format' => 'uint32',
        'nullable' => true,
        'x-mapped-definition' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.DestinyActivityModeDefinition',
        ],
    ];

    public $directActivityModeType = [
        'enum' => [
            '0',
            '2',
            '3',
            '4',
            '5',
            '6',
            '7',
            '9',
            '10',
            '11',
            '12',
            '13',
            '15',
            '16',
            '17',
            '18',
            '19',
            '20',
            '21',
            '22',
            '24',
            '25',
            '26',
            '27',
            '28',
            '29',
            '30',
            '31',
            '32',
            '37',
            '38',
            '39',
            '40',
            '41',
            '42',
            '43',
            '44',
            '45',
            '46',
            '47',
            '48',
            '49',
            '50',
            '51',
            '52',
            '53',
            '54',
            '55',
            '56',
            '57',
            '58',
            '59',
            '60',
            '61',
            '62',
            '63',
            '64',
            '65',
            '66',
            '67',
            '68',
            '69',
            '70',
            '71',
            '72',
            '73',
            '74',
            '75',
            '76',
            '77',
        ],
        'type' => 'integer',
        'description' => 'If the activity had an activity mode directly defined on it, this will be the enum value of that mode.',
        'format' => 'int32',
        'nullable' => true,
        'x-enum-values' => [
            [
                'numericValue' => '0',
                'identifier' => 'None',
            ],
            [
                'numericValue' => '2',
                'identifier' => 'Story',
            ],
            [
                'numericValue' => '3',
                'identifier' => 'Strike',
            ],
            [
                'numericValue' => '4',
                'identifier' => 'Raid',
            ],
            [
                'numericValue' => '5',
                'identifier' => 'AllPvP',
            ],
            [
                'numericValue' => '6',
                'identifier' => 'Patrol',
            ],
            [
                'numericValue' => '7',
                'identifier' => 'AllPvE',
            ],
            [
                'numericValue' => '9',
                'identifier' => 'Reserved9',
            ],
            [
                'numericValue' => '10',
                'identifier' => 'Control',
            ],
            [
                'numericValue' => '11',
                'identifier' => 'Reserved11',
            ],
            [
                'numericValue' => '12',
                'identifier' => 'Clash',
                'description' => 'Clash -> Destiny\'s name for Team Deathmatch. 4v4 combat, the team with the highest kills at the end of time wins.',
            ],
            [
                'numericValue' => '13',
                'identifier' => 'Reserved13',
            ],
            [
                'numericValue' => '15',
                'identifier' => 'CrimsonDoubles',
            ],
            [
                'numericValue' => '16',
                'identifier' => 'Nightfall',
            ],
            [
                'numericValue' => '17',
                'identifier' => 'HeroicNightfall',
            ],
            [
                'numericValue' => '18',
                'identifier' => 'AllStrikes',
            ],
            [
                'numericValue' => '19',
                'identifier' => 'IronBanner',
            ],
            [
                'numericValue' => '20',
                'identifier' => 'Reserved20',
            ],
            [
                'numericValue' => '21',
                'identifier' => 'Reserved21',
            ],
            [
                'numericValue' => '22',
                'identifier' => 'Reserved22',
            ],
            [
                'numericValue' => '24',
                'identifier' => 'Reserved24',
            ],
            [
                'numericValue' => '25',
                'identifier' => 'AllMayhem',
            ],
            [
                'numericValue' => '26',
                'identifier' => 'Reserved26',
            ],
            [
                'numericValue' => '27',
                'identifier' => 'Reserved27',
            ],
            [
                'numericValue' => '28',
                'identifier' => 'Reserved28',
            ],
            [
                'numericValue' => '29',
                'identifier' => 'Reserved29',
            ],
            [
                'numericValue' => '30',
                'identifier' => 'Reserved30',
            ],
            [
                'numericValue' => '31',
                'identifier' => 'Supremacy',
            ],
            [
                'numericValue' => '32',
                'identifier' => 'PrivateMatchesAll',
            ],
            [
                'numericValue' => '37',
                'identifier' => 'Survival',
            ],
            [
                'numericValue' => '38',
                'identifier' => 'Countdown',
            ],
            [
                'numericValue' => '39',
                'identifier' => 'TrialsOfTheNine',
            ],
            [
                'numericValue' => '40',
                'identifier' => 'Social',
            ],
            [
                'numericValue' => '41',
                'identifier' => 'TrialsCountdown',
            ],
            [
                'numericValue' => '42',
                'identifier' => 'TrialsSurvival',
            ],
            [
                'numericValue' => '43',
                'identifier' => 'IronBannerControl',
            ],
            [
                'numericValue' => '44',
                'identifier' => 'IronBannerClash',
            ],
            [
                'numericValue' => '45',
                'identifier' => 'IronBannerSupremacy',
            ],
            [
                'numericValue' => '46',
                'identifier' => 'ScoredNightfall',
            ],
            [
                'numericValue' => '47',
                'identifier' => 'ScoredHeroicNightfall',
            ],
            [
                'numericValue' => '48',
                'identifier' => 'Rumble',
            ],
            [
                'numericValue' => '49',
                'identifier' => 'AllDoubles',
            ],
            [
                'numericValue' => '50',
                'identifier' => 'Doubles',
            ],
            [
                'numericValue' => '51',
                'identifier' => 'PrivateMatchesClash',
            ],
            [
                'numericValue' => '52',
                'identifier' => 'PrivateMatchesControl',
            ],
            [
                'numericValue' => '53',
                'identifier' => 'PrivateMatchesSupremacy',
            ],
            [
                'numericValue' => '54',
                'identifier' => 'PrivateMatchesCountdown',
            ],
            [
                'numericValue' => '55',
                'identifier' => 'PrivateMatchesSurvival',
            ],
            [
                'numericValue' => '56',
                'identifier' => 'PrivateMatchesMayhem',
            ],
            [
                'numericValue' => '57',
                'identifier' => 'PrivateMatchesRumble',
            ],
            [
                'numericValue' => '58',
                'identifier' => 'HeroicAdventure',
            ],
            [
                'numericValue' => '59',
                'identifier' => 'Showdown',
            ],
            [
                'numericValue' => '60',
                'identifier' => 'Lockdown',
            ],
            [
                'numericValue' => '61',
                'identifier' => 'Scorched',
            ],
            [
                'numericValue' => '62',
                'identifier' => 'ScorchedTeam',
            ],
            [
                'numericValue' => '63',
                'identifier' => 'Gambit',
            ],
            [
                'numericValue' => '64',
                'identifier' => 'AllPvECompetitive',
            ],
            [
                'numericValue' => '65',
                'identifier' => 'Breakthrough',
            ],
            [
                'numericValue' => '66',
                'identifier' => 'BlackArmoryRun',
            ],
            [
                'numericValue' => '67',
                'identifier' => 'Salvage',
            ],
            [
                'numericValue' => '68',
                'identifier' => 'IronBannerSalvage',
            ],
            [
                'numericValue' => '69',
                'identifier' => 'PvPCompetitive',
            ],
            [
                'numericValue' => '70',
                'identifier' => 'PvPQuickplay',
            ],
            [
                'numericValue' => '71',
                'identifier' => 'ClashQuickplay',
            ],
            [
                'numericValue' => '72',
                'identifier' => 'ClashCompetitive',
            ],
            [
                'numericValue' => '73',
                'identifier' => 'ControlQuickplay',
            ],
            [
                'numericValue' => '74',
                'identifier' => 'ControlCompetitive',
            ],
            [
                'numericValue' => '75',
                'identifier' => 'GambitPrime',
            ],
            [
                'numericValue' => '76',
                'identifier' => 'Reckoning',
            ],
            [
                'numericValue' => '77',
                'identifier' => 'Menagerie',
            ],
        ],
        'x-enum-is-bitmask' => false,
    ];

    public $loadouts = [
        'type' => 'array',
        'items' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.DestinyActivityLoadoutRequirementSet',
        ],
        'description' => 'The set of all possible loadout requirements that could be active for this activity. Only one will be active at any given time, and you can discover which one through activity-associated data such as Milestones that have activity info on them.',
    ];

    public $activityModeHashes = [
        'type' => 'array',
        'items' => [
            'type' => 'integer',
            'format' => 'uint32',
        ],
        'description' => 'The hash identifiers for Activity Modes relevant to this activity.  Note that if this is a playlist, the specific playlist entry chosen will determine the actual activity modes that end up being relevant.',
        'x-mapped-definition' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.DestinyActivityModeDefinition',
        ],
    ];

    public $activityModeTypes = [
        'type' => 'array',
        'items' => [
            'type' => 'integer',
            'description' => 'For historical reasons, this list will have both D1 and D2-relevant Activity Modes in it. Please don\'t take this to mean that some D1-only feature is coming back!',
            'format' => 'int32',
            'x-enum-reference' => [
                '$ref' => '#/components/schemas/Destiny.HistoricalStats.Definitions.DestinyActivityModeType',
            ],
            'x-enum-is-bitmask' => false,
        ],
        'description' => 'The activity modes - if any - in enum form. Because we can\'t seem to escape the enums.',
    ];

    public $isPvP = [
        'type' => 'boolean',
        'description' => 'If true, this activity is a PVP activity or playlist.',
    ];

    public $insertionPoints = [
        'type' => 'array',
        'items' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.DestinyActivityInsertionPointDefinition',
        ],
        'description' => 'The list of phases or points of entry into an activity, along with information we can use to determine their gating and availability.',
    ];

    public $activityLocationMappings = [
        'type' => 'array',
        'items' => [
            '$ref' => '#/components/schemas/Destiny.Constants.DestinyEnvironmentLocationMapping',
        ],
        'description' => 'A list of location mappings that are affected by this activity. Pulled out of DestinyLocationDefinitions for our/your lookup convenience.',
    ];

    public $hash = [
        'type' => 'integer',
        'description' => 'The unique identifier for this entity. Guaranteed to be unique for the type of entity, but not globally.
When entities refer to each other in Destiny content, it is this hash that they are referring to.',
        'format' => 'uint32',
    ];

    public $index = [
        'type' => 'integer',
        'description' => 'The index of the entity as it was found in the investment tables.',
        'format' => 'int32',
    ];

    public $redacted = [
        'type' => 'boolean',
        'description' => 'If this is true, then there is an entity with this identifier/type combination, but BNet is not yet allowed to show it. Sorry!',
    ];


}


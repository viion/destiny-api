<?php

namespace Destiny2\Api\Objects\Destiny\Definitions\DestinyActivityPlaylistItemDefinition;

/**
 * DestinyActivityPlaylistItemDefinition
 *
 * If the activity is a playlist, this is the definition for a specific entry in
 * the playlist: a single possible combination of Activity and Activity Mode that
 * can be chosen.
 */
class DestinyActivityPlaylistItemDefinition
{

    const TYPE = 'object';

    public $activityHash = [
        'type' => 'integer',
        'description' => 'The hash identifier of the Activity that can be played. Use it to look up the DestinyActivityDefinition.',
        'format' => 'uint32',
        'x-mapped-definition' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.DestinyActivityDefinition',
        ],
    ];

    public $directActivityModeHash = [
        'type' => 'integer',
        'description' => 'If this playlist entry had an activity mode directly defined on it, this will be the hash of that mode.',
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
        'description' => 'If the playlist entry had an activity mode directly defined on it, this will be the enum value of that mode.',
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

    public $activityModeHashes = [
        'type' => 'array',
        'items' => [
            'type' => 'integer',
            'format' => 'uint32',
        ],
        'description' => 'The hash identifiers for Activity Modes relevant to this entry.',
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


}


<?php

namespace Destiny2\Api\Objects\Destiny\HistoricalStats\Definitions\DestinyHistoricalStatsDefinition;

/**
 * DestinyHistoricalStatsDefinition
 *
 * No description
 */
class DestinyHistoricalStatsDefinition
{

    const TYPE = 'object';

    public $statId = [
        'type' => 'string',
        'description' => 'Unique programmer friendly ID for this stat',
    ];

    public $group = [
        'type' => 'integer',
        'description' => 'Statistic group',
        'format' => 'int32',
        'x-enum-reference' => [
            '$ref' => '#/components/schemas/Destiny.HistoricalStats.Definitions.DestinyStatsGroupType',
        ],
        'x-enum-is-bitmask' => false,
    ];

    public $periodTypes = [
        'type' => 'array',
        'items' => [
            'type' => 'integer',
            'format' => 'int32',
            'x-enum-reference' => [
                '$ref' => '#/components/schemas/Destiny.HistoricalStats.Definitions.PeriodType',
            ],
            'x-enum-is-bitmask' => false,
        ],
        'description' => 'Time periods the statistic covers',
    ];

    public $modes = [
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
        'description' => 'Game modes where this statistic can be reported.',
    ];

    public $category = [
        'type' => 'integer',
        'description' => 'Category for the stat.',
        'format' => 'int32',
        'x-enum-reference' => [
            '$ref' => '#/components/schemas/Destiny.HistoricalStats.Definitions.DestinyStatsCategoryType',
        ],
        'x-enum-is-bitmask' => false,
    ];

    public $statName = [
        'type' => 'string',
        'description' => 'Display name',
    ];

    public $statNameAbbr = [
        'type' => 'string',
        'description' => 'Display name abbreviated',
    ];

    public $statDescription = [
        'type' => 'string',
        'description' => 'Description of a stat if applicable.',
    ];

    public $unitType = [
        'type' => 'integer',
        'description' => 'Unit, if any, for the statistic',
        'format' => 'int32',
        'x-enum-reference' => [
            '$ref' => '#/components/schemas/Destiny.HistoricalStats.Definitions.UnitType',
        ],
        'x-enum-is-bitmask' => false,
    ];

    public $iconImage = [
        'type' => 'string',
        'description' => 'Optional URI to an icon for the statistic',
    ];

    public $mergeMethod = [
        'enum' => [
            '0',
            '1',
            '2',
        ],
        'type' => 'integer',
        'description' => 'Optional icon for the statistic',
        'format' => 'int32',
        'nullable' => true,
        'x-enum-values' => [
            [
                'numericValue' => '0',
                'identifier' => 'Add',
                'description' => 'When collapsing multiple instances of the stat together, add the values.',
            ],
            [
                'numericValue' => '1',
                'identifier' => 'Min',
                'description' => 'When collapsing multiple instances of the stat together, take the lower value.',
            ],
            [
                'numericValue' => '2',
                'identifier' => 'Max',
                'description' => 'When collapsing multiple instances of the stat together, take the higher value.',
            ],
        ],
        'x-enum-is-bitmask' => false,
    ];

    public $unitLabel = [
        'type' => 'string',
        'description' => 'Localized Unit Name for the stat.',
    ];

    public $weight = [
        'type' => 'integer',
        'description' => 'Weight assigned to this stat indicating its relative impressiveness.',
        'format' => 'int32',
    ];

    public $medalTierHash = [
        'type' => 'integer',
        'description' => 'The tier associated with this medal - be it implicitly or explicitly.',
        'format' => 'uint32',
        'nullable' => true,
    ];


}


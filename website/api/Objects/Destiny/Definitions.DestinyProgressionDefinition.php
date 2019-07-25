<?php

namespace Destiny2\Api\Objects\Destiny;

/**
 * Definitions.DestinyProgressionDefinition
 */
class Definitions.DestinyProgressionDefinition
{

    const NAME = 'Destiny.Definitions.DestinyProgressionDefinition';

    const TYPE = 'object';

    public $displayProperties = [
        '$ref' => '#/components/schemas/Destiny.Definitions.DestinyProgressionDisplayPropertiesDefinition',
    ];

    public $scope = [
        'type' => 'integer',
        'description' => 'The "Scope" of the progression indicates the source of the progression\'s live data.
See the DestinyProgressionScope enum for more info: but essentially, a Progression can either be backed by a stored value, or it can be a calculated derivative of other values.',
        'format' => 'int32',
        'x-enum-reference' => [
            '$ref' => '#/components/schemas/Destiny.DestinyProgressionScope',
        ],
        'x-enum-is-bitmask' => false,
    ];

    public $repeatLastStep = [
        'type' => 'boolean',
        'description' => 'If this is True, then the progression doesn\'t have a maximum level.',
    ];

    public $source = [
        'type' => 'string',
        'description' => 'If there\'s a description of how to earn this progression in the local config, this will be that localized description.',
    ];

    public $steps = [
        'type' => 'array',
        'items' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.DestinyProgressionStepDefinition',
        ],
        'description' => 'Progressions are divided into Steps, which roughly equate to "Levels" in the traditional sense of a Progression. Notably, the last step can be repeated indefinitely if repeatLastStep is true, meaning that the calculation for your level is not as simple as comparing your current progress to the max progress of the steps. 
These and more calculations are done for you if you grab live character progression data, such as in the DestinyCharacterProgressionComponent.',
    ];

    public $visible = [
        'type' => 'boolean',
        'description' => 'If true, the Progression is something worth showing to users.
If false, BNet isn\'t going to show it. But that doesn\'t mean you can\'t. We\'re all friends here.',
    ];

    public $factionHash = [
        'type' => 'integer',
        'description' => 'If the value exists, this is the hash identifier for the Faction that owns this Progression.
This is purely for convenience, if you\'re looking at a progression and want to know if and who it\'s related to in terms of Faction Reputation.',
        'format' => 'uint32',
        'nullable' => true,
        'x-mapped-definition' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.DestinyFactionDefinition',
        ],
    ];

    public $color = [
        'type' => 'object',
        'allOf' => [
            [
                '$ref' => '#/components/schemas/Destiny.Misc.DestinyColor',
            ],
        ],
        'description' => 'The #RGB string value for the color related to this progression, if there is one.',
    ];

    public $rankIcon = [
        'type' => 'string',
        'description' => 'For progressions that have it, this is the rank icon we use in the Companion, displayed above the progressions\' rank value.',
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


<?php

namespace Destiny2\Api\Objects\Destiny;

/**
 * Definitions.DestinyObjectiveStatEntryDefinition
 */
class Definitions.DestinyObjectiveStatEntryDefinition
{

    const NAME = 'Destiny.Definitions.DestinyObjectiveStatEntryDefinition';

    const TYPE = 'object';

    public $stat = [
        'type' => 'object',
        'allOf' => [
            [
                '$ref' => '#/components/schemas/Destiny.Definitions.DestinyItemInvestmentStatDefinition',
            ],
        ],
        'description' => 'The stat being modified, and the value used.',
    ];

    public $style = [
        'type' => 'integer',
        'description' => 'Whether it will be applied as long as the objective is active, when it\'s completed, or until it\'s completed.',
        'format' => 'int32',
        'x-enum-reference' => [
            '$ref' => '#/components/schemas/Destiny.DestinyObjectiveGrantStyle',
        ],
        'x-enum-is-bitmask' => false,
    ];


}


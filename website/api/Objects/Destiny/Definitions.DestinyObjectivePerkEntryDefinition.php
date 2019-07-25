<?php

namespace Destiny2\Api\Objects\Destiny;

/**
 * Definitions.DestinyObjectivePerkEntryDefinition
 */
class Definitions.DestinyObjectivePerkEntryDefinition
{

    const NAME = 'Destiny.Definitions.DestinyObjectivePerkEntryDefinition';

    const TYPE = 'object';

    public $perkHash = [
        'type' => 'integer',
        'description' => 'The hash identifier of the DestinySandboxPerkDefinition that will be applied to the character.',
        'format' => 'uint32',
        'x-mapped-definition' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.DestinySandboxPerkDefinition',
        ],
    ];

    public $style = [
        'type' => 'integer',
        'description' => 'An enumeration indicating whether it will be applied as long as the Objective is active, when it\'s completed, or until it\'s completed.',
        'format' => 'int32',
        'x-enum-reference' => [
            '$ref' => '#/components/schemas/Destiny.DestinyObjectiveGrantStyle',
        ],
        'x-enum-is-bitmask' => false,
    ];


}


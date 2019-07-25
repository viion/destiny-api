<?php

namespace Destiny2\Api\Objects\Destiny;

/**
 * Definitions.DestinyStatOverrideDefinition
 */
class Definitions.DestinyStatOverrideDefinition
{

    const NAME = 'Destiny.Definitions.DestinyStatOverrideDefinition';

    const TYPE = 'object';

    public $statHash = [
        'type' => 'integer',
        'description' => 'The hash identifier of the stat whose display properties are being overridden.',
        'format' => 'uint32',
        'x-mapped-definition' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.DestinyStatDefinition',
        ],
    ];

    public $displayProperties = [
        'type' => 'object',
        'allOf' => [
            [
                '$ref' => '#/components/schemas/Destiny.Definitions.Common.DestinyDisplayPropertiesDefinition',
            ],
        ],
        'description' => 'The display properties to show instead of the base DestinyStatDefinition display properties.',
    ];


}


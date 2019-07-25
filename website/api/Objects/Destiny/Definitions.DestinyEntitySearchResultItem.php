<?php

namespace Destiny2\Api\Objects\Destiny;

/**
 * Definitions.DestinyEntitySearchResultItem
 */
class Definitions.DestinyEntitySearchResultItem
{

    const NAME = 'Destiny.Definitions.DestinyEntitySearchResultItem';

    const TYPE = 'object';

    public $hash = [
        'type' => 'integer',
        'description' => 'The hash identifier of the entity. You will use this to look up the DestinyDefinition relevant for the entity found.',
        'format' => 'uint32',
    ];

    public $entityType = [
        'type' => 'string',
        'description' => 'The type of entity, returned as a string matching the DestinyDefinition\'s contract class name. You\'ll have to have your own mapping from class names to actually looking up those definitions in the manifest databases.',
    ];

    public $displayProperties = [
        'type' => 'object',
        'allOf' => [
            [
                '$ref' => '#/components/schemas/Destiny.Definitions.Common.DestinyDisplayPropertiesDefinition',
            ],
        ],
        'description' => 'Basic display properties on the entity, so you don\'t have to look up the definition to show basic results for the item.',
    ];

    public $weight = [
        'type' => 'number',
        'description' => 'The ranking value for sorting that we calculated using our relevance formula. This will hopefully get better with time and iteration.',
        'format' => 'double',
    ];


}


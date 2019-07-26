<?php

namespace Destiny2\Api\Objects\Destiny\Definitions\DestinyProgressionMappingDefinition;

/**
 * DestinyProgressionMappingDefinition
 *
 * Aggregations of multiple progressions.
 * These are used to apply rewards to multiple progressions at once. They can
 * sometimes have human readable data as well, but only extremely sporadically.
 */
class DestinyProgressionMappingDefinition
{

    const TYPE = 'object';

    public $displayProperties = [
        'type' => 'object',
        'allOf' => [
            [
                '$ref' => '#/components/schemas/Destiny.Definitions.Common.DestinyDisplayPropertiesDefinition',
            ],
        ],
        'description' => 'Infrequently defined in practice. Defer to the individual progressions\' display properties.',
    ];

    public $displayUnits = [
        'type' => 'string',
        'description' => 'The localized unit of measurement for progression across the progressions defined in this mapping. Unfortunately, this is very infrequently defined. Defer to the individual progressions\' display units.',
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


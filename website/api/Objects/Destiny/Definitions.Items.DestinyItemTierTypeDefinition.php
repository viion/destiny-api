<?php

namespace Destiny2\Api\Objects\Destiny;

/**
 * Definitions.Items.DestinyItemTierTypeDefinition
 */
class Definitions.Items.DestinyItemTierTypeDefinition
{

    const NAME = 'Destiny.Definitions.Items.DestinyItemTierTypeDefinition';

    const TYPE = 'object';

    public $displayProperties = [
        '$ref' => '#/components/schemas/Destiny.Definitions.Common.DestinyDisplayPropertiesDefinition',
    ];

    public $infusionProcess = [
        'type' => 'object',
        'allOf' => [
            [
                '$ref' => '#/components/schemas/Destiny.Definitions.Items.DestinyItemTierTypeInfusionBlock',
            ],
        ],
        'description' => 'If this tier defines infusion properties, they will be contained here.',
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


<?php

namespace Destiny2\Api\Objects\Destiny;

/**
 * Definitions.Sockets.DestinyPlugSetDefinition
 */
class Definitions.Sockets.DestinyPlugSetDefinition
{

    const NAME = 'Destiny.Definitions.Sockets.DestinyPlugSetDefinition';

    const TYPE = 'object';

    public $displayProperties = [
        'type' => 'object',
        'allOf' => [
            [
                '$ref' => '#/components/schemas/Destiny.Definitions.Common.DestinyDisplayPropertiesDefinition',
            ],
        ],
        'description' => 'If you want to show these plugs in isolation, these are the display properties for them.',
    ];

    public $reusablePlugItems = [
        'type' => 'array',
        'items' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.DestinyItemSocketEntryPlugItemDefinition',
        ],
        'description' => 'This is a list of pre-determined plugs that can be plugged into this socket, without the character having the plug in their inventory.
If this list is populated, you will not be allowed to plug an arbitrary item in the socket: you will only be able to choose from one of these reusable plugs.',
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


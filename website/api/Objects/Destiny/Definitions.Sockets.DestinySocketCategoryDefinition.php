<?php

namespace Destiny2\Api\Objects\Destiny;

/**
 * Definitions.Sockets.DestinySocketCategoryDefinition
 */
class Definitions.Sockets.DestinySocketCategoryDefinition
{

    const NAME = 'Destiny.Definitions.Sockets.DestinySocketCategoryDefinition';

    const TYPE = 'object';

    public $displayProperties = [
        '$ref' => '#/components/schemas/Destiny.Definitions.Common.DestinyDisplayPropertiesDefinition',
    ];

    public $uiCategoryStyle = [
        'type' => 'integer',
        'description' => 'A string hinting to the game\'s UI system about how the sockets in this category should be displayed.
BNet doesn\'t use it: it\'s up to you to find valid values and make your own special UI if you want to honor this category style.',
        'format' => 'uint32',
    ];

    public $categoryStyle = [
        'type' => 'integer',
        'description' => 'Same as uiCategoryStyle, but in a more usable enumeration form.',
        'format' => 'int32',
        'x-enum-reference' => [
            '$ref' => '#/components/schemas/Destiny.DestinySocketCategoryStyle',
        ],
        'x-enum-is-bitmask' => false,
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


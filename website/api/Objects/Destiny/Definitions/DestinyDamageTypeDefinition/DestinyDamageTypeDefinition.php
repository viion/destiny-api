<?php

namespace Destiny2\Api\Objects\Destiny\Definitions\DestinyDamageTypeDefinition;

/**
 * DestinyDamageTypeDefinition
 *
 * All damage types that are possible in the game are defined here, along with
 * localized info and icons as needed.
 */
class DestinyDamageTypeDefinition
{

    const TYPE = 'object';

    public $displayProperties = [
        'type' => 'object',
        'allOf' => [
            [
                '$ref' => '#/components/schemas/Destiny.Definitions.Common.DestinyDisplayPropertiesDefinition',
            ],
        ],
        'description' => 'The description of the damage type, icon etc...',
    ];

    public $transparentIconPath = [
        'type' => 'string',
        'description' => 'A variant of the icon that is transparent and colorless.',
    ];

    public $showIcon = [
        'type' => 'boolean',
        'description' => 'If TRUE, the game shows this damage type\'s icon. Otherwise, it doesn\'t. Whether you show it or not is up to you.',
    ];

    public $enumValue = [
        'type' => 'integer',
        'description' => 'We have an enumeration for damage types for quick reference. This is the current definition\'s damage type enum value.',
        'format' => 'int32',
        'x-enum-reference' => [
            '$ref' => '#/components/schemas/Destiny.DamageType',
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


<?php

namespace Destiny2\Api\Objects\Destiny\Definitions\Lore\DestinyLoreDefinition;

/**
 * DestinyLoreDefinition
 *
 * These are definitions for in-game "Lore," meant to be narrative enhancements of
 * the game experience.
 * DestinyInventoryItemDefinitions for interesting items point to these
 * definitions, but nothing's stopping you from scraping all of these and doing
 * something cool with them. If they end up having cool data.
 */
class DestinyLoreDefinition
{

    const TYPE = 'object';

    public $displayProperties = [
        '$ref' => '#/components/schemas/Destiny.Definitions.Common.DestinyDisplayPropertiesDefinition',
    ];

    public $subtitle = [
        'type' => 'string',
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


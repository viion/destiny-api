<?php

namespace Destiny2\Api\Objects\Destiny\Definitions\Sockets\DestinySocketCategoryDefinition;

/**
 * DestinySocketCategoryDefinition
 *
 * Sockets on an item are organized into Categories visually.
 * You can find references to the socket category defined on an item's
 * DestinyInventoryItemDefinition.sockets.socketCategories property.
 * This has the display information for rendering the categories' header, and a
 * hint for how the UI should handle showing this category.
 * The shitty thing about this, however, is that the socket categories' UI style
 * can be overridden by the item's UI style. For instance, the Socket Category used
 * by Emote Sockets says it's "consumable," but that's a lie: they're all reusable,
 * and overridden by the detail UI pages in ways that we can't easily account for
 * in the API.
 * As a result, I will try to compile these rules into the individual sockets on
 * items, and provide the best hint possible there through the plugSources
 * property. In the future, I may attempt to use this information in conjunction
 * with the item to provide a more usable UI hint on the socket layer, but for now
 * improving the consistency of plugSources is the best I have time to provide.
 * (See https://github.com/Bungie-net/api/issues/522 for more info)
 */
class DestinySocketCategoryDefinition
{

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


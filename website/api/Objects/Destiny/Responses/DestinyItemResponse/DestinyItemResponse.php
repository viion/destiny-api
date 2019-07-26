<?php

namespace Destiny2\Api\Objects\Destiny\Responses\DestinyItemResponse;

/**
 * DestinyItemResponse
 *
 * The response object for retrieving an individual instanced item. None of these
 * components are relevant for an item that doesn't have an "itemInstanceId": for
 * those, get your information from the DestinyInventoryDefinition.
 */
class DestinyItemResponse
{

    const TYPE = 'object';

    public $characterId = [
        'type' => 'integer',
        'description' => 'If the item is on a character, this will return the ID of the character that is holding the item.',
        'format' => 'int64',
        'nullable' => true,
    ];

    public $item = [
        'type' => 'object',
        'allOf' => [
            [
                '$ref' => '#/components/schemas/SingleComponentResponseOfDestinyItemComponent',
            ],
        ],
        'description' => 'Common data for the item relevant to its non-instanced properties.
COMPONENT TYPE: ItemCommonData',
        'x-destiny-component-type-dependency' => 'ItemCommonData',
    ];

    public $instance = [
        'type' => 'object',
        'allOf' => [
            [
                '$ref' => '#/components/schemas/SingleComponentResponseOfDestinyItemInstanceComponent',
            ],
        ],
        'description' => 'Basic instance data for the item.
COMPONENT TYPE: ItemInstances',
        'x-destiny-component-type-dependency' => 'ItemInstances',
    ];

    public $objectives = [
        'type' => 'object',
        'allOf' => [
            [
                '$ref' => '#/components/schemas/SingleComponentResponseOfDestinyItemObjectivesComponent',
            ],
        ],
        'description' => 'Information specifically about the item\'s objectives.
COMPONENT TYPE: ItemObjectives',
        'x-destiny-component-type-dependency' => 'ItemObjectives',
    ];

    public $perks = [
        'type' => 'object',
        'allOf' => [
            [
                '$ref' => '#/components/schemas/SingleComponentResponseOfDestinyItemPerksComponent',
            ],
        ],
        'description' => 'Information specifically about the perks currently active on the item.
COMPONENT TYPE: ItemPerks',
        'x-destiny-component-type-dependency' => 'ItemPerks',
    ];

    public $renderData = [
        'type' => 'object',
        'allOf' => [
            [
                '$ref' => '#/components/schemas/SingleComponentResponseOfDestinyItemRenderComponent',
            ],
        ],
        'description' => 'Information about how to render the item in 3D.
COMPONENT TYPE: ItemRenderData',
        'x-destiny-component-type-dependency' => 'ItemRenderData',
    ];

    public $stats = [
        'type' => 'object',
        'allOf' => [
            [
                '$ref' => '#/components/schemas/SingleComponentResponseOfDestinyItemStatsComponent',
            ],
        ],
        'description' => 'Information about the computed stats of the item: power, defense, etc...
COMPONENT TYPE: ItemStats',
        'x-destiny-component-type-dependency' => 'ItemStats',
    ];

    public $talentGrid = [
        'type' => 'object',
        'allOf' => [
            [
                '$ref' => '#/components/schemas/SingleComponentResponseOfDestinyItemTalentGridComponent',
            ],
        ],
        'description' => 'Information about the talent grid attached to the item. Talent nodes can provide a variety of benefits and abilities, and in Destiny 2 are used almost exclusively for the character\'s "Builds".
COMPONENT TYPE: ItemTalentGrids',
        'x-destiny-component-type-dependency' => 'ItemTalentGrids',
    ];

    public $sockets = [
        'type' => 'object',
        'allOf' => [
            [
                '$ref' => '#/components/schemas/SingleComponentResponseOfDestinyItemSocketsComponent',
            ],
        ],
        'description' => 'Information about the sockets of the item: which are currently active, what potential sockets you could have and the stats/abilities/perks you can gain from them.
COMPONENT TYPE: ItemSockets',
        'x-destiny-component-type-dependency' => 'ItemSockets',
    ];


}


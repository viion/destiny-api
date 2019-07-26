<?php

namespace Destiny2\Api\Objects\Destiny\Responses\DestinyCharacterResponse;

/**
 * DestinyCharacterResponse
 *
 * The response contract for GetDestinyCharacter, with components that can be
 * returned for character and item-level data.
 */
class DestinyCharacterResponse
{

    const TYPE = 'object';

    public $inventory = [
        'type' => 'object',
        'allOf' => [
            [
                '$ref' => '#/components/schemas/SingleComponentResponseOfDestinyInventoryComponent',
            ],
        ],
        'description' => 'The character-level non-equipped inventory items.
COMPONENT TYPE: CharacterInventories',
        'x-destiny-component-type-dependency' => 'CharacterInventories',
    ];

    public $character = [
        'type' => 'object',
        'allOf' => [
            [
                '$ref' => '#/components/schemas/SingleComponentResponseOfDestinyCharacterComponent',
            ],
        ],
        'description' => 'Base information about the character in question.
COMPONENT TYPE: Characters',
        'x-destiny-component-type-dependency' => 'Characters',
    ];

    public $progressions = [
        'type' => 'object',
        'allOf' => [
            [
                '$ref' => '#/components/schemas/SingleComponentResponseOfDestinyCharacterProgressionComponent',
            ],
        ],
        'description' => 'Character progression data, including Milestones.
COMPONENT TYPE: CharacterProgressions',
        'x-destiny-component-type-dependency' => 'CharacterProgressions',
    ];

    public $renderData = [
        'type' => 'object',
        'allOf' => [
            [
                '$ref' => '#/components/schemas/SingleComponentResponseOfDestinyCharacterRenderComponent',
            ],
        ],
        'description' => 'Character rendering data - a minimal set of information about equipment and dyes used for rendering.
COMPONENT TYPE: CharacterRenderData',
        'x-destiny-component-type-dependency' => 'CharacterRenderData',
    ];

    public $activities = [
        'type' => 'object',
        'allOf' => [
            [
                '$ref' => '#/components/schemas/SingleComponentResponseOfDestinyCharacterActivitiesComponent',
            ],
        ],
        'description' => 'Activity data - info about current activities available to the player.
COMPONENT TYPE: CharacterActivities',
        'x-destiny-component-type-dependency' => 'CharacterActivities',
    ];

    public $equipment = [
        'type' => 'object',
        'allOf' => [
            [
                '$ref' => '#/components/schemas/SingleComponentResponseOfDestinyInventoryComponent',
            ],
        ],
        'description' => 'Equipped items on the character.
COMPONENT TYPE: CharacterEquipment',
        'x-destiny-component-type-dependency' => 'CharacterEquipment',
    ];

    public $kiosks = [
        'type' => 'object',
        'allOf' => [
            [
                '$ref' => '#/components/schemas/SingleComponentResponseOfDestinyKiosksComponent',
            ],
        ],
        'description' => 'Items available from Kiosks that are available to this specific character. 
COMPONENT TYPE: Kiosks',
        'x-destiny-component-type-dependency' => 'Kiosks',
    ];

    public $plugSets = [
        'type' => 'object',
        'allOf' => [
            [
                '$ref' => '#/components/schemas/SingleComponentResponseOfDestinyPlugSetsComponent',
            ],
        ],
        'description' => 'When sockets refer to reusable Plug Sets (see DestinyPlugSetDefinition for more info), this is the set of plugs and their states that are scoped to this character.
This comes back with ItemSockets, as it is needed for a complete picture of the sockets on requested items.
COMPONENT TYPE: ItemSockets',
        'x-destiny-component-type-dependency' => 'ItemSockets',
    ];

    public $presentationNodes = [
        'type' => 'object',
        'allOf' => [
            [
                '$ref' => '#/components/schemas/SingleComponentResponseOfDestinyPresentationNodesComponent',
            ],
        ],
        'description' => 'COMPONENT TYPE: PresentationNodes',
        'x-destiny-component-type-dependency' => 'PresentationNodes',
    ];

    public $records = [
        'type' => 'object',
        'allOf' => [
            [
                '$ref' => '#/components/schemas/SingleComponentResponseOfDestinyCharacterRecordsComponent',
            ],
        ],
        'description' => 'COMPONENT TYPE: Records',
        'x-destiny-component-type-dependency' => 'Records',
    ];

    public $collectibles = [
        'type' => 'object',
        'allOf' => [
            [
                '$ref' => '#/components/schemas/SingleComponentResponseOfDestinyCollectiblesComponent',
            ],
        ],
        'description' => 'COMPONENT TYPE: Collectibles',
        'x-destiny-component-type-dependency' => 'Collectibles',
    ];

    public $itemComponents = [
        'type' => 'object',
        'allOf' => [
            [
                '$ref' => '#/components/schemas/DestinyItemComponentSetOfint64',
            ],
        ],
        'description' => 'The set of components belonging to the player\'s instanced items.
COMPONENT TYPE: [See inside the DestinyItemComponentSet contract for component types.]',
    ];

    public $uninstancedItemComponents = [
        'type' => 'object',
        'allOf' => [
            [
                '$ref' => '#/components/schemas/DestinyBaseItemComponentSetOfuint32',
            ],
        ],
        'description' => 'The set of components belonging to the player\'s UNinstanced items. Because apparently now those too can have information relevant to the character\'s state.
COMPONENT TYPE: [See inside the DestinyItemComponentSet contract for component types.]',
    ];

    public $currencyLookups = [
        'type' => 'object',
        'allOf' => [
            [
                '$ref' => '#/components/schemas/SingleComponentResponseOfDestinyCurrenciesComponent',
            ],
        ],
        'description' => 'A "lookup" convenience component that can be used to quickly check if the character has access to items that can be used for purchasing.
COMPONENT TYPE: CurrencyLookups',
        'x-destiny-component-type-dependency' => 'CurrencyLookups',
    ];


}


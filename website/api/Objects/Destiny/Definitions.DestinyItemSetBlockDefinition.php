<?php

namespace Destiny2\Api\Objects\Destiny;

/**
 * Definitions.DestinyItemSetBlockDefinition
 */
class Definitions.DestinyItemSetBlockDefinition
{

    const NAME = 'Destiny.Definitions.DestinyItemSetBlockDefinition';

    const TYPE = 'object';

    public $itemList = [
        'type' => 'array',
        'items' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.DestinyItemSetBlockEntryDefinition',
        ],
        'description' => 'A collection of hashes of set items, for items such as Quest Metadata items that possess this data.',
    ];

    public $requireOrderedSetItemAdd = [
        'type' => 'boolean',
        'description' => 'If true, items in the set can only be added in increasing order, and adding an item will remove any previous item. For Quests, this is by necessity true. Only one quest step is present at a time, and previous steps are removed as you advance in the quest.',
    ];

    public $setIsFeatured = [
        'type' => 'boolean',
        'description' => 'If true, the UI should treat this quest as "featured"',
    ];

    public $setType = [
        'type' => 'string',
        'description' => 'A string identifier we can use to attempt to identify the category of the Quest.',
    ];


}


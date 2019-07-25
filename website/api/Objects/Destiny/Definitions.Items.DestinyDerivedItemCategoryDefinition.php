<?php

namespace Destiny2\Api\Objects\Destiny;

/**
 * Definitions.Items.DestinyDerivedItemCategoryDefinition
 */
class Definitions.Items.DestinyDerivedItemCategoryDefinition
{

    const NAME = 'Destiny.Definitions.Items.DestinyDerivedItemCategoryDefinition';

    const TYPE = 'object';

    public $categoryDescription = [
        'type' => 'string',
        'description' => 'The localized string for the category title. This will be something describing the items you can get as a group, or your likelihood/the quantity you\'ll get.',
    ];

    public $items = [
        'type' => 'array',
        'items' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.Items.DestinyDerivedItemDefinition',
        ],
        'description' => 'This is the list of all of the items for this category and the basic properties we\'ll know about them.',
    ];


}


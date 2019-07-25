<?php

namespace Destiny2\Api\Objects\Destiny;

/**
 * Definitions.Common.DestinyDisplayPropertiesDefinition
 */
class Definitions.Common.DestinyDisplayPropertiesDefinition
{

    const NAME = 'Destiny.Definitions.Common.DestinyDisplayPropertiesDefinition';

    const TYPE = 'object';

    public $description = [
        'type' => 'string',
    ];

    public $name = [
        'type' => 'string',
    ];

    public $icon = [
        'type' => 'string',
        'description' => 'Note that "icon" is sometimes misleading, and should be interpreted in the context of the entity. For instance, in Destiny 1 the DestinyRecordBookDefinition\'s icon was a big picture of a book.
But usually, it will be a small square image that you can use as... well, an icon.
They are currently represented as 96px x 96px images.',
    ];

    public $highResIcon = [
        'type' => 'string',
        'description' => 'If this item has a high-res icon (at least for now, many things won\'t), then the path to that icon will be here.',
    ];

    public $hasIcon = [
        'type' => 'boolean',
    ];


}


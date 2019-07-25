<?php

namespace Destiny2\Api\Objects\Destiny;

/**
 * Definitions.DestinyItemSocketBlockDefinition
 */
class Definitions.DestinyItemSocketBlockDefinition
{

    const NAME = 'Destiny.Definitions.DestinyItemSocketBlockDefinition';

    const TYPE = 'object';

    public $detail = [
        'type' => 'string',
        'description' => 'This was supposed to be a string that would give per-item details about sockets. In practice, it turns out that all this ever has is the localized word "details". ... that\'s lame, but perhaps it will become something cool in the future.',
    ];

    public $socketEntries = [
        'type' => 'array',
        'items' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.DestinyItemSocketEntryDefinition',
        ],
        'description' => 'Each non-intrinsic (or mutable) socket on an item is defined here. Check inside for more info.',
    ];

    public $intrinsicSockets = [
        'type' => 'array',
        'items' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.DestinyItemIntrinsicSocketEntryDefinition',
        ],
        'description' => 'Each intrinsic (or immutable/permanent) socket on an item is defined here, along with the plug that is permanently affixed to the socket.',
    ];

    public $socketCategories = [
        'type' => 'array',
        'items' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.DestinyItemSocketCategoryDefinition',
        ],
        'description' => 'A convenience property, that refers to the sockets in the "sockets" property, pre-grouped by category and ordered in the manner that they should be grouped in the UI. You could form this yourself with the existing data, but why would you want to? Enjoy life man.',
    ];


}


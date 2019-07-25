<?php

namespace Destiny2\Api\Objects\Destiny;

/**
 * Definitions.DestinyItemSetBlockEntryDefinition
 */
class Definitions.DestinyItemSetBlockEntryDefinition
{

    const NAME = 'Destiny.Definitions.DestinyItemSetBlockEntryDefinition';

    const TYPE = 'object';

    public $trackingValue = [
        'type' => 'integer',
        'description' => 'Used for tracking which step a user reached. These values will be populated in the user\'s internal state, which we expose externally as a more usable DestinyQuestStatus object. If this item has been obtained, this value will be set in trackingUnlockValueHash.',
        'format' => 'int32',
    ];

    public $itemHash = [
        'type' => 'integer',
        'description' => 'This is the hash identifier for a DestinyInventoryItemDefinition representing this quest step.',
        'format' => 'uint32',
        'x-mapped-definition' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.DestinyInventoryItemDefinition',
        ],
    ];


}


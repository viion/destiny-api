<?php

namespace Destiny2\Api\Objects\Destiny;

/**
 * Definitions.DestinyItemPerkEntryDefinition
 */
class Definitions.DestinyItemPerkEntryDefinition
{

    const NAME = 'Destiny.Definitions.DestinyItemPerkEntryDefinition';

    const TYPE = 'object';

    public $requirementDisplayString = [
        'type' => 'string',
        'description' => 'If this perk is not active, this is the string to show for why it\'s not providing its benefits.',
    ];

    public $perkHash = [
        'type' => 'integer',
        'description' => 'A hash identifier for the DestinySandboxPerkDefinition being provided on the item.',
        'format' => 'uint32',
        'x-mapped-definition' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.DestinySandboxPerkDefinition',
        ],
    ];

    public $perkVisibility = [
        'type' => 'integer',
        'description' => 'Indicates whether this perk should be shown, or if it should be shown disabled.',
        'format' => 'int32',
        'x-enum-reference' => [
            '$ref' => '#/components/schemas/Destiny.ItemPerkVisibility',
        ],
        'x-enum-is-bitmask' => false,
    ];


}


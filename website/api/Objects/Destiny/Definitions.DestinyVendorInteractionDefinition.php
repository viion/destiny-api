<?php

namespace Destiny2\Api\Objects\Destiny;

/**
 * Definitions.DestinyVendorInteractionDefinition
 */
class Definitions.DestinyVendorInteractionDefinition
{

    const NAME = 'Destiny.Definitions.DestinyVendorInteractionDefinition';

    const TYPE = 'object';

    public $interactionIndex = [
        'type' => 'integer',
        'description' => 'The position of this interaction in its parent array. Note that this is NOT content agnostic, and should not be used as such.',
        'format' => 'int32',
    ];

    public $replies = [
        'type' => 'array',
        'items' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.DestinyVendorInteractionReplyDefinition',
        ],
        'description' => 'The potential replies that the user can make to the interaction.',
    ];

    public $vendorCategoryIndex = [
        'type' => 'integer',
        'description' => 'If >= 0, this is the category of sale items to show along with this interaction dialog.',
        'format' => 'int32',
    ];

    public $questlineItemHash = [
        'type' => 'integer',
        'description' => 'If this interaction dialog is about a quest, this is the questline related to the interaction. You can use this to show the quest overview, or even the character\'s status with the quest if you use it to find the character\'s current Quest Step by checking their inventory against this questlineItemHash\'s DestinyInventoryItemDefinition.setData.',
        'format' => 'uint32',
        'x-mapped-definition' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.DestinyInventoryItemDefinition',
        ],
    ];

    public $sackInteractionList = [
        'type' => 'array',
        'items' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.DestinyVendorInteractionSackEntryDefinition',
        ],
        'description' => 'If this interaction is meant to show you sacks, this is the list of types of sacks to be shown. If empty, the interaction is not meant to show sacks.',
    ];

    public $uiInteractionType = [
        'type' => 'integer',
        'description' => 'A UI hint for the behavior of the interaction screen. This is useful to determine what type of interaction is occurring, such as a prompt to receive a rank up reward or a prompt to choose a reward for completing a quest. The hash isn\'t as useful as the Enum in retrospect, well what can you do. Try using interactionType instead.',
        'format' => 'uint32',
    ];

    public $interactionType = [
        'type' => 'integer',
        'description' => 'The enumerated version of the possible UI hints for vendor interactions, which is a little easier to grok than the hash found in uiInteractionType.',
        'format' => 'int32',
        'x-enum-reference' => [
            '$ref' => '#/components/schemas/Destiny.VendorInteractionType',
        ],
        'x-enum-is-bitmask' => false,
    ];

    public $rewardBlockLabel = [
        'type' => 'string',
        'description' => 'If this interaction is displaying rewards, this is the text to use for the header of the reward-displaying section of the interaction.',
    ];

    public $rewardVendorCategoryIndex = [
        'type' => 'integer',
        'description' => 'If the vendor\'s reward list is sourced from one of his categories, this is the index into the category array of items to show.',
        'format' => 'int32',
    ];

    public $flavorLineOne = [
        'type' => 'string',
        'description' => 'If the vendor interaction has flavor text, this is some of it.',
    ];

    public $flavorLineTwo = [
        'type' => 'string',
        'description' => 'If the vendor interaction has flavor text, this is the rest of it.',
    ];

    public $headerDisplayProperties = [
        'type' => 'object',
        'allOf' => [
            [
                '$ref' => '#/components/schemas/Destiny.Definitions.Common.DestinyDisplayPropertiesDefinition',
            ],
        ],
        'description' => 'The header for the interaction dialog.',
    ];

    public $instructions = [
        'type' => 'string',
        'description' => 'The localized text telling the player what to do when they see this dialog.',
    ];


}


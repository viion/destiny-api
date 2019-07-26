<?php

namespace Destiny2\Api\Objects\Destiny\Definitions\DestinyVendorInteractionReplyDefinition;

/**
 * DestinyVendorInteractionReplyDefinition
 *
 * When the interaction is replied to, Reward sites will fire and items potentially
 * selected based on whether the given unlock expression is TRUE.
 * You can potentially choose one from multiple replies when replying to an
 * interaction: this is how you get either/or rewards from vendors.
 */
class DestinyVendorInteractionReplyDefinition
{

    const TYPE = 'object';

    public $itemRewardsSelection = [
        'type' => 'integer',
        'description' => 'The rewards granted upon responding to the vendor.',
        'format' => 'int32',
        'x-enum-reference' => [
            '$ref' => '#/components/schemas/Destiny.DestinyVendorInteractionRewardSelection',
        ],
        'x-enum-is-bitmask' => false,
    ];

    public $reply = [
        'type' => 'string',
        'description' => 'The localized text for the reply.',
    ];

    public $replyType = [
        'type' => 'integer',
        'description' => 'An enum indicating the type of reply being made.',
        'format' => 'int32',
        'x-enum-reference' => [
            '$ref' => '#/components/schemas/Destiny.DestinyVendorReplyType',
        ],
        'x-enum-is-bitmask' => false,
    ];


}


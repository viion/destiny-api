<?php

namespace Destiny2\Api\Objects\Destiny;

/**
 * Components.Inventory.DestinyPlatformSilverComponent
 */
class Components.Inventory.DestinyPlatformSilverComponent
{

    const NAME = 'Destiny.Components.Inventory.DestinyPlatformSilverComponent';

    const TYPE = 'object';

    public $platformSilver = [
        'type' => 'object',
        'additionalProperties' => [
            '$ref' => '#/components/schemas/Destiny.Entities.Items.DestinyItemComponent',
        ],
        'description' => 'If a Profile is played on multiple platforms, this is the silver they have for each platform, keyed by Membership Type.',
        'x-dictionary-key' => [
            'type' => 'integer',
            'description' => 'The types of membership the Accounts system supports. This is the external facing enum used in place of the internal-only Bungie.SharedDefinitions.MembershipType.',
            'format' => 'int32',
            'x-enum-reference' => [
                '$ref' => '#/components/schemas/BungieMembershipType',
            ],
            'x-enum-is-bitmask' => false,
        ],
    ];


}


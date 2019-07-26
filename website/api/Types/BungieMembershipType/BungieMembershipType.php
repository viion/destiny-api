<?php

namespace Destiny2\Api\Types\BungieMembershipType;

/**
 * BungieMembershipType
 *
 * No description
 */
class BungieMembershipType
{

    const TYPE = 'array';

    const ITEMS = [
        'type' => 'integer',
        'description' => 'The types of membership the Accounts system supports. This is the external facing enum used in place of the internal-only Bungie.SharedDefinitions.MembershipType.',
        'format' => 'int32',
        'reference' => '#/components/schemas/BungieMembershipType',
        'is_bitmask' => false,
    ];


}


<?php

namespace Destiny2\Api\Objects\Destiny\Requests\Actions\DestinyItemSetActionRequest;

/**
 * DestinyItemSetActionRequest
 *
 * No description
 */
class DestinyItemSetActionRequest
{

    const TYPE = 'object';

    public $itemIds = [
        'type' => 'array',
        'items' => [
            'type' => 'integer',
            'format' => 'int64',
        ],
    ];

    public $characterId = [
        'type' => 'integer',
        'format' => 'int64',
    ];

    public $membershipType = [
        'type' => 'integer',
        'format' => 'int32',
        'x-enum-reference' => [
            '$ref' => '#/components/schemas/BungieMembershipType',
        ],
        'x-enum-is-bitmask' => false,
    ];


}


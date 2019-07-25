<?php

namespace Destiny2\Api\Objects\Destiny;

/**
 * Requests.Actions.DestinyItemSetActionRequest
 */
class Requests.Actions.DestinyItemSetActionRequest
{

    const NAME = 'Destiny.Requests.Actions.DestinyItemSetActionRequest';

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


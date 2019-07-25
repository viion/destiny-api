<?php

namespace Destiny2\Api\Objects\Destiny;

/**
 * Requests.Actions.DestinyInsertPlugsActionRequest
 */
class Requests.Actions.DestinyInsertPlugsActionRequest
{

    const NAME = 'Destiny.Requests.Actions.DestinyInsertPlugsActionRequest';

    const TYPE = 'object';

    public $actionToken = [
        'type' => 'string',
        'description' => 'Action token provided by the AwaGetActionToken API call.',
    ];

    public $itemInstanceId = [
        'type' => 'integer',
        'description' => 'The instance ID of the item having a plug inserted. Only instanced items can have sockets.',
        'format' => 'int64',
    ];

    public $plug = [
        'type' => 'object',
        'allOf' => [
            [
                '$ref' => '#/components/schemas/Destiny.Requests.Actions.DestinyInsertPlugsRequestEntry',
            ],
        ],
        'description' => 'The plugs being inserted.',
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


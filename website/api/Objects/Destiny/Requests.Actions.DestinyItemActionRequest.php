<?php

namespace Destiny2\Api\Objects\Destiny;

/**
 * Requests.Actions.DestinyItemActionRequest
 */
class Requests.Actions.DestinyItemActionRequest
{

    const NAME = 'Destiny.Requests.Actions.DestinyItemActionRequest';

    const TYPE = 'object';

    public $itemId = [
        'type' => 'integer',
        'format' => 'int64',
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


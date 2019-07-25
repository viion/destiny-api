<?php

namespace Destiny2\Api\Objects\Destiny;

/**
 * Requests.Actions.DestinyActionRequest
 */
class Requests.Actions.DestinyActionRequest
{

    const NAME = 'Destiny.Requests.Actions.DestinyActionRequest';

    const TYPE = 'object';

    public $membershipType = [
        'type' => 'integer',
        'format' => 'int32',
        'x-enum-reference' => [
            '$ref' => '#/components/schemas/BungieMembershipType',
        ],
        'x-enum-is-bitmask' => false,
    ];


}


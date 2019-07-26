<?php

namespace Destiny2\Api\Objects\Destiny\Requests\Actions\DestinyActionRequest;

/**
 * DestinyActionRequest
 *
 * No description
 */
class DestinyActionRequest
{

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


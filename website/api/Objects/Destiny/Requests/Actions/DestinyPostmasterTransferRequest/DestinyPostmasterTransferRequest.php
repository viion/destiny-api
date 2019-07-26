<?php

namespace Destiny2\Api\Objects\Destiny\Requests\Actions\DestinyPostmasterTransferRequest;

/**
 * DestinyPostmasterTransferRequest
 *
 * No description
 */
class DestinyPostmasterTransferRequest
{

    const TYPE = 'object';

    public $itemReferenceHash = [
        'type' => 'integer',
        'format' => 'uint32',
    ];

    public $stackSize = [
        'type' => 'integer',
        'format' => 'int32',
    ];

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


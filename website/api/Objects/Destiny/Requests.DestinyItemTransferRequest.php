<?php

namespace Destiny2\Api\Objects\Destiny;

/**
 * Requests.DestinyItemTransferRequest
 */
class Requests.DestinyItemTransferRequest
{

    const NAME = 'Destiny.Requests.DestinyItemTransferRequest';

    const TYPE = 'object';

    public $itemReferenceHash = [
        'type' => 'integer',
        'format' => 'uint32',
    ];

    public $stackSize = [
        'type' => 'integer',
        'format' => 'int32',
    ];

    public $transferToVault = [
        'type' => 'boolean',
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


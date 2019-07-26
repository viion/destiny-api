<?php

namespace Destiny2\Api\Objects\Destiny\Vendors\DestinyVendorReceipt;

/**
 * DestinyVendorReceipt
 *
 * If a character purchased an item that is refundable, a Vendor Receipt will be
 * created on the user's Destiny Profile. These expire after a configurable period
 * of time, but until then can be used to get refunds on items. BNet does not
 * provide the ability to refund a purchase *yet*, but you know.
 */
class DestinyVendorReceipt
{

    const TYPE = 'object';

    public $currencyPaid = [
        'type' => 'array',
        'items' => [
            '$ref' => '#/components/schemas/Destiny.DestinyItemQuantity',
        ],
        'description' => 'The amount paid for the item, in terms of items that were consumed in the purchase and their quantity.',
    ];

    public $itemReceived = [
        'type' => 'object',
        'allOf' => [
            [
                '$ref' => '#/components/schemas/Destiny.DestinyItemQuantity',
            ],
        ],
        'description' => 'The item that was received, and its quantity.',
    ];

    public $licenseUnlockHash = [
        'type' => 'integer',
        'description' => 'The unlock flag used to determine whether you still have the purchased item.',
        'format' => 'uint32',
    ];

    public $purchasedByCharacterId = [
        'type' => 'integer',
        'description' => 'The ID of the character who made the purchase.',
        'format' => 'int64',
    ];

    public $refundPolicy = [
        'type' => 'integer',
        'description' => 'Whether you can get a refund, and what happens in order for the refund to be received. See the DestinyVendorItemRefundPolicy enum for details.',
        'format' => 'int32',
        'x-enum-reference' => [
            '$ref' => '#/components/schemas/Destiny.DestinyVendorItemRefundPolicy',
        ],
        'x-enum-is-bitmask' => false,
    ];

    public $sequenceNumber = [
        'type' => 'integer',
        'description' => 'The identifier of this receipt.',
        'format' => 'int32',
    ];

    public $timeToExpiration = [
        'type' => 'integer',
        'description' => 'The seconds since epoch at which this receipt is rendered invalid.',
        'format' => 'int64',
    ];

    public $expiresOn = [
        'type' => 'string',
        'description' => 'The date at which this receipt is rendered invalid.',
        'format' => 'date-time',
    ];


}


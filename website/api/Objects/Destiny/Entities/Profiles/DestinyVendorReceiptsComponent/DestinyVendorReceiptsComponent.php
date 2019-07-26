<?php

namespace Destiny2\Api\Objects\Destiny\Entities\Profiles\DestinyVendorReceiptsComponent;

/**
 * DestinyVendorReceiptsComponent
 *
 * For now, this isn't used for much: it's a record of the recent refundable
 * purchases that the user has made. In the future, it could be used for providing
 * refunds/buyback via the API. Wouldn't that be fun?
 */
class DestinyVendorReceiptsComponent
{

    const TYPE = 'object';

    public $receipts = [
        'type' => 'array',
        'items' => [
            '$ref' => '#/components/schemas/Destiny.Vendors.DestinyVendorReceipt',
        ],
        'description' => 'The receipts for refundable purchases made at a vendor.',
    ];


}


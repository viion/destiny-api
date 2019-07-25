<?php

namespace Destiny2\Api\Objects\Destiny;

/**
 * Entities.Profiles.DestinyVendorReceiptsComponent
 */
class Entities.Profiles.DestinyVendorReceiptsComponent
{

    const NAME = 'Destiny.Entities.Profiles.DestinyVendorReceiptsComponent';

    const TYPE = 'object';

    public $receipts = [
        'type' => 'array',
        'items' => [
            '$ref' => '#/components/schemas/Destiny.Vendors.DestinyVendorReceipt',
        ],
        'description' => 'The receipts for refundable purchases made at a vendor.',
    ];


}


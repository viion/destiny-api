<?php

namespace Destiny2\Api\Enums\Destiny;

/**
 * VendorItemStatus
 */
class VendorItemStatus
{

    const NAME = 'Destiny.VendorItemStatus';

    const TYPE = 'integer';

    const TYPE_FORMAT = 'int32';

    const ENUMS_ALLOWED = [
        '0',
        '1',
        '2',
        '4',
        '8',
        '16',
        '32',
        '64',
        '128',
        '256',
        '512',
        '1024',
        '2048',
        '4096',
        '8192',
    ];

    const ENUMS = [
        'Success' => '0',
        'NoInventorySpace' => '1',
        'NoFunds' => '2',
        'NoProgression' => '4',
        'NoUnlock' => '8',
        'NoQuantity' => '16',
        'OutsidePurchaseWindow' => '32',
        'NotAvailable' => '64',
        'UniquenessViolation' => '128',
        'UnknownError' => '256',
        'AlreadySelling' => '512',
        'Unsellable' => '1024',
        'SellingInhibited' => '2048',
        'AlreadyOwned' => '4096',
        'DisplayOnly' => '8192',
    ];


}


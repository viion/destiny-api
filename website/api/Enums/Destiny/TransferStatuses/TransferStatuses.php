<?php

namespace Destiny2\Api\Enums\Destiny\TransferStatuses;

/**
 * TransferStatuses
 *
 * Whether you can transfer an item, and why not if you can't.
 */
class TransferStatuses
{

    const TYPE = 'integer';

    const TYPE_FORMAT = 'int32';

    const ENUMS_ALLOWED = [
        '0',
        '1',
        '2',
        '4',
    ];

    const ENUMS = [
        'CanTransfer' => '0',
        'ItemIsEquipped' => '1',
        'NotTransferrable' => '2',
        'NoRoomInDestination' => '4',
    ];


}


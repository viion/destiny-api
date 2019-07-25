<?php

namespace Destiny2\Api\Enums\Destiny;

/**
 * DestinyVendorReplyType
 */
class DestinyVendorReplyType
{

    const NAME = 'Destiny.DestinyVendorReplyType';

    const TYPE = 'integer';

    const TYPE_FORMAT = 'int32';

    const ENUMS_ALLOWED = [
        '0',
        '1',
        '2',
    ];

    const ENUMS = [
        'Accept' => '0',
        'Decline' => '1',
        'Complete' => '2',
    ];


}


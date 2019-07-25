<?php

namespace Destiny2\Api\Enums\Destiny;

/**
 * BucketCategory
 */
class BucketCategory
{

    const NAME = 'Destiny.BucketCategory';

    const TYPE = 'integer';

    const TYPE_FORMAT = 'int32';

    const ENUMS_ALLOWED = [
        '0',
        '1',
        '2',
        '3',
        '4',
    ];

    const ENUMS = [
        'Invisible' => '0',
        'Item' => '1',
        'Currency' => '2',
        'Equippable' => '3',
        'Ignored' => '4',
    ];


}


<?php

namespace Destiny2\Api\Enums\Destiny\VendorDisplayCategorySortOrder;

/**
 * VendorDisplayCategorySortOrder
 *
 * Display categories can have custom sort orders. These are the possible options.
 */
class VendorDisplayCategorySortOrder
{

    const TYPE = 'integer';

    const TYPE_FORMAT = 'int32';

    const ENUMS_ALLOWED = [
        '0',
        '1',
    ];

    const ENUMS = [
        'Default' => '0',
        'SortByTier' => '1',
    ];


}


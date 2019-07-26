<?php

namespace Destiny2\Api\Enums\Destiny\Definitions\DestinyRewardSourceCategory;

/**
 * DestinyRewardSourceCategory
 *
 * BNet's custom categorization of reward sources. We took a look at the existing
 * ways that items could be spawned, and tried to make high-level categorizations
 * of them. This needs to be re-evaluated for Destiny 2.
 */
class DestinyRewardSourceCategory
{

    const TYPE = 'integer';

    const TYPE_FORMAT = 'int32';

    const ENUMS_ALLOWED = [
        '0',
        '1',
        '2',
        '3',
    ];

    const ENUMS = [
        'None' => '0',
        'Activity' => '1',
        'Vendor' => '2',
        'Aggregate' => '3',
    ];


}


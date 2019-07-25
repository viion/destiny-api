<?php

namespace Destiny2\Api\Enums\Destiny;

/**
 * DestinyGraphNodeState
 */
class DestinyGraphNodeState
{

    const NAME = 'Destiny.DestinyGraphNodeState';

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
        'Hidden' => '0',
        'Visible' => '1',
        'Teaser' => '2',
        'Incomplete' => '3',
        'Completed' => '4',
    ];


}


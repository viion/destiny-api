<?php

namespace Destiny2\Api\Enums\Destiny;

/**
 * DestinyStatAggregationType
 */
class DestinyStatAggregationType
{

    const NAME = 'Destiny.DestinyStatAggregationType';

    const TYPE = 'integer';

    const TYPE_FORMAT = 'int32';

    const ENUMS_ALLOWED = [
        '0',
        '1',
        '2',
    ];

    const ENUMS = [
        'CharacterAverage' => '0',
        'Character' => '1',
        'Item' => '2',
    ];


}


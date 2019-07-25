<?php

namespace Destiny2\Api\Enums\Destiny;

/**
 * ActivityGraphNodeHighlightType
 */
class ActivityGraphNodeHighlightType
{

    const NAME = 'Destiny.ActivityGraphNodeHighlightType';

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
        'None' => '0',
        'Normal' => '1',
        'Hyper' => '2',
        'Comet' => '3',
        'RiseOfIron' => '4',
    ];


}


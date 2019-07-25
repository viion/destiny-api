<?php

namespace Destiny2\Api\Enums\Destiny;

/**
 * DestinyPresentationNodeState
 */
class DestinyPresentationNodeState
{

    const NAME = 'Destiny.DestinyPresentationNodeState';

    const TYPE = 'integer';

    const TYPE_FORMAT = 'int32';

    const ENUMS_ALLOWED = [
        '0',
        '1',
        '2',
    ];

    const ENUMS = [
        'None' => '0',
        'Invisible' => '1',
        'Obscured' => '2',
    ];


}


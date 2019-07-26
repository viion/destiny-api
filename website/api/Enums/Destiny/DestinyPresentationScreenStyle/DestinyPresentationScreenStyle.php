<?php

namespace Destiny2\Api\Enums\Destiny\DestinyPresentationScreenStyle;

/**
 * DestinyPresentationScreenStyle
 *
 * A hint for what screen should be shown when this presentation node is clicked
 * into. How you use this is your UI is up to you.
 */
class DestinyPresentationScreenStyle
{

    const TYPE = 'integer';

    const TYPE_FORMAT = 'int32';

    const ENUMS_ALLOWED = [
        '0',
        '1',
        '2',
    ];

    const ENUMS = [
        'Default' => '0',
        'CategorySets' => '1',
        'Badge' => '2',
    ];


}


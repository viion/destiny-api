<?php

namespace Destiny2\Api\Enums\Destiny\DestinyPresentationDisplayStyle;

/**
 * DestinyPresentationDisplayStyle
 *
 * A hint for how the presentation node should be displayed when shown in a list.
 * How you use this is your UI is up to you.
 */
class DestinyPresentationDisplayStyle
{

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
        'Category' => '0',
        'Badge' => '1',
        'Medals' => '2',
        'Collectible' => '3',
        'Record' => '4',
    ];


}


<?php

namespace Destiny2\Api\Enums\Destiny\ActivityGraphNodeHighlightType;

/**
 * ActivityGraphNodeHighlightType
 *
 * The various known UI styles in which an item can be highlighted. It'll be up to
 * you to determine what you want to show based on this highlighting, BNet doesn't
 * have any assets that correspond to these states. And yeah, RiseOfIron and Comet
 * have their own special highlight states. Don't ask me, I can't imagine they're
 * still used.
 */
class ActivityGraphNodeHighlightType
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
        'None' => '0',
        'Normal' => '1',
        'Hyper' => '2',
        'Comet' => '3',
        'RiseOfIron' => '4',
    ];


}


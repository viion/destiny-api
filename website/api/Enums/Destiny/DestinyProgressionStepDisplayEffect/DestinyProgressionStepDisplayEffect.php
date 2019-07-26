<?php

namespace Destiny2\Api\Enums\Destiny\DestinyProgressionStepDisplayEffect;

/**
 * DestinyProgressionStepDisplayEffect
 *
 * If progression is earned, this determines whether the progression shows visual
 * effects on the character or its item - or neither.
 */
class DestinyProgressionStepDisplayEffect
{

    const TYPE = 'integer';

    const TYPE_FORMAT = 'int32';

    const ENUMS_ALLOWED = [
        '0',
        '1',
        '2',
    ];

    const ENUMS = [
        'None' => '0',
        'Character' => '1',
        'Item' => '2',
    ];


}


<?php

namespace Destiny2\Api\Enums\Destiny\DestinyRecordToastStyle;

/**
 * DestinyRecordToastStyle
 *
 * No description
 */
class DestinyRecordToastStyle
{

    const TYPE = 'integer';

    const TYPE_FORMAT = 'int32';

    const ENUMS_ALLOWED = [
        '0',
        '1',
        '2',
        '3',
        '4',
        '5',
    ];

    const ENUMS = [
        'None' => '0',
        'Record' => '1',
        'Lore' => '2',
        'Badge' => '3',
        'MetaRecord' => '4',
        'MedalComplete' => '5',
    ];


}


<?php

namespace Destiny2\Api\Objects\Destiny;

/**
 * DestinyProgressionResetEntry
 */
class DestinyProgressionResetEntry
{

    const NAME = 'Destiny.DestinyProgressionResetEntry';

    const TYPE = 'object';

    public $season = [
        'type' => 'integer',
        'format' => 'int32',
    ];

    public $resets = [
        'type' => 'integer',
        'format' => 'int32',
    ];


}


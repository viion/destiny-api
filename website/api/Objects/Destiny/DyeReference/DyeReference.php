<?php

namespace Destiny2\Api\Objects\Destiny\DyeReference;

/**
 * DyeReference
 *
 * No description
 */
class DyeReference
{

    const TYPE = 'object';

    public $channelHash = [
        'type' => 'integer',
        'format' => 'uint32',
    ];

    public $dyeHash = [
        'type' => 'integer',
        'format' => 'uint32',
    ];


}


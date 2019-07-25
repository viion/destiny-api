<?php

namespace Destiny2\Api\Objects\Config;

/**
 * GroupTheme
 */
class GroupTheme
{

    const NAME = 'Config.GroupTheme';

    const TYPE = 'object';

    public $name = [
        'type' => 'string',
    ];

    public $folder = [
        'type' => 'string',
    ];

    public $description = [
        'type' => 'string',
    ];


}


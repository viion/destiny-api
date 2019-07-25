<?php

namespace Destiny2\Api\Objects\Destiny;

/**
 * Config.GearAssetDataBaseDefinition
 */
class Config.GearAssetDataBaseDefinition
{

    const NAME = 'Destiny.Config.GearAssetDataBaseDefinition';

    const TYPE = 'object';

    public $version = [
        'type' => 'integer',
        'format' => 'int32',
    ];

    public $path = [
        'type' => 'string',
    ];


}


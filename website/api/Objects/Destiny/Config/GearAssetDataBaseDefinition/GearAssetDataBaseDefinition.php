<?php

namespace Destiny2\Api\Objects\Destiny\Config\GearAssetDataBaseDefinition;

/**
 * GearAssetDataBaseDefinition
 *
 * No description
 */
class GearAssetDataBaseDefinition
{

    const TYPE = 'object';

    public $version = [
        'type' => 'integer',
        'format' => 'int32',
    ];

    public $path = [
        'type' => 'string',
    ];


}


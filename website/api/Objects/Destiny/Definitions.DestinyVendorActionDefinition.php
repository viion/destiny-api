<?php

namespace Destiny2\Api\Objects\Destiny;

/**
 * Definitions.DestinyVendorActionDefinition
 */
class Definitions.DestinyVendorActionDefinition
{

    const NAME = 'Destiny.Definitions.DestinyVendorActionDefinition';

    const TYPE = 'object';

    public $description = [
        'type' => 'string',
    ];

    public $executeSeconds = [
        'type' => 'integer',
        'format' => 'int32',
    ];

    public $icon = [
        'type' => 'string',
    ];

    public $name = [
        'type' => 'string',
    ];

    public $verb = [
        'type' => 'string',
    ];

    public $isPositive = [
        'type' => 'boolean',
    ];

    public $actionId = [
        'type' => 'string',
    ];

    public $actionHash = [
        'type' => 'integer',
        'format' => 'uint32',
    ];

    public $autoPerformAction = [
        'type' => 'boolean',
    ];


}


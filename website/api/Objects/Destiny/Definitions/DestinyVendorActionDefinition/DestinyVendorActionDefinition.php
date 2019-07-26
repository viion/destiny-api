<?php

namespace Destiny2\Api\Objects\Destiny\Definitions\DestinyVendorActionDefinition;

/**
 * DestinyVendorActionDefinition
 *
 * If a vendor can ever end up performing actions, these are the properties that
 * will be related to those actions. I'm not going to bother documenting this yet,
 * as it is unused and unclear if it will ever be used... but in case it is ever
 * populated and someone finds it useful, it is defined here.
 */
class DestinyVendorActionDefinition
{

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


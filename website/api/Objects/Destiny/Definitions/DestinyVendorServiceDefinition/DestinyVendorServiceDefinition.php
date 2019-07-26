<?php

namespace Destiny2\Api\Objects\Destiny\Definitions\DestinyVendorServiceDefinition;

/**
 * DestinyVendorServiceDefinition
 *
 * When a vendor provides services, this is the localized name of those services.
 */
class DestinyVendorServiceDefinition
{

    const TYPE = 'object';

    public $name = [
        'type' => 'string',
        'description' => 'The localized name of a service provided.',
    ];


}


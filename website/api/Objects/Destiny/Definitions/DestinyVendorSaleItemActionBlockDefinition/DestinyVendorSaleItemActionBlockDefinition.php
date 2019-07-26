<?php

namespace Destiny2\Api\Objects\Destiny\Definitions\DestinyVendorSaleItemActionBlockDefinition;

/**
 * DestinyVendorSaleItemActionBlockDefinition
 *
 * Not terribly useful, some basic cooldown interaction info.
 */
class DestinyVendorSaleItemActionBlockDefinition
{

    const TYPE = 'object';

    public $executeSeconds = [
        'type' => 'number',
        'format' => 'float',
    ];

    public $isPositive = [
        'type' => 'boolean',
    ];


}


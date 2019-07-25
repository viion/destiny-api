<?php

namespace Destiny2\Api\Objects\Destiny;

/**
 * Definitions.DestinyVendorSaleItemActionBlockDefinition
 */
class Definitions.DestinyVendorSaleItemActionBlockDefinition
{

    const NAME = 'Destiny.Definitions.DestinyVendorSaleItemActionBlockDefinition';

    const TYPE = 'object';

    public $executeSeconds = [
        'type' => 'number',
        'format' => 'float',
    ];

    public $isPositive = [
        'type' => 'boolean',
    ];


}


<?php

namespace Destiny2\Api\Objects\Destiny\Definitions\Sockets\DestinySocketTypeScalarMaterialRequirementEntry;

/**
 * DestinySocketTypeScalarMaterialRequirementEntry
 *
 * No description
 */
class DestinySocketTypeScalarMaterialRequirementEntry
{

    const TYPE = 'object';

    public $currencyItemHash = [
        'type' => 'integer',
        'format' => 'uint32',
    ];

    public $scalarValue = [
        'type' => 'integer',
        'format' => 'int32',
    ];


}


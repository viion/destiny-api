<?php

namespace Destiny2\Api\Objects\Destiny;

/**
 * Definitions.DestinyVendorCategoryOverlayDefinition
 */
class Definitions.DestinyVendorCategoryOverlayDefinition
{

    const NAME = 'Destiny.Definitions.DestinyVendorCategoryOverlayDefinition';

    const TYPE = 'object';

    public $choiceDescription = [
        'type' => 'string',
    ];

    public $description = [
        'type' => 'string',
    ];

    public $icon = [
        'type' => 'string',
    ];

    public $title = [
        'type' => 'string',
    ];

    public $currencyItemHash = [
        'type' => 'integer',
        'description' => 'If this overlay has a currency item that it features, this is said featured item.',
        'format' => 'uint32',
        'nullable' => true,
    ];


}


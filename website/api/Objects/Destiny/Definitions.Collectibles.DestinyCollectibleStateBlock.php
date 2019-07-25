<?php

namespace Destiny2\Api\Objects\Destiny;

/**
 * Definitions.Collectibles.DestinyCollectibleStateBlock
 */
class Definitions.Collectibles.DestinyCollectibleStateBlock
{

    const NAME = 'Destiny.Definitions.Collectibles.DestinyCollectibleStateBlock';

    const TYPE = 'object';

    public $obscuredOverrideItemHash = [
        'type' => 'integer',
        'format' => 'uint32',
        'nullable' => true,
        'x-mapped-definition' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.DestinyInventoryItemDefinition',
        ],
    ];

    public $requirements = [
        '$ref' => '#/components/schemas/Destiny.Definitions.Presentation.DestinyPresentationNodeRequirementsBlock',
    ];


}


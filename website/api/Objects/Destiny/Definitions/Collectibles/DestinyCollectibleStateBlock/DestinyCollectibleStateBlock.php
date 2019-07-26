<?php

namespace Destiny2\Api\Objects\Destiny\Definitions\Collectibles\DestinyCollectibleStateBlock;

/**
 * DestinyCollectibleStateBlock
 *
 * No description
 */
class DestinyCollectibleStateBlock
{

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


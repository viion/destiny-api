<?php

namespace Destiny2\Api\Objects\Destiny\Definitions\Collectibles\DestinyCollectibleAcquisitionBlock;

/**
 * DestinyCollectibleAcquisitionBlock
 *
 * No description
 */
class DestinyCollectibleAcquisitionBlock
{

    const TYPE = 'object';

    public $acquireMaterialRequirementHash = [
        'type' => 'integer',
        'format' => 'uint32',
        'nullable' => true,
        'x-mapped-definition' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.DestinyMaterialRequirementSetDefinition',
        ],
    ];

    public $acquireTimestampUnlockValueHash = [
        'type' => 'integer',
        'format' => 'uint32',
        'nullable' => true,
        'x-mapped-definition' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.DestinyUnlockValueDefinition',
        ],
    ];


}


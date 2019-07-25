<?php

namespace Destiny2\Api\Objects\Destiny;

/**
 * Definitions.Presentation.DestinyPresentationNodeCollectibleChildEntry
 */
class Definitions.Presentation.DestinyPresentationNodeCollectibleChildEntry
{

    const NAME = 'Destiny.Definitions.Presentation.DestinyPresentationNodeCollectibleChildEntry';

    const TYPE = 'object';

    public $collectibleHash = [
        'type' => 'integer',
        'format' => 'uint32',
        'x-mapped-definition' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.Collectibles.DestinyCollectibleDefinition',
        ],
    ];


}


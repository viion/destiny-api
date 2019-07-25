<?php

namespace Destiny2\Api\Objects\Destiny;

/**
 * Definitions.Presentation.DestinyPresentationNodeChildrenBlock
 */
class Definitions.Presentation.DestinyPresentationNodeChildrenBlock
{

    const NAME = 'Destiny.Definitions.Presentation.DestinyPresentationNodeChildrenBlock';

    const TYPE = 'object';

    public $presentationNodes = [
        'type' => 'array',
        'items' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.Presentation.DestinyPresentationNodeChildEntry',
        ],
    ];

    public $collectibles = [
        'type' => 'array',
        'items' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.Presentation.DestinyPresentationNodeCollectibleChildEntry',
        ],
    ];

    public $records = [
        'type' => 'array',
        'items' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.Presentation.DestinyPresentationNodeRecordChildEntry',
        ],
    ];


}


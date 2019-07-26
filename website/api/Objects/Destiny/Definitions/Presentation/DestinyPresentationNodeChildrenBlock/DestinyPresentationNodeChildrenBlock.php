<?php

namespace Destiny2\Api\Objects\Destiny\Definitions\Presentation\DestinyPresentationNodeChildrenBlock;

/**
 * DestinyPresentationNodeChildrenBlock
 *
 * As/if presentation nodes begin to host more entities as children, these lists
 * will be added to. One list property exists per type of entity that can be
 * treated as a child of this presentation node, and each holds the identifier of
 * the entity and any associated information needed to display the UI for that
 * entity (if anything)
 */
class DestinyPresentationNodeChildrenBlock
{

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


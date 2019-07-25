<?php

namespace Destiny2\Api\Objects\Destiny;

/**
 * Definitions.Presentation.DestinyPresentationNodeChildEntry
 */
class Definitions.Presentation.DestinyPresentationNodeChildEntry
{

    const NAME = 'Destiny.Definitions.Presentation.DestinyPresentationNodeChildEntry';

    const TYPE = 'object';

    public $presentationNodeHash = [
        'type' => 'integer',
        'format' => 'uint32',
        'x-mapped-definition' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.Presentation.DestinyPresentationNodeDefinition',
        ],
    ];


}


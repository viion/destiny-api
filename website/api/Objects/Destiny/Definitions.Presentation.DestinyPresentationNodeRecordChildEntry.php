<?php

namespace Destiny2\Api\Objects\Destiny;

/**
 * Definitions.Presentation.DestinyPresentationNodeRecordChildEntry
 */
class Definitions.Presentation.DestinyPresentationNodeRecordChildEntry
{

    const NAME = 'Destiny.Definitions.Presentation.DestinyPresentationNodeRecordChildEntry';

    const TYPE = 'object';

    public $recordHash = [
        'type' => 'integer',
        'format' => 'uint32',
        'x-mapped-definition' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.Records.DestinyRecordDefinition',
        ],
    ];


}


<?php

namespace Destiny2\Api\Objects\Destiny\Definitions\Presentation\DestinyPresentationNodeRecordChildEntry;

/**
 * DestinyPresentationNodeRecordChildEntry
 *
 * No description
 */
class DestinyPresentationNodeRecordChildEntry
{

    const TYPE = 'object';

    public $recordHash = [
        'type' => 'integer',
        'format' => 'uint32',
        'x-mapped-definition' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.Records.DestinyRecordDefinition',
        ],
    ];


}


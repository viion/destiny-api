<?php

namespace Destiny2\Api\Objects\Destiny;

/**
 * Components.Records.DestinyCharacterRecordsComponent
 */
class Components.Records.DestinyCharacterRecordsComponent
{

    const NAME = 'Destiny.Components.Records.DestinyCharacterRecordsComponent';

    const TYPE = 'object';

    public $featuredRecordHashes = [
        'type' => 'array',
        'items' => [
            'type' => 'integer',
            'format' => 'uint32',
        ],
        'x-mapped-definition' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.Records.DestinyRecordDefinition',
        ],
    ];

    public $records = [
        'type' => 'object',
        'additionalProperties' => [
            '$ref' => '#/components/schemas/Destiny.Components.Records.DestinyRecordComponent',
        ],
        'x-dictionary-key' => [
            'type' => 'integer',
            'format' => 'uint32',
        ],
    ];


}


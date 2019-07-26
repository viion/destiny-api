<?php

namespace Destiny2\Api\Objects\Destiny\Components\Records\DestinyProfileRecordsComponent;

/**
 * DestinyProfileRecordsComponent
 *
 * No description
 */
class DestinyProfileRecordsComponent
{

    const TYPE = 'object';

    public $score = [
        'type' => 'integer',
        'description' => 'Your "Triumphs" score.',
        'format' => 'int32',
    ];

    public $trackedRecordHash = [
        'type' => 'integer',
        'description' => 'If this profile is tracking a record, this is the hash identifier of the record it is tracking.',
        'format' => 'uint32',
        'nullable' => true,
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


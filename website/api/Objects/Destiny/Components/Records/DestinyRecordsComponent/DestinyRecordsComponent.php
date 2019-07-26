<?php

namespace Destiny2\Api\Objects\Destiny\Components\Records\DestinyRecordsComponent;

/**
 * DestinyRecordsComponent
 *
 * No description
 */
class DestinyRecordsComponent
{

    const TYPE = 'object';

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


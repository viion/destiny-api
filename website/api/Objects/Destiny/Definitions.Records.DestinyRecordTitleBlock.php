<?php

namespace Destiny2\Api\Objects\Destiny;

/**
 * Definitions.Records.DestinyRecordTitleBlock
 */
class Definitions.Records.DestinyRecordTitleBlock
{

    const NAME = 'Destiny.Definitions.Records.DestinyRecordTitleBlock';

    const TYPE = 'object';

    public $hasTitle = [
        'type' => 'boolean',
    ];

    public $titlesByGender = [
        'type' => 'object',
        'additionalProperties' => [
            'type' => 'string',
        ],
        'x-dictionary-key' => [
            'type' => 'integer',
            'format' => 'int32',
            'x-enum-reference' => [
                '$ref' => '#/components/schemas/Destiny.DestinyGender',
            ],
            'x-enum-is-bitmask' => false,
        ],
    ];

    public $titlesByGenderHash = [
        'type' => 'object',
        'additionalProperties' => [
            'type' => 'string',
        ],
        'description' => 'For those who prefer to use the definitions.',
        'x-mapped-definition' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.DestinyGenderDefinition',
        ],
        'x-dictionary-key' => [
            'type' => 'integer',
            'format' => 'uint32',
        ],
    ];


}


<?php

namespace Destiny2\Api\Objects\Content\Models\TagMetadataDefinition;

/**
 * TagMetadataDefinition
 *
 * No description
 */
class TagMetadataDefinition
{

    const TYPE = 'object';

    public $description = [
        'type' => 'string',
    ];

    public $order = [
        'type' => 'integer',
        'format' => 'int32',
    ];

    public $items = [
        'type' => 'array',
        'items' => [
            '$ref' => '#/components/schemas/Content.Models.TagMetadataItem',
        ],
    ];

    public $datatype = [
        'type' => 'string',
    ];

    public $name = [
        'type' => 'string',
    ];

    public $isRequired = [
        'type' => 'boolean',
    ];


}


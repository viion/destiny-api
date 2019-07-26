<?php

namespace Destiny2\Api\Objects\Content\Models\TagMetadataItem;

/**
 * TagMetadataItem
 *
 * No description
 */
class TagMetadataItem
{

    const TYPE = 'object';

    public $description = [
        'type' => 'string',
    ];

    public $tagText = [
        'type' => 'string',
    ];

    public $groups = [
        'type' => 'array',
        'items' => [
            'type' => 'string',
        ],
    ];

    public $isDefault = [
        'type' => 'boolean',
    ];

    public $name = [
        'type' => 'string',
    ];


}


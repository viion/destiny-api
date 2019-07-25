<?php

namespace Destiny2\Api\Objects\Content;

/**
 * Models.TagMetadataItem
 */
class Models.TagMetadataItem
{

    const NAME = 'Content.Models.TagMetadataItem';

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


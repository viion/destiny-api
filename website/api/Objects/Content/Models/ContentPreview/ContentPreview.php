<?php

namespace Destiny2\Api\Objects\Content\Models\ContentPreview;

/**
 * ContentPreview
 *
 * No description
 */
class ContentPreview
{

    const TYPE = 'object';

    public $name = [
        'type' => 'string',
    ];

    public $path = [
        'type' => 'string',
    ];

    public $itemInSet = [
        'type' => 'boolean',
    ];

    public $setTag = [
        'type' => 'string',
    ];

    public $setNesting = [
        'type' => 'integer',
        'format' => 'int32',
    ];

    public $useSetId = [
        'type' => 'integer',
        'format' => 'int32',
    ];


}


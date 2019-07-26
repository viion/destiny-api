<?php

namespace Destiny2\Api\Objects\Content\Models\ContentTypePropertySection;

/**
 * ContentTypePropertySection
 *
 * No description
 */
class ContentTypePropertySection
{

    const TYPE = 'object';

    public $name = [
        'type' => 'string',
    ];

    public $readableName = [
        'type' => 'string',
    ];

    public $collapsed = [
        'type' => 'boolean',
    ];


}


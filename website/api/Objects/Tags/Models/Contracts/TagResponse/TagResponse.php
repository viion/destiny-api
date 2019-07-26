<?php

namespace Destiny2\Api\Objects\Tags\Models\Contracts\TagResponse;

/**
 * TagResponse
 *
 * No description
 */
class TagResponse
{

    const TYPE = 'object';

    public $tagText = [
        'type' => 'string',
    ];

    public $ignoreStatus = [
        '$ref' => '#/components/schemas/Ignores.IgnoreResponse',
    ];


}


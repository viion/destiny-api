<?php

namespace Destiny2\Api\Objects\Tags;

/**
 * Models.Contracts.TagResponse
 */
class Models.Contracts.TagResponse
{

    const NAME = 'Tags.Models.Contracts.TagResponse';

    const TYPE = 'object';

    public $tagText = [
        'type' => 'string',
    ];

    public $ignoreStatus = [
        '$ref' => '#/components/schemas/Ignores.IgnoreResponse',
    ];


}


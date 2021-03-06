<?php

namespace Destiny2\Api\Objects\Entities\EntityActionResult;

/**
 * EntityActionResult
 *
 * No description
 */
class EntityActionResult
{

    const TYPE = 'object';

    public $entityId = [
        'type' => 'integer',
        'format' => 'int64',
    ];

    public $result = [
        'type' => 'integer',
        'format' => 'int32',
        'x-enum-reference' => [
            '$ref' => '#/components/schemas/Exceptions.PlatformErrorCodes',
        ],
        'x-enum-is-bitmask' => false,
    ];


}


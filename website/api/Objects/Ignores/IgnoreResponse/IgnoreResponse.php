<?php

namespace Destiny2\Api\Objects\Ignores\IgnoreResponse;

/**
 * IgnoreResponse
 *
 * No description
 */
class IgnoreResponse
{

    const TYPE = 'object';

    public $isIgnored = [
        'type' => 'boolean',
    ];

    public $ignoreFlags = [
        'type' => 'integer',
        'format' => 'int32',
        'x-enum-reference' => [
            '$ref' => '#/components/schemas/Ignores.IgnoreStatus',
        ],
        'x-enum-is-bitmask' => true,
    ];


}


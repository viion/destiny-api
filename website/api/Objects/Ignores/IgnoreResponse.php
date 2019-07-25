<?php

namespace Destiny2\Api\Objects\Ignores;

/**
 * IgnoreResponse
 */
class IgnoreResponse
{

    const NAME = 'Ignores.IgnoreResponse';

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


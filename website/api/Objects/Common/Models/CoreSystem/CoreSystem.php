<?php

namespace Destiny2\Api\Objects\Common\Models\CoreSystem;

/**
 * CoreSystem
 *
 * No description
 */
class CoreSystem
{

    const TYPE = 'object';

    public $enabled = [
        'type' => 'boolean',
    ];

    public $parameters = [
        'type' => 'object',
        'additionalProperties' => [
            'type' => 'string',
        ],
        'x-dictionary-key' => [
            'type' => 'string',
        ],
    ];


}


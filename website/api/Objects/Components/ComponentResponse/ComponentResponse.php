<?php

namespace Destiny2\Api\Objects\Components\ComponentResponse;

/**
 * ComponentResponse
 *
 * The base class for any component-returning object that may need to indicate
 * information about the state of the component being returned.
 */
class ComponentResponse
{

    const TYPE = 'object';

    public $privacy = [
        'type' => 'integer',
        'format' => 'int32',
        'x-enum-reference' => [
            '$ref' => '#/components/schemas/Components.ComponentPrivacySetting',
        ],
        'x-enum-is-bitmask' => false,
    ];


}


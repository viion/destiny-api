<?php

namespace Destiny2\Api\Objects\Components;

/**
 * ComponentResponse
 */
class ComponentResponse
{

    const NAME = 'Components.ComponentResponse';

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


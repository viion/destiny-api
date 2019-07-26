<?php

namespace Destiny2\Api\Objects\SingleComponentResponseOfDestinyPlugSetsComponent;

/**
 * SingleComponentResponseOfDestinyPlugSetsComponent
 *
 * No description
 */
class SingleComponentResponseOfDestinyPlugSetsComponent
{

    const TYPE = 'object';

    public $data = [
        '$ref' => '#/components/schemas/Destiny.Components.PlugSets.DestinyPlugSetsComponent',
    ];

    public $privacy = [
        'type' => 'integer',
        'format' => 'int32',
        'x-enum-reference' => [
            '$ref' => '#/components/schemas/Components.ComponentPrivacySetting',
        ],
        'x-enum-is-bitmask' => false,
    ];


}


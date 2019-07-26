<?php

namespace Destiny2\Api\Objects\SingleComponentResponseOfDestinyItemInstanceComponent;

/**
 * SingleComponentResponseOfDestinyItemInstanceComponent
 *
 * No description
 */
class SingleComponentResponseOfDestinyItemInstanceComponent
{

    const TYPE = 'object';

    public $data = [
        '$ref' => '#/components/schemas/Destiny.Entities.Items.DestinyItemInstanceComponent',
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


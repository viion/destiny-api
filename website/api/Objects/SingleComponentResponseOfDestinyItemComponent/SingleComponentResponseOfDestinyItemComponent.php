<?php

namespace Destiny2\Api\Objects\SingleComponentResponseOfDestinyItemComponent;

/**
 * SingleComponentResponseOfDestinyItemComponent
 *
 * No description
 */
class SingleComponentResponseOfDestinyItemComponent
{

    const TYPE = 'object';

    public $data = [
        '$ref' => '#/components/schemas/Destiny.Entities.Items.DestinyItemComponent',
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


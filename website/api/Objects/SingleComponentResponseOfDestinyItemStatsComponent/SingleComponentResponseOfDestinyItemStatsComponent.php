<?php

namespace Destiny2\Api\Objects\SingleComponentResponseOfDestinyItemStatsComponent;

/**
 * SingleComponentResponseOfDestinyItemStatsComponent
 *
 * No description
 */
class SingleComponentResponseOfDestinyItemStatsComponent
{

    const TYPE = 'object';

    public $data = [
        '$ref' => '#/components/schemas/Destiny.Entities.Items.DestinyItemStatsComponent',
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


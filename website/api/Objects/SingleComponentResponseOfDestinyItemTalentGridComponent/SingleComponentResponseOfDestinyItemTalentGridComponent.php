<?php

namespace Destiny2\Api\Objects\SingleComponentResponseOfDestinyItemTalentGridComponent;

/**
 * SingleComponentResponseOfDestinyItemTalentGridComponent
 *
 * No description
 */
class SingleComponentResponseOfDestinyItemTalentGridComponent
{

    const TYPE = 'object';

    public $data = [
        '$ref' => '#/components/schemas/Destiny.Entities.Items.DestinyItemTalentGridComponent',
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


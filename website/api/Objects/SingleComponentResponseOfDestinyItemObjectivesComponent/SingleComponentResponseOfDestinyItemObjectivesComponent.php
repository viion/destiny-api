<?php

namespace Destiny2\Api\Objects\SingleComponentResponseOfDestinyItemObjectivesComponent;

/**
 * SingleComponentResponseOfDestinyItemObjectivesComponent
 *
 * No description
 */
class SingleComponentResponseOfDestinyItemObjectivesComponent
{

    const TYPE = 'object';

    public $data = [
        '$ref' => '#/components/schemas/Destiny.Entities.Items.DestinyItemObjectivesComponent',
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


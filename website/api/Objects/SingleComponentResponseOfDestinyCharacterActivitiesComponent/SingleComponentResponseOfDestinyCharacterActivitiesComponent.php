<?php

namespace Destiny2\Api\Objects\SingleComponentResponseOfDestinyCharacterActivitiesComponent;

/**
 * SingleComponentResponseOfDestinyCharacterActivitiesComponent
 *
 * No description
 */
class SingleComponentResponseOfDestinyCharacterActivitiesComponent
{

    const TYPE = 'object';

    public $data = [
        '$ref' => '#/components/schemas/Destiny.Entities.Characters.DestinyCharacterActivitiesComponent',
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


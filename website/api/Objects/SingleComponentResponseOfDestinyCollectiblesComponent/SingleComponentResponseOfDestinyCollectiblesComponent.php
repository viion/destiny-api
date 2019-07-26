<?php

namespace Destiny2\Api\Objects\SingleComponentResponseOfDestinyCollectiblesComponent;

/**
 * SingleComponentResponseOfDestinyCollectiblesComponent
 *
 * No description
 */
class SingleComponentResponseOfDestinyCollectiblesComponent
{

    const TYPE = 'object';

    public $data = [
        '$ref' => '#/components/schemas/Destiny.Components.Collectibles.DestinyCollectiblesComponent',
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


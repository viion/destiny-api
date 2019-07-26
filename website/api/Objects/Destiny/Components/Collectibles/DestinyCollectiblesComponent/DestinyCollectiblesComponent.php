<?php

namespace Destiny2\Api\Objects\Destiny\Components\Collectibles\DestinyCollectiblesComponent;

/**
 * DestinyCollectiblesComponent
 *
 * No description
 */
class DestinyCollectiblesComponent
{

    const TYPE = 'object';

    public $collectibles = [
        'type' => 'object',
        'additionalProperties' => [
            '$ref' => '#/components/schemas/Destiny.Components.Collectibles.DestinyCollectibleComponent',
        ],
        'x-dictionary-key' => [
            'type' => 'integer',
            'format' => 'uint32',
        ],
    ];


}


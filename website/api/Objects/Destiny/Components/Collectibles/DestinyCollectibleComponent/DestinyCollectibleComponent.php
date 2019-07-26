<?php

namespace Destiny2\Api\Objects\Destiny\Components\Collectibles\DestinyCollectibleComponent;

/**
 * DestinyCollectibleComponent
 *
 * No description
 */
class DestinyCollectibleComponent
{

    const TYPE = 'object';

    public $state = [
        'type' => 'integer',
        'format' => 'int32',
        'x-enum-reference' => [
            '$ref' => '#/components/schemas/Destiny.DestinyCollectibleState',
        ],
        'x-enum-is-bitmask' => true,
    ];


}


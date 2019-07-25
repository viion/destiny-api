<?php

namespace Destiny2\Api\Objects\Destiny;

/**
 * Components.Collectibles.DestinyCollectibleComponent
 */
class Components.Collectibles.DestinyCollectibleComponent
{

    const NAME = 'Destiny.Components.Collectibles.DestinyCollectibleComponent';

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


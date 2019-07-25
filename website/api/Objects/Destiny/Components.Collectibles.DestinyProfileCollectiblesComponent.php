<?php

namespace Destiny2\Api\Objects\Destiny;

/**
 * Components.Collectibles.DestinyProfileCollectiblesComponent
 */
class Components.Collectibles.DestinyProfileCollectiblesComponent
{

    const NAME = 'Destiny.Components.Collectibles.DestinyProfileCollectiblesComponent';

    const TYPE = 'object';

    public $recentCollectibleHashes = [
        'type' => 'array',
        'items' => [
            'type' => 'integer',
            'format' => 'uint32',
        ],
        'description' => 'The list of collectibles determined by the game as having been "recently" acquired.',
        'x-mapped-definition' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.Collectibles.DestinyCollectibleDefinition',
        ],
    ];

    public $newnessFlaggedCollectibleHashes = [
        'type' => 'array',
        'items' => [
            'type' => 'integer',
            'format' => 'uint32',
        ],
        'description' => 'The list of collectibles determined by the game as having been "recently" acquired.
The game client itself actually controls this data, so I personally question whether anyone will get much use out of this: because we can\'t edit this value through the API. But in case anyone finds it useful, here it is.',
        'x-mapped-definition' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.Collectibles.DestinyCollectibleDefinition',
        ],
    ];

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


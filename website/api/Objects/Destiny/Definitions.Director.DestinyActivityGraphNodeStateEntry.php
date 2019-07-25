<?php

namespace Destiny2\Api\Objects\Destiny;

/**
 * Definitions.Director.DestinyActivityGraphNodeStateEntry
 */
class Definitions.Director.DestinyActivityGraphNodeStateEntry
{

    const NAME = 'Destiny.Definitions.Director.DestinyActivityGraphNodeStateEntry';

    const TYPE = 'object';

    public $state = [
        'type' => 'integer',
        'format' => 'int32',
        'x-enum-reference' => [
            '$ref' => '#/components/schemas/Destiny.DestinyGraphNodeState',
        ],
        'x-enum-is-bitmask' => false,
    ];


}


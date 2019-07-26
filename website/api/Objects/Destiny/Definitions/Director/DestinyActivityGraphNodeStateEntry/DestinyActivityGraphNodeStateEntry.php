<?php

namespace Destiny2\Api\Objects\Destiny\Definitions\Director\DestinyActivityGraphNodeStateEntry;

/**
 * DestinyActivityGraphNodeStateEntry
 *
 * Represents a single state that a graph node might end up in. Depending on what's
 * going on in the game, graph nodes could be shown in different ways or even
 * excluded from view entirely.
 */
class DestinyActivityGraphNodeStateEntry
{

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


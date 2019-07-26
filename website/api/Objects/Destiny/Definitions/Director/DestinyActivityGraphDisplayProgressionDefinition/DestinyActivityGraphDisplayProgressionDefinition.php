<?php

namespace Destiny2\Api\Objects\Destiny\Definitions\Director\DestinyActivityGraphDisplayProgressionDefinition;

/**
 * DestinyActivityGraphDisplayProgressionDefinition
 *
 * When a Graph needs to show active Progressions, this defines those objectives as
 * well as an identifier.
 */
class DestinyActivityGraphDisplayProgressionDefinition
{

    const TYPE = 'object';

    public $id = [
        'type' => 'integer',
        'format' => 'uint32',
    ];

    public $progressionHash = [
        'type' => 'integer',
        'format' => 'uint32',
    ];


}


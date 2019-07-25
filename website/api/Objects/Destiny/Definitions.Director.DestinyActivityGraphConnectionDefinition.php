<?php

namespace Destiny2\Api\Objects\Destiny;

/**
 * Definitions.Director.DestinyActivityGraphConnectionDefinition
 */
class Definitions.Director.DestinyActivityGraphConnectionDefinition
{

    const NAME = 'Destiny.Definitions.Director.DestinyActivityGraphConnectionDefinition';

    const TYPE = 'object';

    public $sourceNodeHash = [
        'type' => 'integer',
        'format' => 'uint32',
    ];

    public $destNodeHash = [
        'type' => 'integer',
        'format' => 'uint32',
    ];


}


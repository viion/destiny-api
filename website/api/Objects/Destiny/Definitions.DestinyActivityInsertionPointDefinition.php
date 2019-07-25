<?php

namespace Destiny2\Api\Objects\Destiny;

/**
 * Definitions.DestinyActivityInsertionPointDefinition
 */
class Definitions.DestinyActivityInsertionPointDefinition
{

    const NAME = 'Destiny.Definitions.DestinyActivityInsertionPointDefinition';

    const TYPE = 'object';

    public $phaseHash = [
        'type' => 'integer',
        'description' => 'A unique hash value representing the phase. This can be useful for, for example, comparing how different instances of Raids have phases in different orders!',
        'format' => 'uint32',
    ];


}


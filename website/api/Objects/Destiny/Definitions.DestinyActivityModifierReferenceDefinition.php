<?php

namespace Destiny2\Api\Objects\Destiny;

/**
 * Definitions.DestinyActivityModifierReferenceDefinition
 */
class Definitions.DestinyActivityModifierReferenceDefinition
{

    const NAME = 'Destiny.Definitions.DestinyActivityModifierReferenceDefinition';

    const TYPE = 'object';

    public $activityModifierHash = [
        'type' => 'integer',
        'description' => 'The hash identifier for the DestinyActivityModifierDefinition referenced by this activity.',
        'format' => 'uint32',
        'x-mapped-definition' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.ActivityModifiers.DestinyActivityModifierDefinition',
        ],
    ];


}


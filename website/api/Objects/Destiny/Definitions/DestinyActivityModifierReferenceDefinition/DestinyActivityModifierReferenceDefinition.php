<?php

namespace Destiny2\Api\Objects\Destiny\Definitions\DestinyActivityModifierReferenceDefinition;

/**
 * DestinyActivityModifierReferenceDefinition
 *
 * A reference to an Activity Modifier from another entity, such as an Activity
 * (for now, just Activities).
 * This defines some
 */
class DestinyActivityModifierReferenceDefinition
{

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


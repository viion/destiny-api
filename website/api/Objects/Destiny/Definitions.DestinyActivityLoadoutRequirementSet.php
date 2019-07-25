<?php

namespace Destiny2\Api\Objects\Destiny;

/**
 * Definitions.DestinyActivityLoadoutRequirementSet
 */
class Definitions.DestinyActivityLoadoutRequirementSet
{

    const NAME = 'Destiny.Definitions.DestinyActivityLoadoutRequirementSet';

    const TYPE = 'object';

    public $requirements = [
        'type' => 'array',
        'items' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.DestinyActivityLoadoutRequirement',
        ],
        'description' => 'The set of requirements that will be applied on the activity if this requirement set is active.',
    ];


}


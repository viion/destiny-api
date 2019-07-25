<?php

namespace Destiny2\Api\Objects\Destiny;

/**
 * Definitions.DestinyProgressionRewardDefinition
 */
class Definitions.DestinyProgressionRewardDefinition
{

    const NAME = 'Destiny.Definitions.DestinyProgressionRewardDefinition';

    const TYPE = 'object';

    public $progressionMappingHash = [
        'type' => 'integer',
        'description' => 'The hash identifier of the DestinyProgressionMappingDefinition that contains the progressions for which experience should be applied.',
        'format' => 'uint32',
        'x-mapped-definition' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.DestinyProgressionMappingDefinition',
        ],
    ];

    public $amount = [
        'type' => 'integer',
        'description' => 'The amount of experience to give to each of the mapped progressions.',
        'format' => 'int32',
    ];

    public $applyThrottles = [
        'type' => 'boolean',
        'description' => 'If true, the game\'s internal mechanisms to throttle progression should be applied.',
    ];


}


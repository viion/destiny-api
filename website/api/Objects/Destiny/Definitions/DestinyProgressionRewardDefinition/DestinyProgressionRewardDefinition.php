<?php

namespace Destiny2\Api\Objects\Destiny\Definitions\DestinyProgressionRewardDefinition;

/**
 * DestinyProgressionRewardDefinition
 *
 * Inventory Items can reward progression when actions are performed on them. A
 * common example of this in Destiny 1 was Bounties, which would reward Experience
 * on your Character and the like when you completed the bounty.
 * Note that this maps to a DestinyProgressionMappingDefinition, and *not* a
 * DestinyProgressionDefinition directly. This is apparently so that multiple
 * progressions can be granted progression points/experience at the same time.
 */
class DestinyProgressionRewardDefinition
{

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


<?php

namespace Destiny2\Api\Objects\Destiny\Definitions\Progression\DestinyProgressionLevelRequirementDefinition;

/**
 * DestinyProgressionLevelRequirementDefinition
 *
 * These are pre-constructed collections of data that can be used to determine the
 * Level Requirement for an item given a Progression to be tested (such as the
 * Character's level).
 * For instance, say a character receives a new Auto Rifle, and that Auto Rifle's
 * DestinyInventoryItemDefinition.quality.progressionLevelRequirementHash property
 * is pointing at one of these DestinyProgressionLevelRequirementDefinitions. Let's
 * pretend also that the progressionHash it is pointing at is the Character Level
 * progression. In that situation, the character's level will be used to
 * interpolate a value in the requirementCurve property. The value picked up from
 * that interpolation will be the required level for the item.
 */
class DestinyProgressionLevelRequirementDefinition
{

    const TYPE = 'object';

    public $requirementCurve = [
        'type' => 'array',
        'items' => [
            '$ref' => '#/components/schemas/Interpolation.InterpolationPointFloat',
        ],
        'description' => 'A curve of level requirements, weighted by the related progressions\' level.
Interpolate against this curve with the character\'s progression level to determine what the level requirement of the generated item that is using this data will be.',
    ];

    public $progressionHash = [
        'type' => 'integer',
        'description' => 'The progression whose level should be used to determine the level requirement.
Look up the DestinyProgressionDefinition with this hash for more information about the progression in question.',
        'format' => 'uint32',
        'x-mapped-definition' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.DestinyProgressionDefinition',
        ],
    ];

    public $hash = [
        'type' => 'integer',
        'description' => 'The unique identifier for this entity. Guaranteed to be unique for the type of entity, but not globally.
When entities refer to each other in Destiny content, it is this hash that they are referring to.',
        'format' => 'uint32',
    ];

    public $index = [
        'type' => 'integer',
        'description' => 'The index of the entity as it was found in the investment tables.',
        'format' => 'int32',
    ];

    public $redacted = [
        'type' => 'boolean',
        'description' => 'If this is true, then there is an entity with this identifier/type combination, but BNet is not yet allowed to show it. Sorry!',
    ];


}


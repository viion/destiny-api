<?php

namespace Destiny2\Api\Objects\Destiny\Definitions\DestinyActivityTypeDefinition;

/**
 * DestinyActivityTypeDefinition
 *
 * The definition for an Activity Type.
 * In Destiny 2, an Activity Type represents a conceptual categorization of
 * Activities.
 * These are most commonly used in the game for the subtitle under Activities, but
 * BNet uses them extensively to identify and group activities by their common
 * properties.
 * Unfortunately, there has been a movement away from providing the richer data in
 * Destiny 2 that we used to get in Destiny 1 for Activity Types. For instance,
 * Nightfalls are grouped under the same Activity Type as regular Strikes. 
 * For this reason, BNet will eventually migrate toward Activity Modes as a better
 * indicator of activity category. But for the time being, it is still referred to
 * in many places across our codebase.
 */
class DestinyActivityTypeDefinition
{

    const TYPE = 'object';

    public $displayProperties = [
        '$ref' => '#/components/schemas/Destiny.Definitions.Common.DestinyDisplayPropertiesDefinition',
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


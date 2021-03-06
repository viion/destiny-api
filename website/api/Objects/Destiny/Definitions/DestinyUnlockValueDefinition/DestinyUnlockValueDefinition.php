<?php

namespace Destiny2\Api\Objects\Destiny\Definitions\DestinyUnlockValueDefinition;

/**
 * DestinyUnlockValueDefinition
 *
 * An Unlock Value is an internal integer value, stored on the server and used in a
 * variety of ways, most frequently for the gating/requirement checks that the game
 * performs across all of its main features. They can also be used as the storage
 * data for mapped Progressions, Objectives, and other features that require
 * storage of variable numeric values.
 */
class DestinyUnlockValueDefinition
{

    const TYPE = 'object';

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


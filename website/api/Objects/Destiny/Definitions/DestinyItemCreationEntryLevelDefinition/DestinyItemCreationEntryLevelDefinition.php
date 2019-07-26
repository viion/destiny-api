<?php

namespace Destiny2\Api\Objects\Destiny\Definitions\DestinyItemCreationEntryLevelDefinition;

/**
 * DestinyItemCreationEntryLevelDefinition
 *
 * An overly complicated wrapper for the item level at which the item should spawn.
 */
class DestinyItemCreationEntryLevelDefinition
{

    const TYPE = 'object';

    public $level = [
        'type' => 'integer',
        'format' => 'int32',
    ];


}


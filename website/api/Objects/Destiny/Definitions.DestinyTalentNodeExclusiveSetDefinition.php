<?php

namespace Destiny2\Api\Objects\Destiny;

/**
 * Definitions.DestinyTalentNodeExclusiveSetDefinition
 */
class Definitions.DestinyTalentNodeExclusiveSetDefinition
{

    const NAME = 'Destiny.Definitions.DestinyTalentNodeExclusiveSetDefinition';

    const TYPE = 'object';

    public $nodeIndexes = [
        'type' => 'array',
        'items' => [
            'type' => 'integer',
            'format' => 'int32',
        ],
        'description' => 'The list of node indexes for the exclusive set. Historically, these were indexes. I would have liked to replace this with nodeHashes for consistency, but it\'s way too late for that. (9:09 PM, he\'s right!)',
    ];


}


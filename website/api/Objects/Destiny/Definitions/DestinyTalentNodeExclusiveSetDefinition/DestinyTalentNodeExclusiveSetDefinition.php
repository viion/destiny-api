<?php

namespace Destiny2\Api\Objects\Destiny\Definitions\DestinyTalentNodeExclusiveSetDefinition;

/**
 * DestinyTalentNodeExclusiveSetDefinition
 *
 * The list of indexes into the Talent Grid's "nodes" property for nodes in this
 * exclusive set. (See DestinyTalentNodeDefinition.nodeIndex)
 */
class DestinyTalentNodeExclusiveSetDefinition
{

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


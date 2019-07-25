<?php

namespace Destiny2\Api\Objects\Destiny;

/**
 * Definitions.DestinyTalentExclusiveGroup
 */
class Definitions.DestinyTalentExclusiveGroup
{

    const NAME = 'Destiny.Definitions.DestinyTalentExclusiveGroup';

    const TYPE = 'object';

    public $groupHash = [
        'type' => 'integer',
        'description' => 'The identifier for this exclusive group. Only guaranteed unique within the talent grid, not globally.',
        'format' => 'uint32',
    ];

    public $loreHash = [
        'type' => 'integer',
        'description' => 'If this group has an associated piece of lore to show next to it, this will be the identifier for that DestinyLoreDefinition.',
        'format' => 'uint32',
        'nullable' => true,
        'x-mapped-definition' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.Lore.DestinyLoreDefinition',
        ],
    ];

    public $nodeHashes = [
        'type' => 'array',
        'items' => [
            'type' => 'integer',
            'format' => 'uint32',
        ],
        'description' => 'A quick reference of the talent nodes that are part of this group, by their Talent Node hashes. (See DestinyTalentNodeDefinition.nodeHash)',
    ];

    public $opposingGroupHashes = [
        'type' => 'array',
        'items' => [
            'type' => 'integer',
            'format' => 'uint32',
        ],
        'description' => 'A quick reference of Groups whose nodes will be deactivated if any node in this group is activated.',
    ];

    public $opposingNodeHashes = [
        'type' => 'array',
        'items' => [
            'type' => 'integer',
            'format' => 'uint32',
        ],
        'description' => 'A quick reference of Nodes that will be deactivated if any node in this group is activated, by their Talent Node hashes. (See DestinyTalentNodeDefinition.nodeHash)',
    ];


}


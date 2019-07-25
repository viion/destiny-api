<?php

namespace Destiny2\Api\Objects\Destiny;

/**
 * Components.PlugSets.DestinyPlugSetsComponent
 */
class Components.PlugSets.DestinyPlugSetsComponent
{

    const NAME = 'Destiny.Components.PlugSets.DestinyPlugSetsComponent';

    const TYPE = 'object';

    public $plugs = [
        'type' => 'object',
        'additionalProperties' => [
            'type' => 'array',
            'items' => [
                '$ref' => '#/components/schemas/Destiny.Sockets.DestinyItemPlug',
            ],
        ],
        'description' => 'The shared list of plugs for each relevant PlugSet, keyed by the hash identifier of the PlugSet (DestinyPlugSetDefinition).',
        'x-mapped-definition' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.Sockets.DestinyPlugSetDefinition',
        ],
        'x-dictionary-key' => [
            'type' => 'integer',
            'format' => 'uint32',
        ],
    ];


}


<?php

namespace Destiny2\Api\Objects\Destiny\Definitions\Director\DestinyActivityGraphConnectionDefinition;

/**
 * DestinyActivityGraphConnectionDefinition
 *
 * Nodes on a graph can be visually connected: this appears to be the information
 * about which nodes to link. It appears to lack more detailed information, such as
 * the path for that linking.
 */
class DestinyActivityGraphConnectionDefinition
{

    const TYPE = 'object';

    public $sourceNodeHash = [
        'type' => 'integer',
        'format' => 'uint32',
    ];

    public $destNodeHash = [
        'type' => 'integer',
        'format' => 'uint32',
    ];


}


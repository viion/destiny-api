<?php

namespace Destiny2\Api\Objects\Destiny\Definitions\Director\DestinyLinkedGraphDefinition;

/**
 * DestinyLinkedGraphDefinition
 *
 * This describes links between the current graph and others, as well as when that
 * link is relevant.
 */
class DestinyLinkedGraphDefinition
{

    const TYPE = 'object';

    public $description = [
        'type' => 'string',
    ];

    public $name = [
        'type' => 'string',
    ];

    public $unlockExpression = [
        '$ref' => '#/components/schemas/Destiny.Definitions.DestinyUnlockExpressionDefinition',
    ];

    public $linkedGraphId = [
        'type' => 'integer',
        'format' => 'uint32',
    ];

    public $linkedGraphs = [
        'type' => 'array',
        'items' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.Director.DestinyLinkedGraphEntryDefinition',
        ],
    ];

    public $overview = [
        'type' => 'string',
    ];


}


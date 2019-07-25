<?php

namespace Destiny2\Api\Objects\Destiny;

/**
 * Definitions.Director.DestinyLinkedGraphDefinition
 */
class Definitions.Director.DestinyLinkedGraphDefinition
{

    const NAME = 'Destiny.Definitions.Director.DestinyLinkedGraphDefinition';

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


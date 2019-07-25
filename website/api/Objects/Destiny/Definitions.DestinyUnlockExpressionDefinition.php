<?php

namespace Destiny2\Api\Objects\Destiny;

/**
 * Definitions.DestinyUnlockExpressionDefinition
 */
class Definitions.DestinyUnlockExpressionDefinition
{

    const NAME = 'Destiny.Definitions.DestinyUnlockExpressionDefinition';

    const TYPE = 'object';

    public $scope = [
        'type' => 'integer',
        'description' => 'A shortcut for determining the most restrictive gating that this expression performs. See the DestinyGatingScope enum\'s documentation for more details.',
        'format' => 'int32',
        'x-enum-reference' => [
            '$ref' => '#/components/schemas/Destiny.DestinyGatingScope',
        ],
        'x-enum-is-bitmask' => false,
    ];


}


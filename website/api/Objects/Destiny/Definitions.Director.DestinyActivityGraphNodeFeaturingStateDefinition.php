<?php

namespace Destiny2\Api\Objects\Destiny;

/**
 * Definitions.Director.DestinyActivityGraphNodeFeaturingStateDefinition
 */
class Definitions.Director.DestinyActivityGraphNodeFeaturingStateDefinition
{

    const NAME = 'Destiny.Definitions.Director.DestinyActivityGraphNodeFeaturingStateDefinition';

    const TYPE = 'object';

    public $highlightType = [
        'type' => 'integer',
        'description' => 'The node can be highlighted in a variety of ways - the game iterates through these and finds the first FeaturingState that is valid at the present moment given the Game, Account, and Character state, and renders the node in that state. See the ActivityGraphNodeHighlightType enum for possible values.',
        'format' => 'int32',
        'x-enum-reference' => [
            '$ref' => '#/components/schemas/Destiny.ActivityGraphNodeHighlightType',
        ],
        'x-enum-is-bitmask' => false,
    ];


}


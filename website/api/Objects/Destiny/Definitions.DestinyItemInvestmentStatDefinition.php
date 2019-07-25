<?php

namespace Destiny2\Api\Objects\Destiny;

/**
 * Definitions.DestinyItemInvestmentStatDefinition
 */
class Definitions.DestinyItemInvestmentStatDefinition
{

    const NAME = 'Destiny.Definitions.DestinyItemInvestmentStatDefinition';

    const TYPE = 'object';

    public $statTypeHash = [
        'type' => 'integer',
        'description' => 'The hash identifier for the DestinyStatDefinition defining this stat.',
        'format' => 'uint32',
        'x-mapped-definition' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.DestinyStatDefinition',
        ],
    ];

    public $value = [
        'type' => 'integer',
        'description' => 'The raw "Investment" value for the stat, before transformations are performed to turn this raw stat into stats that are displayed in the game UI.',
        'format' => 'int32',
    ];

    public $isConditionallyActive = [
        'type' => 'boolean',
        'description' => 'If this is true, the stat will only be applied on the item in certain game state conditions, and we can\'t know statically whether or not this stat will be applied. Check the "live" API data instead for whether this value is being applied on a specific instance of the item in question, and you can use this to decide whether you want to show the stat on the generic view of the item, or whether you want to show some kind of caveat or warning about the stat value being conditional on game state.',
    ];


}


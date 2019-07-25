<?php

namespace Destiny2\Api\Objects\Destiny;

/**
 * Definitions.DestinyProgressionStepDefinition
 */
class Definitions.DestinyProgressionStepDefinition
{

    const NAME = 'Destiny.Definitions.DestinyProgressionStepDefinition';

    const TYPE = 'object';

    public $stepName = [
        'type' => 'string',
        'description' => 'Very rarely, Progressions will have localized text describing the Level of the progression. This will be that localized text, if it exists. Otherwise, the standard appears to be to simply show the level numerically.',
    ];

    public $displayEffectType = [
        'type' => 'integer',
        'description' => 'This appears to be, when you "level up", whether a visual effect will display and on what entity. See DestinyProgressionStepDisplayEffect for slightly more info.',
        'format' => 'int32',
        'x-enum-reference' => [
            '$ref' => '#/components/schemas/Destiny.DestinyProgressionStepDisplayEffect',
        ],
        'x-enum-is-bitmask' => false,
    ];

    public $progressTotal = [
        'type' => 'integer',
        'description' => 'The total amount of progression points/"experience" you will need to initially reach this step. If this is the last step and the progression is repeating indefinitely (DestinyProgressionDefinition.repeatLastStep), this will also be the progress needed to level it up further by repeating this step again.',
        'format' => 'int32',
    ];

    public $rewardItems = [
        'type' => 'array',
        'items' => [
            '$ref' => '#/components/schemas/Destiny.DestinyItemQuantity',
        ],
        'description' => 'A listing of items rewarded as a result of reaching this level.',
    ];

    public $icon = [
        'type' => 'string',
        'description' => 'If this progression step has a specific icon related to it, this is the icon to show.',
    ];


}


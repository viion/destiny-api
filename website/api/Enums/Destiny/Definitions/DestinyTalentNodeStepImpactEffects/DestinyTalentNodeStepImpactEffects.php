<?php

namespace Destiny2\Api\Enums\Destiny\Definitions\DestinyTalentNodeStepImpactEffects;

/**
 * DestinyTalentNodeStepImpactEffects
 *
 * No description
 */
class DestinyTalentNodeStepImpactEffects
{

    const TYPE = 'integer';

    const TYPE_FORMAT = 'int32';

    const ENUMS_ALLOWED = [
        '0',
        '1',
        '2',
        '4',
        '8',
        '16',
        '32',
        '63',
    ];

    const ENUMS = [
        'None' => '0',
        'ArmorPiercing' => '1',
        'Ricochet' => '2',
        'Flinch' => '4',
        'CollateralDamage' => '8',
        'Disorient' => '16',
        'HighlightTarget' => '32',
        'All' => '63',
    ];


}


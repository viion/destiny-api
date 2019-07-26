<?php

namespace Destiny2\Api\Enums\Destiny\Definitions\DestinyTalentNodeStepLightAbilities;

/**
 * DestinyTalentNodeStepLightAbilities
 *
 * No description
 */
class DestinyTalentNodeStepLightAbilities
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
        'Grenades' => '1',
        'Melee' => '2',
        'MovementModes' => '4',
        'Orbs' => '8',
        'SuperEnergy' => '16',
        'SuperMods' => '32',
        'All' => '63',
    ];


}


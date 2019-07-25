<?php

namespace Destiny2\Api\Objects\Destiny;

/**
 * Definitions.DestinyTalentNodeStepGroups
 */
class Definitions.DestinyTalentNodeStepGroups
{

    const NAME = 'Destiny.Definitions.DestinyTalentNodeStepGroups';

    const TYPE = 'object';

    public $weaponPerformance = [
        'type' => 'integer',
        'format' => 'int32',
        'x-enum-reference' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.DestinyTalentNodeStepWeaponPerformances',
        ],
        'x-enum-is-bitmask' => true,
    ];

    public $impactEffects = [
        'type' => 'integer',
        'format' => 'int32',
        'x-enum-reference' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.DestinyTalentNodeStepImpactEffects',
        ],
        'x-enum-is-bitmask' => true,
    ];

    public $guardianAttributes = [
        'type' => 'integer',
        'format' => 'int32',
        'x-enum-reference' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.DestinyTalentNodeStepGuardianAttributes',
        ],
        'x-enum-is-bitmask' => true,
    ];

    public $lightAbilities = [
        'type' => 'integer',
        'format' => 'int32',
        'x-enum-reference' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.DestinyTalentNodeStepLightAbilities',
        ],
        'x-enum-is-bitmask' => true,
    ];

    public $damageTypes = [
        'type' => 'integer',
        'format' => 'int32',
        'x-enum-reference' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.DestinyTalentNodeStepDamageTypes',
        ],
        'x-enum-is-bitmask' => true,
    ];


}


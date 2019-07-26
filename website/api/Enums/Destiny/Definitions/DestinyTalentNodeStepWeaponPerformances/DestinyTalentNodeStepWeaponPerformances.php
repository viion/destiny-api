<?php

namespace Destiny2\Api\Enums\Destiny\Definitions\DestinyTalentNodeStepWeaponPerformances;

/**
 * DestinyTalentNodeStepWeaponPerformances
 *
 * No description
 */
class DestinyTalentNodeStepWeaponPerformances
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
        '64',
        '128',
        '256',
        '512',
        '1024',
        '2048',
        '4096',
        '8191',
    ];

    const ENUMS = [
        'None' => '0',
        'RateOfFire' => '1',
        'Damage' => '2',
        'Accuracy' => '4',
        'Range' => '8',
        'Zoom' => '16',
        'Recoil' => '32',
        'Ready' => '64',
        'Reload' => '128',
        'HairTrigger' => '256',
        'AmmoAndMagazine' => '512',
        'TrackingAndDetonation' => '1024',
        'ShotgunSpread' => '2048',
        'ChargeTime' => '4096',
        'All' => '8191',
    ];


}


<?php

namespace Destiny2\Api\Enums\Destiny\Definitions\DestinyTalentNodeStepGuardianAttributes;

/**
 * DestinyTalentNodeStepGuardianAttributes
 *
 * No description
 */
class DestinyTalentNodeStepGuardianAttributes
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
        '255',
    ];

    const ENUMS = [
        'None' => '0',
        'Stats' => '1',
        'Shields' => '2',
        'Health' => '4',
        'Revive' => '8',
        'AimUnderFire' => '16',
        'Radar' => '32',
        'Invisibility' => '64',
        'Reputations' => '128',
        'All' => '255',
    ];


}


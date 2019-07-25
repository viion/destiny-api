<?php

namespace Destiny2\Api\Enums\Destiny;

/**
 * DestinyTalentNodeState
 */
class DestinyTalentNodeState
{

    const NAME = 'Destiny.DestinyTalentNodeState';

    const TYPE = 'integer';

    const TYPE_FORMAT = 'int32';

    const ENUMS_ALLOWED = [
        '0',
        '1',
        '2',
        '3',
        '4',
        '5',
        '6',
        '7',
        '8',
        '9',
        '10',
        '11',
        '12',
        '13',
    ];

    const ENUMS = [
        'Invalid' => '0',
        'CanUpgrade' => '1',
        'NoPoints' => '2',
        'NoPrerequisites' => '3',
        'NoSteps' => '4',
        'NoUnlock' => '5',
        'NoMaterial' => '6',
        'NoGridLevel' => '7',
        'SwappingLocked' => '8',
        'MustSwap' => '9',
        'Complete' => '10',
        'Unknown' => '11',
        'CreationOnly' => '12',
        'Hidden' => '13',
    ];


}


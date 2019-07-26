<?php

namespace Destiny2\Api\Enums\Destiny\Definitions\DestinyTalentNodeStepDamageTypes;

/**
 * DestinyTalentNodeStepDamageTypes
 *
 * No description
 */
class DestinyTalentNodeStepDamageTypes
{

    const TYPE = 'integer';

    const TYPE_FORMAT = 'int32';

    const ENUMS_ALLOWED = [
        '0',
        '1',
        '2',
        '4',
        '8',
        '15',
    ];

    const ENUMS = [
        'None' => '0',
        'Kinetic' => '1',
        'Arc' => '2',
        'Solar' => '4',
        'Void' => '8',
        'All' => '15',
    ];


}


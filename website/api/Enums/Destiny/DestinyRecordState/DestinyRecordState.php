<?php

namespace Destiny2\Api\Enums\Destiny\DestinyRecordState;

/**
 * DestinyRecordState
 *
 * A Flags enumeration/bitmask where each bit represents a possible state that a
 * Record/Triumph can be in.
 */
class DestinyRecordState
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
    ];

    const ENUMS = [
        'None' => '0',
        'RecordRedeemed' => '1',
        'RewardUnavailable' => '2',
        'ObjectiveNotCompleted' => '4',
        'Obscured' => '8',
        'Invisible' => '16',
        'EntitlementUnowned' => '32',
        'CanEquipTitle' => '64',
    ];


}


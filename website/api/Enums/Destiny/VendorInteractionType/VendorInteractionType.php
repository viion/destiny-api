<?php

namespace Destiny2\Api\Enums\Destiny\VendorInteractionType;

/**
 * VendorInteractionType
 *
 * An enumeration of the known UI interactions for Vendors.
 */
class VendorInteractionType
{

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
    ];

    const ENUMS = [
        'Unknown' => '0',
        'Undefined' => '1',
        'QuestComplete' => '2',
        'QuestContinue' => '3',
        'ReputationPreview' => '4',
        'RankUpReward' => '5',
        'TokenTurnIn' => '6',
        'QuestAccept' => '7',
        'ProgressTab' => '8',
        'End' => '9',
        'Start' => '10',
    ];


}


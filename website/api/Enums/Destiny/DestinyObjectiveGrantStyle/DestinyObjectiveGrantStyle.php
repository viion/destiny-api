<?php

namespace Destiny2\Api\Enums\Destiny\DestinyObjectiveGrantStyle;

/**
 * DestinyObjectiveGrantStyle
 *
 * Some Objectives provide perks, generally as part of providing some kind of
 * interesting modifier for a Challenge or Quest. This indicates when the Perk is
 * granted.
 */
class DestinyObjectiveGrantStyle
{

    const TYPE = 'integer';

    const TYPE_FORMAT = 'int32';

    const ENUMS_ALLOWED = [
        '0',
        '1',
        '2',
    ];

    const ENUMS = [
        'WhenIncomplete' => '0',
        'WhenComplete' => '1',
        'Always' => '2',
    ];


}


<?php

namespace Destiny2\Api\Enums\Destiny\DestinyPresentationNodeState;

/**
 * DestinyPresentationNodeState
 *
 * I know this doesn't look like a Flags Enumeration/bitmask right now, but I
 * assure you it is. This is the possible states that a Presentation Node can be
 * in, and it is almost certain that its potential states will increase in the
 * future. So don't treat it like a straight up enumeration.
 */
class DestinyPresentationNodeState
{

    const TYPE = 'integer';

    const TYPE_FORMAT = 'int32';

    const ENUMS_ALLOWED = [
        '0',
        '1',
        '2',
    ];

    const ENUMS = [
        'None' => '0',
        'Invisible' => '1',
        'Obscured' => '2',
    ];


}


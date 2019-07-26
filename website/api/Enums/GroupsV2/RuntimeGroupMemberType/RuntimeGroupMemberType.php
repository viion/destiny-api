<?php

namespace Destiny2\Api\Enums\GroupsV2\RuntimeGroupMemberType;

/**
 * RuntimeGroupMemberType
 *
 * The member levels used by all V2 Groups API. Individual group types use their
 * own mappings in their native storage (general uses BnetDbGroupMemberType and D2
 * clans use ClanMemberLevel), but they are all translated to this in the runtime
 * api. These runtime values should NEVER be stored anywhere, so the values can be
 * changed as necessary.
 */
class RuntimeGroupMemberType
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
    ];

    const ENUMS = [
        'None' => '0',
        'Beginner' => '1',
        'Member' => '2',
        'Admin' => '3',
        'ActingFounder' => '4',
        'Founder' => '5',
    ];


}


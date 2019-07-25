<?php

namespace Destiny2\Api\Enums\GroupsV2;

/**
 * GroupPotentialMemberStatus
 */
class GroupPotentialMemberStatus
{

    const NAME = 'GroupsV2.GroupPotentialMemberStatus';

    const TYPE = 'integer';

    const TYPE_FORMAT = 'int32';

    const ENUMS_ALLOWED = [
        '0',
        '1',
        '2',
    ];

    const ENUMS = [
        'None' => '0',
        'Applicant' => '1',
        'Invitee' => '2',
    ];


}


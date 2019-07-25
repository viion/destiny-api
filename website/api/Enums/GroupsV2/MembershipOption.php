<?php

namespace Destiny2\Api\Enums\GroupsV2;

/**
 * MembershipOption
 */
class MembershipOption
{

    const NAME = 'GroupsV2.MembershipOption';

    const TYPE = 'integer';

    const TYPE_FORMAT = 'int32';

    const ENUMS_ALLOWED = [
        '0',
        '1',
        '2',
    ];

    const ENUMS = [
        'Reviewed' => '0',
        'Open' => '1',
        'Closed' => '2',
    ];


}


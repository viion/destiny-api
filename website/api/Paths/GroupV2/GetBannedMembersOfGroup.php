<?php

namespace Destiny2\Api\Paths\GroupV2;

/**
 * GetBannedMembersOfGroup
 *
 * Get the list of banned members in a given group. Only accessible to group Admins
 * and above. Not applicable to all groups. Check group features.
 */
class GetBannedMembersOfGroup
{

    const NAME = 'GroupV2.GetBannedMembersOfGroup';

    const URI = '/GroupV2/{groupId}/Banned/';

    const METHOD = 'GET';

    const TAGS = [
        'GroupV2',
    ];

    const OPERATION_ID = 'GroupV2.GetBannedMembersOfGroup';

    const IS_DEPRECATED = false;

    const IS_PREVIEW = false;

    const RESPONSE = [
        200 => '#/components/responses/SearchResultOfGroupBan',
    ];

    public static function build($parameters)
    {
        $test = 1;
        return $test;
    }


}


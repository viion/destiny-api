<?php

namespace Destiny2\Api\Paths\GroupV2\GetMembersOfGroup;

/**
 * GetMembersOfGroup
 *
 * Get the list of members in a given group.
 */
class GetMembersOfGroup
{

    const SUMMARY = 'GroupV2.GetMembersOfGroup';

    const URI = '/GroupV2/{groupId}/Members/';

    const METHOD = 'GET';

    const TAGS = [
        'GroupV2',
    ];

    const OPERATION_ID = 'GroupV2.GetMembersOfGroup';

    const IS_DEPRECATED = false;

    const IS_PREVIEW = false;

    const RESPONSE = [
        200 => '#/components/responses/SearchResultOfGroupMember',
    ];

    public static function build($parameters)
    {
        $test = 1;
        return $test;
    }


}


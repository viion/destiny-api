<?php

namespace Destiny2\Api\Paths\GroupV2\GetInvitedIndividuals;

/**
 * GetInvitedIndividuals
 *
 * Get the list of users who have been invited into the group.
 */
class GetInvitedIndividuals
{

    const SUMMARY = 'GroupV2.GetInvitedIndividuals';

    const URI = '/GroupV2/{groupId}/Members/InvitedIndividuals/';

    const METHOD = 'GET';

    const TAGS = [
        'GroupV2',
    ];

    const OPERATION_ID = 'GroupV2.GetInvitedIndividuals';

    const IS_DEPRECATED = false;

    const IS_PREVIEW = false;

    const RESPONSE = [
        200 => '#/components/responses/SearchResultOfGroupMemberApplication',
    ];

    public static function build($parameters)
    {
        $test = 1;
        return $test;
    }


}


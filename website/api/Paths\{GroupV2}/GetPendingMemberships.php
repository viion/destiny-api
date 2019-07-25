<?php

namespace Destiny2\Api\Paths\{GroupV2};

/**
 * Get the list of users who are awaiting a decision on their application to
 * join a given group. Modified to include application info.
 */
class GetPendingMemberships
{
    const NAME           = 'GroupV2.GetPendingMemberships';
    const URI            = '/GroupV2/{groupId}/Members/Pending/';
    const METHOD         = 'GET';
    const TAGS           = 'GroupV2';
    const OPERATION_ID   = 'GroupV2.GetPendingMemberships';

    const IS_PREVIEW     = false;
    const IS_DEPRECATED  = false;

    const PARAMETERS = [
        
    ];

    const RESPONSE = [
        200 => '#/components/responses/SearchResultOfGroupMemberApplication'
    ];

    public static function build()
    {

    }
}

<?php

namespace Destiny2\Api\Paths\{GroupV2};

/**
 * Get information about the groups that a given member has joined.
 */
class GetGroupsForMember
{
    const NAME           = 'GroupV2.GetGroupsForMember';
    const URI            = '/GroupV2/User/{membershipType}/{membershipId}/{filter}/{groupType}/';
    const METHOD         = 'GET';
    const TAGS           = 'GroupV2';
    const OPERATION_ID   = 'GroupV2.GetGroupsForMember';

    const IS_PREVIEW     = false;
    const IS_DEPRECATED  = false;

    const PARAMETERS = [
        
    ];

    const RESPONSE = [
        200 => '#/components/responses/GroupsV2.GroupMembershipSearchResponse'
    ];

    public static function build()
    {

    }
}

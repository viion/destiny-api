<?php

namespace Destiny2\Api\GroupV2;

/**
 * Allows a founder to manually recover a group they can see in game but not
 * on bungie.net
 */
class RecoverGroupForFounder
{
    const NAME           = 'GroupV2.RecoverGroupForFounder';
    const URI            = '/GroupV2/Recover/{membershipType}/{membershipId}/{groupType}/';
    const METHOD         = 'GET';
    const TAGS           = 'GroupV2';
    const OPERATION_ID   = 'GroupV2.RecoverGroupForFounder';

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

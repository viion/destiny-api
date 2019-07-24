<?php

namespace Destiny2\Api\GroupV2;

/**
 * Unbans the requested member, allowing them to re-apply for membership.
 */
class UnbanMember
{
    const NAME           = 'GroupV2.UnbanMember';
    const URI            = '/GroupV2/{groupId}/Members/{membershipType}/{membershipId}/Unban/';
    const METHOD         = 'POST';
    const TAGS           = '{tags}';
    const OPERATION_ID   = '{operationId}';

    const IS_PREVIEW     = {is_preview};
    const IS_DEPRECATED  = {is_deprecated};

    const PARAMETERS = [
        
    ];

    const RESPONSE = [
        
    ];

    public static function build()
    {

    }
}

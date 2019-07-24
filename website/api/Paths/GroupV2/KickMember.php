<?php

namespace Destiny2\Api\GroupV2;

/**
 * Kick a member from the given group, forcing them to reapply if they wish to
 * re-join the group. You must have suitable permissions in the group to
 * perform this operation.
 */
class KickMember
{
    const NAME           = 'GroupV2.KickMember';
    const URI            = '/GroupV2/{groupId}/Members/{membershipType}/{membershipId}/Kick/';
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

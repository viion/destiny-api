<?php

namespace Destiny2\Api\GroupV2;

/**
 * Bans the requested member from the requested group for the specified period
 * of time.
 */
class BanMember
{
    const NAME           = 'GroupV2.BanMember';
    const URI            = '/GroupV2/{groupId}/Members/{membershipType}/{membershipId}/Ban/';
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

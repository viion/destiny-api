<?php

namespace Destiny2\Api\GroupV2;

/**
 * Deny all of the pending users for the given group that match the passed-in
 * .
 */
class DenyPendingForList
{
    const NAME           = 'GroupV2.DenyPendingForList';
    const URI            = '/GroupV2/{groupId}/Members/DenyList/';
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

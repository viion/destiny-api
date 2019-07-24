<?php

namespace Destiny2\Api\GroupV2;

/**
 * Deny all of the pending users for the given group.
 */
class DenyAllPending
{
    const NAME           = 'GroupV2.DenyAllPending';
    const URI            = '/GroupV2/{groupId}/Members/DenyAll/';
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

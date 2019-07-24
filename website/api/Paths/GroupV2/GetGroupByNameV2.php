<?php

namespace Destiny2\Api\GroupV2;

/**
 * Get information about a specific group with the given name and type. The
 * POST version.
 */
class GetGroupByNameV2
{
    const NAME           = 'GroupV2.GetGroupByNameV2';
    const URI            = '/GroupV2/NameV2/';
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

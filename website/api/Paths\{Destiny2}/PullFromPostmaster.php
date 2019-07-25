<?php

namespace Destiny2\Api\Paths\{Destiny2};

/**
 * Extract an item from the Postmaster, with whatever implications that may
 * entail. You must have a valid Destiny account. You must also pass BOTH a
 * reference AND an instance ID if it's an instanced item.
 */
class PullFromPostmaster
{
    const NAME           = 'Destiny2.PullFromPostmaster';
    const URI            = '/Destiny2/Actions/Items/PullFromPostmaster/';
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

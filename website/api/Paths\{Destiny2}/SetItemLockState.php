<?php

namespace Destiny2\Api\Paths\{Destiny2};

/**
 * Set the Lock State for an instanced item. You must have a valid Destiny
 * Account.
 */
class SetItemLockState
{
    const NAME           = 'Destiny2.SetItemLockState';
    const URI            = '/Destiny2/Actions/Items/SetLockState/';
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

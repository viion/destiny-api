<?php

namespace Destiny2\Api\Destiny2;

/**
 * Transfer an item to/from your vault. You must have a valid Destiny account.
 * You must also pass BOTH a reference AND an instance ID if it's an instanced
 * item. itshappening.gif
 */
class TransferItem
{
    const NAME           = 'Destiny2.TransferItem';
    const URI            = '/Destiny2/Actions/Items/TransferItem/';
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

<?php

namespace Destiny2\Api\Paths\{Destiny2};

/**
 * Insert a plug into a socketed item. I know how it sounds, but I assure you
 * it's much more G-rated than you might be guessing. We haven't decided yet
 * whether this will be able to insert plugs that have side effects, but if we
 * do it will require special scope permission for an application attempting
 * to do so. You must have a valid Destiny Account, and either be in a social
 * space, in orbit, or offline. Request must include proof of permission for
 * 'InsertPlugs' from the account owner.
 */
class InsertSocketPlug
{
    const NAME           = 'Destiny2.InsertSocketPlug';
    const URI            = '/Destiny2/Actions/Items/InsertSocketPlug/';
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

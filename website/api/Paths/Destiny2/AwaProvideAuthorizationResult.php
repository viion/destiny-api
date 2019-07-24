<?php

namespace Destiny2\Api\Destiny2;

/**
 * Provide the result of the user interaction. Called by the Bungie Destiny
 * App to approve or reject a request.
 */
class AwaProvideAuthorizationResult
{
    const NAME           = 'Destiny2.AwaProvideAuthorizationResult';
    const URI            = '/Destiny2/Awa/AwaProvideAuthorizationResult/';
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

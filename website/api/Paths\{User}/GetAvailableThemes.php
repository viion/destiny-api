<?php

namespace Destiny2\Api\Paths\{User};

/**
 * Returns a list of all available user themes.
 */
class GetAvailableThemes
{
    const NAME           = 'User.GetAvailableThemes';
    const URI            = '/User/GetAvailableThemes/';
    const METHOD         = 'GET';
    const TAGS           = 'User';
    const OPERATION_ID   = 'User.GetAvailableThemes';

    const IS_PREVIEW     = false;
    const IS_DEPRECATED  = false;

    const PARAMETERS = [
        
    ];

    const RESPONSE = [
        200 => '#/components/responses/ListOfUserTheme'
    ];

    public static function build()
    {

    }
}

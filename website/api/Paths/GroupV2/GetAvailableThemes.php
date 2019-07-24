<?php

namespace Destiny2\Api\GroupV2;

/**
 * Returns a list of all available group themes.
 */
class GetAvailableThemes
{
    const NAME           = 'GroupV2.GetAvailableThemes';
    const URI            = '/GroupV2/GetAvailableThemes/';
    const METHOD         = 'GET';
    const TAGS           = 'GroupV2';
    const OPERATION_ID   = 'GroupV2.GetAvailableThemes';

    const IS_PREVIEW     = false;
    const IS_DEPRECATED  = false;

    const PARAMETERS = [
        
    ];

    const RESPONSE = [
        200 => '#/components/responses/ListOfGroupTheme'
    ];

    public static function build()
    {

    }
}

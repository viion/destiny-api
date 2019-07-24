<?php

namespace Destiny2\Api\Core;

/**
 * Get the common settings used by the Bungie.Net environment.
 */
class GetCommonSettings
{
    const NAME           = '.GetCommonSettings';
    const URI            = '/Settings/';
    const METHOD         = 'GET';
    const TAGS           = '';
    const OPERATION_ID   = '.GetCommonSettings';

    const IS_PREVIEW     = false;
    const IS_DEPRECATED  = false;

    const PARAMETERS = [
        
    ];

    const RESPONSE = [
        200 => '#/components/responses/Common.Models.CoreSettingsConfiguration'
    ];

    public static function build()
    {

    }
}

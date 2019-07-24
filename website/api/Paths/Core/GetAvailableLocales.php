<?php

namespace Destiny2\Api\Core;

/**
 * List of available localization cultures
 */
class GetAvailableLocales
{
    const NAME           = '.GetAvailableLocales';
    const URI            = '/GetAvailableLocales/';
    const METHOD         = 'GET';
    const TAGS           = '';
    const OPERATION_ID   = '.GetAvailableLocales';

    const IS_PREVIEW     = false;
    const IS_DEPRECATED  = false;

    const PARAMETERS = [
        
    ];

    const RESPONSE = [
        200 => '#/components/responses/CEDictionaryOfstringAndstring'
    ];

    public static function build()
    {

    }
}

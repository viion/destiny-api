<?php

namespace Destiny2\Api\Paths\Generic\\GetAvailableLocales;

/**
 * GetAvailableLocales
 *
 * List of available localization cultures
 */
class GetAvailableLocales
{

    const SUMMARY = '.GetAvailableLocales';

    const URI = '/GetAvailableLocales/';

    const METHOD = 'GET';

    const TAGS = [
        '',
    ];

    const OPERATION_ID = '.GetAvailableLocales';

    const IS_DEPRECATED = false;

    const IS_PREVIEW = false;

    const RESPONSE = [
        200 => '#/components/responses/CEDictionaryOfstringAndstring',
    ];

    public static function build($parameters)
    {
        $test = 1;
        return $test;
    }


}


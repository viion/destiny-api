<?php

namespace Destiny2\Api\Paths\GroupV2\GetAvailableThemes;

/**
 * GetAvailableThemes
 *
 * Returns a list of all available group themes.
 */
class GetAvailableThemes
{

    const SUMMARY = 'GroupV2.GetAvailableThemes';

    const URI = '/GroupV2/GetAvailableThemes/';

    const METHOD = 'GET';

    const TAGS = [
        'GroupV2',
    ];

    const OPERATION_ID = 'GroupV2.GetAvailableThemes';

    const IS_DEPRECATED = false;

    const IS_PREVIEW = false;

    const RESPONSE = [
        200 => '#/components/responses/ListOfGroupTheme',
    ];

    public static function build($parameters)
    {
        $test = 1;
        return $test;
    }


}


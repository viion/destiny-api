<?php

namespace Destiny2\Api\Paths\User;

/**
 * GetAvailableThemes
 *
 * Returns a list of all available user themes.
 */
class GetAvailableThemes
{

    const NAME = 'User.GetAvailableThemes';

    const URI = '/User/GetAvailableThemes/';

    const METHOD = 'GET';

    const TAGS = [
        'User',
    ];

    const OPERATION_ID = 'User.GetAvailableThemes';

    const IS_DEPRECATED = false;

    const IS_PREVIEW = false;

    const RESPONSE = [
        200 => '#/components/responses/ListOfUserTheme',
    ];

    public static function build($parameters)
    {
        $test = 1;
        return $test;
    }


}


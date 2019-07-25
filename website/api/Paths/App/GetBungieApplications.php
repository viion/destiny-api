<?php

namespace Destiny2\Api\Paths\App;

/**
 * GetBungieApplications
 *
 * Get list of applications created by Bungie.
 */
class GetBungieApplications
{

    const NAME = 'App.GetBungieApplications';

    const URI = '/App/FirstParty/';

    const METHOD = 'GET';

    const TAGS = [
        'App',
    ];

    const OPERATION_ID = 'App.GetBungieApplications';

    const IS_DEPRECATED = false;

    const IS_PREVIEW = false;

    const RESPONSE = [
        200 => '#/components/responses/IEnumerableOfApplication',
    ];

    public static function build($parameters)
    {
        $test = 1;
        return $test;
    }


}


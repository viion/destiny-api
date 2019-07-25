<?php

namespace Destiny2\Api\Paths\Generic;

/**
 * GetGlobalAlerts
 *
 * Gets any active global alert for display in the forum banners, help pages, etc.
 * Usually used for DOC alerts.
 */
class GetGlobalAlerts
{

    const NAME = '.GetGlobalAlerts';

    const URI = '/GlobalAlerts/';

    const METHOD = 'GET';

    const TAGS = [
        '',
    ];

    const OPERATION_ID = '.GetGlobalAlerts';

    const IS_DEPRECATED = false;

    const IS_PREVIEW = false;

    const RESPONSE = [
        200 => '#/components/responses/CEListOfGlobalAlert',
    ];

    public static function build($parameters)
    {
        $test = 1;
        return $test;
    }


}


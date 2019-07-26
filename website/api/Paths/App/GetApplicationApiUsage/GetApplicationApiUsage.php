<?php

namespace Destiny2\Api\Paths\App\GetApplicationApiUsage;

/**
 * GetApplicationApiUsage
 *
 * Get API usage by application for time frame specified. You can go as far back as
 * 30 days ago, and can ask for up to a 48 hour window of time in a single request.
 * You must be authenticated with at least the ReadUserData permission to access
 * this endpoint.
 */
class GetApplicationApiUsage
{

    const SUMMARY = 'App.GetApplicationApiUsage';

    const URI = '/App/ApiUsage/{applicationId}/';

    const METHOD = 'GET';

    const TAGS = [
        'App',
    ];

    const OPERATION_ID = 'App.GetApplicationApiUsage';

    const IS_DEPRECATED = false;

    const IS_PREVIEW = false;

    const RESPONSE = [
        200 => '#/components/responses/Applications.ApiUsage',
    ];

    public static function build($parameters)
    {
        $test = 1;
        return $test;
    }


}


<?php

namespace Destiny2\Api\Paths\Destiny2;

/**
 * GetPostGameCarnageReport
 *
 * Gets the available post game carnage report for the activity ID.
 */
class GetPostGameCarnageReport
{

    const NAME = 'Destiny2.GetPostGameCarnageReport';

    const URI = '/Destiny2/Stats/PostGameCarnageReport/{activityId}/';

    const METHOD = 'GET';

    const TAGS = [
        'Destiny2',
    ];

    const OPERATION_ID = 'Destiny2.GetPostGameCarnageReport';

    const IS_DEPRECATED = false;

    const IS_PREVIEW = false;

    const RESPONSE = [
        200 => '#/components/responses/Destiny.HistoricalStats.DestinyPostGameCarnageReportData',
    ];

    public static function build($parameters)
    {
        $test = 1;
        return $test;
    }


}


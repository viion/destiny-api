<?php

namespace Destiny2\Api\Paths\Destiny2\ReportOffensivePostGameCarnageReportPlayer;

/**
 * ReportOffensivePostGameCarnageReportPlayer
 *
 * Report a player that you met in an activity that was engaging in ToS-violating
 * activities. Both you and the offending player must have played in the activityId
 * passed in. Please use this judiciously and only when you have strong suspicions
 * of violation, pretty please.
 */
class ReportOffensivePostGameCarnageReportPlayer
{

    const SUMMARY = 'Destiny2.ReportOffensivePostGameCarnageReportPlayer';

    const URI = '/Destiny2/Stats/PostGameCarnageReport/{activityId}/Report/';

    const METHOD = 'POST';

    public static function build($parameters)
    {
        $test = 1;
        return $test;
    }


}


<?php

namespace Destiny2\Api\Paths\{Destiny2};

/**
 * Report a player that you met in an activity that was engaging in
 * ToS-violating activities. Both you and the offending player must have
 * played in the activityId passed in. Please use this judiciously and only
 * when you have strong suspicions of violation, pretty please.
 */
class ReportOffensivePostGameCarnageReportPlayer
{
    const NAME           = 'Destiny2.ReportOffensivePostGameCarnageReportPlayer';
    const URI            = '/Destiny2/Stats/PostGameCarnageReport/{activityId}/Report/';
    const METHOD         = 'POST';
    const TAGS           = '{tags}';
    const OPERATION_ID   = '{operationId}';

    const IS_PREVIEW     = {is_preview};
    const IS_DEPRECATED  = {is_deprecated};

    const PARAMETERS = [
        
    ];

    const RESPONSE = [
        
    ];

    public static function build()
    {

    }
}

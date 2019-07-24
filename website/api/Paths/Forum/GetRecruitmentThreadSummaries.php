<?php

namespace Destiny2\Api\Forum;

/**
 * Allows the caller to get a list of to 25 recruitment thread summary
 * information objects.
 */
class GetRecruitmentThreadSummaries
{
    const NAME           = 'Forum.GetRecruitmentThreadSummaries';
    const URI            = '/Forum/Recruit/Summaries/';
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

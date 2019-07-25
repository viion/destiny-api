<?php

namespace Destiny2\Api\Paths\Forum;

/**
 * GetRecruitmentThreadSummaries
 *
 * Allows the caller to get a list of to 25 recruitment thread summary information
 * objects.
 */
class GetRecruitmentThreadSummaries
{

    const NAME = 'Forum.GetRecruitmentThreadSummaries';

    const URI = '/Forum/Recruit/Summaries/';

    const METHOD = 'POST';

    public static function build($parameters)
    {
        $test = 1;
        return $test;
    }


}


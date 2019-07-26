<?php

namespace Destiny2\Api\Paths\GroupV2\GetRecommendedGroups;

/**
 * GetRecommendedGroups
 *
 * Gets groups recommended for you based on the groups to whom those you follow
 * belong.
 */
class GetRecommendedGroups
{

    const SUMMARY = 'GroupV2.GetRecommendedGroups';

    const URI = '/GroupV2/Recommended/{groupType}/{createDateRange}/';

    const METHOD = 'POST';

    public static function build($parameters)
    {
        $test = 1;
        return $test;
    }


}


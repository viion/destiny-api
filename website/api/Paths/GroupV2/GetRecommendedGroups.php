<?php

namespace Destiny2\Api\Paths\GroupV2;

/**
 * GetRecommendedGroups
 *
 * Gets groups recommended for you based on the groups to whom those you follow
 * belong.
 */
class GetRecommendedGroups
{

    const NAME = 'GroupV2.GetRecommendedGroups';

    const URI = '/GroupV2/Recommended/{groupType}/{createDateRange}/';

    const METHOD = 'POST';

    public static function build($parameters)
    {
        $test = 1;
        return $test;
    }


}


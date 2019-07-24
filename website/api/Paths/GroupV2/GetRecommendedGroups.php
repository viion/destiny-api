<?php

namespace Destiny2\Api\GroupV2;

/**
 * Gets groups recommended for you based on the groups to whom those you
 * follow belong.
 */
class GetRecommendedGroups
{
    const NAME           = 'GroupV2.GetRecommendedGroups';
    const URI            = '/GroupV2/Recommended/{groupType}/{createDateRange}/';
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

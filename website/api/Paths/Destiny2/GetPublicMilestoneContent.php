<?php

namespace Destiny2\Api\Paths\Destiny2;

/**
 * GetPublicMilestoneContent
 *
 * Gets custom localized content for the milestone of the given hash, if it exists.
 */
class GetPublicMilestoneContent
{

    const NAME = 'Destiny2.GetPublicMilestoneContent';

    const URI = '/Destiny2/Milestones/{milestoneHash}/Content/';

    const METHOD = 'GET';

    const TAGS = [
        'Destiny2',
    ];

    const OPERATION_ID = 'Destiny2.GetPublicMilestoneContent';

    const IS_DEPRECATED = false;

    const IS_PREVIEW = false;

    const RESPONSE = [
        200 => '#/components/responses/Destiny.Milestones.DestinyMilestoneContent',
    ];

    public static function build($parameters)
    {
        $test = 1;
        return $test;
    }


}


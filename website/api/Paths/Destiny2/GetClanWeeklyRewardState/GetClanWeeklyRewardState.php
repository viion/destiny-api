<?php

namespace Destiny2\Api\Paths\Destiny2\GetClanWeeklyRewardState;

/**
 * GetClanWeeklyRewardState
 *
 * Returns information on the weekly clan rewards and if the clan has earned them
 * or not. Note that this will always report rewards as not redeemed.
 */
class GetClanWeeklyRewardState
{

    const SUMMARY = 'Destiny2.GetClanWeeklyRewardState';

    const URI = '/Destiny2/Clan/{groupId}/WeeklyRewardState/';

    const METHOD = 'GET';

    const TAGS = [
        'Destiny2',
    ];

    const OPERATION_ID = 'Destiny2.GetClanWeeklyRewardState';

    const IS_DEPRECATED = false;

    const IS_PREVIEW = false;

    const RESPONSE = [
        200 => '#/components/responses/Destiny.Milestones.DestinyMilestone',
    ];

    public static function build($parameters)
    {
        $test = 1;
        return $test;
    }


}


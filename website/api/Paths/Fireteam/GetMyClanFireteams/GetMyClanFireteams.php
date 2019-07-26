<?php

namespace Destiny2\Api\Paths\Fireteam\GetMyClanFireteams;

/**
 * GetMyClanFireteams
 *
 * Gets a listing of all clan fireteams that caller is an applicant, a member, or
 * an alternate of.
 */
class GetMyClanFireteams
{

    const SUMMARY = 'Fireteam.GetMyClanFireteams';

    const URI = '/Fireteam/Clan/{groupId}/My/{platform}/{includeClosed}/{page}/';

    const METHOD = 'GET';

    const TAGS = [
        'Fireteam',
    ];

    const OPERATION_ID = 'Fireteam.GetMyClanFireteams';

    const IS_DEPRECATED = false;

    const IS_PREVIEW = false;

    const RESPONSE = [
        200 => '#/components/responses/SearchResultOfFireteamResponse',
    ];

    public static function build($parameters)
    {
        $test = 1;
        return $test;
    }


}


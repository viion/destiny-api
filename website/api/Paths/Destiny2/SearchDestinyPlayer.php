<?php

namespace Destiny2\Api\Paths\Destiny2;

/**
 * SearchDestinyPlayer
 *
 * Returns a list of Destiny memberships given a full Gamertag or PSN ID.
 */
class SearchDestinyPlayer
{

    const NAME = 'Destiny2.SearchDestinyPlayer';

    const URI = '/Destiny2/SearchDestinyPlayer/{membershipType}/{displayName}/';

    const METHOD = 'GET';

    const TAGS = [
        'Destiny2',
    ];

    const OPERATION_ID = 'Destiny2.SearchDestinyPlayer';

    const IS_DEPRECATED = false;

    const IS_PREVIEW = false;

    const RESPONSE = [
        200 => '#/components/responses/IEnumerableOfUserInfoCard',
    ];

    public static function build($parameters)
    {
        $test = 1;
        return $test;
    }


}


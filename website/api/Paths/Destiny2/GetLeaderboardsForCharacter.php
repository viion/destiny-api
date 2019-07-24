<?php

namespace Destiny2\Api\Destiny2;

/**
 * Gets leaderboards with the signed in user's friends and the supplied
 * destinyMembershipId as the focus. PREVIEW: This endpoint is still in beta,
 * and may experience rough edges. The schema is in final form, but there may
 * be bugs that prevent desirable operation.
 */
class GetLeaderboardsForCharacter
{
    const NAME           = 'Destiny2.GetLeaderboardsForCharacter';
    const URI            = '/Destiny2/Stats/Leaderboards/{membershipType}/{destinyMembershipId}/{characterId}/';
    const METHOD         = 'GET';
    const TAGS           = 'Destiny2,Preview';
    const OPERATION_ID   = 'Destiny2.GetLeaderboardsForCharacter';

    const IS_PREVIEW     = true;
    const IS_DEPRECATED  = false;

    const PARAMETERS = [
        
    ];

    const RESPONSE = [
        200 => '#/components/responses/Destiny.HistoricalStats.DestinyLeaderboardResults'
    ];

    public static function build()
    {

    }
}

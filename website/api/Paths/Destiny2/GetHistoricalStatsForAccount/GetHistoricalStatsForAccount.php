<?php

namespace Destiny2\Api\Paths\Destiny2\GetHistoricalStatsForAccount;

/**
 * GetHistoricalStatsForAccount
 *
 * Gets aggregate historical stats organized around each character for a given
 * account.
 */
class GetHistoricalStatsForAccount
{

    const SUMMARY = 'Destiny2.GetHistoricalStatsForAccount';

    const URI = '/Destiny2/{membershipType}/Account/{destinyMembershipId}/Stats/';

    const METHOD = 'GET';

    const TAGS = [
        'Destiny2',
    ];

    const OPERATION_ID = 'Destiny2.GetHistoricalStatsForAccount';

    const IS_DEPRECATED = false;

    const IS_PREVIEW = false;

    const RESPONSE = [
        200 => '#/components/responses/Destiny.HistoricalStats.DestinyHistoricalStatsAccountResult',
    ];

    public static function build($parameters)
    {
        $test = 1;
        return $test;
    }


}


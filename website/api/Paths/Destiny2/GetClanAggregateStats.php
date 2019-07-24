<?php

namespace Destiny2\Api\Destiny2;

/**
 * Gets aggregated stats for a clan using the same categories as the clan
 * leaderboards. PREVIEW: This endpoint is still in beta, and may experience
 * rough edges. The schema is in final form, but there may be bugs that
 * prevent desirable operation.
 */
class GetClanAggregateStats
{
    const NAME           = 'Destiny2.GetClanAggregateStats';
    const URI            = '/Destiny2/Stats/AggregateClanStats/{groupId}/';
    const METHOD         = 'GET';
    const TAGS           = 'Destiny2,Preview';
    const OPERATION_ID   = 'Destiny2.GetClanAggregateStats';

    const IS_PREVIEW     = true;
    const IS_DEPRECATED  = false;

    const PARAMETERS = [
        
    ];

    const RESPONSE = [
        200 => '#/components/responses/ListOfDestinyClanAggregateStat'
    ];

    public static function build()
    {

    }
}

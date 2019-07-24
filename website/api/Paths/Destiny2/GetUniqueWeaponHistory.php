<?php

namespace Destiny2\Api\Destiny2;

/**
 * Gets details about unique weapon usage, including all exotic weapons.
 */
class GetUniqueWeaponHistory
{
    const NAME           = 'Destiny2.GetUniqueWeaponHistory';
    const URI            = '/Destiny2/{membershipType}/Account/{destinyMembershipId}/Character/{characterId}/Stats/UniqueWeapons/';
    const METHOD         = 'GET';
    const TAGS           = 'Destiny2';
    const OPERATION_ID   = 'Destiny2.GetUniqueWeaponHistory';

    const IS_PREVIEW     = false;
    const IS_DEPRECATED  = false;

    const PARAMETERS = [
        
    ];

    const RESPONSE = [
        200 => '#/components/responses/Destiny.HistoricalStats.DestinyHistoricalWeaponStatsData'
    ];

    public static function build()
    {

    }
}

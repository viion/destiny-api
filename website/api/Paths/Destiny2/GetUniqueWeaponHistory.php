<?php

namespace Destiny2\Api\Paths\Destiny2;

/**
 * GetUniqueWeaponHistory
 *
 * Gets details about unique weapon usage, including all exotic weapons.
 */
class GetUniqueWeaponHistory
{

    const NAME = 'Destiny2.GetUniqueWeaponHistory';

    const URI = '/Destiny2/{membershipType}/Account/{destinyMembershipId}/Character/{characterId}/Stats/UniqueWeapons/';

    const METHOD = 'GET';

    const TAGS = [
        'Destiny2',
    ];

    const OPERATION_ID = 'Destiny2.GetUniqueWeaponHistory';

    const IS_DEPRECATED = false;

    const IS_PREVIEW = false;

    const RESPONSE = [
        200 => '#/components/responses/Destiny.HistoricalStats.DestinyHistoricalWeaponStatsData',
    ];

    public static function build($parameters)
    {
        $test = 1;
        return $test;
    }


}


<?php

namespace Destiny2\Api\Enums\BungieMembershipType;

/**
 * BungieMembershipType
 *
 * The types of membership the Accounts system supports. This is the external
 * facing enum used in place of the internal-only
 * Bungie.SharedDefinitions.MembershipType.
 */
class BungieMembershipType
{

    const TYPE = 'integer';

    const TYPE_FORMAT = 'int32';

    const ENUMS_ALLOWED = [
        '0',
        '1',
        '2',
        '3',
        '4',
        '5',
        '10',
        '254',
        '-1',
    ];

    const ENUMS = [
        'None' => '0',
        'TigerXbox' => '1',
        'TigerPsn' => '2',
        'TigerSteam' => '3',
        'TigerBlizzard' => '4',
        'TigerStadia' => '5',
        'TigerDemon' => '10',
        'BungieNext' => '254',
        'All' => '-1',
    ];


}


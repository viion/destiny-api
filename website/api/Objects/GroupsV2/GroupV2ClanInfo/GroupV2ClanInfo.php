<?php

namespace Destiny2\Api\Objects\GroupsV2\GroupV2ClanInfo;

/**
 * GroupV2ClanInfo
 *
 * This contract contains clan-specific group information. It does not include any
 * investment data.
 */
class GroupV2ClanInfo
{

    const TYPE = 'object';

    public $clanCallsign = [
        'type' => 'string',
    ];

    public $clanBannerData = [
        '$ref' => '#/components/schemas/GroupsV2.ClanBanner',
    ];


}


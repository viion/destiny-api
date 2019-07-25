<?php

namespace Destiny2\Api\Objects\GroupsV2;

/**
 * GroupV2ClanInfo
 */
class GroupV2ClanInfo
{

    const NAME = 'GroupsV2.GroupV2ClanInfo';

    const TYPE = 'object';

    public $clanCallsign = [
        'type' => 'string',
    ];

    public $clanBannerData = [
        '$ref' => '#/components/schemas/GroupsV2.ClanBanner',
    ];


}


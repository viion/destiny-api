<?php

namespace Destiny2\Api\Objects\GroupsV2;

/**
 * GroupV2ClanInfoAndInvestment
 */
class GroupV2ClanInfoAndInvestment
{

    const NAME = 'GroupsV2.GroupV2ClanInfoAndInvestment';

    const TYPE = 'object';

    public $d2ClanProgressions = [
        'type' => 'object',
        'additionalProperties' => [
            '$ref' => '#/components/schemas/Destiny.DestinyProgression',
        ],
        'x-dictionary-key' => [
            'type' => 'integer',
            'format' => 'uint32',
        ],
    ];

    public $clanCallsign = [
        'type' => 'string',
    ];

    public $clanBannerData = [
        '$ref' => '#/components/schemas/GroupsV2.ClanBanner',
    ];


}


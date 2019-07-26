<?php

namespace Destiny2\Api\Enums\GroupsV2\Capabilities;

/**
 * Capabilities
 *
 * No description
 */
class Capabilities
{

    const TYPE = 'integer';

    const TYPE_FORMAT = 'int32';

    const ENUMS_ALLOWED = [
        '0',
        '1',
        '2',
        '4',
        '8',
        '16',
        '32',
        '64',
    ];

    const ENUMS = [
        'None' => '0',
        'Leaderboards' => '1',
        'Callsign' => '2',
        'OptionalConversations' => '4',
        'ClanBanner' => '8',
        'D2InvestmentData' => '16',
        'Tags' => '32',
        'Alliances' => '64',
    ];


}


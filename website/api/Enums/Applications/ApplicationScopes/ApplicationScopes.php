<?php

namespace Destiny2\Api\Enums\Applications\ApplicationScopes;

/**
 * ApplicationScopes
 *
 * No description
 */
class ApplicationScopes
{

    const TYPE = 'integer';

    const TYPE_FORMAT = 'int64';

    const ENUMS_ALLOWED = [
        '1',
        '2',
        '4',
        '8',
        '16',
        '32',
        '64',
        '128',
        '256',
        '512',
        '1024',
        '2048',
    ];

    const ENUMS = [
        'ReadBasicUserProfile' => '1',
        'ReadGroups' => '2',
        'WriteGroups' => '4',
        'AdminGroups' => '8',
        'BnetWrite' => '16',
        'MoveEquipDestinyItems' => '32',
        'ReadDestinyInventoryAndVault' => '64',
        'ReadUserData' => '128',
        'EditUserData' => '256',
        'ReadDestinyVendorsAndAdvisors' => '512',
        'ReadAndApplyTokens' => '1024',
        'AdvancedWriteActions' => '2048',
    ];


}


<?php

namespace Destiny2\Api\Enums\Destiny\SocketTypeActionType;

/**
 * SocketTypeActionType
 *
 * Indicates the type of actions that can be performed
 */
class SocketTypeActionType
{

    const TYPE = 'integer';

    const TYPE_FORMAT = 'int32';

    const ENUMS_ALLOWED = [
        '0',
        '1',
        '2',
    ];

    const ENUMS = [
        'InsertPlug' => '0',
        'InfuseItem' => '1',
        'ReinitializeSocket' => '2',
    ];


}


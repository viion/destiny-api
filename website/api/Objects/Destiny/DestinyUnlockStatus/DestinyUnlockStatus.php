<?php

namespace Destiny2\Api\Objects\Destiny\DestinyUnlockStatus;

/**
 * DestinyUnlockStatus
 *
 * Indicates the status of an "Unlock Flag" on a Character or Profile.
 * These are individual bits of state that can be either set or not set, and
 * sometimes provide interesting human-readable information in their related
 * DestinyUnlockDefinition.
 */
class DestinyUnlockStatus
{

    const TYPE = 'object';

    public $unlockHash = [
        'type' => 'integer',
        'description' => 'The hash identifier for the Unlock Flag. Use to lookup DestinyUnlockDefinition for static data. Not all unlocks have human readable data - in fact, most don\'t. But when they do, it can be very useful to show. Even if they don\'t have human readable data, you might be able to infer the meaning of an unlock flag with a bit of experimentation...',
        'format' => 'uint32',
        'x-mapped-definition' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.DestinyUnlockDefinition',
        ],
    ];

    public $isSet = [
        'type' => 'boolean',
        'description' => 'Whether the unlock flag is set.',
    ];


}


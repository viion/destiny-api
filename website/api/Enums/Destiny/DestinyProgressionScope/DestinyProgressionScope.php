<?php

namespace Destiny2\Api\Enums\Destiny\DestinyProgressionScope;

/**
 * DestinyProgressionScope
 *
 * There are many Progressions in Destiny (think Character Level, or Reputation).
 * These are the various "Scopes" of Progressions, which affect many things: *
 * Where/if they are stored * How they are calculated * Where they can be used in
 * other game logic
 */
class DestinyProgressionScope
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
        '6',
        '7',
        '8',
    ];

    const ENUMS = [
        'Account' => '0',
        'Character' => '1',
        'Clan' => '2',
        'Item' => '3',
        'ImplicitFromEquipment' => '4',
        'Mapped' => '5',
        'MappedAggregate' => '6',
        'MappedStat' => '7',
        'MappedUnlockValue' => '8',
    ];


}


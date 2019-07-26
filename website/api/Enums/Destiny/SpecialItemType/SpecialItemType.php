<?php

namespace Destiny2\Api\Enums\Destiny\SpecialItemType;

/**
 * SpecialItemType
 *
 * As you run into items that need to be classified for Milestone purposes in ways
 * that we cannot infer via direct data, add a new classification here and use a
 * string constant to represent it in the local item config file.
 * NOTE: This is not all of the item types available, and some of these are
 * holdovers from Destiny 1 that may or may not still exist.
 */
class SpecialItemType
{

    const TYPE = 'integer';

    const TYPE_FORMAT = 'int32';

    const ENUMS_ALLOWED = [
        '0',
        '1',
        '8',
        '9',
        '23',
        '24',
        '25',
        '27',
        '29',
    ];

    const ENUMS = [
        'None' => '0',
        'SpecialCurrency' => '1',
        'Armor' => '8',
        'Weapon' => '9',
        'Engram' => '23',
        'Consumable' => '24',
        'ExchangeMaterial' => '25',
        'MissionReward' => '27',
        'Currency' => '29',
    ];


}


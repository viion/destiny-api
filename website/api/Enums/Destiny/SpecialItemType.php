<?php

namespace Destiny2\Api\Enums\Destiny;

/**
 * SpecialItemType
 */
class SpecialItemType
{

    const NAME = 'Destiny.SpecialItemType';

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


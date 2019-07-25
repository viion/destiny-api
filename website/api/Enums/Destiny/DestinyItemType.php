<?php

namespace Destiny2\Api\Enums\Destiny;

/**
 * DestinyItemType
 */
class DestinyItemType
{

    const NAME = 'Destiny.DestinyItemType';

    const TYPE = 'integer';

    const TYPE_FORMAT = 'int32';

    const ENUMS_ALLOWED = [
        '0',
        '1',
        '2',
        '3',
        '7',
        '8',
        '9',
        '10',
        '11',
        '12',
        '13',
        '14',
        '15',
        '16',
        '17',
        '18',
        '19',
        '20',
        '21',
        '22',
        '23',
        '24',
        '25',
        '26',
        '27',
    ];

    const ENUMS = [
        'None' => '0',
        'Currency' => '1',
        'Armor' => '2',
        'Weapon' => '3',
        'Message' => '7',
        'Engram' => '8',
        'Consumable' => '9',
        'ExchangeMaterial' => '10',
        'MissionReward' => '11',
        'QuestStep' => '12',
        'QuestStepComplete' => '13',
        'Emblem' => '14',
        'Quest' => '15',
        'Subclass' => '16',
        'ClanBanner' => '17',
        'Aura' => '18',
        'Mod' => '19',
        'Dummy' => '20',
        'Ship' => '21',
        'Vehicle' => '22',
        'Emote' => '23',
        'Ghost' => '24',
        'Package' => '25',
        'Bounty' => '26',
        'Wrapper' => '27',
    ];


}


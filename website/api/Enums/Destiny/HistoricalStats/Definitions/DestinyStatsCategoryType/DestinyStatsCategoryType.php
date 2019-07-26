<?php

namespace Destiny2\Api\Enums\Destiny\HistoricalStats\Definitions\DestinyStatsCategoryType;

/**
 * DestinyStatsCategoryType
 *
 * No description
 */
class DestinyStatsCategoryType
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
        '9',
        '10',
        '11',
        '12',
        '13',
        '14',
        '15',
    ];

    const ENUMS = [
        'None' => '0',
        'Kills' => '1',
        'Assists' => '2',
        'Deaths' => '3',
        'Criticals' => '4',
        'KDa' => '5',
        'KD' => '6',
        'Score' => '7',
        'Entered' => '8',
        'TimePlayed' => '9',
        'MedalWins' => '10',
        'MedalGame' => '11',
        'MedalSpecialKills' => '12',
        'MedalSprees' => '13',
        'MedalMultiKills' => '14',
        'MedalAbilities' => '15',
    ];


}


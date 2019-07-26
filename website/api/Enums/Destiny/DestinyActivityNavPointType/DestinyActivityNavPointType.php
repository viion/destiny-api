<?php

namespace Destiny2\Api\Enums\Destiny\DestinyActivityNavPointType;

/**
 * DestinyActivityNavPointType
 *
 * No description
 */
class DestinyActivityNavPointType
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
        '16',
    ];

    const ENUMS = [
        'Inactive' => '0',
        'PrimaryObjective' => '1',
        'SecondaryObjective' => '2',
        'TravelObjective' => '3',
        'PublicEventObjective' => '4',
        'AmmoCache' => '5',
        'PointTypeFlag' => '6',
        'CapturePoint' => '7',
        'DefensiveEncounter' => '8',
        'GhostInteraction' => '9',
        'KillAi' => '10',
        'QuestItem' => '11',
        'PatrolMission' => '12',
        'Incoming' => '13',
        'ArenaObjective' => '14',
        'AutomationHint' => '15',
        'TrackedQuest' => '16',
    ];


}


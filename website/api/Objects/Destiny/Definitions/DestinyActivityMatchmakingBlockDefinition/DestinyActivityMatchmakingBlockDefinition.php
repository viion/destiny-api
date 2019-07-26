<?php

namespace Destiny2\Api\Objects\Destiny\Definitions\DestinyActivityMatchmakingBlockDefinition;

/**
 * DestinyActivityMatchmakingBlockDefinition
 *
 * Information about matchmaking and party size for the activity.
 */
class DestinyActivityMatchmakingBlockDefinition
{

    const TYPE = 'object';

    public $isMatchmade = [
        'type' => 'boolean',
        'description' => 'If TRUE, the activity is matchmade. Otherwise, it requires explicit forming of a party.',
    ];

    public $minParty = [
        'type' => 'integer',
        'description' => 'The minimum # of people in the fireteam for the activity to launch.',
        'format' => 'int32',
    ];

    public $maxParty = [
        'type' => 'integer',
        'description' => 'The maximum # of people allowed in a Fireteam.',
        'format' => 'int32',
    ];

    public $maxPlayers = [
        'type' => 'integer',
        'description' => 'The maximum # of people allowed across all teams in the activity.',
        'format' => 'int32',
    ];

    public $requiresGuardianOath = [
        'type' => 'boolean',
        'description' => 'If true, you have to Solemnly Swear to be up to Nothing But Good(tm) to play.',
    ];


}


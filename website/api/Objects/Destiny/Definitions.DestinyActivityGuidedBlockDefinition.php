<?php

namespace Destiny2\Api\Objects\Destiny;

/**
 * Definitions.DestinyActivityGuidedBlockDefinition
 */
class Definitions.DestinyActivityGuidedBlockDefinition
{

    const NAME = 'Destiny.Definitions.DestinyActivityGuidedBlockDefinition';

    const TYPE = 'object';

    public $guidedMaxLobbySize = [
        'type' => 'integer',
        'description' => 'The maximum amount of people that can be in the waiting lobby.',
        'format' => 'int32',
    ];

    public $guidedMinLobbySize = [
        'type' => 'integer',
        'description' => 'The minimum amount of people that can be in the waiting lobby.',
        'format' => 'int32',
    ];

    public $guidedDisbandCount = [
        'type' => 'integer',
        'description' => 'If -1, the guided group cannot be disbanded. Otherwise, take the total # of players in the activity and subtract this number: that is the total # of votes needed for the guided group to disband.',
        'format' => 'int32',
    ];


}


<?php

namespace Destiny2\Api\Objects\Fireteam;

/**
 * FireteamResponse
 */
class FireteamResponse
{

    const NAME = 'Fireteam.FireteamResponse';

    const TYPE = 'object';

    public $Summary = [
        '$ref' => '#/components/schemas/Fireteam.FireteamSummary',
    ];

    public $Members = [
        'type' => 'array',
        'items' => [
            '$ref' => '#/components/schemas/Fireteam.FireteamMember',
        ],
    ];

    public $Alternates = [
        'type' => 'array',
        'items' => [
            '$ref' => '#/components/schemas/Fireteam.FireteamMember',
        ],
    ];


}


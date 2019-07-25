<?php

namespace Destiny2\Api\Objects\Destiny;

/**
 * Responses.DestinyLinkedProfilesResponse
 */
class Responses.DestinyLinkedProfilesResponse
{

    const NAME = 'Destiny.Responses.DestinyLinkedProfilesResponse';

    const TYPE = 'object';

    public $profiles = [
        'type' => 'array',
        'items' => [
            '$ref' => '#/components/schemas/Destiny.Responses.DestinyProfileUserInfoCard',
        ],
        'description' => 'Any Destiny account for whom we could successfully pull characters will be returned here, as the Platform-level summary of user data. (no character data, no Destiny account data other than the Membership ID and Type so you can make further queries)',
    ];

    public $bnetMembership = [
        'type' => 'object',
        'allOf' => [
            [
                '$ref' => '#/components/schemas/User.UserInfoCard',
            ],
        ],
        'description' => 'If the requested membership had a linked Bungie.Net membership ID, this is the basic information about that BNet account.
I know, Tetron; I know this is mixing UserServices concerns with DestinyServices concerns. But it\'s so damn convenient! https://www.youtube.com/watch?v=X5R-bB-gKVI',
    ];

    public $profilesWithErrors = [
        'type' => 'array',
        'items' => [
            '$ref' => '#/components/schemas/Destiny.Responses.DestinyErrorProfile',
        ],
        'description' => 'This is brief summary info for profiles that we believe have valid Destiny info, but who failed to return data for some other reason and thus we know that subsequent calls for their info will also fail.',
    ];


}


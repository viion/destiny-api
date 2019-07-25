<?php

namespace Destiny2\Api\Objects\Destiny;

/**
 * Responses.DestinyErrorProfile
 */
class Responses.DestinyErrorProfile
{

    const NAME = 'Destiny.Responses.DestinyErrorProfile';

    const TYPE = 'object';

    public $errorCode = [
        'type' => 'integer',
        'description' => 'The error that we encountered. You should be able to look up localized text to show to the user for these failures.',
        'format' => 'int32',
        'x-enum-reference' => [
            '$ref' => '#/components/schemas/Exceptions.PlatformErrorCodes',
        ],
        'x-enum-is-bitmask' => false,
    ];

    public $infoCard = [
        'type' => 'object',
        'allOf' => [
            [
                '$ref' => '#/components/schemas/User.UserInfoCard',
            ],
        ],
        'description' => 'Basic info about the account that failed. Don\'t expect anything other than membership ID, Membership Type, and displayName to be populated.',
    ];


}


<?php

namespace Destiny2\Api\Objects\Applications;

/**
 * ApplicationDeveloper
 */
class ApplicationDeveloper
{

    const NAME = 'Applications.ApplicationDeveloper';

    const TYPE = 'object';

    public $role = [
        'type' => 'integer',
        'format' => 'int32',
        'x-enum-reference' => [
            '$ref' => '#/components/schemas/Applications.DeveloperRole',
        ],
        'x-enum-is-bitmask' => false,
    ];

    public $apiEulaVersion = [
        'type' => 'integer',
        'format' => 'int32',
    ];

    public $user = [
        '$ref' => '#/components/schemas/User.UserInfoCard',
    ];


}


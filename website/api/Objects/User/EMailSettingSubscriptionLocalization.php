<?php

namespace Destiny2\Api\Objects\User;

/**
 * EMailSettingSubscriptionLocalization
 */
class EMailSettingSubscriptionLocalization
{

    const NAME = 'User.EMailSettingSubscriptionLocalization';

    const TYPE = 'object';

    public $unknownUserDescription = [
        'type' => 'string',
    ];

    public $registeredUserDescription = [
        'type' => 'string',
    ];

    public $unregisteredUserDescription = [
        'type' => 'string',
    ];

    public $unknownUserActionText = [
        'type' => 'string',
    ];

    public $knownUserActionText = [
        'type' => 'string',
    ];

    public $title = [
        'type' => 'string',
    ];

    public $description = [
        'type' => 'string',
    ];


}


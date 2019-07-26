<?php

namespace Destiny2\Api\Objects\User\EMailSettingSubscriptionLocalization;

/**
 * EMailSettingSubscriptionLocalization
 *
 * Localized text relevant to a given EMail setting in a given localization. Extra
 * settings specifically for subscriptions.
 */
class EMailSettingSubscriptionLocalization
{

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


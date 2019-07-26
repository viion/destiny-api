<?php

namespace Destiny2\Api\Objects\User\GeneralUser;

/**
 * GeneralUser
 *
 * No description
 */
class GeneralUser
{

    const TYPE = 'object';

    public $membershipId = [
        'type' => 'integer',
        'format' => 'int64',
    ];

    public $uniqueName = [
        'type' => 'string',
    ];

    public $normalizedName = [
        'type' => 'string',
    ];

    public $displayName = [
        'type' => 'string',
    ];

    public $profilePicture = [
        'type' => 'integer',
        'format' => 'int32',
    ];

    public $profileTheme = [
        'type' => 'integer',
        'format' => 'int32',
    ];

    public $userTitle = [
        'type' => 'integer',
        'format' => 'int32',
    ];

    public $successMessageFlags = [
        'type' => 'integer',
        'format' => 'int64',
    ];

    public $isDeleted = [
        'type' => 'boolean',
    ];

    public $about = [
        'type' => 'string',
    ];

    public $firstAccess = [
        'type' => 'string',
        'format' => 'date-time',
        'nullable' => true,
    ];

    public $lastUpdate = [
        'type' => 'string',
        'format' => 'date-time',
        'nullable' => true,
    ];

    public $legacyPortalUID = [
        'type' => 'integer',
        'format' => 'int64',
        'nullable' => true,
    ];

    public $context = [
        '$ref' => '#/components/schemas/User.UserToUserContext',
    ];

    public $psnDisplayName = [
        'type' => 'string',
    ];

    public $xboxDisplayName = [
        'type' => 'string',
    ];

    public $fbDisplayName = [
        'type' => 'string',
    ];

    public $showActivity = [
        'type' => 'boolean',
        'nullable' => true,
    ];

    public $locale = [
        'type' => 'string',
    ];

    public $localeInheritDefault = [
        'type' => 'boolean',
    ];

    public $lastBanReportId = [
        'type' => 'integer',
        'format' => 'int64',
        'nullable' => true,
    ];

    public $showGroupMessaging = [
        'type' => 'boolean',
    ];

    public $profilePicturePath = [
        'type' => 'string',
    ];

    public $profilePictureWidePath = [
        'type' => 'string',
    ];

    public $profileThemeName = [
        'type' => 'string',
    ];

    public $userTitleDisplay = [
        'type' => 'string',
    ];

    public $statusText = [
        'type' => 'string',
    ];

    public $statusDate = [
        'type' => 'string',
        'format' => 'date-time',
    ];

    public $profileBanExpire = [
        'type' => 'string',
        'format' => 'date-time',
        'nullable' => true,
    ];

    public $blizzardDisplayName = [
        'type' => 'string',
    ];


}


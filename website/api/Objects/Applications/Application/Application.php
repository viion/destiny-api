<?php

namespace Destiny2\Api\Objects\Applications\Application;

/**
 * Application
 *
 * No description
 */
class Application
{

    const TYPE = 'object';

    public $applicationType = [
        'type' => 'integer',
        'format' => 'int32',
        'x-enum-reference' => [
            '$ref' => '#/components/schemas/Applications.OAuthApplicationType',
        ],
        'x-enum-is-bitmask' => false,
    ];

    public $applicationId = [
        'type' => 'integer',
        'description' => 'Unique ID assigned to the application',
        'format' => 'int32',
    ];

    public $name = [
        'type' => 'string',
        'description' => 'Name of the application',
    ];

    public $redirectUrl = [
        'type' => 'string',
        'description' => 'URL used to pass the user\'s authorization code to the application',
    ];

    public $link = [
        'type' => 'string',
        'description' => 'Link to website for the application where a user can learn more about the app.',
    ];

    public $scope = [
        'type' => 'integer',
        'description' => 'Permissions the application needs to work',
        'format' => 'int64',
    ];

    public $origin = [
        'type' => 'string',
        'description' => 'Value of the Origin header sent in requests generated by this application.',
    ];

    public $status = [
        'type' => 'integer',
        'description' => 'Current status of the application.',
        'format' => 'int32',
        'x-enum-reference' => [
            '$ref' => '#/components/schemas/Applications.ApplicationStatus',
        ],
        'x-enum-is-bitmask' => false,
    ];

    public $creationDate = [
        'type' => 'string',
        'description' => 'Date the application was first added to our database.',
        'format' => 'date-time',
    ];

    public $statusChanged = [
        'type' => 'string',
        'description' => 'Date the application status last changed.',
        'format' => 'date-time',
    ];

    public $firstPublished = [
        'type' => 'string',
        'description' => 'Date the first time the application status entered the \'Public\' status.',
        'format' => 'date-time',
    ];

    public $team = [
        'type' => 'array',
        'items' => [
            '$ref' => '#/components/schemas/Applications.ApplicationDeveloper',
        ],
        'description' => 'List of team members who manage this application on Bungie.net. Will always consist of at least the application owner.',
    ];


}


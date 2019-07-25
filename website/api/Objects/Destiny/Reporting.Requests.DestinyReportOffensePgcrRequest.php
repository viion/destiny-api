<?php

namespace Destiny2\Api\Objects\Destiny;

/**
 * Reporting.Requests.DestinyReportOffensePgcrRequest
 */
class Reporting.Requests.DestinyReportOffensePgcrRequest
{

    const NAME = 'Destiny.Reporting.Requests.DestinyReportOffensePgcrRequest';

    const TYPE = 'object';

    public $reasonCategoryHashes = [
        'type' => 'array',
        'items' => [
            'type' => 'integer',
            'format' => 'uint32',
        ],
        'description' => 'So you\'ve decided to report someone instead of cursing them and their descendants. Well, okay then. This is the category or categorie(s) of infractions for which you are reporting the user. These are hash identifiers that map to DestinyReportReasonCategoryDefinition entries.',
        'x-mapped-definition' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.Reporting.DestinyReportReasonCategoryDefinition',
        ],
    ];

    public $reasonHashes = [
        'type' => 'array',
        'items' => [
            'type' => 'integer',
            'format' => 'uint32',
        ],
        'description' => 'If applicable, provide a more specific reason(s) within the general category of problems provided by the reasonHash. This is also an identifier for a reason. All reasonHashes provided must be children of at least one the reasonCategoryHashes provided.',
    ];

    public $offendingCharacterId = [
        'type' => 'integer',
        'description' => 'Within the PGCR provided when calling the Reporting endpoint, this should be the character ID of the user that you thought was violating terms of use. They must exist in the PGCR provided.',
        'format' => 'int64',
    ];


}


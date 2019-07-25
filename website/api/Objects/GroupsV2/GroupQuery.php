<?php

namespace Destiny2\Api\Objects\GroupsV2;

/**
 * GroupQuery
 */
class GroupQuery
{

    const NAME = 'GroupsV2.GroupQuery';

    const TYPE = 'object';

    public $name = [
        'type' => 'string',
    ];

    public $groupType = [
        'type' => 'integer',
        'format' => 'int32',
        'x-enum-reference' => [
            '$ref' => '#/components/schemas/GroupsV2.GroupType',
        ],
        'x-enum-is-bitmask' => false,
    ];

    public $creationDate = [
        'type' => 'integer',
        'format' => 'int32',
        'x-enum-reference' => [
            '$ref' => '#/components/schemas/GroupsV2.GroupDateRange',
        ],
        'x-enum-is-bitmask' => false,
    ];

    public $sortBy = [
        'type' => 'integer',
        'format' => 'int32',
        'x-enum-reference' => [
            '$ref' => '#/components/schemas/GroupsV2.GroupSortBy',
        ],
        'x-enum-is-bitmask' => false,
    ];

    public $groupMemberCountFilter = [
        'enum' => [
            '0',
            '1',
            '2',
            '3',
        ],
        'type' => 'integer',
        'format' => 'int32',
        'nullable' => true,
        'x-enum-values' => [
            [
                'numericValue' => '0',
                'identifier' => 'All',
            ],
            [
                'numericValue' => '1',
                'identifier' => 'OneToTen',
            ],
            [
                'numericValue' => '2',
                'identifier' => 'ElevenToOneHundred',
            ],
            [
                'numericValue' => '3',
                'identifier' => 'GreaterThanOneHundred',
            ],
        ],
        'x-enum-is-bitmask' => false,
    ];

    public $localeFilter = [
        'type' => 'string',
    ];

    public $tagText = [
        'type' => 'string',
    ];

    public $itemsPerPage = [
        'type' => 'integer',
        'format' => 'int32',
    ];

    public $currentPage = [
        'type' => 'integer',
        'format' => 'int32',
    ];

    public $requestContinuationToken = [
        'type' => 'string',
    ];


}


<?php

namespace Destiny2\Api\Objects\Generic;

/**
 * SearchResultOfGroupMember
 */
class SearchResultOfGroupMember
{

    const NAME = 'SearchResultOfGroupMember';

    const TYPE = 'object';

    public $results = [
        'type' => 'array',
        'items' => [
            '$ref' => '#/components/schemas/GroupsV2.GroupMember',
        ],
    ];

    public $totalResults = [
        'type' => 'integer',
        'format' => 'int32',
    ];

    public $hasMore = [
        'type' => 'boolean',
    ];

    public $query = [
        '$ref' => '#/components/schemas/Queries.PagedQuery',
    ];

    public $replacementContinuationToken = [
        'type' => 'string',
    ];

    public $useTotalResults = [
        'type' => 'boolean',
        'description' => 'If useTotalResults is true, then totalResults represents an accurate count.
If False, it does not, and may be estimated/only the size of the current page.
Either way, you should probably always only trust hasMore.
This is a long-held historical throwback to when we used to do paging with known total results. Those queries toasted our database, and we were left to hastily alter our endpoints and create backward- compatible shims, of which useTotalResults is one.',
    ];


}


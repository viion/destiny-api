<?php

namespace Destiny2\Api\Objects\Queries\PagedQuery;

/**
 * PagedQuery
 *
 * No description
 */
class PagedQuery
{

    const TYPE = 'object';

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


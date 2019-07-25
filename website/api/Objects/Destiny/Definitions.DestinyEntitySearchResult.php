<?php

namespace Destiny2\Api\Objects\Destiny;

/**
 * Definitions.DestinyEntitySearchResult
 */
class Definitions.DestinyEntitySearchResult
{

    const NAME = 'Destiny.Definitions.DestinyEntitySearchResult';

    const TYPE = 'object';

    public $suggestedWords = [
        'type' => 'array',
        'items' => [
            'type' => 'string',
        ],
        'description' => 'A list of suggested words that might make for better search results, based on the text searched for.',
    ];

    public $results = [
        'type' => 'object',
        'allOf' => [
            [
                '$ref' => '#/components/schemas/SearchResultOfDestinyEntitySearchResultItem',
            ],
        ],
        'description' => 'The items found that are matches/near matches for the searched-for term, sorted by something vaguely resembling "relevance". Hopefully this will get better in the future.',
    ];


}


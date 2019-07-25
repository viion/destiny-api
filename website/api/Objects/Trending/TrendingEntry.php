<?php

namespace Destiny2\Api\Objects\Trending;

/**
 * TrendingEntry
 */
class TrendingEntry
{

    const NAME = 'Trending.TrendingEntry';

    const TYPE = 'object';

    public $weight = [
        'type' => 'number',
        'description' => 'The weighted score of this trending item.',
        'format' => 'double',
    ];

    public $isFeatured = [
        'type' => 'boolean',
    ];

    public $identifier = [
        'type' => 'string',
        'description' => 'We don\'t know whether the identifier will be a string, a uint, or a long... so we\'re going to cast it all to a string. But either way, we need any trending item created to have a single unique identifier for its type.',
    ];

    public $entityType = [
        'type' => 'integer',
        'description' => 'An enum - unfortunately - dictating all of the possible kinds of trending items that you might get in your result set, in case you want to do custom rendering or call to get the details of the item.',
        'format' => 'int32',
        'x-enum-reference' => [
            '$ref' => '#/components/schemas/Trending.TrendingEntryType',
        ],
        'x-enum-is-bitmask' => false,
    ];

    public $displayName = [
        'type' => 'string',
        'description' => 'The localized "display name/article title/\'primary localized identifier\'" of the entity.',
    ];

    public $tagline = [
        'type' => 'string',
        'description' => 'If the entity has a localized tagline/subtitle/motto/whatever, that is found here.',
    ];

    public $image = [
        'type' => 'string',
    ];

    public $startDate = [
        'type' => 'string',
        'format' => 'date-time',
        'nullable' => true,
    ];

    public $endDate = [
        'type' => 'string',
        'format' => 'date-time',
        'nullable' => true,
    ];

    public $link = [
        'type' => 'string',
    ];

    public $webmVideo = [
        'type' => 'string',
        'description' => 'If this is populated, the entry has a related WebM video to show. I am 100% certain I am going to regret putting this directly on TrendingEntry, but it will work so yolo',
    ];

    public $mp4Video = [
        'type' => 'string',
        'description' => 'If this is populated, the entry has a related MP4 video to show. I am 100% certain I am going to regret putting this directly on TrendingEntry, but it will work so yolo',
    ];

    public $featureImage = [
        'type' => 'string',
        'description' => 'If isFeatured, this image will be populated with whatever the featured image is. Note that this will likely be a very large image, so don\'t use it all the time.',
    ];

    public $items = [
        'type' => 'array',
        'items' => [
            '$ref' => '#/components/schemas/Trending.TrendingEntry',
        ],
        'description' => 'If the item is of entityType TrendingEntryType.Container, it may have items - also Trending Entries - contained within it. This is the ordered list of those to display under the Container\'s header.',
    ];

    public $creationDate = [
        'type' => 'string',
        'description' => 'If the entry has a date at which it was created, this is that date.',
        'format' => 'date-time',
        'nullable' => true,
    ];


}


<?php

namespace Destiny2\Api\Objects\Content;

/**
 * ContentItemPublicContract
 */
class ContentItemPublicContract
{

    const NAME = 'Content.ContentItemPublicContract';

    const TYPE = 'object';

    public $contentId = [
        'type' => 'integer',
        'format' => 'int64',
    ];

    public $cType = [
        'type' => 'string',
    ];

    public $cmsPath = [
        'type' => 'string',
    ];

    public $creationDate = [
        'type' => 'string',
        'format' => 'date-time',
    ];

    public $modifyDate = [
        'type' => 'string',
        'format' => 'date-time',
    ];

    public $allowComments = [
        'type' => 'boolean',
    ];

    public $hasAgeGate = [
        'type' => 'boolean',
    ];

    public $minimumAge = [
        'type' => 'integer',
        'format' => 'int32',
    ];

    public $ratingImagePath = [
        'type' => 'string',
    ];

    public $author = [
        '$ref' => '#/components/schemas/User.GeneralUser',
    ];

    public $autoEnglishPropertyFallback = [
        'type' => 'boolean',
    ];

    public $properties = [
        'type' => 'object',
        'additionalProperties' => [
            'type' => 'object',
        ],
        'description' => 'Firehose content is really a collection of metadata and "properties", which are the potentially-but-not-strictly localizable data that comprises the meat of whatever content is being shown.
As Cole Porter would have crooned, "Anything Goes" with Firehose properties. They are most often strings, but they can theoretically be anything. They are JSON encoded, and could be JSON structures, simple strings, numbers etc... The Content Type of the item (cType) will describe the properties, and thus how they ought to be deserialized.',
        'x-dictionary-key' => [
            'type' => 'string',
        ],
    ];

    public $representations = [
        'type' => 'array',
        'items' => [
            '$ref' => '#/components/schemas/Content.ContentRepresentation',
        ],
    ];

    public $tags = [
        'type' => 'array',
        'items' => [
            'type' => 'string',
        ],
    ];

    public $commentSummary = [
        '$ref' => '#/components/schemas/Content.CommentSummary',
    ];


}


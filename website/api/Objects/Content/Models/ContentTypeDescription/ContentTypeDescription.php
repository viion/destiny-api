<?php

namespace Destiny2\Api\Objects\Content\Models\ContentTypeDescription;

/**
 * ContentTypeDescription
 *
 * No description
 */
class ContentTypeDescription
{

    const TYPE = 'object';

    public $cType = [
        'type' => 'string',
    ];

    public $name = [
        'type' => 'string',
    ];

    public $contentDescription = [
        'type' => 'string',
    ];

    public $previewImage = [
        'type' => 'string',
    ];

    public $priority = [
        'type' => 'integer',
        'format' => 'int32',
    ];

    public $reminder = [
        'type' => 'string',
    ];

    public $properties = [
        'type' => 'array',
        'items' => [
            '$ref' => '#/components/schemas/Content.Models.ContentTypeProperty',
        ],
    ];

    public $tagMetadata = [
        'type' => 'array',
        'items' => [
            '$ref' => '#/components/schemas/Content.Models.TagMetadataDefinition',
        ],
    ];

    public $tagMetadataItems = [
        'type' => 'object',
        'additionalProperties' => [
            '$ref' => '#/components/schemas/Content.Models.TagMetadataItem',
        ],
        'x-dictionary-key' => [
            'type' => 'string',
        ],
    ];

    public $usageExamples = [
        'type' => 'array',
        'items' => [
            'type' => 'string',
        ],
    ];

    public $showInContentEditor = [
        'type' => 'boolean',
    ];

    public $typeOf = [
        'type' => 'string',
    ];

    public $bindIdentifierToProperty = [
        'type' => 'string',
    ];

    public $boundRegex = [
        'type' => 'string',
    ];

    public $forceIdentifierBinding = [
        'type' => 'boolean',
    ];

    public $allowComments = [
        'type' => 'boolean',
    ];

    public $autoEnglishPropertyFallback = [
        'type' => 'boolean',
    ];

    public $bulkUploadable = [
        'type' => 'boolean',
    ];

    public $previews = [
        'type' => 'array',
        'items' => [
            '$ref' => '#/components/schemas/Content.Models.ContentPreview',
        ],
    ];

    public $suppressCmsPath = [
        'type' => 'boolean',
    ];

    public $propertySections = [
        'type' => 'array',
        'items' => [
            '$ref' => '#/components/schemas/Content.Models.ContentTypePropertySection',
        ],
    ];


}


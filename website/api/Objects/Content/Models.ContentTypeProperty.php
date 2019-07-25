<?php

namespace Destiny2\Api\Objects\Content;

/**
 * Models.ContentTypeProperty
 */
class Models.ContentTypeProperty
{

    const NAME = 'Content.Models.ContentTypeProperty';

    const TYPE = 'object';

    public $name = [
        'type' => 'string',
    ];

    public $readableName = [
        'type' => 'string',
    ];

    public $value = [
        'type' => 'string',
    ];

    public $propertyDescription = [
        'type' => 'string',
    ];

    public $localizable = [
        'type' => 'boolean',
    ];

    public $fallback = [
        'type' => 'boolean',
    ];

    public $enabled = [
        'type' => 'boolean',
    ];

    public $order = [
        'type' => 'integer',
        'format' => 'int32',
    ];

    public $visible = [
        'type' => 'boolean',
    ];

    public $isTitle = [
        'type' => 'boolean',
    ];

    public $required = [
        'type' => 'boolean',
    ];

    public $maxLength = [
        'type' => 'integer',
        'format' => 'int32',
    ];

    public $maxByteLength = [
        'type' => 'integer',
        'format' => 'int32',
    ];

    public $maxFileSize = [
        'type' => 'integer',
        'format' => 'int32',
    ];

    public $regexp = [
        'type' => 'string',
    ];

    public $validateAs = [
        'type' => 'string',
    ];

    public $rssAttribute = [
        'type' => 'string',
    ];

    public $visibleDependency = [
        'type' => 'string',
    ];

    public $visibleOn = [
        'type' => 'string',
    ];

    public $datatype = [
        'type' => 'integer',
        'format' => 'int32',
        'x-enum-reference' => [
            '$ref' => '#/components/schemas/Content.Models.ContentPropertyDataTypeEnum',
        ],
        'x-enum-is-bitmask' => false,
    ];

    public $attributes = [
        'type' => 'object',
        'additionalProperties' => [
            'type' => 'string',
        ],
        'x-dictionary-key' => [
            'type' => 'string',
        ],
    ];

    public $childProperties = [
        'type' => 'array',
        'items' => [
            '$ref' => '#/components/schemas/Content.Models.ContentTypeProperty',
        ],
    ];

    public $contentTypeAllowed = [
        'type' => 'string',
    ];

    public $bindToProperty = [
        'type' => 'string',
    ];

    public $boundRegex = [
        'type' => 'string',
    ];

    public $representationSelection = [
        'type' => 'object',
        'additionalProperties' => [
            'type' => 'string',
        ],
        'x-dictionary-key' => [
            'type' => 'string',
        ],
    ];

    public $defaultValues = [
        'type' => 'array',
        'items' => [
            '$ref' => '#/components/schemas/Content.Models.ContentTypeDefaultValue',
        ],
    ];

    public $isExternalAllowed = [
        'type' => 'boolean',
    ];

    public $propertySection = [
        'type' => 'string',
    ];

    public $weight = [
        'type' => 'integer',
        'format' => 'int32',
    ];

    public $entitytype = [
        'type' => 'string',
    ];

    public $isCombo = [
        'type' => 'boolean',
    ];

    public $suppressProperty = [
        'type' => 'boolean',
    ];

    public $legalContentTypes = [
        'type' => 'array',
        'items' => [
            'type' => 'string',
        ],
    ];

    public $representationValidationString = [
        'type' => 'string',
    ];

    public $minWidth = [
        'type' => 'integer',
        'format' => 'int32',
    ];

    public $maxWidth = [
        'type' => 'integer',
        'format' => 'int32',
    ];

    public $minHeight = [
        'type' => 'integer',
        'format' => 'int32',
    ];

    public $maxHeight = [
        'type' => 'integer',
        'format' => 'int32',
    ];

    public $isVideo = [
        'type' => 'boolean',
    ];

    public $isImage = [
        'type' => 'boolean',
    ];


}


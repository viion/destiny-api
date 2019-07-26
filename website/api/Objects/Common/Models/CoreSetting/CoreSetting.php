<?php

namespace Destiny2\Api\Objects\Common\Models\CoreSetting;

/**
 * CoreSetting
 *
 * No description
 */
class CoreSetting
{

    const TYPE = 'object';

    public $identifier = [
        'type' => 'string',
    ];

    public $isDefault = [
        'type' => 'boolean',
    ];

    public $displayName = [
        'type' => 'string',
    ];

    public $summary = [
        'type' => 'string',
    ];

    public $imagePath = [
        'type' => 'string',
    ];

    public $childSettings = [
        'type' => 'array',
        'items' => [
            '$ref' => '#/components/schemas/Common.Models.CoreSetting',
        ],
    ];


}


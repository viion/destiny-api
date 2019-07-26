<?php

namespace Destiny2\Api\Objects\Destiny\Config\DestinyManifest;

/**
 * DestinyManifest
 *
 * DestinyManifest is the external-facing contract for just the properties needed
 * by those calling the Destiny Platform.
 */
class DestinyManifest
{

    const TYPE = 'object';

    public $version = [
        'type' => 'string',
    ];

    public $mobileAssetContentPath = [
        'type' => 'string',
    ];

    public $mobileGearAssetDataBases = [
        'type' => 'array',
        'items' => [
            '$ref' => '#/components/schemas/Destiny.Config.GearAssetDataBaseDefinition',
        ],
    ];

    public $mobileWorldContentPaths = [
        'type' => 'object',
        'additionalProperties' => [
            'type' => 'string',
        ],
        'x-dictionary-key' => [
            'type' => 'string',
        ],
    ];

    public $jsonWorldContentPaths = [
        'type' => 'object',
        'additionalProperties' => [
            'type' => 'string',
        ],
        'x-dictionary-key' => [
            'type' => 'string',
        ],
    ];

    public $mobileClanBannerDatabasePath = [
        'type' => 'string',
    ];

    public $mobileGearCDN = [
        'type' => 'object',
        'additionalProperties' => [
            'type' => 'string',
        ],
        'x-dictionary-key' => [
            'type' => 'string',
        ],
    ];

    public $iconImagePyramidInfo = [
        'type' => 'array',
        'items' => [
            '$ref' => '#/components/schemas/Destiny.Config.ImagePyramidEntry',
        ],
        'description' => 'Information about the "Image Pyramid" for Destiny icons. Where possible, we create smaller versions of Destiny icons. These are found as subfolders under the location of the "original/full size" Destiny images, with the same file name and extension as the original image itself. (this lets us avoid sending largely redundant path info with every entity, at the expense of the smaller versions of the image being less discoverable)',
    ];


}


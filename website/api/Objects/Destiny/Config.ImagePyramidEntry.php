<?php

namespace Destiny2\Api\Objects\Destiny;

/**
 * Config.ImagePyramidEntry
 */
class Config.ImagePyramidEntry
{

    const NAME = 'Destiny.Config.ImagePyramidEntry';

    const TYPE = 'object';

    public $name = [
        'type' => 'string',
        'description' => 'The name of the subfolder where these images are located.',
    ];

    public $factor = [
        'type' => 'number',
        'description' => 'The factor by which the original image size has been reduced.',
        'format' => 'float',
    ];


}


<?php

namespace Destiny2\Api\Objects\Content;

/**
 * ContentRepresentation
 */
class ContentRepresentation
{

    const NAME = 'Content.ContentRepresentation';

    const TYPE = 'object';

    public $name = [
        'type' => 'string',
    ];

    public $path = [
        'type' => 'string',
    ];

    public $validationString = [
        'type' => 'string',
    ];


}


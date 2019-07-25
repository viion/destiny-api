<?php

namespace Destiny2\Api\Enums\Content;

/**
 * Models
 */
class Models
{

    const NAME = 'Content.Models.ContentPropertyDataTypeEnum';

    const TYPE = 'integer';

    const TYPE_FORMAT = 'int32';

    const ENUMS_ALLOWED = [
        '0',
        '1',
        '2',
        '3',
        '4',
        '5',
        '6',
        '7',
        '8',
        '9',
        '10',
        '11',
        '12',
        '13',
        '14',
    ];

    const ENUMS = [
        'None' => '0',
        'Plaintext' => '1',
        'Html' => '2',
        'Dropdown' => '3',
        'List' => '4',
        'Json' => '5',
        'Content' => '6',
        'Representation' => '7',
        'Set' => '8',
        'File' => '9',
        'FolderSet' => '10',
        'Date' => '11',
        'MultilinePlaintext' => '12',
        'DestinyContent' => '13',
        'Color' => '14',
    ];


}


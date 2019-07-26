<?php

namespace Destiny2\Api\Objects\Config\UserTheme;

/**
 * UserTheme
 *
 * No description
 */
class UserTheme
{

    const TYPE = 'object';

    public $userThemeId = [
        'type' => 'integer',
        'format' => 'int32',
    ];

    public $userThemeName = [
        'type' => 'string',
    ];

    public $userThemeDescription = [
        'type' => 'string',
    ];


}


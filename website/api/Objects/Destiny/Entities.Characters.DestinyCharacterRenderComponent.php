<?php

namespace Destiny2\Api\Objects\Destiny;

/**
 * Entities.Characters.DestinyCharacterRenderComponent
 */
class Entities.Characters.DestinyCharacterRenderComponent
{

    const NAME = 'Destiny.Entities.Characters.DestinyCharacterRenderComponent';

    const TYPE = 'object';

    public $customDyes = [
        'type' => 'array',
        'items' => [
            '$ref' => '#/components/schemas/Destiny.DyeReference',
        ],
        'description' => 'Custom dyes, calculated by iterating over the character\'s equipped items. Useful for pre-fetching all of the dye data needed from our server.',
    ];

    public $customization = [
        'type' => 'object',
        'allOf' => [
            [
                '$ref' => '#/components/schemas/Destiny.Character.DestinyCharacterCustomization',
            ],
        ],
        'description' => 'This is actually something that Spasm.js *doesn\'t* do right now, and that we don\'t return assets for yet. This is the data about what character customization options you picked. You can combine this with DestinyCharacterCustomizationOptionDefinition to show some cool info, and hopefully someday to actually render a user\'s face in 3D. We\'ll see if we ever end up with time for that.',
    ];

    public $peerView = [
        'type' => 'object',
        'allOf' => [
            [
                '$ref' => '#/components/schemas/Destiny.Character.DestinyCharacterPeerView',
            ],
        ],
        'description' => 'A minimal view of:
- Equipped items
- The rendering-related custom options on those equipped items
Combined, that should be enough to render all of the items on the equipped character.',
    ];


}


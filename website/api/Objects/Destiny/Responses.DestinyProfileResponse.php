<?php

namespace Destiny2\Api\Objects\Destiny;

/**
 * Responses.DestinyProfileResponse
 */
class Responses.DestinyProfileResponse
{

    const NAME = 'Destiny.Responses.DestinyProfileResponse';

    const TYPE = 'object';

    public $vendorReceipts = [
        'type' => 'object',
        'allOf' => [
            [
                '$ref' => '#/components/schemas/SingleComponentResponseOfDestinyVendorReceiptsComponent',
            ],
        ],
        'description' => 'Recent, refundable purchases you have made from vendors. When will you use it? Couldn\'t say...
COMPONENT TYPE: VendorReceipts',
        'x-destiny-component-type-dependency' => 'VendorReceipts',
    ];

    public $profileInventory = [
        'type' => 'object',
        'allOf' => [
            [
                '$ref' => '#/components/schemas/SingleComponentResponseOfDestinyInventoryComponent',
            ],
        ],
        'description' => 'The profile-level inventory of the Destiny Profile.
COMPONENT TYPE: ProfileInventories',
        'x-destiny-component-type-dependency' => 'ProfileInventories',
    ];

    public $profileCurrencies = [
        'type' => 'object',
        'allOf' => [
            [
                '$ref' => '#/components/schemas/SingleComponentResponseOfDestinyInventoryComponent',
            ],
        ],
        'description' => 'The profile-level currencies owned by the Destiny Profile.
COMPONENT TYPE: ProfileCurrencies',
        'x-destiny-component-type-dependency' => 'ProfileCurrencies',
    ];

    public $profile = [
        'type' => 'object',
        'allOf' => [
            [
                '$ref' => '#/components/schemas/SingleComponentResponseOfDestinyProfileComponent',
            ],
        ],
        'description' => 'The basic information about the Destiny Profile (formerly "Account").
COMPONENT TYPE: Profiles',
        'x-destiny-component-type-dependency' => 'Profiles',
    ];

    public $platformSilver = [
        'type' => 'object',
        'allOf' => [
            [
                '$ref' => '#/components/schemas/SingleComponentResponseOfDestinyPlatformSilverComponent',
            ],
        ],
        'description' => 'Silver quantities for any platform on which this Profile plays destiny.
 COMPONENT TYPE: PlatformSilver',
        'x-destiny-component-type-dependency' => 'PlatformSilver',
    ];

    public $profileKiosks = [
        'type' => 'object',
        'allOf' => [
            [
                '$ref' => '#/components/schemas/SingleComponentResponseOfDestinyKiosksComponent',
            ],
        ],
        'description' => 'Items available from Kiosks that are available Profile-wide (i.e. across all characters)
This component returns information about what Kiosk items are available to you on a *Profile* level. It is theoretically possible for Kiosks to have items gated by specific Character as well. If you ever have those, you will find them on the characterKiosks property.
COMPONENT TYPE: Kiosks',
        'x-destiny-component-type-dependency' => 'Kiosks',
    ];

    public $profilePlugSets = [
        'type' => 'object',
        'allOf' => [
            [
                '$ref' => '#/components/schemas/SingleComponentResponseOfDestinyPlugSetsComponent',
            ],
        ],
        'description' => 'When sockets refer to reusable Plug Sets (see DestinyPlugSetDefinition for more info), this is the set of plugs and their states that are profile-scoped.
This comes back with ItemSockets, as it is needed for a complete picture of the sockets on requested items.
COMPONENT TYPE: ItemSockets',
        'x-destiny-component-type-dependency' => 'ItemSockets',
    ];

    public $profileProgression = [
        'type' => 'object',
        'allOf' => [
            [
                '$ref' => '#/components/schemas/SingleComponentResponseOfDestinyProfileProgressionComponent',
            ],
        ],
        'description' => 'When we have progression information - such as Checklists - that may apply profile-wide, it will be returned here rather than in the per-character progression data.
COMPONENT TYPE: ProfileProgression',
        'x-destiny-component-type-dependency' => 'ProfileProgression',
    ];

    public $profilePresentationNodes = [
        'type' => 'object',
        'allOf' => [
            [
                '$ref' => '#/components/schemas/SingleComponentResponseOfDestinyPresentationNodesComponent',
            ],
        ],
        'description' => 'COMPONENT TYPE: PresentationNodes',
        'x-destiny-component-type-dependency' => 'PresentationNodes',
    ];

    public $profileRecords = [
        'type' => 'object',
        'allOf' => [
            [
                '$ref' => '#/components/schemas/SingleComponentResponseOfDestinyProfileRecordsComponent',
            ],
        ],
        'description' => 'COMPONENT TYPE: Records',
        'x-destiny-component-type-dependency' => 'Records',
    ];

    public $profileCollectibles = [
        'type' => 'object',
        'allOf' => [
            [
                '$ref' => '#/components/schemas/SingleComponentResponseOfDestinyProfileCollectiblesComponent',
            ],
        ],
        'description' => 'COMPONENT TYPE: Collectibles',
        'x-destiny-component-type-dependency' => 'Collectibles',
    ];

    public $characters = [
        'type' => 'object',
        'allOf' => [
            [
                '$ref' => '#/components/schemas/DictionaryComponentResponseOfint64AndDestinyCharacterComponent',
            ],
        ],
        'description' => 'Basic information about each character, keyed by the CharacterId.
COMPONENT TYPE: Characters',
        'x-destiny-component-type-dependency' => 'Characters',
    ];

    public $characterInventories = [
        'type' => 'object',
        'allOf' => [
            [
                '$ref' => '#/components/schemas/DictionaryComponentResponseOfint64AndDestinyInventoryComponent',
            ],
        ],
        'description' => 'The character-level non-equipped inventory items, keyed by the Character\'s Id.
COMPONENT TYPE: CharacterInventories',
        'x-destiny-component-type-dependency' => 'CharacterInventories',
    ];

    public $characterProgressions = [
        'type' => 'object',
        'allOf' => [
            [
                '$ref' => '#/components/schemas/DictionaryComponentResponseOfint64AndDestinyCharacterProgressionComponent',
            ],
        ],
        'description' => 'Character-level progression data, keyed by the Character\'s Id.
COMPONENT TYPE: CharacterProgressions',
        'x-destiny-component-type-dependency' => 'CharacterProgressions',
    ];

    public $characterRenderData = [
        'type' => 'object',
        'allOf' => [
            [
                '$ref' => '#/components/schemas/DictionaryComponentResponseOfint64AndDestinyCharacterRenderComponent',
            ],
        ],
        'description' => 'Character rendering data - a minimal set of info needed to render a character in 3D - keyed by the Character\'s Id.
COMPONENT TYPE: CharacterRenderData',
        'x-destiny-component-type-dependency' => 'CharacterRenderData',
    ];

    public $characterActivities = [
        'type' => 'object',
        'allOf' => [
            [
                '$ref' => '#/components/schemas/DictionaryComponentResponseOfint64AndDestinyCharacterActivitiesComponent',
            ],
        ],
        'description' => 'Character activity data - the activities available to this character and its status, keyed by the Character\'s Id.
COMPONENT TYPE: CharacterActivities',
        'x-destiny-component-type-dependency' => 'CharacterActivities',
    ];

    public $characterEquipment = [
        'type' => 'object',
        'allOf' => [
            [
                '$ref' => '#/components/schemas/DictionaryComponentResponseOfint64AndDestinyInventoryComponent',
            ],
        ],
        'description' => 'The character\'s equipped items, keyed by the Character\'s Id.
COMPONENT TYPE: CharacterEquipment',
        'x-destiny-component-type-dependency' => 'CharacterEquipment',
    ];

    public $characterKiosks = [
        'type' => 'object',
        'allOf' => [
            [
                '$ref' => '#/components/schemas/DictionaryComponentResponseOfint64AndDestinyKiosksComponent',
            ],
        ],
        'description' => 'Items available from Kiosks that are available to a specific character as opposed to the account as a whole. It must be combined with data from the profileKiosks property to get a full picture of the character\'s available items to check out of a kiosk.
This component returns information about what Kiosk items are available to you on a *Character* level. Usually, kiosk items will be earned for the entire Profile (all characters) at once. To find those, look in the profileKiosks property.
COMPONENT TYPE: Kiosks',
        'x-destiny-component-type-dependency' => 'Kiosks',
    ];

    public $characterPlugSets = [
        'type' => 'object',
        'allOf' => [
            [
                '$ref' => '#/components/schemas/DictionaryComponentResponseOfint64AndDestinyPlugSetsComponent',
            ],
        ],
        'description' => 'When sockets refer to reusable Plug Sets (see DestinyPlugSetDefinition for more info), this is the set of plugs and their states, per character, that are character-scoped.
This comes back with ItemSockets, as it is needed for a complete picture of the sockets on requested items.
COMPONENT TYPE: ItemSockets',
        'x-destiny-component-type-dependency' => 'ItemSockets',
    ];

    public $characterUninstancedItemComponents = [
        'type' => 'object',
        'additionalProperties' => [
            '$ref' => '#/components/schemas/DestinyBaseItemComponentSetOfuint32',
        ],
        'description' => 'Do you ever get the feeling that a system was designed *too* flexibly? That it can be used in so many different ways that you end up being unable to provide an easy to use abstraction for the mess that\'s happening under the surface?
Let\'s talk about character-specific data that might be related to items without instances. These two statements are totally unrelated, I promise.
At some point during D2, it was decided that items - such as Bounties - could be given to characters and *not* have instance data, but that *could* display and even use relevant state information on your account and character.
Up to now, any item that had meaningful dependencies on character or account state had to be instanced, and thus "itemComponents" was all that you needed: it was keyed by item\'s instance IDs and provided the stateful information you needed inside.
Unfortunately, we don\'t live in such a magical world anymore. This is information held on a per-character basis about non-instanced items that the characters have in their inventory - or that reference character-specific state information even if it\'s in Account-level inventory - and the values related to that item\'s state in relation to the given character.
To give a concrete example, look at a Moments of Triumph bounty. They exist in a character\'s inventory, and show/care about a character\'s progression toward completing the bounty. But the bounty itself is a non-instanced item, like a mod or a currency. This returns that data for the characters who have the bounty in their inventory.
I\'m not crying, you\'re crying Okay we\'re both crying but it\'s going to be okay I promise Actually I shouldn\'t promise that, I don\'t know if it\'s going to be okay',
        'x-dictionary-key' => [
            'type' => 'integer',
            'format' => 'int64',
        ],
    ];

    public $characterPresentationNodes = [
        'type' => 'object',
        'allOf' => [
            [
                '$ref' => '#/components/schemas/DictionaryComponentResponseOfint64AndDestinyPresentationNodesComponent',
            ],
        ],
        'description' => 'COMPONENT TYPE: PresentationNodes',
        'x-destiny-component-type-dependency' => 'PresentationNodes',
    ];

    public $characterRecords = [
        'type' => 'object',
        'allOf' => [
            [
                '$ref' => '#/components/schemas/DictionaryComponentResponseOfint64AndDestinyCharacterRecordsComponent',
            ],
        ],
        'description' => 'COMPONENT TYPE: Records',
        'x-destiny-component-type-dependency' => 'Records',
    ];

    public $characterCollectibles = [
        'type' => 'object',
        'allOf' => [
            [
                '$ref' => '#/components/schemas/DictionaryComponentResponseOfint64AndDestinyCollectiblesComponent',
            ],
        ],
        'description' => 'COMPONENT TYPE: Collectibles',
        'x-destiny-component-type-dependency' => 'Collectibles',
    ];

    public $itemComponents = [
        'type' => 'object',
        'allOf' => [
            [
                '$ref' => '#/components/schemas/DestinyItemComponentSetOfint64',
            ],
        ],
        'description' => 'Information about instanced items across all returned characters, keyed by the item\'s instance ID.
COMPONENT TYPE: [See inside the DestinyItemComponentSet contract for component types.]',
    ];

    public $characterCurrencyLookups = [
        'type' => 'object',
        'allOf' => [
            [
                '$ref' => '#/components/schemas/DictionaryComponentResponseOfint64AndDestinyCurrenciesComponent',
            ],
        ],
        'description' => 'A "lookup" convenience component that can be used to quickly check if the character has access to items that can be used for purchasing.
COMPONENT TYPE: CurrencyLookups',
        'x-destiny-component-type-dependency' => 'CurrencyLookups',
    ];


}


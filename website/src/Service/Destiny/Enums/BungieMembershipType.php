<?php

namespace App\Service\Destiny\Enums;

/**
 * https://bungie-net.github.io/multi/schema_BungieMembershipType.html#schema_BungieMembershipType
 */
class BungieMembershipType
{
    const NONE = 0;
    const XBOX = 1;
    const PSN = 2;
    const STEAM = 3;
    const BLIZZARD = 4;
    const STADIA = 5;
    const DEMON = 10;
    const BUNGIE_NEXT = 254;
    const ALL = -1;
}

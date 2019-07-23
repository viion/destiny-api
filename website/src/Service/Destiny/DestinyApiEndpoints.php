<?php

namespace App\Service\Destiny;

class DestinyApiEndpoints
{
    /**
     * Generics
     */
    const METHOD_GET = 'GET';
    const METHOD_POST = 'POST';
    const METHOD_PUT = 'PUT';
    const METHOD_DELETE = 'DELETE';

    /**
     * https://bungie-net.github.io/multi/operation_get_Content-SearchHelpArticles.html#operation_get_Content-SearchHelpArticles
     */
    private static $endpoints = [
        # Auth
        'AppOauthToken'                                         => [ self::METHOD_POST, '/App/Oauth/Token/' ],

        # App
        'App.GetApplicationApiUsage'                            => [ self::METHOD_GET,  '/App/ApiUsage/{applicationId}/' ],
        'App.GetBungieApplications'                             => [ self::METHOD_GET,  '/App/FirstParty/' ],

        # User
        'User.GetBungieNetUserById'                             => [ self::METHOD_GET,  '/User/GetBungieNetUserById/{id}/' ],
        'User.SearchUsers'                                      => [ self::METHOD_GET,  '/User/SearchUsers/' ],
        'User.GetAvailableThemes'                               => [ self::METHOD_GET,  '/User/GetAvailableThemes/' ],
        'User.GetMembershipDataById'                            => [ self::METHOD_GET,  '/User/GetMembershipsById/{membershipId}/{membershipType}/' ],
        'User.GetMembershipDataForCurrentUser'                  => [ self::METHOD_GET,  '/User/GetMembershipsForCurrentUser/' ],
        'User.GetPartnerships'                                  => [ self::METHOD_GET,  '/User/{membershipId}/Partnerships/' ],

        # Content
        'Content.GetContentType'                                => [ self::METHOD_GET,  '/Content/GetContentType/{type}/' ],
        'Content.GetContentById'                                => [ self::METHOD_GET,  '/Content/GetContentById/{id}/{locale}/' ],
        'Content.GetContentByTagAndType'                        => [ self::METHOD_GET,  '/Content/GetContentByTagAndType/{tag}/{type}/{locale}/' ],
        'Content.SearchContentWithText'                         => [ self::METHOD_GET,  '/Content/Search/{locale}/' ],
        'Content.SearchContentByTagAndType'                     => [ self::METHOD_GET,  '/Content/SearchContentByTagAndType/{tag}/{type}/{locale}/' ],
        'Content.SearchHelpArticles'                            => [ self::METHOD_GET,  '/Content/SearchHelpArticles/{searchtext}/{size}' ],

        # Forum
        'Forum.GetTopicsPaged'                                  => [ self::METHOD_GET,  '/Forum/GetTopicsPaged/{page}/{pageSize}/{group}/{sort}/{quickDate}/{categoryFilter}/' ],
        'Forum.GetCoreTopicsPaged'                              => [ self::METHOD_GET,  '/Forum/GetCoreTopicsPaged/{page}/{sort}/{quickDate}/{categoryFilter}/' ],
        'Forum.GetPostsThreadedPaged'                           => [ self::METHOD_GET,  '/Forum/GetPostsThreadedPaged/{parentPostId}/{page}/{pageSize}/{replySize}/{getParentPost}/{rootThreadMode}/{sortMode}/' ],
        'Forum.GetPostsThreadedPagedFromChild'                  => [ self::METHOD_GET,  '/Forum/GetPostsThreadedPagedFromChild/{childPostId}/{page}/{pageSize}/{replySize}/{rootThreadMode}/{sortMode}/' ],
        'Forum.GetPostAndParent'                                => [ self::METHOD_GET,  '/Forum/GetPostAndParent/{childPostId}/' ],
        'Forum.GetPostAndParentAwaitingApproval'                => [ self::METHOD_GET,  '/Forum/GetPostAndParentAwaitingApproval/{childPostId}/' ],
        'Forum.GetTopicForContent'                              => [ self::METHOD_GET,  '/Forum/GetTopicForContent/{contentId}/' ],
        'Forum.GetForumTagSuggestions'                          => [ self::METHOD_GET,  '/Forum/GetForumTagSuggestions/' ],
        'Forum.GetPoll'                                         => [ self::METHOD_GET,  '/Forum/Poll/{topicId}/' ],
        'Forum.GetRecruitmentThreadSummaries'                   => [ self::METHOD_POST, '/Forum/Recruit/Summaries/' ],

        # GroupV2
        'GroupV2.GetAvailableAvatars'                           => [ self::METHOD_GET,  '/GroupV2/GetAvailableAvatars/' ],
        'GroupV2.GetAvailableThemes'                            => [ self::METHOD_GET,  '/GroupV2/GetAvailableThemes/' ],
        'GroupV2.GetUserClanInviteSetting'                      => [ self::METHOD_GET,  '/GroupV2/GetUserClanInviteSetting/{mType}/' ],
        'GroupV2.GetRecommendedGroups'                          => [ self::METHOD_POST, '/GroupV2/Recommended/{groupType}/{createDateRange}/' ],
        'GroupV2.GroupSearch'                                   => [ self::METHOD_POST, '/GroupV2/Search/' ],
        'GroupV2.GetGroup'                                      => [ self::METHOD_GET,  '/GroupV2/{groupId}/' ],
        'GroupV2.GetGroupByName'                                => [ self::METHOD_GET,  '/GroupV2/Name/{groupName}/{groupType}/' ],
        'GroupV2.GetGroupByNameV2'                              => [ self::METHOD_POST, '/GroupV2/NameV2/' ],
        'GroupV2.GetGroupOptionalConversations'                 => [ self::METHOD_GET,  '/GroupV2/{groupId}/OptionalConversations/' ],
        'GroupV2.EditGroup'                                     => [ self::METHOD_POST, '/GroupV2/{groupId}/Edit/' ],
        'GroupV2.EditClanBanner'                                => [ self::METHOD_POST, '/GroupV2/{groupId}/EditClanBanner/' ],
        'GroupV2.EditFounderOptions'                            => [ self::METHOD_POST, '/GroupV2/{groupId}/EditFounderOptions/' ],
        'GroupV2.AddOptionalConversation'                       => [ self::METHOD_POST, '/GroupV2/{groupId}/OptionalConversations/Add/' ],
        'GroupV2.EditOptionalConversation'                      => [ self::METHOD_POST, '/GroupV2/{groupId}/OptionalConversations/Edit/{conversationId}/' ],
        'GroupV2.GetMembersOfGroup'                             => [ self::METHOD_GET,  '/GroupV2/{groupId}/AdminsAndFounder//GroupV2/{groupId}/Members/' ],
        'GroupV2.GetAdminsAndFounderOfGroup'                    => [ self::METHOD_GET,  '/GroupV2/{groupId}/AdminsAndFounder/' ],
        'GroupV2.EditGroupMembership'                           => [ self::METHOD_POST, '/GroupV2/{groupId}/Members/{membershipType}/{membershipId}/SetMembershipType/{memberType}/' ],
        'GroupV2.KickMember'                                    => [ self::METHOD_POST, '/GroupV2/{groupId}/Members/{membershipType}/{membershipId}/Kick/' ],
        'GroupV2.BanMember'                                     => [ self::METHOD_POST, '/GroupV2/{groupId}/Members/{membershipType}/{membershipId}/Ban/' ],
        'GroupV2.UnbanMember'                                   => [ self::METHOD_POST, '/GroupV2/{groupId}/Members/{membershipType}/{membershipId}/Unban/' ],
        'GroupV2.GetBannedMembersOfGroup'                       => [ self::METHOD_GET,  '/GroupV2/{groupId}/Banned/' ],
        'GroupV2.AbdicateFoundership'                           => [ self::METHOD_POST, '/GroupV2/{groupId}/Admin/AbdicateFoundership/{membershipType}/{founderIdNew}/' ],
        'GroupV2.GetPendingMemberships'                         => [ self::METHOD_GET,  '/GroupV2/{groupId}/Members/Pending/' ],
        'GroupV2.GetInvitedIndividuals'                         => [ self::METHOD_GET,  '/GroupV2/{groupId}/Members/InvitedIndividuals/' ],
        'GroupV2.ApproveAllPending'                             => [ self::METHOD_POST, '/GroupV2/{groupId}/Members/ApproveAll/' ],
        'GroupV2.DenyAllPending'                                => [ self::METHOD_POST, '/GroupV2/{groupId}/Members/DenyAll/' ],
        'GroupV2.ApprovePendingForList'                         => [ self::METHOD_POST, '/GroupV2/{groupId}/Members/ApproveList/' ],
        'GroupV2.ApprovePending'                                => [ self::METHOD_POST, '/GroupV2/{groupId}/Members/Approve/{membershipType}/{membershipId}/' ],
        'GroupV2.DenyPendingForList'                            => [ self::METHOD_POST, '/GroupV2/{groupId}/Members/DenyList/' ],
        'GroupV2.GetGroupsForMember'                            => [ self::METHOD_GET,  '/GroupV2/User/{membershipType}/{membershipId}/{filter}/{groupType}/' ],
        'GroupV2.RecoverGroupForFounder'                        => [ self::METHOD_GET,  '/GroupV2/Recover/{membershipType}/{membershipId}/{groupType}/' ],
        'GroupV2.GetPotentialGroupsForMember'                   => [ self::METHOD_GET,  '/GroupV2/User/Potential/{membershipType}/{membershipId}/{filter}/{groupType}/' ],
        'GroupV2.IndividualGroupInvite'                         => [ self::METHOD_POST, '/GroupV2/{groupId}/Members/IndividualInvite/{membershipType}/{membershipId}/' ],
        'GroupV2.IndividualGroupInviteCancel'                   => [ self::METHOD_POST, '/GroupV2/{groupId}/Members/IndividualInviteCancel/{membershipType}/{membershipId}/' ],

        # Destiny2
        'Destiny2.GetDestinyManifest'                           => [ self::METHOD_GET,  '/Destiny2/Manifest/' ],
        'Destiny2.GetDestinyEntityDefinition'                   => [ self::METHOD_GET,  '/Destiny2/Manifest/{entityType}/{hashIdentifier}/' ],
        'Destiny2.SearchDestinyPlayer'                          => [ self::METHOD_GET,  '/Destiny2/SearchDestinyPlayer/{membershipType}/{displayName}/' ],
        'Destiny2.GetLinkedProfiles'                            => [ self::METHOD_GET,  '/Destiny2/{membershipType}/Profile/{membershipId}/LinkedProfiles/' ],
        'Destiny2.GetProfile'                                   => [ self::METHOD_GET,  '/Destiny2/{membershipType}/Profile/{destinyMembershipId}/' ],
        'Destiny2.GetCharacter'                                 => [ self::METHOD_GET,  '/Destiny2/{membershipType}/Profile/{destinyMembershipId}/Character/{characterId}/' ],
        'Destiny2.GetClanWeeklyRewardState'                     => [ self::METHOD_GET,  '/Destiny2/Clan/{groupId}/WeeklyRewardState/' ],
        'Destiny2.GetItem'                                      => [ self::METHOD_GET,  '/Destiny2/{membershipType}/Profile/{destinyMembershipId}/Item/{itemInstanceId}/' ],
        'Destiny2.GetVendors'                                   => [ self::METHOD_GET,  '/Destiny2/{membershipType}/Profile/{destinyMembershipId}/Character/{characterId}/Vendors/' ],
        'Destiny2.GetVendor'                                    => [ self::METHOD_GET,  '/Destiny2/{membershipType}/Profile/{destinyMembershipId}/Character/{characterId}/Vendors/{vendorHash}/' ],
        'Destiny2.GetPublicVendors'                             => [ self::METHOD_GET,  '/Destiny2//Vendors/' ],
        'Destiny2.GetCollectibleNodeDetails'                    => [ self::METHOD_GET,  '/Destiny2/{membershipType}/Profile/{destinyMembershipId}/Character/{characterId}/Collectibles/{collectiblePresentationNodeHash}/' ],
        'Destiny2.TransferItem'                                 => [ self::METHOD_POST, '/Destiny2/Actions/Items/TransferItem/' ],
        'Destiny2.PullFromPostmaster'                           => [ self::METHOD_POST, '/Destiny2/Actions/Items/PullFromPostmaster/' ],
        'Destiny2.EquipItem'                                    => [ self::METHOD_POST, '/Destiny2/Actions/Items/EquipItem/' ],
        'Destiny2.EquipItems'                                   => [ self::METHOD_POST, '/Destiny2/Actions/Items/EquipItems/' ],
        'Destiny2.SetItemLockState'                             => [ self::METHOD_POST, '/Destiny2/Actions/Items/SetLockState/' ],
        'Destiny2.InsertSocketPlug'                             => [ self::METHOD_POST, '/Destiny2/Actions/Items/InsertSocketPlug/' ],
        'Destiny2.GetPostGameCarnageReport'                     => [ self::METHOD_GET,  '/Destiny2/Stats/PostGameCarnageReport/{activityId}/' ],
        'Destiny2.ReportOffensivePostGameCarnageReportPlayer'   => [ self::METHOD_POST, '/Destiny2/Stats/PostGameCarnageReport/{activityId}/Report/' ],
        'Destiny2.GetHistoricalStatsDefinition'                 => [ self::METHOD_GET,  '/Destiny2/Stats/Definition/' ],
        'Destiny2.GetClanLeaderboards'                          => [ self::METHOD_GET,  '/Destiny2/Stats/Leaderboards/Clans/{groupId}/' ],
        'Destiny2.GetClanAggregateStats'                        => [ self::METHOD_GET,  '/Destiny2/Stats/AggregateClanStats/{groupId}/' ],
        'Destiny2.GetLeaderboards'                              => [ self::METHOD_GET,  '/Destiny2/{membershipType}/Account/{destinyMembershipId}/Stats/Leaderboards/' ],
        'Destiny2.GetLeaderboardsForCharacter'                  => [ self::METHOD_GET,  '/Destiny2/Stats/Leaderboards/{membershipType}/{destinyMembershipId}/{characterId}/' ],
        'Destiny2.SearchDestinyEntities'                        => [ self::METHOD_GET,  '/Destiny2/Armory/Search/{type}/{searchTerm}/' ],
        'Destiny2.GetHistoricalStats'                           => [ self::METHOD_GET,  '/Destiny2/{membershipType}/Account/{destinyMembershipId}/Character/{characterId}/Stats/' ],
        'Destiny2.GetHistoricalStatsForAccount'                 => [ self::METHOD_GET,  '/Destiny2/{membershipType}/Account/{destinyMembershipId}/Stats/' ],
        'Destiny2.GetActivityHistory'                           => [ self::METHOD_GET,  '/Destiny2/{membershipType}/Account/{destinyMembershipId}/Character/{characterId}/Stats/Activities/' ],
        'Destiny2.GetUniqueWeaponHistory'                       => [ self::METHOD_GET,  '/Destiny2/{membershipType}/Account/{destinyMembershipId}/Character/{characterId}/Stats/UniqueWeapons/' ],
        'Destiny2.GetDestinyAggregateActivityStats'             => [ self::METHOD_GET,  '/Destiny2/{membershipType}/Account/{destinyMembershipId}/Character/{characterId}/Stats/AggregateActivityStats/' ],
        'Destiny2.GetPublicMilestoneContent'                    => [ self::METHOD_GET,  '/Destiny2/Milestones/{milestoneHash}/Content/' ],
        'Destiny2.GetPublicMilestones'                          => [ self::METHOD_GET,  '/Destiny2/Milestones/' ],
        'Destiny2.AwaInitializeRequest'                         => [ self::METHOD_POST, '/Destiny2/Awa/Initialize/' ],
        'Destiny2.AwaProvideAuthorizationResult'                => [ self::METHOD_POST, '/Destiny2/Awa/AwaProvideAuthorizationResult/' ],
        'Destiny2.AwaGetActionToken'                            => [ self::METHOD_GET,  '/Destiny2/Awa/GetActionToken/{correlationId}/' ],

        # CommunityContent
        'CommunityContent.GetCommunityContent'                  => [ self::METHOD_GET,  '/CommunityContent/Get/{sort}/{mediaFilter}/{page}/' ],
        'CommunityContent.GetCommunityLiveStatuses'             => [ self::METHOD_GET,  '/CommunityContent/Live/All/{partnershipType}/{sort}/{page}/' ],
        'CommunityContent.GetCommunityLiveStatusesForClanmates' => [ self::METHOD_GET,  '/CommunityContent/Live/Clan/{partnershipType}/{sort}/{page}/' ],
        'CommunityContent.GetCommunityLiveStatusesForFriends'   => [ self::METHOD_GET,  '/CommunityContent/Live/Friends/{partnershipType}/{sort}/{page}/' ],
        'CommunityContent.GetFeaturedCommunityLiveStatuses'     => [ self::METHOD_GET,  '/CommunityContent/Live/Featured/{partnershipType}/{sort}/{page}/' ],
        'CommunityContent.GetStreamingStatusForMember'          => [ self::METHOD_GET,  '/CommunityContent/Live/Users/{partnershipType}/{membershipType}/{membershipId}/' ],

        # Trending
        'Trending.GetTrendingCategories'                        => [ self::METHOD_GET,  '/Trending/Categories/' ],
        'Trending.GetTrendingCategory'                          => [ self::METHOD_GET,  '/Trending/Categories/{categoryId}/{pageNumber}/' ],
        'Trending.GetTrendingEntryDetail'                       => [ self::METHOD_GET,  '/Trending/Details/{trendingEntryType}/{identifier}/' ],

        # Fireteam
        'Fireteam.GetActivePrivateClanFireteamCount'            => [ self::METHOD_GET, '/Fireteam/Clan/{groupId}/ActiveCount/' ],
        'Fireteam.GetAvailableClanFireteams'                    => [ self::METHOD_GET, '/Fireteam/Clan/{groupId}/Available/{platform}/{activityType}/{dateRange}/{slotFilter}/{publicOnly}/{page}/' ],
        'Fireteam.SearchPublicAvailableClanFireteams'           => [ self::METHOD_GET, '/Fireteam/Search/Available/{platform}/{activityType}/{dateRange}/{slotFilter}/{page}/' ],
        'Fireteam.GetMyClanFireteams'                           => [ self::METHOD_GET, '/Fireteam/Clan/{groupId}/My/{platform}/{includeClosed}/{page}/' ],
        'Fireteam.GetClanFireteam'                              => [ self::METHOD_GET, '/Fireteam/Clan/{groupId}/Summary/{fireteamId}/' ],

        # Misc
        'GetAvailableLocales'                                   => [ self::METHOD_GET, '/GetAvailableLocales/' ],
        'GetCommonSettings'                                     => [ self::METHOD_GET, '/Settings/' ],
        'GetGlobalAlerts'                                       => [ self::METHOD_GET, '/GlobalAlerts/' ],
    ];

    /**
     * @param string $endpoint
     * @param array|null $arguments
     * @param array|null $queries
     * @return \stdClass
     * @throws \Exception
     */
    public static function build(string $endpoint, ?array $arguments = [], ?array $queries = []): \stdClass
    {
        $endpoint  = self::$endpoints[$endpoint] ?? null;
        $arguments = $arguments ?: [];
        $queries   = $queries ?: [];

        // endpoint must be valid
        if ($endpoint === null) {
            throw new \Exception("Endpoint: '{$endpoint}' was not found.");
        }

        // grab method + uri
        [ $method, $uri ] = $endpoint;

        // build dynamic uri
        foreach ($arguments as $arg => $value) {
            $uri = str_ireplace("{{$arg}}", $value, $uri);
        }

        return (Object)[
            'method'    => $method,
            'uri'       => "/Platform{$uri}",
            'queries'   => $queries
        ];
    }
}

<?php
namespace ValenceWrapper\Service;

use GuzzleHttp\Psr7\Request;

/**
 * Discussions (forums, topics, posts) — Developer Platform (September 2019)
 * @see https://docs.valence.desire2learn.com/res/discuss.html
 */
class Discussions
{
    /**
     * Delete a particular discussion forum from an org unit.
     * @see https://docs.valence.desire2learn.com/res/discuss.html#delete--d2l-api-le-(version)-(orgUnitId)-discussions-forums-(forumId)
     * @return /PSR7 (Request)
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     */
    public function deleteDiscussionsForumsOrgUnitId($version, $orgUnitId)
    {
        $uri = "/d2l/api/le/$version/$orgUnitId/discussions/forums/$forumId";
        return new Request('GET', $uri);
    }


    /**
     * Retrieve a particular discussion forum for an org unit.
     * @see https://docs.valence.desire2learn.com/res/discuss.html#get--d2l-api-le-(version)-(orgUnitId)-discussions-forums-(forumId)
     * @return /PSR7 (Request)
     * Return. This action returns a Forum data
     * block for the indicated discussion forum.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     */
    public function getDiscussionsForumsOrgUnitId($version, $orgUnitId)
    {
        $uri = "/d2l/api/le/$version/$orgUnitId/discussions/forums/$forumId";
        return new Request('GET', $uri);
    }


    /**
     * Create a new forum for an org unit.
     * @see https://docs.valence.desire2learn.com/res/discuss.html#post--d2l-api-le-(version)-(orgUnitId)-discussions-forums-
     * @return /PSR7 (Request)
     * Return. This action returns a Forum JSON
     * block containing the properties for the newly created discussion forum.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [Discussions.ForumData] $forumData New discussion forum properties.
     */
    public function postDiscussionsForumsOrgUnitId($version, $orgUnitId, $forumData)
    {
        $uri = "/d2l/api/le/$version/$orgUnitId/discussions/forums/";
        return new Request('GET', $uri);
    }


    /**
     * Update a forum for an org unit.
     * @see https://docs.valence.desire2learn.com/res/discuss.html#put--d2l-api-le-(version)-(orgUnitId)-discussions-forums-(forumId)
     * @return /PSR7 (Request)
     * Input. With LE API v1.10 of this action and older, you can either provide a
     * complete ForumData structure, or the old ForumUpdateData structure with all the
     * date fields absent (StartDate, EndDate, PostStartDate, and PostEndDate): but,
     * in either case, the service ignores any date values you send.
     *
     * Return. This action returns a Forum JSON
     * block containing the properties for the newly updated discussion forum.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [Discussions.ForumData] $forumData Updated discussion forum properties.
     */
    public function putDiscussionsForumsOrgUnitId($version, $orgUnitId, $forumData)
    {
        $uri = "/d2l/api/le/$version/$orgUnitId/discussions/forums/$forumId";
        return new Request('GET', $uri);
    }


    /**
     * Delete a particular topic from the provided discussion forum in an org unit.
     * @see https://docs.valence.desire2learn.com/res/discuss.html#delete--d2l-api-le-(version)-(orgUnitId)-discussions-forums-(forumId)-topics-(topicId)
     * @return /PSR7 (Request)
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [D2LID] $forumId Forum ID.
     * @param [D2LID] $topicId Topic ID
     */
    public function deleteDiscussionsForumsTopicsOrgUnitIdForumIdTopicId($version, $orgUnitId, $forumId, $topicId)
    {
        $uri = "/d2l/api/le/$version/$orgUnitId/discussions/forums/$forumId/topics/$topicId";
        return new Request('GET', $uri);
    }


    /**
     * Delete a group restriction for a discussion forum topic.
     * @see https://docs.valence.desire2learn.com/res/discuss.html#delete--d2l-api-le-(version)-(orgUnitId)-discussions-forums-(forumId)-topics-(topicId)-groupRestrictions-
     * @return /PSR7 (Request)
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [D2LID] $forumId Forum ID.
     * @param [D2LID] $topicId Topic ID
     * @param [Discussions.GroupRestriction] $groupRestriction Group you want to remove from the group restriction list.
     */
    public function deleteDiscussionsForumsTopicsGrouprestrictionsOrgUnitIdForumIdTopicId($version, $orgUnitId, $forumId, $topicId, $groupRestriction)
    {
        $uri = "/d2l/api/le/$version/$orgUnitId/discussions/forums/$forumId/topics/$topicId/groupRestrictions/";
        return new Request('GET', $uri);
    }


    /**
     * Retrieve topics from the provided discussion forum in an org unit.
     * @see https://docs.valence.desire2learn.com/res/discuss.html#get--d2l-api-le-(version)-(orgUnitId)-discussions-forums-(forumId)-topics-
     * @return /PSR7 (Request)
     * Return. This action returns a JSON array of Topic
     * data blocks containing the properties for some topics in the indicated
     * discussion forum.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [D2LID] $forumId Forum ID.
     */
    public function getDiscussionsForumsTopicsOrgUnitIdForumId($version, $orgUnitId, $forumId)
    {
        $uri = "/d2l/api/le/$version/$orgUnitId/discussions/forums/$forumId/topics/";
        return new Request('GET', $uri);
    }


    /**
     * Retrieve a particular topic from the provided discussion forum in an org unit.
     * @see https://docs.valence.desire2learn.com/res/discuss.html#get--d2l-api-le-(version)-(orgUnitId)-discussions-forums-(forumId)-topics-(topicId)
     * @return /PSR7 (Request)
     * Return. This action returns a Topic JSON
     * data block containing the properties for the indicated discussion forum topic.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [D2LID] $forumId Forum ID.
     * @param [D2LID] $topicId Topic ID.
     */
    public function getDiscussionsForumsTopicsOrgUnitIdForumIdTopicId($version, $orgUnitId, $forumId, $topicId)
    {
        $uri = "/d2l/api/le/$version/$orgUnitId/discussions/forums/$forumId/topics/$topicId";
        return new Request('GET', $uri);
    }


    /**
     * Retrieve the group restrictions for a discussion forum topic.
     * @see https://docs.valence.desire2learn.com/res/discuss.html#get--d2l-api-le-(version)-(orgUnitId)-discussions-forums-(forumId)-topics-(topicId)-groupRestrictions-
     * @return /PSR7 (Request)
     * Return. This action returns a JSON array of GroupRestriction
     * data blocks indicating all the groups in the topic’s group restriction list.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [D2LID] $forumId Forum ID.
     * @param [D2LID] $topicId Topic ID
     */
    public function getDiscussionsForumsTopicsGrouprestrictionsOrgUnitIdForumIdTopicId($version, $orgUnitId, $forumId, $topicId)
    {
        $uri = "/d2l/api/le/$version/$orgUnitId/discussions/forums/$forumId/topics/$topicId/groupRestrictions/";
        return new Request('GET', $uri);
    }


    /**
     * Create a new topic for the provided discussion forum in an org unit.
     * @see https://docs.valence.desire2learn.com/res/discuss.html#post--d2l-api-le-(version)-(orgUnitId)-discussions-forums-(forumId)-topics-
     * @return /PSR7 (Request)
     * Return. This action returns a Topic JSON
     * data block containing the properties for for the newly created topic.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [D2LID] $forumId Forum ID.
     * @param [Discussions.CreateTopicData] $createTopicData New discussion topic properties.
     */
    public function postDiscussionsForumsTopicsOrgUnitIdForumId($version, $orgUnitId, $forumId, $createTopicData)
    {
        $uri = "/d2l/api/le/$version/$orgUnitId/discussions/forums/$forumId/topics/";
        return new Request('GET', $uri);
    }


    /**
     * Update an existing topic for the provided discussion forum in an org unit.
     * @see https://docs.valence.desire2learn.com/res/discuss.html#put--d2l-api-le-(version)-(orgUnitId)-discussions-forums-(forumId)-topics-(topicId)
     * @return /PSR7 (Request)
     * Return. This action returns a Topic JSON
     * data block containing the properties for the newly updated topic.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [D2LID] $forumId Forum ID.
     * @param [D2LID] $topicId Topic ID
     * @param [Discussions.CreateTopicData] $createTopicData Updated discussion topic properties.
     */
    public function putDiscussionsForumsTopicsOrgUnitIdForumIdTopicId($version, $orgUnitId, $forumId, $topicId, $createTopicData)
    {
        $uri = "/d2l/api/le/$version/$orgUnitId/discussions/forums/$forumId/topics/$topicId";
        return new Request('GET', $uri);
    }


    /**
     * Add a group to the group restriction list for a discussion forum topic.
     * @see https://docs.valence.desire2learn.com/res/discuss.html#put--d2l-api-le-(version)-(orgUnitId)-discussions-forums-(forumId)-topics-(topicId)-groupRestrictions-
     * @return /PSR7 (Request)
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [D2LID] $forumId Forum ID.
     * @param [D2LID] $topicId Topic ID
     * @param [Discussions.GroupRestriction] $groupRestriction Group you want to add to the group restriction list.
     */
    public function putDiscussionsForumsTopicsGrouprestrictionsOrgUnitIdForumIdTopicId($version, $orgUnitId, $forumId, $topicId, $groupRestriction)
    {
        $uri = "/d2l/api/le/$version/$orgUnitId/discussions/forums/$forumId/topics/$topicId/groupRestrictions/";
        return new Request('GET', $uri);
    }


    /**
     * Delete a particular post from a discussion forum topic.
     * @see https://docs.valence.desire2learn.com/res/discuss.html#delete--d2l-api-le-(version)-(orgUnitId)-discussions-forums-(forumId)-topics-(topicId)-posts-(postId)
     * @return /PSR7 (Request)
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [D2LID] $forumId Forum ID.
     * @param [D2LID] $topicId Topic ID.
     * @param [D2LID] $postId Post ID.
     */
    public function deleteDiscussionsForumsTopicsPostsOrgUnitIdForumIdTopicIdPostId($version, $orgUnitId, $forumId, $topicId, $postId)
    {
        $uri = "/d2l/api/le/$version/$orgUnitId/discussions/forums/$forumId/topics/$topicId/posts/$postId";
        return new Request('GET', $uri);
    }


    /**
     * Delete the current user context’s rating for a particular post from a discussion forum topic.
     * @see https://docs.valence.desire2learn.com/res/discuss.html#delete--d2l-api-le-(version)-(orgUnitId)-discussions-forums-(forumId)-topics-(topicId)-posts-(postId)-Rating-MyRating
     * @return /PSR7 (Request)
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [D2LID] $forumId Forum ID.
     * @param [D2LID] $topicId Topic ID.
     * @param [D2LID] $postId Post ID.
     */
    public function deleteDiscussionsForumsTopicsPostsRatingMyratingOrgUnitIdForumIdTopicIdPostId($version, $orgUnitId, $forumId, $topicId, $postId)
    {
        $uri = "/d2l/api/le/$version/$orgUnitId/discussions/forums/$forumId/topics/$topicId/posts/$postId/Rating/MyRating";
        return new Request('GET', $uri);
    }


    /**
     * Retrieve all posts in a discussion forum topic.
     * @see https://docs.valence.desire2learn.com/res/discuss.html#get--d2l-api-le-(version)-(orgUnitId)-discussions-forums-(forumId)-topics-(topicId)-posts-
     * @return /PSR7 (Request)
     * Input. You can control the sorting of results retrieved with this action using the sort
     * query parameter.
     *
     * Return. This action returns a JSON array of Post
     * data blocks containing the properties for all the posts (including threads) in the indicated
     * discussion forum topic that meet the provided optional filters. The data blocks returned
     * here respect the org unit’s privacy settings with respect to the DisplayName
     * properties (typically, the display-name gets formed from the user’s first and
     * last names, and privacy settings govern the visibility of those items).
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [D2LID] $forumId Forum ID.
     * @param [D2LID] $topicId Topic ID
     * @param [integer] $pageSize Optional. Number of topics (maximum) to return in each data page (default, maximum value is 1000).
     * pageSize
     * @param [integer] $pageNumber Optional. Ordinal number for the data page to fetch (default value is 1).
     * pageNumber
     * @param [boolean] $threadsOnly Optional. When true, the service will only return threads (default value is false).
     * threadsOnly
     * @param [string] $sort Optional. Sort by creationdate, rating, votes, upvotes, or threaded (see description).
     * sort
     */
    public function getDiscussionsForumsTopicsPostsOrgUnitIdForumIdTopicId(
        $version,
        $orgUnitId,
        $forumId,
        $topicId,
        $pageSize = null,
        $pageNumber = null,
        $threadsOnly = null,
        $sort = null
    ) {
        $queryParrams = [
                            "pageSize" => $pageSize,                    "pageNumber" => $pageNumber,                    "threadsOnly" => $threadsOnly,                    "sort" => $sort

        ];
        $queryString = http_build_query($queryParrams);
        $uri = "/d2l/api/le/$version/$orgUnitId/discussions/forums/$forumId/topics/$topicId/posts/?$queryString";
        return new Request('GET', $uri);
    }


    /**
     * Retrieve a particular post in a discussion forum topic.
     * @see https://docs.valence.desire2learn.com/res/discuss.html#get--d2l-api-le-(version)-(orgUnitId)-discussions-forums-(forumId)-topics-(topicId)-posts-(postId)
     * @return /PSR7 (Request)
     * Return. This action returns a Post data
     * block containing the properties for the indicated discussion forum post.
     * The data blocks returned here respect the org unit’s privacy settings with
     * respect to the DisplayName properties (typically, the display-name gets
     * formed from the user’s first and last names, and privacy settings govern the
     * visibility of those items).
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [D2LID] $forumId Forum ID.
     * @param [D2LID] $topicId Topic ID.
     * @param [D2LID] $postId Post ID.
     */
    public function getDiscussionsForumsTopicsPostsOrgUnitIdForumIdTopicIdPostId($version, $orgUnitId, $forumId, $topicId, $postId)
    {
        $uri = "/d2l/api/le/$version/$orgUnitId/discussions/forums/$forumId/topics/$topicId/posts/$postId";
        return new Request('GET', $uri);
    }


    /**
     * Retrieve the approval status for a particular post in a discussion forum topic.
     * @see https://docs.valence.desire2learn.com/res/discuss.html#get--d2l-api-le-(version)-(orgUnitId)-discussions-forums-(forumId)-topics-(topicId)-posts-(postId)-Approval
     * @return /PSR7 (Request)
     * Return. This action returns a ApprovalData
     * JSON data block containing the approval status for the indicated discussion
     * forum post.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [D2LID] $forumId Forum ID.
     * @param [D2LID] $topicId Topic ID.
     * @param [D2LID] $postId Post ID.
     */
    public function getDiscussionsForumsTopicsPostsApprovalOrgUnitIdForumIdTopicIdPostId($version, $orgUnitId, $forumId, $topicId, $postId)
    {
        $uri = "/d2l/api/le/$version/$orgUnitId/discussions/forums/$forumId/topics/$topicId/posts/$postId/Approval";
        return new Request('GET', $uri);
    }


    /**
     * Retrieve the flagged status for a particular post in a discussion forum topic.
     * @see https://docs.valence.desire2learn.com/res/discuss.html#get--d2l-api-le-(version)-(orgUnitId)-discussions-forums-(forumId)-topics-(topicId)-posts-(postId)-Flag
     * @return /PSR7 (Request)
     * Return. This action returns a FlagData
     * JSON data block containing the flagged status for the indicated discussion
     * forum post.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [D2LID] $forumId Forum ID.
     * @param [D2LID] $topicId Topic ID.
     * @param [D2LID] $postId Post ID.
     */
    public function getDiscussionsForumsTopicsPostsFlagOrgUnitIdForumIdTopicIdPostId($version, $orgUnitId, $forumId, $topicId, $postId)
    {
        $uri = "/d2l/api/le/$version/$orgUnitId/discussions/forums/$forumId/topics/$topicId/posts/$postId/Flag";
        return new Request('GET', $uri);
    }


    /**
     * Retrieve the rating data for a particular post in a discussion forum topic.
     * @see https://docs.valence.desire2learn.com/res/discuss.html#get--d2l-api-le-(version)-(orgUnitId)-discussions-forums-(forumId)-topics-(topicId)-posts-(postId)-Rating
     * @return /PSR7 (Request)
     * Return. This action returns a RatingData
     * JSON data block containing current rating data for the indicated discussion
     * forum post.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [D2LID] $forumId Forum ID.
     * @param [D2LID] $topicId Topic ID.
     * @param [D2LID] $postId Post ID.
     */
    public function getDiscussionsForumsTopicsPostsRatingOrgUnitIdForumIdTopicIdPostId($version, $orgUnitId, $forumId, $topicId, $postId)
    {
        $uri = "/d2l/api/le/$version/$orgUnitId/discussions/forums/$forumId/topics/$topicId/posts/$postId/Rating";
        return new Request('GET', $uri);
    }


    /**
     * Retrieve the current user context’s rating data for a particular post in a
     * discussion forum topic.
     * @see https://docs.valence.desire2learn.com/res/discuss.html#get--d2l-api-le-(version)-(orgUnitId)-discussions-forums-(forumId)-topics-(topicId)-posts-(postId)-Rating-MyRating
     * @return /PSR7 (Request)
     * Return. This action returns a UserRatingData
     * JSON data block containing the current user’s rating data for the indicated
     * discussion form post.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [D2LID] $forumId Forum ID.
     * @param [D2LID] $topicId Topic ID.
     * @param [D2LID] $postId Post ID.
     */
    public function getDiscussionsForumsTopicsPostsRatingMyratingOrgUnitIdForumIdTopicIdPostId($version, $orgUnitId, $forumId, $topicId, $postId)
    {
        $uri = "/d2l/api/le/$version/$orgUnitId/discussions/forums/$forumId/topics/$topicId/posts/$postId/Rating/MyRating";
        return new Request('GET', $uri);
    }


    /**
     * Retrieve the current read status for a particular post in a discussion forum topic.
     * @see https://docs.valence.desire2learn.com/res/discuss.html#get--d2l-api-le-(version)-(orgUnitId)-discussions-forums-(forumId)-topics-(topicId)-posts-(postId)-ReadStatus
     * @return /PSR7 (Request)
     * Return. This action returns a ReadStatusData
     * JSON data block containing the read status for the indicated discussion forum post.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [D2LID] $forumId Forum ID.
     * @param [D2LID] $topicId Topic ID.
     * @param [D2LID] $postId Post ID.
     */
    public function getDiscussionsForumsTopicsPostsReadstatusOrgUnitIdForumIdTopicIdPostId($version, $orgUnitId, $forumId, $topicId, $postId)
    {
        $uri = "/d2l/api/le/$version/$orgUnitId/discussions/forums/$forumId/topics/$topicId/posts/$postId/ReadStatus";
        return new Request('GET', $uri);
    }


    /**
     * Retrieve all the vote data for a particular post in a discussion forum topic.
     * @see https://docs.valence.desire2learn.com/res/discuss.html#get--d2l-api-le-(version)-(orgUnitId)-discussions-forums-(forumId)-topics-(topicId)-posts-(postId)-Votes
     * @return /PSR7 (Request)
     * Return. This action returns a VotesData
     * JSON data block containing the vote data for the indicated discussion forum post.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [D2LID] $forumId Forum ID.
     * @param [D2LID] $topicId Topic ID.
     * @param [D2LID] $postId Post ID.
     */
    public function getDiscussionsForumsTopicsPostsVotesOrgUnitIdForumIdTopicIdPostId($version, $orgUnitId, $forumId, $topicId, $postId)
    {
        $uri = "/d2l/api/le/$version/$orgUnitId/discussions/forums/$forumId/topics/$topicId/posts/$postId/Votes";
        return new Request('GET', $uri);
    }


    /**
     * Retrieve the current user’s vote data for a particular post in a discussion
     * forum topic.
     * @see https://docs.valence.desire2learn.com/res/discuss.html#get--d2l-api-le-(version)-(orgUnitId)-discussions-forums-(forumId)-topics-(topicId)-posts-(postId)-Votes-MyVote
     * @return /PSR7 (Request)
     * Return. This action returns a UserVoteData
     * JSON data block containing the current user’s vote data for the indicated
     * discussion forum post.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [D2LID] $forumId Forum ID.
     * @param [D2LID] $topicId Topic ID.
     * @param [D2LID] $postId Post ID.
     */
    public function getDiscussionsForumsTopicsPostsVotesMyvoteOrgUnitIdForumIdTopicIdPostId($version, $orgUnitId, $forumId, $topicId, $postId)
    {
        $uri = "/d2l/api/le/$version/$orgUnitId/discussions/forums/$forumId/topics/$topicId/posts/$postId/Votes/MyVote";
        return new Request('GET', $uri);
    }


    /**
     * Create a new post in a discussion forum topic.
     * @see https://docs.valence.desire2learn.com/res/discuss.html#post--d2l-api-le-(version)-(orgUnitId)-discussions-forums-(forumId)-topics-(topicId)-posts-
     * @return /PSR7 (Request)
     * Input. You can use this action in two ways:
     *
     * Return. This action returns a Post JSON data
     * block containing the properties for the newly created discussion forum post.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [D2LID] $forumId Forum ID.
     * @param [D2LID] $topicId Topic ID
     * @param [Discussions.CreatePostData] $createPostData New post data, but usage varies (see input description).
     */
    public function postDiscussionsForumsTopicsPostsOrgUnitIdForumIdTopicId($version, $orgUnitId, $forumId, $topicId, $createPostData)
    {
        $uri = "/d2l/api/le/$version/$orgUnitId/discussions/forums/$forumId/topics/$topicId/posts/";
        return new Request('GET', $uri);
    }


    /**
     * Update a particular post in a discussion forum topic.
     * @see https://docs.valence.desire2learn.com/res/discuss.html#put--d2l-api-le-(version)-(orgUnitId)-discussions-forums-(forumId)-topics-(topicId)-posts-(postId)
     * @return /PSR7 (Request)
     * Input. The action’s body should be a multipart with a single part consisting
     * of a UpdatePostData JSON data block to
     * provide the post’s updated subject and/or message.
     *
     * Return. This action returns a Post JSON data
     * block containing the properties for the newly updated discussion forum post.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [D2LID] $forumId Forum ID.
     * @param [D2LID] $topicId Topic ID.
     * @param [D2LID] $postId Post ID.
     * @param [Discussions.UpdatePostData] $updatePostData Multipart containing updated post’s data (see input description).
     */
    public function putDiscussionsForumsTopicsPostsOrgUnitIdForumIdTopicIdPostId($version, $orgUnitId, $forumId, $topicId, $postId, $updatePostData)
    {
        $uri = "/d2l/api/le/$version/$orgUnitId/discussions/forums/$forumId/topics/$topicId/posts/$postId";
        return new Request('GET', $uri);
    }


    /**
     * Update the approval status of a particular post in a discussion forum topic.
     * @see https://docs.valence.desire2learn.com/res/discuss.html#put--d2l-api-le-(version)-(orgUnitId)-discussions-forums-(forumId)-topics-(topicId)-posts-(postId)-Approval
     * @return /PSR7 (Request)
     * Return. This action returns a ApprovalData
     * JSON data block containing the new approval status for the indicated discussion
     * forum post.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [D2LID] $forumId Forum ID.
     * @param [D2LID] $topicId Topic ID.
     * @param [D2LID] $postId Post ID.
     * @param [Discussions.ApprovalData] $approvalData New approval status for the post.
     */
    public function putDiscussionsForumsTopicsPostsApprovalOrgUnitIdForumIdTopicIdPostId($version, $orgUnitId, $forumId, $topicId, $postId, $approvalData)
    {
        $uri = "/d2l/api/le/$version/$orgUnitId/discussions/forums/$forumId/topics/$topicId/posts/$postId/Approval";
        return new Request('GET', $uri);
    }


    /**
     * Update the flagged status of a particular post in a discussion forum topic.
     * @see https://docs.valence.desire2learn.com/res/discuss.html#put--d2l-api-le-(version)-(orgUnitId)-discussions-forums-(forumId)-topics-(topicId)-posts-(postId)-Flag
     * @return /PSR7 (Request)
     * Return. This action returns a FlagData
     * JSON data block containing the new flagged status for the indicated
     * discussion forum post.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [D2LID] $forumId Forum ID.
     * @param [D2LID] $topicId Topic ID.
     * @param [D2LID] $postId Post ID.
     * @param [Discussions.FlagData] $flagData New flag status for the post.
     */
    public function putDiscussionsForumsTopicsPostsFlagOrgUnitIdForumIdTopicIdPostId($version, $orgUnitId, $forumId, $topicId, $postId, $flagData)
    {
        $uri = "/d2l/api/le/$version/$orgUnitId/discussions/forums/$forumId/topics/$topicId/posts/$postId/Flag";
        return new Request('GET', $uri);
    }


    /**
     * Update the current user context’s rating for a particular post in a discussion forum topic.
     * @see https://docs.valence.desire2learn.com/res/discuss.html#put--d2l-api-le-(version)-(orgUnitId)-discussions-forums-(forumId)-topics-(topicId)-posts-(postId)-Rating-MyRating
     * @return /PSR7 (Request)
     * Input. If your provided new user rating contains a valid rating value, it
     * replaces the current user’s rating for the post.
     *
     * Return. This action returns a UserRatingData
     * JSON data block containing the current user’s updated rating for the
     * indicated discussion forum post.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [D2LID] $forumId Forum ID.
     * @param [D2LID] $topicId Topic ID.
     * @param [D2LID] $postId Post ID.
     * @param [Discussions.UserRatingData] $userRatingData New user rating for the post.
     */
    public function putDiscussionsForumsTopicsPostsRatingMyratingOrgUnitIdForumIdTopicIdPostId($version, $orgUnitId, $forumId, $topicId, $postId, $userRatingData)
    {
        $uri = "/d2l/api/le/$version/$orgUnitId/discussions/forums/$forumId/topics/$topicId/posts/$postId/Rating/MyRating";
        return new Request('GET', $uri);
    }


    /**
     * Update the read status of a particular post in a discussion forum topic.
     * @see https://docs.valence.desire2learn.com/res/discuss.html#put--d2l-api-le-(version)-(orgUnitId)-discussions-forums-(forumId)-topics-(topicId)-posts-(postId)-ReadStatus
     * @return /PSR7 (Request)
     * Return. This action returns a ReadStatusData
     * JSON data block containing the new read status for the indicated discussion
     * forum topic.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [D2LID] $forumId Forum ID.
     * @param [D2LID] $topicId Topic ID.
     * @param [D2LID] $postId Post ID.
     * @param [Discussions.ReadStatusData] $readStatusData New read status for the post.
     */
    public function putDiscussionsForumsTopicsPostsReadstatusOrgUnitIdForumIdTopicIdPostId($version, $orgUnitId, $forumId, $topicId, $postId, $readStatusData)
    {
        $uri = "/d2l/api/le/$version/$orgUnitId/discussions/forums/$forumId/topics/$topicId/posts/$postId/ReadStatus";
        return new Request('GET', $uri);
    }


    /**
     * Update a discussion forum topic post’s vote data for the current user.
     * @see https://docs.valence.desire2learn.com/res/discuss.html#put--d2l-api-le-(version)-(orgUnitId)-discussions-forums-(forumId)-topics-(topicId)-posts-(postId)-Votes-MyVote
     * @return /PSR7 (Request)
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [D2LID] $forumId Forum ID.
     * @param [D2LID] $topicId Topic ID.
     * @param [D2LID] $postId Post ID.
     * @param [Discussions.UserVoteData] $userVoteData New vote data for the post.
     */
    public function putDiscussionsForumsTopicsPostsVotesMyvoteOrgUnitIdForumIdTopicIdPostId($version, $orgUnitId, $forumId, $topicId, $postId, $userVoteData)
    {
        $uri = "/d2l/api/le/$version/$orgUnitId/discussions/forums/$forumId/topics/$topicId/posts/$postId/Votes/MyVote";
        return new Request('GET', $uri);
    }
}

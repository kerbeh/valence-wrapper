<?php
namespace ValenceWrapper\Service;
use ValenceWrapper\Model\BaseValenceModel;
use ValenceWrapper\Model\Basic\UtcDateTime;
use ValenceWrapper\Model\Basic\RichText;
/**
 * Discussions (forums, topics, posts) — Developer Platform (August 2019)
 * @see https://docs.valence.desire2learn.com/res/discuss.html
 */
class Discussions
{
	/**
	 * Delete a particular discussion forum from an org unit.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $orgUnitId Org unit ID.
	 * @see https://docs.valence.desire2learn.com/res/discuss.html#delete--d2l-api-le-(version)-(orgUnitId)-discussions-forums-(forumId)
	 * @return /PSR7 (Request)
	 */
	public function deleteDiscussionsForums($version, $orgUnitId)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/$orgUnitId/discussions/forums/$forumId", 'DELETE');
		return new Request('GET', $uri);
	}


	/**
	 * Retrieve a particular discussion forum for an org unit.
	 *
	 * Return. This action returns a Forum data
	 * block for the indicated discussion forum.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $orgUnitId Org unit ID.
	 * @see https://docs.valence.desire2learn.com/res/discuss.html#get--d2l-api-le-(version)-(orgUnitId)-discussions-forums-(forumId)
	 * @return /PSR7 (Request)
	 */
	public function getDiscussionsForums($version, $orgUnitId)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/$orgUnitId/discussions/forums/$forumId", 'GET');
		return new Request('GET', $uri);
	}


	/**
	 * Create a new forum for an org unit.
	 *
	 * Return. This action returns a Forum JSON
	 * block containing the properties for the newly created discussion forum.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $orgUnitId Org unit ID.
	 * @param [Discussions.ForumData] $forumData New discussion forum properties.
	 * @see https://docs.valence.desire2learn.com/res/discuss.html#post--d2l-api-le-(version)-(orgUnitId)-discussions-forums-
	 * @return /PSR7 (Request)
	 */
	public function postDiscussionsForums($version, $orgUnitId, $forumData)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/$orgUnitId/discussions/forums/", 'POST');
		return new Request('GET', $uri);
	}


	/**
	 * Update a forum for an org unit.
	 *
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
	 * @see https://docs.valence.desire2learn.com/res/discuss.html#put--d2l-api-le-(version)-(orgUnitId)-discussions-forums-(forumId)
	 * @return /PSR7 (Request)
	 */
	public function putDiscussionsForums($version, $orgUnitId, $forumData)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/$orgUnitId/discussions/forums/$forumId", 'PUT');
		return new Request('GET', $uri);
	}


	/**
	 * Delete a particular topic from the provided discussion forum in an org unit.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $orgUnitId Org unit ID.
	 * @param [D2LID] $forumId Forum ID.
	 * @param [D2LID] $topicId Topic ID
	 * @see https://docs.valence.desire2learn.com/res/discuss.html#delete--d2l-api-le-(version)-(orgUnitId)-discussions-forums-(forumId)-topics-(topicId)
	 * @return /PSR7 (Request)
	 */
	public function deleteDiscussionsForumsTopics($version, $orgUnitId, $forumId, $topicId)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/$orgUnitId/discussions/forums/$forumId/topics/$topicId", 'DELETE');
		return new Request('GET', $uri);
	}


	/**
	 * Delete a group restriction for a discussion forum topic.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $orgUnitId Org unit ID.
	 * @param [D2LID] $forumId Forum ID.
	 * @param [D2LID] $topicId Topic ID
	 * @param [Discussions.GroupRestriction] $groupRestriction Group you want to remove from the group restriction list.
	 * @see https://docs.valence.desire2learn.com/res/discuss.html#delete--d2l-api-le-(version)-(orgUnitId)-discussions-forums-(forumId)-topics-(topicId)-groupRestrictions-
	 * @return /PSR7 (Request)
	 */
	public function deleteDiscussionsForumsTopicsGrouprestrictions($version, $orgUnitId, $forumId, $topicId, $groupRestriction)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/$orgUnitId/discussions/forums/$forumId/topics/$topicId/groupRestrictions/", 'DELETE');
		return new Request('GET', $uri);
	}


	/**
	 * Retrieve a particular topic from the provided discussion forum in an org unit.
	 *
	 * Return. This action returns a Topic JSON
	 * data block containing the properties for the indicated discussion forum topic.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $orgUnitId Org unit ID.
	 * @param [D2LID] $forumId Forum ID.
	 * @param [D2LID] $topicId Topic ID.
	 * @see https://docs.valence.desire2learn.com/res/discuss.html#get--d2l-api-le-(version)-(orgUnitId)-discussions-forums-(forumId)-topics-(topicId)
	 * @return /PSR7 (Request)
	 */
	public function getDiscussionsForumsTopics($version, $orgUnitId, $forumId, $topicId)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/$orgUnitId/discussions/forums/$forumId/topics/$topicId", 'GET');
		return new Request('GET', $uri);
	}


	/**
	 * Retrieve the group restrictions for a discussion forum topic.
	 *
	 * Return. This action returns a JSON array of GroupRestriction
	 * data blocks indicating all the groups in the topic’s group restriction list.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $orgUnitId Org unit ID.
	 * @param [D2LID] $forumId Forum ID.
	 * @param [D2LID] $topicId Topic ID
	 * @see https://docs.valence.desire2learn.com/res/discuss.html#get--d2l-api-le-(version)-(orgUnitId)-discussions-forums-(forumId)-topics-(topicId)-groupRestrictions-
	 * @return /PSR7 (Request)
	 */
	public function getDiscussionsForumsTopicsGrouprestrictions($version, $orgUnitId, $forumId, $topicId)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/$orgUnitId/discussions/forums/$forumId/topics/$topicId/groupRestrictions/", 'GET');
		return new Request('GET', $uri);
	}


	/**
	 * Create a new topic for the provided discussion forum in an org unit.
	 *
	 * Return. This action returns a Topic JSON
	 * data block containing the properties for for the newly created topic.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $orgUnitId Org unit ID.
	 * @param [D2LID] $forumId Forum ID.
	 * @param [Discussions.CreateTopicData] $createTopicData New discussion topic properties.
	 * @see https://docs.valence.desire2learn.com/res/discuss.html#post--d2l-api-le-(version)-(orgUnitId)-discussions-forums-(forumId)-topics-
	 * @return /PSR7 (Request)
	 */
	public function postDiscussionsForumsTopics($version, $orgUnitId, $forumId, $createTopicData)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/$orgUnitId/discussions/forums/$forumId/topics/", 'POST');
		return new Request('GET', $uri);
	}


	/**
	 * Update an existing topic for the provided discussion forum in an org unit.
	 *
	 * Return. This action returns a Topic JSON
	 * data block containing the properties for the newly updated topic.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $orgUnitId Org unit ID.
	 * @param [D2LID] $forumId Forum ID.
	 * @param [D2LID] $topicId Topic ID
	 * @param [Discussions.CreateTopicData] $createTopicData Updated discussion topic properties.
	 * @see https://docs.valence.desire2learn.com/res/discuss.html#put--d2l-api-le-(version)-(orgUnitId)-discussions-forums-(forumId)-topics-(topicId)
	 * @return /PSR7 (Request)
	 */
	public function putDiscussionsForumsTopics($version, $orgUnitId, $forumId, $topicId, $createTopicData)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/$orgUnitId/discussions/forums/$forumId/topics/$topicId", 'PUT');
		return new Request('GET', $uri);
	}


	/**
	 * Add a group to the group restriction list for a discussion forum topic.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $orgUnitId Org unit ID.
	 * @param [D2LID] $forumId Forum ID.
	 * @param [D2LID] $topicId Topic ID
	 * @param [Discussions.GroupRestriction] $groupRestriction Group you want to add to the group restriction list.
	 * @see https://docs.valence.desire2learn.com/res/discuss.html#put--d2l-api-le-(version)-(orgUnitId)-discussions-forums-(forumId)-topics-(topicId)-groupRestrictions-
	 * @return /PSR7 (Request)
	 */
	public function putDiscussionsForumsTopicsGrouprestrictions($version, $orgUnitId, $forumId, $topicId, $groupRestriction)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/$orgUnitId/discussions/forums/$forumId/topics/$topicId/groupRestrictions/", 'PUT');
		return new Request('GET', $uri);
	}


	/**
	 * Delete a particular post from a discussion forum topic.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $orgUnitId Org unit ID.
	 * @param [D2LID] $forumId Forum ID.
	 * @param [D2LID] $topicId Topic ID.
	 * @param [D2LID] $postId Post ID.
	 * @see https://docs.valence.desire2learn.com/res/discuss.html#delete--d2l-api-le-(version)-(orgUnitId)-discussions-forums-(forumId)-topics-(topicId)-posts-(postId)
	 * @return /PSR7 (Request)
	 */
	public function deleteDiscussionsForumsTopicsPosts($version, $orgUnitId, $forumId, $topicId, $postId)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/$orgUnitId/discussions/forums/$forumId/topics/$topicId/posts/$postId", 'DELETE');
		return new Request('GET', $uri);
	}


	/**
	 * Delete the current user context’s rating for a particular post from a discussion forum topic.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $orgUnitId Org unit ID.
	 * @param [D2LID] $forumId Forum ID.
	 * @param [D2LID] $topicId Topic ID.
	 * @param [D2LID] $postId Post ID.
	 * @see https://docs.valence.desire2learn.com/res/discuss.html#delete--d2l-api-le-(version)-(orgUnitId)-discussions-forums-(forumId)-topics-(topicId)-posts-(postId)-Rating-MyRating
	 * @return /PSR7 (Request)
	 */
	public function deleteDiscussionsForumsTopicsPostsRatingMyrating($version, $orgUnitId, $forumId, $topicId, $postId)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/$orgUnitId/discussions/forums/$forumId/topics/$topicId/posts/$postId/Rating/MyRating", 'DELETE');
		return new Request('GET', $uri);
	}


	/**
	 * Retrieve a particular post in a discussion forum topic.
	 *
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
	 * @see https://docs.valence.desire2learn.com/res/discuss.html#get--d2l-api-le-(version)-(orgUnitId)-discussions-forums-(forumId)-topics-(topicId)-posts-(postId)
	 * @return /PSR7 (Request)
	 */
	public function getDiscussionsForumsTopicsPosts($version, $orgUnitId, $forumId, $topicId, $postId)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/$orgUnitId/discussions/forums/$forumId/topics/$topicId/posts/$postId", 'GET');
		return new Request('GET', $uri);
	}


	/**
	 * Retrieve the approval status for a particular post in a discussion forum topic.
	 *
	 * Return. This action returns a ApprovalData
	 * JSON data block containing the approval status for the indicated discussion
	 * forum post.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $orgUnitId Org unit ID.
	 * @param [D2LID] $forumId Forum ID.
	 * @param [D2LID] $topicId Topic ID.
	 * @param [D2LID] $postId Post ID.
	 * @see https://docs.valence.desire2learn.com/res/discuss.html#get--d2l-api-le-(version)-(orgUnitId)-discussions-forums-(forumId)-topics-(topicId)-posts-(postId)-Approval
	 * @return /PSR7 (Request)
	 */
	public function getDiscussionsForumsTopicsPostsApproval($version, $orgUnitId, $forumId, $topicId, $postId)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/$orgUnitId/discussions/forums/$forumId/topics/$topicId/posts/$postId/Approval", 'GET');
		return new Request('GET', $uri);
	}


	/**
	 * Retrieve the flagged status for a particular post in a discussion forum topic.
	 *
	 * Return. This action returns a FlagData
	 * JSON data block containing the flagged status for the indicated discussion
	 * forum post.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $orgUnitId Org unit ID.
	 * @param [D2LID] $forumId Forum ID.
	 * @param [D2LID] $topicId Topic ID.
	 * @param [D2LID] $postId Post ID.
	 * @see https://docs.valence.desire2learn.com/res/discuss.html#get--d2l-api-le-(version)-(orgUnitId)-discussions-forums-(forumId)-topics-(topicId)-posts-(postId)-Flag
	 * @return /PSR7 (Request)
	 */
	public function getDiscussionsForumsTopicsPostsFlag($version, $orgUnitId, $forumId, $topicId, $postId)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/$orgUnitId/discussions/forums/$forumId/topics/$topicId/posts/$postId/Flag", 'GET');
		return new Request('GET', $uri);
	}


	/**
	 * Retrieve the rating data for a particular post in a discussion forum topic.
	 *
	 * Return. This action returns a RatingData
	 * JSON data block containing current rating data for the indicated discussion
	 * forum post.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $orgUnitId Org unit ID.
	 * @param [D2LID] $forumId Forum ID.
	 * @param [D2LID] $topicId Topic ID.
	 * @param [D2LID] $postId Post ID.
	 * @see https://docs.valence.desire2learn.com/res/discuss.html#get--d2l-api-le-(version)-(orgUnitId)-discussions-forums-(forumId)-topics-(topicId)-posts-(postId)-Rating
	 * @return /PSR7 (Request)
	 */
	public function getDiscussionsForumsTopicsPostsRating($version, $orgUnitId, $forumId, $topicId, $postId)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/$orgUnitId/discussions/forums/$forumId/topics/$topicId/posts/$postId/Rating", 'GET');
		return new Request('GET', $uri);
	}


	/**
	 * Retrieve the current user context’s rating data for a particular post in a
	 * discussion forum topic.
	 *
	 * Return. This action returns a UserRatingData
	 * JSON data block containing the current user’s rating data for the indicated
	 * discussion form post.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $orgUnitId Org unit ID.
	 * @param [D2LID] $forumId Forum ID.
	 * @param [D2LID] $topicId Topic ID.
	 * @param [D2LID] $postId Post ID.
	 * @see https://docs.valence.desire2learn.com/res/discuss.html#get--d2l-api-le-(version)-(orgUnitId)-discussions-forums-(forumId)-topics-(topicId)-posts-(postId)-Rating-MyRating
	 * @return /PSR7 (Request)
	 */
	public function getDiscussionsForumsTopicsPostsRatingMyrating($version, $orgUnitId, $forumId, $topicId, $postId)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/$orgUnitId/discussions/forums/$forumId/topics/$topicId/posts/$postId/Rating/MyRating", 'GET');
		return new Request('GET', $uri);
	}


	/**
	 * Retrieve the current read status for a particular post in a discussion forum topic.
	 *
	 * Return. This action returns a ReadStatusData
	 * JSON data block containing the read status for the indicated discussion forum post.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $orgUnitId Org unit ID.
	 * @param [D2LID] $forumId Forum ID.
	 * @param [D2LID] $topicId Topic ID.
	 * @param [D2LID] $postId Post ID.
	 * @see https://docs.valence.desire2learn.com/res/discuss.html#get--d2l-api-le-(version)-(orgUnitId)-discussions-forums-(forumId)-topics-(topicId)-posts-(postId)-ReadStatus
	 * @return /PSR7 (Request)
	 */
	public function getDiscussionsForumsTopicsPostsReadstatus($version, $orgUnitId, $forumId, $topicId, $postId)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/$orgUnitId/discussions/forums/$forumId/topics/$topicId/posts/$postId/ReadStatus", 'GET');
		return new Request('GET', $uri);
	}


	/**
	 * Retrieve all the vote data for a particular post in a discussion forum topic.
	 *
	 * Return. This action returns a VotesData
	 * JSON data block containing the vote data for the indicated discussion forum post.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $orgUnitId Org unit ID.
	 * @param [D2LID] $forumId Forum ID.
	 * @param [D2LID] $topicId Topic ID.
	 * @param [D2LID] $postId Post ID.
	 * @see https://docs.valence.desire2learn.com/res/discuss.html#get--d2l-api-le-(version)-(orgUnitId)-discussions-forums-(forumId)-topics-(topicId)-posts-(postId)-Votes
	 * @return /PSR7 (Request)
	 */
	public function getDiscussionsForumsTopicsPostsVotes($version, $orgUnitId, $forumId, $topicId, $postId)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/$orgUnitId/discussions/forums/$forumId/topics/$topicId/posts/$postId/Votes", 'GET');
		return new Request('GET', $uri);
	}


	/**
	 * Retrieve the current user’s vote data for a particular post in a discussion
	 * forum topic.
	 *
	 * Return. This action returns a UserVoteData
	 * JSON data block containing the current user’s vote data for the indicated
	 * discussion forum post.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $orgUnitId Org unit ID.
	 * @param [D2LID] $forumId Forum ID.
	 * @param [D2LID] $topicId Topic ID.
	 * @param [D2LID] $postId Post ID.
	 * @see https://docs.valence.desire2learn.com/res/discuss.html#get--d2l-api-le-(version)-(orgUnitId)-discussions-forums-(forumId)-topics-(topicId)-posts-(postId)-Votes-MyVote
	 * @return /PSR7 (Request)
	 */
	public function getDiscussionsForumsTopicsPostsVotesMyvote($version, $orgUnitId, $forumId, $topicId, $postId)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/$orgUnitId/discussions/forums/$forumId/topics/$topicId/posts/$postId/Votes/MyVote", 'GET');
		return new Request('GET', $uri);
	}


	/**
	 * Create a new post in a discussion forum topic.
	 *
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
	 * @see https://docs.valence.desire2learn.com/res/discuss.html#post--d2l-api-le-(version)-(orgUnitId)-discussions-forums-(forumId)-topics-(topicId)-posts-
	 * @return /PSR7 (Request)
	 */
	public function postDiscussionsForumsTopicsPosts($version, $orgUnitId, $forumId, $topicId, $createPostData)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/$orgUnitId/discussions/forums/$forumId/topics/$topicId/posts/", 'POST');
		return new Request('GET', $uri);
	}


	/**
	 * Update a particular post in a discussion forum topic.
	 *
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
	 * @see https://docs.valence.desire2learn.com/res/discuss.html#put--d2l-api-le-(version)-(orgUnitId)-discussions-forums-(forumId)-topics-(topicId)-posts-(postId)
	 * @return /PSR7 (Request)
	 */
	public function putDiscussionsForumsTopicsPosts($version, $orgUnitId, $forumId, $topicId, $postId, $updatePostData)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/$orgUnitId/discussions/forums/$forumId/topics/$topicId/posts/$postId", 'PUT');
		return new Request('GET', $uri);
	}


	/**
	 * Update the approval status of a particular post in a discussion forum topic.
	 *
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
	 * @see https://docs.valence.desire2learn.com/res/discuss.html#put--d2l-api-le-(version)-(orgUnitId)-discussions-forums-(forumId)-topics-(topicId)-posts-(postId)-Approval
	 * @return /PSR7 (Request)
	 */
	public function putDiscussionsForumsTopicsPostsApproval($version, $orgUnitId, $forumId, $topicId, $postId, $approvalData)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/$orgUnitId/discussions/forums/$forumId/topics/$topicId/posts/$postId/Approval", 'PUT');
		return new Request('GET', $uri);
	}


	/**
	 * Update the flagged status of a particular post in a discussion forum topic.
	 *
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
	 * @see https://docs.valence.desire2learn.com/res/discuss.html#put--d2l-api-le-(version)-(orgUnitId)-discussions-forums-(forumId)-topics-(topicId)-posts-(postId)-Flag
	 * @return /PSR7 (Request)
	 */
	public function putDiscussionsForumsTopicsPostsFlag($version, $orgUnitId, $forumId, $topicId, $postId, $flagData)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/$orgUnitId/discussions/forums/$forumId/topics/$topicId/posts/$postId/Flag", 'PUT');
		return new Request('GET', $uri);
	}


	/**
	 * Update the current user context’s rating for a particular post in a discussion forum topic.
	 *
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
	 * @see https://docs.valence.desire2learn.com/res/discuss.html#put--d2l-api-le-(version)-(orgUnitId)-discussions-forums-(forumId)-topics-(topicId)-posts-(postId)-Rating-MyRating
	 * @return /PSR7 (Request)
	 */
	public function putDiscussionsForumsTopicsPostsRatingMyrating($version, $orgUnitId, $forumId, $topicId, $postId, $userRatingData)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/$orgUnitId/discussions/forums/$forumId/topics/$topicId/posts/$postId/Rating/MyRating", 'PUT');
		return new Request('GET', $uri);
	}


	/**
	 * Update the read status of a particular post in a discussion forum topic.
	 *
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
	 * @see https://docs.valence.desire2learn.com/res/discuss.html#put--d2l-api-le-(version)-(orgUnitId)-discussions-forums-(forumId)-topics-(topicId)-posts-(postId)-ReadStatus
	 * @return /PSR7 (Request)
	 */
	public function putDiscussionsForumsTopicsPostsReadstatus($version, $orgUnitId, $forumId, $topicId, $postId, $readStatusData)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/$orgUnitId/discussions/forums/$forumId/topics/$topicId/posts/$postId/ReadStatus", 'PUT');
		return new Request('GET', $uri);
	}


	/**
	 * Update a discussion forum topic post’s vote data for the current user.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $orgUnitId Org unit ID.
	 * @param [D2LID] $forumId Forum ID.
	 * @param [D2LID] $topicId Topic ID.
	 * @param [D2LID] $postId Post ID.
	 * @param [Discussions.UserVoteData] $userVoteData New vote data for the post.
	 * @see https://docs.valence.desire2learn.com/res/discuss.html#put--d2l-api-le-(version)-(orgUnitId)-discussions-forums-(forumId)-topics-(topicId)-posts-(postId)-Votes-MyVote
	 * @return /PSR7 (Request)
	 */
	public function putDiscussionsForumsTopicsPostsVotesMyvote($version, $orgUnitId, $forumId, $topicId, $postId, $userVoteData)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/$orgUnitId/discussions/forums/$forumId/topics/$topicId/posts/$postId/Votes/MyVote", 'PUT');
		return new Request('GET', $uri);
	}
}

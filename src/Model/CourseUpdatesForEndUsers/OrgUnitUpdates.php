<?php
namespace ValenceWrapper\Model\OrgUnitUpdates;

use ValenceWrapper\Model\BaseValenceModel;
use ValenceWrapper\Model\Basic\UtcDateTime;
use ValenceWrapper\Model\Basic\RichText;

/**
 * Description
 * @see https://docs.valence.desire2learn.com#Updates.OrgUnitUpdates
 * Number of discussions the calling user is responsible for
 * reading but has not yet read.
 *
 * Number of discussions the calling user is responsible for
 * approving but has not yet approved.
 *
 * Number of assignment submissions that have new feedback waiting for
 * the user to review.
 *
 * Number of quizzes the calling user must attempt but has not yet
 * attempted.
 *
 * Number of new assignment submissions waiting for the user to review.
 *
 * Number of quizzes the calling user is responsible for grading but has
 * not yet graded.
 */
class OrgUnitUpdates
{
    /**
     * @param OrgUnitId
     * @type <string:D2LID>
     */
    private $OrgUnitId;

    /**
     * @param UserId
     * @type <string:D2LID>
     */
    private $UserId;

    /**
     * @param UnreadDiscussions
     * @type <number>
     */
    private $UnreadDiscussions;

    /**
     * @param UnapprovedDiscussions
     * @type <number>
     */
    private $UnapprovedDiscussions;

    /**
     * @param UnreadAssignmentFeedback
     * @type <number>
     */
    private $UnreadAssignmentFeedback;

    /**
     * @param UnattemptedQuizzes
     * @type <number>
     */
    private $UnattemptedQuizzes;

    /**
     * @param UnreadAssignmentSubmissions
     * @type <number>
     */
    private $UnreadAssignmentSubmissions;

    /**
     * @param UngradedQuizzes
     * @type <number>
     */
    private $UngradedQuizzes;


    /**
     * Constructor for OrgUnitUpdates
     */
    public function __construct(array $attributes = [])
    {
        $this->OrgUnitId = $attributes["OrgUnitId"];
        $this->UserId = $attributes["UserId"];
        $this->UnreadDiscussions = $attributes["UnreadDiscussions"];
        $this->UnapprovedDiscussions = $attributes["UnapprovedDiscussions"];
        $this->UnreadAssignmentFeedback = $attributes["UnreadAssignmentFeedback"];
        $this->UnattemptedQuizzes = $attributes["UnattemptedQuizzes"];
        $this->UnreadAssignmentSubmissions = $attributes["UnreadAssignmentSubmissions"];
        $this->UngradedQuizzes = $attributes["UngradedQuizzes"];
    }
}

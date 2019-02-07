<?php

namespace ValenceWrapper\Model\Dropbox;

use ValenceWrapper\Model\BaseValenceModel;
use ValenceWrapper\Model\Basic\UtcDateTime;
use ValenceWrapper\Model\Basic\RichText;
use ValenceWrapper\Model\Assessment\Rubric;

/**
 * Description of GradeObjectCategoryData
 *
 * @url https://docs.valence.desire2learn.com/res/dropbox.html#Dropbox.DropboxFolder
 * @author ktrist
 */
class DropboxFolder extends BaseValenceModel {

    /**
     * We categorize the various kinds of dropbox folders into types, and use the term DROPBOXTYPE_T to stand in for an appropriate integer value.
     */
    const DROPBOXTYPE_T = [
        "Group" => 1,
        "Individual" => 2
    ];

    /**
     * D2L Id of the Dropbox
     * @var Int
     */
    public $id;

    /**
     * D2L Id of the category this dropbox belongs to. Null if root category
     * @var Int | null
     */
    public $categoryId;

    /**
     * Plaintext human readable name
     * @var type
     */
    public $name;

    /**
     * Rich text instructions for the dropbox
     * @var Null|ValenceWrapper\Model\Basic\RichText;
     */
    public $customInstructions;

    /**
     * Array of blob file details attached to this dropbox
     * @var Array
     */
    public $attachments;

    /**
     * Total number of files submitted. Users can have multiple submissions in some cases
     * @var Int
     */
    public $totalFiles;

    /**
     * Number of files unread
     * @var Int
     */
    public $unreadFiles;

    /**
     * Number of files with flags
     * @var Int
     */
    public $flaggedFiles;

    /**
     * The total number of users who could potentially submit
     * @var Int
     */
    public $totalUsers;

    /**
     * Total number of users who have submitted
     * @var Int
     */
    public $totalUsersWithSubmissions;

    /**
     * Total number of users who have been given feedback
     * @var Int
     */
    public $totalUsersWithFeedback;

    /**
     * Array fo start and end dates for the Dropbox
     * @var Array
     */
    public $availability;

    /**
     * If the property is present and not null, the dropbox folder is a group-submission folder; otherwise, the dropbox folder is an individual-submission folder. If the property is present with a non-null value, it contains a D2LID for the group’s GroupCategoryId.
     * @var Int|Null
     */
    public $groupTypeId;

    /**
     * Due date of the dropbox
     * @var ValenceWrapper\Model\Basic\UtcDateTime | Null
     */
    public $dueDate;

    /**
     * Should the dropbox be displayed in the calendar
     * @var Bool
     */
    public $displayInCalendar;

    /**
     * Score and rubric information attached to the dropbox
     * @var Array
     */
    public $assessment;

    /**
     * email of the user/s who get email alerts upon submissions
     * @var String
     */
    public $notificationEmail;

    /**
     * Is the dropbox visible to users
     * @var Bool
     */
    public $isHidden;

    /**
     * Array of URL information attached to the dropbox
     * @var type
     */
    public $linkAttachments;

    /**
     *    If not null, identifies the underlying activity for this dropbox.
     * @var Null | Int
     */
    public $activityId;

    /**
     * Is the dropbox using anonymous marking
     * @var Bool
     */
    public $isAnonymous;

    /**
     * Is this a group or individual dropbox
     * @var String
     */
    public $dropboxType;

    /**
     * Type of submisison for the dropbox i.e. file
     * @var String
     */
    public $submissionType;

    /**
     * How is the Dropbox completed, i.e. due date, observed etc.
     * @var String
     */
    public $completionType;

    /**
     * Constructor for a dropbox object, takes an array of dropbox information
     * @param type $dropbox
     */
    public function __construct($dropbox) {
        $this->id = (!empty($dropbox["Id"])) ? $dropbox["Id"] : Null; //CAnnot be missing
        $this->categoryId = (!empty($dropbox["CategoryId"])) ? $dropbox["CategoryId"] : null;
        $this->name = (!empty($dropbox["Name"])) ? $dropbox["Name"] : "";
        $this->customInstructions = (!empty($dropbox["CustomInstructions"])) ? new RichText($dropbox["CustomInstructions"]) : new RichText();
        $this->attachments = (!empty($dropbox["Attachments"])) ? $this->setAttachments($dropbox["Attachments"]) : [];
        $this->totalFiles = (!empty($dropbox["TotalFiles"])) ? $dropbox["TotalFiles"] : 0;
        $this->unreadFiles = (!empty($dropbox["UnreadFiles"])) ? $dropbox["UnreadFiles"] : 0;
        $this->flaggedFiles = (!empty($dropbox["FlaggedFiles"])) ? $dropbox["FlaggedFiles"] : 0;
        $this->totalUsers = (!empty($dropbox["TotalUsers"])) ? $dropbox["TotalUsers"] : 0;
        $this->totalUsersWithSubmissions = (!empty($dropbox["TotalUsersWithSubmissions"])) ? $dropbox["TotalUsersWithSubmissions"] : 0;
        $this->totalUsersWithFeedback = (!empty($dropbox["TotalUsersWithFeedback"])) ? $dropbox["TotalUsersWithFeedback"] : 0;
        $this->availability = (!empty($dropbox["Availability"])) ? $this->setAvalibility($dropbox["Availability"]) : [];
        $this->groupTypeId = (!empty($dropbox["GroupTypeId"])) ? $dropbox["GroupTypeId"] : null;
        $this->dueDate = (!empty($dropbox["DueDate"])) ? new UtcDateTime($dropbox["DueDate"]) : null;
        $this->displayInCalendar = (!empty($dropbox["DisplayInCalendar"])) ? $dropbox["DisplayInCalendar"] : FALSE;
        $this->assessment = (!empty($dropbox["Assessment"])) ? $this->setAssesment($dropbox["Assessment"]) : [];
        $this->notificationEmail = (!empty($dropbox["NotificationEmail"])) ? $dropbox["NotificationEmail"] : NULL;
        $this->isHidden = (!empty($dropbox["IsHidden"])) ? $dropbox["IsHidden"] : FALSE;
        $this->linkAttachments = (!empty($dropbox["LinkAttachments"])) ? $this->linkAttachments($dropbox["LinkAttachments"]) : [];
        $this->activityId = (!empty($dropbox["ActivityId"])) ? $this->linkAttachments($dropbox["ActivityId"]) : null;
        $this->isAnonymous = (!empty($dropbox["IsAnonymous"])) ? $this->linkAttachments($dropbox["IsAnonymous"]) : null;
        $this->activityId = (!empty($dropbox["DropboxType"])) ? $this->linkAttachments($dropbox["DropboxType"]) : null;
        $this->submissionType = (!empty($dropbox["SubmissionType"])) ? $this->linkAttachments($dropbox["SubmissionType"]) : null;
        $this->completionType = (!empty($dropbox["CompletionType"])) ? $this->linkAttachments($dropbox["CompletionType"]) : null;
    }

    /**
     * Process an array of avalabilty into utc datetime objects
     * @param type $availability
     * @return Array
     */
    protected function setAvalibility($availability) {
        $availabilityArray = [
            "StartDate" => new UtcDateTime($availability["StartDate"]),
            "EndDate" => new UtcDateTime($availability["EndDate"])
        ];

        return $availabilityArray;
    }

    /**
     * Process an array of attahment files
     * @param type $attachments
     * @return type
     */
    protected function setAttachments($attachments) {

        $attachmentsArray = [
            "FileId" => $attachments["FileId"],
            "FileName" => $attachments["FileName"],
            "Size" => $attachments["Size"]
        ];
        return $attachmentsArray;
    }

    /**
     * process an array of url attachments
     * @param type $linkAttachments
     * @return Array
     */
    protected function setLinkAttachments($linkAttachments) {

        $linkAttachmentsArray = [
            "LinkId" => $linkAttachments["LinkId"],
            "LinkName" => $linkAttachments["LinkName"],
            "Href" => $linkAttachments["Href"]
        ];
        return $linkAttachmentsArray;
    }

    /**
     * Process the assessment or assessments attached to a dropbox
     * @param type $assesment
     * @return Array
     */
    protected function setAssesment($assesment) {

        $rubricArray = [];

        foreach ($assesment["Rubrics"] as $rubric) {
            $rubricArray[] = new Rubric($rubric);
        }

        $assessmentArray = [
            "ScoreDenominator" => ["ScoreDenominator"],
            "Rubrics" => $rubricArray
        ];

        return $assessmentArray;
    }

}

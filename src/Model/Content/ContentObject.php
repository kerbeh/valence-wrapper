<?php

namespace ValenceWrapper\Model\Content;

use ValenceWrapper\Model\BaseValenceModel;

/**
 * Create ContentObject
 *
 * @see http://docs.valence.desire2learn.com/res/content.html#Content.ContentObjectData
 */
class ContentObject extends BaseValenceModel {

    public $TopicType;
    public $Url;
    public $StartDate;
    public $EndDate;
    public $DueDate;
    //  public $IsHidden;
    //  public $IsLocked;
    //  public $OpenAsExternalResource;
    //  public $Id;
    public $Title;
    public $ShortTitle;
    public $Type;

    //public $Description = null;
    //  public $ParentModuleId;
    //  public $ActivityId;
    //  public $Duration;
    //  public $IsExempt;
    //  public $MajorUpdate;
    //  public $MajorUpdateText;
    // public $ResetCompletionTracking;

    public function __construct() {

    }

    protected function toDate($stringDate) {
        $date = strtotime($stringDate);
        return date('Y/m/d l h:i a', $date);
    }

}

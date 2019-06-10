<?php

namespace ValenceWrapper\Model\Content;

use Exception;
use ValenceWrapper\Model\BaseValenceModel;
use ValenceWrapper\Model\Content\ContentObject;

/**
 * Create or update a content topic
 *
 * @see http://docs.valence.desire2learn.com/res/content.html#Content.ContentObjectData
 */
class ContentObjectData extends BaseValenceModel {

    /**
     *
     * @param array $topic Array of new topic data
     */
    public function __construct(array $topic) {

        $this->Title = $topic['Title'];
        $this->ShortTitle = (!empty($topic['ShortTitle'])) ? $topic['ShortTitle'] : "";
        $this->Type = 1;
        $this->TopicType = $topic['TopicType'];
        $this->Url = (!empty($topic['Url'])) ? $topic['Url'] : NULL;

        $this->StartDate = (!empty($topic['StartDate'])) ? $topic['StartDate'] : NULL;
        $this->EndDate = (!empty($topic['EndDate'])) ? $topic['EndDate'] : NULL;
        $this->DueDate = (!empty($topic['DueDate'])) ? $topic['DueDate'] : NULL;

        $this->IsHidden = (!empty($topic['IsHidden'])) ? $topic['IsHidden'] : FALSE;
        $this->IsLocked = (!empty($topic['IsLocked'])) ? $topic['IsLocked'] : FALSE;

        $this->validate();
    }

    private function validate() {

        if (empty($this->Title) || is_string($this->Title) != true) {
            throw new Exception("Topic Title must be provided and must be a valid String");
        }

        if (empty($this->TopicType) || is_numeric($this->TopicType) == false) {
            throw new Exception("TopicType must be provided and must be a valid Int");
        }
    }

}

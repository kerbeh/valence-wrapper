<?php

namespace ValenceWrapper\Model\Content;

use LearningEnvironment\Model\ContentObject;

/**
 * Defines a D2L ContentObject of type Module
 *
 * @see http://docs.valence.desire2learn.com/res/content.html#Content.ContentObjectData
 */
class Topic extends ContentObject
{

    /**
     * //https://docs.valence.desire2learn.com/res/content.html?highlight=activitytype_t
     * Each topic type is identified by an integer.
     * Some commons Topic types are: 3 is url, 1 is file;
     * @var Integer
     */
    public $topicType;
    public $url;
    public $startDate;
    public $endDate;
    public $dueDate;
    public $openAsExternalResource;
    public $majorUpdate;
    public $majorUpdateText;
    public $resetCompletionTracking;

    public function __construct(array $topic)
    {

        $this->topicType = (!empty($topic['TopicType'])) ? $topic['TopicType'] : null;
        $this->url = (!empty($topic['Url'])) ? $topic['Url'] : null;
        $this->startDate = (!empty($topic['Startdate'])) ? $topic['TopicType'] : null;
        $this->endDate = (!empty($topic['EndDate'])) ? $topic['EndDate'] : null;
        $this->dueDate = (!empty($topic['DueDate'])) ? $topic['DueDate'] : null;
        $this->openAsExternalResource = (!empty($topic['OpenAsExternalResource'])) ? $topic['OpenAsExternalResource'] : null;
        $this->majorUpdate = (!empty($topic['MajorUpdate'])) ? $topic['MajorUpdate'] : null;
        $this->majorUpdateText = (!empty($topic['MajorUpdateText'])) ? $topic['MajorUpdateText'] : null;
        $this->resetCompletionTracking = (!empty($topic['ResetCompletionTracking'])) ? $topic['ResetCompletionTracking'] : null;

        $this->type = 1; //Set the type to "module"
    }

}

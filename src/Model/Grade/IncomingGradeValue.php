<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace ValenceWrapper\Model\Grade;

use ValenceWrapper\Model\Basic\RichTextInput;
use ValenceWrapper\Model\BaseValenceModel;

/**
 * As with grade objects, the framework handles incoming grade values slightly differently
 * depending upon the grade object type associated with the grade value
 *
 * @url https://docs.valence.desire2learn.com/res/grade.html#Grade.IncomingGradeValue
 * @author ktrist
 */
class IncomingGradeValue extends BaseValenceModel {

    /**
     * Cannot be null but can be empty
     * @var type
     */
    protected $comments;

    /**
     * Cannot be null but can be empty
     * @var type
     */
    protected $privateComments;

    public function __construct($incomingGradeValueNumeric) {

        /** To do move this if null in seperate setter functions * */
        if (!empty($incomingGradeValueNumeric["Comments"])) {
            $this->comments = $incomingGradeValueNumeric["Comments"];
        } else {
            $richTextInput = new RichTextInput("", "Text");
            $this->comments = $richTextInput->toArray();
        };

        if (!empty($incomingGradeValueNumeric["PrivateComments"])) {
            $this->privateComments = $incomingGradeValueNumeric["PrivateComments"];
        } else {
            $richTextInput = new RichTextInput("", "Text");
            $this->privateComments = $richTextInput->toArray();
        };
    }

    public function getComments() {
        return $this->comments;
    }

    public function getPrivateComments() {
        return $this->privateComments;
    }

    public function setComments(RichTextInput $comments) {
        $this->comments = $comments;
    }

    public function setPrivateComments(RichTextInput $privateComments) {
        $this->privateComments = $privateComments;
    }

}

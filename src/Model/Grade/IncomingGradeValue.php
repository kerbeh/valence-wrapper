<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace ValenceWrapper\Model\Grade;

use ValenceWrapper\Model\Basic\RichTextInput;

/**
 * As with grade objects, the framework handles incoming grade values slightly differently
 * depending upon the grade object type associated with the grade value
 *
 * @url https://docs.valence.desire2learn.com/res/grade.html#Grade.IncomingGradeValue
 * @author ktrist
 */
class IncomingGradeValue {

    protected $comments;
    protected $privateComments;

    public function __construct($incomingGradeValueNumeric) {
        $this->comments = (!empty($incomingGradeValueNumeric["Comments"])) ? $incomingGradeValueNumeric["Comments"] : new RichTextInput(null, null);
        $this->privateComments = (!empty($incomingGradeValueNumeric["PrivateComments"])) ? $incomingGradeValueNumeric["PrivateComments"] : new RichTextInput(null, null);
    }

    public function getComments() {
        return $this->comments;
    }

    public function getPrivateComments() {
        return $this->privateComments;
    }

    public function setComments($comments) {
        $this->comments = $comments;
    }

    public function setPrivateComments($privateComments) {
        $this->privateComments = $privateComments;
    }

}

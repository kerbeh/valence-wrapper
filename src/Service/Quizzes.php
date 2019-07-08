<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace ValenceWrapper\Service;

use GuzzleHttp\Psr7\Request;
use ValenceWrapper\ValenceVersion;

/**
 * Description of Grades
 *
 * @author ktrist
 */
Class Quizzes extends ValenceVersion {

    private $le_version = "unstable"; //This route is currently unstable

    public function __construct() {

    }

    /**
     * Get a list of all quizzes visible to the calling user context
     * @param type $orgUnitId
     * @return Request
     * @see ttps://docs.valence.desire2learn.com/res/quiz.html#get--d2l-api-le-(version)-(orgUnitId)-quizzes-
     */
    public function getQuizzesRequest($orgUnitId) {

        $uri = "/d2l/api/le/$this->le_version/$orgUnitId/quizzes/";
        return new Request('GET', $uri);
    }

}

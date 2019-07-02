<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace ValenceWrapper\Service;

use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use ValenceWrapper\Model\Content\ContentObjectData;
use ValenceWrapper\ValenceVersion;

/**
 * Description of Grades
 *
 * @author ktrist
 */
class Enrollments extends ValenceVersion {

    public function __construct() {

    }

    /**
     * @see Requesthttps://docs.valence.desire2learn.com/res/enroll.html#get--d2l-api-lp-(version)-enrollments-myenrollments-
     * @param type $bookmark
     * @param type $sortBy
     * @param type $startDateTime
     * @param type $endDateTime
     * @param type $canAccess
     * @param type $isActive
     * @param type $orgUnitTypeId
     * @return Request
     */
    public function getMyEnrollments($bookmark, $sortBy, $startDateTime, $endDateTime, $canAccess = True, $isActive = True, $orgUnitTypeId = 3) {

        $queryParrams = [
            "bookmark" => $bookmark,
            "sortBy" => $sortBy,
            "startDateTime" => $startDateTime,
            "endDateTime" => $endDateTime,
            "canAccess" => $canAccess,
            "isActive" => $isActive,
            "orgUnitTypeId" => $orgUnitTypeId,
        ];

        $queryString = http_build_query($queryParrams);

        $uri = "/d2l/api/lp/$this->lp_version/enrollments/myenrollments/?$queryString";

        return new Request('GET', $uri);
    }

}

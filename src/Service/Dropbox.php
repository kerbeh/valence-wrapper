<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace ValenceWrapper\Service;

use ValenceWrapper\Model\Grade\GradeValue;
use ValenceWrapper\ValenceInstance;
use ValenceWrapper\Model\User\User;
use ValenceWrapper\Model\Grade\IncomingGradeValueNumeric;
use ValenceWrapper\Model\Grade\GradeObjectNumeric;
use GuzzleHttp\Psr7\Request;

/**
 * Description of Grades
 *
 * @author ktrist
 */
Class Dropbox {

    protected $le_version;
    protected $valenceInstance;

    public function __construct(ValenceInstance $valenceInstance) {
        $this->valenceInstance = $valenceInstance;
        $this->le_version = $valenceInstance::le_version;
    }

    public function getSubmissionsRequest($orgUnitId, $folderId, $activeOnly = TRUE) {

        $uri = $this->valenceInstance->authenticateUri("/d2l/api/le/$this->le_version/$orgUnitId/dropbox/folders/$folderId/submissions/?activeOnly=$activeOnly", 'GET');
        return new Request('GET', $uri);
    }

}

<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace ValenceWrapper\Service;

use GuzzleHttp\Psr7\Request;
use ValenceWrapper\ValenceInstance;

/**
 * Description of Grades
 *
 * @author ktrist
 */
Class OrgUnit {

    const CourseOffering = 3;

    protected $lp_version;
    protected $valenceInstance;
    protected $types;

    public function __construct(ValenceInstance $valenceInstance) {
        $this->valenceInstance = $valenceInstance;
        $this->lp_version = $valenceInstance::lp_version;
    }

    /**
     * Return a psr7 request to retrieve all the known and visible org unit types.
     * @return Request
     */
    public function geOuTypesRequest() {

        $uri = $this->valenceInstance->authenticateUri("/d2l/api/lp/$this->lp_version/outypes/", 'GET');
        return new Request('GET', $uri);
    }

    public function getOrgStructureRequest($orgUnitType = 3, $orgUnitCode = null, $orgUnitName = null, $bookmark = null, $exactOrgUnitCode = null, $exactOrgUnitName = null) {

        $queryParrams = [
            'orgUnitType' => $orgUnitType,
            'orgUnitCode' => $orgUnitCode,
            'orgUnitName' => $orgUnitName,
            'bookmark' => $bookmark,
            'exactOrgUnitCode' => $exactOrgUnitCode,
            'exactOrgUnitName' => $exactOrgUnitName,
        ];

        $queryString = http_build_query($queryParrams);

        $uri = $this->valenceInstance->authenticateUri("/d2l/api/lp/$this->lp_version/orgstructure/?$queryString", 'GET');
        return new Request('GET', $uri);
    }

}

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
Class OrgUnit extends ValenceVersion {

    const CourseOffering = 3;

    protected $types;

    public function __construct() {

    }

    /**
     * Return a psr7 request to retrieve all the known and visible org unit types.
     * @return Request
     */
    public function getOuTypesRequest() {

        $uri = "/d2l/api/lp/$this->lp_version/outypes/";
        return new Request('GET', $uri);
    }

    /**
     * Query the Org Structure for a unit by name or code
     * https://docs.valence.desire2learn.com/res/orgunit.html#get--d2l-api-lp-(version)-orgstructure-
     * @param String $orgUnitCode
     * @param String $orgUnitName
     * @param Int $orgUnitType
     * @param Int $bookmark
     * @param String $exactOrgUnitCode
     * @param String $exactOrgUnitName
     * @return Request
     */
    public function getOrgStructureRequest($bookmark = null, $orgUnitCode = null, $orgUnitName = null, $exactOrgUnitCode = null, $exactOrgUnitName = null, $orgUnitType = 3) {


        $queryParrams = [
            'orgUnitType' => $orgUnitType,
            'orgUnitCode' => $orgUnitCode,
            'orgUnitName' => $orgUnitName,
            'bookmark' => $bookmark,
            'exactOrgUnitCode' => $exactOrgUnitCode,
            'exactOrgUnitName' => $exactOrgUnitName,
        ];

        $queryString = http_build_query($queryParrams);

        $uri = "/d2l/api/lp/$this->lp_version/orgstructure/?$queryString";
        return new Request('GET', $uri);
    }

}

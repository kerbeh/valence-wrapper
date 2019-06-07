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
        $this->le_version = $valenceInstance->le_version;
    }

    /**
     * Retrieve all the submissions for a specific dropbox folder.
     * activeOnly (boolean) Optional. Include only submissions from actively enrolled users.
     * @param Int $orgUnitId
     * @param Int $folderId
     * @param Bool $activeOnly Optional. Include only submissions from actively enrolled users.
     * @return Request
     * @see https://docs.valence.desire2learn.com/res/dropbox.html#get--d2l-api-le-(version)-(orgUnitId)-dropbox-folders-(folderId)-submissions-
     */
    public function getSubmissionsRequest($orgUnitId, $folderId, $activeOnly = TRUE) {

        $uri = $this->valenceInstance->authenticateUri("/d2l/api/le/$this->le_version/$orgUnitId/dropbox/folders/$folderId/submissions/?activeOnly=$activeOnly", 'GET');
        return new Request('GET', $uri);
    }

    /**
     * Retrieve all dropbox folders for an org unit.
     * $onlyCurrentStudentsAndGroups Optional. If true, show only currently enrolled students and active groups.
     * @param Int $orgUnitId
     * @param Int $folderId
     * @param Bool $onlyCurrentStudentsAndGroups Optional. If true, show only currently enrolled students and active groups.
     * @return Request
     * @see https://docs.valence.desire2learn.com/res/dropbox.html#get--d2l-api-le-(version)-(orgUnitId)-dropbox-folders-
     */
    public function getDropboxFoldersRequest($orgUnitId, $onlyCurrentStudentsAndGroups = TRUE) {
        $uri = $this->valenceInstance->authenticateUri("/d2l/api/le/$this->le_version/$orgUnitId/dropbox/folders/?onlyCurrentStudentsAndGroups=$onlyCurrentStudentsAndGroups", 'GET');
        return new Request('GET', $uri);
    }

    /**
     * Retrive a single dropbox by d2l id
     *
     * @param [type] $orgUnitId
     * @param [type] $folderId
     * @return Request
     * @see https://docs.valence.desire2learn.com/res/dropbox.html#get--d2l-api-le-(version)-(orgUnitId)-dropbox-folders-(folderId)
     *      */
    public function getDropboxFolderRequest($orgUnitId, $folderId) {
        $uri = $this->valenceInstance->authenticateUri("/d2l/api/le/$this->le_version/$orgUnitId/dropbox/folders/$folderId", 'GET');
        return new Request('GET', $uri);
    }

}
